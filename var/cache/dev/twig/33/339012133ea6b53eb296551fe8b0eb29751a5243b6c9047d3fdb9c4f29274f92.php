<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_9eb60d1d4ab10b5fd3cf6887c2bde4fc6ffeb2ee7ea81b8ff9989ae03af49594 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_4236a6869656e82a18d314d9d8ee8fa9b32acf26b4d06db8a47ab6e7d5138110 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4236a6869656e82a18d314d9d8ee8fa9b32acf26b4d06db8a47ab6e7d5138110->enter($__internal_4236a6869656e82a18d314d9d8ee8fa9b32acf26b4d06db8a47ab6e7d5138110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4236a6869656e82a18d314d9d8ee8fa9b32acf26b4d06db8a47ab6e7d5138110->leave($__internal_4236a6869656e82a18d314d9d8ee8fa9b32acf26b4d06db8a47ab6e7d5138110_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2ff4cf786de7b432e377eede7bc0360234f5a1b6c55f858aee0c5a717f680483 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ff4cf786de7b432e377eede7bc0360234f5a1b6c55f858aee0c5a717f680483->enter($__internal_2ff4cf786de7b432e377eede7bc0360234f5a1b6c55f858aee0c5a717f680483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_2ff4cf786de7b432e377eede7bc0360234f5a1b6c55f858aee0c5a717f680483->leave($__internal_2ff4cf786de7b432e377eede7bc0360234f5a1b6c55f858aee0c5a717f680483_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/var/www/symfony3/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
