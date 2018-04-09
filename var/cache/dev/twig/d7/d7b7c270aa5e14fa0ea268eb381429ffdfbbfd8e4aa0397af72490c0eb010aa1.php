<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_4ab0d1599d6fabc4058bc359f1f626bef78779911e18157e59cabab6d769661f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7c2e94b74dcf265e8b45663316390a95f5f3995aaf74567f32c0a3c0ead77afa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c2e94b74dcf265e8b45663316390a95f5f3995aaf74567f32c0a3c0ead77afa->enter($__internal_7c2e94b74dcf265e8b45663316390a95f5f3995aaf74567f32c0a3c0ead77afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_c287c34b3293bcb1719ba881f3c5bc05f34bd963e2688a06c23549bcc0e4faf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c287c34b3293bcb1719ba881f3c5bc05f34bd963e2688a06c23549bcc0e4faf3->enter($__internal_c287c34b3293bcb1719ba881f3c5bc05f34bd963e2688a06c23549bcc0e4faf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_7c2e94b74dcf265e8b45663316390a95f5f3995aaf74567f32c0a3c0ead77afa->leave($__internal_7c2e94b74dcf265e8b45663316390a95f5f3995aaf74567f32c0a3c0ead77afa_prof);

        
        $__internal_c287c34b3293bcb1719ba881f3c5bc05f34bd963e2688a06c23549bcc0e4faf3->leave($__internal_c287c34b3293bcb1719ba881f3c5bc05f34bd963e2688a06c23549bcc0e4faf3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1ac5e575ad15701eee63da2508fc6f26df951de3484da152f49197dfa74f740d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ac5e575ad15701eee63da2508fc6f26df951de3484da152f49197dfa74f740d->enter($__internal_1ac5e575ad15701eee63da2508fc6f26df951de3484da152f49197dfa74f740d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a23cec98a2ad9b689bda7b9e88986fdbd8eef07468de787255c61ce121da21b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a23cec98a2ad9b689bda7b9e88986fdbd8eef07468de787255c61ce121da21b2->enter($__internal_a23cec98a2ad9b689bda7b9e88986fdbd8eef07468de787255c61ce121da21b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_a23cec98a2ad9b689bda7b9e88986fdbd8eef07468de787255c61ce121da21b2->leave($__internal_a23cec98a2ad9b689bda7b9e88986fdbd8eef07468de787255c61ce121da21b2_prof);

        
        $__internal_1ac5e575ad15701eee63da2508fc6f26df951de3484da152f49197dfa74f740d->leave($__internal_1ac5e575ad15701eee63da2508fc6f26df951de3484da152f49197dfa74f740d_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_e719e2ee1e4b7f41b3989e85983e5b7cac76f05d4ee14871eba39fd88aba5b11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e719e2ee1e4b7f41b3989e85983e5b7cac76f05d4ee14871eba39fd88aba5b11->enter($__internal_e719e2ee1e4b7f41b3989e85983e5b7cac76f05d4ee14871eba39fd88aba5b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fd63dc43630d52e710bdc9925df1da5a602336b12a4a4541cd9534fdfe803d9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd63dc43630d52e710bdc9925df1da5a602336b12a4a4541cd9534fdfe803d9f->enter($__internal_fd63dc43630d52e710bdc9925df1da5a602336b12a4a4541cd9534fdfe803d9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_fd63dc43630d52e710bdc9925df1da5a602336b12a4a4541cd9534fdfe803d9f->leave($__internal_fd63dc43630d52e710bdc9925df1da5a602336b12a4a4541cd9534fdfe803d9f_prof);

        
        $__internal_e719e2ee1e4b7f41b3989e85983e5b7cac76f05d4ee14871eba39fd88aba5b11->leave($__internal_e719e2ee1e4b7f41b3989e85983e5b7cac76f05d4ee14871eba39fd88aba5b11_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_1bbbf6959f3fe791901cf4bfe39a96d9520b22175f7449f9d5367091f2997c2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bbbf6959f3fe791901cf4bfe39a96d9520b22175f7449f9d5367091f2997c2d->enter($__internal_1bbbf6959f3fe791901cf4bfe39a96d9520b22175f7449f9d5367091f2997c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1671f2a919edf9ee6f5a86fa9ec72038c040a059495e152917d1cee2c57adb47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1671f2a919edf9ee6f5a86fa9ec72038c040a059495e152917d1cee2c57adb47->enter($__internal_1671f2a919edf9ee6f5a86fa9ec72038c040a059495e152917d1cee2c57adb47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1671f2a919edf9ee6f5a86fa9ec72038c040a059495e152917d1cee2c57adb47->leave($__internal_1671f2a919edf9ee6f5a86fa9ec72038c040a059495e152917d1cee2c57adb47_prof);

        
        $__internal_1bbbf6959f3fe791901cf4bfe39a96d9520b22175f7449f9d5367091f2997c2d->leave($__internal_1bbbf6959f3fe791901cf4bfe39a96d9520b22175f7449f9d5367091f2997c2d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
