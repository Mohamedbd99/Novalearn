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
        $blog = $blogRepository->find($id);

        if (!$blog) {
            throw $this->createNotFoundException('Article non trouvé.');
        }

        return $this->render('detailsBlog.html.twig', [
            'blog' => $blog,
        ]);
    }
}

