<?php

/* :comment:new.html.twig */
class __TwigTemplate_7f53b068f61c3b4fb690a4c8dff50db2b3fdbcb1ed2fc72089915115b6ad7535 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":comment:new.html.twig", 1);
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
        $__internal_1986ecfaf1fcd25f17534628a8dde4a4878bc1170e448297c0f126d88ce1163e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1986ecfaf1fcd25f17534628a8dde4a4878bc1170e448297c0f126d88ce1163e->enter($__internal_1986ecfaf1fcd25f17534628a8dde4a4878bc1170e448297c0f126d88ce1163e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comment:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1986ecfaf1fcd25f17534628a8dde4a4878bc1170e448297c0f126d88ce1163e->leave($__internal_1986ecfaf1fcd25f17534628a8dde4a4878bc1170e448297c0f126d88ce1163e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c15ca83ce56788aea687a3b9b2ce960d35f692342d6f303389272090a6a95e9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c15ca83ce56788aea687a3b9b2ce960d35f692342d6f303389272090a6a95e9c->enter($__internal_c15ca83ce56788aea687a3b9b2ce960d35f692342d6f303389272090a6a95e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Création commentaire</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comment_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_c15ca83ce56788aea687a3b9b2ce960d35f692342d6f303389272090a6a95e9c->leave($__internal_c15ca83ce56788aea687a3b9b2ce960d35f692342d6f303389272090a6a95e9c_prof);

    }

    public function getTemplateName()
    {
        return ":comment:new.html.twig";
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
    <h1>Création commentaire</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Créer\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('comment_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":comment:new.html.twig", "/var/www/symfony3/app/Resources/views/comment/new.html.twig");
    }
}
