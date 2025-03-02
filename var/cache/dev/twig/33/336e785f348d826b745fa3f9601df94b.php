<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* user_stories/index.html.twig */
class __TwigTemplate_6f0d072c309b75c59e8df4638a8bb389 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user_stories/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user_stories/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "User Stories - Gestion des Réclamations";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <div class=\"container mt-4\">
        <h1 class=\"text-center mb-4\">User Stories - Gestion des Réclamations</h1>
        <div class=\"table-responsive\">
            <table class=\"table table-striped table-hover\">
                <thead class=\"table-primary\">
                    <tr>
                        <th>User Story ID</th>
                        <th>User Story</th>
                        <th>Tâches</th>
                        <th>Priorité</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>US-001</td>
                        <td>En tant qu'utilisateur, je souhaite créer une nouvelle réclamation pour signaler un problème.</td>
                        <td>
                            <ul class=\"list-unstyled mb-0\">
                                <li><i class=\"fas fa-check text-primary me-2\"></i>Créer le formulaire de réclamation</li>
                                <li><i class=\"fas fa-check text-primary me-2\"></i>Implémenter la validation des champs</li>
                                <li><i class=\"fas fa-check text-primary me-2\"></i>Enregistrer la réclamation en base de données</li>
                            </ul>
                        </td>
                        <td><span class=\"badge bg-danger\">Haute</span></td>
                    </tr>
                    <tr>
                        <td>US-002</td>
                        <td>En tant qu'utilisateur, je veux consulter la liste de mes réclamations pour suivre leur état.</td>
                        <td>
                            <ul class=\"list-unstyled mb-0\">
                                <li><i class=\"fas fa-check text-primary me-2\"></i>Développer l'interface de liste</li>
                                <li><i class=\"fas fa-check text-primary me-2\"></i>Afficher les détails de chaque réclamation</li>
                                <li><i class=\"fas fa-check text-primary me-2\"></i>Implémenter le filtrage par statut</li>
                            </ul>
                        </td>
                        <td><span class=\"badge bg-danger\">Haute</span></td>
                    </tr>
                    <tr>
                        <td>US-003</td>
                        <td>En tant qu'utilisateur, je souhaite pouvoir modifier ma réclamation tant qu'elle n'est pas traitée.</td>
                        <td>
                            <ul class=\"list-unstyled mb-0\">
                                <li><i class=\"fas fa-check text-primary me-2\"></i>Créer l'interface de modification</li>
                                <li><i class=\"fas fa-check text-primary me-2\"></i>Implémenter la validation des modifications</li>
                                <li><i class=\"fas fa-check text-primary me-2\"></i>Gérer les restrictions selon le statut</li>
                            </ul>
                        </td>
                        <td><span class=\"badge bg-warning\">Moyenne</span></td>
                    </tr>
                    <tr>
                        <td>US-004</td>
                        <td>En tant qu'utilisateur, je veux pouvoir exporter mes réclamations en PDF.</td>
                        <td>
                            <ul class=\"list-unstyled mb-0\">
                                <li><i class=\"fas fa-check text-primary me-2\"></i>Développer la génération de PDF</li>
                                <li><i class=\"fas fa-check text-primary me-2\"></i>Créer un template PDF professionnel</li>
                                <li><i class=\"fas fa-check text-primary me-2\"></i>Permettre la sélection des réclamations</li>
                            </ul>
                        </td>
                        <td><span class=\"badge bg-warning\">Moyenne</span></td>
                    </tr>
                    <tr>
                        <td>US-005</td>
                        <td>En tant qu'administrateur, je veux pouvoir gérer les catégories de réclamations.</td>
                        <td>
                            <ul class=\"list-unstyled mb-0\">
                                <li><i class=\"fas fa-check text-primary me-2\"></i>Créer l'interface de gestion des catégories</li>
                                <li><i class=\"fas fa-check text-primary me-2\"></i>Implémenter l'ajout/modification/suppression</li>
                                <li><i class=\"fas fa-check text-primary me-2\"></i>Valider l'utilisation des catégories</li>
                            </ul>
                        </td>
                        <td><span class=\"badge bg-danger\">Haute</span></td>
                    </tr>
                    <tr>
                        <td>US-006</td>
                        <td>En tant qu'administrateur, je souhaite pouvoir changer le statut des réclamations.</td>
                        <td>
                            <ul class=\"list-unstyled mb-0\">
                                <li><i class=\"fas fa-check text-primary me-2\"></i>Développer l'interface de gestion des statuts</li>
                                <li><i class=\"fas fa-check text-primary me-2\"></i>Implémenter la mise à jour des statuts</li>
                                <li><i class=\"fas fa-check text-primary me-2\"></i>Envoyer des notifications de changement</li>
                            </ul>
                        </td>
                        <td><span class=\"badge bg-danger\">Haute</span></td>
                    </tr>
                    <tr>
                        <td>US-007</td>
                        <td>En tant qu'utilisateur, je veux recevoir des notifications sur l'évolution de mes réclamations.</td>
                        <td>
                            <ul class=\"list-unstyled mb-0\">
                                <li><i class=\"fas fa-check text-primary me-2\"></i>Implémenter le système de notifications</li>
                                <li><i class=\"fas fa-check text-primary me-2\"></i>Configurer l'envoi d'emails</li>
                                <li><i class=\"fas fa-check text-primary me-2\"></i>Gérer les préférences de notification</li>
                            </ul>
                        </td>
                        <td><span class=\"badge bg-warning\">Moyenne</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "user_stories/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}User Stories - Gestion des Réclamations{% endblock %}

{% block body %}
    <div class=\"container mt-4\">
        <h1 class=\"text-center mb-4\">User Stories - Gestion des Réclamations</h1>
        <div class=\"table-responsive\">
            <table class=\"table table-striped table-hover\">
                <thead class=\"table-primary\">
                    <tr>
                        <th>User Story ID</th>
                        <th>User Story</th>
                        <th>Tâches</th>
                        <th>Priorité</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>US-001</td>
                        <td>En tant qu'utilisateur, je souhaite créer une nouvelle réclamation pour signaler un problème.</td>
                        <td>
                            <ul class=\"list-unstyled mb-0\">
                                <li><i class=\"fas fa-check text-primary me-2\"></i>Créer le formulaire de réclamation</li>
                                <li><i class=\"fas fa-check text-primary me-2\"></i>Implémenter la validation des champs</li>
                                <li><i class=\"fas fa-check text-primary me-2\"></i>Enregistrer la réclamation en base de données</li>
                            </ul>
                        </td>
                        <td><span class=\"badge bg-danger\">Haute</span></td>
                    </tr>
                    <tr>
                        <td>US-002</td>
                        <td>En tant qu'utilisateur, je veux consulter la liste de mes réclamations pour suivre leur état.</td>
                        <td>
                            <ul class=\"list-unstyled mb-0\">
                                <li><i class=\"fas fa-check text-primary me-2\"></i>Développer l'interface de liste</li>
                                <li><i class=\"fas fa-check text-primary me-2\"></i>Afficher les détails de chaque réclamation</li>
                                <li><i class=\"fas fa-check text-primary me-2\"></i>Implémenter le filtrage par statut</li>
                            </ul>
                        </td>
                        <td><span class=\"badge bg-danger\">Haute</span></td>
                    </tr>
                    <tr>
                        <td>US-003</td>
                        <td>En tant qu'utilisateur, je souhaite pouvoir modifier ma réclamation tant qu'elle n'est pas traitée.</td>
                        <td>
                            <ul class=\"list-unstyled mb-0\">
                                <li><i class=\"fas fa-check text-primary me-2\"></i>Créer l'interface de modification</li>
                                <li><i class=\"fas fa-check text-primary me-2\"></i>Implémenter la validation des modifications</li>
                                <li><i class=\"fas fa-check text-primary me-2\"></i>Gérer les restrictions selon le statut</li>
                            </ul>
                        </td>
                        <td><span class=\"badge bg-warning\">Moyenne</span></td>
                    </tr>
                    <tr>
                        <td>US-004</td>
                        <td>En tant qu'utilisateur, je veux pouvoir exporter mes réclamations en PDF.</td>
                        <td>
                            <ul class=\"list-unstyled mb-0\">
                                <li><i class=\"fas fa-check text-primary me-2\"></i>Développer la génération de PDF</li>
                                <li><i class=\"fas fa-check text-primary me-2\"></i>Créer un template PDF professionnel</li>
                                <li><i class=\"fas fa-check text-primary me-2\"></i>Permettre la sélection des réclamations</li>
                            </ul>
                        </td>
                        <td><span class=\"badge bg-warning\">Moyenne</span></td>
                    </tr>
                    <tr>
                        <td>US-005</td>
                        <td>En tant qu'administrateur, je veux pouvoir gérer les catégories de réclamations.</td>
                        <td>
                            <ul class=\"list-unstyled mb-0\">
                                <li><i class=\"fas fa-check text-primary me-2\"></i>Créer l'interface de gestion des catégories</li>
                                <li><i class=\"fas fa-check text-primary me-2\"></i>Implémenter l'ajout/modification/suppression</li>
                                <li><i class=\"fas fa-check text-primary me-2\"></i>Valider l'utilisation des catégories</li>
                            </ul>
                        </td>
                        <td><span class=\"badge bg-danger\">Haute</span></td>
                    </tr>
                    <tr>
                        <td>US-006</td>
                        <td>En tant qu'administrateur, je souhaite pouvoir changer le statut des réclamations.</td>
                        <td>
                            <ul class=\"list-unstyled mb-0\">
                                <li><i class=\"fas fa-check text-primary me-2\"></i>Développer l'interface de gestion des statuts</li>
                                <li><i class=\"fas fa-check text-primary me-2\"></i>Implémenter la mise à jour des statuts</li>
                                <li><i class=\"fas fa-check text-primary me-2\"></i>Envoyer des notifications de changement</li>
                            </ul>
                        </td>
                        <td><span class=\"badge bg-danger\">Haute</span></td>
                    </tr>
                    <tr>
                        <td>US-007</td>
                        <td>En tant qu'utilisateur, je veux recevoir des notifications sur l'évolution de mes réclamations.</td>
                        <td>
                            <ul class=\"list-unstyled mb-0\">
                                <li><i class=\"fas fa-check text-primary me-2\"></i>Implémenter le système de notifications</li>
                                <li><i class=\"fas fa-check text-primary me-2\"></i>Configurer l'envoi d'emails</li>
                                <li><i class=\"fas fa-check text-primary me-2\"></i>Gérer les préférences de notification</li>
                            </ul>
                        </td>
                        <td><span class=\"badge bg-warning\">Moyenne</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
{% endblock %}
", "user_stories/index.html.twig", "C:\\xampp\\htdocs\\Novalearn-reclamation\\templates\\user_stories\\index.html.twig");
    }
}
