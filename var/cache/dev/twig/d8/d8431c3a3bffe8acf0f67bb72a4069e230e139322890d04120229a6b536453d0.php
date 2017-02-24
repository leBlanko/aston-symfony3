<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_bc9a463b3319d3ad33d480da0f0b802098e3d3f59ae6411873b6215bbd53ec63 extends Twig_Template
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
        $__internal_cb48e1a486c7f4b3b7193c0d532d27ca690b97afe8e8aa2bd5a78fb48f4b5c00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb48e1a486c7f4b3b7193c0d532d27ca690b97afe8e8aa2bd5a78fb48f4b5c00->enter($__internal_cb48e1a486c7f4b3b7193c0d532d27ca690b97afe8e8aa2bd5a78fb48f4b5c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_cb48e1a486c7f4b3b7193c0d532d27ca690b97afe8e8aa2bd5a78fb48f4b5c00->leave($__internal_cb48e1a486c7f4b3b7193c0d532d27ca690b97afe8e8aa2bd5a78fb48f4b5c00_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
