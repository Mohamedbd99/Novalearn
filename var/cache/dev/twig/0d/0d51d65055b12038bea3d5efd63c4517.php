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
class __TwigTemplate_8bdc115992a0634472f36d1276c0a2c8 extends Template
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
        yield "    <div class=\"container-rounded\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-10\">
                <div class=\"d-flex justify-content-between align-items-center mb-4\">
                    <h1 class=\"mb-0\">Mes Réclamations</h1>
                    <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_new");
        yield "\" class=\"btn btn-novalearn\">
                        <i class=\"fas fa-plus me-2\"></i>Ajouter une réclamation
                    </a>
                </div>

                <div class=\"mb-4\">
                    <input type=\"email\" id=\"email-input\" class=\"form-control email-input\" placeholder=\"Entrez votre email\" required>
                </div>

                <div class=\"table-responsive\">
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Message</th>
                                <th>Statut</th>
                                <th>Date de création</th>
                            </tr>
                        </thead>
                        <tbody id=\"reclamations-table-body\">
                            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 31, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 32
            yield "                                <tr>
                                    <td>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "nom", [], "any", false, false, false, 33), "html", null, true);
            yield "</td>
                                    <td>";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "message", [], "any", false, false, false, 34), 0, 50), "html", null, true);
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "message", [], "any", false, false, false, 34)) > 50)) {
                yield "...";
            }
            yield "</td>
                                    <td>
                                        <span class=\"badge bg-";
            // line 36
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "statut", [], "any", false, false, false, 36) == "En attente")) ? ("warning") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "statut", [], "any", false, false, false, 36) == "Traitée")) ? ("success") : ("info"))));
            yield "\">
                                            ";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "statut", [], "any", false, false, false, 37), "html", null, true);
            yield "
                                        </span>
                                    </td>
                                    <td>";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "createdAt", [], "any", false, false, false, 40), "d/m/Y H:i"), "html", null, true);
            yield "</td>
                                </tr>
                            ";
            $context['_iterated'] = true;
        }
        // line 46
        if (!$context['_iterated']) {
            // line 43
            yield "                                <tr>
                                    <td colspan=\"4\" class=\"text-center\">Aucune réclamation trouvée</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reclamation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
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
            const emailInput = document.getElementById('email-input');
            const tableBody = document.getElementById('reclamations-table-body');

            emailInput.addEventListener('change', function() {
                const email = emailInput.value.trim();

                if (!email) {
                    alert('Veuillez entrer votre email');
                    return;
                }

                // Afficher l'indicateur de chargement
                tableBody.innerHTML = '<tr><td colspan=\"4\" class=\"text-center\"><div class=\"spinner-border text-primary\" role=\"status\"><span class=\"visually-hidden\">Chargement...</span></div></td></tr>';

                // Charger les réclamations
                fetch(`";
        // line 74
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_list");
        yield "?email=\${encodeURIComponent(email)}`)
                    .then(response => response.text())
                    .then(html => {
                        tableBody.innerHTML = html;
                    })
                    .catch(error => {
                        console.error('Erreur lors du chargement:', error);
                        tableBody.innerHTML = '<tr><td colspan=\"4\" class=\"text-center\">Une erreur est survenue lors du chargement</td></tr>';
                    });
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
        return array (  210 => 74,  188 => 56,  178 => 55,  164 => 47,  155 => 43,  153 => 46,  146 => 40,  140 => 37,  136 => 36,  128 => 34,  124 => 33,  121 => 32,  116 => 31,  93 => 11,  86 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mes Réclamations{% endblock %}

{% block body %}
    <div class=\"container-rounded\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-10\">
                <div class=\"d-flex justify-content-between align-items-center mb-4\">
                    <h1 class=\"mb-0\">Mes Réclamations</h1>
                    <a href=\"{{ path('app_reclamation_new') }}\" class=\"btn btn-novalearn\">
                        <i class=\"fas fa-plus me-2\"></i>Ajouter une réclamation
                    </a>
                </div>

                <div class=\"mb-4\">
                    <input type=\"email\" id=\"email-input\" class=\"form-control email-input\" placeholder=\"Entrez votre email\" required>
                </div>

                <div class=\"table-responsive\">
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Message</th>
                                <th>Statut</th>
                                <th>Date de création</th>
                            </tr>
                        </thead>
                        <tbody id=\"reclamations-table-body\">
                            {% for reclamation in reclamations %}
                                <tr>
                                    <td>{{ reclamation.nom }}</td>
                                    <td>{{ reclamation.message|slice(0, 50) }}{% if reclamation.message|length > 50 %}...{% endif %}</td>
                                    <td>
                                        <span class=\"badge bg-{{ reclamation.statut == 'En attente' ? 'warning' : (reclamation.statut == 'Traitée' ? 'success' : 'info') }}\">
                                            {{ reclamation.statut }}
                                        </span>
                                    </td>
                                    <td>{{ reclamation.createdAt|date('d/m/Y H:i') }}</td>
                                </tr>
                            {% else %}
                                <tr>
                                    <td colspan=\"4\" class=\"text-center\">Aucune réclamation trouvée</td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const emailInput = document.getElementById('email-input');
            const tableBody = document.getElementById('reclamations-table-body');

            emailInput.addEventListener('change', function() {
                const email = emailInput.value.trim();

                if (!email) {
                    alert('Veuillez entrer votre email');
                    return;
                }

                // Afficher l'indicateur de chargement
                tableBody.innerHTML = '<tr><td colspan=\"4\" class=\"text-center\"><div class=\"spinner-border text-primary\" role=\"status\"><span class=\"visually-hidden\">Chargement...</span></div></td></tr>';

                // Charger les réclamations
                fetch(`{{ path('app_reclamation_list') }}?email=\${encodeURIComponent(email)}`)
                    .then(response => response.text())
                    .then(html => {
                        tableBody.innerHTML = html;
                    })
                    .catch(error => {
                        console.error('Erreur lors du chargement:', error);
                        tableBody.innerHTML = '<tr><td colspan=\"4\" class=\"text-center\">Une erreur est survenue lors du chargement</td></tr>';
                    });
            });
        });
    </script>
{% endblock %}
", "reclamation/public/mes_reclamations.html.twig", "C:\\xampp\\htdocs\\Novalearn-reclamation\\templates\\reclamation\\public\\mes_reclamations.html.twig");
    }
}
