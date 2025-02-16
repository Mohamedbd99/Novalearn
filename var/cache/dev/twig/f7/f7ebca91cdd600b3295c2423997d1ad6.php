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

/* UserGererProf.html.twig */
class __TwigTemplate_09f66b3d8458ae75c0ac9d80e7122434 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "UserGererProf.html.twig"));

        // line 1
        yield "<script>
/* Container de la page de profil */
.profile-container {
    background-color: #f9f9f9;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
}

/* En-tête du profil */
.profile-header {
    font-size: 1.8rem;
    font-weight: bold;
    margin-bottom: 20px;
    color: #333;
}

/* Détails du profil */
.profile-details {
    font-size: 1.2rem;
    margin-bottom: 20px;
}

.profile-details p {
    margin-bottom: 10px;
}

/* Styles du bouton \"Modifier Profil\" */
.btn-modifier {
    background-color: #4CAF50;
    color: white;
    padding: 10px 15px;
    border-radius: 5px;
    text-decoration: none;
    font-size: 1rem;
    display: inline-block;
    margin-top: 20px;
    transition: background-color 0.3s ease;
}

.btn-modifier:hover {
    background-color: #45a049;
}

/* Séparer les champs avec des lignes de séparation */
.profile-details p strong {
    color: #4CAF50;
}
</script>

";
        // line 51
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 52
        yield "
";
        // line 53
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 51
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Profil";
        
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
        yield "    <div class=\"container mt-4 profile-container\">
        <div class=\"profile-header\">
            <h1>Bonjour, ";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 56, $this->source); })()), "nom", [], "any", false, false, false, 56), "html", null, true);
        yield "!</h1> <!-- Affiche le nom de l'utilisateur -->
        </div>

        <div class=\"profile-details\">
            <p><strong>ID :</strong> ";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 60, $this->source); })()), "id", [], "any", false, false, false, 60), "html", null, true);
        yield "</p>
            <p><strong>Nom :</strong> ";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 61, $this->source); })()), "nom", [], "any", false, false, false, 61), "html", null, true);
        yield "</p>
            <p><strong>Prenom :</strong> ";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 62, $this->source); })()), "prenom", [], "any", false, false, false, 62), "html", null, true);
        yield "</p>
            <p><strong>Age :</strong> ";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 63, $this->source); })()), "age", [], "any", false, false, false, 63), "html", null, true);
        yield "</p>
            <p><strong>Email :</strong> ";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 64, $this->source); })()), "email", [], "any", false, false, false, 64), "html", null, true);
        yield "</p>
            <p><strong>Votre Difficulte :</strong> ";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 65, $this->source); })()), "difficulte", [], "any", false, false, false, 65), "html", null, true);
        yield "</p>
        </div>

        <!-- Bouton \"Modifier Profil\" -->
        <a href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_edit_users");
        yield "\" class=\"btn-modifier\">Modifier Profil</a> 
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
        return "UserGererProf.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  177 => 69,  170 => 65,  166 => 64,  162 => 63,  158 => 62,  154 => 61,  150 => 60,  143 => 56,  139 => 54,  129 => 53,  112 => 51,  104 => 53,  101 => 52,  99 => 51,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<script>
/* Container de la page de profil */
.profile-container {
    background-color: #f9f9f9;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
}

/* En-tête du profil */
.profile-header {
    font-size: 1.8rem;
    font-weight: bold;
    margin-bottom: 20px;
    color: #333;
}

/* Détails du profil */
.profile-details {
    font-size: 1.2rem;
    margin-bottom: 20px;
}

.profile-details p {
    margin-bottom: 10px;
}

/* Styles du bouton \"Modifier Profil\" */
.btn-modifier {
    background-color: #4CAF50;
    color: white;
    padding: 10px 15px;
    border-radius: 5px;
    text-decoration: none;
    font-size: 1rem;
    display: inline-block;
    margin-top: 20px;
    transition: background-color 0.3s ease;
}

.btn-modifier:hover {
    background-color: #45a049;
}

/* Séparer les champs avec des lignes de séparation */
.profile-details p strong {
    color: #4CAF50;
}
</script>

{% block title %}Profil{% endblock %}

{% block body %}
    <div class=\"container mt-4 profile-container\">
        <div class=\"profile-header\">
            <h1>Bonjour, {{ user.nom }}!</h1> <!-- Affiche le nom de l'utilisateur -->
        </div>

        <div class=\"profile-details\">
            <p><strong>ID :</strong> {{ user.id }}</p>
            <p><strong>Nom :</strong> {{ user.nom }}</p>
            <p><strong>Prenom :</strong> {{ user.prenom }}</p>
            <p><strong>Age :</strong> {{ user.age }}</p>
            <p><strong>Email :</strong> {{ user.email }}</p>
            <p><strong>Votre Difficulte :</strong> {{ user.difficulte }}</p>
        </div>

        <!-- Bouton \"Modifier Profil\" -->
        <a href=\"{{ path('app_edit_users') }}\" class=\"btn-modifier\">Modifier Profil</a> 
    </div>
{% endblock %}
", "UserGererProf.html.twig", "C:\\Users\\yassi\\Downloads\\Novalearn-master\\Novalearn-master\\templates\\UserGererProf.html.twig");
    }
}
