<?php

/* layouts/blog.html.twig */
class __TwigTemplate_b568ba20927d0462190900a135ce71f9dd300ef05b0fc9582f40a1e7945e6dd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'blogContent' => array($this, 'block_blogContent'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_af7cf7a477b08c3285160890b799f24fd5512bf7e849743f6c25a80d3e36c1e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af7cf7a477b08c3285160890b799f24fd5512bf7e849743f6c25a80d3e36c1e4->enter($__internal_af7cf7a477b08c3285160890b799f24fd5512bf7e849743f6c25a80d3e36c1e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layouts/blog.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--[if IE 8]> <html lang=\"en\" class=\"ie8\"> <![endif]-->
<!--[if IE 9]> <html lang=\"en\" class=\"ie9\"> <![endif]-->
<!--[if !IE]><!-->
<html lang=\"en\">
    <!--<![endif]-->
    <head>
        <!-- Title -->
        <title>Enlighten - Professional Bootstrap Template</title>
        <!-- Meta -->
        <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\" />
        <!-- Favicon -->
        <link href=\"favicon.ico\" rel=\"shortcut icon\">
        <!-- Bootstrap Core CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static/assets/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- Template CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static/assets/css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static/assets/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static/assets/css/nexus.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static/assets/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- Google Fonts-->
        ";
        // line 27
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 28
        echo "    </head>
    <body>
        <div id=\"body_bg\">
            <div id=\"pre_header\" class=\"container\">
                <div class=\"row margin-top-10 visible-lg\">
                    <div class=\"col-md-6\">
                        <p>
                            <strong>Phone:</strong>&nbsp;1-800-123-4567</p>
                    </div>
                    <div class=\"col-md-6 text-right\">
                        <p>
                            <strong>Email:</strong>info@example.com</p>
                    </div>
                </div>
            </div>
            <div class=\"primary-container-group\">
                <!-- Background -->
                <div class=\"primary-container-background\">
                    <div class=\"primary-container\"></div>
                    <div class=\"clearfix\"></div>
                </div>
                <!--End Background -->
                <div class=\"primary-container\">
                    <div id=\"header\" class=\"container\">
                        <div class=\"row\">
                            <!-- Logo -->
                            <div class=\"logo\">
                                <a href=\"index.html\" title=\"\">
                                    <img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static/assets/img/logo.png"), "html", null, true);
        echo "\" alt=\"Logo\" />
                                </a>
                            </div>
                            <!-- End Logo -->
                            <ul class=\"social-icons pull-right hidden-xs\">
                                <li class=\"social-rss\">
                                    <a href=\"#\" target=\"_blank\" title=\"RSS\"></a>
                                </li>
                                <li class=\"social-twitter\">
                                    <a href=\"#\" target=\"_blank\" title=\"Twitter\"></a>
                                </li>
                                <li class=\"social-facebook\">
                                    <a href=\"#\" target=\"_blank\" title=\"Facebook\"></a>
                                </li>
                                <li class=\"social-googleplus\">
                                    <a href=\"#\" target=\"_blank\" title=\"GooglePlus\"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Top Menu -->
                    <div id=\"hornav\" class=\"container no-padding\">
                        <div class=\"row\">
                            <div class=\"col-md-12 no-padding\">
                                <div class=\"pull-right visible-lg\">
                                    <ul id=\"hornavmenu\" class=\"nav navbar-nav\">
                                        <li>
                                            <a href=\"index.html\" class=\"fa-home\">Home</a>
                                        </li>
                                        <li>
                                            <span class=\"fa-gears\">Features</span>
                                            <ul>
                                                <li class=\"parent\">
                                                    <span>Typography</span>
                                                    <ul>
                                                        <li>
                                                            <a href=\"features-typo-basic.html\">Basic Typography</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"features-typo-blockquotes.html\">Blockquotes</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class=\"parent\">
                                                    <span>Components</span>
                                                    <ul>
                                                        <li>
                                                            <a href=\"features-labels.html\">Labels</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"features-progress-bars.html\">Progress Bars</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"features-panels.html\">Panels</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"features-pagination.html\">Pagination</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class=\"parent\">
                                                    <span>Icons</span>
                                                    <ul>
                                                        <li>
                                                            <a href=\"features-icons.html\">Icons General</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"features-icons-social.html\">Social Icons</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"features-icons-font-awesome.html\">Font Awesome</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"features-icons-glyphicons.html\">Glyphicons</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href=\"features-testimonials.html\">Testimonials</a>
                                                </li>
                                                <li>
                                                    <a href=\"features-accordions-tabs.html\">Accordions & Tabs</a>
                                                </li>
                                                <li>
                                                    <a href=\"features-buttons.html\">Buttons</a>
                                                </li>
                                                <li>
                                                    <a href=\"features-carousels.html\">Carousels</a>
                                                </li>
                                                <li>
                                                    <a href=\"features-grid.html\">Grid System</a>
                                                </li>
                                                <li>
                                                    <a href=\"features-animate-on-scroll.html\">Animate On Scroll</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <span class=\"fa-copy\">Pages</span>
                                            <ul>
                                                <li>
                                                    <a href=\"pages-about-us.html\">About Us</a>
                                                </li>
                                                <li>
                                                    <a href=\"pages-services.html\">Services</a>
                                                </li>
                                                <li>
                                                    <a href=\"pages-faq.html\">F.A.Q.</a>
                                                </li>
                                                <li>
                                                    <a href=\"pages-about-me.html\">About Me</a>
                                                </li>
                                                <li>
                                                    <a href=\"pages-full-width.html\">Full Width</a>
                                                </li>
                                                <li>
                                                    <a href=\"pages-left-sidebar.html\">Left Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href=\"pages-right-sidebar.html\">Right Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href=\"pages-login.html\">Login</a>
                                                </li>
                                                <li>
                                                    <a href=\"pages-sign-up.html\">Sign-Up</a>
                                                </li>
                                                <li>
                                                    <a href=\"pages-404.html\">404 Error Page</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <span class=\"fa-th\">Portfolio</span>
                                            <ul>
                                                <li>
                                                    <a href=\"portfolio-2-column.html\">2 Column</a>
                                                </li>
                                                <li>
                                                    <a href=\"portfolio-3-column.html\">3 Column</a>
                                                </li>
                                                <li>
                                                    <a href=\"portfolio-4-column.html\">4 Column</a>
                                                </li>
                                                <li>
                                                    <a href=\"portfolio-6-column.html\">6 Column</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <span class=\"fa-font\">Blog</span>
                                            <ul>
                                                <li>
                                                    <a href=\"blog-list.html\">Blog</a>
                                                </li>
                                                <li>
                                                    <a href=\"blog-single.html\">Blog Single Item</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href=\"contact.html\" class=\"fa-comment\">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Top Menu -->
                    <!-- === END HEADER === -->
                    <!-- === BEGIN CONTENT === -->
                    <div id=\"content\">
                        <div class=\"container\">
                            ";
        // line 229
        $this->displayBlock('blogContent', $context, $blocks);
        // line 230
        echo "                        </div>
                    </div>
                </div>
            </div>
            <!-- === END CONTENT === -->
            <!-- === BEGIN FOOTER === -->
            <div id=\"base\">
                <div class=\"container padding-vert-30 margin-top-40\">
                    <div class=\"row\">
                        <!-- Sample Menu -->
                        <div class=\"col-md-3 margin-bottom-20\">
                            <h3 class=\"margin-bottom-10\">Sample Menu</h3>
                            <ul class=\"menu\">
                                <li>
                                    <a class=\"fa-tasks\" href=\"#\">Placerat facer possim</a>
                                </li>
                                <li>
                                    <a class=\"fa-users\" href=\"#\">Quam nunc putamus</a>
                                </li>
                                <li>
                                    <a class=\"fa-signal\" href=\"#\">Velit esse molestie</a>
                                </li>
                                <li>
                                    <a class=\"fa-coffee\" href=\"#\">Nam liber tempor</a>
                                </li>
                            </ul>
                            <div class=\"clearfix\"></div>
                        </div>
                        <!-- End Sample Menu -->
                        <!-- Contact Details -->
                        <div class=\"col-md-3 margin-bottom-20\">
                            <h3 class=\"margin-bottom-10\">Contact Details</h3>
                            <p>
                                <span class=\"fa-phone\">Telephone:</span>(212)888-77-88
                                <br>
                                <span class=\"fa-envelope\">Email:</span>
                                <a href=\"mailto:info@joomla51.com\">info@joomla51.com</a>
                                <br>
                                <span class=\"fa-link\">Website:</span>
                                <a href=\"http://www.joomla51.com\">www.joomla51.com</a>
                            </p>
                            <p>The Dunes, Top Road,
                                <br>Strandhill,
                                <br>Co. Sligo,
                                <br>Ireland</p>
                        </div>
                        <!-- End Contact Details -->
                        <!-- Thumbs Gallery -->
                        <div class=\"col-md-3 margin-bottom-20\">
                            <h3 class=\"margin-bottom-10\">Portfolio Highlights</h3>
                            <div class=\"thumbs-gallery\">
                                <a class=\"thumbBox\" rel=\"lightbox-thumbs\" href=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static/assets/img/thumbsgallery/image01.jpg"), "html", null, true);
        echo "\">
                                    <img src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static/assets/img/thumbsgallery/thumbs/image01.jpg"), "html", null, true);
        echo "\" alt=\"image1.jpg') }}\">
                                    <i></i>
                                </a>
                                <a class=\"thumbBox\" rel=\"lightbox-thumbs\" href=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static/assets/img/thumbsgallery/image02.jpg"), "html", null, true);
        echo "\">
                                    <img src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static/assets/img/thumbsgallery/thumbs/image02.jpg"), "html", null, true);
        echo "\" alt=\"image2.jpg') }}\">
                                    <i></i>
                                </a>
                                <a class=\"thumbBox\" rel=\"lightbox-thumbs\" href=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static/assets/img/thumbsgallery/image03.jpg"), "html", null, true);
        echo "\">
                                    <img src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static/assets/img/thumbsgallery/thumbs/image03.jpg"), "html", null, true);
        echo "\" alt=\"image3.jpg') }}\">
                                    <i></i>
                                </a>
                                <a class=\"thumbBox\" rel=\"lightbox-thumbs\" href=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static/assets/img/thumbsgallery/image04.jpg"), "html", null, true);
        echo "\">
                                    <img src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static/assets/img/thumbsgallery/thumbs/image04.jpg"), "html", null, true);
        echo "\" alt=\"image4.jpg') }}\">
                                    <i></i>
                                </a>
                                <a class=\"thumbBox\" rel=\"lightbox-thumbs\" href=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static/assets/img/thumbsgallery/image04.jpg"), "html", null, true);
        echo "\">
                                    <img src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static/assets/img/thumbsgallery/thumbs/image05.jpg"), "html", null, true);
        echo "\" alt=\"image5.jpg') }}\">
                                    <i></i>
                                </a>
                                <a class=\"thumbBox\" rel=\"lightbox-thumbs\" href=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static/assets/img/thumbsgallery/image06.jpg"), "html", null, true);
        echo "\">
                                    <img src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static/assets/img/thumbsgallery/thumbs/image06.jpg"), "html", null, true);
        echo "\" alt=\"image6.jpg') }}\">
                                    <i></i>
                                </a>
                                <a class=\"thumbBox\" rel=\"lightbox-thumbs\" href=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static/assets/img/thumbsgallery/image07.jpg"), "html", null, true);
        echo "\">
                                    <img src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static/assets/img/thumbsgallery/thumbs/image07.jpg"), "html", null, true);
        echo "\" alt=\"image7.jpg') }}\">
                                    <i></i>
                                </a>
                                <a class=\"thumbBox\" rel=\"lightbox-thumbs\" href=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static/assets/img/thumbsgallery/image08.jpg"), "html", null, true);
        echo "\">
                                    <img src=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static/assets/img/thumbsgallery/thumbs/image08.jpg"), "html", null, true);
        echo "\" alt=\"image8.jpg') }}\">
                                    <i></i>
                                </a>
                                <a class=\"thumbBox\" rel=\"lightbox-thumbs\" href=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static/assets/img/thumbsgallery/image09.jpg"), "html", null, true);
        echo "\">
                                    <img src=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static/assets/img/thumbsgallery/thumbs/image09.jpg"), "html", null, true);
        echo "\" alt=\"image9.jpg') }}\">
                                    <i></i>
                                </a>
                            </div>
                            <div class=\"clearfix\"></div>
                        </div>
                        <!-- End Thumbs Gallery -->
                        <!-- Disclaimer -->
                        <div class=\"col-md-3 margin-bottom-20\">
                            <h3 class=\"margin-bottom-10\">Disclaimer</h3>
                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit
                                augue duis dolore te feugait nulla facilisi.</p>
                            <div class=\"clearfix\"></div>
                        </div>
                        <!-- End Disclaimer -->
                        <div class=\"clearfix\"></div>
                    </div>
                </div>
            </div>
            <!-- Footer Menu -->
            <div id=\"footer\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div id=\"copyright\" class=\"col-md-4\">
                            <p>(c) 2014 Your Copyright Info</p>
                        </div>
                        <div id=\"footermenu\" class=\"col-md-8\">
                            <ul class=\"list-unstyled list-inline pull-right\">
                                <li>
                                    <a href=\"#\" target=\"_blank\">Sample Link</a>
                                </li>
                                <li>
                                    <a href=\"#\" target=\"_blank\">Sample Link</a>
                                </li>
                                <li>
                                    <a href=\"#\" target=\"_blank\">Sample Link</a>
                                </li>
                                <li>
                                    <a href=\"#\" target=\"_blank\">Sample Link</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Footer Menu -->
            <!-- JS -->
            <script type=\"text/javascript\" src=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static/assets/js/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 362
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static/assets/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 363
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static/assets/js/scripts.js"), "html", null, true);
        echo "\"></script>
            <!-- Isotope - Portfolio Sorting -->
            <script type=\"text/javascript\" src=\"";
        // line 365
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static/assets/js/jquery.isotope.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!-- Mobile Menu - Slicknav -->
            <script type=\"text/javascript\" src=\"";
        // line 367
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static/assets/js/jquery.slicknav.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!-- Animate on Scroll-->
            <script type=\"text/javascript\" src=\"";
        // line 369
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static/assets/js/jquery.visible.js"), "html", null, true);
        echo "\" charset=\"utf-8\"></script>
            <!-- Sticky Div -->
            <script type=\"text/javascript\" src=\"";
        // line 371
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static/assets/js/jquery.sticky.js"), "html", null, true);
        echo "\" charset=\"utf-8\"></script>
            <!-- Slimbox2-->
            <script type=\"text/javascript\" src=\"";
        // line 373
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static/assets/js/slimbox2.js"), "html", null, true);
        echo "\" charset=\"utf-8\"></script>
            <!-- Modernizr -->
            <script src=\"";
        // line 375
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static/assets/js/modernizr.custom.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

            <script src=\"";
        // line 377
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/scripts/main.js"), "html", null, true);
        echo "\"></script>
            <!-- End JS -->
    </body>
</html>
<!-- === END FOOTER ===";
        
        $__internal_af7cf7a477b08c3285160890b799f24fd5512bf7e849743f6c25a80d3e36c1e4->leave($__internal_af7cf7a477b08c3285160890b799f24fd5512bf7e849743f6c25a80d3e36c1e4_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_446cee06ae1c4cc2d636990709598c3d4cd457e5d2ac31513d5fb790018d35f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_446cee06ae1c4cc2d636990709598c3d4cd457e5d2ac31513d5fb790018d35f8->enter($__internal_446cee06ae1c4cc2d636990709598c3d4cd457e5d2ac31513d5fb790018d35f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_446cee06ae1c4cc2d636990709598c3d4cd457e5d2ac31513d5fb790018d35f8->leave($__internal_446cee06ae1c4cc2d636990709598c3d4cd457e5d2ac31513d5fb790018d35f8_prof);

    }

    // line 229
    public function block_blogContent($context, array $blocks = array())
    {
        $__internal_b9993b024eca11931d73fb1202f2f6e942fbd16e78187e81c167341c598e1dbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9993b024eca11931d73fb1202f2f6e942fbd16e78187e81c167341c598e1dbf->enter($__internal_b9993b024eca11931d73fb1202f2f6e942fbd16e78187e81c167341c598e1dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blogContent"));

        
        $__internal_b9993b024eca11931d73fb1202f2f6e942fbd16e78187e81c167341c598e1dbf->leave($__internal_b9993b024eca11931d73fb1202f2f6e942fbd16e78187e81c167341c598e1dbf_prof);

    }

    public function getTemplateName()
    {
        return "layouts/blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  529 => 229,  518 => 27,  506 => 377,  501 => 375,  496 => 373,  491 => 371,  486 => 369,  481 => 367,  476 => 365,  471 => 363,  467 => 362,  463 => 361,  413 => 314,  409 => 313,  403 => 310,  399 => 309,  393 => 306,  389 => 305,  383 => 302,  379 => 301,  373 => 298,  369 => 297,  363 => 294,  359 => 293,  353 => 290,  349 => 289,  343 => 286,  339 => 285,  333 => 282,  329 => 281,  276 => 230,  274 => 229,  98 => 56,  68 => 28,  65 => 27,  60 => 23,  56 => 22,  52 => 21,  48 => 20,  43 => 18,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<!--[if IE 8]> <html lang=\"en\" class=\"ie8\"> <![endif]-->
<!--[if IE 9]> <html lang=\"en\" class=\"ie9\"> <![endif]-->
<!--[if !IE]><!-->
<html lang=\"en\">
    <!--<![endif]-->
    <head>
        <!-- Title -->
        <title>Enlighten - Professional Bootstrap Template</title>
        <!-- Meta -->
        <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\" />
        <!-- Favicon -->
        <link href=\"favicon.ico\" rel=\"shortcut icon\">
        <!-- Bootstrap Core CSS -->
        <link rel=\"stylesheet\" href=\"{{ asset('static/assets/css/bootstrap.css') }}\" rel=\"stylesheet\">
        <!-- Template CSS -->
        <link rel=\"stylesheet\" href=\"{{ asset('static/assets/css/animate.css') }}\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"{{ asset('static/assets/css/font-awesome.css') }}\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"{{ asset('static/assets/css/nexus.css') }}\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"{{ asset('static/assets/css/responsive.css') }}\" rel=\"stylesheet\">
        <!-- Google Fonts-->
        {# <link href=\"http://fonts.googleapis.com/css?family=Roboto:400,300\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300\" rel=\"stylesheet\" type=\"text/css\"> #}
        {% block javascripts %}{% endblock %}
    </head>
    <body>
        <div id=\"body_bg\">
            <div id=\"pre_header\" class=\"container\">
                <div class=\"row margin-top-10 visible-lg\">
                    <div class=\"col-md-6\">
                        <p>
                            <strong>Phone:</strong>&nbsp;1-800-123-4567</p>
                    </div>
                    <div class=\"col-md-6 text-right\">
                        <p>
                            <strong>Email:</strong>info@example.com</p>
                    </div>
                </div>
            </div>
            <div class=\"primary-container-group\">
                <!-- Background -->
                <div class=\"primary-container-background\">
                    <div class=\"primary-container\"></div>
                    <div class=\"clearfix\"></div>
                </div>
                <!--End Background -->
                <div class=\"primary-container\">
                    <div id=\"header\" class=\"container\">
                        <div class=\"row\">
                            <!-- Logo -->
                            <div class=\"logo\">
                                <a href=\"index.html\" title=\"\">
                                    <img src=\"{{ asset('static/assets/img/logo.png') }}\" alt=\"Logo\" />
                                </a>
                            </div>
                            <!-- End Logo -->
                            <ul class=\"social-icons pull-right hidden-xs\">
                                <li class=\"social-rss\">
                                    <a href=\"#\" target=\"_blank\" title=\"RSS\"></a>
                                </li>
                                <li class=\"social-twitter\">
                                    <a href=\"#\" target=\"_blank\" title=\"Twitter\"></a>
                                </li>
                                <li class=\"social-facebook\">
                                    <a href=\"#\" target=\"_blank\" title=\"Facebook\"></a>
                                </li>
                                <li class=\"social-googleplus\">
                                    <a href=\"#\" target=\"_blank\" title=\"GooglePlus\"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Top Menu -->
                    <div id=\"hornav\" class=\"container no-padding\">
                        <div class=\"row\">
                            <div class=\"col-md-12 no-padding\">
                                <div class=\"pull-right visible-lg\">
                                    <ul id=\"hornavmenu\" class=\"nav navbar-nav\">
                                        <li>
                                            <a href=\"index.html\" class=\"fa-home\">Home</a>
                                        </li>
                                        <li>
                                            <span class=\"fa-gears\">Features</span>
                                            <ul>
                                                <li class=\"parent\">
                                                    <span>Typography</span>
                                                    <ul>
                                                        <li>
                                                            <a href=\"features-typo-basic.html\">Basic Typography</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"features-typo-blockquotes.html\">Blockquotes</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class=\"parent\">
                                                    <span>Components</span>
                                                    <ul>
                                                        <li>
                                                            <a href=\"features-labels.html\">Labels</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"features-progress-bars.html\">Progress Bars</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"features-panels.html\">Panels</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"features-pagination.html\">Pagination</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class=\"parent\">
                                                    <span>Icons</span>
                                                    <ul>
                                                        <li>
                                                            <a href=\"features-icons.html\">Icons General</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"features-icons-social.html\">Social Icons</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"features-icons-font-awesome.html\">Font Awesome</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"features-icons-glyphicons.html\">Glyphicons</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href=\"features-testimonials.html\">Testimonials</a>
                                                </li>
                                                <li>
                                                    <a href=\"features-accordions-tabs.html\">Accordions & Tabs</a>
                                                </li>
                                                <li>
                                                    <a href=\"features-buttons.html\">Buttons</a>
                                                </li>
                                                <li>
                                                    <a href=\"features-carousels.html\">Carousels</a>
                                                </li>
                                                <li>
                                                    <a href=\"features-grid.html\">Grid System</a>
                                                </li>
                                                <li>
                                                    <a href=\"features-animate-on-scroll.html\">Animate On Scroll</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <span class=\"fa-copy\">Pages</span>
                                            <ul>
                                                <li>
                                                    <a href=\"pages-about-us.html\">About Us</a>
                                                </li>
                                                <li>
                                                    <a href=\"pages-services.html\">Services</a>
                                                </li>
                                                <li>
                                                    <a href=\"pages-faq.html\">F.A.Q.</a>
                                                </li>
                                                <li>
                                                    <a href=\"pages-about-me.html\">About Me</a>
                                                </li>
                                                <li>
                                                    <a href=\"pages-full-width.html\">Full Width</a>
                                                </li>
                                                <li>
                                                    <a href=\"pages-left-sidebar.html\">Left Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href=\"pages-right-sidebar.html\">Right Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href=\"pages-login.html\">Login</a>
                                                </li>
                                                <li>
                                                    <a href=\"pages-sign-up.html\">Sign-Up</a>
                                                </li>
                                                <li>
                                                    <a href=\"pages-404.html\">404 Error Page</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <span class=\"fa-th\">Portfolio</span>
                                            <ul>
                                                <li>
                                                    <a href=\"portfolio-2-column.html\">2 Column</a>
                                                </li>
                                                <li>
                                                    <a href=\"portfolio-3-column.html\">3 Column</a>
                                                </li>
                                                <li>
                                                    <a href=\"portfolio-4-column.html\">4 Column</a>
                                                </li>
                                                <li>
                                                    <a href=\"portfolio-6-column.html\">6 Column</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <span class=\"fa-font\">Blog</span>
                                            <ul>
                                                <li>
                                                    <a href=\"blog-list.html\">Blog</a>
                                                </li>
                                                <li>
                                                    <a href=\"blog-single.html\">Blog Single Item</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href=\"contact.html\" class=\"fa-comment\">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Top Menu -->
                    <!-- === END HEADER === -->
                    <!-- === BEGIN CONTENT === -->
                    <div id=\"content\">
                        <div class=\"container\">
                            {% block blogContent %}{% endblock %}
                        </div>
                    </div>
                </div>
            </div>
            <!-- === END CONTENT === -->
            <!-- === BEGIN FOOTER === -->
            <div id=\"base\">
                <div class=\"container padding-vert-30 margin-top-40\">
                    <div class=\"row\">
                        <!-- Sample Menu -->
                        <div class=\"col-md-3 margin-bottom-20\">
                            <h3 class=\"margin-bottom-10\">Sample Menu</h3>
                            <ul class=\"menu\">
                                <li>
                                    <a class=\"fa-tasks\" href=\"#\">Placerat facer possim</a>
                                </li>
                                <li>
                                    <a class=\"fa-users\" href=\"#\">Quam nunc putamus</a>
                                </li>
                                <li>
                                    <a class=\"fa-signal\" href=\"#\">Velit esse molestie</a>
                                </li>
                                <li>
                                    <a class=\"fa-coffee\" href=\"#\">Nam liber tempor</a>
                                </li>
                            </ul>
                            <div class=\"clearfix\"></div>
                        </div>
                        <!-- End Sample Menu -->
                        <!-- Contact Details -->
                        <div class=\"col-md-3 margin-bottom-20\">
                            <h3 class=\"margin-bottom-10\">Contact Details</h3>
                            <p>
                                <span class=\"fa-phone\">Telephone:</span>(212)888-77-88
                                <br>
                                <span class=\"fa-envelope\">Email:</span>
                                <a href=\"mailto:info@joomla51.com\">info@joomla51.com</a>
                                <br>
                                <span class=\"fa-link\">Website:</span>
                                <a href=\"http://www.joomla51.com\">www.joomla51.com</a>
                            </p>
                            <p>The Dunes, Top Road,
                                <br>Strandhill,
                                <br>Co. Sligo,
                                <br>Ireland</p>
                        </div>
                        <!-- End Contact Details -->
                        <!-- Thumbs Gallery -->
                        <div class=\"col-md-3 margin-bottom-20\">
                            <h3 class=\"margin-bottom-10\">Portfolio Highlights</h3>
                            <div class=\"thumbs-gallery\">
                                <a class=\"thumbBox\" rel=\"lightbox-thumbs\" href=\"{{ asset('static/assets/img/thumbsgallery/image01.jpg') }}\">
                                    <img src=\"{{ asset('static/assets/img/thumbsgallery/thumbs/image01.jpg') }}\" alt=\"image1.jpg') }}\">
                                    <i></i>
                                </a>
                                <a class=\"thumbBox\" rel=\"lightbox-thumbs\" href=\"{{ asset('static/assets/img/thumbsgallery/image02.jpg') }}\">
                                    <img src=\"{{ asset('static/assets/img/thumbsgallery/thumbs/image02.jpg') }}\" alt=\"image2.jpg') }}\">
                                    <i></i>
                                </a>
                                <a class=\"thumbBox\" rel=\"lightbox-thumbs\" href=\"{{ asset('static/assets/img/thumbsgallery/image03.jpg') }}\">
                                    <img src=\"{{ asset('static/assets/img/thumbsgallery/thumbs/image03.jpg') }}\" alt=\"image3.jpg') }}\">
                                    <i></i>
                                </a>
                                <a class=\"thumbBox\" rel=\"lightbox-thumbs\" href=\"{{ asset('static/assets/img/thumbsgallery/image04.jpg') }}\">
                                    <img src=\"{{ asset('static/assets/img/thumbsgallery/thumbs/image04.jpg') }}\" alt=\"image4.jpg') }}\">
                                    <i></i>
                                </a>
                                <a class=\"thumbBox\" rel=\"lightbox-thumbs\" href=\"{{ asset('static/assets/img/thumbsgallery/image04.jpg') }}\">
                                    <img src=\"{{ asset('static/assets/img/thumbsgallery/thumbs/image05.jpg') }}\" alt=\"image5.jpg') }}\">
                                    <i></i>
                                </a>
                                <a class=\"thumbBox\" rel=\"lightbox-thumbs\" href=\"{{ asset('static/assets/img/thumbsgallery/image06.jpg') }}\">
                                    <img src=\"{{ asset('static/assets/img/thumbsgallery/thumbs/image06.jpg') }}\" alt=\"image6.jpg') }}\">
                                    <i></i>
                                </a>
                                <a class=\"thumbBox\" rel=\"lightbox-thumbs\" href=\"{{ asset('static/assets/img/thumbsgallery/image07.jpg') }}\">
                                    <img src=\"{{ asset('static/assets/img/thumbsgallery/thumbs/image07.jpg') }}\" alt=\"image7.jpg') }}\">
                                    <i></i>
                                </a>
                                <a class=\"thumbBox\" rel=\"lightbox-thumbs\" href=\"{{ asset('static/assets/img/thumbsgallery/image08.jpg') }}\">
                                    <img src=\"{{ asset('static/assets/img/thumbsgallery/thumbs/image08.jpg') }}\" alt=\"image8.jpg') }}\">
                                    <i></i>
                                </a>
                                <a class=\"thumbBox\" rel=\"lightbox-thumbs\" href=\"{{ asset('static/assets/img/thumbsgallery/image09.jpg') }}\">
                                    <img src=\"{{ asset('static/assets/img/thumbsgallery/thumbs/image09.jpg') }}\" alt=\"image9.jpg') }}\">
                                    <i></i>
                                </a>
                            </div>
                            <div class=\"clearfix\"></div>
                        </div>
                        <!-- End Thumbs Gallery -->
                        <!-- Disclaimer -->
                        <div class=\"col-md-3 margin-bottom-20\">
                            <h3 class=\"margin-bottom-10\">Disclaimer</h3>
                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit
                                augue duis dolore te feugait nulla facilisi.</p>
                            <div class=\"clearfix\"></div>
                        </div>
                        <!-- End Disclaimer -->
                        <div class=\"clearfix\"></div>
                    </div>
                </div>
            </div>
            <!-- Footer Menu -->
            <div id=\"footer\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div id=\"copyright\" class=\"col-md-4\">
                            <p>(c) 2014 Your Copyright Info</p>
                        </div>
                        <div id=\"footermenu\" class=\"col-md-8\">
                            <ul class=\"list-unstyled list-inline pull-right\">
                                <li>
                                    <a href=\"#\" target=\"_blank\">Sample Link</a>
                                </li>
                                <li>
                                    <a href=\"#\" target=\"_blank\">Sample Link</a>
                                </li>
                                <li>
                                    <a href=\"#\" target=\"_blank\">Sample Link</a>
                                </li>
                                <li>
                                    <a href=\"#\" target=\"_blank\">Sample Link</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Footer Menu -->
            <!-- JS -->
            <script type=\"text/javascript\" src=\"{{ asset('static/assets/js/jquery.min.js') }}\" type=\"text/javascript\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('static/assets/js/bootstrap.min.js') }}\" type=\"text/javascript\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('static/assets/js/scripts.js') }}\"></script>
            <!-- Isotope - Portfolio Sorting -->
            <script type=\"text/javascript\" src=\"{{ asset('static/assets/js/jquery.isotope.js') }}\" type=\"text/javascript\"></script>
            <!-- Mobile Menu - Slicknav -->
            <script type=\"text/javascript\" src=\"{{ asset('static/assets/js/jquery.slicknav.js') }}\" type=\"text/javascript\"></script>
            <!-- Animate on Scroll-->
            <script type=\"text/javascript\" src=\"{{ asset('static/assets/js/jquery.visible.js') }}\" charset=\"utf-8\"></script>
            <!-- Sticky Div -->
            <script type=\"text/javascript\" src=\"{{ asset('static/assets/js/jquery.sticky.js') }}\" charset=\"utf-8\"></script>
            <!-- Slimbox2-->
            <script type=\"text/javascript\" src=\"{{ asset('static/assets/js/slimbox2.js') }}\" charset=\"utf-8\"></script>
            <!-- Modernizr -->
            <script src=\"{{ asset('static/assets/js/modernizr.custom.js') }}\" type=\"text/javascript\"></script>

            <script src=\"{{ asset('dist/scripts/main.js') }}\"></script>
            <!-- End JS -->
    </body>
</html>
<!-- === END FOOTER ===", "layouts/blog.html.twig", "/var/www/symfony3/app/Resources/views/layouts/blog.html.twig");
    }
}
