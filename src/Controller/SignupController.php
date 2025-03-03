<?php
<<<<<<< HEAD
=======

>>>>>>> Gharsallah_Ali_Hamma
namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Form\FormParType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
<<<<<<< HEAD
=======
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
>>>>>>> Gharsallah_Ali_Hamma

class SignupController extends AbstractController
{
    #[Route('/signup', name: 'app_signup')]
<<<<<<< HEAD
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
=======
    public function signup(Request $request, EntityManagerInterface $entityManager, MailerInterface $mailer, UrlGeneratorInterface $router): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
        $id_fils = (int) $request->get('id_fils');
        $user->setIdFils($id_fils);

        if ($form->isSubmitted() && $form->isValid()) {

            // Pas de hachage du mot de passe, on garde la valeur entrée
            $user->setPassword($user->getPassword());

            // Générer un token de vérification unique
            $verificationToken = bin2hex(random_bytes(16));  // génère un token de 32 caractères
            $user->setVerificationToken($verificationToken);

            // Rendre l'utilisateur inactif jusqu'à ce que son email soit vérifié
            $user->setIsVerified(false);

            // Sauvegarder l'utilisateur sans activer son compte immédiatement
            $entityManager->persist($user);
            $entityManager->flush();

            // Envoi de l'email de vérification
            $verificationUrl = $router->generate('app_verify_email', ['token' => $verificationToken], UrlGeneratorInterface::ABSOLUTE_URL);
            $email = (new Email())
                ->from('mohamedyassine.gharsallah@esen.tn') // Remplace par ton adresse email
                ->to($user->getEmail())
                ->subject('Vérification de votre email pour finaliser l\'inscription')
                ->html("
                    <h1>Bonjour {$user->getNom()},</h1>
                    <p>Merci de vous être inscrit sur notre plateforme !</p>
                    <p>Veuillez cliquer sur le lien ci-dessous pour vérifier votre adresse email et finaliser votre inscription :</p>
                    <p>
                        <a href=\"{$verificationUrl}\">
                            Vérifiez votre email
                        </a>
                    </p>
                    <p>Si vous n'avez pas demandé cette inscription, veuillez ignorer cet email.</p>
                ");

            try {
                $mailer->send($email);
                $emailSent = true;  // L'email a été envoyé avec succès
                $this->addFlash('success', 'Un email de vérification vous a été envoyé.');
            } catch (\Exception $e) {
                // Si l'envoi échoue, capture l'exception et définit emailSent à false
                $emailSent = false;
                $this->addFlash('error', 'Erreur lors de l\'envoi de l\'email. Veuillez réessayer.');
            }

            // Passer la variable à la vue pour déclencher l'affichage de la popup
            return $this->render('Signup/enfant.html.twig', [
                'form' => $form->createView(),
                'email_sent' => $emailSent,  // Indique si l'email a été envoyé ou non
            ]);
        }

        return $this->render('Signup/enfant.html.twig', [
            'form' => $form->createView(),
            'email_sent' => false, // Indique que l'email n'a pas encore été envoyé
        ]);
    }

    // Route pour vérifier l'email
    #[Route('/verify-email/{token}', name: 'app_verify_email')]
    public function verifyEmail(string $token, EntityManagerInterface $entityManager, MailerInterface $mailer): Response
    {
        // Récupérer l'utilisateur à partir du token de vérification
        $user = $entityManager->getRepository(User::class)->findOneBy(['verificationToken' => $token]);

        if (!$user) {
            $this->addFlash('error', 'Utilisateur non trouvé ou lien de vérification invalide.');
            return $this->redirectToRoute('app_home');
        }

        // Valider l'utilisateur en définissant l'état 'isVerified' à true
        $user->setIsVerified(true);
        $user->setVerificationToken(null); // Supprimer le token une fois vérifié
        $entityManager->flush();

        // Envoi de l'email de bienvenue
        $email = (new Email())
            ->from('mohamedyassine.gharsallah@esen.tn') // Remplace par ton adresse email
            ->to($user->getEmail())
            ->subject('Bienvenue sur notre plateforme !')
            ->html("
                <h1>Bienvenue parmi nous, {$user->getNom()} !</h1>
                <p>Nous sommes ravis de vous accueillir.</p>
                <h3>Voici quelques informations sur votre compte :</h3>
                <ul>
                    <li><strong>ID :</strong> {$user->getId()}</li>
                    <li><strong>Email :</strong> {$user->getEmail()}</li>
                    <li><strong>Rôle :</strong> {$user->getRole()}</li>
                </ul>
                <p>Profitez de nos services dès maintenant !</p>
            ");

        $mailer->send($email);

        // Afficher un message de confirmation que l'email a été validé
        return $this->render('Signup/verified.html.twig', [
            'user' => $user,
>>>>>>> Gharsallah_Ali_Hamma
        ]);
    }

    #[Route('/signupPar', name: 'app_signupPar')]
<<<<<<< HEAD
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
=======
public function signupPar(Request $request, EntityManagerInterface $entityManager): Response
{
    $user = new User();
    $form = $this->createForm(FormParType::class, $user);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        // Assigner niv_difficulte à 1
        $user->setNivDifficulte(1);


        // Sauvegarde de l'utilisateur sans encodage du mot de passe
        $entityManager->persist($user);
        $entityManager->flush();

        // Rediriger vers la page de connexion ou une autre page appropriée
        return $this->redirectToRoute('app_home');
    }

    return $this->render('Signup/parents.html.twig', [
        'form' => $form->createView(),
    ]);
}

>>>>>>> Gharsallah_Ali_Hamma
}
