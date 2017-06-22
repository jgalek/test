<?php

/* wyszukiwarka/sresult.html.twig */
class __TwigTemplate_aedee8d481ceb02728a049de49c136dfe5a5281eafbaba0313880950c1445f88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseHearIt.html.twig", "wyszukiwarka/sresult.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseHearIt.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_756329e5e350f043fbafcbbaddd3ca468ed300c598a9efac83fae76061444336 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_756329e5e350f043fbafcbbaddd3ca468ed300c598a9efac83fae76061444336->enter($__internal_756329e5e350f043fbafcbbaddd3ca468ed300c598a9efac83fae76061444336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "wyszukiwarka/sresult.html.twig"));

        $__internal_6226927df72e8d5b56522e5f5f5bd7415a6cace0ee0179e74dc40b356b759d82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6226927df72e8d5b56522e5f5f5bd7415a6cace0ee0179e74dc40b356b759d82->enter($__internal_6226927df72e8d5b56522e5f5f5bd7415a6cace0ee0179e74dc40b356b759d82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "wyszukiwarka/sresult.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_756329e5e350f043fbafcbbaddd3ca468ed300c598a9efac83fae76061444336->leave($__internal_756329e5e350f043fbafcbbaddd3ca468ed300c598a9efac83fae76061444336_prof);

        
        $__internal_6226927df72e8d5b56522e5f5f5bd7415a6cace0ee0179e74dc40b356b759d82->leave($__internal_6226927df72e8d5b56522e5f5f5bd7415a6cace0ee0179e74dc40b356b759d82_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf2f59b4ce896b8cb81c3a054a0490688aec9b9593007ec7399a87fc3ef4ec91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf2f59b4ce896b8cb81c3a054a0490688aec9b9593007ec7399a87fc3ef4ec91->enter($__internal_bf2f59b4ce896b8cb81c3a054a0490688aec9b9593007ec7399a87fc3ef4ec91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_86b11f8edd6db76707f832824c7ab465d593d956949f311dfa6ee74cc2227456 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86b11f8edd6db76707f832824c7ab465d593d956949f311dfa6ee74cc2227456->enter($__internal_86b11f8edd6db76707f832824c7ab465d593d956949f311dfa6ee74cc2227456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->displayBlock('header', $context, $blocks);
        // line 4
        echo "    <div class=\"mp container navbar navbar-default\">
    <div class=\"container-fluid\">
    <h2>Wyszukano:</h2>
    <div class=\"row\">
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["wyszukiwarka"]) ? $context["wyszukiwarka"] : $this->getContext($context, "wyszukiwarka")));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 9
            echo "        <div style=\"margin:5px, padding:5px\" class=\"col-md-6 \">
            <div class=\"list-group-item\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i>&nbsp; Autor ";
            // line 10
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["row"], "pseudonim", array())), "html", null, true);
            echo "</div>
            <a  style=\"color:darkslateblue\" class=\"list-group-item\" href=\"../play/";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "video_id", array()), "html", null, true);
            echo "\"><i class=\"fa fa-play\" aria-hidden=\"true\"></i>&nbsp;";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["row"], "tytul", array())), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "gatunek", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "tagi", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "temat", array()), "html", null, true);
            echo ")</a>
            <div class=\"list-group-item\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i>&nbsp; Ocena: ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "ocena", array()), "html", null, true);
            echo "</div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "

";
        
        $__internal_86b11f8edd6db76707f832824c7ab465d593d956949f311dfa6ee74cc2227456->leave($__internal_86b11f8edd6db76707f832824c7ab465d593d956949f311dfa6ee74cc2227456_prof);

        
        $__internal_bf2f59b4ce896b8cb81c3a054a0490688aec9b9593007ec7399a87fc3ef4ec91->leave($__internal_bf2f59b4ce896b8cb81c3a054a0490688aec9b9593007ec7399a87fc3ef4ec91_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_d93875bbc0b1be83280da3e1b429533724a9970300ba8ac02fba846052835017 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d93875bbc0b1be83280da3e1b429533724a9970300ba8ac02fba846052835017->enter($__internal_d93875bbc0b1be83280da3e1b429533724a9970300ba8ac02fba846052835017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_47027ea41947d53a8a59cbc78d60f68fe046378b7a9da75609e3c3aa0f7646e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47027ea41947d53a8a59cbc78d60f68fe046378b7a9da75609e3c3aa0f7646e8->enter($__internal_47027ea41947d53a8a59cbc78d60f68fe046378b7a9da75609e3c3aa0f7646e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $this->loadTemplate("header.html.twig", "wyszukiwarka/sresult.html.twig", 3)->display($context);
        
        $__internal_47027ea41947d53a8a59cbc78d60f68fe046378b7a9da75609e3c3aa0f7646e8->leave($__internal_47027ea41947d53a8a59cbc78d60f68fe046378b7a9da75609e3c3aa0f7646e8_prof);

        
        $__internal_d93875bbc0b1be83280da3e1b429533724a9970300ba8ac02fba846052835017->leave($__internal_d93875bbc0b1be83280da3e1b429533724a9970300ba8ac02fba846052835017_prof);

    }

    public function getTemplateName()
    {
        return "wyszukiwarka/sresult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 3,  91 => 15,  82 => 12,  70 => 11,  66 => 10,  63 => 9,  59 => 8,  53 => 4,  50 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'baseHearIt.html.twig' %}
{% block body %}
    {% block header %}{% include 'header.html.twig' %}{% endblock %}
    <div class=\"mp container navbar navbar-default\">
    <div class=\"container-fluid\">
    <h2>Wyszukano:</h2>
    <div class=\"row\">
    {% for row in wyszukiwarka %}
        <div style=\"margin:5px, padding:5px\" class=\"col-md-6 \">
            <div class=\"list-group-item\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i>&nbsp; Autor {{ row.pseudonim|upper }}</div>
            <a  style=\"color:darkslateblue\" class=\"list-group-item\" href=\"../play/{{  row.video_id }}\"><i class=\"fa fa-play\" aria-hidden=\"true\"></i>&nbsp;{{ row.tytul|upper }} ({{ row.gatunek }} {{ row.tagi }} {{ row.temat }})</a>
            <div class=\"list-group-item\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i>&nbsp; Ocena: {{ row.ocena }}</div>
        </div>
    {% endfor %}


{% endblock %}", "wyszukiwarka/sresult.html.twig", "/home/epi/15_galek/public_html/app3/templates/wyszukiwarka/sresult.html.twig");
    }
}
