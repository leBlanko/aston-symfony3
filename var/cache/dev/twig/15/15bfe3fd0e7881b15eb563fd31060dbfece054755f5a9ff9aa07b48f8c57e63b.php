<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_5bf8d28d8517d5ab10f2f4a61e972d5cb09ce1cecff06a51576d101bc3aeeaa7 extends Twig_Template
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
        $__internal_65b782badffc2fa5ee4c8a16dc9ef47e4baa25d21bdc39802528d0f162e1c50b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65b782badffc2fa5ee4c8a16dc9ef47e4baa25d21bdc39802528d0f162e1c50b->enter($__internal_65b782badffc2fa5ee4c8a16dc9ef47e4baa25d21bdc39802528d0f162e1c50b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_65b782badffc2fa5ee4c8a16dc9ef47e4baa25d21bdc39802528d0f162e1c50b->leave($__internal_65b782badffc2fa5ee4c8a16dc9ef47e4baa25d21bdc39802528d0f162e1c50b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
