<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_7c0a99661b167394059f4d217290b224ecefc2acb5365e37222012c464b2bcc6 extends Twig_Template
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
        $__internal_3af0eb936cb6def603bc0bebcbc0d17b649b32f957019dcf62b0e96a812e8073 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3af0eb936cb6def603bc0bebcbc0d17b649b32f957019dcf62b0e96a812e8073->enter($__internal_3af0eb936cb6def603bc0bebcbc0d17b649b32f957019dcf62b0e96a812e8073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        // line 2
        echo "
<section id=\"login\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"form-wrap\">
                    <h1>Réinitialiser votre mot de passe</h1>

                    ";
        // line 11
        echo "                    <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\"
                          class=\"fos_user_resetting_request\">
                        ";
        // line 14
        echo "                        <div class=\"form-group\">
                            <label for=\"username\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                            <input type=\"text\" id=\"username\" class=\"form-control\" name=\"username\" required=\"required\"/>
                        </div>

                        ";
        // line 20
        echo "                        <div>
                            <input type=\"submit\" class=\"btn btn-custom btn-lg btn-block\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>
                        </div>
                     ";
        // line 24
        echo "                    </form>
                    <hr>
                </div>
            </div> <!-- /.col-xs-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section>


";
        
        $__internal_3af0eb936cb6def603bc0bebcbc0d17b649b32f957019dcf62b0e96a812e8073->leave($__internal_3af0eb936cb6def603bc0bebcbc0d17b649b32f957019dcf62b0e96a812e8073_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 24,  51 => 21,  48 => 20,  41 => 15,  38 => 14,  32 => 11,  22 => 2,);
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
                    <h1>Réinitialiser votre mot de passe</h1>

                    {# FORM START #}
                    <form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\"
                          class=\"fos_user_resetting_request\">
                        {# INPUT USERNAME#}
                        <div class=\"form-group\">
                            <label for=\"username\">{{ 'resetting.request.username'|trans }}</label>
                            <input type=\"text\" id=\"username\" class=\"form-control\" name=\"username\" required=\"required\"/>
                        </div>

                        {# INPUT SUBMIT #}
                        <div>
                            <input type=\"submit\" class=\"btn btn-custom btn-lg btn-block\" value=\"{{ 'resetting.request.submit'|trans }}\"/>
                        </div>
                     {# FORM END #}
                    </form>
                    <hr>
                </div>
            </div> <!-- /.col-xs-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section>


", "FOSUserBundle:Resetting:request_content.html.twig", "/var/www/html/TPResa_Symfony3/app/Resources/FOSUserBundle/views/Resetting/request_content.html.twig");
    }
}
