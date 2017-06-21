<?php

/* default/_single_alert_message.html.twig */
class __TwigTemplate_e7287503922d43a5ec8ab1643c94cc8b3985befab7e4b33a302d753e31f2d4bd extends Twig_Template
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
        $__internal_b6b2982bb5b400ccc6e426da01c6a5f8e4f245fb05afb2422388e22b46aa77cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6b2982bb5b400ccc6e426da01c6a5f8e4f245fb05afb2422388e22b46aa77cc->enter($__internal_b6b2982bb5b400ccc6e426da01c6a5f8e4f245fb05afb2422388e22b46aa77cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/_single_alert_message.html.twig"));

        $__internal_4ff1157cc163be049210d002c5140579b9823bd0d8a5034cecb95dbf58b0597c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ff1157cc163be049210d002c5140579b9823bd0d8a5034cecb95dbf58b0597c->enter($__internal_4ff1157cc163be049210d002c5140579b9823bd0d8a5034cecb95dbf58b0597c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/_single_alert_message.html.twig"));

        // line 8
        echo "
";
        // line 10
        if (((array_key_exists("is_single_message", $context)) ? (_twig_default_filter((isset($context["is_single_message"]) ? $context["is_single_message"] : $this->getContext($context, "is_single_message")), true)) : (true))) {
            // line 11
            echo "<div class=\"x_content bs-example-popovers\">
    ";
        }
        // line 13
        echo "    <div class=\"alert alert-dismissible alert-";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" role=\"alert\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
        </button>
        ";
        // line 17
        if ( !($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"))) === (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")))) {
            // line 18
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"))), "html", null, true);
            echo "
        ";
        } else {
            // line 20
            echo "            ";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "
        ";
        }
        // line 22
        echo "    </div>
    ";
        // line 23
        if (((array_key_exists("is_single_message", $context)) ? (_twig_default_filter((isset($context["is_single_message"]) ? $context["is_single_message"] : $this->getContext($context, "is_single_message")), true)) : (true))) {
            // line 24
            echo "</div>
";
        }
        
        $__internal_b6b2982bb5b400ccc6e426da01c6a5f8e4f245fb05afb2422388e22b46aa77cc->leave($__internal_b6b2982bb5b400ccc6e426da01c6a5f8e4f245fb05afb2422388e22b46aa77cc_prof);

        
        $__internal_4ff1157cc163be049210d002c5140579b9823bd0d8a5034cecb95dbf58b0597c->leave($__internal_4ff1157cc163be049210d002c5140579b9823bd0d8a5034cecb95dbf58b0597c_prof);

    }

    public function getTemplateName()
    {
        return "default/_single_alert_message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 24,  59 => 23,  56 => 22,  50 => 20,  44 => 18,  42 => 17,  34 => 13,  30 => 11,  28 => 10,  25 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
Single alert message.

parameters:
* `type`: message type (success|info|warning|danger)
* `message`: message
#}

{# Bootstrap alert, see http://getbootstrap.com/components/#alerts #}
{% if is_single_message|default(true) %}
<div class=\"x_content bs-example-popovers\">
    {% endif %}
    <div class=\"alert alert-dismissible alert-{{ type }}\" role=\"alert\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
        </button>
        {% if message|trans is not same as(message) %}
            {{ message|trans }}
        {% else %}
            {{ message }}
        {% endif %}
    </div>
    {% if is_single_message|default(true) %}
</div>
{% endif %}", "default/_single_alert_message.html.twig", "C:\\Users\\Justyna\\PhpstormProjects\\untitled1\\app3\\templates\\default\\_single_alert_message.html.twig");
    }
}
