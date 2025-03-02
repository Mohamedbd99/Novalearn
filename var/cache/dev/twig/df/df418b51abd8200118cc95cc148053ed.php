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

/* user/reclamation/index.html.twig */
class __TwigTemplate_8452689b6bcf6853df3c4b7bf9b17947 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/reclamation/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/reclamation/index.html.twig", 1);
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
        yield "    <div class=\"container py-4\">
        <h1 class=\"mb-4\">Mes Réclamations</h1>

        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "flashes", ["success"], "method", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 10
            yield "            <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                ";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        yield "
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "flashes", ["error"], "method", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 17
            yield "            <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                ";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        yield "
        <div class=\"row mb-4\">
            <div class=\"col-md-6\">
                <form method=\"get\" class=\"form-inline\">
                    <div class=\"input-group\">
                        <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Rechercher dans vos réclamations...\" value=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "request", [], "any", false, false, false, 27), "query", [], "any", false, false, false, 27), "get", ["q"], "method", false, false, false, 27), "html", null, true);
        yield "\">
                        <div class=\"input-group-append\">
                            <button class=\"btn btn-primary\" type=\"submit\">
                                <i class=\"fas fa-search\"></i> Rechercher
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    <table class=\"table table-hover\">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Message</th>
                                <th>Priorité</th>
                                <th>Statut</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 52, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 53
            yield "                                <tr>
                                    <td>";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "createdAt", [], "any", false, false, false, 54), "d/m/Y H:i"), "html", null, true);
            yield "</td>
                                    <td>";
            // line 55
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "message", [], "any", false, false, false, 55), "html", null, true));
            yield "</td>
                                    <td>
                                        <span class=\"badge ";
            // line 57
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "priorite", [], "any", false, false, false, 57) == "Urgente")) {
                yield "bg-danger";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "priorite", [], "any", false, false, false, 57) == "Haute")) {
                yield "bg-warning text-dark";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "priorite", [], "any", false, false, false, 57) == "Moyenne")) {
                yield "bg-info text-dark";
            } else {
                yield "bg-primary";
            }
            yield "\">
                                            ";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "priorite", [], "any", false, false, false, 58), "html", null, true);
            yield "
                                        </span>
                                    </td>
                                    <td>
                                        <span class=\"badge ";
            // line 62
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "statut", [], "any", false, false, false, 62) == "En attente")) {
                yield "bg-warning text-dark";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "statut", [], "any", false, false, false, 62) == "En cours")) {
                yield "bg-info text-dark";
            } else {
                yield "bg-success";
            }
            yield "\">
                                            ";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "statut", [], "any", false, false, false, 63), "html", null, true);
            yield "
                                        </span>
                                    </td>
                                    <td>
                                        ";
            // line 67
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "statut", [], "any", false, false, false, 67) == "En attente")) {
                // line 68
                yield "                                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_reclamation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 68)]), "html", null, true);
                yield "\" 
                                               class=\"btn btn-sm btn-warning\" title=\"Modifier\">
                                                <i class=\"fas fa-edit\"></i> Modifier
                                            </a>
                                        ";
            }
            // line 73
            yield "                                    </td>
                                </tr>
                            ";
            $context['_iterated'] = true;
        }
        // line 79
        if (!$context['_iterated']) {
            // line 76
            yield "                                <tr>
                                    <td colspan=\"5\" class=\"text-center\">Vous n'avez pas encore de réclamations.</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reclamation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        yield "                        </tbody>
                    </table>
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
        return "user/reclamation/index.html.twig";
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
        return array (  243 => 80,  234 => 76,  232 => 79,  226 => 73,  217 => 68,  215 => 67,  208 => 63,  198 => 62,  191 => 58,  179 => 57,  174 => 55,  170 => 54,  167 => 53,  162 => 52,  134 => 27,  127 => 22,  117 => 18,  114 => 17,  110 => 16,  107 => 15,  97 => 11,  94 => 10,  90 => 9,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mes Réclamations{% endblock %}

{% block body %}
    <div class=\"container py-4\">
        <h1 class=\"mb-4\">Mes Réclamations</h1>

        {% for message in app.flashes('success') %}
            <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                {{ message }}
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        {% endfor %}

        {% for message in app.flashes('error') %}
            <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                {{ message }}
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        {% endfor %}

        <div class=\"row mb-4\">
            <div class=\"col-md-6\">
                <form method=\"get\" class=\"form-inline\">
                    <div class=\"input-group\">
                        <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Rechercher dans vos réclamations...\" value=\"{{ app.request.query.get('q') }}\">
                        <div class=\"input-group-append\">
                            <button class=\"btn btn-primary\" type=\"submit\">
                                <i class=\"fas fa-search\"></i> Rechercher
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    <table class=\"table table-hover\">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Message</th>
                                <th>Priorité</th>
                                <th>Statut</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for reclamation in reclamations %}
                                <tr>
                                    <td>{{ reclamation.createdAt|date('d/m/Y H:i') }}</td>
                                    <td>{{ reclamation.message|nl2br }}</td>
                                    <td>
                                        <span class=\"badge {% if reclamation.priorite == 'Urgente' %}bg-danger{% elseif reclamation.priorite == 'Haute' %}bg-warning text-dark{% elseif reclamation.priorite == 'Moyenne' %}bg-info text-dark{% else %}bg-primary{% endif %}\">
                                            {{ reclamation.priorite }}
                                        </span>
                                    </td>
                                    <td>
                                        <span class=\"badge {% if reclamation.statut == 'En attente' %}bg-warning text-dark{% elseif reclamation.statut == 'En cours' %}bg-info text-dark{% else %}bg-success{% endif %}\">
                                            {{ reclamation.statut }}
                                        </span>
                                    </td>
                                    <td>
                                        {% if reclamation.statut == 'En attente' %}
                                            <a href=\"{{ path('user_reclamation_edit', {'id': reclamation.id}) }}\" 
                                               class=\"btn btn-sm btn-warning\" title=\"Modifier\">
                                                <i class=\"fas fa-edit\"></i> Modifier
                                            </a>
                                        {% endif %}
                                    </td>
                                </tr>
                            {% else %}
                                <tr>
                                    <td colspan=\"5\" class=\"text-center\">Vous n'avez pas encore de réclamations.</td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "user/reclamation/index.html.twig", "C:\\xampp\\htdocs\\Novalearn-reclamation\\templates\\User\\reclamation\\index.html.twig");
    }
}
