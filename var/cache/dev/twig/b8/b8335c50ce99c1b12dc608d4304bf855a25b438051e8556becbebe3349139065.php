<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_de6efc14ab1a62deaf06eede932e75e835399205f93629e4ec3c93bf4d1a8410 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_8f75b21ac72a608fe12db9d58b7d94c0c30d99f1a7f9f8380ecacf983b304b05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f75b21ac72a608fe12db9d58b7d94c0c30d99f1a7f9f8380ecacf983b304b05->enter($__internal_8f75b21ac72a608fe12db9d58b7d94c0c30d99f1a7f9f8380ecacf983b304b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f75b21ac72a608fe12db9d58b7d94c0c30d99f1a7f9f8380ecacf983b304b05->leave($__internal_8f75b21ac72a608fe12db9d58b7d94c0c30d99f1a7f9f8380ecacf983b304b05_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_85fc47cf7cb5882b4291e951040091a26932a42b2d93d5681c34da35d30108ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85fc47cf7cb5882b4291e951040091a26932a42b2d93d5681c34da35d30108ed->enter($__internal_85fc47cf7cb5882b4291e951040091a26932a42b2d93d5681c34da35d30108ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_85fc47cf7cb5882b4291e951040091a26932a42b2d93d5681c34da35d30108ed->leave($__internal_85fc47cf7cb5882b4291e951040091a26932a42b2d93d5681c34da35d30108ed_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_015ce53efc30d9203c75ffeb9e52a03e9b301c6476dcd47d7372574d5f4d63f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_015ce53efc30d9203c75ffeb9e52a03e9b301c6476dcd47d7372574d5f4d63f1->enter($__internal_015ce53efc30d9203c75ffeb9e52a03e9b301c6476dcd47d7372574d5f4d63f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 8, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_015ce53efc30d9203c75ffeb9e52a03e9b301c6476dcd47d7372574d5f4d63f1->leave($__internal_015ce53efc30d9203c75ffeb9e52a03e9b301c6476dcd47d7372574d5f4d63f1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1525dbd95dab21a7c2091ec832396c6f0011a63418fd13bb785c27f5dc8ae9f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1525dbd95dab21a7c2091ec832396c6f0011a63418fd13bb785c27f5dc8ae9f0->enter($__internal_1525dbd95dab21a7c2091ec832396c6f0011a63418fd13bb785c27f5dc8ae9f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_1525dbd95dab21a7c2091ec832396c6f0011a63418fd13bb785c27f5dc8ae9f0->leave($__internal_1525dbd95dab21a7c2091ec832396c6f0011a63418fd13bb785c27f5dc8ae9f0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
