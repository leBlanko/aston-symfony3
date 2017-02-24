<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_580329528c694fc8ed529488570356f5c2e518509a581765fa963c8d19163ea7 extends Twig_Template
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
        $__internal_be0fdb8cca862afd3a7b38b39a2be2697d6480964686dc963eb75b74fba689c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be0fdb8cca862afd3a7b38b39a2be2697d6480964686dc963eb75b74fba689c4->enter($__internal_be0fdb8cca862afd3a7b38b39a2be2697d6480964686dc963eb75b74fba689c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_be0fdb8cca862afd3a7b38b39a2be2697d6480964686dc963eb75b74fba689c4->leave($__internal_be0fdb8cca862afd3a7b38b39a2be2697d6480964686dc963eb75b74fba689c4_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_6ce6b74056670a2b52622654dfdd71e7caa088889df342d98424e378128be545 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ce6b74056670a2b52622654dfdd71e7caa088889df342d98424e378128be545->enter($__internal_6ce6b74056670a2b52622654dfdd71e7caa088889df342d98424e378128be545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_6ce6b74056670a2b52622654dfdd71e7caa088889df342d98424e378128be545->leave($__internal_6ce6b74056670a2b52622654dfdd71e7caa088889df342d98424e378128be545_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a75e67fa95e600c939cbb5e4cd73db7f8998f05c340774ce26446d501dd3acad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a75e67fa95e600c939cbb5e4cd73db7f8998f05c340774ce26446d501dd3acad->enter($__internal_a75e67fa95e600c939cbb5e4cd73db7f8998f05c340774ce26446d501dd3acad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_a75e67fa95e600c939cbb5e4cd73db7f8998f05c340774ce26446d501dd3acad->leave($__internal_a75e67fa95e600c939cbb5e4cd73db7f8998f05c340774ce26446d501dd3acad_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c06b9cf1bfce13a44446760f327dc61b4b62500a20709abce983d1e6fb594025 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c06b9cf1bfce13a44446760f327dc61b4b62500a20709abce983d1e6fb594025->enter($__internal_c06b9cf1bfce13a44446760f327dc61b4b62500a20709abce983d1e6fb594025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c06b9cf1bfce13a44446760f327dc61b4b62500a20709abce983d1e6fb594025->leave($__internal_c06b9cf1bfce13a44446760f327dc61b4b62500a20709abce983d1e6fb594025_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/var/www/symfony3/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
