<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_f4bda64ec13a934d8d4e2db00d75b1bed9d891248569f54d0ebca3f0c6a27a7f extends Twig_Template
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
        $__internal_ea64213b9b4581c2fb69968ad848f30c606726c59131c23c672730848f84798a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea64213b9b4581c2fb69968ad848f30c606726c59131c23c672730848f84798a->enter($__internal_ea64213b9b4581c2fb69968ad848f30c606726c59131c23c672730848f84798a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea64213b9b4581c2fb69968ad848f30c606726c59131c23c672730848f84798a->leave($__internal_ea64213b9b4581c2fb69968ad848f30c606726c59131c23c672730848f84798a_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_fe7f1d01e22f6385c0a0ddfed799b3c7908f8951a47265add84d93bfdc144434 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe7f1d01e22f6385c0a0ddfed799b3c7908f8951a47265add84d93bfdc144434->enter($__internal_fe7f1d01e22f6385c0a0ddfed799b3c7908f8951a47265add84d93bfdc144434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle::layout.html.twig"));

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
        
        $__internal_fe7f1d01e22f6385c0a0ddfed799b3c7908f8951a47265add84d93bfdc144434->leave($__internal_fe7f1d01e22f6385c0a0ddfed799b3c7908f8951a47265add84d93bfdc144434_prof);

    }

    // line 19
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8a2fce73dd2eeaf29321424f3ef0ade21bdeba6062ef868eca9104a8eacbd3a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a2fce73dd2eeaf29321424f3ef0ade21bdeba6062ef868eca9104a8eacbd3a4->enter($__internal_8a2fce73dd2eeaf29321424f3ef0ade21bdeba6062ef868eca9104a8eacbd3a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle::layout.html.twig"));

        // line 20
        echo "        ";
        
        $__internal_8a2fce73dd2eeaf29321424f3ef0ade21bdeba6062ef868eca9104a8eacbd3a4->leave($__internal_8a2fce73dd2eeaf29321424f3ef0ade21bdeba6062ef868eca9104a8eacbd3a4_prof);

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
