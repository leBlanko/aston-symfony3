<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_2442ed95783a6c3319950a333fe8199e7482042a44f618f3f3cc3fd1fb126eb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_1842d633bce4319e963ba0f4a44ebc688f9658c7ab8d6a162fed5abb9f2a2281 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1842d633bce4319e963ba0f4a44ebc688f9658c7ab8d6a162fed5abb9f2a2281->enter($__internal_1842d633bce4319e963ba0f4a44ebc688f9658c7ab8d6a162fed5abb9f2a2281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1842d633bce4319e963ba0f4a44ebc688f9658c7ab8d6a162fed5abb9f2a2281->leave($__internal_1842d633bce4319e963ba0f4a44ebc688f9658c7ab8d6a162fed5abb9f2a2281_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_452c9a46d5be1388b6f7d3a72f3cd543f705480575687b2c779047bc37ad2eac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_452c9a46d5be1388b6f7d3a72f3cd543f705480575687b2c779047bc37ad2eac->enter($__internal_452c9a46d5be1388b6f7d3a72f3cd543f705480575687b2c779047bc37ad2eac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_452c9a46d5be1388b6f7d3a72f3cd543f705480575687b2c779047bc37ad2eac->leave($__internal_452c9a46d5be1388b6f7d3a72f3cd543f705480575687b2c779047bc37ad2eac_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/var/www/symfony3/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
