<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_09e2c45b1296f0ee0197d539338fe9dd9eac1e70ea04798b02d121891aed0e1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_0e5024977ba1fc8e32f01cd4272db503ed71cb9466e04e8ddc43d0590eee8d2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e5024977ba1fc8e32f01cd4272db503ed71cb9466e04e8ddc43d0590eee8d2e->enter($__internal_0e5024977ba1fc8e32f01cd4272db503ed71cb9466e04e8ddc43d0590eee8d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e5024977ba1fc8e32f01cd4272db503ed71cb9466e04e8ddc43d0590eee8d2e->leave($__internal_0e5024977ba1fc8e32f01cd4272db503ed71cb9466e04e8ddc43d0590eee8d2e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bd1a79e9736deb0d1f4b05e5237c7c6ddad1503515aa829f02b82020f49d3cf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd1a79e9736deb0d1f4b05e5237c7c6ddad1503515aa829f02b82020f49d3cf5->enter($__internal_bd1a79e9736deb0d1f4b05e5237c7c6ddad1503515aa829f02b82020f49d3cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:register.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_bd1a79e9736deb0d1f4b05e5237c7c6ddad1503515aa829f02b82020f49d3cf5->leave($__internal_bd1a79e9736deb0d1f4b05e5237c7c6ddad1503515aa829f02b82020f49d3cf5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/var/www/html/TPResa_Symfony3/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
