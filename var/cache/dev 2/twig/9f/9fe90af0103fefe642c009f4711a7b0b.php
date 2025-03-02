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

/* course/edit.html.twig */
class __TwigTemplate_d88dad699fe1edd24276b7cbf24a9777 extends Template
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
            'head' => [$this, 'block_head'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "course/edit.html.twig"));

        // line 1
        yield "<!DOCTYPE html>

";
        // line 3
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 4
        yield "
";
        // line 5
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 54
        yield "
";
        // line 55
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Modifier un cours";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 6
        yield "    <style>
        .form-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-container h1 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #9c27b0; /* Mauve */
        }

        .form-container .btn-primary {
            background-color: #ffeb3b; /* Jaune */
            color: #fff;
            border: none;
        }

        .form-container .btn-primary:hover {
            background-color: #fdd835; /* Jaune foncé */
        }

        .form-container .btn-secondary {
            background-color: #4caf50; /* Vert */
            color: #fff;
            border: none;
        }

        .form-container .btn-secondary:hover {
            background-color: #388e3c; /* Vert foncé */
        }

        .form-container a {
            display: inline-block;
            margin-top: 20px;
            color: #9c27b0; /* Mauve */
            text-decoration: none;
        }

        .form-container a:hover {
            text-decoration: underline;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 55
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 56
        yield "    <div class=\"form-container\">
        <h1>Modifier le cours : ";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 57, $this->source); })()), "titre", [], "any", false, false, false, 57), "html", null, true);
        yield "</h1>
        
        ";
        // line 59
        yield Twig\Extension\CoreExtension::include($this->env, $context, "course/_form.html.twig", ["button_label" => "Enregistrer les modifications"]);
        yield "

        <a href=\"";
        // line 61
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_course_index");
        yield "\" class=\"btn btn-secondary\">Retour à la liste des cours</a>
        
        ";
        // line 63
        yield Twig\Extension\CoreExtension::include($this->env, $context, "course/_delete_form.html.twig");
        yield "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "course/edit.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  180 => 63,  175 => 61,  170 => 59,  165 => 57,  162 => 56,  152 => 55,  97 => 6,  87 => 5,  70 => 3,  62 => 55,  59 => 54,  57 => 5,  54 => 4,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>

{% block title %}Modifier un cours{% endblock %}

{% block head %}
    <style>
        .form-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-container h1 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #9c27b0; /* Mauve */
        }

        .form-container .btn-primary {
            background-color: #ffeb3b; /* Jaune */
            color: #fff;
            border: none;
        }

        .form-container .btn-primary:hover {
            background-color: #fdd835; /* Jaune foncé */
        }

        .form-container .btn-secondary {
            background-color: #4caf50; /* Vert */
            color: #fff;
            border: none;
        }

        .form-container .btn-secondary:hover {
            background-color: #388e3c; /* Vert foncé */
        }

        .form-container a {
            display: inline-block;
            margin-top: 20px;
            color: #9c27b0; /* Mauve */
            text-decoration: none;
        }

        .form-container a:hover {
            text-decoration: underline;
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"form-container\">
        <h1>Modifier le cours : {{ course.titre }}</h1>
        
        {{ include('course/_form.html.twig', {'button_label': 'Enregistrer les modifications'}) }}

        <a href=\"{{ path('app_course_index') }}\" class=\"btn btn-secondary\">Retour à la liste des cours</a>
        
        {{ include('course/_delete_form.html.twig') }}
    </div>
{% endblock %}
", "course/edit.html.twig", "/Users/cyrineberrabah/Desktop/cycy-projet/templates/course/edit.html.twig");
    }
}
