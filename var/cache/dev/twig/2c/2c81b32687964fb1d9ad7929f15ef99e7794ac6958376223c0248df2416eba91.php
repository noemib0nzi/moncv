<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_0ce76abf968b1b253cc26f3e015d68e797208090f7e3198faeef914093b3a97f extends Twig_Template
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
        $__internal_b7bb4aba992d8965867928b1ac32f0f5045592ac05e50e38ecdb909034db5efe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7bb4aba992d8965867928b1ac32f0f5045592ac05e50e38ecdb909034db5efe->enter($__internal_b7bb4aba992d8965867928b1ac32f0f5045592ac05e50e38ecdb909034db5efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_568cae0a27105ec645b561e64f09a16d0160c2a5e5c814a0fd044c84169789d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_568cae0a27105ec645b561e64f09a16d0160c2a5e5c814a0fd044c84169789d6->enter($__internal_568cae0a27105ec645b561e64f09a16d0160c2a5e5c814a0fd044c84169789d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7bb4aba992d8965867928b1ac32f0f5045592ac05e50e38ecdb909034db5efe->leave($__internal_b7bb4aba992d8965867928b1ac32f0f5045592ac05e50e38ecdb909034db5efe_prof);

        
        $__internal_568cae0a27105ec645b561e64f09a16d0160c2a5e5c814a0fd044c84169789d6->leave($__internal_568cae0a27105ec645b561e64f09a16d0160c2a5e5c814a0fd044c84169789d6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a31c9e210258d4a32211c421b6635daecd07869d3307c4266028e2960025c709 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a31c9e210258d4a32211c421b6635daecd07869d3307c4266028e2960025c709->enter($__internal_a31c9e210258d4a32211c421b6635daecd07869d3307c4266028e2960025c709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fa849b4d8e4cd0608dac62487f5e81c270dd5f89e28d1282d05762101b0ecf06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa849b4d8e4cd0608dac62487f5e81c270dd5f89e28d1282d05762101b0ecf06->enter($__internal_fa849b4d8e4cd0608dac62487f5e81c270dd5f89e28d1282d05762101b0ecf06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
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
        
        $__internal_fa849b4d8e4cd0608dac62487f5e81c270dd5f89e28d1282d05762101b0ecf06->leave($__internal_fa849b4d8e4cd0608dac62487f5e81c270dd5f89e28d1282d05762101b0ecf06_prof);

        
        $__internal_a31c9e210258d4a32211c421b6635daecd07869d3307c4266028e2960025c709->leave($__internal_a31c9e210258d4a32211c421b6635daecd07869d3307c4266028e2960025c709_prof);

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
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
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
", "@WebProfiler/Collector/ajax.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
