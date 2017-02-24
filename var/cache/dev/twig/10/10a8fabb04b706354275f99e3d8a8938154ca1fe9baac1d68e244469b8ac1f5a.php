<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_8f696b73d31cfee365e3dfb14b3f2fbf17163b3ccfd3147e89dcc1c20fd5df3d extends Twig_Template
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
        $__internal_89fd0b8cd66e991397a2b021c64703dc70e03fb7f02de8039a8315d9c3307510 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89fd0b8cd66e991397a2b021c64703dc70e03fb7f02de8039a8315d9c3307510->enter($__internal_89fd0b8cd66e991397a2b021c64703dc70e03fb7f02de8039a8315d9c3307510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_89fd0b8cd66e991397a2b021c64703dc70e03fb7f02de8039a8315d9c3307510->leave($__internal_89fd0b8cd66e991397a2b021c64703dc70e03fb7f02de8039a8315d9c3307510_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
