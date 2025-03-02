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

/* course_user/pdf.html.twig */
class __TwigTemplate_8c18b3d8d70cdb588e8b68e303763bfe extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "course_user/pdf.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 5, $this->source); })()), "titre", [], "any", false, false, false, 5), "html", null, true);
        yield "</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 40px;
            padding: 0;
            background-color: #f4f4f4;
        }
        
        .container {
    max-width: 800px;
    margin: auto;
    padding: 20px;
}

        h1 {
            color: #2c3e50;
            text-align: center;
            text-transform: uppercase;
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .subtitle {
            text-align: center;
            font-size: 18px;
            color: rgb(131, 141, 127);
            margin-bottom: 20px;
        }

     .description, .content {
    padding: 20px;
    border-left: 5px solid #3498db;
    border-radius: 5px;
    margin-bottom: 15px;
    background: none; /* Supprimer la couleur grise */
}

        .footer {
            margin-top: 30px;
            text-align: center;
            font-size: 12px;
            color: #7f8c8d;
        }

    </style>
</head>
<body>
    <div class=\"container\">
        <h1>";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 55, $this->source); })()), "titre", [], "any", false, false, false, 55), "html", null, true);
        yield "</h1>

        <div class=\"description\">
            <p><strong>Description :</strong> ";
        // line 58
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 58, $this->source); })()), "description", [], "any", false, false, false, 58), "html", null, true));
        yield "</p>
        </div>

        <div class=\"content\">
            <p><strong>Contenu :</strong> ";
        // line 62
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 62, $this->source); })()), "contenu", [], "any", false, false, false, 62), "html", null, true));
        yield "</p>
        </div>

        <div class=\"footer\">
            <p>Généré le ";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y"), "html", null, true);
        yield " à ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "H:i"), "html", null, true);
        yield "</p>
        </div>
    </div>
</body>
</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "course_user/pdf.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  124 => 66,  117 => 62,  110 => 58,  104 => 55,  51 => 5,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>{{ course.titre }}</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 40px;
            padding: 0;
            background-color: #f4f4f4;
        }
        
        .container {
    max-width: 800px;
    margin: auto;
    padding: 20px;
}

        h1 {
            color: #2c3e50;
            text-align: center;
            text-transform: uppercase;
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .subtitle {
            text-align: center;
            font-size: 18px;
            color: rgb(131, 141, 127);
            margin-bottom: 20px;
        }

     .description, .content {
    padding: 20px;
    border-left: 5px solid #3498db;
    border-radius: 5px;
    margin-bottom: 15px;
    background: none; /* Supprimer la couleur grise */
}

        .footer {
            margin-top: 30px;
            text-align: center;
            font-size: 12px;
            color: #7f8c8d;
        }

    </style>
</head>
<body>
    <div class=\"container\">
        <h1>{{ course.titre }}</h1>

        <div class=\"description\">
            <p><strong>Description :</strong> {{ course.description | nl2br }}</p>
        </div>

        <div class=\"content\">
            <p><strong>Contenu :</strong> {{ course.contenu | nl2br }}</p>
        </div>

        <div class=\"footer\">
            <p>Généré le {{ \"now\"|date(\"d/m/Y\") }} à {{ \"now\"|date(\"H:i\") }}</p>
        </div>
    </div>
</body>
</html>", "course_user/pdf.html.twig", "C:\\Users\\siwar\\Downloads\\Novalearn-main\\Novalearn-main\\templates\\course_user\\pdf.html.twig");
    }
}
