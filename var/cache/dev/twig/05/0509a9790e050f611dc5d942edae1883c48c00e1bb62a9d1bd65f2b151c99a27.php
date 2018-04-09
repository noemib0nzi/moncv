<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_70826e29457077ac9e085659c33e1fbbb984391502794c9ded1b4c25f8c42085 extends Twig_Template
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
        $__internal_f686775e0d982c80683652115384671a52ec97ff7939e9e499757f30c1056984 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f686775e0d982c80683652115384671a52ec97ff7939e9e499757f30c1056984->enter($__internal_f686775e0d982c80683652115384671a52ec97ff7939e9e499757f30c1056984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_4070af4d1a855352c42a66df5b328bc5d8c5ac40426e807fc92156b031b95ab6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4070af4d1a855352c42a66df5b328bc5d8c5ac40426e807fc92156b031b95ab6->enter($__internal_4070af4d1a855352c42a66df5b328bc5d8c5ac40426e807fc92156b031b95ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_f686775e0d982c80683652115384671a52ec97ff7939e9e499757f30c1056984->leave($__internal_f686775e0d982c80683652115384671a52ec97ff7939e9e499757f30c1056984_prof);

        
        $__internal_4070af4d1a855352c42a66df5b328bc5d8c5ac40426e807fc92156b031b95ab6->leave($__internal_4070af4d1a855352c42a66df5b328bc5d8c5ac40426e807fc92156b031b95ab6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
