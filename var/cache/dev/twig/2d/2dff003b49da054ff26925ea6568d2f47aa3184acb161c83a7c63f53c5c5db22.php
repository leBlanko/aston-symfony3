<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e57b30ddd23499f889c856c794b1b33135deafc3f24491e5c00807618236b652 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c0a5cc748b603fb070c15b345dfc4e3753d4ac2630a5527386dd71622dc9eaaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0a5cc748b603fb070c15b345dfc4e3753d4ac2630a5527386dd71622dc9eaaf->enter($__internal_c0a5cc748b603fb070c15b345dfc4e3753d4ac2630a5527386dd71622dc9eaaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0a5cc748b603fb070c15b345dfc4e3753d4ac2630a5527386dd71622dc9eaaf->leave($__internal_c0a5cc748b603fb070c15b345dfc4e3753d4ac2630a5527386dd71622dc9eaaf_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_06c48964814674a175c31dba913df5da7f1c07ea3991e9f3a56c9bb8195da000 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06c48964814674a175c31dba913df5da7f1c07ea3991e9f3a56c9bb8195da000->enter($__internal_06c48964814674a175c31dba913df5da7f1c07ea3991e9f3a56c9bb8195da000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_06c48964814674a175c31dba913df5da7f1c07ea3991e9f3a56c9bb8195da000->leave($__internal_06c48964814674a175c31dba913df5da7f1c07ea3991e9f3a56c9bb8195da000_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_74635e74c9f09f81a6ecacdcff86dfb66acbf87ce47878ccfc368e8e230dba5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74635e74c9f09f81a6ecacdcff86dfb66acbf87ce47878ccfc368e8e230dba5c->enter($__internal_74635e74c9f09f81a6ecacdcff86dfb66acbf87ce47878ccfc368e8e230dba5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_74635e74c9f09f81a6ecacdcff86dfb66acbf87ce47878ccfc368e8e230dba5c->leave($__internal_74635e74c9f09f81a6ecacdcff86dfb66acbf87ce47878ccfc368e8e230dba5c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9cfa9a286cb0d0fa0f74c8a37f2424eeed4dce0f951a723c2a7bea52ab982ccc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cfa9a286cb0d0fa0f74c8a37f2424eeed4dce0f951a723c2a7bea52ab982ccc->enter($__internal_9cfa9a286cb0d0fa0f74c8a37f2424eeed4dce0f951a723c2a7bea52ab982ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_9cfa9a286cb0d0fa0f74c8a37f2424eeed4dce0f951a723c2a7bea52ab982ccc->leave($__internal_9cfa9a286cb0d0fa0f74c8a37f2424eeed4dce0f951a723c2a7bea52ab982ccc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
