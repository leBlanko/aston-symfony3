<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_f3abbda0de9a70345a68c3a2bd0dec41a5f844491635e4f8cc4c45b9b515e627 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f0191a7c6858d6f8f66c70f5161a07c18f3ade10410f854f0dc24e1299f7dfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f0191a7c6858d6f8f66c70f5161a07c18f3ade10410f854f0dc24e1299f7dfb->enter($__internal_5f0191a7c6858d6f8f66c70f5161a07c18f3ade10410f854f0dc24e1299f7dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_5f0191a7c6858d6f8f66c70f5161a07c18f3ade10410f854f0dc24e1299f7dfb->leave($__internal_5f0191a7c6858d6f8f66c70f5161a07c18f3ade10410f854f0dc24e1299f7dfb_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_9a907c33859b97d68c0f9c4fd20652a21496cbb512974d9958489db7d7ad5440 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a907c33859b97d68c0f9c4fd20652a21496cbb512974d9958489db7d7ad5440->enter($__internal_9a907c33859b97d68c0f9c4fd20652a21496cbb512974d9958489db7d7ad5440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_9a907c33859b97d68c0f9c4fd20652a21496cbb512974d9958489db7d7ad5440->leave($__internal_9a907c33859b97d68c0f9c4fd20652a21496cbb512974d9958489db7d7ad5440_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_787bed830d57f29ef366cdad0d55731f1f6da59d28a54ac13ccf08ee9d95c977 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_787bed830d57f29ef366cdad0d55731f1f6da59d28a54ac13ccf08ee9d95c977->enter($__internal_787bed830d57f29ef366cdad0d55731f1f6da59d28a54ac13ccf08ee9d95c977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_787bed830d57f29ef366cdad0d55731f1f6da59d28a54ac13ccf08ee9d95c977->leave($__internal_787bed830d57f29ef366cdad0d55731f1f6da59d28a54ac13ccf08ee9d95c977_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_040263a67c01f55171a6111f153ee8e1ecec121872004e2748472aca9c817372 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_040263a67c01f55171a6111f153ee8e1ecec121872004e2748472aca9c817372->enter($__internal_040263a67c01f55171a6111f153ee8e1ecec121872004e2748472aca9c817372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_040263a67c01f55171a6111f153ee8e1ecec121872004e2748472aca9c817372->leave($__internal_040263a67c01f55171a6111f153ee8e1ecec121872004e2748472aca9c817372_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  58 => 10,  52 => 8,  45 => 4,  39 => 2,  32 => 13,  30 => 8,  27 => 7,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/var/www/symfony3/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
