<?php

/* video/addVideo.html.twig */
class __TwigTemplate_5fc3a94c6a76769a3a9d0d9a1fb7578263ccdd673e2df165c869ad00bae2d0d9 extends Twig_Template
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
        $__internal_c7ca2649e66badc354f87da3a4ba5515d15ecbc0dc1569f0de5926e006ba7f0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7ca2649e66badc354f87da3a4ba5515d15ecbc0dc1569f0de5926e006ba7f0e->enter($__internal_c7ca2649e66badc354f87da3a4ba5515d15ecbc0dc1569f0de5926e006ba7f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "video/addVideo.html.twig"));

        $__internal_03c45dbb733e1a43acb96c16e3914bccb12635d4646fd139cda5451addd33d1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03c45dbb733e1a43acb96c16e3914bccb12635d4646fd139cda5451addd33d1b->enter($__internal_03c45dbb733e1a43acb96c16e3914bccb12635d4646fd139cda5451addd33d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "video/addVideo.html.twig"));

        // line 1
        echo "<div class=\"container \">
    <div class=\"row navbar navbar-default\">
        ";
        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_horizontal_layout.html.twig", 1 => "form/form_errors.html.twig"));
        // line 4
        echo "        <h2 style=\"color:darkslateblue\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.video_add"), "html", null, true);
        echo "</h2>
        ";
        // line 5
        if ((false == $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "valid", array()))) {
            // line 6
            echo "            ";
            $this->loadTemplate("default/_single_alert_message.html.twig", "video/addVideo.html.twig", 6)->display(array_merge($context, array("is_single_message" => true, "is_dismissible" => false, "type" => "danger", "message" => "message.form_error")));
            // line 12
            echo "        ";
        }
        // line 13
        echo "        <div class=\"mp col-md-11\">
            ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("video_add")));
        echo "
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            <div class=\"mp col-md-offset-3\" role=\"group\">
                <input type=\"submit\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.save"), "html", null, true);
        echo "\" class=\"form-group btn btn-default\" />
            </div>
            ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            <div role=\"group\" aria-label=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.actions"), "html", null, true);
        echo "\">
                <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("profil_index");
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.back_to_list"), "html", null, true);
        echo "\" class=\"btn btn-default\">
                    <span class=\"fa fa-mail-reply\" aria-hidden=\"true\"></span>
                    ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.back_to_list"), "html", null, true);
        echo "
                </a>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_c7ca2649e66badc354f87da3a4ba5515d15ecbc0dc1569f0de5926e006ba7f0e->leave($__internal_c7ca2649e66badc354f87da3a4ba5515d15ecbc0dc1569f0de5926e006ba7f0e_prof);

        
        $__internal_03c45dbb733e1a43acb96c16e3914bccb12635d4646fd139cda5451addd33d1b->leave($__internal_03c45dbb733e1a43acb96c16e3914bccb12635d4646fd139cda5451addd33d1b_prof);

    }

    public function getTemplateName()
    {
        return "video/addVideo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 23,  69 => 21,  65 => 20,  61 => 19,  56 => 17,  51 => 15,  47 => 14,  44 => 13,  41 => 12,  38 => 6,  36 => 5,  31 => 4,  29 => 3,  25 => 1,);
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
    <div class=\"row navbar navbar-default\">
        {% form_theme form with ['bootstrap_3_horizontal_layout.html.twig', 'form/form_errors.html.twig'] %}
        <h2 style=\"color:darkslateblue\">{{ 'title.video_add'|trans }}</h2>
        {% if false == form.vars.valid %}
            {% include 'default/_single_alert_message.html.twig' with {
            is_single_message: true,
            is_dismissible: false,
            type: 'danger',
            message: 'message.form_error',
            } %}
        {% endif %}
        <div class=\"mp col-md-11\">
            {{ form_start(form, { method: 'post', action: url('video_add') }) }}
            {{ form_widget(form) }}
            <div class=\"mp col-md-offset-3\" role=\"group\">
                <input type=\"submit\" value=\"{{ 'action.save'|trans }}\" class=\"form-group btn btn-default\" />
            </div>
            {{ form_end(form) }}
            <div role=\"group\" aria-label=\"{{ 'label.actions'|trans }}\">
                <a href=\"{{ url('profil_index') }}\" title=\"{{ 'label.back_to_list'|trans }}\" class=\"btn btn-default\">
                    <span class=\"fa fa-mail-reply\" aria-hidden=\"true\"></span>
                    {{ 'label.back_to_list'|trans }}
                </a>
            </div>
        </div>
    </div>
</div>", "video/addVideo.html.twig", "/home/epi/15_galek/public_html/app3/templates/video/addVideo.html.twig");
    }
}
