<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_a80006d10a0fe6277352d1827f4a26a0d380f08c22b41aae34caa01b822eaa4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_ee0a270f77c7145703257d2e3c5a961adee98663ca6fe68dde089d8b591075d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee0a270f77c7145703257d2e3c5a961adee98663ca6fe68dde089d8b591075d6->enter($__internal_ee0a270f77c7145703257d2e3c5a961adee98663ca6fe68dde089d8b591075d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee0a270f77c7145703257d2e3c5a961adee98663ca6fe68dde089d8b591075d6->leave($__internal_ee0a270f77c7145703257d2e3c5a961adee98663ca6fe68dde089d8b591075d6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2502b16f703d962fe4b448794db0d364f6988b8ad888d7e19110ebcd66326997 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2502b16f703d962fe4b448794db0d364f6988b8ad888d7e19110ebcd66326997->enter($__internal_2502b16f703d962fe4b448794db0d364f6988b8ad888d7e19110ebcd66326997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Profile:edit.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_2502b16f703d962fe4b448794db0d364f6988b8ad888d7e19110ebcd66326997->leave($__internal_2502b16f703d962fe4b448794db0d364f6988b8ad888d7e19110ebcd66326997_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/var/www/html/TPResa_Symfony3/app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
