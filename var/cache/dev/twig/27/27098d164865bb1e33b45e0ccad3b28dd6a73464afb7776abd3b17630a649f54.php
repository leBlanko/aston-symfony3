<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_2db75cf25ac7182766e1a57b602b15d10436864f673eab4460045f98025aed83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_942819c08125e31093d3c001b5190b26ee57099199419f13f3a97ce01d950d77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_942819c08125e31093d3c001b5190b26ee57099199419f13f3a97ce01d950d77->enter($__internal_942819c08125e31093d3c001b5190b26ee57099199419f13f3a97ce01d950d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_942819c08125e31093d3c001b5190b26ee57099199419f13f3a97ce01d950d77->leave($__internal_942819c08125e31093d3c001b5190b26ee57099199419f13f3a97ce01d950d77_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ffe57d6cef6845a56a6ba20b09d310df2af86d200b72f45668bec0884544ab7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffe57d6cef6845a56a6ba20b09d310df2af86d200b72f45668bec0884544ab7b->enter($__internal_ffe57d6cef6845a56a6ba20b09d310df2af86d200b72f45668bec0884544ab7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_ffe57d6cef6845a56a6ba20b09d310df2af86d200b72f45668bec0884544ab7b->leave($__internal_ffe57d6cef6845a56a6ba20b09d310df2af86d200b72f45668bec0884544ab7b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/var/www/symfony3/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
