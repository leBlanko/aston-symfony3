<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_598e7b25429f8f8d4dc664ad92b043c95c3f0be411c7f13cec64efd1f3b24064 extends Twig_Template
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
        $__internal_3d72d7f55ed4b4c82024cd409a27fcb50d71461b351064ab8721c1cbf439239f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d72d7f55ed4b4c82024cd409a27fcb50d71461b351064ab8721c1cbf439239f->enter($__internal_3d72d7f55ed4b4c82024cd409a27fcb50d71461b351064ab8721c1cbf439239f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_3d72d7f55ed4b4c82024cd409a27fcb50d71461b351064ab8721c1cbf439239f->leave($__internal_3d72d7f55ed4b4c82024cd409a27fcb50d71461b351064ab8721c1cbf439239f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
