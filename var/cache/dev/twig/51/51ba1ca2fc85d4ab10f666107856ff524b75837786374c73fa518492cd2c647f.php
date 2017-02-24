<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_c9e473a0518340c5feb68f2005420e8992a530659a581b33b60e804859f410c1 extends Twig_Template
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
        $__internal_cb07cf1dd8837d802d9cf0bc8656426c40e27899ae0a2a41a21cc25b39784c64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb07cf1dd8837d802d9cf0bc8656426c40e27899ae0a2a41a21cc25b39784c64->enter($__internal_cb07cf1dd8837d802d9cf0bc8656426c40e27899ae0a2a41a21cc25b39784c64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_cb07cf1dd8837d802d9cf0bc8656426c40e27899ae0a2a41a21cc25b39784c64->leave($__internal_cb07cf1dd8837d802d9cf0bc8656426c40e27899ae0a2a41a21cc25b39784c64_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
