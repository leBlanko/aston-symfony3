<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_0cbb4de55c5c49ec02909d1af96a9de69e93d8107f8a57c9c1cecf6e3a292305 extends Twig_Template
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
        $__internal_ccd43f0421ee43bea3f90a1422fd0bcec3573c2bab4739b47ce2579d2dd0eca1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccd43f0421ee43bea3f90a1422fd0bcec3573c2bab4739b47ce2579d2dd0eca1->enter($__internal_ccd43f0421ee43bea3f90a1422fd0bcec3573c2bab4739b47ce2579d2dd0eca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_ccd43f0421ee43bea3f90a1422fd0bcec3573c2bab4739b47ce2579d2dd0eca1->leave($__internal_ccd43f0421ee43bea3f90a1422fd0bcec3573c2bab4739b47ce2579d2dd0eca1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
