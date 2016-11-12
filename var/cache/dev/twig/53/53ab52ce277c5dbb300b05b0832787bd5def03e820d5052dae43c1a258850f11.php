<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_2b32fb2470aa36eeca13b7973b839ce80e6a8ab91ccde9778996446fddbff1d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_feed190b0eb98743934b8eb26327888760f378cac35ec3cec85c4f2e50961eac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feed190b0eb98743934b8eb26327888760f378cac35ec3cec85c4f2e50961eac->enter($__internal_feed190b0eb98743934b8eb26327888760f378cac35ec3cec85c4f2e50961eac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_feed190b0eb98743934b8eb26327888760f378cac35ec3cec85c4f2e50961eac->leave($__internal_feed190b0eb98743934b8eb26327888760f378cac35ec3cec85c4f2e50961eac_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_95503fc4041959bc95d85d1574cc1d6271df7cbd19ea0bb1c5df41addf64f3c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95503fc4041959bc95d85d1574cc1d6271df7cbd19ea0bb1c5df41addf64f3c5->enter($__internal_95503fc4041959bc95d85d1574cc1d6271df7cbd19ea0bb1c5df41addf64f3c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_95503fc4041959bc95d85d1574cc1d6271df7cbd19ea0bb1c5df41addf64f3c5->leave($__internal_95503fc4041959bc95d85d1574cc1d6271df7cbd19ea0bb1c5df41addf64f3c5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_65c487940ddad49849f06c610fcd41661a41b113e3294838f911548d5cbcc7e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65c487940ddad49849f06c610fcd41661a41b113e3294838f911548d5cbcc7e3->enter($__internal_65c487940ddad49849f06c610fcd41661a41b113e3294838f911548d5cbcc7e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_65c487940ddad49849f06c610fcd41661a41b113e3294838f911548d5cbcc7e3->leave($__internal_65c487940ddad49849f06c610fcd41661a41b113e3294838f911548d5cbcc7e3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_94929544799f1263627c75df7e5495d372917ec705c54d33a1952c96b7ff08bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94929544799f1263627c75df7e5495d372917ec705c54d33a1952c96b7ff08bd->enter($__internal_94929544799f1263627c75df7e5495d372917ec705c54d33a1952c96b7ff08bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_94929544799f1263627c75df7e5495d372917ec705c54d33a1952c96b7ff08bd->leave($__internal_94929544799f1263627c75df7e5495d372917ec705c54d33a1952c96b7ff08bd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/TPResa_Symfony3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
