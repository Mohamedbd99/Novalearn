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

/* pdf/reclamation.html.twig */
class __TwigTemplate_8bc1355ff7b64414a9e481aeb5f8fa33 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf/reclamation.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Mes Réclamations</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
            border-bottom: 2px solid #2c3e50;
            padding-bottom: 20px;
        }
        .company-name {
            font-size: 32px;
            color: #2c3e50;
            margin-bottom: 15px;
            font-weight: bold;
        }
        .company-name span.nova {
            color: #27ae60;
        }
        .company-name span.learn {
            color: #3498db;
        }
        .title {
            color: #2c3e50;
            font-size: 24px;
            margin: 15px 0 10px;
            font-weight: bold;
        }
        .subtitle {
            color: #7f8c8d;
            font-size: 16px;
            margin: 0;
        }
        .info-box {
            background-color: #f8f9fa;
            border-radius: 5px;
            padding: 15px;
            margin: 20px 0;
            border: 1px solid #e9ecef;
        }
        .info-box p {
            margin: 5px 0;
            color: #2c3e50;
        }
        .reclamation-list {
            margin-top: 20px;
        }
        .reclamation-item {
            background-color: #fff;
            border: 1px solid #e9ecef;
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 15px;
        }
        .reclamation-item h3 {
            color: #2c3e50;
            font-size: 18px;
            margin: 0 0 10px 0;
        }
        .reclamation-info {
            margin: 5px 0;
            color: #2c3e50;
        }
        .reclamation-message {
            margin: 10px 0;
            padding: 10px;
            background-color: #f8f9fa;
            border-radius: 3px;
        }
        .status {
            display: inline-block;
            padding: 4px 8px;
            border-radius: 3px;
            font-size: 12px;
            font-weight: bold;
            text-transform: uppercase;
        }
        .status-pending {
            background-color: #f1c40f;
            color: #fff;
        }
        .status-done {
            background-color: #2ecc71;
            color: #fff;
        }
        .status-progress {
            background-color: #3498db;
            color: #fff;
        }
        .footer {
            margin-top: 30px;
            text-align: center;
            font-size: 12px;
            color: #7f8c8d;
            border-top: 1px solid #eee;
            padding-top: 20px;
        }
        .page-number {
            text-align: right;
            font-size: 12px;
            color: #95a5a6;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class=\"header\">
        <div class=\"company-name\">
            <span class=\"nova\">Nova</span><span class=\"learn\">learn</span>
        </div>
        <h1 class=\"title\">Mes Réclamations</h1>
        <div class=\"subtitle\">
            Rapport généré le ";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 122, $this->source); })()), "d/m/Y H:i"), "html", null, true);
        yield "
        </div>
    </div>

    <div class=\"info-box\">
        <p><strong>Email:</strong> ";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 127, $this->source); })()), "html", null, true);
        yield "</p>
        <p><strong>Nombre de réclamations:</strong> ";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 128, $this->source); })())), "html", null, true);
        yield "</p>
    </div>

    <div class=\"reclamation-list\">
        ";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 132, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 133
            yield "            <div class=\"reclamation-item\">
                <h3>Réclamation #";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 134), "html", null, true);
            yield "</h3>
                <p class=\"reclamation-info\">
                    <strong>Date:</strong> ";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "createdAt", [], "any", false, false, false, 136), "d/m/Y H:i"), "html", null, true);
            yield "<br>
                    <strong>Catégorie:</strong> ";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "category", [], "any", false, false, false, 137), "nom", [], "any", false, false, false, 137), "html", null, true);
            yield "<br>
                    <strong>Statut:</strong> 
                    <span class=\"status ";
            // line 139
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "statut", [], "any", false, false, false, 139) == "En attente")) {
                yield "status-pending";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "statut", [], "any", false, false, false, 139) == "Traitée")) {
                yield "status-done";
            } else {
                yield "status-progress";
            }
            yield "\">
                        ";
            // line 140
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "statut", [], "any", false, false, false, 140), "html", null, true);
            yield "
                    </span>
                </p>
                <div class=\"reclamation-message\">
                    <strong>Message:</strong><br>
                    ";
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "message", [], "any", false, false, false, 145), "html", null, true);
            yield "
                </div>
            </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        yield "    </div>

    <div class=\"footer\">
        <p>Document généré automatiquement par NovaLearn</p>
        <p>Pour toute question, veuillez nous contacter à support@novalearn.com</p>
    </div>

    <div class=\"page-number\">Page 1/1</div>
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
        return "pdf/reclamation.html.twig";
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
        return array (  257 => 149,  239 => 145,  231 => 140,  221 => 139,  216 => 137,  212 => 136,  207 => 134,  204 => 133,  187 => 132,  180 => 128,  176 => 127,  168 => 122,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Mes Réclamations</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
            border-bottom: 2px solid #2c3e50;
            padding-bottom: 20px;
        }
        .company-name {
            font-size: 32px;
            color: #2c3e50;
            margin-bottom: 15px;
            font-weight: bold;
        }
        .company-name span.nova {
            color: #27ae60;
        }
        .company-name span.learn {
            color: #3498db;
        }
        .title {
            color: #2c3e50;
            font-size: 24px;
            margin: 15px 0 10px;
            font-weight: bold;
        }
        .subtitle {
            color: #7f8c8d;
            font-size: 16px;
            margin: 0;
        }
        .info-box {
            background-color: #f8f9fa;
            border-radius: 5px;
            padding: 15px;
            margin: 20px 0;
            border: 1px solid #e9ecef;
        }
        .info-box p {
            margin: 5px 0;
            color: #2c3e50;
        }
        .reclamation-list {
            margin-top: 20px;
        }
        .reclamation-item {
            background-color: #fff;
            border: 1px solid #e9ecef;
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 15px;
        }
        .reclamation-item h3 {
            color: #2c3e50;
            font-size: 18px;
            margin: 0 0 10px 0;
        }
        .reclamation-info {
            margin: 5px 0;
            color: #2c3e50;
        }
        .reclamation-message {
            margin: 10px 0;
            padding: 10px;
            background-color: #f8f9fa;
            border-radius: 3px;
        }
        .status {
            display: inline-block;
            padding: 4px 8px;
            border-radius: 3px;
            font-size: 12px;
            font-weight: bold;
            text-transform: uppercase;
        }
        .status-pending {
            background-color: #f1c40f;
            color: #fff;
        }
        .status-done {
            background-color: #2ecc71;
            color: #fff;
        }
        .status-progress {
            background-color: #3498db;
            color: #fff;
        }
        .footer {
            margin-top: 30px;
            text-align: center;
            font-size: 12px;
            color: #7f8c8d;
            border-top: 1px solid #eee;
            padding-top: 20px;
        }
        .page-number {
            text-align: right;
            font-size: 12px;
            color: #95a5a6;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class=\"header\">
        <div class=\"company-name\">
            <span class=\"nova\">Nova</span><span class=\"learn\">learn</span>
        </div>
        <h1 class=\"title\">Mes Réclamations</h1>
        <div class=\"subtitle\">
            Rapport généré le {{ date|date('d/m/Y H:i') }}
        </div>
    </div>

    <div class=\"info-box\">
        <p><strong>Email:</strong> {{ email }}</p>
        <p><strong>Nombre de réclamations:</strong> {{ reclamations|length }}</p>
    </div>

    <div class=\"reclamation-list\">
        {% for reclamation in reclamations %}
            <div class=\"reclamation-item\">
                <h3>Réclamation #{{ loop.index }}</h3>
                <p class=\"reclamation-info\">
                    <strong>Date:</strong> {{ reclamation.createdAt|date('d/m/Y H:i') }}<br>
                    <strong>Catégorie:</strong> {{ reclamation.category.nom }}<br>
                    <strong>Statut:</strong> 
                    <span class=\"status {% if reclamation.statut == 'En attente' %}status-pending{% elseif reclamation.statut == 'Traitée' %}status-done{% else %}status-progress{% endif %}\">
                        {{ reclamation.statut }}
                    </span>
                </p>
                <div class=\"reclamation-message\">
                    <strong>Message:</strong><br>
                    {{ reclamation.message }}
                </div>
            </div>
        {% endfor %}
    </div>

    <div class=\"footer\">
        <p>Document généré automatiquement par NovaLearn</p>
        <p>Pour toute question, veuillez nous contacter à support@novalearn.com</p>
    </div>

    <div class=\"page-number\">Page 1/1</div>
</body>
</html>
", "pdf/reclamation.html.twig", "C:\\xampp\\htdocs\\Novalearn-reclamation\\templates\\pdf\\reclamation.html.twig");
    }
}
