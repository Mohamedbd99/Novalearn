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

/* Home/index.html.twig */
class __TwigTemplate_14c2fbfba81e0a1fa56b67eeccf28647 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Home/index.html.twig", 1);
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

        yield "Accueil - NovaLearn";
        
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
        yield "<div class=\"container py-4\">
    <div class=\"text-center mb-5\">
        <h1 class=\"display-4 mb-4\">Bienvenue sur NovaLearn</h1>
        <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_new");
        yield "\" class=\"btn btn-primary btn-lg mb-5\">
            <i class=\"fas fa-exclamation-circle me-2\"></i>
            Faire une réclamation
        </a>
    </div>

    <!-- Classes Section -->
    <section class=\"mb-5\">
        <h2 class=\"text-center mb-4\">Nos Classes</h2>
        <div class=\"row\">
            <div class=\"col-md-4 mb-4\">
                <div class=\"card h-100\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Classe A</h5>
                        <p class=\"card-text\">Description de la classe A</p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 mb-4\">
                <div class=\"card h-100\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Classe B</h5>
                        <p class=\"card-text\">Description de la classe B</p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 mb-4\">
                <div class=\"card h-100\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Classe C</h5>
                        <p class=\"card-text\">Description de la classe C</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Reclamation Button Section -->
    <section class=\"text-center py-4\">
        <div class=\"card bg-light\">
            <div class=\"card-body\">
                <h3 class=\"mb-3\">Vous avez une réclamation ?</h3>
                <p class=\"mb-4\">N'hésitez pas à nous faire part de vos préoccupations.</p>
                <a href=\"";
        // line 52
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_new");
        yield "\" class=\"btn btn-primary btn-lg\">
                    <i class=\"fas fa-paper-plane me-2\"></i>
                    Soumettre une réclamation
                </a>
            </div>
        </div>
    </section>
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
        return "Home/index.html.twig";
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
        return array (  136 => 52,  90 => 9,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil - NovaLearn{% endblock %}

{% block body %}
<div class=\"container py-4\">
    <div class=\"text-center mb-5\">
        <h1 class=\"display-4 mb-4\">Bienvenue sur NovaLearn</h1>
        <a href=\"{{ path('app_reclamation_new') }}\" class=\"btn btn-primary btn-lg mb-5\">
            <i class=\"fas fa-exclamation-circle me-2\"></i>
            Faire une réclamation
        </a>
    </div>

    <!-- Classes Section -->
    <section class=\"mb-5\">
        <h2 class=\"text-center mb-4\">Nos Classes</h2>
        <div class=\"row\">
            <div class=\"col-md-4 mb-4\">
                <div class=\"card h-100\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Classe A</h5>
                        <p class=\"card-text\">Description de la classe A</p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 mb-4\">
                <div class=\"card h-100\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Classe B</h5>
                        <p class=\"card-text\">Description de la classe B</p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 mb-4\">
                <div class=\"card h-100\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Classe C</h5>
                        <p class=\"card-text\">Description de la classe C</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Reclamation Button Section -->
    <section class=\"text-center py-4\">
        <div class=\"card bg-light\">
            <div class=\"card-body\">
                <h3 class=\"mb-3\">Vous avez une réclamation ?</h3>
                <p class=\"mb-4\">N'hésitez pas à nous faire part de vos préoccupations.</p>
                <a href=\"{{ path('app_reclamation_new') }}\" class=\"btn btn-primary btn-lg\">
                    <i class=\"fas fa-paper-plane me-2\"></i>
                    Soumettre une réclamation
                </a>
            </div>
        </div>
    </section>
</div>
{% endblock %}
", "Home/index.html.twig", "C:\\xampp\\htdocs\\Novalearn-reclamation\\templates\\Home\\index.html.twig");
    }
}
