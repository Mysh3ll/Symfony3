<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_f143dbda0770e7474164d4f3ad6e14772550ff968cf8e06e189d4251a4856489 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_f92aae2ec3208d9f518ce48860865c88d3b34bed6c3da833d787c09414412303 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f92aae2ec3208d9f518ce48860865c88d3b34bed6c3da833d787c09414412303->enter($__internal_f92aae2ec3208d9f518ce48860865c88d3b34bed6c3da833d787c09414412303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f92aae2ec3208d9f518ce48860865c88d3b34bed6c3da833d787c09414412303->leave($__internal_f92aae2ec3208d9f518ce48860865c88d3b34bed6c3da833d787c09414412303_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_76a90982b102820cc2d4f7972a101acde6b332a900142a8223f085bd5091ed83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76a90982b102820cc2d4f7972a101acde6b332a900142a8223f085bd5091ed83->enter($__internal_76a90982b102820cc2d4f7972a101acde6b332a900142a8223f085bd5091ed83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:list.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_76a90982b102820cc2d4f7972a101acde6b332a900142a8223f085bd5091ed83->leave($__internal_76a90982b102820cc2d4f7972a101acde6b332a900142a8223f085bd5091ed83_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/var/www/html/TPResa_Symfony3/app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
