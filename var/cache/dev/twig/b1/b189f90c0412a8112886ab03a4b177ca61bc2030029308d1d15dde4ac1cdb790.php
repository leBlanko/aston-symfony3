<?php

/* IKNSABlogBundle:post:index.html.twig */
class __TwigTemplate_3f7712b2591e4369b5ba4fe15fa57b5bc86ed77aad96126f198cd7fc29dce40f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "IKNSABlogBundle:post:index.html.twig", 1);
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
        $__internal_1bdb5fa3e19873a559df5595a276c8d141a3060141fd0b83b1c2ceed4e6d2ee3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bdb5fa3e19873a559df5595a276c8d141a3060141fd0b83b1c2ceed4e6d2ee3->enter($__internal_1bdb5fa3e19873a559df5595a276c8d141a3060141fd0b83b1c2ceed4e6d2ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IKNSABlogBundle:post:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1bdb5fa3e19873a559df5595a276c8d141a3060141fd0b83b1c2ceed4e6d2ee3->leave($__internal_1bdb5fa3e19873a559df5595a276c8d141a3060141fd0b83b1c2ceed4e6d2ee3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_716819275d30f1c13c35c1ba0c780b646086ffe650eae655693bbcb941e5545a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_716819275d30f1c13c35c1ba0c780b646086ffe650eae655693bbcb941e5545a->enter($__internal_716819275d30f1c13c35c1ba0c780b646086ffe650eae655693bbcb941e5545a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
<link href=\"https://fonts.googleapis.com/css?family=Luckiest+Guy\" rel=\"stylesheet\">
<link href=\"https://fonts.googleapis.com/css?family=Luckiest+Guy\" rel=\"stylesheet\">

<div class=\"container\" style=\"background-color:#ecf0f1; border-radius:20px; height:100%;\">
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 10, $this->getSourceContext()); })()), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
            // line 11
            echo "        <div id=\"notice\" class=\"notice alert alert-notice\">
            ";
            // line 12
            echo twig_escape_filter($this->env, $context["flash"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
    <div class=\"row\">
      <div class=\"col-sm-offset-4 col-sm-4\" style=\"font-family: 'Luckiest Guy', cursive;\"><h1>Tony News</h1></div>
    </div>

    <br/>

    <div class=\"row\">
      <div class=\"col-sm-offset-4 col-sm-4\">
        <a href=\"http://www.hostingpics.net/viewer.php?id=783364IMG4191.jpg\"><img src=\"http://img11.hostingpics.net/thumbs/mini_783364IMG4191.jpg\" alt=\"Heberger image\" style=\"width:200px;transform: rotate(90deg);\" /></a>
      </div>
    </div>

   <br/><br/>
    <table class=\"table-bordered\">
        <thead>
            <tr>
                <th>Miniature</th>
                <th>Edition</th>
                <th>Titre</th>
                <th>Date de création</th>
                <th>Auteur</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new Twig_Error_Runtime('Variable "posts" does not exist.', 41, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 42
            echo "            <tr>
              <td>
                  ";
            // line 44
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "id", array()) && twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "extension", array()))) {
                // line 45
                echo "                      <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((("uploads/pictures/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "id", array())) . ".") . twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "extension", array()))), "html", null, true);
                echo "\" style=\"width:75px;max-height:75px;\">
                  ";
            } else {
                // line 47
                echo "                      <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/pictures/default.jpeg"), "html", null, true);
                echo "\" style=\"width:75px;max-height:75px;\">
                  ";
            }
            // line 49
            echo "              </td>
                <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "summary", array()), "html", null, true);
            echo "</td>
                <td style=\"font-family: 'Luckiest Guy', cursive;\">";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 52
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "createdAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "createdAt", array()), "d-m-Y H:i"), "html", null, true);
            }
            echo "</td>
                <td>
                    ";
            // line 54
            if ($context["post"]) {
                // line 55
                echo "                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "username", array()), "html", null, true);
                echo "
                    ";
            } else {
                // line 57
                echo "                        <i>Inconnu</i>
                    ";
            }
            // line 59
            echo "                </td>
                <td>
                    <ul>
                        <li>
                            <a class=\"btn btn-info btn-xs fa fa-book\" href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "id", array()))), "html", null, true);
            echo "\"> Voir</a>
                        </li>
                        <li>
                            <a class=\"btn btn-success btn-xs fa fa-pencil\" href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "id", array()))), "html", null, true);
            echo "\"> Editer</a>
                        </li>
                        <!-- <li>
                            <a class=\"btn btn-danger btn-xs\" href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a>
                        </li> -->
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a class=\"btn btn-primary\" href=\"";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_new");
        echo "\">Ajouter un article</a>
        </li>
    </ul>
</div>
";
        
        $__internal_716819275d30f1c13c35c1ba0c780b646086ffe650eae655693bbcb941e5545a->leave($__internal_716819275d30f1c13c35c1ba0c780b646086ffe650eae655693bbcb941e5545a_prof);

    }

    public function getTemplateName()
    {
        return "IKNSABlogBundle:post:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 80,  174 => 75,  162 => 69,  156 => 66,  150 => 63,  144 => 59,  140 => 57,  134 => 55,  132 => 54,  125 => 52,  121 => 51,  117 => 50,  114 => 49,  108 => 47,  102 => 45,  100 => 44,  96 => 42,  92 => 41,  64 => 15,  55 => 12,  52 => 11,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

<link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
<link href=\"https://fonts.googleapis.com/css?family=Luckiest+Guy\" rel=\"stylesheet\">
<link href=\"https://fonts.googleapis.com/css?family=Luckiest+Guy\" rel=\"stylesheet\">

<div class=\"container\" style=\"background-color:#ecf0f1; border-radius:20px; height:100%;\">
    {% for flash in app.session.flashBag.get('notice') %}
        <div id=\"notice\" class=\"notice alert alert-notice\">
            {{ flash }}
        </div>
    {% endfor %}

    <div class=\"row\">
      <div class=\"col-sm-offset-4 col-sm-4\" style=\"font-family: 'Luckiest Guy', cursive;\"><h1>Tony News</h1></div>
    </div>

    <br/>

    <div class=\"row\">
      <div class=\"col-sm-offset-4 col-sm-4\">
        <a href=\"http://www.hostingpics.net/viewer.php?id=783364IMG4191.jpg\"><img src=\"http://img11.hostingpics.net/thumbs/mini_783364IMG4191.jpg\" alt=\"Heberger image\" style=\"width:200px;transform: rotate(90deg);\" /></a>
      </div>
    </div>

   <br/><br/>
    <table class=\"table-bordered\">
        <thead>
            <tr>
                <th>Miniature</th>
                <th>Edition</th>
                <th>Titre</th>
                <th>Date de création</th>
                <th>Auteur</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for post in posts %}
            <tr>
              <td>
                  {% if post.id and post.extension %}
                      <img src=\"{{ asset('uploads/pictures/' ~ post.id ~ '.' ~ post.extension) }}\" style=\"width:75px;max-height:75px;\">
                  {% else %}
                      <img src=\"{{ asset('uploads/pictures/default.jpeg') }}\" style=\"width:75px;max-height:75px;\">
                  {% endif %}
              </td>
                <td>{{ post.summary }}</td>
                <td style=\"font-family: 'Luckiest Guy', cursive;\">{{ post.title }}</td>
                <td>{% if post.createdAt %}{{ post.createdAt|date('d-m-Y H:i') }}{% endif %}</td>
                <td>
                    {% if post %}
                        {{ post.username }}
                    {% else %}
                        <i>Inconnu</i>
                    {% endif %}
                </td>
                <td>
                    <ul>
                        <li>
                            <a class=\"btn btn-info btn-xs fa fa-book\" href=\"{{ path('post_show', { 'id': post.id }) }}\"> Voir</a>
                        </li>
                        <li>
                            <a class=\"btn btn-success btn-xs fa fa-pencil\" href=\"{{ path('post_edit', { 'id': post.id }) }}\"> Editer</a>
                        </li>
                        <!-- <li>
                            <a class=\"btn btn-danger btn-xs\" href=\"{{ path('post_delete', { 'id': post.id }) }}\">Supprimer</a>
                        </li> -->
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a class=\"btn btn-primary\" href=\"{{ path('post_new') }}\">Ajouter un article</a>
        </li>
    </ul>
</div>
{% endblock %}
", "IKNSABlogBundle:post:index.html.twig", "/var/www/symfony3/src/IKNSA/BlogBundle/Resources/views/post/index.html.twig");
    }
}
