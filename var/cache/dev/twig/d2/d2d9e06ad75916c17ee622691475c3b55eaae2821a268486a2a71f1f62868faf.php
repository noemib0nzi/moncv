<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d53c5086159fe5a49688cf64d3ab072be7a7e7a47c3e56920a31c877e13687f5 extends Twig_Template
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
        $__internal_80869c71cf04549d68765edeb9b8257106fbfdd9bc62c61db04db2f030221bfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80869c71cf04549d68765edeb9b8257106fbfdd9bc62c61db04db2f030221bfb->enter($__internal_80869c71cf04549d68765edeb9b8257106fbfdd9bc62c61db04db2f030221bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_bb02f761fc01df4e6c943d9687097b23732445e0100525ae3ccdfb1438384920 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb02f761fc01df4e6c943d9687097b23732445e0100525ae3ccdfb1438384920->enter($__internal_bb02f761fc01df4e6c943d9687097b23732445e0100525ae3ccdfb1438384920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80869c71cf04549d68765edeb9b8257106fbfdd9bc62c61db04db2f030221bfb->leave($__internal_80869c71cf04549d68765edeb9b8257106fbfdd9bc62c61db04db2f030221bfb_prof);

        
        $__internal_bb02f761fc01df4e6c943d9687097b23732445e0100525ae3ccdfb1438384920->leave($__internal_bb02f761fc01df4e6c943d9687097b23732445e0100525ae3ccdfb1438384920_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_98966597cc6a1728203b83a821e16c0b7e359735f88ec03575e9cbab6a6be6fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98966597cc6a1728203b83a821e16c0b7e359735f88ec03575e9cbab6a6be6fc->enter($__internal_98966597cc6a1728203b83a821e16c0b7e359735f88ec03575e9cbab6a6be6fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d4a01f65fc57391587137d773dc0e6f5363b5ad3545989fee27f1c07a6f47a41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4a01f65fc57391587137d773dc0e6f5363b5ad3545989fee27f1c07a6f47a41->enter($__internal_d4a01f65fc57391587137d773dc0e6f5363b5ad3545989fee27f1c07a6f47a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d4a01f65fc57391587137d773dc0e6f5363b5ad3545989fee27f1c07a6f47a41->leave($__internal_d4a01f65fc57391587137d773dc0e6f5363b5ad3545989fee27f1c07a6f47a41_prof);

        
        $__internal_98966597cc6a1728203b83a821e16c0b7e359735f88ec03575e9cbab6a6be6fc->leave($__internal_98966597cc6a1728203b83a821e16c0b7e359735f88ec03575e9cbab6a6be6fc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_20eaba9ac7e5148c0d86f49c89f784a29a2c6d0869da9a30e7bc64fd45ab5df9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20eaba9ac7e5148c0d86f49c89f784a29a2c6d0869da9a30e7bc64fd45ab5df9->enter($__internal_20eaba9ac7e5148c0d86f49c89f784a29a2c6d0869da9a30e7bc64fd45ab5df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5fbd6fc6914f9f5441b00ff042272e0914a9977a53c216cfeb529acc9c63dfcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fbd6fc6914f9f5441b00ff042272e0914a9977a53c216cfeb529acc9c63dfcb->enter($__internal_5fbd6fc6914f9f5441b00ff042272e0914a9977a53c216cfeb529acc9c63dfcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5fbd6fc6914f9f5441b00ff042272e0914a9977a53c216cfeb529acc9c63dfcb->leave($__internal_5fbd6fc6914f9f5441b00ff042272e0914a9977a53c216cfeb529acc9c63dfcb_prof);

        
        $__internal_20eaba9ac7e5148c0d86f49c89f784a29a2c6d0869da9a30e7bc64fd45ab5df9->leave($__internal_20eaba9ac7e5148c0d86f49c89f784a29a2c6d0869da9a30e7bc64fd45ab5df9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_52d99c02e496a6f665c816c7e89c8237f1281a8696df283ab93aeaf050c2132f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52d99c02e496a6f665c816c7e89c8237f1281a8696df283ab93aeaf050c2132f->enter($__internal_52d99c02e496a6f665c816c7e89c8237f1281a8696df283ab93aeaf050c2132f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9688d8272613d2bfd82f28a492e37d0665059b18353b00e1470d40e2bb1786ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9688d8272613d2bfd82f28a492e37d0665059b18353b00e1470d40e2bb1786ca->enter($__internal_9688d8272613d2bfd82f28a492e37d0665059b18353b00e1470d40e2bb1786ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9688d8272613d2bfd82f28a492e37d0665059b18353b00e1470d40e2bb1786ca->leave($__internal_9688d8272613d2bfd82f28a492e37d0665059b18353b00e1470d40e2bb1786ca_prof);

        
        $__internal_52d99c02e496a6f665c816c7e89c8237f1281a8696df283ab93aeaf050c2132f->leave($__internal_52d99c02e496a6f665c816c7e89c8237f1281a8696df283ab93aeaf050c2132f_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
