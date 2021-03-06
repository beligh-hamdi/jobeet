<?php

/* SonataAdminBundle:CRUD:list__action_delete.html.twig */
class __TwigTemplate_305f8e9c114b22f158cd83160e70fbc1223c14357aa4c596bcd4069901db3bf2 extends Twig_Template
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
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "DELETE", 1 => (isset($context["object"]) ? $context["object"] : null)), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "delete"), "method"))) {
            // line 13
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateObjectUrl", array(0 => "delete", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"), "html", null, true);
            echo "\" class=\"btn btn-sm btn-default delete_link\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action_delete", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
        <i class=\"glyphicon glyphicon-remove\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action_delete", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    </a>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__action_delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 58,  172 => 56,  676 => 254,  665 => 252,  661 => 251,  652 => 247,  647 => 245,  641 => 243,  639 => 242,  632 => 237,  622 => 233,  615 => 229,  611 => 227,  609 => 226,  607 => 225,  601 => 224,  586 => 223,  582 => 222,  574 => 217,  568 => 216,  560 => 213,  557 => 212,  554 => 211,  551 => 210,  548 => 209,  541 => 204,  528 => 200,  520 => 199,  517 => 198,  512 => 197,  506 => 194,  501 => 191,  498 => 190,  493 => 182,  489 => 168,  486 => 167,  482 => 166,  479 => 165,  476 => 164,  472 => 157,  468 => 156,  465 => 155,  460 => 125,  449 => 123,  445 => 122,  438 => 118,  434 => 117,  425 => 115,  422 => 114,  399 => 92,  396 => 91,  390 => 128,  385 => 114,  376 => 90,  373 => 89,  367 => 169,  359 => 160,  353 => 155,  350 => 154,  343 => 149,  333 => 145,  328 => 143,  325 => 142,  321 => 141,  307 => 133,  303 => 131,  300 => 130,  297 => 89,  292 => 87,  280 => 82,  275 => 79,  272 => 78,  266 => 76,  260 => 72,  251 => 70,  232 => 65,  215 => 62,  197 => 56,  188 => 53,  392 => 107,  389 => 106,  383 => 104,  377 => 102,  354 => 95,  352 => 94,  349 => 93,  342 => 91,  335 => 89,  332 => 88,  326 => 86,  324 => 85,  318 => 83,  315 => 82,  302 => 76,  299 => 75,  293 => 73,  287 => 85,  284 => 70,  282 => 69,  279 => 68,  276 => 67,  271 => 62,  257 => 56,  222 => 44,  211 => 41,  190 => 38,  96 => 37,  12 => 36,  267 => 5,  263 => 58,  218 => 63,  205 => 90,  146 => 33,  259 => 118,  250 => 113,  244 => 111,  242 => 101,  237 => 109,  233 => 48,  231 => 99,  210 => 97,  200 => 64,  192 => 90,  174 => 85,  114 => 73,  145 => 54,  194 => 62,  185 => 61,  157 => 39,  216 => 99,  212 => 61,  206 => 59,  195 => 49,  184 => 45,  181 => 44,  167 => 36,  165 => 69,  137 => 29,  129 => 49,  20 => 11,  65 => 29,  110 => 38,  52 => 23,  152 => 30,  120 => 46,  81 => 33,  58 => 25,  34 => 17,  153 => 20,  148 => 37,  126 => 48,  124 => 47,  97 => 41,  76 => 30,  53 => 18,  281 => 115,  256 => 102,  239 => 94,  223 => 87,  207 => 91,  198 => 77,  191 => 54,  175 => 57,  150 => 35,  139 => 52,  118 => 75,  83 => 36,  74 => 33,  186 => 60,  161 => 48,  37 => 20,  23 => 11,  170 => 71,  160 => 40,  155 => 55,  134 => 45,  127 => 59,  113 => 44,  104 => 75,  100 => 43,  90 => 36,  84 => 34,  77 => 34,  70 => 29,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 116,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 127,  384 => 121,  381 => 112,  379 => 91,  374 => 101,  368 => 99,  365 => 164,  362 => 97,  360 => 109,  355 => 158,  341 => 105,  337 => 90,  322 => 101,  314 => 137,  312 => 98,  309 => 134,  305 => 77,  298 => 91,  294 => 88,  285 => 89,  283 => 83,  278 => 86,  268 => 61,  264 => 107,  258 => 81,  252 => 53,  247 => 68,  241 => 77,  229 => 105,  220 => 64,  214 => 84,  177 => 48,  169 => 33,  140 => 183,  132 => 76,  128 => 42,  111 => 72,  107 => 70,  61 => 26,  273 => 110,  269 => 77,  254 => 71,  246 => 90,  243 => 67,  240 => 86,  238 => 66,  235 => 108,  230 => 47,  227 => 104,  224 => 45,  221 => 77,  219 => 86,  217 => 75,  208 => 96,  204 => 53,  179 => 76,  159 => 66,  143 => 184,  135 => 181,  131 => 60,  119 => 174,  108 => 45,  102 => 43,  71 => 32,  67 => 19,  63 => 29,  59 => 24,  47 => 23,  38 => 19,  94 => 40,  89 => 39,  85 => 47,  79 => 35,  75 => 37,  68 => 24,  56 => 23,  50 => 23,  29 => 15,  87 => 51,  72 => 30,  55 => 24,  21 => 11,  26 => 14,  98 => 41,  93 => 21,  88 => 38,  78 => 40,  46 => 22,  27 => 14,  40 => 19,  44 => 22,  35 => 20,  31 => 16,  43 => 21,  41 => 20,  28 => 17,  201 => 52,  196 => 90,  183 => 51,  171 => 44,  166 => 49,  163 => 58,  158 => 47,  156 => 64,  151 => 38,  142 => 31,  138 => 34,  136 => 58,  123 => 47,  121 => 50,  117 => 45,  115 => 47,  105 => 44,  101 => 39,  91 => 39,  69 => 31,  66 => 30,  62 => 25,  49 => 17,  24 => 13,  32 => 15,  25 => 12,  22 => 12,  19 => 11,  209 => 60,  203 => 58,  199 => 86,  193 => 83,  189 => 47,  187 => 46,  182 => 70,  176 => 73,  173 => 35,  168 => 43,  164 => 42,  162 => 68,  154 => 63,  149 => 60,  147 => 34,  144 => 47,  141 => 35,  133 => 49,  130 => 43,  125 => 51,  122 => 44,  116 => 111,  112 => 82,  109 => 81,  106 => 37,  103 => 43,  99 => 42,  95 => 41,  92 => 54,  86 => 37,  82 => 46,  80 => 35,  73 => 34,  64 => 27,  60 => 28,  57 => 27,  54 => 25,  51 => 24,  48 => 22,  45 => 15,  42 => 14,  39 => 22,  36 => 16,  33 => 13,  30 => 14,);
    }
}
