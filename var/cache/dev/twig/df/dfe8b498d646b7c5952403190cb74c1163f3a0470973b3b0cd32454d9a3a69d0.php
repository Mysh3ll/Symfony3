<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_d4bd853d6c2bf5d9e887328abccbccd55022d083b9a126e62285c1b7cce1e24d extends Twig_Template
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
        $__internal_24351bcdf0f0da96093c1b1b3d902aa5aeb2a3202670f4052ee967e391b02652 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24351bcdf0f0da96093c1b1b3d902aa5aeb2a3202670f4052ee967e391b02652->enter($__internal_24351bcdf0f0da96093c1b1b3d902aa5aeb2a3202670f4052ee967e391b02652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_24351bcdf0f0da96093c1b1b3d902aa5aeb2a3202670f4052ee967e391b02652->leave($__internal_24351bcdf0f0da96093c1b1b3d902aa5aeb2a3202670f4052ee967e391b02652_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/html/TPResa_Symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
