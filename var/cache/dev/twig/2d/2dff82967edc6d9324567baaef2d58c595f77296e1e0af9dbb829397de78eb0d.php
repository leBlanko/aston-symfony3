<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_9160d5897a04577e00d75e58950f21bac7f3008b6ef433d86d65b23d8aa749a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_433167f26c1b88f951aaf40f10f8b1769792e56d9509975a16ffe9d0b84ee2f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_433167f26c1b88f951aaf40f10f8b1769792e56d9509975a16ffe9d0b84ee2f5->enter($__internal_433167f26c1b88f951aaf40f10f8b1769792e56d9509975a16ffe9d0b84ee2f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_433167f26c1b88f951aaf40f10f8b1769792e56d9509975a16ffe9d0b84ee2f5->leave($__internal_433167f26c1b88f951aaf40f10f8b1769792e56d9509975a16ffe9d0b84ee2f5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3364cc30290b3db5c0be1a9624c8807ef4f9589037e9d70346f8dcb9b2181084 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3364cc30290b3db5c0be1a9624c8807ef4f9589037e9d70346f8dcb9b2181084->enter($__internal_3364cc30290b3db5c0be1a9624c8807ef4f9589037e9d70346f8dcb9b2181084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_3364cc30290b3db5c0be1a9624c8807ef4f9589037e9d70346f8dcb9b2181084->leave($__internal_3364cc30290b3db5c0be1a9624c8807ef4f9589037e9d70346f8dcb9b2181084_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/var/www/symfony3/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
