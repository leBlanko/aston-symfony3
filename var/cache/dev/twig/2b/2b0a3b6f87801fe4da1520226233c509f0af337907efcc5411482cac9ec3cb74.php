<?php

/* IKNSAAppBundle:Default:index.html.twig */
class __TwigTemplate_1fc2c064d23f6eeeab8989b9b959e57a00250cbab2e692435c3cbebbf5bc540a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IKNSAAppBundle::layout.html.twig", "IKNSAAppBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IKNSAAppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_443df6090a613e4d438ec40d81d75132adefaae4e853e75faf716e5a818553be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_443df6090a613e4d438ec40d81d75132adefaae4e853e75faf716e5a818553be->enter($__internal_443df6090a613e4d438ec40d81d75132adefaae4e853e75faf716e5a818553be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IKNSAAppBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_443df6090a613e4d438ec40d81d75132adefaae4e853e75faf716e5a818553be->leave($__internal_443df6090a613e4d438ec40d81d75132adefaae4e853e75faf716e5a818553be_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_ea51e7e6e4ee3d166a50474f528a38dc987cab34229ec1a7286247c36222fd5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea51e7e6e4ee3d166a50474f528a38dc987cab34229ec1a7286247c36222fd5d->enter($__internal_ea51e7e6e4ee3d166a50474f528a38dc987cab34229ec1a7286247c36222fd5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <h1>Header from index</h1>
    This part has been overriden
    <hr>
";
        
        $__internal_ea51e7e6e4ee3d166a50474f528a38dc987cab34229ec1a7286247c36222fd5d->leave($__internal_ea51e7e6e4ee3d166a50474f528a38dc987cab34229ec1a7286247c36222fd5d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_cea98f27ddcc9fd46352356c8bc7463e1eee8f0b356b9a3190ffc477add5a614 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cea98f27ddcc9fd46352356c8bc7463e1eee8f0b356b9a3190ffc477add5a614->enter($__internal_cea98f27ddcc9fd46352356c8bc7463e1eee8f0b356b9a3190ffc477add5a614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    Hello World!

    <hr>

    <h3>File inclusion IKNSAAppBundle:Default:fileToInclude.html.twig</h3>
    ";
        // line 15
        $this->loadTemplate("IKNSAAppBundle:Default:fileToInclude.html.twig", "IKNSAAppBundle:Default:index.html.twig", 15)->display($context);
        // line 16
        echo "
    <hr>

    <h3>Filters</h3>
    <h5>Date</h5>
    ";
        // line 21
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", null, "Europe/Paris"), "html", null, true);
        echo "

    <br><br>
    ";
        // line 24
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "D d/m/y H:i:s", "Europe/Paris"), "html", null, true);
        echo "

    <h5>Strings</h5>

    ";
        // line 28
        $context["myArray"] = array(0 => "alfred", 1 => "<i>hitchcock</i>", 2 => "arsène", 3 => "lupin");
        // line 29
        echo "
    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["myArray"]) || array_key_exists("myArray", $context) ? $context["myArray"] : (function () { throw new Twig_Error_Runtime('Variable "myArray" does not exist.', 30, $this->getSourceContext()); })()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["nom"]) {
            // line 31
            echo "
    ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
            echo " =>
                        <b>nom upper </b>: ";
            // line 33
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $context["nom"]), "html", null, true);
            echo " ||

                        <b>nom raw </b>: ";
            // line 35
            echo $context["nom"];
            echo " ||

                        <b>nom raw title </b>: ";
            // line 37
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $context["nom"]), "html", null, true);
            echo " ||

                        <b>nom striptags </b>: ";
            // line 39
            echo twig_escape_filter($this->env, strip_tags($context["nom"]), "html", null, true);
            echo " ||

                        <b>nom striptags length</b>: ";
            // line 41
            echo twig_escape_filter($this->env, twig_length_filter($this->env, strip_tags($context["nom"])), "html", null, true);
            echo " ||

                        <b>nom length </b>: ";
            // line 43
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $context["nom"]), "html", null, true);
            echo " ||

                        <br><br>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nom'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
    <hr>

    <h3>Looping on an array</h3>
    ";
        // line 51
        $context["myArray"] = array(0 => "alfred", 1 => "hitchcock", 2 => "Arsène", 3 => "Lupin");
        // line 52
        echo "
    ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["myArray"]) || array_key_exists("myArray", $context) ? $context["myArray"] : (function () { throw new Twig_Error_Runtime('Variable "myArray" does not exist.', 53, $this->getSourceContext()); })()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["nom"]) {
            // line 54
            echo "
    ";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
            echo " => ";
            echo twig_escape_filter($this->env, $context["nom"], "html", null, true);
            echo "<br>

    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nom'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "
    <hr>

    <h3>Looping with step 2</h3>
    <!-- Vous pouvez enlever le step=2 ou changer la valeur -->
    ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 10, 2));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 64
            echo "    <!-- A noter que contrairement à l'index des tableaux en PHP, loop.index commence par 1 -->
    ";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
            echo " => ";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "<br>

    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "
    <hr>

    <h3>Setting variable</h3>
    ";
        // line 72
        $context["myVariable"] = "Contenu d'une variable définie en tiwg";
        // line 73
        echo "
    ";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["myVariable"]) || array_key_exists("myVariable", $context) ? $context["myVariable"] : (function () { throw new Twig_Error_Runtime('Variable "myVariable" does not exist.', 74, $this->getSourceContext()); })()), "html", null, true);
        echo "
";
        
        $__internal_cea98f27ddcc9fd46352356c8bc7463e1eee8f0b356b9a3190ffc477add5a614->leave($__internal_cea98f27ddcc9fd46352356c8bc7463e1eee8f0b356b9a3190ffc477add5a614_prof);

    }

    public function getTemplateName()
    {
        return "IKNSAAppBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 74,  262 => 73,  260 => 72,  254 => 68,  235 => 65,  232 => 64,  215 => 63,  208 => 58,  189 => 55,  186 => 54,  169 => 53,  166 => 52,  164 => 51,  158 => 47,  140 => 43,  135 => 41,  130 => 39,  125 => 37,  120 => 35,  115 => 33,  111 => 32,  108 => 31,  91 => 30,  88 => 29,  86 => 28,  79 => 24,  73 => 21,  66 => 16,  64 => 15,  57 => 10,  51 => 9,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'IKNSAAppBundle::layout.html.twig' %}

{% block header %}
    <h1>Header from index</h1>
    This part has been overriden
    <hr>
{% endblock %}

{% block body %}
    Hello World!

    <hr>

    <h3>File inclusion IKNSAAppBundle:Default:fileToInclude.html.twig</h3>
    {% include 'IKNSAAppBundle:Default:fileToInclude.html.twig' %}

    <hr>

    <h3>Filters</h3>
    <h5>Date</h5>
    {{ \"now\"|date(null, \"Europe/Paris\") }}

    <br><br>
    {{ \"now\"|date('D d/m/y H:i:s', \"Europe/Paris\") }}

    <h5>Strings</h5>

    {% set myArray = [\"alfred\", '<i>hitchcock</i>', 'arsène', 'lupin'] %}

    {% for nom in myArray %}

    {{ loop.index }} =>
                        <b>nom upper </b>: {{ nom|upper }} ||

                        <b>nom raw </b>: {{ nom|raw }} ||

                        <b>nom raw title </b>: {{ nom|raw|title }} ||

                        <b>nom striptags </b>: {{ nom|striptags }} ||

                        <b>nom striptags length</b>: {{ nom|striptags|length }} ||

                        <b>nom length </b>: {{ nom|length }} ||

                        <br><br>
    {% endfor %}

    <hr>

    <h3>Looping on an array</h3>
    {% set myArray = [\"alfred\", 'hitchcock', 'Arsène', 'Lupin'] %}

    {% for nom in myArray %}

    {{ loop.index }} => {{ nom }}<br>

    {% endfor %}

    <hr>

    <h3>Looping with step 2</h3>
    <!-- Vous pouvez enlever le step=2 ou changer la valeur -->
    {% for i in range(0, 10, step=2) %}
    <!-- A noter que contrairement à l'index des tableaux en PHP, loop.index commence par 1 -->
    {{ loop.index }} => {{ i }}<br>

    {% endfor %}

    <hr>

    <h3>Setting variable</h3>
    {% set myVariable = \"Contenu d'une variable définie en tiwg\" %}

    {{ myVariable }}
{% endblock %}
", "IKNSAAppBundle:Default:index.html.twig", "/var/www/symfony3/src/IKNSA/AppBundle/Resources/views/Default/index.html.twig");
    }
}
