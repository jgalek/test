<?php

/* form/form_errors.html.twig */
class __TwigTemplate_9d6a33add82809b005b3ead3e854f79e30c38503e822e3d065eb4a72f44291c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d33331054129846dcd93e79863089528b0a3d2e514307b513bbce9471333899 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d33331054129846dcd93e79863089528b0a3d2e514307b513bbce9471333899->enter($__internal_4d33331054129846dcd93e79863089528b0a3d2e514307b513bbce9471333899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/form_errors.html.twig"));

        $__internal_28c1a1cb52b1268ac70349a5411c55acd2b4b4bc99071a63732c1e0a34f0da21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28c1a1cb52b1268ac70349a5411c55acd2b4b4bc99071a63732c1e0a34f0da21->enter($__internal_28c1a1cb52b1268ac70349a5411c55acd2b4b4bc99071a63732c1e0a34f0da21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/form_errors.html.twig"));

        // line 5
        echo "
";
        // line 6
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_4d33331054129846dcd93e79863089528b0a3d2e514307b513bbce9471333899->leave($__internal_4d33331054129846dcd93e79863089528b0a3d2e514307b513bbce9471333899_prof);

        
        $__internal_28c1a1cb52b1268ac70349a5411c55acd2b4b4bc99071a63732c1e0a34f0da21->leave($__internal_28c1a1cb52b1268ac70349a5411c55acd2b4b4bc99071a63732c1e0a34f0da21_prof);

    }

    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_79f6a4f610de1b702029b5b2b54819ce577db1c94e29262bb1b949f546c890b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79f6a4f610de1b702029b5b2b54819ce577db1c94e29262bb1b949f546c890b8->enter($__internal_79f6a4f610de1b702029b5b2b54819ce577db1c94e29262bb1b949f546c890b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_17f5c17ec592f080776b895d287fff5074395b0a6ce1be71f98e21f46e14a63a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17f5c17ec592f080776b895d287fff5074395b0a6ce1be71f98e21f46e14a63a->enter($__internal_17f5c17ec592f080776b895d287fff5074395b0a6ce1be71f98e21f46e14a63a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 7
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 8
            if ((isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
                echo "<div class=\"has-error\">";
            }
            // line 9
            echo "    ";
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 10
            echo "        <ul class=\"list-unstyled\">";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 12
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "</ul>
        ";
            // line 15
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
            // line 16
            echo "        ";
            if ((isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
                echo "</div>";
            }
        }
        
        $__internal_17f5c17ec592f080776b895d287fff5074395b0a6ce1be71f98e21f46e14a63a->leave($__internal_17f5c17ec592f080776b895d287fff5074395b0a6ce1be71f98e21f46e14a63a_prof);

        
        $__internal_79f6a4f610de1b702029b5b2b54819ce577db1c94e29262bb1b949f546c890b8->leave($__internal_79f6a4f610de1b702029b5b2b54819ce577db1c94e29262bb1b949f546c890b8_prof);

    }

    public function getTemplateName()
    {
        return "form/form_errors.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  84 => 16,  78 => 15,  75 => 14,  67 => 12,  63 => 11,  61 => 10,  54 => 9,  50 => 8,  47 => 7,  29 => 6,  26 => 5,);
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
    Custom form errors template for bootstrap 3 tempate (bootstrap_3_layout.html.twig).
    Changes were required for proper global error render.
#}

{% block form_errors %}
    {% if errors|length > 0 -%}
        {% if compound %}<div class=\"has-error\">{% endif %}
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
        <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
        {% if form.parent %}</span>{% else %}</div>{% endif %}
        {% if compound %}</div>{% endif %}
    {%- endif %}
{% endblock %}", "form/form_errors.html.twig", "C:\\Users\\Justyna\\PhpstormProjects\\untitled1\\app3\\templates\\form\\form_errors.html.twig");
    }
}
