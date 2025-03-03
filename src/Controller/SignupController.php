<?php
namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Form\FormParType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SignupController extends AbstractController
{
    #[Route('/signup', name: 'app_signup')]
    public function signup(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
    
        $form->handleRequest($request);
        $id_fils = (int) $request->get('id_fils');  // Convertir en entier
        $user->setIdFils($id_fils);
    
        if ($form->isSubmitted() && $form->isValid()) {
            // Enregistrer directement le mot de passe sans le hacher
            // On garde le mot de passe tel quel sans modification.
            
            // Ajouter un rôle par défaut si nécessaire
            if (!$user->getRole()) {
                $user->setRole('ROLE_USER');  // Exemple d'attribution de rôle par défaut
            }

            // Enregistrement de l'utilisateur dans la base de données
            $entityManager->persist($user);
            $entityManager->flush();
    
            return $this->redirectToRoute('app_signup');  // Ajuste la redirection si nécessaire
        }
    
        return $this->render('Signup/enfant.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/signupPar', name: 'app_signupPar')]
    public function signupPar(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $form = $this->createForm(FormParType::class, $user);

        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            // Enregistrer directement le mot de passe sans le hacher
            // On garde le mot de passe tel quel sans modification.
            
            // Ajouter un rôle par défaut si nécessaire
            if (!$user->getRole()) {
                $user->setRole('ROLE_USER');  // Exemple d'attribution de rôle par défaut
            }

            // Enregistrement de l'utilisateur dans la base de données
            $entityManager->persist($user);  
            $entityManager->flush();
    
            return $this->redirectToRoute('app_signupPar');  // Ajuste la redirection si nécessaire
        }
    
        return $this->render('Signup/parents.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
