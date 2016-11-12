<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_d8d447272ed51a374cf2ed12d7e23765875f685edc519a6f2eb21259298dadde extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_b5cdbee229acd1f32434dce4d3ecd9821ef2ec0833e4e8ed10e158ec22d6279b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5cdbee229acd1f32434dce4d3ecd9821ef2ec0833e4e8ed10e158ec22d6279b->enter($__internal_b5cdbee229acd1f32434dce4d3ecd9821ef2ec0833e4e8ed10e158ec22d6279b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5cdbee229acd1f32434dce4d3ecd9821ef2ec0833e4e8ed10e158ec22d6279b->leave($__internal_b5cdbee229acd1f32434dce4d3ecd9821ef2ec0833e4e8ed10e158ec22d6279b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_96c7ccb9999d0578d2bdb75264b8731031e74495c4274e58a79482f034cee2b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96c7ccb9999d0578d2bdb75264b8731031e74495c4274e58a79482f034cee2b7->enter($__internal_96c7ccb9999d0578d2bdb75264b8731031e74495c4274e58a79482f034cee2b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_96c7ccb9999d0578d2bdb75264b8731031e74495c4274e58a79482f034cee2b7->leave($__internal_96c7ccb9999d0578d2bdb75264b8731031e74495c4274e58a79482f034cee2b7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/var/www/html/TPResa_Symfony3/app/Resources/FOSUserBundle/views/ChangePassword/change_password.html.twig");
    }
}
