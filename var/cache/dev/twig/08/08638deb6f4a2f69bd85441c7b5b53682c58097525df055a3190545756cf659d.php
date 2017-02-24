<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_0b62ff85b8710e0defec368ceded8067ac66015f4fc0b033f9ce5679ae5841fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_98b15b8a5c914ed03e643fb61c2bb576a39ac8b58e1d23c9a9ff9e17e8e901d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98b15b8a5c914ed03e643fb61c2bb576a39ac8b58e1d23c9a9ff9e17e8e901d9->enter($__internal_98b15b8a5c914ed03e643fb61c2bb576a39ac8b58e1d23c9a9ff9e17e8e901d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_98b15b8a5c914ed03e643fb61c2bb576a39ac8b58e1d23c9a9ff9e17e8e901d9->leave($__internal_98b15b8a5c914ed03e643fb61c2bb576a39ac8b58e1d23c9a9ff9e17e8e901d9_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_50fe7cc69fb928891afef4c68557e1be24e190c442a4e391fa841185ceddb898 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50fe7cc69fb928891afef4c68557e1be24e190c442a4e391fa841185ceddb898->enter($__internal_50fe7cc69fb928891afef4c68557e1be24e190c442a4e391fa841185ceddb898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_50fe7cc69fb928891afef4c68557e1be24e190c442a4e391fa841185ceddb898->leave($__internal_50fe7cc69fb928891afef4c68557e1be24e190c442a4e391fa841185ceddb898_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
