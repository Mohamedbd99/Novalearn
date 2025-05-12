<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class TestMailerController extends AbstractController
{
    #[Route('/test-mailer', name: 'app_test_mailer')]
    public function testMailer(MailerInterface $mailer): Response
    {
        $email = (new Email())
            ->from('mohamedyassine.gharsallah@esen.tn')
            ->to('firaskhemir554@gmail.com')
            ->subject('Test Email')
            ->html('<p>This is a test email.</p>');

        try {
            $mailer->send($email);
            return new Response('✅ Test email sent successfully.');
        } catch (\Exception $e) {
            return new Response('❌ Error sending email: ' . $e->getMessage());
        }
    }
}
