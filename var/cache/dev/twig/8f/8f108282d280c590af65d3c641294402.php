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

/* reset_password/request.html.twig */
class __TwigTemplate_91b3f640feed09e1aed23cfdf85c8014 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/request.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/request.html.twig"));

        // line 1
        yield "
";
        // line 2
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

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

        // line 3
        yield "    <style>
body {
    background-color: #f4f7fa;
    font-family: 'Arial', sans-serif;
    color: #333;
    padding: 50px 0;
}

h1 {
    font-size: 2.5rem;
    font-weight: bold;
    color: #007bff;
    text-align: center;
    margin-bottom: 20px;
}

.alert {
    margin-bottom: 20px;
    padding: 15px;
    border-radius: 8px;
    text-align: center;
}

.alert-danger {
    background-color: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
}

.form-container {
    max-width: 480px;
    margin: 0 auto;
    padding: 30px;
    border-radius: 10px;
    background-color: #ffffff;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.form-container small {
    font-size: 0.9rem;
    color: #777;
    text-align: center;
    display: block;
    margin-bottom: 15px;
}

.form-group {
    margin-bottom: 20px;
}

input[type=\"email\"], input[type=\"password\"] {
    width: 100%;
    padding: 12px 15px;
    font-size: 1rem;
    border: 1px solid #ddd;
    border-radius: 5px;
    background-color: #fafafa;
    color: #333;
}

input[type=\"email\"]:focus, input[type=\"password\"]:focus {
    border-color: #007bff;
    background-color: #fff;
    outline: none;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.3);
}

button[type=\"submit\"] {
    width: 100%;
    padding: 12px;
    font-size: 1.1rem;
    border: none;
    border-radius: 5px;
    background-color: #007bff;
    color: white;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button[type=\"submit\"]:hover {
    background-color: #0056b3;
}

button[type=\"submit\"]:active {
    background-color: #004085;
}

form {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

    </style>

    ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 98, $this->source); })()), "flashes", ["reset_password_error"], "method", false, false, false, 98));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 99
            yield "        <div class=\"alert alert-danger\" role=\"alert\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash_error"], "html", null, true);
            yield "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flash_error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        yield "    <h1>Reset your password</h1>

    <div class=\"form-container\">
        ";
        // line 104
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 104, $this->source); })()), 'form_start');
        yield "
            ";
        // line 105
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 105, $this->source); })()), "email", [], "any", false, false, false, 105), 'row');
        yield "
            <div>
                <small>
                    Enter your email address, and we will send you a
                    link to reset your password.
                </small>
            </div>
            <button class=\"btn btn-primary\">Send password reset email</button>
        ";
        // line 113
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 113, $this->source); })()), 'form_end');
        yield "
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
        return "reset_password/request.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  205 => 113,  194 => 105,  190 => 104,  185 => 101,  176 => 99,  172 => 98,  75 => 3,  52 => 2,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
{% block body %}
    <style>
body {
    background-color: #f4f7fa;
    font-family: 'Arial', sans-serif;
    color: #333;
    padding: 50px 0;
}

h1 {
    font-size: 2.5rem;
    font-weight: bold;
    color: #007bff;
    text-align: center;
    margin-bottom: 20px;
}

.alert {
    margin-bottom: 20px;
    padding: 15px;
    border-radius: 8px;
    text-align: center;
}

.alert-danger {
    background-color: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
}

.form-container {
    max-width: 480px;
    margin: 0 auto;
    padding: 30px;
    border-radius: 10px;
    background-color: #ffffff;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.form-container small {
    font-size: 0.9rem;
    color: #777;
    text-align: center;
    display: block;
    margin-bottom: 15px;
}

.form-group {
    margin-bottom: 20px;
}

input[type=\"email\"], input[type=\"password\"] {
    width: 100%;
    padding: 12px 15px;
    font-size: 1rem;
    border: 1px solid #ddd;
    border-radius: 5px;
    background-color: #fafafa;
    color: #333;
}

input[type=\"email\"]:focus, input[type=\"password\"]:focus {
    border-color: #007bff;
    background-color: #fff;
    outline: none;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.3);
}

button[type=\"submit\"] {
    width: 100%;
    padding: 12px;
    font-size: 1.1rem;
    border: none;
    border-radius: 5px;
    background-color: #007bff;
    color: white;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button[type=\"submit\"]:hover {
    background-color: #0056b3;
}

button[type=\"submit\"]:active {
    background-color: #004085;
}

form {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

    </style>

    {% for flash_error in app.flashes('reset_password_error') %}
        <div class=\"alert alert-danger\" role=\"alert\">{{ flash_error }}</div>
    {% endfor %}
    <h1>Reset your password</h1>

    <div class=\"form-container\">
        {{ form_start(requestForm) }}
            {{ form_row(requestForm.email) }}
            <div>
                <small>
                    Enter your email address, and we will send you a
                    link to reset your password.
                </small>
            </div>
            <button class=\"btn btn-primary\">Send password reset email</button>
        {{ form_end(requestForm) }}
    </div>
{% endblock %}
", "reset_password/request.html.twig", "C:\\Users\\yassi\\Downloads\\Novalearn-master\\Novalearn-master\\templates\\reset_password\\request.html.twig");
    }
}
