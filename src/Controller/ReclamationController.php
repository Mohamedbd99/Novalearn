<?php
namespace App\Controller;

use App\Entity\Reclamation;
use App\Entity\Category;
use App\Form\ReclamationType;
use App\Repository\ReclamationRepository;
use App\Repository\CategoryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReclamationController extends AbstractController
{
    #[Route('/admin/reclamations/dashboard', name: 'admin_reclamations_dashboard')]
    public function dashboard(ReclamationRepository $reclamationRepository): Response
    {
        // Get detailed statistics
        $statistics = $reclamationRepository->getStatistics();
        
        return $this->render('Admin/Reclamation/dashboard.html.twig', [
            'statistics' => $statistics,
        ]);
    }
    #[Route('/admin/reclamations', name: 'admin_reclamations')]
    public function index(Request $request, ReclamationRepository $reclamationRepository, CategoryRepository $categoryRepository): Response
    {
        // Get search parameters
        $searchTerm = $request->query->get('search', '');
        $status = $request->query->get('status', '');
        $categoryId = $request->query->get('category', '');
        
        // Get sort parameters
        $sortField = $request->query->get('sort', 'createdAt');
        $sortDirection = $request->query->get('direction', 'DESC');
        
        // Build search criteria
        $criteria = [
            'term' => $searchTerm,
            'status' => $status
        ];
        
        // Add category if specified
        if (!empty($categoryId)) {
            $criteria['category'] = $categoryId;
        }
        
        // Set ordering
        $orderBy = [$sortField => $sortDirection];
        
        // Get filtered reclamations
        $reclamations = $reclamationRepository->findBySearchCriteria($criteria, $orderBy);
        
        // Get statistics for dashboard
        $statistics = $reclamationRepository->getStatistics();
        
        // Get distinct status values for the filter
        $statuses = $this->getDistinctStatuses($reclamationRepository);
        
        // Get categories for the filter
        $categories = $categoryRepository->findAll();
        
        return $this->render('Admin/Reclamation/index.html.twig', [
            'reclamations' => $reclamations,
            'searchTerm' => $searchTerm,
            'selectedStatus' => $status,
            'selectedCategory' => $categoryId,
            'sortField' => $sortField,
            'sortDirection' => $sortDirection,
            'statistics' => $statistics,
            'statuses' => $statuses,
            'categories' => $categories,
        ]);
    }
    
    /**
     * Get distinct status values
     */
    private function getDistinctStatuses(ReclamationRepository $repository): array
    {
        $result = $repository->createQueryBuilder('r')
            ->select('DISTINCT r.statut')
            ->getQuery()
            ->getScalarResult();
            
        return array_column($result, 'statut');
    }

    #[Route('/admin/reclamation/{id}/edit', name: 'admin_reclamation_edit')]
    public function edit($id, Request $request, ReclamationRepository $reclamationRepository, EntityManagerInterface $em): Response
    {
        $reclamation = $reclamationRepository->find($id);
        if (!$reclamation) {
            throw $this->createNotFoundException('Réclamation non trouvée');
        }
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            return $this->redirectToRoute('admin_reclamations');
        }
        return $this->render('Admin/Reclamation/edit.html.twig', [
            'form' => $form->createView(),
            'reclamation' => $reclamation,
        ]);
    }

    #[Route('/admin/reclamation/{id}/delete', name: 'admin_reclamation_delete')]
    public function delete($id, ReclamationRepository $reclamationRepository, EntityManagerInterface $em): Response
    {
        $reclamation = $reclamationRepository->find($id);
        if (!$reclamation) {
            throw $this->createNotFoundException('Réclamation non trouvée');
        }
        $em->remove($reclamation);
        $em->flush();
        return $this->redirectToRoute('admin_reclamations');
    }
}
