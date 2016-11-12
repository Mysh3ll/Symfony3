<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_3ece5525365a36e3044f4f25faf0021f4d7db645a666bc7d96c6024775142972 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1774bb42bd28a7db1b1116d0c67ef4cefbb5e78fd1982d3b6062ecf9dcd0569d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1774bb42bd28a7db1b1116d0c67ef4cefbb5e78fd1982d3b6062ecf9dcd0569d->enter($__internal_1774bb42bd28a7db1b1116d0c67ef4cefbb5e78fd1982d3b6062ecf9dcd0569d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1774bb42bd28a7db1b1116d0c67ef4cefbb5e78fd1982d3b6062ecf9dcd0569d->leave($__internal_1774bb42bd28a7db1b1116d0c67ef4cefbb5e78fd1982d3b6062ecf9dcd0569d_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_7208f241cb2dbfcb3a31b6615b08fa0d28b32e8dbe466cae902c31156ab50674 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7208f241cb2dbfcb3a31b6615b08fa0d28b32e8dbe466cae902c31156ab50674->enter($__internal_7208f241cb2dbfcb3a31b6615b08fa0d28b32e8dbe466cae902c31156ab50674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle::layout.html.twig"));

        // line 3
        echo "
    <div class=\"container\">
        ";
        // line 5
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 6
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 7
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 8
                    echo "                    <div class=\"alert alert-info\" role=\"alert\">
                        <div class=\"flash-";
                    // line 9
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                            ";
                    // line 10
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                        </div>
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 14
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "        ";
        }
        // line 16
        echo "    </div>

    <div>
        ";
        // line 19
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 21
        echo "    </div>
";
        
        $__internal_7208f241cb2dbfcb3a31b6615b08fa0d28b32e8dbe466cae902c31156ab50674->leave($__internal_7208f241cb2dbfcb3a31b6615b08fa0d28b32e8dbe466cae902c31156ab50674_prof);

    }

    // line 19
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0b16ce0354242a90936c856fac2f22157d44f9d3379eb28d1622f46466a2b8f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b16ce0354242a90936c856fac2f22157d44f9d3379eb28d1622f46466a2b8f0->enter($__internal_0b16ce0354242a90936c856fac2f22157d44f9d3379eb28d1622f46466a2b8f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle::layout.html.twig"));

        // line 20
        echo "        ";
        
        $__internal_0b16ce0354242a90936c856fac2f22157d44f9d3379eb28d1622f46466a2b8f0->leave($__internal_0b16ce0354242a90936c856fac2f22157d44f9d3379eb28d1622f46466a2b8f0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 20,  98 => 19,  90 => 21,  88 => 19,  83 => 16,  80 => 15,  74 => 14,  64 => 10,  60 => 9,  57 => 8,  52 => 7,  47 => 6,  45 => 5,  41 => 3,  35 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block content %}

    <div class=\"container\">
        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"alert alert-info\" role=\"alert\">
                        <div class=\"flash-{{ type }}\">
                            {{ message }}
                        </div>
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}
    </div>

    <div>
        {% block fos_user_content %}
        {% endblock fos_user_content %}
    </div>
{% endblock %}
", "FOSUserBundle::layout.html.twig", "/var/www/html/TPResa_Symfony3/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
