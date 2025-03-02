<?php

namespace App\Service;

use Knp\Snappy\Pdf;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class PdfService
{
    private $pdf;
    private $twig;

    public function __construct(Pdf $pdf, Environment $twig)
    {
        $this->pdf = $pdf;
        $this->twig = $twig;
    }

    public function generateReclamationPdf($reclamation): Response
    {
        // Générer le HTML
        $html = $this->twig->render('pdf/reclamation.html.twig', [
            'reclamation' => $reclamation
        ]);

        // Générer le PDF
        $pdf = $this->pdf->getOutputFromHtml($html);

        // Retourner la réponse
        $response = new Response($pdf);
        $response->headers->set('Content-Type', 'application/pdf');
        $response->headers->set('Content-Disposition', 
            'attachment; filename="reclamation-' . $reclamation->getId() . '.pdf"'
        );

        return $response;
    }
}
