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

/* reclamation/public/_reclamations_list.html.twig */
class __TwigTemplate_3be17f5aa390fa7ee5609f7c8101d711 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/public/_reclamations_list.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 1, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 2
            yield "    <tr>
        <td>";
            // line 3
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "nom", [], "any", false, false, false, 3), "html", null, true);
            yield "</td>
        <td>";
            // line 4
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "message", [], "any", false, false, false, 4), 0, 50), "html", null, true);
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "message", [], "any", false, false, false, 4)) > 50)) {
                yield "...";
            }
            yield "</td>
        <td>
            <span class=\"badge bg-";
            // line 6
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "statut", [], "any", false, false, false, 6) == "En attente")) ? ("warning") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "statut", [], "any", false, false, false, 6) == "Traitée")) ? ("success") : ("info"))));
            yield "\">
                ";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "statut", [], "any", false, false, false, 7), "html", null, true);
            yield "
            </span>
        </td>
        <td>";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "createdAt", [], "any", false, false, false, 10), "d/m/Y H:i"), "html", null, true);
            yield "</td>
    </tr>
";
            $context['_iterated'] = true;
        }
        // line 16
        if (!$context['_iterated']) {
            // line 13
            yield "    <tr>
        <td colspan=\"4\" class=\"text-center\">Aucune réclamation trouvée</td>
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
        return "reclamation/public/_reclamations_list.html.twig";
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
        return array (  84 => 13,  82 => 16,  75 => 10,  69 => 7,  65 => 6,  57 => 4,  53 => 3,  50 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% for reclamation in reclamations %}
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
", "reclamation/public/_reclamations_list.html.twig", "C:\\xampp\\htdocs\\Novalearn-reclamation\\templates\\reclamation\\public\\_reclamations_list.html.twig");
    }
}
