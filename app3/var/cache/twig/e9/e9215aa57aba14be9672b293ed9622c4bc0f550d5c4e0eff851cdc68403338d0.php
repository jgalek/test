<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c9a92cb3852a81d926facf66ded388ef9e01eab67b2c697e126a6653f7663fb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_abb1b9185505b91ebbbb1ebdb1e32488de32dbff2e751de88610e02666f9e7b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abb1b9185505b91ebbbb1ebdb1e32488de32dbff2e751de88610e02666f9e7b6->enter($__internal_abb1b9185505b91ebbbb1ebdb1e32488de32dbff2e751de88610e02666f9e7b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_abd5ddd34ae7057a3280ebf9368a53624697930c301e4d43be2f5c5ee1c8b535 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abd5ddd34ae7057a3280ebf9368a53624697930c301e4d43be2f5c5ee1c8b535->enter($__internal_abd5ddd34ae7057a3280ebf9368a53624697930c301e4d43be2f5c5ee1c8b535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abb1b9185505b91ebbbb1ebdb1e32488de32dbff2e751de88610e02666f9e7b6->leave($__internal_abb1b9185505b91ebbbb1ebdb1e32488de32dbff2e751de88610e02666f9e7b6_prof);

        
        $__internal_abd5ddd34ae7057a3280ebf9368a53624697930c301e4d43be2f5c5ee1c8b535->leave($__internal_abd5ddd34ae7057a3280ebf9368a53624697930c301e4d43be2f5c5ee1c8b535_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_42e6bcaf3356086d9531d900db8160c166fb9c62907cdf340e4de451fc02bbe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42e6bcaf3356086d9531d900db8160c166fb9c62907cdf340e4de451fc02bbe2->enter($__internal_42e6bcaf3356086d9531d900db8160c166fb9c62907cdf340e4de451fc02bbe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_178800fca66264675bf23b18b20eca2fc545f20ac34ccc409d4f39c86e162e57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_178800fca66264675bf23b18b20eca2fc545f20ac34ccc409d4f39c86e162e57->enter($__internal_178800fca66264675bf23b18b20eca2fc545f20ac34ccc409d4f39c86e162e57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_178800fca66264675bf23b18b20eca2fc545f20ac34ccc409d4f39c86e162e57->leave($__internal_178800fca66264675bf23b18b20eca2fc545f20ac34ccc409d4f39c86e162e57_prof);

        
        $__internal_42e6bcaf3356086d9531d900db8160c166fb9c62907cdf340e4de451fc02bbe2->leave($__internal_42e6bcaf3356086d9531d900db8160c166fb9c62907cdf340e4de451fc02bbe2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7d497cd9dd47370ded969d5c61099a380b087246aa73e03fb58ba27c0f10c8fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d497cd9dd47370ded969d5c61099a380b087246aa73e03fb58ba27c0f10c8fe->enter($__internal_7d497cd9dd47370ded969d5c61099a380b087246aa73e03fb58ba27c0f10c8fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ef9357569648615f51b222dcda63350c23efa9684d4470058fe471b2c9f1381b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef9357569648615f51b222dcda63350c23efa9684d4470058fe471b2c9f1381b->enter($__internal_ef9357569648615f51b222dcda63350c23efa9684d4470058fe471b2c9f1381b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ef9357569648615f51b222dcda63350c23efa9684d4470058fe471b2c9f1381b->leave($__internal_ef9357569648615f51b222dcda63350c23efa9684d4470058fe471b2c9f1381b_prof);

        
        $__internal_7d497cd9dd47370ded969d5c61099a380b087246aa73e03fb58ba27c0f10c8fe->leave($__internal_7d497cd9dd47370ded969d5c61099a380b087246aa73e03fb58ba27c0f10c8fe_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ecaf144ca2136f46a53291f309e9310751d61ce1a3475d398dc6605f6226d682 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecaf144ca2136f46a53291f309e9310751d61ce1a3475d398dc6605f6226d682->enter($__internal_ecaf144ca2136f46a53291f309e9310751d61ce1a3475d398dc6605f6226d682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6713ea3a6de905ef57d85353fc2600f46ef41442b16fe10e9fec48fa4a060bff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6713ea3a6de905ef57d85353fc2600f46ef41442b16fe10e9fec48fa4a060bff->enter($__internal_6713ea3a6de905ef57d85353fc2600f46ef41442b16fe10e9fec48fa4a060bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6713ea3a6de905ef57d85353fc2600f46ef41442b16fe10e9fec48fa4a060bff->leave($__internal_6713ea3a6de905ef57d85353fc2600f46ef41442b16fe10e9fec48fa4a060bff_prof);

        
        $__internal_ecaf144ca2136f46a53291f309e9310751d61ce1a3475d398dc6605f6226d682->leave($__internal_ecaf144ca2136f46a53291f309e9310751d61ce1a3475d398dc6605f6226d682_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\Users\\Justyna\\PhpstormProjects\\untitled1\\app3\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
