<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_1edad513813f3da81f1de925435d89aad31c4e36fd7be185e336b1f08eb8693b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_469211c7e3e298cd3553335d15d29b6cca7a2502af6866b55e76a14a81181201 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_469211c7e3e298cd3553335d15d29b6cca7a2502af6866b55e76a14a81181201->enter($__internal_469211c7e3e298cd3553335d15d29b6cca7a2502af6866b55e76a14a81181201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_469211c7e3e298cd3553335d15d29b6cca7a2502af6866b55e76a14a81181201->leave($__internal_469211c7e3e298cd3553335d15d29b6cca7a2502af6866b55e76a14a81181201_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_afa1a3091149fdff055af233e6a2745f98a715bd30006d9fbd649c03a8352dcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afa1a3091149fdff055af233e6a2745f98a715bd30006d9fbd649c03a8352dcd->enter($__internal_afa1a3091149fdff055af233e6a2745f98a715bd30006d9fbd649c03a8352dcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:check_email.html.twig"));

        // line 6
        echo "    <div class=\"container\">
        <div class=\"panel panel-success\">
            <div class=\"panel-heading\"><h3>Confirmation de compte</h3></div>
            <div class=\"panel-body\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</div>
        </div>
    </div>
    ";
        
        $__internal_afa1a3091149fdff055af233e6a2745f98a715bd30006d9fbd649c03a8352dcd->leave($__internal_afa1a3091149fdff055af233e6a2745f98a715bd30006d9fbd649c03a8352dcd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 9,  40 => 6,  34 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <div class=\"container\">
        <div class=\"panel panel-success\">
            <div class=\"panel-heading\"><h3>Confirmation de compte</h3></div>
            <div class=\"panel-body\">{{ 'registration.check_email'|trans({'%email%': user.email}) }}</div>
        </div>
    </div>
    {#<p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>#}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/var/www/html/TPResa_Symfony3/app/Resources/FOSUserBundle/views/Registration/check_email.html.twig");
    }
}
