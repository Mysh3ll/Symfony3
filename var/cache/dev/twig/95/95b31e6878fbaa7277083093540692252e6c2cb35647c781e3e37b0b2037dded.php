<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_4065cfa8b2d4d749b0c68565a77d9d4943cee24f166b0b533f921b9c0ed2b368 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_1e4c90ce4f79aa2d7e5404bf5355cbdcf46c55589131c61e9a592a828b9ba343 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e4c90ce4f79aa2d7e5404bf5355cbdcf46c55589131c61e9a592a828b9ba343->enter($__internal_1e4c90ce4f79aa2d7e5404bf5355cbdcf46c55589131c61e9a592a828b9ba343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e4c90ce4f79aa2d7e5404bf5355cbdcf46c55589131c61e9a592a828b9ba343->leave($__internal_1e4c90ce4f79aa2d7e5404bf5355cbdcf46c55589131c61e9a592a828b9ba343_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ba5f1301d2a5a96a8a71ec46c26291e7b514c23a7eb32ffcfaa2bf17250af152 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba5f1301d2a5a96a8a71ec46c26291e7b514c23a7eb32ffcfaa2bf17250af152->enter($__internal_ba5f1301d2a5a96a8a71ec46c26291e7b514c23a7eb32ffcfaa2bf17250af152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        
        $__internal_ba5f1301d2a5a96a8a71ec46c26291e7b514c23a7eb32ffcfaa2bf17250af152->leave($__internal_ba5f1301d2a5a96a8a71ec46c26291e7b514c23a7eb32ffcfaa2bf17250af152_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cf3f274e3acde8a08235c4064223edabdb0e087f22c72eb53128520158f01e0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf3f274e3acde8a08235c4064223edabdb0e087f22c72eb53128520158f01e0f->enter($__internal_cf3f274e3acde8a08235c4064223edabdb0e087f22c72eb53128520158f01e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cf3f274e3acde8a08235c4064223edabdb0e087f22c72eb53128520158f01e0f->leave($__internal_cf3f274e3acde8a08235c4064223edabdb0e087f22c72eb53128520158f01e0f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_eba44982d0bc3a0ba5786d49dc4fddeb9bc5e181acb3f950a9eb8b8f0e3a2513 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eba44982d0bc3a0ba5786d49dc4fddeb9bc5e181acb3f950a9eb8b8f0e3a2513->enter($__internal_eba44982d0bc3a0ba5786d49dc4fddeb9bc5e181acb3f950a9eb8b8f0e3a2513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_eba44982d0bc3a0ba5786d49dc4fddeb9bc5e181acb3f950a9eb8b8f0e3a2513->leave($__internal_eba44982d0bc3a0ba5786d49dc4fddeb9bc5e181acb3f950a9eb8b8f0e3a2513_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/TPResa_Symfony3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
