<?php

/* IKNSABlogBundle::layout.html.twig */
class __TwigTemplate_74bee0499ec369327bf4bbeef4fd15c6d6a3bf2b14e920edbf47b60d7b298b00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/blog.html.twig", "IKNSABlogBundle::layout.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "layouts/blog.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_57b0fa47b92ba39b27991b0ab762a04406ec3a1b4f4eb7d6685f019cfab5e2a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57b0fa47b92ba39b27991b0ab762a04406ec3a1b4f4eb7d6685f019cfab5e2a7->enter($__internal_57b0fa47b92ba39b27991b0ab762a04406ec3a1b4f4eb7d6685f019cfab5e2a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IKNSABlogBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57b0fa47b92ba39b27991b0ab762a04406ec3a1b4f4eb7d6685f019cfab5e2a7->leave($__internal_57b0fa47b92ba39b27991b0ab762a04406ec3a1b4f4eb7d6685f019cfab5e2a7_prof);

    }

    public function getTemplateName()
    {
        return "IKNSABlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layouts/blog.html.twig' %}", "IKNSABlogBundle::layout.html.twig", "/var/www/symfony3/src/IKNSA/BlogBundle/Resources/views/layout.html.twig");
    }
}
