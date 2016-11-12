<?php

/* FOSUserBundle:Profile:upload_image_content.html.twig */
class __TwigTemplate_7711cb5dd147ad0c62b2b82a187ab831e981810f478bf075bdb855be69b340cd extends Twig_Template
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
        $__internal_8f69516e089cb6fa4b4e6546fba3844730d064df03fb77e8dac31a4674c71315 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f69516e089cb6fa4b4e6546fba3844730d064df03fb77e8dac31a4674c71315->enter($__internal_8f69516e089cb6fa4b4e6546fba3844730d064df03fb77e8dac31a4674c71315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:upload_image_content.html.twig"));

        // line 2
        echo "<section id=\"login\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"form-wrap\">
                    <h1>Modifier votre photo de profil</h1>

                    ";
        // line 10
        echo "                    ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

                    ";
        // line 13
        echo "                    ";
        $context["class"] = "";
        // line 14
        echo "                    ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pathImage", array()), "vars", array()), "valid", array())) {
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
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pathImage", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Photo de votre profil"));
        // line 20
        echo "

                        <div class=\"input-group image-preview\">
                            <input type=\"text\" class=\"form-control image-preview-filename\" disabled=\"disabled\">
                            <!-- don't give a name === doesn't send on POST/GET -->
                            <span class=\"input-group-btn\">
                            <!-- image-preview-clear button -->
                            <button type=\"button\" class=\"btn btn-default image-preview-clear\" style=\"display:none;\">
                                <span class=\"glyphicon glyphicon-remove\"></span> Effacer
                            </button>
                                <!-- image-preview-input -->
                            <div class=\"btn btn-default image-preview-input\">
                                <span class=\"glyphicon glyphicon-folder-open\"></span>
                                <span class=\"image-preview-input-title\">Parcourir</span>
                                ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pathImage", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                ";
        // line 36
        echo "                                <!-- rename it -->
                            </div>
                        </span>
                        </div><!-- /input-group image-preview [TO HERE]-->

                        ";
        // line 42
        echo "                        ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pathImage", array()), "vars", array()), "valid", array())) {
            // line 43
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pathImage", array()), "vars", array()), "errors", array()));
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
        echo "
                    <div class=\"bs-callout\">
                        <h4>Information</h4>
                        <p>Veuillez choisir un fichier de type image d'une dimension minimum de 350x350.</p>
                    </div>

                    ";
        // line 57
        echo "                    <input type=\"submit\" id=\"upload_image_user\" class=\"btn btn-custom btn-lg btn-block\"
                           value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">

                    ";
        // line 61
        echo "                    ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
</section>
";
        
        $__internal_8f69516e089cb6fa4b4e6546fba3844730d064df03fb77e8dac31a4674c71315->leave($__internal_8f69516e089cb6fa4b4e6546fba3844730d064df03fb77e8dac31a4674c71315_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:upload_image_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 61,  119 => 58,  116 => 57,  108 => 50,  104 => 47,  101 => 46,  92 => 44,  87 => 43,  84 => 42,  77 => 36,  73 => 34,  57 => 20,  55 => 19,  49 => 17,  46 => 16,  43 => 15,  40 => 14,  37 => 13,  31 => 10,  22 => 2,);
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
                    <h1>Modifier votre photo de profil</h1>

                    {# FORM START #}
                    {{ form_start(form) }}

                    {# INPUT UPLOAD#}
                    {% set class = '' %}
                    {% if not form.pathImage.vars.valid %}
                        {% set class = 'has-error' %}
                    {% endif %}
                    <div class=\"form-group {{ class }}\">

                        {{ form_label(form.pathImage, 'Photo de votre profil' , {'label_attr': {'class':
                            'control-label'}}) }}

                        <div class=\"input-group image-preview\">
                            <input type=\"text\" class=\"form-control image-preview-filename\" disabled=\"disabled\">
                            <!-- don't give a name === doesn't send on POST/GET -->
                            <span class=\"input-group-btn\">
                            <!-- image-preview-clear button -->
                            <button type=\"button\" class=\"btn btn-default image-preview-clear\" style=\"display:none;\">
                                <span class=\"glyphicon glyphicon-remove\"></span> Effacer
                            </button>
                                <!-- image-preview-input -->
                            <div class=\"btn btn-default image-preview-input\">
                                <span class=\"glyphicon glyphicon-folder-open\"></span>
                                <span class=\"image-preview-input-title\">Parcourir</span>
                                {{ form_widget(form.pathImage, {'attr':{'class':'form-control'}}) }}
                                {#<input type=\"file\" accept=\"image/png, image/jpeg, image/gif\" name=\"input-file-preview\"/>#}
                                <!-- rename it -->
                            </div>
                        </span>
                        </div><!-- /input-group image-preview [TO HERE]-->

                        {#{{ form_errors(form.pathImage) }}#}
                        {% if not form.pathImage.vars.valid %}
                            {% for error in form.pathImage.vars.errors %}
                                <span class=\"help-block\">{{ error.message }}</span>
                            {% endfor %}
                        {% endif %}
                    </div>

                    {#{{ form_row(form.pathImage) }}#}

                    <div class=\"bs-callout\">
                        <h4>Information</h4>
                        <p>Veuillez choisir un fichier de type image d'une dimension minimum de 350x350.</p>
                    </div>

                    {# INPUT SUBMIT#}
                    <input type=\"submit\" id=\"upload_image_user\" class=\"btn btn-custom btn-lg btn-block\"
                           value=\"{{ 'profile.edit.submit'|trans }}\">

                    {# FORM END #}
                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
</section>
", "FOSUserBundle:Profile:upload_image_content.html.twig", "/var/www/html/TPResa_Symfony3/app/Resources/FOSUserBundle/views/Profile/upload_image_content.html.twig");
    }
}
