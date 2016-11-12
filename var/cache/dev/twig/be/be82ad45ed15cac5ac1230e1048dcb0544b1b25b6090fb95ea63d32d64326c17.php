<?php

/* AppBundle:frontOffice:index.html.twig */
class __TwigTemplate_8a648053d87936e2484141d32c962301611a9dc841039f628aaccdf09727e274 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:frontOffice:index.html.twig", 1);
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
        $__internal_62edad0a976bdc750213331a99b9d175741ebbcc432b2e90ee1267241fed5b82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62edad0a976bdc750213331a99b9d175741ebbcc432b2e90ee1267241fed5b82->enter($__internal_62edad0a976bdc750213331a99b9d175741ebbcc432b2e90ee1267241fed5b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:frontOffice:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62edad0a976bdc750213331a99b9d175741ebbcc432b2e90ee1267241fed5b82->leave($__internal_62edad0a976bdc750213331a99b9d175741ebbcc432b2e90ee1267241fed5b82_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_5f0690d5a89978db9e9ff5c3eb7aed9d0e40c665f0bab443f6134736b82e6f6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f0690d5a89978db9e9ff5c3eb7aed9d0e40c665f0bab443f6134736b82e6f6f->enter($__internal_5f0690d5a89978db9e9ff5c3eb7aed9d0e40c665f0bab443f6134736b82e6f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "AppBundle:frontOffice:index.html.twig"));

        // line 4
        echo "
    <h1>Page Resa</h1>

";
        
        $__internal_5f0690d5a89978db9e9ff5c3eb7aed9d0e40c665f0bab443f6134736b82e6f6f->leave($__internal_5f0690d5a89978db9e9ff5c3eb7aed9d0e40c665f0bab443f6134736b82e6f6f_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:frontOffice:index.html.twig";
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

    <h1>Page Resa</h1>

{% endblock %}
", "AppBundle:frontOffice:index.html.twig", "/var/www/html/TPResa_Symfony3/src/AppBundle/Resources/views/frontOffice/index.html.twig");
    }
}
