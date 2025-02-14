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

/* Admin/EditUser.html.twig */
class __TwigTemplate_8d47ad5eeb46cb521bc8c519cd3b9b67 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/EditUser.html.twig"));

        // line 1
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

        // line 2
        yield "    <style>
        body {
            font-family: Arial, sans-serif;
            background: #ecf0f1;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #2c3e50;
        }

        .form-container {
            background: white;
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn {
            display: block;
            width: 100%;
            padding: 10px;
            background: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .btn:hover {
            background: #2980b9;
        }

        .btn-secondary {
            display: block;
            text-align: center;
            padding: 10px;
            margin-top: 10px;
            background: #e74c3c;
            color: white;
            border-radius: 5px;
            text-decoration: none;
        }

        .btn-secondary:hover {
            background: #c0392b;
        }
    </style>

    <h1>Éditer l'utilisateur</h1>

    <div class=\"form-container\">
        ";
        // line 69
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), 'form_start');
        yield "
        
        <div class=\"form-group\">
            <div class=\"form-control\">";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "role", [], "any", false, false, false, 72), 'row');
        yield "</div>
        </div>
        
        <div class=\"form-group\">
            <div class=\"form-control\">";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "nom", [], "any", false, false, false, 76), 'row');
        yield "</div>
        </div>

        <div class=\"form-group\">
            <div class=\"form-control\">";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "prenom", [], "any", false, false, false, 80), 'row');
        yield "</div>
        </div>

        <div class=\"form-group\">
            <div class=\"form-control\">";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "age", [], "any", false, false, false, 84), 'row');
        yield "</div>
        </div>

        <div class=\"form-group\">
            <div class=\"form-control\">";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "num_tel", [], "any", false, false, false, 88), 'row');
        yield "</div>
        </div>

        <div class=\"form-group\">
            <div class=\"form-control\">";
        // line 92
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "difficulte", [], "any", false, false, false, 92), 'row');
        yield "</div>
        </div>

        <div class=\"form-group\">
            <div class=\"form-control\">";
        // line 96
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "niv_difficulte", [], "any", false, false, false, 96), 'row');
        yield "</div>
        </div>

        <div class=\"form-group\">
            <div class=\"form-control\">";
        // line 100
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "email", [], "any", false, false, false, 100), 'row');
        yield "</div>
        </div>

        <div class=\"form-group\">
            <div class=\"form-control\">";
        // line 104
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "password", [], "any", false, false, false, 104), 'row');
        yield "</div>
        </div>

        <div class=\"form-group\">
            <div class=\"form-control\">";
        // line 108
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "genre", [], "any", false, false, false, 108), 'row');
        yield "</div>
        </div>

        <button class=\"btn\" type=\"submit\">Sauvegarder</button>
        
        ";
        // line 113
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), 'form_end');
        yield "

        <a href=\"";
        // line 115
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
        yield "\" class=\"btn-secondary\">Retour</a>
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
        return "Admin/EditUser.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  214 => 115,  209 => 113,  201 => 108,  194 => 104,  187 => 100,  180 => 96,  173 => 92,  166 => 88,  159 => 84,  152 => 80,  145 => 76,  138 => 72,  132 => 69,  63 => 2,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block body %}
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #ecf0f1;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #2c3e50;
        }

        .form-container {
            background: white;
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn {
            display: block;
            width: 100%;
            padding: 10px;
            background: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .btn:hover {
            background: #2980b9;
        }

        .btn-secondary {
            display: block;
            text-align: center;
            padding: 10px;
            margin-top: 10px;
            background: #e74c3c;
            color: white;
            border-radius: 5px;
            text-decoration: none;
        }

        .btn-secondary:hover {
            background: #c0392b;
        }
    </style>

    <h1>Éditer l'utilisateur</h1>

    <div class=\"form-container\">
        {{ form_start(form) }}
        
        <div class=\"form-group\">
            <div class=\"form-control\">{{ form_row(form.role) }}</div>
        </div>
        
        <div class=\"form-group\">
            <div class=\"form-control\">{{ form_row(form.nom) }}</div>
        </div>

        <div class=\"form-group\">
            <div class=\"form-control\">{{ form_row(form.prenom) }}</div>
        </div>

        <div class=\"form-group\">
            <div class=\"form-control\">{{ form_row(form.age) }}</div>
        </div>

        <div class=\"form-group\">
            <div class=\"form-control\">{{ form_row(form.num_tel) }}</div>
        </div>

        <div class=\"form-group\">
            <div class=\"form-control\">{{ form_row(form.difficulte) }}</div>
        </div>

        <div class=\"form-group\">
            <div class=\"form-control\">{{ form_row(form.niv_difficulte) }}</div>
        </div>

        <div class=\"form-group\">
            <div class=\"form-control\">{{ form_row(form.email) }}</div>
        </div>

        <div class=\"form-group\">
            <div class=\"form-control\">{{ form_row(form.password) }}</div>
        </div>

        <div class=\"form-group\">
            <div class=\"form-control\">{{ form_row(form.genre) }}</div>
        </div>

        <button class=\"btn\" type=\"submit\">Sauvegarder</button>
        
        {{ form_end(form) }}

        <a href=\"{{ path('app_admin') }}\" class=\"btn-secondary\">Retour</a>
    </div>
{% endblock %}
", "Admin/EditUser.html.twig", "C:\\Users\\yassi\\Downloads\\Novalearn-master\\Novalearn-master\\templates\\Admin\\EditUser.html.twig");
    }
}
