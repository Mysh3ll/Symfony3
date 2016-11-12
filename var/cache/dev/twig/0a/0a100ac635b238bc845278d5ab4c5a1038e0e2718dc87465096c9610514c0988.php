<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_fb02b3cd3fd8c7889e9e01790512a493aae574485e1eadca83bfb2dfe9537099 extends Twig_Template
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
        $__internal_fade9a8a522f5c0e8a79fc1f0aa80cca0c4facab3c9d293ef794bfd8080e8e77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fade9a8a522f5c0e8a79fc1f0aa80cca0c4facab3c9d293ef794bfd8080e8e77->enter($__internal_fade9a8a522f5c0e8a79fc1f0aa80cca0c4facab3c9d293ef794bfd8080e8e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context);
        echo "
<section id=\"login\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"form-wrap\">
                    <h1>Modifier votre<br/> nom d'utilisateur ou e-mail</h1>

                    ";
        // line 11
        echo "                    ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit", "id" => "login-form")));
        echo "
                    ";
        // line 13
        echo "                    ";
        // line 14
        echo "                    ";
        // line 15
        echo "                    ";
        // line 16
        echo "
                    ";
        // line 18
        echo "                    ";
        $context["class"] = "";
        // line 19
        echo "                    ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), "vars", array()), "valid", array())) {
            // line 20
            echo "                        ";
            $context["class"] = "has-error";
            // line 21
            echo "                    ";
        }
        // line 22
        echo "                    <div class=\"form-group ";
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
        echo "\">
                        ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Votre nom d'utilisateur"));
        echo "
                        ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 26
        echo "                        ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), "vars", array()), "valid", array())) {
            // line 27
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), "vars", array()), "errors", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 28
                echo "                                <span class=\"help-block\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</span>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "                        ";
        }
        // line 31
        echo "                    </div>

                    ";
        // line 34
        echo "                    ";
        $context["class"] = "";
        // line 35
        echo "                    ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), "vars", array()), "valid", array())) {
            // line 36
            echo "                        ";
            $context["class"] = "has-error";
            // line 37
            echo "                    ";
        }
        // line 38
        echo "                    <div class=\"form-group ";
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
        echo "\">
                        ";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Votre adresse e-mail"));
        echo "
                        ";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 42
        echo "                        ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), "vars", array()), "valid", array())) {
            // line 43
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), "vars", array()), "errors", array()));
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
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password", array()), "vars", array()), "valid", array())) {
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Votre mot de passe"));
        echo "
                        ";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 58
        echo "                        ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password", array()), "vars", array()), "valid", array())) {
            // line 59
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password", array()), "vars", array()), "errors", array()));
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
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
</section>
";
        
        $__internal_fade9a8a522f5c0e8a79fc1f0aa80cca0c4facab3c9d293ef794bfd8080e8e77->leave($__internal_fade9a8a522f5c0e8a79fc1f0aa80cca0c4facab3c9d293ef794bfd8080e8e77_prof);

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
        return array (  211 => 75,  206 => 72,  203 => 71,  197 => 67,  194 => 66,  190 => 63,  187 => 62,  178 => 60,  173 => 59,  170 => 58,  166 => 56,  162 => 55,  157 => 54,  154 => 53,  151 => 52,  148 => 51,  145 => 50,  141 => 47,  138 => 46,  129 => 44,  124 => 43,  121 => 42,  117 => 40,  113 => 39,  108 => 38,  105 => 37,  102 => 36,  99 => 35,  96 => 34,  92 => 31,  89 => 30,  80 => 28,  75 => 27,  72 => 26,  68 => 24,  64 => 23,  59 => 22,  56 => 21,  53 => 20,  50 => 19,  47 => 18,  44 => 16,  42 => 15,  40 => 14,  38 => 13,  33 => 11,  22 => 2,);
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
{{ dump() }}
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
                        {{ form_label(form.current_password, 'Votre mot de passe', {'label_attr': {'class': 'control-label'}}) }}
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
