<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Repository\ReclamationRepository;
use App\Service\BadWordsFilter;
use App\Service\PdfService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Knp\Component\Pager\PaginatorInterface;

#[Route('/admin/reclamation')]
class AdminReclamationController extends AbstractController
{
    #[Route('/', name: 'admin_reclamation_index', methods: ['GET'])]
    public function index(
        ReclamationRepository $reclamationRepository,
        BadWordsFilter $badWordsFilter,
        PaginatorInterface $paginator,
        Request $request
    ): Response {
        $query = $reclamationRepository->createQueryBuilder('r')
            ->orderBy('r.createdAt', 'DESC')
            ->getQuery();

        $pagination = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            10
        );

        $emailCounts = [];
        foreach ($reclamationRepository->countReclamationsByEmail() as $result) {
            $emailCounts[$result['email']] = $result['count'];
        }

        if ($request->isXmlHttpRequest()) {
            return $this->render('admin/reclamation/_reclamations_table.html.twig', [
                'pagination' => $pagination,
                'emailCounts' => $emailCounts,
                'badWordsFilter' => $badWordsFilter,
            ]);
        }

        return $this->render('admin/reclamation/index.html.twig', [
            'pagination' => $pagination,
            'emailCounts' => $emailCounts,
            'badWordsFilter' => $badWordsFilter,
        ]);
    }

    #[Route('/{id}', name: 'admin_reclamation_show', methods: ['GET'])]
    public function show(Reclamation $reclamation): Response
    {
        return $this->render('admin/reclamation/show.html.twig', [
            'reclamation' => $reclamation,
        ]);
    }

    #[Route('/{id}/edit', name: 'admin_reclamation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reclamation $reclamation, ReclamationRepository $reclamationRepository, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createFormBuilder($reclamation)
            ->add('statut', ChoiceType::class, [
                'choices' => [
                    'En attente' => 'En attente',
                    'En cours' => 'En cours',
                    'Traitée' => 'Traitée'
                ],
                'label' => 'Statut de la réclamation'
            ])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reclamationRepository->save($reclamation, true);
            $this->addFlash('success', 'Le statut de la réclamation a été mis à jour.');

            return $this->redirectToRoute('admin_reclamation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/reclamation/edit.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/delete', name: 'admin_reclamation_delete', methods: ['POST'])]
    public function delete(Request $request, Reclamation $reclamation, ReclamationRepository $reclamationRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reclamation->getId(), $request->request->get('_token'))) {
            $reclamationRepository->remove($reclamation, true);
            $this->addFlash('success', 'La réclamation a été supprimée.');
        }

        return $this->redirectToRoute('admin_reclamation_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/reclamation/{id}/pdf', name: 'app_reclamation_pdf')]
    public function generatePdf(Reclamation $reclamation, PdfService $pdfService): Response
    {
        return $pdfService->generateReclamationPdf($reclamation);
    }
}
