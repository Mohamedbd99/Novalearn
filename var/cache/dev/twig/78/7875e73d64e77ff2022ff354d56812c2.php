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

/* Admin/admin.html.twig */
class __TwigTemplate_e6e50b766fa64182428116adadd6c624 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/admin.html.twig"));

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
            width: 200px;
            background: #2c3e50;
            color: white;
            height: 100vh;
            padding: 20px;
            position: fixed;
            left: 0;
            transition: 0.3s;
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
            transition: 0.3s;
        }
        .sidebar ul li a:hover {
            background: #34495e;
            padding: 10px;
            border-radius: 5px;
        }
        .sidebar ul li a i {
            margin-right: 10px;
        }
        .content {
            margin-left: 220px; /* Adjusted to leave space for sidebar */
            padding: 20px;
            flex-grow: 1;
            background: #ecf0f1;
            min-height: 100vh;
            transition: margin-left 0.3s; /* Smooth transition for sidebar toggle */
        }
        .menu-btn {
            position: absolute;
            top: 15px;
            left: 210px;
            font-size: 20px;
            cursor: pointer;
            background: none;
            border: none;
            color: #2c3e50;
        }
        
        /* Table Styling */
        .table-container {
            margin-top: 20px;
            background: white;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            border-radius: 8px;
            overflow: hidden;
        }
        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: center;
        }
        th {
            background: #2c3e50;
            color: white;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background: #f9f9f9;
        }
        tr:hover {
            background: #dfe6e9;
        }

        /* Button Styling */
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
        .btn-edit {
            background: #f1c40f;
            color: white;
        }
        .btn-edit:hover {
            background: #d4ac0d;
        }
        .btn-delete {
            background: #e74c3c;
            color: white;
        }
        .btn-delete:hover {
            background: #c0392b;
        }
        .btn-ajout {
            background: rgb(22, 142, 38);
            color: white;
            float: right;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
 <h2>Liste </h2>
    <button class=\"menu-btn\" onclick=\"toggleSidebar()\"><i class=\"fa fa-bars\"></i></button>
    <div class=\"sidebar\" id=\"sidebar\">
        <h2>Admin Panel</h2>
        <ul>
            <li><a href=\"#\"><i class=\"fa fa-home\"></i> Tableau de bord</a></li>
            <li><a href= \"admin\"><i class=\"fa fa-users\"></i> Utilisateurs</a></li>
            <li><a href=\"#\"><i class=\"fa fa-cogs\"></i> Paramètres</a></li>
        </ul>
    </div>

    <div class=\"content\">
    <h1>Liste des Utilisateurs</h1>

        <a href=\"";
        // line 153
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_AddParent", ["type" => "parent"]);
        yield "\" class=\"btn btn-ajout\">Ajouter un parent</a>
        <h2>Liste des Parents</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 166
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["parents"]) || array_key_exists("parents", $context) ? $context["parents"] : (function () { throw new RuntimeError('Variable "parents" does not exist.', 166, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 167
            yield "                    <tr>
                        <td>";
            // line 168
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 168), "html", null, true);
            yield "</td>
                        <td>";
            // line 169
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 169), "html", null, true);
            yield "</td>
                        <td>";
            // line 170
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 170), "html", null, true);
            yield "</td>
                        <td>";
            // line 171
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 171), "html", null, true);
            yield "</td>
                        <td>
                            <a href=\"";
            // line 173
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_edit_user", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 173)]), "html", null, true);
            yield "\" class=\"btn btn-edit\">Modifier</a>
                            <a href=\"#\" onclick=\"confirmDelete('";
            // line 174
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_delete_user", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 174)]), "html", null, true);
            yield "')\" class=\"btn btn-delete\">Supprimer</a>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 181
        if (!$context['_iterated']) {
            // line 178
            yield "                    <tr>
                        <td colspan=\"5\">Aucun parent trouvé.</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 182
        yield "            </tbody>
        </table>

        
        <a href=\"";
        // line 186
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_AddUser", ["type" => "eleve"]);
        yield "\" class=\"btn btn-ajout\">Ajouter un élève</a>
        <h2>Liste des Élèves</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 199
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["eleves"]) || array_key_exists("eleves", $context) ? $context["eleves"] : (function () { throw new RuntimeError('Variable "eleves" does not exist.', 199, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 200
            yield "                    <tr>
                        <td>";
            // line 201
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 201), "html", null, true);
            yield "</td>
                        <td>";
            // line 202
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 202), "html", null, true);
            yield "</td>
                        <td>";
            // line 203
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 203), "html", null, true);
            yield "</td>
                        <td>";
            // line 204
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 204), "html", null, true);
            yield "</td>
                        <td>
                            <a href=\"";
            // line 206
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_edit_user", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 206)]), "html", null, true);
            yield "\" class=\"btn btn-edit\">Modifier</a>
                            <a href=\"#\" onclick=\"confirmDelete('";
            // line 207
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_delete_user", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 207)]), "html", null, true);
            yield "')\" class=\"btn btn-delete\">Supprimer</a>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 214
        if (!$context['_iterated']) {
            // line 211
            yield "                    <tr>
                        <td colspan=\"5\">Aucun élève trouvé.</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 215
        yield "            </tbody>
        </table>

         <a href=\"";
        // line 218
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_AddEnseignant", ["type" => "enseignant"]);
        yield "\" class=\"btn btn-ajout\">Ajouter un enseignant</a>
        <h2>Liste des Enseignants</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                     <th>Specialite</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 232
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["enseignants"]) || array_key_exists("enseignants", $context) ? $context["enseignants"] : (function () { throw new RuntimeError('Variable "enseignants" does not exist.', 232, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 233
            yield "                    <tr>
                        <td>";
            // line 234
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 234), "html", null, true);
            yield "</td>
                        <td>";
            // line 235
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 235), "html", null, true);
            yield "</td>
                        <td>";
            // line 236
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 236), "html", null, true);
            yield "</td>
                        <td>";
            // line 237
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 237), "html", null, true);
            yield "</td>
                        <td>";
            // line 238
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "specialite", [], "any", false, false, false, 238), "html", null, true);
            yield "</td>
                        <td>
                            <a href=\"";
            // line 240
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_edit_user", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 240)]), "html", null, true);
            yield "\" class=\"btn btn-edit\">Modifier</a>
                            <a href=\"#\" onclick=\"confirmDelete('";
            // line 241
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_delete_user", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 241)]), "html", null, true);
            yield "')\" class=\"btn btn-delete\">Supprimer</a>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 248
        if (!$context['_iterated']) {
            // line 245
            yield "                    <tr>
                        <td colspan=\"5\">Aucun enseignant trouvé.</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 249
        yield "            </tbody>
        </table>

         <a href=\"";
        // line 252
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_AddMedecin", ["type" => "parent"]);
        yield "\" class=\"btn btn-ajout\">Ajouter un medecin</a>
        <h2>Liste des Medecins</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                     <th>Specialite</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 266
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["medecins"]) || array_key_exists("medecins", $context) ? $context["medecins"] : (function () { throw new RuntimeError('Variable "medecins" does not exist.', 266, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 267
            yield "                    <tr>
                        <td>";
            // line 268
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 268), "html", null, true);
            yield "</td>
                        <td>";
            // line 269
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 269), "html", null, true);
            yield "</td>
                        <td>";
            // line 270
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 270), "html", null, true);
            yield "</td>
                        <td>";
            // line 271
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 271), "html", null, true);
            yield "</td>
                        <td>";
            // line 272
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "specialite", [], "any", false, false, false, 272), "html", null, true);
            yield "</td>
                        <td>
                            <a href=\"";
            // line 274
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_edit_user", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 274)]), "html", null, true);
            yield "\" class=\"btn btn-edit\">Modifier</a>
                            <a href=\"#\" onclick=\"confirmDelete('";
            // line 275
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_delete_user", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 275)]), "html", null, true);
            yield "')\" class=\"btn btn-delete\">Supprimer</a>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 282
        if (!$context['_iterated']) {
            // line 279
            yield "                    <tr>
                        <td colspan=\"5\">Aucun medecin trouvé.</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 283
        yield "            </tbody>
        </table>
    </div>

    <script>


    function confirmDelete(deleteUrl) {
            if (confirm(\"Êtes-vous sûr de vouloir supprimer cet utilisateur ?\")) {
                window.location.href = deleteUrl; // Redirection vers l'URL de suppression
            }
        }

        
        function toggleSidebar() {
            const sidebar = document.getElementById(\"sidebar\");
            const content = document.querySelector(\".content\");
            if (sidebar.style.left === \"0px\") {
                sidebar.style.left = \"-220px\";
                content.style.marginLeft = \"0\";
            } else {
                sidebar.style.left = \"0px\";
                content.style.marginLeft = \"220px\";
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
        return "Admin/admin.html.twig";
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
        return array (  481 => 283,  472 => 279,  470 => 282,  462 => 275,  458 => 274,  453 => 272,  449 => 271,  445 => 270,  441 => 269,  437 => 268,  434 => 267,  429 => 266,  412 => 252,  407 => 249,  398 => 245,  396 => 248,  388 => 241,  384 => 240,  379 => 238,  375 => 237,  371 => 236,  367 => 235,  363 => 234,  360 => 233,  355 => 232,  338 => 218,  333 => 215,  324 => 211,  322 => 214,  314 => 207,  310 => 206,  305 => 204,  301 => 203,  297 => 202,  293 => 201,  290 => 200,  285 => 199,  269 => 186,  263 => 182,  254 => 178,  252 => 181,  244 => 174,  240 => 173,  235 => 171,  231 => 170,  227 => 169,  223 => 168,  220 => 167,  215 => 166,  199 => 153,  45 => 1,);
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
            width: 200px;
            background: #2c3e50;
            color: white;
            height: 100vh;
            padding: 20px;
            position: fixed;
            left: 0;
            transition: 0.3s;
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
            transition: 0.3s;
        }
        .sidebar ul li a:hover {
            background: #34495e;
            padding: 10px;
            border-radius: 5px;
        }
        .sidebar ul li a i {
            margin-right: 10px;
        }
        .content {
            margin-left: 220px; /* Adjusted to leave space for sidebar */
            padding: 20px;
            flex-grow: 1;
            background: #ecf0f1;
            min-height: 100vh;
            transition: margin-left 0.3s; /* Smooth transition for sidebar toggle */
        }
        .menu-btn {
            position: absolute;
            top: 15px;
            left: 210px;
            font-size: 20px;
            cursor: pointer;
            background: none;
            border: none;
            color: #2c3e50;
        }
        
        /* Table Styling */
        .table-container {
            margin-top: 20px;
            background: white;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            border-radius: 8px;
            overflow: hidden;
        }
        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: center;
        }
        th {
            background: #2c3e50;
            color: white;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background: #f9f9f9;
        }
        tr:hover {
            background: #dfe6e9;
        }

        /* Button Styling */
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
        .btn-edit {
            background: #f1c40f;
            color: white;
        }
        .btn-edit:hover {
            background: #d4ac0d;
        }
        .btn-delete {
            background: #e74c3c;
            color: white;
        }
        .btn-delete:hover {
            background: #c0392b;
        }
        .btn-ajout {
            background: rgb(22, 142, 38);
            color: white;
            float: right;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
 <h2>Liste </h2>
    <button class=\"menu-btn\" onclick=\"toggleSidebar()\"><i class=\"fa fa-bars\"></i></button>
    <div class=\"sidebar\" id=\"sidebar\">
        <h2>Admin Panel</h2>
        <ul>
            <li><a href=\"#\"><i class=\"fa fa-home\"></i> Tableau de bord</a></li>
            <li><a href= \"admin\"><i class=\"fa fa-users\"></i> Utilisateurs</a></li>
            <li><a href=\"#\"><i class=\"fa fa-cogs\"></i> Paramètres</a></li>
        </ul>
    </div>

    <div class=\"content\">
    <h1>Liste des Utilisateurs</h1>

        <a href=\"{{ path('app_AddParent', {'type': 'parent'}) }}\" class=\"btn btn-ajout\">Ajouter un parent</a>
        <h2>Liste des Parents</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for user in parents %}
                    <tr>
                        <td>{{ user.id }}</td>
                        <td>{{ user.nom }}</td>
                        <td>{{ user.prenom }}</td>
                        <td>{{ user.email }}</td>
                        <td>
                            <a href=\"{{ path('app_edit_user', {'id': user.id}) }}\" class=\"btn btn-edit\">Modifier</a>
                            <a href=\"#\" onclick=\"confirmDelete('{{ path('app_delete_user', {'id': user.id}) }}')\" class=\"btn btn-delete\">Supprimer</a>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"5\">Aucun parent trouvé.</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>

        
        <a href=\"{{ path('app_AddUser', {'type': 'eleve'}) }}\" class=\"btn btn-ajout\">Ajouter un élève</a>
        <h2>Liste des Élèves</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for user in eleves %}
                    <tr>
                        <td>{{ user.id }}</td>
                        <td>{{ user.nom }}</td>
                        <td>{{ user.prenom }}</td>
                        <td>{{ user.email }}</td>
                        <td>
                            <a href=\"{{ path('app_edit_user', {'id': user.id}) }}\" class=\"btn btn-edit\">Modifier</a>
                            <a href=\"#\" onclick=\"confirmDelete('{{ path('app_delete_user', {'id': user.id}) }}')\" class=\"btn btn-delete\">Supprimer</a>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"5\">Aucun élève trouvé.</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>

         <a href=\"{{ path('app_AddEnseignant', {'type': 'enseignant'}) }}\" class=\"btn btn-ajout\">Ajouter un enseignant</a>
        <h2>Liste des Enseignants</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                     <th>Specialite</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for user in enseignants %}
                    <tr>
                        <td>{{ user.id }}</td>
                        <td>{{ user.nom }}</td>
                        <td>{{ user.prenom }}</td>
                        <td>{{ user.email }}</td>
                        <td>{{ user.specialite }}</td>
                        <td>
                            <a href=\"{{ path('app_edit_user', {'id': user.id}) }}\" class=\"btn btn-edit\">Modifier</a>
                            <a href=\"#\" onclick=\"confirmDelete('{{ path('app_delete_user', {'id': user.id}) }}')\" class=\"btn btn-delete\">Supprimer</a>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"5\">Aucun enseignant trouvé.</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>

         <a href=\"{{ path('app_AddMedecin', {'type': 'parent'}) }}\" class=\"btn btn-ajout\">Ajouter un medecin</a>
        <h2>Liste des Medecins</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                     <th>Specialite</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for user in medecins %}
                    <tr>
                        <td>{{ user.id }}</td>
                        <td>{{ user.nom }}</td>
                        <td>{{ user.prenom }}</td>
                        <td>{{ user.email }}</td>
                        <td>{{ user.specialite }}</td>
                        <td>
                            <a href=\"{{ path('app_edit_user', {'id': user.id}) }}\" class=\"btn btn-edit\">Modifier</a>
                            <a href=\"#\" onclick=\"confirmDelete('{{ path('app_delete_user', {'id': user.id}) }}')\" class=\"btn btn-delete\">Supprimer</a>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"5\">Aucun medecin trouvé.</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>

    <script>


    function confirmDelete(deleteUrl) {
            if (confirm(\"Êtes-vous sûr de vouloir supprimer cet utilisateur ?\")) {
                window.location.href = deleteUrl; // Redirection vers l'URL de suppression
            }
        }

        
        function toggleSidebar() {
            const sidebar = document.getElementById(\"sidebar\");
            const content = document.querySelector(\".content\");
            if (sidebar.style.left === \"0px\") {
                sidebar.style.left = \"-220px\";
                content.style.marginLeft = \"0\";
            } else {
                sidebar.style.left = \"0px\";
                content.style.marginLeft = \"220px\";
            }
        }
    </script>

</body>
</html>
", "Admin/admin.html.twig", "C:\\Users\\yassi\\Downloads\\Novalearn-master\\Novalearn-master\\templates\\Admin\\admin.html.twig");
    }
}
