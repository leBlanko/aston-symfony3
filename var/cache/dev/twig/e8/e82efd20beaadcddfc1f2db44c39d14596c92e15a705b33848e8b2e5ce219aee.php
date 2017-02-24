<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_a4c59ca027bda6398641ed4e1690dcb50d60272fc8e2722bac951cae18ad19b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_92c5f43982aec42402f27ca2c8001b6fe673e8abbdbfe72f1f1ee6892d9f7041 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92c5f43982aec42402f27ca2c8001b6fe673e8abbdbfe72f1f1ee6892d9f7041->enter($__internal_92c5f43982aec42402f27ca2c8001b6fe673e8abbdbfe72f1f1ee6892d9f7041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92c5f43982aec42402f27ca2c8001b6fe673e8abbdbfe72f1f1ee6892d9f7041->leave($__internal_92c5f43982aec42402f27ca2c8001b6fe673e8abbdbfe72f1f1ee6892d9f7041_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bf73772863a39654f4dfa4b9119234eee037e70c1e1f7e7c9e5f14918f5841a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf73772863a39654f4dfa4b9119234eee037e70c1e1f7e7c9e5f14918f5841a4->enter($__internal_bf73772863a39654f4dfa4b9119234eee037e70c1e1f7e7c9e5f14918f5841a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_bf73772863a39654f4dfa4b9119234eee037e70c1e1f7e7c9e5f14918f5841a4->leave($__internal_bf73772863a39654f4dfa4b9119234eee037e70c1e1f7e7c9e5f14918f5841a4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/var/www/symfony3/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
