<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_ba7488e28d59541ed0ab7b1a313760c4e9bd208b2986ab9c7cb07be32586db29 extends Twig_Template
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
        $__internal_af7d4c27d3a949efe24ce4b5fbc576aa5694af5bc42302983f6f65e9a913bc95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af7d4c27d3a949efe24ce4b5fbc576aa5694af5bc42302983f6f65e9a913bc95->enter($__internal_af7d4c27d3a949efe24ce4b5fbc576aa5694af5bc42302983f6f65e9a913bc95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_af7d4c27d3a949efe24ce4b5fbc576aa5694af5bc42302983f6f65e9a913bc95->leave($__internal_af7d4c27d3a949efe24ce4b5fbc576aa5694af5bc42302983f6f65e9a913bc95_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/TPResa_Symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
