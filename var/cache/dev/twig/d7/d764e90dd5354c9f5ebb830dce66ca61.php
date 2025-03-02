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

/* Admin/reclamation/_reclamations_table.html.twig */
class __TwigTemplate_12aa15fdde1d783fcaee4df782e52e40 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/reclamation/_reclamations_table.html.twig"));

        // line 1
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 1, $this->source); })()), "items", [], "any", false, false, false, 1)) > 0)) {
            // line 2
            yield "    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th>";
            // line 5
            yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 5, $this->source); })()), "ID", "r.id");
            yield "</th>
                <th>";
            // line 6
            yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 6, $this->source); })()), "Date", "r.createdAt");
            yield "</th>
                <th>";
            // line 7
            yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 7, $this->source); })()), "Nom", "r.nom");
            yield "</th>
                <th>";
            // line 8
            yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 8, $this->source); })()), "Email", "r.email");
            yield "</th>
                <th>Message</th>
                <th>";
            // line 10
            yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 10, $this->source); })()), "Priorité", "r.priorite");
            yield "</th>
                <th>";
            // line 11
            yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 11, $this->source); })()), "Statut", "r.statut");
            yield "</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 16, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
                // line 17
                yield "                ";
                $context["rowClass"] = "";
                // line 18
                yield "                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "priorite", [], "any", false, false, false, 18) == "Urgente")) {
                    // line 19
                    yield "                    ";
                    $context["rowClass"] = "table-danger";
                    // line 20
                    yield "                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "priorite", [], "any", false, false, false, 20) == "Haute")) {
                    // line 21
                    yield "                    ";
                    $context["rowClass"] = "table-warning";
                    // line 22
                    yield "                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "priorite", [], "any", false, false, false, 22) == "Moyenne")) {
                    // line 23
                    yield "                    ";
                    $context["rowClass"] = "table-info";
                    // line 24
                    yield "                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "priorite", [], "any", false, false, false, 24) == "Basse")) {
                    // line 25
                    yield "                    ";
                    $context["rowClass"] = "table-primary";
                    // line 26
                    yield "                ";
                }
                // line 27
                yield "                
                <tr class=\"";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rowClass"]) || array_key_exists("rowClass", $context) ? $context["rowClass"] : (function () { throw new RuntimeError('Variable "rowClass" does not exist.', 28, $this->source); })()), "html", null, true);
                yield "\">
                    <td>";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 29), "html", null, true);
                yield "</td>
                    <td>";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "createdAt", [], "any", false, false, false, 30), "d/m/Y H:i"), "html", null, true);
                yield "</td>
                    <td>";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "nom", [], "any", false, false, false, 31), "html", null, true);
                yield "</td>
                    <td>
                        ";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "email", [], "any", false, false, false, 33), "html", null, true);
                yield "
                        ";
                // line 34
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["emailCounts"]) || array_key_exists("emailCounts", $context) ? $context["emailCounts"] : (function () { throw new RuntimeError('Variable "emailCounts" does not exist.', 34, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "email", [], "any", false, false, false, 34), [], "array", false, false, false, 34) > 1)) {
                    // line 35
                    yield "                            <span class=\"badge bg-secondary\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["emailCounts"]) || array_key_exists("emailCounts", $context) ? $context["emailCounts"] : (function () { throw new RuntimeError('Variable "emailCounts" does not exist.', 35, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "email", [], "any", false, false, false, 35), [], "array", false, false, false, 35), "html", null, true);
                    yield "</span>
                        ";
                }
                // line 37
                yield "                    </td>
                    <td>";
                // line 38
                yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\BadWordsFilterExtension']->filterBadWords(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "message", [], "any", false, false, false, 38)), "html", null, true));
                yield "</td>
                    <td>
                        <span class=\"badge ";
                // line 40
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "priorite", [], "any", false, false, false, 40) == "Urgente")) {
                    yield "bg-danger";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "priorite", [], "any", false, false, false, 40) == "Haute")) {
                    yield "bg-warning text-dark";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "priorite", [], "any", false, false, false, 40) == "Moyenne")) {
                    yield "bg-info text-dark";
                } else {
                    yield "bg-primary";
                }
                yield "\">
                            ";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "priorite", [], "any", false, false, false, 41), "html", null, true);
                yield "
                        </span>
                    </td>
                    <td>
                        <span class=\"badge ";
                // line 45
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "statut", [], "any", false, false, false, 45) == "En attente")) {
                    yield "bg-warning text-dark";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "statut", [], "any", false, false, false, 45) == "En cours")) {
                    yield "bg-info text-dark";
                } else {
                    yield "bg-success";
                }
                yield "\">
                            ";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "statut", [], "any", false, false, false, 46), "html", null, true);
                yield "
                        </span>
                    </td>
                    <td>
                        <div class=\"btn-group\">
                            <a href=\"";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 51)]), "html", null, true);
                yield "\" 
                               class=\"btn btn-sm btn-info\" title=\"Voir\">
                                <i class=\"fas fa-eye\"></i>
                            </a>
                            <a href=\"";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 55)]), "html", null, true);
                yield "\" 
                               class=\"btn btn-sm btn-warning\" title=\"Modifier\">
                                <i class=\"fas fa-edit\"></i>
                            </a>
                            <form method=\"post\" action=\"";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamation_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 59)]), "html", null, true);
                yield "\" 
                                  style=\"display: inline-block;\"
                                  onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette réclamation ?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 62))), "html", null, true);
                yield "\">
                                <button type=\"submit\" class=\"btn btn-sm btn-danger\" title=\"Supprimer\">
                                    <i class=\"fas fa-trash\"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['reclamation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            yield "        </tbody>
    </table>

    <div class=\"navigation d-flex justify-content-center mt-4\">
        ";
            // line 75
            yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 75, $this->source); })()), "admin/pagination.html.twig");
            yield "
    </div>
";
        } else {
            // line 78
            yield "    <div class=\"alert alert-info\">
        Aucune réclamation trouvée
    </div>
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Admin/reclamation/_reclamations_table.html.twig";
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
        return array (  239 => 78,  233 => 75,  227 => 71,  212 => 62,  206 => 59,  199 => 55,  192 => 51,  184 => 46,  174 => 45,  167 => 41,  155 => 40,  150 => 38,  147 => 37,  141 => 35,  139 => 34,  135 => 33,  130 => 31,  126 => 30,  122 => 29,  118 => 28,  115 => 27,  112 => 26,  109 => 25,  106 => 24,  103 => 23,  100 => 22,  97 => 21,  94 => 20,  91 => 19,  88 => 18,  85 => 17,  81 => 16,  73 => 11,  69 => 10,  64 => 8,  60 => 7,  56 => 6,  52 => 5,  47 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if pagination.items|length > 0 %}
    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th>{{ knp_pagination_sortable(pagination, 'ID', 'r.id') }}</th>
                <th>{{ knp_pagination_sortable(pagination, 'Date', 'r.createdAt') }}</th>
                <th>{{ knp_pagination_sortable(pagination, 'Nom', 'r.nom') }}</th>
                <th>{{ knp_pagination_sortable(pagination, 'Email', 'r.email') }}</th>
                <th>Message</th>
                <th>{{ knp_pagination_sortable(pagination, 'Priorité', 'r.priorite') }}</th>
                <th>{{ knp_pagination_sortable(pagination, 'Statut', 'r.statut') }}</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {% for reclamation in pagination %}
                {% set rowClass = '' %}
                {% if reclamation.priorite == 'Urgente' %}
                    {% set rowClass = 'table-danger' %}
                {% elseif reclamation.priorite == 'Haute' %}
                    {% set rowClass = 'table-warning' %}
                {% elseif reclamation.priorite == 'Moyenne' %}
                    {% set rowClass = 'table-info' %}
                {% elseif reclamation.priorite == 'Basse' %}
                    {% set rowClass = 'table-primary' %}
                {% endif %}
                
                <tr class=\"{{ rowClass }}\">
                    <td>{{ reclamation.id }}</td>
                    <td>{{ reclamation.createdAt|date('d/m/Y H:i') }}</td>
                    <td>{{ reclamation.nom }}</td>
                    <td>
                        {{ reclamation.email }}
                        {% if emailCounts[reclamation.email] > 1 %}
                            <span class=\"badge bg-secondary\">{{ emailCounts[reclamation.email] }}</span>
                        {% endif %}
                    </td>
                    <td>{{ reclamation.message|badwords_filter|nl2br }}</td>
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
                        <div class=\"btn-group\">
                            <a href=\"{{ path('admin_reclamation_show', {'id': reclamation.id}) }}\" 
                               class=\"btn btn-sm btn-info\" title=\"Voir\">
                                <i class=\"fas fa-eye\"></i>
                            </a>
                            <a href=\"{{ path('admin_reclamation_edit', {'id': reclamation.id}) }}\" 
                               class=\"btn btn-sm btn-warning\" title=\"Modifier\">
                                <i class=\"fas fa-edit\"></i>
                            </a>
                            <form method=\"post\" action=\"{{ path('admin_reclamation_delete', {'id': reclamation.id}) }}\" 
                                  style=\"display: inline-block;\"
                                  onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette réclamation ?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ reclamation.id) }}\">
                                <button type=\"submit\" class=\"btn btn-sm btn-danger\" title=\"Supprimer\">
                                    <i class=\"fas fa-trash\"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>

    <div class=\"navigation d-flex justify-content-center mt-4\">
        {{ knp_pagination_render(pagination, 'admin/pagination.html.twig') }}
    </div>
{% else %}
    <div class=\"alert alert-info\">
        Aucune réclamation trouvée
    </div>
{% endif %}
", "Admin/reclamation/_reclamations_table.html.twig", "C:\\xampp\\htdocs\\Novalearn-reclamation\\templates\\Admin\\reclamation\\_reclamations_table.html.twig");
    }
}
