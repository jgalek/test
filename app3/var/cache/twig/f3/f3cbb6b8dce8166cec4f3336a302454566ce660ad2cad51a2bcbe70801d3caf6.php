<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_a896066e7f9d7489e66ca1b2fb9f0ff6e049158f923a3657cb99bc7199cc8a63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_475b766e2475f49eb0dc12d6ae0243a21b37cd605b37f0794331855441ea44bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_475b766e2475f49eb0dc12d6ae0243a21b37cd605b37f0794331855441ea44bc->enter($__internal_475b766e2475f49eb0dc12d6ae0243a21b37cd605b37f0794331855441ea44bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_2d1457cb3f4db3c0cf561061d8ac5c065840797cf82cc4c048853e66080971a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d1457cb3f4db3c0cf561061d8ac5c065840797cf82cc4c048853e66080971a6->enter($__internal_2d1457cb3f4db3c0cf561061d8ac5c065840797cf82cc4c048853e66080971a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_475b766e2475f49eb0dc12d6ae0243a21b37cd605b37f0794331855441ea44bc->leave($__internal_475b766e2475f49eb0dc12d6ae0243a21b37cd605b37f0794331855441ea44bc_prof);

        
        $__internal_2d1457cb3f4db3c0cf561061d8ac5c065840797cf82cc4c048853e66080971a6->leave($__internal_2d1457cb3f4db3c0cf561061d8ac5c065840797cf82cc4c048853e66080971a6_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_91c125c8b873af9cedc8965f30419139cb4f74cfeac1696b88bf679f78c0362a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91c125c8b873af9cedc8965f30419139cb4f74cfeac1696b88bf679f78c0362a->enter($__internal_91c125c8b873af9cedc8965f30419139cb4f74cfeac1696b88bf679f78c0362a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_b071bd4e99b3b7dccd9b08ed58b924e317dd84b0b9939a42153190ae85a61079 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b071bd4e99b3b7dccd9b08ed58b924e317dd84b0b9939a42153190ae85a61079->enter($__internal_b071bd4e99b3b7dccd9b08ed58b924e317dd84b0b9939a42153190ae85a61079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_b071bd4e99b3b7dccd9b08ed58b924e317dd84b0b9939a42153190ae85a61079->leave($__internal_b071bd4e99b3b7dccd9b08ed58b924e317dd84b0b9939a42153190ae85a61079_prof);

        
        $__internal_91c125c8b873af9cedc8965f30419139cb4f74cfeac1696b88bf679f78c0362a->leave($__internal_91c125c8b873af9cedc8965f30419139cb4f74cfeac1696b88bf679f78c0362a_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_964fb9b058992a93199446454afba78682e643affcd8c5a1c2595495ccfec4c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_964fb9b058992a93199446454afba78682e643affcd8c5a1c2595495ccfec4c5->enter($__internal_964fb9b058992a93199446454afba78682e643affcd8c5a1c2595495ccfec4c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e0cf46594b09dcb0391088e5c62d7051ab0d27ce4fbee9cb6f9f9b6c1545c6e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0cf46594b09dcb0391088e5c62d7051ab0d27ce4fbee9cb6f9f9b6c1545c6e7->enter($__internal_e0cf46594b09dcb0391088e5c62d7051ab0d27ce4fbee9cb6f9f9b6c1545c6e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_e0cf46594b09dcb0391088e5c62d7051ab0d27ce4fbee9cb6f9f9b6c1545c6e7->leave($__internal_e0cf46594b09dcb0391088e5c62d7051ab0d27ce4fbee9cb6f9f9b6c1545c6e7_prof);

        
        $__internal_964fb9b058992a93199446454afba78682e643affcd8c5a1c2595495ccfec4c5->leave($__internal_964fb9b058992a93199446454afba78682e643affcd8c5a1c2595495ccfec4c5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "C:\\Users\\Justyna\\PhpstormProjects\\untitled1\\app3\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
