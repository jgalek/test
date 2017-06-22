<?php

/* register/edit.html.twig */
class __TwigTemplate_3ac1551b2e06c00590fb253e3a81e1186559628201c15d872b86764061178ee9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseHearIt.html.twig", "register/edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'editProfile' => array($this, 'block_editProfile'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseHearIt.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9cab6553d8059f36120c287a81795f413cfe0162cd44fc255d6fe2ea3f761810 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cab6553d8059f36120c287a81795f413cfe0162cd44fc255d6fe2ea3f761810->enter($__internal_9cab6553d8059f36120c287a81795f413cfe0162cd44fc255d6fe2ea3f761810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "register/edit.html.twig"));

        $__internal_8c3f47512a13cd4bea4862b29a7e796ba97aa223f17fb0cfb9c52858b3853d8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c3f47512a13cd4bea4862b29a7e796ba97aa223f17fb0cfb9c52858b3853d8a->enter($__internal_8c3f47512a13cd4bea4862b29a7e796ba97aa223f17fb0cfb9c52858b3853d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "register/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cab6553d8059f36120c287a81795f413cfe0162cd44fc255d6fe2ea3f761810->leave($__internal_9cab6553d8059f36120c287a81795f413cfe0162cd44fc255d6fe2ea3f761810_prof);

        
        $__internal_8c3f47512a13cd4bea4862b29a7e796ba97aa223f17fb0cfb9c52858b3853d8a->leave($__internal_8c3f47512a13cd4bea4862b29a7e796ba97aa223f17fb0cfb9c52858b3853d8a_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ccfca062112c0c8bce62d852122e2968cd39910aa42f29f084d261c64af253bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccfca062112c0c8bce62d852122e2968cd39910aa42f29f084d261c64af253bc->enter($__internal_ccfca062112c0c8bce62d852122e2968cd39910aa42f29f084d261c64af253bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4cfd3f5f75b6cf05488fa3862e3b83e574024d56227dea276a901dde2a391b65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cfd3f5f75b6cf05488fa3862e3b83e574024d56227dea276a901dde2a391b65->enter($__internal_4cfd3f5f75b6cf05488fa3862e3b83e574024d56227dea276a901dde2a391b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->displayBlock('header', $context, $blocks);
        // line 4
        echo "    ";
        $this->displayBlock('editProfile', $context, $blocks);
        
        $__internal_4cfd3f5f75b6cf05488fa3862e3b83e574024d56227dea276a901dde2a391b65->leave($__internal_4cfd3f5f75b6cf05488fa3862e3b83e574024d56227dea276a901dde2a391b65_prof);

        
        $__internal_ccfca062112c0c8bce62d852122e2968cd39910aa42f29f084d261c64af253bc->leave($__internal_ccfca062112c0c8bce62d852122e2968cd39910aa42f29f084d261c64af253bc_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_16ff40871bbca04657547642635c2de989872c6b16e5c07a2177e36c591c1375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16ff40871bbca04657547642635c2de989872c6b16e5c07a2177e36c591c1375->enter($__internal_16ff40871bbca04657547642635c2de989872c6b16e5c07a2177e36c591c1375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_c7024cd93e555b1c19a2df9567a6da83e6810ec2cd9811fb637cca1e9fc58846 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7024cd93e555b1c19a2df9567a6da83e6810ec2cd9811fb637cca1e9fc58846->enter($__internal_c7024cd93e555b1c19a2df9567a6da83e6810ec2cd9811fb637cca1e9fc58846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $this->loadTemplate("header.html.twig", "register/edit.html.twig", 3)->display($context);
        
        $__internal_c7024cd93e555b1c19a2df9567a6da83e6810ec2cd9811fb637cca1e9fc58846->leave($__internal_c7024cd93e555b1c19a2df9567a6da83e6810ec2cd9811fb637cca1e9fc58846_prof);

        
        $__internal_16ff40871bbca04657547642635c2de989872c6b16e5c07a2177e36c591c1375->leave($__internal_16ff40871bbca04657547642635c2de989872c6b16e5c07a2177e36c591c1375_prof);

    }

    // line 4
    public function block_editProfile($context, array $blocks = array())
    {
        $__internal_1d5c6a19797ea4247516e1e4ffb62904f8237d627bafdcc08135c1085d7932e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d5c6a19797ea4247516e1e4ffb62904f8237d627bafdcc08135c1085d7932e8->enter($__internal_1d5c6a19797ea4247516e1e4ffb62904f8237d627bafdcc08135c1085d7932e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "editProfile"));

        $__internal_f6ea0a96efdae38b6f586b23451b2ea6091e421de6b4530cdb19193e7492739f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6ea0a96efdae38b6f586b23451b2ea6091e421de6b4530cdb19193e7492739f->enter($__internal_f6ea0a96efdae38b6f586b23451b2ea6091e421de6b4530cdb19193e7492739f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "editProfile"));

        $this->loadTemplate("register/editProfile.html.twig", "register/edit.html.twig", 4)->display($context);
        
        $__internal_f6ea0a96efdae38b6f586b23451b2ea6091e421de6b4530cdb19193e7492739f->leave($__internal_f6ea0a96efdae38b6f586b23451b2ea6091e421de6b4530cdb19193e7492739f_prof);

        
        $__internal_1d5c6a19797ea4247516e1e4ffb62904f8237d627bafdcc08135c1085d7932e8->leave($__internal_1d5c6a19797ea4247516e1e4ffb62904f8237d627bafdcc08135c1085d7932e8_prof);

    }

    public function getTemplateName()
    {
        return "register/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 4,  65 => 3,  54 => 4,  51 => 3,  42 => 2,  11 => 1,);
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
    {% block editProfile %}{% include 'register/editProfile.html.twig' %}{% endblock %}
{% endblock %}", "register/edit.html.twig", "/home/epi/15_galek/public_html/app3/templates/register/edit.html.twig");
    }
}
