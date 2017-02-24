<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_e93e244241aa74f7b1bb9c64640364470f0d5fc5547f4c97ee98c8ef2fa5906b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f3410f9bad0cb928430e412d6052cdee89da381214daddb16fe38b0f184180b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f3410f9bad0cb928430e412d6052cdee89da381214daddb16fe38b0f184180b->enter($__internal_4f3410f9bad0cb928430e412d6052cdee89da381214daddb16fe38b0f184180b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_4f3410f9bad0cb928430e412d6052cdee89da381214daddb16fe38b0f184180b->leave($__internal_4f3410f9bad0cb928430e412d6052cdee89da381214daddb16fe38b0f184180b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
