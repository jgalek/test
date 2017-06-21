<?php

/* auth/login.html.twig */
class __TwigTemplate_1c39b1895479e953c96ff4b39c55d2957be58e7e88af9b88e01eea0468f17cd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseHearIt.html.twig", "auth/login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseHearIt.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d937e18b1ec0588d860f1c4c3f994d9993da1e7bb92426f869f3e6bf3de1f391 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d937e18b1ec0588d860f1c4c3f994d9993da1e7bb92426f869f3e6bf3de1f391->enter($__internal_d937e18b1ec0588d860f1c4c3f994d9993da1e7bb92426f869f3e6bf3de1f391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "auth/login.html.twig"));

        $__internal_2e3d544c6e87cf4aebfe66ec591335979233adac4049ecb1f82187a34966ca54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e3d544c6e87cf4aebfe66ec591335979233adac4049ecb1f82187a34966ca54->enter($__internal_2e3d544c6e87cf4aebfe66ec591335979233adac4049ecb1f82187a34966ca54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "auth/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d937e18b1ec0588d860f1c4c3f994d9993da1e7bb92426f869f3e6bf3de1f391->leave($__internal_d937e18b1ec0588d860f1c4c3f994d9993da1e7bb92426f869f3e6bf3de1f391_prof);

        
        $__internal_2e3d544c6e87cf4aebfe66ec591335979233adac4049ecb1f82187a34966ca54->leave($__internal_2e3d544c6e87cf4aebfe66ec591335979233adac4049ecb1f82187a34966ca54_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_87603bdd50849a3f6c128e7d1545a003e47ee3298f2f9056b595957919809e03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87603bdd50849a3f6c128e7d1545a003e47ee3298f2f9056b595957919809e03->enter($__internal_87603bdd50849a3f6c128e7d1545a003e47ee3298f2f9056b595957919809e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4dd0800f52a957d08eae307ed4cf57d798be3d717acfc810fa71a3be57bb358b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dd0800f52a957d08eae307ed4cf57d798be3d717acfc810fa71a3be57bb358b->enter($__internal_4dd0800f52a957d08eae307ed4cf57d798be3d717acfc810fa71a3be57bb358b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_horizontal_layout.html.twig", 1 => "form/form_errors.html.twig"));
        // line 4
        echo "    ";
        $this->displayBlock('header', $context, $blocks);
        // line 45
        echo "    <div class=\"container \">
        <div class=\"row navbar navbar-default\">
            <h1 style=\"color:darkslateblue\">";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.auth_login"), "html", null, true);
        echo "</h1>
            ";
        // line 48
        if ((array_key_exists("error", $context) && twig_length_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))))) {
            // line 49
            echo "                ";
            $this->loadTemplate("default/_single_alert_message.html.twig", "auth/login.html.twig", 49)->display(array_merge($context, array("is_single_message" => true, "is_dismissible" => false, "type" => "danger", "message" =>             // line 53
(isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")))));
            // line 55
            echo "            ";
        }
        // line 56
        echo "            <div class=\"mp col-md-8 col-md-offset-2\">
                ";
        // line 57
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("class" => "col-sm-offset-0 col-sm-1 list-group-item text-center form-horizontal", "method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("auth_login_check")));
        echo "
                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                <input type=\"submit\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.login"), "html", null, true);
        echo "\" class=\"mp col-sm-offset-2 col-sm-5 list-group-item text-center \"\" />
                ";
        // line 60
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_4dd0800f52a957d08eae307ed4cf57d798be3d717acfc810fa71a3be57bb358b->leave($__internal_4dd0800f52a957d08eae307ed4cf57d798be3d717acfc810fa71a3be57bb358b_prof);

        
        $__internal_87603bdd50849a3f6c128e7d1545a003e47ee3298f2f9056b595957919809e03->leave($__internal_87603bdd50849a3f6c128e7d1545a003e47ee3298f2f9056b595957919809e03_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_09218d2685d85ebd153bd264ac48b0b54fc7c71636b83706eb674221b7f9b7fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09218d2685d85ebd153bd264ac48b0b54fc7c71636b83706eb674221b7f9b7fa->enter($__internal_09218d2685d85ebd153bd264ac48b0b54fc7c71636b83706eb674221b7f9b7fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_126f71232a5925d661036333f8feca0a53e74b4289b59f75843c2955830d2cca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_126f71232a5925d661036333f8feca0a53e74b4289b59f75843c2955830d2cca->enter($__internal_126f71232a5925d661036333f8feca0a53e74b4289b59f75843c2955830d2cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 5
        echo "        <div class=\"mp container navbar navbar-default\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div style=\"margin:5px, padding:5px\" class=\"list-group col-md-3 col-md-offset-1\">
                        <a class=\"list-group-item\" href=\"../hearIt\"><i class=\"fa fa-home fa-fw\"></i>&nbsp; Home</a>
                        <a class=\"list-group-item\" href=\"../playlisty\"><i class=\"fa fa-play fa-fw\"></i>&nbsp; Playlisty</a>
                        <a class=\"list-group-item\" href=\"../rankingi\"><i class=\"fa fa-trophy fa-fw\"></i>&nbsp; Rankingi</a>
                    </div>
                    <div style=\"color:darkslateblue\" class=\"col-md-3 col-md-offset-0\">
                        <h1>HearIt!</h1>
                    </div>
                    <div class=\"col-md-3 col-md-offset-1\">
                        <div class=\"container-fluid\">
                            <div class=\"btn-group pull-right\" role=\"group\" aria-label=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.actions"), "html", null, true);
        echo "\">
                                ";
        // line 19
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 20
            echo "                                    <h4>Zalogowano jako Admin</h4>
                                    <a class=\"mp btn btn-default  col-md-offset-3\" href=\"";
            // line 21
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("auth_logout");
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("auth.logout.label"), "html", null, true);
            echo "\">
                                        ";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("auth.logout.label"), "html", null, true);
            echo "
                                    </a>
                                ";
        } else {
            // line 25
            echo "                                    <a class=\"mp list-group-item text-center \" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("auth_login");
            echo "\"  title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("auth.login.label"), "html", null, true);
            echo "\">
                                        <i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i> ";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("auth.login.label"), "html", null, true);
            echo "
                                    </a>
                                    <a class=\"mp list-group-item text-center\" href=\"../register\"><i class=\"fa fa-user-plus\" aria-hidden=\"true\"></i>&nbsp; Zarejestruj się</a>
                                ";
        }
        // line 30
        echo "                            </div>
                        </div>
                    </div>
                    <form class=\"col-md-10 col-md-offset-1 form-horizontal\" role=\"form\" action=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("wyszukiwarka_sresult");
        echo "\" method=\"get\">
                        <div class=\"form-group\">
                            ";
        // line 36
        echo "                            ";
        // line 37
        echo "                            <input type=\"text\" class=\"form-control\" id=\"autor\" name=\"autor\" placeholder=\"search HearIt\">
                        </div>
                        ";
        // line 40
        echo "                    </form>
                </div>
            </div>
        </div>
    ";
        
        $__internal_126f71232a5925d661036333f8feca0a53e74b4289b59f75843c2955830d2cca->leave($__internal_126f71232a5925d661036333f8feca0a53e74b4289b59f75843c2955830d2cca_prof);

        
        $__internal_09218d2685d85ebd153bd264ac48b0b54fc7c71636b83706eb674221b7f9b7fa->leave($__internal_09218d2685d85ebd153bd264ac48b0b54fc7c71636b83706eb674221b7f9b7fa_prof);

    }

    public function getTemplateName()
    {
        return "auth/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 40,  174 => 37,  172 => 36,  167 => 33,  162 => 30,  155 => 26,  148 => 25,  142 => 22,  136 => 21,  133 => 20,  131 => 19,  127 => 18,  112 => 5,  103 => 4,  88 => 60,  84 => 59,  80 => 58,  76 => 57,  73 => 56,  70 => 55,  68 => 53,  66 => 49,  64 => 48,  60 => 47,  56 => 45,  53 => 4,  50 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'baseHearIt.html.twig' %}
{% block body %}
    {% form_theme form with ['bootstrap_3_horizontal_layout.html.twig', 'form/form_errors.html.twig'] %}
    {% block header %}
        <div class=\"mp container navbar navbar-default\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div style=\"margin:5px, padding:5px\" class=\"list-group col-md-3 col-md-offset-1\">
                        <a class=\"list-group-item\" href=\"../hearIt\"><i class=\"fa fa-home fa-fw\"></i>&nbsp; Home</a>
                        <a class=\"list-group-item\" href=\"../playlisty\"><i class=\"fa fa-play fa-fw\"></i>&nbsp; Playlisty</a>
                        <a class=\"list-group-item\" href=\"../rankingi\"><i class=\"fa fa-trophy fa-fw\"></i>&nbsp; Rankingi</a>
                    </div>
                    <div style=\"color:darkslateblue\" class=\"col-md-3 col-md-offset-0\">
                        <h1>HearIt!</h1>
                    </div>
                    <div class=\"col-md-3 col-md-offset-1\">
                        <div class=\"container-fluid\">
                            <div class=\"btn-group pull-right\" role=\"group\" aria-label=\"{{ 'label.actions'|trans }}\">
                                {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                                    <h4>Zalogowano jako Admin</h4>
                                    <a class=\"mp btn btn-default  col-md-offset-3\" href=\"{{ url('auth_logout') }}\" title=\"{{ 'auth.logout.label'|trans }}\">
                                        {{ 'auth.logout.label'|trans }}
                                    </a>
                                {% else %}
                                    <a class=\"mp list-group-item text-center \" href=\"{{ url('auth_login') }}\"  title=\"{{ 'auth.login.label'|trans }}\">
                                        <i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i> {{ 'auth.login.label'|trans }}
                                    </a>
                                    <a class=\"mp list-group-item text-center\" href=\"../register\"><i class=\"fa fa-user-plus\" aria-hidden=\"true\"></i>&nbsp; Zarejestruj się</a>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                    <form class=\"col-md-10 col-md-offset-1 form-horizontal\" role=\"form\" action=\"{{ url('wyszukiwarka_sresult') }}\" method=\"get\">
                        <div class=\"form-group\">
                            {#  form_start(form, { method: 'post', action: url('tag_add') }) #}
                            {#  form_widget(form) #}
                            <input type=\"text\" class=\"form-control\" id=\"autor\" name=\"autor\" placeholder=\"search HearIt\">
                        </div>
                        {#  form_end(form) #}
                    </form>
                </div>
            </div>
        </div>
    {% endblock %}
    <div class=\"container \">
        <div class=\"row navbar navbar-default\">
            <h1 style=\"color:darkslateblue\">{{ 'title.auth_login'|trans }}</h1>
            {% if error is defined and error|length %}
                {% include 'default/_single_alert_message.html.twig' with {
                is_single_message: true,
                is_dismissible: false,
                type: 'danger',
                message: error,
                } %}
            {% endif %}
            <div class=\"mp col-md-8 col-md-offset-2\">
                {{ form_start(form, { class: 'col-sm-offset-0 col-sm-1 list-group-item text-center form-horizontal', method: 'post', action: path('auth_login_check') }) }}
                {{ form_widget(form) }}
                <input type=\"submit\" value=\"{{ 'action.login'|trans }}\" class=\"mp col-sm-offset-2 col-sm-5 list-group-item text-center \"\" />
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}

", "auth/login.html.twig", "C:\\Users\\Justyna\\PhpstormProjects\\untitled1\\app3\\templates\\auth\\login.html.twig");
    }
}
