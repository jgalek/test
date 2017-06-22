<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_6a23790400209e93226c79b3b58564432d5a3091626eaf3684f5367ed5832e86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8167a1505ef04be50c1fbe202be439e9c4de97406532a0007611a17358cb6d37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8167a1505ef04be50c1fbe202be439e9c4de97406532a0007611a17358cb6d37->enter($__internal_8167a1505ef04be50c1fbe202be439e9c4de97406532a0007611a17358cb6d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_96ced030b93590e451418bc9e5fff07bc3afd46fad08dcca3e71de6459f85526 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96ced030b93590e451418bc9e5fff07bc3afd46fad08dcca3e71de6459f85526->enter($__internal_96ced030b93590e451418bc9e5fff07bc3afd46fad08dcca3e71de6459f85526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 90
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 128
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 152
        echo "
";
        // line 153
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 174
        echo "
";
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('form_label', $context, $blocks);
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('choice_label', $context, $blocks);
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 191
        echo "
";
        // line 192
        $this->displayBlock('radio_label', $context, $blocks);
        // line 195
        echo "
";
        // line 196
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 220
        echo "
";
        // line 222
        echo "
";
        // line 223
        $this->displayBlock('form_row', $context, $blocks);
        // line 230
        echo "
";
        // line 231
        $this->displayBlock('button_row', $context, $blocks);
        // line 236
        echo "
";
        // line 237
        $this->displayBlock('choice_row', $context, $blocks);
        // line 241
        echo "
";
        // line 242
        $this->displayBlock('date_row', $context, $blocks);
        // line 246
        echo "
";
        // line 247
        $this->displayBlock('time_row', $context, $blocks);
        // line 251
        echo "
";
        // line 252
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 256
        echo "
";
        // line 257
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 263
        echo "
";
        // line 264
        $this->displayBlock('radio_row', $context, $blocks);
        // line 270
        echo "
";
        // line 272
        echo "
";
        // line 273
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_8167a1505ef04be50c1fbe202be439e9c4de97406532a0007611a17358cb6d37->leave($__internal_8167a1505ef04be50c1fbe202be439e9c4de97406532a0007611a17358cb6d37_prof);

        
        $__internal_96ced030b93590e451418bc9e5fff07bc3afd46fad08dcca3e71de6459f85526->leave($__internal_96ced030b93590e451418bc9e5fff07bc3afd46fad08dcca3e71de6459f85526_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_0fe9cafb1554349c70544f920f1f8908cb56697f5effd8398844b722eb182214 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fe9cafb1554349c70544f920f1f8908cb56697f5effd8398844b722eb182214->enter($__internal_0fe9cafb1554349c70544f920f1f8908cb56697f5effd8398844b722eb182214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_385acb4364d47274005e76901b835a1591242eb7af7893f6ba13232fa72ff2d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_385acb4364d47274005e76901b835a1591242eb7af7893f6ba13232fa72ff2d3->enter($__internal_385acb4364d47274005e76901b835a1591242eb7af7893f6ba13232fa72ff2d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_385acb4364d47274005e76901b835a1591242eb7af7893f6ba13232fa72ff2d3->leave($__internal_385acb4364d47274005e76901b835a1591242eb7af7893f6ba13232fa72ff2d3_prof);

        
        $__internal_0fe9cafb1554349c70544f920f1f8908cb56697f5effd8398844b722eb182214->leave($__internal_0fe9cafb1554349c70544f920f1f8908cb56697f5effd8398844b722eb182214_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_026fc7616b1043f701919cf0007b9062d991bd8478389188a8c4807fd3845f89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_026fc7616b1043f701919cf0007b9062d991bd8478389188a8c4807fd3845f89->enter($__internal_026fc7616b1043f701919cf0007b9062d991bd8478389188a8c4807fd3845f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_0d3fd6e79731495d6aaaec3569f90b30ff758cec073f049c38c9429e1b8fa68a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d3fd6e79731495d6aaaec3569f90b30ff758cec073f049c38c9429e1b8fa68a->enter($__internal_0d3fd6e79731495d6aaaec3569f90b30ff758cec073f049c38c9429e1b8fa68a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_0d3fd6e79731495d6aaaec3569f90b30ff758cec073f049c38c9429e1b8fa68a->leave($__internal_0d3fd6e79731495d6aaaec3569f90b30ff758cec073f049c38c9429e1b8fa68a_prof);

        
        $__internal_026fc7616b1043f701919cf0007b9062d991bd8478389188a8c4807fd3845f89->leave($__internal_026fc7616b1043f701919cf0007b9062d991bd8478389188a8c4807fd3845f89_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_670cb76324aa623fdef891837f920b994223cf7ad78ddcee8162ff9c4bc58ed5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_670cb76324aa623fdef891837f920b994223cf7ad78ddcee8162ff9c4bc58ed5->enter($__internal_670cb76324aa623fdef891837f920b994223cf7ad78ddcee8162ff9c4bc58ed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_1f7454249f07b5e945eb3507cfbf563d229a707a18b7131f8cdc42dab513525e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f7454249f07b5e945eb3507cfbf563d229a707a18b7131f8cdc42dab513525e->enter($__internal_1f7454249f07b5e945eb3507cfbf563d229a707a18b7131f8cdc42dab513525e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_1f7454249f07b5e945eb3507cfbf563d229a707a18b7131f8cdc42dab513525e->leave($__internal_1f7454249f07b5e945eb3507cfbf563d229a707a18b7131f8cdc42dab513525e_prof);

        
        $__internal_670cb76324aa623fdef891837f920b994223cf7ad78ddcee8162ff9c4bc58ed5->leave($__internal_670cb76324aa623fdef891837f920b994223cf7ad78ddcee8162ff9c4bc58ed5_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_a00453b189ddc858d22801c5a006ce68251d00b216e3f5b837e20be15125ef11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a00453b189ddc858d22801c5a006ce68251d00b216e3f5b837e20be15125ef11->enter($__internal_a00453b189ddc858d22801c5a006ce68251d00b216e3f5b837e20be15125ef11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_3f57b310ace5cc4e7bf9ef35f836d6b20ba6d01bf0a5d1289a7f7fdd64054651 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f57b310ace5cc4e7bf9ef35f836d6b20ba6d01bf0a5d1289a7f7fdd64054651->enter($__internal_3f57b310ace5cc4e7bf9ef35f836d6b20ba6d01bf0a5d1289a7f7fdd64054651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_378517909fe48687e416da2e32ebc6bea9ca0769ef7deae0b8701739d0caeeec = (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern"))) && is_string($__internal_3d0225ec30592e29b73d633966b0732b3f962deff6bdf41fcfdd53077aacd40e = "{{") && ('' === $__internal_3d0225ec30592e29b73d633966b0732b3f962deff6bdf41fcfdd53077aacd40e || 0 === strpos($__internal_378517909fe48687e416da2e32ebc6bea9ca0769ef7deae0b8701739d0caeeec, $__internal_3d0225ec30592e29b73d633966b0732b3f962deff6bdf41fcfdd53077aacd40e)));
        // line 25
        echo "        ";
        if ( !(isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if ((isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_3f57b310ace5cc4e7bf9ef35f836d6b20ba6d01bf0a5d1289a7f7fdd64054651->leave($__internal_3f57b310ace5cc4e7bf9ef35f836d6b20ba6d01bf0a5d1289a7f7fdd64054651_prof);

        
        $__internal_a00453b189ddc858d22801c5a006ce68251d00b216e3f5b837e20be15125ef11->leave($__internal_a00453b189ddc858d22801c5a006ce68251d00b216e3f5b837e20be15125ef11_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_81ec4c58c0fa04d4e04fb6c024abb8c784323196cc55fd265391fcb8e49e8fd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81ec4c58c0fa04d4e04fb6c024abb8c784323196cc55fd265391fcb8e49e8fd1->enter($__internal_81ec4c58c0fa04d4e04fb6c024abb8c784323196cc55fd265391fcb8e49e8fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_0f39c8529c6893a3490dbee5a4c9dc800535c7920171b98b64a725bfe94f7c84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f39c8529c6893a3490dbee5a4c9dc800535c7920171b98b64a725bfe94f7c84->enter($__internal_0f39c8529c6893a3490dbee5a4c9dc800535c7920171b98b64a725bfe94f7c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_0f39c8529c6893a3490dbee5a4c9dc800535c7920171b98b64a725bfe94f7c84->leave($__internal_0f39c8529c6893a3490dbee5a4c9dc800535c7920171b98b64a725bfe94f7c84_prof);

        
        $__internal_81ec4c58c0fa04d4e04fb6c024abb8c784323196cc55fd265391fcb8e49e8fd1->leave($__internal_81ec4c58c0fa04d4e04fb6c024abb8c784323196cc55fd265391fcb8e49e8fd1_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_f5f918157aebb90650b6cdbc4260f3e784c72553980c7a98505514175dbaadf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5f918157aebb90650b6cdbc4260f3e784c72553980c7a98505514175dbaadf7->enter($__internal_f5f918157aebb90650b6cdbc4260f3e784c72553980c7a98505514175dbaadf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_d8020bfbb5c3b51004fe1bab56a6cc0977eede1a2a21defc8f51b5784556a0df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8020bfbb5c3b51004fe1bab56a6cc0977eede1a2a21defc8f51b5784556a0df->enter($__internal_d8020bfbb5c3b51004fe1bab56a6cc0977eede1a2a21defc8f51b5784556a0df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_d8020bfbb5c3b51004fe1bab56a6cc0977eede1a2a21defc8f51b5784556a0df->leave($__internal_d8020bfbb5c3b51004fe1bab56a6cc0977eede1a2a21defc8f51b5784556a0df_prof);

        
        $__internal_f5f918157aebb90650b6cdbc4260f3e784c72553980c7a98505514175dbaadf7->leave($__internal_f5f918157aebb90650b6cdbc4260f3e784c72553980c7a98505514175dbaadf7_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_6c81ea4aa9b22482442e33e3d329a16c216908e27a2a7fa5142743bd0ffe291c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c81ea4aa9b22482442e33e3d329a16c216908e27a2a7fa5142743bd0ffe291c->enter($__internal_6c81ea4aa9b22482442e33e3d329a16c216908e27a2a7fa5142743bd0ffe291c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_eec5793b67fd7840c80f8141f153ad3bbb0160948ea668623464a37d833a9db1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eec5793b67fd7840c80f8141f153ad3bbb0160948ea668623464a37d833a9db1->enter($__internal_eec5793b67fd7840c80f8141f153ad3bbb0160948ea668623464a37d833a9db1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_eec5793b67fd7840c80f8141f153ad3bbb0160948ea668623464a37d833a9db1->leave($__internal_eec5793b67fd7840c80f8141f153ad3bbb0160948ea668623464a37d833a9db1_prof);

        
        $__internal_6c81ea4aa9b22482442e33e3d329a16c216908e27a2a7fa5142743bd0ffe291c->leave($__internal_6c81ea4aa9b22482442e33e3d329a16c216908e27a2a7fa5142743bd0ffe291c_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_949fb2347dcc74fe94ea45b99010db030d5003a40fa83e2758c4b80f998abfb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_949fb2347dcc74fe94ea45b99010db030d5003a40fa83e2758c4b80f998abfb0->enter($__internal_949fb2347dcc74fe94ea45b99010db030d5003a40fa83e2758c4b80f998abfb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_7c957c3f6fdb08702db3938394393eacc438cf198b9939d4d347e5dd03e675b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c957c3f6fdb08702db3938394393eacc438cf198b9939d4d347e5dd03e675b9->enter($__internal_7c957c3f6fdb08702db3938394393eacc438cf198b9939d4d347e5dd03e675b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_7c957c3f6fdb08702db3938394393eacc438cf198b9939d4d347e5dd03e675b9->leave($__internal_7c957c3f6fdb08702db3938394393eacc438cf198b9939d4d347e5dd03e675b9_prof);

        
        $__internal_949fb2347dcc74fe94ea45b99010db030d5003a40fa83e2758c4b80f998abfb0->leave($__internal_949fb2347dcc74fe94ea45b99010db030d5003a40fa83e2758c4b80f998abfb0_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_e5ee1e83f6862ec943047224006527d907f4629e21b48b6eebce432a11525adc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5ee1e83f6862ec943047224006527d907f4629e21b48b6eebce432a11525adc->enter($__internal_e5ee1e83f6862ec943047224006527d907f4629e21b48b6eebce432a11525adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_82fff1ebbced8398bef2947c9fdb15cc1827dd68d79a97d804f32e312da522ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82fff1ebbced8398bef2947c9fdb15cc1827dd68d79a97d804f32e312da522ba->enter($__internal_82fff1ebbced8398bef2947c9fdb15cc1827dd68d79a97d804f32e312da522ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            // line 97
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 98
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter((isset($context["table_class"]) ? $context["table_class"] : $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 101
            if ((isset($context["with_years"]) ? $context["with_years"] : $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 102
            if ((isset($context["with_months"]) ? $context["with_months"] : $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 103
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 104
            if ((isset($context["with_days"]) ? $context["with_days"] : $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 105
            if ((isset($context["with_hours"]) ? $context["with_hours"] : $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 106
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 107
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 108
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 112
            if ((isset($context["with_years"]) ? $context["with_years"] : $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 113
            if ((isset($context["with_months"]) ? $context["with_months"] : $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 114
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 115
            if ((isset($context["with_days"]) ? $context["with_days"] : $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 116
            if ((isset($context["with_hours"]) ? $context["with_hours"] : $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 117
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 119
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 123
            if ((isset($context["with_invert"]) ? $context["with_invert"] : $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 124
            echo "</div>";
        }
        
        $__internal_82fff1ebbced8398bef2947c9fdb15cc1827dd68d79a97d804f32e312da522ba->leave($__internal_82fff1ebbced8398bef2947c9fdb15cc1827dd68d79a97d804f32e312da522ba_prof);

        
        $__internal_e5ee1e83f6862ec943047224006527d907f4629e21b48b6eebce432a11525adc->leave($__internal_e5ee1e83f6862ec943047224006527d907f4629e21b48b6eebce432a11525adc_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_70e0ca76a74b30aaa336676c23f675bf44f9b3459b33d9d7876abb09a3919c4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70e0ca76a74b30aaa336676c23f675bf44f9b3459b33d9d7876abb09a3919c4c->enter($__internal_70e0ca76a74b30aaa336676c23f675bf44f9b3459b33d9d7876abb09a3919c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_a72d852aae13359914022fda6f8ff3db20498daa461f04057c1c53ec3bb7b153 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a72d852aae13359914022fda6f8ff3db20498daa461f04057c1c53ec3bb7b153->enter($__internal_a72d852aae13359914022fda6f8ff3db20498daa461f04057c1c53ec3bb7b153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_a72d852aae13359914022fda6f8ff3db20498daa461f04057c1c53ec3bb7b153->leave($__internal_a72d852aae13359914022fda6f8ff3db20498daa461f04057c1c53ec3bb7b153_prof);

        
        $__internal_70e0ca76a74b30aaa336676c23f675bf44f9b3459b33d9d7876abb09a3919c4c->leave($__internal_70e0ca76a74b30aaa336676c23f675bf44f9b3459b33d9d7876abb09a3919c4c_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_d6e906d061e03c3d59aa11baf1540a384a8fdd60dae5c9c8dce7230fc7051d01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6e906d061e03c3d59aa11baf1540a384a8fdd60dae5c9c8dce7230fc7051d01->enter($__internal_d6e906d061e03c3d59aa11baf1540a384a8fdd60dae5c9c8dce7230fc7051d01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_9bae3ccabf9cabd82ef3d11d7ceccec62e136b8a5d4c60498998c52e14a2c237 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bae3ccabf9cabd82ef3d11d7ceccec62e136b8a5d4c60498998c52e14a2c237->enter($__internal_9bae3ccabf9cabd82ef3d11d7ceccec62e136b8a5d4c60498998c52e14a2c237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 134
        if (twig_in_filter("-inline", (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) {
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 136
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 137
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 138
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 142
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 144
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 145
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 146
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "</div>";
        }
        
        $__internal_9bae3ccabf9cabd82ef3d11d7ceccec62e136b8a5d4c60498998c52e14a2c237->leave($__internal_9bae3ccabf9cabd82ef3d11d7ceccec62e136b8a5d4c60498998c52e14a2c237_prof);

        
        $__internal_d6e906d061e03c3d59aa11baf1540a384a8fdd60dae5c9c8dce7230fc7051d01->leave($__internal_d6e906d061e03c3d59aa11baf1540a384a8fdd60dae5c9c8dce7230fc7051d01_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_45e9ef645078b34dcb4bf6c650f46ca8942ef7955b5c034940e38482357a070a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45e9ef645078b34dcb4bf6c650f46ca8942ef7955b5c034940e38482357a070a->enter($__internal_45e9ef645078b34dcb4bf6c650f46ca8942ef7955b5c034940e38482357a070a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_24a4d344092e258c2e7fdb3ad9c589d89c1fbd47e732b46d5c3d15cef731b46d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24a4d344092e258c2e7fdb3ad9c589d89c1fbd47e732b46d5c3d15cef731b46d->enter($__internal_24a4d344092e258c2e7fdb3ad9c589d89c1fbd47e732b46d5c3d15cef731b46d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 154
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 155
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 156
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 158
            echo "<div class=\"checkbox\">";
            // line 159
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 160
            echo "</div>";
        }
        
        $__internal_24a4d344092e258c2e7fdb3ad9c589d89c1fbd47e732b46d5c3d15cef731b46d->leave($__internal_24a4d344092e258c2e7fdb3ad9c589d89c1fbd47e732b46d5c3d15cef731b46d_prof);

        
        $__internal_45e9ef645078b34dcb4bf6c650f46ca8942ef7955b5c034940e38482357a070a->leave($__internal_45e9ef645078b34dcb4bf6c650f46ca8942ef7955b5c034940e38482357a070a_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_d3b44d4d145809d34c0d929c0a30b60120b4cff26afd9821f333262c09f48b24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3b44d4d145809d34c0d929c0a30b60120b4cff26afd9821f333262c09f48b24->enter($__internal_d3b44d4d145809d34c0d929c0a30b60120b4cff26afd9821f333262c09f48b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_cbd6c752328569a66be80ff196b0b2699858c4c1dc3be94eb9c0581756b4da2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbd6c752328569a66be80ff196b0b2699858c4c1dc3be94eb9c0581756b4da2c->enter($__internal_cbd6c752328569a66be80ff196b0b2699858c4c1dc3be94eb9c0581756b4da2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 165
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 166
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 167
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 169
            echo "<div class=\"radio\">";
            // line 170
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 171
            echo "</div>";
        }
        
        $__internal_cbd6c752328569a66be80ff196b0b2699858c4c1dc3be94eb9c0581756b4da2c->leave($__internal_cbd6c752328569a66be80ff196b0b2699858c4c1dc3be94eb9c0581756b4da2c_prof);

        
        $__internal_d3b44d4d145809d34c0d929c0a30b60120b4cff26afd9821f333262c09f48b24->leave($__internal_d3b44d4d145809d34c0d929c0a30b60120b4cff26afd9821f333262c09f48b24_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_c6e0c10c214f5ae6ce771b4d767f5f7deb355195b0d5587ea74f29a1c6031a95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6e0c10c214f5ae6ce771b4d767f5f7deb355195b0d5587ea74f29a1c6031a95->enter($__internal_c6e0c10c214f5ae6ce771b4d767f5f7deb355195b0d5587ea74f29a1c6031a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_dcd894a8f6addcaeef93eef83916ba1af09b5a89a2ddf91ee9f7ee2c0b544bdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcd894a8f6addcaeef93eef83916ba1af09b5a89a2ddf91ee9f7ee2c0b544bdd->enter($__internal_dcd894a8f6addcaeef93eef83916ba1af09b5a89a2ddf91ee9f7ee2c0b544bdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_dcd894a8f6addcaeef93eef83916ba1af09b5a89a2ddf91ee9f7ee2c0b544bdd->leave($__internal_dcd894a8f6addcaeef93eef83916ba1af09b5a89a2ddf91ee9f7ee2c0b544bdd_prof);

        
        $__internal_c6e0c10c214f5ae6ce771b4d767f5f7deb355195b0d5587ea74f29a1c6031a95->leave($__internal_c6e0c10c214f5ae6ce771b4d767f5f7deb355195b0d5587ea74f29a1c6031a95_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_be8e62412c7e714bb00bc2a8bdac0ee082c3c73dbff2ba9c64ffae5a4b36fd63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be8e62412c7e714bb00bc2a8bdac0ee082c3c73dbff2ba9c64ffae5a4b36fd63->enter($__internal_be8e62412c7e714bb00bc2a8bdac0ee082c3c73dbff2ba9c64ffae5a4b36fd63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_01404fa88200799eca8e91ef1424381b7c7f80ab74c63f04c6852e9382ad9e48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01404fa88200799eca8e91ef1424381b7c7f80ab74c63f04c6852e9382ad9e48->enter($__internal_01404fa88200799eca8e91ef1424381b7c7f80ab74c63f04c6852e9382ad9e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_01404fa88200799eca8e91ef1424381b7c7f80ab74c63f04c6852e9382ad9e48->leave($__internal_01404fa88200799eca8e91ef1424381b7c7f80ab74c63f04c6852e9382ad9e48_prof);

        
        $__internal_be8e62412c7e714bb00bc2a8bdac0ee082c3c73dbff2ba9c64ffae5a4b36fd63->leave($__internal_be8e62412c7e714bb00bc2a8bdac0ee082c3c73dbff2ba9c64ffae5a4b36fd63_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_a1a538b5994178c5c1169ea90db770bcb15353e2d8da0f493c979aec858dc50e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1a538b5994178c5c1169ea90db770bcb15353e2d8da0f493c979aec858dc50e->enter($__internal_a1a538b5994178c5c1169ea90db770bcb15353e2d8da0f493c979aec858dc50e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_d9b3ba43d628dba85a357a1f66681d0552cc5430c3d6f8f62ba62c1337a45982 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9b3ba43d628dba85a357a1f66681d0552cc5430c3d6f8f62ba62c1337a45982->enter($__internal_d9b3ba43d628dba85a357a1f66681d0552cc5430c3d6f8f62ba62c1337a45982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_d9b3ba43d628dba85a357a1f66681d0552cc5430c3d6f8f62ba62c1337a45982->leave($__internal_d9b3ba43d628dba85a357a1f66681d0552cc5430c3d6f8f62ba62c1337a45982_prof);

        
        $__internal_a1a538b5994178c5c1169ea90db770bcb15353e2d8da0f493c979aec858dc50e->leave($__internal_a1a538b5994178c5c1169ea90db770bcb15353e2d8da0f493c979aec858dc50e_prof);

    }

    // line 192
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_caa572bda9629a4307e26f6a6bf0a537dead21f7851ec1d6eddf97faf713381d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caa572bda9629a4307e26f6a6bf0a537dead21f7851ec1d6eddf97faf713381d->enter($__internal_caa572bda9629a4307e26f6a6bf0a537dead21f7851ec1d6eddf97faf713381d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_cb43aa361bcbb38e9c179d5397f02c31de11115029fe066dedf2096d4dfd5d5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb43aa361bcbb38e9c179d5397f02c31de11115029fe066dedf2096d4dfd5d5d->enter($__internal_cb43aa361bcbb38e9c179d5397f02c31de11115029fe066dedf2096d4dfd5d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 193
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_cb43aa361bcbb38e9c179d5397f02c31de11115029fe066dedf2096d4dfd5d5d->leave($__internal_cb43aa361bcbb38e9c179d5397f02c31de11115029fe066dedf2096d4dfd5d5d_prof);

        
        $__internal_caa572bda9629a4307e26f6a6bf0a537dead21f7851ec1d6eddf97faf713381d->leave($__internal_caa572bda9629a4307e26f6a6bf0a537dead21f7851ec1d6eddf97faf713381d_prof);

    }

    // line 196
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_aa30e576bde89ad9fa61b293a97a40b9f24faf3396b01897c86fbbdc17067c45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa30e576bde89ad9fa61b293a97a40b9f24faf3396b01897c86fbbdc17067c45->enter($__internal_aa30e576bde89ad9fa61b293a97a40b9f24faf3396b01897c86fbbdc17067c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_16f0683cf905af9b6c0aaeddb44b57efa77e2c1f835e36e294e64b3c5fa426f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16f0683cf905af9b6c0aaeddb44b57efa77e2c1f835e36e294e64b3c5fa426f1->enter($__internal_16f0683cf905af9b6c0aaeddb44b57efa77e2c1f835e36e294e64b3c5fa426f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 197
        echo "    ";
        // line 198
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 199
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 200
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 201
                echo "        ";
            }
            // line 202
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 203
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
                // line 204
                echo "        ";
            }
            // line 205
            echo "        ";
            if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
                // line 206
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 207
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 208
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 209
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 212
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 215
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 216
            echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) ? (((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 217
            echo "</label>
    ";
        }
        
        $__internal_16f0683cf905af9b6c0aaeddb44b57efa77e2c1f835e36e294e64b3c5fa426f1->leave($__internal_16f0683cf905af9b6c0aaeddb44b57efa77e2c1f835e36e294e64b3c5fa426f1_prof);

        
        $__internal_aa30e576bde89ad9fa61b293a97a40b9f24faf3396b01897c86fbbdc17067c45->leave($__internal_aa30e576bde89ad9fa61b293a97a40b9f24faf3396b01897c86fbbdc17067c45_prof);

    }

    // line 223
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_fa8f30156b5a934df94c823df9dc1f239c646f46ff858d92b7a6f71bcb132192 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa8f30156b5a934df94c823df9dc1f239c646f46ff858d92b7a6f71bcb132192->enter($__internal_fa8f30156b5a934df94c823df9dc1f239c646f46ff858d92b7a6f71bcb132192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_1dcb68c209a3d427e24c6bb586622bfbe584be60bd3caa4bb61ec60a81c3f491 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dcb68c209a3d427e24c6bb586622bfbe584be60bd3caa4bb61ec60a81c3f491->enter($__internal_1dcb68c209a3d427e24c6bb586622bfbe584be60bd3caa4bb61ec60a81c3f491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 224
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 225
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 226
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 227
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 228
        echo "</div>";
        
        $__internal_1dcb68c209a3d427e24c6bb586622bfbe584be60bd3caa4bb61ec60a81c3f491->leave($__internal_1dcb68c209a3d427e24c6bb586622bfbe584be60bd3caa4bb61ec60a81c3f491_prof);

        
        $__internal_fa8f30156b5a934df94c823df9dc1f239c646f46ff858d92b7a6f71bcb132192->leave($__internal_fa8f30156b5a934df94c823df9dc1f239c646f46ff858d92b7a6f71bcb132192_prof);

    }

    // line 231
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_1c1123ea04080cd62b3f922fee7ff0a03ad8b318464b28b16f9c9b38ef5f580a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c1123ea04080cd62b3f922fee7ff0a03ad8b318464b28b16f9c9b38ef5f580a->enter($__internal_1c1123ea04080cd62b3f922fee7ff0a03ad8b318464b28b16f9c9b38ef5f580a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_96385a21b7529e938501b80b6740cc64e21a72d791c869ab8ace3589650733f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96385a21b7529e938501b80b6740cc64e21a72d791c869ab8ace3589650733f4->enter($__internal_96385a21b7529e938501b80b6740cc64e21a72d791c869ab8ace3589650733f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 232
        echo "<div class=\"form-group\">";
        // line 233
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 234
        echo "</div>";
        
        $__internal_96385a21b7529e938501b80b6740cc64e21a72d791c869ab8ace3589650733f4->leave($__internal_96385a21b7529e938501b80b6740cc64e21a72d791c869ab8ace3589650733f4_prof);

        
        $__internal_1c1123ea04080cd62b3f922fee7ff0a03ad8b318464b28b16f9c9b38ef5f580a->leave($__internal_1c1123ea04080cd62b3f922fee7ff0a03ad8b318464b28b16f9c9b38ef5f580a_prof);

    }

    // line 237
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_8e146075fb0e5c2ee01b7f145c38907dcb13431a0da2b4c3d9005e2b6e4dc8e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e146075fb0e5c2ee01b7f145c38907dcb13431a0da2b4c3d9005e2b6e4dc8e7->enter($__internal_8e146075fb0e5c2ee01b7f145c38907dcb13431a0da2b4c3d9005e2b6e4dc8e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_362f2c7a0fdbce99b836f22e32e6e9df9516f8c9684d2756cb0a492969f68576 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_362f2c7a0fdbce99b836f22e32e6e9df9516f8c9684d2756cb0a492969f68576->enter($__internal_362f2c7a0fdbce99b836f22e32e6e9df9516f8c9684d2756cb0a492969f68576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 238
        $context["force_error"] = true;
        // line 239
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_362f2c7a0fdbce99b836f22e32e6e9df9516f8c9684d2756cb0a492969f68576->leave($__internal_362f2c7a0fdbce99b836f22e32e6e9df9516f8c9684d2756cb0a492969f68576_prof);

        
        $__internal_8e146075fb0e5c2ee01b7f145c38907dcb13431a0da2b4c3d9005e2b6e4dc8e7->leave($__internal_8e146075fb0e5c2ee01b7f145c38907dcb13431a0da2b4c3d9005e2b6e4dc8e7_prof);

    }

    // line 242
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_b2a10a626e4de488b9044f38925939e9a8a63916f5829f327b9d0b8c49cd655a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2a10a626e4de488b9044f38925939e9a8a63916f5829f327b9d0b8c49cd655a->enter($__internal_b2a10a626e4de488b9044f38925939e9a8a63916f5829f327b9d0b8c49cd655a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_e49cb00f9229649c605754b9ed3effc3d799d071efbe8e2eb4a87f253737b39c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e49cb00f9229649c605754b9ed3effc3d799d071efbe8e2eb4a87f253737b39c->enter($__internal_e49cb00f9229649c605754b9ed3effc3d799d071efbe8e2eb4a87f253737b39c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 243
        $context["force_error"] = true;
        // line 244
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_e49cb00f9229649c605754b9ed3effc3d799d071efbe8e2eb4a87f253737b39c->leave($__internal_e49cb00f9229649c605754b9ed3effc3d799d071efbe8e2eb4a87f253737b39c_prof);

        
        $__internal_b2a10a626e4de488b9044f38925939e9a8a63916f5829f327b9d0b8c49cd655a->leave($__internal_b2a10a626e4de488b9044f38925939e9a8a63916f5829f327b9d0b8c49cd655a_prof);

    }

    // line 247
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_8ab94a0b677846f8e900a427249f2a1d31cefac4747bcff8103212a9320c54bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ab94a0b677846f8e900a427249f2a1d31cefac4747bcff8103212a9320c54bd->enter($__internal_8ab94a0b677846f8e900a427249f2a1d31cefac4747bcff8103212a9320c54bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_dba159bab430616ebf7c2b0cdf50cdf49a0a23c85ec02d3059c657be448a3935 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dba159bab430616ebf7c2b0cdf50cdf49a0a23c85ec02d3059c657be448a3935->enter($__internal_dba159bab430616ebf7c2b0cdf50cdf49a0a23c85ec02d3059c657be448a3935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 248
        $context["force_error"] = true;
        // line 249
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_dba159bab430616ebf7c2b0cdf50cdf49a0a23c85ec02d3059c657be448a3935->leave($__internal_dba159bab430616ebf7c2b0cdf50cdf49a0a23c85ec02d3059c657be448a3935_prof);

        
        $__internal_8ab94a0b677846f8e900a427249f2a1d31cefac4747bcff8103212a9320c54bd->leave($__internal_8ab94a0b677846f8e900a427249f2a1d31cefac4747bcff8103212a9320c54bd_prof);

    }

    // line 252
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_e2d4d265b0ff4471f9acf0569eccbc098e2ba5dec30f1ccd9488e57e5a9a01e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2d4d265b0ff4471f9acf0569eccbc098e2ba5dec30f1ccd9488e57e5a9a01e0->enter($__internal_e2d4d265b0ff4471f9acf0569eccbc098e2ba5dec30f1ccd9488e57e5a9a01e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_c12d6bee00e28f84a617103dd0e2d7b43907df284d3042154b73b856293ebf45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c12d6bee00e28f84a617103dd0e2d7b43907df284d3042154b73b856293ebf45->enter($__internal_c12d6bee00e28f84a617103dd0e2d7b43907df284d3042154b73b856293ebf45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 253
        $context["force_error"] = true;
        // line 254
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_c12d6bee00e28f84a617103dd0e2d7b43907df284d3042154b73b856293ebf45->leave($__internal_c12d6bee00e28f84a617103dd0e2d7b43907df284d3042154b73b856293ebf45_prof);

        
        $__internal_e2d4d265b0ff4471f9acf0569eccbc098e2ba5dec30f1ccd9488e57e5a9a01e0->leave($__internal_e2d4d265b0ff4471f9acf0569eccbc098e2ba5dec30f1ccd9488e57e5a9a01e0_prof);

    }

    // line 257
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_bcf7d55c7880ea1d8aba6732ce12eba49c7eeb455248c0fc0c42b960a782f4a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcf7d55c7880ea1d8aba6732ce12eba49c7eeb455248c0fc0c42b960a782f4a4->enter($__internal_bcf7d55c7880ea1d8aba6732ce12eba49c7eeb455248c0fc0c42b960a782f4a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_32717692bb35e74dc260c8ac30ce50c11c59e9fa514b8520343ccba60c4628d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32717692bb35e74dc260c8ac30ce50c11c59e9fa514b8520343ccba60c4628d1->enter($__internal_32717692bb35e74dc260c8ac30ce50c11c59e9fa514b8520343ccba60c4628d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 258
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 259
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 260
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 261
        echo "</div>";
        
        $__internal_32717692bb35e74dc260c8ac30ce50c11c59e9fa514b8520343ccba60c4628d1->leave($__internal_32717692bb35e74dc260c8ac30ce50c11c59e9fa514b8520343ccba60c4628d1_prof);

        
        $__internal_bcf7d55c7880ea1d8aba6732ce12eba49c7eeb455248c0fc0c42b960a782f4a4->leave($__internal_bcf7d55c7880ea1d8aba6732ce12eba49c7eeb455248c0fc0c42b960a782f4a4_prof);

    }

    // line 264
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_6e14c3506f593fccb1b40fa2883a9089257841219214852f5364cc3a29f1e1f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e14c3506f593fccb1b40fa2883a9089257841219214852f5364cc3a29f1e1f1->enter($__internal_6e14c3506f593fccb1b40fa2883a9089257841219214852f5364cc3a29f1e1f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_222645f8478e362bb99a5856fb986c0a0f2141669746c4f740399defeab52583 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_222645f8478e362bb99a5856fb986c0a0f2141669746c4f740399defeab52583->enter($__internal_222645f8478e362bb99a5856fb986c0a0f2141669746c4f740399defeab52583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 265
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 266
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 267
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 268
        echo "</div>";
        
        $__internal_222645f8478e362bb99a5856fb986c0a0f2141669746c4f740399defeab52583->leave($__internal_222645f8478e362bb99a5856fb986c0a0f2141669746c4f740399defeab52583_prof);

        
        $__internal_6e14c3506f593fccb1b40fa2883a9089257841219214852f5364cc3a29f1e1f1->leave($__internal_6e14c3506f593fccb1b40fa2883a9089257841219214852f5364cc3a29f1e1f1_prof);

    }

    // line 273
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_4c6bcb5703c8340b92b3471ce66f9400f3eb7f1a668e351229b44d953a6ba45e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c6bcb5703c8340b92b3471ce66f9400f3eb7f1a668e351229b44d953a6ba45e->enter($__internal_4c6bcb5703c8340b92b3471ce66f9400f3eb7f1a668e351229b44d953a6ba45e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_5ab8213ab58adff08518952990d295937a7feaaaec65d0bed53596397b813fe9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ab8213ab58adff08518952990d295937a7feaaaec65d0bed53596397b813fe9->enter($__internal_5ab8213ab58adff08518952990d295937a7feaaaec65d0bed53596397b813fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 274
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 275
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 276
            echo "    <ul class=\"list-unstyled\">";
            // line 277
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 278
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 280
            echo "</ul>
    ";
            // line 281
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_5ab8213ab58adff08518952990d295937a7feaaaec65d0bed53596397b813fe9->leave($__internal_5ab8213ab58adff08518952990d295937a7feaaaec65d0bed53596397b813fe9_prof);

        
        $__internal_4c6bcb5703c8340b92b3471ce66f9400f3eb7f1a668e351229b44d953a6ba45e->leave($__internal_4c6bcb5703c8340b92b3471ce66f9400f3eb7f1a668e351229b44d953a6ba45e_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1135 => 281,  1132 => 280,  1124 => 278,  1120 => 277,  1118 => 276,  1112 => 275,  1110 => 274,  1101 => 273,  1091 => 268,  1089 => 267,  1087 => 266,  1081 => 265,  1072 => 264,  1062 => 261,  1060 => 260,  1058 => 259,  1052 => 258,  1043 => 257,  1033 => 254,  1031 => 253,  1022 => 252,  1012 => 249,  1010 => 248,  1001 => 247,  991 => 244,  989 => 243,  980 => 242,  970 => 239,  968 => 238,  959 => 237,  949 => 234,  947 => 233,  945 => 232,  936 => 231,  926 => 228,  924 => 227,  922 => 226,  920 => 225,  914 => 224,  905 => 223,  893 => 217,  889 => 216,  874 => 215,  870 => 212,  867 => 209,  866 => 208,  865 => 207,  863 => 206,  860 => 205,  857 => 204,  854 => 203,  851 => 202,  848 => 201,  845 => 200,  842 => 199,  839 => 198,  837 => 197,  828 => 196,  818 => 193,  809 => 192,  799 => 189,  790 => 188,  780 => 185,  778 => 184,  769 => 182,  759 => 179,  757 => 178,  748 => 177,  737 => 171,  735 => 170,  733 => 169,  730 => 167,  728 => 166,  726 => 165,  717 => 164,  706 => 160,  704 => 159,  702 => 158,  699 => 156,  697 => 155,  695 => 154,  686 => 153,  675 => 149,  669 => 146,  668 => 145,  667 => 144,  663 => 143,  659 => 142,  652 => 138,  651 => 137,  650 => 136,  646 => 135,  644 => 134,  635 => 133,  625 => 130,  623 => 129,  614 => 128,  603 => 124,  599 => 123,  594 => 119,  588 => 118,  582 => 117,  576 => 116,  570 => 115,  564 => 114,  558 => 113,  552 => 112,  547 => 108,  541 => 107,  535 => 106,  529 => 105,  523 => 104,  517 => 103,  511 => 102,  505 => 101,  500 => 98,  497 => 97,  495 => 96,  491 => 95,  489 => 94,  486 => 92,  484 => 91,  475 => 90,  463 => 85,  460 => 84,  450 => 83,  445 => 81,  443 => 80,  441 => 79,  438 => 77,  436 => 76,  427 => 75,  415 => 70,  413 => 69,  411 => 67,  410 => 66,  409 => 65,  408 => 64,  403 => 62,  401 => 61,  399 => 60,  396 => 58,  394 => 57,  385 => 56,  374 => 52,  372 => 51,  370 => 50,  368 => 49,  366 => 48,  362 => 47,  360 => 46,  357 => 44,  355 => 43,  346 => 42,  335 => 38,  333 => 37,  331 => 36,  322 => 35,  312 => 32,  306 => 30,  304 => 29,  302 => 28,  296 => 26,  293 => 25,  291 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 273,  200 => 272,  197 => 270,  195 => 264,  192 => 263,  190 => 257,  187 => 256,  185 => 252,  182 => 251,  180 => 247,  177 => 246,  175 => 242,  172 => 241,  170 => 237,  167 => 236,  165 => 231,  162 => 230,  160 => 223,  157 => 222,  154 => 220,  152 => 196,  149 => 195,  147 => 192,  144 => 191,  142 => 188,  139 => 187,  137 => 182,  134 => 181,  132 => 177,  129 => 176,  126 => 174,  124 => 164,  121 => 163,  119 => 153,  116 => 152,  114 => 133,  111 => 132,  109 => 128,  107 => 90,  105 => 75,  102 => 74,  100 => 56,  97 => 55,  95 => 42,  92 => 41,  90 => 35,  87 => 34,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/home/epi/15_galek/public_html/app3/vendor/symfony/twig-bridge/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
