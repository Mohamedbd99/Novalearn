<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;
use Psr\Log\LoggerInterface;

class ChatbotService
{
    private $httpClient;
    private $apiKey;
    private $logger;

    public function __construct(HttpClientInterface $httpClient, string $apiKey, LoggerInterface $logger)
    {
        $this->httpClient = $httpClient;
        $this->apiKey = $apiKey;
        $this->logger = $logger;
    }

    public function getResponse(string $userMessage): string
    {
        try {
            $this->logger->info('Tentative de requête à l\'API OpenAI');

            $response = $this->httpClient->request('POST', 'https://api.openai.com/v1/chat/completions', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->apiKey,
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'model' => 'gpt-3.5-turbo',
                    'messages' => [
                        [
                            'role' => 'system',
                            'content' => "Tu es un assistant virtuel professionnel qui aide les utilisateurs à soumettre leurs réclamations. 
                            Voici les informations dont tu disposes :
                            - Les utilisateurs peuvent sélectionner une catégorie de réclamation
                            - Ils doivent fournir leur nom complet et leur adresse email
                            - Ils peuvent choisir un niveau de priorité : Basse, Moyenne, Haute ou Urgente
                            - Ils doivent décrire leur problème en détail
                            
                            Sois empathique, professionnel et concis dans tes réponses en français. Aide les utilisateurs à comprendre comment remplir correctement le formulaire."
                        ],
                        [
                            'role' => 'user',
                            'content' => $userMessage
                        ]
                    ],
                    'temperature' => 0.7,
                    'max_tokens' => 150
                ]
            ]);

            $statusCode = $response->getStatusCode();
            $this->logger->info('Réponse reçue', ['status' => $statusCode]);

            if ($statusCode === 200) {
                $data = $response->toArray();
                if (isset($data['choices'][0]['message']['content'])) {
                    return $data['choices'][0]['message']['content'];
                }
            }

            // Fallback vers des réponses prédéfinies en cas d'erreur
            $keywords = [
                'catégorie' => "La catégorie aide à classer votre réclamation et à la diriger vers le bon service. Choisissez celle qui correspond le mieux à votre situation.",
                'priorité' => "Le niveau de priorité détermine l'urgence de traitement :\n- Basse : pour les problèmes mineurs\n- Moyenne : pour les problèmes standards\n- Haute : pour les problèmes urgents\n- Urgente : pour les situations critiques",
                'email' => "Votre adresse email nous permet de vous tenir informé du suivi de votre réclamation.",
                'nom' => "Votre nom complet nous permet de vous identifier et de personnaliser notre réponse.",
                'problème' => "Décrivez votre problème en détail pour que nous puissions mieux comprendre votre situation et vous apporter la meilleure solution.",
                'importance' => "Les réclamations sont importantes car elles nous permettent d'améliorer nos services et de résoudre les problèmes que vous rencontrez.",
                'délai' => "Le délai de traitement dépend de la priorité de votre réclamation. Une réclamation urgente sera traitée plus rapidement.",
                'suivi' => "Vous recevrez des mises à jour par email sur l'avancement de votre réclamation.",
                'bonjour' => "Bonjour ! Je suis là pour vous aider avec votre réclamation. Que puis-je faire pour vous ?",
                'salut' => "Bonjour ! Je peux vous aider à remplir votre réclamation. Que souhaitez-vous savoir ?",
                'merci' => "Je vous en prie ! N'hésitez pas si vous avez d'autres questions."
            ];

            $userMessageLower = mb_strtolower($userMessage);
            foreach ($keywords as $keyword => $response) {
                if (str_contains($userMessageLower, $keyword)) {
                    return $response;
                }
            }

            return "Je suis là pour vous aider avec votre réclamation. Je peux vous renseigner sur les catégories, les niveaux de priorité, ou comment remplir le formulaire. Que souhaitez-vous savoir ?";

        } catch (\Exception $e) {
            $this->logger->error('Erreur lors de la requête', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);

            if (str_contains($e->getMessage(), '401')) {
                return "Erreur d'authentification : la clé API OpenAI n'est pas valide.";
            }

            // Réponse de secours en cas d'erreur
            return "Je suis là pour vous aider. Que souhaitez-vous savoir sur le formulaire de réclamation ?";
        }
    }
}
