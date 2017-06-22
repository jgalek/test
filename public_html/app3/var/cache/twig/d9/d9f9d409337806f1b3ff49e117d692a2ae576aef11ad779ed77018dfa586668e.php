<?php

/* header.html.twig */
class __TwigTemplate_d6ac9c8dfb47becf7b9ee9729eb3243b323d2e36b2f940ec955cffbafce2301f extends Twig_Template
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
        $__internal_0fa005e27bbc367fef81ed0a84c8366be93f6a77d15df5044af26458c091750d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fa005e27bbc367fef81ed0a84c8366be93f6a77d15df5044af26458c091750d->enter($__internal_0fa005e27bbc367fef81ed0a84c8366be93f6a77d15df5044af26458c091750d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "header.html.twig"));

        $__internal_a76f01170b98f201fad4e6fb84f62786801bfe75b29a395ef6f5e2acd395f1d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a76f01170b98f201fad4e6fb84f62786801bfe75b29a395ef6f5e2acd395f1d9->enter($__internal_a76f01170b98f201fad4e6fb84f62786801bfe75b29a395ef6f5e2acd395f1d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "header.html.twig"));

        // line 1
        echo "<div class=\"mp container navbar navbar-default\">
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
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.actions"), "html", null, true);
        echo "\">
                        ";
        // line 15
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 16
            echo "                            ";
        } else {
            // line 17
            echo "                            <a class=\"mp list-group-item text-center \" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("auth_login");
            echo "\"  title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("auth.login.label"), "html", null, true);
            echo "\">
                                <i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i> ";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("auth.login.label"), "html", null, true);
            echo "
                            </a>
                            <a class=\"mp list-group-item text-center\" href=\"../register/add\"><i class=\"fa fa-user-plus\" aria-hidden=\"true\"></i>&nbsp; Zarejestruj się</a>
                        ";
        }
        // line 22
        echo "                    </div>
                </div>
            </div>
            <form class=\"col-md-10 col-md-offset-1 form-horizontal\" role=\"form\" action=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("wyszukiwarka_sresult");
        echo "\" method=\"get\">
                <div class=\"form-group\">
                    ";
        // line 28
        echo "                    ";
        // line 29
        echo "                    <input type=\"text\" class=\"form-control\" id=\"autor\" name=\"autor\" placeholder=\"search HearIt\">
                </div>
                ";
        // line 32
        echo "            </form>
        </div>
    </div>
</div>";
        
        $__internal_0fa005e27bbc367fef81ed0a84c8366be93f6a77d15df5044af26458c091750d->leave($__internal_0fa005e27bbc367fef81ed0a84c8366be93f6a77d15df5044af26458c091750d_prof);

        
        $__internal_a76f01170b98f201fad4e6fb84f62786801bfe75b29a395ef6f5e2acd395f1d9->leave($__internal_a76f01170b98f201fad4e6fb84f62786801bfe75b29a395ef6f5e2acd395f1d9_prof);

    }

    public function getTemplateName()
    {
        return "header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 32,  75 => 29,  73 => 28,  68 => 25,  63 => 22,  56 => 18,  49 => 17,  46 => 16,  44 => 15,  40 => 14,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"mp container navbar navbar-default\">
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
                            {% else %}
                            <a class=\"mp list-group-item text-center \" href=\"{{ url('auth_login') }}\"  title=\"{{ 'auth.login.label'|trans }}\">
                                <i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i> {{ 'auth.login.label'|trans }}
                            </a>
                            <a class=\"mp list-group-item text-center\" href=\"../register/add\"><i class=\"fa fa-user-plus\" aria-hidden=\"true\"></i>&nbsp; Zarejestruj się</a>
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
</div>", "header.html.twig", "/home/epi/15_galek/public_html/app3/templates/header.html.twig");
    }
}
