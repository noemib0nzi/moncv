<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5e93d5e3a429ea82cc5e671f8331b5b453268563aaa38cfc38e349a13569248b extends Twig_Template
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
        $__internal_63ca07220017859964949856b44026f40f920a1981c2494d9f7fd116ad644be3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63ca07220017859964949856b44026f40f920a1981c2494d9f7fd116ad644be3->enter($__internal_63ca07220017859964949856b44026f40f920a1981c2494d9f7fd116ad644be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_97f46a7c467f180afe27135720941c1db5516cf10c820227bfddaf69d37b1cc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97f46a7c467f180afe27135720941c1db5516cf10c820227bfddaf69d37b1cc4->enter($__internal_97f46a7c467f180afe27135720941c1db5516cf10c820227bfddaf69d37b1cc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63ca07220017859964949856b44026f40f920a1981c2494d9f7fd116ad644be3->leave($__internal_63ca07220017859964949856b44026f40f920a1981c2494d9f7fd116ad644be3_prof);

        
        $__internal_97f46a7c467f180afe27135720941c1db5516cf10c820227bfddaf69d37b1cc4->leave($__internal_97f46a7c467f180afe27135720941c1db5516cf10c820227bfddaf69d37b1cc4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9a51b30d1b976f5814bea2cf738d8467caa80adc2ec368af06deb9486289a436 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a51b30d1b976f5814bea2cf738d8467caa80adc2ec368af06deb9486289a436->enter($__internal_9a51b30d1b976f5814bea2cf738d8467caa80adc2ec368af06deb9486289a436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b7dc7d6daf6d68b7f6dc9e218576b16ffaea2d5c1f96006acf4acd9d276d8e96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7dc7d6daf6d68b7f6dc9e218576b16ffaea2d5c1f96006acf4acd9d276d8e96->enter($__internal_b7dc7d6daf6d68b7f6dc9e218576b16ffaea2d5c1f96006acf4acd9d276d8e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b7dc7d6daf6d68b7f6dc9e218576b16ffaea2d5c1f96006acf4acd9d276d8e96->leave($__internal_b7dc7d6daf6d68b7f6dc9e218576b16ffaea2d5c1f96006acf4acd9d276d8e96_prof);

        
        $__internal_9a51b30d1b976f5814bea2cf738d8467caa80adc2ec368af06deb9486289a436->leave($__internal_9a51b30d1b976f5814bea2cf738d8467caa80adc2ec368af06deb9486289a436_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_b305b458527626195b53a6fca5fe7662c1f73d7654e29de3e05c5f7094c83625 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b305b458527626195b53a6fca5fe7662c1f73d7654e29de3e05c5f7094c83625->enter($__internal_b305b458527626195b53a6fca5fe7662c1f73d7654e29de3e05c5f7094c83625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c9ca37e3596b97dd0a160e5498fc0d900fef1311f4e2e47528363ab820916894 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9ca37e3596b97dd0a160e5498fc0d900fef1311f4e2e47528363ab820916894->enter($__internal_c9ca37e3596b97dd0a160e5498fc0d900fef1311f4e2e47528363ab820916894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c9ca37e3596b97dd0a160e5498fc0d900fef1311f4e2e47528363ab820916894->leave($__internal_c9ca37e3596b97dd0a160e5498fc0d900fef1311f4e2e47528363ab820916894_prof);

        
        $__internal_b305b458527626195b53a6fca5fe7662c1f73d7654e29de3e05c5f7094c83625->leave($__internal_b305b458527626195b53a6fca5fe7662c1f73d7654e29de3e05c5f7094c83625_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff070f4078e89e388f06ae0cc8903fb5fe4a23f9f918c9ebf5cf51fa9e7653b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff070f4078e89e388f06ae0cc8903fb5fe4a23f9f918c9ebf5cf51fa9e7653b5->enter($__internal_ff070f4078e89e388f06ae0cc8903fb5fe4a23f9f918c9ebf5cf51fa9e7653b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cdeebdc01727edee66ddc8f5e5b5d9d9b92652485d2c9f00353218ebf3dc79bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdeebdc01727edee66ddc8f5e5b5d9d9b92652485d2c9f00353218ebf3dc79bd->enter($__internal_cdeebdc01727edee66ddc8f5e5b5d9d9b92652485d2c9f00353218ebf3dc79bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_cdeebdc01727edee66ddc8f5e5b5d9d9b92652485d2c9f00353218ebf3dc79bd->leave($__internal_cdeebdc01727edee66ddc8f5e5b5d9d9b92652485d2c9f00353218ebf3dc79bd_prof);

        
        $__internal_ff070f4078e89e388f06ae0cc8903fb5fe4a23f9f918c9ebf5cf51fa9e7653b5->leave($__internal_ff070f4078e89e388f06ae0cc8903fb5fe4a23f9f918c9ebf5cf51fa9e7653b5_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
