<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_385f274dcd25f30d6f95bb095f8eefbcc156f5655f0d127861c2a1d03f12a821 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d0afd3d35628e2249a04a9f15491ffe4b7a064a5470dc76acedddc2a1686bb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d0afd3d35628e2249a04a9f15491ffe4b7a064a5470dc76acedddc2a1686bb8->enter($__internal_0d0afd3d35628e2249a04a9f15491ffe4b7a064a5470dc76acedddc2a1686bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_0d0afd3d35628e2249a04a9f15491ffe4b7a064a5470dc76acedddc2a1686bb8->leave($__internal_0d0afd3d35628e2249a04a9f15491ffe4b7a064a5470dc76acedddc2a1686bb8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/TPResa_Symfony3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
