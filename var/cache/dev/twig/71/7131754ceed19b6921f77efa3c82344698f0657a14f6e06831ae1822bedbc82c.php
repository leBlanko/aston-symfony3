<?php

/* IKNSABlogBundle:Blog:index.html.twig */
class __TwigTemplate_d9f7a691df7811f13d2c736cee5dcff8d6e83836fc784428a22525aaa3adbbd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IKNSABlogBundle::layout.html.twig", "IKNSABlogBundle:Blog:index.html.twig", 1);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'blogContent' => array($this, 'block_blogContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IKNSABlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_10adafaa0784025c42cd3a4859087b8dc7f6ef27bef7b8bb3b6739eb28c680e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10adafaa0784025c42cd3a4859087b8dc7f6ef27bef7b8bb3b6739eb28c680e7->enter($__internal_10adafaa0784025c42cd3a4859087b8dc7f6ef27bef7b8bb3b6739eb28c680e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IKNSABlogBundle:Blog:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10adafaa0784025c42cd3a4859087b8dc7f6ef27bef7b8bb3b6739eb28c680e7->leave($__internal_10adafaa0784025c42cd3a4859087b8dc7f6ef27bef7b8bb3b6739eb28c680e7_prof);

    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9f12e695fa70b9a0d338264143200801e6857a696acb6469bc7ccd0677e46ebf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f12e695fa70b9a0d338264143200801e6857a696acb6469bc7ccd0677e46ebf->enter($__internal_9f12e695fa70b9a0d338264143200801e6857a696acb6469bc7ccd0677e46ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 4
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/scripts/vendor/angular/angular.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("angular-sanitize/angular-sanitize.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_9f12e695fa70b9a0d338264143200801e6857a696acb6469bc7ccd0677e46ebf->leave($__internal_9f12e695fa70b9a0d338264143200801e6857a696acb6469bc7ccd0677e46ebf_prof);

    }

    // line 8
    public function block_blogContent($context, array $blocks = array())
    {
        $__internal_063bb4b14c3b43b10f5b3d5697d0126a355ad646d99337975d8e9a162e48a7f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_063bb4b14c3b43b10f5b3d5697d0126a355ad646d99337975d8e9a162e48a7f5->enter($__internal_063bb4b14c3b43b10f5b3d5697d0126a355ad646d99337975d8e9a162e48a7f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blogContent"));

        // line 9
        echo "<div class=\"row\">
    <!-- Carousel Slideshow -->
    <div id=\"carousel-example\" class=\"carousel slide\" data-ride=\"carousel\">
        <!-- Carousel Indicators -->
        <ol class=\"carousel-indicators\">
            <li data-target=\"#carousel-example\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#carousel-example\" data-slide-to=\"1\"></li>
            <li data-target=\"#carousel-example\" data-slide-to=\"2\"></li>
        </ol>
        <div class=\"clearfix\"></div>
        <!-- End Carousel Indicators -->
        <!-- Carousel Images -->
        <div class=\"carousel-inner\">
            <div class=\"item active\">
                <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static/assets/img/slideshow/slide1.jpg"), "html", null, true);
        echo "\">
            </div>
            <div class=\"item\">
                <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static/assets/img/slideshow/slide2.jpg"), "html", null, true);
        echo "\">
            </div>
            <div class=\"item\">
                <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static/assets/img/slideshow/slide3.jpg"), "html", null, true);
        echo "\">
            </div>
            <div class=\"item\">
                <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static/assets/img/slideshow/slide4.jpg"), "html", null, true);
        echo "\">
            </div>
        </div>
        <!-- End Carousel Images -->
        <!-- Carousel Controls -->
        <a class=\"left carousel-control\" href=\"#carousel-example\" data-slide=\"prev\">
            <span class=\"glyphicon glyphicon-chevron-left\"></span>
        </a>
        <a class=\"right carousel-control\" href=\"#carousel-example\" data-slide=\"next\">
            <span class=\"glyphicon glyphicon-chevron-right\"></span>
        </a>
        <!-- End Carousel Controls -->
    </div>
    <!-- End Carousel Slideshow -->
</div>
</div>
<div class=\"container background-gray-lighter\">
    <div class=\"row\">
        <h2 class=\"animate fadeIn text-center margin-top-50\">Welcome to Enlighten</h2>
        <hr class=\"margin-top-15\">
        <p class=\"animate fadeIn text-center\">Enlighten offers you the canvas to turn your imagination in to a reality
            <br>giving you the perfect framework for your project!</p>
        <p class=\"text-center animate fadeInUp margin-bottom-50\">
            <button type=\"button\" class=\"btn btn-lg btn-primary\">View Details</button>
        </p>
    </div>
</div>
<div class=\"container\">
    <div class=\"row margin-vert-30\">
        <!-- Main Text -->
        <div class=\"col-md-9\">
            <h2>Lorem ipsum dolor</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                lobortis nisl ut aliquip ex ea commodo consequat.</p>
            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril
                delenit augue duis dolore te feugait nulla facilisi. Cras non sem sem, at eleifend mi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Curabitur
                eget nisl a risus.</p>
            <img class=\"visible-lg animate fadeInUp\" style=\"bottom: -50px; position: relative; left: 85px; margin-top: -20px;\" src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static/assets/img/frontpage/responsive_homepage.png"), "html", null, true);
        echo "\" alt=\"\">
        </div>
        <!-- End Main Text -->
        <!-- Side Column -->
        <div class=\"col-md-3\" ng-app=\"post\">
            <div ng-controller=\"PostController\">
                <h3 class=\"title\">Latest Post</h3>
                <div ng-repeat=\"post in posts\">
                    <h6 style=\"margin: 0;\"><i>Created by <b>";
        // line 77
        echo "{{ post.username }}";
        echo "</b></i></h6>
                    <p>
                        <small>Created <i>";
        // line 79
        echo "{{ post.createdAt.date }}";
        echo "</i></small>
                    </p>
                    <h4 style=\"margin: 0;\">";
        // line 81
        echo "{{ post.title }}";
        echo "</h4>
                    <hr>
                </div>
            </div>
        </div>
        <!-- End Side Column -->
    </div>
</div>
<div class=\"container background-gray-lighter\">
<div class=\"row row-no-margin\">
    <!-- Portfolio -->
    <ul class=\"portfolio-group\">
        <!-- Portfolio Item -->
        <li class=\"portfolio-item col-sm-3 col-xs-6 no-padding\">
            <a href=\"#\">
                <h3>Placerat facer possim</h3>
                <figure class=\"animate fadeInLeft animated\">
                    <img alt=\"image1\" src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static/assets/img/frontpage/image1.png"), "html", null, true);
        echo "\">
                    <figcaption>
                        <span style=\"color:#212121; \">Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.</span>
                    </figcaption>
                </figure>
            </a>
        </li>
        <!-- //Portfolio Item// -->
        <!-- Portfolio Item -->
        <li class=\"portfolio-item col-sm-3 col-xs-6 no-padding\">
            <a href=\"#\">
                <h3>Placerat facer possim</h3>
                <figure class=\"animate fadeInLeft animated\">
                    <img alt=\"image2\" src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static/assets/img/frontpage/image2.png"), "html", null, true);
        echo "\">
                    <figcaption>
                        <span style=\"color:#212121; \">Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.</span>
                    </figcaption>
                </figure>
            </a>
        </li>
        <!-- //Portfolio Item// -->
        <!-- Portfolio Item -->
        <li class=\"portfolio-item col-sm-3 col-xs-6 no-padding\">
            <a href=\"#\">
                <h3>Placerat facer possim</h3>
                <figure class=\"animate fadeInLeft animated\">
                    <img alt=\"image3\" src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static/assets/img/frontpage/image3.png"), "html", null, true);
        echo "\">
                    <figcaption>
                        <span style=\"color:#212121; \">Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.</span>
                    </figcaption>
                </figure>
            </a>
        </li>
        <!-- //Portfolio Item// -->
        <!-- Portfolio Item -->
        <li class=\"portfolio-item col-sm-3 col-xs-6 no-padding\">
            <a href=\"#\">
                <h3>Placerat facer possim</h3>
                <figure class=\"animate fadeInLeft animated\">
                    <img alt=\"image4\" src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static/assets/img/frontpage/image4.png"), "html", null, true);
        echo "\">
                    <figcaption>
                        <span style=\"color:#212121; \">Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.</span>
                    </figcaption>
                </figure>
            </a>
        </li>
        <!-- //Portfolio Item// -->
    </ul>
    <!-- End Portfolio -->
            </div>
";
        
        $__internal_063bb4b14c3b43b10f5b3d5697d0126a355ad646d99337975d8e9a162e48a7f5->leave($__internal_063bb4b14c3b43b10f5b3d5697d0126a355ad646d99337975d8e9a162e48a7f5_prof);

    }

    public function getTemplateName()
    {
        return "IKNSABlogBundle:Blog:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 137,  208 => 124,  192 => 111,  176 => 98,  156 => 81,  151 => 79,  146 => 77,  135 => 69,  95 => 32,  89 => 29,  83 => 26,  77 => 23,  61 => 9,  55 => 8,  46 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'IKNSABlogBundle::layout.html.twig' %}

{% block javascripts %}
    <script src=\"{{ asset('dist/scripts/vendor/angular/angular.min.js') }}\"></script>
    <script src=\"{{ asset('angular-sanitize/angular-sanitize.min.js') }}\"></script>
{% endblock %}

{% block blogContent %}
<div class=\"row\">
    <!-- Carousel Slideshow -->
    <div id=\"carousel-example\" class=\"carousel slide\" data-ride=\"carousel\">
        <!-- Carousel Indicators -->
        <ol class=\"carousel-indicators\">
            <li data-target=\"#carousel-example\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#carousel-example\" data-slide-to=\"1\"></li>
            <li data-target=\"#carousel-example\" data-slide-to=\"2\"></li>
        </ol>
        <div class=\"clearfix\"></div>
        <!-- End Carousel Indicators -->
        <!-- Carousel Images -->
        <div class=\"carousel-inner\">
            <div class=\"item active\">
                <img src=\"{{ asset('static/assets/img/slideshow/slide1.jpg') }}\">
            </div>
            <div class=\"item\">
                <img src=\"{{ asset('static/assets/img/slideshow/slide2.jpg') }}\">
            </div>
            <div class=\"item\">
                <img src=\"{{ asset('static/assets/img/slideshow/slide3.jpg') }}\">
            </div>
            <div class=\"item\">
                <img src=\"{{ asset('static/assets/img/slideshow/slide4.jpg') }}\">
            </div>
        </div>
        <!-- End Carousel Images -->
        <!-- Carousel Controls -->
        <a class=\"left carousel-control\" href=\"#carousel-example\" data-slide=\"prev\">
            <span class=\"glyphicon glyphicon-chevron-left\"></span>
        </a>
        <a class=\"right carousel-control\" href=\"#carousel-example\" data-slide=\"next\">
            <span class=\"glyphicon glyphicon-chevron-right\"></span>
        </a>
        <!-- End Carousel Controls -->
    </div>
    <!-- End Carousel Slideshow -->
</div>
</div>
<div class=\"container background-gray-lighter\">
    <div class=\"row\">
        <h2 class=\"animate fadeIn text-center margin-top-50\">Welcome to Enlighten</h2>
        <hr class=\"margin-top-15\">
        <p class=\"animate fadeIn text-center\">Enlighten offers you the canvas to turn your imagination in to a reality
            <br>giving you the perfect framework for your project!</p>
        <p class=\"text-center animate fadeInUp margin-bottom-50\">
            <button type=\"button\" class=\"btn btn-lg btn-primary\">View Details</button>
        </p>
    </div>
</div>
<div class=\"container\">
    <div class=\"row margin-vert-30\">
        <!-- Main Text -->
        <div class=\"col-md-9\">
            <h2>Lorem ipsum dolor</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                lobortis nisl ut aliquip ex ea commodo consequat.</p>
            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril
                delenit augue duis dolore te feugait nulla facilisi. Cras non sem sem, at eleifend mi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Curabitur
                eget nisl a risus.</p>
            <img class=\"visible-lg animate fadeInUp\" style=\"bottom: -50px; position: relative; left: 85px; margin-top: -20px;\" src=\"{{ asset('static/assets/img/frontpage/responsive_homepage.png') }}\" alt=\"\">
        </div>
        <!-- End Main Text -->
        <!-- Side Column -->
        <div class=\"col-md-3\" ng-app=\"post\">
            <div ng-controller=\"PostController\">
                <h3 class=\"title\">Latest Post</h3>
                <div ng-repeat=\"post in posts\">
                    <h6 style=\"margin: 0;\"><i>Created by <b>{{ '{{ post.username }}' }}</b></i></h6>
                    <p>
                        <small>Created <i>{{ '{{ post.createdAt.date }}' }}</i></small>
                    </p>
                    <h4 style=\"margin: 0;\">{{ '{{ post.title }}' }}</h4>
                    <hr>
                </div>
            </div>
        </div>
        <!-- End Side Column -->
    </div>
</div>
<div class=\"container background-gray-lighter\">
<div class=\"row row-no-margin\">
    <!-- Portfolio -->
    <ul class=\"portfolio-group\">
        <!-- Portfolio Item -->
        <li class=\"portfolio-item col-sm-3 col-xs-6 no-padding\">
            <a href=\"#\">
                <h3>Placerat facer possim</h3>
                <figure class=\"animate fadeInLeft animated\">
                    <img alt=\"image1\" src=\"{{ asset('static/assets/img/frontpage/image1.png') }}\">
                    <figcaption>
                        <span style=\"color:#212121; \">Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.</span>
                    </figcaption>
                </figure>
            </a>
        </li>
        <!-- //Portfolio Item// -->
        <!-- Portfolio Item -->
        <li class=\"portfolio-item col-sm-3 col-xs-6 no-padding\">
            <a href=\"#\">
                <h3>Placerat facer possim</h3>
                <figure class=\"animate fadeInLeft animated\">
                    <img alt=\"image2\" src=\"{{ asset('static/assets/img/frontpage/image2.png') }}\">
                    <figcaption>
                        <span style=\"color:#212121; \">Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.</span>
                    </figcaption>
                </figure>
            </a>
        </li>
        <!-- //Portfolio Item// -->
        <!-- Portfolio Item -->
        <li class=\"portfolio-item col-sm-3 col-xs-6 no-padding\">
            <a href=\"#\">
                <h3>Placerat facer possim</h3>
                <figure class=\"animate fadeInLeft animated\">
                    <img alt=\"image3\" src=\"{{ asset('static/assets/img/frontpage/image3.png') }}\">
                    <figcaption>
                        <span style=\"color:#212121; \">Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.</span>
                    </figcaption>
                </figure>
            </a>
        </li>
        <!-- //Portfolio Item// -->
        <!-- Portfolio Item -->
        <li class=\"portfolio-item col-sm-3 col-xs-6 no-padding\">
            <a href=\"#\">
                <h3>Placerat facer possim</h3>
                <figure class=\"animate fadeInLeft animated\">
                    <img alt=\"image4\" src=\"{{ asset('static/assets/img/frontpage/image4.png') }}\">
                    <figcaption>
                        <span style=\"color:#212121; \">Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.</span>
                    </figcaption>
                </figure>
            </a>
        </li>
        <!-- //Portfolio Item// -->
    </ul>
    <!-- End Portfolio -->
            </div>
{% endblock %}
", "IKNSABlogBundle:Blog:index.html.twig", "/var/www/symfony3/src/IKNSA/BlogBundle/Resources/views/Blog/index.html.twig");
    }
}
