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

/* Admin/base.html.twig */
class __TwigTemplate_68fd350913aed6df91ec2895de726c44 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'admin_content' => [$this, 'block_admin_content'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/base.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Admin/base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        .admin-sidebar {
            min-height: 100vh;
            background-color: #343a40;
        }
        .admin-sidebar .nav-link {
            color: rgba(255,255,255,.8);
            padding: 0.5rem 1rem;
        }
        .admin-sidebar .nav-link:hover {
            color: #fff;
            background-color: rgba(255,255,255,.1);
        }
        .admin-sidebar .nav-link.active {
            color: #fff;
            background-color: rgba(255,255,255,.2);
        }
        .admin-sidebar .nav-link i {
            width: 20px;
            margin-right: 0.5rem;
        }
        .admin-content {
            padding: 20px;
        }
        .table-header {
            background-color: #f8f9fa;
            border-bottom: 2px solid #dee2e6;
        }
        .badge-count {
            font-size: 0.8em;
            padding: 0.35em 0.65em;
            margin-right: 0.5em;
        }
        .action-buttons .btn {
            padding: 0.25rem 0.5rem;
            font-size: 0.875rem;
            margin: 0 2px;
        }
        .card {
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 49
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 50
        yield "    <div class=\"container-fluid\">
        <div class=\"row\">
            <!-- Sidebar -->
            <div class=\"col-md-2 px-0 admin-sidebar\">
                <div class=\"py-4 px-3\">
                    <h5 class=\"text-white\">Administration</h5>
                </div>
                <ul class=\"nav flex-column\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
        // line 59
        if ((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "request", [], "any", false, false, false, 59), "get", ["_route"], "method", false, false, false, 59)) && is_string($_v1 = "admin_reclamation") && str_starts_with($_v0, $_v1))) {
            yield "active";
        }
        yield "\" 
                           href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamation_index");
        yield "\">
                            <i class=\"fas fa-envelope\"></i> Réclamations
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
        // line 65
        if ((is_string($_v2 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "request", [], "any", false, false, false, 65), "get", ["_route"], "method", false, false, false, 65)) && is_string($_v3 = "admin_user") && str_starts_with($_v2, $_v3))) {
            yield "active";
        }
        yield "\" 
                           href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_index");
        yield "\">
                            <i class=\"fas fa-users\"></i> Utilisateurs
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 71
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
                            <i class=\"fas fa-arrow-left\"></i> Retour au site
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Main content -->
            <div class=\"col-md-10 admin-content\">
                ";
        // line 80
        yield from $this->unwrap()->yieldBlock('admin_content', $context, $blocks);
        // line 81
        yield "            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 80
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_admin_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "admin_content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Admin/base.html.twig";
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
        return array (  196 => 80,  185 => 81,  183 => 80,  171 => 71,  163 => 66,  157 => 65,  149 => 60,  143 => 59,  132 => 50,  122 => 49,  69 => 4,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .admin-sidebar {
            min-height: 100vh;
            background-color: #343a40;
        }
        .admin-sidebar .nav-link {
            color: rgba(255,255,255,.8);
            padding: 0.5rem 1rem;
        }
        .admin-sidebar .nav-link:hover {
            color: #fff;
            background-color: rgba(255,255,255,.1);
        }
        .admin-sidebar .nav-link.active {
            color: #fff;
            background-color: rgba(255,255,255,.2);
        }
        .admin-sidebar .nav-link i {
            width: 20px;
            margin-right: 0.5rem;
        }
        .admin-content {
            padding: 20px;
        }
        .table-header {
            background-color: #f8f9fa;
            border-bottom: 2px solid #dee2e6;
        }
        .badge-count {
            font-size: 0.8em;
            padding: 0.35em 0.65em;
            margin-right: 0.5em;
        }
        .action-buttons .btn {
            padding: 0.25rem 0.5rem;
            font-size: 0.875rem;
            margin: 0 2px;
        }
        .card {
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"container-fluid\">
        <div class=\"row\">
            <!-- Sidebar -->
            <div class=\"col-md-2 px-0 admin-sidebar\">
                <div class=\"py-4 px-3\">
                    <h5 class=\"text-white\">Administration</h5>
                </div>
                <ul class=\"nav flex-column\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link {% if app.request.get('_route') starts with 'admin_reclamation' %}active{% endif %}\" 
                           href=\"{{ path('admin_reclamation_index') }}\">
                            <i class=\"fas fa-envelope\"></i> Réclamations
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link {% if app.request.get('_route') starts with 'admin_user' %}active{% endif %}\" 
                           href=\"{{ path('admin_user_index') }}\">
                            <i class=\"fas fa-users\"></i> Utilisateurs
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('app_home') }}\">
                            <i class=\"fas fa-arrow-left\"></i> Retour au site
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Main content -->
            <div class=\"col-md-10 admin-content\">
                {% block admin_content %}{% endblock %}
            </div>
        </div>
    </div>
{% endblock %}
", "Admin/base.html.twig", "C:\\xampp\\htdocs\\Novalearn-reclamation\\templates\\Admin\\base.html.twig");
    }
}
