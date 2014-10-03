<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_b1fd60dd912c668e0607cc68571587c055cb73c910df57c858a0312849d82b1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((isset($context["base_template"]) ? $context["base_template"] : null));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        echo "    <li>";
        $this->env->loadTemplate("SonataAdminBundle:Button:create_button.html.twig")->display($context);
        echo "</li>
    <li>";
        // line 16
        $this->env->loadTemplate("SonataAdminBundle:Button:list_button.html.twig")->display($context);
        echo "</li>
";
    }

    // line 19
    public function block_tab_menu($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 21
            echo "        ";
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : null)), "method"), array("currentClass" => "active", "template" => $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
    }

    // line 25
    public function block_content($context, array $blocks = array())
    {
        // line 26
        echo "
    Redefine the content block in your action template

";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 5,  263 => 4,  218 => 97,  205 => 90,  146 => 58,  259 => 118,  250 => 113,  244 => 111,  242 => 101,  237 => 109,  233 => 107,  231 => 99,  210 => 97,  200 => 94,  192 => 90,  174 => 85,  114 => 51,  145 => 54,  194 => 66,  185 => 61,  157 => 56,  216 => 99,  212 => 58,  206 => 54,  195 => 84,  184 => 87,  181 => 77,  167 => 56,  165 => 69,  137 => 52,  129 => 44,  20 => 1,  65 => 27,  110 => 22,  52 => 19,  152 => 61,  120 => 46,  81 => 32,  58 => 24,  34 => 15,  153 => 20,  148 => 49,  126 => 55,  124 => 47,  97 => 41,  76 => 27,  53 => 22,  281 => 115,  256 => 102,  239 => 94,  223 => 87,  207 => 91,  198 => 77,  191 => 73,  175 => 74,  150 => 56,  139 => 54,  118 => 46,  83 => 31,  74 => 30,  186 => 81,  161 => 6,  37 => 17,  23 => 1,  170 => 71,  160 => 57,  155 => 58,  134 => 51,  127 => 59,  113 => 44,  104 => 40,  100 => 43,  90 => 20,  84 => 36,  77 => 31,  70 => 27,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 107,  258 => 81,  252 => 3,  247 => 99,  241 => 77,  229 => 105,  220 => 70,  214 => 84,  177 => 86,  169 => 11,  140 => 51,  132 => 27,  128 => 47,  111 => 44,  107 => 47,  61 => 24,  273 => 110,  269 => 6,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 108,  230 => 61,  227 => 104,  224 => 103,  221 => 77,  219 => 86,  217 => 75,  208 => 96,  204 => 53,  179 => 76,  159 => 66,  143 => 56,  135 => 69,  131 => 60,  119 => 54,  108 => 42,  102 => 44,  71 => 32,  67 => 26,  63 => 25,  59 => 26,  47 => 17,  38 => 12,  94 => 43,  89 => 40,  85 => 25,  79 => 35,  75 => 29,  68 => 31,  56 => 25,  50 => 21,  29 => 3,  87 => 36,  72 => 28,  55 => 15,  21 => 2,  26 => 2,  98 => 39,  93 => 21,  88 => 37,  78 => 28,  46 => 9,  27 => 14,  40 => 17,  44 => 18,  35 => 11,  31 => 15,  43 => 18,  41 => 19,  28 => 14,  201 => 52,  196 => 90,  183 => 78,  171 => 57,  166 => 63,  163 => 58,  158 => 5,  156 => 64,  151 => 61,  142 => 31,  138 => 49,  136 => 58,  123 => 48,  121 => 59,  117 => 53,  115 => 45,  105 => 44,  101 => 40,  91 => 37,  69 => 26,  66 => 30,  62 => 19,  49 => 6,  24 => 13,  32 => 4,  25 => 3,  22 => 12,  19 => 1,  209 => 92,  203 => 89,  199 => 86,  193 => 83,  189 => 82,  187 => 48,  182 => 70,  176 => 73,  173 => 72,  168 => 70,  164 => 79,  162 => 68,  154 => 63,  149 => 60,  147 => 34,  144 => 48,  141 => 55,  133 => 49,  130 => 48,  125 => 46,  122 => 56,  116 => 45,  112 => 33,  109 => 43,  106 => 38,  103 => 41,  99 => 41,  95 => 38,  92 => 38,  86 => 37,  82 => 34,  80 => 33,  73 => 27,  64 => 25,  60 => 23,  57 => 12,  54 => 23,  51 => 12,  48 => 21,  45 => 20,  42 => 19,  39 => 16,  36 => 16,  33 => 3,  30 => 15,);
    }
}
