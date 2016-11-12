<?php

/* default/index.html.twig */
class __TwigTemplate_bd9e1df19075bcf893e20423d60e58b89615eafb3a64c16bfd11c919ea4ce46f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_715528328e0253746222222f67f082b5dc18bab1fbca150d5238bbbc0e5bfee8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_715528328e0253746222222f67f082b5dc18bab1fbca150d5238bbbc0e5bfee8->enter($__internal_715528328e0253746222222f67f082b5dc18bab1fbca150d5238bbbc0e5bfee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_715528328e0253746222222f67f082b5dc18bab1fbca150d5238bbbc0e5bfee8->leave($__internal_715528328e0253746222222f67f082b5dc18bab1fbca150d5238bbbc0e5bfee8_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_caa941e61c960d8a6b92dc22eedc9d5cac2e76d102faacc52373e08467dea34f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caa941e61c960d8a6b92dc22eedc9d5cac2e76d102faacc52373e08467dea34f->enter($__internal_caa941e61c960d8a6b92dc22eedc9d5cac2e76d102faacc52373e08467dea34f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "default/index.html.twig"));

        // line 4
        echo "
    <h1>Page accueil</h1>

";
        
        $__internal_caa941e61c960d8a6b92dc22eedc9d5cac2e76d102faacc52373e08467dea34f->leave($__internal_caa941e61c960d8a6b92dc22eedc9d5cac2e76d102faacc52373e08467dea34f_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
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
", "default/index.html.twig", "/var/www/html/TPResa_Symfony3/app/Resources/views/default/index.html.twig");
    }
}
