<?php

/* bestVideos.html.twig */
class __TwigTemplate_615b047743c7505d8343ee55c7223924086392f2cdbdda9ded4df686e23b0b54 extends Twig_Template
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
        $__internal_74f6b809938fa69e6c0e19f0667c41d06c5a1c48b62e0b0802490f540bdadce3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74f6b809938fa69e6c0e19f0667c41d06c5a1c48b62e0b0802490f540bdadce3->enter($__internal_74f6b809938fa69e6c0e19f0667c41d06c5a1c48b62e0b0802490f540bdadce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bestVideos.html.twig"));

        $__internal_be6e116a43fa5c6637ee239a2c80695130921f12f307e85dd1ee3adbadb32e7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be6e116a43fa5c6637ee239a2c80695130921f12f307e85dd1ee3adbadb32e7d->enter($__internal_be6e116a43fa5c6637ee239a2c80695130921f12f307e85dd1ee3adbadb32e7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bestVideos.html.twig"));

        // line 1
        echo "<div class=\"mp container navbar navbar-default\">
    <div class=\"container-fluid\">
        <h2 style=\"color:darkslateblue\" >Najwyżej oceniane widea użytkowników:</h2>
        <div class=\"mp row\">
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hearIt"]) ? $context["hearIt"] : $this->getContext($context, "hearIt")));
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
        
        $__internal_74f6b809938fa69e6c0e19f0667c41d06c5a1c48b62e0b0802490f540bdadce3->leave($__internal_74f6b809938fa69e6c0e19f0667c41d06c5a1c48b62e0b0802490f540bdadce3_prof);

        
        $__internal_be6e116a43fa5c6637ee239a2c80695130921f12f307e85dd1ee3adbadb32e7d->leave($__internal_be6e116a43fa5c6637ee239a2c80695130921f12f307e85dd1ee3adbadb32e7d_prof);

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
        return array (  57 => 12,  48 => 9,  42 => 8,  38 => 7,  35 => 6,  31 => 5,  25 => 1,);
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
        <h2 style=\"color:darkslateblue\" >Najwyżej oceniane widea użytkowników:</h2>
        <div class=\"mp row\">
            {% for row in hearIt %}
                <div style=\"margin:5px, padding:5px\" class=\"mp\">
                    <div class=\"list-group-item\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i>&nbsp; Autor {{ row.pseudonim|upper }} </div>
                    <a  style=\"color:darkslateblue\" class=\"list-group-item\" href=\"../play/{{  row.video_id }}\"><i class=\"fa fa-play\" aria-hidden=\"true\"></i>&nbsp;{{ row.tytul|upper }}</a>
                    <div class=\"list-group-item\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i>&nbsp; Ocena: {{ row.ocena }}</div>
                </div>
            {% endfor %}
        </div>
    </div>
</div>", "bestVideos.html.twig", "/home/epi/15_galek/public_html/app3/templates/bestVideos.html.twig");
    }
}
