<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_78a657fdc6df412590aa242fdfc54aa6e6650600b27d94903c8749d26ca9f7bc extends Twig_Template
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
        $__internal_ee60d6e50ccdc3ba391747b50e9d7c72177967a253c237dbb941f814cf97f4a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee60d6e50ccdc3ba391747b50e9d7c72177967a253c237dbb941f814cf97f4a4->enter($__internal_ee60d6e50ccdc3ba391747b50e9d7c72177967a253c237dbb941f814cf97f4a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<br><br>
<div class=\"container fos_user_user_show\">
    <div class=\"row\">
        <div class=\"col-md-8\">
            <div class=\"panel panel-default  panel--styled\">
                <div class=\"panel-body\">
                    <div class=\"col-md-12 panelTop\">
                        <div class=\"col-md-4\">
                            <img class=\"img-responsive\"
                                    ";
        // line 12
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "pathImage", array()) != null)) {
            // line 13
            echo "                                        src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/user/images/" . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "pathImage", array()))), "html", null, true);
            echo "\"
                                    ";
        } else {
            // line 15
            echo "                                        src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/user_default_avatar.jpg"), "html", null, true);
            echo "\"
                                    ";
        }
        // line 17
        echo "                                 alt=\"photo de profil\"/>
                        </div>
                        <div class=\"col-md-8\">
                            <h3>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ":</h3>
                            <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
                            <hr>
                            <h3>";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ":</h3>
                            <p>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
                        </div>
                    </div>

                    <div class=\"col-md-12 panelBottom\">
                        <div class=\"col-md-4 text-center\">
                            <a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_upload_image");
        echo "\">
                                <button class=\"btn btn-lg btn-primary\"><span
                                            class=\"glyphicon glyphicon-upload\"></span> Changer de photo
                                </button>
                            </a>
                        </div>
                        <div class=\"col-md-4 text-center\">
                            <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\">
                                <button class=\"btn btn-lg btn-success\"><span
                                            class=\"glyphicon glyphicon-user\"></span> Modifier profil
                                </button>
                            </a>
                        </div>
                        <div class=\"col-md-4 text-center\">
                            <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
        echo "\">
                                <button class=\"btn btn-lg btn-modify-profil\"><span
                                            class=\"glyphicon glyphicon-cog\"></span> Changer mot de passe
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_ee60d6e50ccdc3ba391747b50e9d7c72177967a253c237dbb941f814cf97f4a4->leave($__internal_ee60d6e50ccdc3ba391747b50e9d7c72177967a253c237dbb941f814cf97f4a4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 44,  85 => 37,  75 => 30,  66 => 24,  62 => 23,  57 => 21,  53 => 20,  48 => 17,  42 => 15,  36 => 13,  34 => 12,  22 => 2,);
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

<br><br>
<div class=\"container fos_user_user_show\">
    <div class=\"row\">
        <div class=\"col-md-8\">
            <div class=\"panel panel-default  panel--styled\">
                <div class=\"panel-body\">
                    <div class=\"col-md-12 panelTop\">
                        <div class=\"col-md-4\">
                            <img class=\"img-responsive\"
                                    {% if user.pathImage != null %}
                                        src=\"{{ asset('uploads/user/images/' ~ user.pathImage) }}\"
                                    {% else %}
                                        src=\"{{ asset('images/user_default_avatar.jpg') }}\"
                                    {% endif %}
                                 alt=\"photo de profil\"/>
                        </div>
                        <div class=\"col-md-8\">
                            <h3>{{ 'profile.show.username'|trans }}:</h3>
                            <p>{{ user.username }}</p>
                            <hr>
                            <h3>{{ 'profile.show.email'|trans }}:</h3>
                            <p>{{ user.email }}</p>
                        </div>
                    </div>

                    <div class=\"col-md-12 panelBottom\">
                        <div class=\"col-md-4 text-center\">
                            <a href=\"{{ path('user_upload_image') }}\">
                                <button class=\"btn btn-lg btn-primary\"><span
                                            class=\"glyphicon glyphicon-upload\"></span> Changer de photo
                                </button>
                            </a>
                        </div>
                        <div class=\"col-md-4 text-center\">
                            <a href=\"{{ path('fos_user_profile_edit') }}\">
                                <button class=\"btn btn-lg btn-success\"><span
                                            class=\"glyphicon glyphicon-user\"></span> Modifier profil
                                </button>
                            </a>
                        </div>
                        <div class=\"col-md-4 text-center\">
                            <a href=\"{{ path('fos_user_change_password') }}\">
                                <button class=\"btn btn-lg btn-modify-profil\"><span
                                            class=\"glyphicon glyphicon-cog\"></span> Changer mot de passe
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
", "FOSUserBundle:Profile:show_content.html.twig", "/var/www/html/TPResa_Symfony3/app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}
