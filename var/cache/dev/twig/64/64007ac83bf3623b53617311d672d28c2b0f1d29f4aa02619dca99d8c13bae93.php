<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_db6c49c7e684d3795167bab6b85f4a520808eca180af1db871de4130956ee6b3 extends Twig_Template
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
        $__internal_8d540f1f004b6a2f419638f4a8b7cfda304eeb8adc1e4e118b375b2e0107aace = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d540f1f004b6a2f419638f4a8b7cfda304eeb8adc1e4e118b375b2e0107aace->enter($__internal_8d540f1f004b6a2f419638f4a8b7cfda304eeb8adc1e4e118b375b2e0107aace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_8d540f1f004b6a2f419638f4a8b7cfda304eeb8adc1e4e118b375b2e0107aace->leave($__internal_8d540f1f004b6a2f419638f4a8b7cfda304eeb8adc1e4e118b375b2e0107aace_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
