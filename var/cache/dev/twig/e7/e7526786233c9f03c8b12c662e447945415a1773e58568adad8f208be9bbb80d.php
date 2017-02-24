<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_5731fc7f8ca10977092da69b6159f1486764323bb4c18140bbe0e08fcdafc7fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_46285979aa4c43f3eeb7731957d40c15c2799ab24aa38627657f3fe383944b5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46285979aa4c43f3eeb7731957d40c15c2799ab24aa38627657f3fe383944b5c->enter($__internal_46285979aa4c43f3eeb7731957d40c15c2799ab24aa38627657f3fe383944b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46285979aa4c43f3eeb7731957d40c15c2799ab24aa38627657f3fe383944b5c->leave($__internal_46285979aa4c43f3eeb7731957d40c15c2799ab24aa38627657f3fe383944b5c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5f62a35732ee0031f6279aed87281cef5f746866d92d130d52a218d24d2a80e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f62a35732ee0031f6279aed87281cef5f746866d92d130d52a218d24d2a80e1->enter($__internal_5f62a35732ee0031f6279aed87281cef5f746866d92d130d52a218d24d2a80e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_5f62a35732ee0031f6279aed87281cef5f746866d92d130d52a218d24d2a80e1->leave($__internal_5f62a35732ee0031f6279aed87281cef5f746866d92d130d52a218d24d2a80e1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/var/www/symfony3/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
