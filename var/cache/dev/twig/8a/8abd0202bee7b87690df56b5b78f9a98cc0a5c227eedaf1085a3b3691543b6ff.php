<?php

/* base.html.twig */
class __TwigTemplate_daf647d4021bf0eeccbb50bc521634636434713993403999e06e6741496a73aa extends Twig_Template
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
        $__internal_f46ffd5df5ef6f5c58e5d93f3e643f66de8b600bc02c41e25331d27be9dd6230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f46ffd5df5ef6f5c58e5d93f3e643f66de8b600bc02c41e25331d27be9dd6230->enter($__internal_f46ffd5df5ef6f5c58e5d93f3e643f66de8b600bc02c41e25331d27be9dd6230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_f46ffd5df5ef6f5c58e5d93f3e643f66de8b600bc02c41e25331d27be9dd6230->leave($__internal_f46ffd5df5ef6f5c58e5d93f3e643f66de8b600bc02c41e25331d27be9dd6230_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_aa0c73f325e1bd9725738f882833753b87bf4e5a5c0898df81b923eab28242b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa0c73f325e1bd9725738f882833753b87bf4e5a5c0898df81b923eab28242b5->enter($__internal_aa0c73f325e1bd9725738f882833753b87bf4e5a5c0898df81b923eab28242b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_aa0c73f325e1bd9725738f882833753b87bf4e5a5c0898df81b923eab28242b5->leave($__internal_aa0c73f325e1bd9725738f882833753b87bf4e5a5c0898df81b923eab28242b5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b4924680c8b914b32470a02f9ddf183aca034df9b4461c8249923b6124105b53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4924680c8b914b32470a02f9ddf183aca034df9b4461c8249923b6124105b53->enter($__internal_b4924680c8b914b32470a02f9ddf183aca034df9b4461c8249923b6124105b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b4924680c8b914b32470a02f9ddf183aca034df9b4461c8249923b6124105b53->leave($__internal_b4924680c8b914b32470a02f9ddf183aca034df9b4461c8249923b6124105b53_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f49d4df3e6e1cece9d52f29839f41a72d2e1c5f43e9dc56b46f03a963b9cb2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f49d4df3e6e1cece9d52f29839f41a72d2e1c5f43e9dc56b46f03a963b9cb2b->enter($__internal_0f49d4df3e6e1cece9d52f29839f41a72d2e1c5f43e9dc56b46f03a963b9cb2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0f49d4df3e6e1cece9d52f29839f41a72d2e1c5f43e9dc56b46f03a963b9cb2b->leave($__internal_0f49d4df3e6e1cece9d52f29839f41a72d2e1c5f43e9dc56b46f03a963b9cb2b_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ba31bc867c448002438a8d84e4ca7a31d352aed911b20951878cd0685e1936cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba31bc867c448002438a8d84e4ca7a31d352aed911b20951878cd0685e1936cf->enter($__internal_ba31bc867c448002438a8d84e4ca7a31d352aed911b20951878cd0685e1936cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ba31bc867c448002438a8d84e4ca7a31d352aed911b20951878cd0685e1936cf->leave($__internal_ba31bc867c448002438a8d84e4ca7a31d352aed911b20951878cd0685e1936cf_prof);

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
