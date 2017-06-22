<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_fa4e7129999311d4a889a33027645e2816ad402dbbaa1f98ce822edf91b1cdc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c19c110fe65b4584f0fdc39228baf8d5cd6764e4ae771f234d9dbe17c2316bb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c19c110fe65b4584f0fdc39228baf8d5cd6764e4ae771f234d9dbe17c2316bb8->enter($__internal_c19c110fe65b4584f0fdc39228baf8d5cd6764e4ae771f234d9dbe17c2316bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_b628fb552296acde4507434064242149ca2d63a1bba2c9cbe1bf4127ac7b7beb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b628fb552296acde4507434064242149ca2d63a1bba2c9cbe1bf4127ac7b7beb->enter($__internal_b628fb552296acde4507434064242149ca2d63a1bba2c9cbe1bf4127ac7b7beb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c19c110fe65b4584f0fdc39228baf8d5cd6764e4ae771f234d9dbe17c2316bb8->leave($__internal_c19c110fe65b4584f0fdc39228baf8d5cd6764e4ae771f234d9dbe17c2316bb8_prof);

        
        $__internal_b628fb552296acde4507434064242149ca2d63a1bba2c9cbe1bf4127ac7b7beb->leave($__internal_b628fb552296acde4507434064242149ca2d63a1bba2c9cbe1bf4127ac7b7beb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c26453ee53ebd3ae6b2ab68feb4bf76f05cf27d0a31a25a82cef49b276f60631 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c26453ee53ebd3ae6b2ab68feb4bf76f05cf27d0a31a25a82cef49b276f60631->enter($__internal_c26453ee53ebd3ae6b2ab68feb4bf76f05cf27d0a31a25a82cef49b276f60631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_dd91f96d7bfe4146c2f07b5694c3e9ced086ea8cdfaf8fe331a78dfc39509d36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd91f96d7bfe4146c2f07b5694c3e9ced086ea8cdfaf8fe331a78dfc39509d36->enter($__internal_dd91f96d7bfe4146c2f07b5694c3e9ced086ea8cdfaf8fe331a78dfc39509d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_dd91f96d7bfe4146c2f07b5694c3e9ced086ea8cdfaf8fe331a78dfc39509d36->leave($__internal_dd91f96d7bfe4146c2f07b5694c3e9ced086ea8cdfaf8fe331a78dfc39509d36_prof);

        
        $__internal_c26453ee53ebd3ae6b2ab68feb4bf76f05cf27d0a31a25a82cef49b276f60631->leave($__internal_c26453ee53ebd3ae6b2ab68feb4bf76f05cf27d0a31a25a82cef49b276f60631_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/epi/15_galek/public_html/app3/vendor/symfony/web-profiler-bundle/Resources/views/Collector/ajax.html.twig");
    }
}
