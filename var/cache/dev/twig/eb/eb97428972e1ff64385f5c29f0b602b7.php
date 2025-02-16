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

/* Admin/AddMedecin.html.twig */
class __TwigTemplate_ab144692dbe7d2457b1760ba180d4a5b extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/AddMedecin.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Admin Dashboard</title>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css\">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            background: #ecf0f1;
        }
        .sidebar {
            width: 170px;
            background: #2c3e50;
            color: white;
            height: 100vh;
            padding: 20px;
            position: fixed;
            left: 0;
        }
        .sidebar h2 {
            text-align: center;
            font-size: 18px;
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
        }
        .sidebar ul li {
            padding: 12px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }
        .sidebar ul li a {
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
        }
        .sidebar ul li a i {
            margin-right: 10px;
        }
        .content {
            margin-left: 220px;
            padding: 20px;
            flex-grow: 1;
            background: #ecf0f1;
            min-height: 100vh;
            width: calc(100% - 220px);
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }

        /* Formulaire */
        .form-container {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: 0 auto;
        }

        .form-group {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
            color: #333;
            width: 100%;
            margin-bottom: 5px;
        }

        .form-control {
            width: 48%;
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 16px;
            background-color: #f9f9f9;
            transition: border-color 0.3s ease, background-color 0.3s ease;
        }

        .form-control:focus {
            border-color: #007bff;
            background-color: #e6f7ff;
            outline: none;
        }

        .form-control.full-width {
            width: 100%;
        }

        .btn-primary {
            background-color: #007bff;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
        .btn {
            padding: 8px 12px;
            margin: 5px;
            border: none;
            cursor: pointer;
            border-radius: 4px;
            font-size: 14px;
            transition: 0.3s;
            display: inline-block;
            text-decoration: none;
            text-align: center;
        }

        /* Responsivité pour petits écrans */
        @media (max-width: 768px) {
            .form-group {
                flex-direction: column;
            }

            .form-control {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <button class=\"menu-btn\" onclick=\"toggleSidebar()\"><i class=\"fa fa-bars\"></i></button>
    <div class=\"sidebar\" id=\"sidebar\">
        <h2>Admin Panel</h2>
        <ul>
            <li><a href=\"#\"><i class=\"fa fa-home\"></i> Tableau de bord</a></li>
            <li><a href=\"#\"><i class=\"fa fa-users\"></i> Utilisateurs</a></li>
            <li><a href=\"#\"><i class=\"fa fa-cogs\"></i> Paramètres</a></li>
        </ul>
    </div>
    <div class=\"content\">
        <h1>Créer un nouveau médecin</h1>
        <div class=\"form-container\">
            ";
        // line 156
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 156, $this->source); })()), 'form_start');
        yield "
                <div class=\"form-group\">
                    <div class=\"form-control\">";
        // line 158
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 158, $this->source); })()), "role", [], "any", false, false, false, 158), 'row');
        yield "</div>
                    <div class=\"form-control\">";
        // line 159
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), "nom", [], "any", false, false, false, 159), 'row');
        yield "</div>
                </div>
                <div class=\"form-group\">
                    <div class=\"form-control\">";
        // line 162
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 162, $this->source); })()), "prenom", [], "any", false, false, false, 162), 'row');
        yield "</div>
                    <div class=\"form-control\">";
        // line 163
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 163, $this->source); })()), "age", [], "any", false, false, false, 163), 'row');
        yield "</div>
                </div>
                <div class=\"form-group\">
                    <div class=\"form-control\">";
        // line 166
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 166, $this->source); })()), "num_tel", [], "any", false, false, false, 166), 'row');
        yield "</div>
                     <div class=\"form-control\">";
        // line 167
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 167, $this->source); })()), "email", [], "any", false, false, false, 167), 'row');
        yield "</div>
                </div>
                <div class=\"form-group\">
                    <div class=\"form-control\">";
        // line 170
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 170, $this->source); })()), "password", [], "any", false, false, false, 170), 'row');
        yield "</div>
                    <div class=\"form-control\">";
        // line 171
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 171, $this->source); })()), "genre", [], "any", false, false, false, 171), 'row');
        yield "</div>
                </div>
                <div class=\"form-group\">
                    <div class=\"form-control\">";
        // line 174
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 174, $this->source); })()), "specialite", [], "any", false, false, false, 174), 'row');
        yield "</div>
                </div>
                <button type=\"submit\" class=\"btn btn-primary\">Créer</button>
            ";
        // line 177
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 177, $this->source); })()), 'form_end');
        yield "
        </div>
        <div class=\"btn\"><a href=\"";
        // line 179
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
        yield "\">retour</a></div>
    </div>
    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById(\"sidebar\");
            if (sidebar.style.left === \"0px\") {
                sidebar.style.left = \"-200px\";
            } else {
                sidebar.style.left = \"0px\";
            }
        }
    </script>
</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Admin/AddMedecin.html.twig";
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
        return array (  258 => 179,  253 => 177,  247 => 174,  241 => 171,  237 => 170,  231 => 167,  227 => 166,  221 => 163,  217 => 162,  211 => 159,  207 => 158,  202 => 156,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Admin Dashboard</title>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css\">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            background: #ecf0f1;
        }
        .sidebar {
            width: 170px;
            background: #2c3e50;
            color: white;
            height: 100vh;
            padding: 20px;
            position: fixed;
            left: 0;
        }
        .sidebar h2 {
            text-align: center;
            font-size: 18px;
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
        }
        .sidebar ul li {
            padding: 12px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }
        .sidebar ul li a {
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
        }
        .sidebar ul li a i {
            margin-right: 10px;
        }
        .content {
            margin-left: 220px;
            padding: 20px;
            flex-grow: 1;
            background: #ecf0f1;
            min-height: 100vh;
            width: calc(100% - 220px);
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }

        /* Formulaire */
        .form-container {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: 0 auto;
        }

        .form-group {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
            color: #333;
            width: 100%;
            margin-bottom: 5px;
        }

        .form-control {
            width: 48%;
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 16px;
            background-color: #f9f9f9;
            transition: border-color 0.3s ease, background-color 0.3s ease;
        }

        .form-control:focus {
            border-color: #007bff;
            background-color: #e6f7ff;
            outline: none;
        }

        .form-control.full-width {
            width: 100%;
        }

        .btn-primary {
            background-color: #007bff;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
        .btn {
            padding: 8px 12px;
            margin: 5px;
            border: none;
            cursor: pointer;
            border-radius: 4px;
            font-size: 14px;
            transition: 0.3s;
            display: inline-block;
            text-decoration: none;
            text-align: center;
        }

        /* Responsivité pour petits écrans */
        @media (max-width: 768px) {
            .form-group {
                flex-direction: column;
            }

            .form-control {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <button class=\"menu-btn\" onclick=\"toggleSidebar()\"><i class=\"fa fa-bars\"></i></button>
    <div class=\"sidebar\" id=\"sidebar\">
        <h2>Admin Panel</h2>
        <ul>
            <li><a href=\"#\"><i class=\"fa fa-home\"></i> Tableau de bord</a></li>
            <li><a href=\"#\"><i class=\"fa fa-users\"></i> Utilisateurs</a></li>
            <li><a href=\"#\"><i class=\"fa fa-cogs\"></i> Paramètres</a></li>
        </ul>
    </div>
    <div class=\"content\">
        <h1>Créer un nouveau médecin</h1>
        <div class=\"form-container\">
            {{ form_start(form) }}
                <div class=\"form-group\">
                    <div class=\"form-control\">{{ form_row(form.role) }}</div>
                    <div class=\"form-control\">{{ form_row(form.nom) }}</div>
                </div>
                <div class=\"form-group\">
                    <div class=\"form-control\">{{ form_row(form.prenom) }}</div>
                    <div class=\"form-control\">{{ form_row(form.age) }}</div>
                </div>
                <div class=\"form-group\">
                    <div class=\"form-control\">{{ form_row(form.num_tel) }}</div>
                     <div class=\"form-control\">{{ form_row(form.email) }}</div>
                </div>
                <div class=\"form-group\">
                    <div class=\"form-control\">{{ form_row(form.password) }}</div>
                    <div class=\"form-control\">{{ form_row(form.genre) }}</div>
                </div>
                <div class=\"form-group\">
                    <div class=\"form-control\">{{ form_row(form.specialite) }}</div>
                </div>
                <button type=\"submit\" class=\"btn btn-primary\">Créer</button>
            {{ form_end(form) }}
        </div>
        <div class=\"btn\"><a href=\"{{ path('app_admin') }}\">retour</a></div>
    </div>
    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById(\"sidebar\");
            if (sidebar.style.left === \"0px\") {
                sidebar.style.left = \"-200px\";
            } else {
                sidebar.style.left = \"0px\";
            }
        }
    </script>
</body>
</html>
", "Admin/AddMedecin.html.twig", "C:\\Users\\yassi\\Downloads\\Novalearn-master\\Novalearn-master\\templates\\Admin\\AddMedecin.html.twig");
    }
}
