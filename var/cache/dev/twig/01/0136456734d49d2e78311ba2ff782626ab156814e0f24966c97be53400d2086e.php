<?php

/* IKNSABlogBundle:post:show.html.twig */
class __TwigTemplate_2ebd8e5c3af2af5c343c92e46cde77febdaa16d85b0940b96b51e08e2397857f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "IKNSABlogBundle:post:show.html.twig", 1);
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
        $__internal_9b23a7e75acf83a0498523a9cdfcaa31da7d8ab437615ccb558b03778af908d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b23a7e75acf83a0498523a9cdfcaa31da7d8ab437615ccb558b03778af908d0->enter($__internal_9b23a7e75acf83a0498523a9cdfcaa31da7d8ab437615ccb558b03778af908d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IKNSABlogBundle:post:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b23a7e75acf83a0498523a9cdfcaa31da7d8ab437615ccb558b03778af908d0->leave($__internal_9b23a7e75acf83a0498523a9cdfcaa31da7d8ab437615ccb558b03778af908d0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_13cafc992d1a2595b402d5f63174b218ec94e9c4bf38e7e65cdbf33ec6f73d2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13cafc992d1a2595b402d5f63174b218ec94e9c4bf38e7e65cdbf33ec6f73d2b->enter($__internal_13cafc992d1a2595b402d5f63174b218ec94e9c4bf38e7e65cdbf33ec6f73d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

  <div class=\"container\" style=\"background-color:#ecf0f1; border-radius:20px; height:100%;\">
    <h1 style=\"font-family: 'Luckiest Guy', cursive;\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 7, $this->getSourceContext()); })()), "title", array()), "html", null, true);
        echo "</h1>

    <table>
        <tbody>
            <tr>
                <th></th>
                <td class=\"col-sm-12\">
                    ";
        // line 14
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 14, $this->getSourceContext()); })()), "getImage", array())) {
            // line 15
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/pictures/" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 15, $this->getSourceContext()); })()), "getImage", array()))), "html", null, true);
            echo "\" style=\"width:400px;max-height:400px;border-radius:10px;\">
                    ";
        } else {
            // line 17
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/pictures/default.jpeg"), "html", null, true);
            echo "\" style=\"width:75px;max-height:75px;\">
                    ";
        }
        // line 19
        echo "                </td>
            </tr>
            <tr>
              <div class=\"row\">
                <th></th>
              </div>
                <td style=\"\">";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 25, $this->getSourceContext()); })()), "content", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Crée le</th>
                <td>";
        // line 29
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 29, $this->getSourceContext()); })()), "createdAt", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 29, $this->getSourceContext()); })()), "createdAt", array()), "d-m-Y H:i"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th> par </th>
                <td>
                    ";
        // line 34
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 34, $this->getSourceContext()); })()), "user", array())) {
            // line 35
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 35, $this->getSourceContext()); })()), "user", array()), "username", array()), "html", null, true);
            echo "
                    ";
        } else {
            // line 37
            echo "                        <i>Inconnu</i>
                    ";
        }
        // line 39
        echo "                </td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_index");
        echo "\">Retour à la liste des articles</a>
        </li>
        <li>
            <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 49, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\">Editer</a>
        </li>
        <li>
            ";
        // line 52
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 52, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Supprimer\">
            ";
        // line 54
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 54, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>

    <hr>
    <h1>Commentaires</h1>
    ";
        // line 60
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 61
            echo "        ";
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 61, $this->getSourceContext()); })()), 'form_start');
            echo "
            ";
            // line 62
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), "comment", array()), 'widget');
            echo "
            <div class=\"row\">
            <img src=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/pictures/like.png"), "html", null, true);
            echo "\" style=\"width:40px;max-height:40px;\">
            <img src=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/pictures/dislike.png"), "html", null, true);
            echo "\" style=\"width:70px;max-height:70px;\">
            </div>
            ";
            // line 67
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 67, $this->getSourceContext()); })()), "like", array()), 'widget', array("attr" => array("img" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/pictures/like.png"), "class" => "like-picture")));
            echo "
            <input type=\"submit\" value=\"Ajouter\" />
        ";
            // line 69
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 69, $this->getSourceContext()); })()), 'form_end');
            echo "
    ";
        }
        // line 71
        echo "

    <h3>Liste des commentaires</h3>
    ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new Twig_Error_Runtime('Variable "comments" does not exist.', 74, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 75
            echo "        <hr>
        ";
            // line 76
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "like", array()) == "1")) {
                // line 77
                echo "        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/pictures/like.png"), "html", null, true);
                echo "\" style=\"width:40px;max-height:40px;\">
        ";
            } else {
                // line 79
                echo "        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/pictures/dislike.png"), "html", null, true);
                echo "\" style=\"width:40px;max-height:40px;\">
        ";
            }
            // line 81
            echo "        <i>Posté par <b>";
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "user", array()), "username", array())), "html", null, true);
            echo "</b> le <em>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "createdAt", array()), "date", array()), "d/m/y h:i"), "html", null, true);
            echo "</em></i>
        <p>";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "comment", array()), "html", null, true);
            echo "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "</div>
";
        
        $__internal_13cafc992d1a2595b402d5f63174b218ec94e9c4bf38e7e65cdbf33ec6f73d2b->leave($__internal_13cafc992d1a2595b402d5f63174b218ec94e9c4bf38e7e65cdbf33ec6f73d2b_prof);

    }

    public function getTemplateName()
    {
        return "IKNSABlogBundle:post:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 84,  205 => 82,  198 => 81,  192 => 79,  186 => 77,  184 => 76,  181 => 75,  177 => 74,  172 => 71,  167 => 69,  162 => 67,  157 => 65,  153 => 64,  148 => 62,  143 => 61,  141 => 60,  132 => 54,  127 => 52,  121 => 49,  115 => 46,  106 => 39,  102 => 37,  96 => 35,  94 => 34,  84 => 29,  77 => 25,  69 => 19,  63 => 17,  57 => 15,  55 => 14,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}


  <div class=\"container\" style=\"background-color:#ecf0f1; border-radius:20px; height:100%;\">
    <h1 style=\"font-family: 'Luckiest Guy', cursive;\">{{ post.title }}</h1>

    <table>
        <tbody>
            <tr>
                <th></th>
                <td class=\"col-sm-12\">
                    {% if post.getImage %}
                        <img src=\"{{ asset('uploads/pictures/' ~ post.getImage) }}\" style=\"width:400px;max-height:400px;border-radius:10px;\">
                    {% else %}
                        <img src=\"{{ asset('uploads/pictures/default.jpeg') }}\" style=\"width:75px;max-height:75px;\">
                    {% endif %}
                </td>
            </tr>
            <tr>
              <div class=\"row\">
                <th></th>
              </div>
                <td style=\"\">{{ post.content }}</td>
            </tr>
            <tr>
                <th>Crée le</th>
                <td>{% if post.createdAt %}{{ post.createdAt|date('d-m-Y H:i') }}{% endif %}</td>
            </tr>
            <tr>
                <th> par </th>
                <td>
                    {% if post.user %}
                        {{ post.user.username }}
                    {% else %}
                        <i>Inconnu</i>
                    {% endif %}
                </td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('post_index') }}\">Retour à la liste des articles</a>
        </li>
        <li>
            <a href=\"{{ path('post_edit', { 'id': post.id }) }}\">Editer</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Supprimer\">
            {{ form_end(delete_form) }}
        </li>
    </ul>

    <hr>
    <h1>Commentaires</h1>
    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
        {{ form_start(form) }}
            {{ form_widget(form.comment) }}
            <div class=\"row\">
            <img src=\"{{ asset('uploads/pictures/like.png') }}\" style=\"width:40px;max-height:40px;\">
            <img src=\"{{ asset('uploads/pictures/dislike.png') }}\" style=\"width:70px;max-height:70px;\">
            </div>
            {{ form_widget(form.like , {'attr' : { 'img' : asset('uploads/pictures/like.png'), 'class' : 'like-picture' } }) }}
            <input type=\"submit\" value=\"Ajouter\" />
        {{ form_end(form) }}
    {% endif %}


    <h3>Liste des commentaires</h3>
    {% for comment in comments %}
        <hr>
        {% if(comment.like == \"1\") %}
        <img src=\"{{ asset('uploads/pictures/like.png') }}\" style=\"width:40px;max-height:40px;\">
        {%else %}
        <img src=\"{{ asset('uploads/pictures/dislike.png') }}\" style=\"width:40px;max-height:40px;\">
        {% endif %}
        <i>Posté par <b>{{ comment.user.username|title }}</b> le <em>{{ comment.createdAt.date|date('d/m/y h:i') }}</em></i>
        <p>{{ comment.comment }}</p>
    {% endfor %}
</div>
{% endblock %}
", "IKNSABlogBundle:post:show.html.twig", "/var/www/symfony3/src/IKNSA/BlogBundle/Resources/views/post/show.html.twig");
    }
}
