<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_379190c5cdf040bfb89282dcbcc509c22f6cdf7960001c4656191e5c84cc28c3 extends Twig_Template
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
        $__internal_1b3a3e700a3a7ee0a5f7892a085f74fd9dfc65fba154975fe81d3deb0c2d643f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b3a3e700a3a7ee0a5f7892a085f74fd9dfc65fba154975fe81d3deb0c2d643f->enter($__internal_1b3a3e700a3a7ee0a5f7892a085f74fd9dfc65fba154975fe81d3deb0c2d643f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_1b3a3e700a3a7ee0a5f7892a085f74fd9dfc65fba154975fe81d3deb0c2d643f->leave($__internal_1b3a3e700a3a7ee0a5f7892a085f74fd9dfc65fba154975fe81d3deb0c2d643f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
