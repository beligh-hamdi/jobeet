<?php

/* SonataAdminBundle:Block:block_rss_dashboard.html.twig */
class __TwigTemplate_394a66cb4f07cb55b659d8d6cc8b2510ac520e20d6ec4c07203c242522d52a8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataBlockBundle:Block:block_core_rss.html.twig");

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataBlockBundle:Block:block_core_rss.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"box box-varning\">
        <div class=\"box-header\">
            <h3 class=\"box-title sonata-feed-title\"><i class=\"fa fa-rss\"></i> ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "title"), "html", null, true);
        echo "</h3>
        </div>

        <div class=\"sonata-feeds-container list-group\">
            ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["feeds"]) ? $context["feeds"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["feed"]) {
            // line 22
            echo "                <a class=\"list-group-item\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["feed"]) ? $context["feed"] : null), "link"), "html", null, true);
            echo "\" rel=\"nofollow\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["feed"]) ? $context["feed"] : null), "title"), "html", null, true);
            echo "\">
                    <strong>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["feed"]) ? $context["feed"] : null), "title"), "html", null, true);
            echo "</strong>
                    <div>";
            // line 24
            echo $this->getAttribute((isset($context["feed"]) ? $context["feed"] : null), "description");
            echo "</div>
                </a>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 27
            echo "                <div class=\"list-group-item\">No feeds available.</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feed'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Block:block_rss_dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 62,  120 => 51,  81 => 33,  58 => 24,  34 => 16,  153 => 20,  148 => 19,  126 => 48,  124 => 40,  97 => 27,  76 => 30,  53 => 20,  281 => 115,  256 => 102,  239 => 94,  223 => 87,  207 => 80,  198 => 77,  191 => 73,  175 => 74,  150 => 61,  139 => 51,  118 => 42,  83 => 23,  74 => 30,  186 => 62,  161 => 6,  37 => 17,  23 => 1,  170 => 57,  160 => 54,  155 => 58,  134 => 55,  127 => 45,  113 => 42,  104 => 34,  100 => 36,  90 => 38,  84 => 26,  77 => 31,  70 => 29,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 107,  258 => 81,  252 => 101,  247 => 99,  241 => 77,  229 => 73,  220 => 70,  214 => 84,  177 => 65,  169 => 11,  140 => 71,  132 => 51,  128 => 49,  111 => 47,  107 => 37,  61 => 24,  273 => 110,  269 => 109,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 93,  230 => 91,  227 => 81,  224 => 71,  221 => 77,  219 => 86,  217 => 75,  208 => 68,  204 => 72,  179 => 14,  159 => 59,  143 => 18,  135 => 69,  131 => 52,  119 => 42,  108 => 36,  102 => 35,  71 => 19,  67 => 27,  63 => 25,  59 => 13,  47 => 22,  38 => 7,  94 => 26,  89 => 20,  85 => 25,  79 => 18,  75 => 23,  68 => 14,  56 => 21,  50 => 19,  29 => 15,  87 => 25,  72 => 29,  55 => 15,  21 => 2,  26 => 14,  98 => 35,  93 => 39,  88 => 37,  78 => 21,  46 => 19,  27 => 12,  40 => 15,  44 => 9,  35 => 17,  31 => 15,  43 => 18,  41 => 8,  28 => 14,  201 => 92,  196 => 90,  183 => 61,  171 => 65,  166 => 63,  163 => 62,  158 => 5,  156 => 64,  151 => 50,  142 => 59,  138 => 57,  136 => 56,  123 => 52,  121 => 59,  117 => 44,  115 => 43,  105 => 44,  101 => 42,  91 => 32,  69 => 28,  66 => 27,  62 => 24,  49 => 6,  24 => 11,  32 => 5,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 79,  199 => 67,  193 => 73,  189 => 71,  187 => 72,  182 => 70,  176 => 13,  173 => 65,  168 => 69,  164 => 59,  162 => 68,  154 => 58,  149 => 51,  147 => 58,  144 => 59,  141 => 58,  133 => 52,  130 => 43,  125 => 61,  122 => 46,  116 => 50,  112 => 33,  109 => 46,  106 => 38,  103 => 32,  99 => 41,  95 => 34,  92 => 25,  86 => 22,  82 => 21,  80 => 22,  73 => 29,  64 => 15,  60 => 14,  57 => 12,  54 => 23,  51 => 14,  48 => 10,  45 => 17,  42 => 21,  39 => 15,  36 => 14,  33 => 13,  30 => 3,);
    }
}
