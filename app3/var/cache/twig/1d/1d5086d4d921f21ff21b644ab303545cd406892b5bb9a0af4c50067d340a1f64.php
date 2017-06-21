<?php

/* layout.html.twig */
class __TwigTemplate_d7e9e91aa26f12dca706edbb59d44aabe40c3859deb2ddde9a79ce5796a3c10a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e01c51bb644965055ab2665429077be64fdb4754dbcabc30be71ec8f8f2ce89d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e01c51bb644965055ab2665429077be64fdb4754dbcabc30be71ec8f8f2ce89d->enter($__internal_e01c51bb644965055ab2665429077be64fdb4754dbcabc30be71ec8f8f2ce89d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_266c3a5cadc7f8ae2478ef7bd750b431f6285b13539e4581b03bdc3cece05ef3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_266c3a5cadc7f8ae2478ef7bd750b431f6285b13539e4581b03bdc3cece05ef3->enter($__internal_266c3a5cadc7f8ae2478ef7bd750b431f6285b13539e4581b03bdc3cece05ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo " - My Silex Application</title>

        <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

        <script type=\"text/javascript\">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-XXXXXXXX-X']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>
    </head>
    <body>
        ";
        // line 21
        $this->loadTemplate("default/_flash_messages.html.twig", "layout.html.twig", 21)->display($context);
        // line 22
        echo "        ";
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_horizontal_layout.html.twig"));
        // line 23
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "    </body>
</html>
";
        
        $__internal_e01c51bb644965055ab2665429077be64fdb4754dbcabc30be71ec8f8f2ce89d->leave($__internal_e01c51bb644965055ab2665429077be64fdb4754dbcabc30be71ec8f8f2ce89d_prof);

        
        $__internal_266c3a5cadc7f8ae2478ef7bd750b431f6285b13539e4581b03bdc3cece05ef3->leave($__internal_266c3a5cadc7f8ae2478ef7bd750b431f6285b13539e4581b03bdc3cece05ef3_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ab8323893aeab6833cd955736445fbbc44f96fae140341f2e9cfc3e61353b54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ab8323893aeab6833cd955736445fbbc44f96fae140341f2e9cfc3e61353b54->enter($__internal_6ab8323893aeab6833cd955736445fbbc44f96fae140341f2e9cfc3e61353b54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7b12ee2033f3d6cb90c1d4482d9826c62122c6eb9d9f13fefacaaeb1ae4444d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b12ee2033f3d6cb90c1d4482d9826c62122c6eb9d9f13fefacaaeb1ae4444d7->enter($__internal_7b12ee2033f3d6cb90c1d4482d9826c62122c6eb9d9f13fefacaaeb1ae4444d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "";
        
        $__internal_7b12ee2033f3d6cb90c1d4482d9826c62122c6eb9d9f13fefacaaeb1ae4444d7->leave($__internal_7b12ee2033f3d6cb90c1d4482d9826c62122c6eb9d9f13fefacaaeb1ae4444d7_prof);

        
        $__internal_6ab8323893aeab6833cd955736445fbbc44f96fae140341f2e9cfc3e61353b54->leave($__internal_6ab8323893aeab6833cd955736445fbbc44f96fae140341f2e9cfc3e61353b54_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_70e97b46cb487594afaaa8afffe3ec0866aa94e9eddb12cf2a1b8fa7cb0a7e38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70e97b46cb487594afaaa8afffe3ec0866aa94e9eddb12cf2a1b8fa7cb0a7e38->enter($__internal_70e97b46cb487594afaaa8afffe3ec0866aa94e9eddb12cf2a1b8fa7cb0a7e38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_48bcc2ce4db96c8c2c0c69335fe33e3a481587df838765525d98c46832bf965f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48bcc2ce4db96c8c2c0c69335fe33e3a481587df838765525d98c46832bf965f->enter($__internal_48bcc2ce4db96c8c2c0c69335fe33e3a481587df838765525d98c46832bf965f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_48bcc2ce4db96c8c2c0c69335fe33e3a481587df838765525d98c46832bf965f->leave($__internal_48bcc2ce4db96c8c2c0c69335fe33e3a481587df838765525d98c46832bf965f_prof);

        
        $__internal_70e97b46cb487594afaaa8afffe3ec0866aa94e9eddb12cf2a1b8fa7cb0a7e38->leave($__internal_70e97b46cb487594afaaa8afffe3ec0866aa94e9eddb12cf2a1b8fa7cb0a7e38_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 23,  75 => 4,  63 => 24,  60 => 23,  57 => 22,  55 => 21,  37 => 6,  32 => 4,  27 => 1,);
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
        <title>{% block title '' %} - My Silex Application</title>

        <link href=\"{{ asset('css/main.css') }}\" rel=\"stylesheet\" type=\"text/css\" />

        <script type=\"text/javascript\">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-XXXXXXXX-X']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>
    </head>
    <body>
        {% include 'default/_flash_messages.html.twig' %}
        {% form_theme form with ['bootstrap_3_horizontal_layout.html.twig'] %}
        {% block body %}{% endblock %}
    </body>
</html>
", "layout.html.twig", "C:\\Users\\Justyna\\PhpstormProjects\\untitled1\\app3\\templates\\layout.html.twig");
    }
}
