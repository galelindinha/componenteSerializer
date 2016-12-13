<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_5c43782825d871255c2095a2e5264478482fd7f51ea58a260159350aa928a5f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_80bd8b0ef0b1fe8633b813e07a4df8b14f80c5c7e51e66f6ae0fd8243ee42d4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80bd8b0ef0b1fe8633b813e07a4df8b14f80c5c7e51e66f6ae0fd8243ee42d4a->enter($__internal_80bd8b0ef0b1fe8633b813e07a4df8b14f80c5c7e51e66f6ae0fd8243ee42d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_4665b9dc947c1c25db1dbae288bda9fdc6b7139ddb0d610d0963aecadbd045ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4665b9dc947c1c25db1dbae288bda9fdc6b7139ddb0d610d0963aecadbd045ef->enter($__internal_4665b9dc947c1c25db1dbae288bda9fdc6b7139ddb0d610d0963aecadbd045ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80bd8b0ef0b1fe8633b813e07a4df8b14f80c5c7e51e66f6ae0fd8243ee42d4a->leave($__internal_80bd8b0ef0b1fe8633b813e07a4df8b14f80c5c7e51e66f6ae0fd8243ee42d4a_prof);

        
        $__internal_4665b9dc947c1c25db1dbae288bda9fdc6b7139ddb0d610d0963aecadbd045ef->leave($__internal_4665b9dc947c1c25db1dbae288bda9fdc6b7139ddb0d610d0963aecadbd045ef_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e055bcfa3b3060be501a63ea7b2f52842fce7728c58e257a52b5f55a8b6c3b42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e055bcfa3b3060be501a63ea7b2f52842fce7728c58e257a52b5f55a8b6c3b42->enter($__internal_e055bcfa3b3060be501a63ea7b2f52842fce7728c58e257a52b5f55a8b6c3b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c95355793532c521f85df2ce70ffcdc0a2db1af56c468d7aa3635b771562ff83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c95355793532c521f85df2ce70ffcdc0a2db1af56c468d7aa3635b771562ff83->enter($__internal_c95355793532c521f85df2ce70ffcdc0a2db1af56c468d7aa3635b771562ff83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_c95355793532c521f85df2ce70ffcdc0a2db1af56c468d7aa3635b771562ff83->leave($__internal_c95355793532c521f85df2ce70ffcdc0a2db1af56c468d7aa3635b771562ff83_prof);

        
        $__internal_e055bcfa3b3060be501a63ea7b2f52842fce7728c58e257a52b5f55a8b6c3b42->leave($__internal_e055bcfa3b3060be501a63ea7b2f52842fce7728c58e257a52b5f55a8b6c3b42_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f414f231d4db9006edea0e34046f26dda23009dbc165291bf369473c37c380d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f414f231d4db9006edea0e34046f26dda23009dbc165291bf369473c37c380d8->enter($__internal_f414f231d4db9006edea0e34046f26dda23009dbc165291bf369473c37c380d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1612bd91bc4ffe63562a23455adf2fb6df9282fe5a56a0c4bd4fc3609053ba52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1612bd91bc4ffe63562a23455adf2fb6df9282fe5a56a0c4bd4fc3609053ba52->enter($__internal_1612bd91bc4ffe63562a23455adf2fb6df9282fe5a56a0c4bd4fc3609053ba52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_1612bd91bc4ffe63562a23455adf2fb6df9282fe5a56a0c4bd4fc3609053ba52->leave($__internal_1612bd91bc4ffe63562a23455adf2fb6df9282fe5a56a0c4bd4fc3609053ba52_prof);

        
        $__internal_f414f231d4db9006edea0e34046f26dda23009dbc165291bf369473c37c380d8->leave($__internal_f414f231d4db9006edea0e34046f26dda23009dbc165291bf369473c37c380d8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bb81603f243b86c28bd0cf6ac41ea3424ec4acd448c79c0cb6152e052625974c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb81603f243b86c28bd0cf6ac41ea3424ec4acd448c79c0cb6152e052625974c->enter($__internal_bb81603f243b86c28bd0cf6ac41ea3424ec4acd448c79c0cb6152e052625974c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b8157ff15248a3111797be5e8095e0d1c1e6b4007ef0e1b52efef714dbf28c4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8157ff15248a3111797be5e8095e0d1c1e6b4007ef0e1b52efef714dbf28c4f->enter($__internal_b8157ff15248a3111797be5e8095e0d1c1e6b4007ef0e1b52efef714dbf28c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_b8157ff15248a3111797be5e8095e0d1c1e6b4007ef0e1b52efef714dbf28c4f->leave($__internal_b8157ff15248a3111797be5e8095e0d1c1e6b4007ef0e1b52efef714dbf28c4f_prof);

        
        $__internal_bb81603f243b86c28bd0cf6ac41ea3424ec4acd448c79c0cb6152e052625974c->leave($__internal_bb81603f243b86c28bd0cf6ac41ea3424ec4acd448c79c0cb6152e052625974c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/componenteSerializer/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
