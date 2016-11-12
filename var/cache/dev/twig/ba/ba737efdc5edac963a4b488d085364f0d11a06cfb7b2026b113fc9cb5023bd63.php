<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_267e83b0f6efc1cff9caddb5f37bf8e4c0becb72b9ccaddfcb7b90a91a85ae48 extends Twig_Template
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
        $__internal_ac050ef6207678b82fa9cb025b4d68d8738d768c6a09b6536dd689b773efeb7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac050ef6207678b82fa9cb025b4d68d8738d768c6a09b6536dd689b773efeb7a->enter($__internal_ac050ef6207678b82fa9cb025b4d68d8738d768c6a09b6536dd689b773efeb7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac050ef6207678b82fa9cb025b4d68d8738d768c6a09b6536dd689b773efeb7a->leave($__internal_ac050ef6207678b82fa9cb025b4d68d8738d768c6a09b6536dd689b773efeb7a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_518d7a4572f582a870e6b2213bd315592ba64c67a5046e7557af68d481c96d31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_518d7a4572f582a870e6b2213bd315592ba64c67a5046e7557af68d481c96d31->enter($__internal_518d7a4572f582a870e6b2213bd315592ba64c67a5046e7557af68d481c96d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:register.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_518d7a4572f582a870e6b2213bd315592ba64c67a5046e7557af68d481c96d31->leave($__internal_518d7a4572f582a870e6b2213bd315592ba64c67a5046e7557af68d481c96d31_prof);

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
