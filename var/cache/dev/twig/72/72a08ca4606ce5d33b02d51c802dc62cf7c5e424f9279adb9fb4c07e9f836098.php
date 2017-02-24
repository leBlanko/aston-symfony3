<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_30ff59f33a0d6224271f048e8e2803e065252e1c88a40e5bc006e179481d6d2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_ccd2390601826081c57b5bd9137fa94dfacd6d5bab7751198da17792e060f471 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccd2390601826081c57b5bd9137fa94dfacd6d5bab7751198da17792e060f471->enter($__internal_ccd2390601826081c57b5bd9137fa94dfacd6d5bab7751198da17792e060f471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ccd2390601826081c57b5bd9137fa94dfacd6d5bab7751198da17792e060f471->leave($__internal_ccd2390601826081c57b5bd9137fa94dfacd6d5bab7751198da17792e060f471_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0ecbc329568b602891190d0bb0cbb1aed4197a53199ecbfb2e0296a27cf5a489 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ecbc329568b602891190d0bb0cbb1aed4197a53199ecbfb2e0296a27cf5a489->enter($__internal_0ecbc329568b602891190d0bb0cbb1aed4197a53199ecbfb2e0296a27cf5a489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_0ecbc329568b602891190d0bb0cbb1aed4197a53199ecbfb2e0296a27cf5a489->leave($__internal_0ecbc329568b602891190d0bb0cbb1aed4197a53199ecbfb2e0296a27cf5a489_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/var/www/symfony3/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
