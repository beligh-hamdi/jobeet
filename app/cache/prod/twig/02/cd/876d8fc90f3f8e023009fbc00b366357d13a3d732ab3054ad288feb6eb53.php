<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_one.html.twig */
class __TwigTemplate_02cd876d8fc90f3f8e023009fbc00b366357d13a3d732ab3054ad288feb6eb53 extends Twig_Template
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
        // line 11
        echo "
";
        // line 12
        if ((!$this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "hasassociationadmin"))) {
            // line 13
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["value"]) ? $context["value"] : null), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description")), "html", null, true);
            echo "
";
        } elseif (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "edit") == "inline")) {
            // line 15
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "formfielddescriptions"));
            foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
                // line 16
                echo "        ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "name"), array(), "array"), 'row');
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 19
            echo "    <div id=\"field_container_";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" class=\"field-container\">
        ";
            // line 20
            if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "edit") == "list")) {
                // line 21
                echo "            <span id=\"field_widget_";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "\" class=\"field-short-description\">
                ";
                // line 22
                if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"), "id", array(0 => $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "value")), "method")) {
                    // line 23
                    echo "                    ";
                    echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('routing')->getUrl("sonata_admin_short_object_information", array("code" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "code"), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "id", array(0 => $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "value")), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "uniqid"), "linkParameters" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "options"), "link_parameters"))), array());
                    // line 29
                    echo "                ";
                } elseif (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "placeholder", array(), "any", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "options"), "placeholder"))) {
                    // line 30
                    echo "                    <span class=\"inner-field-short-description\">
                        ";
                    // line 31
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "options"), "placeholder"), array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                    </span>
                ";
                }
                // line 34
                echo "            </span>
            <span style=\"display: none\" >
                ";
                // line 36
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
                echo "
            </span>
        ";
            } else {
                // line 39
                echo "            <span id=\"field_widget_";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "\" >
                ";
                // line 40
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
                echo "
            </span>
        ";
            }
            // line 43
            echo "
        <span id=\"field_actions_";
            // line 44
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" class=\"field-actions\">
            <span class=\"btn-group\">
                ";
            // line 46
            if ((((($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "edit") == "list") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "hasRoute", array(0 => "list"), "method")) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "isGranted", array(0 => "LIST"), "method")) && (isset($context["btn_list"]) ? $context["btn_list"] : null))) {
                // line 47
                echo "                    <a  href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "getOption", array(0 => "link_parameters", 1 => array()), "method")), "method"), "html", null, true);
                echo "\"
                        onclick=\"return start_field_dialog_form_list_";
                // line 48
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "(this);\"
                        class=\"btn btn-info btn-sm btn-outline sonata-ba-action\"
                        title=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_list"]) ? $context["btn_list"] : null), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
                echo "\"
                        >
                        <i class=\"fa fa-list\"></i>
                        ";
                // line 53
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_list"]) ? $context["btn_list"] : null), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
                echo "
                    </a>
                ";
            }
            // line 56
            echo "
                ";
            // line 57
            if ((((($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "edit") != "admin") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "hasRoute", array(0 => "create"), "method")) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "isGranted", array(0 => "CREATE"), "method")) && (isset($context["btn_add"]) ? $context["btn_add"] : null))) {
                // line 58
                echo "                    <a  href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "generateUrl", array(0 => "create", 1 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "getOption", array(0 => "link_parameters", 1 => array()), "method")), "method"), "html", null, true);
                echo "\"
                        onclick=\"return start_field_dialog_form_add_";
                // line 59
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "(this);\"
                        class=\"btn btn-success btn-sm btn-outline sonata-ba-action\"
                        title=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_add"]) ? $context["btn_add"] : null), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
                echo "\"
                        >
                        <i class=\"fa fa-plus-circle\"></i>
                        ";
                // line 64
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_add"]) ? $context["btn_add"] : null), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
                echo "
                    </a>
                ";
            }
            // line 67
            echo "            </span>

            <span class=\"btn-group\">
                ";
            // line 70
            if ((((($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "edit") == "list") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "hasRoute", array(0 => "list"), "method")) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin"), "isGranted", array(0 => "LIST"), "method")) && (isset($context["btn_delete"]) ? $context["btn_delete"] : null))) {
                // line 71
                echo "                    <a  href=\"\"
                        onclick=\"return remove_selected_element_";
                // line 72
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "(this);\"
                        class=\"btn btn-danger btn-sm btn-outline sonata-ba-action\"
                        title=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_delete"]) ? $context["btn_delete"] : null), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
                echo "\"
                        >
                        <i class=\"fa fa-minus-circle\"></i>
                        ";
                // line 77
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_delete"]) ? $context["btn_delete"] : null), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
                echo "
                    </a>
                ";
            }
            // line 80
            echo "            </span>
        </span>

        ";
            // line 83
            $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_modal.html.twig")->display($context);
            // line 84
            echo "    </div>

    ";
            // line 86
            $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig")->display($context);
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 118,  656 => 378,  631 => 364,  625 => 361,  597 => 342,  583 => 334,  540 => 308,  524 => 297,  510 => 293,  504 => 292,  500 => 291,  459 => 273,  452 => 268,  417 => 243,  400 => 233,  361 => 207,  310 => 171,  296 => 167,  226 => 131,  358 => 139,  351 => 135,  347 => 134,  327 => 126,  319 => 124,  301 => 117,  289 => 163,  277 => 109,  248 => 100,  213 => 82,  202 => 77,  1145 => 401,  1132 => 392,  1127 => 390,  1123 => 389,  1119 => 387,  1117 => 386,  1112 => 385,  1109 => 384,  1103 => 321,  1097 => 318,  1087 => 376,  1077 => 372,  1055 => 369,  1038 => 368,  1004 => 344,  969 => 318,  959 => 310,  936 => 306,  910 => 301,  906 => 300,  896 => 296,  882 => 290,  873 => 284,  868 => 282,  860 => 280,  852 => 278,  848 => 277,  832 => 271,  823 => 268,  811 => 264,  809 => 263,  800 => 258,  794 => 255,  770 => 249,  767 => 248,  764 => 247,  758 => 245,  756 => 244,  736 => 239,  705 => 230,  688 => 229,  666 => 382,  660 => 217,  655 => 216,  638 => 214,  621 => 213,  612 => 211,  606 => 209,  603 => 208,  600 => 207,  598 => 206,  595 => 205,  553 => 168,  543 => 189,  537 => 187,  535 => 186,  532 => 185,  526 => 182,  523 => 181,  521 => 180,  518 => 179,  515 => 178,  497 => 176,  495 => 289,  492 => 174,  490 => 287,  481 => 166,  464 => 275,  455 => 156,  451 => 155,  442 => 153,  436 => 151,  433 => 150,  424 => 147,  418 => 145,  415 => 144,  380 => 130,  329 => 111,  313 => 106,  308 => 105,  274 => 92,  1080 => 374,  1074 => 338,  1068 => 336,  1066 => 335,  1060 => 333,  1051 => 332,  1048 => 331,  1036 => 367,  1030 => 324,  1024 => 359,  1022 => 321,  1020 => 320,  1016 => 319,  995 => 312,  989 => 310,  981 => 307,  979 => 306,  975 => 321,  971 => 304,  963 => 302,  957 => 301,  946 => 296,  942 => 307,  939 => 294,  928 => 286,  924 => 285,  908 => 278,  904 => 277,  902 => 299,  900 => 275,  891 => 271,  881 => 265,  879 => 264,  869 => 259,  840 => 255,  837 => 253,  835 => 252,  826 => 269,  824 => 246,  819 => 267,  815 => 239,  812 => 238,  806 => 262,  804 => 233,  801 => 232,  795 => 228,  793 => 227,  791 => 254,  789 => 253,  786 => 224,  779 => 216,  774 => 212,  754 => 208,  751 => 242,  748 => 205,  745 => 203,  742 => 202,  739 => 240,  737 => 199,  735 => 198,  732 => 197,  726 => 191,  723 => 190,  719 => 187,  717 => 186,  714 => 185,  704 => 182,  701 => 180,  699 => 179,  696 => 178,  692 => 399,  690 => 174,  687 => 173,  683 => 393,  678 => 390,  673 => 165,  671 => 164,  663 => 160,  658 => 158,  654 => 155,  645 => 369,  643 => 149,  640 => 148,  636 => 145,  633 => 144,  627 => 140,  624 => 139,  620 => 136,  617 => 212,  614 => 133,  599 => 128,  592 => 126,  589 => 124,  584 => 122,  579 => 332,  577 => 329,  576 => 115,  575 => 328,  570 => 112,  567 => 110,  565 => 324,  562 => 171,  556 => 169,  552 => 102,  550 => 167,  539 => 96,  522 => 92,  505 => 88,  502 => 87,  477 => 82,  463 => 76,  443 => 74,  439 => 152,  429 => 66,  412 => 143,  410 => 59,  397 => 55,  357 => 37,  346 => 117,  339 => 191,  334 => 26,  323 => 125,  290 => 7,  270 => 157,  255 => 284,  180 => 62,  1067 => 309,  1064 => 334,  1061 => 370,  1057 => 339,  1050 => 335,  1046 => 333,  1040 => 330,  1037 => 329,  1034 => 366,  1032 => 327,  1029 => 326,  1023 => 324,  1021 => 323,  1018 => 322,  1012 => 320,  1010 => 318,  1007 => 317,  1001 => 316,  999 => 315,  996 => 314,  990 => 312,  988 => 311,  985 => 310,  983 => 308,  980 => 323,  977 => 305,  973 => 266,  967 => 303,  964 => 262,  961 => 261,  958 => 260,  954 => 300,  949 => 296,  943 => 294,  941 => 293,  938 => 292,  930 => 287,  925 => 285,  921 => 284,  919 => 305,  916 => 304,  912 => 279,  897 => 274,  893 => 276,  890 => 275,  888 => 293,  884 => 267,  878 => 270,  876 => 263,  872 => 267,  870 => 260,  867 => 258,  864 => 281,  861 => 257,  856 => 279,  853 => 257,  850 => 256,  845 => 340,  843 => 275,  838 => 272,  836 => 256,  833 => 251,  830 => 250,  825 => 246,  822 => 245,  818 => 244,  814 => 265,  808 => 235,  803 => 238,  797 => 229,  785 => 251,  782 => 250,  778 => 233,  772 => 232,  765 => 229,  761 => 246,  753 => 226,  747 => 225,  744 => 224,  741 => 223,  738 => 222,  733 => 238,  730 => 220,  728 => 192,  725 => 233,  722 => 232,  715 => 216,  712 => 215,  709 => 214,  706 => 213,  700 => 212,  697 => 211,  694 => 210,  691 => 208,  684 => 207,  681 => 169,  675 => 225,  672 => 224,  668 => 163,  662 => 218,  659 => 200,  653 => 199,  649 => 153,  635 => 365,  629 => 141,  626 => 185,  623 => 184,  619 => 248,  616 => 245,  613 => 200,  608 => 198,  605 => 184,  602 => 183,  596 => 249,  594 => 127,  590 => 338,  587 => 123,  580 => 197,  578 => 254,  572 => 194,  569 => 325,  566 => 178,  558 => 167,  555 => 317,  547 => 160,  544 => 99,  536 => 306,  533 => 152,  529 => 299,  525 => 147,  519 => 91,  516 => 294,  513 => 143,  499 => 142,  483 => 136,  475 => 134,  473 => 133,  470 => 278,  467 => 159,  446 => 75,  441 => 127,  431 => 174,  421 => 244,  419 => 125,  408 => 116,  405 => 115,  394 => 54,  388 => 132,  375 => 105,  370 => 125,  364 => 102,  356 => 98,  344 => 193,  338 => 130,  336 => 95,  330 => 23,  320 => 122,  317 => 121,  295 => 11,  288 => 107,  265 => 99,  262 => 105,  253 => 95,  245 => 270,  234 => 83,  228 => 83,  225 => 87,  178 => 61,  172 => 56,  676 => 385,  665 => 202,  661 => 380,  652 => 376,  647 => 245,  641 => 368,  639 => 242,  632 => 237,  622 => 233,  615 => 354,  611 => 199,  609 => 210,  607 => 349,  601 => 224,  586 => 200,  582 => 198,  574 => 113,  568 => 173,  560 => 213,  557 => 212,  554 => 103,  551 => 210,  548 => 313,  541 => 97,  528 => 200,  520 => 199,  517 => 198,  512 => 197,  506 => 194,  501 => 191,  498 => 190,  493 => 140,  489 => 138,  486 => 286,  482 => 285,  479 => 165,  476 => 163,  472 => 79,  468 => 156,  465 => 77,  460 => 125,  449 => 130,  445 => 122,  438 => 126,  434 => 256,  425 => 64,  422 => 114,  399 => 136,  396 => 135,  390 => 133,  385 => 225,  376 => 90,  373 => 127,  367 => 123,  359 => 160,  353 => 155,  350 => 154,  343 => 132,  333 => 94,  328 => 22,  325 => 142,  321 => 18,  307 => 133,  303 => 103,  300 => 102,  297 => 89,  292 => 83,  280 => 82,  275 => 103,  272 => 78,  266 => 76,  260 => 98,  251 => 101,  232 => 84,  215 => 78,  197 => 70,  188 => 84,  392 => 107,  389 => 51,  383 => 131,  377 => 129,  354 => 95,  352 => 119,  349 => 118,  342 => 30,  335 => 89,  332 => 88,  326 => 110,  324 => 179,  318 => 83,  315 => 120,  302 => 168,  299 => 112,  293 => 109,  287 => 5,  284 => 106,  282 => 161,  279 => 104,  276 => 67,  271 => 108,  257 => 103,  222 => 81,  211 => 81,  190 => 38,  96 => 37,  12 => 36,  267 => 90,  263 => 294,  218 => 75,  205 => 90,  146 => 54,  259 => 149,  250 => 93,  244 => 140,  242 => 269,  237 => 86,  233 => 82,  231 => 133,  210 => 75,  200 => 73,  192 => 86,  174 => 64,  114 => 71,  145 => 52,  194 => 197,  185 => 68,  157 => 58,  216 => 99,  212 => 73,  206 => 59,  195 => 52,  184 => 68,  181 => 80,  167 => 36,  165 => 59,  137 => 59,  129 => 59,  20 => 11,  65 => 30,  110 => 48,  52 => 21,  152 => 92,  120 => 46,  81 => 26,  58 => 19,  34 => 4,  153 => 56,  148 => 64,  126 => 47,  124 => 46,  97 => 63,  76 => 25,  53 => 10,  281 => 105,  256 => 96,  239 => 97,  223 => 87,  207 => 70,  198 => 77,  191 => 69,  175 => 77,  150 => 55,  139 => 139,  118 => 44,  83 => 37,  74 => 34,  186 => 83,  161 => 71,  37 => 18,  23 => 18,  170 => 44,  160 => 58,  155 => 57,  134 => 47,  127 => 56,  113 => 41,  104 => 67,  100 => 36,  90 => 27,  84 => 39,  77 => 29,  70 => 61,  480 => 162,  474 => 80,  469 => 158,  461 => 157,  457 => 153,  453 => 151,  444 => 263,  440 => 148,  437 => 70,  435 => 69,  430 => 255,  427 => 148,  423 => 250,  413 => 241,  409 => 132,  407 => 238,  402 => 237,  398 => 232,  393 => 230,  387 => 127,  384 => 121,  381 => 48,  379 => 91,  374 => 217,  368 => 99,  365 => 141,  362 => 121,  360 => 120,  355 => 158,  341 => 131,  337 => 27,  322 => 109,  314 => 16,  312 => 98,  309 => 117,  305 => 115,  298 => 12,  294 => 98,  285 => 111,  283 => 83,  278 => 160,  268 => 107,  264 => 89,  258 => 81,  252 => 283,  247 => 273,  241 => 77,  229 => 105,  220 => 80,  214 => 231,  177 => 65,  169 => 74,  140 => 52,  132 => 58,  128 => 47,  111 => 40,  107 => 52,  61 => 25,  273 => 317,  269 => 100,  254 => 147,  246 => 99,  243 => 89,  240 => 139,  238 => 84,  235 => 250,  230 => 244,  227 => 243,  224 => 241,  221 => 77,  219 => 84,  217 => 79,  208 => 124,  204 => 73,  179 => 66,  159 => 70,  143 => 59,  135 => 81,  131 => 48,  119 => 43,  108 => 39,  102 => 37,  71 => 28,  67 => 28,  63 => 22,  59 => 23,  47 => 21,  38 => 17,  94 => 35,  89 => 40,  85 => 34,  79 => 37,  75 => 32,  68 => 31,  56 => 24,  50 => 20,  29 => 21,  87 => 32,  72 => 33,  55 => 24,  21 => 12,  26 => 13,  98 => 44,  93 => 45,  88 => 60,  78 => 36,  46 => 12,  27 => 13,  40 => 19,  44 => 18,  35 => 16,  31 => 22,  43 => 20,  41 => 20,  28 => 13,  201 => 72,  196 => 211,  183 => 64,  171 => 63,  166 => 100,  163 => 32,  158 => 62,  156 => 57,  151 => 152,  142 => 61,  138 => 50,  136 => 138,  123 => 47,  121 => 53,  117 => 57,  115 => 50,  105 => 47,  101 => 49,  91 => 34,  69 => 50,  66 => 29,  62 => 29,  49 => 9,  24 => 13,  32 => 15,  25 => 12,  22 => 12,  19 => 11,  209 => 71,  203 => 122,  199 => 212,  193 => 83,  189 => 71,  187 => 69,  182 => 69,  176 => 65,  173 => 59,  168 => 60,  164 => 72,  162 => 60,  154 => 67,  149 => 55,  147 => 90,  144 => 53,  141 => 52,  133 => 49,  130 => 57,  125 => 45,  122 => 44,  116 => 42,  112 => 41,  109 => 69,  106 => 39,  103 => 46,  99 => 38,  95 => 43,  92 => 61,  86 => 41,  82 => 33,  80 => 28,  73 => 29,  64 => 28,  60 => 15,  57 => 22,  54 => 16,  51 => 38,  48 => 21,  45 => 19,  42 => 7,  39 => 17,  36 => 17,  33 => 16,  30 => 15,);
    }
}
