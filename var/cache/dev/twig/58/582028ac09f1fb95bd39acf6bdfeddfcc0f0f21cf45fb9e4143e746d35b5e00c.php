<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_60d6d3293efb26a1b2608ded3aa8f26220e68a1de997011233412028aedd756f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_05bde863dbb9f88bad3a88356e237b0ed938deeae1f30156d6e97b89c0a5a588 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05bde863dbb9f88bad3a88356e237b0ed938deeae1f30156d6e97b89c0a5a588->enter($__internal_05bde863dbb9f88bad3a88356e237b0ed938deeae1f30156d6e97b89c0a5a588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05bde863dbb9f88bad3a88356e237b0ed938deeae1f30156d6e97b89c0a5a588->leave($__internal_05bde863dbb9f88bad3a88356e237b0ed938deeae1f30156d6e97b89c0a5a588_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bbcc032cf4cb0cb400965315e3ddb76629cfdaa56e5f342a84977544e6b908a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbcc032cf4cb0cb400965315e3ddb76629cfdaa56e5f342a84977544e6b908a5->enter($__internal_bbcc032cf4cb0cb400965315e3ddb76629cfdaa56e5f342a84977544e6b908a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Profile:edit.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_bbcc032cf4cb0cb400965315e3ddb76629cfdaa56e5f342a84977544e6b908a5->leave($__internal_bbcc032cf4cb0cb400965315e3ddb76629cfdaa56e5f342a84977544e6b908a5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/var/www/html/TPResa_Symfony3/app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
