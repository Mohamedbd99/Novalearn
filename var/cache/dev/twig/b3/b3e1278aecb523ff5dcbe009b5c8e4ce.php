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

/* Parent/DashboardPar.html.twig */
class __TwigTemplate_fb7eb80c167c46f8b6fc95eaf6823d50 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Parent/DashboardPar.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Dashboard Parent</title>
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
        }
        .sidebar {
            width: 250px;
            background: #343a40;
            color: white;
            padding: 20px;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .sidebar h2 {
            text-align: center;
        }
        .sidebar button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .modify-button {
            background-color: #28a745;
            color: white;
        }
        .logout-button {
            background-color: rgb(167, 40, 40);
            color: white;
        }
        .dashboard {
            flex: 1;
            padding: 20px;
            background: white;
            margin: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .chart-container {
            width: 100%;
            margin: 20px 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
            text-align: center;
        }
        th, td {
            padding: 10px;
        }
        th {
            background-color: #007bff;
            color: white;
        }
    </style>
</head>
<body>
    <div class=\"sidebar\">
        <div>
            <h2>Menu</h2>
            <li>
               <a class=\"nav-link\" href=\"blogsUser\">Blog</a>
            </li>
             <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"userDropdown\">
        <li><a class=\"modify-button\" href=\"";
        // line 83
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\">Modifier mon compte</a></li>
        <li>
            <form action=\"";
        // line 85
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" method=\"post\">
                <button type=\"submit\" class=\"dropdown-item\">Se Déconnecter</button>
            </form>
        </li>
    </ul>
        </div>
    </div>
    <div class=\"dashboard\">
        <h2>Bienvenue Mr ";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 93, $this->source); })()), "nom", [], "any", false, false, false, 93), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 93, $this->source); })()), "prenom", [], "any", false, false, false, 93), "html", null, true);
        yield "!</h2>
        <p>L'ID de votre fils est : <strong>";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 94, $this->source); })()), "getIdFils", [], "any", false, false, false, 94), "html", null, true);
        yield "</strong></p>
        
        <div class=\"chart-container\">
            <canvas id=\"progressChart\"></canvas>
        </div>
        
        <h3>Notes des Quiz</h3>
        <table>
            <tr>
                <th>Date</th>
                <th>Quiz</th>
                <th>Note</th>
            </tr>
            <tr><td>12/02/2025</td><td>Mathématiques</td><td>85%</td></tr>
            <tr><td>14/02/2025</td><td>Français</td><td>78%</td></tr>
        </table>
        
        <h3>Notes des Exercices</h3>
        <table>
            <tr>
                <th>Date</th>
                <th>Exercice</th>
                <th>Note</th>
            </tr>
            <tr><td>10/02/2025</td><td>Calcul mental</td><td>90%</td></tr>
            <tr><td>13/02/2025</td><td>Orthographe</td><td>80%</td></tr>
        </table>
    </div>
    
    <script>
        var ctx = document.getElementById('progressChart').getContext('2d');
        var progressChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Janvier', 'Février', 'Mars', 'Avril'],
                datasets: [{
                    label: 'Progression Globale (%)',
                    data: [75, 80, 85, 90],
                    borderColor: 'blue',
                    fill: false
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: { beginAtZero: true, max: 100 }
                }
            }
        });
    </script>
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
        return "Parent/DashboardPar.html.twig";
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
        return array (  151 => 94,  145 => 93,  134 => 85,  129 => 83,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Dashboard Parent</title>
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
        }
        .sidebar {
            width: 250px;
            background: #343a40;
            color: white;
            padding: 20px;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .sidebar h2 {
            text-align: center;
        }
        .sidebar button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .modify-button {
            background-color: #28a745;
            color: white;
        }
        .logout-button {
            background-color: rgb(167, 40, 40);
            color: white;
        }
        .dashboard {
            flex: 1;
            padding: 20px;
            background: white;
            margin: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .chart-container {
            width: 100%;
            margin: 20px 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
            text-align: center;
        }
        th, td {
            padding: 10px;
        }
        th {
            background-color: #007bff;
            color: white;
        }
    </style>
</head>
<body>
    <div class=\"sidebar\">
        <div>
            <h2>Menu</h2>
            <li>
               <a class=\"nav-link\" href=\"blogsUser\">Blog</a>
            </li>
             <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"userDropdown\">
        <li><a class=\"modify-button\" href=\"{{ path('app_profile') }}\">Modifier mon compte</a></li>
        <li>
            <form action=\"{{ path('app_logout') }}\" method=\"post\">
                <button type=\"submit\" class=\"dropdown-item\">Se Déconnecter</button>
            </form>
        </li>
    </ul>
        </div>
    </div>
    <div class=\"dashboard\">
        <h2>Bienvenue Mr {{ user.nom }} {{ user.prenom }}!</h2>
        <p>L'ID de votre fils est : <strong>{{ user.getIdFils }}</strong></p>
        
        <div class=\"chart-container\">
            <canvas id=\"progressChart\"></canvas>
        </div>
        
        <h3>Notes des Quiz</h3>
        <table>
            <tr>
                <th>Date</th>
                <th>Quiz</th>
                <th>Note</th>
            </tr>
            <tr><td>12/02/2025</td><td>Mathématiques</td><td>85%</td></tr>
            <tr><td>14/02/2025</td><td>Français</td><td>78%</td></tr>
        </table>
        
        <h3>Notes des Exercices</h3>
        <table>
            <tr>
                <th>Date</th>
                <th>Exercice</th>
                <th>Note</th>
            </tr>
            <tr><td>10/02/2025</td><td>Calcul mental</td><td>90%</td></tr>
            <tr><td>13/02/2025</td><td>Orthographe</td><td>80%</td></tr>
        </table>
    </div>
    
    <script>
        var ctx = document.getElementById('progressChart').getContext('2d');
        var progressChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Janvier', 'Février', 'Mars', 'Avril'],
                datasets: [{
                    label: 'Progression Globale (%)',
                    data: [75, 80, 85, 90],
                    borderColor: 'blue',
                    fill: false
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: { beginAtZero: true, max: 100 }
                }
            }
        });
    </script>
</body>
</html>", "Parent/DashboardPar.html.twig", "C:\\Users\\yassi\\Downloads\\Novalearn-master\\Novalearn-master\\templates\\Parent\\DashboardPar.html.twig");
    }
}
