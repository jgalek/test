<?php

/* video/deleteVideo.html.twig */
class __TwigTemplate_4170091e3d3f0025bbebfab6de1272e1417034ee06b69b51247fb09a0b451645 extends Twig_Template
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
        $__internal_22821575179d56cea0ef48545ffa83ed9a7fd05072fffa6d6b25ca48fc76f913 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22821575179d56cea0ef48545ffa83ed9a7fd05072fffa6d6b25ca48fc76f913->enter($__internal_22821575179d56cea0ef48545ffa83ed9a7fd05072fffa6d6b25ca48fc76f913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "video/deleteVideo.html.twig"));

        $__internal_af4cd1f9a9a4d71655046f2cf01138db2b774ef2ebb279a1512858cbae750b90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af4cd1f9a9a4d71655046f2cf01138db2b774ef2ebb279a1512858cbae750b90->enter($__internal_af4cd1f9a9a4d71655046f2cf01138db2b774ef2ebb279a1512858cbae750b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "video/deleteVideo.html.twig"));

        // line 1
        echo "<div class=\"mp container navbar navbar-default\">
    <div class=\"container-fluid\">
        <h2 style=\"color:darkslateblue\" >Usuń wideo:</h2>
        <div class=\"row\">
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["userVideo"]) ? $context["userVideo"] : $this->getContext($context, "userVideo")));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 6
            echo "                <div style=\"margin:5px, padding:5px\" class=\"col-md-6 \">
                    <a style=\"color:darkslateblue\" class=\"list-group-item\" href=\"../video/";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "video_id", array()), "html", null, true);
            echo "/delete\"><i class=\"fa fa-play\" aria-hidden=\"true\"></i>&nbsp;";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["row"], "tytul", array())), "html", null, true);
            echo "</a>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "        </div>
    </div>
</div>";
        
        $__internal_22821575179d56cea0ef48545ffa83ed9a7fd05072fffa6d6b25ca48fc76f913->leave($__internal_22821575179d56cea0ef48545ffa83ed9a7fd05072fffa6d6b25ca48fc76f913_prof);

        
        $__internal_af4cd1f9a9a4d71655046f2cf01138db2b774ef2ebb279a1512858cbae750b90->leave($__internal_af4cd1f9a9a4d71655046f2cf01138db2b774ef2ebb279a1512858cbae750b90_prof);

    }

    public function getTemplateName()
    {
        return "video/deleteVideo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 10,  38 => 7,  35 => 6,  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"mp container navbar navbar-default\">
    <div class=\"container-fluid\">
        <h2 style=\"color:darkslateblue\" >Usuń wideo:</h2>
        <div class=\"row\">
            {% for row in userVideo %}
                <div style=\"margin:5px, padding:5px\" class=\"col-md-6 \">
                    <a style=\"color:darkslateblue\" class=\"list-group-item\" href=\"../video/{{ row.video_id }}/delete\"><i class=\"fa fa-play\" aria-hidden=\"true\"></i>&nbsp;{{ row.tytul|upper }}</a>
                </div>
            {% endfor %}
        </div>
    </div>
</div>", "video/deleteVideo.html.twig", "/home/epi/15_galek/public_html/app3/templates/video/deleteVideo.html.twig");
    }
}
