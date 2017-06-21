<?php

/* index.html.twig */
class __TwigTemplate_e24551af4a4bba9412002ae042b78e612dd1e72c08594d72bfa46b8ddcc92d59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c00a7dcaf411d3fb1263c0635f92aa795451ac377eed2c76577c3cb0694292f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c00a7dcaf411d3fb1263c0635f92aa795451ac377eed2c76577c3cb0694292f7->enter($__internal_c00a7dcaf411d3fb1263c0635f92aa795451ac377eed2c76577c3cb0694292f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_349d6bccb74dac78aaded378e21f57005dcf13204a8a59ef287e2dd666e3b6d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_349d6bccb74dac78aaded378e21f57005dcf13204a8a59ef287e2dd666e3b6d9->enter($__internal_349d6bccb74dac78aaded378e21f57005dcf13204a8a59ef287e2dd666e3b6d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c00a7dcaf411d3fb1263c0635f92aa795451ac377eed2c76577c3cb0694292f7->leave($__internal_c00a7dcaf411d3fb1263c0635f92aa795451ac377eed2c76577c3cb0694292f7_prof);

        
        $__internal_349d6bccb74dac78aaded378e21f57005dcf13204a8a59ef287e2dd666e3b6d9->leave($__internal_349d6bccb74dac78aaded378e21f57005dcf13204a8a59ef287e2dd666e3b6d9_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_7c38e45083529561a5c6734781d6a68f6f5b4355a2d71268d768e691f2dfb43c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c38e45083529561a5c6734781d6a68f6f5b4355a2d71268d768e691f2dfb43c->enter($__internal_7c38e45083529561a5c6734781d6a68f6f5b4355a2d71268d768e691f2dfb43c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f4b5dd6de53f8accc567fb9806212a998fc82fe0358911282372f82cb3e484a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4b5dd6de53f8accc567fb9806212a998fc82fe0358911282372f82cb3e484a3->enter($__internal_f4b5dd6de53f8accc567fb9806212a998fc82fe0358911282372f82cb3e484a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    Welcome to your new Silex Application!
";
        
        $__internal_f4b5dd6de53f8accc567fb9806212a998fc82fe0358911282372f82cb3e484a3->leave($__internal_f4b5dd6de53f8accc567fb9806212a998fc82fe0358911282372f82cb3e484a3_prof);

        
        $__internal_7c38e45083529561a5c6734781d6a68f6f5b4355a2d71268d768e691f2dfb43c->leave($__internal_7c38e45083529561a5c6734781d6a68f6f5b4355a2d71268d768e691f2dfb43c_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block content %}
    Welcome to your new Silex Application!
{% endblock %}
", "index.html.twig", "C:\\Users\\Justyna\\PhpstormProjects\\untitled1\\app3\\templates\\index.html.twig");
    }
}
