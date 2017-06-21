<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_6492c7cecb93319b47c3f776d5292071cc79bb86f57628488f46dad15aaebb59 extends Twig_Template
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
        $__internal_44c36f8f544b0a8a7521d99c04bf8912d4515da4a51cd4d1a8c168a5f33e5f9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44c36f8f544b0a8a7521d99c04bf8912d4515da4a51cd4d1a8c168a5f33e5f9a->enter($__internal_44c36f8f544b0a8a7521d99c04bf8912d4515da4a51cd4d1a8c168a5f33e5f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_f339f293ae708facc2800c853feed419c1fc910301b9f5ec2d271dbe6120a7be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f339f293ae708facc2800c853feed419c1fc910301b9f5ec2d271dbe6120a7be->enter($__internal_f339f293ae708facc2800c853feed419c1fc910301b9f5ec2d271dbe6120a7be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44c36f8f544b0a8a7521d99c04bf8912d4515da4a51cd4d1a8c168a5f33e5f9a->leave($__internal_44c36f8f544b0a8a7521d99c04bf8912d4515da4a51cd4d1a8c168a5f33e5f9a_prof);

        
        $__internal_f339f293ae708facc2800c853feed419c1fc910301b9f5ec2d271dbe6120a7be->leave($__internal_f339f293ae708facc2800c853feed419c1fc910301b9f5ec2d271dbe6120a7be_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_907ca89f624c755e33a7016fe44d3b1c7fc0d048743a4ba9c5f59bb45eba23b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_907ca89f624c755e33a7016fe44d3b1c7fc0d048743a4ba9c5f59bb45eba23b3->enter($__internal_907ca89f624c755e33a7016fe44d3b1c7fc0d048743a4ba9c5f59bb45eba23b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e893db139819ace3b0419071171be44d301455c78ef6f89af02a8b5439b282f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e893db139819ace3b0419071171be44d301455c78ef6f89af02a8b5439b282f5->enter($__internal_e893db139819ace3b0419071171be44d301455c78ef6f89af02a8b5439b282f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e893db139819ace3b0419071171be44d301455c78ef6f89af02a8b5439b282f5->leave($__internal_e893db139819ace3b0419071171be44d301455c78ef6f89af02a8b5439b282f5_prof);

        
        $__internal_907ca89f624c755e33a7016fe44d3b1c7fc0d048743a4ba9c5f59bb45eba23b3->leave($__internal_907ca89f624c755e33a7016fe44d3b1c7fc0d048743a4ba9c5f59bb45eba23b3_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b70edaf0dbc933e8df7c0040be1ea011d17edbe3050f0bbfa0223f5e5b19502f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b70edaf0dbc933e8df7c0040be1ea011d17edbe3050f0bbfa0223f5e5b19502f->enter($__internal_b70edaf0dbc933e8df7c0040be1ea011d17edbe3050f0bbfa0223f5e5b19502f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_602f9f58a55813d9fbb497bee9fdecb15e4f08f6c30858ff3d2aff424f0e18bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_602f9f58a55813d9fbb497bee9fdecb15e4f08f6c30858ff3d2aff424f0e18bc->enter($__internal_602f9f58a55813d9fbb497bee9fdecb15e4f08f6c30858ff3d2aff424f0e18bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_602f9f58a55813d9fbb497bee9fdecb15e4f08f6c30858ff3d2aff424f0e18bc->leave($__internal_602f9f58a55813d9fbb497bee9fdecb15e4f08f6c30858ff3d2aff424f0e18bc_prof);

        
        $__internal_b70edaf0dbc933e8df7c0040be1ea011d17edbe3050f0bbfa0223f5e5b19502f->leave($__internal_b70edaf0dbc933e8df7c0040be1ea011d17edbe3050f0bbfa0223f5e5b19502f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1b381ac486642417518fa2d1c1683022239fd6ac1a1b6fe6f20925bbad7969d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b381ac486642417518fa2d1c1683022239fd6ac1a1b6fe6f20925bbad7969d1->enter($__internal_1b381ac486642417518fa2d1c1683022239fd6ac1a1b6fe6f20925bbad7969d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_74fced4f828fc21463ad13fabbadab2704236a49ec5a0e4f0e0e520f4ad92a74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74fced4f828fc21463ad13fabbadab2704236a49ec5a0e4f0e0e520f4ad92a74->enter($__internal_74fced4f828fc21463ad13fabbadab2704236a49ec5a0e4f0e0e520f4ad92a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_74fced4f828fc21463ad13fabbadab2704236a49ec5a0e4f0e0e520f4ad92a74->leave($__internal_74fced4f828fc21463ad13fabbadab2704236a49ec5a0e4f0e0e520f4ad92a74_prof);

        
        $__internal_1b381ac486642417518fa2d1c1683022239fd6ac1a1b6fe6f20925bbad7969d1->leave($__internal_1b381ac486642417518fa2d1c1683022239fd6ac1a1b6fe6f20925bbad7969d1_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\Users\\Justyna\\PhpstormProjects\\untitled1\\app3\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
