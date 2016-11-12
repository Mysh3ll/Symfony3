<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_c5c53236a5808a97a76608ed69951b148294a63f29f6947090295edbcaf1f2e7 extends Twig_Template
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
        $__internal_20d090f5de5c0802df4d28e13655ce82b0c00b10fc360d932298433d4c34fd10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20d090f5de5c0802df4d28e13655ce82b0c00b10fc360d932298433d4c34fd10->enter($__internal_20d090f5de5c0802df4d28e13655ce82b0c00b10fc360d932298433d4c34fd10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_20d090f5de5c0802df4d28e13655ce82b0c00b10fc360d932298433d4c34fd10->leave($__internal_20d090f5de5c0802df4d28e13655ce82b0c00b10fc360d932298433d4c34fd10_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_184587b041b8d1b6ca039a570b8b3998197476a9add2c6c0691e720e65be329f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_184587b041b8d1b6ca039a570b8b3998197476a9add2c6c0691e720e65be329f->enter($__internal_184587b041b8d1b6ca039a570b8b3998197476a9add2c6c0691e720e65be329f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_184587b041b8d1b6ca039a570b8b3998197476a9add2c6c0691e720e65be329f->leave($__internal_184587b041b8d1b6ca039a570b8b3998197476a9add2c6c0691e720e65be329f_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c10e205de0427a4cfe69fee931121bbb87d804f35d81f87c60009c62820a4681 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c10e205de0427a4cfe69fee931121bbb87d804f35d81f87c60009c62820a4681->enter($__internal_c10e205de0427a4cfe69fee931121bbb87d804f35d81f87c60009c62820a4681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c10e205de0427a4cfe69fee931121bbb87d804f35d81f87c60009c62820a4681->leave($__internal_c10e205de0427a4cfe69fee931121bbb87d804f35d81f87c60009c62820a4681_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3e9cd8505a6f955907c62b30063e86ae163fc7b3c4f09f56e0cc451c4166eef3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e9cd8505a6f955907c62b30063e86ae163fc7b3c4f09f56e0cc451c4166eef3->enter($__internal_3e9cd8505a6f955907c62b30063e86ae163fc7b3c4f09f56e0cc451c4166eef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        
        $__internal_3e9cd8505a6f955907c62b30063e86ae163fc7b3c4f09f56e0cc451c4166eef3->leave($__internal_3e9cd8505a6f955907c62b30063e86ae163fc7b3c4f09f56e0cc451c4166eef3_prof);

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
