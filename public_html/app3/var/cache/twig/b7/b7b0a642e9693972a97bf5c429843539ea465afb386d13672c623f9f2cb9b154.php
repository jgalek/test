<?php

/* register/addProfile.html.twig */
class __TwigTemplate_84ba33907e243c17b1a70e562280b6b339c25f93c056c3a624cc76705ba87249 extends Twig_Template
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
        $__internal_a63f13dcb5c0fbc6e8b1461bd19be3873eb28967485498c971c5ac1948e22511 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a63f13dcb5c0fbc6e8b1461bd19be3873eb28967485498c971c5ac1948e22511->enter($__internal_a63f13dcb5c0fbc6e8b1461bd19be3873eb28967485498c971c5ac1948e22511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "register/addProfile.html.twig"));

        $__internal_7ac1fdf3a2e9ac135d702f101a60829c0b65762301b80b4e728304509d048cdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ac1fdf3a2e9ac135d702f101a60829c0b65762301b80b4e728304509d048cdb->enter($__internal_7ac1fdf3a2e9ac135d702f101a60829c0b65762301b80b4e728304509d048cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "register/addProfile.html.twig"));

        // line 1
        echo "<div class=\"container \">
    <div class=\"row navbar navbar-default\">
        <h2 style=\"color:darkslateblue\">Witamy w HearIt!</h2>
    </div>
</div>

<div class=\"container \">
    <div class=\"row navbar navbar-default\">
        ";
        // line 9
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_horizontal_layout.html.twig", 1 => "form/form_errors.html.twig"));
        // line 10
        echo "        <h2 style=\"color:darkslateblue\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.register_add"), "html", null, true);
        echo "</h2>
        ";
        // line 11
        if ((false == $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "valid", array()))) {
            // line 12
            echo "            ";
            $this->loadTemplate("default/_single_alert_message.html.twig", "register/addProfile.html.twig", 12)->display(array_merge($context, array("is_single_message" => true, "is_dismissible" => false, "type" => "danger", "message" => "message.form_error")));
            // line 18
            echo "        ";
        }
        // line 19
        echo "        <div class=\"mp col-md-11\">
            ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("register_add")));
        echo "
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            <div class=\"mp col-md-offset-3\" role=\"group\">
                <input type=\"submit\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.save"), "html", null, true);
        echo "\" class=\"form-group btn btn-default\" />
            </div>
            ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            <div role=\"group\" aria-label=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.actions"), "html", null, true);
        echo "\">
                <a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("hearIt_index");
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.back_to_list"), "html", null, true);
        echo "\" class=\"btn btn-default\">
                    <span class=\"fa fa-mail-reply\" aria-hidden=\"true\"></span>
                    ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.back_to_list"), "html", null, true);
        echo "
                </a>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_a63f13dcb5c0fbc6e8b1461bd19be3873eb28967485498c971c5ac1948e22511->leave($__internal_a63f13dcb5c0fbc6e8b1461bd19be3873eb28967485498c971c5ac1948e22511_prof);

        
        $__internal_7ac1fdf3a2e9ac135d702f101a60829c0b65762301b80b4e728304509d048cdb->leave($__internal_7ac1fdf3a2e9ac135d702f101a60829c0b65762301b80b4e728304509d048cdb_prof);

    }

    public function getTemplateName()
    {
        return "register/addProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 29,  75 => 27,  71 => 26,  67 => 25,  62 => 23,  57 => 21,  53 => 20,  50 => 19,  47 => 18,  44 => 12,  42 => 11,  37 => 10,  35 => 9,  25 => 1,);
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
        <h2 style=\"color:darkslateblue\">Witamy w HearIt!</h2>
    </div>
</div>

<div class=\"container \">
    <div class=\"row navbar navbar-default\">
        {% form_theme form with ['bootstrap_3_horizontal_layout.html.twig', 'form/form_errors.html.twig'] %}
        <h2 style=\"color:darkslateblue\">{{ 'title.register_add'|trans }}</h2>
        {% if false == form.vars.valid %}
            {% include 'default/_single_alert_message.html.twig' with {
            is_single_message: true,
            is_dismissible: false,
            type: 'danger',
            message: 'message.form_error',
            } %}
        {% endif %}
        <div class=\"mp col-md-11\">
            {{ form_start(form, { method: 'post', action: url('register_add') }) }}
            {{ form_widget(form) }}
            <div class=\"mp col-md-offset-3\" role=\"group\">
                <input type=\"submit\" value=\"{{ 'action.save'|trans }}\" class=\"form-group btn btn-default\" />
            </div>
            {{ form_end(form) }}
            <div role=\"group\" aria-label=\"{{ 'label.actions'|trans }}\">
                <a href=\"{{ url('hearIt_index') }}\" title=\"{{ 'label.back_to_list'|trans }}\" class=\"btn btn-default\">
                    <span class=\"fa fa-mail-reply\" aria-hidden=\"true\"></span>
                    {{ 'label.back_to_list'|trans }}
                </a>
            </div>
        </div>
    </div>
</div>", "register/addProfile.html.twig", "/home/epi/15_galek/public_html/app3/templates/register/addProfile.html.twig");
    }
}
