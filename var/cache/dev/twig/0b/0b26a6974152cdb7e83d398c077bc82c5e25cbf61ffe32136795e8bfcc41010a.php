<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_8f08070940b321f9bd55e7f622408db9dfedacc2575dc2688e7749980a930a79 extends Twig_Template
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
        $__internal_14eafc6b3d53f810fbf75bfdd706cf8f15da493858b6027b7c1cdf48aa0c8e92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14eafc6b3d53f810fbf75bfdd706cf8f15da493858b6027b7c1cdf48aa0c8e92->enter($__internal_14eafc6b3d53f810fbf75bfdd706cf8f15da493858b6027b7c1cdf48aa0c8e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_14eafc6b3d53f810fbf75bfdd706cf8f15da493858b6027b7c1cdf48aa0c8e92->leave($__internal_14eafc6b3d53f810fbf75bfdd706cf8f15da493858b6027b7c1cdf48aa0c8e92_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
