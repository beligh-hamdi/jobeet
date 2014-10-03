<?php

/* SonataAdminBundle:CRUD:base_list_flat_inner_row.html.twig */
class __TwigTemplate_6b1d5c99dc6808a3b9bc5e22f4e757514ea3675b0f403a5593a8ed657c98a4d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'row' => array($this, 'block_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list"), "has", array(0 => "batch"), "method") && (!$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "isXmlHttpRequest")))) {
            // line 13
            echo "    <td class=\"sonata-ba-list-field sonata-ba-list-field-batch\">
        ";
            // line 14
            echo $this->env->getExtension('sonata_admin')->renderListElement((isset($context["object"]) ? $context["object"] : null), $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list"), "batch", array(), "array"));
            echo "
    </td>
";
        }
        // line 17
        echo "
<td class=\"sonata-ba-list-field sonata-ba-list-field-inline-fields\" colspan=\"";
        // line 18
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list"), "elements")) - ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list"), "has", array(0 => "_action"), "method") + $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list"), "has", array(0 => "batch"), "method"))), "html", null, true);
        echo "\" objectId=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method"), "html", null, true);
        echo "\">
    ";
        // line 19
        $this->displayBlock('row', $context, $blocks);
        // line 20
        echo "</td>

";
        // line 22
        if (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list"), "has", array(0 => "_action"), "method") && (!$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "isXmlHttpRequest")))) {
            // line 23
            echo "    <td class=\"sonata-ba-list-field sonata-ba-list-field-_action\" objectId=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method"), "html", null, true);
            echo "\">
        ";
            // line 24
            echo $this->env->getExtension('sonata_admin')->renderListElement((isset($context["object"]) ? $context["object"] : null), $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list"), "_action", array(), "array"));
            echo "
    </td>
";
        }
    }

    // line 19
    public function block_row($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list_flat_inner_row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  676 => 254,  665 => 252,  661 => 251,  652 => 247,  647 => 245,  641 => 243,  639 => 242,  632 => 237,  622 => 233,  615 => 229,  611 => 227,  609 => 226,  607 => 225,  601 => 224,  586 => 223,  582 => 222,  574 => 217,  568 => 216,  560 => 213,  557 => 212,  554 => 211,  551 => 210,  548 => 209,  541 => 204,  528 => 200,  520 => 199,  517 => 198,  512 => 197,  506 => 194,  501 => 191,  498 => 190,  493 => 182,  489 => 168,  486 => 167,  482 => 166,  479 => 165,  476 => 164,  472 => 157,  468 => 156,  465 => 155,  460 => 125,  449 => 123,  445 => 122,  438 => 118,  434 => 117,  425 => 115,  422 => 114,  399 => 92,  396 => 91,  390 => 128,  385 => 114,  376 => 90,  373 => 89,  367 => 169,  359 => 160,  353 => 155,  350 => 154,  343 => 149,  333 => 145,  328 => 143,  325 => 142,  321 => 141,  307 => 133,  303 => 131,  300 => 130,  297 => 89,  292 => 87,  280 => 82,  275 => 79,  272 => 78,  266 => 76,  260 => 72,  251 => 70,  232 => 65,  215 => 62,  197 => 56,  188 => 53,  392 => 107,  389 => 106,  383 => 104,  377 => 102,  354 => 95,  352 => 94,  349 => 93,  342 => 91,  335 => 89,  332 => 88,  326 => 86,  324 => 85,  318 => 83,  315 => 82,  302 => 76,  299 => 75,  293 => 73,  287 => 85,  284 => 70,  282 => 69,  279 => 68,  276 => 67,  271 => 62,  257 => 56,  222 => 44,  211 => 41,  190 => 38,  96 => 30,  12 => 36,  267 => 5,  263 => 58,  218 => 63,  205 => 90,  146 => 33,  259 => 118,  250 => 113,  244 => 111,  242 => 101,  237 => 109,  233 => 48,  231 => 99,  210 => 97,  200 => 57,  192 => 90,  174 => 85,  114 => 172,  145 => 54,  194 => 55,  185 => 61,  157 => 39,  216 => 99,  212 => 61,  206 => 59,  195 => 84,  184 => 87,  181 => 50,  167 => 36,  165 => 69,  137 => 29,  129 => 178,  20 => 11,  65 => 27,  110 => 38,  52 => 20,  152 => 30,  120 => 46,  81 => 38,  58 => 24,  34 => 17,  153 => 20,  148 => 49,  126 => 177,  124 => 47,  97 => 24,  76 => 30,  53 => 28,  281 => 115,  256 => 102,  239 => 94,  223 => 87,  207 => 91,  198 => 77,  191 => 54,  175 => 74,  150 => 35,  139 => 54,  118 => 32,  83 => 33,  74 => 30,  186 => 52,  161 => 6,  37 => 18,  23 => 12,  170 => 71,  160 => 40,  155 => 58,  134 => 45,  127 => 59,  113 => 44,  104 => 75,  100 => 61,  90 => 24,  84 => 39,  77 => 31,  70 => 22,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 116,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 127,  384 => 121,  381 => 112,  379 => 91,  374 => 101,  368 => 99,  365 => 164,  362 => 97,  360 => 109,  355 => 158,  341 => 105,  337 => 90,  322 => 101,  314 => 137,  312 => 98,  309 => 134,  305 => 77,  298 => 91,  294 => 88,  285 => 89,  283 => 83,  278 => 86,  268 => 61,  264 => 107,  258 => 81,  252 => 53,  247 => 68,  241 => 77,  229 => 105,  220 => 64,  214 => 84,  177 => 48,  169 => 11,  140 => 183,  132 => 27,  128 => 42,  111 => 44,  107 => 76,  61 => 31,  273 => 110,  269 => 77,  254 => 71,  246 => 90,  243 => 67,  240 => 86,  238 => 66,  235 => 108,  230 => 47,  227 => 104,  224 => 45,  221 => 77,  219 => 86,  217 => 75,  208 => 96,  204 => 53,  179 => 76,  159 => 66,  143 => 184,  135 => 181,  131 => 60,  119 => 174,  108 => 42,  102 => 39,  71 => 28,  67 => 29,  63 => 24,  59 => 30,  47 => 25,  38 => 16,  94 => 36,  89 => 24,  85 => 25,  79 => 35,  75 => 36,  68 => 24,  56 => 24,  50 => 27,  29 => 13,  87 => 23,  72 => 19,  55 => 12,  21 => 11,  26 => 14,  98 => 39,  93 => 21,  88 => 28,  78 => 31,  46 => 25,  27 => 14,  40 => 23,  44 => 24,  35 => 20,  31 => 19,  43 => 19,  41 => 23,  28 => 14,  201 => 52,  196 => 90,  183 => 51,  171 => 44,  166 => 63,  163 => 58,  158 => 5,  156 => 64,  151 => 61,  142 => 31,  138 => 182,  136 => 58,  123 => 176,  121 => 59,  117 => 173,  115 => 39,  105 => 65,  101 => 40,  91 => 37,  69 => 33,  66 => 25,  62 => 14,  49 => 22,  24 => 12,  32 => 14,  25 => 13,  22 => 11,  19 => 1,  209 => 60,  203 => 58,  199 => 86,  193 => 83,  189 => 82,  187 => 48,  182 => 70,  176 => 73,  173 => 72,  168 => 43,  164 => 42,  162 => 68,  154 => 63,  149 => 60,  147 => 34,  144 => 47,  141 => 55,  133 => 49,  130 => 43,  125 => 46,  122 => 56,  116 => 111,  112 => 82,  109 => 81,  106 => 37,  103 => 41,  99 => 38,  95 => 32,  92 => 28,  86 => 34,  82 => 23,  80 => 26,  73 => 17,  64 => 19,  60 => 15,  57 => 22,  54 => 23,  51 => 23,  48 => 17,  45 => 20,  42 => 19,  39 => 17,  36 => 4,  33 => 3,  30 => 13,);
    }
}
