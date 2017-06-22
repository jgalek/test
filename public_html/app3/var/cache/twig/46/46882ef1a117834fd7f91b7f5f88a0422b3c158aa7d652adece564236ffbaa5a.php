<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_76668df54b5d614d4aafdd88500ffe92174f054c5db7693d61fb9fa081042174 extends Twig_Template
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
        $__internal_6ea68bd59989b55079e22d1890f8877bedf456a0fcf0704e7c0de41c59b5fb02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ea68bd59989b55079e22d1890f8877bedf456a0fcf0704e7c0de41c59b5fb02->enter($__internal_6ea68bd59989b55079e22d1890f8877bedf456a0fcf0704e7c0de41c59b5fb02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_2907d7683c35ba41bfad4d571701febbe25dd141d3f3d4bd526ffae5e8bd8a3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2907d7683c35ba41bfad4d571701febbe25dd141d3f3d4bd526ffae5e8bd8a3f->enter($__internal_2907d7683c35ba41bfad4d571701febbe25dd141d3f3d4bd526ffae5e8bd8a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ea68bd59989b55079e22d1890f8877bedf456a0fcf0704e7c0de41c59b5fb02->leave($__internal_6ea68bd59989b55079e22d1890f8877bedf456a0fcf0704e7c0de41c59b5fb02_prof);

        
        $__internal_2907d7683c35ba41bfad4d571701febbe25dd141d3f3d4bd526ffae5e8bd8a3f->leave($__internal_2907d7683c35ba41bfad4d571701febbe25dd141d3f3d4bd526ffae5e8bd8a3f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b67f0dabf9f1e6e5ff305c8688affa5156a98c9ebda1c93fd0d0cdb6171a3c7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b67f0dabf9f1e6e5ff305c8688affa5156a98c9ebda1c93fd0d0cdb6171a3c7d->enter($__internal_b67f0dabf9f1e6e5ff305c8688affa5156a98c9ebda1c93fd0d0cdb6171a3c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c24504cffce7ba186b853a25183900a467548f6f3697465df83f3d27597c1d3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c24504cffce7ba186b853a25183900a467548f6f3697465df83f3d27597c1d3e->enter($__internal_c24504cffce7ba186b853a25183900a467548f6f3697465df83f3d27597c1d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c24504cffce7ba186b853a25183900a467548f6f3697465df83f3d27597c1d3e->leave($__internal_c24504cffce7ba186b853a25183900a467548f6f3697465df83f3d27597c1d3e_prof);

        
        $__internal_b67f0dabf9f1e6e5ff305c8688affa5156a98c9ebda1c93fd0d0cdb6171a3c7d->leave($__internal_b67f0dabf9f1e6e5ff305c8688affa5156a98c9ebda1c93fd0d0cdb6171a3c7d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_edf27bb7530e93a39abed7a5cf4a7dfe5933183c9a3a6f6f4c4d64abc7b698f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edf27bb7530e93a39abed7a5cf4a7dfe5933183c9a3a6f6f4c4d64abc7b698f8->enter($__internal_edf27bb7530e93a39abed7a5cf4a7dfe5933183c9a3a6f6f4c4d64abc7b698f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_df13b444b93d55628cab1683e0b9ac8d58447f56e78a9a3e14b0bfd746b9533a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df13b444b93d55628cab1683e0b9ac8d58447f56e78a9a3e14b0bfd746b9533a->enter($__internal_df13b444b93d55628cab1683e0b9ac8d58447f56e78a9a3e14b0bfd746b9533a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_df13b444b93d55628cab1683e0b9ac8d58447f56e78a9a3e14b0bfd746b9533a->leave($__internal_df13b444b93d55628cab1683e0b9ac8d58447f56e78a9a3e14b0bfd746b9533a_prof);

        
        $__internal_edf27bb7530e93a39abed7a5cf4a7dfe5933183c9a3a6f6f4c4d64abc7b698f8->leave($__internal_edf27bb7530e93a39abed7a5cf4a7dfe5933183c9a3a6f6f4c4d64abc7b698f8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a96b169997256158ad5884fc60f3fadcab90275bd32531a673c1aea222fe9f80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a96b169997256158ad5884fc60f3fadcab90275bd32531a673c1aea222fe9f80->enter($__internal_a96b169997256158ad5884fc60f3fadcab90275bd32531a673c1aea222fe9f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2ca2198baea5f75f5a9602f75fd4e6e4323e0e454e5a3e849c6679eab985b646 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ca2198baea5f75f5a9602f75fd4e6e4323e0e454e5a3e849c6679eab985b646->enter($__internal_2ca2198baea5f75f5a9602f75fd4e6e4323e0e454e5a3e849c6679eab985b646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2ca2198baea5f75f5a9602f75fd4e6e4323e0e454e5a3e849c6679eab985b646->leave($__internal_2ca2198baea5f75f5a9602f75fd4e6e4323e0e454e5a3e849c6679eab985b646_prof);

        
        $__internal_a96b169997256158ad5884fc60f3fadcab90275bd32531a673c1aea222fe9f80->leave($__internal_a96b169997256158ad5884fc60f3fadcab90275bd32531a673c1aea222fe9f80_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/epi/15_galek/public_html/app3/vendor/symfony/web-profiler-bundle/Resources/views/Collector/router.html.twig");
    }
}
