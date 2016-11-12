<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_52c590a2dfcbe2e288acaeb4292ed98ecc6acd4438be8b5dbf77b6b2da0370ac extends Twig_Template
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
        $__internal_da794c6ae2fb1d240075be8797b0468224df819be8178ac5e0ff0bfe12389273 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da794c6ae2fb1d240075be8797b0468224df819be8178ac5e0ff0bfe12389273->enter($__internal_da794c6ae2fb1d240075be8797b0468224df819be8178ac5e0ff0bfe12389273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_da794c6ae2fb1d240075be8797b0468224df819be8178ac5e0ff0bfe12389273->leave($__internal_da794c6ae2fb1d240075be8797b0468224df819be8178ac5e0ff0bfe12389273_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/var/www/html/TPResa_Symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
