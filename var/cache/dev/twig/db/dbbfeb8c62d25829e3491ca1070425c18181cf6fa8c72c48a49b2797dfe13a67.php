<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_3aceea30897c557e889f915e421bc2b13ec56a181b0106b74593b1cb7fc4de6c extends Twig_Template
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
        $__internal_5f80de57362eef95e28608024e914a61d9df7a87f11eb320de9d79c2a18e3511 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f80de57362eef95e28608024e914a61d9df7a87f11eb320de9d79c2a18e3511->enter($__internal_5f80de57362eef95e28608024e914a61d9df7a87f11eb320de9d79c2a18e3511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_5f80de57362eef95e28608024e914a61d9df7a87f11eb320de9d79c2a18e3511->leave($__internal_5f80de57362eef95e28608024e914a61d9df7a87f11eb320de9d79c2a18e3511_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  34 => 5,  32 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/var/www/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}