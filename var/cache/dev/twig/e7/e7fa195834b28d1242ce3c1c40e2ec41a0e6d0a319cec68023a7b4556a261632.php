<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_e99c2fb98c8125cbcac303ea75336751519988ac2b8c6b38b8f8476dec1d8001 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_4aefecde1e95ede1f01e0613b4fd1a4d09b481ac101af71883b6f7178a396ca1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aefecde1e95ede1f01e0613b4fd1a4d09b481ac101af71883b6f7178a396ca1->enter($__internal_4aefecde1e95ede1f01e0613b4fd1a4d09b481ac101af71883b6f7178a396ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4aefecde1e95ede1f01e0613b4fd1a4d09b481ac101af71883b6f7178a396ca1->leave($__internal_4aefecde1e95ede1f01e0613b4fd1a4d09b481ac101af71883b6f7178a396ca1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f314560696a470e5c60b3acc93fcc080ed383e87ca1ff17f84c93995248016e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f314560696a470e5c60b3acc93fcc080ed383e87ca1ff17f84c93995248016e2->enter($__internal_f314560696a470e5c60b3acc93fcc080ed383e87ca1ff17f84c93995248016e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_f314560696a470e5c60b3acc93fcc080ed383e87ca1ff17f84c93995248016e2->leave($__internal_f314560696a470e5c60b3acc93fcc080ed383e87ca1ff17f84c93995248016e2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/var/www/symfony3/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
