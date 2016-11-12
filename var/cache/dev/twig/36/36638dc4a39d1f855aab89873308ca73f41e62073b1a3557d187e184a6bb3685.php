<?php

/* base.html.twig */
class __TwigTemplate_d1e80d9d456f0d2376a1d186ef7fd97c51aa3542b46d0274041acb8c31c98d09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_927092119dde55577c1c21a7266219905ba621108d5c4d39d5e57172c1912906 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_927092119dde55577c1c21a7266219905ba621108d5c4d39d5e57172c1912906->enter($__internal_927092119dde55577c1c21a7266219905ba621108d5c4d39d5e57172c1912906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"favicon.ico\">
    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "
    <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>


    <!-- Latest compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">

    <!-- Latest compiled and minified JavaScript -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>

<body>

";
        // line 32
        $this->loadTemplate("topnav.html.twig", "base.html.twig", 32)->display($context);
        // line 33
        echo "
<div class=\"container\">
    ";
        // line 35
        $this->displayBlock('content', $context, $blocks);
        // line 36
        echo "</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
";
        // line 44
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
        // line 45
        $this->displayBlock('javascripts', $context, $blocks);
        // line 46
        echo "</body>
</html>";
        
        $__internal_927092119dde55577c1c21a7266219905ba621108d5c4d39d5e57172c1912906->leave($__internal_927092119dde55577c1c21a7266219905ba621108d5c4d39d5e57172c1912906_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0f65a9e54033acab6801779295db52d7b176d1f5397e8517e6231d570619bf79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f65a9e54033acab6801779295db52d7b176d1f5397e8517e6231d570619bf79->enter($__internal_0f65a9e54033acab6801779295db52d7b176d1f5397e8517e6231d570619bf79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_0f65a9e54033acab6801779295db52d7b176d1f5397e8517e6231d570619bf79->leave($__internal_0f65a9e54033acab6801779295db52d7b176d1f5397e8517e6231d570619bf79_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_5b562a77abbbed72e7a3b4693e19751aacbb31656089a17c81a90532a95ce335 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b562a77abbbed72e7a3b4693e19751aacbb31656089a17c81a90532a95ce335->enter($__internal_5b562a77abbbed72e7a3b4693e19751aacbb31656089a17c81a90532a95ce335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Mon Site !!!";
        
        $__internal_5b562a77abbbed72e7a3b4693e19751aacbb31656089a17c81a90532a95ce335->leave($__internal_5b562a77abbbed72e7a3b4693e19751aacbb31656089a17c81a90532a95ce335_prof);

    }

    // line 35
    public function block_content($context, array $blocks = array())
    {
        $__internal_6218122653385a701a68c9f2ac268b43057e1c8e87f17b5cd6524e6ace56b69e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6218122653385a701a68c9f2ac268b43057e1c8e87f17b5cd6524e6ace56b69e->enter($__internal_6218122653385a701a68c9f2ac268b43057e1c8e87f17b5cd6524e6ace56b69e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_6218122653385a701a68c9f2ac268b43057e1c8e87f17b5cd6524e6ace56b69e->leave($__internal_6218122653385a701a68c9f2ac268b43057e1c8e87f17b5cd6524e6ace56b69e_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_75448b460082b46787374647350eea5d18cbc0dd710449e52d994ccad38cc7a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75448b460082b46787374647350eea5d18cbc0dd710449e52d994ccad38cc7a2->enter($__internal_75448b460082b46787374647350eea5d18cbc0dd710449e52d994ccad38cc7a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_75448b460082b46787374647350eea5d18cbc0dd710449e52d994ccad38cc7a2->leave($__internal_75448b460082b46787374647350eea5d18cbc0dd710449e52d994ccad38cc7a2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 45,  129 => 35,  117 => 13,  106 => 11,  98 => 46,  96 => 45,  91 => 44,  82 => 36,  80 => 35,  76 => 33,  74 => 32,  58 => 19,  54 => 18,  50 => 17,  43 => 13,  40 => 12,  38 => 11,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"favicon.ico\">
    {% block stylesheets %}{% endblock %}

    <title>{% block title %}Mon Site !!!{% endblock %}</title>


    <!-- Latest compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/font-awesome.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/main.css') }}\">

    <!-- Latest compiled and minified JavaScript -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>

<body>

{% include 'topnav.html.twig' %}

<div class=\"container\">
    {% block content %}{% endblock %}
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
{#<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>#}
<script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
{% block javascripts %}{% endblock %}
</body>
</html>", "base.html.twig", "/var/www/html/TPResa_Symfony3/app/Resources/views/base.html.twig");
    }
}
