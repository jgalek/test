<?php

/* playlistByGatunek.html.twig */
class __TwigTemplate_210a2a7682b26b27487b67277a098697c72e9e43c46ba22e0c84057475b12f13 extends Twig_Template
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
        echo "<div class=\"container \">
    <div style=\"color:darkslateblue\" class=\"row navbar navbar-default\">
        <h2>Proponowane:</h2>
    </div>
</div>


";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["playlist"]) ? $context["playlist"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 9
            echo "    <div class=\"mp container navbar navbar-default\">
        <div class=\"container-fluid\">
            <div class=\"mp list-group-item\"><h3>Playlista: ";
            // line 11
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["row"], "gatunek", array())), "html", null, true);
            echo "</h3></div>
            ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["playlistByGatunek"]) ? $context["playlistByGatunek"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 13
                echo "                <div class=\"mp row\">
                    <div style=\"margin:5px, padding:5px\" class=\"mp\">
                        ";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "gatunek", array()), "html", null, true);
                echo "
                        <a  style=\"color:darkslateblue\" class=\"list-group-item\" href=\"../play/";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "video_id", array()), "html", null, true);
                echo "\"><i class=\"fa fa-play\" aria-hidden=\"true\"></i>&nbsp;";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["row"], "tytul", array())), "html", null, true);
                echo "</a>
                        <div class=\"list-group-item\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i>&nbsp; Ocena: ";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "ocena", array()), "html", null, true);
                echo "</div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "playlistByGatunek.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 21,  58 => 17,  52 => 16,  48 => 15,  44 => 13,  40 => 12,  36 => 11,  32 => 9,  28 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "playlistByGatunek.html.twig", "/home/epi/15_galek/public_html/app3/templates/playlistByGatunek.html.twig");
    }
}
