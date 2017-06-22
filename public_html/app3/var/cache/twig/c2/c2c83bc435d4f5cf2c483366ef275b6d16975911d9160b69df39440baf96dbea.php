<?php

/* form/form_errors.html.twig */
class __TwigTemplate_5dc949c3913582bfd83cc04646fa12a02d697b38dedf1099623e9ae42f07eb82 extends Twig_Template
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
        $__internal_d3506652e4c721e3dd6e7359f7825ba0b54750b2c8fb358ae2dd4116de237e0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3506652e4c721e3dd6e7359f7825ba0b54750b2c8fb358ae2dd4116de237e0c->enter($__internal_d3506652e4c721e3dd6e7359f7825ba0b54750b2c8fb358ae2dd4116de237e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/form_errors.html.twig"));

        $__internal_f6c765bfedb7c7bb0a4b254b1e9e6c0410527b77c51ba5d6e30763b1601c3392 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6c765bfedb7c7bb0a4b254b1e9e6c0410527b77c51ba5d6e30763b1601c3392->enter($__internal_f6c765bfedb7c7bb0a4b254b1e9e6c0410527b77c51ba5d6e30763b1601c3392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/form_errors.html.twig"));

        // line 5
        echo "
";
        // line 6
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_d3506652e4c721e3dd6e7359f7825ba0b54750b2c8fb358ae2dd4116de237e0c->leave($__internal_d3506652e4c721e3dd6e7359f7825ba0b54750b2c8fb358ae2dd4116de237e0c_prof);

        
        $__internal_f6c765bfedb7c7bb0a4b254b1e9e6c0410527b77c51ba5d6e30763b1601c3392->leave($__internal_f6c765bfedb7c7bb0a4b254b1e9e6c0410527b77c51ba5d6e30763b1601c3392_prof);

    }

    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_5ee132cb7daeb02d0be22187e57aafe8a7be04bea6df2071048663bc2e27ec49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ee132cb7daeb02d0be22187e57aafe8a7be04bea6df2071048663bc2e27ec49->enter($__internal_5ee132cb7daeb02d0be22187e57aafe8a7be04bea6df2071048663bc2e27ec49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_b52b03638200d5e431f153c065de6e2c7add51f31a7572baa172c690c293c8ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b52b03638200d5e431f153c065de6e2c7add51f31a7572baa172c690c293c8ee->enter($__internal_b52b03638200d5e431f153c065de6e2c7add51f31a7572baa172c690c293c8ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_b52b03638200d5e431f153c065de6e2c7add51f31a7572baa172c690c293c8ee->leave($__internal_b52b03638200d5e431f153c065de6e2c7add51f31a7572baa172c690c293c8ee_prof);

        
        $__internal_5ee132cb7daeb02d0be22187e57aafe8a7be04bea6df2071048663bc2e27ec49->leave($__internal_5ee132cb7daeb02d0be22187e57aafe8a7be04bea6df2071048663bc2e27ec49_prof);

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
{% endblock %}", "form/form_errors.html.twig", "/home/epi/15_galek/public_html/app3/templates/form/form_errors.html.twig");
    }
}
