<?php

/* SonataAdminBundle:CRUD:tree.html.twig */
class __TwigTemplate_849cf96df214cea0601472d76ceaea1157d3f2f8836a64c5ac61cb29a94554e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig");

        $this->blocks = array(
            'tab_menu' => array($this, 'block_tab_menu'),
            'list_table' => array($this, 'block_list_table'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 18
        $context["tree"] = $this;
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 40
    public function block_tab_menu($context, array $blocks = array())
    {
        // line 41
        echo "    ";
        $this->env->loadTemplate("SonataAdminBundle:CRUD:list_tab_menu.html.twig")->display(array("mode" => "tree", "action" => (isset($context["action"]) ? $context["action"] : null), "admin" => (isset($context["admin"]) ? $context["admin"] : null)));
    }

    // line 48
    public function block_list_table($context, array $blocks = array())
    {
        // line 49
        echo "    <div class=\"box box-primary\">
        <div class=\"box-header\">
            <h1 class=\"box-title\">
                ";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "trans", array(0 => "element.tree_site_label"), "method"), "html", null, true);
        echo "
                <div class=\"btn-group\">
                    <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                        <strong class=\"text-info\">";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currentSite"]) ? $context["currentSite"] : null), "name"), "html", null, true);
        echo "</strong> <span class=\"caret\"></span>
                    </button>
                    <ul class=\"dropdown-menu\" role=\"menu\">
                        ";
        // line 58
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contexts"]) ? $context["contexts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["context"]) {
            // line 59
            echo "                            <li>
                                <a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "tree", 1 => array("context" => $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "id"))), "method"), "html", null, true);
            echo "\">
                                    ";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "name"), "html", null, true);
            echo "
                                    ";
            // line 62
            if (((isset($context["currentContext"]) ? $context["currentContext"] : null) && ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "id") == $this->getAttribute((isset($context["currentContext"]) ? $context["currentContext"] : null), "id")))) {
                // line 63
                echo "                                        <span class=\"pull-right\">
                                            <i class=\"fa fa-check\"></i>
                                        </span>
                                    ";
            }
            // line 67
            echo "                                </a>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['context'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                    </ul>
                </div>
            </h1>
        </div>
        <div class=\"box-content\">
            ";
        // line 75
        echo $context["tree"]->getnavigate_child((isset($context["collection"]) ? $context["collection"] : null), (isset($context["admin"]) ? $context["admin"] : null), true);
        echo "
        </div>
    </div>
";
    }

    // line 19
    public function getnavigate_child($_collection = null, $_admin = null, $_root = null)
    {
        $context = $this->env->mergeGlobals(array(
            "collection" => $_collection,
            "admin" => $_admin,
            "root" => $_root,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 20
            echo "    <ul";
            if ((isset($context["root"]) ? $context["root"] : null)) {
                echo " class=\"sonata-tree\"";
            }
            echo ">
        ";
            // line 21
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["collection"]) ? $context["collection"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                if ((!(isset($context["root"]) ? $context["root"] : null))) {
                    // line 22
                    echo "            <li>
                <div class=\"sonata-tree__item\">
                    ";
                    // line 24
                    if ($this->getAttribute((isset($context["element"]) ? $context["element"] : null), "parent")) {
                        echo "<i class=\"fa fa-caret-right\"></i>";
                    }
                    // line 25
                    echo "                    <i class=\"fa fa-code\"></i>
                    <a class=\"sonata-tree__item__edit\" href=\"";
                    // line 26
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["element"]) ? $context["element"] : null)), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : null), "name"), "html", null, true);
                    echo "</a>
                    <i class=\"text-muted\">";
                    // line 27
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : null), "description"), "html", null, true);
                    echo "</i>
                    <a class=\"label label-default pull-right\" href=\"";
                    // line 28
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["element"]) ? $context["element"] : null)), "method"), "html", null, true);
                    echo "\">edit <i class=\"fa fa-magic\"></i></a>
                    ";
                    // line 29
                    if (true) {
                        echo "<span class=\"label label-warning pull-right\">true</span>";
                    }
                    // line 30
                    echo "                </div>

                ";
                    // line 32
                    if (twig_length_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : null), "children"))) {
                        // line 33
                        echo "                    ";
                        echo $this->getAttribute($this, "navigate_child", array(0 => $this->getAttribute((isset($context["element"]) ? $context["element"] : null), "children"), 1 => (isset($context["admin"]) ? $context["admin"] : null), 2 => false), "method");
                        echo "
                ";
                    }
                    // line 35
                    echo "            </li>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "    </ul>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:tree.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 58,  172 => 56,  676 => 254,  665 => 252,  661 => 251,  652 => 247,  647 => 245,  641 => 243,  639 => 242,  632 => 237,  622 => 233,  615 => 229,  611 => 227,  609 => 226,  607 => 225,  601 => 224,  586 => 223,  582 => 222,  574 => 217,  568 => 216,  560 => 213,  557 => 212,  554 => 211,  551 => 210,  548 => 209,  541 => 204,  528 => 200,  520 => 199,  517 => 198,  512 => 197,  506 => 194,  501 => 191,  498 => 190,  493 => 182,  489 => 168,  486 => 167,  482 => 166,  479 => 165,  476 => 164,  472 => 157,  468 => 156,  465 => 155,  460 => 125,  449 => 123,  445 => 122,  438 => 118,  434 => 117,  425 => 115,  422 => 114,  399 => 92,  396 => 91,  390 => 128,  385 => 114,  376 => 90,  373 => 89,  367 => 169,  359 => 160,  353 => 155,  350 => 154,  343 => 149,  333 => 145,  328 => 143,  325 => 142,  321 => 141,  307 => 133,  303 => 131,  300 => 130,  297 => 89,  292 => 87,  280 => 82,  275 => 79,  272 => 78,  266 => 76,  260 => 72,  251 => 70,  232 => 65,  215 => 62,  197 => 56,  188 => 53,  392 => 107,  389 => 106,  383 => 104,  377 => 102,  354 => 95,  352 => 94,  349 => 93,  342 => 91,  335 => 89,  332 => 88,  326 => 86,  324 => 85,  318 => 83,  315 => 82,  302 => 76,  299 => 75,  293 => 73,  287 => 85,  284 => 70,  282 => 69,  279 => 68,  276 => 67,  271 => 62,  257 => 56,  222 => 44,  211 => 41,  190 => 38,  96 => 40,  12 => 36,  267 => 5,  263 => 58,  218 => 63,  205 => 90,  146 => 33,  259 => 118,  250 => 113,  244 => 111,  242 => 101,  237 => 109,  233 => 48,  231 => 99,  210 => 97,  200 => 64,  192 => 90,  174 => 85,  114 => 50,  145 => 53,  194 => 62,  185 => 61,  157 => 39,  216 => 99,  212 => 61,  206 => 59,  195 => 49,  184 => 45,  181 => 44,  167 => 36,  165 => 33,  137 => 29,  129 => 56,  20 => 11,  65 => 29,  110 => 45,  52 => 23,  152 => 30,  120 => 46,  81 => 33,  58 => 25,  34 => 41,  153 => 20,  148 => 37,  126 => 55,  124 => 47,  97 => 75,  76 => 63,  53 => 55,  281 => 115,  256 => 102,  239 => 94,  223 => 87,  207 => 91,  198 => 77,  191 => 54,  175 => 57,  150 => 35,  139 => 51,  118 => 20,  83 => 32,  74 => 62,  186 => 60,  161 => 48,  37 => 16,  23 => 11,  170 => 71,  160 => 40,  155 => 29,  134 => 24,  127 => 59,  113 => 46,  104 => 43,  100 => 43,  90 => 70,  84 => 34,  77 => 30,  70 => 61,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 116,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 127,  384 => 121,  381 => 112,  379 => 91,  374 => 101,  368 => 99,  365 => 164,  362 => 97,  360 => 109,  355 => 158,  341 => 105,  337 => 90,  322 => 101,  314 => 137,  312 => 98,  309 => 134,  305 => 77,  298 => 91,  294 => 88,  285 => 89,  283 => 83,  278 => 86,  268 => 61,  264 => 107,  258 => 81,  252 => 53,  247 => 68,  241 => 77,  229 => 105,  220 => 64,  214 => 84,  177 => 48,  169 => 33,  140 => 183,  132 => 57,  128 => 47,  111 => 72,  107 => 44,  61 => 26,  273 => 110,  269 => 77,  254 => 71,  246 => 90,  243 => 67,  240 => 86,  238 => 66,  235 => 108,  230 => 47,  227 => 104,  224 => 45,  221 => 77,  219 => 86,  217 => 75,  208 => 96,  204 => 53,  179 => 37,  159 => 30,  143 => 184,  135 => 181,  131 => 48,  119 => 44,  108 => 45,  102 => 43,  71 => 31,  67 => 19,  63 => 59,  59 => 58,  47 => 52,  38 => 18,  94 => 40,  89 => 34,  85 => 36,  79 => 34,  75 => 37,  68 => 30,  56 => 25,  50 => 21,  29 => 15,  87 => 51,  72 => 30,  55 => 21,  21 => 11,  26 => 18,  98 => 36,  93 => 39,  88 => 37,  78 => 36,  46 => 19,  27 => 14,  40 => 19,  44 => 19,  35 => 20,  31 => 40,  43 => 20,  41 => 20,  28 => 14,  201 => 52,  196 => 90,  183 => 51,  171 => 35,  166 => 49,  163 => 32,  158 => 47,  156 => 64,  151 => 28,  142 => 31,  138 => 25,  136 => 58,  123 => 47,  121 => 51,  117 => 45,  115 => 47,  105 => 19,  101 => 42,  91 => 39,  69 => 33,  66 => 60,  62 => 28,  49 => 20,  24 => 13,  32 => 14,  25 => 12,  22 => 12,  19 => 11,  209 => 60,  203 => 58,  199 => 86,  193 => 83,  189 => 47,  187 => 46,  182 => 70,  176 => 73,  173 => 35,  168 => 43,  164 => 42,  162 => 68,  154 => 63,  149 => 60,  147 => 27,  144 => 47,  141 => 26,  133 => 49,  130 => 22,  125 => 21,  122 => 45,  116 => 43,  112 => 82,  109 => 81,  106 => 37,  103 => 38,  99 => 41,  95 => 41,  92 => 35,  86 => 33,  82 => 67,  80 => 31,  73 => 32,  64 => 27,  60 => 24,  57 => 23,  54 => 22,  51 => 23,  48 => 22,  45 => 21,  42 => 49,  39 => 48,  36 => 17,  33 => 16,  30 => 14,);
    }
}
