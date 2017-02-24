<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_b09174938fac2e6b1807ff79be91acb4a8ac77d27f5abfa4b0152c6bdcb81f06 extends Twig_Template
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
        $__internal_442a9e950deeeeeb31e904509d4ed40b2b372f352185cb2a23e787853c3bfc3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_442a9e950deeeeeb31e904509d4ed40b2b372f352185cb2a23e787853c3bfc3e->enter($__internal_442a9e950deeeeeb31e904509d4ed40b2b372f352185cb2a23e787853c3bfc3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_442a9e950deeeeeb31e904509d4ed40b2b372f352185cb2a23e787853c3bfc3e->leave($__internal_442a9e950deeeeeb31e904509d4ed40b2b372f352185cb2a23e787853c3bfc3e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
