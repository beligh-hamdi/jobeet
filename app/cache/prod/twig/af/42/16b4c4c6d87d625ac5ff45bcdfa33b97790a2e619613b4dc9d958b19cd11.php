<?php

/* SonataAdminBundle:Button:acl_button.html.twig */
class __TwigTemplate_af4216b4c4c6d87d625ac5ff45bcdfa33b97790a2e619613b4dc9d958b19cd11 extends Twig_Template
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
        if (((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isAclEnabled", array(), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "acl"), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "MASTER", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"))) {
            // line 13
            echo "    <a class=\"sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateObjectUrl", array(0 => "acl", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"), "html", null, true);
            echo "\">
        <i class=\"fa fa-users\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_acl", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:acl_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 42,  52 => 20,  152 => 62,  120 => 51,  81 => 33,  58 => 24,  34 => 18,  153 => 20,  148 => 19,  126 => 48,  124 => 40,  97 => 39,  76 => 30,  53 => 24,  281 => 115,  256 => 102,  239 => 94,  223 => 87,  207 => 80,  198 => 77,  191 => 73,  175 => 74,  150 => 61,  139 => 51,  118 => 42,  83 => 23,  74 => 30,  186 => 62,  161 => 6,  37 => 17,  23 => 1,  170 => 57,  160 => 54,  155 => 58,  134 => 55,  127 => 45,  113 => 42,  104 => 34,  100 => 40,  90 => 38,  84 => 26,  77 => 31,  70 => 29,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 107,  258 => 81,  252 => 101,  247 => 99,  241 => 77,  229 => 73,  220 => 70,  214 => 84,  177 => 65,  169 => 11,  140 => 71,  132 => 51,  128 => 47,  111 => 47,  107 => 37,  61 => 27,  273 => 110,  269 => 109,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 93,  230 => 91,  227 => 81,  224 => 71,  221 => 77,  219 => 86,  217 => 75,  208 => 68,  204 => 72,  179 => 14,  159 => 59,  143 => 18,  135 => 69,  131 => 52,  119 => 42,  108 => 36,  102 => 35,  71 => 19,  67 => 31,  63 => 25,  59 => 13,  47 => 22,  38 => 7,  94 => 26,  89 => 20,  85 => 25,  79 => 18,  75 => 33,  68 => 14,  56 => 21,  50 => 23,  29 => 15,  87 => 25,  72 => 29,  55 => 25,  21 => 2,  26 => 14,  98 => 35,  93 => 39,  88 => 37,  78 => 34,  46 => 19,  27 => 12,  40 => 15,  44 => 21,  35 => 17,  31 => 15,  43 => 18,  41 => 18,  28 => 14,  201 => 92,  196 => 90,  183 => 61,  171 => 65,  166 => 63,  163 => 62,  158 => 5,  156 => 64,  151 => 50,  142 => 59,  138 => 49,  136 => 56,  123 => 52,  121 => 59,  117 => 44,  115 => 43,  105 => 44,  101 => 42,  91 => 32,  69 => 32,  66 => 27,  62 => 24,  49 => 6,  24 => 13,  32 => 5,  25 => 3,  22 => 12,  19 => 11,  209 => 82,  203 => 79,  199 => 67,  193 => 73,  189 => 71,  187 => 72,  182 => 70,  176 => 13,  173 => 65,  168 => 69,  164 => 59,  162 => 68,  154 => 58,  149 => 51,  147 => 52,  144 => 51,  141 => 58,  133 => 52,  130 => 43,  125 => 46,  122 => 45,  116 => 44,  112 => 33,  109 => 46,  106 => 38,  103 => 32,  99 => 41,  95 => 34,  92 => 38,  86 => 36,  82 => 21,  80 => 22,  73 => 29,  64 => 15,  60 => 23,  57 => 12,  54 => 23,  51 => 14,  48 => 10,  45 => 17,  42 => 21,  39 => 15,  36 => 19,  33 => 13,  30 => 15,);
    }
}
