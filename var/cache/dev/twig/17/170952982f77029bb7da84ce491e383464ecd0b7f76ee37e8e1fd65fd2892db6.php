<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_7b58ba1fd522ff0de8f186da8683ee1241a935d60475a869c88fc2a107274426 extends Twig_Template
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
        $__internal_d8b7456f4379650c2d167abf39b68a418acb24dbb00852268df58c18eaf671c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8b7456f4379650c2d167abf39b68a418acb24dbb00852268df58c18eaf671c5->enter($__internal_d8b7456f4379650c2d167abf39b68a418acb24dbb00852268df58c18eaf671c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_d8b7456f4379650c2d167abf39b68a418acb24dbb00852268df58c18eaf671c5->leave($__internal_d8b7456f4379650c2d167abf39b68a418acb24dbb00852268df58c18eaf671c5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/var/www/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
