<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_74a5c5af01cddba92a0ac19d21c290d224776a01b14d02cd817a997e909fd70e extends Twig_Template
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
        $__internal_cbb307978aa4ab0661c80f1b1ee3008d2dfe4f9bfcf1fafc05d98c6863f9341c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbb307978aa4ab0661c80f1b1ee3008d2dfe4f9bfcf1fafc05d98c6863f9341c->enter($__internal_cbb307978aa4ab0661c80f1b1ee3008d2dfe4f9bfcf1fafc05d98c6863f9341c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_cbb307978aa4ab0661c80f1b1ee3008d2dfe4f9bfcf1fafc05d98c6863f9341c->leave($__internal_cbb307978aa4ab0661c80f1b1ee3008d2dfe4f9bfcf1fafc05d98c6863f9341c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
