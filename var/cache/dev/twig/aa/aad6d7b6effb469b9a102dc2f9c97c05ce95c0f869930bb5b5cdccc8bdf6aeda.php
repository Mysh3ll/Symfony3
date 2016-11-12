<?php

/* topnav.html.twig */
class __TwigTemplate_57072c782644fbd00f80f3e02522e63afa632cc6263db5a82a8d4bec7da3bdf1 extends Twig_Template
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
        $__internal_dd3df6fd3c201de797c5364ff7590cdf626648ab1c5253cf596105233bef7ac2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd3df6fd3c201de797c5364ff7590cdf626648ab1c5253cf596105233bef7ac2->enter($__internal_dd3df6fd3c201de797c5364ff7590cdf626648ab1c5253cf596105233bef7ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "topnav.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\"
                    aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">Mon Site</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav navbar-right\">
                ";
        // line 15
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 16
            echo "                    ";
            // line 17
            echo "                    ";
            // line 18
            echo "                        ";
            // line 19
            echo "                    ";
            // line 20
            echo "                    ";
            // line 21
            echo "                    <li>
                        <img class=\"img-responsive navbar-avatar\"
                             title=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            // line 24
            echo "\"
                                ";
            // line 25
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pathImage", array()) != null)) {
                // line 26
                echo "                                    src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/user/images/" . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pathImage", array()))), "html", null, true);
                echo "\"
                                ";
            } else {
                // line 28
                echo "                                    src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/user_default_avatar.jpg"), "html", null, true);
                echo "\"
                                ";
            }
            // line 30
            echo "                             alt=\"photo de profil\"/>

                    </li>
                    ";
            // line 34
            echo "                    <li>
                        <a href=\"";
            // line 35
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\">Mon profil</a>
                    </li>
                    ";
            // line 38
            echo "                    <li>
                        <a href=\"";
            // line 39
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                            ";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                        </a>
                    </li>
                ";
        } else {
            // line 44
            echo "                    ";
            // line 45
            echo "                    <li>
                        <a href=\"";
            // line 46
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.register", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                    </li>
                    ";
            // line 49
            echo "                    <li>
                        <a href=\"";
            // line 50
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                    </li>
                ";
        }
        // line 53
        echo "            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>";
        
        $__internal_dd3df6fd3c201de797c5364ff7590cdf626648ab1c5253cf596105233bef7ac2->leave($__internal_dd3df6fd3c201de797c5364ff7590cdf626648ab1c5253cf596105233bef7ac2_prof);

    }

    public function getTemplateName()
    {
        return "topnav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 53,  115 => 50,  112 => 49,  105 => 46,  102 => 45,  100 => 44,  93 => 40,  89 => 39,  86 => 38,  81 => 35,  78 => 34,  73 => 30,  67 => 28,  61 => 26,  59 => 25,  56 => 24,  54 => 23,  50 => 21,  48 => 20,  46 => 19,  44 => 18,  42 => 17,  40 => 16,  38 => 15,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\"
                    aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">Mon Site</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav navbar-right\">
                {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                    {# USERNAME #}
                    {#<p class=\"navbar-text\">{{ 'layout.logged_in_as'|trans({'%username%': app.user.username},#}
                        {#'FOSUserBundle') }}#}
                    {#</p>#}
                    {# IMAGE USER #}
                    <li>
                        <img class=\"img-responsive navbar-avatar\"
                             title=\"{{ 'layout.logged_in_as'|trans({'%username%': app.user.username},
                             'FOSUserBundle') }}\"
                                {% if app.user.pathImage != null %}
                                    src=\"{{ asset('uploads/user/images/' ~ app.user.pathImage) }}\"
                                {% else %}
                                    src=\"{{ asset('images/user_default_avatar.jpg') }}\"
                                {% endif %}
                             alt=\"photo de profil\"/>

                    </li>
                    {# PROFILE #}
                    <li>
                        <a href=\"{{ path('fos_user_profile_show') }}\">Mon profil</a>
                    </li>
                    {# LOGOUT #}
                    <li>
                        <a href=\"{{ path('fos_user_security_logout') }}\">
                            {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                        </a>
                    </li>
                {% else %}
                    {# REGISTER #}
                    <li>
                        <a href=\"{{ path('fos_user_registration_register') }}\">{{ 'layout.register'|trans({}, 'FOSUserBundle') }}</a>
                    </li>
                    {# LOGIN #}
                    <li>
                        <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
                    </li>
                {% endif %}
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>", "topnav.html.twig", "/var/www/html/TPResa_Symfony3/app/Resources/views/topnav.html.twig");
    }
}
