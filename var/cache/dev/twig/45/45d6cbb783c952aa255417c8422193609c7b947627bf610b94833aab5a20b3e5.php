<?php

/* FOSUserBundle:ChangePassword:change_password_content.html.twig */
class __TwigTemplate_a2d20bfacef1d81c6ea1c19db38f0e3ec2099bf222877da7c631e38a2511881b extends Twig_Template
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
        $__internal_92ce788b47a88a0d97581bde48784ed5015fb50ae02e6c5ea904dacecce5eb74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92ce788b47a88a0d97581bde48784ed5015fb50ae02e6c5ea904dacecce5eb74->enter($__internal_92ce788b47a88a0d97581bde48784ed5015fb50ae02e6c5ea904dacecce5eb74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password_content.html.twig"));

        // line 2
        echo "<section id=\"login\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"form-wrap\">
                    <h1>Modifier votre mot de passe</h1>

                    ";
        // line 10
        echo "                    ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password", "id" => "login-form")));
        echo "
                    ";
        // line 12
        echo "                    ";
        // line 13
        echo "                    ";
        // line 14
        echo "                    ";
        // line 15
        echo "
                    ";
        // line 17
        echo "                    ";
        $context["class"] = "";
        // line 18
        echo "                    ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password", array()), "vars", array()), "valid", array())) {
            // line 19
            echo "                        ";
            $context["class"] = "has-error";
            // line 20
            echo "                    ";
        }
        // line 21
        echo "                    <div class=\"form-group ";
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
        echo "\">
                        ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Votre mot de passe actuel"));
        echo "
                        ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 25
        echo "                        ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password", array()), "vars", array()), "valid", array())) {
            // line 26
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password", array()), "vars", array()), "errors", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 27
                echo "                                <span class=\"help-block\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</span>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "                        ";
        }
        // line 30
        echo "                    </div>

                    ";
        // line 33
        echo "                    ";
        $context["class"] = "";
        // line 34
        echo "                    ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), "vars", array()), "valid", array())) {
            // line 35
            echo "                        ";
            $context["class"] = "has-error";
            // line 36
            echo "                    ";
        }
        // line 37
        echo "                    <div class=\"form-group ";
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
        echo "\">
                        ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Votre nouveau mot de passe"));
        // line 39
        echo "
                        ";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 42
        echo "                        ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), "vars", array()), "valid", array())) {
            // line 43
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), "vars", array()), "errors", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 44
                echo "                                <span class=\"help-block\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</span>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                        ";
        }
        // line 47
        echo "                    </div>

                    ";
        // line 50
        echo "                    ";
        $context["class"] = "";
        // line 51
        echo "                    ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), "vars", array()), "valid", array())) {
            // line 52
            echo "                        ";
            $context["class"] = "has-error";
            // line 53
            echo "                    ";
        }
        // line 54
        echo "                    <div class=\"form-group ";
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
        echo "\">
                        ";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Confirmation de votre nouveau mot de passe"));
        echo "
                        ";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 58
        echo "                        ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), "vars", array()), "valid", array())) {
            // line 59
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), "vars", array()), "errors", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 60
                echo "                                <span class=\"help-block\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</span>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "                        ";
        }
        // line 63
        echo "                    </div>

                    ";
        // line 66
        echo "                    <div class=\"form-group\">
                        ";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
                    </div>

                    ";
        // line 71
        echo "                    <input type=\"submit\" class=\"btn btn-custom btn-lg btn-block\"
                           value=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">

                    ";
        // line 75
        echo "                    ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
</section>";
        
        $__internal_92ce788b47a88a0d97581bde48784ed5015fb50ae02e6c5ea904dacecce5eb74->leave($__internal_92ce788b47a88a0d97581bde48784ed5015fb50ae02e6c5ea904dacecce5eb74_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 75,  205 => 72,  202 => 71,  196 => 67,  193 => 66,  189 => 63,  186 => 62,  177 => 60,  172 => 59,  169 => 58,  165 => 56,  161 => 55,  156 => 54,  153 => 53,  150 => 52,  147 => 51,  144 => 50,  140 => 47,  137 => 46,  128 => 44,  123 => 43,  120 => 42,  116 => 40,  113 => 39,  111 => 38,  106 => 37,  103 => 36,  100 => 35,  97 => 34,  94 => 33,  90 => 30,  87 => 29,  78 => 27,  73 => 26,  70 => 25,  66 => 23,  62 => 22,  57 => 21,  54 => 20,  51 => 19,  48 => 18,  45 => 17,  42 => 15,  40 => 14,  38 => 13,  36 => 12,  31 => 10,  22 => 2,);
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
                    <h1>Modifier votre mot de passe</h1>

                    {# FORM START#}
                    {{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password', 'id' : 'login-form' } }) }}
                    {#{{ form_widget(form) }}#}
                    {#<div>#}
                    {#<input type=\"submit\" value=\"{{ 'change_password.submit'|trans }}\"/>#}
                    {#</div>#}

                    {# INPUT CURRENT_PASSWORD#}
                    {% set class = '' %}
                    {% if not form.current_password.vars.valid %}
                        {% set class = 'has-error' %}
                    {% endif %}
                    <div class=\"form-group {{ class }}\">
                        {{ form_label(form.current_password, 'Votre mot de passe actuel', {'label_attr': {'class': 'control-label'}}) }}
                        {{ form_widget(form.current_password, {'attr':{'class':'form-control'}}) }}
                        {#{{ form_errors(form.current_password) }}#}
                        {% if not form.current_password.vars.valid %}
                            {% for error in form.current_password.vars.errors %}
                                <span class=\"help-block\">{{ error.message }}</span>
                            {% endfor %}
                        {% endif %}
                    </div>

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
                           value=\"{{ 'change_password.submit'|trans }}\">

                    {# FORM END#}
                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
</section>", "FOSUserBundle:ChangePassword:change_password_content.html.twig", "/var/www/html/TPResa_Symfony3/app/Resources/FOSUserBundle/views/ChangePassword/change_password_content.html.twig");
    }
}
