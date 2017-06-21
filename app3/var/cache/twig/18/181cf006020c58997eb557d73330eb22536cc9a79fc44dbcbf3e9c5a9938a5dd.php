<?php

/* baseHearIt.html.twig */
class __TwigTemplate_98db9935c9cf8b78ed640b2d1ad4895b0180b330616784128f39feee45e229a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7c576dfd6205e622cfd9457e2baa7ab5a7c8cbffb2cb1a07cf223c670cf80e9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c576dfd6205e622cfd9457e2baa7ab5a7c8cbffb2cb1a07cf223c670cf80e9a->enter($__internal_7c576dfd6205e622cfd9457e2baa7ab5a7c8cbffb2cb1a07cf223c670cf80e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseHearIt.html.twig"));

        $__internal_c6ebfed1cbbf45c13e35283e80216f167eb3c1e511a13efde71455d13936dd63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6ebfed1cbbf45c13e35283e80216f167eb3c1e511a13efde71455d13936dd63->enter($__internal_c6ebfed1cbbf45c13e35283e80216f167eb3c1e511a13efde71455d13936dd63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseHearIt.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pl_PL\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>\"Hear It!\"</title>
    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    <!-- Latest compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <!--komentarz
    -->
</head>


";
        // line 29
        $this->loadTemplate("default/_flash_messages.html.twig", "baseHearIt.html.twig", 29)->display($context);
        // line 30
        echo "<body>
    ";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 37
        echo "</body>
</html>";
        
        $__internal_7c576dfd6205e622cfd9457e2baa7ab5a7c8cbffb2cb1a07cf223c670cf80e9a->leave($__internal_7c576dfd6205e622cfd9457e2baa7ab5a7c8cbffb2cb1a07cf223c670cf80e9a_prof);

        
        $__internal_c6ebfed1cbbf45c13e35283e80216f167eb3c1e511a13efde71455d13936dd63->leave($__internal_c6ebfed1cbbf45c13e35283e80216f167eb3c1e511a13efde71455d13936dd63_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4bd0b7587f5f6fc249d3582902ce8e48b34c166dc265a33a43317ad8117aea4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bd0b7587f5f6fc249d3582902ce8e48b34c166dc265a33a43317ad8117aea4f->enter($__internal_4bd0b7587f5f6fc249d3582902ce8e48b34c166dc265a33a43317ad8117aea4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_10c8ee99589ac0d6959e11ea90aa14c1804888f1f2004fb4c5cb0b34b6878612 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10c8ee99589ac0d6959e11ea90aa14c1804888f1f2004fb4c5cb0b34b6878612->enter($__internal_10c8ee99589ac0d6959e11ea90aa14c1804888f1f2004fb4c5cb0b34b6878612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "        <!-- Bootstrap and my css files-->
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/reset.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        
        $__internal_10c8ee99589ac0d6959e11ea90aa14c1804888f1f2004fb4c5cb0b34b6878612->leave($__internal_10c8ee99589ac0d6959e11ea90aa14c1804888f1f2004fb4c5cb0b34b6878612_prof);

        
        $__internal_4bd0b7587f5f6fc249d3582902ce8e48b34c166dc265a33a43317ad8117aea4f->leave($__internal_4bd0b7587f5f6fc249d3582902ce8e48b34c166dc265a33a43317ad8117aea4f_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_540e33556b3e5db6eb097a56e108a67545a33eb5bb0a3b315183e370f84f98a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_540e33556b3e5db6eb097a56e108a67545a33eb5bb0a3b315183e370f84f98a5->enter($__internal_540e33556b3e5db6eb097a56e108a67545a33eb5bb0a3b315183e370f84f98a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f64c1a74dbaf86b737c3ebe9196e506bccd34bcfba5f2ad9cda9a52084c55688 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f64c1a74dbaf86b737c3ebe9196e506bccd34bcfba5f2ad9cda9a52084c55688->enter($__internal_f64c1a74dbaf86b737c3ebe9196e506bccd34bcfba5f2ad9cda9a52084c55688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 32
        echo "        <header>
            ";
        // line 33
        $this->displayBlock('header', $context, $blocks);
        // line 34
        echo "        </header>

    ";
        
        $__internal_f64c1a74dbaf86b737c3ebe9196e506bccd34bcfba5f2ad9cda9a52084c55688->leave($__internal_f64c1a74dbaf86b737c3ebe9196e506bccd34bcfba5f2ad9cda9a52084c55688_prof);

        
        $__internal_540e33556b3e5db6eb097a56e108a67545a33eb5bb0a3b315183e370f84f98a5->leave($__internal_540e33556b3e5db6eb097a56e108a67545a33eb5bb0a3b315183e370f84f98a5_prof);

    }

    // line 33
    public function block_header($context, array $blocks = array())
    {
        $__internal_91b1bbc0b4c73aced8c4d132c352a095418ba88148092e5fb52da9323430ac02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91b1bbc0b4c73aced8c4d132c352a095418ba88148092e5fb52da9323430ac02->enter($__internal_91b1bbc0b4c73aced8c4d132c352a095418ba88148092e5fb52da9323430ac02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_ad8df580ade57eed26fe4bde06b6a05ebed00ad11afac675942af5e1ac544640 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad8df580ade57eed26fe4bde06b6a05ebed00ad11afac675942af5e1ac544640->enter($__internal_ad8df580ade57eed26fe4bde06b6a05ebed00ad11afac675942af5e1ac544640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_ad8df580ade57eed26fe4bde06b6a05ebed00ad11afac675942af5e1ac544640->leave($__internal_ad8df580ade57eed26fe4bde06b6a05ebed00ad11afac675942af5e1ac544640_prof);

        
        $__internal_91b1bbc0b4c73aced8c4d132c352a095418ba88148092e5fb52da9323430ac02->leave($__internal_91b1bbc0b4c73aced8c4d132c352a095418ba88148092e5fb52da9323430ac02_prof);

    }

    public function getTemplateName()
    {
        return "baseHearIt.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  126 => 34,  124 => 33,  121 => 32,  112 => 31,  100 => 14,  96 => 13,  92 => 12,  88 => 11,  84 => 10,  81 => 9,  72 => 8,  61 => 37,  59 => 31,  56 => 30,  54 => 29,  39 => 16,  37 => 8,  28 => 1,);
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
<html lang=\"pl_PL\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>\"Hear It!\"</title>
    {% block stylesheets %}
        <!-- Bootstrap and my css files-->
        <link href=\"{{ asset('css/reset.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('css/main.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('css/bootstrap.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('css/bootstrap-theme.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\">
    {% endblock %}
    <!-- Latest compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <!--komentarz
    -->
</head>


{% include 'default/_flash_messages.html.twig' %}
<body>
    {% block body %}
        <header>
            {% block header %}{% endblock %}
        </header>

    {% endblock %}
</body>
</html>", "baseHearIt.html.twig", "C:\\Users\\Justyna\\PhpstormProjects\\untitled1\\app3\\templates\\baseHearIt.html.twig");
    }
}
