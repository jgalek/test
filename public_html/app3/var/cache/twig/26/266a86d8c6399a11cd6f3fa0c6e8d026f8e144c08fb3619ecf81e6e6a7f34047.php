<?php

/* default/_flash_messages.html.twig */
class __TwigTemplate_c5a31965a37615f049bec2eb71092c9f1a0af589ed9e187a6e3305c7a98ed7d8 extends Twig_Template
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
        $__internal_8ed8490bc627c607d5492ccbed762cc323ac6d7ef223447d45d419f4f8300570 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ed8490bc627c607d5492ccbed762cc323ac6d7ef223447d45d419f4f8300570->enter($__internal_8ed8490bc627c607d5492ccbed762cc323ac6d7ef223447d45d419f4f8300570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/_flash_messages.html.twig"));

        $__internal_a326bd1ffab654e569ecc7f2ba6a80bc9f1653aa5c413e8c4a2aaf9d20ef8815 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a326bd1ffab654e569ecc7f2ba6a80bc9f1653aa5c413e8c4a2aaf9d20ef8815->enter($__internal_a326bd1ffab654e569ecc7f2ba6a80bc9f1653aa5c413e8c4a2aaf9d20ef8815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/_flash_messages.html.twig"));

        // line 1
        if ( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "peekAll", array()))) {
            // line 2
            echo "    <div class=\"x_content bs-example-popovers\">
        ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["messages"]) {
                // line 4
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 5
                    echo "                ";
                    $this->loadTemplate("default/_single_alert_message.html.twig", "default/_flash_messages.html.twig", 5)->display(array_merge($context, array("is_single_message" => false, "is_dismissible" => true, "type" => $this->getAttribute(                    // line 8
$context["message"], "type", array()), "message" => $this->getAttribute(                    // line 9
$context["message"], "message", array()))));
                    // line 11
                    echo "            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 12
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "    </div>
";
        }
        
        $__internal_8ed8490bc627c607d5492ccbed762cc323ac6d7ef223447d45d419f4f8300570->leave($__internal_8ed8490bc627c607d5492ccbed762cc323ac6d7ef223447d45d419f4f8300570_prof);

        
        $__internal_a326bd1ffab654e569ecc7f2ba6a80bc9f1653aa5c413e8c4a2aaf9d20ef8815->leave($__internal_a326bd1ffab654e569ecc7f2ba6a80bc9f1653aa5c413e8c4a2aaf9d20ef8815_prof);

    }

    public function getTemplateName()
    {
        return "default/_flash_messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 13,  84 => 12,  70 => 11,  68 => 9,  67 => 8,  65 => 5,  47 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if app.session.flashBag.peekAll is not empty %}
    <div class=\"x_content bs-example-popovers\">
        {% for messages in app.session.flashBag.all %}
            {% for message in messages %}
                {%  include 'default/_single_alert_message.html.twig' with {
                is_single_message: false,
                is_dismissible: true,
                type: message.type,
                message: message.message
                } %}
            {% endfor %}
        {% endfor %}
    </div>
{% endif %}", "default/_flash_messages.html.twig", "/home/epi/15_galek/public_html/app3/templates/default/_flash_messages.html.twig");
    }
}
