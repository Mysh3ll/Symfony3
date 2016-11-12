<?php

/* ::topnav.html.twig */
class __TwigTemplate_01ce4c64ececbc278e439923ae64d69528d61cd921282a181a1fde2923d67f7c extends Twig_Template
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
        $__internal_f400e540edf952e0c375db7441517b3206310aebdefb72557d4cf74c6509073d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f400e540edf952e0c375db7441517b3206310aebdefb72557d4cf74c6509073d->enter($__internal_f400e540edf952e0c375db7441517b3206310aebdefb72557d4cf74c6509073d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::topnav.html.twig"));

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
            echo "                    <p class=\"navbar-text\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            // line 18
            echo "
                    </p>
                    ";
            // line 21
            echo "                    <li>
                        <a href=\"";
            // line 22
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\">Mon profil</a>
                    </li>
                    ";
            // line 25
            echo "                    <li>
                        <a href=\"";
            // line 26
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                            ";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                        </a>
                    </li>
                ";
        } else {
            // line 31
            echo "                    ";
            // line 32
            echo "                    <li>
                        <a href=\"";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.register", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                    </li>
                    ";
            // line 36
            echo "                    <li>
                        <a href=\"";
            // line 37
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                    </li>
                ";
        }
        // line 40
        echo "            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>";
        
        $__internal_f400e540edf952e0c375db7441517b3206310aebdefb72557d4cf74c6509073d->leave($__internal_f400e540edf952e0c375db7441517b3206310aebdefb72557d4cf74c6509073d_prof);

    }

    public function getTemplateName()
    {
        return "::topnav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 40,  86 => 37,  83 => 36,  76 => 33,  73 => 32,  71 => 31,  64 => 27,  60 => 26,  57 => 25,  52 => 22,  49 => 21,  45 => 18,  42 => 17,  40 => 16,  38 => 15,  22 => 1,);
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
                    <p class=\"navbar-text\">{{ 'layout.logged_in_as'|trans({'%username%': app.user.username},
                        'FOSUserBundle') }}
                    </p>
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
</nav>", "::topnav.html.twig", "/var/www/html/TPResa_Symfony3/app/Resources/views/topnav.html.twig");
    }
}
