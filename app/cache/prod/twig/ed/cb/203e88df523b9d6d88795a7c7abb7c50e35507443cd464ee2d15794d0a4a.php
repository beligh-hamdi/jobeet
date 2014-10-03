<?php

/* SonataAdminBundle:CRUD:base_edit_form_macro.html.twig */
class __TwigTemplate_edcb203e88df523b9d6d88795a7c7abb7c50e35507443cd464ee2d15794d0a4a extends Twig_Template
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
    }

    // line 1
    public function getrender_groups($_admin = null, $_form = null, $_groups = null, $_has_tab = null)
    {
        $context = $this->env->mergeGlobals(array(
            "admin" => $_admin,
            "form" => $_form,
            "groups" => $_groups,
            "has_tab" => $_has_tab,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            if ((isset($context["has_tab"]) ? $context["has_tab"] : null)) {
                echo "<div class=\"row\">";
            }
            // line 3
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
                // line 4
                echo "        ";
                $context["form_group"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "formgroups"), (isset($context["code"]) ? $context["code"] : null), array(), "array");
                // line 5
                echo "        <div class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : null), "class"), "html", null, true);
                echo "\"> ";
                // line 6
                echo "            <div class=\"box box-success\">
                <div class=\"box-header\">
                    <h4 class=\"box-title\">
                        ";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "trans", array(0 => $this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : null), "name"), 1 => array(), 2 => $this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : null), "translation_domain")), "method"), "html", null, true);
                echo "
                    </h4>
                </div>
                ";
                // line 13
                echo "                <div class=\"box-body\">
                    <div class=\"sonata-ba-collapsed-fields\">
                        ";
                // line 15
                if (($this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : null), "description") != false)) {
                    // line 16
                    echo "                            <p>";
                    echo $this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : null), "description");
                    echo "</p>
                        ";
                }
                // line 18
                echo "
                        ";
                // line 19
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : null), "fields"));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                    // line 20
                    echo "                            ";
                    if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "formfielddescriptions", array(), "any", false, true), (isset($context["field_name"]) ? $context["field_name"] : null), array(), "array", true, true)) {
                        // line 21
                        echo "                                ";
                        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), (isset($context["field_name"]) ? $context["field_name"] : null), array(), "array"), 'row');
                        echo "
                            ";
                    }
                    // line 23
                    echo "                        ";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 24
                    echo "                            <em>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message_form_group_empty", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</em>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "                    </div>
                </div>
                ";
                // line 29
                echo "            </div>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "    ";
            if ((isset($context["has_tab"]) ? $context["has_tab"] : null)) {
                echo "</div>";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit_form_macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  392 => 107,  389 => 106,  383 => 104,  377 => 102,  354 => 95,  352 => 94,  349 => 93,  342 => 91,  335 => 89,  332 => 88,  326 => 86,  324 => 85,  318 => 83,  315 => 82,  302 => 76,  299 => 75,  293 => 73,  287 => 71,  284 => 70,  282 => 69,  279 => 68,  276 => 67,  271 => 62,  257 => 56,  222 => 44,  211 => 41,  190 => 38,  96 => 30,  12 => 36,  267 => 5,  263 => 58,  218 => 97,  205 => 90,  146 => 33,  259 => 118,  250 => 113,  244 => 111,  242 => 101,  237 => 109,  233 => 48,  231 => 99,  210 => 97,  200 => 94,  192 => 90,  174 => 85,  114 => 51,  145 => 54,  194 => 40,  185 => 61,  157 => 56,  216 => 99,  212 => 58,  206 => 54,  195 => 84,  184 => 87,  181 => 77,  167 => 36,  165 => 69,  137 => 29,  129 => 25,  20 => 1,  65 => 27,  110 => 29,  52 => 6,  152 => 61,  120 => 46,  81 => 20,  58 => 24,  34 => 15,  153 => 20,  148 => 49,  126 => 24,  124 => 47,  97 => 24,  76 => 18,  53 => 15,  281 => 115,  256 => 102,  239 => 94,  223 => 87,  207 => 91,  198 => 77,  191 => 73,  175 => 74,  150 => 35,  139 => 54,  118 => 32,  83 => 20,  74 => 30,  186 => 81,  161 => 6,  37 => 17,  23 => 1,  170 => 71,  160 => 57,  155 => 58,  134 => 28,  127 => 59,  113 => 44,  104 => 40,  100 => 61,  90 => 24,  84 => 36,  77 => 31,  70 => 22,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 101,  368 => 99,  365 => 98,  362 => 97,  360 => 109,  355 => 106,  341 => 105,  337 => 90,  322 => 101,  314 => 99,  312 => 98,  309 => 79,  305 => 77,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 61,  264 => 107,  258 => 81,  252 => 53,  247 => 99,  241 => 77,  229 => 105,  220 => 70,  214 => 84,  177 => 86,  169 => 11,  140 => 30,  132 => 27,  128 => 47,  111 => 44,  107 => 47,  61 => 24,  273 => 110,  269 => 6,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 108,  230 => 47,  227 => 104,  224 => 45,  221 => 77,  219 => 86,  217 => 75,  208 => 96,  204 => 53,  179 => 76,  159 => 66,  143 => 56,  135 => 69,  131 => 60,  119 => 112,  108 => 42,  102 => 64,  71 => 32,  67 => 15,  63 => 13,  59 => 13,  47 => 17,  38 => 5,  94 => 43,  89 => 40,  85 => 25,  79 => 35,  75 => 18,  68 => 31,  56 => 16,  50 => 14,  29 => 3,  87 => 23,  72 => 28,  55 => 12,  21 => 1,  26 => 2,  98 => 39,  93 => 21,  88 => 28,  78 => 19,  46 => 8,  27 => 14,  40 => 3,  44 => 18,  35 => 2,  31 => 15,  43 => 7,  41 => 6,  28 => 14,  201 => 52,  196 => 90,  183 => 78,  171 => 57,  166 => 63,  163 => 58,  158 => 5,  156 => 64,  151 => 61,  142 => 31,  138 => 49,  136 => 58,  123 => 48,  121 => 59,  117 => 53,  115 => 40,  105 => 65,  101 => 40,  91 => 37,  69 => 16,  66 => 30,  62 => 14,  49 => 6,  24 => 1,  32 => 4,  25 => 3,  22 => 12,  19 => 1,  209 => 92,  203 => 89,  199 => 86,  193 => 83,  189 => 82,  187 => 48,  182 => 70,  176 => 73,  173 => 72,  168 => 70,  164 => 79,  162 => 68,  154 => 63,  149 => 60,  147 => 34,  144 => 32,  141 => 55,  133 => 49,  130 => 48,  125 => 46,  122 => 56,  116 => 111,  112 => 109,  109 => 43,  106 => 26,  103 => 41,  99 => 41,  95 => 28,  92 => 23,  86 => 21,  82 => 34,  80 => 26,  73 => 17,  64 => 25,  60 => 23,  57 => 9,  54 => 23,  51 => 12,  48 => 5,  45 => 4,  42 => 19,  39 => 16,  36 => 4,  33 => 3,  30 => 2,);
    }
}
