<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_62bbb8bbcdae280c08b7ec519012024119886eb42a34066e68dba2aead4fb7d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f81f1c0a8c0a057e4bbce7503cc2cb6015c1b61784ef68df12e8c9fbed7aa8a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f81f1c0a8c0a057e4bbce7503cc2cb6015c1b61784ef68df12e8c9fbed7aa8a7->enter($__internal_f81f1c0a8c0a057e4bbce7503cc2cb6015c1b61784ef68df12e8c9fbed7aa8a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_f81f1c0a8c0a057e4bbce7503cc2cb6015c1b61784ef68df12e8c9fbed7aa8a7->leave($__internal_f81f1c0a8c0a057e4bbce7503cc2cb6015c1b61784ef68df12e8c9fbed7aa8a7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
