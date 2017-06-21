<?php

/* hearIt/index.html.twig */
class __TwigTemplate_0a84620a62d2588cba97f5ceea77fce3d77fc846682f5817d4dd6aa8ec555ea8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseHearIt.html.twig", "hearIt/index.html.twig", 1);
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
        $__internal_1eb69d14a8a82253bd5ca4173a4a71abb32df5d83439ffb728cc796186b2a8e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eb69d14a8a82253bd5ca4173a4a71abb32df5d83439ffb728cc796186b2a8e1->enter($__internal_1eb69d14a8a82253bd5ca4173a4a71abb32df5d83439ffb728cc796186b2a8e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hearIt/index.html.twig"));

        $__internal_dda22de6f1663c47ff1170a9ab22a9f5ab71c163387a1eefd1f8f03a2cd05b2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dda22de6f1663c47ff1170a9ab22a9f5ab71c163387a1eefd1f8f03a2cd05b2c->enter($__internal_dda22de6f1663c47ff1170a9ab22a9f5ab71c163387a1eefd1f8f03a2cd05b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hearIt/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1eb69d14a8a82253bd5ca4173a4a71abb32df5d83439ffb728cc796186b2a8e1->leave($__internal_1eb69d14a8a82253bd5ca4173a4a71abb32df5d83439ffb728cc796186b2a8e1_prof);

        
        $__internal_dda22de6f1663c47ff1170a9ab22a9f5ab71c163387a1eefd1f8f03a2cd05b2c->leave($__internal_dda22de6f1663c47ff1170a9ab22a9f5ab71c163387a1eefd1f8f03a2cd05b2c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce395039b550dc8134879992059ac7edd4eaeaebb6d13e5fa430726344a85324 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce395039b550dc8134879992059ac7edd4eaeaebb6d13e5fa430726344a85324->enter($__internal_ce395039b550dc8134879992059ac7edd4eaeaebb6d13e5fa430726344a85324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7af6917445670547a183301cb48ae5d3a9591485d5605fe512a4ab73e2255ba8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7af6917445670547a183301cb48ae5d3a9591485d5605fe512a4ab73e2255ba8->enter($__internal_7af6917445670547a183301cb48ae5d3a9591485d5605fe512a4ab73e2255ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->displayBlock('header', $context, $blocks);
        // line 49
        echo "

    <div class=\"mp container navbar navbar-default\">
        <div class=\"container-fluid\">
            <h2 style=\"color:darkslateblue\" >Najwyżej oceniane widea użytkowników:</h2>
            <div class=\"mp row\">
                ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hearIt"]) ? $context["hearIt"] : $this->getContext($context, "hearIt")));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 56
            echo "                    <div style=\"margin:5px, padding:5px\" class=\"mp\">
                            <div class=\"list-group-item\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i>&nbsp; Autor ";
            // line 57
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["row"], "pseudonim", array())), "html", null, true);
            echo " </div>
                            <a  style=\"color:darkslateblue\" class=\"list-group-item\" href=\"../play/";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "video_id", array()), "html", null, true);
            echo "\"><i class=\"fa fa-play\" aria-hidden=\"true\"></i>&nbsp;";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["row"], "tytul", array())), "html", null, true);
            echo "</a>
                            <div class=\"list-group-item\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i>&nbsp; Ocena: ";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "ocena", array()), "html", null, true);
            echo "</div>
                        </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                <div class=\"col-md-6 col-md-offset-5\">
                    <button class=\"btn btn-inverse btn-lg\">Pokarz więcej</button>
                </div>
            </div>
        </div>
    </div>

    <div class=\"container \">
        <div style=\"color:darkslateblue\" class=\"row navbar navbar-default\">
            <h2>Najwyżej oceniane playlisty urzytkowników:</h2>
        </div>
    </div>

    ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["playlistByUser"]) ? $context["playlistByUser"] : $this->getContext($context, "playlistByUser")));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 76
            echo "    <div class=\"mp container navbar navbar-default\">
        <div class=\"container-fluid\">
            <div class=\"mp list-group-item\"><h3>Playlista: ";
            // line 78
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["row"], "nazwa", array())), "html", null, true);
            echo "</h3></div>
            <div class=\"mp list-group-item\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i>&nbsp; Ocena: ";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "ocena", array()), "html", null, true);
            echo " </div>
            <div class=\"mp row\">
                ";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["playlistByUser"]) ? $context["playlistByUser"] : $this->getContext($context, "playlistByUser")));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 82
                echo "                    <a style=\"color:darkslateblue\"class=\"list-group-item\" href=\"../play/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "video_id", array()), "html", null, true);
                echo "\"><i class=\"fa fa-play\" aria-hidden=\"true\"></i>&nbsp;";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["row"], "tytul", array())), "html", null, true);
                echo "</a>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "            </div>
        </div>
     </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "

        <div class=\"container \">
            <div style=\"color:darkslateblue\" class=\"row navbar navbar-default\">
                <h2>Proponowane:</h2>
            </div>
        </div>


        ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["playlist"]) ? $context["playlist"] : $this->getContext($context, "playlist")));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 98
            echo "            <div class=\"mp container navbar navbar-default\">
                <div class=\"container-fluid\">
                    <div class=\"mp list-group-item\"><h3>Playlista: ";
            // line 100
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["row"], "gatunek", array())), "html", null, true);
            echo "</h3></div>
            ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["playlistByGatunek"]) ? $context["playlistByGatunek"] : $this->getContext($context, "playlistByGatunek")));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 102
                echo "                    <div class=\"mp row\">
                        <div style=\"margin:5px, padding:5px\" class=\"mp\">
                           ";
                // line 104
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "gatunek", array()), "html", null, true);
                echo "
                                <a  style=\"color:darkslateblue\" class=\"list-group-item\" href=\"../play/";
                // line 105
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "video_id", array()), "html", null, true);
                echo "\"><i class=\"fa fa-play\" aria-hidden=\"true\"></i>&nbsp;";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["row"], "tytul", array())), "html", null, true);
                echo "</a>
                                <div class=\"list-group-item\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i>&nbsp; Ocena: ";
                // line 106
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "ocena", array()), "html", null, true);
                echo "</div>
                        </div>
                    </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "                </div>
            </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_7af6917445670547a183301cb48ae5d3a9591485d5605fe512a4ab73e2255ba8->leave($__internal_7af6917445670547a183301cb48ae5d3a9591485d5605fe512a4ab73e2255ba8_prof);

        
        $__internal_ce395039b550dc8134879992059ac7edd4eaeaebb6d13e5fa430726344a85324->leave($__internal_ce395039b550dc8134879992059ac7edd4eaeaebb6d13e5fa430726344a85324_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_d9752786f8cc201b28bbdf2a81c48644d31d29d53f68e1fb9651aed2b278b1d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9752786f8cc201b28bbdf2a81c48644d31d29d53f68e1fb9651aed2b278b1d2->enter($__internal_d9752786f8cc201b28bbdf2a81c48644d31d29d53f68e1fb9651aed2b278b1d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_ecf2946328299e18c20c04cbefd8fea70e586b0a096308cc2ef5ad156726b08b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecf2946328299e18c20c04cbefd8fea70e586b0a096308cc2ef5ad156726b08b->enter($__internal_ecf2946328299e18c20c04cbefd8fea70e586b0a096308cc2ef5ad156726b08b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
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
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.actions"), "html", null, true);
        echo "\">
                                ";
        // line 18
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 19
            echo "                                    <h4>Zalogowano jako:
                                    ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 21
                echo "                                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "pseudonim", array()), "html", null, true);
                echo "
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "                                    </h4>
                                    <a class=\"mp list-group-item text-center\" href=\"";
            // line 24
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("auth_logout");
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("auth.logout.label"), "html", null, true);
            echo "\">
                                        <i class=\"fa fa-sign-out fa-fw\"></i>&nbsp;";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("auth.logout.label"), "html", null, true);
            echo "
                                    </a>
                                    <a class=\"mp list-group-item text-center\" href=\"../profil\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i>&nbsp;Profil</a>
                                ";
        } else {
            // line 29
            echo "                                    <a class=\"mp list-group-item text-center \" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("auth_login");
            echo "\"  title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("auth.login.label"), "html", null, true);
            echo "\">
                                        <i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i> ";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("auth.login.label"), "html", null, true);
            echo "
                                    </a>
                                    <a class=\"mp list-group-item text-center\" href=\"../register/add\"><i class=\"fa fa-user-plus\" aria-hidden=\"true\"></i>&nbsp; Zarejestruj się</a>
                                ";
        }
        // line 34
        echo "                            </div>
                        </div>
                    </div>
                    <form class=\"col-md-10 col-md-offset-1 form-horizontal\" role=\"form\" action=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("wyszukiwarka_sresult");
        echo "\" method=\"get\">
                        <div class=\"form-group\">
                            ";
        // line 40
        echo "                            ";
        // line 41
        echo "                            <input type=\"text\" class=\"form-control\" id=\"autor\" name=\"autor\" placeholder=\"search HearIt\">
                        </div>
                        ";
        // line 44
        echo "                    </form>
                </div>
            </div>
        </div>
    ";
        
        $__internal_ecf2946328299e18c20c04cbefd8fea70e586b0a096308cc2ef5ad156726b08b->leave($__internal_ecf2946328299e18c20c04cbefd8fea70e586b0a096308cc2ef5ad156726b08b_prof);

        
        $__internal_d9752786f8cc201b28bbdf2a81c48644d31d29d53f68e1fb9651aed2b278b1d2->leave($__internal_d9752786f8cc201b28bbdf2a81c48644d31d29d53f68e1fb9651aed2b278b1d2_prof);

    }

    public function getTemplateName()
    {
        return "hearIt/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 44,  298 => 41,  296 => 40,  291 => 37,  286 => 34,  279 => 30,  272 => 29,  265 => 25,  259 => 24,  256 => 23,  247 => 21,  243 => 20,  240 => 19,  238 => 18,  234 => 17,  219 => 4,  210 => 3,  194 => 110,  184 => 106,  178 => 105,  174 => 104,  170 => 102,  166 => 101,  162 => 100,  158 => 98,  154 => 97,  143 => 88,  134 => 84,  123 => 82,  119 => 81,  114 => 79,  110 => 78,  106 => 76,  102 => 75,  87 => 62,  78 => 59,  72 => 58,  68 => 57,  65 => 56,  61 => 55,  53 => 49,  50 => 3,  41 => 2,  11 => 1,);
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
                                    <h4>Zalogowano jako:
                                    {% for row in profil %}
                                        {{ row.pseudonim }}
                                    {% endfor %}
                                    </h4>
                                    <a class=\"mp list-group-item text-center\" href=\"{{ url('auth_logout') }}\" title=\"{{ 'auth.logout.label'|trans }}\">
                                        <i class=\"fa fa-sign-out fa-fw\"></i>&nbsp;{{ 'auth.logout.label'|trans }}
                                    </a>
                                    <a class=\"mp list-group-item text-center\" href=\"../profil\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i>&nbsp;Profil</a>
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
        </div>
    {% endblock %}


    <div class=\"mp container navbar navbar-default\">
        <div class=\"container-fluid\">
            <h2 style=\"color:darkslateblue\" >Najwyżej oceniane widea użytkowników:</h2>
            <div class=\"mp row\">
                {% for row in hearIt %}
                    <div style=\"margin:5px, padding:5px\" class=\"mp\">
                            <div class=\"list-group-item\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i>&nbsp; Autor {{ row.pseudonim|upper }} </div>
                            <a  style=\"color:darkslateblue\" class=\"list-group-item\" href=\"../play/{{  row.video_id }}\"><i class=\"fa fa-play\" aria-hidden=\"true\"></i>&nbsp;{{ row.tytul|upper }}</a>
                            <div class=\"list-group-item\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i>&nbsp; Ocena: {{ row.ocena }}</div>
                        </div>
                {% endfor %}
                <div class=\"col-md-6 col-md-offset-5\">
                    <button class=\"btn btn-inverse btn-lg\">Pokarz więcej</button>
                </div>
            </div>
        </div>
    </div>

    <div class=\"container \">
        <div style=\"color:darkslateblue\" class=\"row navbar navbar-default\">
            <h2>Najwyżej oceniane playlisty urzytkowników:</h2>
        </div>
    </div>

    {% for row in playlistByUser %}
    <div class=\"mp container navbar navbar-default\">
        <div class=\"container-fluid\">
            <div class=\"mp list-group-item\"><h3>Playlista: {{ row.nazwa|upper}}</h3></div>
            <div class=\"mp list-group-item\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i>&nbsp; Ocena: {{ row.ocena }} </div>
            <div class=\"mp row\">
                {% for row in playlistByUser %}
                    <a style=\"color:darkslateblue\"class=\"list-group-item\" href=\"../play/{{ row.video_id }}\"><i class=\"fa fa-play\" aria-hidden=\"true\"></i>&nbsp;{{ row.tytul|upper }}</a>
                {% endfor %}
            </div>
        </div>
     </div>
    {% endfor %}


        <div class=\"container \">
            <div style=\"color:darkslateblue\" class=\"row navbar navbar-default\">
                <h2>Proponowane:</h2>
            </div>
        </div>


        {% for row in playlist %}
            <div class=\"mp container navbar navbar-default\">
                <div class=\"container-fluid\">
                    <div class=\"mp list-group-item\"><h3>Playlista: {{ row.gatunek|upper}}</h3></div>
            {% for row in playlistByGatunek %}
                    <div class=\"mp row\">
                        <div style=\"margin:5px, padding:5px\" class=\"mp\">
                           {{  row.gatunek }}
                                <a  style=\"color:darkslateblue\" class=\"list-group-item\" href=\"../play/{{  row.video_id }}\"><i class=\"fa fa-play\" aria-hidden=\"true\"></i>&nbsp;{{ row.tytul|upper }}</a>
                                <div class=\"list-group-item\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i>&nbsp; Ocena: {{ row.ocena }}</div>
                        </div>
                    </div>
            {% endfor %}
                </div>
            </div>
    {% endfor %}
{% endblock %}", "hearIt/index.html.twig", "C:\\Users\\Justyna\\PhpstormProjects\\untitled1\\app3\\templates\\hearIt\\index.html.twig");
    }
}
