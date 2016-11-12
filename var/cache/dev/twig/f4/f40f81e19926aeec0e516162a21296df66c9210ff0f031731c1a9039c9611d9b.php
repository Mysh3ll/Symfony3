<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3c95ecca0c668797b23658869a446cbc51fcc3f9757669fa204f024aa5f48175 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_0775c8d04d66f4c0dbfc2e61c742b18912094d000a5218a012b76ee0a8f6170c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0775c8d04d66f4c0dbfc2e61c742b18912094d000a5218a012b76ee0a8f6170c->enter($__internal_0775c8d04d66f4c0dbfc2e61c742b18912094d000a5218a012b76ee0a8f6170c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0775c8d04d66f4c0dbfc2e61c742b18912094d000a5218a012b76ee0a8f6170c->leave($__internal_0775c8d04d66f4c0dbfc2e61c742b18912094d000a5218a012b76ee0a8f6170c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dc50e08423f733530d19589fefefdd97985c7c74e21e914550153dad325b9741 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc50e08423f733530d19589fefefdd97985c7c74e21e914550153dad325b9741->enter($__internal_dc50e08423f733530d19589fefefdd97985c7c74e21e914550153dad325b9741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_dc50e08423f733530d19589fefefdd97985c7c74e21e914550153dad325b9741->leave($__internal_dc50e08423f733530d19589fefefdd97985c7c74e21e914550153dad325b9741_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3033a939b8513eedaa6aef1a6ee570886fbca6f442d619d17bcdc792f39b710f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3033a939b8513eedaa6aef1a6ee570886fbca6f442d619d17bcdc792f39b710f->enter($__internal_3033a939b8513eedaa6aef1a6ee570886fbca6f442d619d17bcdc792f39b710f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3033a939b8513eedaa6aef1a6ee570886fbca6f442d619d17bcdc792f39b710f->leave($__internal_3033a939b8513eedaa6aef1a6ee570886fbca6f442d619d17bcdc792f39b710f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6900d6f517ceb32ffd02300acab4b5531533dba04690011776d561935aa17489 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6900d6f517ceb32ffd02300acab4b5531533dba04690011776d561935aa17489->enter($__internal_6900d6f517ceb32ffd02300acab4b5531533dba04690011776d561935aa17489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6900d6f517ceb32ffd02300acab4b5531533dba04690011776d561935aa17489->leave($__internal_6900d6f517ceb32ffd02300acab4b5531533dba04690011776d561935aa17489_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/TPResa_Symfony3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
