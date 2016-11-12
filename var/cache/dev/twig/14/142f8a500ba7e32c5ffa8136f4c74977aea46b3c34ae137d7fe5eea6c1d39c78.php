<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_540d6c57a17f351e8c536e1f051c2a7956393b4afb406eb79db282cc16ffb198 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_508ae74e6ccb4d51782ca0e5710d289b43f18ae40b21571a16c8b3d185c3cc12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_508ae74e6ccb4d51782ca0e5710d289b43f18ae40b21571a16c8b3d185c3cc12->enter($__internal_508ae74e6ccb4d51782ca0e5710d289b43f18ae40b21571a16c8b3d185c3cc12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_508ae74e6ccb4d51782ca0e5710d289b43f18ae40b21571a16c8b3d185c3cc12->leave($__internal_508ae74e6ccb4d51782ca0e5710d289b43f18ae40b21571a16c8b3d185c3cc12_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_52d2bd15f9a0e3cf6a0d354e6cfaa076a89b418c52e8093e9e2efce759524048 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52d2bd15f9a0e3cf6a0d354e6cfaa076a89b418c52e8093e9e2efce759524048->enter($__internal_52d2bd15f9a0e3cf6a0d354e6cfaa076a89b418c52e8093e9e2efce759524048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_52d2bd15f9a0e3cf6a0d354e6cfaa076a89b418c52e8093e9e2efce759524048->leave($__internal_52d2bd15f9a0e3cf6a0d354e6cfaa076a89b418c52e8093e9e2efce759524048_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6d70605bcfd7fc8ff6e48e99723de998a9e9162e126ba7c1e6abda4f4beb4bc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d70605bcfd7fc8ff6e48e99723de998a9e9162e126ba7c1e6abda4f4beb4bc7->enter($__internal_6d70605bcfd7fc8ff6e48e99723de998a9e9162e126ba7c1e6abda4f4beb4bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6d70605bcfd7fc8ff6e48e99723de998a9e9162e126ba7c1e6abda4f4beb4bc7->leave($__internal_6d70605bcfd7fc8ff6e48e99723de998a9e9162e126ba7c1e6abda4f4beb4bc7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_09ba7e4f9da5673ca67d51ce319cb1bc87b87df4bee5a6cef4f3f69a6bf9549c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09ba7e4f9da5673ca67d51ce319cb1bc87b87df4bee5a6cef4f3f69a6bf9549c->enter($__internal_09ba7e4f9da5673ca67d51ce319cb1bc87b87df4bee5a6cef4f3f69a6bf9549c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_09ba7e4f9da5673ca67d51ce319cb1bc87b87df4bee5a6cef4f3f69a6bf9549c->leave($__internal_09ba7e4f9da5673ca67d51ce319cb1bc87b87df4bee5a6cef4f3f69a6bf9549c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/TPResa_Symfony3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
