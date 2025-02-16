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

/* blog/new.html.twig */
class __TwigTemplate_5f0d8c1765fe393ee0bf79cdf60cd443 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/new.html.twig"));

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

        /* Style du formulaire */
        form {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 30px auto;
        }

        form label {
            font-size: 1rem;
            color: #333;
            margin-bottom: 10px;
            display: block;
        }

        form input, form textarea, form select {
            width: 100%;
            padding: 12px;
            margin: 8px 0 20px;
            border-radius: 4px;
            border: 1px solid #ccc;
            font-size: 1rem;
            box-sizing: border-box;
            background-color: #fafafa;
        }

        form input:focus, form textarea:focus, form select:focus {
            border-color: #0066cc;
            outline: none;
            background-color: #f1faff;
        }

        /* Style pour les boutons */
        button {
            background-color: #FFC107;
            color: white;
            padding: 12px 20px;
            border-radius: 5px;
            border: none;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: rgb(80, 147, 214);
        }

        /* Style du lien \"Back to list\" */
        .back-btn {
            display: inline-block;
            background-color: #0066cc;
            color: white;
            padding: 12px 20px;
            font-size: 1rem;
            border-radius: 5px;
            text-align: center;
            text-decoration: none;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        .back-btn:hover {
            background-color: #004b8d;
        }

    </style>

    <h1>Create New Blog</h1>

    ";
        // line 92
        yield Twig\Extension\CoreExtension::include($this->env, $context, "blog/_form.html.twig");
        yield "

    <!-- Lien \"Back to list\" transformé en bouton -->
    <a href=\"";
        // line 95
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog_index");
        yield "\" class=\"back-btn\">Back to list</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "blog/new.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  163 => 95,  157 => 92,  66 => 3,  49 => 2,  46 => 1,);
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

        /* Style du formulaire */
        form {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 30px auto;
        }

        form label {
            font-size: 1rem;
            color: #333;
            margin-bottom: 10px;
            display: block;
        }

        form input, form textarea, form select {
            width: 100%;
            padding: 12px;
            margin: 8px 0 20px;
            border-radius: 4px;
            border: 1px solid #ccc;
            font-size: 1rem;
            box-sizing: border-box;
            background-color: #fafafa;
        }

        form input:focus, form textarea:focus, form select:focus {
            border-color: #0066cc;
            outline: none;
            background-color: #f1faff;
        }

        /* Style pour les boutons */
        button {
            background-color: #FFC107;
            color: white;
            padding: 12px 20px;
            border-radius: 5px;
            border: none;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: rgb(80, 147, 214);
        }

        /* Style du lien \"Back to list\" */
        .back-btn {
            display: inline-block;
            background-color: #0066cc;
            color: white;
            padding: 12px 20px;
            font-size: 1rem;
            border-radius: 5px;
            text-align: center;
            text-decoration: none;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        .back-btn:hover {
            background-color: #004b8d;
        }

    </style>

    <h1>Create New Blog</h1>

    {{ include('blog/_form.html.twig') }}

    <!-- Lien \"Back to list\" transformé en bouton -->
    <a href=\"{{ path('app_blog_index') }}\" class=\"back-btn\">Back to list</a>
{% endblock %}
", "blog/new.html.twig", "C:\\Users\\yassi\\Downloads\\Novalearn-master\\Novalearn-master\\templates\\blog\\new.html.twig");
    }
}
