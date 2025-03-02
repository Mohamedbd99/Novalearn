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

/* base.html.twig */
class __TwigTemplate_2727dacca0bca084fff8de7d20ea36a2 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        
        ";
        // line 9
        yield "        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
        
        ";
        // line 12
        yield "        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\" rel=\"stylesheet\">
        
        <style>
            body {
                background-color: #FFE6F3;
            }

            .navbar {
                background: white;
                border-radius: 50px;
                margin: 20px;
                padding: 15px 30px;
                box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            }

            .navbar-brand {
                font-size: 24px;
                font-weight: bold;
            }

            .navbar-brand img {
                height: 30px;
                margin-right: 10px;
            }

            .nav-link {
                color: #333;
                margin: 0 10px;
                font-weight: 500;
            }

            .btn-novalearn {
                background-color: #FFD700;
                color: #000;
                border: none;
                border-radius: 25px;
                padding: 8px 25px;
                font-weight: 500;
                transition: all 0.3s ease;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            }
            
            .btn-novalearn:hover {
                background-color: #FFC800;
                transform: translateY(-2px);
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
            }

            .email-input {
                border-radius: 50px;
                padding: 10px 25px;
                border: 2px solid #ddd;
                background: white;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            }

            .container-rounded {
                background: white;
                border-radius: 50px;
                padding: 30px;
                margin: 20px auto;
                box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            }

            .logo-text {
                font-size: 24px;
                font-weight: bold;
            }

            .logo-nova {
                color: #000;
            }

            .logo-learn {
                color: #8A2BE2;
            }

            .footer {
                background: transparent;
                color: #666;
                margin-top: 50px;
            }
        </style>

        ";
        // line 96
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 98
        yield "
        ";
        // line 99
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 101
        yield "    </head>
    <body class=\"d-flex flex-column min-vh-100\">
        <nav class=\"navbar navbar-expand-lg\" style=\"background-color: #fff;\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"";
        // line 105
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
                    <span class=\"logo-text\">
                        <span class=\"logo-nova\">Nova</span><span class=\"logo-learn\">learn</span>
                    </span>
                </a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                    <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
        // line 116
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
        // line 119
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_reclamation_index");
        yield "\">Mes Réclamations</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class=\"flex-shrink-0\">
            <div class=\"container mt-4 container-rounded\">
                ";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 128, $this->source); })()), "flashes", [], "any", false, false, false, 128));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 129
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 130
                yield "                        <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show\" role=\"alert\">
                            ";
                // line 131
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        yield "                
                ";
        // line 137
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 138
        yield "            </div>
        </main>

        <footer class=\"footer mt-auto py-3 bg-light\">
            <div class=\"container text-center\">
                <span class=\"text-muted\">Copyright 2025 NovaLearn. Tous droits réservés.</span>
            </div>
        </footer>

        ";
        // line 148
        yield "        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
    </body>
</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 96
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 97
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 99
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 100
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 137
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  305 => 137,  297 => 100,  287 => 99,  279 => 97,  269 => 96,  252 => 5,  242 => 148,  231 => 138,  229 => 137,  226 => 136,  220 => 135,  210 => 131,  205 => 130,  200 => 129,  196 => 128,  184 => 119,  178 => 116,  164 => 105,  158 => 101,  156 => 99,  153 => 98,  151 => 96,  65 => 12,  61 => 9,  55 => 5,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        
        {# Bootstrap CSS #}
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
        
        {# Font Awesome #}
        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\" rel=\"stylesheet\">
        
        <style>
            body {
                background-color: #FFE6F3;
            }

            .navbar {
                background: white;
                border-radius: 50px;
                margin: 20px;
                padding: 15px 30px;
                box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            }

            .navbar-brand {
                font-size: 24px;
                font-weight: bold;
            }

            .navbar-brand img {
                height: 30px;
                margin-right: 10px;
            }

            .nav-link {
                color: #333;
                margin: 0 10px;
                font-weight: 500;
            }

            .btn-novalearn {
                background-color: #FFD700;
                color: #000;
                border: none;
                border-radius: 25px;
                padding: 8px 25px;
                font-weight: 500;
                transition: all 0.3s ease;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            }
            
            .btn-novalearn:hover {
                background-color: #FFC800;
                transform: translateY(-2px);
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
            }

            .email-input {
                border-radius: 50px;
                padding: 10px 25px;
                border: 2px solid #ddd;
                background: white;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            }

            .container-rounded {
                background: white;
                border-radius: 50px;
                padding: 30px;
                margin: 20px auto;
                box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            }

            .logo-text {
                font-size: 24px;
                font-weight: bold;
            }

            .logo-nova {
                color: #000;
            }

            .logo-learn {
                color: #8A2BE2;
            }

            .footer {
                background: transparent;
                color: #666;
                margin-top: 50px;
            }
        </style>

        {% block stylesheets %}
        {% endblock %}

        {% block javascripts %}
        {% endblock %}
    </head>
    <body class=\"d-flex flex-column min-vh-100\">
        <nav class=\"navbar navbar-expand-lg\" style=\"background-color: #fff;\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"{{ path('app_home') }}\">
                    <span class=\"logo-text\">
                        <span class=\"logo-nova\">Nova</span><span class=\"logo-learn\">learn</span>
                    </span>
                </a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                    <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('app_home') }}\">Accueil</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('user_reclamation_index') }}\">Mes Réclamations</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class=\"flex-shrink-0\">
            <div class=\"container mt-4 container-rounded\">
                {% for label, messages in app.flashes %}
                    {% for message in messages %}
                        <div class=\"alert alert-{{ label }} alert-dismissible fade show\" role=\"alert\">
                            {{ message }}
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                        </div>
                    {% endfor %}
                {% endfor %}
                
                {% block body %}{% endblock %}
            </div>
        </main>

        <footer class=\"footer mt-auto py-3 bg-light\">
            <div class=\"container text-center\">
                <span class=\"text-muted\">Copyright 2025 NovaLearn. Tous droits réservés.</span>
            </div>
        </footer>

        {# Bootstrap JS Bundle with Popper #}
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
    </body>
</html>", "base.html.twig", "C:\\xampp\\htdocs\\Novalearn-reclamation\\templates\\base.html.twig");
    }
}
