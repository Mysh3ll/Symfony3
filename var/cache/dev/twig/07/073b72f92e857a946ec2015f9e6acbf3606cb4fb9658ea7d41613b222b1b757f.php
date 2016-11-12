<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_4771fef813396c8820ec9962e81b28f51c638ad40a405104d71672aa24deabfe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_306b367f9ff8be5cf45c6822d164d39086b3029d91265bb06e638dc78da6cc01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_306b367f9ff8be5cf45c6822d164d39086b3029d91265bb06e638dc78da6cc01->enter($__internal_306b367f9ff8be5cf45c6822d164d39086b3029d91265bb06e638dc78da6cc01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_306b367f9ff8be5cf45c6822d164d39086b3029d91265bb06e638dc78da6cc01->leave($__internal_306b367f9ff8be5cf45c6822d164d39086b3029d91265bb06e638dc78da6cc01_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f2d951b2b6dd42a5b6767fc0eda4b69ff328be88408ca358186eb74e5a121a5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2d951b2b6dd42a5b6767fc0eda4b69ff328be88408ca358186eb74e5a121a5a->enter($__internal_f2d951b2b6dd42a5b6767fc0eda4b69ff328be88408ca358186eb74e5a121a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:check_email.html.twig"));

        // line 6
        echo "<br/>
    <br/>
    <div class=\"container\">
        <div class=\"panel panel-info\">
            <div class=\"panel-heading\"><h3>Réinitialisation du mot de passe</h3></div>
            <div class=\"panel-body\">
                ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true);
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_f2d951b2b6dd42a5b6767fc0eda4b69ff328be88408ca358186eb74e5a121a5a->leave($__internal_f2d951b2b6dd42a5b6767fc0eda4b69ff328be88408ca358186eb74e5a121a5a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 12,  40 => 6,  34 => 5,  11 => 1,);
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
        <div class=\"panel panel-info\">
            <div class=\"panel-heading\"><h3>Réinitialisation du mot de passe</h3></div>
            <div class=\"panel-body\">
                {{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime}) }}
            </div>
        </div>
    </div>
{#<p>#}
{#{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime}) }}#}
{#</p>#}
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/var/www/html/TPResa_Symfony3/app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
