<?php

/* play/add.html.twig */
class __TwigTemplate_75ad4d8c771bae0845ddc53256a36474a2f1ebf819bf8feb068b4f46fec4ff32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseHearIt.html.twig", "play/add.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'addComment' => array($this, 'block_addComment'),
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
        $this->displayBlock('addComment', $context, $blocks);
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $this->loadTemplate("header.html.twig", "play/add.html.twig", 3)->display($context);
    }

    // line 4
    public function block_addComment($context, array $blocks = array())
    {
        $this->loadTemplate("play/addComment.html.twig", "play/add.html.twig", 4)->display($context);
    }

    public function getTemplateName()
    {
        return "play/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 4,  41 => 3,  36 => 4,  33 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "play/add.html.twig", "/home/epi/15_galek/public_html/app3/templates/play/add.html.twig");
    }
}
