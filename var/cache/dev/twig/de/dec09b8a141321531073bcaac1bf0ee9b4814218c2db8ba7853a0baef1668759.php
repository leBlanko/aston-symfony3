<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_1c12fca0c39681d7dc69828c68570ce9d59e0f2e5484fe91e4f181833dde4259 extends Twig_Template
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
        $__internal_76ba8704f379863112aa3153e74efba2ebfb0339ebb1b973c38cd696cfd10a41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76ba8704f379863112aa3153e74efba2ebfb0339ebb1b973c38cd696cfd10a41->enter($__internal_76ba8704f379863112aa3153e74efba2ebfb0339ebb1b973c38cd696cfd10a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_76ba8704f379863112aa3153e74efba2ebfb0339ebb1b973c38cd696cfd10a41->leave($__internal_76ba8704f379863112aa3153e74efba2ebfb0339ebb1b973c38cd696cfd10a41_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
