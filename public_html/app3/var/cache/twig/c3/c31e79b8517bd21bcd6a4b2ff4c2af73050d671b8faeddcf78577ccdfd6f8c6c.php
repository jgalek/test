<?php

/* @DoctrineBundle/Collector/db.html.twig */
class __TwigTemplate_277c72fcb952fb6952e81c45d5f88fa69dcac373ebf028ff19641cbaafbd87f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@DoctrineBundle/Collector/db.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4426ec78631b8aeaebfcecf83f3cb9a0db503f0c099eb514b0ac571d09a3fba9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4426ec78631b8aeaebfcecf83f3cb9a0db503f0c099eb514b0ac571d09a3fba9->enter($__internal_4426ec78631b8aeaebfcecf83f3cb9a0db503f0c099eb514b0ac571d09a3fba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DoctrineBundle/Collector/db.html.twig"));

        $__internal_a3414d4dadcfa9aaea8a7853e4bca744a9596d26e94150cb99151333248abd73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3414d4dadcfa9aaea8a7853e4bca744a9596d26e94150cb99151333248abd73->enter($__internal_a3414d4dadcfa9aaea8a7853e4bca744a9596d26e94150cb99151333248abd73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DoctrineBundle/Collector/db.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4426ec78631b8aeaebfcecf83f3cb9a0db503f0c099eb514b0ac571d09a3fba9->leave($__internal_4426ec78631b8aeaebfcecf83f3cb9a0db503f0c099eb514b0ac571d09a3fba9_prof);

        
        $__internal_a3414d4dadcfa9aaea8a7853e4bca744a9596d26e94150cb99151333248abd73->leave($__internal_a3414d4dadcfa9aaea8a7853e4bca744a9596d26e94150cb99151333248abd73_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4e7a34d96516bd453eb780a3b9fcc0d829f494ac24d0faa41448a7fd5dfe31be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e7a34d96516bd453eb780a3b9fcc0d829f494ac24d0faa41448a7fd5dfe31be->enter($__internal_4e7a34d96516bd453eb780a3b9fcc0d829f494ac24d0faa41448a7fd5dfe31be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_30554f93246f40b2937013e3cd858147045913f8f6b4adec0f8819a6f39022e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30554f93246f40b2937013e3cd858147045913f8f6b4adec0f8819a6f39022e3->enter($__internal_30554f93246f40b2937013e3cd858147045913f8f6b4adec0f8819a6f39022e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" height=\"24\" viewBox=\"0 0 24 24\" enable-background=\"new 0 0 24 24\" xml:space=\"preserve\">
            <path fill=\"#AAAAAA\" d=\"M5,8h14c1.7,0,3-1.3,3-3s-1.3-3-3-3H5C3.3,2,2,3.3,2,5S3.3,8,5,8z M18,3.6c0.8,0,1.5,0.7,1.5,1.5S18.8,6.6,18,6.6s-1.5-0.7-1.5-1.5S17.2,3.6,18,3.6z M19,9H5c-1.7,0-3,1.3-3,3s1.3,3,3,3h14c1.7,0,3-1.3,3-3S20.7,9,19,9z M18,13.6
            c-0.8,0-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5s1.5,0.7,1.5,1.5S18.8,13.6,18,13.6z M19,16H5c-1.7,0-3,1.3-3,3s1.3,3,3,3h14c1.7,0,3-1.3,3-3S20.7,16,19,16z M18,20.6c-0.8,0-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5s1.5,0.7,1.5,1.5S18.8,20.6,18,20.6z\"></path>
        </svg>
        <span class=\"sf-toolbar-value\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "querycount", array()), "html", null, true);
        echo "</span>
        ";
        // line 10
        if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "querycount", array()) > 0)) {
            // line 11
            echo "        <span class=\"sf-toolbar-info-piece-additional-detail\">
            <span class=\"sf-toolbar-label\">in</span>
            <span class=\"sf-toolbar-value\">";
            // line 13
            echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "time", array()) * 1000)), "html", null, true);
            echo "</span>
            <span class=\"sf-toolbar-label\">ms</span>
        </span>
        ";
        }
        // line 17
        echo "    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 18
        echo "    ";
        ob_start();
        // line 19
        echo "        ";
        ob_start();
        // line 20
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Database Queries</b>
            <span class=\"sf-toolbar-status\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "querycount", array()), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Query time</b>
            <span>";
        // line 26
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "time", array()) * 1000)), "html", null, true);
        echo " ms</span>
        </div>
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 29
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 30
        echo "    ";
        $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "@DoctrineBundle/Collector/db.html.twig", 30)->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
        
        $__internal_30554f93246f40b2937013e3cd858147045913f8f6b4adec0f8819a6f39022e3->leave($__internal_30554f93246f40b2937013e3cd858147045913f8f6b4adec0f8819a6f39022e3_prof);

        
        $__internal_4e7a34d96516bd453eb780a3b9fcc0d829f494ac24d0faa41448a7fd5dfe31be->leave($__internal_4e7a34d96516bd453eb780a3b9fcc0d829f494ac24d0faa41448a7fd5dfe31be_prof);

    }

    // line 33
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c980c6690483daba91e5c4531c61a2bf2c8590dab78cc1ff5db782b0645bcfb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c980c6690483daba91e5c4531c61a2bf2c8590dab78cc1ff5db782b0645bcfb4->enter($__internal_c980c6690483daba91e5c4531c61a2bf2c8590dab78cc1ff5db782b0645bcfb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_81253d59e79061d99c5626557bd638057bff981c943cb594c2da7cf42d5d7c35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81253d59e79061d99c5626557bd638057bff981c943cb594c2da7cf42d5d7c35->enter($__internal_81253d59e79061d99c5626557bd638057bff981c943cb594c2da7cf42d5d7c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 34
        echo "<span class=\"label\">
    <span class=\"icon\">
        <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" height=\"24\" viewBox=\"0 0 24 24\" enable-background=\"new 0 0 24 24\" xml:space=\"preserve\">
            <path fill=\"#AAAAAA\" d=\"M5,8h14c1.7,0,3-1.3,3-3s-1.3-3-3-3H5C3.3,2,2,3.3,2,5S3.3,8,5,8z M18,3.6c0.8,0,1.5,0.7,1.5,1.5S18.8,6.6,18,6.6s-1.5-0.7-1.5-1.5S17.2,3.6,18,3.6z M19,9H5c-1.7,0-3,1.3-3,3s1.3,3,3,3h14c1.7,0,3-1.3,3-3S20.7,9,19,9z M18,13.6
            c-0.8,0-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5s1.5,0.7,1.5,1.5S18.8,13.6,18,13.6z M19,16H5c-1.7,0-3,1.3-3,3s1.3,3,3,3h14c1.7,0,3-1.3,3-3S20.7,16,19,16z M18,20.6c-0.8,0-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5s1.5,0.7,1.5,1.5S18.8,20.6,18,20.6z\"></path>
        </svg>
    </span>
    <strong>Doctrine</strong>
    <span class=\"count\">
        <span>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "querycount", array()), "html", null, true);
        echo "</span>
        <span>";
        // line 44
        echo twig_escape_filter($this->env, sprintf("%0.0f", ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "time", array()) * 1000)), "html", null, true);
        echo " ms</span>
    </span>
</span>
";
        
        $__internal_81253d59e79061d99c5626557bd638057bff981c943cb594c2da7cf42d5d7c35->leave($__internal_81253d59e79061d99c5626557bd638057bff981c943cb594c2da7cf42d5d7c35_prof);

        
        $__internal_c980c6690483daba91e5c4531c61a2bf2c8590dab78cc1ff5db782b0645bcfb4->leave($__internal_c980c6690483daba91e5c4531c61a2bf2c8590dab78cc1ff5db782b0645bcfb4_prof);

    }

    // line 49
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8a6c9d2e2dedc085a019e0fca6b664170c6322e001f00fcdc051b6e928631753 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a6c9d2e2dedc085a019e0fca6b664170c6322e001f00fcdc051b6e928631753->enter($__internal_8a6c9d2e2dedc085a019e0fca6b664170c6322e001f00fcdc051b6e928631753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b7d09de71934965e67186ea51e90b5b57ae2f5c68e3fb25e15974dfe1404aa1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7d09de71934965e67186ea51e90b5b57ae2f5c68e3fb25e15974dfe1404aa1f->enter($__internal_b7d09de71934965e67186ea51e90b5b57ae2f5c68e3fb25e15974dfe1404aa1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 50
        echo "    <style>
        .queries-table td, .queries-table th { vertical-align: top; }
        .queries-table td > div { margin-bottom: 6px; }
        .highlight pre { margin: 0; white-space: pre-wrap; }
        .highlight .keyword   { color: #8959A8; font-weight: bold; }
        .highlight .symbol    { color: #222222; }
        .highlight .comment   { color: #999999; }
        .highlight .string    { color: #718C00; }
        .highlight .number    { color: #F5871F; font-weight: bold; }
    </style>
    <h2>Queries</h2>
    ";
        // line 61
        $context["count"] = twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "queries", array()));
        // line 62
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "queries", array()));
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
        foreach ($context['_seq'] as $context["name"] => $context["queries"]) {
            // line 63
            echo "        ";
            if (((isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")) > 1)) {
                // line 64
                echo "            <h3>";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</h3>
        ";
            }
            // line 66
            echo "        ";
            if (twig_test_empty($context["queries"])) {
                // line 67
                echo "            <p>
                <em>No queries.</em>
            </p>
        ";
            } else {
                // line 71
                echo "            <table class=\"alt queries-table\">
                <thead>
                <tr>
                    <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 0, 'queries-";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "')\" data-sort-direction=\"-1\" style=\"cursor: pointer;\">#<span class=\"text-muted\">&#9650;</span></th>
                    <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 1, 'queries-";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "')\" style=\"cursor: pointer;\">Time<span></span></th>
                    <th style=\"width: 100%;\">Info</th>
                </tr>
                </thead>
                <tbody id=\"queries-";
                // line 79
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">
                    ";
                // line 80
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["queries"]);
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
                foreach ($context['_seq'] as $context["i"] => $context["query"]) {
                    // line 81
                    echo "                    <tr id=\"queryNo-";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "\">
                        <td>";
                    // line 82
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "</td>
                        <td class=\"nowrap\">";
                    // line 83
                    echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($context["query"], "executionMS", array()) * 1000)), "html", null, true);
                    echo " ms</td>
                        <td>
                            <pre class=\"highlight highlight_sql\">";
                    // line 85
                    echo twig_escape_filter($this->env, $this->getAttribute($context["query"], "sql", array()), "html", null, true);
                    echo "</pre>
                            <div>
                                <strong class=\"font-normal text-small\">Parameters</strong>: ";
                    // line 87
                    echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($context["query"], "params", array())), "html", null, true);
                    echo "
                            </div>
                        </td>
                    </tr>
                    ";
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
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['query'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 92
                echo "                </tbody>
            </table>
        ";
            }
            // line 95
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['queries'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "    <script type=\"text/javascript\">//<![CDATA[
        function sortTable(header, column, targetId) {
            \"use strict\";

            var direction = parseInt(header.getAttribute('data-sort-direction')) || 1,
                    items = [],
                    target = document.getElementById(targetId),
                    rows = target.children,
                    headers = header.parentElement.children,
                    i;

            for (i = 0; i < rows.length; ++i) {
                items.push(rows[i]);
            }

            for (i = 0; i < headers.length; ++i) {
                headers[i].removeAttribute('data-sort-direction');
                if (headers[i].children.length > 0) {
                    headers[i].children[0].innerHTML = '';
                }
            }

            header.setAttribute('data-sort-direction', (-1*direction).toString());
            header.children[0].innerHTML = direction > 0 ? '<span class=\"text-muted\">&#9650;</span>' : '<span class=\"text-muted\">&#9660;</span>';

            items.sort(function(a, b) {
                return direction * (parseFloat(a.children[column].innerHTML) - parseFloat(b.children[column].innerHTML));
            });

            for (i = 0; i < items.length; ++i) {
                Sfjs.removeClass(items[i], i % 2 ? 'even' : 'odd');
                Sfjs.addClass(items[i], i % 2 ? 'odd' : 'even');
                target.appendChild(items[i]);
            }
        }

        function clear_spans(match) {
            match = match.replace(/<span.*?>/g, \"\");
            match = match.replace(/<\\/span>/g, \"\");
            return \"<span class=\\\"comment\\\">\"+match+\"</span>\";
        }

        // @see http://thecodeplayer.com/walkthrough/mysql-syntax-highlighter-javascript-regex
        function highlight_sql(text) {
            \"use strict\";
            var k = [\"AND\", \"AS\", \"ASC\", \"BETWEEN\", \"BY\", \"CASE\", \"CURRENT_DATE\", \"CURRENT_TIME\", \"DELETE\", \"DESC\", \"DISTINCT\", \"EACH\", \"ELSE\", \"ELSEIF\", \"FALSE\", \"FOR\", \"FROM\", \"GROUP\", \"HAVING\", \"IF\", \"IN\", \"INSERT\", \"INTERVAL\", \"INTO\", \"IS\", \"JOIN\", \"KEY\", \"KEYS\", \"LEFT\", \"LIKE\", \"LIMIT\", \"MATCH\", \"NOT\", \"NULL\", \"ON\", \"OPTION\", \"OR\", \"ORDER\", \"OUT\", \"OUTER\", \"REPLACE\", \"RIGHT\", \"SELECT\", \"SET\", \"TABLE\", \"THEN\", \"TO\", \"TRUE\", \"UPDATE\", \"VALUES\", \"WHEN\", \"WHERE\"];
            var len = k.length;
            for(i = 0; i < len; i++) {
                k.push(k[i].toLowerCase());
            }

            var c = text.replace(/(=|%|\\/|\\*|-|,|;|\\+|<|>)/g, \"<span class=\\\"symbol\\\">\$1</span>\");
            c = c.replace(/(['`].*?['`])/g, \"<span class=\\\"string\\\">\$1</span>\");
            c = c.replace(/(\\d+)/g, \"<span class=\\\"number\\\">\$1</span>\");
            c = c.replace(/(\\w*?)\\(/g, \"<span class=\\\"keyword\\\">\$1</span>(\");
            c = c.replace(/([\\(\\)])/g, \"<span class=\\\"symbol\\\">\$1</span>\");

            for(var i = 0; i < k.length; i++)
            {
                var re = new RegExp(\"\\\\b\"+k[i]+\"\\\\b\", \"g\");
                c = c.replace(re, \"<span class=\\\"keyword\\\">\"+k[i]+\"</span>\");
            }
            c = c.replace(/(#.*?\\n)/g, clear_spans);
            c = c.replace(/<span class=\\\"symbol\\\">-<\\/span><span class=\\\"symbol\\\">-<\\/span>/g, \"--\");
            c = c.replace(/(-- .*?\\n)/g, clear_spans);
            c = c.replace(/<span class=\\\"symbol\\\">\\/<\\/span><span class=\\\"symbol\\\">\\*<\\/span>/g, \"/*\");
            c = c.replace(/<span class=\\\"symbol\\\">\\*<\\/span><span class=\\\"symbol\\\">\\/<\\/span>/g, \"*/\");
            return c.replace(/(\\/\\*[\\s\\S]*?\\*\\/)/g, clear_spans);
        }

        var elements = document.querySelectorAll(\"pre.highlight_sql\");

        for (var i = 0; i < elements.length; i++) {
            elements[i].innerHTML = highlight_sql(elements[i].innerHTML);
        }
        //]]></script>
";
        
        $__internal_b7d09de71934965e67186ea51e90b5b57ae2f5c68e3fb25e15974dfe1404aa1f->leave($__internal_b7d09de71934965e67186ea51e90b5b57ae2f5c68e3fb25e15974dfe1404aa1f_prof);

        
        $__internal_8a6c9d2e2dedc085a019e0fca6b664170c6322e001f00fcdc051b6e928631753->leave($__internal_8a6c9d2e2dedc085a019e0fca6b664170c6322e001f00fcdc051b6e928631753_prof);

    }

    public function getTemplateName()
    {
        return "@DoctrineBundle/Collector/db.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 96,  297 => 95,  292 => 92,  273 => 87,  268 => 85,  263 => 83,  259 => 82,  252 => 81,  235 => 80,  231 => 79,  224 => 75,  220 => 74,  215 => 71,  209 => 67,  206 => 66,  200 => 64,  197 => 63,  179 => 62,  177 => 61,  164 => 50,  155 => 49,  141 => 44,  137 => 43,  126 => 34,  117 => 33,  106 => 30,  103 => 29,  97 => 26,  90 => 22,  86 => 20,  83 => 19,  80 => 18,  77 => 17,  70 => 13,  66 => 11,  64 => 10,  60 => 9,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" height=\"24\" viewBox=\"0 0 24 24\" enable-background=\"new 0 0 24 24\" xml:space=\"preserve\">
            <path fill=\"#AAAAAA\" d=\"M5,8h14c1.7,0,3-1.3,3-3s-1.3-3-3-3H5C3.3,2,2,3.3,2,5S3.3,8,5,8z M18,3.6c0.8,0,1.5,0.7,1.5,1.5S18.8,6.6,18,6.6s-1.5-0.7-1.5-1.5S17.2,3.6,18,3.6z M19,9H5c-1.7,0-3,1.3-3,3s1.3,3,3,3h14c1.7,0,3-1.3,3-3S20.7,9,19,9z M18,13.6
            c-0.8,0-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5s1.5,0.7,1.5,1.5S18.8,13.6,18,13.6z M19,16H5c-1.7,0-3,1.3-3,3s1.3,3,3,3h14c1.7,0,3-1.3,3-3S20.7,16,19,16z M18,20.6c-0.8,0-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5s1.5,0.7,1.5,1.5S18.8,20.6,18,20.6z\"></path>
        </svg>
        <span class=\"sf-toolbar-value\">{{ collector.querycount }}</span>
        {% if collector.querycount > 0 %}
        <span class=\"sf-toolbar-info-piece-additional-detail\">
            <span class=\"sf-toolbar-label\">in</span>
            <span class=\"sf-toolbar-value\">{{ '%0.2f'|format(collector.time * 1000) }}</span>
            <span class=\"sf-toolbar-label\">ms</span>
        </span>
        {% endif %}
    {% endset %}
    {% set text %}
        {% spaceless %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Database Queries</b>
            <span class=\"sf-toolbar-status\">{{ collector.querycount }}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Query time</b>
            <span>{{ '%0.2f'|format(collector.time * 1000) }} ms</span>
        </div>
        {% endspaceless %}
    {% endset %}
    {% include '@WebProfiler/Profiler/toolbar_item.html.twig' with { 'link': profiler_url } %}
{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">
        <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" height=\"24\" viewBox=\"0 0 24 24\" enable-background=\"new 0 0 24 24\" xml:space=\"preserve\">
            <path fill=\"#AAAAAA\" d=\"M5,8h14c1.7,0,3-1.3,3-3s-1.3-3-3-3H5C3.3,2,2,3.3,2,5S3.3,8,5,8z M18,3.6c0.8,0,1.5,0.7,1.5,1.5S18.8,6.6,18,6.6s-1.5-0.7-1.5-1.5S17.2,3.6,18,3.6z M19,9H5c-1.7,0-3,1.3-3,3s1.3,3,3,3h14c1.7,0,3-1.3,3-3S20.7,9,19,9z M18,13.6
            c-0.8,0-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5s1.5,0.7,1.5,1.5S18.8,13.6,18,13.6z M19,16H5c-1.7,0-3,1.3-3,3s1.3,3,3,3h14c1.7,0,3-1.3,3-3S20.7,16,19,16z M18,20.6c-0.8,0-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5s1.5,0.7,1.5,1.5S18.8,20.6,18,20.6z\"></path>
        </svg>
    </span>
    <strong>Doctrine</strong>
    <span class=\"count\">
        <span>{{ collector.querycount }}</span>
        <span>{{ '%0.0f'|format(collector.time * 1000) }} ms</span>
    </span>
</span>
{% endblock %}

{% block panel %}
    <style>
        .queries-table td, .queries-table th { vertical-align: top; }
        .queries-table td > div { margin-bottom: 6px; }
        .highlight pre { margin: 0; white-space: pre-wrap; }
        .highlight .keyword   { color: #8959A8; font-weight: bold; }
        .highlight .symbol    { color: #222222; }
        .highlight .comment   { color: #999999; }
        .highlight .string    { color: #718C00; }
        .highlight .number    { color: #F5871F; font-weight: bold; }
    </style>
    <h2>Queries</h2>
    {% set count = collector.queries|length %}
    {% for name, queries in collector.queries %}
        {% if count > 1 %}
            <h3>{{ name }}</h3>
        {% endif %}
        {% if queries is empty %}
            <p>
                <em>No queries.</em>
            </p>
        {% else %}
            <table class=\"alt queries-table\">
                <thead>
                <tr>
                    <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 0, 'queries-{{ loop.index }}')\" data-sort-direction=\"-1\" style=\"cursor: pointer;\">#<span class=\"text-muted\">&#9650;</span></th>
                    <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 1, 'queries-{{ loop.index }}')\" style=\"cursor: pointer;\">Time<span></span></th>
                    <th style=\"width: 100%;\">Info</th>
                </tr>
                </thead>
                <tbody id=\"queries-{{ loop.index }}\">
                    {% for i, query in queries %}
                    <tr id=\"queryNo-{{ i }}-{{ loop.parent.loop.index }}\">
                        <td>{{ loop.index }}</td>
                        <td class=\"nowrap\">{{ '%0.2f'|format(query.executionMS * 1000) }} ms</td>
                        <td>
                            <pre class=\"highlight highlight_sql\">{{ query.sql }}</pre>
                            <div>
                                <strong class=\"font-normal text-small\">Parameters</strong>: {{ query.params|json_encode() }}
                            </div>
                        </td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
        {% endif %}
    {% endfor %}
    <script type=\"text/javascript\">//<![CDATA[
        function sortTable(header, column, targetId) {
            \"use strict\";

            var direction = parseInt(header.getAttribute('data-sort-direction')) || 1,
                    items = [],
                    target = document.getElementById(targetId),
                    rows = target.children,
                    headers = header.parentElement.children,
                    i;

            for (i = 0; i < rows.length; ++i) {
                items.push(rows[i]);
            }

            for (i = 0; i < headers.length; ++i) {
                headers[i].removeAttribute('data-sort-direction');
                if (headers[i].children.length > 0) {
                    headers[i].children[0].innerHTML = '';
                }
            }

            header.setAttribute('data-sort-direction', (-1*direction).toString());
            header.children[0].innerHTML = direction > 0 ? '<span class=\"text-muted\">&#9650;</span>' : '<span class=\"text-muted\">&#9660;</span>';

            items.sort(function(a, b) {
                return direction * (parseFloat(a.children[column].innerHTML) - parseFloat(b.children[column].innerHTML));
            });

            for (i = 0; i < items.length; ++i) {
                Sfjs.removeClass(items[i], i % 2 ? 'even' : 'odd');
                Sfjs.addClass(items[i], i % 2 ? 'odd' : 'even');
                target.appendChild(items[i]);
            }
        }

        function clear_spans(match) {
            match = match.replace(/<span.*?>/g, \"\");
            match = match.replace(/<\\/span>/g, \"\");
            return \"<span class=\\\"comment\\\">\"+match+\"</span>\";
        }

        // @see http://thecodeplayer.com/walkthrough/mysql-syntax-highlighter-javascript-regex
        function highlight_sql(text) {
            \"use strict\";
            var k = [\"AND\", \"AS\", \"ASC\", \"BETWEEN\", \"BY\", \"CASE\", \"CURRENT_DATE\", \"CURRENT_TIME\", \"DELETE\", \"DESC\", \"DISTINCT\", \"EACH\", \"ELSE\", \"ELSEIF\", \"FALSE\", \"FOR\", \"FROM\", \"GROUP\", \"HAVING\", \"IF\", \"IN\", \"INSERT\", \"INTERVAL\", \"INTO\", \"IS\", \"JOIN\", \"KEY\", \"KEYS\", \"LEFT\", \"LIKE\", \"LIMIT\", \"MATCH\", \"NOT\", \"NULL\", \"ON\", \"OPTION\", \"OR\", \"ORDER\", \"OUT\", \"OUTER\", \"REPLACE\", \"RIGHT\", \"SELECT\", \"SET\", \"TABLE\", \"THEN\", \"TO\", \"TRUE\", \"UPDATE\", \"VALUES\", \"WHEN\", \"WHERE\"];
            var len = k.length;
            for(i = 0; i < len; i++) {
                k.push(k[i].toLowerCase());
            }

            var c = text.replace(/(=|%|\\/|\\*|-|,|;|\\+|<|>)/g, \"<span class=\\\"symbol\\\">\$1</span>\");
            c = c.replace(/(['`].*?['`])/g, \"<span class=\\\"string\\\">\$1</span>\");
            c = c.replace(/(\\d+)/g, \"<span class=\\\"number\\\">\$1</span>\");
            c = c.replace(/(\\w*?)\\(/g, \"<span class=\\\"keyword\\\">\$1</span>(\");
            c = c.replace(/([\\(\\)])/g, \"<span class=\\\"symbol\\\">\$1</span>\");

            for(var i = 0; i < k.length; i++)
            {
                var re = new RegExp(\"\\\\b\"+k[i]+\"\\\\b\", \"g\");
                c = c.replace(re, \"<span class=\\\"keyword\\\">\"+k[i]+\"</span>\");
            }
            c = c.replace(/(#.*?\\n)/g, clear_spans);
            c = c.replace(/<span class=\\\"symbol\\\">-<\\/span><span class=\\\"symbol\\\">-<\\/span>/g, \"--\");
            c = c.replace(/(-- .*?\\n)/g, clear_spans);
            c = c.replace(/<span class=\\\"symbol\\\">\\/<\\/span><span class=\\\"symbol\\\">\\*<\\/span>/g, \"/*\");
            c = c.replace(/<span class=\\\"symbol\\\">\\*<\\/span><span class=\\\"symbol\\\">\\/<\\/span>/g, \"*/\");
            return c.replace(/(\\/\\*[\\s\\S]*?\\*\\/)/g, clear_spans);
        }

        var elements = document.querySelectorAll(\"pre.highlight_sql\");

        for (var i = 0; i < elements.length; i++) {
            elements[i].innerHTML = highlight_sql(elements[i].innerHTML);
        }
        //]]></script>
{% endblock %}", "@DoctrineBundle/Collector/db.html.twig", "/home/epi/15_galek/public_html/app3/vendor/sorien/silex-dbal-profiler/src/Sorien/Resources/views/Collector/db.html.twig");
    }
}
