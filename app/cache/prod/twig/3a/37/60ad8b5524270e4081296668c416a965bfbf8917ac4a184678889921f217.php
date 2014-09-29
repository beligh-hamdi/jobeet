<?php

/* EnsJobeetBundle:Job:new.html.twig */
class __TwigTemplate_3a3760ad8b5524270e4081296668c416a965bfbf8917ac4a184678889921f217 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Job creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("ens_job");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:Job:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 64,  146 => 53,  83 => 35,  65 => 31,  58 => 29,  53 => 5,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 50,  132 => 51,  128 => 49,  111 => 42,  107 => 41,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 46,  119 => 44,  108 => 36,  102 => 32,  71 => 32,  67 => 15,  63 => 15,  59 => 6,  47 => 12,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  79 => 34,  75 => 33,  68 => 14,  56 => 9,  50 => 10,  29 => 5,  87 => 36,  72 => 16,  55 => 15,  21 => 2,  26 => 6,  98 => 31,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  40 => 8,  44 => 11,  35 => 6,  31 => 4,  43 => 8,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 59,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  105 => 40,  101 => 32,  91 => 37,  69 => 11,  66 => 15,  62 => 30,  49 => 14,  24 => 4,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 45,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 40,  99 => 39,  95 => 38,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 10,  60 => 13,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 8,  42 => 10,  39 => 9,  36 => 5,  33 => 6,  30 => 7,);
    }
}
