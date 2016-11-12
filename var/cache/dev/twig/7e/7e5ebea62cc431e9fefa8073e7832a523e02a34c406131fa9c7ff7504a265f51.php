<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_a168e91bb3a695591828ee2de191c06d25174233ffb67da73665f7bfcb8d4b8a extends Twig_Template
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
        $__internal_6cbceaa52b7a0544fe616742a1fd4713482b8abe7d2b0fc64cc67c6d90690bce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cbceaa52b7a0544fe616742a1fd4713482b8abe7d2b0fc64cc67c6d90690bce->enter($__internal_6cbceaa52b7a0544fe616742a1fd4713482b8abe7d2b0fc64cc67c6d90690bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "<section id=\"login\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"form-wrap\">
                    <h1>Inscription</h1>
                    ";
        // line 9
        echo "                    ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
                    ";
        // line 11
        echo "
                    ";
        // line 13
        echo "                    ";
        $context["class"] = "";
        // line 14
        echo "                    ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), "vars", array()), "valid", array())) {
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Votre nom d'utilisateur"));
        // line 19
        echo "
                        ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 22
        echo "                        ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), "vars", array()), "valid", array())) {
            // line 23
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), "vars", array()), "errors", array()));
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
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), "vars", array()), "valid", array())) {
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Votre adresse e-mail"));
        echo "
                        ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 38
        echo "                        ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), "vars", array()), "valid", array())) {
            // line 39
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), "vars", array()), "errors", array()));
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
        echo "                    ";
        $context["class"] = "";
        // line 47
        echo "                    ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), "vars", array()), "valid", array())) {
            // line 48
            echo "                        ";
            $context["class"] = "has-error";
            // line 49
            echo "                    ";
        }
        // line 50
        echo "                    <div class=\"form-group ";
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
        echo "\">
                        ";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Votre mot de passe"));
        // line 52
        echo "
                        ";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 55
        echo "                        ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), "vars", array()), "valid", array())) {
            // line 56
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), "vars", array()), "errors", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 57
                echo "                                <span class=\"help-block\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</span>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "                        ";
        }
        // line 60
        echo "                    </div>

                    ";
        // line 63
        echo "                    ";
        $context["class"] = "";
        // line 64
        echo "                    ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), "vars", array()), "valid", array())) {
            // line 65
            echo "                        ";
            $context["class"] = "has-error";
            // line 66
            echo "                    ";
        }
        // line 67
        echo "                    <div class=\"form-group ";
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
        echo "\">
                        ";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Confirmation de votre mot de passe"));
        echo "
                        ";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 71
        echo "                        ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), "vars", array()), "valid", array())) {
            // line 72
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), "vars", array()), "errors", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 73
                echo "                                <span class=\"help-block\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</span>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "                        ";
        }
        // line 76
        echo "                    </div>

                    ";
        // line 79
        echo "                    <div class=\"form-group\">
                        ";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
                    </div>

                    ";
        // line 84
        echo "                    <div>
                        <input type=\"submit\" class=\"btn btn-custom btn-lg btn-block\" value=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>
                    </div>
                    ";
        // line 88
        echo "                    ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
</section>
";
        
        $__internal_6cbceaa52b7a0544fe616742a1fd4713482b8abe7d2b0fc64cc67c6d90690bce->leave($__internal_6cbceaa52b7a0544fe616742a1fd4713482b8abe7d2b0fc64cc67c6d90690bce_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 88,  248 => 85,  245 => 84,  239 => 80,  236 => 79,  232 => 76,  229 => 75,  220 => 73,  215 => 72,  212 => 71,  208 => 69,  204 => 68,  199 => 67,  196 => 66,  193 => 65,  190 => 64,  187 => 63,  183 => 60,  180 => 59,  171 => 57,  166 => 56,  163 => 55,  159 => 53,  156 => 52,  154 => 51,  149 => 50,  146 => 49,  143 => 48,  140 => 47,  137 => 46,  133 => 43,  130 => 42,  121 => 40,  116 => 39,  113 => 38,  109 => 36,  105 => 35,  100 => 34,  97 => 33,  94 => 32,  91 => 31,  88 => 30,  84 => 27,  81 => 26,  72 => 24,  67 => 23,  64 => 22,  60 => 20,  57 => 19,  55 => 18,  50 => 17,  47 => 16,  44 => 15,  41 => 14,  38 => 13,  35 => 11,  30 => 9,  22 => 2,);
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
                    <h1>Inscription</h1>
                    {# FORM START#}
                    {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
                    {#{{ form_widget(form) }}#}

                    {# INPUT USERNAME#}
                    {% set class = '' %}
                    {% if not form.username.vars.valid %}
                        {% set class = 'has-error' %}
                    {% endif %}
                    <div class=\"form-group {{ class }}\">
                        {{ form_label(form.username, 'Votre nom d\\'utilisateur', {'label_attr': {'class':
                            'control-label'}}) }}
                        {{ form_widget(form.username, {'attr':{'class':'form-control'}}) }}
                        {#{{ form_errors(form.username) }}#}
                        {% if not form.username.vars.valid %}
                            {% for error in form.username.vars.errors %}
                                <span class=\"help-block\">{{ error.message }}</span>
                            {% endfor %}
                        {% endif %}
                    </div>

                    {# INPUT EMAIL#}
                    {% set class = '' %}
                    {% if not form.email.vars.valid %}
                        {% set class = 'has-error' %}
                    {% endif %}
                    <div class=\"form-group {{ class }}\">
                        {{ form_label(form.email, 'Votre adresse e-mail', {'label_attr': {'class': 'control-label'}}) }}
                        {{ form_widget(form.email, {'attr':{'class':'form-control'}}) }}
                        {#{{ form_errors(form.email) }}#}
                        {% if not form.email.vars.valid %}
                            {% for error in form.email.vars.errors %}
                                <span class=\"help-block\">{{ error.message }}</span>
                            {% endfor %}
                        {% endif %}
                    </div>

                    {# INPUT PASSWORD#}
                    {% set class = '' %}
                    {% if not form.plainPassword.first.vars.valid %}
                        {% set class = 'has-error' %}
                    {% endif %}
                    <div class=\"form-group {{ class }}\">
                        {{ form_label(form.plainPassword.first, 'Votre mot de passe', {'label_attr': {'class':
                            'control-label'}}) }}
                        {{ form_widget(form.plainPassword.first, {'attr':{'class':'form-control'}}) }}
                        {#{{ form_errors(form.plainPassword.first) }}#}
                        {% if not form.plainPassword.first.vars.valid %}
                            {% for error in form.plainPassword.first.vars.errors %}
                                <span class=\"help-block\">{{ error.message }}</span>
                            {% endfor %}
                        {% endif %}
                    </div>

                    {# INPUT PASSWORD_CONFIRMATION#}
                    {% set class = '' %}
                    {% if not form.plainPassword.second.vars.valid %}
                        {% set class = 'has-error' %}
                    {% endif %}
                    <div class=\"form-group {{ class }}\">
                        {{ form_label(form.plainPassword.second, 'Confirmation de votre mot de passe', {'label_attr': {'class': 'control-label'}}) }}
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
                    <div>
                        <input type=\"submit\" class=\"btn btn-custom btn-lg btn-block\" value=\"{{ 'registration.submit'|trans }}\"/>
                    </div>
                    {# FORM END#}
                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
</section>
", "FOSUserBundle:Registration:register_content.html.twig", "/var/www/html/TPResa_Symfony3/app/Resources/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}
