<?php

/* register/add.html.twig */
class __TwigTemplate_8a680537b466f33c353d94467ad6128f8861a5b8808d48aeeb8456d9a89c9d61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseHearIt.html.twig", "register/add.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'addProfile' => array($this, 'block_addProfile'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseHearIt.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_06bb2ff5708a163a23f4421acf4bd60dcb67dac9540ccaaed5a9d4efb88fa23d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06bb2ff5708a163a23f4421acf4bd60dcb67dac9540ccaaed5a9d4efb88fa23d->enter($__internal_06bb2ff5708a163a23f4421acf4bd60dcb67dac9540ccaaed5a9d4efb88fa23d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "register/add.html.twig"));

        $__internal_54bb5d16c9e428e88741d410bf9056fa55c0ff90a83e416a2928f8f34762de41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54bb5d16c9e428e88741d410bf9056fa55c0ff90a83e416a2928f8f34762de41->enter($__internal_54bb5d16c9e428e88741d410bf9056fa55c0ff90a83e416a2928f8f34762de41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "register/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06bb2ff5708a163a23f4421acf4bd60dcb67dac9540ccaaed5a9d4efb88fa23d->leave($__internal_06bb2ff5708a163a23f4421acf4bd60dcb67dac9540ccaaed5a9d4efb88fa23d_prof);

        
        $__internal_54bb5d16c9e428e88741d410bf9056fa55c0ff90a83e416a2928f8f34762de41->leave($__internal_54bb5d16c9e428e88741d410bf9056fa55c0ff90a83e416a2928f8f34762de41_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_e00dba7584c39bf2286d096216664a603204e444a1e4f0a82ccd7fe9e780555b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e00dba7584c39bf2286d096216664a603204e444a1e4f0a82ccd7fe9e780555b->enter($__internal_e00dba7584c39bf2286d096216664a603204e444a1e4f0a82ccd7fe9e780555b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3c88ea34d75d0c305aa752e54968ca237a9219f8ec7182189a2847f25de604ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c88ea34d75d0c305aa752e54968ca237a9219f8ec7182189a2847f25de604ce->enter($__internal_3c88ea34d75d0c305aa752e54968ca237a9219f8ec7182189a2847f25de604ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->displayBlock('header', $context, $blocks);
        // line 4
        echo "    ";
        $this->displayBlock('addProfile', $context, $blocks);
        
        $__internal_3c88ea34d75d0c305aa752e54968ca237a9219f8ec7182189a2847f25de604ce->leave($__internal_3c88ea34d75d0c305aa752e54968ca237a9219f8ec7182189a2847f25de604ce_prof);

        
        $__internal_e00dba7584c39bf2286d096216664a603204e444a1e4f0a82ccd7fe9e780555b->leave($__internal_e00dba7584c39bf2286d096216664a603204e444a1e4f0a82ccd7fe9e780555b_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_7bf1da5f8f1438c199f76eec1a7aefd14306e184107b41bf02ead6f9077f780e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bf1da5f8f1438c199f76eec1a7aefd14306e184107b41bf02ead6f9077f780e->enter($__internal_7bf1da5f8f1438c199f76eec1a7aefd14306e184107b41bf02ead6f9077f780e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_913a4a9d0e4b33ec19c7210e93b7d85098aa7300f111ca3aee7c59aebba11d1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_913a4a9d0e4b33ec19c7210e93b7d85098aa7300f111ca3aee7c59aebba11d1c->enter($__internal_913a4a9d0e4b33ec19c7210e93b7d85098aa7300f111ca3aee7c59aebba11d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $this->loadTemplate("header.html.twig", "register/add.html.twig", 3)->display($context);
        
        $__internal_913a4a9d0e4b33ec19c7210e93b7d85098aa7300f111ca3aee7c59aebba11d1c->leave($__internal_913a4a9d0e4b33ec19c7210e93b7d85098aa7300f111ca3aee7c59aebba11d1c_prof);

        
        $__internal_7bf1da5f8f1438c199f76eec1a7aefd14306e184107b41bf02ead6f9077f780e->leave($__internal_7bf1da5f8f1438c199f76eec1a7aefd14306e184107b41bf02ead6f9077f780e_prof);

    }

    // line 4
    public function block_addProfile($context, array $blocks = array())
    {
        $__internal_189aecccc92cc1246b06169b180c68420b30ec44021aa3bd591ab544897051d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_189aecccc92cc1246b06169b180c68420b30ec44021aa3bd591ab544897051d9->enter($__internal_189aecccc92cc1246b06169b180c68420b30ec44021aa3bd591ab544897051d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addProfile"));

        $__internal_781aad732126702075f33b41468b2abd1f61e0ddf38fd738e5a9d2e21a23035e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_781aad732126702075f33b41468b2abd1f61e0ddf38fd738e5a9d2e21a23035e->enter($__internal_781aad732126702075f33b41468b2abd1f61e0ddf38fd738e5a9d2e21a23035e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addProfile"));

        $this->loadTemplate("register/addProfile.html.twig", "register/add.html.twig", 4)->display($context);
        
        $__internal_781aad732126702075f33b41468b2abd1f61e0ddf38fd738e5a9d2e21a23035e->leave($__internal_781aad732126702075f33b41468b2abd1f61e0ddf38fd738e5a9d2e21a23035e_prof);

        
        $__internal_189aecccc92cc1246b06169b180c68420b30ec44021aa3bd591ab544897051d9->leave($__internal_189aecccc92cc1246b06169b180c68420b30ec44021aa3bd591ab544897051d9_prof);

    }

    public function getTemplateName()
    {
        return "register/add.html.twig";
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
    {% block addProfile %}{% include 'register/addProfile.html.twig' %}{% endblock %}
{% endblock %}", "register/add.html.twig", "/home/epi/15_galek/public_html/app3/templates/register/add.html.twig");
    }
}
