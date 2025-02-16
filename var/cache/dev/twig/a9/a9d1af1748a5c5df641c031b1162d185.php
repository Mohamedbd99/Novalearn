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

/* blog/show.html.twig */
class __TwigTemplate_229bbdd4d19129be73b63fab0e560b04 extends Template
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
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/show.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 2
        yield "
";
        // line 3
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Blog";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
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

        /* Tableau des détails du blog */
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

        /* Style des liens */
        a {
            text-decoration: none;
            color: #0066cc;
            padding: 10px;
            border-radius: 4px;
            margin-right: 10px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #004b8d;
            color: white;
        }

        /* Bouton de suppression */
        .delete-btn {
            background-color: #dc3545;
            color: white;
            padding: 10px 20px;
            font-size: 1rem;
            border-radius: 5px;
            margin-top: 20px;
            text-decoration: none;
            display: inline-block;
            text-align: center;
            transition: background-color 0.3s ease;
        }

        .delete-btn:hover {
            background-color: #c82333;
        }
    </style>

    <h1>Blog</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 83, $this->source); })()), "id", [], "any", false, false, false, 83), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 87, $this->source); })()), "description", [], "any", false, false, false, 87), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Content</th>
                <td>";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 91, $this->source); })()), "content", [], "any", false, false, false, 91), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 95, $this->source); })()), "image", [], "any", false, false, false, 95), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Category</th>
                <td>";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 99, $this->source); })()), "category", [], "any", false, false, false, 99), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Created_at</th>
                <td>";
        // line 103
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 103, $this->source); })()), "createdAt", [], "any", false, false, false, 103)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 103, $this->source); })()), "createdAt", [], "any", false, false, false, 103), "Y-m-d H:i:s"), "html", null, true)) : (""));
        yield "</td>
            </tr>
        </tbody>
    </table>

    <div>
        <a href=\"";
        // line 109
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog_index");
        yield "\">Back to list</a>
        <a href=\"";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 110, $this->source); })()), "id", [], "any", false, false, false, 110)]), "html", null, true);
        yield "\">Edit</a>
    </div>

    <!-- Bouton de suppression -->
    <a href=\"";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 114, $this->source); })()), "id", [], "any", false, false, false, 114)]), "html", null, true);
        yield "\" class=\"delete-btn\" onclick=\"return confirm('Are you sure you want to delete this blog?');\">Delete</a>

    ";
        // line 116
        yield Twig\Extension\CoreExtension::include($this->env, $context, "blog/_delete_form.html.twig");
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "blog/show.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  228 => 116,  223 => 114,  216 => 110,  212 => 109,  203 => 103,  196 => 99,  189 => 95,  182 => 91,  175 => 87,  168 => 83,  87 => 4,  77 => 3,  60 => 1,  52 => 3,  49 => 2,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block title %}Blog{% endblock %}

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

        /* Tableau des détails du blog */
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

        /* Style des liens */
        a {
            text-decoration: none;
            color: #0066cc;
            padding: 10px;
            border-radius: 4px;
            margin-right: 10px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #004b8d;
            color: white;
        }

        /* Bouton de suppression */
        .delete-btn {
            background-color: #dc3545;
            color: white;
            padding: 10px 20px;
            font-size: 1rem;
            border-radius: 5px;
            margin-top: 20px;
            text-decoration: none;
            display: inline-block;
            text-align: center;
            transition: background-color 0.3s ease;
        }

        .delete-btn:hover {
            background-color: #c82333;
        }
    </style>

    <h1>Blog</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ blog.id }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ blog.description }}</td>
            </tr>
            <tr>
                <th>Content</th>
                <td>{{ blog.content }}</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>{{ blog.image }}</td>
            </tr>
            <tr>
                <th>Category</th>
                <td>{{ blog.category }}</td>
            </tr>
            <tr>
                <th>Created_at</th>
                <td>{{ blog.createdAt ? blog.createdAt|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
        </tbody>
    </table>

    <div>
        <a href=\"{{ path('app_blog_index') }}\">Back to list</a>
        <a href=\"{{ path('app_blog_edit', {'id': blog.id}) }}\">Edit</a>
    </div>

    <!-- Bouton de suppression -->
    <a href=\"{{ path('app_blog_delete', {'id': blog.id}) }}\" class=\"delete-btn\" onclick=\"return confirm('Are you sure you want to delete this blog?');\">Delete</a>

    {{ include('blog/_delete_form.html.twig') }}
{% endblock %}
", "blog/show.html.twig", "/Users/cyrineberrabah/Desktop/piDev/Novalearn-new_project-3/templates/blog/show.html.twig");
    }
}
