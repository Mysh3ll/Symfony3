<?php

/* AppBundle:backOffice:index.html.twig */
class __TwigTemplate_35fa95759624d19364c2708c84271d8d97e44d86800b5fd11c0b3df0733b334e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:backOffice:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_43e2fbe787214d94d063e24af5b366b2bbd656c5e2d08b4e02191425254be769 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43e2fbe787214d94d063e24af5b366b2bbd656c5e2d08b4e02191425254be769->enter($__internal_43e2fbe787214d94d063e24af5b366b2bbd656c5e2d08b4e02191425254be769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:backOffice:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43e2fbe787214d94d063e24af5b366b2bbd656c5e2d08b4e02191425254be769->leave($__internal_43e2fbe787214d94d063e24af5b366b2bbd656c5e2d08b4e02191425254be769_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_ed1a655e85ae8cd1456903bc84807b65b00eacdb1552a8d4cf01fbe141cd095f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed1a655e85ae8cd1456903bc84807b65b00eacdb1552a8d4cf01fbe141cd095f->enter($__internal_ed1a655e85ae8cd1456903bc84807b65b00eacdb1552a8d4cf01fbe141cd095f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "AppBundle:backOffice:index.html.twig"));

        // line 4
        echo "
    <h1>Page Admin</h1>

";
        
        $__internal_ed1a655e85ae8cd1456903bc84807b65b00eacdb1552a8d4cf01fbe141cd095f->leave($__internal_ed1a655e85ae8cd1456903bc84807b65b00eacdb1552a8d4cf01fbe141cd095f_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:backOffice:index.html.twig";
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
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block content %}

    <h1>Page Admin</h1>

{% endblock %}
", "AppBundle:backOffice:index.html.twig", "/var/www/html/TPResa_Symfony3/src/AppBundle/Resources/views/backOffice/index.html.twig");
    }
}
