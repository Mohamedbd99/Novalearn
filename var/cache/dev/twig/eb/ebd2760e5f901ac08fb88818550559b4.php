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

/* blog/index.html.twig */
class __TwigTemplate_1cd8772bd88dea860bc9ce8bac0d3329 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        // line 1
        yield "
";
        // line 2
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        yield "    <style>
        /* Style général du corps */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7fa;
            color: #333;
            margin: 0;
            padding: 0;
        }

        /* Header */
        h1 {
            text-align: center;
            color: #0066cc;
            padding: 20px 0;
        }

        /* Tableau des blogs */
        .table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px auto;
        }

        .table th, .table td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ccc;
        }

        .table th {
            background-color: #0066cc;
            color: white;
        }

        .table td {
            background-color: #fafafa;
        }

        .table a {
            color: #0066cc;
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 4px;
            background-color: #f1faff;
            margin-right: 5px;
            transition: background-color 0.3s ease;
        }

        .table a:hover {
            background-color: #004b8d;
            color: white;
        }

        /* Style du lien \"Create new\" */
        .create-btn {
            display: inline-block;
            background-color: #28a745;
            color: white;
            padding: 12px 20px;
            font-size: 1rem;
            border-radius: 5px;
            text-align: center;
            text-decoration: none;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        .create-btn:hover {
            background-color: #218838;
        }

    </style>

    <h1>Blog index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Description</th>
                <th>Content</th>
                <th>Image</th>
                <th>Category</th>
                <th>Created_at</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["blogs"]) || array_key_exists("blogs", $context) ? $context["blogs"] : (function () { throw new RuntimeError('Variable "blogs" does not exist.', 92, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 93
            yield "            <tr>
                <td>";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["blog"], "id", [], "any", false, false, false, 94), "html", null, true);
            yield "</td>
                <td>";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["blog"], "description", [], "any", false, false, false, 95), "html", null, true);
            yield "</td>
                <td>";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["blog"], "content", [], "any", false, false, false, 96), "html", null, true);
            yield "</td>
                <td>";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 97), "html", null, true);
            yield "</td>
                <td>";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["blog"], "category", [], "any", false, false, false, 98), "html", null, true);
            yield "</td>
                <td>";
            // line 99
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["blog"], "createdAt", [], "any", false, false, false, 99)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["blog"], "createdAt", [], "any", false, false, false, 99), "Y-m-d H:i:s"), "html", null, true)) : (""));
            yield "</td>
                <td>
                    <a href=\"";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["blog"], "id", [], "any", false, false, false, 101)]), "html", null, true);
            yield "\">Show</a>
                    <a href=\"";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["blog"], "id", [], "any", false, false, false, 102)]), "html", null, true);
            yield "\">Edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 109
        if (!$context['_iterated']) {
            // line 106
            yield "            <tr>
                <td colspan=\"7\">No records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['blog'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        yield "        </tbody>
    </table>

    <!-- Bouton pour créer un nouveau blog -->
    <a href=\"";
        // line 114
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog_new");
        yield "\" class=\"create-btn\">Create new</a>
     <a href=\"";
        // line 115
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_HomeMedecin");
        yield "\" class=\"create-btn\">Retour</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "blog/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  223 => 115,  219 => 114,  213 => 110,  204 => 106,  202 => 109,  194 => 102,  190 => 101,  185 => 99,  181 => 98,  177 => 97,  173 => 96,  169 => 95,  165 => 94,  162 => 93,  157 => 92,  66 => 3,  49 => 2,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
{% block body %}
    <style>
        /* Style général du corps */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7fa;
            color: #333;
            margin: 0;
            padding: 0;
        }

        /* Header */
        h1 {
            text-align: center;
            color: #0066cc;
            padding: 20px 0;
        }

        /* Tableau des blogs */
        .table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px auto;
        }

        .table th, .table td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ccc;
        }

        .table th {
            background-color: #0066cc;
            color: white;
        }

        .table td {
            background-color: #fafafa;
        }

        .table a {
            color: #0066cc;
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 4px;
            background-color: #f1faff;
            margin-right: 5px;
            transition: background-color 0.3s ease;
        }

        .table a:hover {
            background-color: #004b8d;
            color: white;
        }

        /* Style du lien \"Create new\" */
        .create-btn {
            display: inline-block;
            background-color: #28a745;
            color: white;
            padding: 12px 20px;
            font-size: 1rem;
            border-radius: 5px;
            text-align: center;
            text-decoration: none;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        .create-btn:hover {
            background-color: #218838;
        }

    </style>

    <h1>Blog index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Description</th>
                <th>Content</th>
                <th>Image</th>
                <th>Category</th>
                <th>Created_at</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for blog in blogs %}
            <tr>
                <td>{{ blog.id }}</td>
                <td>{{ blog.description }}</td>
                <td>{{ blog.content }}</td>
                <td>{{ blog.image }}</td>
                <td>{{ blog.category }}</td>
                <td>{{ blog.createdAt ? blog.createdAt|date('Y-m-d H:i:s') : '' }}</td>
                <td>
                    <a href=\"{{ path('app_blog_show', {'id': blog.id}) }}\">Show</a>
                    <a href=\"{{ path('app_blog_edit', {'id': blog.id}) }}\">Edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"7\">No records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <!-- Bouton pour créer un nouveau blog -->
    <a href=\"{{ path('app_blog_new') }}\" class=\"create-btn\">Create new</a>
     <a href=\"{{ path('app_HomeMedecin') }}\" class=\"create-btn\">Retour</a>
{% endblock %}
", "blog/index.html.twig", "C:\\Users\\yassi\\Downloads\\Novalearn-master\\Novalearn-master\\templates\\blog\\index.html.twig");
    }
}
