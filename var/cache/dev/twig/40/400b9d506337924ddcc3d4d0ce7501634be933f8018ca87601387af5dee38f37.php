<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_3547e08f6d96c0dc30e99af6d363f9a9b140bf9d84fed8f2102479ae04cd26e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_9f3976c3bdd5d45a6c326b4dde516ae178eb74804b7038b4775a176b1f14438b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f3976c3bdd5d45a6c326b4dde516ae178eb74804b7038b4775a176b1f14438b->enter($__internal_9f3976c3bdd5d45a6c326b4dde516ae178eb74804b7038b4775a176b1f14438b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f3976c3bdd5d45a6c326b4dde516ae178eb74804b7038b4775a176b1f14438b->leave($__internal_9f3976c3bdd5d45a6c326b4dde516ae178eb74804b7038b4775a176b1f14438b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1ce5db511ffb05bdc3e7272cdc61a049e4bc5619d8b4565d3f4da7fcbdc8d099 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ce5db511ffb05bdc3e7272cdc61a049e4bc5619d8b4565d3f4da7fcbdc8d099->enter($__internal_1ce5db511ffb05bdc3e7272cdc61a049e4bc5619d8b4565d3f4da7fcbdc8d099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:reset.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_1ce5db511ffb05bdc3e7272cdc61a049e4bc5619d8b4565d3f4da7fcbdc8d099->leave($__internal_1ce5db511ffb05bdc3e7272cdc61a049e4bc5619d8b4565d3f4da7fcbdc8d099_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/var/www/html/TPResa_Symfony3/app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
