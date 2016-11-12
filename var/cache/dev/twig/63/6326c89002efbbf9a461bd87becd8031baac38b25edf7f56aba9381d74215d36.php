<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_248b0bd6272dcb192ce106552b2b91ea83a14d0f6be7aef13b402b9f063fe400 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_4cebb3019db1bd5a69aac8e868e5df0bc7066c61550d3ab7a8f53fa3f8250103 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cebb3019db1bd5a69aac8e868e5df0bc7066c61550d3ab7a8f53fa3f8250103->enter($__internal_4cebb3019db1bd5a69aac8e868e5df0bc7066c61550d3ab7a8f53fa3f8250103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cebb3019db1bd5a69aac8e868e5df0bc7066c61550d3ab7a8f53fa3f8250103->leave($__internal_4cebb3019db1bd5a69aac8e868e5df0bc7066c61550d3ab7a8f53fa3f8250103_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a3421b5ffb13054e015daafa5e5047d82a1d90b4f48a720f110d966dda988cd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3421b5ffb13054e015daafa5e5047d82a1d90b4f48a720f110d966dda988cd8->enter($__internal_a3421b5ffb13054e015daafa5e5047d82a1d90b4f48a720f110d966dda988cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:show.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_a3421b5ffb13054e015daafa5e5047d82a1d90b4f48a720f110d966dda988cd8->leave($__internal_a3421b5ffb13054e015daafa5e5047d82a1d90b4f48a720f110d966dda988cd8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/var/www/html/TPResa_Symfony3/app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
