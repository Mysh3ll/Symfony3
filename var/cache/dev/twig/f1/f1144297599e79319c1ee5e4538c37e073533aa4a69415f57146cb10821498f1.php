<?php

/* FOSUserBundle:Security:login_content.html.twig */
class __TwigTemplate_d3c0f94767a621dca5146c524608923803ec2e7ec002435664331d726a99f7d2 extends Twig_Template
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
        $__internal_93efbebde07aa7ff6f26eaf26c839ee7519d43d23fda3d2390a5f1e78023c698 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93efbebde07aa7ff6f26eaf26c839ee7519d43d23fda3d2390a5f1e78023c698->enter($__internal_93efbebde07aa7ff6f26eaf26c839ee7519d43d23fda3d2390a5f1e78023c698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 4
            echo "    <div class=\"alert alert-danger\" role=\"alert\">
        ";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "
    </div>
";
        }
        // line 8
        echo "
<section id=\"login\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"form-wrap\">

                    <h1>Connectez vous avec votre e-mail</h1>
                    <form role=\"form\" action=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\" id=\"login-form\"
                          autocomplete=\"off\">
                        ";
        // line 18
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token"))) {
            // line 19
            echo "                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\"/>
                        ";
        }
        // line 21
        echo "
                        <div class=\"form-group\">
                            <label for=\"username\" class=\"sr-only\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                            <input type=\"text\" name=\"_username\" id=\"username\" class=\"form-control\"
                                   placeholder=\"Saisir votre nom\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\">
                        </div>

                        <div class=\"form-group\">
                            <label for=\"password\" class=\"sr-only\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                            <input type=\"password\" name=\"_password\" id=\"password\" class=\"form-control\"
                                   placeholder=\"Saisir votre mot de passe\">
                        </div>

                        <div class=\"checkbox\">
                            <label>
                                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\"
                                       value=\"on\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                            </label>
                        </div>

                        <div class=\"help-block forget\">
                            <p>Mot de passe oublié ? <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\">cliquer ici</a></p>
                        </div>

                        <input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-custom btn-lg btn-block\"
                               value=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">
                    </form>
                    <hr>
                </div>
            </div> <!-- /.col-xs-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section>";
        
        $__internal_93efbebde07aa7ff6f26eaf26c839ee7519d43d23fda3d2390a5f1e78023c698->leave($__internal_93efbebde07aa7ff6f26eaf26c839ee7519d43d23fda3d2390a5f1e78023c698_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 46,  94 => 42,  86 => 37,  75 => 29,  68 => 25,  63 => 23,  59 => 21,  53 => 19,  51 => 18,  46 => 16,  36 => 8,  30 => 5,  27 => 4,  25 => 3,  22 => 2,);
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

{% if error %}
    <div class=\"alert alert-danger\" role=\"alert\">
        {{ error.messageKey|trans(error.messageData, 'security') }}
    </div>
{% endif %}

<section id=\"login\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"form-wrap\">

                    <h1>Connectez vous avec votre e-mail</h1>
                    <form role=\"form\" action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\" id=\"login-form\"
                          autocomplete=\"off\">
                        {% if csrf_token %}
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\"/>
                        {% endif %}

                        <div class=\"form-group\">
                            <label for=\"username\" class=\"sr-only\">{{ 'security.login.username'|trans }}</label>
                            <input type=\"text\" name=\"_username\" id=\"username\" class=\"form-control\"
                                   placeholder=\"Saisir votre nom\" value=\"{{ last_username }}\" required=\"required\">
                        </div>

                        <div class=\"form-group\">
                            <label for=\"password\" class=\"sr-only\">{{ 'security.login.password'|trans }}</label>
                            <input type=\"password\" name=\"_password\" id=\"password\" class=\"form-control\"
                                   placeholder=\"Saisir votre mot de passe\">
                        </div>

                        <div class=\"checkbox\">
                            <label>
                                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\"
                                       value=\"on\">{{ 'security.login.remember_me'|trans }}
                            </label>
                        </div>

                        <div class=\"help-block forget\">
                            <p>Mot de passe oublié ? <a href=\"{{ path('fos_user_resetting_request') }}\">cliquer ici</a></p>
                        </div>

                        <input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-custom btn-lg btn-block\"
                               value=\"{{ 'security.login.submit'|trans }}\">
                    </form>
                    <hr>
                </div>
            </div> <!-- /.col-xs-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section>", "FOSUserBundle:Security:login_content.html.twig", "/var/www/html/TPResa_Symfony3/app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
