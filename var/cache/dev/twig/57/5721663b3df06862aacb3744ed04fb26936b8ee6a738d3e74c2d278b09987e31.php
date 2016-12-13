<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_40ce299edbe7f3496dfc282905ca62c8a2fd5886d5d6c92b52627f4f845dbe67 extends Twig_Template
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
        $__internal_3f83ebb24624b51c479986cce215b41e7f081e97ffe9de8eeefb1e35bd9e8b4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f83ebb24624b51c479986cce215b41e7f081e97ffe9de8eeefb1e35bd9e8b4b->enter($__internal_3f83ebb24624b51c479986cce215b41e7f081e97ffe9de8eeefb1e35bd9e8b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_5cd17bda8820b0a1adf2512338f61500e7fe11919334c2d4573bd9a2ed3677ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cd17bda8820b0a1adf2512338f61500e7fe11919334c2d4573bd9a2ed3677ab->enter($__internal_5cd17bda8820b0a1adf2512338f61500e7fe11919334c2d4573bd9a2ed3677ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_3f83ebb24624b51c479986cce215b41e7f081e97ffe9de8eeefb1e35bd9e8b4b->leave($__internal_3f83ebb24624b51c479986cce215b41e7f081e97ffe9de8eeefb1e35bd9e8b4b_prof);

        
        $__internal_5cd17bda8820b0a1adf2512338f61500e7fe11919334c2d4573bd9a2ed3677ab->leave($__internal_5cd17bda8820b0a1adf2512338f61500e7fe11919334c2d4573bd9a2ed3677ab_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/var/www/html/componenteSerializer/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
