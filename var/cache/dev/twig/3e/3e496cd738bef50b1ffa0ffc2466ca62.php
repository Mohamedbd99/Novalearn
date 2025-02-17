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
class __TwigTemplate_b38d24dd5dca1bb726b146306a08619a extends Template
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
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 7
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/fav.png"), "html", null, true);
        yield "\">
    <!-- fontawesome 6.4.2 -->
    ";
        // line 10
        yield from $this->unwrap()->yieldBlock('css', $context, $blocks);
        // line 25
        yield "</head>

<body>
";
        // line 28
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 1713
        yield "</body>


</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "NovaLearn";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_css(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 11
        yield "    <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/plugins/fontawesome-6.css"), "html", null, true);
        yield "\">
    <!-- swiper Css 10.2.0 -->
    <link rel=\"stylesheet\" href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/plugins/swiper.min.css"), "html", null, true);
        yield "\">
    <!-- magnific popup css -->
    <link rel=\"stylesheet\" href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/vendor/magnific-popup.css"), "html", null, true);
        yield "\">
    <!-- Bootstrap 5.0.2 -->
    <link rel=\"stylesheet\" href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/vendor/bootstrap.min.css"), "html", null, true);
        yield "\">
    <!-- jquery ui css -->
    <link rel=\"stylesheet\" href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/vendor/jquery-ui.css"), "html", null, true);
        yield "\">
    <!-- metismenu scss -->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/vendor/metismenu.css"), "html", null, true);
        yield "\">
    <!-- custom style css -->
    <link rel=\"stylesheet\" href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        yield "\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 28
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 29
        yield "
       
    <!-- header style one -->
    <header class=\"header-one header--sticky\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"header-one-wrapper\">
                        <div class=\"left-side-header\">
                            <a href=\"#\" class=\"logo-area\">
                                <img src=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo/logo-1.png"), "html", null, true);
        yield "\" alt=\"logo\" width=\"280\" height=\"auto\">

                            </a>
                        </div>

                        <div class=\"main-nav-one\">
                            <nav>
                               <ul>
                                   <li>
                                     <a class=\"nav-link\" href=\"#\">Home</a>
                                    </li>

                                    <li class=\"has-dropdown\">
                                        <a class=\"nav-link\" href=\"#\">Pages</a>
                                        <ul class=\"submenu\">
                                            <li><a href=\"about.html\">About Us</a></li>
                                            <li><a href=\"team.html\">Team</a></li>
                                            <li><a href=\"team-details.html\">Team Details</a></li>         
                                            <li><a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_index");
        yield "\">Event</a></li>
                                            <li><a href=\"event-details.html\">Event Details</a></li>
                                            <li><a href=\"program-details.html\">Program Details</a></li>
                                            <li><a href=\"pricing.html\">Pricing</a></li>
                                            <li><a href=\"pricing-two.html\">Pricing Two</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"has-dropdown\">
                                        <a class=\"nav-link\" href=\"#\">Classes</a>
                                        <ul class=\"submenu\">
                                            <li><a href=\"course.html\">Courses</a></li>
                                            <li><a href=\"course-details.html\">Course Details</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"has-dropdown\">
                                        <a class=\"nav-link\" href=\"#\">Blog</a>
                                        <ul class=\"submenu\">
                                            <li><a href=\"blog.html\">Blog</a></li>
                                            <li><a href=\"blog-grid.html\">Blog Grid</a></li>
                                            <li><a href=\"blog-list.html\">Blog List</a></li>
                                            <li><a href=\"blog-right-sidebar.html\">Blog Right Sidebar</a></li>
                                            <li><a href=\"blog-left-sidebar.html\">Blog Left Sidebar</a></li>
                                            <li><a href=\"blog-details.html\">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class=\"nav-link\" href=\"contact.html\">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                        <div class=\"header-right-area-one\">
                            <div class=\"buttons-area\">
                                <a href=\"contact.html\" class=\"rts-btn btn-primary border-radius\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal-login\" >Sign In</a>
                             </div>
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
    <!-- header style end -->

    <!-- banner area start -->
    <section class=\"banner-area-one rts-shape-move\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 order-xl-1 order-lg-1 order-sm-2 order-2\">
                    <div class=\"banner-content-one\">
                        <div class=\"inner\">
                       <h1 class=\"title-banner\" style=\"text-align: center;\">
   Découvrez la magie de l'apprentissage à <span style=\"color: #FFC107;\">Novalearn</span>
    <img src=\"";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/title-shape-1.svg"), "html", null, true);
        yield "\" alt=\"banner\" style=\"vertical-align: middle; margin-left: 10px;\">
</h1>


                            <p class=\"disc\">Bienvenue sur NovaLearn, un espace où chaque jour est une occasion d’apprendre et de grandir.
                            Notre communauté dynamique œuvre pour favoriser l'apprentissage</p>


                            <div class=\"banner-btn\">
                                <a href=\"about.html\" class=\"rts-btn btn-primary border-radius\">Explorer maintenant</a>
                                <div class=\"video-btn-area\">
                                    <div class=\"vedio-icone\">
                                        <a class=\"video-play-button play-video popup-video\" href=\"https://www.youtube.com/watch?v=ezbJwaLmOeM\">
                                            <span class=\"icon\"><img src=\"";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/play.svg"), "html", null, true);
        yield "\" alt=\"\"></span>
                                        </a>
                                        <div class=\"video-overlay\">
                                            <a class=\"video-overlay-close\"></a>
                                        </div>
                                    </div>
                                    <p class=\"intro\">Regarder la vidéo</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               <div class=\"col-lg-6 order-change order-lg-2 order-sm-1 order-1\">
    <div class=\"banner-right-img\" style=\"transform: translateY(-80px);\">
        <img src=\"";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/01.png"), "html", null, true);
        yield "\" width= 900\" alt=\"banner\">
    </div>
</div>

            </div>
        </div>
        <img class=\"banner-bg-shape-2\" src=\"";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-bg-1.png"), "html", null, true);
        yield "\" alt=\"\">
        <div class=\"shape-image\">
            <div class=\"shape one\" data-speed=\"0.04\" data-revert=\"true\"><img src=\"";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/shape/01.svg"), "html", null, true);
        yield "\" alt=\"shape_image\"></div>
            <div class=\"shape two\" data-speed=\"0.04\"><img src=\"";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/shape/02.svg"), "html", null, true);
        yield "\" alt=\"shape_image\"></div>
            <div class=\"shape three\" data-speed=\"0.04\" data-revert=\"true\"><img src=\"";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/shape/03.svg"), "html", null, true);
        yield "\" alt=\"shape_image\"></div>
            <div class=\"shape four\" data-speed=\"0.04\" data-revert=\"true\"><img src=\"";
        // line 156
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/shape/04.svg"), "html", null, true);
        yield "\" alt=\"shape_image\"></div>
            <div class=\"shape five\" data-speed=\"0.04\"><img src=\"";
        // line 157
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/shape/05.svg"), "html", null, true);
        yield "\" alt=\"shape_image\"></div>
            <div class=\"shape six\" data-speed=\"0.04\"><img src=\"";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/shape/06.svg"), "html", null, true);
        yield "\" alt=\"shape_image\"></div>
            <div class=\"shape seven\" data-speed=\"0.04\" data-revert=\"true\"><img src=\"";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/shape/07.svg"), "html", null, true);
        yield "\" alt=\"shape_image\"></div>
        </div>
        <div class=\"banner-bg-grid-shape\">
        </div>
    </section>
    <!-- banner area end -->

    <!-- about area start -->
    <section class=\"rts-about-area rts-shape-move rts-section-gap\">
        <div class=\"container\">
            <div class=\"section-inner\">
                <div class=\"row align-items-center\">
                    <div class=\"col-lg-6\">
                        <div class=\"about-image\">
                            <img src=\"";
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/about/about-01.png"), "html", null, true);
        yield "\" width=\"620\" alt=\"\">
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"about-content\">
                            <div class=\"section-title-area\">
                                <p class=\"pre-title\"><img src=\"";
        // line 179
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/title-img.svg"), "html", null, true);
        yield "\" alt=\"\">About Us</p>
                                <h2 class=\"section-title\">Découvrez notre mission pour <br> Novalearn</h2>
                                <p class=\"desc\">Bienvenue sur Novalearn, où l'éducation rencontre l'inspiration et où chaque parcours d'enfant est une histoire de croissance et de découverte.</p>
                            </div>
                            <ul class=\"about-wrapper\">
                                <li class=\"wrapper-list\">
                                    <div class=\"list-inner\">
                                        <div class=\"icon\"><img src=\"";
        // line 186
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/01.svg"), "html", null, true);
        yield "\" alt=\"\"></div>
                                        <div class=\"content\">
                                            <h4 class=\"title\">Notre Mission</h4>
                                            <p class=\"desc\">At novalearn our mission is to cultivate <br>
                                                an environment where curiosity is sparked.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"wrapper-list\">
                                    <div class=\"list-inner\">
                                        <div class=\"icon\"><img src=\"";
        // line 196
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/02.svg"), "html", null, true);
        yield "\" alt=\"\"></div>
                                        <div class=\"content\">
                                            <h4 class=\"title\">Our Commitment</h4>
                                            <p class=\"desc\">As we embark on the journey of education <br>
                                                together, we remain committed to providing.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class=\"about-btn-area\">
                                <a href=\"about.html\" class=\"rts-btn btn-primary border-radius\">About More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"shape-image\">
            <div class=\"shape one\" data-speed=\"0.04\" data-revert=\"true\"><img src=\"";
        // line 214
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/shape/08.svg"), "html", null, true);
        yield "\" alt=\"shape_image\"></div>
            <div class=\"shape two\" data-speed=\"0.04\" data-revert=\"true\"><img src=\"";
        // line 215
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/shape/09.svg"), "html", null, true);
        yield "\" alt=\"shape_image\"></div>
            <div class=\"shape three\" data-speed=\"0.04\"><img src=\"";
        // line 216
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/shape/10.svg"), "html", null, true);
        yield "\" alt=\"shape_image\"></div>
        </div>
    </section>
    <!-- about area end -->

    <!-- class area start -->
    <section class=\"rts-class-area\">
        <div class=\"container\">
            <div class=\"section-title-area text-center\">
                <p class=\"pre-title justify-content-center\"><img src=\"";
        // line 225
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/title-img.svg"), "html", null, true);
        yield "\" alt=\"\">Classes</p>
                <h2 class=\"section-title\">Find Classes For Every Age</h2>
                <p class=\"desc\">Marked by significant growth and exploration as <br> toddlers transition from infancy</p>
            </div>
            <div class=\"section-inner\">
                <div class=\"row g-5\">
                    <div class=\"col-lg-3 col-md-6 col-sm-6\">
                        <div class=\"class-wrapper\">
                            <div class=\"wrapper-inner\">
                                <div class=\"icon\">
                                    <img src=\"";
        // line 235
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/03.svg"), "html", null, true);
        yield "\" alt=\"\">
                                </div>
                                <a href=\"program-details.html\">
                                    <h4 class=\"title\">Toddler</h4>
                                </a>
                                <p class=\"period\">( 1 - 3 years)</p>
                                <p class=\"desc\">A toddler is a child typically between the ages of 1 and 3 years old.</p>
                                <div class=\"shape-icon\"><img src=\"";
        // line 242
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/blink.svg"), "html", null, true);
        yield "\" alt=\"\"></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6 col-sm-6\">
                        <div class=\"class-wrapper two\">
                            <div class=\"wrapper-inner\">
                                <div class=\"icon\">
                                    <img src=\"";
        // line 250
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/04.svg"), "html", null, true);
        yield "\" alt=\"\">
                                </div>
                                <a href=\"program-details.html\">
                                    <h4 class=\"title\">Preschool</h4>
                                </a>
                                <p class=\"period\">( 2 - 3 years)</p>
                                <p class=\"desc\">A toddler is a child typically between the ages of 1 and 3 years old.</p>
                                <div class=\"shape-icon\"><img src=\"";
        // line 257
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/blink.svg"), "html", null, true);
        yield "\" alt=\"\"></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6 col-sm-6\">
                        <div class=\"class-wrapper three\">
                            <div class=\"wrapper-inner\">
                                <div class=\"icon\">
                                    <img src=\"";
        // line 265
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/05.svg"), "html", null, true);
        yield "\" alt=\"\">
                                </div>
                                <a href=\"program-details.html\">
                                    <h4 class=\"title\">Kindergarden</h4>
                                </a>
                                <p class=\"period\">( 3 - 4 years)</p>
                                <p class=\"desc\">A toddler is a child typically between the ages of 1 and 3 years old.</p>
                                <div class=\"shape-icon\"><img src=\"";
        // line 272
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/blink.svg"), "html", null, true);
        yield "\" alt=\"\"></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6 col-sm-6\">
                        <div class=\"class-wrapper four\">
                            <div class=\"wrapper-inner\">
                                <div class=\"icon\">
                                    <img src=\"";
        // line 280
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/06.svg"), "html", null, true);
        yield "\" alt=\"\">
                                </div>
                                <a href=\"program-details.html\">
                                    <h4 class=\"title\">Pre-K Program</h4>
                                </a>
                                <p class=\"period\">( 5 - 6 years)</p>
                                <p class=\"desc\">A toddler is a child typically between the ages of 1 and 3 years old.</p>
                                <div class=\"shape-icon\"><img src=\"";
        // line 287
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/blink.svg"), "html", null, true);
        yield "\" alt=\"\"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- class area end -->

    <!-- course area start -->
    <section class=\"rts-course-area rts-shape-move section-bg\">
        <div class=\"container\">
            <div class=\"section-title-area text-center\">
                <p class=\"pre-title justify-content-center\"><img src=\"";
        // line 301
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/title-img.svg"), "html", null, true);
        yield "\" alt=\"\">Courses</p>
                <h2 class=\"section-title\">Kids Courses at Novalearn</h2>
                <p class=\"desc\">Discover the exciting and enriching courses tailored <br> for young minds at Studykids</p>
            </div>
            <div class=\"slider-inner\">
                <div class=\"swiper mySwiper-category-1 swiper-data\" data-swiper='{
                            \"spaceBetween\":30,
                            \"slidesPerView\":3,
                            \"loop\": true,
                            \"speed\": 1500,
                            \"pagination\":{
                                \"el\": \".swiper-paginations\",
                                \"clickable\": \"true\"
                            },
                            \"autoplay\":{
                                \"delay\":\"4000\"
                            },
                            \"breakpoints\":{
                            \"0\":{
                                \"slidesPerView\":1,
                                \"spaceBetween\":30},
                            \"320\":{
                                \"slidesPerView\":1,
                                \"spaceBetween\":30},
                            \"480\":{
                                \"slidesPerView\":1,
                                \"spaceBetween\":30},
                            \"768\":{
                                \"slidesPerView\":2,
                                \"spaceBetween\":30},
                            \"840\":{
                                \"slidesPerView\":2,
                                \"spaceBetween\":30},
                            \"1140\":{
                                \"slidesPerView\":3,
                                \"spaceBetween\":30}
                            }
                        }'>
                    <div class=\"swiper-wrapper\">
                        <!-- single swiper style -->
                        <div class=\"swiper-slide\">
                            <div class=\"course-wrapper\">
                                <div class=\"wrapper-inner\">
                                    <div class=\"image\">
                                        <img src=\"";
        // line 345
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/course/01.png"), "html", null, true);
        yield "\" alt=\"\">
                                    </div>
                                    <div class=\"content\">
                                        <a href=\"course-details.html\">
                                            <h4 class=\"title\">Early Explorers (Ages 3-5)</h4>
                                        </a>
                                        <p class=\"desc\">An introduction to colors, shapes, and basic artistic expressions.</p>
                                        <ul class=\"feature-wrapper\">
                                            <li class=\"wrapper-list\">ABC Adventure</li>
                                            <li class=\"wrapper-list\">Little Scientists</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single swiper style -->
                        <!-- single swiper style -->
                        <div class=\"swiper-slide\">
                            <div class=\"course-wrapper two\">
                                <div class=\"wrapper-inner\">
                                    <div class=\"image\">
                                        <img src=\"";
        // line 366
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/course/02.png"), "html", null, true);
        yield "\" alt=\"\">
                                    </div>
                                    <div class=\"content\">
                                        <a href=\"course-details.html\">
                                            <h4 class=\"title\">Primary School (Ages 6-11)</h4>
                                        </a>
                                        <p class=\"desc\">An introduction to colors, shapes, and basic artistic expressions.</p>
                                        <ul class=\"feature-wrapper\">
                                            <li class=\"wrapper-list\">Math Mania</li>
                                            <li class=\"wrapper-list\">Science Safari</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single swiper style -->
                        <!-- single swiper style -->
                        <div class=\"swiper-slide\">
                            <div class=\"course-wrapper three\">
                                <div class=\"wrapper-inner\">
                                    <div class=\"image\">
                                        <img src=\"";
        // line 387
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/course/03.png"), "html", null, true);
        yield "\" alt=\"\">
                                    </div>
                                    <div class=\"content\">
                                        <a href=\"course-details.html\">
                                            <h4 class=\"title\">Middle School (Ages 12-14)</h4>
                                        </a>
                                        <p class=\"desc\">An introduction to colors, shapes, and basic artistic expressions.</p>
                                        <ul class=\"feature-wrapper\">
                                            <li class=\"wrapper-list\">Coding</li>
                                            <li class=\"wrapper-list\">Robotics</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single swiper style -->
                        <!-- single swiper style -->

                    </div>
                </div>
                <div class=\"swiper-paginations\"></div>
            </div>
            <img class=\"banner-bg-shape-3\" src=\"";
        // line 409
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-bg-2.png"), "html", null, true);
        yield "\" alt=\"\">
        </div>
        <div class=\"shape-image\">
            <div class=\"shape one\" data-speed=\"0.04\" data-revert=\"true\"><img src=\"";
        // line 412
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/shape/11.svg"), "html", null, true);
        yield "\" alt=\"shape_image\"></div>
            <div class=\"shape two\" data-speed=\"0.04\" data-revert=\"true\"><img src=\"";
        // line 413
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/shape/12.svg"), "html", null, true);
        yield "\" alt=\"shape_image\"></div>
        </div>
    </section>
    <!-- course area end -->

    <!-- category area start -->
    <section class=\"rts-category-area rts-section-gap\">
        <div class=\"container\">
            <div class=\"section-title-area text-center\">
                <p class=\"pre-title justify-content-center\"><img src=\"";
        // line 422
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/title-img.svg"), "html", null, true);
        yield "\" alt=\"\">Category</p>
                <h2 class=\"section-title\">Popular class topics</h2>
                <p class=\"desc\">marked by significant growth and exploration as <br> toddlers transition from infancy</p>
            </div>
            <div class=\"slider-inner\">
                <div class=\"swiper mySwiper-category-1 swiper-data\" data-swiper='{
                        \"spaceBetween\":80,
                        \"slidesPerView\":5,
                        \"loop\": true,
                        \"speed\": 1500,
                        \"navigation\":{
                            \"nextEl\":\".swiper-button-next\",
                            \"prevEl\":\".swiper-button-prev\"
                        },
                        \"pagination\":{
                            \"el\": \".swiper-pagination2\",
                            \"clickable\": \"true\"
                        },
                        \"autoplay\":{
                            \"delay\":\"4000\"
                        },
                        \"breakpoints\":{
                        \"0\":{
                            \"slidesPerView\":1,
                            \"spaceBetween\":30},
                        \"320\":{
                            \"slidesPerView\":1,
                            \"spaceBetween\":80},
                        \"500\":{
                            \"slidesPerView\":2,
                            \"spaceBetween\":80},
                        \"640\":{
                            \"slidesPerView\":2,
                            \"spaceBetween\":80},
                        \"840\":{
                            \"slidesPerView\":3,
                            \"spaceBetween\":80},
                        \"1140\":{
                            \"slidesPerView\":5,
                            \"spaceBetween\":80}
                        }
                    }'>
                    <div class=\"swiper-wrapper\">
                        <!-- single swiper style -->
                        <div class=\"swiper-slide\">
                            <div class=\"category-wrapper\">
                                <div class=\"wrapper-inner\">
                                    <div class=\"icon\">
                                        <a href=\"course.html\">
                                            <img src=\"";
        // line 471
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/07.svg"), "html", null, true);
        yield "\" alt=\"\">
                                        </a>
                                    </div>
                                </div>
                                <div class=\"content\">
                                    <h5 class=\"title\"><a href=\"course.html\">Languages</a></h5>
                                </div>
                            </div>
                        </div>
                        <!-- single swiper style -->
                        <!-- single swiper style -->
                        <div class=\"swiper-slide\">
                            <div class=\"category-wrapper two\">
                                <div class=\"wrapper-inner\">
                                    <div class=\"icon\">
                                        <a href=\"course.html\">
                                            <img src=\"";
        // line 487
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/08.svg"), "html", null, true);
        yield "\" alt=\"\">
                                        </a>
                                    </div>
                                </div>
                                <div class=\"content\">
                                    <h5 class=\"title\"><a href=\"course.html\">Coding</a></h5>
                                </div>
                            </div>
                        </div>
                        <!-- single swiper style -->
                        <!-- single swiper style -->
                        <div class=\"swiper-slide\">
                            <div class=\"category-wrapper three\">
                                <div class=\"wrapper-inner\">
                                    <div class=\"icon\">
                                        <a href=\"course.html\">
                                            <img src=\"";
        // line 503
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/09.svg"), "html", null, true);
        yield "\" alt=\"\">
                                        </a>
                                    </div>
                                </div>
                                <div class=\"content\">
                                    <h5 class=\"title\"><a href=\"course.html\">Math</a></h5>
                                </div>
                            </div>
                        </div>
                        <!-- single swiper style -->
                        <!-- single swiper style -->
                        <div class=\"swiper-slide\">
                            <div class=\"category-wrapper four\">
                                <div class=\"wrapper-inner\">
                                    <div class=\"icon\">
                                        <a href=\"course.html\">
                                            <img src=\"";
        // line 519
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/10.svg"), "html", null, true);
        yield "\" alt=\"\">
                                        </a>
                                    </div>
                                </div>
                                <div class=\"content\">
                                    <h5 class=\"title\"><a href=\"course.html\">Music</a></h5>
                                </div>
                            </div>
                        </div>
                        <!-- single swiper style -->
                        <!-- single swiper style -->
                        <div class=\"swiper-slide\">
                            <div class=\"category-wrapper five\">
                                <div class=\"wrapper-inner\">
                                    <div class=\"icon\">
                                        <a href=\"course.html\">
                                            <img src=\"";
        // line 535
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/11.svg"), "html", null, true);
        yield "\" alt=\"\">
                                        </a>
                                    </div>
                                </div>
                                <div class=\"content\">
                                    <h5 class=\"title\"><a href=\"course.html\">Writing</a></h5>
                                </div>
                            </div>
                        </div>
                        <!-- single swiper style -->
                    </div>
                </div>
                <div class=\"swiper-btn swiper-button-next\">
                    <div class=\"inner\">
                        <svg width=\"11\" height=\"20\" viewBox=\"0 0 11 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path d=\"M1.6918 20C1.80148 20.0006 1.91019 19.9796 2.01173 19.9381C2.11326 19.8967 2.2056 19.8356 2.28347 19.7583L9.0918 12.95C9.47983 12.5629 9.78769 12.1032 9.99774 11.5969C10.2078 11.0907 10.3159 10.5481 10.3159 10C10.3159 9.45194 10.2078 8.90926 9.99774 8.40305C9.78769 7.89685 9.47983 7.43705 9.0918 7.05L2.28347 0.241678C2.20577 0.163979 2.11353 0.102345 2.01201 0.0602948C1.91049 0.0182446 1.80169 -0.00339842 1.6918 -0.00339842C1.58192 -0.00339842 1.47311 0.0182446 1.3716 0.0602948C1.27008 0.102345 1.17784 0.163979 1.10014 0.241678C1.02244 0.319376 0.960803 0.411618 0.918753 0.513136C0.876703 0.614655 0.85506 0.723461 0.85506 0.833344C0.85506 0.943226 0.876703 1.05203 0.918753 1.15355C0.960803 1.25507 1.02244 1.34731 1.10014 1.42501L7.90847 8.23333C8.37664 8.70209 8.6396 9.3375 8.6396 10C8.6396 10.6625 8.37664 11.2979 7.90847 11.7667L1.10014 18.575C1.02203 18.6525 0.960034 18.7446 0.917726 18.8462C0.875419 18.9477 0.853638 19.0566 0.853638 19.1667C0.853638 19.2767 0.875419 19.3856 0.917726 19.4871C0.960034 19.5887 1.02203 19.6809 1.10014 19.7583C1.178 19.8356 1.27035 19.8967 1.37188 19.9381C1.47341 19.9796 1.58213 20.0006 1.6918 20Z\" fill=\"#262626\" />
                        </svg>
                    </div>
                </div>
                <div class=\"swiper-btn swiper-button-prev\">
                    <div class=\"inner\">
                        <svg width=\"11\" height=\"20\" viewBox=\"0 0 11 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path d=\"M9.30869 20C9.19901 20.0006 9.09029 19.9796 8.98876 19.9381C8.88723 19.8966 8.79488 19.8355 8.71702 19.7583L1.90869 12.95C1.52066 12.5629 1.2128 12.1031 1.00275 11.5969C0.792694 11.0907 0.68457 10.548 0.68457 9.99998C0.68457 9.45192 0.792694 8.90924 1.00275 8.40303C1.2128 7.89683 1.52066 7.43703 1.90869 7.04998L8.71702 0.241658C8.79472 0.163959 8.88696 0.102325 8.98848 0.0602752C9.09 0.018225 9.1988 -0.00341797 9.30869 -0.00341797C9.41857 -0.00341797 9.52737 0.018225 9.62889 0.0602752C9.73041 0.102325 9.82265 0.163959 9.90035 0.241658C9.97805 0.319357 10.0397 0.411599 10.0817 0.513117C10.1238 0.614635 10.1454 0.723442 10.1454 0.833324C10.1454 0.943207 10.1238 1.05201 10.0817 1.15353C10.0397 1.25505 9.97805 1.34729 9.90035 1.42499L3.09202 8.23332C2.62385 8.70207 2.36088 9.33748 2.36088 9.99998C2.36088 10.6625 2.62385 11.2979 3.09202 11.7666L9.90035 18.575C9.97846 18.6524 10.0405 18.7446 10.0828 18.8462C10.1251 18.9477 10.1469 19.0566 10.1469 19.1666C10.1469 19.2766 10.1251 19.3856 10.0828 19.4871C10.0405 19.5887 9.97846 19.6808 9.90035 19.7583C9.82248 19.8355 9.73014 19.8966 9.62861 19.9381C9.52708 19.9796 9.41836 20.0006 9.30869 20Z\" fill=\"white\" />
                        </svg>
                    </div>
                </div>
                <div class=\"swiper-pagination2\"></div>
            </div>
        </div>
    </section>
    <!-- category area end -->

    <!-- course area start -->
    <section class=\"rts-course-area style-2\">
        <div class=\"container\">
            <div class=\"section-title-area text-center\">
                <p class=\"pre-title justify-content-center\"><img src=\"";
        // line 571
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/title-img.svg"), "html", null, true);
        yield "\" alt=\"\">Classes</p>
                <h2 class=\"section-title\">Popular Classes</h2>
                <p class=\"desc\">Marked by significant growth and exploration <br> as toddlers transition from infancy</p>
            </div>
            <div class=\"slider-inner\">
                <div class=\"swiper mySwiper-category-1 swiper-data\" data-swiper='{
                            \"spaceBetween\":30,
                            \"slidesPerView\":4,
                            \"loop\": true,
                            \"speed\": 1500,
                            \"navigation\":{
                                \"nextEl\":\".swiper-button-next2\",
                                \"prevEl\":\".swiper-button-prev2\"
                            },
                            \"autoplay\":{
                                \"delay\":\"4500\"
                            },
                            \"breakpoints\":{
                            \"0\":{
                                \"slidesPerView\":1,
                                \"spaceBetween\":30},
                            \"320\":{
                                \"slidesPerView\":1,
                                \"spaceBetween\":30},
                            \"480\":{
                                \"slidesPerView\":1,
                                \"spaceBetween\":30},
                            \"640\":{
                                \"slidesPerView\":2,
                                \"spaceBetween\":30},
                            \"768\":{
                                \"slidesPerView\":2,
                                \"spaceBetween\":30},
                            \"991\":{
                                \"slidesPerView\":3,
                                \"spaceBetween\":30},
                            \"1200\":{
                                \"slidesPerView\":4,
                                \"spaceBetween\":30}
                            }
                        }'>
                    <div class=\"swiper-wrapper\">
                        <!-- single swiper style -->
                        <div class=\"swiper-slide\">
                            <div class=\"course-wrapper-style-2\">
                                <div class=\"wrapper-inner bg-one\">
                                    <div class=\"image\">
                                        <img src=\"";
        // line 618
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/course/04.png"), "html", null, true);
        yield "\" alt=\"\">
                                        <div class=\"wishlist save-icon\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal-login\"><i class=\"fa-regular fa-heart bg-one\"></i></div>
                                    </div>
                                    <div class=\"content\">
                                        <ul class=\"meta-wrapper\">
                                            <li class=\"wrapper-list\">
                                                <div class=\"icon\">
                                                    <img src=\"";
        // line 625
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/12.svg"), "html", null, true);
        yield "\" alt=\"\">
                                                </div>
                                                <p class=\"desc\">Ages 3-8</p>
                                            </li>
                                            <li class=\"wrapper-list\">
                                                <div class=\"icon\">
                                                    <img src=\"";
        // line 631
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/13.svg"), "html", null, true);
        yield "\" alt=\"\">
                                                </div>
                                                <p class=\"desc\">50 Min</p>
                                            </li>
                                        </ul>
                                        <a href=\"course-details.html\">
                                            <h5 class=\"title\">Little Adventurers Travel the World Together! (Ages 7-9)</h5>
                                        </a>
                                        <div class=\"review-area\">
                                            <ul class=\"star-rating-area\">
                                                <li><i class=\"fa-sharp fa-solid fa-star\"></i></li>
                                                <li><i class=\"fa-sharp fa-solid fa-star\"></i></li>
                                                <li><i class=\"fa-sharp fa-solid fa-star\"></i></li>
                                                <li><i class=\"fa-sharp fa-solid fa-star\"></i></li>
                                                <li><i class=\"fa-regular fa-star\"></i></li>
                                            </ul>
                                            <p class=\"desc\">4.5 (124)</p>
                                        </div>
                                        <div class=\"bottom-wrapper\">
                                            <div class=\"author-area\">
                                                <div class=\"autor-image\">
                                                    <img src=\"";
        // line 652
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/course/author-01.jpg"), "html", null, true);
        yield "\" width=\"40\" alt=\"\">
                                                </div>
                                                <p class=\"author-name\">Maria Sofa</p>
                                            </div>
                                            <h5 class=\"price\">\$15.00</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single swiper style -->
                        <!-- single swiper style -->
                        <div class=\"swiper-slide\">
                            <div class=\"course-wrapper-style-2\">
                                <div class=\"wrapper-inner bg-four\">
                                    <div class=\"image\">
                                        <img src=\"";
        // line 668
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/course/05.png"), "html", null, true);
        yield "\" alt=\"\">
                                        <div class=\"wishlist save-icon\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal-login\"><i class=\"fa-regular fa-heart bg-four\"></i></div>
                                    </div>
                                    <div class=\"content\">
                                        <ul class=\"meta-wrapper\">
                                            <li class=\"wrapper-list\">
                                                <div class=\"icon\">
                                                    <img src=\"";
        // line 675
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/12.svg"), "html", null, true);
        yield "\" alt=\"\">
                                                </div>
                                                <p class=\"desc\">Ages 3-8</p>
                                            </li>
                                            <li class=\"wrapper-list\">
                                                <div class=\"icon\">
                                                    <img src=\"";
        // line 681
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/13.svg"), "html", null, true);
        yield "\" alt=\"\">
                                                </div>
                                                <p class=\"desc\">50 Min</p>
                                            </li>
                                        </ul>
                                        <a href=\"course-details.html\">
                                            <h5 class=\"title\">Weekly English Language
                                                Arts Club (Age 9-13)</h5>
                                        </a>
                                        <div class=\"review-area\">
                                            <ul class=\"star-rating-area\">
                                                <li><i class=\"fa-sharp fa-solid fa-star\"></i></li>
                                                <li><i class=\"fa-sharp fa-solid fa-star\"></i></li>
                                                <li><i class=\"fa-sharp fa-solid fa-star\"></i></li>
                                                <li><i class=\"fa-sharp fa-solid fa-star\"></i></li>
                                                <li><i class=\"fa-regular fa-star\"></i></li>
                                            </ul>
                                            <p class=\"desc\">4.5 (90)</p>
                                        </div>
                                        <div class=\"bottom-wrapper\">
                                            <div class=\"author-area\">
                                                <div class=\"autor-image\">
                                                    <img src=\"";
        // line 703
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/course/author-01.jpg"), "html", null, true);
        yield "\" width=\"40\" alt=\"\">
                                                </div>
                                                <p class=\"author-name\">Arya Stark</p>
                                            </div>
                                            <h5 class=\"price\">\$10.00</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single swiper style -->
                        <!-- single swiper style -->
                        <div class=\"swiper-slide\">
                            <div class=\"course-wrapper-style-2\">
                                <div class=\"wrapper-inner bg-two\">
                                    <div class=\"image\">
                                        <img src=\"";
        // line 719
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/course/06.png"), "html", null, true);
        yield "\" alt=\"\">
                                        <div class=\"wishlist save-icon\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal-login\"><i class=\"fa-regular fa-heart bg-two\"></i></div>
                                    </div>
                                    <div class=\"content\">
                                        <ul class=\"meta-wrapper\">
                                            <li class=\"wrapper-list\">
                                                <div class=\"icon\">
                                                    <img src=\"";
        // line 726
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/12.svg"), "html", null, true);
        yield "\" alt=\"\">
                                                </div>
                                                <p class=\"desc\">Ages 3-8</p>
                                            </li>
                                            <li class=\"wrapper-list\">
                                                <div class=\"icon\">
                                                    <img src=\"";
        // line 732
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/13.svg"), "html", null, true);
        yield "\" alt=\"\">
                                                </div>
                                                <p class=\"desc\">50 Min</p>
                                            </li>
                                        </ul>
                                        <a href=\"course-details.html\">
                                            <h5 class=\"title\">Dragon, Monster & Magical
                                                Creature Drawing Club</h5>
                                        </a>
                                        <div class=\"review-area\">
                                            <ul class=\"star-rating-area\">
                                                <li><i class=\"fa-sharp fa-solid fa-star\"></i></li>
                                                <li><i class=\"fa-sharp fa-solid fa-star\"></i></li>
                                                <li><i class=\"fa-sharp fa-solid fa-star\"></i></li>
                                                <li><i class=\"fa-sharp fa-solid fa-star\"></i></li>
                                                <li><i class=\"fa-regular fa-star\"></i></li>
                                            </ul>
                                            <p class=\"desc\">4.5 (88)</p>
                                        </div>
                                        <div class=\"bottom-wrapper\">
                                            <div class=\"author-area\">
                                                <div class=\"autor-image\">
                                                    <img src=\"";
        // line 754
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/course/author-02.jpg"), "html", null, true);
        yield "\" width=\"40\" alt=\"\">
                                                </div>
                                                <p class=\"author-name\">Rosabell</p>
                                            </div>
                                            <h5 class=\"price\">\$16.00</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single swiper style -->
                        <!-- single swiper style -->
                        <div class=\"swiper-slide\">
                            <div class=\"course-wrapper-style-2\">
                                <div class=\"wrapper-inner bg-three\">
                                    <div class=\"image\">
                                        <img src=\"";
        // line 770
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/course/07.png"), "html", null, true);
        yield "\" alt=\"\">
                                        <div class=\"wishlist save-icon\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal-login\"><i class=\"fa-regular fa-heart bg-three\"></i></div>
                                    </div>
                                    <div class=\"content\">
                                        <ul class=\"meta-wrapper\">
                                            <li class=\"wrapper-list\">
                                                <div class=\"icon\">
                                                    <img src=\"";
        // line 777
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/12.svg"), "html", null, true);
        yield "\" alt=\"\">
                                                </div>
                                                <p class=\"desc\">Ages 3-8</p>
                                            </li>
                                            <li class=\"wrapper-list\">
                                                <div class=\"icon\">
                                                    <img src=\"";
        // line 783
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/13.svg"), "html", null, true);
        yield "\" alt=\"\">
                                                </div>
                                                <p class=\"desc\">50 Min</p>
                                            </li>
                                        </ul>
                                        <a href=\"course-details.html\">

                                            <h5 class=\"title\">Bloxburg 1 on 1 Class Learn
                                                to Build or Improve</h5>
                                        </a>
                                        <div class=\"review-area\">
                                            <ul class=\"star-rating-area\">
                                                <li><i class=\"fa-sharp fa-solid fa-star\"></i></li>
                                                <li><i class=\"fa-sharp fa-solid fa-star\"></i></li>
                                                <li><i class=\"fa-sharp fa-solid fa-star\"></i></li>
                                                <li><i class=\"fa-sharp fa-solid fa-star\"></i></li>
                                                <li><i class=\"fa-regular fa-star\"></i></li>
                                            </ul>
                                            <p class=\"desc\">4.5 (44)</p>
                                        </div>
                                        <div class=\"bottom-wrapper\">
                                            <div class=\"author-area\">
                                                <div class=\"autor-image\">
                                                    <img src=\"";
        // line 806
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/course/author-03.jpg"), "html", null, true);
        yield "\" width=\"40\" alt=\"\">
                                                </div>
                                                <p class=\"author-name\">Morgan Jofs</p>
                                            </div>
                                            <h5 class=\"price\">\$35.00</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single swiper style -->

                    </div>
                </div>
                <div class=\"swiper-btn swiper-button-next2\">
                    <div class=\"inner\">
                        <svg width=\"11\" height=\"20\" viewBox=\"0 0 11 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path d=\"M1.6918 20C1.80148 20.0006 1.91019 19.9796 2.01173 19.9381C2.11326 19.8967 2.2056 19.8356 2.28347 19.7583L9.0918 12.95C9.47983 12.5629 9.78769 12.1032 9.99774 11.5969C10.2078 11.0907 10.3159 10.5481 10.3159 10C10.3159 9.45194 10.2078 8.90926 9.99774 8.40305C9.78769 7.89685 9.47983 7.43705 9.0918 7.05L2.28347 0.241678C2.20577 0.163979 2.11353 0.102345 2.01201 0.0602948C1.91049 0.0182446 1.80169 -0.00339842 1.6918 -0.00339842C1.58192 -0.00339842 1.47311 0.0182446 1.3716 0.0602948C1.27008 0.102345 1.17784 0.163979 1.10014 0.241678C1.02244 0.319376 0.960803 0.411618 0.918753 0.513136C0.876703 0.614655 0.85506 0.723461 0.85506 0.833344C0.85506 0.943226 0.876703 1.05203 0.918753 1.15355C0.960803 1.25507 1.02244 1.34731 1.10014 1.42501L7.90847 8.23333C8.37664 8.70209 8.6396 9.3375 8.6396 10C8.6396 10.6625 8.37664 11.2979 7.90847 11.7667L1.10014 18.575C1.02203 18.6525 0.960034 18.7446 0.917726 18.8462C0.875419 18.9477 0.853638 19.0566 0.853638 19.1667C0.853638 19.2767 0.875419 19.3856 0.917726 19.4871C0.960034 19.5887 1.02203 19.6809 1.10014 19.7583C1.178 19.8356 1.27035 19.8967 1.37188 19.9381C1.47341 19.9796 1.58213 20.0006 1.6918 20Z\" fill=\"#262626\" />
                        </svg>
                    </div>
                </div>
                <div class=\"swiper-btn swiper-button-prev2\">
                    <div class=\"inner\">
                        <svg width=\"11\" height=\"20\" viewBox=\"0 0 11 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path d=\"M9.30869 20C9.19901 20.0006 9.09029 19.9796 8.98876 19.9381C8.88723 19.8966 8.79488 19.8355 8.71702 19.7583L1.90869 12.95C1.52066 12.5629 1.2128 12.1031 1.00275 11.5969C0.792694 11.0907 0.68457 10.548 0.68457 9.99998C0.68457 9.45192 0.792694 8.90924 1.00275 8.40303C1.2128 7.89683 1.52066 7.43703 1.90869 7.04998L8.71702 0.241658C8.79472 0.163959 8.88696 0.102325 8.98848 0.0602752C9.09 0.018225 9.1988 -0.00341797 9.30869 -0.00341797C9.41857 -0.00341797 9.52737 0.018225 9.62889 0.0602752C9.73041 0.102325 9.82265 0.163959 9.90035 0.241658C9.97805 0.319357 10.0397 0.411599 10.0817 0.513117C10.1238 0.614635 10.1454 0.723442 10.1454 0.833324C10.1454 0.943207 10.1238 1.05201 10.0817 1.15353C10.0397 1.25505 9.97805 1.34729 9.90035 1.42499L3.09202 8.23332C2.62385 8.70207 2.36088 9.33748 2.36088 9.99998C2.36088 10.6625 2.62385 11.2979 3.09202 11.7666L9.90035 18.575C9.97846 18.6524 10.0405 18.7446 10.0828 18.8462C10.1251 18.9477 10.1469 19.0566 10.1469 19.1666C10.1469 19.2766 10.1251 19.3856 10.0828 19.4871C10.0405 19.5887 9.97846 19.6808 9.90035 19.7583C9.82248 19.8355 9.73014 19.8966 9.62861 19.9381C9.52708 19.9796 9.41836 20.0006 9.30869 20Z\" fill=\"white\" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- course area end -->

    <!-- course area start -->
    <section class=\"rts-team-area section-bg\">
        <div class=\"container\">
            <div class=\"section-title-area text-center\">
                <p class=\"pre-title justify-content-center\"><img src=\"";
        // line 843
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/title-img.svg"), "html", null, true);
        yield "\" alt=\"\">Teacher</p>
                <h2 class=\"section-title\">Our Expert Teacher</h2>
                <p class=\"desc\">we take pride in our team of dedicated and expert <br> teachers who play a pivotal role in shaping.</p>
            </div>
            <div class=\"slider-inner\">
                <div class=\"swiper mySwiper-category-1 swiper-data\" data-swiper='{
                            \"spaceBetween\":30,
                            \"slidesPerView\":3,
                            \"loop\": true,
                            \"speed\": 1500,
                            \"pagination\":{
                                \"el\": \".swiper-pagination3\",
                                \"clickable\": \"true\"
                            },
                            \"autoplay\":{
                                \"delay\":\"4000\"
                            },
                            \"breakpoints\":{
                            \"0\":{
                                \"slidesPerView\":1,
                                \"spaceBetween\":30},
                            \"320\":{
                                \"slidesPerView\":1,
                                \"spaceBetween\":30},
                            \"480\":{
                                \"slidesPerView\":1,
                                \"spaceBetween\":30},
                            \"640\":{
                                \"slidesPerView\":2,
                                \"spaceBetween\":30},
                            \"840\":{
                                \"slidesPerView\":2,
                                \"spaceBetween\":30},
                            \"1140\":{
                                \"slidesPerView\":3,
                                \"spaceBetween\":30}
                            }
                        }'>
                    <div class=\"swiper-wrapper\">
                        <!-- single swiper style -->
                        <div class=\"swiper-slide\">
                            <div class=\"team-wrapper\">
                                <div class=\"wrapper-inner\">
                                    <div class=\"image\">
                                        <img src=\"";
        // line 887
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/instructor/01.png"), "html", null, true);
        yield "\" alt=\"\">
                                        <ul class=\"social-area\">
                                            <li><a href=\"#\"><img src=\"";
        // line 889
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/instructor/social-01.svg"), "html", null, true);
        yield "\" alt=\"\"></a></li>
                                            <li><a href=\"#\"><img src=\"";
        // line 890
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/instructor/social-02.svg"), "html", null, true);
        yield "\" alt=\"\"></a></li>
                                            <li><a href=\"#\"><img src=\"";
        // line 891
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/instructor/social-03.svg"), "html", null, true);
        yield "\" alt=\"\"></a></li>
                                            <li><a href=\"#\"><img src=\"";
        // line 892
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/instructor/social-04.svg"), "html", null, true);
        yield "\" alt=\"\"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"content\">
                                    <h4 class=\"title\"><a href=\"team-details.html\">Eleanor Alice</a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- single swiper style -->
                        <!-- single swiper style -->
                        <div class=\"swiper-slide\">
                            <div class=\"team-wrapper\">
                                <div class=\"wrapper-inner\">
                                    <div class=\"image\">
                                        <img src=\"";
        // line 907
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/instructor/02.png"), "html", null, true);
        yield "\" alt=\"\">
                                        <ul class=\"social-area\">
                                            <li><a href=\"#\"><img src=\"";
        // line 909
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/instructor/social-01.svg"), "html", null, true);
        yield "\" alt=\"\"></a></li>
                                            <li><a href=\"#\"><img src=\"";
        // line 910
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/instructor/social-02.svg"), "html", null, true);
        yield "\" alt=\"\"></a></li>
                                            <li><a href=\"#\"><img src=\"";
        // line 911
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/instructor/social-03.svg"), "html", null, true);
        yield "\" alt=\"\"></a></li>
                                            <li><a href=\"#\"><img src=\"";
        // line 912
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/instructor/social-04.svg"), "html", null, true);
        yield "\" alt=\"\"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"content\">
                                    <h4 class=\"title\"><a href=\"team-details.html\">Isabella Jane</a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- single swiper style -->
                        <!-- single swiper style -->
                        <div class=\"swiper-slide\">
                            <div class=\"team-wrapper\">
                                <div class=\"wrapper-inner\">
                                    <div class=\"image\">
                                        <img src=\"";
        // line 927
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/instructor/03.png"), "html", null, true);
        yield "\" alt=\"\">
                                        <ul class=\"social-area\">
                                            <li><a href=\"#\"><img src=\"";
        // line 929
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/instructor/social-01.svg"), "html", null, true);
        yield "\" alt=\"\"></a></li>
                                            <li><a href=\"#\"><img src=\"";
        // line 930
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/instructor/social-02.svg"), "html", null, true);
        yield "\" alt=\"\"></a></li>
                                            <li><a href=\"#\"><img src=\"";
        // line 931
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/instructor/social-03.svg"), "html", null, true);
        yield "\" alt=\"\"></a></li>
                                            <li><a href=\"#\"><img src=\"";
        // line 932
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/instructor/social-04.svg"), "html", null, true);
        yield "\" alt=\"\"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"content\">
                                    <h4 class=\"title\"><a href=\"team-details.html\">Catherine Avery</a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- single swiper style -->
                    </div>
                </div>
                <div class=\"swiper-pagination3\"></div>
            </div>
            <img class=\"banner-bg-shape-3\" src=\"";
        // line 946
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-bg-2.png"), "html", null, true);
        yield "\" alt=\"\">
        </div>
    </section>
    <!-- course area end -->

    <!-- event area start -->
    <section class=\"rts-event-area rts-section-gapTop\">
        <div class=\"container\">
            <div class=\"section-title-area text-center\">
                <p class=\"pre-title justify-content-center\"><img src=\"";
        // line 955
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/title-img.svg"), "html", null, true);
        yield "\" alt=\"\">Event</p>
                <h2 class=\"section-title\">Upcoming Events</h2>
                <p class=\"desc\">We are thrilled to announce our upcoming event, <br> Explorer's Day a celebration of knowledge</p>
            </div>
            <div class=\"section-inner\">
                <div class=\"row g-5\">
                    <div class=\"col-lg-6\">
                        <div class=\"event-wrapper\">
                            <div class=\"wrapper-inner bg-one\">
                                <div class=\"date\">
                                    <span>29</span>
                                    January
                                    <img src=\"";
        // line 967
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/events/01.png"), "html", null, true);
        yield "\" width=\"132\" alt=\"\" class=\"shape\">
                                </div>
                                <div class=\"content\">
                                    <a href=\"program-details.html\">
                                        <h4 class=\"title\">Annual Cultural Programme</h4>
                                        <ul class=\"meta-wrapper\">
                                            <li><i class=\"fa-regular fa-clock\"></i>9:00 Am - 12:00 Pm</li>
                                            <li><i class=\"fa-light fa-location-dot\"></i>55 Clark St, Brooklyn, NY 11201, USA</li>
                                        </ul>
                                    </a>
                                </div>
                                <div class=\"shape-icon\"><img src=\"";
        // line 978
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/events/event-blink.svg"), "html", null, true);
        yield "\" alt=\"\"></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"event-wrapper two\">
                            <div class=\"wrapper-inner bg-four\">
                                <div class=\"date\">
                                    <span>05</span>
                                    March
                                    <img src=\"";
        // line 988
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/events/01.png"), "html", null, true);
        yield "\" width=\"132\" alt=\"\" class=\"shape\">
                                </div>
                                <div class=\"content\">
                                    <a href=\"program-details.html\">
                                        <h4 class=\"title\">A World of Stories Awaits</h4>
                                    </a>
                                    <ul class=\"meta-wrapper\">
                                        <li><i class=\"fa-regular fa-clock\"></i>9:00 Am - 12:00 Pm</li>
                                        <li><i class=\"fa-light fa-location-dot\"></i>55 Clark St, Brooklyn, NY 11201, USA</li>
                                    </ul>
                                </div>
                                <div class=\"shape-icon\"><img src=\"";
        // line 999
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/events/event-blink.svg"), "html", null, true);
        yield "\" alt=\"\"></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"event-wrapper three\">
                            <div class=\"wrapper-inner bg-two\">
                                <div class=\"date\">
                                    <span>11</span>
                                    March
                                    <img src=\"";
        // line 1009
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/events/01.png"), "html", null, true);
        yield "\" width=\"132\" alt=\"\" class=\"shape\">
                                </div>
                                <div class=\"content\">
                                    <a href=\"program-details.html\">
                                        <h4 class=\"title\">World Drawing Day</h4>
                                    </a>
                                    <ul class=\"meta-wrapper\">
                                        <li><i class=\"fa-regular fa-clock\"></i>9:00 Am - 12:00 Pm</li>
                                        <li><i class=\"fa-light fa-location-dot\"></i>55 Clark St, Brooklyn, NY 11201, USA</li>
                                    </ul>
                                </div>
                                <div class=\"shape-icon\"><img src=\"";
        // line 1020
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/events/event-blink.svg"), "html", null, true);
        yield "\" alt=\"\"></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"event-wrapper four\">
                            <div class=\"wrapper-inner bg-three\">
                                <div class=\"date\">
                                    <span>19</span>
                                    April
                                    <img src=\"";
        // line 1030
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/events/01.png"), "html", null, true);
        yield "\" width=\"132\" alt=\"\" class=\"shape\">
                                </div>
                                <div class=\"content\">
                                    <a href=\"program-details.html\">
                                        <h4 class=\"title\">World Kids Day</h4>
                                    </a>
                                    <ul class=\"meta-wrapper\">
                                        <li><i class=\"fa-regular fa-clock\"></i>9:00 Am - 12:00 Pm</li>
                                        <li><i class=\"fa-light fa-location-dot\"></i>55 Clark St, Brooklyn, NY 11201, USA</li>
                                    </ul>
                                </div>
                                <div class=\"shape-icon\"><img src=\"";
        // line 1041
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/events/event-blink.svg"), "html", null, true);
        yield "\" alt=\"\"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"brand-area\">
                <div class=\"slider-inner\">
                    <div class=\"swiper mySwiper-category-1 swiper-data\" data-swiper='{
                                \"spaceBetween\":30,
                                \"slidesPerView\":3,
                                \"loop\": true,
                                \"speed\": 1500,
                                \"autoplay\":{
                                    \"delay\":\"4000\"
                                },
                                \"breakpoints\":{
                                \"0\":{
                                    \"slidesPerView\":2,
                                    \"spaceBetween\":30},
                                \"320\":{
                                    \"slidesPerView\":2,
                                    \"spaceBetween\":30},
                                \"480\":{
                                    \"slidesPerView\":3,
                                    \"spaceBetween\":30},
                                \"640\":{
                                    \"slidesPerView\":5,
                                    \"spaceBetween\":30},
                                \"840\":{
                                    \"slidesPerView\":7,
                                    \"spaceBetween\":30},
                                \"1140\":{
                                    \"slidesPerView\":7,
                                    \"spaceBetween\":30}
                                }
                            }'>
                        <div class=\"swiper-wrapper\">
                            <!-- single swiper style -->
                            <div class=\"swiper-slide\">
                                <div class=\"image\"><a href=\"#\"><img src=\"";
        // line 1081
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/brand/01.svg"), "html", null, true);
        yield "\" alt=\"\"></a></div>
                            </div>
                            <!-- single swiper style -->
                            <!-- single swiper style -->
                            <div class=\"swiper-slide\">
                                <div class=\"image\"><a href=\"#\"><img src=\"";
        // line 1086
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/brand/02.svg"), "html", null, true);
        yield "\" alt=\"\"></a></div>
                            </div>
                            <!-- single swiper style -->
                            <!-- single swiper style -->
                            <div class=\"swiper-slide\">
                                <div class=\"image\"><a href=\"#\"><img src=\"";
        // line 1091
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/brand/03.svg"), "html", null, true);
        yield "\" alt=\"\"></a></div>
                            </div>
                            <!-- single swiper style -->
                            <!-- single swiper style -->
                            <div class=\"swiper-slide\">
                                <div class=\"image\"><a href=\"#\"><img src=\"";
        // line 1096
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/brand/04.svg"), "html", null, true);
        yield "\" alt=\"\"></a></div>
                            </div>
                            <!-- single swiper style -->
                            <!-- single swiper style -->
                            <div class=\"swiper-slide\">
                                <div class=\"image\"><a href=\"#\"><img src=\"";
        // line 1101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/brand/05.svg"), "html", null, true);
        yield "\" alt=\"\"></a></div>
                            </div>
                            <!-- single swiper style -->
                            <!-- single swiper style -->
                            <div class=\"swiper-slide\">
                                <div class=\"image\"><a href=\"#\"><img src=\"";
        // line 1106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/brand/06.svg"), "html", null, true);
        yield "\" alt=\"\"></a></div>
                            </div>
                            <!-- single swiper style -->
                            <!-- single swiper style -->
                            <div class=\"swiper-slide\">
                                <div class=\"image\"><a href=\"#\"><img src=\"";
        // line 1111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/brand/02.svg"), "html", null, true);
        yield "\" alt=\"\"></a></div>
                            </div>
                            <!-- single swiper style -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- event area end -->

    <!-- testimonials area start -->
    <section class=\"rts-testimonials-area section-bg\">
        <div class=\"container\">
            <div class=\"section-title-area text-center\">
                <p class=\"pre-title justify-content-center\"><img src=\"";
        // line 1126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/title-img.svg"), "html", null, true);
        yield "\" alt=\"\">Testimonials</p>
                <h2 class=\"section-title\">What Parents Say About Us</h2>
                <p class=\"desc\">The success and happiness of our students are at the heart <br> of everything we do. But don't just take our word</p>
            </div>
            <div class=\"slider-inner\">
                <div class=\"swiper mySwiper-category-1 swiper-data\" data-swiper='{
                            \"spaceBetween\":30,
                            \"slidesPerView\":3,
                            \"loop\": true,
                            \"speed\": 1500,
                            \"navigation\":{
                                \"nextEl\":\".swiper-button-next3\",
                                \"prevEl\":\".swiper-button-prev3\"
                            },
                            \"autoplay\":{
                                \"delay\":\"4000\"
                            },
                            \"breakpoints\":{
                            \"0\":{
                                \"slidesPerView\":1,
                                \"spaceBetween\":30},
                            \"320\":{
                                \"slidesPerView\":1,
                                \"spaceBetween\":30},
                            \"480\":{
                                \"slidesPerView\":1,
                                \"spaceBetween\":30},
                            \"640\":{
                                \"slidesPerView\":1,
                                \"spaceBetween\":30},
                            \"840\":{
                                \"slidesPerView\":1,
                                \"spaceBetween\":30},
                            \"1140\":{
                                \"slidesPerView\":1,
                                \"spaceBetween\":30}
                            }
                        }'>
                    <div class=\"swiper-wrapper\">
                        <!-- single swiper style -->
                        <div class=\"swiper-slide\">
                            <div class=\"testimonials-wrapper\">
                                <div class=\"wrapper-inner\">
                                    <div class=\"content\">
                                        <h4 class=\"author\">David John</h4>
                                        <p class=\"desig\">Artist and Instructor</p>
                                        <p class=\"desc\">I would highly recommend Michael Richard to anyone interested the subject matter. It has provided me with invaluable knowledge & a newfound passion topic.</p>
                                        <ul class=\"star-rating-area\">
                                            <li><a href=\"#\"><i class=\"fa-sharp fa-solid fa-star\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fa-sharp fa-solid fa-star\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fa-sharp fa-solid fa-star\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fa-sharp fa-solid fa-star\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fa-light fa-star\"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class=\"testimonials-shape-image\">
                                        <div class=\"shape one\"><img src=\"";
        // line 1182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/shape/13.svg"), "html", null, true);
        yield "\" alt=\"shape_image\"></div>
                                        <div class=\"shape two\"><img src=\"";
        // line 1183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/shape/14.svg"), "html", null, true);
        yield "\" alt=\"shape_image\"></div>
                                        <div class=\"shape three\"><img src=\"";
        // line 1184
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/shape/15.svg"), "html", null, true);
        yield "\" alt=\"shape_image\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single swiper style -->
                    </div>
                </div>
                <div class=\"swiper-btn swiper-button-next3\">
                    <div class=\"inner\">
                        <svg width=\"11\" height=\"20\" viewBox=\"0 0 11 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path d=\"M1.6918 20C1.80148 20.0006 1.91019 19.9796 2.01173 19.9381C2.11326 19.8967 2.2056 19.8356 2.28347 19.7583L9.0918 12.95C9.47983 12.5629 9.78769 12.1032 9.99774 11.5969C10.2078 11.0907 10.3159 10.5481 10.3159 10C10.3159 9.45194 10.2078 8.90926 9.99774 8.40305C9.78769 7.89685 9.47983 7.43705 9.0918 7.05L2.28347 0.241678C2.20577 0.163979 2.11353 0.102345 2.01201 0.0602948C1.91049 0.0182446 1.80169 -0.00339842 1.6918 -0.00339842C1.58192 -0.00339842 1.47311 0.0182446 1.3716 0.0602948C1.27008 0.102345 1.17784 0.163979 1.10014 0.241678C1.02244 0.319376 0.960803 0.411618 0.918753 0.513136C0.876703 0.614655 0.85506 0.723461 0.85506 0.833344C0.85506 0.943226 0.876703 1.05203 0.918753 1.15355C0.960803 1.25507 1.02244 1.34731 1.10014 1.42501L7.90847 8.23333C8.37664 8.70209 8.6396 9.3375 8.6396 10C8.6396 10.6625 8.37664 11.2979 7.90847 11.7667L1.10014 18.575C1.02203 18.6525 0.960034 18.7446 0.917726 18.8462C0.875419 18.9477 0.853638 19.0566 0.853638 19.1667C0.853638 19.2767 0.875419 19.3856 0.917726 19.4871C0.960034 19.5887 1.02203 19.6809 1.10014 19.7583C1.178 19.8356 1.27035 19.8967 1.37188 19.9381C1.47341 19.9796 1.58213 20.0006 1.6918 20Z\" fill=\"#262626\" />
                        </svg>
                    </div>
                </div>
                <div class=\"swiper-btn swiper-button-prev3\">
                    <div class=\"inner\">
                        <svg width=\"11\" height=\"20\" viewBox=\"0 0 11 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path d=\"M9.30869 20C9.19901 20.0006 9.09029 19.9796 8.98876 19.9381C8.88723 19.8966 8.79488 19.8355 8.71702 19.7583L1.90869 12.95C1.52066 12.5629 1.2128 12.1031 1.00275 11.5969C0.792694 11.0907 0.68457 10.548 0.68457 9.99998C0.68457 9.45192 0.792694 8.90924 1.00275 8.40303C1.2128 7.89683 1.52066 7.43703 1.90869 7.04998L8.71702 0.241658C8.79472 0.163959 8.88696 0.102325 8.98848 0.0602752C9.09 0.018225 9.1988 -0.00341797 9.30869 -0.00341797C9.41857 -0.00341797 9.52737 0.018225 9.62889 0.0602752C9.73041 0.102325 9.82265 0.163959 9.90035 0.241658C9.97805 0.319357 10.0397 0.411599 10.0817 0.513117C10.1238 0.614635 10.1454 0.723442 10.1454 0.833324C10.1454 0.943207 10.1238 1.05201 10.0817 1.15353C10.0397 1.25505 9.97805 1.34729 9.90035 1.42499L3.09202 8.23332C2.62385 8.70207 2.36088 9.33748 2.36088 9.99998C2.36088 10.6625 2.62385 11.2979 3.09202 11.7666L9.90035 18.575C9.97846 18.6524 10.0405 18.7446 10.0828 18.8462C10.1251 18.9477 10.1469 19.0566 10.1469 19.1666C10.1469 19.2766 10.1251 19.3856 10.0828 19.4871C10.0405 19.5887 9.97846 19.6808 9.90035 19.7583C9.82248 19.8355 9.73014 19.8966 9.62861 19.9381C9.52708 19.9796 9.41836 20.0006 9.30869 20Z\" fill=\"white\" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <img class=\"banner-bg-shape-3\" src=\"";
        // line 1208
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/banner-bg-2.png"), "html", null, true);
        yield "\" alt=\"\">
    </section>
    <!-- testimonials area end -->

    <!-- blog area start -->
    <section class=\"rts-blog-area rts-section-gap\">
        <div class=\"container\">
            <div class=\"section-title-area text-center\">
                <p class=\"pre-title justify-content-center\"><img src=\"";
        // line 1216
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner/title-img.svg"), "html", null, true);
        yield "\" alt=\"\">Blog & News</p>
                <h2 class=\"section-title\">Welcome to Novalearn blog</h2>
                <p class=\"desc\">A quick directory of Novalearn most popular blogs on parenting, <br> homeschooling, curriculum, supplementing your kids</p>
            </div>
            <div class=\"slider-inner\">
                <div class=\"swiper mySwiper-category-1 swiper-data\" data-swiper='{
                            \"spaceBetween\":30,
                            \"slidesPerView\":3,
                            \"loop\": true,
                            \"speed\": 1500,
                            \"pagination\":{
                                \"el\": \".swiper-pagination4\",
                                \"clickable\": \"true\"
                            },
                            \"autoplay\":{
                                \"delay\":\"4500\"
                            },
                            \"breakpoints\":{
                            \"0\":{
                                \"slidesPerView\":1,
                                \"spaceBetween\":30},
                            \"320\":{
                                \"slidesPerView\":1,
                                \"spaceBetween\":30},
                            \"480\":{
                                \"slidesPerView\":1,
                                \"spaceBetween\":30},
                            \"768\":{
                                \"slidesPerView\":2,
                                \"spaceBetween\":30},
                            \"840\":{
                                \"slidesPerView\":2,
                                \"spaceBetween\":30},
                            \"1140\":{
                                \"slidesPerView\":3,
                                \"spaceBetween\":30}
                            }
                        }'>
                    <div class=\"swiper-wrapper\">
                        <!-- single swiper style -->
                        <div class=\"swiper-slide\">
                            <div class=\"blog-wrapper\">
                                <div class=\"wrapper-inner\">
                                    <div class=\"image\">
                                        <img src=\"";
        // line 1260
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/blog/blog-01.png"), "html", null, true);
        yield "\" alt=\"\">
                                    </div>
                                    <div class=\"content\">
                                        <h4 class=\"title\"><a href=\"blog-details.html\">How to spark passion-led,
                                                interest-based creativity.</a></h4>
                                        <ul class=\"meta-wrapper\">
                                            <li class=\"wrapper-list\">
                                                <div class=\"icon\">
                                                    <img src=\"";
        // line 1268
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/14.svg"), "html", null, true);
        yield "\" alt=\"\">
                                                </div>
                                                <p class=\"desc\">28 December </p>
                                            </li>
                                            <li class=\"wrapper-list\">
                                                <div class=\"icon\">
                                                    <img src=\"";
        // line 1274
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/15.svg"), "html", null, true);
        yield "\" alt=\"\">
                                                </div>
                                                <p class=\"desc\">24k View</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single swiper style -->
                        <!-- single swiper style -->
                        <div class=\"swiper-slide\">
                            <div class=\"blog-wrapper two\">
                                <div class=\"wrapper-inner\">
                                    <div class=\"image\">
                                        <img src=\"";
        // line 1289
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/blog/blog-02.png"), "html", null, true);
        yield "\" alt=\"\">
                                    </div>
                                    <div class=\"content\">
                                        <h4 class=\"title\"><a href=\"blog-details.html\">Ways to Create A Montessori
                                                Home Environment</a></h4>
                                        <ul class=\"meta-wrapper\">
                                            <li class=\"wrapper-list\">
                                                <div class=\"icon\">
                                                    <img src=\"";
        // line 1297
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/14.svg"), "html", null, true);
        yield "\" alt=\"\">
                                                </div>
                                                <p class=\"desc\">28 December </p>
                                            </li>
                                            <li class=\"wrapper-list\">
                                                <div class=\"icon\">
                                                    <img src=\"";
        // line 1303
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/15.svg"), "html", null, true);
        yield "\" alt=\"\">
                                                </div>
                                                <p class=\"desc\">24k View</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single swiper style -->
                        <!-- single swiper style -->
                        <div class=\"swiper-slide\">
                            <div class=\"blog-wrapper three\">
                                <div class=\"wrapper-inner\">
                                    <div class=\"image\">
                                        <img src=\"";
        // line 1318
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/blog/blog-03.png"), "html", null, true);
        yield "\" alt=\"\">
                                    </div>
                                    <div class=\"content\">
                                        <h4 class=\"title\"><a href=\"blog-details.html\">Outschool mom helped her
                                                son discover his superpower.</a></h4>
                                        <ul class=\"meta-wrapper\">
                                            <li class=\"wrapper-list\">
                                                <div class=\"icon\">
                                                    <img src=\"";
        // line 1326
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/14.svg"), "html", null, true);
        yield "\" alt=\"\">
                                                </div>
                                                <p class=\"desc\">28 December </p>
                                            </li>
                                            <li class=\"wrapper-list\">
                                                <div class=\"icon\">
                                                    <img src=\"";
        // line 1332
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/15.svg"), "html", null, true);
        yield "\" alt=\"\">
                                                </div>
                                                <p class=\"desc\">24k View</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single swiper style -->
                    </div>
                </div>
                <div class=\"swiper-pagination4\"></div>
            </div>
        </div>
    </section>
    <!-- blog area end -->

    <!-- footer call to action area start -->

    <!-- footer call to action area start -->
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
                            <div class=\"head\">
                                <a href=\"#\">
                                    <img src=\"";
        // line 1372
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo/logo-1.png"), "html", null, true);
        yield "\" alt=\"logo\" loading=\"lazy\">
                                </a>
                            </div>
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
                                    <li><a href=\"about.html\">About Us</a></li>
                                    <li><a href=\"team.html\">Teachers</a></li>
                                    <li><a href=\"team-details.html\">Teachers Info</a></li>
                                    <li><a href=\"zoom-meeting.html\">Event</a></li>
                                    <li><a href=\"pricing.html\">Pricing</a></li>
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
                                    <li><a href=\"course.html\">Courses</a></li>
                                    <li><a href=\"blog.html\">Blog</a></li>
                                    <li><a href=\"program-details.html\">Program</a></li>
                                    <li><a href=\"contact.html\">Contact Us</a></li>
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
                                        <div class=\"image\">
                                            <a href=\"#\">
                                                <img src=\"";
        // line 1428
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/blog/blog-07.jpeg"), "html", null, true);
        yield "\" width=\"80\" alt=\"\">
                                            </a>
                                        </div>
                                        <div class=\"content\">
                                            <p class=\"date\">October 29, 2023</p>
                                            <h6 class=\"post-title\"><a href=\"#\">Avoid These 4 Common When Managing Remote Teams</a></h6>
                                        </div>
                                    </li>
                                    <li class=\"post-area\">
                                        <div class=\"image\">
                                            <a href=\"#\">
                                                <img src=\"";
        // line 1439
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/blog/blog-08.jpeg"), "html", null, true);
        yield "\" width=\"80\" alt=\"\">
                                            </a>
                                        </div>
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
                            <p>Copyright © 2024 All Rights Reserved by Novalearn</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer call to action area end -->
    <!-- footer call to action area end -->

    <!-- Modal -->
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

                        <p class=\"dont-acc mt--20\">Dont Have an Account? <a href=\"";
        // line 1489
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_signup");
        yield "\">Sign-up</a></p> 
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
                    <a href=\"contact.html\" class=\"rts-btn btn-primary\">Let's talk</a>
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
                            <li><a class=\"mobile-menu-link\" href=\"index.html\">Home 01</a></li>
                            <li><a class=\"mobile-menu-link\" href=\"index-two.html\">Home 02</a></li>
                            <li><a class=\"mobile-menu-link\" href=\"index-three.html\">Home 03</a></li>
                            <li><a class=\"mobile-menu-link\" href=\"index-four.html\">home 04</a></li>
                        </ul>
                    </li>
                    <li class=\"has-droupdown\">
                        <a href=\"#\" class=\"main\">Pages</a>
                        <ul class=\"submenu mm-collapse\">
                            <li><a class=\"mobile-menu-link\" href=\"about.html\">About Us</a></li>
                            <li><a class=\"mobile-menu-link\" href=\"team.html\">Team</a></li>
                            <li><a class=\"mobile-menu-link\" href=\"team-details.html\">Team Details</a></li>
                            <li><a class=\"mobile-menu-link\" href=\"event.html\">Event</a></li>
                            <li><a class=\"mobile-menu-link\" href=\"event-details.html\">Event Details</a></li>
                            <li><a class=\"mobile-menu-link\" href=\"program-details.html\">Program Details</a></li>
                            <li><a class=\"mobile-menu-link\" href=\"pricing.html\">Pricing</a></li>
                            <li><a class=\"mobile-menu-link\" href=\"pricing-two.html\">Pricing Two</a></li>
                        </ul>
                    </li>
                    <li class=\"has-droupdown\">
                        <a href=\"#\" class=\"main\">Class</a>
                        <ul class=\"submenu mm-collapse\">
                            <li><a class=\"mobile-menu-link\" href=\"course.html\">Courses</a></li>
                            <li><a class=\"mobile-menu-link\" href=\"course-details.html\">Course Details</a></li>
                        </ul>
                    </li>
                    <li class=\"has-droupdown\">
                        <a href=\"#\" class=\"main\">Blog</a>
                        <ul class=\"submenu mm-collapse\">
                            <li><a class=\"mobile-menu-link\" href=\"blog.html\">Blog</a></li>
                            <li><a class=\"mobile-menu-link\" href=\"blog-grid.html\">Blog Grid</a></li>
                            <li><a class=\"mobile-menu-link\" href=\"blog-list.html\">Blog List</a></li>
                            <li><a class=\"mobile-menu-link\" href=\"blog-right-sidebar.html\">Blog Right Sidebar</a></li>
                            <li><a class=\"mobile-menu-link\" href=\"blog-left-sidebar.html\">Blog Left Sidebar</a></li>
                            <li><a class=\"mobile-menu-link\" href=\"blog-details.html\">Blog Details</a></li>
                        </ul>
                    </li>
                    <li class=\"menu-item\">
                        <a href=\"contact.html\" class=\"main\">Contact</a>
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
                        S
                    </span>
                <span data-text-preloader=\"T\" class=\"letters-loading first\">
                        T
                    </span>
                <span data-text-preloader=\"U\" class=\"letters-loading first\">
                    U
                    </span>
                <span data-text-preloader=\"D\" class=\"letters-loading first\">
                    D
                    </span>
                <span data-text-preloader=\"Y\" class=\"letters-loading first\">
                        Y
                    </span>
                <span data-text-preloader=\"K\" class=\"letters-loading\">
                        K
                    </span>
                <span data-text-preloader=\"I\" class=\"letters-loading\">
                        I
                    </span>
                <span data-text-preloader=\"D\" class=\"letters-loading\">
                    D
                    </span>
                <span data-text-preloader=\"S\" class=\"letters-loading\">
                    S
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
    ";
        // line 1674
        yield from $this->unwrap()->yieldBlock('js', $context, $blocks);
        // line 1711
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1674
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_js(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 1675
        yield "    <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/jquery.min.js"), "html", null, true);
        yield "\"></script>
    <!-- jquery ui js -->
    <script src=\"";
        // line 1677
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/jquery-ui.js"), "html", null, true);
        yield "\"></script>
    <!-- metismenu js -->
    <script src=\"";
        // line 1679
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/metismenu.js"), "html", null, true);
        yield "\"></script>
    <!-- magnific popup js-->
    <script src=\"";
        // line 1681
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/magnifying-popup.js"), "html", null, true);
        yield "\"></script>
    <!-- swiper JS 10.2.0 -->
    <script src=\"";
        // line 1683
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugins/swiper.js"), "html", null, true);
        yield "\"></script>
    <!-- counterup js -->
    <script src=\"";
        // line 1685
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugins/counterup.js"), "html", null, true);
        yield "\"></script>
    <!-- waypoint js -->
    <script src=\"";
        // line 1687
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/waypoint.js"), "html", null, true);
        yield "\"></script>
    <!-- wow js -->
    <script src=\"";
        // line 1689
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/waw.js"), "html", null, true);
        yield "\"></script>
    <!-- isotop mesonary -->
    <script src=\"";
        // line 1691
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugins/isotop.js"), "html", null, true);
        yield "\"></script>
    <!-- jquery imageloaded -->
    <script src=\"";
        // line 1693
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugins/imagesloaded.pkgd.min.js"), "html", null, true);
        yield "\"></script>
    <!-- resize sensor js -->
    <script src=\"";
        // line 1695
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugins/resizer-sensor.js"), "html", null, true);
        yield "\"></script>
    <!-- sticky sidebar -->
    <script src=\"";
        // line 1697
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugins/sticky-sidebar.js"), "html", null, true);
        yield "\"></script>
    <!-- gsap twinmax js -->
    <script src=\"";
        // line 1699
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugins/twinmax.js"), "html", null, true);
        yield "\"></script>
    <!-- chroma js -->
    <script src=\"";
        // line 1701
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/chroma.min.js"), "html", null, true);
        yield "\"></script>
    <!-- bootstrap 5.0.2 -->
    <script src=\"";
        // line 1703
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugins/bootstrap.min.js"), "html", null, true);
        yield "\"></script>
    <!-- dymanic Contact Form -->
    <script src=\"";
        // line 1705
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugins/contact.form.js"), "html", null, true);
        yield "\"></script>
    <!-- calender js -->
    <script src=\"";
        // line 1707
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugins/calender.js"), "html", null, true);
        yield "\"></script>
    <!-- main Js -->
    <script src=\"";
        // line 1709
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        yield "\"></script>
";
        
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
        return array (  2251 => 1709,  2246 => 1707,  2241 => 1705,  2236 => 1703,  2231 => 1701,  2226 => 1699,  2221 => 1697,  2216 => 1695,  2211 => 1693,  2206 => 1691,  2201 => 1689,  2196 => 1687,  2191 => 1685,  2186 => 1683,  2181 => 1681,  2176 => 1679,  2171 => 1677,  2165 => 1675,  2155 => 1674,  2146 => 1711,  2144 => 1674,  1956 => 1489,  1903 => 1439,  1889 => 1428,  1830 => 1372,  1787 => 1332,  1778 => 1326,  1767 => 1318,  1749 => 1303,  1740 => 1297,  1729 => 1289,  1711 => 1274,  1702 => 1268,  1691 => 1260,  1644 => 1216,  1633 => 1208,  1606 => 1184,  1602 => 1183,  1598 => 1182,  1539 => 1126,  1521 => 1111,  1513 => 1106,  1505 => 1101,  1497 => 1096,  1489 => 1091,  1481 => 1086,  1473 => 1081,  1430 => 1041,  1416 => 1030,  1403 => 1020,  1389 => 1009,  1376 => 999,  1362 => 988,  1349 => 978,  1335 => 967,  1320 => 955,  1308 => 946,  1291 => 932,  1287 => 931,  1283 => 930,  1279 => 929,  1274 => 927,  1256 => 912,  1252 => 911,  1248 => 910,  1244 => 909,  1239 => 907,  1221 => 892,  1217 => 891,  1213 => 890,  1209 => 889,  1204 => 887,  1157 => 843,  1117 => 806,  1091 => 783,  1082 => 777,  1072 => 770,  1053 => 754,  1028 => 732,  1019 => 726,  1009 => 719,  990 => 703,  965 => 681,  956 => 675,  946 => 668,  927 => 652,  903 => 631,  894 => 625,  884 => 618,  834 => 571,  795 => 535,  776 => 519,  757 => 503,  738 => 487,  719 => 471,  667 => 422,  655 => 413,  651 => 412,  645 => 409,  620 => 387,  596 => 366,  572 => 345,  525 => 301,  508 => 287,  498 => 280,  487 => 272,  477 => 265,  466 => 257,  456 => 250,  445 => 242,  435 => 235,  422 => 225,  410 => 216,  406 => 215,  402 => 214,  381 => 196,  368 => 186,  358 => 179,  349 => 173,  332 => 159,  328 => 158,  324 => 157,  320 => 156,  316 => 155,  312 => 154,  308 => 153,  303 => 151,  294 => 145,  277 => 131,  261 => 118,  197 => 57,  176 => 39,  164 => 29,  154 => 28,  144 => 23,  139 => 21,  134 => 19,  129 => 17,  124 => 15,  119 => 13,  113 => 11,  103 => 10,  86 => 7,  75 => 1713,  73 => 28,  68 => 25,  66 => 10,  61 => 8,  57 => 7,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %}NovaLearn{% endblock %}</title>
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{ asset('images/fav.png') }}\">
    <!-- fontawesome 6.4.2 -->
    {% block css %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/plugins/fontawesome-6.css') }}\">
    <!-- swiper Css 10.2.0 -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/plugins/swiper.min.css') }}\">
    <!-- magnific popup css -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/vendor/magnific-popup.css') }}\">
    <!-- Bootstrap 5.0.2 -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/vendor/bootstrap.min.css') }}\">
    <!-- jquery ui css -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/vendor/jquery-ui.css') }}\">
    <!-- metismenu scss -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/vendor/metismenu.css') }}\">
    <!-- custom style css -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
    {% endblock %}
</head>

<body>
{% block body %}

       
    <!-- header style one -->
    <header class=\"header-one header--sticky\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"header-one-wrapper\">
                        <div class=\"left-side-header\">
                            <a href=\"#\" class=\"logo-area\">
                                <img src=\"{{ asset('images/logo/logo-1.png') }}\" alt=\"logo\" width=\"280\" height=\"auto\">

                            </a>
                        </div>

                        <div class=\"main-nav-one\">
                            <nav>
                               <ul>
                                   <li>
                                     <a class=\"nav-link\" href=\"#\">Home</a>
                                    </li>

                                    <li class=\"has-dropdown\">
                                        <a class=\"nav-link\" href=\"#\">Pages</a>
                                        <ul class=\"submenu\">
                                            <li><a href=\"about.html\">About Us</a></li>
                                            <li><a href=\"team.html\">Team</a></li>
                                            <li><a href=\"team-details.html\">Team Details</a></li>         
                                            <li><a href=\"{{ path('event_index') }}\">Event</a></li>
                                            <li><a href=\"event-details.html\">Event Details</a></li>
                                            <li><a href=\"program-details.html\">Program Details</a></li>
                                            <li><a href=\"pricing.html\">Pricing</a></li>
                                            <li><a href=\"pricing-two.html\">Pricing Two</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"has-dropdown\">
                                        <a class=\"nav-link\" href=\"#\">Classes</a>
                                        <ul class=\"submenu\">
                                            <li><a href=\"course.html\">Courses</a></li>
                                            <li><a href=\"course-details.html\">Course Details</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"has-dropdown\">
                                        <a class=\"nav-link\" href=\"#\">Blog</a>
                                        <ul class=\"submenu\">
                                            <li><a href=\"blog.html\">Blog</a></li>
                                            <li><a href=\"blog-grid.html\">Blog Grid</a></li>
                                            <li><a href=\"blog-list.html\">Blog List</a></li>
                                            <li><a href=\"blog-right-sidebar.html\">Blog Right Sidebar</a></li>
                                            <li><a href=\"blog-left-sidebar.html\">Blog Left Sidebar</a></li>
                                            <li><a href=\"blog-details.html\">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class=\"nav-link\" href=\"contact.html\">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                        <div class=\"header-right-area-one\">
                            <div class=\"buttons-area\">
                                <a href=\"contact.html\" class=\"rts-btn btn-primary border-radius\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal-login\" >Sign In</a>
                             </div>
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
    <!-- header style end -->

    <!-- banner area start -->
    <section class=\"banner-area-one rts-shape-move\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 order-xl-1 order-lg-1 order-sm-2 order-2\">
                    <div class=\"banner-content-one\">
                        <div class=\"inner\">
                       <h1 class=\"title-banner\" style=\"text-align: center;\">
   Découvrez la magie de l'apprentissage à <span style=\"color: #FFC107;\">Novalearn</span>
    <img src=\"{{ asset('images/banner/title-shape-1.svg') }}\" alt=\"banner\" style=\"vertical-align: middle; margin-left: 10px;\">
</h1>


                            <p class=\"disc\">Bienvenue sur NovaLearn, un espace où chaque jour est une occasion d’apprendre et de grandir.
                            Notre communauté dynamique œuvre pour favoriser l'apprentissage</p>


                            <div class=\"banner-btn\">
                                <a href=\"about.html\" class=\"rts-btn btn-primary border-radius\">Explorer maintenant</a>
                                <div class=\"video-btn-area\">
                                    <div class=\"vedio-icone\">
                                        <a class=\"video-play-button play-video popup-video\" href=\"https://www.youtube.com/watch?v=ezbJwaLmOeM\">
                                            <span class=\"icon\"><img src=\"{{ asset('images/banner/play.svg') }}\" alt=\"\"></span>
                                        </a>
                                        <div class=\"video-overlay\">
                                            <a class=\"video-overlay-close\"></a>
                                        </div>
                                    </div>
                                    <p class=\"intro\">Regarder la vidéo</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               <div class=\"col-lg-6 order-change order-lg-2 order-sm-1 order-1\">
    <div class=\"banner-right-img\" style=\"transform: translateY(-80px);\">
        <img src=\"{{ asset('images/banner/01.png') }}\" width= 900\" alt=\"banner\">
    </div>
</div>

            </div>
        </div>
        <img class=\"banner-bg-shape-2\" src=\"{{ asset('images/banner/banner-bg-1.png') }}\" alt=\"\">
        <div class=\"shape-image\">
            <div class=\"shape one\" data-speed=\"0.04\" data-revert=\"true\"><img src=\"{{ asset('images/banner/shape/01.svg') }}\" alt=\"shape_image\"></div>
            <div class=\"shape two\" data-speed=\"0.04\"><img src=\"{{ asset('images/banner/shape/02.svg') }}\" alt=\"shape_image\"></div>
            <div class=\"shape three\" data-speed=\"0.04\" data-revert=\"true\"><img src=\"{{ asset('images/banner/shape/03.svg') }}\" alt=\"shape_image\"></div>
            <div class=\"shape four\" data-speed=\"0.04\" data-revert=\"true\"><img src=\"{{ asset('images/banner/shape/04.svg') }}\" alt=\"shape_image\"></div>
            <div class=\"shape five\" data-speed=\"0.04\"><img src=\"{{ asset('images/banner/shape/05.svg') }}\" alt=\"shape_image\"></div>
            <div class=\"shape six\" data-speed=\"0.04\"><img src=\"{{ asset('images/banner/shape/06.svg') }}\" alt=\"shape_image\"></div>
            <div class=\"shape seven\" data-speed=\"0.04\" data-revert=\"true\"><img src=\"{{ asset('images/banner/shape/07.svg') }}\" alt=\"shape_image\"></div>
        </div>
        <div class=\"banner-bg-grid-shape\">
        </div>
    </section>
    <!-- banner area end -->

    <!-- about area start -->
    <section class=\"rts-about-area rts-shape-move rts-section-gap\">
        <div class=\"container\">
            <div class=\"section-inner\">
                <div class=\"row align-items-center\">
                    <div class=\"col-lg-6\">
                        <div class=\"about-image\">
                            <img src=\"{{ asset('images/about/about-01.png') }}\" width=\"620\" alt=\"\">
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"about-content\">
                            <div class=\"section-title-area\">
                                <p class=\"pre-title\"><img src=\"{{ asset('images/banner/title-img.svg') }}\" alt=\"\">About Us</p>
                                <h2 class=\"section-title\">Découvrez notre mission pour <br> Novalearn</h2>
                                <p class=\"desc\">Bienvenue sur Novalearn, où l'éducation rencontre l'inspiration et où chaque parcours d'enfant est une histoire de croissance et de découverte.</p>
                            </div>
                            <ul class=\"about-wrapper\">
                                <li class=\"wrapper-list\">
                                    <div class=\"list-inner\">
                                        <div class=\"icon\"><img src=\"{{ asset('images/icon/01.svg') }}\" alt=\"\"></div>
                                        <div class=\"content\">
                                            <h4 class=\"title\">Notre Mission</h4>
                                            <p class=\"desc\">At novalearn our mission is to cultivate <br>
                                                an environment where curiosity is sparked.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"wrapper-list\">
                                    <div class=\"list-inner\">
                                        <div class=\"icon\"><img src=\"{{ asset('images/icon/02.svg') }}\" alt=\"\"></div>
                                        <div class=\"content\">
                                            <h4 class=\"title\">Our Commitment</h4>
                                            <p class=\"desc\">As we embark on the journey of education <br>
                                                together, we remain committed to providing.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class=\"about-btn-area\">
                                <a href=\"about.html\" class=\"rts-btn btn-primary border-radius\">About More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"shape-image\">
            <div class=\"shape one\" data-speed=\"0.04\" data-revert=\"true\"><img src=\"{{ asset('images/banner/shape/08.svg') }}\" alt=\"shape_image\"></div>
            <div class=\"shape two\" data-speed=\"0.04\" data-revert=\"true\"><img src=\"{{ asset('images/banner/shape/09.svg') }}\" alt=\"shape_image\"></div>
            <div class=\"shape three\" data-speed=\"0.04\"><img src=\"{{ asset('images/banner/shape/10.svg') }}\" alt=\"shape_image\"></div>
        </div>
    </section>
    <!-- about area end -->

    <!-- class area start -->
    <section class=\"rts-class-area\">
        <div class=\"container\">
            <div class=\"section-title-area text-center\">
                <p class=\"pre-title justify-content-center\"><img src=\"{{ asset('images/banner/title-img.svg') }}\" alt=\"\">Classes</p>
                <h2 class=\"section-title\">Find Classes For Every Age</h2>
                <p class=\"desc\">Marked by significant growth and exploration as <br> toddlers transition from infancy</p>
            </div>
            <div class=\"section-inner\">
                <div class=\"row g-5\">
                    <div class=\"col-lg-3 col-md-6 col-sm-6\">
                        <div class=\"class-wrapper\">
                            <div class=\"wrapper-inner\">
                                <div class=\"icon\">
                                    <img src=\"{{ asset('images/icon/03.svg') }}\" alt=\"\">
                                </div>
                                <a href=\"program-details.html\">
                                    <h4 class=\"title\">Toddler</h4>
                                </a>
                                <p class=\"period\">( 1 - 3 years)</p>
                                <p class=\"desc\">A toddler is a child typically between the ages of 1 and 3 years old.</p>
                                <div class=\"shape-icon\"><img src=\"{{ asset('images/banner/blink.svg') }}\" alt=\"\"></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6 col-sm-6\">
                        <div class=\"class-wrapper two\">
                            <div class=\"wrapper-inner\">
                                <div class=\"icon\">
                                    <img src=\"{{ asset('images/icon/04.svg') }}\" alt=\"\">
                                </div>
                                <a href=\"program-details.html\">
                                    <h4 class=\"title\">Preschool</h4>
                                </a>
                                <p class=\"period\">( 2 - 3 years)</p>
                                <p class=\"desc\">A toddler is a child typically between the ages of 1 and 3 years old.</p>
                                <div class=\"shape-icon\"><img src=\"{{ asset('images/banner/blink.svg') }}\" alt=\"\"></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6 col-sm-6\">
                        <div class=\"class-wrapper three\">
                            <div class=\"wrapper-inner\">
                                <div class=\"icon\">
                                    <img src=\"{{ asset('images/icon/05.svg') }}\" alt=\"\">
                                </div>
                                <a href=\"program-details.html\">
                                    <h4 class=\"title\">Kindergarden</h4>
                                </a>
                                <p class=\"period\">( 3 - 4 years)</p>
                                <p class=\"desc\">A toddler is a child typically between the ages of 1 and 3 years old.</p>
                                <div class=\"shape-icon\"><img src=\"{{ asset('images/banner/blink.svg') }}\" alt=\"\"></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6 col-sm-6\">
                        <div class=\"class-wrapper four\">
                            <div class=\"wrapper-inner\">
                                <div class=\"icon\">
                                    <img src=\"{{ asset('images/icon/06.svg') }}\" alt=\"\">
                                </div>
                                <a href=\"program-details.html\">
                                    <h4 class=\"title\">Pre-K Program</h4>
                                </a>
                                <p class=\"period\">( 5 - 6 years)</p>
                                <p class=\"desc\">A toddler is a child typically between the ages of 1 and 3 years old.</p>
                                <div class=\"shape-icon\"><img src=\"{{ asset('images/banner/blink.svg') }}\" alt=\"\"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- class area end -->

    <!-- course area start -->
    <section class=\"rts-course-area rts-shape-move section-bg\">
        <div class=\"container\">
            <div class=\"section-title-area text-center\">
                <p class=\"pre-title justify-content-center\"><img src=\"{{ asset('images/banner/title-img.svg') }}\" alt=\"\">Courses</p>
                <h2 class=\"section-title\">Kids Courses at Novalearn</h2>
                <p class=\"desc\">Discover the exciting and enriching courses tailored <br> for young minds at Studykids</p>
            </div>
            <div class=\"slider-inner\">
                <div class=\"swiper mySwiper-category-1 swiper-data\" data-swiper='{
                            \"spaceBetween\":30,
                            \"slidesPerView\":3,
                            \"loop\": true,
                            \"speed\": 1500,
                            \"pagination\":{
                                \"el\": \".swiper-paginations\",
                                \"clickable\": \"true\"
                            },
                            \"autoplay\":{
                                \"delay\":\"4000\"
                            },
                            \"breakpoints\":{
                            \"0\":{
                                \"slidesPerView\":1,
                                \"spaceBetween\":30},
                            \"320\":{
                                \"slidesPerView\":1,
                                \"spaceBetween\":30},
                            \"480\":{
                                \"slidesPerView\":1,
                                \"spaceBetween\":30},
                            \"768\":{
                                \"slidesPerView\":2,
                                \"spaceBetween\":30},
                            \"840\":{
                                \"slidesPerView\":2,
                                \"spaceBetween\":30},
                            \"1140\":{
                                \"slidesPerView\":3,
                                \"spaceBetween\":30}
                            }
                        }'>
                    <div class=\"swiper-wrapper\">
                        <!-- single swiper style -->
                        <div class=\"swiper-slide\">
                            <div class=\"course-wrapper\">
                                <div class=\"wrapper-inner\">
                                    <div class=\"image\">
                                        <img src=\"{{ asset('images/course/01.png') }}\" alt=\"\">
                                    </div>
                                    <div class=\"content\">
                                        <a href=\"course-details.html\">
                                            <h4 class=\"title\">Early Explorers (Ages 3-5)</h4>
                                        </a>
                                        <p class=\"desc\">An introduction to colors, shapes, and basic artistic expressions.</p>
                                        <ul class=\"feature-wrapper\">
                                            <li class=\"wrapper-list\">ABC Adventure</li>
                                            <li class=\"wrapper-list\">Little Scientists</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single swiper style -->
                        <!-- single swiper style -->
                        <div class=\"swiper-slide\">
                            <div class=\"course-wrapper two\">
                                <div class=\"wrapper-inner\">
                                    <div class=\"image\">
                                        <img src=\"{{ asset('images/course/02.png') }}\" alt=\"\">
                                    </div>
                                    <div class=\"content\">
                                        <a href=\"course-details.html\">
                                            <h4 class=\"title\">Primary School (Ages 6-11)</h4>
                                        </a>
                                        <p class=\"desc\">An introduction to colors, shapes, and basic artistic expressions.</p>
                                        <ul class=\"feature-wrapper\">
                                            <li class=\"wrapper-list\">Math Mania</li>
                                            <li class=\"wrapper-list\">Science Safari</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single swiper style -->
                        <!-- single swiper style -->
                        <div class=\"swiper-slide\">
                            <div class=\"course-wrapper three\">
                                <div class=\"wrapper-inner\">
                                    <div class=\"image\">
                                        <img src=\"{{ asset('images/course/03.png') }}\" alt=\"\">
                                    </div>
                                    <div class=\"content\">
                                        <a href=\"course-details.html\">
                                            <h4 class=\"title\">Middle School (Ages 12-14)</h4>
                                        </a>
                                        <p class=\"desc\">An introduction to colors, shapes, and basic artistic expressions.</p>
                                        <ul class=\"feature-wrapper\">
                                            <li class=\"wrapper-list\">Coding</li>
                                            <li class=\"wrapper-list\">Robotics</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single swiper style -->
                        <!-- single swiper style -->

                    </div>
                </div>
                <div class=\"swiper-paginations\"></div>
            </div>
            <img class=\"banner-bg-shape-3\" src=\"{{ asset('images/banner/banner-bg-2.png') }}\" alt=\"\">
        </div>
        <div class=\"shape-image\">
            <div class=\"shape one\" data-speed=\"0.04\" data-revert=\"true\"><img src=\"{{ asset('images/banner/shape/11.svg') }}\" alt=\"shape_image\"></div>
            <div class=\"shape two\" data-speed=\"0.04\" data-revert=\"true\"><img src=\"{{ asset('images/banner/shape/12.svg') }}\" alt=\"shape_image\"></div>
        </div>
    </section>
    <!-- course area end -->

    <!-- category area start -->
    <section class=\"rts-category-area rts-section-gap\">
        <div class=\"container\">
            <div class=\"section-title-area text-center\">
                <p class=\"pre-title justify-content-center\"><img src=\"{{ asset('images/banner/title-img.svg') }}\" alt=\"\">Category</p>
                <h2 class=\"section-title\">Popular class topics</h2>
                <p class=\"desc\">marked by significant growth and exploration as <br> toddlers transition from infancy</p>
            </div>
            <div class=\"slider-inner\">
                <div class=\"swiper mySwiper-category-1 swiper-data\" data-swiper='{
                        \"spaceBetween\":80,
                        \"slidesPerView\":5,
                        \"loop\": true,
                        \"speed\": 1500,
                        \"navigation\":{
                            \"nextEl\":\".swiper-button-next\",
                            \"prevEl\":\".swiper-button-prev\"
                        },
                        \"pagination\":{
                            \"el\": \".swiper-pagination2\",
                            \"clickable\": \"true\"
                        },
                        \"autoplay\":{
                            \"delay\":\"4000\"
                        },
                        \"breakpoints\":{
                        \"0\":{
                            \"slidesPerView\":1,
                            \"spaceBetween\":30},
                        \"320\":{
                            \"slidesPerView\":1,
                            \"spaceBetween\":80},
                        \"500\":{
                            \"slidesPerView\":2,
                            \"spaceBetween\":80},
                        \"640\":{
                            \"slidesPerView\":2,
                            \"spaceBetween\":80},
                        \"840\":{
                            \"slidesPerView\":3,
                            \"spaceBetween\":80},
                        \"1140\":{
                            \"slidesPerView\":5,
                            \"spaceBetween\":80}
                        }
                    }'>
                    <div class=\"swiper-wrapper\">
                        <!-- single swiper style -->
                        <div class=\"swiper-slide\">
                            <div class=\"category-wrapper\">
                                <div class=\"wrapper-inner\">
                                    <div class=\"icon\">
                                        <a href=\"course.html\">
                                            <img src=\"{{ asset('images/icon/07.svg') }}\" alt=\"\">
                                        </a>
                                    </div>
                                </div>
                                <div class=\"content\">
                                    <h5 class=\"title\"><a href=\"course.html\">Languages</a></h5>
                                </div>
                            </div>
                        </div>
                        <!-- single swiper style -->
                        <!-- single swiper style -->
                        <div class=\"swiper-slide\">
                            <div class=\"category-wrapper two\">
                                <div class=\"wrapper-inner\">
                                    <div class=\"icon\">
                                        <a href=\"course.html\">
                                            <img src=\"{{ asset('images/icon/08.svg') }}\" alt=\"\">
                                        </a>
                                    </div>
                                </div>
                                <div class=\"content\">
                                    <h5 class=\"title\"><a href=\"course.html\">Coding</a></h5>
                                </div>
                            </div>
                        </div>
                        <!-- single swiper style -->
                        <!-- single swiper style -->
                        <div class=\"swiper-slide\">
                            <div class=\"category-wrapper three\">
                                <div class=\"wrapper-inner\">
                                    <div class=\"icon\">
                                        <a href=\"course.html\">
                                            <img src=\"{{ asset('images/icon/09.svg') }}\" alt=\"\">
                                        </a>
                                    </div>
                                </div>
                                <div class=\"content\">
                                    <h5 class=\"title\"><a href=\"course.html\">Math</a></h5>
                                </div>
                            </div>
                        </div>
                        <!-- single swiper style -->
                        <!-- single swiper style -->
                        <div class=\"swiper-slide\">
                            <div class=\"category-wrapper four\">
                                <div class=\"wrapper-inner\">
                                    <div class=\"icon\">
                                        <a href=\"course.html\">
                                            <img src=\"{{ asset('images/icon/10.svg') }}\" alt=\"\">
                                        </a>
                                    </div>
                                </div>
                                <div class=\"content\">
                                    <h5 class=\"title\"><a href=\"course.html\">Music</a></h5>
                                </div>
                            </div>
                        </div>
                        <!-- single swiper style -->
                        <!-- single swiper style -->
                        <div class=\"swiper-slide\">
                            <div class=\"category-wrapper five\">
                                <div class=\"wrapper-inner\">
                                    <div class=\"icon\">
                                        <a href=\"course.html\">
                                            <img src=\"{{ asset('images/icon/11.svg') }}\" alt=\"\">
                                        </a>
                                    </div>
                                </div>
                                <div class=\"content\">
                                    <h5 class=\"title\"><a href=\"course.html\">Writing</a></h5>
                                </div>
                            </div>
                        </div>
                        <!-- single swiper style -->
                    </div>
                </div>
                <div class=\"swiper-btn swiper-button-next\">
                    <div class=\"inner\">
                        <svg width=\"11\" height=\"20\" viewBox=\"0 0 11 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path d=\"M1.6918 20C1.80148 20.0006 1.91019 19.9796 2.01173 19.9381C2.11326 19.8967 2.2056 19.8356 2.28347 19.7583L9.0918 12.95C9.47983 12.5629 9.78769 12.1032 9.99774 11.5969C10.2078 11.0907 10.3159 10.5481 10.3159 10C10.3159 9.45194 10.2078 8.90926 9.99774 8.40305C9.78769 7.89685 9.47983 7.43705 9.0918 7.05L2.28347 0.241678C2.20577 0.163979 2.11353 0.102345 2.01201 0.0602948C1.91049 0.0182446 1.80169 -0.00339842 1.6918 -0.00339842C1.58192 -0.00339842 1.47311 0.0182446 1.3716 0.0602948C1.27008 0.102345 1.17784 0.163979 1.10014 0.241678C1.02244 0.319376 0.960803 0.411618 0.918753 0.513136C0.876703 0.614655 0.85506 0.723461 0.85506 0.833344C0.85506 0.943226 0.876703 1.05203 0.918753 1.15355C0.960803 1.25507 1.02244 1.34731 1.10014 1.42501L7.90847 8.23333C8.37664 8.70209 8.6396 9.3375 8.6396 10C8.6396 10.6625 8.37664 11.2979 7.90847 11.7667L1.10014 18.575C1.02203 18.6525 0.960034 18.7446 0.917726 18.8462C0.875419 18.9477 0.853638 19.0566 0.853638 19.1667C0.853638 19.2767 0.875419 19.3856 0.917726 19.4871C0.960034 19.5887 1.02203 19.6809 1.10014 19.7583C1.178 19.8356 1.27035 19.8967 1.37188 19.9381C1.47341 19.9796 1.58213 20.0006 1.6918 20Z\" fill=\"#262626\" />
                        </svg>
                    </div>
                </div>
                <div class=\"swiper-btn swiper-button-prev\">
                    <div class=\"inner\">
                        <svg width=\"11\" height=\"20\" viewBox=\"0 0 11 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path d=\"M9.30869 20C9.19901 20.0006 9.09029 19.9796 8.98876 19.9381C8.88723 19.8966 8.79488 19.8355 8.71702 19.7583L1.90869 12.95C1.52066 12.5629 1.2128 12.1031 1.00275 11.5969C0.792694 11.0907 0.68457 10.548 0.68457 9.99998C0.68457 9.45192 0.792694 8.90924 1.00275 8.40303C1.2128 7.89683 1.52066 7.43703 1.90869 7.04998L8.71702 0.241658C8.79472 0.163959 8.88696 0.102325 8.98848 0.0602752C9.09 0.018225 9.1988 -0.00341797 9.30869 -0.00341797C9.41857 -0.00341797 9.52737 0.018225 9.62889 0.0602752C9.73041 0.102325 9.82265 0.163959 9.90035 0.241658C9.97805 0.319357 10.0397 0.411599 10.0817 0.513117C10.1238 0.614635 10.1454 0.723442 10.1454 0.833324C10.1454 0.943207 10.1238 1.05201 10.0817 1.15353C10.0397 1.25505 9.97805 1.34729 9.90035 1.42499L3.09202 8.23332C2.62385 8.70207 2.36088 9.33748 2.36088 9.99998C2.36088 10.6625 2.62385 11.2979 3.09202 11.7666L9.90035 18.575C9.97846 18.6524 10.0405 18.7446 10.0828 18.8462C10.1251 18.9477 10.1469 19.0566 10.1469 19.1666C10.1469 19.2766 10.1251 19.3856 10.0828 19.4871C10.0405 19.5887 9.97846 19.6808 9.90035 19.7583C9.82248 19.8355 9.73014 19.8966 9.62861 19.9381C9.52708 19.9796 9.41836 20.0006 9.30869 20Z\" fill=\"white\" />
                        </svg>
                    </div>
                </div>
                <div class=\"swiper-pagination2\"></div>
            </div>
        </div>
    </section>
    <!-- category area end -->

    <!-- course area start -->
    <section class=\"rts-course-area style-2\">
        <div class=\"container\">
            <div class=\"section-title-area text-center\">
                <p class=\"pre-title justify-content-center\"><img src=\"{{ asset('images/banner/title-img.svg') }}\" alt=\"\">Classes</p>
                <h2 class=\"section-title\">Popular Classes</h2>
                <p class=\"desc\">Marked by significant growth and exploration <br> as toddlers transition from infancy</p>
            </div>
            <div class=\"slider-inner\">
                <div class=\"swiper mySwiper-category-1 swiper-data\" data-swiper='{
                            \"spaceBetween\":30,
                            \"slidesPerView\":4,
                            \"loop\": true,
                            \"speed\": 1500,
                            \"navigation\":{
                                \"nextEl\":\".swiper-button-next2\",
                                \"prevEl\":\".swiper-button-prev2\"
                            },
                            \"autoplay\":{
                                \"delay\":\"4500\"
                            },
                            \"breakpoints\":{
                            \"0\":{
                                \"slidesPerView\":1,
                                \"spaceBetween\":30},
                            \"320\":{
                                \"slidesPerView\":1,
                                \"spaceBetween\":30},
                            \"480\":{
                                \"slidesPerView\":1,
                                \"spaceBetween\":30},
                            \"640\":{
                                \"slidesPerView\":2,
                                \"spaceBetween\":30},
                            \"768\":{
                                \"slidesPerView\":2,
                                \"spaceBetween\":30},
                            \"991\":{
                                \"slidesPerView\":3,
                                \"spaceBetween\":30},
                            \"1200\":{
                                \"slidesPerView\":4,
                                \"spaceBetween\":30}
                            }
                        }'>
                    <div class=\"swiper-wrapper\">
                        <!-- single swiper style -->
                        <div class=\"swiper-slide\">
                            <div class=\"course-wrapper-style-2\">
                                <div class=\"wrapper-inner bg-one\">
                                    <div class=\"image\">
                                        <img src=\"{{ asset('images/course/04.png') }}\" alt=\"\">
                                        <div class=\"wishlist save-icon\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal-login\"><i class=\"fa-regular fa-heart bg-one\"></i></div>
                                    </div>
                                    <div class=\"content\">
                                        <ul class=\"meta-wrapper\">
                                            <li class=\"wrapper-list\">
                                                <div class=\"icon\">
                                                    <img src=\"{{ asset('images/icon/12.svg') }}\" alt=\"\">
                                                </div>
                                                <p class=\"desc\">Ages 3-8</p>
                                            </li>
                                            <li class=\"wrapper-list\">
                                                <div class=\"icon\">
                                                    <img src=\"{{ asset('images/icon/13.svg') }}\" alt=\"\">
                                                </div>
                                                <p class=\"desc\">50 Min</p>
                                            </li>
                                        </ul>
                                        <a href=\"course-details.html\">
                                            <h5 class=\"title\">Little Adventurers Travel the World Together! (Ages 7-9)</h5>
                                        </a>
                                        <div class=\"review-area\">
                                            <ul class=\"star-rating-area\">
                                                <li><i class=\"fa-sharp fa-solid fa-star\"></i></li>
                                                <li><i class=\"fa-sharp fa-solid fa-star\"></i></li>
                                                <li><i class=\"fa-sharp fa-solid fa-star\"></i></li>
                                                <li><i class=\"fa-sharp fa-solid fa-star\"></i></li>
                                                <li><i class=\"fa-regular fa-star\"></i></li>
                                            </ul>
                                            <p class=\"desc\">4.5 (124)</p>
                                        </div>
                                        <div class=\"bottom-wrapper\">
                                            <div class=\"author-area\">
                                                <div class=\"autor-image\">
                                                    <img src=\"{{ asset('images/course/author-01.jpg') }}\" width=\"40\" alt=\"\">
                                                </div>
                                                <p class=\"author-name\">Maria Sofa</p>
                                            </div>
                                            <h5 class=\"price\">\$15.00</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single swiper style -->
                        <!-- single swiper style -->
                        <div class=\"swiper-slide\">
                            <div class=\"course-wrapper-style-2\">
                                <div class=\"wrapper-inner bg-four\">
                                    <div class=\"image\">
                                        <img src=\"{{ asset('images/course/05.png') }}\" alt=\"\">
                                        <div class=\"wishlist save-icon\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal-login\"><i class=\"fa-regular fa-heart bg-four\"></i></div>
                                    </div>
                                    <div class=\"content\">
                                        <ul class=\"meta-wrapper\">
                                            <li class=\"wrapper-list\">
                                                <div class=\"icon\">
                                                    <img src=\"{{ asset('images/icon/12.svg') }}\" alt=\"\">
                                                </div>
                                                <p class=\"desc\">Ages 3-8</p>
                                            </li>
                                            <li class=\"wrapper-list\">
                                                <div class=\"icon\">
                                                    <img src=\"{{ asset('images/icon/13.svg') }}\" alt=\"\">
                                                </div>
                                                <p class=\"desc\">50 Min</p>
                                            </li>
                                        </ul>
                                        <a href=\"course-details.html\">
                                            <h5 class=\"title\">Weekly English Language
                                                Arts Club (Age 9-13)</h5>
                                        </a>
                                        <div class=\"review-area\">
                                            <ul class=\"star-rating-area\">
                                                <li><i class=\"fa-sharp fa-solid fa-star\"></i></li>
                                                <li><i class=\"fa-sharp fa-solid fa-star\"></i></li>
                                                <li><i class=\"fa-sharp fa-solid fa-star\"></i></li>
                                                <li><i class=\"fa-sharp fa-solid fa-star\"></i></li>
                                                <li><i class=\"fa-regular fa-star\"></i></li>
                                            </ul>
                                            <p class=\"desc\">4.5 (90)</p>
                                        </div>
                                        <div class=\"bottom-wrapper\">
                                            <div class=\"author-area\">
                                                <div class=\"autor-image\">
                                                    <img src=\"{{ asset('images/course/author-01.jpg') }}\" width=\"40\" alt=\"\">
                                                </div>
                                                <p class=\"author-name\">Arya Stark</p>
                                            </div>
                                            <h5 class=\"price\">\$10.00</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single swiper style -->
                        <!-- single swiper style -->
                        <div class=\"swiper-slide\">
                            <div class=\"course-wrapper-style-2\">
                                <div class=\"wrapper-inner bg-two\">
                                    <div class=\"image\">
                                        <img src=\"{{ asset('images/course/06.png') }}\" alt=\"\">
                                        <div class=\"wishlist save-icon\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal-login\"><i class=\"fa-regular fa-heart bg-two\"></i></div>
                                    </div>
                                    <div class=\"content\">
                                        <ul class=\"meta-wrapper\">
                                            <li class=\"wrapper-list\">
                                                <div class=\"icon\">
                                                    <img src=\"{{ asset('images/icon/12.svg') }}\" alt=\"\">
                                                </div>
                                                <p class=\"desc\">Ages 3-8</p>
                                            </li>
                                            <li class=\"wrapper-list\">
                                                <div class=\"icon\">
                                                    <img src=\"{{ asset('images/icon/13.svg') }}\" alt=\"\">
                                                </div>
                                                <p class=\"desc\">50 Min</p>
                                            </li>
                                        </ul>
                                        <a href=\"course-details.html\">
                                            <h5 class=\"title\">Dragon, Monster & Magical
                                                Creature Drawing Club</h5>
                                        </a>
                                        <div class=\"review-area\">
                                            <ul class=\"star-rating-area\">
                                                <li><i class=\"fa-sharp fa-solid fa-star\"></i></li>
                                                <li><i class=\"fa-sharp fa-solid fa-star\"></i></li>
                                                <li><i class=\"fa-sharp fa-solid fa-star\"></i></li>
                                                <li><i class=\"fa-sharp fa-solid fa-star\"></i></li>
                                                <li><i class=\"fa-regular fa-star\"></i></li>
                                            </ul>
                                            <p class=\"desc\">4.5 (88)</p>
                                        </div>
                                        <div class=\"bottom-wrapper\">
                                            <div class=\"author-area\">
                                                <div class=\"autor-image\">
                                                    <img src=\"{{ asset('images/course/author-02.jpg') }}\" width=\"40\" alt=\"\">
                                                </div>
                                                <p class=\"author-name\">Rosabell</p>
                                            </div>
                                            <h5 class=\"price\">\$16.00</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single swiper style -->
                        <!-- single swiper style -->
                        <div class=\"swiper-slide\">
                            <div class=\"course-wrapper-style-2\">
                                <div class=\"wrapper-inner bg-three\">
                                    <div class=\"image\">
                                        <img src=\"{{ asset('images/course/07.png') }}\" alt=\"\">
                                        <div class=\"wishlist save-icon\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal-login\"><i class=\"fa-regular fa-heart bg-three\"></i></div>
                                    </div>
                                    <div class=\"content\">
                                        <ul class=\"meta-wrapper\">
                                            <li class=\"wrapper-list\">
                                                <div class=\"icon\">
                                                    <img src=\"{{ asset('images/icon/12.svg') }}\" alt=\"\">
                                                </div>
                                                <p class=\"desc\">Ages 3-8</p>
                                            </li>
                                            <li class=\"wrapper-list\">
                                                <div class=\"icon\">
                                                    <img src=\"{{ asset('images/icon/13.svg') }}\" alt=\"\">
                                                </div>
                                                <p class=\"desc\">50 Min</p>
                                            </li>
                                        </ul>
                                        <a href=\"course-details.html\">

                                            <h5 class=\"title\">Bloxburg 1 on 1 Class Learn
                                                to Build or Improve</h5>
                                        </a>
                                        <div class=\"review-area\">
                                            <ul class=\"star-rating-area\">
                                                <li><i class=\"fa-sharp fa-solid fa-star\"></i></li>
                                                <li><i class=\"fa-sharp fa-solid fa-star\"></i></li>
                                                <li><i class=\"fa-sharp fa-solid fa-star\"></i></li>
                                                <li><i class=\"fa-sharp fa-solid fa-star\"></i></li>
                                                <li><i class=\"fa-regular fa-star\"></i></li>
                                            </ul>
                                            <p class=\"desc\">4.5 (44)</p>
                                        </div>
                                        <div class=\"bottom-wrapper\">
                                            <div class=\"author-area\">
                                                <div class=\"autor-image\">
                                                    <img src=\"{{ asset('images/course/author-03.jpg') }}\" width=\"40\" alt=\"\">
                                                </div>
                                                <p class=\"author-name\">Morgan Jofs</p>
                                            </div>
                                            <h5 class=\"price\">\$35.00</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single swiper style -->

                    </div>
                </div>
                <div class=\"swiper-btn swiper-button-next2\">
                    <div class=\"inner\">
                        <svg width=\"11\" height=\"20\" viewBox=\"0 0 11 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path d=\"M1.6918 20C1.80148 20.0006 1.91019 19.9796 2.01173 19.9381C2.11326 19.8967 2.2056 19.8356 2.28347 19.7583L9.0918 12.95C9.47983 12.5629 9.78769 12.1032 9.99774 11.5969C10.2078 11.0907 10.3159 10.5481 10.3159 10C10.3159 9.45194 10.2078 8.90926 9.99774 8.40305C9.78769 7.89685 9.47983 7.43705 9.0918 7.05L2.28347 0.241678C2.20577 0.163979 2.11353 0.102345 2.01201 0.0602948C1.91049 0.0182446 1.80169 -0.00339842 1.6918 -0.00339842C1.58192 -0.00339842 1.47311 0.0182446 1.3716 0.0602948C1.27008 0.102345 1.17784 0.163979 1.10014 0.241678C1.02244 0.319376 0.960803 0.411618 0.918753 0.513136C0.876703 0.614655 0.85506 0.723461 0.85506 0.833344C0.85506 0.943226 0.876703 1.05203 0.918753 1.15355C0.960803 1.25507 1.02244 1.34731 1.10014 1.42501L7.90847 8.23333C8.37664 8.70209 8.6396 9.3375 8.6396 10C8.6396 10.6625 8.37664 11.2979 7.90847 11.7667L1.10014 18.575C1.02203 18.6525 0.960034 18.7446 0.917726 18.8462C0.875419 18.9477 0.853638 19.0566 0.853638 19.1667C0.853638 19.2767 0.875419 19.3856 0.917726 19.4871C0.960034 19.5887 1.02203 19.6809 1.10014 19.7583C1.178 19.8356 1.27035 19.8967 1.37188 19.9381C1.47341 19.9796 1.58213 20.0006 1.6918 20Z\" fill=\"#262626\" />
                        </svg>
                    </div>
                </div>
                <div class=\"swiper-btn swiper-button-prev2\">
                    <div class=\"inner\">
                        <svg width=\"11\" height=\"20\" viewBox=\"0 0 11 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path d=\"M9.30869 20C9.19901 20.0006 9.09029 19.9796 8.98876 19.9381C8.88723 19.8966 8.79488 19.8355 8.71702 19.7583L1.90869 12.95C1.52066 12.5629 1.2128 12.1031 1.00275 11.5969C0.792694 11.0907 0.68457 10.548 0.68457 9.99998C0.68457 9.45192 0.792694 8.90924 1.00275 8.40303C1.2128 7.89683 1.52066 7.43703 1.90869 7.04998L8.71702 0.241658C8.79472 0.163959 8.88696 0.102325 8.98848 0.0602752C9.09 0.018225 9.1988 -0.00341797 9.30869 -0.00341797C9.41857 -0.00341797 9.52737 0.018225 9.62889 0.0602752C9.73041 0.102325 9.82265 0.163959 9.90035 0.241658C9.97805 0.319357 10.0397 0.411599 10.0817 0.513117C10.1238 0.614635 10.1454 0.723442 10.1454 0.833324C10.1454 0.943207 10.1238 1.05201 10.0817 1.15353C10.0397 1.25505 9.97805 1.34729 9.90035 1.42499L3.09202 8.23332C2.62385 8.70207 2.36088 9.33748 2.36088 9.99998C2.36088 10.6625 2.62385 11.2979 3.09202 11.7666L9.90035 18.575C9.97846 18.6524 10.0405 18.7446 10.0828 18.8462C10.1251 18.9477 10.1469 19.0566 10.1469 19.1666C10.1469 19.2766 10.1251 19.3856 10.0828 19.4871C10.0405 19.5887 9.97846 19.6808 9.90035 19.7583C9.82248 19.8355 9.73014 19.8966 9.62861 19.9381C9.52708 19.9796 9.41836 20.0006 9.30869 20Z\" fill=\"white\" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- course area end -->

    <!-- course area start -->
    <section class=\"rts-team-area section-bg\">
        <div class=\"container\">
            <div class=\"section-title-area text-center\">
                <p class=\"pre-title justify-content-center\"><img src=\"{{ asset('images/banner/title-img.svg') }}\" alt=\"\">Teacher</p>
                <h2 class=\"section-title\">Our Expert Teacher</h2>
                <p class=\"desc\">we take pride in our team of dedicated and expert <br> teachers who play a pivotal role in shaping.</p>
            </div>
            <div class=\"slider-inner\">
                <div class=\"swiper mySwiper-category-1 swiper-data\" data-swiper='{
                            \"spaceBetween\":30,
                            \"slidesPerView\":3,
                            \"loop\": true,
                            \"speed\": 1500,
                            \"pagination\":{
                                \"el\": \".swiper-pagination3\",
                                \"clickable\": \"true\"
                            },
                            \"autoplay\":{
                                \"delay\":\"4000\"
                            },
                            \"breakpoints\":{
                            \"0\":{
                                \"slidesPerView\":1,
                                \"spaceBetween\":30},
                            \"320\":{
                                \"slidesPerView\":1,
                                \"spaceBetween\":30},
                            \"480\":{
                                \"slidesPerView\":1,
                                \"spaceBetween\":30},
                            \"640\":{
                                \"slidesPerView\":2,
                                \"spaceBetween\":30},
                            \"840\":{
                                \"slidesPerView\":2,
                                \"spaceBetween\":30},
                            \"1140\":{
                                \"slidesPerView\":3,
                                \"spaceBetween\":30}
                            }
                        }'>
                    <div class=\"swiper-wrapper\">
                        <!-- single swiper style -->
                        <div class=\"swiper-slide\">
                            <div class=\"team-wrapper\">
                                <div class=\"wrapper-inner\">
                                    <div class=\"image\">
                                        <img src=\"{{ asset('images/instructor/01.png') }}\" alt=\"\">
                                        <ul class=\"social-area\">
                                            <li><a href=\"#\"><img src=\"{{ asset('images/instructor/social-01.svg') }}\" alt=\"\"></a></li>
                                            <li><a href=\"#\"><img src=\"{{ asset('images/instructor/social-02.svg') }}\" alt=\"\"></a></li>
                                            <li><a href=\"#\"><img src=\"{{ asset('images/instructor/social-03.svg') }}\" alt=\"\"></a></li>
                                            <li><a href=\"#\"><img src=\"{{ asset('images/instructor/social-04.svg') }}\" alt=\"\"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"content\">
                                    <h4 class=\"title\"><a href=\"team-details.html\">Eleanor Alice</a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- single swiper style -->
                        <!-- single swiper style -->
                        <div class=\"swiper-slide\">
                            <div class=\"team-wrapper\">
                                <div class=\"wrapper-inner\">
                                    <div class=\"image\">
                                        <img src=\"{{ asset('images/instructor/02.png') }}\" alt=\"\">
                                        <ul class=\"social-area\">
                                            <li><a href=\"#\"><img src=\"{{ asset('images/instructor/social-01.svg') }}\" alt=\"\"></a></li>
                                            <li><a href=\"#\"><img src=\"{{ asset('images/instructor/social-02.svg') }}\" alt=\"\"></a></li>
                                            <li><a href=\"#\"><img src=\"{{ asset('images/instructor/social-03.svg') }}\" alt=\"\"></a></li>
                                            <li><a href=\"#\"><img src=\"{{ asset('images/instructor/social-04.svg') }}\" alt=\"\"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"content\">
                                    <h4 class=\"title\"><a href=\"team-details.html\">Isabella Jane</a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- single swiper style -->
                        <!-- single swiper style -->
                        <div class=\"swiper-slide\">
                            <div class=\"team-wrapper\">
                                <div class=\"wrapper-inner\">
                                    <div class=\"image\">
                                        <img src=\"{{ asset('images/instructor/03.png') }}\" alt=\"\">
                                        <ul class=\"social-area\">
                                            <li><a href=\"#\"><img src=\"{{ asset('images/instructor/social-01.svg') }}\" alt=\"\"></a></li>
                                            <li><a href=\"#\"><img src=\"{{ asset('images/instructor/social-02.svg') }}\" alt=\"\"></a></li>
                                            <li><a href=\"#\"><img src=\"{{ asset('images/instructor/social-03.svg') }}\" alt=\"\"></a></li>
                                            <li><a href=\"#\"><img src=\"{{ asset('images/instructor/social-04.svg') }}\" alt=\"\"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"content\">
                                    <h4 class=\"title\"><a href=\"team-details.html\">Catherine Avery</a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- single swiper style -->
                    </div>
                </div>
                <div class=\"swiper-pagination3\"></div>
            </div>
            <img class=\"banner-bg-shape-3\" src=\"{{ asset('images/banner/banner-bg-2.png') }}\" alt=\"\">
        </div>
    </section>
    <!-- course area end -->

    <!-- event area start -->
    <section class=\"rts-event-area rts-section-gapTop\">
        <div class=\"container\">
            <div class=\"section-title-area text-center\">
                <p class=\"pre-title justify-content-center\"><img src=\"{{ asset('images/banner/title-img.svg') }}\" alt=\"\">Event</p>
                <h2 class=\"section-title\">Upcoming Events</h2>
                <p class=\"desc\">We are thrilled to announce our upcoming event, <br> Explorer's Day a celebration of knowledge</p>
            </div>
            <div class=\"section-inner\">
                <div class=\"row g-5\">
                    <div class=\"col-lg-6\">
                        <div class=\"event-wrapper\">
                            <div class=\"wrapper-inner bg-one\">
                                <div class=\"date\">
                                    <span>29</span>
                                    January
                                    <img src=\"{{ asset('images/events/01.png') }}\" width=\"132\" alt=\"\" class=\"shape\">
                                </div>
                                <div class=\"content\">
                                    <a href=\"program-details.html\">
                                        <h4 class=\"title\">Annual Cultural Programme</h4>
                                        <ul class=\"meta-wrapper\">
                                            <li><i class=\"fa-regular fa-clock\"></i>9:00 Am - 12:00 Pm</li>
                                            <li><i class=\"fa-light fa-location-dot\"></i>55 Clark St, Brooklyn, NY 11201, USA</li>
                                        </ul>
                                    </a>
                                </div>
                                <div class=\"shape-icon\"><img src=\"{{ asset('images/events/event-blink.svg') }}\" alt=\"\"></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"event-wrapper two\">
                            <div class=\"wrapper-inner bg-four\">
                                <div class=\"date\">
                                    <span>05</span>
                                    March
                                    <img src=\"{{ asset('images/events/01.png') }}\" width=\"132\" alt=\"\" class=\"shape\">
                                </div>
                                <div class=\"content\">
                                    <a href=\"program-details.html\">
                                        <h4 class=\"title\">A World of Stories Awaits</h4>
                                    </a>
                                    <ul class=\"meta-wrapper\">
                                        <li><i class=\"fa-regular fa-clock\"></i>9:00 Am - 12:00 Pm</li>
                                        <li><i class=\"fa-light fa-location-dot\"></i>55 Clark St, Brooklyn, NY 11201, USA</li>
                                    </ul>
                                </div>
                                <div class=\"shape-icon\"><img src=\"{{ asset('images/events/event-blink.svg') }}\" alt=\"\"></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"event-wrapper three\">
                            <div class=\"wrapper-inner bg-two\">
                                <div class=\"date\">
                                    <span>11</span>
                                    March
                                    <img src=\"{{ asset('images/events/01.png') }}\" width=\"132\" alt=\"\" class=\"shape\">
                                </div>
                                <div class=\"content\">
                                    <a href=\"program-details.html\">
                                        <h4 class=\"title\">World Drawing Day</h4>
                                    </a>
                                    <ul class=\"meta-wrapper\">
                                        <li><i class=\"fa-regular fa-clock\"></i>9:00 Am - 12:00 Pm</li>
                                        <li><i class=\"fa-light fa-location-dot\"></i>55 Clark St, Brooklyn, NY 11201, USA</li>
                                    </ul>
                                </div>
                                <div class=\"shape-icon\"><img src=\"{{ asset('images/events/event-blink.svg') }}\" alt=\"\"></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"event-wrapper four\">
                            <div class=\"wrapper-inner bg-three\">
                                <div class=\"date\">
                                    <span>19</span>
                                    April
                                    <img src=\"{{ asset('images/events/01.png') }}\" width=\"132\" alt=\"\" class=\"shape\">
                                </div>
                                <div class=\"content\">
                                    <a href=\"program-details.html\">
                                        <h4 class=\"title\">World Kids Day</h4>
                                    </a>
                                    <ul class=\"meta-wrapper\">
                                        <li><i class=\"fa-regular fa-clock\"></i>9:00 Am - 12:00 Pm</li>
                                        <li><i class=\"fa-light fa-location-dot\"></i>55 Clark St, Brooklyn, NY 11201, USA</li>
                                    </ul>
                                </div>
                                <div class=\"shape-icon\"><img src=\"{{ asset('images/events/event-blink.svg') }}\" alt=\"\"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"brand-area\">
                <div class=\"slider-inner\">
                    <div class=\"swiper mySwiper-category-1 swiper-data\" data-swiper='{
                                \"spaceBetween\":30,
                                \"slidesPerView\":3,
                                \"loop\": true,
                                \"speed\": 1500,
                                \"autoplay\":{
                                    \"delay\":\"4000\"
                                },
                                \"breakpoints\":{
                                \"0\":{
                                    \"slidesPerView\":2,
                                    \"spaceBetween\":30},
                                \"320\":{
                                    \"slidesPerView\":2,
                                    \"spaceBetween\":30},
                                \"480\":{
                                    \"slidesPerView\":3,
                                    \"spaceBetween\":30},
                                \"640\":{
                                    \"slidesPerView\":5,
                                    \"spaceBetween\":30},
                                \"840\":{
                                    \"slidesPerView\":7,
                                    \"spaceBetween\":30},
                                \"1140\":{
                                    \"slidesPerView\":7,
                                    \"spaceBetween\":30}
                                }
                            }'>
                        <div class=\"swiper-wrapper\">
                            <!-- single swiper style -->
                            <div class=\"swiper-slide\">
                                <div class=\"image\"><a href=\"#\"><img src=\"{{ asset('images/brand/01.svg') }}\" alt=\"\"></a></div>
                            </div>
                            <!-- single swiper style -->
                            <!-- single swiper style -->
                            <div class=\"swiper-slide\">
                                <div class=\"image\"><a href=\"#\"><img src=\"{{ asset('images/brand/02.svg') }}\" alt=\"\"></a></div>
                            </div>
                            <!-- single swiper style -->
                            <!-- single swiper style -->
                            <div class=\"swiper-slide\">
                                <div class=\"image\"><a href=\"#\"><img src=\"{{ asset('images/brand/03.svg') }}\" alt=\"\"></a></div>
                            </div>
                            <!-- single swiper style -->
                            <!-- single swiper style -->
                            <div class=\"swiper-slide\">
                                <div class=\"image\"><a href=\"#\"><img src=\"{{ asset('images/brand/04.svg') }}\" alt=\"\"></a></div>
                            </div>
                            <!-- single swiper style -->
                            <!-- single swiper style -->
                            <div class=\"swiper-slide\">
                                <div class=\"image\"><a href=\"#\"><img src=\"{{ asset('images/brand/05.svg') }}\" alt=\"\"></a></div>
                            </div>
                            <!-- single swiper style -->
                            <!-- single swiper style -->
                            <div class=\"swiper-slide\">
                                <div class=\"image\"><a href=\"#\"><img src=\"{{ asset('images/brand/06.svg') }}\" alt=\"\"></a></div>
                            </div>
                            <!-- single swiper style -->
                            <!-- single swiper style -->
                            <div class=\"swiper-slide\">
                                <div class=\"image\"><a href=\"#\"><img src=\"{{ asset('images/brand/02.svg') }}\" alt=\"\"></a></div>
                            </div>
                            <!-- single swiper style -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- event area end -->

    <!-- testimonials area start -->
    <section class=\"rts-testimonials-area section-bg\">
        <div class=\"container\">
            <div class=\"section-title-area text-center\">
                <p class=\"pre-title justify-content-center\"><img src=\"{{ asset('images/banner/title-img.svg') }}\" alt=\"\">Testimonials</p>
                <h2 class=\"section-title\">What Parents Say About Us</h2>
                <p class=\"desc\">The success and happiness of our students are at the heart <br> of everything we do. But don't just take our word</p>
            </div>
            <div class=\"slider-inner\">
                <div class=\"swiper mySwiper-category-1 swiper-data\" data-swiper='{
                            \"spaceBetween\":30,
                            \"slidesPerView\":3,
                            \"loop\": true,
                            \"speed\": 1500,
                            \"navigation\":{
                                \"nextEl\":\".swiper-button-next3\",
                                \"prevEl\":\".swiper-button-prev3\"
                            },
                            \"autoplay\":{
                                \"delay\":\"4000\"
                            },
                            \"breakpoints\":{
                            \"0\":{
                                \"slidesPerView\":1,
                                \"spaceBetween\":30},
                            \"320\":{
                                \"slidesPerView\":1,
                                \"spaceBetween\":30},
                            \"480\":{
                                \"slidesPerView\":1,
                                \"spaceBetween\":30},
                            \"640\":{
                                \"slidesPerView\":1,
                                \"spaceBetween\":30},
                            \"840\":{
                                \"slidesPerView\":1,
                                \"spaceBetween\":30},
                            \"1140\":{
                                \"slidesPerView\":1,
                                \"spaceBetween\":30}
                            }
                        }'>
                    <div class=\"swiper-wrapper\">
                        <!-- single swiper style -->
                        <div class=\"swiper-slide\">
                            <div class=\"testimonials-wrapper\">
                                <div class=\"wrapper-inner\">
                                    <div class=\"content\">
                                        <h4 class=\"author\">David John</h4>
                                        <p class=\"desig\">Artist and Instructor</p>
                                        <p class=\"desc\">I would highly recommend Michael Richard to anyone interested the subject matter. It has provided me with invaluable knowledge & a newfound passion topic.</p>
                                        <ul class=\"star-rating-area\">
                                            <li><a href=\"#\"><i class=\"fa-sharp fa-solid fa-star\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fa-sharp fa-solid fa-star\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fa-sharp fa-solid fa-star\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fa-sharp fa-solid fa-star\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fa-light fa-star\"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class=\"testimonials-shape-image\">
                                        <div class=\"shape one\"><img src=\"{{ asset('images/banner/shape/13.svg') }}\" alt=\"shape_image\"></div>
                                        <div class=\"shape two\"><img src=\"{{ asset('images/banner/shape/14.svg') }}\" alt=\"shape_image\"></div>
                                        <div class=\"shape three\"><img src=\"{{ asset('images/banner/shape/15.svg') }}\" alt=\"shape_image\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single swiper style -->
                    </div>
                </div>
                <div class=\"swiper-btn swiper-button-next3\">
                    <div class=\"inner\">
                        <svg width=\"11\" height=\"20\" viewBox=\"0 0 11 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path d=\"M1.6918 20C1.80148 20.0006 1.91019 19.9796 2.01173 19.9381C2.11326 19.8967 2.2056 19.8356 2.28347 19.7583L9.0918 12.95C9.47983 12.5629 9.78769 12.1032 9.99774 11.5969C10.2078 11.0907 10.3159 10.5481 10.3159 10C10.3159 9.45194 10.2078 8.90926 9.99774 8.40305C9.78769 7.89685 9.47983 7.43705 9.0918 7.05L2.28347 0.241678C2.20577 0.163979 2.11353 0.102345 2.01201 0.0602948C1.91049 0.0182446 1.80169 -0.00339842 1.6918 -0.00339842C1.58192 -0.00339842 1.47311 0.0182446 1.3716 0.0602948C1.27008 0.102345 1.17784 0.163979 1.10014 0.241678C1.02244 0.319376 0.960803 0.411618 0.918753 0.513136C0.876703 0.614655 0.85506 0.723461 0.85506 0.833344C0.85506 0.943226 0.876703 1.05203 0.918753 1.15355C0.960803 1.25507 1.02244 1.34731 1.10014 1.42501L7.90847 8.23333C8.37664 8.70209 8.6396 9.3375 8.6396 10C8.6396 10.6625 8.37664 11.2979 7.90847 11.7667L1.10014 18.575C1.02203 18.6525 0.960034 18.7446 0.917726 18.8462C0.875419 18.9477 0.853638 19.0566 0.853638 19.1667C0.853638 19.2767 0.875419 19.3856 0.917726 19.4871C0.960034 19.5887 1.02203 19.6809 1.10014 19.7583C1.178 19.8356 1.27035 19.8967 1.37188 19.9381C1.47341 19.9796 1.58213 20.0006 1.6918 20Z\" fill=\"#262626\" />
                        </svg>
                    </div>
                </div>
                <div class=\"swiper-btn swiper-button-prev3\">
                    <div class=\"inner\">
                        <svg width=\"11\" height=\"20\" viewBox=\"0 0 11 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path d=\"M9.30869 20C9.19901 20.0006 9.09029 19.9796 8.98876 19.9381C8.88723 19.8966 8.79488 19.8355 8.71702 19.7583L1.90869 12.95C1.52066 12.5629 1.2128 12.1031 1.00275 11.5969C0.792694 11.0907 0.68457 10.548 0.68457 9.99998C0.68457 9.45192 0.792694 8.90924 1.00275 8.40303C1.2128 7.89683 1.52066 7.43703 1.90869 7.04998L8.71702 0.241658C8.79472 0.163959 8.88696 0.102325 8.98848 0.0602752C9.09 0.018225 9.1988 -0.00341797 9.30869 -0.00341797C9.41857 -0.00341797 9.52737 0.018225 9.62889 0.0602752C9.73041 0.102325 9.82265 0.163959 9.90035 0.241658C9.97805 0.319357 10.0397 0.411599 10.0817 0.513117C10.1238 0.614635 10.1454 0.723442 10.1454 0.833324C10.1454 0.943207 10.1238 1.05201 10.0817 1.15353C10.0397 1.25505 9.97805 1.34729 9.90035 1.42499L3.09202 8.23332C2.62385 8.70207 2.36088 9.33748 2.36088 9.99998C2.36088 10.6625 2.62385 11.2979 3.09202 11.7666L9.90035 18.575C9.97846 18.6524 10.0405 18.7446 10.0828 18.8462C10.1251 18.9477 10.1469 19.0566 10.1469 19.1666C10.1469 19.2766 10.1251 19.3856 10.0828 19.4871C10.0405 19.5887 9.97846 19.6808 9.90035 19.7583C9.82248 19.8355 9.73014 19.8966 9.62861 19.9381C9.52708 19.9796 9.41836 20.0006 9.30869 20Z\" fill=\"white\" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <img class=\"banner-bg-shape-3\" src=\"{{ asset('images/banner/banner-bg-2.png') }}\" alt=\"\">
    </section>
    <!-- testimonials area end -->

    <!-- blog area start -->
    <section class=\"rts-blog-area rts-section-gap\">
        <div class=\"container\">
            <div class=\"section-title-area text-center\">
                <p class=\"pre-title justify-content-center\"><img src=\"{{ asset('images/banner/title-img.svg') }}\" alt=\"\">Blog & News</p>
                <h2 class=\"section-title\">Welcome to Novalearn blog</h2>
                <p class=\"desc\">A quick directory of Novalearn most popular blogs on parenting, <br> homeschooling, curriculum, supplementing your kids</p>
            </div>
            <div class=\"slider-inner\">
                <div class=\"swiper mySwiper-category-1 swiper-data\" data-swiper='{
                            \"spaceBetween\":30,
                            \"slidesPerView\":3,
                            \"loop\": true,
                            \"speed\": 1500,
                            \"pagination\":{
                                \"el\": \".swiper-pagination4\",
                                \"clickable\": \"true\"
                            },
                            \"autoplay\":{
                                \"delay\":\"4500\"
                            },
                            \"breakpoints\":{
                            \"0\":{
                                \"slidesPerView\":1,
                                \"spaceBetween\":30},
                            \"320\":{
                                \"slidesPerView\":1,
                                \"spaceBetween\":30},
                            \"480\":{
                                \"slidesPerView\":1,
                                \"spaceBetween\":30},
                            \"768\":{
                                \"slidesPerView\":2,
                                \"spaceBetween\":30},
                            \"840\":{
                                \"slidesPerView\":2,
                                \"spaceBetween\":30},
                            \"1140\":{
                                \"slidesPerView\":3,
                                \"spaceBetween\":30}
                            }
                        }'>
                    <div class=\"swiper-wrapper\">
                        <!-- single swiper style -->
                        <div class=\"swiper-slide\">
                            <div class=\"blog-wrapper\">
                                <div class=\"wrapper-inner\">
                                    <div class=\"image\">
                                        <img src=\"{{ asset('images/blog/blog-01.png') }}\" alt=\"\">
                                    </div>
                                    <div class=\"content\">
                                        <h4 class=\"title\"><a href=\"blog-details.html\">How to spark passion-led,
                                                interest-based creativity.</a></h4>
                                        <ul class=\"meta-wrapper\">
                                            <li class=\"wrapper-list\">
                                                <div class=\"icon\">
                                                    <img src=\"{{ asset('images/icon/14.svg') }}\" alt=\"\">
                                                </div>
                                                <p class=\"desc\">28 December </p>
                                            </li>
                                            <li class=\"wrapper-list\">
                                                <div class=\"icon\">
                                                    <img src=\"{{ asset('images/icon/15.svg') }}\" alt=\"\">
                                                </div>
                                                <p class=\"desc\">24k View</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single swiper style -->
                        <!-- single swiper style -->
                        <div class=\"swiper-slide\">
                            <div class=\"blog-wrapper two\">
                                <div class=\"wrapper-inner\">
                                    <div class=\"image\">
                                        <img src=\"{{ asset('images/blog/blog-02.png') }}\" alt=\"\">
                                    </div>
                                    <div class=\"content\">
                                        <h4 class=\"title\"><a href=\"blog-details.html\">Ways to Create A Montessori
                                                Home Environment</a></h4>
                                        <ul class=\"meta-wrapper\">
                                            <li class=\"wrapper-list\">
                                                <div class=\"icon\">
                                                    <img src=\"{{ asset('images/icon/14.svg') }}\" alt=\"\">
                                                </div>
                                                <p class=\"desc\">28 December </p>
                                            </li>
                                            <li class=\"wrapper-list\">
                                                <div class=\"icon\">
                                                    <img src=\"{{ asset('images/icon/15.svg') }}\" alt=\"\">
                                                </div>
                                                <p class=\"desc\">24k View</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single swiper style -->
                        <!-- single swiper style -->
                        <div class=\"swiper-slide\">
                            <div class=\"blog-wrapper three\">
                                <div class=\"wrapper-inner\">
                                    <div class=\"image\">
                                        <img src=\"{{ asset('images/blog/blog-03.png') }}\" alt=\"\">
                                    </div>
                                    <div class=\"content\">
                                        <h4 class=\"title\"><a href=\"blog-details.html\">Outschool mom helped her
                                                son discover his superpower.</a></h4>
                                        <ul class=\"meta-wrapper\">
                                            <li class=\"wrapper-list\">
                                                <div class=\"icon\">
                                                    <img src=\"{{ asset('images/icon/14.svg') }}\" alt=\"\">
                                                </div>
                                                <p class=\"desc\">28 December </p>
                                            </li>
                                            <li class=\"wrapper-list\">
                                                <div class=\"icon\">
                                                    <img src=\"{{ asset('images/icon/15.svg') }}\" alt=\"\">
                                                </div>
                                                <p class=\"desc\">24k View</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single swiper style -->
                    </div>
                </div>
                <div class=\"swiper-pagination4\"></div>
            </div>
        </div>
    </section>
    <!-- blog area end -->

    <!-- footer call to action area start -->

    <!-- footer call to action area start -->
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
                            <div class=\"head\">
                                <a href=\"#\">
                                    <img src=\"{{ asset('images/logo/logo-1.png') }}\" alt=\"logo\" loading=\"lazy\">
                                </a>
                            </div>
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
                                    <li><a href=\"about.html\">About Us</a></li>
                                    <li><a href=\"team.html\">Teachers</a></li>
                                    <li><a href=\"team-details.html\">Teachers Info</a></li>
                                    <li><a href=\"zoom-meeting.html\">Event</a></li>
                                    <li><a href=\"pricing.html\">Pricing</a></li>
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
                                    <li><a href=\"course.html\">Courses</a></li>
                                    <li><a href=\"blog.html\">Blog</a></li>
                                    <li><a href=\"program-details.html\">Program</a></li>
                                    <li><a href=\"contact.html\">Contact Us</a></li>
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
                                        <div class=\"image\">
                                            <a href=\"#\">
                                                <img src=\"{{ asset('images/blog/blog-07.jpeg') }}\" width=\"80\" alt=\"\">
                                            </a>
                                        </div>
                                        <div class=\"content\">
                                            <p class=\"date\">October 29, 2023</p>
                                            <h6 class=\"post-title\"><a href=\"#\">Avoid These 4 Common When Managing Remote Teams</a></h6>
                                        </div>
                                    </li>
                                    <li class=\"post-area\">
                                        <div class=\"image\">
                                            <a href=\"#\">
                                                <img src=\"{{ asset('images/blog/blog-08.jpeg') }}\" width=\"80\" alt=\"\">
                                            </a>
                                        </div>
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
                            <p>Copyright © 2024 All Rights Reserved by Novalearn</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer call to action area end -->
    <!-- footer call to action area end -->

    <!-- Modal -->
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

                        <p class=\"dont-acc mt--20\">Dont Have an Account? <a href=\"{{ path('app_signup') }}\">Sign-up</a></p> 
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
                    <a href=\"contact.html\" class=\"rts-btn btn-primary\">Let's talk</a>
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
                            <li><a class=\"mobile-menu-link\" href=\"index.html\">Home 01</a></li>
                            <li><a class=\"mobile-menu-link\" href=\"index-two.html\">Home 02</a></li>
                            <li><a class=\"mobile-menu-link\" href=\"index-three.html\">Home 03</a></li>
                            <li><a class=\"mobile-menu-link\" href=\"index-four.html\">home 04</a></li>
                        </ul>
                    </li>
                    <li class=\"has-droupdown\">
                        <a href=\"#\" class=\"main\">Pages</a>
                        <ul class=\"submenu mm-collapse\">
                            <li><a class=\"mobile-menu-link\" href=\"about.html\">About Us</a></li>
                            <li><a class=\"mobile-menu-link\" href=\"team.html\">Team</a></li>
                            <li><a class=\"mobile-menu-link\" href=\"team-details.html\">Team Details</a></li>
                            <li><a class=\"mobile-menu-link\" href=\"event.html\">Event</a></li>
                            <li><a class=\"mobile-menu-link\" href=\"event-details.html\">Event Details</a></li>
                            <li><a class=\"mobile-menu-link\" href=\"program-details.html\">Program Details</a></li>
                            <li><a class=\"mobile-menu-link\" href=\"pricing.html\">Pricing</a></li>
                            <li><a class=\"mobile-menu-link\" href=\"pricing-two.html\">Pricing Two</a></li>
                        </ul>
                    </li>
                    <li class=\"has-droupdown\">
                        <a href=\"#\" class=\"main\">Class</a>
                        <ul class=\"submenu mm-collapse\">
                            <li><a class=\"mobile-menu-link\" href=\"course.html\">Courses</a></li>
                            <li><a class=\"mobile-menu-link\" href=\"course-details.html\">Course Details</a></li>
                        </ul>
                    </li>
                    <li class=\"has-droupdown\">
                        <a href=\"#\" class=\"main\">Blog</a>
                        <ul class=\"submenu mm-collapse\">
                            <li><a class=\"mobile-menu-link\" href=\"blog.html\">Blog</a></li>
                            <li><a class=\"mobile-menu-link\" href=\"blog-grid.html\">Blog Grid</a></li>
                            <li><a class=\"mobile-menu-link\" href=\"blog-list.html\">Blog List</a></li>
                            <li><a class=\"mobile-menu-link\" href=\"blog-right-sidebar.html\">Blog Right Sidebar</a></li>
                            <li><a class=\"mobile-menu-link\" href=\"blog-left-sidebar.html\">Blog Left Sidebar</a></li>
                            <li><a class=\"mobile-menu-link\" href=\"blog-details.html\">Blog Details</a></li>
                        </ul>
                    </li>
                    <li class=\"menu-item\">
                        <a href=\"contact.html\" class=\"main\">Contact</a>
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
                        S
                    </span>
                <span data-text-preloader=\"T\" class=\"letters-loading first\">
                        T
                    </span>
                <span data-text-preloader=\"U\" class=\"letters-loading first\">
                    U
                    </span>
                <span data-text-preloader=\"D\" class=\"letters-loading first\">
                    D
                    </span>
                <span data-text-preloader=\"Y\" class=\"letters-loading first\">
                        Y
                    </span>
                <span data-text-preloader=\"K\" class=\"letters-loading\">
                        K
                    </span>
                <span data-text-preloader=\"I\" class=\"letters-loading\">
                        I
                    </span>
                <span data-text-preloader=\"D\" class=\"letters-loading\">
                    D
                    </span>
                <span data-text-preloader=\"S\" class=\"letters-loading\">
                    S
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
    {% block js %}
    <script src=\"{{ asset('js/vendor/jquery.min.js') }}\"></script>
    <!-- jquery ui js -->
    <script src=\"{{ asset('js/vendor/jquery-ui.js') }}\"></script>
    <!-- metismenu js -->
    <script src=\"{{ asset('js/vendor/metismenu.js') }}\"></script>
    <!-- magnific popup js-->
    <script src=\"{{ asset('js/vendor/magnifying-popup.js') }}\"></script>
    <!-- swiper JS 10.2.0 -->
    <script src=\"{{ asset('js/plugins/swiper.js') }}\"></script>
    <!-- counterup js -->
    <script src=\"{{ asset('js/plugins/counterup.js') }}\"></script>
    <!-- waypoint js -->
    <script src=\"{{ asset('js/vendor/waypoint.js') }}\"></script>
    <!-- wow js -->
    <script src=\"{{ asset('js/vendor/waw.js') }}\"></script>
    <!-- isotop mesonary -->
    <script src=\"{{ asset('js/plugins/isotop.js') }}\"></script>
    <!-- jquery imageloaded -->
    <script src=\"{{ asset('js/plugins/imagesloaded.pkgd.min.js') }}\"></script>
    <!-- resize sensor js -->
    <script src=\"{{ asset('js/plugins/resizer-sensor.js') }}\"></script>
    <!-- sticky sidebar -->
    <script src=\"{{ asset('js/plugins/sticky-sidebar.js') }}\"></script>
    <!-- gsap twinmax js -->
    <script src=\"{{ asset('js/plugins/twinmax.js') }}\"></script>
    <!-- chroma js -->
    <script src=\"{{ asset('js/vendor/chroma.min.js') }}\"></script>
    <!-- bootstrap 5.0.2 -->
    <script src=\"{{ asset('js/plugins/bootstrap.min.js') }}\"></script>
    <!-- dymanic Contact Form -->
    <script src=\"{{ asset('js/plugins/contact.form.js') }}\"></script>
    <!-- calender js -->
    <script src=\"{{ asset('js/plugins/calender.js') }}\"></script>
    <!-- main Js -->
    <script src=\"{{ asset('js/main.js') }}\"></script>
{% endblock %}

{% endblock %}
</body>


</html>", "base.html.twig", "C:\\xampp\\htdocs\\Novalearn-new_project\\templates\\base.html.twig");
    }
}
