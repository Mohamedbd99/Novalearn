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

/* reclamation/_admin_reclamations_list.html.twig */
class __TwigTemplate_35d0fca1657638ff7e9b67b5cc9776ba extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/_admin_reclamations_list.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 1, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 2
            yield "    <div class=\"col-12 reclamation-item\" 
         data-status=\"";
            // line 3
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "statut", [], "any", false, false, false, 3), "html", null, true);
            yield "\"
         data-priority=\"";
            // line 4
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "priorite", [], "any", false, false, false, 4), "html", null, true);
            yield "\"
         data-category=\"";
            // line 5
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "category", [], "any", false, false, false, 5), "id", [], "any", false, false, false, 5), "html", null, true);
            yield "\"
         data-date=\"";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "createdAt", [], "any", false, false, false, 6), "Y-m-d H:i:s"), "html", null, true);
            yield "\">
        <div class=\"card reclamation-card\">
            <div class=\"priority-indicator priority-";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "priorite", [], "any", false, false, false, 8)), "html", null, true);
            yield "\"></div>
            <div class=\"card-body\">
                <div class=\"d-flex justify-content-between align-items-start\">
                    <div>
                        <h5 class=\"card-title\">";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "category", [], "any", false, false, false, 12), "name", [], "any", false, false, false, 12), "html", null, true);
            yield "</h5>
                        <div class=\"reclamation-date\">
                            <i class=\"far fa-calendar-alt\"></i>
                            ";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "createdAt", [], "any", false, false, false, 15), "d/m/Y H:i"), "html", null, true);
            yield "
                        </div>
                        <div class=\"text-muted\">
                            <i class=\"far fa-envelope\"></i> ";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "email", [], "any", false, false, false, 18), "html", null, true);
            yield "
                        </div>
                    </div>
                    <div class=\"d-flex gap-2\">
                        <span class=\"badge status-badge bg-";
            // line 22
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "statut", [], "any", false, false, false, 22) == "En attente")) ? ("warning") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "statut", [], "any", false, false, false, 22) == "En cours")) ? ("info") : ("success"))));
            yield "\">
                            ";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "statut", [], "any", false, false, false, 23), "html", null, true);
            yield "
                        </span>
                        <span class=\"badge status-badge bg-";
            // line 25
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "priorite", [], "any", false, false, false, 25) == "Urgente")) ? ("danger") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "priorite", [], "any", false, false, false, 25) == "Haute")) ? ("warning") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "priorite", [], "any", false, false, false, 25) == "Moyenne")) ? ("info") : ("success"))))));
            yield "\">
                            ";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "priorite", [], "any", false, false, false, 26), "html", null, true);
            yield "
                        </span>
                    </div>
                </div>
                
                <p class=\"reclamation-message\">";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "message", [], "any", false, false, false, 31), "html", null, true);
            yield "</p>
                
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div class=\"btn-group\">
                        <a href=\"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary\">
                            <i class=\"fas fa-eye\"></i> Voir détails
                        </a>
                        <a href=\"";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-secondary\">
                            <i class=\"fas fa-edit\"></i> Modifier
                        </a>
                    </div>
                    ";
            // line 42
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "reponses", [], "any", false, false, false, 42)) > 0)) {
                // line 43
                yield "                        <span class=\"badge bg-primary\">
                            <i class=\"fas fa-comments\"></i> ";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "reponses", [], "any", false, false, false, 44)), "html", null, true);
                yield " réponse(s)
                        </span>
                    ";
            }
            // line 47
            yield "                </div>
            </div>
        </div>
    </div>
";
            $context['_iterated'] = true;
        }
        // line 59
        if (!$context['_iterated']) {
            // line 52
            yield "    <div class=\"col-12\">
        <div class=\"empty-state\">
            <i class=\"fas fa-search\"></i>
            <h3>Aucun résultat</h3>
            <p class=\"text-muted\">Aucune réclamation ne correspond à vos critères de recherche.</p>
        </div>
    </div>
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
        return "reclamation/_admin_reclamations_list.html.twig";
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
        return array (  158 => 52,  156 => 59,  148 => 47,  142 => 44,  139 => 43,  137 => 42,  130 => 38,  124 => 35,  117 => 31,  109 => 26,  105 => 25,  100 => 23,  96 => 22,  89 => 18,  83 => 15,  77 => 12,  70 => 8,  65 => 6,  61 => 5,  57 => 4,  53 => 3,  50 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% for reclamation in reclamations %}
    <div class=\"col-12 reclamation-item\" 
         data-status=\"{{ reclamation.statut }}\"
         data-priority=\"{{ reclamation.priorite }}\"
         data-category=\"{{ reclamation.category.id }}\"
         data-date=\"{{ reclamation.createdAt|date('Y-m-d H:i:s') }}\">
        <div class=\"card reclamation-card\">
            <div class=\"priority-indicator priority-{{ reclamation.priorite|lower }}\"></div>
            <div class=\"card-body\">
                <div class=\"d-flex justify-content-between align-items-start\">
                    <div>
                        <h5 class=\"card-title\">{{ reclamation.category.name }}</h5>
                        <div class=\"reclamation-date\">
                            <i class=\"far fa-calendar-alt\"></i>
                            {{ reclamation.createdAt|date('d/m/Y H:i') }}
                        </div>
                        <div class=\"text-muted\">
                            <i class=\"far fa-envelope\"></i> {{ reclamation.email }}
                        </div>
                    </div>
                    <div class=\"d-flex gap-2\">
                        <span class=\"badge status-badge bg-{{ reclamation.statut == 'En attente' ? 'warning' : (reclamation.statut == 'En cours' ? 'info' : 'success') }}\">
                            {{ reclamation.statut }}
                        </span>
                        <span class=\"badge status-badge bg-{{ reclamation.priorite == 'Urgente' ? 'danger' : (reclamation.priorite == 'Haute' ? 'warning' : (reclamation.priorite == 'Moyenne' ? 'info' : 'success')) }}\">
                            {{ reclamation.priorite }}
                        </span>
                    </div>
                </div>
                
                <p class=\"reclamation-message\">{{ reclamation.message }}</p>
                
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div class=\"btn-group\">
                        <a href=\"{{ path('app_reclamation_show', {'id': reclamation.id}) }}\" class=\"btn btn-sm btn-outline-primary\">
                            <i class=\"fas fa-eye\"></i> Voir détails
                        </a>
                        <a href=\"{{ path('app_reclamation_edit', {'id': reclamation.id}) }}\" class=\"btn btn-sm btn-outline-secondary\">
                            <i class=\"fas fa-edit\"></i> Modifier
                        </a>
                    </div>
                    {% if reclamation.reponses|length > 0 %}
                        <span class=\"badge bg-primary\">
                            <i class=\"fas fa-comments\"></i> {{ reclamation.reponses|length }} réponse(s)
                        </span>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
{% else %}
    <div class=\"col-12\">
        <div class=\"empty-state\">
            <i class=\"fas fa-search\"></i>
            <h3>Aucun résultat</h3>
            <p class=\"text-muted\">Aucune réclamation ne correspond à vos critères de recherche.</p>
        </div>
    </div>
{% endfor %}
", "reclamation/_admin_reclamations_list.html.twig", "C:\\xampp\\htdocs\\Novalearn-reclamation\\templates\\reclamation\\_admin_reclamations_list.html.twig");
    }
}
