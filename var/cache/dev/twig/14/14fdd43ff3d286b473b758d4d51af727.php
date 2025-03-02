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

/* Admin/reclamation/index.html.twig */
class __TwigTemplate_074a24528a3698cdec5c3254548a55e0 extends Template
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
            'admin_content' => [$this, 'block_admin_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/reclamation/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "Admin/reclamation/index.html.twig", 1);
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
    public function block_admin_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "admin_content"));

        // line 6
        yield "    <div class=\"container-fluid py-4\">
        <div class=\"row mb-4\">
            <div class=\"col\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <h1 class=\"h3\">Liste des Réclamations</h1>
                </div>
            </div>
        </div>

        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "flashes", ["success"], "method", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 16
            yield "            <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                ";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        yield "
        <div class=\"card mb-4\">
            <div class=\"card-body\">
                <div class=\"row g-3\">
                    <div class=\"col-md-4\">
                        <input type=\"text\" class=\"form-control\" id=\"searchQuery\" placeholder=\"Rechercher...\">
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
        </div>

        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    ";
        // line 52
        yield from $this->loadTemplate("Admin/reclamation/_reclamations_table.html.twig", "Admin/reclamation/index.html.twig", 52)->unwrap()->yield($context);
        // line 53
        yield "                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 59
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 60
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchQuery = document.getElementById('searchQuery');
            const statusFilter = document.getElementById('statusFilter');
            const priorityFilter = document.getElementById('priorityFilter');
            let currentPage = 1;

            function updateResults() {
                const params = new URLSearchParams({
                    search: searchQuery.value,
                    status: statusFilter.value,
                    priority: priorityFilter.value,
                    page: currentPage
                });

                fetch(`";
        // line 76
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamation_index");
        yield "?\${params.toString()}`)
                    .then(response => response.text())
                    .then(html => {
                        document.querySelector('.table-responsive').innerHTML = html;
                    });
            }

            searchQuery.addEventListener('input', () => {
                currentPage = 1;
                updateResults();
            });

            statusFilter.addEventListener('change', () => {
                currentPage = 1;
                updateResults();
            });

            priorityFilter.addEventListener('change', () => {
                currentPage = 1;
                updateResults();
            });

            // Gérer la pagination
            document.addEventListener('click', (e) => {
                if (e.target.matches('.pagination a')) {
                    e.preventDefault();
                    const href = e.target.getAttribute('href');
                    const pageMatch = href.match(/page=(\\d+)/);
                    if (pageMatch) {
                        currentPage = parseInt(pageMatch[1]);
                        updateResults();
                    }
                }
            });
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
        return "Admin/reclamation/index.html.twig";
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
        return array (  191 => 76,  171 => 60,  161 => 59,  149 => 53,  147 => 52,  114 => 21,  104 => 17,  101 => 16,  97 => 15,  86 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Gestion des Réclamations{% endblock %}

{% block admin_content %}
    <div class=\"container-fluid py-4\">
        <div class=\"row mb-4\">
            <div class=\"col\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <h1 class=\"h3\">Liste des Réclamations</h1>
                </div>
            </div>
        </div>

        {% for message in app.flashes('success') %}
            <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                {{ message }}
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        {% endfor %}

        <div class=\"card mb-4\">
            <div class=\"card-body\">
                <div class=\"row g-3\">
                    <div class=\"col-md-4\">
                        <input type=\"text\" class=\"form-control\" id=\"searchQuery\" placeholder=\"Rechercher...\">
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
        </div>

        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    {% include 'Admin/reclamation/_reclamations_table.html.twig' %}
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchQuery = document.getElementById('searchQuery');
            const statusFilter = document.getElementById('statusFilter');
            const priorityFilter = document.getElementById('priorityFilter');
            let currentPage = 1;

            function updateResults() {
                const params = new URLSearchParams({
                    search: searchQuery.value,
                    status: statusFilter.value,
                    priority: priorityFilter.value,
                    page: currentPage
                });

                fetch(`{{ path('admin_reclamation_index') }}?\${params.toString()}`)
                    .then(response => response.text())
                    .then(html => {
                        document.querySelector('.table-responsive').innerHTML = html;
                    });
            }

            searchQuery.addEventListener('input', () => {
                currentPage = 1;
                updateResults();
            });

            statusFilter.addEventListener('change', () => {
                currentPage = 1;
                updateResults();
            });

            priorityFilter.addEventListener('change', () => {
                currentPage = 1;
                updateResults();
            });

            // Gérer la pagination
            document.addEventListener('click', (e) => {
                if (e.target.matches('.pagination a')) {
                    e.preventDefault();
                    const href = e.target.getAttribute('href');
                    const pageMatch = href.match(/page=(\\d+)/);
                    if (pageMatch) {
                        currentPage = parseInt(pageMatch[1]);
                        updateResults();
                    }
                }
            });
        });
    </script>
{% endblock %}
", "Admin/reclamation/index.html.twig", "C:\\xampp\\htdocs\\Novalearn-reclamation\\templates\\Admin\\reclamation\\index.html.twig");
    }
}
