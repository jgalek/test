<?php

/* header.html.twig */
class __TwigTemplate_d91db4eee752613386ed080c24c7c6d4b58d7e176ad984bb3262b4c703f90b15 extends Twig_Template
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
            echo "                            <h4>Zalogowano jako:
                                ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["profil"]) ? $context["profil"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 18
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "pseudonim", array()), "html", null, true);
                echo "
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "                            </h4>
                            <a class=\"mp list-group-item text-center\" href=\"";
            // line 21
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("auth_logout");
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("auth.logout.label"), "html", null, true);
            echo "\">
                                <i class=\"fa fa-sign-out fa-fw\"></i>&nbsp;";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("auth.logout.label"), "html", null, true);
            echo "
                            </a>
                            <a class=\"mp list-group-item text-center\" href=\"../profil\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i>&nbsp;Profil</a>
                        ";
        } else {
            // line 26
            echo "                            <a class=\"mp list-group-item text-center \" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("auth_login");
            echo "\"  title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("auth.login.label"), "html", null, true);
            echo "\">
                                <i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i> ";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("auth.login.label"), "html", null, true);
            echo "
                            </a>
                            <a class=\"mp list-group-item text-center\" href=\"../register/add\"><i class=\"fa fa-user-plus\" aria-hidden=\"true\"></i>&nbsp; Zarejestruj się</a>
                        ";
        }
        // line 31
        echo "                    </div>
                </div>
            </div>
            <form class=\"col-md-10 col-md-offset-1 form-horizontal\" role=\"form\" action=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("wyszukiwarka_sresult");
        echo "\" method=\"get\">
                <div class=\"form-group\">
                    ";
        // line 37
        echo "                    ";
        // line 38
        echo "                    <input type=\"text\" class=\"form-control\" id=\"autor\" name=\"autor\" placeholder=\"search HearIt\">
                </div>
                ";
        // line 41
        echo "            </form>
        </div>
    </div>
</div>";
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
        return array (  102 => 41,  98 => 38,  96 => 37,  91 => 34,  86 => 31,  79 => 27,  72 => 26,  65 => 22,  59 => 21,  56 => 20,  47 => 18,  43 => 17,  40 => 16,  38 => 15,  34 => 14,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "header.html.twig", "/home/epi/15_galek/public_html/app3/templates/header.html.twig");
    }
}
