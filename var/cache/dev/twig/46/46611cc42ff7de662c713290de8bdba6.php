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

/* user/UserGererProf.html.twig */
class __TwigTemplate_1915ffc660bd2e7308b71b3a3a0422f3 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/UserGererProf.html.twig"));

        // line 1
        yield "

";
        // line 3
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 23
        yield "
";
        // line 24
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        
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
        yield "    <div class=\"container mt-4 profile-container\">
        <div class=\"profile-header\">
            <h1>Bonjour, ";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 6, $this->source); })()), "nom", [], "any", false, false, false, 6), "html", null, true);
        yield "!</h1> <!-- Affiche le nom de l'utilisateur -->
        </div>

        <div class=\"profile-details\">
            <p><strong>ID :</strong> ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10), "html", null, true);
        yield "</p>
            <p><strong>Nom :</strong> ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 11, $this->source); })()), "nom", [], "any", false, false, false, 11), "html", null, true);
        yield "</p>
            <p><strong>Prénom :</strong> ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 12, $this->source); })()), "prenom", [], "any", false, false, false, 12), "html", null, true);
        yield "</p>
            <p><strong>Âge :</strong> ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 13, $this->source); })()), "age", [], "any", false, false, false, 13), "html", null, true);
        yield "</p>
            <p><strong>Email :</strong> ";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 14, $this->source); })()), "email", [], "any", false, false, false, 14), "html", null, true);
        yield "</p>
            <p><strong>Votre Difficulte :</strong> ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 15, $this->source); })()), "difficulte", [], "any", false, false, false, 15), "html", null, true);
        yield "</p>
        </div>

        <!-- Bouton \"Modifier Profil\" -->
        <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_edit_users");
        yield "\" class=\"btn-modifier\">Modifier Profil</a> 
        <a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_HomeUser");
        yield "\" class=\"btn-secondary\">Retour</a>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 24
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 25
        yield "    <style>
        /* Général */
        .profile-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 30px;
            background-color: #f4f4f9;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .profile-header h1 {
            font-size: 2rem;
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        .profile-details {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        .profile-details p {
            margin-bottom: 10px;
            color: #444;
        }

        .profile-details strong {
            color: #007bff;
        }

        .btn-secondary {
            background-color: #6c757d;
            color: #fff;
            border: none;
            transition: background-color 0.3s ease;
        }
        .btn-secondary {
            padding: 12px 25px;
            font-size: 1rem;
            border-radius: 6px;
            text-decoration: none;
            display: inline-block;
            cursor: pointer;
            text-align: center;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
        }


        /* Bouton \"Modifier Profil\" */
        .btn-modifier {
            display: inline-block;
            padding: 12px 25px;
            background-color: #28a745;
            color: #fff;
            font-size: 1.1rem;
            border-radius: 6px;
            text-decoration: none;
            text-align: center;
            transition: background-color 0.3s ease;
            margin-top: 20px;
        }

        .btn-modifier:hover {
            background-color: #218838;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .profile-container {
                padding: 20px;
            }

            .profile-header h1 {
                font-size: 1.6rem;
            }

            .profile-details p {
                font-size: 1rem;
            }

            .btn-modifier {
                font-size: 1rem;
                width: 100%;
            }
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "user/UserGererProf.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  137 => 25,  127 => 24,  116 => 20,  112 => 19,  105 => 15,  101 => 14,  97 => 13,  93 => 12,  89 => 11,  85 => 10,  78 => 6,  74 => 4,  64 => 3,  56 => 24,  53 => 23,  51 => 3,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("

{% block body %}
    <div class=\"container mt-4 profile-container\">
        <div class=\"profile-header\">
            <h1>Bonjour, {{ user.nom }}!</h1> <!-- Affiche le nom de l'utilisateur -->
        </div>

        <div class=\"profile-details\">
            <p><strong>ID :</strong> {{ user.id }}</p>
            <p><strong>Nom :</strong> {{ user.nom }}</p>
            <p><strong>Prénom :</strong> {{ user.prenom }}</p>
            <p><strong>Âge :</strong> {{ user.age }}</p>
            <p><strong>Email :</strong> {{ user.email }}</p>
            <p><strong>Votre Difficulte :</strong> {{ user.difficulte }}</p>
        </div>

        <!-- Bouton \"Modifier Profil\" -->
        <a href=\"{{ path('app_edit_users') }}\" class=\"btn-modifier\">Modifier Profil</a> 
        <a href=\"{{ path('app_HomeUser') }}\" class=\"btn-secondary\">Retour</a>
    </div>
{% endblock %}

{% block stylesheets %}
    <style>
        /* Général */
        .profile-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 30px;
            background-color: #f4f4f9;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .profile-header h1 {
            font-size: 2rem;
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        .profile-details {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        .profile-details p {
            margin-bottom: 10px;
            color: #444;
        }

        .profile-details strong {
            color: #007bff;
        }

        .btn-secondary {
            background-color: #6c757d;
            color: #fff;
            border: none;
            transition: background-color 0.3s ease;
        }
        .btn-secondary {
            padding: 12px 25px;
            font-size: 1rem;
            border-radius: 6px;
            text-decoration: none;
            display: inline-block;
            cursor: pointer;
            text-align: center;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
        }


        /* Bouton \"Modifier Profil\" */
        .btn-modifier {
            display: inline-block;
            padding: 12px 25px;
            background-color: #28a745;
            color: #fff;
            font-size: 1.1rem;
            border-radius: 6px;
            text-decoration: none;
            text-align: center;
            transition: background-color 0.3s ease;
            margin-top: 20px;
        }

        .btn-modifier:hover {
            background-color: #218838;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .profile-container {
                padding: 20px;
            }

            .profile-header h1 {
                font-size: 1.6rem;
            }

            .profile-details p {
                font-size: 1rem;
            }

            .btn-modifier {
                font-size: 1rem;
                width: 100%;
            }
        }
    </style>
{% endblock %}
", "user/UserGererProf.html.twig", "C:\\Users\\yassi\\Downloads\\Novalearn-master\\Novalearn-master\\templates\\User\\UserGererProf.html.twig");
    }
}
