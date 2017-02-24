<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_bfdbf3d78654b9e1c07ae8f1cbe6d324ea887356de82e98004ac68a0442ec56f extends Twig_Template
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
        $__internal_6c51d7a5bff5c794bacadfa9d605275ea2c95fbbd7f05e657c87bf8b79340172 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c51d7a5bff5c794bacadfa9d605275ea2c95fbbd7f05e657c87bf8b79340172->enter($__internal_6c51d7a5bff5c794bacadfa9d605275ea2c95fbbd7f05e657c87bf8b79340172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_6c51d7a5bff5c794bacadfa9d605275ea2c95fbbd7f05e657c87bf8b79340172->leave($__internal_6c51d7a5bff5c794bacadfa9d605275ea2c95fbbd7f05e657c87bf8b79340172_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/var/www/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
