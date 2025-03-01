<?php

namespace App\Controller;

use App\Entity\Commentaire;
use App\Entity\Post;
use App\Form\CommentaireType;
use App\Form\PostType;
use App\Repository\CommentaireRepository;
use App\Repository\PostRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

final class PostController extends AbstractController
{
    private UserRepository $userRepository;
    private CommentaireRepository $comRepository;
    private ParameterBagInterface $params;

    public function __construct(ParameterBagInterface $params, UserRepository $userRepository, CommentaireRepository $comRepository)
    {
        $this->userRepository = $userRepository;
        $this->comRepository = $comRepository;
        $this->params = $params;
    }

    #[Route('/post/add', name: 'app_post_add', methods: ['GET', 'POST'])]
    public function addPost(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $post = new Post();

        $user = $this->userRepository->findOneById(2);
        //
      //  $user = $this->getUser();  module user integrer

        if (!$user) {
            throw $this->createAccessDeniedException('Vous devez être connecté pour ajouter un post.');
        }

        $postForm = $this->createForm(PostType::class, $post);
        $postForm->handleRequest($request);

        if ($postForm->isSubmitted() && $postForm->isValid()) {
            $isAnonymous = $postForm->get('anonymous')->getData();
            $post->setUser($isAnonymous ? null : $user);

            $imageFile = $postForm->get('image')->getData();
            if ($imageFile) {
                $safeFilename = $slugger->slug(pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME));
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();

                try {
                    $imageFile->move($this->params->get('images_directory'), $newFilename);
                    $post->setImage($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Erreur lors de l\'upload de l\'image.');
                }
            }

            $entityManager->persist($post);
            $entityManager->flush();

            $this->addFlash('success', 'Post ajouté avec succès !');
            return $this->redirectToRoute('app_post_all');
        }

        return $this->render('post/add.html.twig', [
            'postForm' => $postForm->createView(),
        ]);
    }

    #[Route('/post/all', name: 'app_post_all')]
    public function listAllPosts(
        Request $request,
        PostRepository $postRepository,
        CommentaireRepository $comRepository,
        EntityManagerInterface $entityManager,
        PaginatorInterface $paginator
    ): Response {
        $query = $postRepository->createQueryBuilder('p')
            ->orderBy('p.createdAt', 'DESC')
            ->getQuery();

        $pagination = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            4
        );

        $postsWithComments = [];

        foreach ($pagination->getItems() as $post) {
            $commentaires = $comRepository->findBy(['post' => $post]);

            $commentaire = new Commentaire();
            $form = $this->createForm(CommentaireType::class, $commentaire);

            $postsWithComments[] = [
                'post' => $post,
                'commentaires' => $commentaires,
                'form' => $form->createView(),
            ];
        }

        return $this->render('post/index.html.twig', [
            'postsWithComments' => $postsWithComments,
            'pagination' => $pagination,
        ]);
    }

    #[Route('/post/{id}/comment', name: 'post_add_comment', methods: ['POST'])]
    public function addComment(
        int $id,
        Request $request,
        PostRepository $postRepository,
        EntityManagerInterface $entityManager
    ): JsonResponse {
        $data = $request->request->all();

        $post = $postRepository->find($id);
        if (!$post) {
            return new JsonResponse(['error' => 'Post introuvable'], 404);
        }

        $commentaire = new Commentaire();
        $commentaire->setContent($data['commentaire']['content']);
        $commentaire->setPost($post);
        $commentaire->setUser($this->userRepository->findOneById(2));
        $commentaire->setCreatedAt(new \DateTimeImmutable());

        $entityManager->persist($commentaire);
        $entityManager->flush();

        $avatarUrl = $this->getUser() && $this->getUser()->getAvatarUrl() ? $this->getUser()->getAvatarUrl() : '/front/images/avatar2.png';

        return new JsonResponse([
            'success' => true,
            'message' => 'Commentaire ajouté avec succès',
            'comment' => [
                'id' => $commentaire->getId(),
                'content' => $commentaire->getContent(),
                'username' => $commentaire->getUser() ? $commentaire->getUser()->getUsername() : 'Anonyme',
                'avatarUrl' => $avatarUrl,
                'createdAt' => $commentaire->getCreatedAt()->format('Y-m-d H:i:s'),
            ]
        ]);

    }





    #[Route('/post/delete/{id}', name: 'post_delete', methods: ['POST', 'DELETE'])]
    public function delete(int $id, EntityManagerInterface $entityManager, Request $request): Response
    {
        $post = $entityManager->getRepository(Post::class)->find($id);

        if (!$post) {
            throw $this->createNotFoundException('Post introuvable.');
        }

        if (!$this->isCsrfTokenValid('delete_post_' . $id, $request->request->get('_token'))) {
            $this->addFlash('error', 'Token CSRF invalide.');
            return $this->redirectToRoute('app_post_all');
        }

        $entityManager->remove($post);
        $entityManager->flush();

        $this->addFlash('success', 'Post supprimé avec succès !');
        return $this->redirectToRoute('app_post_all');
    }

    #[Route('/post/edit/{id}', name: 'post_edit')]
    public function update(int $id, Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $post = $entityManager->getRepository(Post::class)->find($id);
        if (!$post) {
            throw $this->createNotFoundException('Post introuvable.');
        }

        $oldImage = $post->getImage();
        $postForm = $this->createForm(PostType::class, $post);
        $postForm->handleRequest($request);

        if ($postForm->isSubmitted() && $postForm->isValid()) {
            $imageFile = $postForm->get('image')->getData();
            if ($imageFile) {
                $safeFilename = $slugger->slug(pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME));
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();

                try {
                    $imageFile->move($this->params->get('images_directory'), $newFilename);

                    if ($oldImage) {
                        $oldImagePath = $this->params->get('images_directory') . '/' . $oldImage;
                        if (file_exists($oldImagePath)) {
                            unlink($oldImagePath);
                        }
                    }

                    $post->setImage($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Erreur lors de l\'upload de l\'image.');
                }
            } else {
                $post->setImage($oldImage);
            }

            $entityManager->flush();

            $this->addFlash('success', 'Post mis à jour avec succès !');
            return $this->redirectToRoute('app_post_all');
        }

        return $this->render('post/add.html.twig', [
            'postForm' => $postForm->createView(),
            'post' => $post,
        ]);
    }
}
