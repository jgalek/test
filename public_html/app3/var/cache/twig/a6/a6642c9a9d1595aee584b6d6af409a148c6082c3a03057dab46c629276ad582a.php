<?php

/* hearIt/index.html.twig */
class __TwigTemplate_9525d7b8277a2b7f1ac81d1a7cc48209f48ee19d90090c7cd4395816c08fa34d extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
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
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $this->loadTemplate("header.html.twig", "hearIt/index.html.twig", 3)->display($context);
    }

    // line 4
    public function block_bestVideos($context, array $blocks = array())
    {
        $this->loadTemplate("bestVideos.html.twig", "hearIt/index.html.twig", 4)->display($context);
    }

    // line 5
    public function block_bestPlaylist($context, array $blocks = array())
    {
        $this->loadTemplate("bestPlaylist.html.twig", "hearIt/index.html.twig", 5)->display($context);
    }

    // line 6
    public function block_playlistByGatunek($context, array $blocks = array())
    {
        $this->loadTemplate("playlistByGatunek.html.twig", "hearIt/index.html.twig", 6)->display($context);
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
        return array (  67 => 6,  61 => 5,  55 => 4,  49 => 3,  44 => 6,  41 => 5,  38 => 4,  35 => 3,  32 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "hearIt/index.html.twig", "/home/epi/15_galek/public_html/app3/templates/hearIt/index.html.twig");
    }
}
