<?php

namespace App\Controller;

use App\Entity\Commentaire;
use App\Entity\Post;
use App\Entity\User;
use App\Form\CommentaireType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\HttpFoundation\JsonResponse;

final class CommentaireController extends AbstractController{
    private $userRepository;
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    #[Route('/commentaire/all', name: 'app_commentaire')]
    public function index(): Response
    {
        return $this->render('commentaire/index.html.twig', [
            'controller_name' => 'CommentaireController',
        ]);
    }
    #[Route('/commentaire/add/{postId}', name: 'ajout_commentaire')]
    #[IsGranted('PUBLIC_ACCESS')]
    public function ajouterCommentaire(int $postId, Request $request, EntityManagerInterface $entityManager): Response
    {
        $post = $entityManager->getRepository(Post::class)->find($postId);

        if (!$post) {
            throw $this->createNotFoundException('Post introuvable.');
        }

        $commentaire = new Commentaire();
        $user = $this->userRepository->findOneById(2);  // Remplace ceci par l'utilisateur connecté

        $comForm = $this->createForm(CommentaireType::class, $commentaire, [
            'post' => $post
        ]);

        $comForm->handleRequest($request);
        if ($comForm->isSubmitted() && $comForm->isValid()) {
            // Vérifie que l'ID du post a bien été transmis
            $postIdFromForm = $comForm->get('post')->getData();
            if ($postIdFromForm != $post->getId()) {
                throw new \Exception('Erreur : ID du post incorrect');
            }

            $commentaire->setPost($post);
            $commentaire->setUser($user);

            $entityManager->persist($commentaire);
            $entityManager->flush();

            $this->addFlash('success', 'Commentaire ajouté avec succès !');

            return $this->redirectToRoute('app_commentaire', ['postId' => $postId]);
        }

        return $this->render('commentaire/add.html.twig', [
            'comForm' => $comForm->createView(),
            'post' => $post,
        ]);
    }
    #[Route('/comment/update/{id}', name: 'update_comment', methods: ['POST'])]
    public function updateComment(
        Request $request,
        Commentaire $commentaire,
        EntityManagerInterface $entityManager
    ): JsonResponse {
        $data = $request->request->all();

        // Mettre à jour le contenu du commentaire
        $commentaire->setContent($data['content']);
        $entityManager->flush();

        return new JsonResponse([
            'success' => true,
            'message' => 'Commentaire mis à jour avec succès',
            'comment' => [
                'id' => $commentaire->getId(),
                'content' => $commentaire->getContent(),
            ]
        ]);
    }
    #[Route('/comment/delete/{id}', name: 'delete_comment', methods: ['POST'])]
    public function deleteComment(
        Commentaire $commentaire,
        EntityManagerInterface $entityManager
    ): JsonResponse {

        // Supprimer le commentaire
        $entityManager->remove($commentaire);
        $entityManager->flush();

        return new JsonResponse([
            'success' => true,
            'message' => 'Commentaire supprimé avec succès',
            'commentId' => $commentaire->getId()
        ]);
    }
}
