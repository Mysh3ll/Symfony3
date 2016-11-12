<?php

/* FOSUserBundle:Profile:upload_image.html.twig */
class __TwigTemplate_ebea7e35e65c228d5fb9137dd1644e13032eca25aa979c9cbc91ea6a5ec84a6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:upload_image.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_433c9850fd935768368ca0aee8206bd97d48350fb8a7b25be63ae8f5d66070fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_433c9850fd935768368ca0aee8206bd97d48350fb8a7b25be63ae8f5d66070fb->enter($__internal_433c9850fd935768368ca0aee8206bd97d48350fb8a7b25be63ae8f5d66070fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:upload_image.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_433c9850fd935768368ca0aee8206bd97d48350fb8a7b25be63ae8f5d66070fb->leave($__internal_433c9850fd935768368ca0aee8206bd97d48350fb8a7b25be63ae8f5d66070fb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f9632602ddde15042de1d4616cab91af3d45c11b99d1bb1e6bb4fbcf65ce6272 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9632602ddde15042de1d4616cab91af3d45c11b99d1bb1e6bb4fbcf65ce6272->enter($__internal_f9632602ddde15042de1d4616cab91af3d45c11b99d1bb1e6bb4fbcf65ce6272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Profile:upload_image.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:upload_image_content.html.twig", "FOSUserBundle:Profile:upload_image.html.twig", 4)->display($context);
        
        $__internal_f9632602ddde15042de1d4616cab91af3d45c11b99d1bb1e6bb4fbcf65ce6272->leave($__internal_f9632602ddde15042de1d4616cab91af3d45c11b99d1bb1e6bb4fbcf65ce6272_prof);

    }

    // line 7
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8a4027324128d4365223a1b3013a5211d0adf3d740fa1f0bd9745ae8cd5419b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a4027324128d4365223a1b3013a5211d0adf3d740fa1f0bd9745ae8cd5419b1->enter($__internal_8a4027324128d4365223a1b3013a5211d0adf3d740fa1f0bd9745ae8cd5419b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Profile:upload_image.html.twig"));

        // line 8
        echo "    ";
        // line 9
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/uploadUserImage.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_8a4027324128d4365223a1b3013a5211d0adf3d740fa1f0bd9745ae8cd5419b1->leave($__internal_8a4027324128d4365223a1b3013a5211d0adf3d740fa1f0bd9745ae8cd5419b1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:upload_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 9,  54 => 8,  48 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Profile:upload_image_content.html.twig\" %}
{% endblock fos_user_content %}

{% block javascripts %}
    {# Upload Image JS #}
    <script src=\"{{ asset('js/uploadUserImage.js') }}\"></script>
{% endblock %}
", "FOSUserBundle:Profile:upload_image.html.twig", "/var/www/html/TPResa_Symfony3/app/Resources/FOSUserBundle/views/Profile/upload_image.html.twig");
    }
}
