<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_bec3b99b773591b13c990a763babc4d2b660792b571350ecebe5826a7668d62a extends Twig_Template
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
        $__internal_f1bed1c4c2e3ca7d9d7a4899fa1e3c14e183b0739bd548131e15b3292c1af8c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1bed1c4c2e3ca7d9d7a4899fa1e3c14e183b0739bd548131e15b3292c1af8c6->enter($__internal_f1bed1c4c2e3ca7d9d7a4899fa1e3c14e183b0739bd548131e15b3292c1af8c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_f1bed1c4c2e3ca7d9d7a4899fa1e3c14e183b0739bd548131e15b3292c1af8c6->leave($__internal_f1bed1c4c2e3ca7d9d7a4899fa1e3c14e183b0739bd548131e15b3292c1af8c6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
