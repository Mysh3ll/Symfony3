<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_7a50d73bb631d6e7e296090fd3f2f668298069e2a069ac9982820dbbb76fec99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b9b5881c998c6973e29d9f4d50c333e34fe33e162b74ceaef498288b54fbc2f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9b5881c998c6973e29d9f4d50c333e34fe33e162b74ceaef498288b54fbc2f1->enter($__internal_b9b5881c998c6973e29d9f4d50c333e34fe33e162b74ceaef498288b54fbc2f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b9b5881c998c6973e29d9f4d50c333e34fe33e162b74ceaef498288b54fbc2f1->leave($__internal_b9b5881c998c6973e29d9f4d50c333e34fe33e162b74ceaef498288b54fbc2f1_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_16e6ec501738dd07928e66b4f17623812ba9cdea062feaa64151654d41867b4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16e6ec501738dd07928e66b4f17623812ba9cdea062feaa64151654d41867b4f->enter($__internal_16e6ec501738dd07928e66b4f17623812ba9cdea062feaa64151654d41867b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        echo "";
        
        $__internal_16e6ec501738dd07928e66b4f17623812ba9cdea062feaa64151654d41867b4f->leave($__internal_16e6ec501738dd07928e66b4f17623812ba9cdea062feaa64151654d41867b4f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/TPResa_Symfony3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
