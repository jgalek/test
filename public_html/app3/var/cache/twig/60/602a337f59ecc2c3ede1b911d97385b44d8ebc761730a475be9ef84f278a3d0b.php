<?php

/* hearIt/index.html.twig */
class __TwigTemplate_c202502cd00f2dce3dd09a6664880bff96e78cceb8b022dec001fe4b7e9bfa86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseHearIt.html.twig", "hearIt/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'bestVideos' => array($this, 'block_bestVideos'),
            'bestPlaylist' => array($this, 'block_bestPlaylist'),
            'playlistByGatunek' => array($this, 'block_playlistByGatunek'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseHearIt.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f3bdf8a612274f6753dfc567fe707d05f8a96a6923409ceb4deb8bf0ad95d1a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3bdf8a612274f6753dfc567fe707d05f8a96a6923409ceb4deb8bf0ad95d1a6->enter($__internal_f3bdf8a612274f6753dfc567fe707d05f8a96a6923409ceb4deb8bf0ad95d1a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hearIt/index.html.twig"));

        $__internal_569993d7169b40c1d05e01c57c9307b8beb1553c185085d6025de99743befcd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_569993d7169b40c1d05e01c57c9307b8beb1553c185085d6025de99743befcd1->enter($__internal_569993d7169b40c1d05e01c57c9307b8beb1553c185085d6025de99743befcd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hearIt/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3bdf8a612274f6753dfc567fe707d05f8a96a6923409ceb4deb8bf0ad95d1a6->leave($__internal_f3bdf8a612274f6753dfc567fe707d05f8a96a6923409ceb4deb8bf0ad95d1a6_prof);

        
        $__internal_569993d7169b40c1d05e01c57c9307b8beb1553c185085d6025de99743befcd1->leave($__internal_569993d7169b40c1d05e01c57c9307b8beb1553c185085d6025de99743befcd1_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb2578169eaced0b0b612a04cc83bdefca1ea63fc1b4d4ce4c30511fc4671bce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb2578169eaced0b0b612a04cc83bdefca1ea63fc1b4d4ce4c30511fc4671bce->enter($__internal_eb2578169eaced0b0b612a04cc83bdefca1ea63fc1b4d4ce4c30511fc4671bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c3db400d09647f509753477d35bb491478c3ae43c6a1aa6e3a6bb65d0ca60d84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3db400d09647f509753477d35bb491478c3ae43c6a1aa6e3a6bb65d0ca60d84->enter($__internal_c3db400d09647f509753477d35bb491478c3ae43c6a1aa6e3a6bb65d0ca60d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->displayBlock('header', $context, $blocks);
        // line 4
        echo "    ";
        $this->displayBlock('bestVideos', $context, $blocks);
        // line 5
        echo "    ";
        $this->displayBlock('bestPlaylist', $context, $blocks);
        // line 6
        echo "    ";
        $this->displayBlock('playlistByGatunek', $context, $blocks);
        
        $__internal_c3db400d09647f509753477d35bb491478c3ae43c6a1aa6e3a6bb65d0ca60d84->leave($__internal_c3db400d09647f509753477d35bb491478c3ae43c6a1aa6e3a6bb65d0ca60d84_prof);

        
        $__internal_eb2578169eaced0b0b612a04cc83bdefca1ea63fc1b4d4ce4c30511fc4671bce->leave($__internal_eb2578169eaced0b0b612a04cc83bdefca1ea63fc1b4d4ce4c30511fc4671bce_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_48f1e3e21e9ac5d5fc97d5cf6a02b823aff61bd9e39ffc7a24470b4f9a520296 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48f1e3e21e9ac5d5fc97d5cf6a02b823aff61bd9e39ffc7a24470b4f9a520296->enter($__internal_48f1e3e21e9ac5d5fc97d5cf6a02b823aff61bd9e39ffc7a24470b4f9a520296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_2537a95828b83b9ebc9fc7b75aae373fee7223cb6d9883b6084e225548acbc3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2537a95828b83b9ebc9fc7b75aae373fee7223cb6d9883b6084e225548acbc3a->enter($__internal_2537a95828b83b9ebc9fc7b75aae373fee7223cb6d9883b6084e225548acbc3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $this->loadTemplate("header.html.twig", "hearIt/index.html.twig", 3)->display($context);
        
        $__internal_2537a95828b83b9ebc9fc7b75aae373fee7223cb6d9883b6084e225548acbc3a->leave($__internal_2537a95828b83b9ebc9fc7b75aae373fee7223cb6d9883b6084e225548acbc3a_prof);

        
        $__internal_48f1e3e21e9ac5d5fc97d5cf6a02b823aff61bd9e39ffc7a24470b4f9a520296->leave($__internal_48f1e3e21e9ac5d5fc97d5cf6a02b823aff61bd9e39ffc7a24470b4f9a520296_prof);

    }

    // line 4
    public function block_bestVideos($context, array $blocks = array())
    {
        $__internal_3360be3bca07cb8c4c53f80503aed5c8bee222fe881322693a3f479a6a6c617c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3360be3bca07cb8c4c53f80503aed5c8bee222fe881322693a3f479a6a6c617c->enter($__internal_3360be3bca07cb8c4c53f80503aed5c8bee222fe881322693a3f479a6a6c617c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bestVideos"));

        $__internal_635f7003361b3fb606469556527a23adea61c782534d672f61c3df1373000968 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_635f7003361b3fb606469556527a23adea61c782534d672f61c3df1373000968->enter($__internal_635f7003361b3fb606469556527a23adea61c782534d672f61c3df1373000968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bestVideos"));

        $this->loadTemplate("bestVideos.html.twig", "hearIt/index.html.twig", 4)->display($context);
        
        $__internal_635f7003361b3fb606469556527a23adea61c782534d672f61c3df1373000968->leave($__internal_635f7003361b3fb606469556527a23adea61c782534d672f61c3df1373000968_prof);

        
        $__internal_3360be3bca07cb8c4c53f80503aed5c8bee222fe881322693a3f479a6a6c617c->leave($__internal_3360be3bca07cb8c4c53f80503aed5c8bee222fe881322693a3f479a6a6c617c_prof);

    }

    // line 5
    public function block_bestPlaylist($context, array $blocks = array())
    {
        $__internal_3d8a6237aba37adb91c8afec280871b976cbfa894ef658710daf786bff2d645d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d8a6237aba37adb91c8afec280871b976cbfa894ef658710daf786bff2d645d->enter($__internal_3d8a6237aba37adb91c8afec280871b976cbfa894ef658710daf786bff2d645d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bestPlaylist"));

        $__internal_5350c7678db08227c57f979c38cb96d68c013ce7887acfc3864064664854fd73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5350c7678db08227c57f979c38cb96d68c013ce7887acfc3864064664854fd73->enter($__internal_5350c7678db08227c57f979c38cb96d68c013ce7887acfc3864064664854fd73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bestPlaylist"));

        $this->loadTemplate("bestPlaylist.html.twig", "hearIt/index.html.twig", 5)->display($context);
        
        $__internal_5350c7678db08227c57f979c38cb96d68c013ce7887acfc3864064664854fd73->leave($__internal_5350c7678db08227c57f979c38cb96d68c013ce7887acfc3864064664854fd73_prof);

        
        $__internal_3d8a6237aba37adb91c8afec280871b976cbfa894ef658710daf786bff2d645d->leave($__internal_3d8a6237aba37adb91c8afec280871b976cbfa894ef658710daf786bff2d645d_prof);

    }

    // line 6
    public function block_playlistByGatunek($context, array $blocks = array())
    {
        $__internal_bbae7d9875da29115c62deb91040bb3fe2cd0fec625ea8e21e601e4345f04460 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbae7d9875da29115c62deb91040bb3fe2cd0fec625ea8e21e601e4345f04460->enter($__internal_bbae7d9875da29115c62deb91040bb3fe2cd0fec625ea8e21e601e4345f04460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "playlistByGatunek"));

        $__internal_c91d271f9b9159c2a43a84989a9f86034d258ccfd51241d57aa39ae6d5a84ed9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c91d271f9b9159c2a43a84989a9f86034d258ccfd51241d57aa39ae6d5a84ed9->enter($__internal_c91d271f9b9159c2a43a84989a9f86034d258ccfd51241d57aa39ae6d5a84ed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "playlistByGatunek"));

        $this->loadTemplate("playlistByGatunek.html.twig", "hearIt/index.html.twig", 6)->display($context);
        
        $__internal_c91d271f9b9159c2a43a84989a9f86034d258ccfd51241d57aa39ae6d5a84ed9->leave($__internal_c91d271f9b9159c2a43a84989a9f86034d258ccfd51241d57aa39ae6d5a84ed9_prof);

        
        $__internal_bbae7d9875da29115c62deb91040bb3fe2cd0fec625ea8e21e601e4345f04460->leave($__internal_bbae7d9875da29115c62deb91040bb3fe2cd0fec625ea8e21e601e4345f04460_prof);

    }

    public function getTemplateName()
    {
        return "hearIt/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 6,  109 => 5,  91 => 4,  73 => 3,  62 => 6,  59 => 5,  56 => 4,  53 => 3,  44 => 2,  11 => 1,);
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
    {% block bestVideos %}{% include 'bestVideos.html.twig' %}{% endblock %}
    {% block bestPlaylist %}{% include 'bestPlaylist.html.twig' %}{% endblock %}
    {% block playlistByGatunek %}{% include 'playlistByGatunek.html.twig' %}{% endblock %}
{% endblock %}", "hearIt/index.html.twig", "/home/epi/15_galek/public_html/app3/templates/hearIt/index.html.twig");
    }
}
