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

/* index.html.twig */
class __TwigTemplate_f0cfdf59670be3858e7b4650754e92cd extends Template
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
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Nova Learn </title>
     ";
        // line 7
        yield from $this->unwrap()->yieldBlock('css', $context, $blocks);
        // line 21
        yield "
    <style>
        .left-side-header .logo-area img {
            max-height: 60px;
            width: auto;
            object-fit: contain;
        }
    </style>
</head>
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script>
    \$(document).ready(function () {
        // Ajouter un commentaire
        \$(\".comment-form\").submit(function (e) {
            e.preventDefault();

            let form = \$(this);
            let postId = form.data(\"post-id\");
            let commentsList = \$(\"#comments-list-\" + postId);
            let commentInput = form.find(\"textarea\");

            \$.ajax({
                url: form.attr(\"action\"),
                type: \"POST\",
                data: form.serialize(),
                success: function (response) {
                    if (response.success) {
                        commentsList.find(\".no-comments\").remove();

                        let newComment = `
                        <li class=\"comment-item\" id=\"comment-\${response.comment.id}\">
                            <div class=\"comment-header\">
                                <img src=\"\${response.comment.avatarUrl}\"
                                     alt=\"Avatar du commentateur\"
                                     class=\"comment-avatar\">
                                <div>
                                    <span class=\"comment-author\">\${response.comment.username}</span>
                                    <span class=\"comment-time\">
                                        • \${new Date(response.comment.createdAt).toLocaleDateString('fr-FR', { day: '2-digit', month: 'short', year: 'numeric', hour: '2-digit', minute: '2-digit' })}
                                    </span>
                                </div>
                            </div>
                            <div class=\"comment-text\">
                                <span class=\"comment-content\">\${response.comment.content}</span>
                                <form method=\"POST\" action=\"/comment/update/\${response.comment.id}\" class=\"update-comment-form\" data-comment-id=\"\${response.comment.id}\" style=\"display: none;\">
                                    <textarea name=\"content\" class=\"form-control\">\${response.comment.content}</textarea>
                                    <button type=\"submit\" class=\"btn btn-primary btn-sm mt-2\">Enregistrer</button>
                                    <button type=\"button\" class=\"btn btn-secondary btn-sm mt-2 cancel-update\">Annuler</button>
                                </form>
                            </div>
                            <div class=\"comment-actions\">
                                <button class=\"btn btn-icon btn-warning btn-sm edit-comment\" title=\"Modifier le commentaire\">
                                    <i class=\"fa-solid fa-pen\"></i>
                                </button>
                                <form method=\"POST\" action=\"/comment/delete/\${response.comment.id}\" class=\"delete-comment-form\" data-comment-id=\"\${response.comment.id}\">
                                    <button type=\"submit\" class=\"btn btn-danger\">
                                        Supprimer
                                    </button>
                                </form>
                            </div>
                        </li>
                        `;
                        commentsList.append(newComment);

                        commentInput.val(\"\");
                    }
                },
                error: function () {
                    alert(\"Une erreur est survenue. Veuillez réessayer.\");
                }
            });
        });

        // Supprimer un commentaire
        \$(document).on('submit', '.delete-comment-form', function (e) {
            e.preventDefault();

            let form = \$(this);
            let commentId = form.data(\"comment-id\");
            let commentElement = \$(\"#comment-\" + commentId);

            \$.ajax({
                url: form.attr(\"action\"),
                type: \"POST\",
                data: form.serialize(),
                success: function (response) {
                    if (response.success) {
                        commentElement.remove();
                    }
                },
                error: function () {
                    alert(\"Une erreur est survenue. Veuillez réessayer.\");
                }
            });
        });

        // Afficher le formulaire de modification
        \$(document).on('click', '.edit-comment', function () {
            let commentItem = \$(this).closest(\".comment-item\");
            commentItem.find(\".comment-content\").hide();
            commentItem.find(\".update-comment-form\").show();
        });

        // Annuler la modification
        \$(document).on('click', '.cancel-update', function () {
            let commentItem = \$(this).closest(\".comment-item\");
            commentItem.find(\".update-comment-form\").hide();
            commentItem.find(\".comment-content\").show();
        });

        // Soumettre le formulaire de modification via AJAX
        \$(document).on('submit', '.update-comment-form', function (e) {
            e.preventDefault();

            let form = \$(this);
            let commentId = form.data(\"comment-id\");
            let commentContent = form.find(\"textarea\").val();
            let commentItem = \$(\"#comment-\" + commentId);

            \$.ajax({
                url: form.attr(\"action\"),
                type: \"POST\",
                data: form.serialize(),
                success: function (response) {
                    if (response.success) {
                        commentItem.find(\".comment-content\").text(commentContent).show();
                        form.hide();
                    }
                },
                error: function () {
                    alert(\"Une erreur est survenue. Veuillez réessayer.\");
                }
            });
        });
    });
</script>

<body>
<!-- header style one -->
<header class=\"header-one header--sticky\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"header-one-wrapper\">
                    <div class=\"left-side-header\">
                    </div>

                    <div class=\"main-nav-one\">
                        <nav>
                            <ul>
                                <li class=\"has-dropdown\" style=\"position: static;\">
                                    <a class=\"nav-link\" href=\"#\">Home</a>

                                    <ul class=\"submenu\">
                                        <li>
                                            <a href=\"#\">Home 01</a>
                                        </li>
                                        <li>
                                            <a href=\"#\">Home 02</a>
                                        </li>
                                        <li>
                                            <a href=\"#\">Home 03</a>
                                        </li>
                                        <li>
                                            <a href=\"#\">Home 04</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=\"has-dropdown\">
                                    <a class=\"nav-link\" href=\"#\">Pages</a>
                                    <ul class=\"submenu\">
                                        <li><a href=\"#\">About Us</a></li>
                                        <li><a href=\"#\">Team</a></li>
                                        <li><a href=\"#\">Team Details</a></li>
                                        <li><a href=\"#\">Event</a></li>
                                        <li><a href=\"#\">Event Details</a></li>
                                        <li><a href=\"#\">Program Details</a></li>
                                        <li><a href=\"#\">Pricing</a></li>
                                        <li><a href=\"#\">Pricing Two</a></li>
                                    </ul>
                                </li>
                                <li class=\"has-dropdown\">
                                    <a class=\"nav-link\" href=\"#\">Classes</a>
                                    <ul class=\"submenu\">
                                        <li><a href=\"#\">Courses</a></li>
                                        <li><a href=\"#\">Course Details</a></li>
                                    </ul>
                                </li>
                                <li class=\"has-dropdown\">
                                    <a class=\"nav-link\" href=\"#\">Blog</a>
                                    <ul class=\"submenu\">
                                        <li><a href=\"/post/add\">Add New Blog</a></li>
                                        <li><a href=\"/post/all\">Blog List</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class=\"nav-link\" href=\"#\">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <div class=\"header-right-area-one\">
                        <div class=\"buttons-area\">
                            <a href=\"#\" class=\"rts-btn btn-primary border-radius\">Admission Now</a>
                        </div>
                        <div class=\"menu-btn\" id=\"menu-btn\">
                            <svg width=\"20\" height=\"16\" viewBox=\"0 0 20 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                <rect y=\"14\" width=\"20\" height=\"2\" fill=\"#1F1F25\"></rect>
                                <rect y=\"7\" width=\"20\" height=\"2\" fill=\"#1F1F25\"></rect>
                                <rect width=\"20\" height=\"2\" fill=\"#1F1F25\"></rect>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

    <div class=\"container\">
        ";
        // line 242
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 243
        yield "    </div>

<div class=\"rts-footer-area section-bg\">
    <div class=\"container\">
        <div class=\"footer-top\">
            <form action=\"#\">
                <h3 class=\"form-title\">Don’t Miss Awesome Story From Our Alumni</h3>
                <div class=\"form-inner\">
                    <input type=\"email\" name=\"Email\" placeholder=\"Enter Your mail\" required>
                    <button type=\"submit\" class=\"rts-btn btn-primary border-radius\">Subscribe Now</button>
                </div>
            </form>
        </div>
        <div class=\"row ptb--65\">
            <div class=\"col-lg-12\">
                <!-- footer main wrapper -->
                <div class=\"footer-one-main-wrapper\">
                    <!-- single sized  footer  -->
                    <div class=\"footer-single-wized left-logo\">
    
                        <div class=\"body\">
                            <p class=\"dsic\">
                                We are passionate education dedicated to providing high-quality resources learners
                                all backgrounds.
                            </p>
                            <ul class=\"wrapper-list\">
                                <li><i class=\"fa-regular fa-location-dot\"></i>Yarra Park, Melbourne, Australia </li>
                                <li><i class=\"fa-regular fa-phone\"></i><a href=\"tel:+4733378901\">+(61) 485-826-710</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- single sized  footer end -->
                    <!-- single sized  footer  -->
                    <div class=\"footer-single-wized\">
                        <div class=\"head\">
                            <h6 class=\"title\">About Us</h6>
                        </div>
                        <div class=\"body\">
                            <ul class=\"menu\">
                                <li><a href=\"#\">About Us</a></li>
                                <li><a href=\"#\">Teachers</a></li>
                                <li><a href=\"#\">Teachers Info</a></li>
                                <li><a href=\"#\">Event</a></li>
                                <li><a href=\"#\">Pricing</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- single sized  footer end -->
                    <!-- single sized  footer  -->
                    <div class=\"footer-single-wized\">
                        <div class=\"head\">
                            <h6 class=\"title\">Our Course</h6>
                        </div>
                        <div class=\"body\">
                            <ul class=\"menu\">
                                <li><a href=\"#\">Courses</a></li>
                                <li><a href=\"#\">Blog</a></li>
                                <li><a href=\"#\">Program</a></li>
                                <li><a href=\"#\">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- single sized  footer end -->
                    <!-- single sized  footer  -->
                    <div class=\"footer-single-wized input-area\">
                        <div class=\"head\">
                            <h6 class=\"title\">Recent Post</h6>
                        </div>
                        <div class=\"body\">
                            <ul>
                                <li class=\"post-area\">
                                    <div class=\"content\">
                                        <p class=\"date\">October 29, 2023</p>
                                        <h6 class=\"post-title\"><a href=\"#\">Avoid These 4 Common When Managing Remote Teams</a></h6>
                                    </div>
                                </li>
                                <li class=\"post-area\">
                                    <div class=\"content\">
                                        <p class=\"date\">October 29, 2023</p>
                                        <h6 class=\"post-title\"><a href=\"#\">How To Draw Realistic Lips In 7 Simple Steps</a></h6>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- single sized  footer end -->
                </div>
                <!-- footer main wrapper end -->
            </div>
        </div>
    </div>
    <div class=\"copyright-area-one-border\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"copyright-area-one\">
                        <p>Copyright © 2025 All Rights Reserved by NovaLearn</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"modal login-pupup-modal fade\" id=\"exampleModal-login\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Hi, Welcome back!</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <form action=\"#\" class=\"login-form\">
                    <input type=\"text\" placeholder=\"Username of Email Address\" required>
                    <input type=\"password\" placeholder=\"Password\" required>
                    <div class=\"d-flex mb--20 align-items-center\">
                        <input type=\"checkbox\" id=\"examplecheck-modal\">
                        <label for=\"examplecheck-modal\">I agree to the terms of use and privacy policy.</label>
                    </div>
                    <button type=\"submit\" class=\"rts-btn btn-primary\">Sign In</button>

                    <p class=\"dont-acc mt--20\">Dont Have an Account? <a href=\"#\">Sign-up</a> </p>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- header style two -->
<div id=\"side-bar\" class=\"side-bar header-two\">
    <button class=\"close-icon-menu\"><i class=\"far fa-times\"></i></button>
    <!-- inner menu area desktop start -->
    <div class=\"inner-main-wrapper-desk\">
        <div class=\"inner-content\">
            <h4 class=\"title\">We Build Building and Great Constructive Homes.</h4>
            <p class=\"disc\">
                We successfully cope with tasks of varying complexity, provide long-term guarantees and regularly master new technologies.
            </p>
            <div class=\"footer\">
                <h4 class=\"title\">Got a project in mind?</h4>
                <a href=\"#\" class=\"rts-btn btn-primary\">Let's talk</a>
            </div>
        </div>
    </div>
    <!-- mobile menu area start -->
    <div class=\"mobile-menu-main\">
        <nav class=\"nav-main mainmenu-nav mt--30\">
            <ul class=\"mainmenu metismenu\" id=\"mobile-menu-active\">
                <li class=\"has-droupdown\">
                    <a href=\"#\" class=\"main\">Home</a>
                    <ul class=\"submenu mm-collapse\">
                        <li><a class=\"mobile-menu-link\" href=\"#\">Home 01</a></li>
                        <li><a class=\"mobile-menu-link\" href=\"#\">Home 02</a></li>
                        <li><a class=\"mobile-menu-link\" href=\"#\">Home 03</a></li>
                        <li><a class=\"mobile-menu-link\" href=\"#\">home 04</a></li>
                    </ul>
                </li>
                <li class=\"has-droupdown\">
                    <a href=\"#\" class=\"main\">Pages</a>
                    <ul class=\"submenu mm-collapse\">
                        <li><a class=\"mobile-menu-link\" href=\"#\">About Us</a></li>
                        <li><a class=\"mobile-menu-link\" href=\"#\">Team</a></li>
                        <li><a class=\"mobile-menu-link\" href=\"#\">Team Details</a></li>
                        <li><a class=\"mobile-menu-link\" href=\"#\">Event</a></li>
                        <li><a class=\"mobile-menu-link\" href=\"#\">Event Details</a></li>
                        <li><a class=\"mobile-menu-link\" href=\"#\">Program Details</a></li>
                        <li><a class=\"mobile-menu-link\" href=\"#\">Pricing</a></li>
                        <li><a class=\"mobile-menu-link\" href=\"#\">Pricing Two</a></li>
                    </ul>
                </li>
                <li class=\"has-droupdown\">
                    <a href=\"#\" class=\"main\">Class</a>
                    <ul class=\"submenu mm-collapse\">
                        <li><a class=\"mobile-menu-link\" href=\"#\">Courses</a></li>
                        <li><a class=\"mobile-menu-link\" href=\"#\">Course Details</a></li>
                    </ul>
                </li>
                <li class=\"has-droupdown\">
                    <a href=\"#\" class=\"main\">Blog</a>
                    <ul class=\"submenu mm-collapse\">
                        <li><a class=\"mobile-menu-link\" href=\"#\">Blog</a></li>
                        <li><a class=\"mobile-menu-link\" href=\"#\">Blog Grid</a></li>
                        <li><a class=\"mobile-menu-link\" href=\"#\">Blog List</a></li>
                        <li><a class=\"mobile-menu-link\" href=\"#\">Blog Right Sidebar</a></li>
                        <li><a class=\"mobile-menu-link\" href=\"#\">Blog Left Sidebar</a></li>
                        <li><a class=\"mobile-menu-link\" href=\"#\">Blog Details</a></li>
                    </ul>
                </li>
                <li class=\"menu-item\">
                    <a href=\"#\" class=\"main\">Contact</a>
                </li>
            </ul>
        </nav>

        <div class=\"buttons-area\">
            <a href=\"#\" class=\"rts-btn btn-border\">Log In</a>
            <a href=\"#\" class=\"rts-btn btn-primary\">Sign Up</a>
        </div>

        <div class=\"rts-social-style-one pl--20 mt--50\">
            <ul>
                <li>
                    <a href=\"#\">
                        <i class=\"fa-brands fa-facebook-f\"></i>
                    </a>
                </li>
                <li>
                    <a href=\"#\">
                        <i class=\"fa-brands fa-twitter\"></i>
                    </a>
                </li>
                <li>
                    <a href=\"#\">
                        <i class=\"fa-brands fa-youtube\"></i>
                    </a>
                </li>
                <li>
                    <a href=\"#\">
                        <i class=\"fa-brands fa-linkedin-in\"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- mobile menu area end -->
</div>
<!-- header style two End -->

<div id=\"preloader\" class=\"preloader\">
    <div class=\"animation-preloader\">
        <div class=\"txt-loading\">
                <span data-text-preloader=\"S\" class=\"letters-loading first\">
                        N
                    </span>
            <span data-text-preloader=\"T\" class=\"letters-loading first\">
                        O
                    </span>
            <span data-text-preloader=\"U\" class=\"letters-loading first\">
                    V
                    </span>
            <span data-text-preloader=\"D\" class=\"letters-loading first\">
                    A
                    </span>
            <span data-text-preloader=\"Y\" class=\"letters-loading first\">
                        L
                    </span>
            <span data-text-preloader=\"K\" class=\"letters-loading\">
                        E
                    </span>
            <span data-text-preloader=\"I\" class=\"letters-loading\">
                        A
                    </span>
            <span data-text-preloader=\"D\" class=\"letters-loading\">
                    R
                    </span>
            <span data-text-preloader=\"S\" class=\"letters-loading\">
                    N
                    </span>
        </div>
        <p class=\"text-center\">Loading</p>
    </div>
    <div class=\"loader\">
        <div class=\"row\">
            <div class=\"col-3 loader-section section-left\">
                <div class=\"bg\"></div>
            </div>
            <div class=\"col-3 loader-section section-left\">
                <div class=\"bg\"></div>
            </div>
            <div class=\"col-3 loader-section section-right\">
                <div class=\"bg\"></div>
            </div>
            <div class=\"col-3 loader-section section-right\">
                <div class=\"bg\"></div>
            </div>
        </div>
    </div>
</div>

<!-- rts backto top start -->
<div class=\"progress-wrap\">
    <svg class=\"progress-circle svg-content\" width=\"100%\" height=\"100%\" viewBox=\"-1 -1 102 102\">
        <path d=\"M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98\" style=\"transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;\"></path>
    </svg>
</div>
<!-- rts backto top end -->

<!-- offcanvase search -->
<div class=\"search-input-area\">
    <div class=\"container\">
        <div class=\"search-input-inner\">
            <div class=\"input-div\">
                <input class=\"search-input autocomplete\" type=\"text\" placeholder=\"Search by keyword or #\">
                <button><i class=\"far fa-search\"></i></button>
            </div>
        </div>
    </div>
    <div id=\"close\" class=\"search-close-icon\"><i class=\"far fa-times\"></i></div>
</div>
<!-- offcanvase search -->
<div id=\"anywhere-home\" class=\"\">
</div>

<!-- all scripts -->
<!-- jquery min js -->
<script src=\"";
        // line 549
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/vendor/jquery.min.js"), "html", null, true);
        yield "\"></script>
<!-- jquery ui js -->
<script src=\"";
        // line 551
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/vendor/jquery-ui.js"), "html", null, true);
        yield "\"></script>
<!-- metismenu js -->
<script src=\"";
        // line 553
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/vendor/metismenu.js"), "html", null, true);
        yield "\"></script>
<!-- magnific popup js-->
<script src=\"";
        // line 555
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/vendor/magnifying-popup.js"), "html", null, true);
        yield "\"></script>
<!-- swiper JS 10.2.0 -->
<script src=\"";
        // line 557
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/plugins/swiper.js"), "html", null, true);
        yield "\"></script>
<!-- counterup js -->
<script src=\"";
        // line 559
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/plugins/counterup.js"), "html", null, true);
        yield "\"></script>
<!-- waypoint js -->
<script src=\"";
        // line 561
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/vendor/waypoint.js"), "html", null, true);
        yield "\"></script>
<!-- wow js -->
<script src=\"";
        // line 563
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/vendor/waw.js"), "html", null, true);
        yield "\"></script>
<!-- isotop mesonary -->
<script src=\"";
        // line 565
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/plugins/isotop.js"), "html", null, true);
        yield "\"></script>
<!-- jquery imageloaded -->
<script src=\"";
        // line 567
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/plugins/imagesloaded.pkgd.min.js"), "html", null, true);
        yield "\"></script>

<!-- resize sensor js -->
<script src=\"";
        // line 570
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/plugins/resizer-sensor.js"), "html", null, true);
        yield "\"></script>
<!-- sticky sidebar -->
<script src=\"";
        // line 572
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/plugins/sticky-sidebar.js"), "html", null, true);
        yield "\"></script>
<!-- gsap twinmax js -->
<script src=\"";
        // line 574
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/plugins/twinmax.js"), "html", null, true);
        yield "\"></script>
<!-- chroma js -->
<script src=\"";
        // line 576
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/vendor/chroma.min.js"), "html", null, true);
        yield "\"></script>
<!-- bootstrap 5.0.2 -->
<script src=\"";
        // line 578
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/plugins/bootstrap.min.js"), "html", null, true);
        yield "\"></script>
<!-- dymanic Contact Form -->
<script src=\"";
        // line 580
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/plugins/contact.form.js"), "html", null, true);
        yield "\"></script>
<!-- calender js -->
<script src=\"";
        // line 582
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/plugins/calender.js"), "html", null, true);
        yield "\"></script>
<!-- main Js -->
<script src=\"";
        // line 584
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/main.js"), "html", null, true);
        yield "\"></script>


</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_css(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 8
        yield "    <link rel=\"stylesheet\" href=\"assets/css/plugins/fontawesome-6.css\">
    <!-- swiper Css 10.2.0 -->
    <!-- magnific popup css -->
    <link rel=\"stylesheet\" href=\"assets/css/vendor/magnific-popup.css\">
    <!-- Bootstrap 5.0.2 -->
    <link rel=\"stylesheet\" href=\"assets/css/vendor/bootstrap.min.css\">
    <!-- jquery ui css -->
    <link rel=\"stylesheet\" href=\"assets/css/vendor/jquery-ui.css\">
    <!-- metismenu scss -->
    <link rel=\"stylesheet\" href=\"assets/css/vendor/metismenu.css\">
    <!-- custom style css -->
    <link rel=\"stylesheet\" href=\"assets/css/style.css\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 242
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "index.html.twig";
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
        return array (  731 => 242,  708 => 8,  695 => 7,  679 => 584,  674 => 582,  669 => 580,  664 => 578,  659 => 576,  654 => 574,  649 => 572,  644 => 570,  638 => 567,  633 => 565,  628 => 563,  623 => 561,  618 => 559,  613 => 557,  608 => 555,  603 => 553,  598 => 551,  593 => 549,  285 => 243,  283 => 242,  60 => 21,  58 => 7,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Nova Learn </title>
     {% block css %}
    <link rel=\"stylesheet\" href=\"assets/css/plugins/fontawesome-6.css\">
    <!-- swiper Css 10.2.0 -->
    <!-- magnific popup css -->
    <link rel=\"stylesheet\" href=\"assets/css/vendor/magnific-popup.css\">
    <!-- Bootstrap 5.0.2 -->
    <link rel=\"stylesheet\" href=\"assets/css/vendor/bootstrap.min.css\">
    <!-- jquery ui css -->
    <link rel=\"stylesheet\" href=\"assets/css/vendor/jquery-ui.css\">
    <!-- metismenu scss -->
    <link rel=\"stylesheet\" href=\"assets/css/vendor/metismenu.css\">
    <!-- custom style css -->
    <link rel=\"stylesheet\" href=\"assets/css/style.css\">
    {% endblock %}

    <style>
        .left-side-header .logo-area img {
            max-height: 60px;
            width: auto;
            object-fit: contain;
        }
    </style>
</head>
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script>
    \$(document).ready(function () {
        // Ajouter un commentaire
        \$(\".comment-form\").submit(function (e) {
            e.preventDefault();

            let form = \$(this);
            let postId = form.data(\"post-id\");
            let commentsList = \$(\"#comments-list-\" + postId);
            let commentInput = form.find(\"textarea\");

            \$.ajax({
                url: form.attr(\"action\"),
                type: \"POST\",
                data: form.serialize(),
                success: function (response) {
                    if (response.success) {
                        commentsList.find(\".no-comments\").remove();

                        let newComment = `
                        <li class=\"comment-item\" id=\"comment-\${response.comment.id}\">
                            <div class=\"comment-header\">
                                <img src=\"\${response.comment.avatarUrl}\"
                                     alt=\"Avatar du commentateur\"
                                     class=\"comment-avatar\">
                                <div>
                                    <span class=\"comment-author\">\${response.comment.username}</span>
                                    <span class=\"comment-time\">
                                        • \${new Date(response.comment.createdAt).toLocaleDateString('fr-FR', { day: '2-digit', month: 'short', year: 'numeric', hour: '2-digit', minute: '2-digit' })}
                                    </span>
                                </div>
                            </div>
                            <div class=\"comment-text\">
                                <span class=\"comment-content\">\${response.comment.content}</span>
                                <form method=\"POST\" action=\"/comment/update/\${response.comment.id}\" class=\"update-comment-form\" data-comment-id=\"\${response.comment.id}\" style=\"display: none;\">
                                    <textarea name=\"content\" class=\"form-control\">\${response.comment.content}</textarea>
                                    <button type=\"submit\" class=\"btn btn-primary btn-sm mt-2\">Enregistrer</button>
                                    <button type=\"button\" class=\"btn btn-secondary btn-sm mt-2 cancel-update\">Annuler</button>
                                </form>
                            </div>
                            <div class=\"comment-actions\">
                                <button class=\"btn btn-icon btn-warning btn-sm edit-comment\" title=\"Modifier le commentaire\">
                                    <i class=\"fa-solid fa-pen\"></i>
                                </button>
                                <form method=\"POST\" action=\"/comment/delete/\${response.comment.id}\" class=\"delete-comment-form\" data-comment-id=\"\${response.comment.id}\">
                                    <button type=\"submit\" class=\"btn btn-danger\">
                                        Supprimer
                                    </button>
                                </form>
                            </div>
                        </li>
                        `;
                        commentsList.append(newComment);

                        commentInput.val(\"\");
                    }
                },
                error: function () {
                    alert(\"Une erreur est survenue. Veuillez réessayer.\");
                }
            });
        });

        // Supprimer un commentaire
        \$(document).on('submit', '.delete-comment-form', function (e) {
            e.preventDefault();

            let form = \$(this);
            let commentId = form.data(\"comment-id\");
            let commentElement = \$(\"#comment-\" + commentId);

            \$.ajax({
                url: form.attr(\"action\"),
                type: \"POST\",
                data: form.serialize(),
                success: function (response) {
                    if (response.success) {
                        commentElement.remove();
                    }
                },
                error: function () {
                    alert(\"Une erreur est survenue. Veuillez réessayer.\");
                }
            });
        });

        // Afficher le formulaire de modification
        \$(document).on('click', '.edit-comment', function () {
            let commentItem = \$(this).closest(\".comment-item\");
            commentItem.find(\".comment-content\").hide();
            commentItem.find(\".update-comment-form\").show();
        });

        // Annuler la modification
        \$(document).on('click', '.cancel-update', function () {
            let commentItem = \$(this).closest(\".comment-item\");
            commentItem.find(\".update-comment-form\").hide();
            commentItem.find(\".comment-content\").show();
        });

        // Soumettre le formulaire de modification via AJAX
        \$(document).on('submit', '.update-comment-form', function (e) {
            e.preventDefault();

            let form = \$(this);
            let commentId = form.data(\"comment-id\");
            let commentContent = form.find(\"textarea\").val();
            let commentItem = \$(\"#comment-\" + commentId);

            \$.ajax({
                url: form.attr(\"action\"),
                type: \"POST\",
                data: form.serialize(),
                success: function (response) {
                    if (response.success) {
                        commentItem.find(\".comment-content\").text(commentContent).show();
                        form.hide();
                    }
                },
                error: function () {
                    alert(\"Une erreur est survenue. Veuillez réessayer.\");
                }
            });
        });
    });
</script>

<body>
<!-- header style one -->
<header class=\"header-one header--sticky\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"header-one-wrapper\">
                    <div class=\"left-side-header\">
                    </div>

                    <div class=\"main-nav-one\">
                        <nav>
                            <ul>
                                <li class=\"has-dropdown\" style=\"position: static;\">
                                    <a class=\"nav-link\" href=\"#\">Home</a>

                                    <ul class=\"submenu\">
                                        <li>
                                            <a href=\"#\">Home 01</a>
                                        </li>
                                        <li>
                                            <a href=\"#\">Home 02</a>
                                        </li>
                                        <li>
                                            <a href=\"#\">Home 03</a>
                                        </li>
                                        <li>
                                            <a href=\"#\">Home 04</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=\"has-dropdown\">
                                    <a class=\"nav-link\" href=\"#\">Pages</a>
                                    <ul class=\"submenu\">
                                        <li><a href=\"#\">About Us</a></li>
                                        <li><a href=\"#\">Team</a></li>
                                        <li><a href=\"#\">Team Details</a></li>
                                        <li><a href=\"#\">Event</a></li>
                                        <li><a href=\"#\">Event Details</a></li>
                                        <li><a href=\"#\">Program Details</a></li>
                                        <li><a href=\"#\">Pricing</a></li>
                                        <li><a href=\"#\">Pricing Two</a></li>
                                    </ul>
                                </li>
                                <li class=\"has-dropdown\">
                                    <a class=\"nav-link\" href=\"#\">Classes</a>
                                    <ul class=\"submenu\">
                                        <li><a href=\"#\">Courses</a></li>
                                        <li><a href=\"#\">Course Details</a></li>
                                    </ul>
                                </li>
                                <li class=\"has-dropdown\">
                                    <a class=\"nav-link\" href=\"#\">Blog</a>
                                    <ul class=\"submenu\">
                                        <li><a href=\"/post/add\">Add New Blog</a></li>
                                        <li><a href=\"/post/all\">Blog List</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class=\"nav-link\" href=\"#\">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <div class=\"header-right-area-one\">
                        <div class=\"buttons-area\">
                            <a href=\"#\" class=\"rts-btn btn-primary border-radius\">Admission Now</a>
                        </div>
                        <div class=\"menu-btn\" id=\"menu-btn\">
                            <svg width=\"20\" height=\"16\" viewBox=\"0 0 20 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                <rect y=\"14\" width=\"20\" height=\"2\" fill=\"#1F1F25\"></rect>
                                <rect y=\"7\" width=\"20\" height=\"2\" fill=\"#1F1F25\"></rect>
                                <rect width=\"20\" height=\"2\" fill=\"#1F1F25\"></rect>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

    <div class=\"container\">
        {% block body %}{% endblock %}
    </div>

<div class=\"rts-footer-area section-bg\">
    <div class=\"container\">
        <div class=\"footer-top\">
            <form action=\"#\">
                <h3 class=\"form-title\">Don’t Miss Awesome Story From Our Alumni</h3>
                <div class=\"form-inner\">
                    <input type=\"email\" name=\"Email\" placeholder=\"Enter Your mail\" required>
                    <button type=\"submit\" class=\"rts-btn btn-primary border-radius\">Subscribe Now</button>
                </div>
            </form>
        </div>
        <div class=\"row ptb--65\">
            <div class=\"col-lg-12\">
                <!-- footer main wrapper -->
                <div class=\"footer-one-main-wrapper\">
                    <!-- single sized  footer  -->
                    <div class=\"footer-single-wized left-logo\">
    
                        <div class=\"body\">
                            <p class=\"dsic\">
                                We are passionate education dedicated to providing high-quality resources learners
                                all backgrounds.
                            </p>
                            <ul class=\"wrapper-list\">
                                <li><i class=\"fa-regular fa-location-dot\"></i>Yarra Park, Melbourne, Australia </li>
                                <li><i class=\"fa-regular fa-phone\"></i><a href=\"tel:+4733378901\">+(61) 485-826-710</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- single sized  footer end -->
                    <!-- single sized  footer  -->
                    <div class=\"footer-single-wized\">
                        <div class=\"head\">
                            <h6 class=\"title\">About Us</h6>
                        </div>
                        <div class=\"body\">
                            <ul class=\"menu\">
                                <li><a href=\"#\">About Us</a></li>
                                <li><a href=\"#\">Teachers</a></li>
                                <li><a href=\"#\">Teachers Info</a></li>
                                <li><a href=\"#\">Event</a></li>
                                <li><a href=\"#\">Pricing</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- single sized  footer end -->
                    <!-- single sized  footer  -->
                    <div class=\"footer-single-wized\">
                        <div class=\"head\">
                            <h6 class=\"title\">Our Course</h6>
                        </div>
                        <div class=\"body\">
                            <ul class=\"menu\">
                                <li><a href=\"#\">Courses</a></li>
                                <li><a href=\"#\">Blog</a></li>
                                <li><a href=\"#\">Program</a></li>
                                <li><a href=\"#\">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- single sized  footer end -->
                    <!-- single sized  footer  -->
                    <div class=\"footer-single-wized input-area\">
                        <div class=\"head\">
                            <h6 class=\"title\">Recent Post</h6>
                        </div>
                        <div class=\"body\">
                            <ul>
                                <li class=\"post-area\">
                                    <div class=\"content\">
                                        <p class=\"date\">October 29, 2023</p>
                                        <h6 class=\"post-title\"><a href=\"#\">Avoid These 4 Common When Managing Remote Teams</a></h6>
                                    </div>
                                </li>
                                <li class=\"post-area\">
                                    <div class=\"content\">
                                        <p class=\"date\">October 29, 2023</p>
                                        <h6 class=\"post-title\"><a href=\"#\">How To Draw Realistic Lips In 7 Simple Steps</a></h6>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- single sized  footer end -->
                </div>
                <!-- footer main wrapper end -->
            </div>
        </div>
    </div>
    <div class=\"copyright-area-one-border\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"copyright-area-one\">
                        <p>Copyright © 2025 All Rights Reserved by NovaLearn</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"modal login-pupup-modal fade\" id=\"exampleModal-login\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Hi, Welcome back!</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <form action=\"#\" class=\"login-form\">
                    <input type=\"text\" placeholder=\"Username of Email Address\" required>
                    <input type=\"password\" placeholder=\"Password\" required>
                    <div class=\"d-flex mb--20 align-items-center\">
                        <input type=\"checkbox\" id=\"examplecheck-modal\">
                        <label for=\"examplecheck-modal\">I agree to the terms of use and privacy policy.</label>
                    </div>
                    <button type=\"submit\" class=\"rts-btn btn-primary\">Sign In</button>

                    <p class=\"dont-acc mt--20\">Dont Have an Account? <a href=\"#\">Sign-up</a> </p>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- header style two -->
<div id=\"side-bar\" class=\"side-bar header-two\">
    <button class=\"close-icon-menu\"><i class=\"far fa-times\"></i></button>
    <!-- inner menu area desktop start -->
    <div class=\"inner-main-wrapper-desk\">
        <div class=\"inner-content\">
            <h4 class=\"title\">We Build Building and Great Constructive Homes.</h4>
            <p class=\"disc\">
                We successfully cope with tasks of varying complexity, provide long-term guarantees and regularly master new technologies.
            </p>
            <div class=\"footer\">
                <h4 class=\"title\">Got a project in mind?</h4>
                <a href=\"#\" class=\"rts-btn btn-primary\">Let's talk</a>
            </div>
        </div>
    </div>
    <!-- mobile menu area start -->
    <div class=\"mobile-menu-main\">
        <nav class=\"nav-main mainmenu-nav mt--30\">
            <ul class=\"mainmenu metismenu\" id=\"mobile-menu-active\">
                <li class=\"has-droupdown\">
                    <a href=\"#\" class=\"main\">Home</a>
                    <ul class=\"submenu mm-collapse\">
                        <li><a class=\"mobile-menu-link\" href=\"#\">Home 01</a></li>
                        <li><a class=\"mobile-menu-link\" href=\"#\">Home 02</a></li>
                        <li><a class=\"mobile-menu-link\" href=\"#\">Home 03</a></li>
                        <li><a class=\"mobile-menu-link\" href=\"#\">home 04</a></li>
                    </ul>
                </li>
                <li class=\"has-droupdown\">
                    <a href=\"#\" class=\"main\">Pages</a>
                    <ul class=\"submenu mm-collapse\">
                        <li><a class=\"mobile-menu-link\" href=\"#\">About Us</a></li>
                        <li><a class=\"mobile-menu-link\" href=\"#\">Team</a></li>
                        <li><a class=\"mobile-menu-link\" href=\"#\">Team Details</a></li>
                        <li><a class=\"mobile-menu-link\" href=\"#\">Event</a></li>
                        <li><a class=\"mobile-menu-link\" href=\"#\">Event Details</a></li>
                        <li><a class=\"mobile-menu-link\" href=\"#\">Program Details</a></li>
                        <li><a class=\"mobile-menu-link\" href=\"#\">Pricing</a></li>
                        <li><a class=\"mobile-menu-link\" href=\"#\">Pricing Two</a></li>
                    </ul>
                </li>
                <li class=\"has-droupdown\">
                    <a href=\"#\" class=\"main\">Class</a>
                    <ul class=\"submenu mm-collapse\">
                        <li><a class=\"mobile-menu-link\" href=\"#\">Courses</a></li>
                        <li><a class=\"mobile-menu-link\" href=\"#\">Course Details</a></li>
                    </ul>
                </li>
                <li class=\"has-droupdown\">
                    <a href=\"#\" class=\"main\">Blog</a>
                    <ul class=\"submenu mm-collapse\">
                        <li><a class=\"mobile-menu-link\" href=\"#\">Blog</a></li>
                        <li><a class=\"mobile-menu-link\" href=\"#\">Blog Grid</a></li>
                        <li><a class=\"mobile-menu-link\" href=\"#\">Blog List</a></li>
                        <li><a class=\"mobile-menu-link\" href=\"#\">Blog Right Sidebar</a></li>
                        <li><a class=\"mobile-menu-link\" href=\"#\">Blog Left Sidebar</a></li>
                        <li><a class=\"mobile-menu-link\" href=\"#\">Blog Details</a></li>
                    </ul>
                </li>
                <li class=\"menu-item\">
                    <a href=\"#\" class=\"main\">Contact</a>
                </li>
            </ul>
        </nav>

        <div class=\"buttons-area\">
            <a href=\"#\" class=\"rts-btn btn-border\">Log In</a>
            <a href=\"#\" class=\"rts-btn btn-primary\">Sign Up</a>
        </div>

        <div class=\"rts-social-style-one pl--20 mt--50\">
            <ul>
                <li>
                    <a href=\"#\">
                        <i class=\"fa-brands fa-facebook-f\"></i>
                    </a>
                </li>
                <li>
                    <a href=\"#\">
                        <i class=\"fa-brands fa-twitter\"></i>
                    </a>
                </li>
                <li>
                    <a href=\"#\">
                        <i class=\"fa-brands fa-youtube\"></i>
                    </a>
                </li>
                <li>
                    <a href=\"#\">
                        <i class=\"fa-brands fa-linkedin-in\"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- mobile menu area end -->
</div>
<!-- header style two End -->

<div id=\"preloader\" class=\"preloader\">
    <div class=\"animation-preloader\">
        <div class=\"txt-loading\">
                <span data-text-preloader=\"S\" class=\"letters-loading first\">
                        N
                    </span>
            <span data-text-preloader=\"T\" class=\"letters-loading first\">
                        O
                    </span>
            <span data-text-preloader=\"U\" class=\"letters-loading first\">
                    V
                    </span>
            <span data-text-preloader=\"D\" class=\"letters-loading first\">
                    A
                    </span>
            <span data-text-preloader=\"Y\" class=\"letters-loading first\">
                        L
                    </span>
            <span data-text-preloader=\"K\" class=\"letters-loading\">
                        E
                    </span>
            <span data-text-preloader=\"I\" class=\"letters-loading\">
                        A
                    </span>
            <span data-text-preloader=\"D\" class=\"letters-loading\">
                    R
                    </span>
            <span data-text-preloader=\"S\" class=\"letters-loading\">
                    N
                    </span>
        </div>
        <p class=\"text-center\">Loading</p>
    </div>
    <div class=\"loader\">
        <div class=\"row\">
            <div class=\"col-3 loader-section section-left\">
                <div class=\"bg\"></div>
            </div>
            <div class=\"col-3 loader-section section-left\">
                <div class=\"bg\"></div>
            </div>
            <div class=\"col-3 loader-section section-right\">
                <div class=\"bg\"></div>
            </div>
            <div class=\"col-3 loader-section section-right\">
                <div class=\"bg\"></div>
            </div>
        </div>
    </div>
</div>

<!-- rts backto top start -->
<div class=\"progress-wrap\">
    <svg class=\"progress-circle svg-content\" width=\"100%\" height=\"100%\" viewBox=\"-1 -1 102 102\">
        <path d=\"M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98\" style=\"transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;\"></path>
    </svg>
</div>
<!-- rts backto top end -->

<!-- offcanvase search -->
<div class=\"search-input-area\">
    <div class=\"container\">
        <div class=\"search-input-inner\">
            <div class=\"input-div\">
                <input class=\"search-input autocomplete\" type=\"text\" placeholder=\"Search by keyword or #\">
                <button><i class=\"far fa-search\"></i></button>
            </div>
        </div>
    </div>
    <div id=\"close\" class=\"search-close-icon\"><i class=\"far fa-times\"></i></div>
</div>
<!-- offcanvase search -->
<div id=\"anywhere-home\" class=\"\">
</div>

<!-- all scripts -->
<!-- jquery min js -->
<script src=\"{{ asset('front/js/vendor/jquery.min.js') }}\"></script>
<!-- jquery ui js -->
<script src=\"{{ asset('front/js/vendor/jquery-ui.js') }}\"></script>
<!-- metismenu js -->
<script src=\"{{ asset('front/js/vendor/metismenu.js') }}\"></script>
<!-- magnific popup js-->
<script src=\"{{ asset('front/js/vendor/magnifying-popup.js') }}\"></script>
<!-- swiper JS 10.2.0 -->
<script src=\"{{ asset('front/js/plugins/swiper.js') }}\"></script>
<!-- counterup js -->
<script src=\"{{ asset('front/js/plugins/counterup.js') }}\"></script>
<!-- waypoint js -->
<script src=\"{{ asset('front/js/vendor/waypoint.js') }}\"></script>
<!-- wow js -->
<script src=\"{{ asset('front/js/vendor/waw.js') }}\"></script>
<!-- isotop mesonary -->
<script src=\"{{ asset('front/js/plugins/isotop.js') }}\"></script>
<!-- jquery imageloaded -->
<script src=\"{{ asset('front/js/plugins/imagesloaded.pkgd.min.js') }}\"></script>

<!-- resize sensor js -->
<script src=\"{{ asset('front/js/plugins/resizer-sensor.js') }}\"></script>
<!-- sticky sidebar -->
<script src=\"{{ asset('front/js/plugins/sticky-sidebar.js') }}\"></script>
<!-- gsap twinmax js -->
<script src=\"{{ asset('front/js/plugins/twinmax.js') }}\"></script>
<!-- chroma js -->
<script src=\"{{ asset('front/js/vendor/chroma.min.js') }}\"></script>
<!-- bootstrap 5.0.2 -->
<script src=\"{{ asset('front/js/plugins/bootstrap.min.js') }}\"></script>
<!-- dymanic Contact Form -->
<script src=\"{{ asset('front/js/plugins/contact.form.js') }}\"></script>
<!-- calender js -->
<script src=\"{{ asset('front/js/plugins/calender.js') }}\"></script>
<!-- main Js -->
<script src=\"{{ asset('front/js/main.js') }}\"></script>


</body>
</html>", "index.html.twig", "C:\\Users\\yassi\\Downloads\\Novalearn-master\\Novalearn-master\\templates\\index.html.twig");
    }
}
