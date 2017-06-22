<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_f83e9ba8c9a29f30e1999fee3dfa71ecec4ee17e13dfed90dee1cec020279658 extends Twig_Template
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
        $__internal_773af0ae6da53e5048d80319b379360bc8060c1fb872fca8f6c4e8e5387481d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_773af0ae6da53e5048d80319b379360bc8060c1fb872fca8f6c4e8e5387481d2->enter($__internal_773af0ae6da53e5048d80319b379360bc8060c1fb872fca8f6c4e8e5387481d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_87b621c15a5e60be9aa8e42a68fd574b7c84f6147aa12d1dde534bc481a74e9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87b621c15a5e60be9aa8e42a68fd574b7c84f6147aa12d1dde534bc481a74e9f->enter($__internal_87b621c15a5e60be9aa8e42a68fd574b7c84f6147aa12d1dde534bc481a74e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_773af0ae6da53e5048d80319b379360bc8060c1fb872fca8f6c4e8e5387481d2->leave($__internal_773af0ae6da53e5048d80319b379360bc8060c1fb872fca8f6c4e8e5387481d2_prof);

        
        $__internal_87b621c15a5e60be9aa8e42a68fd574b7c84f6147aa12d1dde534bc481a74e9f->leave($__internal_87b621c15a5e60be9aa8e42a68fd574b7c84f6147aa12d1dde534bc481a74e9f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/home/epi/15_galek/public_html/app3/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/header.html.twig");
    }
}
