<?php

/* register/editProfile.html.twig */
class __TwigTemplate_879ecdb1a75cd299ca8169080b2423faacc7d02a044d1e1c57e4b03128a7a40d extends Twig_Template
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
        $__internal_7661356c7469d6d507755d10136cc9c9b41e273055b95329036fa0fa22cef9fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7661356c7469d6d507755d10136cc9c9b41e273055b95329036fa0fa22cef9fe->enter($__internal_7661356c7469d6d507755d10136cc9c9b41e273055b95329036fa0fa22cef9fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "register/editProfile.html.twig"));

        $__internal_35488e22b6d8f553157f33dbbc29d8c9ea72f3982aba4325e9e7d15229d04fc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35488e22b6d8f553157f33dbbc29d8c9ea72f3982aba4325e9e7d15229d04fc1->enter($__internal_35488e22b6d8f553157f33dbbc29d8c9ea72f3982aba4325e9e7d15229d04fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "register/editProfile.html.twig"));

        // line 1
        echo "<div class=\"container \">
    <div class=\"row navbar navbar-default\">
        ";
        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_horizontal_layout.html.twig", 1 => "form/form_errors.html.twig"));
        // line 4
        echo "        <h2 style=\"color:darkslateblue\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.register_edit"), "html", null, true);
        echo "</h2>
        ";
        // line 5
        if ((false == $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "valid", array()))) {
            // line 6
            echo "            ";
            $this->loadTemplate("default/_single_alert_message.html.twig", "register/editProfile.html.twig", 6)->display(array_merge($context, array("is_single_message" => true, "is_dismissible" => false, "type" => "danger", "message" => "message.form_error")));
            // line 12
            echo "        ";
        }
        // line 13
        echo "        <div class=\"mp col-md-11\">
            ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("register_edit")));
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("hearIt_index");
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
        
        $__internal_7661356c7469d6d507755d10136cc9c9b41e273055b95329036fa0fa22cef9fe->leave($__internal_7661356c7469d6d507755d10136cc9c9b41e273055b95329036fa0fa22cef9fe_prof);

        
        $__internal_35488e22b6d8f553157f33dbbc29d8c9ea72f3982aba4325e9e7d15229d04fc1->leave($__internal_35488e22b6d8f553157f33dbbc29d8c9ea72f3982aba4325e9e7d15229d04fc1_prof);

    }

    public function getTemplateName()
    {
        return "register/editProfile.html.twig";
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
        <h2 style=\"color:darkslateblue\">{{ 'title.register_edit'|trans }}</h2>
        {% if false == form.vars.valid %}
            {% include 'default/_single_alert_message.html.twig' with {
            is_single_message: true,
            is_dismissible: false,
            type: 'danger',
            message: 'message.form_error',
            } %}
        {% endif %}
        <div class=\"mp col-md-11\">
            {{ form_start(form, { method: 'post', action: url('register_edit') }) }}
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
</div>", "register/editProfile.html.twig", "/home/epi/15_galek/public_html/app3/templates/register/editProfile.html.twig");
    }
}
