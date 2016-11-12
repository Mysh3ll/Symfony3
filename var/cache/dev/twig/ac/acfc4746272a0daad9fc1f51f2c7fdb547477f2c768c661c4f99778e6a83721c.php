<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_3ef1b6092b74ce4568114916c6c951b38bffd14260eb8e970ed40606998fc504 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c405c90ceed098899c984229c8446a44e262bd7f98f391d32768cb5247d5379d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c405c90ceed098899c984229c8446a44e262bd7f98f391d32768cb5247d5379d->enter($__internal_c405c90ceed098899c984229c8446a44e262bd7f98f391d32768cb5247d5379d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c405c90ceed098899c984229c8446a44e262bd7f98f391d32768cb5247d5379d->leave($__internal_c405c90ceed098899c984229c8446a44e262bd7f98f391d32768cb5247d5379d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dfcfe184ed41964e0e552cab324addd5c7a6efce978c3964b97adc466121b5d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfcfe184ed41964e0e552cab324addd5c7a6efce978c3964b97adc466121b5d9->enter($__internal_dfcfe184ed41964e0e552cab324addd5c7a6efce978c3964b97adc466121b5d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:edit.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_dfcfe184ed41964e0e552cab324addd5c7a6efce978c3964b97adc466121b5d9->leave($__internal_dfcfe184ed41964e0e552cab324addd5c7a6efce978c3964b97adc466121b5d9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/var/www/html/TPResa_Symfony3/app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
