<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_6c5bc807a5f0915bb481b48ff9b5d01f326abccf50d46f2fce9a85e7d1e70c65 extends Twig_Template
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
        $__internal_1b3c3b5fc48b2bf35e3ae53992d5b4c248696e78e82bb998482dbff9718d752f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b3c3b5fc48b2bf35e3ae53992d5b4c248696e78e82bb998482dbff9718d752f->enter($__internal_1b3c3b5fc48b2bf35e3ae53992d5b4c248696e78e82bb998482dbff9718d752f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_1b3c3b5fc48b2bf35e3ae53992d5b4c248696e78e82bb998482dbff9718d752f->leave($__internal_1b3c3b5fc48b2bf35e3ae53992d5b4c248696e78e82bb998482dbff9718d752f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
