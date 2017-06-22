<?php

/* video/add.html.twig */
class __TwigTemplate_be3272f7dc9dd6e9ab62e92416b2d50a1506771943005848418f9056c757f9ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseHearIt.html.twig", "video/add.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'addVideo' => array($this, 'block_addVideo'),
            'deleteVideo' => array($this, 'block_deleteVideo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseHearIt.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_51a9a2508b438f2ce679b155683272286a37028fc223be8730a931d68e0240b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51a9a2508b438f2ce679b155683272286a37028fc223be8730a931d68e0240b7->enter($__internal_51a9a2508b438f2ce679b155683272286a37028fc223be8730a931d68e0240b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "video/add.html.twig"));

        $__internal_52efc81d3f138affd52a171b672d4d93caed2273b8a8b83166cb4c35f9f7cac2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52efc81d3f138affd52a171b672d4d93caed2273b8a8b83166cb4c35f9f7cac2->enter($__internal_52efc81d3f138affd52a171b672d4d93caed2273b8a8b83166cb4c35f9f7cac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "video/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51a9a2508b438f2ce679b155683272286a37028fc223be8730a931d68e0240b7->leave($__internal_51a9a2508b438f2ce679b155683272286a37028fc223be8730a931d68e0240b7_prof);

        
        $__internal_52efc81d3f138affd52a171b672d4d93caed2273b8a8b83166cb4c35f9f7cac2->leave($__internal_52efc81d3f138affd52a171b672d4d93caed2273b8a8b83166cb4c35f9f7cac2_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_5371c1320104c70b856b190712f9447e3b57708f6b4d9e0e42e3795322d153f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5371c1320104c70b856b190712f9447e3b57708f6b4d9e0e42e3795322d153f0->enter($__internal_5371c1320104c70b856b190712f9447e3b57708f6b4d9e0e42e3795322d153f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_172f56e0e5b407753fb123be5058d5c907d7f1b5424251f624c3ccb2ec7dfdd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_172f56e0e5b407753fb123be5058d5c907d7f1b5424251f624c3ccb2ec7dfdd8->enter($__internal_172f56e0e5b407753fb123be5058d5c907d7f1b5424251f624c3ccb2ec7dfdd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->displayBlock('header', $context, $blocks);
        // line 4
        echo "    ";
        $this->displayBlock('addVideo', $context, $blocks);
        // line 5
        echo "    ";
        $this->displayBlock('deleteVideo', $context, $blocks);
        
        $__internal_172f56e0e5b407753fb123be5058d5c907d7f1b5424251f624c3ccb2ec7dfdd8->leave($__internal_172f56e0e5b407753fb123be5058d5c907d7f1b5424251f624c3ccb2ec7dfdd8_prof);

        
        $__internal_5371c1320104c70b856b190712f9447e3b57708f6b4d9e0e42e3795322d153f0->leave($__internal_5371c1320104c70b856b190712f9447e3b57708f6b4d9e0e42e3795322d153f0_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_f6deb72ff573f46cb4f03d1abfffe999daaf50d60d4790425b4d62f4979a9693 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6deb72ff573f46cb4f03d1abfffe999daaf50d60d4790425b4d62f4979a9693->enter($__internal_f6deb72ff573f46cb4f03d1abfffe999daaf50d60d4790425b4d62f4979a9693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_1dba72020bc7570f4e6a16f88c7792cb2116f6ef1af0d3e4b64c9905efce4b47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dba72020bc7570f4e6a16f88c7792cb2116f6ef1af0d3e4b64c9905efce4b47->enter($__internal_1dba72020bc7570f4e6a16f88c7792cb2116f6ef1af0d3e4b64c9905efce4b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $this->loadTemplate("header.html.twig", "video/add.html.twig", 3)->display($context);
        
        $__internal_1dba72020bc7570f4e6a16f88c7792cb2116f6ef1af0d3e4b64c9905efce4b47->leave($__internal_1dba72020bc7570f4e6a16f88c7792cb2116f6ef1af0d3e4b64c9905efce4b47_prof);

        
        $__internal_f6deb72ff573f46cb4f03d1abfffe999daaf50d60d4790425b4d62f4979a9693->leave($__internal_f6deb72ff573f46cb4f03d1abfffe999daaf50d60d4790425b4d62f4979a9693_prof);

    }

    // line 4
    public function block_addVideo($context, array $blocks = array())
    {
        $__internal_dba8526183d9447ffd76fffa5ec32cd023cfedcce20881b49148ebb1e64a38f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dba8526183d9447ffd76fffa5ec32cd023cfedcce20881b49148ebb1e64a38f6->enter($__internal_dba8526183d9447ffd76fffa5ec32cd023cfedcce20881b49148ebb1e64a38f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addVideo"));

        $__internal_7931f04acf45975cbccfc015eb9b126e9be399b950d07ad80fa2d74b4773d4ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7931f04acf45975cbccfc015eb9b126e9be399b950d07ad80fa2d74b4773d4ea->enter($__internal_7931f04acf45975cbccfc015eb9b126e9be399b950d07ad80fa2d74b4773d4ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addVideo"));

        $this->loadTemplate("video/addVideo.html.twig", "video/add.html.twig", 4)->display($context);
        
        $__internal_7931f04acf45975cbccfc015eb9b126e9be399b950d07ad80fa2d74b4773d4ea->leave($__internal_7931f04acf45975cbccfc015eb9b126e9be399b950d07ad80fa2d74b4773d4ea_prof);

        
        $__internal_dba8526183d9447ffd76fffa5ec32cd023cfedcce20881b49148ebb1e64a38f6->leave($__internal_dba8526183d9447ffd76fffa5ec32cd023cfedcce20881b49148ebb1e64a38f6_prof);

    }

    // line 5
    public function block_deleteVideo($context, array $blocks = array())
    {
        $__internal_a9d68633d349ae5c13d1578ebeb2d241e80de71228496745d44fc06010021496 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9d68633d349ae5c13d1578ebeb2d241e80de71228496745d44fc06010021496->enter($__internal_a9d68633d349ae5c13d1578ebeb2d241e80de71228496745d44fc06010021496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "deleteVideo"));

        $__internal_3455924579ed6e7711a65556159d201c2d6c76fb4f56a9649def8b5bbd3d8d05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3455924579ed6e7711a65556159d201c2d6c76fb4f56a9649def8b5bbd3d8d05->enter($__internal_3455924579ed6e7711a65556159d201c2d6c76fb4f56a9649def8b5bbd3d8d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "deleteVideo"));

        $this->loadTemplate("video/deleteVideo.html.twig", "video/add.html.twig", 5)->display($context);
        
        $__internal_3455924579ed6e7711a65556159d201c2d6c76fb4f56a9649def8b5bbd3d8d05->leave($__internal_3455924579ed6e7711a65556159d201c2d6c76fb4f56a9649def8b5bbd3d8d05_prof);

        
        $__internal_a9d68633d349ae5c13d1578ebeb2d241e80de71228496745d44fc06010021496->leave($__internal_a9d68633d349ae5c13d1578ebeb2d241e80de71228496745d44fc06010021496_prof);

    }

    public function getTemplateName()
    {
        return "video/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 5,  87 => 4,  69 => 3,  58 => 5,  55 => 4,  52 => 3,  43 => 2,  11 => 1,);
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
    {% block addVideo %}{% include 'video/addVideo.html.twig' %}{% endblock %}
    {% block deleteVideo %}{% include 'video/deleteVideo.html.twig' %}{% endblock %}
{% endblock %}", "video/add.html.twig", "/home/epi/15_galek/public_html/app3/templates/video/add.html.twig");
    }
}
