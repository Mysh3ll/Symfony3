<?php

/* User/upload_image.html.twig */
class __TwigTemplate_4330eb5e8bdf391c02825bb20a34ff9f4bd19e34d02aa92c10656e588456637d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "User/upload_image.html.twig", 1);
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
        $__internal_b3a1aec4cab5649cb248ba4443135b7ca31263ede5e6d1b93d158b712c293dfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3a1aec4cab5649cb248ba4443135b7ca31263ede5e6d1b93d158b712c293dfb->enter($__internal_b3a1aec4cab5649cb248ba4443135b7ca31263ede5e6d1b93d158b712c293dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "User/upload_image.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3a1aec4cab5649cb248ba4443135b7ca31263ede5e6d1b93d158b712c293dfb->leave($__internal_b3a1aec4cab5649cb248ba4443135b7ca31263ede5e6d1b93d158b712c293dfb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_661e623abf3fac53e71da97f3945c3e8fdadd9b72ddad2220ded08fe44e02410 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_661e623abf3fac53e71da97f3945c3e8fdadd9b72ddad2220ded08fe44e02410->enter($__internal_661e623abf3fac53e71da97f3945c3e8fdadd9b72ddad2220ded08fe44e02410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "User/upload_image.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:upload_image_content.html.twig", "User/upload_image.html.twig", 4)->display($context);
        
        $__internal_661e623abf3fac53e71da97f3945c3e8fdadd9b72ddad2220ded08fe44e02410->leave($__internal_661e623abf3fac53e71da97f3945c3e8fdadd9b72ddad2220ded08fe44e02410_prof);

    }

    public function getTemplateName()
    {
        return "User/upload_image.html.twig";
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
{% include \"FOSUserBundle:Profile:upload_image_content.html.twig\" %}
{% endblock fos_user_content %}
", "User/upload_image.html.twig", "/var/www/html/TPResa_Symfony3/app/Resources/views/User/upload_image.html.twig");
    }
}
