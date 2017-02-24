<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_8162e324f6e8bfb137908f5729c55ae47fa8ba8615eb63d29456769a793a52d4 extends Twig_Template
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
        $__internal_3c30aeed62b07b28e1802c0f5419d9ef503efed62676c0a881fc8ea1534a3900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c30aeed62b07b28e1802c0f5419d9ef503efed62676c0a881fc8ea1534a3900->enter($__internal_3c30aeed62b07b28e1802c0f5419d9ef503efed62676c0a881fc8ea1534a3900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_3c30aeed62b07b28e1802c0f5419d9ef503efed62676c0a881fc8ea1534a3900->leave($__internal_3c30aeed62b07b28e1802c0f5419d9ef503efed62676c0a881fc8ea1534a3900_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
