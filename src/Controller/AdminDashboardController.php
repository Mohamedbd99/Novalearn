<?php

namespace App\Controller;

use App\Repository\ReclamationRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminDashboardController extends AbstractController
{
    #[Route('/admin/dashboard', name: 'admin_dashboard')]
    public function index(ReclamationRepository $reclamationRepository, UserRepository $userRepository): Response
    {
        // Statistiques des réclamations
        $totalReclamations = $reclamationRepository->count([]);
        $urgentReclamations = $reclamationRepository->count(['priorite' => 'Urgente']);
        $pendingReclamations = $reclamationRepository->count(['statut' => 'En attente']);
        
        // Statistiques des utilisateurs
        $totalUsers = $userRepository->count([]);

        return $this->render('admin/dashboard/index.html.twig', [
            'stats' => [
                'total_reclamations' => $totalReclamations,
                'urgent_reclamations' => $urgentReclamations,
                'pending_reclamations' => $pendingReclamations,
                'total_users' => $totalUsers,
            ]
        ]);
    }
}
