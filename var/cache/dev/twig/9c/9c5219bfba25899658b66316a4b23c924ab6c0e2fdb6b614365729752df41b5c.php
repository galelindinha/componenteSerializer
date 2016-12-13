<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_01f0194b143d59f9c1cacd403a9fe8d2ef2b38bcd181a3d82faae45ba7c47caa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6135b34e81fd8319ecaf390962054d4b1bfd44a3480427505a139c6db2ad8390 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6135b34e81fd8319ecaf390962054d4b1bfd44a3480427505a139c6db2ad8390->enter($__internal_6135b34e81fd8319ecaf390962054d4b1bfd44a3480427505a139c6db2ad8390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_d3adae6a39b6b842d64be89df38b1ae013e086c121373cdd15d6a0a2fdbd5af6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3adae6a39b6b842d64be89df38b1ae013e086c121373cdd15d6a0a2fdbd5af6->enter($__internal_d3adae6a39b6b842d64be89df38b1ae013e086c121373cdd15d6a0a2fdbd5af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6135b34e81fd8319ecaf390962054d4b1bfd44a3480427505a139c6db2ad8390->leave($__internal_6135b34e81fd8319ecaf390962054d4b1bfd44a3480427505a139c6db2ad8390_prof);

        
        $__internal_d3adae6a39b6b842d64be89df38b1ae013e086c121373cdd15d6a0a2fdbd5af6->leave($__internal_d3adae6a39b6b842d64be89df38b1ae013e086c121373cdd15d6a0a2fdbd5af6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_98d699c2231e931a662e03812e929f7677ce6b7826c2c900b18201b471f58a35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98d699c2231e931a662e03812e929f7677ce6b7826c2c900b18201b471f58a35->enter($__internal_98d699c2231e931a662e03812e929f7677ce6b7826c2c900b18201b471f58a35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5b2e6faf3feb9c2b1b2d37bb32f648ad5480375ec75f4bd89a5ed9768905c816 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b2e6faf3feb9c2b1b2d37bb32f648ad5480375ec75f4bd89a5ed9768905c816->enter($__internal_5b2e6faf3feb9c2b1b2d37bb32f648ad5480375ec75f4bd89a5ed9768905c816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_5b2e6faf3feb9c2b1b2d37bb32f648ad5480375ec75f4bd89a5ed9768905c816->leave($__internal_5b2e6faf3feb9c2b1b2d37bb32f648ad5480375ec75f4bd89a5ed9768905c816_prof);

        
        $__internal_98d699c2231e931a662e03812e929f7677ce6b7826c2c900b18201b471f58a35->leave($__internal_98d699c2231e931a662e03812e929f7677ce6b7826c2c900b18201b471f58a35_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/componenteSerializer/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
