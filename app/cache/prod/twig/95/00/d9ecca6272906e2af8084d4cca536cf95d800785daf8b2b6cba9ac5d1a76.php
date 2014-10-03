<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_9500d9ecca6272906e2af8084d4cca536cf95d800785daf8b2b6cba9ac5d1a76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig");
        // line 36
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."SonataAdminBundle:CRUD:base_edit_form.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["form"])) {
            throw new Twig_Error_Runtime(sprintf('Block "form" is not defined in trait "SonataAdminBundle:CRUD:base_edit_form.html.twig".'));
        }

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'navbar_title' => array($this, 'block_navbar_title'),
                'actions' => array($this, 'block_actions'),
                'tab_menu' => array($this, 'block_tab_menu'),
                'form' => array($this, 'block_form'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((isset($context["base_template"]) ? $context["base_template"] : null));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 37
        $context["form_helper"] = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_edit_form_macro.html.twig");
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        if ((!(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "toString", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        // line 27
        echo "    <li>";
        $this->env->loadTemplate("SonataAdminBundle:Button:show_button.html.twig")->display($context);
        echo "</li>
    <li>";
        // line 28
        $this->env->loadTemplate("SonataAdminBundle:Button:history_button.html.twig")->display($context);
        echo "</li>
    <li>";
        // line 29
        $this->env->loadTemplate("SonataAdminBundle:Button:acl_button.html.twig")->display($context);
        echo "</li>
    <li>";
        // line 30
        $this->env->loadTemplate("SonataAdminBundle:Button:list_button.html.twig")->display($context);
        echo "</li>
    <li>";
        // line 31
        $this->env->loadTemplate("SonataAdminBundle:Button:create_button.html.twig")->display($context);
        echo "</li>
";
    }

    // line 34
    public function block_tab_menu($context, array $blocks = array())
    {
        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : null)), "method"), array("currentClass" => "active", "template" => $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
    }

    // line 39
    public function block_form($context, array $blocks = array())
    {
        // line 40
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 30,  12 => 36,  267 => 5,  263 => 4,  218 => 97,  205 => 90,  146 => 58,  259 => 118,  250 => 113,  244 => 111,  242 => 101,  237 => 109,  233 => 107,  231 => 99,  210 => 97,  200 => 94,  192 => 90,  174 => 85,  114 => 51,  145 => 54,  194 => 66,  185 => 61,  157 => 56,  216 => 99,  212 => 58,  206 => 54,  195 => 84,  184 => 87,  181 => 77,  167 => 56,  165 => 69,  137 => 52,  129 => 44,  20 => 1,  65 => 27,  110 => 22,  52 => 19,  152 => 61,  120 => 46,  81 => 32,  58 => 24,  34 => 15,  153 => 20,  148 => 49,  126 => 55,  124 => 47,  97 => 41,  76 => 27,  53 => 15,  281 => 115,  256 => 102,  239 => 94,  223 => 87,  207 => 91,  198 => 77,  191 => 73,  175 => 74,  150 => 56,  139 => 54,  118 => 46,  83 => 27,  74 => 30,  186 => 81,  161 => 6,  37 => 17,  23 => 1,  170 => 71,  160 => 57,  155 => 58,  134 => 51,  127 => 59,  113 => 44,  104 => 40,  100 => 31,  90 => 20,  84 => 36,  77 => 31,  70 => 22,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 107,  258 => 81,  252 => 3,  247 => 99,  241 => 77,  229 => 105,  220 => 70,  214 => 84,  177 => 86,  169 => 11,  140 => 51,  132 => 27,  128 => 47,  111 => 44,  107 => 47,  61 => 24,  273 => 110,  269 => 6,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 108,  230 => 61,  227 => 104,  224 => 103,  221 => 77,  219 => 86,  217 => 75,  208 => 96,  204 => 53,  179 => 76,  159 => 66,  143 => 56,  135 => 69,  131 => 60,  119 => 54,  108 => 42,  102 => 44,  71 => 32,  67 => 26,  63 => 25,  59 => 26,  47 => 17,  38 => 12,  94 => 43,  89 => 40,  85 => 25,  79 => 35,  75 => 29,  68 => 31,  56 => 16,  50 => 14,  29 => 3,  87 => 36,  72 => 28,  55 => 15,  21 => 2,  26 => 2,  98 => 39,  93 => 21,  88 => 28,  78 => 28,  46 => 9,  27 => 14,  40 => 17,  44 => 18,  35 => 11,  31 => 15,  43 => 18,  41 => 19,  28 => 14,  201 => 52,  196 => 90,  183 => 78,  171 => 57,  166 => 63,  163 => 58,  158 => 5,  156 => 64,  151 => 61,  142 => 31,  138 => 49,  136 => 58,  123 => 48,  121 => 59,  117 => 53,  115 => 40,  105 => 44,  101 => 40,  91 => 37,  69 => 26,  66 => 30,  62 => 18,  49 => 6,  24 => 13,  32 => 4,  25 => 3,  22 => 12,  19 => 1,  209 => 92,  203 => 89,  199 => 86,  193 => 83,  189 => 82,  187 => 48,  182 => 70,  176 => 73,  173 => 72,  168 => 70,  164 => 79,  162 => 68,  154 => 63,  149 => 60,  147 => 34,  144 => 48,  141 => 55,  133 => 49,  130 => 48,  125 => 46,  122 => 56,  116 => 45,  112 => 39,  109 => 43,  106 => 34,  103 => 41,  99 => 41,  95 => 38,  92 => 29,  86 => 37,  82 => 34,  80 => 26,  73 => 23,  64 => 25,  60 => 23,  57 => 12,  54 => 23,  51 => 12,  48 => 21,  45 => 37,  42 => 19,  39 => 16,  36 => 16,  33 => 3,  30 => 15,);
    }
}
