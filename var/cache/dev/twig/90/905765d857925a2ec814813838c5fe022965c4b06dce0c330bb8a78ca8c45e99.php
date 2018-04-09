<?php

/* base.html.twig */
class __TwigTemplate_0ece4e24c3c79246bde713514b3e0c5ef137f6f29c92a214a7c50585135842f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b1db781d410101a787b954e0de6e41dc975bb9514d25a880423ad9b33747fc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b1db781d410101a787b954e0de6e41dc975bb9514d25a880423ad9b33747fc0->enter($__internal_7b1db781d410101a787b954e0de6e41dc975bb9514d25a880423ad9b33747fc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_d0677e025fde28a6e9c0d08b89100210a4bc603321be317c77f0e4ef6d08e99c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0677e025fde28a6e9c0d08b89100210a4bc603321be317c77f0e4ef6d08e99c->enter($__internal_d0677e025fde28a6e9c0d08b89100210a4bc603321be317c77f0e4ef6d08e99c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body id=\"top\">
        ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "    </body>
    
</html>
";
        
        $__internal_7b1db781d410101a787b954e0de6e41dc975bb9514d25a880423ad9b33747fc0->leave($__internal_7b1db781d410101a787b954e0de6e41dc975bb9514d25a880423ad9b33747fc0_prof);

        
        $__internal_d0677e025fde28a6e9c0d08b89100210a4bc603321be317c77f0e4ef6d08e99c->leave($__internal_d0677e025fde28a6e9c0d08b89100210a4bc603321be317c77f0e4ef6d08e99c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fbf14b0e14b633fc8f7f9c28fbafbadb4b4e8855a7fba2c4ba224cb0e8877b08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbf14b0e14b633fc8f7f9c28fbafbadb4b4e8855a7fba2c4ba224cb0e8877b08->enter($__internal_fbf14b0e14b633fc8f7f9c28fbafbadb4b4e8855a7fba2c4ba224cb0e8877b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_94275c4753da4ab27008b400f65b95f1b9a0e83e53f939c481b42afb12bd91fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94275c4753da4ab27008b400f65b95f1b9a0e83e53f939c481b42afb12bd91fa->enter($__internal_94275c4753da4ab27008b400f65b95f1b9a0e83e53f939c481b42afb12bd91fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_94275c4753da4ab27008b400f65b95f1b9a0e83e53f939c481b42afb12bd91fa->leave($__internal_94275c4753da4ab27008b400f65b95f1b9a0e83e53f939c481b42afb12bd91fa_prof);

        
        $__internal_fbf14b0e14b633fc8f7f9c28fbafbadb4b4e8855a7fba2c4ba224cb0e8877b08->leave($__internal_fbf14b0e14b633fc8f7f9c28fbafbadb4b4e8855a7fba2c4ba224cb0e8877b08_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_57b954ba9536d16f516e11ec1754e7d53115761293f73c5aa0c94e8876d02c4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57b954ba9536d16f516e11ec1754e7d53115761293f73c5aa0c94e8876d02c4e->enter($__internal_57b954ba9536d16f516e11ec1754e7d53115761293f73c5aa0c94e8876d02c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ebae2370dcc0cee44638499fdf5f3b938349eeb4e4009f98e1f732370eac2159 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebae2370dcc0cee44638499fdf5f3b938349eeb4e4009f98e1f732370eac2159->enter($__internal_ebae2370dcc0cee44638499fdf5f3b938349eeb4e4009f98e1f732370eac2159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/css/base.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/css/vendor.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/css/main.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_ebae2370dcc0cee44638499fdf5f3b938349eeb4e4009f98e1f732370eac2159->leave($__internal_ebae2370dcc0cee44638499fdf5f3b938349eeb4e4009f98e1f732370eac2159_prof);

        
        $__internal_57b954ba9536d16f516e11ec1754e7d53115761293f73c5aa0c94e8876d02c4e->leave($__internal_57b954ba9536d16f516e11ec1754e7d53115761293f73c5aa0c94e8876d02c4e_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_21980094dea9755b81d5f15ed503f3856f7d8d4594b4f15bab7349a7900db2ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21980094dea9755b81d5f15ed503f3856f7d8d4594b4f15bab7349a7900db2ae->enter($__internal_21980094dea9755b81d5f15ed503f3856f7d8d4594b4f15bab7349a7900db2ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bab6bfccebe7a3ddddf9d7276291cc46f647f41fc3d92a288879acc300b1fd4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bab6bfccebe7a3ddddf9d7276291cc46f647f41fc3d92a288879acc300b1fd4d->enter($__internal_bab6bfccebe7a3ddddf9d7276291cc46f647f41fc3d92a288879acc300b1fd4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bab6bfccebe7a3ddddf9d7276291cc46f647f41fc3d92a288879acc300b1fd4d->leave($__internal_bab6bfccebe7a3ddddf9d7276291cc46f647f41fc3d92a288879acc300b1fd4d_prof);

        
        $__internal_21980094dea9755b81d5f15ed503f3856f7d8d4594b4f15bab7349a7900db2ae->leave($__internal_21980094dea9755b81d5f15ed503f3856f7d8d4594b4f15bab7349a7900db2ae_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_904c024ece361d95ef611a8b0a83cb083e205d03b525f51e1259e1b99d454d78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_904c024ece361d95ef611a8b0a83cb083e205d03b525f51e1259e1b99d454d78->enter($__internal_904c024ece361d95ef611a8b0a83cb083e205d03b525f51e1259e1b99d454d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5e3aff86adc9fcdfa8622109cd58a4bacd99c969fb9fb901ab337f8c366dc345 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e3aff86adc9fcdfa8622109cd58a4bacd99c969fb9fb901ab337f8c366dc345->enter($__internal_5e3aff86adc9fcdfa8622109cd58a4bacd99c969fb9fb901ab337f8c366dc345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/plugins.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_5e3aff86adc9fcdfa8622109cd58a4bacd99c969fb9fb901ab337f8c366dc345->leave($__internal_5e3aff86adc9fcdfa8622109cd58a4bacd99c969fb9fb901ab337f8c366dc345_prof);

        
        $__internal_904c024ece361d95ef611a8b0a83cb083e205d03b525f51e1259e1b99d454d78->leave($__internal_904c024ece361d95ef611a8b0a83cb083e205d03b525f51e1259e1b99d454d78_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 18,  145 => 17,  140 => 16,  131 => 15,  114 => 14,  102 => 9,  98 => 8,  93 => 7,  84 => 6,  66 => 5,  53 => 20,  50 => 15,  48 => 14,  41 => 11,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{asset('template/css/base.css')}}\">
            <link rel=\"stylesheet\" href=\"{{asset('template/css/vendor.css')}}\">
            <link rel=\"stylesheet\" href=\"{{asset('template/css/main.css')}}\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body id=\"top\">
        {% block body %}{% endblock %}
        {% block javascripts %}
            <script src=\"{{asset('template/js/jquery-3.2.1.min.js')}}\"></script>
            <script src=\"{{asset('template/js/plugins.js')}}\"></script>
            <script src=\"{{asset('template/js/main.js')}}\"></script>
        {% endblock %}
    </body>
    
</html>
", "base.html.twig", "/home/ubuntu/workspace/app/Resources/views/base.html.twig");
    }
}
