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

/* reclamation/index.html.twig */
class __TwigTemplate_f8a9f4190e68d9695cda816cc1d28db2 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reclamation/index.html.twig", 1);
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

        yield "Mes Réclamations";
        
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
        .reclamation-filters {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .reclamation-card {
            border: none;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,.05);
            margin-bottom: 20px;
            transition: transform 0.2s;
        }

        .reclamation-card:hover {
            transform: translateY(-2px);
        }

        .status-badge {
            font-size: 0.875rem;
            padding: 0.5em 1em;
            border-radius: 20px;
        }

        .priority-indicator {
            width: 8px;
            height: 100%;
            position: absolute;
            left: 0;
            top: 0;
            border-radius: 8px 0 0 8px;
        }

        .priority-urgent { background-color: #dc3545; }
        .priority-high { background-color: #ffc107; }
        .priority-medium { background-color: #0dcaf0; }
        .priority-low { background-color: #198754; }

        .reclamation-date {
            font-size: 0.875rem;
            color: #6c757d;
        }

        .reclamation-message {
            color: #495057;
            margin: 10px 0;
        }

        .empty-state {
            text-align: center;
            padding: 40px 20px;
            background: #f8f9fa;
            border-radius: 8px;
            margin: 20px 0;
        }

        .empty-state i {
            font-size: 48px;
            color: #adb5bd;
            margin-bottom: 20px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 73
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 74
        yield "    <div class=\"container mt-5\">
        <div class=\"d-flex justify-content-between align-items-center mb-4\">
            <h1 class=\"h2\">Mes Réclamations</h1>
            <a href=\"";
        // line 77
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_new");
        yield "\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus\"></i> Nouvelle Réclamation
            </a>
        </div>

        <div class=\"reclamation-filters\">
            <form id=\"filterForm\" class=\"row g-3\">
                <div class=\"col-md-12 mb-3\">
                    <input type=\"text\" class=\"form-control\" id=\"searchQuery\" placeholder=\"Rechercher par sujet, description ou email...\">
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label\">Statut</label>
                    <select class=\"form-select\" id=\"statusFilter\">
                        <option value=\"\">Tous les statuts</option>
                        <option value=\"En attente\">En attente</option>
                        <option value=\"En cours\">En cours</option>
                        <option value=\"Traitée\">Traitée</option>
                    </select>
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label\">Priorité</label>
                    <select class=\"form-select\" id=\"priorityFilter\">
                        <option value=\"\">Toutes les priorités</option>
                        <option value=\"Urgente\">Urgente</option>
                        <option value=\"Haute\">Haute</option>
                        <option value=\"Moyenne\">Moyenne</option>
                        <option value=\"Basse\">Basse</option>
                    </select>
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label\">Catégorie</label>
                    <select class=\"form-select\" id=\"categoryFilter\">
                        <option value=\"\">Toutes les catégories</option>
                        ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 110, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 111
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 111), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 111), "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        yield "                    </select>
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label\">Trier par</label>
                    <select class=\"form-select\" id=\"sortFilter\">
                        <option value=\"date-desc\">Plus récent</option>
                        <option value=\"date-asc\">Plus ancien</option>
                        <option value=\"priority-high\">Priorité (haute à basse)</option>
                        <option value=\"priority-low\">Priorité (basse à haute)</option>
                    </select>
                </div>
            </form>
        </div>

        <div id=\"reclamationsList\">
            ";
        // line 128
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 128, $this->source); })()))) {
            // line 129
            yield "                <div class=\"empty-state\">
                    <i class=\"fas fa-inbox\"></i>
                    <h3>Aucune réclamation</h3>
                    <p class=\"text-muted\">Vous n'avez pas encore soumis de réclamation.</p>
                    <a href=\"";
            // line 133
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_new");
            yield "\" class=\"btn btn-primary\">
                        Soumettre une réclamation
                    </a>
                </div>
            ";
        } else {
            // line 138
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 138, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
                // line 139
                yield "                    <div class=\"col-12 reclamation-item\" 
                         data-status=\"";
                // line 140
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "statut", [], "any", false, false, false, 140), "html", null, true);
                yield "\"
                         data-priority=\"";
                // line 141
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "priorite", [], "any", false, false, false, 141), "html", null, true);
                yield "\"
                         data-category=\"";
                // line 142
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "category", [], "any", false, false, false, 142), "id", [], "any", false, false, false, 142), "html", null, true);
                yield "\"
                         data-date=\"";
                // line 143
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "createdAt", [], "any", false, false, false, 143), "Y-m-d H:i:s"), "html", null, true);
                yield "\">
                        <div class=\"card reclamation-card\">
                            <div class=\"priority-indicator priority-";
                // line 145
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "priorite", [], "any", false, false, false, 145)), "html", null, true);
                yield "\"></div>
                            <div class=\"card-body\">
                                <div class=\"d-flex justify-content-between align-items-start\">
                                    <div>
                                        <h5 class=\"card-title\">";
                // line 149
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "category", [], "any", false, false, false, 149), "name", [], "any", false, false, false, 149), "html", null, true);
                yield "</h5>
                                        <div class=\"reclamation-date\">
                                            <i class=\"far fa-calendar-alt\"></i>
                                            ";
                // line 152
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "createdAt", [], "any", false, false, false, 152), "d/m/Y H:i"), "html", null, true);
                yield "
                                        </div>
                                    </div>
                                    <div class=\"d-flex gap-2\">
                                        <span class=\"badge status-badge bg-";
                // line 156
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "statut", [], "any", false, false, false, 156) == "En attente")) ? ("warning") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "statut", [], "any", false, false, false, 156) == "En cours")) ? ("info") : ("success"))));
                yield "\">
                                            ";
                // line 157
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "statut", [], "any", false, false, false, 157), "html", null, true);
                yield "
                                        </span>
                                        <span class=\"badge status-badge bg-";
                // line 159
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "priorite", [], "any", false, false, false, 159) == "Urgente")) ? ("danger") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "priorite", [], "any", false, false, false, 159) == "Haute")) ? ("warning") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "priorite", [], "any", false, false, false, 159) == "Moyenne")) ? ("info") : ("success"))))));
                yield "\">
                                            ";
                // line 160
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "priorite", [], "any", false, false, false, 160), "html", null, true);
                yield "
                                        </span>
                                    </div>
                                </div>
                                
                                <p class=\"reclamation-message\">";
                // line 165
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "message", [], "any", false, false, false, 165), "html", null, true);
                yield "</p>
                                
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div class=\"btn-group\">
                                        <a href=\"";
                // line 169
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 169)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-primary\">
                                            <i class=\"fas fa-eye\"></i> Voir détails
                                        </a>
                                        ";
                // line 172
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "statut", [], "any", false, false, false, 172) == "En attente")) {
                    // line 173
                    yield "                                            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 173)]), "html", null, true);
                    yield "\" class=\"btn btn-sm btn-outline-secondary\">
                                                <i class=\"fas fa-edit\"></i> Modifier
                                            </a>
                                        ";
                }
                // line 177
                yield "                                    </div>
                                    ";
                // line 178
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "reponses", [], "any", false, false, false, 178)) > 0)) {
                    // line 179
                    yield "                                        <span class=\"badge bg-primary\">
                                            <i class=\"fas fa-comments\"></i> ";
                    // line 180
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "reponses", [], "any", false, false, false, 180)), "html", null, true);
                    yield " réponse(s)
                                        </span>
                                    ";
                }
                // line 183
                yield "                                </div>
                            </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['reclamation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 188
            yield "            ";
        }
        // line 189
        yield "        </div>

        <div class=\"d-flex justify-content-center mt-4\">
            ";
        // line 192
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 192, $this->source); })()));
        yield "
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 197
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 198
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const filterForm = document.getElementById('filterForm');
            const reclamationsList = document.getElementById('reclamationsList');
            const searchInput = document.getElementById('searchQuery');
            let searchTimeout;

            function performSearch() {
                const status = document.getElementById('statusFilter').value;
                const priority = document.getElementById('priorityFilter').value;
                const category = document.getElementById('categoryFilter').value;
                const sort = document.getElementById('sortFilter').value;
                const query = searchInput.value;

                // Show loading state
                reclamationsList.innerHTML = '<div class=\"col-12 text-center\"><div class=\"spinner-border text-primary\" role=\"status\"><span class=\"visually-hidden\">Chargement...</span></div></div>';

                // Build query string
                const params = new URLSearchParams({
                    status: status,
                    priority: priority,
                    category: category,
                    sort: sort,
                    q: query
                });

                // Fetch results
                fetch(`";
        // line 226
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_admin_search");
        yield "?\${params.toString()}`)
                    .then(response => response.text())
                    .then(html => {
                        reclamationsList.innerHTML = html;
                    })
                    .catch(error => {
                        console.error('Erreur lors de la recherche:', error);
                        reclamationsList.innerHTML = `
                            <div class=\"col-12\">
                                <div class=\"alert alert-danger\" role=\"alert\">
                                    Une erreur est survenue lors de la recherche. Veuillez réessayer.
                                </div>
                            </div>
                        `;
                    });
            }

            // Add event listeners
            searchInput.addEventListener('input', function() {
                clearTimeout(searchTimeout);
                searchTimeout = setTimeout(performSearch, 300);
            });

            document.getElementById('statusFilter').addEventListener('change', performSearch);
            document.getElementById('priorityFilter').addEventListener('change', performSearch);
            document.getElementById('categoryFilter').addEventListener('change', performSearch);
            document.getElementById('sortFilter').addEventListener('change', performSearch);
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
        return "reclamation/index.html.twig";
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
        return array (  436 => 226,  404 => 198,  394 => 197,  382 => 192,  377 => 189,  374 => 188,  364 => 183,  358 => 180,  355 => 179,  353 => 178,  350 => 177,  342 => 173,  340 => 172,  334 => 169,  327 => 165,  319 => 160,  315 => 159,  310 => 157,  306 => 156,  299 => 152,  293 => 149,  286 => 145,  281 => 143,  277 => 142,  273 => 141,  269 => 140,  266 => 139,  261 => 138,  253 => 133,  247 => 129,  245 => 128,  228 => 113,  217 => 111,  213 => 110,  177 => 77,  172 => 74,  162 => 73,  87 => 6,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mes Réclamations{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .reclamation-filters {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .reclamation-card {
            border: none;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,.05);
            margin-bottom: 20px;
            transition: transform 0.2s;
        }

        .reclamation-card:hover {
            transform: translateY(-2px);
        }

        .status-badge {
            font-size: 0.875rem;
            padding: 0.5em 1em;
            border-radius: 20px;
        }

        .priority-indicator {
            width: 8px;
            height: 100%;
            position: absolute;
            left: 0;
            top: 0;
            border-radius: 8px 0 0 8px;
        }

        .priority-urgent { background-color: #dc3545; }
        .priority-high { background-color: #ffc107; }
        .priority-medium { background-color: #0dcaf0; }
        .priority-low { background-color: #198754; }

        .reclamation-date {
            font-size: 0.875rem;
            color: #6c757d;
        }

        .reclamation-message {
            color: #495057;
            margin: 10px 0;
        }

        .empty-state {
            text-align: center;
            padding: 40px 20px;
            background: #f8f9fa;
            border-radius: 8px;
            margin: 20px 0;
        }

        .empty-state i {
            font-size: 48px;
            color: #adb5bd;
            margin-bottom: 20px;
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <div class=\"d-flex justify-content-between align-items-center mb-4\">
            <h1 class=\"h2\">Mes Réclamations</h1>
            <a href=\"{{ path('app_reclamation_new') }}\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus\"></i> Nouvelle Réclamation
            </a>
        </div>

        <div class=\"reclamation-filters\">
            <form id=\"filterForm\" class=\"row g-3\">
                <div class=\"col-md-12 mb-3\">
                    <input type=\"text\" class=\"form-control\" id=\"searchQuery\" placeholder=\"Rechercher par sujet, description ou email...\">
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label\">Statut</label>
                    <select class=\"form-select\" id=\"statusFilter\">
                        <option value=\"\">Tous les statuts</option>
                        <option value=\"En attente\">En attente</option>
                        <option value=\"En cours\">En cours</option>
                        <option value=\"Traitée\">Traitée</option>
                    </select>
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label\">Priorité</label>
                    <select class=\"form-select\" id=\"priorityFilter\">
                        <option value=\"\">Toutes les priorités</option>
                        <option value=\"Urgente\">Urgente</option>
                        <option value=\"Haute\">Haute</option>
                        <option value=\"Moyenne\">Moyenne</option>
                        <option value=\"Basse\">Basse</option>
                    </select>
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label\">Catégorie</label>
                    <select class=\"form-select\" id=\"categoryFilter\">
                        <option value=\"\">Toutes les catégories</option>
                        {% for category in categories %}
                            <option value=\"{{ category.id }}\">{{ category.name }}</option>
                        {% endfor %}
                    </select>
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label\">Trier par</label>
                    <select class=\"form-select\" id=\"sortFilter\">
                        <option value=\"date-desc\">Plus récent</option>
                        <option value=\"date-asc\">Plus ancien</option>
                        <option value=\"priority-high\">Priorité (haute à basse)</option>
                        <option value=\"priority-low\">Priorité (basse à haute)</option>
                    </select>
                </div>
            </form>
        </div>

        <div id=\"reclamationsList\">
            {% if reclamations is empty %}
                <div class=\"empty-state\">
                    <i class=\"fas fa-inbox\"></i>
                    <h3>Aucune réclamation</h3>
                    <p class=\"text-muted\">Vous n'avez pas encore soumis de réclamation.</p>
                    <a href=\"{{ path('app_reclamation_new') }}\" class=\"btn btn-primary\">
                        Soumettre une réclamation
                    </a>
                </div>
            {% else %}
                {% for reclamation in reclamations %}
                    <div class=\"col-12 reclamation-item\" 
                         data-status=\"{{ reclamation.statut }}\"
                         data-priority=\"{{ reclamation.priorite }}\"
                         data-category=\"{{ reclamation.category.id }}\"
                         data-date=\"{{ reclamation.createdAt|date('Y-m-d H:i:s') }}\">
                        <div class=\"card reclamation-card\">
                            <div class=\"priority-indicator priority-{{ reclamation.priorite|lower }}\"></div>
                            <div class=\"card-body\">
                                <div class=\"d-flex justify-content-between align-items-start\">
                                    <div>
                                        <h5 class=\"card-title\">{{ reclamation.category.name }}</h5>
                                        <div class=\"reclamation-date\">
                                            <i class=\"far fa-calendar-alt\"></i>
                                            {{ reclamation.createdAt|date('d/m/Y H:i') }}
                                        </div>
                                    </div>
                                    <div class=\"d-flex gap-2\">
                                        <span class=\"badge status-badge bg-{{ reclamation.statut == 'En attente' ? 'warning' : (reclamation.statut == 'En cours' ? 'info' : 'success') }}\">
                                            {{ reclamation.statut }}
                                        </span>
                                        <span class=\"badge status-badge bg-{{ reclamation.priorite == 'Urgente' ? 'danger' : (reclamation.priorite == 'Haute' ? 'warning' : (reclamation.priorite == 'Moyenne' ? 'info' : 'success')) }}\">
                                            {{ reclamation.priorite }}
                                        </span>
                                    </div>
                                </div>
                                
                                <p class=\"reclamation-message\">{{ reclamation.message }}</p>
                                
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div class=\"btn-group\">
                                        <a href=\"{{ path('app_reclamation_show', {'id': reclamation.id}) }}\" class=\"btn btn-sm btn-outline-primary\">
                                            <i class=\"fas fa-eye\"></i> Voir détails
                                        </a>
                                        {% if reclamation.statut == 'En attente' %}
                                            <a href=\"{{ path('app_reclamation_edit', {'id': reclamation.id}) }}\" class=\"btn btn-sm btn-outline-secondary\">
                                                <i class=\"fas fa-edit\"></i> Modifier
                                            </a>
                                        {% endif %}
                                    </div>
                                    {% if reclamation.reponses|length > 0 %}
                                        <span class=\"badge bg-primary\">
                                            <i class=\"fas fa-comments\"></i> {{ reclamation.reponses|length }} réponse(s)
                                        </span>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            {% endif %}
        </div>

        <div class=\"d-flex justify-content-center mt-4\">
            {{ knp_pagination_render(reclamations) }}
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const filterForm = document.getElementById('filterForm');
            const reclamationsList = document.getElementById('reclamationsList');
            const searchInput = document.getElementById('searchQuery');
            let searchTimeout;

            function performSearch() {
                const status = document.getElementById('statusFilter').value;
                const priority = document.getElementById('priorityFilter').value;
                const category = document.getElementById('categoryFilter').value;
                const sort = document.getElementById('sortFilter').value;
                const query = searchInput.value;

                // Show loading state
                reclamationsList.innerHTML = '<div class=\"col-12 text-center\"><div class=\"spinner-border text-primary\" role=\"status\"><span class=\"visually-hidden\">Chargement...</span></div></div>';

                // Build query string
                const params = new URLSearchParams({
                    status: status,
                    priority: priority,
                    category: category,
                    sort: sort,
                    q: query
                });

                // Fetch results
                fetch(`{{ path('app_reclamation_admin_search') }}?\${params.toString()}`)
                    .then(response => response.text())
                    .then(html => {
                        reclamationsList.innerHTML = html;
                    })
                    .catch(error => {
                        console.error('Erreur lors de la recherche:', error);
                        reclamationsList.innerHTML = `
                            <div class=\"col-12\">
                                <div class=\"alert alert-danger\" role=\"alert\">
                                    Une erreur est survenue lors de la recherche. Veuillez réessayer.
                                </div>
                            </div>
                        `;
                    });
            }

            // Add event listeners
            searchInput.addEventListener('input', function() {
                clearTimeout(searchTimeout);
                searchTimeout = setTimeout(performSearch, 300);
            });

            document.getElementById('statusFilter').addEventListener('change', performSearch);
            document.getElementById('priorityFilter').addEventListener('change', performSearch);
            document.getElementById('categoryFilter').addEventListener('change', performSearch);
            document.getElementById('sortFilter').addEventListener('change', performSearch);
        });
    </script>
{% endblock %}
", "reclamation/index.html.twig", "C:\\xampp\\htdocs\\Novalearn-reclamation\\templates\\reclamation\\index.html.twig");
    }
}
