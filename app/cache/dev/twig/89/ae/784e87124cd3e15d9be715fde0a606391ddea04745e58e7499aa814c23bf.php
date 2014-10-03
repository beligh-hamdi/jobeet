<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_89ae784e87124cd3e15d9be715fde0a606391ddea04745e58e7499aa814c23bf extends Twig_Template
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
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                options.maxTries = options.maxTries || 0;
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 !== xhr.readyState) {
                        return null;
                    }

                    if (xhr.status == 404 && options.maxTries > 1) {
                        setTimeout(function(){
                            options.maxTries--;
                            request(url, onSuccess, onError, payload, options);
                        }, 500);

                        return null;
                    }

                    if (200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className && el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                if (el.className) {
                    el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
                }
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) {
                    el.className += \" \" + klass;
                }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        '',
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  30 => 5,  24 => 2,  31 => 14,  23 => 12,  19 => 1,  230 => 61,  216 => 60,  212 => 58,  206 => 54,  204 => 53,  201 => 52,  187 => 48,  181 => 46,  177 => 45,  165 => 40,  154 => 37,  151 => 36,  147 => 34,  142 => 31,  139 => 30,  132 => 27,  119 => 24,  80 => 17,  78 => 16,  75 => 28,  69 => 14,  35 => 5,  32 => 6,  27 => 13,  25 => 12,  20 => 1,  175 => 74,  168 => 69,  156 => 64,  152 => 62,  138 => 57,  123 => 52,  109 => 46,  101 => 42,  90 => 20,  88 => 37,  74 => 30,  70 => 26,  53 => 10,  43 => 18,  37 => 16,  29 => 3,  26 => 3,  1067 => 309,  1064 => 308,  1061 => 307,  1057 => 339,  1050 => 335,  1046 => 333,  1040 => 330,  1037 => 329,  1034 => 328,  1032 => 327,  1029 => 326,  1023 => 324,  1021 => 323,  1018 => 322,  1012 => 320,  1010 => 319,  1007 => 318,  1001 => 316,  999 => 315,  996 => 314,  990 => 312,  988 => 311,  985 => 310,  983 => 307,  980 => 306,  977 => 305,  973 => 266,  967 => 263,  964 => 262,  961 => 261,  958 => 260,  954 => 299,  949 => 296,  943 => 294,  941 => 293,  938 => 292,  930 => 287,  925 => 285,  921 => 283,  919 => 282,  916 => 281,  912 => 279,  897 => 277,  893 => 276,  890 => 275,  888 => 274,  884 => 272,  878 => 270,  876 => 269,  872 => 267,  870 => 260,  867 => 259,  864 => 258,  861 => 257,  856 => 300,  853 => 257,  850 => 256,  845 => 340,  843 => 305,  838 => 302,  836 => 256,  833 => 255,  830 => 254,  825 => 246,  822 => 245,  818 => 244,  814 => 242,  808 => 241,  803 => 238,  797 => 237,  785 => 235,  782 => 234,  778 => 233,  772 => 232,  765 => 229,  761 => 228,  753 => 226,  747 => 225,  744 => 224,  741 => 223,  738 => 222,  733 => 221,  730 => 220,  728 => 219,  725 => 218,  722 => 217,  715 => 216,  712 => 215,  709 => 214,  706 => 213,  700 => 212,  697 => 211,  694 => 210,  691 => 208,  684 => 207,  681 => 206,  675 => 205,  672 => 204,  668 => 203,  665 => 202,  662 => 201,  659 => 200,  653 => 199,  649 => 197,  635 => 188,  629 => 186,  626 => 185,  623 => 184,  619 => 248,  616 => 245,  613 => 200,  611 => 199,  608 => 198,  605 => 184,  602 => 183,  596 => 249,  594 => 183,  590 => 181,  587 => 180,  580 => 342,  578 => 254,  574 => 252,  572 => 180,  569 => 179,  566 => 178,  558 => 167,  555 => 166,  547 => 160,  544 => 159,  536 => 153,  533 => 152,  529 => 149,  525 => 147,  519 => 145,  516 => 144,  513 => 143,  499 => 142,  493 => 140,  489 => 138,  483 => 136,  475 => 134,  473 => 133,  470 => 132,  467 => 131,  449 => 130,  446 => 129,  444 => 128,  441 => 127,  438 => 126,  435 => 125,  431 => 174,  427 => 172,  425 => 152,  421 => 150,  419 => 125,  408 => 116,  405 => 115,  402 => 114,  398 => 113,  394 => 111,  388 => 109,  385 => 108,  377 => 106,  375 => 105,  370 => 104,  367 => 103,  364 => 102,  356 => 98,  352 => 96,  349 => 95,  344 => 175,  341 => 114,  338 => 102,  336 => 95,  333 => 94,  330 => 93,  324 => 92,  320 => 89,  317 => 88,  314 => 87,  300 => 86,  295 => 84,  292 => 83,  288 => 81,  285 => 80,  282 => 79,  265 => 78,  262 => 77,  259 => 76,  253 => 74,  251 => 73,  245 => 71,  242 => 70,  237 => 66,  234 => 65,  228 => 63,  225 => 62,  222 => 60,  217 => 59,  214 => 58,  211 => 57,  208 => 55,  199 => 53,  195 => 51,  188 => 48,  184 => 47,  178 => 45,  170 => 44,  158 => 41,  155 => 40,  150 => 61,  141 => 58,  137 => 29,  134 => 28,  131 => 32,  125 => 28,  122 => 25,  110 => 22,  108 => 178,  105 => 44,  103 => 93,  99 => 41,  95 => 90,  93 => 21,  89 => 68,  87 => 40,  84 => 19,  82 => 32,  79 => 29,  72 => 25,  68 => 23,  66 => 25,  62 => 24,  60 => 19,  58 => 22,  56 => 11,  54 => 16,  48 => 13,  46 => 14,  44 => 11,  194 => 66,  189 => 63,  185 => 61,  176 => 58,  171 => 43,  167 => 41,  164 => 55,  162 => 39,  157 => 51,  148 => 49,  144 => 59,  136 => 47,  133 => 46,  129 => 26,  120 => 51,  116 => 50,  113 => 23,  111 => 47,  107 => 37,  98 => 35,  94 => 34,  86 => 33,  83 => 30,  81 => 33,  77 => 31,  73 => 27,  64 => 21,  59 => 12,  55 => 22,  52 => 15,  50 => 15,  45 => 8,  42 => 12,  39 => 6,  34 => 16,  28 => 14,);
    }
}
