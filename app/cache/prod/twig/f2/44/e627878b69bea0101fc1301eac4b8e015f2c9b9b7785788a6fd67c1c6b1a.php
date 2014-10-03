<?php

/* SonataAdminBundle:Form:filter_admin_fields.html.twig */
class __TwigTemplate_f244e627878b69bea0101fc1301eac4b8e015f2c9b9b7785788a6fd67c1c6b1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("form_div_layout.html.twig");

        $this->blocks = array(
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")) . " form-control")));
        // line 20
        echo "    ";
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        echo "
";
    }

    // line 23
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")) . " form-control")));
        // line 25
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        echo "
";
    }

    // line 28
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 29
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")) . " form-control")));
        // line 30
        echo "    ";
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        echo "
";
    }

    // line 33
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 34
        echo "    ";
        ob_start();
        // line 35
        echo "        ";
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class"), "")) : (""))));
        // line 36
        echo "        ";
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class") . " ") . (((array_key_exists("widget_type", $context) && ((isset($context["widget_type"]) ? $context["widget_type"] : null) != ""))) ? ((((((isset($context["multiple"]) ? $context["multiple"] : null)) ? ("checkbox") : ("radio")) . "-") . (isset($context["widget_type"]) ? $context["widget_type"] : null))) : ("")))));
        // line 37
        echo "        ";
        if ((isset($context["expanded"]) ? $context["expanded"] : null)) {
            // line 38
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : (""))));
            // line 39
            echo "            <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
        ";
        }
        // line 41
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 42
            echo "            ";
            if ((array_key_exists("widget_type", $context) && ((isset($context["widget_type"]) ? $context["widget_type"] : null) != "inline"))) {
                // line 43
                echo "                <div class=\"";
                echo (((isset($context["multiple"]) ? $context["multiple"] : null)) ? ("checkbox") : ("radio"));
                echo "\">
            ";
            }
            // line 45
            echo "            <label";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : null), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : null), "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
            ";
            // line 46
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : null), 'widget', array("attr" => array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class"), "")) : ("")))));
            echo "
            ";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "vars"), "label"), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
            echo "
            </label>
            ";
            // line 49
            if ((array_key_exists("widget_type", $context) && ((isset($context["widget_type"]) ? $context["widget_type"] : null) != "inline"))) {
                // line 50
                echo "                </div>
            ";
            }
            // line 52
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        ";
        $this->displayBlock("form_message", $context, $blocks);
        echo "
        ";
        // line 54
        if ((isset($context["expanded"]) ? $context["expanded"] : null)) {
            // line 55
            echo "            </div>
        ";
        }
        // line 57
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 60
    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 61
        echo "    ";
        ob_start();
        // line 62
        echo "        ";
        if (((!((isset($context["label"]) ? $context["label"] : null) === false)) && twig_test_empty((isset($context["label"]) ? $context["label"] : null)))) {
            // line 63
            echo "            ";
            $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : null));
            // line 64
            echo "        ";
        }
        // line 65
        echo "        ";
        if ((($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent") != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent"), "vars"), "block_prefixes")))) {
            // line 66
            echo "            <div class=\"checkbox\">
        ";
        }
        // line 68
        echo "
        ";
        // line 69
        if (((($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent") != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent"), "vars"), "block_prefixes"))) && array_key_exists("label_render", $context))) {
            // line 70
            echo "            <label class=\"";
            if ((array_key_exists("inline", $context) && (isset($context["inline"]) ? $context["inline"] : null))) {
                echo "checkbox-inline";
            }
            echo "\">
        ";
        }
        // line 72
        echo "
        <input type=\"checkbox\" ";
        // line 73
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : null)) {
            echo " checked=\"checked\"";
        }
        echo "/>
        ";
        // line 74
        if ((($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent") != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent"), "vars"), "block_prefixes")))) {
            // line 75
            echo "            ";
            if ((array_key_exists("label_render", $context) && twig_in_filter((isset($context["widget_checkbox_label"]) ? $context["widget_checkbox_label"] : null), array(0 => "both", 1 => "widget")))) {
                // line 76
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
                echo "
                </label>
            ";
            }
            // line 79
            echo "        ";
        }
        // line 80
        echo "        ";
        if ((($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent") != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent"), "vars"), "block_prefixes")))) {
            // line 81
            echo "            </div>
            ";
            // line 82
            $this->displayBlock("form_message", $context, $blocks);
            echo "
        ";
        }
        // line 84
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Form:filter_admin_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 66,  1067 => 309,  1064 => 308,  1061 => 307,  1057 => 339,  1050 => 335,  1046 => 333,  1040 => 330,  1037 => 329,  1034 => 328,  1032 => 327,  1029 => 326,  1023 => 324,  1021 => 323,  1018 => 322,  1012 => 320,  1010 => 319,  1007 => 318,  1001 => 316,  999 => 315,  996 => 314,  990 => 312,  988 => 311,  985 => 310,  983 => 307,  980 => 306,  977 => 305,  973 => 266,  967 => 263,  964 => 262,  961 => 261,  958 => 260,  954 => 299,  949 => 296,  943 => 294,  941 => 293,  938 => 292,  930 => 287,  925 => 285,  921 => 283,  919 => 282,  916 => 281,  912 => 279,  897 => 277,  893 => 276,  890 => 275,  888 => 274,  884 => 272,  878 => 270,  876 => 269,  872 => 267,  870 => 260,  867 => 259,  864 => 258,  861 => 257,  856 => 300,  853 => 257,  850 => 256,  845 => 340,  843 => 305,  838 => 302,  836 => 256,  833 => 255,  830 => 254,  825 => 246,  822 => 245,  818 => 244,  814 => 242,  808 => 241,  803 => 238,  797 => 237,  785 => 235,  782 => 234,  778 => 233,  772 => 232,  765 => 229,  761 => 228,  753 => 226,  747 => 225,  744 => 224,  741 => 223,  738 => 222,  733 => 221,  730 => 220,  728 => 219,  725 => 218,  722 => 217,  715 => 216,  712 => 215,  709 => 214,  706 => 213,  700 => 212,  697 => 211,  694 => 210,  691 => 208,  684 => 207,  681 => 206,  675 => 205,  672 => 204,  668 => 203,  662 => 201,  659 => 200,  653 => 199,  649 => 197,  635 => 188,  629 => 186,  626 => 185,  623 => 184,  619 => 248,  616 => 245,  613 => 200,  608 => 198,  605 => 184,  602 => 183,  596 => 249,  594 => 183,  590 => 181,  587 => 180,  580 => 342,  578 => 254,  572 => 180,  569 => 179,  566 => 178,  558 => 167,  555 => 166,  547 => 160,  544 => 159,  536 => 153,  533 => 152,  529 => 149,  525 => 147,  519 => 145,  516 => 144,  513 => 143,  499 => 142,  483 => 136,  475 => 134,  473 => 133,  470 => 132,  467 => 131,  446 => 129,  441 => 127,  431 => 174,  421 => 150,  419 => 125,  408 => 116,  405 => 115,  394 => 111,  388 => 109,  375 => 105,  370 => 104,  364 => 102,  356 => 98,  344 => 175,  338 => 102,  336 => 95,  330 => 93,  320 => 89,  317 => 88,  295 => 84,  288 => 81,  265 => 78,  262 => 77,  253 => 74,  245 => 71,  234 => 65,  228 => 63,  225 => 62,  178 => 45,  172 => 56,  676 => 254,  665 => 202,  661 => 251,  652 => 247,  647 => 245,  641 => 243,  639 => 242,  632 => 237,  622 => 233,  615 => 229,  611 => 199,  609 => 226,  607 => 225,  601 => 224,  586 => 223,  582 => 222,  574 => 252,  568 => 216,  560 => 213,  557 => 212,  554 => 211,  551 => 210,  548 => 209,  541 => 204,  528 => 200,  520 => 199,  517 => 198,  512 => 197,  506 => 194,  501 => 191,  498 => 190,  493 => 140,  489 => 138,  486 => 167,  482 => 166,  479 => 165,  476 => 164,  472 => 157,  468 => 156,  465 => 155,  460 => 125,  449 => 130,  445 => 122,  438 => 126,  434 => 117,  425 => 152,  422 => 114,  399 => 92,  396 => 91,  390 => 128,  385 => 108,  376 => 90,  373 => 89,  367 => 103,  359 => 160,  353 => 155,  350 => 154,  343 => 149,  333 => 94,  328 => 143,  325 => 142,  321 => 141,  307 => 133,  303 => 131,  300 => 86,  297 => 89,  292 => 83,  280 => 82,  275 => 79,  272 => 78,  266 => 76,  260 => 72,  251 => 73,  232 => 65,  215 => 62,  197 => 72,  188 => 48,  392 => 107,  389 => 106,  383 => 104,  377 => 106,  354 => 95,  352 => 96,  349 => 95,  342 => 91,  335 => 89,  332 => 88,  326 => 86,  324 => 92,  318 => 83,  315 => 82,  302 => 76,  299 => 75,  293 => 73,  287 => 85,  284 => 70,  282 => 79,  279 => 68,  276 => 67,  271 => 62,  257 => 56,  222 => 60,  211 => 57,  190 => 38,  96 => 40,  12 => 36,  267 => 5,  263 => 58,  218 => 63,  205 => 90,  146 => 53,  259 => 76,  250 => 113,  244 => 111,  242 => 70,  237 => 66,  233 => 82,  231 => 99,  210 => 97,  200 => 73,  192 => 90,  174 => 64,  114 => 50,  145 => 53,  194 => 62,  185 => 61,  157 => 57,  216 => 99,  212 => 74,  206 => 59,  195 => 52,  184 => 68,  181 => 44,  167 => 36,  165 => 61,  137 => 34,  129 => 47,  20 => 11,  65 => 29,  110 => 346,  52 => 15,  152 => 30,  120 => 46,  81 => 33,  58 => 28,  34 => 14,  153 => 55,  148 => 37,  126 => 55,  124 => 47,  97 => 75,  76 => 63,  53 => 55,  281 => 115,  256 => 102,  239 => 94,  223 => 87,  207 => 91,  198 => 77,  191 => 54,  175 => 57,  150 => 37,  139 => 51,  118 => 20,  83 => 37,  74 => 34,  186 => 60,  161 => 48,  37 => 16,  23 => 11,  170 => 44,  160 => 40,  155 => 40,  134 => 49,  127 => 59,  113 => 46,  104 => 43,  100 => 42,  90 => 70,  84 => 39,  77 => 35,  70 => 61,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 128,  440 => 148,  437 => 147,  435 => 125,  430 => 116,  427 => 172,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 114,  398 => 113,  393 => 126,  387 => 127,  384 => 121,  381 => 112,  379 => 91,  374 => 101,  368 => 99,  365 => 164,  362 => 97,  360 => 109,  355 => 158,  341 => 114,  337 => 90,  322 => 101,  314 => 87,  312 => 98,  309 => 134,  305 => 77,  298 => 91,  294 => 88,  285 => 80,  283 => 83,  278 => 86,  268 => 61,  264 => 107,  258 => 81,  252 => 53,  247 => 68,  241 => 77,  229 => 105,  220 => 64,  214 => 75,  177 => 65,  169 => 33,  140 => 52,  132 => 57,  128 => 47,  111 => 72,  107 => 44,  61 => 29,  273 => 110,  269 => 77,  254 => 71,  246 => 90,  243 => 67,  240 => 86,  238 => 84,  235 => 108,  230 => 81,  227 => 80,  224 => 79,  221 => 77,  219 => 86,  217 => 76,  208 => 55,  204 => 53,  179 => 37,  159 => 30,  143 => 184,  135 => 181,  131 => 32,  119 => 44,  108 => 178,  102 => 43,  71 => 33,  67 => 19,  63 => 59,  59 => 58,  47 => 52,  38 => 20,  94 => 40,  89 => 39,  85 => 36,  79 => 31,  75 => 32,  68 => 23,  56 => 17,  50 => 14,  29 => 15,  87 => 40,  72 => 25,  55 => 21,  21 => 11,  26 => 18,  98 => 36,  93 => 70,  88 => 37,  78 => 36,  46 => 12,  27 => 14,  40 => 19,  44 => 11,  35 => 19,  31 => 40,  43 => 20,  41 => 20,  28 => 14,  201 => 52,  196 => 90,  183 => 51,  171 => 63,  166 => 49,  163 => 32,  158 => 41,  156 => 64,  151 => 54,  142 => 31,  138 => 25,  136 => 50,  123 => 47,  121 => 51,  117 => 45,  115 => 47,  105 => 177,  101 => 42,  91 => 39,  69 => 33,  66 => 22,  62 => 20,  49 => 17,  24 => 13,  32 => 18,  25 => 12,  22 => 12,  19 => 11,  209 => 60,  203 => 58,  199 => 53,  193 => 83,  189 => 70,  187 => 69,  182 => 70,  176 => 73,  173 => 35,  168 => 62,  164 => 42,  162 => 60,  154 => 63,  149 => 60,  147 => 27,  144 => 47,  141 => 35,  133 => 49,  130 => 22,  125 => 46,  122 => 27,  116 => 25,  112 => 82,  109 => 45,  106 => 37,  103 => 43,  99 => 92,  95 => 41,  92 => 35,  86 => 38,  82 => 32,  80 => 36,  73 => 32,  64 => 30,  60 => 19,  57 => 20,  54 => 16,  51 => 25,  48 => 24,  45 => 23,  42 => 49,  39 => 15,  36 => 17,  33 => 16,  30 => 14,);
    }
}
