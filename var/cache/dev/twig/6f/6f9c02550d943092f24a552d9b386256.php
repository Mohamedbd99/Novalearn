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

/* reclamation/admin/_reclamations_table.html.twig */
class __TwigTemplate_daf9edb23c338b6d07705b15ecda7240 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/admin/_reclamations_table.html.twig"));

        // line 1
        yield "<table class=\"table table-hover\">
    <thead>
        <tr>
            <th>ID</th>
            <th>Date</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Message</th>
            <th>Priorité</th>
            <th>Statut</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 15, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 16
            yield "            <tr class=\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "priorite", [], "any", false, false, false, 16) == "Urgente")) {
                yield "table-danger";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "priorite", [], "any", false, false, false, 16) == "Haute")) {
                yield "table-warning";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "priorite", [], "any", false, false, false, 16) == "Moyenne")) {
                yield "table-info";
            }
            yield "\">
                <td>";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 17), "html", null, true);
            yield "</td>
                <td>";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "createdAt", [], "any", false, false, false, 18), "d/m/Y H:i"), "html", null, true);
            yield "</td>
                <td>";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "nom", [], "any", false, false, false, 19), "html", null, true);
            yield "</td>
                <td>
                    ";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "email", [], "any", false, false, false, 21), "html", null, true);
            yield "
                    ";
            // line 22
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "email", [], "any", false, false, false, 22)) > 10)) {
                // line 23
                yield "                        <span class=\"badge bg-secondary\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 23, $this->source); })()), function ($__r__) use ($context, $macros) { $context["r"] = $__r__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 23, $this->source); })()), "email", [], "any", false, false, false, 23) == CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "email", [], "any", false, false, false, 23)); })), "html", null, true);
                yield "</span>
                    ";
            }
            // line 25
            yield "                </td>
                <td>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "message", [], "any", false, false, false, 26), "html", null, true);
            yield "</td>
                <td>
                    <span class=\"badge bg-";
            // line 28
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "priorite", [], "any", false, false, false, 28) == "Urgente")) ? ("danger") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "priorite", [], "any", false, false, false, 28) == "Haute")) ? ("warning") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "priorite", [], "any", false, false, false, 28) == "Moyenne")) ? ("info") : ("success"))))));
            yield "\">
                        ";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "priorite", [], "any", false, false, false, 29), "html", null, true);
            yield "
                    </span>
                </td>
                <td>
                    <span class=\"badge bg-";
            // line 33
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "statut", [], "any", false, false, false, 33) == "En attente")) ? ("warning") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "statut", [], "any", false, false, false, 33) == "En cours")) ? ("info") : ("success"))));
            yield "\">
                        ";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "statut", [], "any", false, false, false, 34), "html", null, true);
            yield "
                    </span>
                </td>
                <td>
                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-sm btn-info\" title=\"Voir\" data-bs-toggle=\"modal\" data-bs-target=\"#viewModal";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 39), "html", null, true);
            yield "\">
                            <i class=\"fas fa-eye\"></i>
                        </button>
                        <a href=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-warning\" title=\"Modifier\">
                            <i class=\"fas fa-edit\"></i>
                        </a>
                        <form method=\"post\" action=\"";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            yield "\" class=\"d-inline\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette réclamation ?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 46))), "html", null, true);
            yield "\">
                            <button class=\"btn btn-sm btn-danger\" title=\"Supprimer\">
                                <i class=\"fas fa-trash\"></i>
                            </button>
                        </form>
                    </div>

                    <!-- Modal -->
                    <div class=\"modal fade\" id=\"viewModal";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 54), "html", null, true);
            yield "\" tabindex=\"-1\" aria-labelledby=\"viewModalLabel";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 54), "html", null, true);
            yield "\" aria-hidden=\"true\">
                        <div class=\"modal-dialog\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <h5 class=\"modal-title\" id=\"viewModalLabel";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 58), "html", null, true);
            yield "\">Détails de la réclamation #";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 58), "html", null, true);
            yield "</h5>
                                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                </div>
                                <div class=\"modal-body\">
                                    <dl class=\"row\">
                                        <dt class=\"col-sm-4\">Date</dt>
                                        <dd class=\"col-sm-8\">";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "createdAt", [], "any", false, false, false, 64), "d/m/Y H:i"), "html", null, true);
            yield "</dd>
                                        
                                        <dt class=\"col-sm-4\">Nom</dt>
                                        <dd class=\"col-sm-8\">";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "nom", [], "any", false, false, false, 67), "html", null, true);
            yield "</dd>
                                        
                                        <dt class=\"col-sm-4\">Email</dt>
                                        <dd class=\"col-sm-8\">";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "email", [], "any", false, false, false, 70), "html", null, true);
            yield "</dd>
                                        
                                        <dt class=\"col-sm-4\">Message</dt>
                                        <dd class=\"col-sm-8\">";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "message", [], "any", false, false, false, 73), "html", null, true);
            yield "</dd>
                                        
                                        <dt class=\"col-sm-4\">Priorité</dt>
                                        <dd class=\"col-sm-8\">
                                            <span class=\"badge bg-";
            // line 77
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "priorite", [], "any", false, false, false, 77) == "Urgente")) ? ("danger") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "priorite", [], "any", false, false, false, 77) == "Haute")) ? ("warning") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "priorite", [], "any", false, false, false, 77) == "Moyenne")) ? ("info") : ("success"))))));
            yield "\">
                                                ";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "priorite", [], "any", false, false, false, 78), "html", null, true);
            yield "
                                            </span>
                                        </dd>
                                        
                                        <dt class=\"col-sm-4\">Statut</dt>
                                        <dd class=\"col-sm-8\">
                                            <span class=\"badge bg-";
            // line 84
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "statut", [], "any", false, false, false, 84) == "En attente")) ? ("warning") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "statut", [], "any", false, false, false, 84) == "En cours")) ? ("info") : ("success"))));
            yield "\">
                                                ";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "statut", [], "any", false, false, false, 85), "html", null, true);
            yield "
                                            </span>
                                        </dd>
                                    </dl>
                                </div>
                                <div class=\"modal-footer\">
                                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                                    <a href=\"";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 92)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">Modifier</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 103
        if (!$context['_iterated']) {
            // line 100
            yield "            <tr>
                <td colspan=\"8\" class=\"text-center\">Aucune réclamation trouvée</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reclamation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        yield "    </tbody>
</table>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "reclamation/admin/_reclamations_table.html.twig";
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
        return array (  255 => 104,  246 => 100,  244 => 103,  232 => 92,  222 => 85,  218 => 84,  209 => 78,  205 => 77,  198 => 73,  192 => 70,  186 => 67,  180 => 64,  169 => 58,  160 => 54,  149 => 46,  145 => 45,  139 => 42,  133 => 39,  125 => 34,  121 => 33,  114 => 29,  110 => 28,  105 => 26,  102 => 25,  96 => 23,  94 => 22,  90 => 21,  85 => 19,  81 => 18,  77 => 17,  66 => 16,  61 => 15,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<table class=\"table table-hover\">
    <thead>
        <tr>
            <th>ID</th>
            <th>Date</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Message</th>
            <th>Priorité</th>
            <th>Statut</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        {% for reclamation in reclamations %}
            <tr class=\"{% if reclamation.priorite == 'Urgente' %}table-danger{% elseif reclamation.priorite == 'Haute' %}table-warning{% elseif reclamation.priorite == 'Moyenne' %}table-info{% endif %}\">
                <td>{{ reclamation.id }}</td>
                <td>{{ reclamation.createdAt|date('d/m/Y H:i') }}</td>
                <td>{{ reclamation.nom }}</td>
                <td>
                    {{ reclamation.email }}
                    {% if reclamation.email|length > 10 %}
                        <span class=\"badge bg-secondary\">{{ reclamations|filter(r => r.email == reclamation.email)|length }}</span>
                    {% endif %}
                </td>
                <td>{{ reclamation.message }}</td>
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
                        <button type=\"button\" class=\"btn btn-sm btn-info\" title=\"Voir\" data-bs-toggle=\"modal\" data-bs-target=\"#viewModal{{ reclamation.id }}\">
                            <i class=\"fas fa-eye\"></i>
                        </button>
                        <a href=\"{{ path('app_reclamation_edit', {'id': reclamation.id}) }}\" class=\"btn btn-sm btn-warning\" title=\"Modifier\">
                            <i class=\"fas fa-edit\"></i>
                        </a>
                        <form method=\"post\" action=\"{{ path('app_reclamation_delete', {'id': reclamation.id}) }}\" class=\"d-inline\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette réclamation ?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ reclamation.id) }}\">
                            <button class=\"btn btn-sm btn-danger\" title=\"Supprimer\">
                                <i class=\"fas fa-trash\"></i>
                            </button>
                        </form>
                    </div>

                    <!-- Modal -->
                    <div class=\"modal fade\" id=\"viewModal{{ reclamation.id }}\" tabindex=\"-1\" aria-labelledby=\"viewModalLabel{{ reclamation.id }}\" aria-hidden=\"true\">
                        <div class=\"modal-dialog\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <h5 class=\"modal-title\" id=\"viewModalLabel{{ reclamation.id }}\">Détails de la réclamation #{{ reclamation.id }}</h5>
                                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                </div>
                                <div class=\"modal-body\">
                                    <dl class=\"row\">
                                        <dt class=\"col-sm-4\">Date</dt>
                                        <dd class=\"col-sm-8\">{{ reclamation.createdAt|date('d/m/Y H:i') }}</dd>
                                        
                                        <dt class=\"col-sm-4\">Nom</dt>
                                        <dd class=\"col-sm-8\">{{ reclamation.nom }}</dd>
                                        
                                        <dt class=\"col-sm-4\">Email</dt>
                                        <dd class=\"col-sm-8\">{{ reclamation.email }}</dd>
                                        
                                        <dt class=\"col-sm-4\">Message</dt>
                                        <dd class=\"col-sm-8\">{{ reclamation.message }}</dd>
                                        
                                        <dt class=\"col-sm-4\">Priorité</dt>
                                        <dd class=\"col-sm-8\">
                                            <span class=\"badge bg-{{ reclamation.priorite == 'Urgente' ? 'danger' : (reclamation.priorite == 'Haute' ? 'warning' : (reclamation.priorite == 'Moyenne' ? 'info' : 'success')) }}\">
                                                {{ reclamation.priorite }}
                                            </span>
                                        </dd>
                                        
                                        <dt class=\"col-sm-4\">Statut</dt>
                                        <dd class=\"col-sm-8\">
                                            <span class=\"badge bg-{{ reclamation.statut == 'En attente' ? 'warning' : (reclamation.statut == 'En cours' ? 'info' : 'success') }}\">
                                                {{ reclamation.statut }}
                                            </span>
                                        </dd>
                                    </dl>
                                </div>
                                <div class=\"modal-footer\">
                                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                                    <a href=\"{{ path('app_reclamation_edit', {'id': reclamation.id}) }}\" class=\"btn btn-primary\">Modifier</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"8\" class=\"text-center\">Aucune réclamation trouvée</td>
            </tr>
        {% endfor %}
    </tbody>
</table>
", "reclamation/admin/_reclamations_table.html.twig", "C:\\xampp\\htdocs\\Novalearn-reclamation\\templates\\reclamation\\admin\\_reclamations_table.html.twig");
    }
}
