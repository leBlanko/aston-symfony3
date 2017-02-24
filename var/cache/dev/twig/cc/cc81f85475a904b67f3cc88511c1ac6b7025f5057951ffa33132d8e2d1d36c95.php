<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_26eada4a8ea7a9608342beebdf7bb239062be96dae4ac006a01f02b0664c0eda extends Twig_Template
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
        $__internal_cccd08b81f87473113b5808413736d1b359ab204f8a158195e0ca659d2ed77bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cccd08b81f87473113b5808413736d1b359ab204f8a158195e0ca659d2ed77bf->enter($__internal_cccd08b81f87473113b5808413736d1b359ab204f8a158195e0ca659d2ed77bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_cccd08b81f87473113b5808413736d1b359ab204f8a158195e0ca659d2ed77bf->leave($__internal_cccd08b81f87473113b5808413736d1b359ab204f8a158195e0ca659d2ed77bf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
