<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_556f1e9c113f8363447c81f35e5cdcae8d8634a871a6c82754c2f15c0f7f81b2 extends Twig_Template
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
        $__internal_b76bac1c50eba89f18bbed2b42ce34b66ebfbbdb2b73728d8de8a1ea02ad6b90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b76bac1c50eba89f18bbed2b42ce34b66ebfbbdb2b73728d8de8a1ea02ad6b90->enter($__internal_b76bac1c50eba89f18bbed2b42ce34b66ebfbbdb2b73728d8de8a1ea02ad6b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context);
        echo "
<section id=\"login\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"form-wrap\">
                    <h1>Inscription</h1>
                    ";
        // line 10
        echo "                    ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
                    ";
        // line 12
        echo "
                    ";
        // line 14
        echo "                    ";
        $context["class"] = "";
        // line 15
        echo "                    ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), "vars", array()), "valid", array())) {
            // line 16
            echo "                        ";
            $context["class"] = "has-error";
            // line 17
            echo "                    ";
        }
        // line 18
        echo "                    <div class=\"form-group ";
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
        echo "\">
                        ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Votre nom d'utilisateur"));
        // line 20
        echo "
                        ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 23
        echo "                        ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), "vars", array()), "valid", array())) {
            // line 24
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), "vars", array()), "errors", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 25
                echo "                                <span class=\"help-block\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</span>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                        ";
        }
        // line 28
        echo "                    </div>

                    ";
        // line 31
        echo "                    ";
        $context["class"] = "";
        // line 32
        echo "                    ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), "vars", array()), "valid", array())) {
            // line 33
            echo "                        ";
            $context["class"] = "has-error";
            // line 34
            echo "                    ";
        }
        // line 35
        echo "                    <div class=\"form-group ";
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
        echo "\">
                        ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Votre adresse e-mail"));
        echo "
                        ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 39
        echo "                        ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), "vars", array()), "valid", array())) {
            // line 40
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), "vars", array()), "errors", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 41
                echo "                                <span class=\"help-block\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</span>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                        ";
        }
        // line 44
        echo "                    </div>

                    ";
        // line 47
        echo "                    ";
        $context["class"] = "";
        // line 48
        echo "                    ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), "vars", array()), "valid", array())) {
            // line 49
            echo "                        ";
            $context["class"] = "has-error";
            // line 50
            echo "                    ";
        }
        // line 51
        echo "                    <div class=\"form-group ";
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
        echo "\">
                        ";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Votre nom"));
        // line 53
        echo "
                        ";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 56
        echo "                        ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), "vars", array()), "valid", array())) {
            // line 57
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), "vars", array()), "errors", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 58
                echo "                                <span class=\"help-block\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</span>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "                        ";
        }
        // line 61
        echo "                    </div>

                    ";
        // line 64
        echo "                    ";
        $context["class"] = "";
        // line 65
        echo "                    ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), "vars", array()), "valid", array())) {
            // line 66
            echo "                        ";
            $context["class"] = "has-error";
            // line 67
            echo "                    ";
        }
        // line 68
        echo "                    <div class=\"form-group ";
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
        echo "\">
                        ";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Votre prénom"));
        // line 70
        echo "
                        ";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 73
        echo "                        ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), "vars", array()), "valid", array())) {
            // line 74
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), "vars", array()), "errors", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 75
                echo "                                <span class=\"help-block\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</span>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "                        ";
        }
        // line 78
        echo "                    </div>

                    ";
        // line 81
        echo "                    ";
        $context["class"] = "";
        // line 82
        echo "                    ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), "vars", array()), "valid", array())) {
            // line 83
            echo "                        ";
            $context["class"] = "has-error";
            // line 84
            echo "                    ";
        }
        // line 85
        echo "                    <div class=\"form-group ";
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
        echo "\">
                        ";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Votre mot de passe"));
        // line 87
        echo "
                        ";
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 90
        echo "                        ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), "vars", array()), "valid", array())) {
            // line 91
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), "vars", array()), "errors", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 92
                echo "                                <span class=\"help-block\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</span>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "                        ";
        }
        // line 95
        echo "                    </div>

                    ";
        // line 98
        echo "                    ";
        $context["class"] = "";
        // line 99
        echo "                    ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), "vars", array()), "valid", array())) {
            // line 100
            echo "                        ";
            $context["class"] = "has-error";
            // line 101
            echo "                    ";
        }
        // line 102
        echo "                    <div class=\"form-group ";
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
        echo "\">
                        ";
        // line 103
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Confirmation de votre mot de passe"));
        echo "
                        ";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 106
        echo "                        ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), "vars", array()), "valid", array())) {
            // line 107
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), "vars", array()), "errors", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 108
                echo "                                <span class=\"help-block\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</span>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "                        ";
        }
        // line 111
        echo "                    </div>

                    ";
        // line 114
        echo "                    <div class=\"form-group\">
                        ";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
                    </div>

                    ";
        // line 119
        echo "                    <div>
                        <input type=\"submit\" class=\"btn btn-custom btn-lg btn-block\" value=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>
                    </div>
                    ";
        // line 123
        echo "                    ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
</section>
";
        
        $__internal_b76bac1c50eba89f18bbed2b42ce34b66ebfbbdb2b73728d8de8a1ea02ad6b90->leave($__internal_b76bac1c50eba89f18bbed2b42ce34b66ebfbbdb2b73728d8de8a1ea02ad6b90_prof);

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
        return array (  355 => 123,  350 => 120,  347 => 119,  341 => 115,  338 => 114,  334 => 111,  331 => 110,  322 => 108,  317 => 107,  314 => 106,  310 => 104,  306 => 103,  301 => 102,  298 => 101,  295 => 100,  292 => 99,  289 => 98,  285 => 95,  282 => 94,  273 => 92,  268 => 91,  265 => 90,  261 => 88,  258 => 87,  256 => 86,  251 => 85,  248 => 84,  245 => 83,  242 => 82,  239 => 81,  235 => 78,  232 => 77,  223 => 75,  218 => 74,  215 => 73,  211 => 71,  208 => 70,  206 => 69,  201 => 68,  198 => 67,  195 => 66,  192 => 65,  189 => 64,  185 => 61,  182 => 60,  173 => 58,  168 => 57,  165 => 56,  161 => 54,  158 => 53,  156 => 52,  151 => 51,  148 => 50,  145 => 49,  142 => 48,  139 => 47,  135 => 44,  132 => 43,  123 => 41,  118 => 40,  115 => 39,  111 => 37,  107 => 36,  102 => 35,  99 => 34,  96 => 33,  93 => 32,  90 => 31,  86 => 28,  83 => 27,  74 => 25,  69 => 24,  66 => 23,  62 => 21,  59 => 20,  57 => 19,  52 => 18,  49 => 17,  46 => 16,  43 => 15,  40 => 14,  37 => 12,  32 => 10,  22 => 2,);
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
{{ dump ()}}
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

                    {# INPUT NOM#}
                    {% set class = '' %}
                    {% if not form.nom.vars.valid %}
                        {% set class = 'has-error' %}
                    {% endif %}
                    <div class=\"form-group {{ class }}\">
                        {{ form_label(form.nom, 'Votre nom', {'label_attr': {'class':
                            'control-label'}}) }}
                        {{ form_widget(form.nom, {'attr':{'class':'form-control'}}) }}
                        {#{{ form_errors(form.nom) }}#}
                        {% if not form.nom.vars.valid %}
                            {% for error in form.nom.vars.errors %}
                                <span class=\"help-block\">{{ error.message }}</span>
                            {% endfor %}
                        {% endif %}
                    </div>

                    {# INPUT PRENOM#}
                    {% set class = '' %}
                    {% if not form.prenom.vars.valid %}
                        {% set class = 'has-error' %}
                    {% endif %}
                    <div class=\"form-group {{ class }}\">
                        {{ form_label(form.prenom, 'Votre prénom', {'label_attr': {'class':
                            'control-label'}}) }}
                        {{ form_widget(form.prenom, {'attr':{'class':'form-control'}}) }}
                        {#{{ form_errors(form.prenom) }}#}
                        {% if not form.prenom.vars.valid %}
                            {% for error in form.prenom.vars.errors %}
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
