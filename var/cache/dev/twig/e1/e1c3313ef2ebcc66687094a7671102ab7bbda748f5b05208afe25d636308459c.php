<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_fc4a9d2ebbcf1cf3f028fe84ffdb505357567da08cd844221afc251b1282afec extends Twig_Template
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
        $__internal_2022ad06eedf06a34abf78684aef303329a0f5b54509f21fa3191152787745ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2022ad06eedf06a34abf78684aef303329a0f5b54509f21fa3191152787745ec->enter($__internal_2022ad06eedf06a34abf78684aef303329a0f5b54509f21fa3191152787745ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_2022ad06eedf06a34abf78684aef303329a0f5b54509f21fa3191152787745ec->leave($__internal_2022ad06eedf06a34abf78684aef303329a0f5b54509f21fa3191152787745ec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/TPResa_Symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
