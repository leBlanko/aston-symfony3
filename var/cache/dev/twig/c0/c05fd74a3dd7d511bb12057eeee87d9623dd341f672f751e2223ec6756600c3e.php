<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_e96a5aa1e2f7381797e8d17d187ed19e5e2bafc1b940f42578421aaf124175ff extends Twig_Template
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
        $__internal_38ca3effc8804265f8ce26c5326c24f1df7720191d073d0317702a6ea4e25402 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38ca3effc8804265f8ce26c5326c24f1df7720191d073d0317702a6ea4e25402->enter($__internal_38ca3effc8804265f8ce26c5326c24f1df7720191d073d0317702a6ea4e25402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_38ca3effc8804265f8ce26c5326c24f1df7720191d073d0317702a6ea4e25402->leave($__internal_38ca3effc8804265f8ce26c5326c24f1df7720191d073d0317702a6ea4e25402_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
