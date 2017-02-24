<?php

/* IKNSAAppBundle::layout.html.twig */
class __TwigTemplate_b460833a65e826ff8c2958e5764d03828bd049c912196a57a51b6376ceed6cee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'navigation' => array($this, 'block_navigation'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e64a4398c97a3a8f150eaf7f2834273bab43e9e3d3002c92ae456a80f0d01e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e64a4398c97a3a8f150eaf7f2834273bab43e9e3d3002c92ae456a80f0d01e8->enter($__internal_9e64a4398c97a3a8f150eaf7f2834273bab43e9e3d3002c92ae456a80f0d01e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IKNSAAppBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>Layout Testing</title>
</head>
<body>
    ";
        // line 7
        $this->displayBlock('header', $context, $blocks);
        // line 11
        echo "
    ";
        // line 12
        $this->displayBlock('navigation', $context, $blocks);
        // line 18
        echo "
    ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 20
        echo "
</body>
</html>";
        
        $__internal_9e64a4398c97a3a8f150eaf7f2834273bab43e9e3d3002c92ae456a80f0d01e8->leave($__internal_9e64a4398c97a3a8f150eaf7f2834273bab43e9e3d3002c92ae456a80f0d01e8_prof);

    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        $__internal_1c844881bc15a3195ab54d63e4835a0fb6ecf5bb1863caef9a7330cdb9622332 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c844881bc15a3195ab54d63e4835a0fb6ecf5bb1863caef9a7330cdb9622332->enter($__internal_1c844881bc15a3195ab54d63e4835a0fb6ecf5bb1863caef9a7330cdb9622332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 8
        echo "        <h1>Header</h1>
        <hr>
    ";
        
        $__internal_1c844881bc15a3195ab54d63e4835a0fb6ecf5bb1863caef9a7330cdb9622332->leave($__internal_1c844881bc15a3195ab54d63e4835a0fb6ecf5bb1863caef9a7330cdb9622332_prof);

    }

    // line 12
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_b87a3e14ac30c4490df4da7e6dc6e48dd9b53c521b31949af29a5e6c877e92b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b87a3e14ac30c4490df4da7e6dc6e48dd9b53c521b31949af29a5e6c877e92b3->enter($__internal_b87a3e14ac30c4490df4da7e6dc6e48dd9b53c521b31949af29a5e6c877e92b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 13
        echo "        <h3>navigation</h3>
        ";
        // line 14
        $this->loadTemplate("IKNSAAppBundle:Default:navigation.html.twig", "IKNSAAppBundle::layout.html.twig", 14)->display($context);
        // line 15
        echo "
        <hr>
    ";
        
        $__internal_b87a3e14ac30c4490df4da7e6dc6e48dd9b53c521b31949af29a5e6c877e92b3->leave($__internal_b87a3e14ac30c4490df4da7e6dc6e48dd9b53c521b31949af29a5e6c877e92b3_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_efc52c3ccfdc4ede77c2942b5399ad0b07ce8260e2b2391c3ee723a04d4b467f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efc52c3ccfdc4ede77c2942b5399ad0b07ce8260e2b2391c3ee723a04d4b467f->enter($__internal_efc52c3ccfdc4ede77c2942b5399ad0b07ce8260e2b2391c3ee723a04d4b467f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_efc52c3ccfdc4ede77c2942b5399ad0b07ce8260e2b2391c3ee723a04d4b467f->leave($__internal_efc52c3ccfdc4ede77c2942b5399ad0b07ce8260e2b2391c3ee723a04d4b467f_prof);

    }

    public function getTemplateName()
    {
        return "IKNSAAppBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  89 => 19,  80 => 15,  78 => 14,  75 => 13,  69 => 12,  60 => 8,  54 => 7,  45 => 20,  43 => 19,  40 => 18,  38 => 12,  35 => 11,  33 => 7,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <title>Layout Testing</title>
</head>
<body>
    {% block header %}
        <h1>Header</h1>
        <hr>
    {% endblock %}

    {% block navigation %}
        <h3>navigation</h3>
        {% include 'IKNSAAppBundle:Default:navigation.html.twig' %}

        <hr>
    {% endblock %}

    {% block body %}{% endblock %}

</body>
</html>", "IKNSAAppBundle::layout.html.twig", "/var/www/symfony3/src/IKNSA/AppBundle/Resources/views/layout.html.twig");
    }
}
