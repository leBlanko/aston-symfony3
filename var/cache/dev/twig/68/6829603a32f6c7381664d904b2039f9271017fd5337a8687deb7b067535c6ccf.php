<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_2b0d5d880a24cc82359c48a6920bd0f10fc52a63912a2883b554ff9c7d88f634 extends Twig_Template
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
        $__internal_2717fe2693a928e2d6a50a7a36632701632254ea2073e05b44cfef46b847feca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2717fe2693a928e2d6a50a7a36632701632254ea2073e05b44cfef46b847feca->enter($__internal_2717fe2693a928e2d6a50a7a36632701632254ea2073e05b44cfef46b847feca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_2717fe2693a928e2d6a50a7a36632701632254ea2073e05b44cfef46b847feca->leave($__internal_2717fe2693a928e2d6a50a7a36632701632254ea2073e05b44cfef46b847feca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
