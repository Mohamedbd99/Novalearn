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
class __TwigTemplate_618a50fa07892872479be408642a9c17 extends Template
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
        yield "        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
        
        ";
        // line 12
        yield "        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\">
        
        ";
        // line 14
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 16
        yield "
        ";
        // line 17
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 19
        yield "    </head>
    <body class=\"d-flex flex-column min-vh-100\">
        <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">NovaLearn</a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                    <ul class=\"navbar-nav\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class=\"flex-shrink-0\">
            ";
        // line 38
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 39
        yield "        </main>

        <footer class=\"footer mt-auto py-3 bg-dark text-white\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-4 mb-4\">
                        <h5 class=\"text-uppercase mb-4\">NovaLearn</h5>
                        <p>Une plateforme d'apprentissage innovante pour tous.</p>
                    </div>
                    <div class=\"col-md-4 mb-4\">
                        <h5 class=\"text-uppercase mb-4\">About Us</h5>
                        <ul class=\"list-unstyled\">
                            <li class=\"mb-2\">
                                <a href=\"#\" class=\"text-white-50\">Our Story</a>
                            </li>
                            <li class=\"mb-2\">
                                <a href=\"#\" class=\"text-white-50\">Team</a>
                            </li>
                            <li class=\"mb-2\">
                                <a href=\"#\" class=\"text-white-50\">Careers</a>
                            </li>
                            <li class=\"mb-2\">
                                <a href=\"#\" class=\"text-white-50\">Pricing</a>
                            </li>
                            <li class=\"mb-2\">
                                <a href=\"";
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_new");
        yield "\" class=\"text-white-50\">
                                    <i class=\"fas fa-exclamation-circle me-2\"></i>Faire une réclamation
                                </a>
                            </li>
                            <li class=\"mb-2\">
                                <a href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_mes_reclamations");
        yield "\" class=\"text-white-50\">
                                    <i class=\"fas fa-list me-2\"></i>Voir mes réclamations
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"col-md-4 mb-4\">
                        <h5 class=\"text-uppercase mb-4\">Contact</h5>
                        <ul class=\"list-unstyled\">
                            <li class=\"mb-2\">
                                <i class=\"fas fa-envelope me-2\"></i>
                                contact@novalearn.com
                            </li>
                            <li class=\"mb-2\">
                                <i class=\"fas fa-phone me-2\"></i>
                                +1 234 567 890
                            </li>
                        </ul>
                    </div>
                </div>
                <hr class=\"my-4\">
                <div class=\"text-center\">
                    <small>&copy; 2025 NovaLearn. Tous droits réservés.</small>
                </div>
            </div>
        </footer>

        ";
        // line 97
        yield "        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\"></script>
    </body>
</html>
";
        
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

    // line 14
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 38
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
        return array (  234 => 38,  226 => 18,  216 => 17,  208 => 15,  198 => 14,  181 => 5,  170 => 97,  140 => 69,  132 => 64,  105 => 39,  103 => 38,  92 => 30,  82 => 23,  76 => 19,  74 => 17,  71 => 16,  69 => 14,  65 => 12,  61 => 9,  55 => 5,  49 => 1,);
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
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
        
        {# Font Awesome #}
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\">
        
        {% block stylesheets %}
        {% endblock %}

        {% block javascripts %}
        {% endblock %}
    </head>
    <body class=\"d-flex flex-column min-vh-100\">
        <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"{{ path('app_home') }}\">NovaLearn</a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                    <ul class=\"navbar-nav\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('app_home') }}\">Accueil</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class=\"flex-shrink-0\">
            {% block body %}{% endblock %}
        </main>

        <footer class=\"footer mt-auto py-3 bg-dark text-white\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-4 mb-4\">
                        <h5 class=\"text-uppercase mb-4\">NovaLearn</h5>
                        <p>Une plateforme d'apprentissage innovante pour tous.</p>
                    </div>
                    <div class=\"col-md-4 mb-4\">
                        <h5 class=\"text-uppercase mb-4\">About Us</h5>
                        <ul class=\"list-unstyled\">
                            <li class=\"mb-2\">
                                <a href=\"#\" class=\"text-white-50\">Our Story</a>
                            </li>
                            <li class=\"mb-2\">
                                <a href=\"#\" class=\"text-white-50\">Team</a>
                            </li>
                            <li class=\"mb-2\">
                                <a href=\"#\" class=\"text-white-50\">Careers</a>
                            </li>
                            <li class=\"mb-2\">
                                <a href=\"#\" class=\"text-white-50\">Pricing</a>
                            </li>
                            <li class=\"mb-2\">
                                <a href=\"{{ path('app_reclamation_new') }}\" class=\"text-white-50\">
                                    <i class=\"fas fa-exclamation-circle me-2\"></i>Faire une réclamation
                                </a>
                            </li>
                            <li class=\"mb-2\">
                                <a href=\"{{ path('app_reclamation_mes_reclamations') }}\" class=\"text-white-50\">
                                    <i class=\"fas fa-list me-2\"></i>Voir mes réclamations
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"col-md-4 mb-4\">
                        <h5 class=\"text-uppercase mb-4\">Contact</h5>
                        <ul class=\"list-unstyled\">
                            <li class=\"mb-2\">
                                <i class=\"fas fa-envelope me-2\"></i>
                                contact@novalearn.com
                            </li>
                            <li class=\"mb-2\">
                                <i class=\"fas fa-phone me-2\"></i>
                                +1 234 567 890
                            </li>
                        </ul>
                    </div>
                </div>
                <hr class=\"my-4\">
                <div class=\"text-center\">
                    <small>&copy; 2025 NovaLearn. Tous droits réservés.</small>
                </div>
            </div>
        </footer>

        {# Bootstrap JS and Popper.js #}
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\"></script>
    </body>
</html>
", "base.html.twig", "C:\\Users\\Rami\\Documents\\Novalearn-last_update\\templates\\base.html.twig");
    }
}
