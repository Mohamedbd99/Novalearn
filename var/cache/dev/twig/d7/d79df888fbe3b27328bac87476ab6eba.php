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

/* post/index.html.twig */
class __TwigTemplate_eb90c7b415a375fea04a16738f129a85 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/index.html.twig"));

        // line 1
        yield "
";
        // line 2
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 9
        yield "
";
        // line 10
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        yield "    ";
        // line 4
        yield "    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\">

    ";
        // line 7
        yield "    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\"/>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 10
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

        // line 11
        yield "    <style>
        .feed-container {
            max-width: 750px;
            margin: 40px auto;
            padding-top: 3cm;
            padding-bottom: 0.5cm;
        }
        .post-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            margin-bottom: 30px;
        }
        .post-header {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 16px;
            border-bottom: 1px solid #eee;
            position: relative;
        }
        .post-avatar {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background-color: #ccc;
            object-fit: cover;
        }
        .post-header-info {
            display: flex;
            flex-direction: column;
        }
        .post-username {
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 2px;
            color: #333;
        }
        .post-date {
            font-size: 0.85rem;
            color: #999;
        }
        .post-body {
            padding: 16px;
        }
        .post-title {
            font-size: 2.5rem;
            font-family: serif;
            font-weight: 700;
            margin-bottom: 8px;
            color: #2c3e50;
        }
        .post-image {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 16px;
            box-shadow: 0 1px 4px rgba(0,0,0,0.1);
        }
        .post-text {
            font-size: 1.8rem;
            font-family: cursive;
            line-height: 1.6;
            color: #333;
            margin-bottom: 16px;
            white-space: pre-line;
        }

        /* Dropdown (3 points) */
        .dropdown-menu {
            z-index: 9999;
            border: none;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }
        .dropdown-item:hover {
            background-color: #f2f2f2;
        }
        .btn-dropdown {
            color: #333;
            font-size: 1.5rem;
            border: none;
            background: transparent;
            cursor: pointer;
        }
        .btn-dropdown:hover {
            color: #007bff;
        }

        /* Formulaire de commentaire */
        .comment-form-title {
            font-weight: 600;
            font-size: 0.9rem;
            margin-bottom: 6px;
            color: #444;
        }
        .comment-form .form-control {
            font-size: 0.9rem;
            resize: none;
        }
        .comment-form .btn-add-comment {
            font-size: 0.9rem;
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }

        /* Commentaires */
        .comments-title {
            font-weight: 600;
            font-size: 0.9rem;
            margin: 16px 0 8px;
            color: #444;
        }
        .comments-list {
            list-style: none;
            margin: 0;
            padding: 0;
        }
        .comment-item {
            background-color: #fafafa;
            border-radius: 6px;
            padding: 12px;
            margin-bottom: 8px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.05);
        }
        .comment-header {
            margin-bottom: 6px;
        }
        .comment-avatar {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background-color: #ccc;
            object-fit: cover;
        }
        .comment-author {
            font-size: 1.4rem;
            font-weight: 600;
            color: #333;
            margin-right: 4px;
        }
        .comment-time {
            font-size: 0.8rem;
            color: #999;
        }
        .comment-text {
            font-size: 1rem;
            font-family: Georgia, serif;
            line-height: 1.4;
            color: #555;
            margin-bottom: 6px;
            white-space: pre-line;
        }
        .no-comments {
            font-style: italic;
            color: #777;
        }

        /* Pagination */
        .pagination-container {
            display: flex;
            justify-content: center;
            margin-top: 40px;
        }
        .pagination {
            display: flex;
            gap: 6px;
        }
        .page-link {
            color: #007bff;
            border: none;
            border-radius: 6px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
            transition: background-color 0.2s;
        }
        .page-item.active .page-link {
            background-color: #007bff;
            color: #fff;
            border: none;
        }
        .page-link:hover {
            background-color: #e7e7e7;
            color: #0056b3;
        }
    </style>

    <div class=\"feed-container\">
        ";
        // line 198
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["postsWithComments"]) || array_key_exists("postsWithComments", $context) ? $context["postsWithComments"] : (function () { throw new RuntimeError('Variable "postsWithComments" does not exist.', 198, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["postWithComments"]) {
            // line 199
            yield "            <div class=\"post-card\">
                <!-- En-tête du post -->
                <div class=\"post-header\">
                    <div class=\"post-header-info\">
                        <div class=\"post-username\">
                            ";
            // line 204
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["postWithComments"], "post", [], "any", false, false, false, 204), "user", [], "any", false, false, false, 204) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["postWithComments"], "post", [], "any", false, false, false, 204), "user", [], "any", false, false, false, 204), "nom", [], "any", false, false, false, 204))) {
                // line 205
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["postWithComments"], "post", [], "any", false, false, false, 205), "user", [], "any", false, false, false, 205), "nom", [], "any", false, false, false, 205), "html", null, true);
                yield "
                            ";
            } else {
                // line 207
                yield "                                Poste anonyme
                            ";
            }
            // line 209
            yield "                        </div>
                        <div class=\"post-date\">
                            Publié le
                            ";
            // line 212
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["postWithComments"], "post", [], "any", false, false, false, 212), "createdAt", [], "any", false, false, false, 212), "d M Y H:i"), "Inconnue"), "html", null, true);
            yield "
                        </div>
                    </div>

                    <!-- Menu \"3 points\" (kebab menu) pour le post -->
                    <div class=\"ms-auto dropdown\" data-bs-auto-close=\"true\">
                        <button class=\"btn-dropdown dropdown-toggle\"
                                type=\"button\"
                                data-bs-toggle=\"dropdown\"
                                aria-expanded=\"false\"
                                title=\"Actions sur le post\">
                            <i class=\"fa-solid fa-ellipsis-vertical\"></i>
                        </button>
                        <ul class=\"dropdown-menu dropdown-menu-end\">
                            <li>
                                <a class=\"dropdown-item\"
                                   href=\"";
            // line 228
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["postWithComments"], "post", [], "any", false, false, false, 228), "id", [], "any", false, false, false, 228)]), "html", null, true);
            yield "\">
                                    Modifier
                                </a>
                            </li>
                            <li>
                                <form method=\"POST\"
                                      action=\"";
            // line 234
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["postWithComments"], "post", [], "any", false, false, false, 234), "id", [], "any", false, false, false, 234)]), "html", null, true);
            yield "\"
                                      class=\"d-inline\">
                                    <input type=\"hidden\"
                                           name=\"_token\"
                                           value=\"";
            // line 238
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_post_" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["postWithComments"], "post", [], "any", false, false, false, 238), "id", [], "any", false, false, false, 238))), "html", null, true);
            yield "\">
                                    <button type=\"submit\"
                                            class=\"dropdown-item\"
                                            onclick=\"return confirm('Voulez-vous vraiment supprimer ce post ?');\">
                                        Supprimer
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Corps du post -->
                <div class=\"post-body\">
                    <div class=\"post-title\">
                        ";
            // line 253
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["postWithComments"], "post", [], "any", false, false, false, 253), "title", [], "any", false, false, false, 253), "html", null, true);
            yield "
                    </div>

                    ";
            // line 256
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["postWithComments"], "post", [], "any", false, false, false, 256), "image", [], "any", false, false, false, 256)) {
                // line 257
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["postWithComments"], "post", [], "any", false, false, false, 257), "image", [], "any", false, false, false, 257))), "html", null, true);
                yield "\"
                             alt=\"Image du post\"
                             class=\"post-image\">
                    ";
            }
            // line 261
            yield "
                    <div class=\"post-text\">
                        ";
            // line 263
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["postWithComments"], "post", [], "any", false, false, false, 263), "content", [], "any", false, false, false, 263), "html", null, true);
            yield "
                    </div>


                    <div class=\"comment-form-title\">
                        Ajouter un commentaire :
                    </div>
                    ";
            // line 270
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["postWithComments"], "form", [], "any", false, false, false, 270), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_add_comment", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 271
$context["postWithComments"], "post", [], "any", false, false, false, 271), "id", [], "any", false, false, false, 271)]), "attr" => ["class" => "comment-form", "data-post-id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 274
$context["postWithComments"], "post", [], "any", false, false, false, 274), "id", [], "any", false, false, false, 274), "id" => ("commentForm-" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 275
$context["postWithComments"], "post", [], "any", false, false, false, 275), "id", [], "any", false, false, false, 275))]]);
            // line 277
            yield "
                    <div class=\"input-group mb-3\">
                        ";
            // line 279
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["postWithComments"], "form", [], "any", false, false, false, 279), "content", [], "any", false, false, false, 279), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Écrivez votre commentaire..."]]);
            // line 284
            yield "
                        <div class=\"input-group-append\">
                            <button type=\"submit\"
                                    class=\"btn btn-primary btn-add-comment\"
                                    title=\"Ajouter le commentaire\">
                                <i class=\"fas fa-paper-plane\"></i> <!-- Icône de flèche -->
                            </button>
                        </div>
                    </div>
                    ";
            // line 293
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["postWithComments"], "form", [], "any", false, false, false, 293), "post", [], "any", false, false, false, 293), 'widget', ["attr" => ["hidden" => true]]);
            yield "
                    ";
            // line 294
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["postWithComments"], "form", [], "any", false, false, false, 294), 'form_end');
            yield "

                    <div class=\"comments-title\">Commentaires :</div>
                    <ul class=\"comments-list\" id=\"comments-list-";
            // line 297
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["postWithComments"], "post", [], "any", false, false, false, 297), "id", [], "any", false, false, false, 297), "html", null, true);
            yield "\">
                        ";
            // line 298
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["postWithComments"], "commentaires", [], "any", false, false, false, 298));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
                // line 299
                yield "                            <li class=\"comment-item\" id=\"comment-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 299), "html", null, true);
                yield "\">
                                <div class=\"comment-header\">
                                    <img src=\"";
                // line 301
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/avatar2.png"), "html", null, true);
                yield "\"
                                         alt=\"Avatar du commentateur\"
                                         class=\"comment-avatar\">
                                    <div>
                                        <span class=\"comment-author\">";
                // line 305
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "user", [], "any", false, false, false, 305), "username", [], "any", false, false, false, 305), "html", null, true);
                yield "</span>
                                        <span class=\"comment-time\">
                • ";
                // line 307
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "createdAt", [], "any", false, false, false, 307), "d M Y H:i"), "Inconnue"), "html", null, true);
                yield "
            </span>
                                    </div>
                                </div>
                                <div class=\"comment-text\">
                                    <span class=\"comment-content\">";
                // line 312
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "content", [], "any", false, false, false, 312), "html", null, true);
                yield "</span>
                                    <form method=\"POST\" action=\"";
                // line 313
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_comment", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 313)]), "html", null, true);
                yield "\" class=\"update-comment-form\" data-comment-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 313), "html", null, true);
                yield "\" style=\"display: none;\">
                                        <textarea name=\"content\" class=\"form-control\">";
                // line 314
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "content", [], "any", false, false, false, 314), "html", null, true);
                yield "</textarea>
                                        <button type=\"submit\" class=\"btn btn-primary btn-sm mt-2\">Enregistrer</button>
                                        <button type=\"button\" class=\"btn btn-secondary btn-sm mt-2 cancel-update\">Annuler</button>
                                    </form>
                                </div>
                                <div class=\"comment-actions\">
                                    <button class=\"btn btn-icon btn-warning btn-sm edit-comment\" title=\"Modifier le commentaire\">
                                        <i class=\"fa-solid fa-pen\"></i>
                                    </button>
                                    <form method=\"POST\" action=\"";
                // line 323
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_comment", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 323)]), "html", null, true);
                yield "\" class=\"delete-comment-form\" data-comment-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 323), "html", null, true);
                yield "\">
                                        <button type=\"submit\" class=\"btn btn-danger\">
                                            Supprimer
                                        </button>
                                    </form>
                                </div>
                            </li>
                        ";
                $context['_iterated'] = true;
            }
            // line 334
            if (!$context['_iterated']) {
                // line 331
                yield "                            <li class=\"no-comments\">
                                Aucun commentaire pour ce post.
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['commentaire'], $context['_parent'], $context['_iterated']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 335
            yield "                    </ul>
                </div><!-- /post-body -->
            </div><!-- /post-card -->
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['postWithComments'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 339
        yield "
        <!-- Pagination -->
        <div class=\"pagination-container\">
            ";
        // line 342
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 342, $this->source); })()));
        yield "
        </div>
    </div>

    <!-- Bootstrap JS (inclut Popper pour les dropdown) -->
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Sélection de tous les boutons dropdown
            var dropdownToggles = document.querySelectorAll('.dropdown-toggle');

            dropdownToggles.forEach(function(toggle) {
                // Initialise (ou récupère) l'instance Bootstrap du dropdown
                var dropdownInstance = bootstrap.Dropdown.getInstance(toggle);
                if (!dropdownInstance) {
                    dropdownInstance = new bootstrap.Dropdown(toggle);
                }

                // Forcer l'ouverture/fermeture au clic
                toggle.addEventListener('click', function (event) {
                    event.preventDefault();
                    dropdownInstance.toggle();
                });
            });

            // Fermer le dropdown si on clique en dehors
            document.addEventListener('click', function (event) {
                dropdownToggles.forEach(function(toggle) {
                    if (!toggle.parentElement.contains(event.target)) {
                        var instance = bootstrap.Dropdown.getInstance(toggle);
                        if (instance && toggle.parentElement.classList.contains('show')) {
                            instance.hide();
                        }
                    }
                });
            });
        });
    </script>
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
        return "post/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  541 => 342,  536 => 339,  527 => 335,  518 => 331,  516 => 334,  502 => 323,  490 => 314,  484 => 313,  480 => 312,  472 => 307,  467 => 305,  460 => 301,  454 => 299,  449 => 298,  445 => 297,  439 => 294,  435 => 293,  424 => 284,  422 => 279,  418 => 277,  416 => 275,  415 => 274,  414 => 271,  413 => 270,  403 => 263,  399 => 261,  391 => 257,  389 => 256,  383 => 253,  365 => 238,  358 => 234,  349 => 228,  330 => 212,  325 => 209,  321 => 207,  315 => 205,  313 => 204,  306 => 199,  302 => 198,  113 => 11,  100 => 10,  88 => 7,  84 => 4,  82 => 3,  69 => 2,  58 => 10,  55 => 9,  53 => 2,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
{% block stylesheets %}
    {# Si votre thème charge déjà Bootstrap, vérifiez de ne pas le dupliquer #}
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\">

    {# Font Awesome pour l'icône fa-ellipsis-vertical #}
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\"/>
{% endblock %}

{% block body %}
    <style>
        .feed-container {
            max-width: 750px;
            margin: 40px auto;
            padding-top: 3cm;
            padding-bottom: 0.5cm;
        }
        .post-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            margin-bottom: 30px;
        }
        .post-header {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 16px;
            border-bottom: 1px solid #eee;
            position: relative;
        }
        .post-avatar {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background-color: #ccc;
            object-fit: cover;
        }
        .post-header-info {
            display: flex;
            flex-direction: column;
        }
        .post-username {
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 2px;
            color: #333;
        }
        .post-date {
            font-size: 0.85rem;
            color: #999;
        }
        .post-body {
            padding: 16px;
        }
        .post-title {
            font-size: 2.5rem;
            font-family: serif;
            font-weight: 700;
            margin-bottom: 8px;
            color: #2c3e50;
        }
        .post-image {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 16px;
            box-shadow: 0 1px 4px rgba(0,0,0,0.1);
        }
        .post-text {
            font-size: 1.8rem;
            font-family: cursive;
            line-height: 1.6;
            color: #333;
            margin-bottom: 16px;
            white-space: pre-line;
        }

        /* Dropdown (3 points) */
        .dropdown-menu {
            z-index: 9999;
            border: none;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }
        .dropdown-item:hover {
            background-color: #f2f2f2;
        }
        .btn-dropdown {
            color: #333;
            font-size: 1.5rem;
            border: none;
            background: transparent;
            cursor: pointer;
        }
        .btn-dropdown:hover {
            color: #007bff;
        }

        /* Formulaire de commentaire */
        .comment-form-title {
            font-weight: 600;
            font-size: 0.9rem;
            margin-bottom: 6px;
            color: #444;
        }
        .comment-form .form-control {
            font-size: 0.9rem;
            resize: none;
        }
        .comment-form .btn-add-comment {
            font-size: 0.9rem;
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }

        /* Commentaires */
        .comments-title {
            font-weight: 600;
            font-size: 0.9rem;
            margin: 16px 0 8px;
            color: #444;
        }
        .comments-list {
            list-style: none;
            margin: 0;
            padding: 0;
        }
        .comment-item {
            background-color: #fafafa;
            border-radius: 6px;
            padding: 12px;
            margin-bottom: 8px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.05);
        }
        .comment-header {
            margin-bottom: 6px;
        }
        .comment-avatar {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background-color: #ccc;
            object-fit: cover;
        }
        .comment-author {
            font-size: 1.4rem;
            font-weight: 600;
            color: #333;
            margin-right: 4px;
        }
        .comment-time {
            font-size: 0.8rem;
            color: #999;
        }
        .comment-text {
            font-size: 1rem;
            font-family: Georgia, serif;
            line-height: 1.4;
            color: #555;
            margin-bottom: 6px;
            white-space: pre-line;
        }
        .no-comments {
            font-style: italic;
            color: #777;
        }

        /* Pagination */
        .pagination-container {
            display: flex;
            justify-content: center;
            margin-top: 40px;
        }
        .pagination {
            display: flex;
            gap: 6px;
        }
        .page-link {
            color: #007bff;
            border: none;
            border-radius: 6px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
            transition: background-color 0.2s;
        }
        .page-item.active .page-link {
            background-color: #007bff;
            color: #fff;
            border: none;
        }
        .page-link:hover {
            background-color: #e7e7e7;
            color: #0056b3;
        }
    </style>

    <div class=\"feed-container\">
        {% for postWithComments in postsWithComments %}
            <div class=\"post-card\">
                <!-- En-tête du post -->
                <div class=\"post-header\">
                    <div class=\"post-header-info\">
                        <div class=\"post-username\">
                            {% if postWithComments.post.user and postWithComments.post.user.nom %}
                                {{ postWithComments.post.user.nom }}
                            {% else %}
                                Poste anonyme
                            {% endif %}
                        </div>
                        <div class=\"post-date\">
                            Publié le
                            {{ postWithComments.post.createdAt|date('d M Y H:i')|default('Inconnue') }}
                        </div>
                    </div>

                    <!-- Menu \"3 points\" (kebab menu) pour le post -->
                    <div class=\"ms-auto dropdown\" data-bs-auto-close=\"true\">
                        <button class=\"btn-dropdown dropdown-toggle\"
                                type=\"button\"
                                data-bs-toggle=\"dropdown\"
                                aria-expanded=\"false\"
                                title=\"Actions sur le post\">
                            <i class=\"fa-solid fa-ellipsis-vertical\"></i>
                        </button>
                        <ul class=\"dropdown-menu dropdown-menu-end\">
                            <li>
                                <a class=\"dropdown-item\"
                                   href=\"{{ path('post_edit', { 'id': postWithComments.post.id }) }}\">
                                    Modifier
                                </a>
                            </li>
                            <li>
                                <form method=\"POST\"
                                      action=\"{{ path('post_delete', { 'id': postWithComments.post.id }) }}\"
                                      class=\"d-inline\">
                                    <input type=\"hidden\"
                                           name=\"_token\"
                                           value=\"{{ csrf_token('delete_post_' ~ postWithComments.post.id) }}\">
                                    <button type=\"submit\"
                                            class=\"dropdown-item\"
                                            onclick=\"return confirm('Voulez-vous vraiment supprimer ce post ?');\">
                                        Supprimer
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Corps du post -->
                <div class=\"post-body\">
                    <div class=\"post-title\">
                        {{ postWithComments.post.title }}
                    </div>

                    {% if postWithComments.post.image %}
                        <img src=\"{{ asset('images/' ~ postWithComments.post.image) }}\"
                             alt=\"Image du post\"
                             class=\"post-image\">
                    {% endif %}

                    <div class=\"post-text\">
                        {{ postWithComments.post.content }}
                    </div>


                    <div class=\"comment-form-title\">
                        Ajouter un commentaire :
                    </div>
                    {{ form_start(postWithComments.form, {
                        'action': path('post_add_comment', { 'id': postWithComments.post.id }),
                        'attr': {
                            'class': 'comment-form',
                            'data-post-id': postWithComments.post.id,
                            'id': 'commentForm-' ~ postWithComments.post.id
                        }
                    }) }}
                    <div class=\"input-group mb-3\">
                        {{ form_widget(postWithComments.form.content, {
                            'attr': {
                                'class': 'form-control',
                                'placeholder': 'Écrivez votre commentaire...'
                            }
                        }) }}
                        <div class=\"input-group-append\">
                            <button type=\"submit\"
                                    class=\"btn btn-primary btn-add-comment\"
                                    title=\"Ajouter le commentaire\">
                                <i class=\"fas fa-paper-plane\"></i> <!-- Icône de flèche -->
                            </button>
                        </div>
                    </div>
                    {{ form_widget(postWithComments.form.post, { 'attr': {'hidden': true} }) }}
                    {{ form_end(postWithComments.form) }}

                    <div class=\"comments-title\">Commentaires :</div>
                    <ul class=\"comments-list\" id=\"comments-list-{{ postWithComments.post.id }}\">
                        {% for commentaire in postWithComments.commentaires %}
                            <li class=\"comment-item\" id=\"comment-{{ commentaire.id }}\">
                                <div class=\"comment-header\">
                                    <img src=\"{{ asset('front/images/avatar2.png') }}\"
                                         alt=\"Avatar du commentateur\"
                                         class=\"comment-avatar\">
                                    <div>
                                        <span class=\"comment-author\">{{ commentaire.user.username }}</span>
                                        <span class=\"comment-time\">
                • {{ commentaire.createdAt|date('d M Y H:i')|default('Inconnue') }}
            </span>
                                    </div>
                                </div>
                                <div class=\"comment-text\">
                                    <span class=\"comment-content\">{{ commentaire.content }}</span>
                                    <form method=\"POST\" action=\"{{ path('update_comment', { 'id': commentaire.id }) }}\" class=\"update-comment-form\" data-comment-id=\"{{ commentaire.id }}\" style=\"display: none;\">
                                        <textarea name=\"content\" class=\"form-control\">{{ commentaire.content }}</textarea>
                                        <button type=\"submit\" class=\"btn btn-primary btn-sm mt-2\">Enregistrer</button>
                                        <button type=\"button\" class=\"btn btn-secondary btn-sm mt-2 cancel-update\">Annuler</button>
                                    </form>
                                </div>
                                <div class=\"comment-actions\">
                                    <button class=\"btn btn-icon btn-warning btn-sm edit-comment\" title=\"Modifier le commentaire\">
                                        <i class=\"fa-solid fa-pen\"></i>
                                    </button>
                                    <form method=\"POST\" action=\"{{ path('delete_comment', { 'id': commentaire.id }) }}\" class=\"delete-comment-form\" data-comment-id=\"{{ commentaire.id }}\">
                                        <button type=\"submit\" class=\"btn btn-danger\">
                                            Supprimer
                                        </button>
                                    </form>
                                </div>
                            </li>
                        {% else %}
                            <li class=\"no-comments\">
                                Aucun commentaire pour ce post.
                            </li>
                        {% endfor %}
                    </ul>
                </div><!-- /post-body -->
            </div><!-- /post-card -->
        {% endfor %}

        <!-- Pagination -->
        <div class=\"pagination-container\">
            {{ knp_pagination_render(pagination) }}
        </div>
    </div>

    <!-- Bootstrap JS (inclut Popper pour les dropdown) -->
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Sélection de tous les boutons dropdown
            var dropdownToggles = document.querySelectorAll('.dropdown-toggle');

            dropdownToggles.forEach(function(toggle) {
                // Initialise (ou récupère) l'instance Bootstrap du dropdown
                var dropdownInstance = bootstrap.Dropdown.getInstance(toggle);
                if (!dropdownInstance) {
                    dropdownInstance = new bootstrap.Dropdown(toggle);
                }

                // Forcer l'ouverture/fermeture au clic
                toggle.addEventListener('click', function (event) {
                    event.preventDefault();
                    dropdownInstance.toggle();
                });
            });

            // Fermer le dropdown si on clique en dehors
            document.addEventListener('click', function (event) {
                dropdownToggles.forEach(function(toggle) {
                    if (!toggle.parentElement.contains(event.target)) {
                        var instance = bootstrap.Dropdown.getInstance(toggle);
                        if (instance && toggle.parentElement.classList.contains('show')) {
                            instance.hide();
                        }
                    }
                });
            });
        });
    </script>
{% endblock %}
", "post/index.html.twig", "C:\\Users\\yassi\\Downloads\\Novalearn-master\\Novalearn-master\\templates\\post\\index.html.twig");
    }
}
