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

/* reclamation/public/mes_reclamations.html.twig */
class __TwigTemplate_501421d42a202c170bf15d331aee7509 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/public/mes_reclamations.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reclamation/public/mes_reclamations.html.twig", 1);
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
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"container py-4\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-10\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center mb-4\">
                        <h1 class=\"h3 mb-0\">Mes Réclamations</h1>
                        <div>
                            <small class=\"text-muted\">Email: ";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 14, $this->source); })()), "html", null, true);
        yield "</small>
                            <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_new");
        yield "\" class=\"btn btn-primary btn-sm ms-3\">
                                <i class=\"fas fa-plus me-2\"></i>
                                Nouvelle réclamation
                            </a>
                        </div>
                    </div>

                    ";
        // line 22
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 22, $this->source); })()))) {
            // line 23
            yield "                        <div class=\"text-center py-5\">
                            <i class=\"fas fa-inbox fa-3x text-muted mb-3\"></i>
                            <p class=\"lead\">Vous n'avez pas encore soumis de réclamation.</p>
                            <a href=\"";
            // line 26
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_new");
            yield "\" class=\"btn btn-primary\">
                                <i class=\"fas fa-plus me-2\"></i>
                                Soumettre une réclamation
                            </a>
                        </div>
                    ";
        } else {
            // line 32
            yield "                        <div class=\"table-responsive\">
                            <table class=\"table\">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Catégorie</th>
                                        <th>Message</th>
                                        <th>Statut</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 43, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
                // line 44
                yield "                                        <tr>
                                            <td>";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "createdAt", [], "any", false, false, false, 45), "d/m/Y H:i"), "html", null, true);
                yield "</td>
                                            <td>";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "category", [], "any", false, false, false, 46), "nom", [], "any", false, false, false, 46), "html", null, true);
                yield "</td>
                                            <td>";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "message", [], "any", false, false, false, 47), 0, 100), "html", null, true);
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "message", [], "any", false, false, false, 47)) > 100)) {
                    yield "...";
                }
                yield "</td>
                                            <td>
                                                <span class=\"badge ";
                // line 49
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "statut", [], "any", false, false, false, 49) == "En attente")) {
                    yield "bg-warning";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "statut", [], "any", false, false, false, 49) == "Traitée")) {
                    yield "bg-success";
                } else {
                    yield "bg-secondary";
                }
                yield "\">
                                                    ";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "statut", [], "any", false, false, false, 50), "html", null, true);
                yield "
                                                </span>
                                            </td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['reclamation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            yield "                                </tbody>
                            </table>
                        </div>
                    ";
        }
        // line 59
        yield "
                    <div class=\"mt-4\">
                        <a href=\"";
        // line 61
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"btn btn-outline-secondary\">
                            <i class=\"fas fa-arrow-left me-2\"></i>
                            Retour à l'accueil
                        </a>
                    </div>
                </div>
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
        return "reclamation/public/mes_reclamations.html.twig";
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
        return array (  192 => 61,  188 => 59,  182 => 55,  171 => 50,  161 => 49,  153 => 47,  149 => 46,  145 => 45,  142 => 44,  138 => 43,  125 => 32,  116 => 26,  111 => 23,  109 => 22,  99 => 15,  95 => 14,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mes Réclamations{% endblock %}

{% block body %}
<div class=\"container py-4\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-10\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center mb-4\">
                        <h1 class=\"h3 mb-0\">Mes Réclamations</h1>
                        <div>
                            <small class=\"text-muted\">Email: {{ email }}</small>
                            <a href=\"{{ path('app_reclamation_new') }}\" class=\"btn btn-primary btn-sm ms-3\">
                                <i class=\"fas fa-plus me-2\"></i>
                                Nouvelle réclamation
                            </a>
                        </div>
                    </div>

                    {% if reclamations is empty %}
                        <div class=\"text-center py-5\">
                            <i class=\"fas fa-inbox fa-3x text-muted mb-3\"></i>
                            <p class=\"lead\">Vous n'avez pas encore soumis de réclamation.</p>
                            <a href=\"{{ path('app_reclamation_new') }}\" class=\"btn btn-primary\">
                                <i class=\"fas fa-plus me-2\"></i>
                                Soumettre une réclamation
                            </a>
                        </div>
                    {% else %}
                        <div class=\"table-responsive\">
                            <table class=\"table\">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Catégorie</th>
                                        <th>Message</th>
                                        <th>Statut</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for reclamation in reclamations %}
                                        <tr>
                                            <td>{{ reclamation.createdAt|date('d/m/Y H:i') }}</td>
                                            <td>{{ reclamation.category.nom }}</td>
                                            <td>{{ reclamation.message|slice(0, 100) }}{% if reclamation.message|length > 100 %}...{% endif %}</td>
                                            <td>
                                                <span class=\"badge {% if reclamation.statut == 'En attente' %}bg-warning{% elseif reclamation.statut == 'Traitée' %}bg-success{% else %}bg-secondary{% endif %}\">
                                                    {{ reclamation.statut }}
                                                </span>
                                            </td>
                                        </tr>
                                    {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    {% endif %}

                    <div class=\"mt-4\">
                        <a href=\"{{ path('app_home') }}\" class=\"btn btn-outline-secondary\">
                            <i class=\"fas fa-arrow-left me-2\"></i>
                            Retour à l'accueil
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "reclamation/public/mes_reclamations.html.twig", "/Users/cyrineberrabah/Downloads/Novalearn-cyrine /templates/reclamation/public/mes_reclamations.html.twig");
    }
}
