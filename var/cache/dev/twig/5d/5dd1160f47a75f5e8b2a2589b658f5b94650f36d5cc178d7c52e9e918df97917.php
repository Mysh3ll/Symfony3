<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_7fc16666370f6258620927245ae0e388a456a75262ea68afb475117b53c4714b extends Twig_Template
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
        $__internal_c89076bd6defaa5812fe933315d667df4e67d9c15127d829744d3e07c8455f93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c89076bd6defaa5812fe933315d667df4e67d9c15127d829744d3e07c8455f93->enter($__internal_c89076bd6defaa5812fe933315d667df4e67d9c15127d829744d3e07c8455f93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        // line 2
        echo "<section id=\"login\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"form-wrap\">
                    <h1>Modifier votre<br/> nom d'utilisateur ou e-mail</h1>

                    ";
        // line 10
        echo "                    ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit", "id" => "login-form")));
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
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), "vars", array()), "valid", array())) {
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Votre nom d'utilisateur"));
        echo "
                        ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 25
        echo "                        ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), "vars", array()), "valid", array())) {
            // line 26
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), "vars", array()), "errors", array()));
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
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), "vars", array()), "valid", array())) {
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Votre adresse e-mail"));
        echo "
                        ";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 41
        echo "                        ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), "vars", array()), "valid", array())) {
            // line 42
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), "vars", array()), "errors", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 43
                echo "                                <span class=\"help-block\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</span>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                        ";
        }
        // line 46
        echo "                    </div>

                    ";
        // line 49
        echo "                    ";
        $context["class"] = "";
        // line 50
        echo "                    ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password", array()), "vars", array()), "valid", array())) {
            // line 51
            echo "                        ";
            $context["class"] = "has-error";
            // line 52
            echo "                    ";
        }
        // line 53
        echo "                    <div class=\"form-group ";
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
        echo "\">
                        ";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Votre nouveau mot de passe"));
        echo "
                        ";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 57
        echo "                        ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password", array()), "vars", array()), "valid", array())) {
            // line 58
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password", array()), "vars", array()), "errors", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 59
                echo "                                <span class=\"help-block\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</span>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "                        ";
        }
        // line 62
        echo "                    </div>

                    ";
        // line 65
        echo "                    <div class=\"form-group\">
                        ";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
                    </div>

                    ";
        // line 70
        echo "                    <input type=\"submit\" class=\"btn btn-custom btn-lg btn-block\"
                           value=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">

                    ";
        // line 74
        echo "                    ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
</section>
";
        
        $__internal_c89076bd6defaa5812fe933315d667df4e67d9c15127d829744d3e07c8455f93->leave($__internal_c89076bd6defaa5812fe933315d667df4e67d9c15127d829744d3e07c8455f93_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 74,  204 => 71,  201 => 70,  195 => 66,  192 => 65,  188 => 62,  185 => 61,  176 => 59,  171 => 58,  168 => 57,  164 => 55,  160 => 54,  155 => 53,  152 => 52,  149 => 51,  146 => 50,  143 => 49,  139 => 46,  136 => 45,  127 => 43,  122 => 42,  119 => 41,  115 => 39,  111 => 38,  106 => 37,  103 => 36,  100 => 35,  97 => 34,  94 => 33,  90 => 30,  87 => 29,  78 => 27,  73 => 26,  70 => 25,  66 => 23,  62 => 22,  57 => 21,  54 => 20,  51 => 19,  48 => 18,  45 => 17,  42 => 15,  40 => 14,  38 => 13,  36 => 12,  31 => 10,  22 => 2,);
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
                    <h1>Modifier votre<br/> nom d'utilisateur ou e-mail</h1>

                    {# FORM START#}
                    {{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class':'fos_user_profile_edit', 'id' : 'login-form' } }) }}
                    {#{{ form_widget(form) }}#}
                    {#<div>#}
                    {#<input type=\"submit\" value=\"{{ 'profile.edit.submit'|trans }}\" />#}
                    {#</div>#}

                    {# INPUT USERNAME#}
                    {% set class = '' %}
                    {% if not form.username.vars.valid %}
                        {% set class = 'has-error' %}
                    {% endif %}
                    <div class=\"form-group {{ class }}\">
                        {{ form_label(form.username, 'Votre nom d\\'utilisateur', {'label_attr': {'class': 'control-label'}}) }}
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
                    {% if not form.current_password.vars.valid %}
                        {% set class = 'has-error' %}
                    {% endif %}
                    <div class=\"form-group {{ class }}\">
                        {{ form_label(form.current_password, 'Votre nouveau mot de passe', {'label_attr': {'class': 'control-label'}}) }}
                        {{ form_widget(form.current_password, {'attr':{'class':'form-control'}}) }}
                        {#{{ form_errors(form.current_password) }}#}
                        {% if not form.current_password.vars.valid %}
                            {% for error in form.current_password.vars.errors %}
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
                           value=\"{{ 'profile.edit.submit'|trans }}\">

                    {# FORM END#}
                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
</section>
", "FOSUserBundle:Profile:edit_content.html.twig", "/var/www/html/TPResa_Symfony3/app/Resources/FOSUserBundle/views/Profile/edit_content.html.twig");
    }
}
