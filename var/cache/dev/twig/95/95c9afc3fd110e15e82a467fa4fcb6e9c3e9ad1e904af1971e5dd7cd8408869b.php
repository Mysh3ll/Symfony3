<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_8cccf784d38df1ec82bbb6a0c1cd560a02ab1f90109c4eab51ae73b991002877 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a092afd5fef49357451e3230092f66791ce8187f7737895754416824ce43217a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a092afd5fef49357451e3230092f66791ce8187f7737895754416824ce43217a->enter($__internal_a092afd5fef49357451e3230092f66791ce8187f7737895754416824ce43217a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a092afd5fef49357451e3230092f66791ce8187f7737895754416824ce43217a->leave($__internal_a092afd5fef49357451e3230092f66791ce8187f7737895754416824ce43217a_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0b8251b4e2f9e554a97685dd298fe060724da877c907795ed72051d54f471f12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b8251b4e2f9e554a97685dd298fe060724da877c907795ed72051d54f471f12->enter($__internal_0b8251b4e2f9e554a97685dd298fe060724da877c907795ed72051d54f471f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0b8251b4e2f9e554a97685dd298fe060724da877c907795ed72051d54f471f12->leave($__internal_0b8251b4e2f9e554a97685dd298fe060724da877c907795ed72051d54f471f12_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e37c14f84487e76d3c72cb99a19334287aaac461f7e8b3254cfedee9413e9320 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e37c14f84487e76d3c72cb99a19334287aaac461f7e8b3254cfedee9413e9320->enter($__internal_e37c14f84487e76d3c72cb99a19334287aaac461f7e8b3254cfedee9413e9320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e37c14f84487e76d3c72cb99a19334287aaac461f7e8b3254cfedee9413e9320->leave($__internal_e37c14f84487e76d3c72cb99a19334287aaac461f7e8b3254cfedee9413e9320_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_5dd90f0cc8927bd7826b91a76763b8efce3db38efc0ff1add16e359b63122367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dd90f0cc8927bd7826b91a76763b8efce3db38efc0ff1add16e359b63122367->enter($__internal_5dd90f0cc8927bd7826b91a76763b8efce3db38efc0ff1add16e359b63122367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        
        $__internal_5dd90f0cc8927bd7826b91a76763b8efce3db38efc0ff1add16e359b63122367->leave($__internal_5dd90f0cc8927bd7826b91a76763b8efce3db38efc0ff1add16e359b63122367_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{% autoescape false %}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/var/www/html/TPResa_Symfony3/app/Resources/FOSUserBundle/views/Registration/email.txt.twig");
    }
}
