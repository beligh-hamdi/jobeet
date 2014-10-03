<?php

/* @WebProfiler/Profiler/toolbar_js.html.twig */
class __TwigTemplate_0278735da9dcf3f500c75a320f462954c905aabab37c78fddd562865e8136ea7 extends Twig_Template
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
        // line 1
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->env->loadTemplate("@WebProfiler/Profiler/base_js.html.twig")->display($context);
        // line 3
        echo "<script>/*<![CDATA[*/
    (function () {
        ";
        // line 5
        if (("top" == (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
            // line 6
            echo "            var sfwdt = document.getElementById('sfwdt";
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        ";
        }
        // line 12
        echo "
        Sfjs.load(
            'sfwdt";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "',
            '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';

                if (el.style.display == 'none') {
                    return;
                }

                if (Sfjs.getPreference('toolbar/displayState') == 'none') {
                    document.getElementById('sfToolbarMainContent-";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfToolbarClearer-";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfMiniToolbar-";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                } else {
                    document.getElementById('sfToolbarMainContent-";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfToolbarClearer-";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfMiniToolbar-";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                }
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "');
                }
            },
            {'maxTries': 5}
        );
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  30 => 5,  24 => 2,  31 => 14,  23 => 12,  19 => 1,  230 => 61,  216 => 60,  212 => 58,  206 => 54,  204 => 53,  201 => 52,  187 => 48,  181 => 46,  177 => 45,  165 => 40,  154 => 37,  151 => 36,  147 => 34,  142 => 31,  139 => 30,  132 => 27,  119 => 24,  80 => 17,  78 => 16,  75 => 28,  69 => 14,  35 => 5,  32 => 6,  27 => 13,  25 => 12,  20 => 1,  175 => 74,  168 => 69,  156 => 64,  152 => 62,  138 => 57,  123 => 52,  109 => 46,  101 => 42,  90 => 20,  88 => 37,  74 => 30,  70 => 26,  53 => 10,  43 => 18,  37 => 16,  29 => 3,  26 => 3,  1067 => 309,  1064 => 308,  1061 => 307,  1057 => 339,  1050 => 335,  1046 => 333,  1040 => 330,  1037 => 329,  1034 => 328,  1032 => 327,  1029 => 326,  1023 => 324,  1021 => 323,  1018 => 322,  1012 => 320,  1010 => 319,  1007 => 318,  1001 => 316,  999 => 315,  996 => 314,  990 => 312,  988 => 311,  985 => 310,  983 => 307,  980 => 306,  977 => 305,  973 => 266,  967 => 263,  964 => 262,  961 => 261,  958 => 260,  954 => 299,  949 => 296,  943 => 294,  941 => 293,  938 => 292,  930 => 287,  925 => 285,  921 => 283,  919 => 282,  916 => 281,  912 => 279,  897 => 277,  893 => 276,  890 => 275,  888 => 274,  884 => 272,  878 => 270,  876 => 269,  872 => 267,  870 => 260,  867 => 259,  864 => 258,  861 => 257,  856 => 300,  853 => 257,  850 => 256,  845 => 340,  843 => 305,  838 => 302,  836 => 256,  833 => 255,  830 => 254,  825 => 246,  822 => 245,  818 => 244,  814 => 242,  808 => 241,  803 => 238,  797 => 237,  785 => 235,  782 => 234,  778 => 233,  772 => 232,  765 => 229,  761 => 228,  753 => 226,  747 => 225,  744 => 224,  741 => 223,  738 => 222,  733 => 221,  730 => 220,  728 => 219,  725 => 218,  722 => 217,  715 => 216,  712 => 215,  709 => 214,  706 => 213,  700 => 212,  697 => 211,  694 => 210,  691 => 208,  684 => 207,  681 => 206,  675 => 205,  672 => 204,  668 => 203,  665 => 202,  662 => 201,  659 => 200,  653 => 199,  649 => 197,  635 => 188,  629 => 186,  626 => 185,  623 => 184,  619 => 248,  616 => 245,  613 => 200,  611 => 199,  608 => 198,  605 => 184,  602 => 183,  596 => 249,  594 => 183,  590 => 181,  587 => 180,  580 => 342,  578 => 254,  574 => 252,  572 => 180,  569 => 179,  566 => 178,  558 => 167,  555 => 166,  547 => 160,  544 => 159,  536 => 153,  533 => 152,  529 => 149,  525 => 147,  519 => 145,  516 => 144,  513 => 143,  499 => 142,  493 => 140,  489 => 138,  483 => 136,  475 => 134,  473 => 133,  470 => 132,  467 => 131,  449 => 130,  446 => 129,  444 => 128,  441 => 127,  438 => 126,  435 => 125,  431 => 174,  427 => 172,  425 => 152,  421 => 150,  419 => 125,  408 => 116,  405 => 115,  402 => 114,  398 => 113,  394 => 111,  388 => 109,  385 => 108,  377 => 106,  375 => 105,  370 => 104,  367 => 103,  364 => 102,  356 => 98,  352 => 96,  349 => 95,  344 => 175,  341 => 114,  338 => 102,  336 => 95,  333 => 94,  330 => 93,  324 => 92,  320 => 89,  317 => 88,  314 => 87,  300 => 86,  295 => 84,  292 => 83,  288 => 81,  285 => 80,  282 => 79,  265 => 78,  262 => 77,  259 => 76,  253 => 74,  251 => 73,  245 => 71,  242 => 70,  237 => 66,  234 => 65,  228 => 63,  225 => 62,  222 => 60,  217 => 59,  214 => 58,  211 => 57,  208 => 55,  199 => 53,  195 => 51,  188 => 48,  184 => 47,  178 => 45,  170 => 44,  158 => 41,  155 => 40,  150 => 61,  141 => 58,  137 => 29,  134 => 28,  131 => 32,  125 => 28,  122 => 25,  110 => 22,  108 => 178,  105 => 44,  103 => 93,  99 => 41,  95 => 90,  93 => 21,  89 => 68,  87 => 40,  84 => 19,  82 => 32,  79 => 29,  72 => 25,  68 => 23,  66 => 25,  62 => 24,  60 => 19,  58 => 22,  56 => 11,  54 => 16,  48 => 13,  46 => 14,  44 => 11,  194 => 66,  189 => 63,  185 => 61,  176 => 58,  171 => 43,  167 => 41,  164 => 55,  162 => 39,  157 => 51,  148 => 49,  144 => 59,  136 => 47,  133 => 46,  129 => 26,  120 => 51,  116 => 50,  113 => 23,  111 => 47,  107 => 37,  98 => 35,  94 => 34,  86 => 33,  83 => 30,  81 => 33,  77 => 31,  73 => 27,  64 => 21,  59 => 12,  55 => 22,  52 => 15,  50 => 15,  45 => 8,  42 => 12,  39 => 6,  34 => 16,  28 => 14,);
    }
}
