<?php

/* profil/index.html.twig */
class __TwigTemplate_7fbdc960bcfbc2e1a76a421c4c807709974a625458e792d1ed48038bb6e596e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseHearIt.html.twig", "profil/index.html.twig", 1);
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
        $__internal_08123ea14fdb3859a46a1e7a09e42a3e11ae4da541fefe651815b5884a02a665 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08123ea14fdb3859a46a1e7a09e42a3e11ae4da541fefe651815b5884a02a665->enter($__internal_08123ea14fdb3859a46a1e7a09e42a3e11ae4da541fefe651815b5884a02a665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profil/index.html.twig"));

        $__internal_ebb531d137023d7268dc43e5b617d3b1972106e6afeb61c6969dc875615708fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebb531d137023d7268dc43e5b617d3b1972106e6afeb61c6969dc875615708fc->enter($__internal_ebb531d137023d7268dc43e5b617d3b1972106e6afeb61c6969dc875615708fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profil/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08123ea14fdb3859a46a1e7a09e42a3e11ae4da541fefe651815b5884a02a665->leave($__internal_08123ea14fdb3859a46a1e7a09e42a3e11ae4da541fefe651815b5884a02a665_prof);

        
        $__internal_ebb531d137023d7268dc43e5b617d3b1972106e6afeb61c6969dc875615708fc->leave($__internal_ebb531d137023d7268dc43e5b617d3b1972106e6afeb61c6969dc875615708fc_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_863dc8fd183a6340c081b63d411d2d01c8d9dc685cdb24317e6739bb6287756d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_863dc8fd183a6340c081b63d411d2d01c8d9dc685cdb24317e6739bb6287756d->enter($__internal_863dc8fd183a6340c081b63d411d2d01c8d9dc685cdb24317e6739bb6287756d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_589c8689d59336fd4c16c2f81d8d4cbf317cd33062fc10ef00205f35204d49a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_589c8689d59336fd4c16c2f81d8d4cbf317cd33062fc10ef00205f35204d49a9->enter($__internal_589c8689d59336fd4c16c2f81d8d4cbf317cd33062fc10ef00205f35204d49a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->displayBlock('header', $context, $blocks);
        // line 44
        echo "
    <div class=\"container \">
        <div class=\"row navbar navbar-default\">
                ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 48
            echo "                    <h2 style=\"color:darkslateblue\">";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["row"], "pseudonim", array())), "html", null, true);
            echo "</h2>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "        </div>
    </div>
    <div class=\"container \">
        <div class=\"mp row navbar navbar-default\">
            <h3 style=\"color:darkslateblue\" >O mnie: </h3>
            <p>
                ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 57
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "info", array()), "html", null, true);
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "</p>
        </div>
    </div>
        <div class=\"mp container navbar navbar-default\">
             <div class=\"container-fluid\">
                 <h2 style=\"color:darkslateblue\" >Widea użytkownika:</h2>
                 <div class=\"row\">
                     ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["userVideo"]) ? $context["userVideo"] : $this->getContext($context, "userVideo")));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 66
            echo "                         <div style=\"margin:5px, padding:5px\" class=\"mp\">
                             <a style=\"color:darkslateblue\" class=\"list-group-item\" href=\"../play/";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "video_id", array()), "html", null, true);
            echo "\"><i class=\"fa fa-play\" aria-hidden=\"true\"></i>&nbsp;";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["row"], "tytul", array())), "html", null, true);
            echo "</a>
                         </div>
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                 </div>
             </div>
        </div>


    <div class=\"container \">
        <div class=\"row navbar navbar-default\">
            <h2 style=\"color:darkslateblue\" >Playlisty użytkownika:</h2>
        </div>
    </div>


    ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["userPlaylist"]) ? $context["userPlaylist"] : $this->getContext($context, "userPlaylist")));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 83
            echo "        <div class=\"mp container navbar navbar-default\">
            <div class=\"container-fluid\">
                <div class=\"mp list-group-item\"><h3>";
            // line 85
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["row"], "nazwa", array())), "html", null, true);
            echo "</h3></div>
                <div class=\"mp row\">
                ";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["userPlaylist"]) ? $context["userPlaylist"] : $this->getContext($context, "userPlaylist")));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 88
                echo "                    <div style=\"margin:5px, padding:5px\" class=\"col-md-6 \">
                        <div class=\"mp list-group-item\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i>&nbsp; Autor: ";
                // line 89
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "pseudonim", array()), "html", null, true);
                echo " </div>
                        <div class=\"mp\">
                            <a style=\"color:darkslateblue\" class=\"list-group-item\" href=\"../play/";
                // line 91
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "video_id", array()), "html", null, true);
                echo "\"><i class=\"fa fa-play\" aria-hidden=\"true\"></i>&nbsp;";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["row"], "tytul", array())), "html", null, true);
                echo "</a>
                        </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "                    </div>
                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "    <div class=\"mp container navbar navbar-default\">
            <div class=\"container-fluid\">
        <h2 style=\"color:darkslateblue\" >Rankingi użytkownika:</h2>
            <div class=\"mp row\">
                ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["userHighestScore"]) ? $context["userHighestScore"] : $this->getContext($context, "userHighestScore")));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 104
            echo "                    <div style=\"margin:5px, padding:5px\" class=\"col-md-6 \">
                        <a style=\"color:darkslateblue\" class=\"list-group-item\" href=\"../play/";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "video_id", array()), "html", null, true);
            echo "\"><i class=\"fa fa-play\" aria-hidden=\"true\"></i>&nbsp;";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["row"], "tytul", array())), "html", null, true);
            echo "</a>
                        <div class=\"mp\">
                            <div class=\"list-group-item\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i>&nbsp; Ocena: ";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "ocena", array()), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "                <div class=\"col-md-6 col-md-offset-5\">
                    <button class=\"btn btn-inverse btn-lg\">Pokaż więcej</button>
                </div>
            </div>
        </div>
        </div>
        ";
        
        $__internal_589c8689d59336fd4c16c2f81d8d4cbf317cd33062fc10ef00205f35204d49a9->leave($__internal_589c8689d59336fd4c16c2f81d8d4cbf317cd33062fc10ef00205f35204d49a9_prof);

        
        $__internal_863dc8fd183a6340c081b63d411d2d01c8d9dc685cdb24317e6739bb6287756d->leave($__internal_863dc8fd183a6340c081b63d411d2d01c8d9dc685cdb24317e6739bb6287756d_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_fc96bd476dd63b712a3d3c0f0b3291929cf67f90c52ab684a6f9b5ad41fd8143 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc96bd476dd63b712a3d3c0f0b3291929cf67f90c52ab684a6f9b5ad41fd8143->enter($__internal_fc96bd476dd63b712a3d3c0f0b3291929cf67f90c52ab684a6f9b5ad41fd8143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_47d41897212521027d9ab919d203c369177f92acc85fec7244a74728cd546fc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47d41897212521027d9ab919d203c369177f92acc85fec7244a74728cd546fc5->enter($__internal_47d41897212521027d9ab919d203c369177f92acc85fec7244a74728cd546fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "        <div class=\"mp container navbar navbar-default\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div style=\"margin:20px, padding:5px\" class=\"list-group col-md-3 col-md-offset-1\">
                        <a class=\"list-group-item\" href=\"../hearIt\"><i class=\"fa fa-home fa-fw\"></i>&nbsp; Home</a>
                        <a class=\"list-group-item\" href=\"../playlisty\"><i class=\"fa fa-play fa-fw\"></i>&nbsp; Playlisty</a>
                        <a class=\"list-group-item\" href=\"../rankingi\"><i class=\"fa fa-trophy fa-fw\"></i>&nbsp; Rankingi</a>
                    </div>
                    <div class=\"col-md-3 col-md-offset-0\">
                        <h1>HearIt!</h1>
                    </div>
                    <div class=\"col-md-3 col-md-offset-1\">
                        <div class=\"container-fluid\">
                            <div class=\"btn-group pull-right\" role=\"group\" aria-label=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.actions"), "html", null, true);
        echo "\">
                                <h4>Zalogowano jako:
                                    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 20
            echo "                                        ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "pseudonim", array()), "html", null, true);
            echo "
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                                </h4>
                                <a class=\"list-group-item\" id=\"logout\" href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("auth_logout");
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("auth.logout.label"), "html", null, true);
        echo "\">
                                    <i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("auth.logout.label"), "html", null, true);
        echo "
                                </a>
                                <a class=\"list-group-item\" href=\"../video\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i>/<i class=\"fa fa-minus\" aria-hidden=\"true\"></i> Dodaj lub usuń wideo</a>
                                <a class=\"list-group-item\" href=\"../register/edit\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>&nbsp; Edytuj</a>
                            </div>
                        </div>
                    </div>

                    <form class=\"mp col-md-10 col-md-offset-1 form-horizontal\" role=\"form\" action=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("wyszukiwarka_sresult");
        echo "\" method=\"get\">
                        <div class=\"form-group\">
                            ";
        // line 35
        echo "                            ";
        // line 36
        echo "                            <input type=\"text\" class=\"form-control\" id=\"autor\" name=\"autor\" placeholder=\"search HearIt\">
                        </div>
                        ";
        // line 39
        echo "                    </form>
                </div>
            </div>
        </div>
    ";
        
        $__internal_47d41897212521027d9ab919d203c369177f92acc85fec7244a74728cd546fc5->leave($__internal_47d41897212521027d9ab919d203c369177f92acc85fec7244a74728cd546fc5_prof);

        
        $__internal_fc96bd476dd63b712a3d3c0f0b3291929cf67f90c52ab684a6f9b5ad41fd8143->leave($__internal_fc96bd476dd63b712a3d3c0f0b3291929cf67f90c52ab684a6f9b5ad41fd8143_prof);

    }

    public function getTemplateName()
    {
        return "profil/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 39,  294 => 36,  292 => 35,  287 => 32,  276 => 24,  270 => 23,  267 => 22,  258 => 20,  254 => 19,  249 => 17,  234 => 4,  225 => 3,  209 => 111,  199 => 107,  192 => 105,  189 => 104,  185 => 103,  179 => 99,  169 => 94,  158 => 91,  153 => 89,  150 => 88,  146 => 87,  141 => 85,  137 => 83,  133 => 82,  119 => 70,  108 => 67,  105 => 66,  101 => 65,  92 => 58,  83 => 57,  79 => 56,  71 => 50,  62 => 48,  58 => 47,  53 => 44,  50 => 3,  41 => 2,  11 => 1,);
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
    {% block header %}
        <div class=\"mp container navbar navbar-default\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div style=\"margin:20px, padding:5px\" class=\"list-group col-md-3 col-md-offset-1\">
                        <a class=\"list-group-item\" href=\"../hearIt\"><i class=\"fa fa-home fa-fw\"></i>&nbsp; Home</a>
                        <a class=\"list-group-item\" href=\"../playlisty\"><i class=\"fa fa-play fa-fw\"></i>&nbsp; Playlisty</a>
                        <a class=\"list-group-item\" href=\"../rankingi\"><i class=\"fa fa-trophy fa-fw\"></i>&nbsp; Rankingi</a>
                    </div>
                    <div class=\"col-md-3 col-md-offset-0\">
                        <h1>HearIt!</h1>
                    </div>
                    <div class=\"col-md-3 col-md-offset-1\">
                        <div class=\"container-fluid\">
                            <div class=\"btn-group pull-right\" role=\"group\" aria-label=\"{{ 'label.actions'|trans }}\">
                                <h4>Zalogowano jako:
                                    {% for row in profil %}
                                        {{ row.pseudonim }}
                                    {% endfor %}
                                </h4>
                                <a class=\"list-group-item\" id=\"logout\" href=\"{{ url('auth_logout') }}\" title=\"{{ 'auth.logout.label'|trans }}\">
                                    <i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i>{{ 'auth.logout.label'|trans }}
                                </a>
                                <a class=\"list-group-item\" href=\"../video\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i>/<i class=\"fa fa-minus\" aria-hidden=\"true\"></i> Dodaj lub usuń wideo</a>
                                <a class=\"list-group-item\" href=\"../register/edit\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>&nbsp; Edytuj</a>
                            </div>
                        </div>
                    </div>

                    <form class=\"mp col-md-10 col-md-offset-1 form-horizontal\" role=\"form\" action=\"{{ url('wyszukiwarka_sresult') }}\" method=\"get\">
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
                {% for row in profil %}
                    <h2 style=\"color:darkslateblue\">{{ row.pseudonim|upper }}</h2>
                {% endfor %}
        </div>
    </div>
    <div class=\"container \">
        <div class=\"mp row navbar navbar-default\">
            <h3 style=\"color:darkslateblue\" >O mnie: </h3>
            <p>
                {% for row in profil %}
                    {{ row.info }}
                {% endfor %}</p>
        </div>
    </div>
        <div class=\"mp container navbar navbar-default\">
             <div class=\"container-fluid\">
                 <h2 style=\"color:darkslateblue\" >Widea użytkownika:</h2>
                 <div class=\"row\">
                     {% for row in userVideo %}
                         <div style=\"margin:5px, padding:5px\" class=\"mp\">
                             <a style=\"color:darkslateblue\" class=\"list-group-item\" href=\"../play/{{ row.video_id }}\"><i class=\"fa fa-play\" aria-hidden=\"true\"></i>&nbsp;{{ row.tytul|upper }}</a>
                         </div>
                     {% endfor %}
                 </div>
             </div>
        </div>


    <div class=\"container \">
        <div class=\"row navbar navbar-default\">
            <h2 style=\"color:darkslateblue\" >Playlisty użytkownika:</h2>
        </div>
    </div>


    {% for row in userPlaylist %}
        <div class=\"mp container navbar navbar-default\">
            <div class=\"container-fluid\">
                <div class=\"mp list-group-item\"><h3>{{ row.nazwa|upper}}</h3></div>
                <div class=\"mp row\">
                {% for row in userPlaylist %}
                    <div style=\"margin:5px, padding:5px\" class=\"col-md-6 \">
                        <div class=\"mp list-group-item\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i>&nbsp; Autor: {{ row.pseudonim }} </div>
                        <div class=\"mp\">
                            <a style=\"color:darkslateblue\" class=\"list-group-item\" href=\"../play/{{ row.video_id }}\"><i class=\"fa fa-play\" aria-hidden=\"true\"></i>&nbsp;{{ row.tytul|upper }}</a>
                        </div>
                        {% endfor %}
                    </div>
                </div>
            </div>
        </div>
    {% endfor %}
    <div class=\"mp container navbar navbar-default\">
            <div class=\"container-fluid\">
        <h2 style=\"color:darkslateblue\" >Rankingi użytkownika:</h2>
            <div class=\"mp row\">
                {% for row in userHighestScore %}
                    <div style=\"margin:5px, padding:5px\" class=\"col-md-6 \">
                        <a style=\"color:darkslateblue\" class=\"list-group-item\" href=\"../play/{{ row.video_id }}\"><i class=\"fa fa-play\" aria-hidden=\"true\"></i>&nbsp;{{ row.tytul|upper }}</a>
                        <div class=\"mp\">
                            <div class=\"list-group-item\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i>&nbsp; Ocena: {{ row.ocena }}</div>
                        </div>
                    </div>
                {% endfor %}
                <div class=\"col-md-6 col-md-offset-5\">
                    <button class=\"btn btn-inverse btn-lg\">Pokaż więcej</button>
                </div>
            </div>
        </div>
        </div>
        {% endblock %}", "profil/index.html.twig", "/home/epi/15_galek/public_html/app3/templates/profil/index.html.twig");
    }
}
