<?php

namespace App\Controller\Admin;

use App\Entity\Reclamation;
use App\Repository\ReclamationRepository;
use App\Service\BadWordsFilter;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/reclamation')]
class ReclamationController extends AbstractController
{
    #[Route('/', name: 'admin_reclamation_index', methods: ['GET'])]
    public function index(
        Request $request,
        EntityManagerInterface $entityManager,
        PaginatorInterface $paginator,
        BadWordsFilter $badWordsFilter
    ): Response {
        $queryBuilder = $entityManager->getRepository(Reclamation::class)
            ->createQueryBuilder('r')
            ->orderBy('r.createdAt', 'DESC');

        // Appliquer les filtres
        if ($search = $request->query->get('search')) {
            $queryBuilder
                ->andWhere('r.nom LIKE :search OR r.email LIKE :search OR r.message LIKE :search')
                ->setParameter('search', '%' . $search . '%');
        }

        if ($status = $request->query->get('status')) {
            $queryBuilder
                ->andWhere('r.statut = :status')
                ->setParameter('status', $status);
        }

        if ($priority = $request->query->get('priority')) {
            $queryBuilder
                ->andWhere('r.priorite = :priority')
                ->setParameter('priority', $priority);
        }

        $pagination = $paginator->paginate(
            $queryBuilder,
            $request->query->getInt('page', 1),
            5, // Nombre d'éléments par page
            [
                'defaultSortFieldName' => 'r.createdAt',
                'defaultSortDirection' => 'DESC',
                'sortDirectionParameterName' => 'direction',
                'sortFieldParameterName' => 'sort',
                'pageParameterName' => 'page',
            ]
        );

        // Calculer les comptages d'emails
        $emailCounts = [];
        foreach ($pagination as $reclamation) {
            $email = $reclamation->getEmail();
            if (!isset($emailCounts[$email])) {
                $emailCounts[$email] = $entityManager->getRepository(Reclamation::class)
                    ->count(['email' => $email]);
            }

            // Filtrer les gros mots dans le message
            if ($message = $reclamation->getMessage()) {
                $reclamation->setMessage($badWordsFilter->filter($message));
            }
        }

        return $this->render('Admin/reclamation/index.html.twig', [
            'pagination' => $pagination,
            'emailCounts' => $emailCounts
        ]);
    }

    #[Route('/{id}', name: 'admin_reclamation_show', methods: ['GET'])]
    public function show(Reclamation $reclamation): Response
    {
        return $this->render('Admin/reclamation/show.html.twig', [
            'reclamation' => $reclamation
        ]);
    }

    #[Route('/{id}/edit', name: 'admin_reclamation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        // Logique d'édition à implémenter
        return $this->render('Admin/reclamation/edit.html.twig', [
            'reclamation' => $reclamation
        ]);
    }

    #[Route('/{id}', name: 'admin_reclamation_delete', methods: ['POST'])]
    public function delete(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reclamation->getId(), $request->request->get('_token'))) {
            $entityManager->remove($reclamation);
            $entityManager->flush();
            $this->addFlash('success', 'La réclamation a été supprimée avec succès.');
        }

        return $this->redirectToRoute('admin_reclamation_index');
    }
}
