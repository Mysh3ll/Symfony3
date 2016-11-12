<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_8c424faadd8d1e8b8db6cd203fb20e6435457d23f1e85f20d497d1cbf37fb2a8 extends Twig_Template
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
        $__internal_b22428572f0bf9db8adb3fbb136b4121f0bb525b93af44094b8346039444fd7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b22428572f0bf9db8adb3fbb136b4121f0bb525b93af44094b8346039444fd7a->enter($__internal_b22428572f0bf9db8adb3fbb136b4121f0bb525b93af44094b8346039444fd7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b22428572f0bf9db8adb3fbb136b4121f0bb525b93af44094b8346039444fd7a->leave($__internal_b22428572f0bf9db8adb3fbb136b4121f0bb525b93af44094b8346039444fd7a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/TPResa_Symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
