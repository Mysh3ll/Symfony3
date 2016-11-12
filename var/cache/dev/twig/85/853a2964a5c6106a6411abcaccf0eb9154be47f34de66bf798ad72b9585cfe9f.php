<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_8631cea7a024c58f34e392f3673d217a71c8301265163b7a0338a8077da3ad3e extends Twig_Template
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
        $__internal_23ec61e0fc485c9fd2350e886ab3999dc2d1f86829c927ed27d62c42fe3d9218 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23ec61e0fc485c9fd2350e886ab3999dc2d1f86829c927ed27d62c42fe3d9218->enter($__internal_23ec61e0fc485c9fd2350e886ab3999dc2d1f86829c927ed27d62c42fe3d9218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_23ec61e0fc485c9fd2350e886ab3999dc2d1f86829c927ed27d62c42fe3d9218->leave($__internal_23ec61e0fc485c9fd2350e886ab3999dc2d1f86829c927ed27d62c42fe3d9218_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/TPResa_Symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
