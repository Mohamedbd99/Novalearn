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

/* Admin/reclamation/show.html.twig */
class __TwigTemplate_1e1255471f35a018eb99a0f71373f58c extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/reclamation/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Admin/reclamation/show.html.twig", 1);
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

        yield "Détails de la Réclamation";
        
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
    <div class=\"mb-4\">
        <a href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamation_index");
        yield "\" class=\"btn btn-secondary\">
            <i class=\"fas fa-arrow-left\"></i> Retour à la liste
        </a>
    </div>

    <div class=\"card\">
        <div class=\"card-header bg-primary text-white\">
            <h1 class=\"h4 mb-0\">Réclamation #";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15), "html", null, true);
        yield "</h1>
        </div>
        <div class=\"card-body\">
            <div class=\"row mb-4\">
                <div class=\"col-md-6\">
                    <h5>Informations de contact</h5>
                    <dl class=\"row\">
                        <dt class=\"col-sm-3\">Nom</dt>
                        <dd class=\"col-sm-9\">";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 23, $this->source); })()), "nom", [], "any", false, false, false, 23), "html", null, true);
        yield "</dd>
                        
                        <dt class=\"col-sm-3\">Email</dt>
                        <dd class=\"col-sm-9\">
                            <a href=\"mailto:";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 27, $this->source); })()), "email", [], "any", false, false, false, 27), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 27, $this->source); })()), "email", [], "any", false, false, false, 27), "html", null, true);
        yield "</a>
                        </dd>
                    </dl>
                </div>
                <div class=\"col-md-6\">
                    <h5>Statut actuel</h5>
                    <span class=\"badge ";
        // line 33
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 33, $this->source); })()), "statut", [], "any", false, false, false, 33) == "En attente")) {
            yield "bg-warning";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 33, $this->source); })()), "statut", [], "any", false, false, false, 33) == "Traitée")) {
            yield "bg-success";
        } else {
            yield "bg-info";
        }
        yield " mb-3\">
                        ";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 34, $this->source); })()), "statut", [], "any", false, false, false, 34), "html", null, true);
        yield "
                    </span>
                    
                    <div class=\"mt-3\">
                        <a href=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38)]), "html", null, true);
        yield "\" class=\"btn btn-primary\">
                            <i class=\"fas fa-edit\"></i> Modifier le statut
                        </a>
                    </div>
                </div>
            </div>

            <div class=\"mb-4\">
                <h5>Message</h5>
                <div class=\"p-3 bg-light rounded\">
                    ";
        // line 48
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 48, $this->source); })()), "message", [], "any", false, false, false, 48), "html", null, true));
        yield "
                </div>
            </div>

            <div class=\"border-top pt-3\">
                <form method=\"post\" action=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamation_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 53, $this->source); })()), "id", [], "any", false, false, false, 53)]), "html", null, true);
        yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette réclamation?');\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 54, $this->source); })()), "id", [], "any", false, false, false, 54))), "html", null, true);
        yield "\">
                    <button class=\"btn btn-danger\">
                        <i class=\"fas fa-trash\"></i> Supprimer
                    </button>
                </form>
            </div>
        </div>
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
        return "Admin/reclamation/show.html.twig";
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
        return array (  170 => 54,  166 => 53,  158 => 48,  145 => 38,  138 => 34,  128 => 33,  117 => 27,  110 => 23,  99 => 15,  89 => 8,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails de la Réclamation{% endblock %}

{% block body %}
<div class=\"container py-4\">
    <div class=\"mb-4\">
        <a href=\"{{ path('admin_reclamation_index') }}\" class=\"btn btn-secondary\">
            <i class=\"fas fa-arrow-left\"></i> Retour à la liste
        </a>
    </div>

    <div class=\"card\">
        <div class=\"card-header bg-primary text-white\">
            <h1 class=\"h4 mb-0\">Réclamation #{{ reclamation.id }}</h1>
        </div>
        <div class=\"card-body\">
            <div class=\"row mb-4\">
                <div class=\"col-md-6\">
                    <h5>Informations de contact</h5>
                    <dl class=\"row\">
                        <dt class=\"col-sm-3\">Nom</dt>
                        <dd class=\"col-sm-9\">{{ reclamation.nom }}</dd>
                        
                        <dt class=\"col-sm-3\">Email</dt>
                        <dd class=\"col-sm-9\">
                            <a href=\"mailto:{{ reclamation.email }}\">{{ reclamation.email }}</a>
                        </dd>
                    </dl>
                </div>
                <div class=\"col-md-6\">
                    <h5>Statut actuel</h5>
                    <span class=\"badge {% if reclamation.statut == 'En attente' %}bg-warning{% elseif reclamation.statut == 'Traitée' %}bg-success{% else %}bg-info{% endif %} mb-3\">
                        {{ reclamation.statut }}
                    </span>
                    
                    <div class=\"mt-3\">
                        <a href=\"{{ path('admin_reclamation_edit', {'id': reclamation.id}) }}\" class=\"btn btn-primary\">
                            <i class=\"fas fa-edit\"></i> Modifier le statut
                        </a>
                    </div>
                </div>
            </div>

            <div class=\"mb-4\">
                <h5>Message</h5>
                <div class=\"p-3 bg-light rounded\">
                    {{ reclamation.message|nl2br }}
                </div>
            </div>

            <div class=\"border-top pt-3\">
                <form method=\"post\" action=\"{{ path('admin_reclamation_delete', {'id': reclamation.id}) }}\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette réclamation?');\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ reclamation.id) }}\">
                    <button class=\"btn btn-danger\">
                        <i class=\"fas fa-trash\"></i> Supprimer
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "Admin/reclamation/show.html.twig", "C:\\xampp\\htdocs\\Novalearn-reclamation\\templates\\Admin\\reclamation\\show.html.twig");
    }
}
