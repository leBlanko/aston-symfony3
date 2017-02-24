<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_233743bf1949f65284ef9018d7f13e581881da25b654df5d36bb7d02f3def313 extends Twig_Template
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
        $__internal_89db068413a482101957426401ab7d39904ed0b64b82793f51099b5e98998708 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89db068413a482101957426401ab7d39904ed0b64b82793f51099b5e98998708->enter($__internal_89db068413a482101957426401ab7d39904ed0b64b82793f51099b5e98998708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_89db068413a482101957426401ab7d39904ed0b64b82793f51099b5e98998708->leave($__internal_89db068413a482101957426401ab7d39904ed0b64b82793f51099b5e98998708_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
