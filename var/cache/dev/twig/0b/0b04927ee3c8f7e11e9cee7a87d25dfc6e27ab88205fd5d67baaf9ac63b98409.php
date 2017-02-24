<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_3d9e856520896d80a5c6d803fdc54da9f88b9ad9bc81e702b9a69888dc0f15d2 extends Twig_Template
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
        $__internal_2c0503350c1c173bd5fa5684b72d9ae01e337896e2da7a8f30fa374ccb1ca29d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c0503350c1c173bd5fa5684b72d9ae01e337896e2da7a8f30fa374ccb1ca29d->enter($__internal_2c0503350c1c173bd5fa5684b72d9ae01e337896e2da7a8f30fa374ccb1ca29d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_2c0503350c1c173bd5fa5684b72d9ae01e337896e2da7a8f30fa374ccb1ca29d->leave($__internal_2c0503350c1c173bd5fa5684b72d9ae01e337896e2da7a8f30fa374ccb1ca29d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
