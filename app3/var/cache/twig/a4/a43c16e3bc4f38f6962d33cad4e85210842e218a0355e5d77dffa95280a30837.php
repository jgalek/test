<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_2c009495621735621db25f52397b17c12fd89f56df0f11944b1c9922cd746a78 extends Twig_Template
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
        $__internal_99c38ed56fbd914968208f98f63586347343a2fa211a560ca059959855a07b2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99c38ed56fbd914968208f98f63586347343a2fa211a560ca059959855a07b2f->enter($__internal_99c38ed56fbd914968208f98f63586347343a2fa211a560ca059959855a07b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_8a917c0b4cf2eb7ac1083f58c7fd472e3e373d0ba05751bb19a2590115c5affa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a917c0b4cf2eb7ac1083f58c7fd472e3e373d0ba05751bb19a2590115c5affa->enter($__internal_8a917c0b4cf2eb7ac1083f58c7fd472e3e373d0ba05751bb19a2590115c5affa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99c38ed56fbd914968208f98f63586347343a2fa211a560ca059959855a07b2f->leave($__internal_99c38ed56fbd914968208f98f63586347343a2fa211a560ca059959855a07b2f_prof);

        
        $__internal_8a917c0b4cf2eb7ac1083f58c7fd472e3e373d0ba05751bb19a2590115c5affa->leave($__internal_8a917c0b4cf2eb7ac1083f58c7fd472e3e373d0ba05751bb19a2590115c5affa_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f519daa563e0842fff73d6d1eec8c5a387967630d01cb1815ecc9413cd29408c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f519daa563e0842fff73d6d1eec8c5a387967630d01cb1815ecc9413cd29408c->enter($__internal_f519daa563e0842fff73d6d1eec8c5a387967630d01cb1815ecc9413cd29408c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fd2067d2f699fa4bc2357a90f49cff7aef457dec4cb3d0b3035772866b1fef56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd2067d2f699fa4bc2357a90f49cff7aef457dec4cb3d0b3035772866b1fef56->enter($__internal_fd2067d2f699fa4bc2357a90f49cff7aef457dec4cb3d0b3035772866b1fef56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
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
        
        $__internal_fd2067d2f699fa4bc2357a90f49cff7aef457dec4cb3d0b3035772866b1fef56->leave($__internal_fd2067d2f699fa4bc2357a90f49cff7aef457dec4cb3d0b3035772866b1fef56_prof);

        
        $__internal_f519daa563e0842fff73d6d1eec8c5a387967630d01cb1815ecc9413cd29408c->leave($__internal_f519daa563e0842fff73d6d1eec8c5a387967630d01cb1815ecc9413cd29408c_prof);

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
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
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
", "@WebProfiler/Collector/ajax.html.twig", "C:\\Users\\Justyna\\PhpstormProjects\\untitled1\\app3\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
