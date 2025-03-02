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

/* Admin/dashboard/index.html.twig */
class __TwigTemplate_0d29a905190316517a9a622f259918a8 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'admin_content' => [$this, 'block_admin_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/dashboard/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "Admin/dashboard/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Tableau de bord";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_admin_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "admin_content"));

        // line 6
        yield "    <div class=\"container-fluid\">
        <h1 class=\"h3 mb-4\">Tableau de bord</h1>

        <div class=\"row\">
            <div class=\"col-xl-3 col-md-6 mb-4\">
                <div class=\"card border-left-primary shadow h-100 py-2\">
                    <div class=\"card-body\">
                        <div class=\"row no-gutters align-items-center\">
                            <div class=\"col mr-2\">
                                <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                                    Total Réclamations</div>
                                <div class=\"h5 mb-0 font-weight-bold text-gray-800\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 17, $this->source); })()), "total_reclamations", [], "any", false, false, false, 17), "html", null, true);
        yield "</div>
                            </div>
                            <div class=\"col-auto\">
                                <i class=\"fas fa-envelope fa-2x text-gray-300\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-xl-3 col-md-6 mb-4\">
                <div class=\"card border-left-danger shadow h-100 py-2\">
                    <div class=\"card-body\">
                        <div class=\"row no-gutters align-items-center\">
                            <div class=\"col mr-2\">
                                <div class=\"text-xs font-weight-bold text-danger text-uppercase mb-1\">
                                    Réclamations Urgentes</div>
                                <div class=\"h5 mb-0 font-weight-bold text-gray-800\">";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 34, $this->source); })()), "urgent_reclamations", [], "any", false, false, false, 34), "html", null, true);
        yield "</div>
                            </div>
                            <div class=\"col-auto\">
                                <i class=\"fas fa-exclamation-triangle fa-2x text-gray-300\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-xl-3 col-md-6 mb-4\">
                <div class=\"card border-left-warning shadow h-100 py-2\">
                    <div class=\"card-body\">
                        <div class=\"row no-gutters align-items-center\">
                            <div class=\"col mr-2\">
                                <div class=\"text-xs font-weight-bold text-warning text-uppercase mb-1\">
                                    En Attente</div>
                                <div class=\"h5 mb-0 font-weight-bold text-gray-800\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 51, $this->source); })()), "pending_reclamations", [], "any", false, false, false, 51), "html", null, true);
        yield "</div>
                            </div>
                            <div class=\"col-auto\">
                                <i class=\"fas fa-clock fa-2x text-gray-300\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-xl-3 col-md-6 mb-4\">
                <div class=\"card border-left-info shadow h-100 py-2\">
                    <div class=\"card-body\">
                        <div class=\"row no-gutters align-items-center\">
                            <div class=\"col mr-2\">
                                <div class=\"text-xs font-weight-bold text-info text-uppercase mb-1\">
                                    Total Utilisateurs</div>
                                <div class=\"h5 mb-0 font-weight-bold text-gray-800\">";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 68, $this->source); })()), "total_users", [], "any", false, false, false, 68), "html", null, true);
        yield "</div>
                            </div>
                            <div class=\"col-auto\">
                                <i class=\"fas fa-users fa-2x text-gray-300\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
        return "Admin/dashboard/index.html.twig";
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
        return array (  158 => 68,  138 => 51,  118 => 34,  98 => 17,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Tableau de bord{% endblock %}

{% block admin_content %}
    <div class=\"container-fluid\">
        <h1 class=\"h3 mb-4\">Tableau de bord</h1>

        <div class=\"row\">
            <div class=\"col-xl-3 col-md-6 mb-4\">
                <div class=\"card border-left-primary shadow h-100 py-2\">
                    <div class=\"card-body\">
                        <div class=\"row no-gutters align-items-center\">
                            <div class=\"col mr-2\">
                                <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                                    Total Réclamations</div>
                                <div class=\"h5 mb-0 font-weight-bold text-gray-800\">{{ stats.total_reclamations }}</div>
                            </div>
                            <div class=\"col-auto\">
                                <i class=\"fas fa-envelope fa-2x text-gray-300\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-xl-3 col-md-6 mb-4\">
                <div class=\"card border-left-danger shadow h-100 py-2\">
                    <div class=\"card-body\">
                        <div class=\"row no-gutters align-items-center\">
                            <div class=\"col mr-2\">
                                <div class=\"text-xs font-weight-bold text-danger text-uppercase mb-1\">
                                    Réclamations Urgentes</div>
                                <div class=\"h5 mb-0 font-weight-bold text-gray-800\">{{ stats.urgent_reclamations }}</div>
                            </div>
                            <div class=\"col-auto\">
                                <i class=\"fas fa-exclamation-triangle fa-2x text-gray-300\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-xl-3 col-md-6 mb-4\">
                <div class=\"card border-left-warning shadow h-100 py-2\">
                    <div class=\"card-body\">
                        <div class=\"row no-gutters align-items-center\">
                            <div class=\"col mr-2\">
                                <div class=\"text-xs font-weight-bold text-warning text-uppercase mb-1\">
                                    En Attente</div>
                                <div class=\"h5 mb-0 font-weight-bold text-gray-800\">{{ stats.pending_reclamations }}</div>
                            </div>
                            <div class=\"col-auto\">
                                <i class=\"fas fa-clock fa-2x text-gray-300\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-xl-3 col-md-6 mb-4\">
                <div class=\"card border-left-info shadow h-100 py-2\">
                    <div class=\"card-body\">
                        <div class=\"row no-gutters align-items-center\">
                            <div class=\"col mr-2\">
                                <div class=\"text-xs font-weight-bold text-info text-uppercase mb-1\">
                                    Total Utilisateurs</div>
                                <div class=\"h5 mb-0 font-weight-bold text-gray-800\">{{ stats.total_users }}</div>
                            </div>
                            <div class=\"col-auto\">
                                <i class=\"fas fa-users fa-2x text-gray-300\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "Admin/dashboard/index.html.twig", "C:\\xampp\\htdocs\\Novalearn-reclamation\\templates\\Admin\\dashboard\\index.html.twig");
    }
}
