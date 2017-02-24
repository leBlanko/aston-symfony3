<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_a86bd702e1653d0ac0d6720ea8be1c4acd768587641b17b063245e9c11e2c7c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_fed2e4a51186db204d53a5da46bab2c3953c6b03e94386db4fbee7fbbc065c25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fed2e4a51186db204d53a5da46bab2c3953c6b03e94386db4fbee7fbbc065c25->enter($__internal_fed2e4a51186db204d53a5da46bab2c3953c6b03e94386db4fbee7fbbc065c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fed2e4a51186db204d53a5da46bab2c3953c6b03e94386db4fbee7fbbc065c25->leave($__internal_fed2e4a51186db204d53a5da46bab2c3953c6b03e94386db4fbee7fbbc065c25_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e314184ff9889a8c5e952151cae227c1b829b22b1d1a0e5547027be963198d3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e314184ff9889a8c5e952151cae227c1b829b22b1d1a0e5547027be963198d3a->enter($__internal_e314184ff9889a8c5e952151cae227c1b829b22b1d1a0e5547027be963198d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_e314184ff9889a8c5e952151cae227c1b829b22b1d1a0e5547027be963198d3a->leave($__internal_e314184ff9889a8c5e952151cae227c1b829b22b1d1a0e5547027be963198d3a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/var/www/symfony3/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
