<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_43c88f2387885de758eb9736a172f8e2ba5c2acf90722011df0f2c4eb911130c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_7e036d3bc1172fb280ff90ca9b1b27bbbf2b5d5d8c4248039007efbcf3d56587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e036d3bc1172fb280ff90ca9b1b27bbbf2b5d5d8c4248039007efbcf3d56587->enter($__internal_7e036d3bc1172fb280ff90ca9b1b27bbbf2b5d5d8c4248039007efbcf3d56587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e036d3bc1172fb280ff90ca9b1b27bbbf2b5d5d8c4248039007efbcf3d56587->leave($__internal_7e036d3bc1172fb280ff90ca9b1b27bbbf2b5d5d8c4248039007efbcf3d56587_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c932c8291e78a6e63f3111fd5bfa15c0a571f72925d5b9efac6c4d41233f4127 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c932c8291e78a6e63f3111fd5bfa15c0a571f72925d5b9efac6c4d41233f4127->enter($__internal_c932c8291e78a6e63f3111fd5bfa15c0a571f72925d5b9efac6c4d41233f4127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c932c8291e78a6e63f3111fd5bfa15c0a571f72925d5b9efac6c4d41233f4127->leave($__internal_c932c8291e78a6e63f3111fd5bfa15c0a571f72925d5b9efac6c4d41233f4127_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6cad8ff9603f970191dd9fdbea044c21fac3802fa2ff047e43f5823632b50330 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cad8ff9603f970191dd9fdbea044c21fac3802fa2ff047e43f5823632b50330->enter($__internal_6cad8ff9603f970191dd9fdbea044c21fac3802fa2ff047e43f5823632b50330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6cad8ff9603f970191dd9fdbea044c21fac3802fa2ff047e43f5823632b50330->leave($__internal_6cad8ff9603f970191dd9fdbea044c21fac3802fa2ff047e43f5823632b50330_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_83729554d2b6d3777611b1cd934a4696de5a2c67a9458dbcfdcf15bacb30946e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83729554d2b6d3777611b1cd934a4696de5a2c67a9458dbcfdcf15bacb30946e->enter($__internal_83729554d2b6d3777611b1cd934a4696de5a2c67a9458dbcfdcf15bacb30946e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_83729554d2b6d3777611b1cd934a4696de5a2c67a9458dbcfdcf15bacb30946e->leave($__internal_83729554d2b6d3777611b1cd934a4696de5a2c67a9458dbcfdcf15bacb30946e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
