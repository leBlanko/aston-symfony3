<?php

/* base.html.twig */
class __TwigTemplate_6529893593af1e71ea103b33721ce554e83d841cfe884088e23ffb37dbdda3c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9593c4cfd62a5bea9916eeb6472b76df412b989ddfece4326f7cd16c68b84eab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9593c4cfd62a5bea9916eeb6472b76df412b989ddfece4326f7cd16c68b84eab->enter($__internal_9593c4cfd62a5bea9916eeb6472b76df412b989ddfece4326f7cd16c68b84eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        <link href=\"https://fonts.googleapis.com/css?family=Luckiest+Guy\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Luckiest+Guy\" rel=\"stylesheet\">
        <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\">
    </head>
    <body style=\"background-color:#3498db;\">
        ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "    </body>
</html>
";
        
        $__internal_9593c4cfd62a5bea9916eeb6472b76df412b989ddfece4326f7cd16c68b84eab->leave($__internal_9593c4cfd62a5bea9916eeb6472b76df412b989ddfece4326f7cd16c68b84eab_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8a9b0996e3652ee927d536065005a7078dc2aeb400484f299991a4875486b2c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a9b0996e3652ee927d536065005a7078dc2aeb400484f299991a4875486b2c0->enter($__internal_8a9b0996e3652ee927d536065005a7078dc2aeb400484f299991a4875486b2c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8a9b0996e3652ee927d536065005a7078dc2aeb400484f299991a4875486b2c0->leave($__internal_8a9b0996e3652ee927d536065005a7078dc2aeb400484f299991a4875486b2c0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_68a9275cc391071b57cf7e10c3cc0b4876bc2ef0715a79422a5c3739f5579467 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68a9275cc391071b57cf7e10c3cc0b4876bc2ef0715a79422a5c3739f5579467->enter($__internal_68a9275cc391071b57cf7e10c3cc0b4876bc2ef0715a79422a5c3739f5579467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_68a9275cc391071b57cf7e10c3cc0b4876bc2ef0715a79422a5c3739f5579467->leave($__internal_68a9275cc391071b57cf7e10c3cc0b4876bc2ef0715a79422a5c3739f5579467_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_11d4579833e212da71faa8693700f26650eb2dfa384016d35f0a7de523c46633 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11d4579833e212da71faa8693700f26650eb2dfa384016d35f0a7de523c46633->enter($__internal_11d4579833e212da71faa8693700f26650eb2dfa384016d35f0a7de523c46633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_11d4579833e212da71faa8693700f26650eb2dfa384016d35f0a7de523c46633->leave($__internal_11d4579833e212da71faa8693700f26650eb2dfa384016d35f0a7de523c46633_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3e472580f270784ed67158f5e31f6e95ccb34c8401fc8bf89755fbea7d8f77b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e472580f270784ed67158f5e31f6e95ccb34c8401fc8bf89755fbea7d8f77b6->enter($__internal_3e472580f270784ed67158f5e31f6e95ccb34c8401fc8bf89755fbea7d8f77b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3e472580f270784ed67158f5e31f6e95ccb34c8401fc8bf89755fbea7d8f77b6->leave($__internal_3e472580f270784ed67158f5e31f6e95ccb34c8401fc8bf89755fbea7d8f77b6_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 16,  90 => 15,  79 => 6,  67 => 5,  58 => 17,  55 => 16,  53 => 15,  47 => 12,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        <link href=\"https://fonts.googleapis.com/css?family=Luckiest+Guy\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Luckiest+Guy\" rel=\"stylesheet\">
        <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">
        <link href=\"{{ asset('css/style.css') }}\" type=\"text/css\">
    </head>
    <body style=\"background-color:#3498db;\">
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/symfony3/app/Resources/views/base.html.twig");
    }
}
