<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_13dc4a14247a468ebf150da909004f006750616872e8d23633f03cc87575c26b extends Twig_Template
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
        $__internal_7130389ba2a11d38a4d9bd5d921c25bca5e060e59ae6c08bff5f9a9add8da063 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7130389ba2a11d38a4d9bd5d921c25bca5e060e59ae6c08bff5f9a9add8da063->enter($__internal_7130389ba2a11d38a4d9bd5d921c25bca5e060e59ae6c08bff5f9a9add8da063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7130389ba2a11d38a4d9bd5d921c25bca5e060e59ae6c08bff5f9a9add8da063->leave($__internal_7130389ba2a11d38a4d9bd5d921c25bca5e060e59ae6c08bff5f9a9add8da063_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dd44e2db8dec5232e2818b25fc4074a0fc60ff3c3fddd91fa12a3883c81f1cb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd44e2db8dec5232e2818b25fc4074a0fc60ff3c3fddd91fa12a3883c81f1cb1->enter($__internal_dd44e2db8dec5232e2818b25fc4074a0fc60ff3c3fddd91fa12a3883c81f1cb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Security:login.html.twig"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_dd44e2db8dec5232e2818b25fc4074a0fc60ff3c3fddd91fa12a3883c81f1cb1->leave($__internal_dd44e2db8dec5232e2818b25fc4074a0fc60ff3c3fddd91fa12a3883c81f1cb1_prof);

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
