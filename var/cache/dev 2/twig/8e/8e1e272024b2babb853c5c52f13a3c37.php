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

/* course/index.html.twig */
class __TwigTemplate_38ff26c10325634be0469088cbba63d1 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "course/index.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 71
        yield "
";
        // line 72
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 2
        yield "    <style>
        /* Style général pour la table */
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        /* Style pour les en-têtes de table */
        th {
            background-color: #f8f9fa;
            color: #333;
            padding: 10px;
            text-align: left;
            font-weight: bold;
        }

        /* Style pour les cellules de la table */
        td {
            padding: 8px 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        /* Style pour les lignes alternées */
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        /* Style pour les boutons */
        .btn {
            padding: 8px 12px;
            text-decoration: none;
            border-radius: 5px;
            color: #fff;
            font-size: 14px;
            display: inline-block;
            margin-right: 10px;
            text-align: center;
        }

        .btn-info {
            background-color: #17a2b8;
        }

        .btn-warning {
            background-color: #ffc107;
        }

        .btn-info:hover, .btn-warning:hover {
            opacity: 0.8;
        }

        /* Style pour les cellules vides (aucun cours trouvé) */
        .empty-message {
            text-align: center;
            color: #888;
            font-style: italic;
            padding: 20px;
        }

        /* Style pour le nom de l'auteur */
        .author-name {
            color: #555;
            font-weight: bold;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 72
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 73
        yield "    <h1>Liste des Cours</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Titre</th>
                <th>Description</th>
                <th>Contenu</th>
                <th>Auteur</th>

                
            </tr>
        </thead>
        <tbody>
            ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 88, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 89
            yield "                <tr>
                    <td>";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["course"], "id", [], "any", false, false, false, 90), "html", null, true);
            yield "</td>
                    <td>";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["course"], "titre", [], "any", false, false, false, 91), "html", null, true);
            yield "</td>
                    <td>";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["course"], "description", [], "any", false, false, false, 92), "html", null, true);
            yield "</td>
                    <td>";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["course"], "contenu", [], "any", false, false, false, 93), "html", null, true);
            yield "</td>
                    
                    <td class=\"author-name\">";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["course"], "author", [], "any", false, false, false, 95), "nom", [], "any", false, false, false, 95), "html", null, true);
            yield "</td> <!-- Afficher le nom de l'auteur -->
                    <td>
                        <a href=\"";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_course_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["course"], "id", [], "any", false, false, false, 97)]), "html", null, true);
            yield "\" class=\"btn btn-info\">Voir</a>
                        <a href=\"";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_course_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["course"], "id", [], "any", false, false, false, 98)]), "html", null, true);
            yield "\" class=\"btn btn-warning\">Modifier</a>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 105
        if (!$context['_iterated']) {
            // line 102
            yield "                <tr>
                    <td colspan=\"6\" class=\"empty-message\">Aucun cours trouvé.</td> <!-- Message si aucun cours n'est trouvé -->
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['course'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        yield "        </tbody>
    </table>

    <a href=\"";
        // line 109
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_course_index");
        yield "\" class=\"btn btn-info\">Retour à la liste</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "course/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  231 => 109,  226 => 106,  217 => 102,  215 => 105,  207 => 98,  203 => 97,  198 => 95,  193 => 93,  189 => 92,  185 => 91,  181 => 90,  178 => 89,  173 => 88,  156 => 73,  146 => 72,  70 => 2,  60 => 1,  52 => 72,  49 => 71,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block stylesheets %}
    <style>
        /* Style général pour la table */
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        /* Style pour les en-têtes de table */
        th {
            background-color: #f8f9fa;
            color: #333;
            padding: 10px;
            text-align: left;
            font-weight: bold;
        }

        /* Style pour les cellules de la table */
        td {
            padding: 8px 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        /* Style pour les lignes alternées */
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        /* Style pour les boutons */
        .btn {
            padding: 8px 12px;
            text-decoration: none;
            border-radius: 5px;
            color: #fff;
            font-size: 14px;
            display: inline-block;
            margin-right: 10px;
            text-align: center;
        }

        .btn-info {
            background-color: #17a2b8;
        }

        .btn-warning {
            background-color: #ffc107;
        }

        .btn-info:hover, .btn-warning:hover {
            opacity: 0.8;
        }

        /* Style pour les cellules vides (aucun cours trouvé) */
        .empty-message {
            text-align: center;
            color: #888;
            font-style: italic;
            padding: 20px;
        }

        /* Style pour le nom de l'auteur */
        .author-name {
            color: #555;
            font-weight: bold;
        }
    </style>
{% endblock %}

{% block body %}
    <h1>Liste des Cours</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Titre</th>
                <th>Description</th>
                <th>Contenu</th>
                <th>Auteur</th>

                
            </tr>
        </thead>
        <tbody>
            {% for course in courses %}
                <tr>
                    <td>{{ course.id }}</td>
                    <td>{{ course.titre }}</td>
                    <td>{{ course.description }}</td>
                    <td>{{ course.contenu }}</td>
                    
                    <td class=\"author-name\">{{ course.author.nom }}</td> <!-- Afficher le nom de l'auteur -->
                    <td>
                        <a href=\"{{ path('app_course_show', {'id': course.id}) }}\" class=\"btn btn-info\">Voir</a>
                        <a href=\"{{ path('app_course_edit', {'id': course.id}) }}\" class=\"btn btn-warning\">Modifier</a>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"6\" class=\"empty-message\">Aucun cours trouvé.</td> <!-- Message si aucun cours n'est trouvé -->
                </tr>
            {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_course_index') }}\" class=\"btn btn-info\">Retour à la liste</a>
{% endblock %}
", "course/index.html.twig", "/Users/cyrineberrabah/Desktop/cycy-projet/templates/course/index.html.twig");
    }
}
