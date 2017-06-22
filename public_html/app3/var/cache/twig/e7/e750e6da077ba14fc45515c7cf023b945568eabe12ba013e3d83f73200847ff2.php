<?php

/* bestPlaylist.html.twig */
class __TwigTemplate_c5670979cee17ad55da89d99ba2edee870ff109a8f5266f169c8ffb4795edf76 extends Twig_Template
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
        <h2>Najwyżej oceniane playlisty urzytkowników:</h2>
    </div>
</div>

";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["playlistByUser"]) ? $context["playlistByUser"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 8
            echo "    <div class=\"mp container navbar navbar-default\">
        <div class=\"container-fluid\">
            <div class=\"mp list-group-item\"><h3>Playlista: ";
            // line 10
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["row"], "nazwa", array())), "html", null, true);
            echo "</h3></div>
            <div class=\"mp list-group-item\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i>&nbsp; Ocena: ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "ocena", array()), "html", null, true);
            echo " </div>
            <div class=\"mp row\">
                ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["playlistByUser"]) ? $context["playlistByUser"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 14
                echo "                    <a style=\"color:darkslateblue\"class=\"list-group-item\" href=\"../play/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "video_id", array()), "html", null, true);
                echo "\"><i class=\"fa fa-play\" aria-hidden=\"true\"></i>&nbsp;";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["row"], "tytul", array())), "html", null, true);
                echo "</a>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "            </div>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "bestPlaylist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 16,  48 => 14,  44 => 13,  39 => 11,  35 => 10,  31 => 8,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "bestPlaylist.html.twig", "/home/epi/15_galek/public_html/app3/templates/bestPlaylist.html.twig");
    }
}
