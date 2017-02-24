<?php

/* :comment:show.html.twig */
class __TwigTemplate_cdfba7625ad79d0517605c804c492bc0ada075a12d3738552334a3264c31f61e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":comment:show.html.twig", 1);
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
        $__internal_ffb6ff84322963a9260e11ecc5c2440bb3f5c6753a934a11c782018abfc795c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffb6ff84322963a9260e11ecc5c2440bb3f5c6753a934a11c782018abfc795c7->enter($__internal_ffb6ff84322963a9260e11ecc5c2440bb3f5c6753a934a11c782018abfc795c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comment:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffb6ff84322963a9260e11ecc5c2440bb3f5c6753a934a11c782018abfc795c7->leave($__internal_ffb6ff84322963a9260e11ecc5c2440bb3f5c6753a934a11c782018abfc795c7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b244842a57732fd0379d45b8610128b6c0b1fc7d5d4af8c9c3cdb1cc208164d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b244842a57732fd0379d45b8610128b6c0b1fc7d5d4af8c9c3cdb1cc208164d->enter($__internal_6b244842a57732fd0379d45b8610128b6c0b1fc7d5d4af8c9c3cdb1cc208164d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Comment</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new Twig_Error_Runtime('Variable "comment" does not exist.', 10, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Comment</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new Twig_Error_Runtime('Variable "comment" does not exist.', 14, $this->getSourceContext()); })()), "comment", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Createdat</th>
                <td>";
        // line 18
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new Twig_Error_Runtime('Variable "comment" does not exist.', 18, $this->getSourceContext()); })()), "createdAt", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new Twig_Error_Runtime('Variable "comment" does not exist.', 18, $this->getSourceContext()); })()), "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comment_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comment_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new Twig_Error_Runtime('Variable "comment" does not exist.', 28, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 31, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 33, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_6b244842a57732fd0379d45b8610128b6c0b1fc7d5d4af8c9c3cdb1cc208164d->leave($__internal_6b244842a57732fd0379d45b8610128b6c0b1fc7d5d4af8c9c3cdb1cc208164d_prof);

    }

    public function getTemplateName()
    {
        return ":comment:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 33,  86 => 31,  80 => 28,  74 => 25,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Comment</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ comment.id }}</td>
            </tr>
            <tr>
                <th>Comment</th>
                <td>{{ comment.comment }}</td>
            </tr>
            <tr>
                <th>Createdat</th>
                <td>{% if comment.createdAt %}{{ comment.createdAt|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('comment_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('comment_edit', { 'id': comment.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":comment:show.html.twig", "/var/www/symfony3/app/Resources/views/comment/show.html.twig");
    }
}
