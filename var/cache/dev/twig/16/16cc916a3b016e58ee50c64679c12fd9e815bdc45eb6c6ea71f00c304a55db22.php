<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_fa7fabdb69108bc72d6a70aeee0b778c1744cf4321cbf100f22cfbcbbeb21225 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_42f3a5dd314b0413b6bdfc3983a73bcae7e92fd01fd8249dec76b01bd12963ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42f3a5dd314b0413b6bdfc3983a73bcae7e92fd01fd8249dec76b01bd12963ad->enter($__internal_42f3a5dd314b0413b6bdfc3983a73bcae7e92fd01fd8249dec76b01bd12963ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42f3a5dd314b0413b6bdfc3983a73bcae7e92fd01fd8249dec76b01bd12963ad->leave($__internal_42f3a5dd314b0413b6bdfc3983a73bcae7e92fd01fd8249dec76b01bd12963ad_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9e43c6b44a6ddf9ef2c3582d8aa69ed69a3cabc32e108777869c6a10842fc6e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e43c6b44a6ddf9ef2c3582d8aa69ed69a3cabc32e108777869c6a10842fc6e3->enter($__internal_9e43c6b44a6ddf9ef2c3582d8aa69ed69a3cabc32e108777869c6a10842fc6e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_9e43c6b44a6ddf9ef2c3582d8aa69ed69a3cabc32e108777869c6a10842fc6e3->leave($__internal_9e43c6b44a6ddf9ef2c3582d8aa69ed69a3cabc32e108777869c6a10842fc6e3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/var/www/symfony3/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
