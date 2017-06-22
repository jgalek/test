<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_d10e08e561228225bb5ffc4f10f4ad1dc3737b69d3327677f2fc789c98449d15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be8d41b7e80fe39639947ea99466c4fda74bf593f598e76b6024d99f2b068ddc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be8d41b7e80fe39639947ea99466c4fda74bf593f598e76b6024d99f2b068ddc->enter($__internal_be8d41b7e80fe39639947ea99466c4fda74bf593f598e76b6024d99f2b068ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_46774bfd90d6d22651d1f09773128b943a82088c66e726ddde11632f09551d29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46774bfd90d6d22651d1f09773128b943a82088c66e726ddde11632f09551d29->enter($__internal_46774bfd90d6d22651d1f09773128b943a82088c66e726ddde11632f09551d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 24
        echo "
";
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('radio_row', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('submit_row', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('reset_row', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_be8d41b7e80fe39639947ea99466c4fda74bf593f598e76b6024d99f2b068ddc->leave($__internal_be8d41b7e80fe39639947ea99466c4fda74bf593f598e76b6024d99f2b068ddc_prof);

        
        $__internal_46774bfd90d6d22651d1f09773128b943a82088c66e726ddde11632f09551d29->leave($__internal_46774bfd90d6d22651d1f09773128b943a82088c66e726ddde11632f09551d29_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_d507eaeb6f2cf58842dcd61dba764fe39811adc719040ab921b15fb261eb521e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d507eaeb6f2cf58842dcd61dba764fe39811adc719040ab921b15fb261eb521e->enter($__internal_d507eaeb6f2cf58842dcd61dba764fe39811adc719040ab921b15fb261eb521e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_f63c24584fb4aa5ce4892a0f93caea55c8c8450ecf2c22c2a161f168831b6587 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f63c24584fb4aa5ce4892a0f93caea55c8c8450ecf2c22c2a161f168831b6587->enter($__internal_f63c24584fb4aa5ce4892a0f93caea55c8c8450ecf2c22c2a161f168831b6587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_f63c24584fb4aa5ce4892a0f93caea55c8c8450ecf2c22c2a161f168831b6587->leave($__internal_f63c24584fb4aa5ce4892a0f93caea55c8c8450ecf2c22c2a161f168831b6587_prof);

        
        $__internal_d507eaeb6f2cf58842dcd61dba764fe39811adc719040ab921b15fb261eb521e->leave($__internal_d507eaeb6f2cf58842dcd61dba764fe39811adc719040ab921b15fb261eb521e_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_295c941ce3c6ee156e3c2b0188fa81c5d4d81fb9cfa9ef0d414d778c956b3777 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_295c941ce3c6ee156e3c2b0188fa81c5d4d81fb9cfa9ef0d414d778c956b3777->enter($__internal_295c941ce3c6ee156e3c2b0188fa81c5d4d81fb9cfa9ef0d414d778c956b3777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_cd1085e1b14f8836b58bf29c88918c393e521a494d07722f001771894cad0d4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd1085e1b14f8836b58bf29c88918c393e521a494d07722f001771894cad0d4b->enter($__internal_cd1085e1b14f8836b58bf29c88918c393e521a494d07722f001771894cad0d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if (((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_cd1085e1b14f8836b58bf29c88918c393e521a494d07722f001771894cad0d4b->leave($__internal_cd1085e1b14f8836b58bf29c88918c393e521a494d07722f001771894cad0d4b_prof);

        
        $__internal_295c941ce3c6ee156e3c2b0188fa81c5d4d81fb9cfa9ef0d414d778c956b3777->leave($__internal_295c941ce3c6ee156e3c2b0188fa81c5d4d81fb9cfa9ef0d414d778c956b3777_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_9916bed158ae50e2ed3422d851e7dc4336a87fe7fed3dceb98518a452c8dfcd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9916bed158ae50e2ed3422d851e7dc4336a87fe7fed3dceb98518a452c8dfcd3->enter($__internal_9916bed158ae50e2ed3422d851e7dc4336a87fe7fed3dceb98518a452c8dfcd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_cba831fe3de06ef130cfe05d47ebcf0b7c879df3935457c784b58f33ebf900c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cba831fe3de06ef130cfe05d47ebcf0b7c879df3935457c784b58f33ebf900c1->enter($__internal_cba831fe3de06ef130cfe05d47ebcf0b7c879df3935457c784b58f33ebf900c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_cba831fe3de06ef130cfe05d47ebcf0b7c879df3935457c784b58f33ebf900c1->leave($__internal_cba831fe3de06ef130cfe05d47ebcf0b7c879df3935457c784b58f33ebf900c1_prof);

        
        $__internal_9916bed158ae50e2ed3422d851e7dc4336a87fe7fed3dceb98518a452c8dfcd3->leave($__internal_9916bed158ae50e2ed3422d851e7dc4336a87fe7fed3dceb98518a452c8dfcd3_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_fa286fed589afad2d2fa02ce4fd8b6f077b21060ab3c789ca96e6c94d3690e8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa286fed589afad2d2fa02ce4fd8b6f077b21060ab3c789ca96e6c94d3690e8b->enter($__internal_fa286fed589afad2d2fa02ce4fd8b6f077b21060ab3c789ca96e6c94d3690e8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_4ba00105ed64db4c7f6506de34d7211b6844d940752bff4a98a394a23af72e18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ba00105ed64db4c7f6506de34d7211b6844d940752bff4a98a394a23af72e18->enter($__internal_4ba00105ed64db4c7f6506de34d7211b6844d940752bff4a98a394a23af72e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 28
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 30
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 33
        echo "</div>
";
        // line 34
        echo "</div>";
        
        $__internal_4ba00105ed64db4c7f6506de34d7211b6844d940752bff4a98a394a23af72e18->leave($__internal_4ba00105ed64db4c7f6506de34d7211b6844d940752bff4a98a394a23af72e18_prof);

        
        $__internal_fa286fed589afad2d2fa02ce4fd8b6f077b21060ab3c789ca96e6c94d3690e8b->leave($__internal_fa286fed589afad2d2fa02ce4fd8b6f077b21060ab3c789ca96e6c94d3690e8b_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_d8e86f0614a1adf3828de9c8808170f2367819adb30ba4f8bd5810e9184b0d04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8e86f0614a1adf3828de9c8808170f2367819adb30ba4f8bd5810e9184b0d04->enter($__internal_d8e86f0614a1adf3828de9c8808170f2367819adb30ba4f8bd5810e9184b0d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_e1cbee7c97e849ce07f769feaf9d1440292ba203977935c94e9bb56934aaa7b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1cbee7c97e849ce07f769feaf9d1440292ba203977935c94e9bb56934aaa7b2->enter($__internal_e1cbee7c97e849ce07f769feaf9d1440292ba203977935c94e9bb56934aaa7b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_e1cbee7c97e849ce07f769feaf9d1440292ba203977935c94e9bb56934aaa7b2->leave($__internal_e1cbee7c97e849ce07f769feaf9d1440292ba203977935c94e9bb56934aaa7b2_prof);

        
        $__internal_d8e86f0614a1adf3828de9c8808170f2367819adb30ba4f8bd5810e9184b0d04->leave($__internal_d8e86f0614a1adf3828de9c8808170f2367819adb30ba4f8bd5810e9184b0d04_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_bc8f2dc115f45068fc61ff058b87b808bceac4714455ef6aa5c7ec0109861c28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc8f2dc115f45068fc61ff058b87b808bceac4714455ef6aa5c7ec0109861c28->enter($__internal_bc8f2dc115f45068fc61ff058b87b808bceac4714455ef6aa5c7ec0109861c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_bb75689e7fae088d91fa7e78fb43db7c34d6d4482d7389def8942bc5e5728a93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb75689e7fae088d91fa7e78fb43db7c34d6d4482d7389def8942bc5e5728a93->enter($__internal_bb75689e7fae088d91fa7e78fb43db7c34d6d4482d7389def8942bc5e5728a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_bb75689e7fae088d91fa7e78fb43db7c34d6d4482d7389def8942bc5e5728a93->leave($__internal_bb75689e7fae088d91fa7e78fb43db7c34d6d4482d7389def8942bc5e5728a93_prof);

        
        $__internal_bc8f2dc115f45068fc61ff058b87b808bceac4714455ef6aa5c7ec0109861c28->leave($__internal_bc8f2dc115f45068fc61ff058b87b808bceac4714455ef6aa5c7ec0109861c28_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_2de5d00d6e1d088294e8e09787e0eed5b1373236e0784fe7bd48beff24e9aa49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2de5d00d6e1d088294e8e09787e0eed5b1373236e0784fe7bd48beff24e9aa49->enter($__internal_2de5d00d6e1d088294e8e09787e0eed5b1373236e0784fe7bd48beff24e9aa49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_22e8016212c86edec82e05010c9ba95bc13b24e1776e7caddff6f4ec33e2f3b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22e8016212c86edec82e05010c9ba95bc13b24e1776e7caddff6f4ec33e2f3b0->enter($__internal_22e8016212c86edec82e05010c9ba95bc13b24e1776e7caddff6f4ec33e2f3b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 46
        ob_start();
        // line 47
        echo "    <div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">
        <div class=\"";
        // line 48
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 49
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_22e8016212c86edec82e05010c9ba95bc13b24e1776e7caddff6f4ec33e2f3b0->leave($__internal_22e8016212c86edec82e05010c9ba95bc13b24e1776e7caddff6f4ec33e2f3b0_prof);

        
        $__internal_2de5d00d6e1d088294e8e09787e0eed5b1373236e0784fe7bd48beff24e9aa49->leave($__internal_2de5d00d6e1d088294e8e09787e0eed5b1373236e0784fe7bd48beff24e9aa49_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_5af4c11f47b812e82e32663d15daf8553d17fbbaa23ba648a2c4d0ab343b3b69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5af4c11f47b812e82e32663d15daf8553d17fbbaa23ba648a2c4d0ab343b3b69->enter($__internal_5af4c11f47b812e82e32663d15daf8553d17fbbaa23ba648a2c4d0ab343b3b69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_f56a242318bf8c04d737605a7d36aaec444218aeb23e88f14ce69a7e87a8f48d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f56a242318bf8c04d737605a7d36aaec444218aeb23e88f14ce69a7e87a8f48d->enter($__internal_f56a242318bf8c04d737605a7d36aaec444218aeb23e88f14ce69a7e87a8f48d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 58
        ob_start();
        // line 59
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 60
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 61
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_f56a242318bf8c04d737605a7d36aaec444218aeb23e88f14ce69a7e87a8f48d->leave($__internal_f56a242318bf8c04d737605a7d36aaec444218aeb23e88f14ce69a7e87a8f48d_prof);

        
        $__internal_5af4c11f47b812e82e32663d15daf8553d17fbbaa23ba648a2c4d0ab343b3b69->leave($__internal_5af4c11f47b812e82e32663d15daf8553d17fbbaa23ba648a2c4d0ab343b3b69_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_c48adf78914939493d12941f67e9a24be347692a25cdb4627be38411a6ab78b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c48adf78914939493d12941f67e9a24be347692a25cdb4627be38411a6ab78b6->enter($__internal_c48adf78914939493d12941f67e9a24be347692a25cdb4627be38411a6ab78b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_f13cbae77254b9b1b369bbe37010296aa9dd2c09f71678086f9c0c2b4c36deb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f13cbae77254b9b1b369bbe37010296aa9dd2c09f71678086f9c0c2b4c36deb7->enter($__internal_f13cbae77254b9b1b369bbe37010296aa9dd2c09f71678086f9c0c2b4c36deb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 69
        ob_start();
        // line 70
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 71
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 72
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_f13cbae77254b9b1b369bbe37010296aa9dd2c09f71678086f9c0c2b4c36deb7->leave($__internal_f13cbae77254b9b1b369bbe37010296aa9dd2c09f71678086f9c0c2b4c36deb7_prof);

        
        $__internal_c48adf78914939493d12941f67e9a24be347692a25cdb4627be38411a6ab78b6->leave($__internal_c48adf78914939493d12941f67e9a24be347692a25cdb4627be38411a6ab78b6_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_f427bc3017e0f80cb301bc8ab3917831f387f033bbc2c308443bc58be817df6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f427bc3017e0f80cb301bc8ab3917831f387f033bbc2c308443bc58be817df6a->enter($__internal_f427bc3017e0f80cb301bc8ab3917831f387f033bbc2c308443bc58be817df6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_f746c26e2b7f5d9cc1d5e9d6f8f48c12333aa763c66978559f24abe2e79490d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f746c26e2b7f5d9cc1d5e9d6f8f48c12333aa763c66978559f24abe2e79490d7->enter($__internal_f746c26e2b7f5d9cc1d5e9d6f8f48c12333aa763c66978559f24abe2e79490d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_f746c26e2b7f5d9cc1d5e9d6f8f48c12333aa763c66978559f24abe2e79490d7->leave($__internal_f746c26e2b7f5d9cc1d5e9d6f8f48c12333aa763c66978559f24abe2e79490d7_prof);

        
        $__internal_f427bc3017e0f80cb301bc8ab3917831f387f033bbc2c308443bc58be817df6a->leave($__internal_f427bc3017e0f80cb301bc8ab3917831f387f033bbc2c308443bc58be817df6a_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  390 => 80,  381 => 79,  366 => 73,  362 => 72,  358 => 71,  355 => 70,  353 => 69,  344 => 68,  329 => 62,  325 => 61,  321 => 60,  318 => 59,  316 => 58,  307 => 57,  292 => 51,  288 => 50,  284 => 49,  280 => 48,  273 => 47,  271 => 46,  262 => 45,  252 => 42,  243 => 41,  233 => 38,  224 => 37,  214 => 34,  211 => 33,  209 => 32,  207 => 31,  203 => 30,  201 => 29,  195 => 28,  186 => 27,  176 => 22,  167 => 21,  155 => 16,  152 => 15,  146 => 13,  143 => 12,  141 => 11,  132 => 10,  122 => 5,  120 => 4,  111 => 3,  101 => 79,  98 => 78,  96 => 68,  93 => 67,  91 => 57,  88 => 56,  86 => 45,  83 => 44,  81 => 41,  78 => 40,  76 => 37,  73 => 36,  71 => 27,  68 => 26,  65 => 24,  63 => 21,  60 => 20,  58 => 10,  55 => 9,  52 => 7,  50 => 3,  47 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
{% spaceless %}
    {% if label is same as(false) %}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {% else %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
        {{- parent() -}}
    {% endif %}
{% endspaceless %}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{% endspaceless %}
{%- endblock checkbox_radio_row %}

{% block submit_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock submit_row %}

{% block reset_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}
", "bootstrap_3_horizontal_layout.html.twig", "/home/epi/15_galek/public_html/app3/vendor/symfony/twig-bridge/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}
