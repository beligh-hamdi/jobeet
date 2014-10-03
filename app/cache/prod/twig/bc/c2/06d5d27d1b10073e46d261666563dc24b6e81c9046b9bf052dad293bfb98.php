<?php

/* SonataAdminBundle:Core:add_block.html.twig */
class __TwigTemplate_bcc206d5d27d1b10073e46d261666563dc24b6e81c9046b9bf052dad293bfb98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('user_block', $context, $blocks);
    }

    public function block_user_block($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["items_per_column"] = $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "dropdown_number_groups_per_colums"), "method");
        // line 3
        echo "    ";
        $context["groups"] = array();
        // line 4
        echo "
    ";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "dashboardgroups"));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 6
            echo "        ";
            $context["display_group"] = false;
            // line 7
            echo "
        ";
            // line 8
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "items"));
            foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                if (((isset($context["display_group"]) ? $context["display_group"] : null) == false)) {
                    // line 9
                    echo "            ";
                    if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "create"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "CREATE"), "method"))) {
                        // line 10
                        echo "                ";
                        $context["display_group"] = true;
                        // line 11
                        echo "                ";
                        $context["groups"] = twig_array_merge(array(0 => (isset($context["group"]) ? $context["group"] : null)), (isset($context["groups"]) ? $context["groups"] : null));
                        // line 12
                        echo "            ";
                    }
                    // line 13
                    echo "        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
    ";
        // line 16
        $context["column_count"] = twig_round((twig_length_filter($this->env, (isset($context["groups"]) ? $context["groups"] : null)) / (isset($context["items_per_column"]) ? $context["items_per_column"] : null)), 0, "ceil");
        // line 17
        echo "
    <div class=\"dropdown-menu multi-column dropdown-add\"
        ";
        // line 19
        if (((isset($context["column_count"]) ? $context["column_count"] : null) > 1)) {
            echo "style=\"width: ";
            echo twig_escape_filter($this->env, ((isset($context["column_count"]) ? $context["column_count"] : null) * 140), "html", null, true);
            echo "px;\"";
        }
        // line 20
        echo "            >
        ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["groups"]) ? $context["groups"] : null)));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 22
            echo "            ";
            $context["display"] = (twig_test_empty($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "roles")) || $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"));
            // line 23
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "roles"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                if ((!(isset($context["display"]) ? $context["display"] : null))) {
                    // line 24
                    echo "                ";
                    $context["display"] = $this->env->getExtension('security')->isGranted((isset($context["role"]) ? $context["role"] : null));
                    // line 25
                    echo "            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "
            ";
            // line 27
            if ((isset($context["display"]) ? $context["display"] : null)) {
                // line 28
                echo "
                ";
                // line 29
                if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first") || (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index0") % (isset($context["items_per_column"]) ? $context["items_per_column"] : null)) == 0))) {
                    // line 30
                    echo "                    ";
                    if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first")) {
                        // line 31
                        echo "                        <div class=\"container-fluid\">
                            <div class=\"row\">
                    ";
                    } else {
                        // line 34
                        echo "                        </ul>
                    ";
                    }
                    // line 36
                    echo "
                    <ul class=\"dropdown-menu";
                    // line 37
                    if (((isset($context["column_count"]) ? $context["column_count"] : null) > 1)) {
                        echo " col-md-";
                        echo twig_escape_filter($this->env, twig_round((12 / (isset($context["column_count"]) ? $context["column_count"] : null))), "html", null, true);
                    }
                    echo "\">
                ";
                }
                // line 39
                echo "
                ";
                // line 40
                if ((($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index0") % (isset($context["items_per_column"]) ? $context["items_per_column"] : null)) != 0)) {
                    // line 41
                    echo "                    <li role=\"presentation\" class=\"divider\"></li>
                ";
                }
                // line 43
                echo "                <li role=\"presentation\" class=\"dropdown-header\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "label"), array(), $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "label_catalogue")), "html", null, true);
                echo "</li>

                ";
                // line 45
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "items"));
                foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                    // line 46
                    echo "                    ";
                    if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "create"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "CREATE"), "method"))) {
                        // line 47
                        echo "                        <li role=\"presentation\">
                            <a role=\"menuitem\" tabindex=\"-1\" href=\"";
                        // line 48
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "label"), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "translationdomain")), "html", null, true);
                        echo "</a>
                        </li>
                    ";
                    }
                    // line 51
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "
                ";
                // line 53
                if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last")) {
                    // line 54
                    echo "                            </ul>
                        </div>
                    </div>
                ";
                }
                // line 58
                echo "
            ";
            }
            // line 60
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:add_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  216 => 60,  212 => 58,  206 => 54,  195 => 51,  184 => 47,  181 => 46,  167 => 41,  165 => 40,  137 => 29,  129 => 26,  20 => 1,  65 => 27,  110 => 22,  52 => 20,  152 => 62,  120 => 51,  81 => 33,  58 => 24,  34 => 18,  153 => 20,  148 => 19,  126 => 48,  124 => 40,  97 => 39,  76 => 30,  53 => 10,  281 => 115,  256 => 102,  239 => 94,  223 => 87,  207 => 80,  198 => 77,  191 => 73,  175 => 74,  150 => 61,  139 => 30,  118 => 42,  83 => 23,  74 => 30,  186 => 62,  161 => 6,  37 => 17,  23 => 1,  170 => 57,  160 => 54,  155 => 58,  134 => 28,  127 => 45,  113 => 23,  104 => 34,  100 => 40,  90 => 20,  84 => 19,  77 => 31,  70 => 29,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 107,  258 => 81,  252 => 101,  247 => 99,  241 => 77,  229 => 73,  220 => 70,  214 => 84,  177 => 45,  169 => 11,  140 => 71,  132 => 27,  128 => 47,  111 => 47,  107 => 37,  61 => 27,  273 => 110,  269 => 109,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 93,  230 => 61,  227 => 81,  224 => 71,  221 => 77,  219 => 86,  217 => 75,  208 => 68,  204 => 53,  179 => 14,  159 => 59,  143 => 18,  135 => 69,  131 => 52,  119 => 24,  108 => 36,  102 => 35,  71 => 19,  67 => 31,  63 => 25,  59 => 12,  47 => 22,  38 => 18,  94 => 26,  89 => 20,  85 => 25,  79 => 18,  75 => 15,  68 => 14,  56 => 11,  50 => 9,  29 => 3,  87 => 25,  72 => 29,  55 => 25,  21 => 2,  26 => 2,  98 => 35,  93 => 21,  88 => 37,  78 => 16,  46 => 19,  27 => 14,  40 => 15,  44 => 21,  35 => 5,  31 => 15,  43 => 18,  41 => 19,  28 => 14,  201 => 52,  196 => 90,  183 => 61,  171 => 43,  166 => 63,  163 => 62,  158 => 5,  156 => 64,  151 => 36,  142 => 31,  138 => 49,  136 => 56,  123 => 52,  121 => 59,  117 => 44,  115 => 43,  105 => 44,  101 => 42,  91 => 32,  69 => 14,  66 => 27,  62 => 13,  49 => 6,  24 => 13,  32 => 4,  25 => 3,  22 => 12,  19 => 11,  209 => 82,  203 => 79,  199 => 67,  193 => 73,  189 => 71,  187 => 48,  182 => 70,  176 => 13,  173 => 65,  168 => 69,  164 => 59,  162 => 39,  154 => 37,  149 => 51,  147 => 34,  144 => 51,  141 => 58,  133 => 52,  130 => 43,  125 => 46,  122 => 25,  116 => 44,  112 => 33,  109 => 46,  106 => 38,  103 => 32,  99 => 41,  95 => 34,  92 => 38,  86 => 36,  82 => 21,  80 => 17,  73 => 29,  64 => 15,  60 => 23,  57 => 12,  54 => 23,  51 => 14,  48 => 21,  45 => 8,  42 => 7,  39 => 6,  36 => 19,  33 => 16,  30 => 15,);
    }
}
