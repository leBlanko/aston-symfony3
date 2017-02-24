<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_6b205ee4f4ff513b5f9d8796e2cba518e39d3946ca70bc939f03968d90f44a3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_a09ced917ca07395fe473d403247cb43cb68d5c61f914cf212edc623ddeb7cb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a09ced917ca07395fe473d403247cb43cb68d5c61f914cf212edc623ddeb7cb6->enter($__internal_a09ced917ca07395fe473d403247cb43cb68d5c61f914cf212edc623ddeb7cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a09ced917ca07395fe473d403247cb43cb68d5c61f914cf212edc623ddeb7cb6->leave($__internal_a09ced917ca07395fe473d403247cb43cb68d5c61f914cf212edc623ddeb7cb6_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_594102c60ab58f6dbd7e83ff229bd66ee45752fb8d76f7bb56bc99ea14df3393 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_594102c60ab58f6dbd7e83ff229bd66ee45752fb8d76f7bb56bc99ea14df3393->enter($__internal_594102c60ab58f6dbd7e83ff229bd66ee45752fb8d76f7bb56bc99ea14df3393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_594102c60ab58f6dbd7e83ff229bd66ee45752fb8d76f7bb56bc99ea14df3393->leave($__internal_594102c60ab58f6dbd7e83ff229bd66ee45752fb8d76f7bb56bc99ea14df3393_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/var/www/symfony3/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
