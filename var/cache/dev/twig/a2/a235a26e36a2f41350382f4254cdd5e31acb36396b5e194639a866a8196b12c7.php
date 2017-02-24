<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_83c664472da26bc2a294b545432d0ffec9de0885f24caef37bd081fbe9ca48ba extends Twig_Template
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
        $__internal_a771f9d390bc7c8f0c54852736afa763b393da8c5e19ba3d11df91c519f7e51a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a771f9d390bc7c8f0c54852736afa763b393da8c5e19ba3d11df91c519f7e51a->enter($__internal_a771f9d390bc7c8f0c54852736afa763b393da8c5e19ba3d11df91c519f7e51a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_a771f9d390bc7c8f0c54852736afa763b393da8c5e19ba3d11df91c519f7e51a->leave($__internal_a771f9d390bc7c8f0c54852736afa763b393da8c5e19ba3d11df91c519f7e51a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
