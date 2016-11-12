<?php

/* FOSUserBundle:Resetting:reset_content.html.twig */
class __TwigTemplate_bd3b80853381e0a0f254345ccd05abafdc0bdcc42821468f1ceb18e689a33e4c extends Twig_Template
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
        $__internal_a35f541e8b285fe79c08580d6cb50e9f5c87b137180b8c6d846a594a9c9320cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a35f541e8b285fe79c08580d6cb50e9f5c87b137180b8c6d846a594a9c9320cc->enter($__internal_a35f541e8b285fe79c08580d6cb50e9f5c87b137180b8c6d846a594a9c9320cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset_content.html.twig"));

        // line 2
        echo "<section id=\"login\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"form-wrap\">
                    <h1>Réinitialisation de votre mot de passe</h1>

                    ";
        // line 10
        echo "                    ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_reset", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "attr" => array("class" => "fos_user_resetting_reset", "id" => "login-form")));
        echo "

                    ";
        // line 13
        echo "                    ";
        $context["class"] = "";
        // line 14
        echo "                    ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), "vars", array()), "valid", array())) {
            // line 15
            echo "                        ";
            $context["class"] = "has-error";
            // line 16
            echo "                    ";
        }
        // line 17
        echo "                    <div class=\"form-group ";
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
        echo "\">
                        ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Votre nouveau mot de passe"));
        // line 19
        echo "
                        ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 22
        echo "                        ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), "vars", array()), "valid", array())) {
            // line 23
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), "vars", array()), "errors", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 24
                echo "                                <span class=\"help-block\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</span>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "                        ";
        }
        // line 27
        echo "                    </div>

                    ";
        // line 30
        echo "                    ";
        $context["class"] = "";
        // line 31
        echo "                    ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), "vars", array()), "valid", array())) {
            // line 32
            echo "                        ";
            $context["class"] = "has-error";
            // line 33
            echo "                    ";
        }
        // line 34
        echo "                    <div class=\"form-group ";
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
        echo "\">
                        ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Confirmation de votre nouveau mot de passe"));
        echo "
                        ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 38
        echo "                        ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), "vars", array()), "valid", array())) {
            // line 39
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), "vars", array()), "errors", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 40
                echo "                                <span class=\"help-block\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</span>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "                        ";
        }
        // line 43
        echo "                    </div>

                    ";
        // line 46
        echo "                    <div class=\"form-group\">
                        ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
                    </div>

                    ";
        // line 51
        echo "                    <input type=\"submit\" class=\"btn btn-custom btn-lg btn-block\"
                           value=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">

                    ";
        // line 55
        echo "                    ";
        // line 56
        echo "                        ";
        // line 57
        echo "                    ";
        // line 58
        echo "                    ";
        // line 59
        echo "                    ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
</section>
";
        
        $__internal_a35f541e8b285fe79c08580d6cb50e9f5c87b137180b8c6d846a594a9c9320cc->leave($__internal_a35f541e8b285fe79c08580d6cb50e9f5c87b137180b8c6d846a594a9c9320cc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 59,  159 => 58,  157 => 57,  155 => 56,  153 => 55,  148 => 52,  145 => 51,  139 => 47,  136 => 46,  132 => 43,  129 => 42,  120 => 40,  115 => 39,  112 => 38,  108 => 36,  104 => 35,  99 => 34,  96 => 33,  93 => 32,  90 => 31,  87 => 30,  83 => 27,  80 => 26,  71 => 24,  66 => 23,  63 => 22,  59 => 20,  56 => 19,  54 => 18,  49 => 17,  46 => 16,  43 => 15,  40 => 14,  37 => 13,  31 => 10,  22 => 2,);
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
<section id=\"login\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"form-wrap\">
                    <h1>Réinitialisation de votre mot de passe</h1>

                    {# FORM START#}
                    {{ form_start(form, { 'action': path('fos_user_resetting_reset', {'token': token}), 'attr': { 'class': 'fos_user_resetting_reset', 'id' : 'login-form' } }) }}

                    {# INPUT NEW_PASSWORD#}
                    {% set class = '' %}
                    {% if not form.plainPassword.first.vars.valid %}
                        {% set class = 'has-error' %}
                    {% endif %}
                    <div class=\"form-group {{ class }}\">
                        {{ form_label(form.plainPassword.first, 'Votre nouveau mot de passe', {'label_attr': {'class':
                            'control-label'}}) }}
                        {{ form_widget(form.plainPassword.first, {'attr':{'class':'form-control'}}) }}
                        {#{{ form_errors(form.plainPassword.first) }}#}
                        {% if not form.plainPassword.first.vars.valid %}
                            {% for error in form.plainPassword.first.vars.errors %}
                                <span class=\"help-block\">{{ error.message }}</span>
                            {% endfor %}
                        {% endif %}
                    </div>

                    {# INPUT NEW_PASSWORD_CONFIRMATION#}
                    {% set class = '' %}
                    {% if not form.plainPassword.second.vars.valid %}
                        {% set class = 'has-error' %}
                    {% endif %}
                    <div class=\"form-group {{ class }}\">
                        {{ form_label(form.plainPassword.second, 'Confirmation de votre nouveau mot de passe', {'label_attr': {'class': 'control-label'}}) }}
                        {{ form_widget(form.plainPassword.second, {'attr':{'class':'form-control'}}) }}
                        {#{{ form_errors(form.plainPassword.second) }}#}
                        {% if not form.plainPassword.second.vars.valid %}
                            {% for error in form.plainPassword.second.vars.errors %}
                                <span class=\"help-block\">{{ error.message }}</span>
                            {% endfor %}
                        {% endif %}
                    </div>

                    {# INPUT TOKEN CSRF#}
                    <div class=\"form-group\">
                        {{ form_row(form._token) }}
                    </div>

                    {# INPUT SUBMIT#}
                    <input type=\"submit\" class=\"btn btn-custom btn-lg btn-block\"
                           value=\"{{ 'resetting.reset.submit'|trans }}\">

                    {#{{ form_widget(form) }}#}
                    {#<div>#}
                        {#<input type=\"submit\" value=\"{{ 'resetting.reset.submit'|trans }}\"/>#}
                    {#</div>#}
                    {# FORM END#}
                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
</section>
", "FOSUserBundle:Resetting:reset_content.html.twig", "/var/www/html/TPResa_Symfony3/app/Resources/FOSUserBundle/views/Resetting/reset_content.html.twig");
    }
}
