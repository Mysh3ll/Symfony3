<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_bba3b7a847594f447dda20519de2fbe97cf3961f810d64c96a66137287df8ceb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a4fcaa2dde850bd940ef79672327592eff4facd9cc9efdd26db94b005140baa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a4fcaa2dde850bd940ef79672327592eff4facd9cc9efdd26db94b005140baa->enter($__internal_3a4fcaa2dde850bd940ef79672327592eff4facd9cc9efdd26db94b005140baa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a4fcaa2dde850bd940ef79672327592eff4facd9cc9efdd26db94b005140baa->leave($__internal_3a4fcaa2dde850bd940ef79672327592eff4facd9cc9efdd26db94b005140baa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_40ef3baee091313008051eee1e33bebe327a22d6e4a1abd1864d89bc33da0f55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40ef3baee091313008051eee1e33bebe327a22d6e4a1abd1864d89bc33da0f55->enter($__internal_40ef3baee091313008051eee1e33bebe327a22d6e4a1abd1864d89bc33da0f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        echo "Redirection Intercepted";
        
        $__internal_40ef3baee091313008051eee1e33bebe327a22d6e4a1abd1864d89bc33da0f55->leave($__internal_40ef3baee091313008051eee1e33bebe327a22d6e4a1abd1864d89bc33da0f55_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_91768e9ede971752154c19022d59fdd892a06e9641ccce6422755d74dc962e39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91768e9ede971752154c19022d59fdd892a06e9641ccce6422755d74dc962e39->enter($__internal_91768e9ede971752154c19022d59fdd892a06e9641ccce6422755d74dc962e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_91768e9ede971752154c19022d59fdd892a06e9641ccce6422755d74dc962e39->leave($__internal_91768e9ede971752154c19022d59fdd892a06e9641ccce6422755d74dc962e39_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/TPResa_Symfony3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
