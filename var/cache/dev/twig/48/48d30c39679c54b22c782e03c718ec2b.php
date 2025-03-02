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

/* post/add.html.twig */
class __TwigTemplate_a80c094c6389183615eabddc306cbbf0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/add.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/add.html.twig"));

        // line 1
        yield "
";
        // line 2
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 3
        yield "
";
        // line 4
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Publier un Post";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        yield "    <style>
        body {
            background-color: #f4f7fc;
            font-family: 'Poppins', sans-serif;
        }

        .content-container {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
            padding-top: 5cm;
            padding-bottom: 2cm;
        }

        .card {
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1);
            padding: 0;
            max-width: 800px;
            width: 100%;
            text-align: left;
            transition: transform 0.3s ease-in-out;
            overflow: hidden;
        }

        .card:hover {
            transform: scale(1.01);
        }

        .card-header {
            background: linear-gradient(120deg, #007bff 0%, #ff6600 100%);
            color: white;
            font-size: 2em;
            font-weight: bold;
            padding: 30px;
            margin: 0;
            text-align: center;
            width: 100%;
        }

        .card-body {
            padding: 40px;
        }

        .form-image {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-image img {
            max-width: 50%;
            border-radius: 8px;
        }

        /* Encadré pour chaque champ (Titre, Contenu...) */
        .form-group {
            background-color: #f8f9fa;
            border: 1px solid #ced4da;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 20px;
        }

        /* Label : gras, couleur et police */
        .form-label {
            font-family: 'Roboto', sans-serif;
            font-weight: 700;
            color: #0056b3;
            margin-bottom: 6px;
            display: block;
        }


        .form-control {
            border-radius: 6px;
            border: 2px solid #ced4da;
            font-size: 1em;
            padding: 12px;
            width: 100%;
            transition: all 0.3s ease;
            box-sizing: border-box;
            background-color: #fff9db;
            box-shadow: none !important;
        }



        .form-control:focus {
            border: 2px solid #ffcc00;
            outline: none;
            box-shadow: 0 0 3px rgba(255, 204, 0, 0.4);
        }


        .form-control::placeholder {
            color: #999; /* Ajustez si besoin : #ccc, #888, etc. */
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.2);
            outline: none;
        }

        .file-input {
            display: flex;
            align-items: center;
            gap: 10px;
            border: 2px dashed #ced4da;
            border-radius: 8px;
            padding: 10px;
            background: #f8f9fa;
            transition: all 0.3s ease;
            margin-top: 6px;
        }

        .file-input:hover {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.2);
        }

        .form-check {
            margin-top: 10px;
            display: flex;
            align-items: center;
        }

        .form-check-input {
            width: 18px;
            height: 18px;
            accent-color: #007bff;
            cursor: pointer;
        }

        .form-check-label {
            font-weight: 500;
            color: #333;
            cursor: pointer;
            margin-left: 8px;
        }

        .btn-primary {
            background: linear-gradient(90deg, #007bff, #ff6600);
            border: none;
            font-size: 1.2em;
            padding: 12px 30px;
            border-radius: 8px;
            color: white;
            cursor: pointer;
            transition: transform 0.3s, background 0.3s;
            width: 100%;
            text-transform: uppercase;
            margin-top: 20px;
        }

        .btn-primary:hover {
            transform: scale(1.05);
            background: linear-gradient(90deg, #ff6600, #007bff);
        }

        .text-center {
            text-align: center;
        }
    </style>

    <div class=\"content-container\">
        <div class=\"card\">
            <div class=\"card-header\">
                Quoi de neuf ? Publier un post !
            </div>
            <div class=\"card-body\">
                ";
        // line 178
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 178, $this->source); })()), 'form_start');
        yield "

                <div class=\"form-group\">
                    ";
        // line 181
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 181, $this->source); })()), "title", [], "any", false, false, false, 181), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Titre"]);
        yield "
                    ";
        // line 182
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 182, $this->source); })()), "title", [], "any", false, false, false, 182), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    ";
        // line 183
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 183, $this->source); })()), "title", [], "any", false, false, false, 183), 'errors');
        yield "
                </div>

                <div class=\"form-group\">
                    ";
        // line 187
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 187, $this->source); })()), "content", [], "any", false, false, false, 187), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Contenu"]);
        yield "
                    ";
        // line 188
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 188, $this->source); })()), "content", [], "any", false, false, false, 188), 'widget', ["attr" => ["class" => "form-control", "rows" => "5"]]);
        yield "
                    ";
        // line 189
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 189, $this->source); })()), "content", [], "any", false, false, false, 189), 'errors');
        yield "
                </div>

                <div class=\"form-group form-check\">
                    ";
        // line 193
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 193, $this->source); })()), "anonymous", [], "any", false, false, false, 193), 'widget', ["attr" => ["class" => "form-check-input"]]);
        yield "
                    ";
        // line 194
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 194, $this->source); })()), "anonymous", [], "any", false, false, false, 194), 'label', ["label_attr" => ["class" => "form-check-label"], "label" => "Publier en anonyme"]);
        yield "
                    ";
        // line 195
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 195, $this->source); })()), "anonymous", [], "any", false, false, false, 195), 'errors');
        yield "
                </div>

                <div class=\"text-center\">
                    ";
        // line 199
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 199, $this->source); })()), "save", [], "any", false, false, false, 199), 'widget', ["attr" => ["class" => "btn btn-primary"]]);
        yield "
                </div>

                ";
        // line 202
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 202, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "post/add.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  337 => 202,  331 => 199,  324 => 195,  320 => 194,  316 => 193,  309 => 189,  305 => 188,  301 => 187,  294 => 183,  290 => 182,  286 => 181,  280 => 178,  105 => 5,  92 => 4,  69 => 2,  58 => 4,  55 => 3,  53 => 2,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
{% block title %}Publier un Post{% endblock %}

{% block body %}
    <style>
        body {
            background-color: #f4f7fc;
            font-family: 'Poppins', sans-serif;
        }

        .content-container {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
            padding-top: 5cm;
            padding-bottom: 2cm;
        }

        .card {
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1);
            padding: 0;
            max-width: 800px;
            width: 100%;
            text-align: left;
            transition: transform 0.3s ease-in-out;
            overflow: hidden;
        }

        .card:hover {
            transform: scale(1.01);
        }

        .card-header {
            background: linear-gradient(120deg, #007bff 0%, #ff6600 100%);
            color: white;
            font-size: 2em;
            font-weight: bold;
            padding: 30px;
            margin: 0;
            text-align: center;
            width: 100%;
        }

        .card-body {
            padding: 40px;
        }

        .form-image {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-image img {
            max-width: 50%;
            border-radius: 8px;
        }

        /* Encadré pour chaque champ (Titre, Contenu...) */
        .form-group {
            background-color: #f8f9fa;
            border: 1px solid #ced4da;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 20px;
        }

        /* Label : gras, couleur et police */
        .form-label {
            font-family: 'Roboto', sans-serif;
            font-weight: 700;
            color: #0056b3;
            margin-bottom: 6px;
            display: block;
        }


        .form-control {
            border-radius: 6px;
            border: 2px solid #ced4da;
            font-size: 1em;
            padding: 12px;
            width: 100%;
            transition: all 0.3s ease;
            box-sizing: border-box;
            background-color: #fff9db;
            box-shadow: none !important;
        }



        .form-control:focus {
            border: 2px solid #ffcc00;
            outline: none;
            box-shadow: 0 0 3px rgba(255, 204, 0, 0.4);
        }


        .form-control::placeholder {
            color: #999; /* Ajustez si besoin : #ccc, #888, etc. */
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.2);
            outline: none;
        }

        .file-input {
            display: flex;
            align-items: center;
            gap: 10px;
            border: 2px dashed #ced4da;
            border-radius: 8px;
            padding: 10px;
            background: #f8f9fa;
            transition: all 0.3s ease;
            margin-top: 6px;
        }

        .file-input:hover {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.2);
        }

        .form-check {
            margin-top: 10px;
            display: flex;
            align-items: center;
        }

        .form-check-input {
            width: 18px;
            height: 18px;
            accent-color: #007bff;
            cursor: pointer;
        }

        .form-check-label {
            font-weight: 500;
            color: #333;
            cursor: pointer;
            margin-left: 8px;
        }

        .btn-primary {
            background: linear-gradient(90deg, #007bff, #ff6600);
            border: none;
            font-size: 1.2em;
            padding: 12px 30px;
            border-radius: 8px;
            color: white;
            cursor: pointer;
            transition: transform 0.3s, background 0.3s;
            width: 100%;
            text-transform: uppercase;
            margin-top: 20px;
        }

        .btn-primary:hover {
            transform: scale(1.05);
            background: linear-gradient(90deg, #ff6600, #007bff);
        }

        .text-center {
            text-align: center;
        }
    </style>

    <div class=\"content-container\">
        <div class=\"card\">
            <div class=\"card-header\">
                Quoi de neuf ? Publier un post !
            </div>
            <div class=\"card-body\">
                {{ form_start(postForm) }}

                <div class=\"form-group\">
                    {{ form_label(postForm.title, 'Titre', {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(postForm.title, {'attr': {'class': 'form-control'}}) }}
                    {{ form_errors(postForm.title) }}
                </div>

                <div class=\"form-group\">
                    {{ form_label(postForm.content, 'Contenu', {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(postForm.content, {'attr': {'class': 'form-control', 'rows': '5'}}) }}
                    {{ form_errors(postForm.content) }}
                </div>

                <div class=\"form-group form-check\">
                    {{ form_widget(postForm.anonymous, {'attr': {'class': 'form-check-input'}}) }}
                    {{ form_label(postForm.anonymous, 'Publier en anonyme', {'label_attr': {'class': 'form-check-label'}}) }}
                    {{ form_errors(postForm.anonymous) }}
                </div>

                <div class=\"text-center\">
                    {{ form_widget(postForm.save, {'attr': {'class': 'btn btn-primary'}}) }}
                </div>

                {{ form_end(postForm) }}
            </div>
        </div>
    </div>
{% endblock %}
", "post/add.html.twig", "C:\\Users\\yassi\\Downloads\\Novalearn-master\\Novalearn-master\\templates\\post\\add.html.twig");
    }
}
