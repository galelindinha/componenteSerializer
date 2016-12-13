<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_7ee4c9d8dd3eee90298bb79558d74adae4bf106b39167bbfa0210c547c846b5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_41f0110cab9936b4a68ddbd3a8030a849c6c0e7939530da3447025c6debe57af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41f0110cab9936b4a68ddbd3a8030a849c6c0e7939530da3447025c6debe57af->enter($__internal_41f0110cab9936b4a68ddbd3a8030a849c6c0e7939530da3447025c6debe57af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_be48f94475e56e05dcb43a08ccc48d22b6269dbc389cd93f496cfb9401ab5e75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be48f94475e56e05dcb43a08ccc48d22b6269dbc389cd93f496cfb9401ab5e75->enter($__internal_be48f94475e56e05dcb43a08ccc48d22b6269dbc389cd93f496cfb9401ab5e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41f0110cab9936b4a68ddbd3a8030a849c6c0e7939530da3447025c6debe57af->leave($__internal_41f0110cab9936b4a68ddbd3a8030a849c6c0e7939530da3447025c6debe57af_prof);

        
        $__internal_be48f94475e56e05dcb43a08ccc48d22b6269dbc389cd93f496cfb9401ab5e75->leave($__internal_be48f94475e56e05dcb43a08ccc48d22b6269dbc389cd93f496cfb9401ab5e75_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_472dff5a9349ed556d73f51f018964e8d6c947e69a0dd02b37e457b77e34fe4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_472dff5a9349ed556d73f51f018964e8d6c947e69a0dd02b37e457b77e34fe4d->enter($__internal_472dff5a9349ed556d73f51f018964e8d6c947e69a0dd02b37e457b77e34fe4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_62b2468ebbaa3d5e3996c9b20b1773a515c3c65129c19b5c5b88a453f94a5052 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62b2468ebbaa3d5e3996c9b20b1773a515c3c65129c19b5c5b88a453f94a5052->enter($__internal_62b2468ebbaa3d5e3996c9b20b1773a515c3c65129c19b5c5b88a453f94a5052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_62b2468ebbaa3d5e3996c9b20b1773a515c3c65129c19b5c5b88a453f94a5052->leave($__internal_62b2468ebbaa3d5e3996c9b20b1773a515c3c65129c19b5c5b88a453f94a5052_prof);

        
        $__internal_472dff5a9349ed556d73f51f018964e8d6c947e69a0dd02b37e457b77e34fe4d->leave($__internal_472dff5a9349ed556d73f51f018964e8d6c947e69a0dd02b37e457b77e34fe4d_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_f153c4a94ed131c8d3813c70bd90ff4a518b56110564efec43fce3295beb022b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f153c4a94ed131c8d3813c70bd90ff4a518b56110564efec43fce3295beb022b->enter($__internal_f153c4a94ed131c8d3813c70bd90ff4a518b56110564efec43fce3295beb022b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_602c8587c3d57c4d4d30f818803f89d6f21e4e8e6880dce9b96141709966ba7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_602c8587c3d57c4d4d30f818803f89d6f21e4e8e6880dce9b96141709966ba7d->enter($__internal_602c8587c3d57c4d4d30f818803f89d6f21e4e8e6880dce9b96141709966ba7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_602c8587c3d57c4d4d30f818803f89d6f21e4e8e6880dce9b96141709966ba7d->leave($__internal_602c8587c3d57c4d4d30f818803f89d6f21e4e8e6880dce9b96141709966ba7d_prof);

        
        $__internal_f153c4a94ed131c8d3813c70bd90ff4a518b56110564efec43fce3295beb022b->leave($__internal_f153c4a94ed131c8d3813c70bd90ff4a518b56110564efec43fce3295beb022b_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_a554c77db7222e73af0c04432cd1122c3d71c90c1437a9bb3a3896394345f37b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a554c77db7222e73af0c04432cd1122c3d71c90c1437a9bb3a3896394345f37b->enter($__internal_a554c77db7222e73af0c04432cd1122c3d71c90c1437a9bb3a3896394345f37b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a940dfc5f2160c2532858f753fe13070b6ae87dcb05ce233eafde4187fe442d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a940dfc5f2160c2532858f753fe13070b6ae87dcb05ce233eafde4187fe442d3->enter($__internal_a940dfc5f2160c2532858f753fe13070b6ae87dcb05ce233eafde4187fe442d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_a940dfc5f2160c2532858f753fe13070b6ae87dcb05ce233eafde4187fe442d3->leave($__internal_a940dfc5f2160c2532858f753fe13070b6ae87dcb05ce233eafde4187fe442d3_prof);

        
        $__internal_a554c77db7222e73af0c04432cd1122c3d71c90c1437a9bb3a3896394345f37b->leave($__internal_a554c77db7222e73af0c04432cd1122c3d71c90c1437a9bb3a3896394345f37b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/componenteSerializer/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
