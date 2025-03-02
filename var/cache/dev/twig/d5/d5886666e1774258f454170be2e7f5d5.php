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

/* reclamation/admin/index.html.twig */
class __TwigTemplate_d326d9d860da68c6ea676433bd71c2e1 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/admin/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reclamation/admin/index.html.twig", 1);
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

        yield "Gestion des Réclamations";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        .search-bar {
            margin-bottom: 20px;
        }
        .filters {
            margin-bottom: 20px;
            padding: 15px;
            background-color: #f8f9fa;
            border-radius: 5px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 21
        yield "    <div class=\"container-fluid mt-4\">
        <h1 class=\"mb-4\">Gestion des Réclamations</h1>

        <div class=\"filters\">
            <div class=\"row g-3\">
                <div class=\"col-md-4\">
                    <input type=\"text\" class=\"form-control\" id=\"searchQuery\" placeholder=\"Rechercher par nom, email ou message...\">
                </div>
                <div class=\"col-md-2\">
                    <select class=\"form-select\" id=\"statusFilter\">
                        <option value=\"\">Tous les statuts</option>
                        <option value=\"En attente\">En attente</option>
                        <option value=\"En cours\">En cours</option>
                        <option value=\"Traitée\">Traitée</option>
                    </select>
                </div>
                <div class=\"col-md-2\">
                    <select class=\"form-select\" id=\"priorityFilter\">
                        <option value=\"\">Toutes les priorités</option>
                        <option value=\"Urgente\">Urgente</option>
                        <option value=\"Haute\">Haute</option>
                        <option value=\"Moyenne\">Moyenne</option>
                        <option value=\"Basse\">Basse</option>
                    </select>
                </div>
            </div>
        </div>

        <div id=\"reclamationsTable\">
            ";
        // line 50
        yield Twig\Extension\CoreExtension::include($this->env, $context, "reclamation/admin/_reclamations_table.html.twig");
        yield "
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 55
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 56
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('searchQuery');
            const statusFilter = document.getElementById('statusFilter');
            const priorityFilter = document.getElementById('priorityFilter');
            const reclamationsTable = document.getElementById('reclamationsTable');
            let searchTimeout;

            function performSearch() {
                // Show loading state
                reclamationsTable.innerHTML = '<div class=\"text-center\"><div class=\"spinner-border text-primary\" role=\"status\"><span class=\"visually-hidden\">Chargement...</span></div></div>';

                // Build query parameters
                const params = new URLSearchParams({
                    q: searchInput.value,
                    status: statusFilter.value,
                    priority: priorityFilter.value
                });

                // Fetch results
                fetch(`";
        // line 77
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_admin_search");
        yield "?\${params.toString()}`)
                    .then(response => response.text())
                    .then(html => {
                        reclamationsTable.innerHTML = html;
                    })
                    .catch(error => {
                        console.error('Erreur lors de la recherche:', error);
                        reclamationsTable.innerHTML = `
                            <div class=\"alert alert-danger\" role=\"alert\">
                                Une erreur est survenue lors de la recherche. Veuillez réessayer.
                            </div>
                        `;
                    });
            }

            // Add event listeners with debounce for search
            searchInput.addEventListener('input', function() {
                clearTimeout(searchTimeout);
                searchTimeout = setTimeout(performSearch, 300);
            });

            // Add event listeners for filters
            statusFilter.addEventListener('change', performSearch);
            priorityFilter.addEventListener('change', performSearch);
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "reclamation/admin/index.html.twig";
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
        return array (  197 => 77,  172 => 56,  162 => 55,  150 => 50,  119 => 21,  109 => 20,  87 => 6,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des Réclamations{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .search-bar {
            margin-bottom: 20px;
        }
        .filters {
            margin-bottom: 20px;
            padding: 15px;
            background-color: #f8f9fa;
            border-radius: 5px;
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"container-fluid mt-4\">
        <h1 class=\"mb-4\">Gestion des Réclamations</h1>

        <div class=\"filters\">
            <div class=\"row g-3\">
                <div class=\"col-md-4\">
                    <input type=\"text\" class=\"form-control\" id=\"searchQuery\" placeholder=\"Rechercher par nom, email ou message...\">
                </div>
                <div class=\"col-md-2\">
                    <select class=\"form-select\" id=\"statusFilter\">
                        <option value=\"\">Tous les statuts</option>
                        <option value=\"En attente\">En attente</option>
                        <option value=\"En cours\">En cours</option>
                        <option value=\"Traitée\">Traitée</option>
                    </select>
                </div>
                <div class=\"col-md-2\">
                    <select class=\"form-select\" id=\"priorityFilter\">
                        <option value=\"\">Toutes les priorités</option>
                        <option value=\"Urgente\">Urgente</option>
                        <option value=\"Haute\">Haute</option>
                        <option value=\"Moyenne\">Moyenne</option>
                        <option value=\"Basse\">Basse</option>
                    </select>
                </div>
            </div>
        </div>

        <div id=\"reclamationsTable\">
            {{ include('reclamation/admin/_reclamations_table.html.twig') }}
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('searchQuery');
            const statusFilter = document.getElementById('statusFilter');
            const priorityFilter = document.getElementById('priorityFilter');
            const reclamationsTable = document.getElementById('reclamationsTable');
            let searchTimeout;

            function performSearch() {
                // Show loading state
                reclamationsTable.innerHTML = '<div class=\"text-center\"><div class=\"spinner-border text-primary\" role=\"status\"><span class=\"visually-hidden\">Chargement...</span></div></div>';

                // Build query parameters
                const params = new URLSearchParams({
                    q: searchInput.value,
                    status: statusFilter.value,
                    priority: priorityFilter.value
                });

                // Fetch results
                fetch(`{{ path('app_reclamation_admin_search') }}?\${params.toString()}`)
                    .then(response => response.text())
                    .then(html => {
                        reclamationsTable.innerHTML = html;
                    })
                    .catch(error => {
                        console.error('Erreur lors de la recherche:', error);
                        reclamationsTable.innerHTML = `
                            <div class=\"alert alert-danger\" role=\"alert\">
                                Une erreur est survenue lors de la recherche. Veuillez réessayer.
                            </div>
                        `;
                    });
            }

            // Add event listeners with debounce for search
            searchInput.addEventListener('input', function() {
                clearTimeout(searchTimeout);
                searchTimeout = setTimeout(performSearch, 300);
            });

            // Add event listeners for filters
            statusFilter.addEventListener('change', performSearch);
            priorityFilter.addEventListener('change', performSearch);
        });
    </script>
{% endblock %}
", "reclamation/admin/index.html.twig", "C:\\xampp\\htdocs\\Novalearn-reclamation\\templates\\reclamation\\admin\\index.html.twig");
    }
}
