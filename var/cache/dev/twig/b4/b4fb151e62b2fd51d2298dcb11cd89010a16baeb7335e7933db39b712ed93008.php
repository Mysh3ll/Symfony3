<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_b585f8ca17d0cf7a108dc107e30ef67eb8ac54f4149239e5d201fe5314194663 extends Twig_Template
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
        $__internal_c36b5a4ca7709e1c2ea211843f974b2ef8f8abfce145831891f7c45393b1b587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c36b5a4ca7709e1c2ea211843f974b2ef8f8abfce145831891f7c45393b1b587->enter($__internal_c36b5a4ca7709e1c2ea211843f974b2ef8f8abfce145831891f7c45393b1b587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c36b5a4ca7709e1c2ea211843f974b2ef8f8abfce145831891f7c45393b1b587->leave($__internal_c36b5a4ca7709e1c2ea211843f974b2ef8f8abfce145831891f7c45393b1b587_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_12688bd9bb827077a62bd3c6260dfbf427d22fa6b7375541ce64a6378929e09c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12688bd9bb827077a62bd3c6260dfbf427d22fa6b7375541ce64a6378929e09c->enter($__internal_12688bd9bb827077a62bd3c6260dfbf427d22fa6b7375541ce64a6378929e09c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_12688bd9bb827077a62bd3c6260dfbf427d22fa6b7375541ce64a6378929e09c->leave($__internal_12688bd9bb827077a62bd3c6260dfbf427d22fa6b7375541ce64a6378929e09c_prof);

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
