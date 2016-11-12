<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_31a8726e15de25f663aa939d97b0d8b6110afdda8eb7ff074a6fc98f9c7b5239 extends Twig_Template
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
        $__internal_a235753dce3b9334ae4c7adc40da046632d4fce377f8236d6e0feb8265f98ef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a235753dce3b9334ae4c7adc40da046632d4fce377f8236d6e0feb8265f98ef4->enter($__internal_a235753dce3b9334ae4c7adc40da046632d4fce377f8236d6e0feb8265f98ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_a235753dce3b9334ae4c7adc40da046632d4fce377f8236d6e0feb8265f98ef4->leave($__internal_a235753dce3b9334ae4c7adc40da046632d4fce377f8236d6e0feb8265f98ef4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/TPResa_Symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
