<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_8fb12636ea1a7232483bccf66a60a087e6582136a31e717cf10ac9f0fe95716b extends Twig_Template
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
        $__internal_3f5ed357d618544d6ac676d2a1c624db7c2a6a76dd15f8ee03de98beb0d5bdca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f5ed357d618544d6ac676d2a1c624db7c2a6a76dd15f8ee03de98beb0d5bdca->enter($__internal_3f5ed357d618544d6ac676d2a1c624db7c2a6a76dd15f8ee03de98beb0d5bdca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_3f5ed357d618544d6ac676d2a1c624db7c2a6a76dd15f8ee03de98beb0d5bdca->leave($__internal_3f5ed357d618544d6ac676d2a1c624db7c2a6a76dd15f8ee03de98beb0d5bdca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
