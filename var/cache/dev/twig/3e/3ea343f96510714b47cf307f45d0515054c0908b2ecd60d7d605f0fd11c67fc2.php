<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_86cf82eb094c44396eeb86cc7414e4b776b48ec23a282323589b054b661587f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_c330027bd3254bfeaa727f4fe92a0ff97be8a53289cb5d875b467ef2531d9cec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c330027bd3254bfeaa727f4fe92a0ff97be8a53289cb5d875b467ef2531d9cec->enter($__internal_c330027bd3254bfeaa727f4fe92a0ff97be8a53289cb5d875b467ef2531d9cec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c330027bd3254bfeaa727f4fe92a0ff97be8a53289cb5d875b467ef2531d9cec->leave($__internal_c330027bd3254bfeaa727f4fe92a0ff97be8a53289cb5d875b467ef2531d9cec_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2b59013b3753b7a57070236e4aa8e88db8770f0736504c7154f502873c5aaf5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b59013b3753b7a57070236e4aa8e88db8770f0736504c7154f502873c5aaf5d->enter($__internal_2b59013b3753b7a57070236e4aa8e88db8770f0736504c7154f502873c5aaf5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Profile:show.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_2b59013b3753b7a57070236e4aa8e88db8770f0736504c7154f502873c5aaf5d->leave($__internal_2b59013b3753b7a57070236e4aa8e88db8770f0736504c7154f502873c5aaf5d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/var/www/html/TPResa_Symfony3/app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
