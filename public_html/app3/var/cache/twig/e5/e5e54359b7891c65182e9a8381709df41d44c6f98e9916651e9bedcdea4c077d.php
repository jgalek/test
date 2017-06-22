<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_0696620029f12ef5efee7455303eade9066766a336a50e00353e6f3ce56fc148 extends Twig_Template
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
        $__internal_f4923720abec1ccc40f916eb9676c5b04354ca6ff945668c533193cef130b4e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4923720abec1ccc40f916eb9676c5b04354ca6ff945668c533193cef130b4e9->enter($__internal_f4923720abec1ccc40f916eb9676c5b04354ca6ff945668c533193cef130b4e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_37c1eae179500d47a1e5f51eac6c51f6aeafe44dc6ade8df69a501ecb5ce7b9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37c1eae179500d47a1e5f51eac6c51f6aeafe44dc6ade8df69a501ecb5ce7b9e->enter($__internal_37c1eae179500d47a1e5f51eac6c51f6aeafe44dc6ade8df69a501ecb5ce7b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4923720abec1ccc40f916eb9676c5b04354ca6ff945668c533193cef130b4e9->leave($__internal_f4923720abec1ccc40f916eb9676c5b04354ca6ff945668c533193cef130b4e9_prof);

        
        $__internal_37c1eae179500d47a1e5f51eac6c51f6aeafe44dc6ade8df69a501ecb5ce7b9e->leave($__internal_37c1eae179500d47a1e5f51eac6c51f6aeafe44dc6ade8df69a501ecb5ce7b9e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a04bba47efcc8aa06715e63ff39b63bafcb3ede778e4c0d0cdeb8ab07623402f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a04bba47efcc8aa06715e63ff39b63bafcb3ede778e4c0d0cdeb8ab07623402f->enter($__internal_a04bba47efcc8aa06715e63ff39b63bafcb3ede778e4c0d0cdeb8ab07623402f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2de3c2ac4d28589672e1c7fbcff2768261a41b6fb1b09df2c2038eed9eb32814 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2de3c2ac4d28589672e1c7fbcff2768261a41b6fb1b09df2c2038eed9eb32814->enter($__internal_2de3c2ac4d28589672e1c7fbcff2768261a41b6fb1b09df2c2038eed9eb32814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_2de3c2ac4d28589672e1c7fbcff2768261a41b6fb1b09df2c2038eed9eb32814->leave($__internal_2de3c2ac4d28589672e1c7fbcff2768261a41b6fb1b09df2c2038eed9eb32814_prof);

        
        $__internal_a04bba47efcc8aa06715e63ff39b63bafcb3ede778e4c0d0cdeb8ab07623402f->leave($__internal_a04bba47efcc8aa06715e63ff39b63bafcb3ede778e4c0d0cdeb8ab07623402f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8918235290e5c74abb3df771bdd524b2c7474ac5cea45d705eb8590813a82779 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8918235290e5c74abb3df771bdd524b2c7474ac5cea45d705eb8590813a82779->enter($__internal_8918235290e5c74abb3df771bdd524b2c7474ac5cea45d705eb8590813a82779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b0a6b48eef36c40f57617909fd4b1b900c73151b9ee3c445c58f8aabe74e9677 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0a6b48eef36c40f57617909fd4b1b900c73151b9ee3c445c58f8aabe74e9677->enter($__internal_b0a6b48eef36c40f57617909fd4b1b900c73151b9ee3c445c58f8aabe74e9677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_b0a6b48eef36c40f57617909fd4b1b900c73151b9ee3c445c58f8aabe74e9677->leave($__internal_b0a6b48eef36c40f57617909fd4b1b900c73151b9ee3c445c58f8aabe74e9677_prof);

        
        $__internal_8918235290e5c74abb3df771bdd524b2c7474ac5cea45d705eb8590813a82779->leave($__internal_8918235290e5c74abb3df771bdd524b2c7474ac5cea45d705eb8590813a82779_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2c6513a3fb4931fa26f167bc3c0ece9ea58f8ef28e63569e7bbf621383649288 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c6513a3fb4931fa26f167bc3c0ece9ea58f8ef28e63569e7bbf621383649288->enter($__internal_2c6513a3fb4931fa26f167bc3c0ece9ea58f8ef28e63569e7bbf621383649288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0015d5906c7ffe5f15dc071a9a05ecc12f55408cf159960cf74e92492c4ab80f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0015d5906c7ffe5f15dc071a9a05ecc12f55408cf159960cf74e92492c4ab80f->enter($__internal_0015d5906c7ffe5f15dc071a9a05ecc12f55408cf159960cf74e92492c4ab80f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_0015d5906c7ffe5f15dc071a9a05ecc12f55408cf159960cf74e92492c4ab80f->leave($__internal_0015d5906c7ffe5f15dc071a9a05ecc12f55408cf159960cf74e92492c4ab80f_prof);

        
        $__internal_2c6513a3fb4931fa26f167bc3c0ece9ea58f8ef28e63569e7bbf621383649288->leave($__internal_2c6513a3fb4931fa26f167bc3c0ece9ea58f8ef28e63569e7bbf621383649288_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/home/epi/15_galek/public_html/app3/vendor/symfony/web-profiler-bundle/Resources/views/Collector/exception.html.twig");
    }
}
