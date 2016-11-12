<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_dac56971596814cfcfcf3472e5c282129a3c94904a1f94af6c5b200cc30ff6a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_4c9d051398423fd320ac88b2d974efffa9bcb9757fdcf115e51ac857ab8cf8a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c9d051398423fd320ac88b2d974efffa9bcb9757fdcf115e51ac857ab8cf8a0->enter($__internal_4c9d051398423fd320ac88b2d974efffa9bcb9757fdcf115e51ac857ab8cf8a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c9d051398423fd320ac88b2d974efffa9bcb9757fdcf115e51ac857ab8cf8a0->leave($__internal_4c9d051398423fd320ac88b2d974efffa9bcb9757fdcf115e51ac857ab8cf8a0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_61135c9adef8c4909bbc79ed9c2a58ff9b5a3b4eea758d246223c8a3dc8611b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61135c9adef8c4909bbc79ed9c2a58ff9b5a3b4eea758d246223c8a3dc8611b5->enter($__internal_61135c9adef8c4909bbc79ed9c2a58ff9b5a3b4eea758d246223c8a3dc8611b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Security:login.html.twig"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_61135c9adef8c4909bbc79ed9c2a58ff9b5a3b4eea758d246223c8a3dc8611b5->leave($__internal_61135c9adef8c4909bbc79ed9c2a58ff9b5a3b4eea758d246223c8a3dc8611b5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('FOSUserBundle:Security:login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/var/www/html/TPResa_Symfony3/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
