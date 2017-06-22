<?php

/* bestPlaylist.html.twig */
class __TwigTemplate_79850e5c4f05f71aa6873bc4bf3726453c35a7084ed93552699d1c4d4e04e752 extends Twig_Template
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
        $__internal_2a8d1e2868aca00abb87d18b3929c8022273f5cfdcc639c5e9085229b133ed8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a8d1e2868aca00abb87d18b3929c8022273f5cfdcc639c5e9085229b133ed8b->enter($__internal_2a8d1e2868aca00abb87d18b3929c8022273f5cfdcc639c5e9085229b133ed8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bestPlaylist.html.twig"));

        $__internal_7670f133f598b0503c064efaa30e7a65e3f63edb21d6790d45042e3fb7fb8a44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7670f133f598b0503c064efaa30e7a65e3f63edb21d6790d45042e3fb7fb8a44->enter($__internal_7670f133f598b0503c064efaa30e7a65e3f63edb21d6790d45042e3fb7fb8a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bestPlaylist.html.twig"));

        // line 1
        echo "<div class=\"container \">
    <div style=\"color:darkslateblue\" class=\"row navbar navbar-default\">
        <h2>Najwyżej oceniane playlisty urzytkowników:</h2>
    </div>
</div>

";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["playlistByUser"]) ? $context["playlistByUser"] : $this->getContext($context, "playlistByUser")));
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
            $context['_seq'] = twig_ensure_traversable((isset($context["playlistByUser"]) ? $context["playlistByUser"] : $this->getContext($context, "playlistByUser")));
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
        
        $__internal_2a8d1e2868aca00abb87d18b3929c8022273f5cfdcc639c5e9085229b133ed8b->leave($__internal_2a8d1e2868aca00abb87d18b3929c8022273f5cfdcc639c5e9085229b133ed8b_prof);

        
        $__internal_7670f133f598b0503c064efaa30e7a65e3f63edb21d6790d45042e3fb7fb8a44->leave($__internal_7670f133f598b0503c064efaa30e7a65e3f63edb21d6790d45042e3fb7fb8a44_prof);

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
        return array (  65 => 16,  54 => 14,  50 => 13,  45 => 11,  41 => 10,  37 => 8,  33 => 7,  25 => 1,);
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
        <h2>Najwyżej oceniane playlisty urzytkowników:</h2>
    </div>
</div>

{% for row in playlistByUser %}
    <div class=\"mp container navbar navbar-default\">
        <div class=\"container-fluid\">
            <div class=\"mp list-group-item\"><h3>Playlista: {{ row.nazwa|upper}}</h3></div>
            <div class=\"mp list-group-item\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i>&nbsp; Ocena: {{ row.ocena }} </div>
            <div class=\"mp row\">
                {% for row in playlistByUser %}
                    <a style=\"color:darkslateblue\"class=\"list-group-item\" href=\"../play/{{ row.video_id }}\"><i class=\"fa fa-play\" aria-hidden=\"true\"></i>&nbsp;{{ row.tytul|upper }}</a>
                {% endfor %}
            </div>
        </div>
    </div>
{% endfor %}
", "bestPlaylist.html.twig", "/home/epi/15_galek/public_html/app3/templates/bestPlaylist.html.twig");
    }
}
