<?php

/* bestVideos.html.twig */
class __TwigTemplate_3c62ae76ca3c7894c9e62bed62a7d244bc824a843d8936b98dee4e1cb9361f25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"mp container navbar navbar-default\">
    <div class=\"container-fluid\">
        <h2 style=\"color:darkslateblue\" >Najwyżej oceniane widea użytkowników:</h2>
        <div class=\"mp row\">
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hearIt"]) ? $context["hearIt"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 6
            echo "                <div style=\"margin:5px, padding:5px\" class=\"mp\">
                    <div class=\"list-group-item\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i>&nbsp; Autor ";
            // line 7
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["row"], "pseudonim", array())), "html", null, true);
            echo " </div>
                    <a  style=\"color:darkslateblue\" class=\"list-group-item\" href=\"../play/";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "video_id", array()), "html", null, true);
            echo "\"><i class=\"fa fa-play\" aria-hidden=\"true\"></i>&nbsp;";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["row"], "tytul", array())), "html", null, true);
            echo "</a>
                    <div class=\"list-group-item\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i>&nbsp; Ocena: ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "ocena", array()), "html", null, true);
            echo "</div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "bestVideos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 12,  42 => 9,  36 => 8,  32 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "bestVideos.html.twig", "/home/epi/15_galek/public_html/app3/templates/bestVideos.html.twig");
    }
}
