<?php

/* SonataAdminBundle::ajax_layout.html.twig */
class __TwigTemplate_60640d6f876e7d883263ddd94b93ebd3937ce86a14604a1e742507c4f7fd3ed1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
            'list' => array($this, 'block_list'),
            'show' => array($this, 'block_show'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $context["_list_table"] = trim($this->renderBlock("list_table", $context, $blocks));
        // line 14
        echo "    ";
        $context["_list_filters"] = trim($this->renderBlock("list_filters", $context, $blocks));
        // line 15
        echo "    ";
        $context["_list_filters_actions"] = $this->renderBlock("list_filters_actions", $context, $blocks);
        // line 16
        echo "
    ";
        // line 17
        $this->displayBlock('preview', $context, $blocks);
        // line 18
        echo "    ";
        $this->displayBlock('form', $context, $blocks);
        // line 19
        echo "    ";
        $this->displayBlock('list', $context, $blocks);
        // line 20
        echo "    ";
        $this->displayBlock('show', $context, $blocks);
        // line 21
        echo "


    ";
        // line 24
        if (((!twig_test_empty((isset($context["_list_table"]) ? $context["_list_table"] : null))) || (!twig_test_empty((isset($context["_list_filters"]) ? $context["_list_filters"] : null))))) {
            // line 25
            echo "        <div class=\"row\">

                    ";
            // line 27
            if ((((array_key_exists("admin", $context) && array_key_exists("action", $context)) && ((isset($context["action"]) ? $context["action"] : null) == "list")) && (twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "listModes")) > 1))) {
                // line 28
                echo "                        <div class=\"nav navbar-right btn-group\">
                            ";
                // line 29
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "listModes"));
                foreach ($context['_seq'] as $context["mode"] => $context["settings"]) {
                    // line 30
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list", 1 => twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "query"), "all"), array("_list_mode" => (isset($context["mode"]) ? $context["mode"] : null)))), "method"), "html", null, true);
                    echo "\" class=\"btn btn-default navbar-btn btn-sm";
                    if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getListMode", array(), "method") == (isset($context["mode"]) ? $context["mode"] : null))) {
                        echo " active";
                    }
                    echo "\"><i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "class"), "html", null, true);
                    echo "\"></i></a>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['mode'], $context['settings'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "                        </div>
                    ";
            }
            // line 34
            echo "
                    ";
            // line 35
            if ((!twig_test_empty((isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : null)))) {
                // line 36
                echo "                        ";
                echo (isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : null);
                echo "
                    ";
            }
            // line 38
            echo "
            </div>

        ";
            // line 41
            if (trim((isset($context["_list_filters"]) ? $context["_list_filters"] : null))) {
                // line 42
                echo "             <div class=\"row\">
                 ";
                // line 43
                echo (isset($context["_list_filters"]) ? $context["_list_filters"] : null);
                echo "
             </div>
        ";
            }
            // line 46
            echo "
        <div class=\"row\">
            ";
            // line 48
            echo (isset($context["_list_table"]) ? $context["_list_table"] : null);
            echo "
        </div>

     ";
        }
        // line 52
        echo "
";
    }

    // line 17
    public function block_preview($context, array $blocks = array())
    {
    }

    // line 18
    public function block_form($context, array $blocks = array())
    {
    }

    // line 19
    public function block_list($context, array $blocks = array())
    {
    }

    // line 20
    public function block_show($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  153 => 20,  148 => 19,  126 => 48,  124 => 40,  97 => 27,  76 => 30,  53 => 20,  281 => 115,  256 => 102,  239 => 94,  223 => 87,  207 => 80,  198 => 77,  191 => 73,  175 => 66,  150 => 56,  139 => 51,  118 => 42,  83 => 23,  74 => 19,  186 => 62,  161 => 6,  37 => 4,  23 => 1,  170 => 57,  160 => 54,  155 => 58,  134 => 49,  127 => 45,  113 => 42,  104 => 34,  100 => 36,  90 => 49,  84 => 26,  77 => 19,  70 => 17,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 107,  258 => 81,  252 => 101,  247 => 99,  241 => 77,  229 => 73,  220 => 70,  214 => 84,  177 => 65,  169 => 11,  140 => 71,  132 => 51,  128 => 49,  111 => 41,  107 => 37,  61 => 24,  273 => 110,  269 => 109,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 93,  230 => 91,  227 => 81,  224 => 71,  221 => 77,  219 => 86,  217 => 75,  208 => 68,  204 => 72,  179 => 14,  159 => 59,  143 => 18,  135 => 69,  131 => 52,  119 => 42,  108 => 36,  102 => 35,  71 => 19,  67 => 27,  63 => 25,  59 => 13,  47 => 18,  38 => 7,  94 => 26,  89 => 20,  85 => 25,  79 => 18,  75 => 23,  68 => 14,  56 => 21,  50 => 19,  29 => 2,  87 => 25,  72 => 29,  55 => 15,  21 => 2,  26 => 5,  98 => 35,  93 => 26,  88 => 6,  78 => 21,  46 => 7,  27 => 12,  40 => 15,  44 => 9,  35 => 6,  31 => 8,  43 => 6,  41 => 8,  28 => 3,  201 => 92,  196 => 90,  183 => 61,  171 => 65,  166 => 63,  163 => 62,  158 => 5,  156 => 66,  151 => 50,  142 => 59,  138 => 17,  136 => 56,  123 => 44,  121 => 59,  117 => 44,  115 => 43,  105 => 29,  101 => 28,  91 => 32,  69 => 28,  66 => 17,  62 => 14,  49 => 6,  24 => 11,  32 => 5,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 79,  199 => 67,  193 => 73,  189 => 71,  187 => 72,  182 => 70,  176 => 13,  173 => 65,  168 => 72,  164 => 59,  162 => 55,  154 => 58,  149 => 51,  147 => 58,  144 => 46,  141 => 48,  133 => 52,  130 => 43,  125 => 61,  122 => 46,  116 => 43,  112 => 33,  109 => 55,  106 => 38,  103 => 32,  99 => 31,  95 => 34,  92 => 25,  86 => 22,  82 => 21,  80 => 22,  73 => 18,  64 => 15,  60 => 14,  57 => 12,  54 => 22,  51 => 14,  48 => 10,  45 => 17,  42 => 16,  39 => 15,  36 => 14,  33 => 13,  30 => 3,);
    }
}
