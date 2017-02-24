<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_f635037a7dc605176e52c14a826c142617ef02461f3279615891890f495b3ac6 extends Twig_Template
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
        $__internal_ad862dfc22cbc12a31610e33fa093c0f5fe25a3f520ebf49385bd0f47ee7484a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad862dfc22cbc12a31610e33fa093c0f5fe25a3f520ebf49385bd0f47ee7484a->enter($__internal_ad862dfc22cbc12a31610e33fa093c0f5fe25a3f520ebf49385bd0f47ee7484a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_ad862dfc22cbc12a31610e33fa093c0f5fe25a3f520ebf49385bd0f47ee7484a->leave($__internal_ad862dfc22cbc12a31610e33fa093c0f5fe25a3f520ebf49385bd0f47ee7484a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
