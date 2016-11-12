<?php

/* :default:index.html.twig */
class __TwigTemplate_0a8056971b227f92d437f13d692621365aa8d5b41cca712fa351f684e67b2ee0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
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
        $__internal_74f5e7f011227f386732e55c22e858f01eecb752a04f55316869218426d12e76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74f5e7f011227f386732e55c22e858f01eecb752a04f55316869218426d12e76->enter($__internal_74f5e7f011227f386732e55c22e858f01eecb752a04f55316869218426d12e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74f5e7f011227f386732e55c22e858f01eecb752a04f55316869218426d12e76->leave($__internal_74f5e7f011227f386732e55c22e858f01eecb752a04f55316869218426d12e76_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_3866f464bab6ec24134c278aa38466501eb9be5eba99e87ad4d3a42955d4a1b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3866f464bab6ec24134c278aa38466501eb9be5eba99e87ad4d3a42955d4a1b1->enter($__internal_3866f464bab6ec24134c278aa38466501eb9be5eba99e87ad4d3a42955d4a1b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", ":default:index.html.twig"));

        // line 4
        echo "
    <h1>Page accueil</h1>

";
        
        $__internal_3866f464bab6ec24134c278aa38466501eb9be5eba99e87ad4d3a42955d4a1b1->leave($__internal_3866f464bab6ec24134c278aa38466501eb9be5eba99e87ad4d3a42955d4a1b1_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
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

    <h1>Page accueil</h1>

{% endblock %}
", ":default:index.html.twig", "/var/www/html/TPResa_Symfony3/app/Resources/views/default/index.html.twig");
    }
}
