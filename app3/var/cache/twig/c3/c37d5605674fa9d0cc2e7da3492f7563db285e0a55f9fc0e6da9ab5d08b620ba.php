<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_ff1d1be92d929ddde5a986bdca4c98bcebdc178a7059229cf7cb2087e92fa16b extends Twig_Template
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
                'form_errors' => array($this, 'block_form_errors'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8467be523becfa275eb039ffccbb1c15832d75eb1d79983d7589eb57ac04e714 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8467be523becfa275eb039ffccbb1c15832d75eb1d79983d7589eb57ac04e714->enter($__internal_8467be523becfa275eb039ffccbb1c15832d75eb1d79983d7589eb57ac04e714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_faa7d23794fe0028dd2895639c31d23dba451514e44d3cf588ec10f303f7b43f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faa7d23794fe0028dd2895639c31d23dba451514e44d3cf588ec10f303f7b43f->enter($__internal_faa7d23794fe0028dd2895639c31d23dba451514e44d3cf588ec10f303f7b43f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

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
        $this->displayBlock('form_errors', $context, $blocks);
        // line 92
        echo "
";
        // line 93
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_8467be523becfa275eb039ffccbb1c15832d75eb1d79983d7589eb57ac04e714->leave($__internal_8467be523becfa275eb039ffccbb1c15832d75eb1d79983d7589eb57ac04e714_prof);

        
        $__internal_faa7d23794fe0028dd2895639c31d23dba451514e44d3cf588ec10f303f7b43f->leave($__internal_faa7d23794fe0028dd2895639c31d23dba451514e44d3cf588ec10f303f7b43f_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_2d01caf0e9bef3e20c0821dbb71c510685441baba9f27d399a701ee6cce0695b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d01caf0e9bef3e20c0821dbb71c510685441baba9f27d399a701ee6cce0695b->enter($__internal_2d01caf0e9bef3e20c0821dbb71c510685441baba9f27d399a701ee6cce0695b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_a7e540fcbcd9e4009dab61a28c1cd603366a38367fafa28fcd3dd7d3000a457b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7e540fcbcd9e4009dab61a28c1cd603366a38367fafa28fcd3dd7d3000a457b->enter($__internal_a7e540fcbcd9e4009dab61a28c1cd603366a38367fafa28fcd3dd7d3000a457b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_a7e540fcbcd9e4009dab61a28c1cd603366a38367fafa28fcd3dd7d3000a457b->leave($__internal_a7e540fcbcd9e4009dab61a28c1cd603366a38367fafa28fcd3dd7d3000a457b_prof);

        
        $__internal_2d01caf0e9bef3e20c0821dbb71c510685441baba9f27d399a701ee6cce0695b->leave($__internal_2d01caf0e9bef3e20c0821dbb71c510685441baba9f27d399a701ee6cce0695b_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_471e4b51c4b793b5a0e768b51fa032853d49487c73711b5872f8d901e9f017e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_471e4b51c4b793b5a0e768b51fa032853d49487c73711b5872f8d901e9f017e5->enter($__internal_471e4b51c4b793b5a0e768b51fa032853d49487c73711b5872f8d901e9f017e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_3181c45aa7f81c2ee6278ea20b1e2041684829215868c65babd6f971c25e6170 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3181c45aa7f81c2ee6278ea20b1e2041684829215868c65babd6f971c25e6170->enter($__internal_3181c45aa7f81c2ee6278ea20b1e2041684829215868c65babd6f971c25e6170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_3181c45aa7f81c2ee6278ea20b1e2041684829215868c65babd6f971c25e6170->leave($__internal_3181c45aa7f81c2ee6278ea20b1e2041684829215868c65babd6f971c25e6170_prof);

        
        $__internal_471e4b51c4b793b5a0e768b51fa032853d49487c73711b5872f8d901e9f017e5->leave($__internal_471e4b51c4b793b5a0e768b51fa032853d49487c73711b5872f8d901e9f017e5_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_724746e3ea8b579b7c3179e11dbe0a1a426fdc7b6954f2a2770acde96441515a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_724746e3ea8b579b7c3179e11dbe0a1a426fdc7b6954f2a2770acde96441515a->enter($__internal_724746e3ea8b579b7c3179e11dbe0a1a426fdc7b6954f2a2770acde96441515a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_a4dfd3c445522013b9afceaa07feec6dfebbefe2cd534e5b62f52c83c0841ec4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4dfd3c445522013b9afceaa07feec6dfebbefe2cd534e5b62f52c83c0841ec4->enter($__internal_a4dfd3c445522013b9afceaa07feec6dfebbefe2cd534e5b62f52c83c0841ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_a4dfd3c445522013b9afceaa07feec6dfebbefe2cd534e5b62f52c83c0841ec4->leave($__internal_a4dfd3c445522013b9afceaa07feec6dfebbefe2cd534e5b62f52c83c0841ec4_prof);

        
        $__internal_724746e3ea8b579b7c3179e11dbe0a1a426fdc7b6954f2a2770acde96441515a->leave($__internal_724746e3ea8b579b7c3179e11dbe0a1a426fdc7b6954f2a2770acde96441515a_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_1f6103111bb92ba3b3fdcc4424ededf78da203d333ba9216d9c3e1022e5a9e76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f6103111bb92ba3b3fdcc4424ededf78da203d333ba9216d9c3e1022e5a9e76->enter($__internal_1f6103111bb92ba3b3fdcc4424ededf78da203d333ba9216d9c3e1022e5a9e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_5121365b3e2e6b8a554877ecfc675b1c71e3bdbec14a23d1c6dd7dbf8a16cb4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5121365b3e2e6b8a554877ecfc675b1c71e3bdbec14a23d1c6dd7dbf8a16cb4d->enter($__internal_5121365b3e2e6b8a554877ecfc675b1c71e3bdbec14a23d1c6dd7dbf8a16cb4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_5121365b3e2e6b8a554877ecfc675b1c71e3bdbec14a23d1c6dd7dbf8a16cb4d->leave($__internal_5121365b3e2e6b8a554877ecfc675b1c71e3bdbec14a23d1c6dd7dbf8a16cb4d_prof);

        
        $__internal_1f6103111bb92ba3b3fdcc4424ededf78da203d333ba9216d9c3e1022e5a9e76->leave($__internal_1f6103111bb92ba3b3fdcc4424ededf78da203d333ba9216d9c3e1022e5a9e76_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_c83c7e7d31c695db0ae06b7e7eb2ceb4aa3da81c3568192ad7c396a2b7d50bab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c83c7e7d31c695db0ae06b7e7eb2ceb4aa3da81c3568192ad7c396a2b7d50bab->enter($__internal_c83c7e7d31c695db0ae06b7e7eb2ceb4aa3da81c3568192ad7c396a2b7d50bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_c0db0ded778db95e3d876a1e1044371f1d989787e3a69912e382733bc9081ca0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0db0ded778db95e3d876a1e1044371f1d989787e3a69912e382733bc9081ca0->enter($__internal_c0db0ded778db95e3d876a1e1044371f1d989787e3a69912e382733bc9081ca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_c0db0ded778db95e3d876a1e1044371f1d989787e3a69912e382733bc9081ca0->leave($__internal_c0db0ded778db95e3d876a1e1044371f1d989787e3a69912e382733bc9081ca0_prof);

        
        $__internal_c83c7e7d31c695db0ae06b7e7eb2ceb4aa3da81c3568192ad7c396a2b7d50bab->leave($__internal_c83c7e7d31c695db0ae06b7e7eb2ceb4aa3da81c3568192ad7c396a2b7d50bab_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_f7e529290384f2d5b38653729d39549a9a660f20eb64e0e0abe5847ec3eda385 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7e529290384f2d5b38653729d39549a9a660f20eb64e0e0abe5847ec3eda385->enter($__internal_f7e529290384f2d5b38653729d39549a9a660f20eb64e0e0abe5847ec3eda385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_fc7cbd094c5cbd71532aad1140dc1ec24602854c92b368cadb6d87ca31dab229 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc7cbd094c5cbd71532aad1140dc1ec24602854c92b368cadb6d87ca31dab229->enter($__internal_fc7cbd094c5cbd71532aad1140dc1ec24602854c92b368cadb6d87ca31dab229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_fc7cbd094c5cbd71532aad1140dc1ec24602854c92b368cadb6d87ca31dab229->leave($__internal_fc7cbd094c5cbd71532aad1140dc1ec24602854c92b368cadb6d87ca31dab229_prof);

        
        $__internal_f7e529290384f2d5b38653729d39549a9a660f20eb64e0e0abe5847ec3eda385->leave($__internal_f7e529290384f2d5b38653729d39549a9a660f20eb64e0e0abe5847ec3eda385_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_a97d7759f7d02e8689cb8f89db86ae61929f907a7291bfce51225eaa48891887 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a97d7759f7d02e8689cb8f89db86ae61929f907a7291bfce51225eaa48891887->enter($__internal_a97d7759f7d02e8689cb8f89db86ae61929f907a7291bfce51225eaa48891887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_410442562a22b278a04425d62827c9c9d39eef1d6b4ac00743b708e64d9f603e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_410442562a22b278a04425d62827c9c9d39eef1d6b4ac00743b708e64d9f603e->enter($__internal_410442562a22b278a04425d62827c9c9d39eef1d6b4ac00743b708e64d9f603e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

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
        
        $__internal_410442562a22b278a04425d62827c9c9d39eef1d6b4ac00743b708e64d9f603e->leave($__internal_410442562a22b278a04425d62827c9c9d39eef1d6b4ac00743b708e64d9f603e_prof);

        
        $__internal_a97d7759f7d02e8689cb8f89db86ae61929f907a7291bfce51225eaa48891887->leave($__internal_a97d7759f7d02e8689cb8f89db86ae61929f907a7291bfce51225eaa48891887_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_424a272f1a928bdbfb87e75fad607b563cce8437a5583efeacc2bf9834c08570 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_424a272f1a928bdbfb87e75fad607b563cce8437a5583efeacc2bf9834c08570->enter($__internal_424a272f1a928bdbfb87e75fad607b563cce8437a5583efeacc2bf9834c08570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_b33580e1fb53d58c034d82a405b2f4b77e43afec6e7484a1d760a55220d59da0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b33580e1fb53d58c034d82a405b2f4b77e43afec6e7484a1d760a55220d59da0->enter($__internal_b33580e1fb53d58c034d82a405b2f4b77e43afec6e7484a1d760a55220d59da0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_b33580e1fb53d58c034d82a405b2f4b77e43afec6e7484a1d760a55220d59da0->leave($__internal_b33580e1fb53d58c034d82a405b2f4b77e43afec6e7484a1d760a55220d59da0_prof);

        
        $__internal_424a272f1a928bdbfb87e75fad607b563cce8437a5583efeacc2bf9834c08570->leave($__internal_424a272f1a928bdbfb87e75fad607b563cce8437a5583efeacc2bf9834c08570_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_b37d8b2266d9ab0f96666526c09694b74079ce6ae7d51565691b077431a61bda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b37d8b2266d9ab0f96666526c09694b74079ce6ae7d51565691b077431a61bda->enter($__internal_b37d8b2266d9ab0f96666526c09694b74079ce6ae7d51565691b077431a61bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_60d466de6a60f5c785fd6b445beed14021fefce59b1ca774298ba1b0799bb291 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60d466de6a60f5c785fd6b445beed14021fefce59b1ca774298ba1b0799bb291->enter($__internal_60d466de6a60f5c785fd6b445beed14021fefce59b1ca774298ba1b0799bb291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_60d466de6a60f5c785fd6b445beed14021fefce59b1ca774298ba1b0799bb291->leave($__internal_60d466de6a60f5c785fd6b445beed14021fefce59b1ca774298ba1b0799bb291_prof);

        
        $__internal_b37d8b2266d9ab0f96666526c09694b74079ce6ae7d51565691b077431a61bda->leave($__internal_b37d8b2266d9ab0f96666526c09694b74079ce6ae7d51565691b077431a61bda_prof);

    }

    // line 79
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_a426b75591fcda3abe4d34c6a4fbfd60959e29d4a2112d5a34c8a23bdaa6a4bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a426b75591fcda3abe4d34c6a4fbfd60959e29d4a2112d5a34c8a23bdaa6a4bd->enter($__internal_a426b75591fcda3abe4d34c6a4fbfd60959e29d4a2112d5a34c8a23bdaa6a4bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_c36e7a98cfb5da11ce7bf133b16a9dd3a63cbae1cf289d64174e05f0fb4ffdb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c36e7a98cfb5da11ce7bf133b16a9dd3a63cbae1cf289d64174e05f0fb4ffdb6->enter($__internal_c36e7a98cfb5da11ce7bf133b16a9dd3a63cbae1cf289d64174e05f0fb4ffdb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 80
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 81
            if ((isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
                echo "<div class=\"has-error\">";
            }
            // line 82
            echo "    ";
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 83
            echo "        <ul class=\"list-unstyled\">";
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 85
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "</ul>
        ";
            // line 88
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
            // line 89
            echo "        ";
            if ((isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
                echo "</div>";
            }
        }
        
        $__internal_c36e7a98cfb5da11ce7bf133b16a9dd3a63cbae1cf289d64174e05f0fb4ffdb6->leave($__internal_c36e7a98cfb5da11ce7bf133b16a9dd3a63cbae1cf289d64174e05f0fb4ffdb6_prof);

        
        $__internal_a426b75591fcda3abe4d34c6a4fbfd60959e29d4a2112d5a34c8a23bdaa6a4bd->leave($__internal_a426b75591fcda3abe4d34c6a4fbfd60959e29d4a2112d5a34c8a23bdaa6a4bd_prof);

    }

    // line 93
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_5287d2e285bb0d0f71e5f8b9cf824f3c65db22edffe99d699bca66e6d7a23397 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5287d2e285bb0d0f71e5f8b9cf824f3c65db22edffe99d699bca66e6d7a23397->enter($__internal_5287d2e285bb0d0f71e5f8b9cf824f3c65db22edffe99d699bca66e6d7a23397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_8406717fe8addf412312455ad4768eb32ac5162313930f3aa3a16e3dd68a8e62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8406717fe8addf412312455ad4768eb32ac5162313930f3aa3a16e3dd68a8e62->enter($__internal_8406717fe8addf412312455ad4768eb32ac5162313930f3aa3a16e3dd68a8e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 94
        echo "col-sm-10";
        
        $__internal_8406717fe8addf412312455ad4768eb32ac5162313930f3aa3a16e3dd68a8e62->leave($__internal_8406717fe8addf412312455ad4768eb32ac5162313930f3aa3a16e3dd68a8e62_prof);

        
        $__internal_5287d2e285bb0d0f71e5f8b9cf824f3c65db22edffe99d699bca66e6d7a23397->leave($__internal_5287d2e285bb0d0f71e5f8b9cf824f3c65db22edffe99d699bca66e6d7a23397_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  456 => 94,  447 => 93,  433 => 89,  427 => 88,  424 => 87,  416 => 85,  412 => 84,  410 => 83,  403 => 82,  399 => 81,  396 => 80,  387 => 79,  372 => 73,  368 => 72,  364 => 71,  361 => 70,  359 => 69,  350 => 68,  335 => 62,  331 => 61,  327 => 60,  324 => 59,  322 => 58,  313 => 57,  298 => 51,  294 => 50,  290 => 49,  286 => 48,  279 => 47,  277 => 46,  268 => 45,  258 => 42,  249 => 41,  239 => 38,  230 => 37,  220 => 34,  217 => 33,  215 => 32,  213 => 31,  209 => 30,  207 => 29,  201 => 28,  192 => 27,  182 => 22,  173 => 21,  161 => 16,  158 => 15,  152 => 13,  149 => 12,  147 => 11,  138 => 10,  128 => 5,  126 => 4,  117 => 3,  107 => 93,  104 => 92,  102 => 79,  99 => 78,  97 => 68,  94 => 67,  92 => 57,  89 => 56,  87 => 45,  84 => 44,  82 => 41,  79 => 40,  77 => 37,  74 => 36,  72 => 27,  69 => 26,  66 => 24,  64 => 21,  61 => 20,  59 => 10,  56 => 9,  53 => 7,  51 => 3,  48 => 2,  14 => 1,);
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

{% block form_errors %}
    {% if errors|length > 0 -%}
        {% if compound %}<div class=\"has-error\">{% endif %}
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
        <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
        {% if form.parent %}</span>{% else %}</div>{% endif %}
        {% if compound %}</div>{% endif %}
    {%- endif %}
{% endblock %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}
", "bootstrap_3_horizontal_layout.html.twig", "C:\\Users\\Justyna\\PhpstormProjects\\untitled1\\app3\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\bootstrap_3_horizontal_layout.html.twig");
    }
}
