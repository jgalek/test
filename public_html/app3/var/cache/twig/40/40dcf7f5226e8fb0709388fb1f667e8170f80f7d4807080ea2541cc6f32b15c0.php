<?php

/* auth/login.html.twig */
class __TwigTemplate_c19f874ccc31e768596431f3002f6f2d88f3735e7e57b23d20a1eb7d808459df extends Twig_Template
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
        $__internal_324fd2ca06475a431adddd12ead0a14ba49857c1428d20b8308ebd30d9c39cc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_324fd2ca06475a431adddd12ead0a14ba49857c1428d20b8308ebd30d9c39cc4->enter($__internal_324fd2ca06475a431adddd12ead0a14ba49857c1428d20b8308ebd30d9c39cc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "auth/login.html.twig"));

        $__internal_bf34e0bfed97986142810f6f869611dbe8539029336341f4071cd18e7862c2de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf34e0bfed97986142810f6f869611dbe8539029336341f4071cd18e7862c2de->enter($__internal_bf34e0bfed97986142810f6f869611dbe8539029336341f4071cd18e7862c2de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "auth/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_324fd2ca06475a431adddd12ead0a14ba49857c1428d20b8308ebd30d9c39cc4->leave($__internal_324fd2ca06475a431adddd12ead0a14ba49857c1428d20b8308ebd30d9c39cc4_prof);

        
        $__internal_bf34e0bfed97986142810f6f869611dbe8539029336341f4071cd18e7862c2de->leave($__internal_bf34e0bfed97986142810f6f869611dbe8539029336341f4071cd18e7862c2de_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_89bc5a9a0f7b2486a04aef0c4e06ee48482e2390049c7542df5fe98d2e76ff22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89bc5a9a0f7b2486a04aef0c4e06ee48482e2390049c7542df5fe98d2e76ff22->enter($__internal_89bc5a9a0f7b2486a04aef0c4e06ee48482e2390049c7542df5fe98d2e76ff22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_63ebf28f069d4bf50a594968273cadc1c68fecfdafd0f13cdf2e113c5196fd65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63ebf28f069d4bf50a594968273cadc1c68fecfdafd0f13cdf2e113c5196fd65->enter($__internal_63ebf28f069d4bf50a594968273cadc1c68fecfdafd0f13cdf2e113c5196fd65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_63ebf28f069d4bf50a594968273cadc1c68fecfdafd0f13cdf2e113c5196fd65->leave($__internal_63ebf28f069d4bf50a594968273cadc1c68fecfdafd0f13cdf2e113c5196fd65_prof);

        
        $__internal_89bc5a9a0f7b2486a04aef0c4e06ee48482e2390049c7542df5fe98d2e76ff22->leave($__internal_89bc5a9a0f7b2486a04aef0c4e06ee48482e2390049c7542df5fe98d2e76ff22_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_91df88ffe4b5cff66b001a679ef0b72254f7ca7f8ed97f344b05eab02ccab092 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91df88ffe4b5cff66b001a679ef0b72254f7ca7f8ed97f344b05eab02ccab092->enter($__internal_91df88ffe4b5cff66b001a679ef0b72254f7ca7f8ed97f344b05eab02ccab092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_3d7461b34e4e0662710f970e7d1e315a7fa927b4506c21fa9101b2386e91b6cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d7461b34e4e0662710f970e7d1e315a7fa927b4506c21fa9101b2386e91b6cf->enter($__internal_3d7461b34e4e0662710f970e7d1e315a7fa927b4506c21fa9101b2386e91b6cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_3d7461b34e4e0662710f970e7d1e315a7fa927b4506c21fa9101b2386e91b6cf->leave($__internal_3d7461b34e4e0662710f970e7d1e315a7fa927b4506c21fa9101b2386e91b6cf_prof);

        
        $__internal_91df88ffe4b5cff66b001a679ef0b72254f7ca7f8ed97f344b05eab02ccab092->leave($__internal_91df88ffe4b5cff66b001a679ef0b72254f7ca7f8ed97f344b05eab02ccab092_prof);

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

", "auth/login.html.twig", "/home/epi/15_galek/public_html/app3/templates/auth/login.html.twig");
    }
}
