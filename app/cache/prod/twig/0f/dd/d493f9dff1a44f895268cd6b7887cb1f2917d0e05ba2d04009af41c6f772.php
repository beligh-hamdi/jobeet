<?php

/* SonataBlockBundle:Profiler:block.html.twig */
class __TwigTemplate_0fddd493f9dff1a44f895268cd6b7887cb1f2917d0e05ba2d04009af41c6f772 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'table' => array($this, 'block_table'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"sf-toolbar-block\">
        <div class=\"sf-toolbar-icon\">
            <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : null), "panel" => (isset($context["name"]) ? $context["name"] : null))), "html", null, true);
        echo "\">
                ";
        // line 7
        echo "<span style=\"width:0px; height: 28px; vertical-align: middle;\"></span>
                <span class=\"sf-toolbar-status\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "getTotalBlock", array(), "method"), "html", null, true);
        echo "</span> blocks
                ";
        // line 9
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "events")) > 0)) {
            echo "<strong>*</strong>";
        }
        // line 10
        echo "            </a>
        </div>
        <div class=\"sf-toolbar-info\">
            <div class=\"sf-toolbar-info-piece\">
                <b>Real Blocks</b>
                <span>";
        // line 15
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "realBlocks")), "html", null, true);
        echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Containers</b>
                <span>";
        // line 19
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "containers")), "html", null, true);
        echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Total Blocks</b>
                <span>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "getTotalBlock", array(), "method"), "html", null, true);
        echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <hr />
                <b>Events</b>
                <span>";
        // line 28
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "events")), "html", null, true);
        echo "</span>
            </div>
        </div>
    </div>
";
    }

    // line 34
    public function block_menu($context, array $blocks = array())
    {
        // line 35
        echo "    <span class=\"label\">
        <span class=\"icon\"><img src=\"data:image/png;base64,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\" alt=\"\" /></span>
        <strong>Blocks";
        // line 37
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "events")) > 0)) {
            echo "<strong>*</strong>";
        }
        echo "</strong>
        <span class=\"count\">
            <span>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "getTotalBlock", array(), "method"), "html", null, true);
        echo "</span>
        </span>
    </span>
";
    }

    // line 44
    public function block_panel($context, array $blocks = array())
    {
        // line 45
        echo "    <h2>Events Blocks</h2>
    <table>
        <tr>
            <th>code name</th>
            <th>listener tag</th>
            <th>Block types</th>
            <th>Listeners</th>
        </tr>

        ";
        // line 54
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "events"));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 55
            echo "            <tr>
                <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "template_code", array(), "array"), "html", null, true);
            echo "</td>
                <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "event_name", array(), "array"), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 59
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "blocks", array(), "array"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 60
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["type"]) ? $context["type"] : null), 1), "html", null, true);
                echo " (id:";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["type"]) ? $context["type"] : null), 0), "html", null, true);
                echo ")
                    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 62
                echo "                        no block returned
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "                </td>
                <td>
                    ";
            // line 66
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "listeners", array(), "array"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
                // line 67
                echo "                        ";
                echo twig_escape_filter($this->env, (isset($context["listener"]) ? $context["listener"] : null), "html", null, true);
                echo "
                    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 69
                echo "                        no listener registered
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "    </table>

    <h2>Real Blocks</h2>
    ";
        // line 77
        $context["blocks"] = $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "realBlocks");
        // line 78
        echo "    ";
        $this->displayBlock("table", $context, $blocks);
        echo "

    <h2>Containers Blocks</h2>
    ";
        // line 81
        $context["blocks"] = $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "containers");
        // line 82
        echo "    ";
        $this->displayBlock("table", $context, $blocks);
        echo "

    ";
        // line 84
        $this->displayBlock("javascript", $context, $blocks);
        echo "
";
    }

    // line 87
    public function block_table($context, array $blocks = array())
    {
        // line 88
        echo "    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Type</th>
            <th>Mem. (diff)</th>
            <th>Mem. (peak)</th>
            <th>Duration</th>
        </tr>
        ";
        // line 97
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : null));
        foreach ($context['_seq'] as $context["id"] => $context["block"]) {
            // line 98
            echo "
            ";
            // line 99
            $context["rowspan"] = 1;
            // line 100
            echo "            ";
            if ($this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "cache"), "handler")) {
                // line 101
                echo "                ";
                $context["rowspan"] = ((isset($context["rowspan"]) ? $context["rowspan"] : null) + 1);
                // line 102
                echo "            ";
            }
            // line 103
            echo "
            ";
            // line 104
            if (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "assets"), "js")) > 0) || (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "assets"), "css")) > 0))) {
                // line 105
                echo "                ";
                $context["rowspan"] = ((isset($context["rowspan"]) ? $context["rowspan"] : null) + 1);
                // line 106
                echo "            ";
            }
            // line 107
            echo "            <tr>
                <th style=\"vertical-align: top\" rowspan=\"";
            // line 108
            echo twig_escape_filter($this->env, (isset($context["rowspan"]) ? $context["rowspan"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "</th>
                <td>";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "name"), "html", null, true);
            echo "</td>
                <td>";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "type"), "html", null, true);
            echo "</td>
                <td>";
            // line 111
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "memory_end") - $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "memory_start")) / 1000), 0), "html", null, true);
            echo " Kb</td>
                <td>";
            // line 112
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "memory_peak") / 1000), 0), "html", null, true);
            echo " Kb</td>
                <td>";
            // line 113
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "duration"), 2), "html", null, true);
            echo " ms</td>
            </tr>

            ";
            // line 116
            if ($this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "cache"), "handler")) {
                // line 117
                echo "                <tr style=\"vertical-align: top\">
                    <td colspan=\"3\">
                        Cache Keys: <pre>";
                // line 119
                echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "cache"), "keys")), "html", null, true);
                echo "</pre> <br />
                        Contextual Keys: <pre>";
                // line 120
                echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "cache"), "contextual_keys")), "html", null, true);
                echo "</pre>
                    </td>
                    <td colspan=\"2\">
                        TTL: ";
                // line 123
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "cache"), "ttl"), "html", null, true);
                echo "s. <br />
                        Lifetime: ";
                // line 124
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "cache"), "lifetime"), "html", null, true);
                echo "s. <br />
                        Backend: ";
                // line 125
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "cache"), "handler"), "html", null, true);
                echo " <br />
                        Loading from cache: ";
                // line 126
                if ($this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "cache"), "from_cache")) {
                    echo "YES";
                } else {
                    echo "NO";
                }
                echo " <br />
                    </td>
                </tr>
            ";
            }
            // line 130
            echo "
            ";
            // line 131
            if (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "assets"), "js")) > 0) || (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "assets"), "css")) > 0))) {
                // line 132
                echo "                <tr>
                    <td colspan=\"5\">
                        Javascripts: <pre>";
                // line 134
                echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "assets"), "js")), "html", null, true);
                echo "</pre><br />
                        Stylesheets: <pre>";
                // line 135
                echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "assets"), "css")), "html", null, true);
                echo "</pre>
                    </td>
                </tr>
            ";
            }
            // line 139
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "    </table>
";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Profiler:block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  358 => 139,  351 => 135,  347 => 134,  327 => 126,  319 => 124,  301 => 117,  289 => 112,  277 => 109,  248 => 100,  213 => 82,  202 => 77,  1145 => 401,  1132 => 392,  1127 => 390,  1123 => 389,  1119 => 387,  1117 => 386,  1112 => 385,  1109 => 384,  1103 => 321,  1097 => 318,  1087 => 376,  1077 => 372,  1055 => 369,  1038 => 368,  1004 => 344,  969 => 318,  959 => 310,  936 => 306,  910 => 301,  906 => 300,  896 => 296,  882 => 290,  873 => 284,  868 => 282,  860 => 280,  852 => 278,  848 => 277,  832 => 271,  823 => 268,  811 => 264,  809 => 263,  800 => 258,  794 => 255,  770 => 249,  767 => 248,  764 => 247,  758 => 245,  756 => 244,  736 => 239,  705 => 230,  688 => 229,  666 => 220,  660 => 217,  655 => 216,  638 => 214,  621 => 213,  612 => 211,  606 => 209,  603 => 208,  600 => 207,  598 => 206,  595 => 205,  553 => 168,  543 => 189,  537 => 187,  535 => 186,  532 => 185,  526 => 182,  523 => 181,  521 => 180,  518 => 179,  515 => 178,  497 => 176,  495 => 175,  492 => 174,  490 => 167,  481 => 166,  464 => 158,  455 => 156,  451 => 155,  442 => 153,  436 => 151,  433 => 150,  424 => 147,  418 => 145,  415 => 144,  380 => 130,  329 => 111,  313 => 106,  308 => 105,  274 => 92,  1080 => 374,  1074 => 338,  1068 => 336,  1066 => 335,  1060 => 333,  1051 => 332,  1048 => 331,  1036 => 367,  1030 => 324,  1024 => 359,  1022 => 321,  1020 => 320,  1016 => 319,  995 => 312,  989 => 310,  981 => 307,  979 => 306,  975 => 321,  971 => 304,  963 => 302,  957 => 301,  946 => 296,  942 => 307,  939 => 294,  928 => 286,  924 => 285,  908 => 278,  904 => 277,  902 => 299,  900 => 275,  891 => 271,  881 => 265,  879 => 264,  869 => 259,  840 => 255,  837 => 253,  835 => 252,  826 => 269,  824 => 246,  819 => 267,  815 => 239,  812 => 238,  806 => 262,  804 => 233,  801 => 232,  795 => 228,  793 => 227,  791 => 254,  789 => 253,  786 => 224,  779 => 216,  774 => 212,  754 => 208,  751 => 242,  748 => 205,  745 => 203,  742 => 202,  739 => 240,  737 => 199,  735 => 198,  732 => 197,  726 => 191,  723 => 190,  719 => 187,  717 => 186,  714 => 185,  704 => 182,  701 => 180,  699 => 179,  696 => 178,  692 => 175,  690 => 174,  687 => 173,  683 => 227,  678 => 226,  673 => 165,  671 => 164,  663 => 160,  658 => 158,  654 => 155,  645 => 150,  643 => 149,  640 => 148,  636 => 145,  633 => 144,  627 => 140,  624 => 139,  620 => 136,  617 => 212,  614 => 133,  599 => 128,  592 => 126,  589 => 124,  584 => 122,  579 => 118,  577 => 196,  576 => 115,  575 => 195,  570 => 112,  567 => 110,  565 => 109,  562 => 171,  556 => 169,  552 => 102,  550 => 167,  539 => 96,  522 => 92,  505 => 88,  502 => 87,  477 => 82,  463 => 76,  443 => 74,  439 => 152,  429 => 66,  412 => 143,  410 => 59,  397 => 55,  357 => 37,  346 => 117,  339 => 114,  334 => 26,  323 => 125,  290 => 7,  270 => 316,  255 => 284,  180 => 62,  1067 => 309,  1064 => 334,  1061 => 370,  1057 => 339,  1050 => 335,  1046 => 333,  1040 => 330,  1037 => 329,  1034 => 366,  1032 => 327,  1029 => 326,  1023 => 324,  1021 => 323,  1018 => 322,  1012 => 320,  1010 => 318,  1007 => 317,  1001 => 316,  999 => 315,  996 => 314,  990 => 312,  988 => 311,  985 => 310,  983 => 308,  980 => 323,  977 => 305,  973 => 266,  967 => 303,  964 => 262,  961 => 261,  958 => 260,  954 => 300,  949 => 296,  943 => 294,  941 => 293,  938 => 292,  930 => 287,  925 => 285,  921 => 284,  919 => 305,  916 => 304,  912 => 279,  897 => 274,  893 => 276,  890 => 275,  888 => 293,  884 => 267,  878 => 270,  876 => 263,  872 => 267,  870 => 260,  867 => 258,  864 => 281,  861 => 257,  856 => 279,  853 => 257,  850 => 256,  845 => 340,  843 => 275,  838 => 272,  836 => 256,  833 => 251,  830 => 250,  825 => 246,  822 => 245,  818 => 244,  814 => 265,  808 => 235,  803 => 238,  797 => 229,  785 => 251,  782 => 250,  778 => 233,  772 => 232,  765 => 229,  761 => 246,  753 => 226,  747 => 225,  744 => 224,  741 => 223,  738 => 222,  733 => 238,  730 => 220,  728 => 192,  725 => 233,  722 => 232,  715 => 216,  712 => 215,  709 => 214,  706 => 213,  700 => 212,  697 => 211,  694 => 210,  691 => 208,  684 => 207,  681 => 169,  675 => 225,  672 => 224,  668 => 163,  662 => 218,  659 => 200,  653 => 199,  649 => 153,  635 => 188,  629 => 141,  626 => 185,  623 => 184,  619 => 248,  616 => 245,  613 => 200,  608 => 198,  605 => 184,  602 => 183,  596 => 249,  594 => 127,  590 => 181,  587 => 123,  580 => 197,  578 => 254,  572 => 194,  569 => 179,  566 => 178,  558 => 167,  555 => 166,  547 => 160,  544 => 99,  536 => 95,  533 => 152,  529 => 149,  525 => 147,  519 => 91,  516 => 144,  513 => 143,  499 => 142,  483 => 136,  475 => 134,  473 => 133,  470 => 160,  467 => 159,  446 => 75,  441 => 127,  431 => 174,  421 => 146,  419 => 125,  408 => 116,  405 => 115,  394 => 54,  388 => 132,  375 => 105,  370 => 125,  364 => 102,  356 => 98,  344 => 175,  338 => 130,  336 => 95,  330 => 23,  320 => 108,  317 => 107,  295 => 11,  288 => 81,  265 => 106,  262 => 105,  253 => 74,  245 => 270,  234 => 83,  228 => 88,  225 => 87,  178 => 61,  172 => 56,  676 => 254,  665 => 202,  661 => 159,  652 => 154,  647 => 245,  641 => 243,  639 => 242,  632 => 237,  622 => 233,  615 => 229,  611 => 199,  609 => 210,  607 => 225,  601 => 224,  586 => 200,  582 => 198,  574 => 113,  568 => 173,  560 => 213,  557 => 212,  554 => 103,  551 => 210,  548 => 100,  541 => 97,  528 => 200,  520 => 199,  517 => 198,  512 => 197,  506 => 194,  501 => 191,  498 => 190,  493 => 140,  489 => 138,  486 => 167,  482 => 166,  479 => 165,  476 => 163,  472 => 79,  468 => 156,  465 => 77,  460 => 125,  449 => 130,  445 => 122,  438 => 126,  434 => 117,  425 => 64,  422 => 114,  399 => 136,  396 => 135,  390 => 133,  385 => 108,  376 => 90,  373 => 127,  367 => 123,  359 => 160,  353 => 155,  350 => 154,  343 => 132,  333 => 94,  328 => 22,  325 => 142,  321 => 18,  307 => 133,  303 => 103,  300 => 102,  297 => 89,  292 => 83,  280 => 82,  275 => 330,  272 => 78,  266 => 76,  260 => 104,  251 => 101,  232 => 249,  215 => 62,  197 => 74,  188 => 194,  392 => 107,  389 => 51,  383 => 131,  377 => 129,  354 => 95,  352 => 119,  349 => 118,  342 => 30,  335 => 89,  332 => 88,  326 => 110,  324 => 92,  318 => 83,  315 => 123,  302 => 76,  299 => 116,  293 => 113,  287 => 5,  284 => 95,  282 => 3,  279 => 68,  276 => 67,  271 => 108,  257 => 103,  222 => 77,  211 => 81,  190 => 38,  96 => 53,  12 => 36,  267 => 90,  263 => 294,  218 => 75,  205 => 90,  146 => 54,  259 => 86,  250 => 274,  244 => 111,  242 => 269,  237 => 262,  233 => 82,  231 => 82,  210 => 97,  200 => 73,  192 => 90,  174 => 67,  114 => 91,  145 => 53,  194 => 197,  185 => 61,  157 => 58,  216 => 99,  212 => 73,  206 => 59,  195 => 52,  184 => 68,  181 => 185,  167 => 36,  165 => 64,  137 => 34,  129 => 59,  20 => 11,  65 => 29,  110 => 346,  52 => 43,  152 => 56,  120 => 46,  81 => 26,  58 => 19,  34 => 4,  153 => 55,  148 => 60,  126 => 47,  124 => 46,  97 => 47,  76 => 25,  53 => 10,  281 => 110,  256 => 102,  239 => 97,  223 => 87,  207 => 70,  198 => 77,  191 => 69,  175 => 57,  150 => 37,  139 => 139,  118 => 44,  83 => 37,  74 => 23,  186 => 66,  161 => 162,  37 => 18,  23 => 13,  170 => 44,  160 => 40,  155 => 57,  134 => 56,  127 => 54,  113 => 44,  104 => 74,  100 => 37,  90 => 27,  84 => 40,  77 => 36,  70 => 61,  480 => 162,  474 => 80,  469 => 158,  461 => 157,  457 => 153,  453 => 151,  444 => 154,  440 => 148,  437 => 70,  435 => 69,  430 => 149,  427 => 148,  423 => 63,  413 => 134,  409 => 132,  407 => 131,  402 => 137,  398 => 113,  393 => 126,  387 => 127,  384 => 121,  381 => 48,  379 => 91,  374 => 101,  368 => 99,  365 => 141,  362 => 121,  360 => 120,  355 => 158,  341 => 131,  337 => 27,  322 => 109,  314 => 16,  312 => 98,  309 => 120,  305 => 119,  298 => 12,  294 => 98,  285 => 111,  283 => 83,  278 => 93,  268 => 107,  264 => 89,  258 => 81,  252 => 283,  247 => 273,  241 => 77,  229 => 105,  220 => 64,  214 => 231,  177 => 65,  169 => 66,  140 => 52,  132 => 49,  128 => 47,  111 => 40,  107 => 52,  61 => 21,  273 => 317,  269 => 91,  254 => 102,  246 => 99,  243 => 98,  240 => 263,  238 => 84,  235 => 250,  230 => 244,  227 => 243,  224 => 241,  221 => 77,  219 => 84,  217 => 232,  208 => 55,  204 => 78,  179 => 37,  159 => 158,  143 => 59,  135 => 50,  131 => 55,  119 => 95,  108 => 178,  102 => 43,  71 => 29,  67 => 19,  63 => 22,  59 => 58,  47 => 15,  38 => 6,  94 => 35,  89 => 43,  85 => 32,  79 => 37,  75 => 32,  68 => 23,  56 => 23,  50 => 22,  29 => 15,  87 => 32,  72 => 33,  55 => 24,  21 => 11,  26 => 14,  98 => 37,  93 => 45,  88 => 33,  78 => 36,  46 => 12,  27 => 13,  40 => 19,  44 => 18,  35 => 22,  31 => 3,  43 => 20,  41 => 20,  28 => 14,  201 => 213,  196 => 211,  183 => 64,  171 => 173,  166 => 167,  163 => 32,  158 => 62,  156 => 157,  151 => 152,  142 => 31,  138 => 57,  136 => 138,  123 => 47,  121 => 45,  117 => 57,  115 => 43,  105 => 39,  101 => 49,  91 => 34,  69 => 31,  66 => 29,  62 => 27,  49 => 9,  24 => 3,  32 => 16,  25 => 12,  22 => 11,  19 => 11,  209 => 71,  203 => 58,  199 => 212,  193 => 83,  189 => 71,  187 => 69,  182 => 69,  176 => 178,  173 => 59,  168 => 62,  164 => 163,  162 => 60,  154 => 153,  149 => 55,  147 => 27,  144 => 53,  141 => 52,  133 => 49,  130 => 22,  125 => 46,  122 => 27,  116 => 45,  112 => 41,  109 => 53,  106 => 39,  103 => 50,  99 => 30,  95 => 35,  92 => 34,  86 => 41,  82 => 28,  80 => 28,  73 => 24,  64 => 28,  60 => 15,  57 => 25,  54 => 16,  51 => 22,  48 => 21,  45 => 8,  42 => 7,  39 => 17,  36 => 16,  33 => 16,  30 => 17,);
    }
}
