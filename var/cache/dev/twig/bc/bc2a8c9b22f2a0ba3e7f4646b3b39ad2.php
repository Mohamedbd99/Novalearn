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

/* Admin/user/show.html.twig */
class __TwigTemplate_fb5d6744efd8ec7890b3729f5608ac49 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/user/show.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "Admin/user/show.html.twig", 1);
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

        yield "Détails de l'utilisateur";
        
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
        yield "    <div class=\"container-fluid\">
        <div class=\"row mb-4\">
            <div class=\"col\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <h1 class=\"h3\">Détails de l'utilisateur</h1>
                    <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_index");
        yield "\" class=\"btn btn-secondary\">
                        <i class=\"fas fa-arrow-left\"></i> Retour à la liste
                    </a>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h5 class=\"card-title mb-0\">Informations de l'utilisateur</h5>
                    </div>
                    <div class=\"card-body\">
                        <table class=\"table\">
                            <tbody>
                                <tr>
                                    <th>ID</th>
                                    <td>";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 29, $this->source); })()), "id", [], "any", false, false, false, 29), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 33, $this->source); })()), "email", [], "any", false, false, false, 33), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Rôles</th>
                                    <td>
                                        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 38, $this->source); })()), "roles", [], "any", false, false, false, 38));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 39
            yield "                                            <span class=\"badge bg-info\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["role"], "html", null, true);
            yield "</span>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['role'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        yield "                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class=\"col-md-6\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h5 class=\"card-title mb-0\">Réclamations de l'utilisateur</h5>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"list-group\">
                            ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "reclamations", [], "any", true, true, false, 56)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 56, $this->source); })()), "reclamations", [], "any", false, false, false, 56), [])) : ([])));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 57
            yield "                                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 57)]), "html", null, true);
            yield "\" class=\"list-group-item list-group-item-action\">
                                    <div class=\"d-flex w-100 justify-content-between\">
                                        <h6 class=\"mb-1\">";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "message", [], "any", false, false, false, 59), 0, 50), "html", null, true);
            yield "...</h6>
                                        <small>";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "createdAt", [], "any", false, false, false, 60), "d/m/Y H:i"), "html", null, true);
            yield "</small>
                                    </div>
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <span class=\"badge ";
            // line 63
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "priorite", [], "any", false, false, false, 63) == "Urgente")) {
                yield "bg-danger";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "priorite", [], "any", false, false, false, 63) == "Haute")) {
                yield "bg-warning text-dark";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "priorite", [], "any", false, false, false, 63) == "Moyenne")) {
                yield "bg-info text-dark";
            } else {
                yield "bg-secondary";
            }
            yield "\">
                                            ";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "priorite", [], "any", false, false, false, 64), "html", null, true);
            yield "
                                        </span>
                                        <span class=\"badge ";
            // line 66
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "statut", [], "any", false, false, false, 66) == "En attente")) {
                yield "bg-warning text-dark";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "statut", [], "any", false, false, false, 66) == "Traitée")) {
                yield "bg-success";
            } else {
                yield "bg-info";
            }
            yield "\">
                                            ";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "statut", [], "any", false, false, false, 67), "html", null, true);
            yield "
                                        </span>
                                    </div>
                                </a>
                            ";
            $context['_iterated'] = true;
        }
        // line 75
        if (!$context['_iterated']) {
            // line 72
            yield "                                <div class=\"list-group-item\">
                                    Aucune réclamation trouvée pour cet utilisateur.
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reclamation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        yield "                        </div>
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
        return "Admin/user/show.html.twig";
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
        return array (  226 => 76,  217 => 72,  215 => 75,  206 => 67,  196 => 66,  191 => 64,  179 => 63,  173 => 60,  169 => 59,  163 => 57,  158 => 56,  141 => 41,  132 => 39,  128 => 38,  120 => 33,  113 => 29,  92 => 11,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Détails de l'utilisateur{% endblock %}

{% block admin_content %}
    <div class=\"container-fluid\">
        <div class=\"row mb-4\">
            <div class=\"col\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <h1 class=\"h3\">Détails de l'utilisateur</h1>
                    <a href=\"{{ path('admin_user_index') }}\" class=\"btn btn-secondary\">
                        <i class=\"fas fa-arrow-left\"></i> Retour à la liste
                    </a>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h5 class=\"card-title mb-0\">Informations de l'utilisateur</h5>
                    </div>
                    <div class=\"card-body\">
                        <table class=\"table\">
                            <tbody>
                                <tr>
                                    <th>ID</th>
                                    <td>{{ user.id }}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{ user.email }}</td>
                                </tr>
                                <tr>
                                    <th>Rôles</th>
                                    <td>
                                        {% for role in user.roles %}
                                            <span class=\"badge bg-info\">{{ role }}</span>
                                        {% endfor %}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class=\"col-md-6\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h5 class=\"card-title mb-0\">Réclamations de l'utilisateur</h5>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"list-group\">
                            {% for reclamation in user.reclamations|default([]) %}
                                <a href=\"{{ path('admin_reclamation_show', {'id': reclamation.id}) }}\" class=\"list-group-item list-group-item-action\">
                                    <div class=\"d-flex w-100 justify-content-between\">
                                        <h6 class=\"mb-1\">{{ reclamation.message|slice(0, 50) }}...</h6>
                                        <small>{{ reclamation.createdAt|date('d/m/Y H:i') }}</small>
                                    </div>
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <span class=\"badge {% if reclamation.priorite == 'Urgente' %}bg-danger{% elseif reclamation.priorite == 'Haute' %}bg-warning text-dark{% elseif reclamation.priorite == 'Moyenne' %}bg-info text-dark{% else %}bg-secondary{% endif %}\">
                                            {{ reclamation.priorite }}
                                        </span>
                                        <span class=\"badge {% if reclamation.statut == 'En attente' %}bg-warning text-dark{% elseif reclamation.statut == 'Traitée' %}bg-success{% else %}bg-info{% endif %}\">
                                            {{ reclamation.statut }}
                                        </span>
                                    </div>
                                </a>
                            {% else %}
                                <div class=\"list-group-item\">
                                    Aucune réclamation trouvée pour cet utilisateur.
                                </div>
                            {% endfor %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "Admin/user/show.html.twig", "C:\\xampp\\htdocs\\Novalearn-reclamation\\templates\\Admin\\user\\show.html.twig");
    }
}
