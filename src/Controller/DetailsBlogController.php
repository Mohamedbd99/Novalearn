<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\BlogRepository;
use App\Entity\Blog;

final class DetailsBlogController extends AbstractController
{
    #[Route('/details_blog{id}', name: 'app_details_blog')]
    public function index(BlogRepository $blogRepository, int $id): Response
    {
        // Récupérer le blog depuis la base de données
        $blog = $blogRepository->find($id);

        // Vérifier si l'article existe
        if (!$blog) {
            throw $this->createNotFoundException('Article non trouvé.');
        }

        // Passer l'article à la vue
        return $this->render('detailsBlog.html.twig', [
            'blog' => $blog,
        ]);
    }
}

