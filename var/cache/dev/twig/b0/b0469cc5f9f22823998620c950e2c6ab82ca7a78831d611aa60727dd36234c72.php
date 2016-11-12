<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_698fa2eb67e653330663133a4b7be5c5e21af5f075ce9405e02ca3d8ce0ff5b4 extends Twig_Template
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
        $__internal_3529d6c1313cdad8660aebb6c3d1d74bf9dfc500af868fe3d13f9d8526008241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3529d6c1313cdad8660aebb6c3d1d74bf9dfc500af868fe3d13f9d8526008241->enter($__internal_3529d6c1313cdad8660aebb6c3d1d74bf9dfc500af868fe3d13f9d8526008241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_3529d6c1313cdad8660aebb6c3d1d74bf9dfc500af868fe3d13f9d8526008241->leave($__internal_3529d6c1313cdad8660aebb6c3d1d74bf9dfc500af868fe3d13f9d8526008241_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/TPResa_Symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
