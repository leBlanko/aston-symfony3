<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_a4f2da5f744c5663fc8543d32972960715fda0f5493c340b2e178d5ebb72ccb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_2622b0b62e89cd0e797033613cc2a38bfe065edfa7710df7d2629b217058cc15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2622b0b62e89cd0e797033613cc2a38bfe065edfa7710df7d2629b217058cc15->enter($__internal_2622b0b62e89cd0e797033613cc2a38bfe065edfa7710df7d2629b217058cc15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2622b0b62e89cd0e797033613cc2a38bfe065edfa7710df7d2629b217058cc15->leave($__internal_2622b0b62e89cd0e797033613cc2a38bfe065edfa7710df7d2629b217058cc15_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_764174cfd7f14b31e72209cc4e925444738f7a60a3b72f10661745e9205dde8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_764174cfd7f14b31e72209cc4e925444738f7a60a3b72f10661745e9205dde8f->enter($__internal_764174cfd7f14b31e72209cc4e925444738f7a60a3b72f10661745e9205dde8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_764174cfd7f14b31e72209cc4e925444738f7a60a3b72f10661745e9205dde8f->leave($__internal_764174cfd7f14b31e72209cc4e925444738f7a60a3b72f10661745e9205dde8f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/var/www/symfony3/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
