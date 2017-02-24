<?php

/* :comment:index.html.twig */
class __TwigTemplate_c8c70c670856be6acc2f2ccc416f23cb70fb421be4f75f8be4ce0e6513470200 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":comment:index.html.twig", 1);
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
        $__internal_3d4eb20281e6291e8ef0fe498b8e7026dbaa1c01cbbe358e09d2cb5f2ee47036 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d4eb20281e6291e8ef0fe498b8e7026dbaa1c01cbbe358e09d2cb5f2ee47036->enter($__internal_3d4eb20281e6291e8ef0fe498b8e7026dbaa1c01cbbe358e09d2cb5f2ee47036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comment:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d4eb20281e6291e8ef0fe498b8e7026dbaa1c01cbbe358e09d2cb5f2ee47036->leave($__internal_3d4eb20281e6291e8ef0fe498b8e7026dbaa1c01cbbe358e09d2cb5f2ee47036_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0df882b3a147dad12e99894f55ec0382bdbea179b264721bd6525654ef8252b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0df882b3a147dad12e99894f55ec0382bdbea179b264721bd6525654ef8252b8->enter($__internal_0df882b3a147dad12e99894f55ec0382bdbea179b264721bd6525654ef8252b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Comment list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Commentaires</th>
                <th>Crée le</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new Twig_Error_Runtime('Variable "comments" does not exist.', 16, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comment_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "comment", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "createdAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comment_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "id", array()))), "html", null, true);
            echo "\">Voir</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comment_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "id", array()))), "html", null, true);
            echo "\">Editer</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comment_new");
        echo "\">Ajouter</a>
        </li>
    </ul>
";
        
        $__internal_0df882b3a147dad12e99894f55ec0382bdbea179b264721bd6525654ef8252b8->leave($__internal_0df882b3a147dad12e99894f55ec0382bdbea179b264721bd6525654ef8252b8_prof);

    }

    public function getTemplateName()
    {
        return ":comment:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 38,  98 => 33,  86 => 27,  80 => 24,  71 => 20,  67 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Comment list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Commentaires</th>
                <th>Crée le</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for comment in comments %}
            <tr>
                <td><a href=\"{{ path('comment_show', { 'id': comment.id }) }}\">{{ comment.id }}</a></td>
                <td>{{ comment.comment }}</td>
                <td>{% if comment.createdAt %}{{ comment.createdAt|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('comment_show', { 'id': comment.id }) }}\">Voir</a>
                        </li>
                        <li>
                            <a href=\"{{ path('comment_edit', { 'id': comment.id }) }}\">Editer</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('comment_new') }}\">Ajouter</a>
        </li>
    </ul>
{% endblock %}
", ":comment:index.html.twig", "/var/www/symfony3/app/Resources/views/comment/index.html.twig");
    }
}
