<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_9d7dfab2782700ffe9330675bce08cdb4d7d26e7211a52ffe3a390f9f7847dde extends Twig_Template
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
        $__internal_caf77f4a8d3f47061f2ac1aa264ecdf69059c204ddb8f1fd7364829292226a99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caf77f4a8d3f47061f2ac1aa264ecdf69059c204ddb8f1fd7364829292226a99->enter($__internal_caf77f4a8d3f47061f2ac1aa264ecdf69059c204ddb8f1fd7364829292226a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_caf77f4a8d3f47061f2ac1aa264ecdf69059c204ddb8f1fd7364829292226a99->leave($__internal_caf77f4a8d3f47061f2ac1aa264ecdf69059c204ddb8f1fd7364829292226a99_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/TPResa_Symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
