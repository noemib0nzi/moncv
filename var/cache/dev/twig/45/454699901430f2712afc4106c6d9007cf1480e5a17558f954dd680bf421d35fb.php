<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_19b4c863e74d0fa7304b3805ec542e81faa566947f9b9781d92db7ce8701ddf9 extends Twig_Template
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
        $__internal_dfca90a3ec318d265c08c6ecdf869aa1d42f17ec8a1cc10c3d44f51c7b39330d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfca90a3ec318d265c08c6ecdf869aa1d42f17ec8a1cc10c3d44f51c7b39330d->enter($__internal_dfca90a3ec318d265c08c6ecdf869aa1d42f17ec8a1cc10c3d44f51c7b39330d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_593ebd86f7a805aa65d3b076aecd3718417cd5410f0b0bf947ff4ce710554af4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_593ebd86f7a805aa65d3b076aecd3718417cd5410f0b0bf947ff4ce710554af4->enter($__internal_593ebd86f7a805aa65d3b076aecd3718417cd5410f0b0bf947ff4ce710554af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfca90a3ec318d265c08c6ecdf869aa1d42f17ec8a1cc10c3d44f51c7b39330d->leave($__internal_dfca90a3ec318d265c08c6ecdf869aa1d42f17ec8a1cc10c3d44f51c7b39330d_prof);

        
        $__internal_593ebd86f7a805aa65d3b076aecd3718417cd5410f0b0bf947ff4ce710554af4->leave($__internal_593ebd86f7a805aa65d3b076aecd3718417cd5410f0b0bf947ff4ce710554af4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8056eae79f3e7820552e20b6578e6880b40e64a8c12ed93952794fed5bbb5083 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8056eae79f3e7820552e20b6578e6880b40e64a8c12ed93952794fed5bbb5083->enter($__internal_8056eae79f3e7820552e20b6578e6880b40e64a8c12ed93952794fed5bbb5083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ba92f6635e32e93c793a6331d3a4b431266e0ca5cd34284cdf55ce3bb8fc823c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba92f6635e32e93c793a6331d3a4b431266e0ca5cd34284cdf55ce3bb8fc823c->enter($__internal_ba92f6635e32e93c793a6331d3a4b431266e0ca5cd34284cdf55ce3bb8fc823c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_ba92f6635e32e93c793a6331d3a4b431266e0ca5cd34284cdf55ce3bb8fc823c->leave($__internal_ba92f6635e32e93c793a6331d3a4b431266e0ca5cd34284cdf55ce3bb8fc823c_prof);

        
        $__internal_8056eae79f3e7820552e20b6578e6880b40e64a8c12ed93952794fed5bbb5083->leave($__internal_8056eae79f3e7820552e20b6578e6880b40e64a8c12ed93952794fed5bbb5083_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1f193af9810afaebbcb244d21448ed5533fc5b3015d9e41a2f8fedec91dcd15e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f193af9810afaebbcb244d21448ed5533fc5b3015d9e41a2f8fedec91dcd15e->enter($__internal_1f193af9810afaebbcb244d21448ed5533fc5b3015d9e41a2f8fedec91dcd15e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f943c2e9bd166710f11df6833f61640aa9281f5021eea2303a06796ced0669a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f943c2e9bd166710f11df6833f61640aa9281f5021eea2303a06796ced0669a4->enter($__internal_f943c2e9bd166710f11df6833f61640aa9281f5021eea2303a06796ced0669a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_f943c2e9bd166710f11df6833f61640aa9281f5021eea2303a06796ced0669a4->leave($__internal_f943c2e9bd166710f11df6833f61640aa9281f5021eea2303a06796ced0669a4_prof);

        
        $__internal_1f193af9810afaebbcb244d21448ed5533fc5b3015d9e41a2f8fedec91dcd15e->leave($__internal_1f193af9810afaebbcb244d21448ed5533fc5b3015d9e41a2f8fedec91dcd15e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b0d9b5b6accca12cd059da60c69bc3a0147aafb6883a078c9adb6b6ec7d0b9f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0d9b5b6accca12cd059da60c69bc3a0147aafb6883a078c9adb6b6ec7d0b9f6->enter($__internal_b0d9b5b6accca12cd059da60c69bc3a0147aafb6883a078c9adb6b6ec7d0b9f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_aef4430fd6aacb2549de3f0f254b31144f0b5778b94661ca8cb0cadef10f962a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aef4430fd6aacb2549de3f0f254b31144f0b5778b94661ca8cb0cadef10f962a->enter($__internal_aef4430fd6aacb2549de3f0f254b31144f0b5778b94661ca8cb0cadef10f962a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_aef4430fd6aacb2549de3f0f254b31144f0b5778b94661ca8cb0cadef10f962a->leave($__internal_aef4430fd6aacb2549de3f0f254b31144f0b5778b94661ca8cb0cadef10f962a_prof);

        
        $__internal_b0d9b5b6accca12cd059da60c69bc3a0147aafb6883a078c9adb6b6ec7d0b9f6->leave($__internal_b0d9b5b6accca12cd059da60c69bc3a0147aafb6883a078c9adb6b6ec7d0b9f6_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
