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
class __TwigTemplate_f516786672480f42a917102d479512d6 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/show.html.twig"));

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
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 82, $this->source); })()), "id", [], "any", false, false, false, 82), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 86, $this->source); })()), "description", [], "any", false, false, false, 86), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Content</th>
                <td>";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 90, $this->source); })()), "content", [], "any", false, false, false, 90), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 94, $this->source); })()), "image", [], "any", false, false, false, 94), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Category</th>
                <td>";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 98, $this->source); })()), "category", [], "any", false, false, false, 98), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Created_at</th>
                <td>";
        // line 102
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 102, $this->source); })()), "createdAt", [], "any", false, false, false, 102)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 102, $this->source); })()), "createdAt", [], "any", false, false, false, 102), "Y-m-d H:i:s"), "html", null, true)) : (""));
        yield "</td>
            </tr>
        </tbody>
    </table>

    <div>
        <a href=\"";
        // line 108
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog_index");
        yield "\">Back to list</a>
        <a href=\"";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 109, $this->source); })()), "id", [], "any", false, false, false, 109)]), "html", null, true);
        yield "\">Edit</a>
    </div>

    <!-- Bouton de suppression -->
    <a href=\"";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 113, $this->source); })()), "id", [], "any", false, false, false, 113)]), "html", null, true);
        yield "\" class=\"delete-btn\" onclick=\"return confirm('Are you sure you want to delete this blog?');\">Delete</a>

    ";
        // line 115
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
        return array (  207 => 115,  202 => 113,  195 => 109,  191 => 108,  182 => 102,  175 => 98,  168 => 94,  161 => 90,  154 => 86,  147 => 82,  66 => 3,  49 => 2,  46 => 1,);
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
", "blog/show.html.twig", "C:\\Users\\yassi\\Downloads\\Novalearn-master\\Novalearn-master\\templates\\blog\\show.html.twig");
    }
}
