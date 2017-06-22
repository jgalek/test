<?php

/* auth/login.html.twig */
class __TwigTemplate_47811503d6f6e30bb7bc4741293c8ba4e92554f0d43cc832f9e2264e14eff29d extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "bootstrap_3_horizontal_layout.html.twig", 1 => "form/form_errors.html.twig"));
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
        if ((array_key_exists("error", $context) && twig_length_filter($this->env, (isset($context["error"]) ? $context["error"] : null)))) {
            // line 49
            echo "                ";
            $this->loadTemplate("default/_single_alert_message.html.twig", "auth/login.html.twig", 49)->display(array_merge($context, array("is_single_message" => true, "is_dismissible" => false, "type" => "danger", "message" =>             // line 53
(isset($context["error"]) ? $context["error"] : null))));
            // line 55
            echo "            ";
        }
        // line 56
        echo "            <div class=\"mp col-md-8 col-md-offset-2\">
                ";
        // line 57
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("class" => "col-sm-offset-0 col-sm-1 list-group-item text-center form-horizontal", "method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("auth_login_check")));
        echo "
                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
                <input type=\"submit\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.login"), "html", null, true);
        echo "\" class=\"mp col-sm-offset-2 col-sm-5 list-group-item text-center \"\" />
                ";
        // line 60
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
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
        return array (  148 => 40,  144 => 37,  142 => 36,  137 => 33,  132 => 30,  125 => 26,  118 => 25,  112 => 22,  106 => 21,  103 => 20,  101 => 19,  97 => 18,  82 => 5,  79 => 4,  70 => 60,  66 => 59,  62 => 58,  58 => 57,  55 => 56,  52 => 55,  50 => 53,  48 => 49,  46 => 48,  42 => 47,  38 => 45,  35 => 4,  32 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "auth/login.html.twig", "/home/epi/15_galek/public_html/app3/templates/auth/login.html.twig");
    }
}
