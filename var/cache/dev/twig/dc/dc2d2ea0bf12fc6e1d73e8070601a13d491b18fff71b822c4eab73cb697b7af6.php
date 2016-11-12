<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_478e846522bb3e9002ebc6f940e8c59c192218dbe7744cf55147d204e29328f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_0dbf75457f3b13dd4df605c6045c36e54271a11a9bcca489ca85e66a3545a003 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dbf75457f3b13dd4df605c6045c36e54271a11a9bcca489ca85e66a3545a003->enter($__internal_0dbf75457f3b13dd4df605c6045c36e54271a11a9bcca489ca85e66a3545a003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0dbf75457f3b13dd4df605c6045c36e54271a11a9bcca489ca85e66a3545a003->leave($__internal_0dbf75457f3b13dd4df605c6045c36e54271a11a9bcca489ca85e66a3545a003_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2f2060c710dd0f00af7d272e325c5b6547acc3704b25adf061309397a0a32c15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f2060c710dd0f00af7d272e325c5b6547acc3704b25adf061309397a0a32c15->enter($__internal_2f2060c710dd0f00af7d272e325c5b6547acc3704b25adf061309397a0a32c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:confirmed.html.twig"));

        // line 6
        echo "    <br/>
    <br/>
    <div class=\"container\">
        <div class=\"panel panel-success\">
            <div class=\"panel-heading\"><h3>Compte validé</h3></div>
            <div class=\"panel-body\">
                ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "
                <br/>
                <a class=\"btn btn-custom pull-right\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Retour à l'accueil</a>
            </div>
        </div>
    </div>
    ";
        // line 19
        echo "    ";
        // line 20
        echo "    ";
        // line 21
        echo "    ";
        
        $__internal_2f2060c710dd0f00af7d272e325c5b6547acc3704b25adf061309397a0a32c15->leave($__internal_2f2060c710dd0f00af7d272e325c5b6547acc3704b25adf061309397a0a32c15_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 21,  62 => 20,  60 => 19,  53 => 14,  48 => 12,  40 => 6,  34 => 5,  11 => 1,);
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
    <br/>
    <br/>
    <div class=\"container\">
        <div class=\"panel panel-success\">
            <div class=\"panel-heading\"><h3>Compte validé</h3></div>
            <div class=\"panel-body\">
                {{ 'registration.confirmed'|trans({'%username%': user.username}) }}
                <br/>
                <a class=\"btn btn-custom pull-right\" href=\"{{ path('homepage') }}\">Retour à l'accueil</a>
            </div>
        </div>
    </div>
    {#<p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>#}
    {#{% if targetUrl %}#}
    {#<p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>#}
    {#{% endif %}#}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/var/www/html/TPResa_Symfony3/app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
