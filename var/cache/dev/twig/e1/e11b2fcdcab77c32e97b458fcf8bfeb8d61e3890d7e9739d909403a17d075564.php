<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_c961e585c273e88f050380c17a124c03886e20cd531911a41fbeffd3599f1160 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_70aa9ea368506c41f16fc163fc359fe5c28b095bd888d30968c933405b117c24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70aa9ea368506c41f16fc163fc359fe5c28b095bd888d30968c933405b117c24->enter($__internal_70aa9ea368506c41f16fc163fc359fe5c28b095bd888d30968c933405b117c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70aa9ea368506c41f16fc163fc359fe5c28b095bd888d30968c933405b117c24->leave($__internal_70aa9ea368506c41f16fc163fc359fe5c28b095bd888d30968c933405b117c24_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_032450dc552e84dbfc3d008691cdc255563bac696c1db089ae822340d1348a95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_032450dc552e84dbfc3d008691cdc255563bac696c1db089ae822340d1348a95->enter($__internal_032450dc552e84dbfc3d008691cdc255563bac696c1db089ae822340d1348a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_032450dc552e84dbfc3d008691cdc255563bac696c1db089ae822340d1348a95->leave($__internal_032450dc552e84dbfc3d008691cdc255563bac696c1db089ae822340d1348a95_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/var/www/symfony3/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
