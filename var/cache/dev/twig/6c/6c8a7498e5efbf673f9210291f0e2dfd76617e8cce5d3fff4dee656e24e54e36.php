<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_f8b58d9a403fd7f1aa50b62cdd58f888adee752d72e966ddfd55f1c661208593 extends Twig_Template
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
        $__internal_1a2c54a25cc1d71a29bb749b163c2d660a07aad0bf5c4ee700a5b6de1da59813 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a2c54a25cc1d71a29bb749b163c2d660a07aad0bf5c4ee700a5b6de1da59813->enter($__internal_1a2c54a25cc1d71a29bb749b163c2d660a07aad0bf5c4ee700a5b6de1da59813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_1a2c54a25cc1d71a29bb749b163c2d660a07aad0bf5c4ee700a5b6de1da59813->leave($__internal_1a2c54a25cc1d71a29bb749b163c2d660a07aad0bf5c4ee700a5b6de1da59813_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
