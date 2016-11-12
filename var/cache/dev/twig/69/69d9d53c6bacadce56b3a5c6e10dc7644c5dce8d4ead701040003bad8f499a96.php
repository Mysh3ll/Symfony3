<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_05a986283d454e417810c8350c46bc828b2b4881b649fb466f2f27e71a286f98 extends Twig_Template
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
        $__internal_c796031759ec97eb195020baf426dd2cd937be09d775899933bb668509824e01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c796031759ec97eb195020baf426dd2cd937be09d775899933bb668509824e01->enter($__internal_c796031759ec97eb195020baf426dd2cd937be09d775899933bb668509824e01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

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
                            <img class=\"img-responsive\" src=\"http://placehold.it/350x350\" alt=\"\"/>
                        </div>
                        <div class=\"col-md-8\">
                            <h3>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ":</h3>
                            <p>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
                            <hr>
                            <h3>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ":</h3>
                            <p>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
                        </div>
                    </div>

                    <div class=\"col-md-12 panelBottom\">
                        <div class=\"col-md-4 text-center\">
                            <button class=\"btn btn-lg btn-primary\"><span
                                        class=\"glyphicon glyphicon-upload\"></span> Changer de photo
                            </button>
                        </div>
                        <div class=\"col-md-4 text-center\">
                            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\">
                                <button class=\"btn btn-lg btn-success\"><span
                                            class=\"glyphicon glyphicon-user\"></span> Modifier profil
                                </button>
                            </a>
                        </div>
                        <div class=\"col-md-4 text-center\">
                            <a href=\"";
        // line 36
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
        
        $__internal_c796031759ec97eb195020baf426dd2cd937be09d775899933bb668509824e01->leave($__internal_c796031759ec97eb195020baf426dd2cd937be09d775899933bb668509824e01_prof);

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
        return array (  73 => 36,  63 => 29,  49 => 18,  45 => 17,  40 => 15,  36 => 14,  22 => 2,);
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
                            <img class=\"img-responsive\" src=\"http://placehold.it/350x350\" alt=\"\"/>
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
                            <button class=\"btn btn-lg btn-primary\"><span
                                        class=\"glyphicon glyphicon-upload\"></span> Changer de photo
                            </button>
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
