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

/* blog/edit.html.twig */
class __TwigTemplate_78cb9da0e535e612a912264ad1b4475c extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/edit.html.twig"));

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

        /* Style du lien \"Back to list\" */
        .back-link {
            display: inline-block;
            padding: 10px;
            margin-top: 20px;
            background-color: #0066cc;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
            transition: background-color 0.3s ease;
        }

        .back-link:hover {
            background-color: #004b8d;
        }

        /* Formulaire */
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

        /* Style des boutons */
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
            background-color:rgb(80, 147, 214);
        }

    </style>

    <h1>Edit Blog</h1>

    ";
        // line 91
        yield Twig\Extension\CoreExtension::include($this->env, $context, "blog/_form.html.twig", ["button_label" => "Update"]);
        yield "

    <div>
        <a href=\"";
        // line 94
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog_index");
        yield "\" class=\"back-link\">Back to list</a>
    </div>

    ";
        // line 97
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
        return "blog/edit.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  168 => 97,  162 => 94,  156 => 91,  66 => 3,  49 => 2,  46 => 1,);
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

        /* Style du lien \"Back to list\" */
        .back-link {
            display: inline-block;
            padding: 10px;
            margin-top: 20px;
            background-color: #0066cc;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
            transition: background-color 0.3s ease;
        }

        .back-link:hover {
            background-color: #004b8d;
        }

        /* Formulaire */
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

        /* Style des boutons */
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
            background-color:rgb(80, 147, 214);
        }

    </style>

    <h1>Edit Blog</h1>

    {{ include('blog/_form.html.twig', {'button_label': 'Update'}) }}

    <div>
        <a href=\"{{ path('app_blog_index') }}\" class=\"back-link\">Back to list</a>
    </div>

    {{ include('blog/_delete_form.html.twig') }}
{% endblock %}
", "blog/edit.html.twig", "C:\\Users\\yassi\\Downloads\\Novalearn-master\\Novalearn-master\\templates\\blog\\edit.html.twig");
    }
}
