<?php

/* base.html.twig */
class __TwigTemplate_bb49f1be50092988a746c57cad539cd14ba35bd5796ff1f9cf49c36bb6aec96b extends Twig_Template
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
        $__internal_4f663c70abd1146ce73fe8f6b506cd136b67e9a5f6dc4a17324f748fb25c398a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f663c70abd1146ce73fe8f6b506cd136b67e9a5f6dc4a17324f748fb25c398a->enter($__internal_4f663c70abd1146ce73fe8f6b506cd136b67e9a5f6dc4a17324f748fb25c398a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_4f663c70abd1146ce73fe8f6b506cd136b67e9a5f6dc4a17324f748fb25c398a->leave($__internal_4f663c70abd1146ce73fe8f6b506cd136b67e9a5f6dc4a17324f748fb25c398a_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6c659d36f70689800e3b4df33fc1553e68c58ab745d3c134cae0fb8df527a5d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c659d36f70689800e3b4df33fc1553e68c58ab745d3c134cae0fb8df527a5d8->enter($__internal_6c659d36f70689800e3b4df33fc1553e68c58ab745d3c134cae0fb8df527a5d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_6c659d36f70689800e3b4df33fc1553e68c58ab745d3c134cae0fb8df527a5d8->leave($__internal_6c659d36f70689800e3b4df33fc1553e68c58ab745d3c134cae0fb8df527a5d8_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_1f9ce5fdf831a0c7677efe08bdd621d3b283da4cf616b663bee59368c8255fca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f9ce5fdf831a0c7677efe08bdd621d3b283da4cf616b663bee59368c8255fca->enter($__internal_1f9ce5fdf831a0c7677efe08bdd621d3b283da4cf616b663bee59368c8255fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Mon Site !!!";
        
        $__internal_1f9ce5fdf831a0c7677efe08bdd621d3b283da4cf616b663bee59368c8255fca->leave($__internal_1f9ce5fdf831a0c7677efe08bdd621d3b283da4cf616b663bee59368c8255fca_prof);

    }

    // line 35
    public function block_content($context, array $blocks = array())
    {
        $__internal_f47ed0b41718722dcbf805fff03d62e4417c3ca7970eca06589ff88d234eca63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f47ed0b41718722dcbf805fff03d62e4417c3ca7970eca06589ff88d234eca63->enter($__internal_f47ed0b41718722dcbf805fff03d62e4417c3ca7970eca06589ff88d234eca63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_f47ed0b41718722dcbf805fff03d62e4417c3ca7970eca06589ff88d234eca63->leave($__internal_f47ed0b41718722dcbf805fff03d62e4417c3ca7970eca06589ff88d234eca63_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ba407b1600c447a50913436a1cfb757d216e38942c9f9dd8203031ff02001999 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba407b1600c447a50913436a1cfb757d216e38942c9f9dd8203031ff02001999->enter($__internal_ba407b1600c447a50913436a1cfb757d216e38942c9f9dd8203031ff02001999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_ba407b1600c447a50913436a1cfb757d216e38942c9f9dd8203031ff02001999->leave($__internal_ba407b1600c447a50913436a1cfb757d216e38942c9f9dd8203031ff02001999_prof);

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
