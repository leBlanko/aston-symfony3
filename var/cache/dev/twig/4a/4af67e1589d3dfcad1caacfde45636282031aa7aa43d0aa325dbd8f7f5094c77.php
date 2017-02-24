<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_bb1f99f49ab51ce71b0a458621775534a3fa0a386148fcaeb41657da028551c6 extends Twig_Template
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
        $__internal_337a653037002cbc2c601bcadedfdd28685a7d3e7f92c003844968c54d796818 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_337a653037002cbc2c601bcadedfdd28685a7d3e7f92c003844968c54d796818->enter($__internal_337a653037002cbc2c601bcadedfdd28685a7d3e7f92c003844968c54d796818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_337a653037002cbc2c601bcadedfdd28685a7d3e7f92c003844968c54d796818->leave($__internal_337a653037002cbc2c601bcadedfdd28685a7d3e7f92c003844968c54d796818_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
