<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_2bb51b22f270f7b853c462dfa5b173828838f090b3c9ee66a6fa959029132613 extends Twig_Template
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
        $__internal_65ad7edc9a34f18cbee37c0e63fae2c40d8c08ffb13b42d5e84c114b2741ca11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65ad7edc9a34f18cbee37c0e63fae2c40d8c08ffb13b42d5e84c114b2741ca11->enter($__internal_65ad7edc9a34f18cbee37c0e63fae2c40d8c08ffb13b42d5e84c114b2741ca11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_da15f9f786ff46402dc2f83828a09e95a97d8f3ddc8421d7a83f78a16fc7d820 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da15f9f786ff46402dc2f83828a09e95a97d8f3ddc8421d7a83f78a16fc7d820->enter($__internal_da15f9f786ff46402dc2f83828a09e95a97d8f3ddc8421d7a83f78a16fc7d820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_65ad7edc9a34f18cbee37c0e63fae2c40d8c08ffb13b42d5e84c114b2741ca11->leave($__internal_65ad7edc9a34f18cbee37c0e63fae2c40d8c08ffb13b42d5e84c114b2741ca11_prof);

        
        $__internal_da15f9f786ff46402dc2f83828a09e95a97d8f3ddc8421d7a83f78a16fc7d820->leave($__internal_da15f9f786ff46402dc2f83828a09e95a97d8f3ddc8421d7a83f78a16fc7d820_prof);

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
", "@WebProfiler/Profiler/header.html.twig", "C:\\Users\\Justyna\\PhpstormProjects\\untitled1\\app3\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
