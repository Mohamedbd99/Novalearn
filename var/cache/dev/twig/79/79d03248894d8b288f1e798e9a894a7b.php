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

/* modifier.html.twig */
class __TwigTemplate_e82c4115c01778c3bdedd6112c311864 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modifier.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 2
        yield "
";
        // line 3
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 52
        yield "
";
        // line 53
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

        yield "Modifier un cours";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 4
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

    // line 53
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 54
        yield "    <div class=\"form-container\">
        <h1>Modifier le cours : ";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 55, $this->source); })()), "titre", [], "any", false, false, false, 55), "html", null, true);
        yield "</h1>

        ";
        // line 57
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), 'form_start');
        yield "
            ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "titre", [], "any", false, false, false, 58), 'row');
        yield "
            ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "description", [], "any", false, false, false, 59), 'row');
        yield "
            ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "contenu", [], "any", false, false, false, 60), 'row');
        yield "
            <button type=\"submit\" class=\"btn btn-primary\">Enregistrer les modifications</button>
        ";
        // line 62
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), 'form_end');
        yield "

        <a href=\"";
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours");
        yield "\" class=\"btn btn-secondary\">Retour à la liste des cours</a>
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
        return "modifier.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  188 => 64,  183 => 62,  178 => 60,  174 => 59,  170 => 58,  166 => 57,  161 => 55,  158 => 54,  148 => 53,  93 => 4,  83 => 3,  66 => 1,  58 => 53,  55 => 52,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block title %}Modifier un cours{% endblock %}

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

        {{ form_start(form) }}
            {{ form_row(form.titre) }}
            {{ form_row(form.description) }}
            {{ form_row(form.contenu) }}
            <button type=\"submit\" class=\"btn btn-primary\">Enregistrer les modifications</button>
        {{ form_end(form) }}

        <a href=\"{{ path('app_cours') }}\" class=\"btn btn-secondary\">Retour à la liste des cours</a>
    </div>
{% endblock %}
", "modifier.html.twig", "C:\\Users\\yassi\\Downloads\\Novalearn-master\\Novalearn-master\\templates\\modifier.html.twig");
    }
}
