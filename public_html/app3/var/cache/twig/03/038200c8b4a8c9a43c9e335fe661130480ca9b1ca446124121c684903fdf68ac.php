<?php

/* form/form_errors.html.twig */
class __TwigTemplate_5968fc115baa97b64e26b688018a895383d4af69ddb2db68263203345e6b2d5d extends Twig_Template
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
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('form_errors', $context, $blocks);
    }

    public function block_form_errors($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            // line 8
            if ((isset($context["compound"]) ? $context["compound"] : null)) {
                echo "<div class=\"has-error\">";
            }
            // line 9
            echo "    ";
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 10
            echo "        <ul class=\"list-unstyled\">";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
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
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
            // line 16
            echo "        ";
            if ((isset($context["compound"]) ? $context["compound"] : null)) {
                echo "</div>";
            }
        }
    }

    public function getTemplateName()
    {
        return "form/form_errors.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 16,  60 => 15,  57 => 14,  49 => 12,  45 => 11,  43 => 10,  36 => 9,  32 => 8,  29 => 7,  23 => 6,  20 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "form/form_errors.html.twig", "/home/epi/15_galek/public_html/app3/templates/form/form_errors.html.twig");
    }
}
