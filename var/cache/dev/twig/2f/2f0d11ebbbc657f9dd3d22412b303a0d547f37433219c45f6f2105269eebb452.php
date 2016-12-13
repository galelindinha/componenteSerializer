<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ac2abd66cb8127fd6e1b827ae9c6fa9bf207f619064acfcbe4b2163200a66e26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bbf95438e4d36eeca0b9eedc2a8dfe7cb53cb240777651503c51e76bb3fbfdd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbf95438e4d36eeca0b9eedc2a8dfe7cb53cb240777651503c51e76bb3fbfdd9->enter($__internal_bbf95438e4d36eeca0b9eedc2a8dfe7cb53cb240777651503c51e76bb3fbfdd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_88c242b95c59ebf446e83064639cfa67ae83f18419dbe71324a30047608c9bad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88c242b95c59ebf446e83064639cfa67ae83f18419dbe71324a30047608c9bad->enter($__internal_88c242b95c59ebf446e83064639cfa67ae83f18419dbe71324a30047608c9bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbf95438e4d36eeca0b9eedc2a8dfe7cb53cb240777651503c51e76bb3fbfdd9->leave($__internal_bbf95438e4d36eeca0b9eedc2a8dfe7cb53cb240777651503c51e76bb3fbfdd9_prof);

        
        $__internal_88c242b95c59ebf446e83064639cfa67ae83f18419dbe71324a30047608c9bad->leave($__internal_88c242b95c59ebf446e83064639cfa67ae83f18419dbe71324a30047608c9bad_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_68d91a9acb6c9efbd82e125dcfab764b101e7e187deede1e83a8ccaa250db8d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68d91a9acb6c9efbd82e125dcfab764b101e7e187deede1e83a8ccaa250db8d9->enter($__internal_68d91a9acb6c9efbd82e125dcfab764b101e7e187deede1e83a8ccaa250db8d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0ad5cf4dabdb702fa6bce9a18795b72ad7d96197e8bd947546a6ab15bb315b24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ad5cf4dabdb702fa6bce9a18795b72ad7d96197e8bd947546a6ab15bb315b24->enter($__internal_0ad5cf4dabdb702fa6bce9a18795b72ad7d96197e8bd947546a6ab15bb315b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0ad5cf4dabdb702fa6bce9a18795b72ad7d96197e8bd947546a6ab15bb315b24->leave($__internal_0ad5cf4dabdb702fa6bce9a18795b72ad7d96197e8bd947546a6ab15bb315b24_prof);

        
        $__internal_68d91a9acb6c9efbd82e125dcfab764b101e7e187deede1e83a8ccaa250db8d9->leave($__internal_68d91a9acb6c9efbd82e125dcfab764b101e7e187deede1e83a8ccaa250db8d9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e6e8388c520201c18e4accf1974ce78621b55e14dea276f9c0046f7a97c0780a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6e8388c520201c18e4accf1974ce78621b55e14dea276f9c0046f7a97c0780a->enter($__internal_e6e8388c520201c18e4accf1974ce78621b55e14dea276f9c0046f7a97c0780a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0b325696d8c8f4d03244c05dc0d4be5a5bc8fda64bfec82ab71b06c2bf5f9d9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b325696d8c8f4d03244c05dc0d4be5a5bc8fda64bfec82ab71b06c2bf5f9d9a->enter($__internal_0b325696d8c8f4d03244c05dc0d4be5a5bc8fda64bfec82ab71b06c2bf5f9d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0b325696d8c8f4d03244c05dc0d4be5a5bc8fda64bfec82ab71b06c2bf5f9d9a->leave($__internal_0b325696d8c8f4d03244c05dc0d4be5a5bc8fda64bfec82ab71b06c2bf5f9d9a_prof);

        
        $__internal_e6e8388c520201c18e4accf1974ce78621b55e14dea276f9c0046f7a97c0780a->leave($__internal_e6e8388c520201c18e4accf1974ce78621b55e14dea276f9c0046f7a97c0780a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_93376379cc16501ca00b0681f52bbc48947bdeba9eae55e63bd5ca8a6e2ae18a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93376379cc16501ca00b0681f52bbc48947bdeba9eae55e63bd5ca8a6e2ae18a->enter($__internal_93376379cc16501ca00b0681f52bbc48947bdeba9eae55e63bd5ca8a6e2ae18a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e1fce44d83ca5d8924b985ca4e7442373c0abb76a31ca84c53eef764172f66d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1fce44d83ca5d8924b985ca4e7442373c0abb76a31ca84c53eef764172f66d1->enter($__internal_e1fce44d83ca5d8924b985ca4e7442373c0abb76a31ca84c53eef764172f66d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e1fce44d83ca5d8924b985ca4e7442373c0abb76a31ca84c53eef764172f66d1->leave($__internal_e1fce44d83ca5d8924b985ca4e7442373c0abb76a31ca84c53eef764172f66d1_prof);

        
        $__internal_93376379cc16501ca00b0681f52bbc48947bdeba9eae55e63bd5ca8a6e2ae18a->leave($__internal_93376379cc16501ca00b0681f52bbc48947bdeba9eae55e63bd5ca8a6e2ae18a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/componenteSerializer/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
