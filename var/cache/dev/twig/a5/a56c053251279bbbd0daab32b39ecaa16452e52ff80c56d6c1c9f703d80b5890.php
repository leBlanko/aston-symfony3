<?php

/* IKNSABlogBundle:post:new.html.twig */
class __TwigTemplate_2d826a81d55959db16532448b61f22c5d3472cdd85076958d6a501bc9adcfa6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "IKNSABlogBundle:post:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9608f469e779a68476f316efa8a2c72ae223c009d0d5652d519e38731becf529 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9608f469e779a68476f316efa8a2c72ae223c009d0d5652d519e38731becf529->enter($__internal_9608f469e779a68476f316efa8a2c72ae223c009d0d5652d519e38731becf529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IKNSABlogBundle:post:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9608f469e779a68476f316efa8a2c72ae223c009d0d5652d519e38731becf529->leave($__internal_9608f469e779a68476f316efa8a2c72ae223c009d0d5652d519e38731becf529_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cfc4ef5a9c17e7f5ed9c16cc1c9b56341cc04dc98e48714960fd4b15e0730d29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfc4ef5a9c17e7f5ed9c16cc1c9b56341cc04dc98e48714960fd4b15e0730d29->enter($__internal_cfc4ef5a9c17e7f5ed9c16cc1c9b56341cc04dc98e48714960fd4b15e0730d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Post creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), 'widget');
        echo "
        <input type=\"submit\" value=\"Créer\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_index");
        echo "\">Retour à la liste</a>
        </li>
    </ul>
";
        
        $__internal_cfc4ef5a9c17e7f5ed9c16cc1c9b56341cc04dc98e48714960fd4b15e0730d29->leave($__internal_cfc4ef5a9c17e7f5ed9c16cc1c9b56341cc04dc98e48714960fd4b15e0730d29_prof);

    }

    public function getTemplateName()
    {
        return "IKNSABlogBundle:post:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Post creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Créer\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('post_index') }}\">Retour à la liste</a>
        </li>
    </ul>
{% endblock %}
", "IKNSABlogBundle:post:new.html.twig", "/var/www/symfony3/src/IKNSA/BlogBundle/Resources/views/post/new.html.twig");
    }
}
