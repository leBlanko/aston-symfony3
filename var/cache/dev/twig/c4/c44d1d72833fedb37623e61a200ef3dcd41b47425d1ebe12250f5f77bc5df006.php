<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_eefc3d76e3eb04f468379b924cdea843c432b16a07c01916c255b985bb4e2d91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c023f94e50195fb7f5be4a345b7601c8f34f288edd0bddc58535ae898a83044d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c023f94e50195fb7f5be4a345b7601c8f34f288edd0bddc58535ae898a83044d->enter($__internal_c023f94e50195fb7f5be4a345b7601c8f34f288edd0bddc58535ae898a83044d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c023f94e50195fb7f5be4a345b7601c8f34f288edd0bddc58535ae898a83044d->leave($__internal_c023f94e50195fb7f5be4a345b7601c8f34f288edd0bddc58535ae898a83044d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_29fcf48abc3a1c7f7e5e274de54ac1f5e6237faad7c02746a1fcf5b82f595643 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29fcf48abc3a1c7f7e5e274de54ac1f5e6237faad7c02746a1fcf5b82f595643->enter($__internal_29fcf48abc3a1c7f7e5e274de54ac1f5e6237faad7c02746a1fcf5b82f595643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_29fcf48abc3a1c7f7e5e274de54ac1f5e6237faad7c02746a1fcf5b82f595643->leave($__internal_29fcf48abc3a1c7f7e5e274de54ac1f5e6237faad7c02746a1fcf5b82f595643_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_47df00509de44588609a1b8c30e933ee860c89cd977f4e7558a570df5302fbae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47df00509de44588609a1b8c30e933ee860c89cd977f4e7558a570df5302fbae->enter($__internal_47df00509de44588609a1b8c30e933ee860c89cd977f4e7558a570df5302fbae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_47df00509de44588609a1b8c30e933ee860c89cd977f4e7558a570df5302fbae->leave($__internal_47df00509de44588609a1b8c30e933ee860c89cd977f4e7558a570df5302fbae_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
