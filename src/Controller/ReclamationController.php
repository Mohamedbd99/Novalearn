<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Form\ReclamationType;
use App\Repository\ReclamationRepository;
use Doctrine\ORM\EntityManagerInterface;
<<<<<<< HEAD
=======
use Dompdf\Dompdf;
use Dompdf\Options;
use Knp\Component\Pager\PaginatorInterface;
>>>>>>> 50bad6b7 (projet)
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
<<<<<<< HEAD
=======
use App\Service\BadWordsFilter;
>>>>>>> 50bad6b7 (projet)

#[Route('/reclamation')]
class ReclamationController extends AbstractController
{
    #[Route('/new', name: 'app_reclamation_new', methods: ['GET', 'POST'])]
<<<<<<< HEAD
    public function new(Request $request, ReclamationRepository $reclamationRepository): Response
=======
    public function new(Request $request, EntityManagerInterface $entityManager): Response
>>>>>>> 50bad6b7 (projet)
    {
        $reclamation = new Reclamation();
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
<<<<<<< HEAD
            $reclamation->setStatut('En attente');
            $reclamationRepository->save($reclamation, true);

            $this->addFlash('success', 'Votre réclamation a été envoyée avec succès. Nous la traiterons dans les plus brefs délais.');
=======
            $reclamation->setCreatedAtValue(new \DateTime());
            $reclamation->setStatut('En attente');
            $entityManager->persist($reclamation);
            $entityManager->flush();

            // Stocker l'email en session
            $request->getSession()->set('user_email', $reclamation->getEmail());

            $this->addFlash('success', 'Votre réclamation a été envoyée avec succès.');
>>>>>>> 50bad6b7 (projet)
            return $this->redirectToRoute('app_reclamation_success', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reclamation/public/new.html.twig', [
            'form' => $form,
        ]);
    }

    #[Route('/success', name: 'app_reclamation_success', methods: ['GET'])]
    public function success(): Response
    {
        return $this->render('reclamation/public/success.html.twig');
    }

<<<<<<< HEAD
    #[Route('/reclamation/mes-reclamations', name: 'app_reclamation_mes_reclamations')]
    public function mesReclamations(Request $request, EntityManagerInterface $entityManager): Response
=======
    #[Route('/', name: 'app_reclamation_index', methods: ['GET'])]
    public function index(ReclamationRepository $reclamationRepository): Response
    {
        return $this->render('reclamation/index.html.twig', [
            'reclamations' => $reclamationRepository->findAllOrderedByPriority(),
        ]);
    }

    #[Route('/reclamation/mes-reclamations', name: 'app_reclamation_mes_reclamations')]
    public function mesReclamations(): Response
    {
        return $this->render('reclamation/public/mes_reclamations.html.twig', [
            'reclamations' => []
        ]);
    }

    #[Route('/reclamation/mes-reclamations-email', name: 'app_reclamation_mes_reclamations_email')]
    public function mesReclamationsWithEmail(Request $request, EntityManagerInterface $entityManager): Response
>>>>>>> 50bad6b7 (projet)
    {
        $email = $request->getSession()->get('user_email');
        
        if (!$email) {
            // If no email in session, ask for it
            if ($request->isMethod('POST')) {
                $email = $request->request->get('email');
                if ($email) {
                    $request->getSession()->set('user_email', $email);
                } else {
                    $this->addFlash('error', 'Veuillez fournir votre email.');
                    return $this->render('reclamation/public/email_form.html.twig');
                }
            } else {
                return $this->render('reclamation/public/email_form.html.twig');
            }
        }

        $reclamations = $entityManager
            ->getRepository(Reclamation::class)
            ->findBy(['email' => $email], ['createdAt' => 'DESC']);

        return $this->render('reclamation/public/mes_reclamations.html.twig', [
            'reclamations' => $reclamations,
            'email' => $email
        ]);
    }
<<<<<<< HEAD
}
=======

    #[Route('/export-pdf/{ids}', name: 'app_reclamation_export_pdf', methods: ['GET'])]
    public function exportPdf(Request $request, ReclamationRepository $reclamationRepository, ?string $ids = null): Response
    {
        $email = $request->getSession()->get('user_email');
        
        if (!$email) {
            $this->addFlash('error', 'Veuillez vous connecter pour exporter vos réclamations.');
            return $this->redirectToRoute('app_reclamation_mes_reclamations');
        }

        // Récupérer les réclamations sélectionnées ou toutes les réclamations
        if ($ids) {
            $idArray = explode(',', $ids);
            $reclamations = $reclamationRepository->findBy([
                'id' => $idArray,
                'email' => $email
            ], ['createdAt' => 'DESC']);
        } else {
            $reclamations = $reclamationRepository->findBy([
                'email' => $email
            ], ['createdAt' => 'DESC']);
        }

        // Générer le PDF
        $html = $this->renderView('pdf/reclamation.html.twig', [
            'reclamations' => $reclamations,
            'email' => $email,
            'date' => new \DateTime(),
            'company_name' => 'NovaLearn'
        ]);

        // Configuration de Dompdf
        $options = new Options();
        $options->set('isRemoteEnabled', true);
        $options->set('isHtml5ParserEnabled', true);
        $options->set('defaultFont', 'Arial');

        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        // Générer la réponse
        $response = new Response($dompdf->output());
        $response->headers->set('Content-Type', 'application/pdf');
        $response->headers->set('Content-Disposition', 'attachment;filename="mes-reclamations.pdf"');

        return $response;
    }

    #[Route('/reclamation/list', name: 'app_reclamation_list', methods: ['GET'])]
    public function list(Request $request, ReclamationRepository $reclamationRepository): Response
    {
        $email = $request->query->get('email');
        
        if (!$email) {
            return $this->json(['error' => 'Email is required'], 400);
        }

        $reclamations = $reclamationRepository->findByEmail($email);

        return $this->render('reclamation/public/_reclamations_list.html.twig', [
            'reclamations' => $reclamations
        ]);
    }

    #[Route('/admin/reclamation/', name: 'app_reclamation_admin_index', methods: ['GET'])]
    public function adminIndex(Request $request, PaginatorInterface $paginator, BadWordsFilter $badWordsFilter): Response
    {
        $queryBuilder = $this->getDoctrine()->getManager()
            ->getRepository(Reclamation::class)
            ->createQueryBuilder('r')
            ->orderBy('r.createdAt', 'DESC');

        $pagination = $paginator->paginate(
            $queryBuilder,
            $request->query->getInt('page', 1),
            5, // Nombre d'éléments par page
            [
                'defaultSortFieldName' => 'r.createdAt',
                'defaultSortDirection' => 'DESC',
                'pageParameterName' => 'page'
            ]
        );

        // Appliquer le filtre des gros mots sur les résultats paginés
        foreach ($pagination as $reclamation) {
            if ($message = $reclamation->getMessage()) {
                $reclamation->setMessage($badWordsFilter->filter($message));
            }
        }

        return $this->render('reclamation/admin/index.html.twig', [
            'pagination' => $pagination
        ]);
    }

    #[Route('/admin/search', name: 'admin_reclamation_search', methods: ['GET'])]
    public function adminSearch(Request $request, PaginatorInterface $paginator, BadWordsFilter $badWordsFilter): Response
    {
        $searchQuery = $request->query->get('q');
        $statusFilter = $request->query->get('status');
        $priorityFilter = $request->query->get('priority');

        $queryBuilder = $this->getDoctrine()->getManager()
            ->getRepository(Reclamation::class)
            ->createQueryBuilder('r')
            ->orderBy('r.createdAt', 'DESC');

        if ($searchQuery) {
            $queryBuilder->andWhere('r.email LIKE :search')
                ->setParameter('search', '%' . $searchQuery . '%');
        }

        if ($statusFilter) {
            $queryBuilder->andWhere('r.statut = :status')
                ->setParameter('status', $statusFilter);
        }

        if ($priorityFilter) {
            $queryBuilder->andWhere('r.priorite = :priority')
                ->setParameter('priority', $priorityFilter);
        }

        $pagination = $paginator->paginate(
            $queryBuilder,
            $request->query->getInt('page', 1),
            10,
            [
                'defaultSortFieldName' => 'r.createdAt',
                'defaultSortDirection' => 'DESC'
            ]
        );

        // Appliquer le filtre des gros mots sur les résultats paginés
        foreach ($pagination as $reclamation) {
            if ($message = $reclamation->getMessage()) {
                $reclamation->setMessage($badWordsFilter->filter($message));
            }
        }

        return $this->render('reclamation/admin/_reclamations_table.html.twig', [
            'reclamations' => $pagination
        ]);
    }
}
>>>>>>> 50bad6b7 (projet)
