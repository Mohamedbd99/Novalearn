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

/* Admin/reclamation/_search_results.html.twig */
class __TwigTemplate_06dd2121d3bb3eb68a074e007d420378 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/reclamation/_search_results.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 1, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 2
            yield "    <tr class=\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "priorite", [], "any", false, false, false, 2) == "Urgente")) {
                yield "table-danger";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "priorite", [], "any", false, false, false, 2) == "Haute")) {
                yield "table-warning";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "priorite", [], "any", false, false, false, 2) == "Moyenne")) {
                yield "table-info";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "priorite", [], "any", false, false, false, 2) == "Basse")) {
                yield "table-light";
            }
            yield "\">
        <td>";
            // line 3
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 3), "html", null, true);
            yield "</td>
        <td>";
            // line 4
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "createdAt", [], "any", false, false, false, 4)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "createdAt", [], "any", false, false, false, 4), "d/m/Y H:i"), "html", null, true)) : (""));
            yield "</td>
        <td>";
            // line 5
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "nom", [], "any", false, false, false, 5), "html", null, true);
            yield "</td>
        <td>
            ";
            // line 7
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["emailCounts"]) || array_key_exists("emailCounts", $context) ? $context["emailCounts"] : (function () { throw new RuntimeError('Variable "emailCounts" does not exist.', 7, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "email", [], "any", false, false, false, 7), [], "array", false, false, false, 7) > 1)) {
                // line 8
                yield "                <span class=\"badge bg-danger badge-count\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["emailCounts"]) || array_key_exists("emailCounts", $context) ? $context["emailCounts"] : (function () { throw new RuntimeError('Variable "emailCounts" does not exist.', 8, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "email", [], "any", false, false, false, 8), [], "array", false, false, false, 8), "html", null, true);
                yield "</span>
            ";
            }
            // line 10
            yield "            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "email", [], "any", false, false, false, 10), "html", null, true);
            yield "
        </td>
        <td>";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "message", [], "any", false, false, false, 12), 0, 50), "html", null, true);
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "message", [], "any", false, false, false, 12)) > 50)) {
                yield "...";
            }
            yield "</td>
        <td>
            <span class=\"badge bg-";
            // line 14
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "priorite", [], "any", false, false, false, 14) == "Urgente")) ? ("danger") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "priorite", [], "any", false, false, false, 14) == "Haute")) ? ("warning") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "priorite", [], "any", false, false, false, 14) == "Moyenne")) ? ("info") : ("success"))))));
            yield "\">
                ";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "priorite", [], "any", false, false, false, 15), "html", null, true);
            yield "
            </span>
        </td>
        <td>
            <span class=\"badge bg-";
            // line 19
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "statut", [], "any", false, false, false, 19) == "En attente")) ? ("warning") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "statut", [], "any", false, false, false, 19) == "En cours")) ? ("info") : ("success"))));
            yield "\">
                ";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "statut", [], "any", false, false, false, 20), "html", null, true);
            yield "
            </span>
        </td>
        <td>
            <div class=\"btn-group\">
                <a href=\"";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 25)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-info\" title=\"Voir\">
                    <i class=\"fas fa-eye\"></i>
                </a>
                <a href=\"";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-warning\" title=\"Modifier\">
                    <i class=\"fas fa-edit\"></i>
                </a>
                <form method=\"post\" action=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamation_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            yield "\" class=\"d-inline\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette réclamation ?');\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 32))), "html", null, true);
            yield "\">
                    <button class=\"btn btn-sm btn-danger\" title=\"Supprimer\">
                        <i class=\"fas fa-trash\"></i>
                    </button>
                </form>
            </div>
        </td>
    </tr>
";
            $context['_iterated'] = true;
        }
        // line 44
        if (!$context['_iterated']) {
            // line 41
            yield "    <tr>
        <td colspan=\"8\" class=\"text-center\">Aucune réclamation trouvée</td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reclamation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Admin/reclamation/_search_results.html.twig";
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
        return array (  152 => 41,  150 => 44,  137 => 32,  133 => 31,  127 => 28,  121 => 25,  113 => 20,  109 => 19,  102 => 15,  98 => 14,  90 => 12,  84 => 10,  78 => 8,  76 => 7,  71 => 5,  67 => 4,  63 => 3,  50 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% for reclamation in reclamations %}
    <tr class=\"{% if reclamation.priorite == 'Urgente' %}table-danger{% elseif reclamation.priorite == 'Haute' %}table-warning{% elseif reclamation.priorite == 'Moyenne' %}table-info{% elseif reclamation.priorite == 'Basse' %}table-light{% endif %}\">
        <td>{{ reclamation.id }}</td>
        <td>{{ reclamation.createdAt ? reclamation.createdAt|date('d/m/Y H:i') : '' }}</td>
        <td>{{ reclamation.nom }}</td>
        <td>
            {% if emailCounts[reclamation.email] > 1 %}
                <span class=\"badge bg-danger badge-count\">{{ emailCounts[reclamation.email] }}</span>
            {% endif %}
            {{ reclamation.email }}
        </td>
        <td>{{ reclamation.message|slice(0, 50) }}{% if reclamation.message|length > 50 %}...{% endif %}</td>
        <td>
            <span class=\"badge bg-{{ reclamation.priorite == 'Urgente' ? 'danger' : (reclamation.priorite == 'Haute' ? 'warning' : (reclamation.priorite == 'Moyenne' ? 'info' : 'success')) }}\">
                {{ reclamation.priorite }}
            </span>
        </td>
        <td>
            <span class=\"badge bg-{{ reclamation.statut == 'En attente' ? 'warning' : (reclamation.statut == 'En cours' ? 'info' : 'success') }}\">
                {{ reclamation.statut }}
            </span>
        </td>
        <td>
            <div class=\"btn-group\">
                <a href=\"{{ path('admin_reclamation_show', {'id': reclamation.id}) }}\" class=\"btn btn-sm btn-info\" title=\"Voir\">
                    <i class=\"fas fa-eye\"></i>
                </a>
                <a href=\"{{ path('admin_reclamation_edit', {'id': reclamation.id}) }}\" class=\"btn btn-sm btn-warning\" title=\"Modifier\">
                    <i class=\"fas fa-edit\"></i>
                </a>
                <form method=\"post\" action=\"{{ path('admin_reclamation_delete', {'id': reclamation.id}) }}\" class=\"d-inline\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette réclamation ?');\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ reclamation.id) }}\">
                    <button class=\"btn btn-sm btn-danger\" title=\"Supprimer\">
                        <i class=\"fas fa-trash\"></i>
                    </button>
                </form>
            </div>
        </td>
    </tr>
{% else %}
    <tr>
        <td colspan=\"8\" class=\"text-center\">Aucune réclamation trouvée</td>
    </tr>
{% endfor %}
", "Admin/reclamation/_search_results.html.twig", "C:\\xampp\\htdocs\\Novalearn-reclamation\\templates\\Admin\\reclamation\\_search_results.html.twig");
    }
}
