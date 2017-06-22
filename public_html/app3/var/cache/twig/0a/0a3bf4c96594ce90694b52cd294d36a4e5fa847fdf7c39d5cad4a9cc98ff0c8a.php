<?php

/* playlistByGatunek.html.twig */
class __TwigTemplate_42086bde6fa83756c4f0f20734133d163ac24ab97d01cdb47a8c9d5401dc6fd5 extends Twig_Template
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
        $__internal_a3eeb997cae5ecabbd0f66f3dfefa76e85811bd8fe506f5cd129de2614f9dcbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3eeb997cae5ecabbd0f66f3dfefa76e85811bd8fe506f5cd129de2614f9dcbf->enter($__internal_a3eeb997cae5ecabbd0f66f3dfefa76e85811bd8fe506f5cd129de2614f9dcbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "playlistByGatunek.html.twig"));

        $__internal_85ac9fea2958e53f6a34a7da7aab31e379d4194150d7755e6594e38fd18745dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85ac9fea2958e53f6a34a7da7aab31e379d4194150d7755e6594e38fd18745dc->enter($__internal_85ac9fea2958e53f6a34a7da7aab31e379d4194150d7755e6594e38fd18745dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "playlistByGatunek.html.twig"));

        // line 1
        echo "<div class=\"container \">
    <div style=\"color:darkslateblue\" class=\"row navbar navbar-default\">
        <h2>Proponowane:</h2>
    </div>
</div>


";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["playlist"]) ? $context["playlist"] : $this->getContext($context, "playlist")));
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
            $context['_seq'] = twig_ensure_traversable((isset($context["playlistByGatunek"]) ? $context["playlistByGatunek"] : $this->getContext($context, "playlistByGatunek")));
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
        
        $__internal_a3eeb997cae5ecabbd0f66f3dfefa76e85811bd8fe506f5cd129de2614f9dcbf->leave($__internal_a3eeb997cae5ecabbd0f66f3dfefa76e85811bd8fe506f5cd129de2614f9dcbf_prof);

        
        $__internal_85ac9fea2958e53f6a34a7da7aab31e379d4194150d7755e6594e38fd18745dc->leave($__internal_85ac9fea2958e53f6a34a7da7aab31e379d4194150d7755e6594e38fd18745dc_prof);

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
        return array (  74 => 21,  64 => 17,  58 => 16,  54 => 15,  50 => 13,  46 => 12,  42 => 11,  38 => 9,  34 => 8,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container \">
    <div style=\"color:darkslateblue\" class=\"row navbar navbar-default\">
        <h2>Proponowane:</h2>
    </div>
</div>


{% for row in playlist %}
    <div class=\"mp container navbar navbar-default\">
        <div class=\"container-fluid\">
            <div class=\"mp list-group-item\"><h3>Playlista: {{ row.gatunek|upper}}</h3></div>
            {% for row in playlistByGatunek %}
                <div class=\"mp row\">
                    <div style=\"margin:5px, padding:5px\" class=\"mp\">
                        {{  row.gatunek }}
                        <a  style=\"color:darkslateblue\" class=\"list-group-item\" href=\"../play/{{  row.video_id }}\"><i class=\"fa fa-play\" aria-hidden=\"true\"></i>&nbsp;{{ row.tytul|upper }}</a>
                        <div class=\"list-group-item\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i>&nbsp; Ocena: {{ row.ocena }}</div>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
{% endfor %}", "playlistByGatunek.html.twig", "/home/epi/15_galek/public_html/app3/templates/playlistByGatunek.html.twig");
    }
}
