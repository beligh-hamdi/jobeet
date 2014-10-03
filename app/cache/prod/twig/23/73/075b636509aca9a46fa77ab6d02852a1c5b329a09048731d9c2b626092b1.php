<?php

/* SonataBlockBundle:Block:block_side_menu_template.html.twig */
class __TwigTemplate_2373075b636509aca9a46fa77ab6d02852a1c5b329a09048731d9c2b626092b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("knp_menu.html.twig");

        $this->blocks = array(
            'list' => array($this, 'block_list'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_list($context, array $blocks = array())
    {
        // line 15
        $context["macros"] = $this->env->loadTemplate("knp_menu.html.twig");
        // line 16
        echo "    ";
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "hasChildren") && (!($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "depth") === 0))) && $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayChildren"))) {
            // line 17
            echo "        <div";
            echo $context["macros"]->getattributes((isset($context["listAttributes"]) ? $context["listAttributes"] : null));
            echo ">
            ";
            // line 18
            $this->displayBlock("children", $context, $blocks);
            echo "
        </div>
    ";
        }
    }

    // line 23
    public function block_item($context, array $blocks = array())
    {
        // line 24
        $context["macros"] = $this->env->loadTemplate("knp_menu.html.twig");
        // line 25
        echo "    ";
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayed")) {
            // line 26
            echo "        ";
            // line 27
            $context["classes"] = (((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attribute", array(0 => "class"), "method")))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 28
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "current")) {
                // line 29
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "currentClass")));
            } elseif ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "currentAncestor")) {
                // line 31
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "ancestorClass")));
            }
            // line 33
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "actsLikeFirst")) {
                // line 34
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "firstClass")));
            }
            // line 36
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "actsLikeLast")) {
                // line 37
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "lastClass")));
            }
            // line 39
            $context["attributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attributes");
            // line 40
            if ((!twig_test_empty((isset($context["classes"]) ? $context["classes"] : null)))) {
                // line 41
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : null), array("class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : null), " ")));
            }
            // line 43
            echo "        ";
            // line 44
            if (((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "uri"))) && ((!$this->getAttribute((isset($context["item"]) ? $context["item"] : null), "current")) || $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "currentAsLink")))) {
                // line 45
                echo "            ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 47
                echo "            ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 49
            echo "        ";
            // line 50
            $context["childrenClasses"] = (((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "childrenAttribute", array(0 => "class"), "method")))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 51
            $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : null), array(0 => ("menu_level_" . $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "level"))));
            // line 52
            $context["listAttributes"] = twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "childrenAttributes"), array("class" => twig_join_filter((isset($context["childrenClasses"]) ? $context["childrenClasses"] : null), " ")));
            // line 53
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    ";
        }
    }

    // line 57
    public function block_linkElement($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "uri"), "html", null, true);
        echo "\"";
        echo $this->getAttribute((isset($context["macros"]) ? $context["macros"] : null), "attributes", array(0 => twig_array_merge(twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attributes"), $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "linkAttributes")), (isset($context["attributes"]) ? $context["attributes"] : null))), "method");
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
    }

    // line 59
    public function block_spanElement($context, array $blocks = array())
    {
        echo "<div";
        echo $this->getAttribute((isset($context["macros"]) ? $context["macros"] : null), "attributes", array(0 => twig_array_merge(twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attributes"), $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "labelAttributes")), (isset($context["attributes"]) ? $context["attributes"] : null))), "method");
        echo "><h4 class=\"list-group-item-heading\">";
        $this->displayBlock("label", $context, $blocks);
        echo "</h4></div>";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_side_menu_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1145 => 401,  1132 => 392,  1127 => 390,  1123 => 389,  1119 => 387,  1117 => 386,  1112 => 385,  1109 => 384,  1103 => 321,  1097 => 318,  1087 => 376,  1077 => 372,  1055 => 369,  1038 => 368,  1004 => 344,  969 => 318,  959 => 310,  936 => 306,  910 => 301,  906 => 300,  896 => 296,  882 => 290,  873 => 284,  868 => 282,  860 => 280,  852 => 278,  848 => 277,  832 => 271,  823 => 268,  811 => 264,  809 => 263,  800 => 258,  794 => 255,  770 => 249,  767 => 248,  764 => 247,  758 => 245,  756 => 244,  736 => 239,  705 => 230,  688 => 229,  666 => 220,  660 => 217,  655 => 216,  638 => 214,  621 => 213,  612 => 211,  606 => 209,  603 => 208,  600 => 207,  598 => 206,  595 => 205,  553 => 168,  543 => 189,  537 => 187,  535 => 186,  532 => 185,  526 => 182,  523 => 181,  521 => 180,  518 => 179,  515 => 178,  497 => 176,  495 => 175,  492 => 174,  490 => 167,  481 => 166,  464 => 158,  455 => 156,  451 => 155,  442 => 153,  436 => 151,  433 => 150,  424 => 147,  418 => 145,  415 => 144,  380 => 130,  329 => 111,  313 => 106,  308 => 105,  274 => 92,  1080 => 374,  1074 => 338,  1068 => 336,  1066 => 335,  1060 => 333,  1051 => 332,  1048 => 331,  1036 => 367,  1030 => 324,  1024 => 359,  1022 => 321,  1020 => 320,  1016 => 319,  995 => 312,  989 => 310,  981 => 307,  979 => 306,  975 => 321,  971 => 304,  963 => 302,  957 => 301,  946 => 296,  942 => 307,  939 => 294,  928 => 286,  924 => 285,  908 => 278,  904 => 277,  902 => 299,  900 => 275,  891 => 271,  881 => 265,  879 => 264,  869 => 259,  840 => 255,  837 => 253,  835 => 252,  826 => 269,  824 => 246,  819 => 267,  815 => 239,  812 => 238,  806 => 262,  804 => 233,  801 => 232,  795 => 228,  793 => 227,  791 => 254,  789 => 253,  786 => 224,  779 => 216,  774 => 212,  754 => 208,  751 => 242,  748 => 205,  745 => 203,  742 => 202,  739 => 240,  737 => 199,  735 => 198,  732 => 197,  726 => 191,  723 => 190,  719 => 187,  717 => 186,  714 => 185,  704 => 182,  701 => 180,  699 => 179,  696 => 178,  692 => 175,  690 => 174,  687 => 173,  683 => 227,  678 => 226,  673 => 165,  671 => 164,  663 => 160,  658 => 158,  654 => 155,  645 => 150,  643 => 149,  640 => 148,  636 => 145,  633 => 144,  627 => 140,  624 => 139,  620 => 136,  617 => 212,  614 => 133,  599 => 128,  592 => 126,  589 => 124,  584 => 122,  579 => 118,  577 => 196,  576 => 115,  575 => 195,  570 => 112,  567 => 110,  565 => 109,  562 => 171,  556 => 169,  552 => 102,  550 => 167,  539 => 96,  522 => 92,  505 => 88,  502 => 87,  477 => 82,  463 => 76,  443 => 74,  439 => 152,  429 => 66,  412 => 143,  410 => 59,  397 => 55,  357 => 37,  346 => 117,  339 => 114,  334 => 26,  323 => 19,  290 => 7,  270 => 316,  255 => 284,  180 => 62,  1067 => 309,  1064 => 334,  1061 => 370,  1057 => 339,  1050 => 335,  1046 => 333,  1040 => 330,  1037 => 329,  1034 => 366,  1032 => 327,  1029 => 326,  1023 => 324,  1021 => 323,  1018 => 322,  1012 => 320,  1010 => 318,  1007 => 317,  1001 => 316,  999 => 315,  996 => 314,  990 => 312,  988 => 311,  985 => 310,  983 => 308,  980 => 323,  977 => 305,  973 => 266,  967 => 303,  964 => 262,  961 => 261,  958 => 260,  954 => 300,  949 => 296,  943 => 294,  941 => 293,  938 => 292,  930 => 287,  925 => 285,  921 => 284,  919 => 305,  916 => 304,  912 => 279,  897 => 274,  893 => 276,  890 => 275,  888 => 293,  884 => 267,  878 => 270,  876 => 263,  872 => 267,  870 => 260,  867 => 258,  864 => 281,  861 => 257,  856 => 279,  853 => 257,  850 => 256,  845 => 340,  843 => 275,  838 => 272,  836 => 256,  833 => 251,  830 => 250,  825 => 246,  822 => 245,  818 => 244,  814 => 265,  808 => 235,  803 => 238,  797 => 229,  785 => 251,  782 => 250,  778 => 233,  772 => 232,  765 => 229,  761 => 246,  753 => 226,  747 => 225,  744 => 224,  741 => 223,  738 => 222,  733 => 238,  730 => 220,  728 => 192,  725 => 233,  722 => 232,  715 => 216,  712 => 215,  709 => 214,  706 => 213,  700 => 212,  697 => 211,  694 => 210,  691 => 208,  684 => 207,  681 => 169,  675 => 225,  672 => 224,  668 => 163,  662 => 218,  659 => 200,  653 => 199,  649 => 153,  635 => 188,  629 => 141,  626 => 185,  623 => 184,  619 => 248,  616 => 245,  613 => 200,  608 => 198,  605 => 184,  602 => 183,  596 => 249,  594 => 127,  590 => 181,  587 => 123,  580 => 197,  578 => 254,  572 => 194,  569 => 179,  566 => 178,  558 => 167,  555 => 166,  547 => 160,  544 => 99,  536 => 95,  533 => 152,  529 => 149,  525 => 147,  519 => 91,  516 => 144,  513 => 143,  499 => 142,  483 => 136,  475 => 134,  473 => 133,  470 => 160,  467 => 159,  446 => 75,  441 => 127,  431 => 174,  421 => 146,  419 => 125,  408 => 116,  405 => 115,  394 => 54,  388 => 132,  375 => 105,  370 => 125,  364 => 102,  356 => 98,  344 => 175,  338 => 102,  336 => 95,  330 => 23,  320 => 108,  317 => 107,  295 => 11,  288 => 81,  265 => 299,  262 => 77,  253 => 74,  245 => 270,  234 => 83,  228 => 81,  225 => 62,  178 => 61,  172 => 56,  676 => 254,  665 => 202,  661 => 159,  652 => 154,  647 => 245,  641 => 243,  639 => 242,  632 => 237,  622 => 233,  615 => 229,  611 => 199,  609 => 210,  607 => 225,  601 => 224,  586 => 200,  582 => 198,  574 => 113,  568 => 173,  560 => 213,  557 => 212,  554 => 103,  551 => 210,  548 => 100,  541 => 97,  528 => 200,  520 => 199,  517 => 198,  512 => 197,  506 => 194,  501 => 191,  498 => 190,  493 => 140,  489 => 138,  486 => 167,  482 => 166,  479 => 165,  476 => 163,  472 => 79,  468 => 156,  465 => 77,  460 => 125,  449 => 130,  445 => 122,  438 => 126,  434 => 117,  425 => 64,  422 => 114,  399 => 136,  396 => 135,  390 => 133,  385 => 108,  376 => 90,  373 => 127,  367 => 123,  359 => 160,  353 => 155,  350 => 154,  343 => 116,  333 => 94,  328 => 22,  325 => 142,  321 => 18,  307 => 133,  303 => 103,  300 => 102,  297 => 89,  292 => 83,  280 => 82,  275 => 330,  272 => 78,  266 => 76,  260 => 293,  251 => 73,  232 => 249,  215 => 62,  197 => 72,  188 => 194,  392 => 107,  389 => 51,  383 => 131,  377 => 129,  354 => 95,  352 => 119,  349 => 118,  342 => 30,  335 => 89,  332 => 88,  326 => 110,  324 => 92,  318 => 83,  315 => 82,  302 => 76,  299 => 75,  293 => 73,  287 => 5,  284 => 95,  282 => 3,  279 => 68,  276 => 67,  271 => 62,  257 => 291,  222 => 77,  211 => 57,  190 => 38,  96 => 53,  12 => 36,  267 => 90,  263 => 294,  218 => 75,  205 => 90,  146 => 54,  259 => 86,  250 => 274,  244 => 111,  242 => 269,  237 => 262,  233 => 82,  231 => 82,  210 => 97,  200 => 73,  192 => 90,  174 => 64,  114 => 91,  145 => 53,  194 => 197,  185 => 61,  157 => 58,  216 => 99,  212 => 73,  206 => 59,  195 => 52,  184 => 68,  181 => 185,  167 => 36,  165 => 61,  137 => 34,  129 => 59,  20 => 11,  65 => 29,  110 => 346,  52 => 23,  152 => 56,  120 => 46,  81 => 26,  58 => 19,  34 => 15,  153 => 55,  148 => 37,  126 => 47,  124 => 46,  97 => 47,  76 => 25,  53 => 23,  281 => 94,  256 => 102,  239 => 84,  223 => 87,  207 => 70,  198 => 77,  191 => 69,  175 => 57,  150 => 37,  139 => 139,  118 => 44,  83 => 37,  74 => 34,  186 => 66,  161 => 162,  37 => 18,  23 => 13,  170 => 44,  160 => 40,  155 => 57,  134 => 133,  127 => 59,  113 => 46,  104 => 74,  100 => 37,  90 => 27,  84 => 40,  77 => 36,  70 => 61,  480 => 162,  474 => 80,  469 => 158,  461 => 157,  457 => 153,  453 => 151,  444 => 154,  440 => 148,  437 => 70,  435 => 69,  430 => 149,  427 => 148,  423 => 63,  413 => 134,  409 => 132,  407 => 131,  402 => 137,  398 => 113,  393 => 126,  387 => 127,  384 => 121,  381 => 48,  379 => 91,  374 => 101,  368 => 99,  365 => 122,  362 => 121,  360 => 120,  355 => 158,  341 => 114,  337 => 27,  322 => 109,  314 => 16,  312 => 98,  309 => 134,  305 => 104,  298 => 12,  294 => 98,  285 => 4,  283 => 83,  278 => 93,  268 => 300,  264 => 89,  258 => 81,  252 => 283,  247 => 273,  241 => 77,  229 => 105,  220 => 64,  214 => 231,  177 => 65,  169 => 168,  140 => 52,  132 => 49,  128 => 47,  111 => 40,  107 => 52,  61 => 21,  273 => 317,  269 => 91,  254 => 85,  246 => 90,  243 => 67,  240 => 263,  238 => 84,  235 => 250,  230 => 244,  227 => 243,  224 => 241,  221 => 77,  219 => 237,  217 => 232,  208 => 55,  204 => 215,  179 => 37,  159 => 158,  143 => 184,  135 => 50,  131 => 132,  119 => 95,  108 => 178,  102 => 43,  71 => 29,  67 => 23,  63 => 22,  59 => 58,  47 => 15,  38 => 7,  94 => 45,  89 => 43,  85 => 32,  79 => 37,  75 => 32,  68 => 23,  56 => 23,  50 => 22,  29 => 15,  87 => 32,  72 => 33,  55 => 24,  21 => 11,  26 => 14,  98 => 24,  93 => 45,  88 => 33,  78 => 36,  46 => 12,  27 => 13,  40 => 19,  44 => 18,  35 => 22,  31 => 14,  43 => 20,  41 => 20,  28 => 14,  201 => 213,  196 => 211,  183 => 64,  171 => 173,  166 => 167,  163 => 32,  158 => 41,  156 => 157,  151 => 152,  142 => 31,  138 => 51,  136 => 138,  123 => 47,  121 => 45,  117 => 57,  115 => 43,  105 => 51,  101 => 49,  91 => 44,  69 => 31,  66 => 29,  62 => 27,  49 => 17,  24 => 3,  32 => 16,  25 => 12,  22 => 11,  19 => 11,  209 => 71,  203 => 58,  199 => 212,  193 => 83,  189 => 70,  187 => 69,  182 => 70,  176 => 178,  173 => 59,  168 => 62,  164 => 163,  162 => 60,  154 => 153,  149 => 55,  147 => 27,  144 => 53,  141 => 52,  133 => 49,  130 => 22,  125 => 46,  122 => 27,  116 => 94,  112 => 41,  109 => 53,  106 => 39,  103 => 50,  99 => 30,  95 => 35,  92 => 34,  86 => 41,  82 => 39,  80 => 28,  73 => 24,  64 => 28,  60 => 26,  57 => 25,  54 => 16,  51 => 22,  48 => 21,  45 => 20,  42 => 18,  39 => 17,  36 => 16,  33 => 16,  30 => 17,);
    }
}
