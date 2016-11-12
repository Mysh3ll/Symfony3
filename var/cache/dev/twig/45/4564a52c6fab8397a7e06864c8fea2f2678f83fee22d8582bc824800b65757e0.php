<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_afde305c19499cf3d7aab8c440e075fd2d908f72296d0aa94f28774faa7d98fc extends Twig_Template
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
        $__internal_9466d13d71c0476bdc826e007a758f07ab6801a82234a49cf6c886bf2ad11822 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9466d13d71c0476bdc826e007a758f07ab6801a82234a49cf6c886bf2ad11822->enter($__internal_9466d13d71c0476bdc826e007a758f07ab6801a82234a49cf6c886bf2ad11822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9466d13d71c0476bdc826e007a758f07ab6801a82234a49cf6c886bf2ad11822->leave($__internal_9466d13d71c0476bdc826e007a758f07ab6801a82234a49cf6c886bf2ad11822_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_480e36cb95c5775ca6ad903e3aaf890bf0fe66775a753f8e6c3214a6f0d20c1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_480e36cb95c5775ca6ad903e3aaf890bf0fe66775a753f8e6c3214a6f0d20c1d->enter($__internal_480e36cb95c5775ca6ad903e3aaf890bf0fe66775a753f8e6c3214a6f0d20c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_480e36cb95c5775ca6ad903e3aaf890bf0fe66775a753f8e6c3214a6f0d20c1d->leave($__internal_480e36cb95c5775ca6ad903e3aaf890bf0fe66775a753f8e6c3214a6f0d20c1d_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_1ba759a64b3ae13c2bf8323675c51bd30e485e9effd00be68178d819c29fcb3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ba759a64b3ae13c2bf8323675c51bd30e485e9effd00be68178d819c29fcb3f->enter($__internal_1ba759a64b3ae13c2bf8323675c51bd30e485e9effd00be68178d819c29fcb3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1ba759a64b3ae13c2bf8323675c51bd30e485e9effd00be68178d819c29fcb3f->leave($__internal_1ba759a64b3ae13c2bf8323675c51bd30e485e9effd00be68178d819c29fcb3f_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_22c38ff7050946a566ff8b9ee416dfd718805fa43ee1f6798b190fa7e41546b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22c38ff7050946a566ff8b9ee416dfd718805fa43ee1f6798b190fa7e41546b5->enter($__internal_22c38ff7050946a566ff8b9ee416dfd718805fa43ee1f6798b190fa7e41546b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        
        $__internal_22c38ff7050946a566ff8b9ee416dfd718805fa43ee1f6798b190fa7e41546b5->leave($__internal_22c38ff7050946a566ff8b9ee416dfd718805fa43ee1f6798b190fa7e41546b5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/var/www/html/TPResa_Symfony3/app/Resources/FOSUserBundle/views/Resetting/email.txt.twig");
    }
}
