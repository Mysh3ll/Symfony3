<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_d101b9eae960e3380d0bdccd88a01fba1761d475f1b86ca50603f8e243990c58 extends Twig_Template
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
        $__internal_0cd7edbbdeecd77a89bc4a78966e813e3dbe73bc26411eae95ae3a9b548a4b7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cd7edbbdeecd77a89bc4a78966e813e3dbe73bc26411eae95ae3a9b548a4b7e->enter($__internal_0cd7edbbdeecd77a89bc4a78966e813e3dbe73bc26411eae95ae3a9b548a4b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_0cd7edbbdeecd77a89bc4a78966e813e3dbe73bc26411eae95ae3a9b548a4b7e->leave($__internal_0cd7edbbdeecd77a89bc4a78966e813e3dbe73bc26411eae95ae3a9b548a4b7e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/TPResa_Symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
