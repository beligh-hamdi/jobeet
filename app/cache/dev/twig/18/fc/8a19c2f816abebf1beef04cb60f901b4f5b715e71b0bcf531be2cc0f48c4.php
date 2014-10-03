<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_18fc8a19c2f816abebf1beef04cb60f901b4f5b715e71b0bcf531be2cc0f48c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 17,  34 => 16,  31 => 15,  29 => 15,  26 => 14,  42 => 14,  39 => 18,  22 => 12,  19 => 11,  676 => 254,  665 => 252,  661 => 251,  652 => 247,  647 => 245,  641 => 243,  639 => 242,  632 => 237,  622 => 233,  615 => 229,  611 => 227,  609 => 226,  607 => 225,  601 => 224,  586 => 223,  582 => 222,  574 => 217,  568 => 216,  560 => 213,  557 => 212,  554 => 211,  551 => 210,  548 => 209,  541 => 204,  528 => 200,  520 => 199,  517 => 198,  512 => 197,  506 => 194,  501 => 191,  498 => 190,  493 => 182,  489 => 168,  486 => 167,  482 => 166,  479 => 165,  476 => 164,  472 => 157,  468 => 156,  465 => 155,  460 => 125,  449 => 123,  445 => 122,  438 => 118,  434 => 117,  430 => 116,  425 => 115,  422 => 114,  399 => 92,  396 => 91,  390 => 128,  387 => 127,  385 => 114,  381 => 112,  379 => 91,  376 => 90,  373 => 89,  367 => 169,  365 => 164,  359 => 160,  355 => 158,  353 => 155,  350 => 154,  343 => 149,  333 => 145,  328 => 143,  325 => 142,  321 => 141,  314 => 137,  309 => 134,  307 => 133,  303 => 131,  300 => 130,  297 => 89,  294 => 88,  292 => 87,  287 => 85,  283 => 83,  280 => 82,  275 => 79,  272 => 78,  269 => 77,  266 => 76,  260 => 72,  254 => 71,  251 => 70,  247 => 68,  243 => 67,  238 => 66,  232 => 65,  220 => 64,  218 => 63,  215 => 62,  212 => 61,  209 => 60,  206 => 59,  203 => 58,  200 => 57,  197 => 56,  194 => 55,  191 => 54,  188 => 53,  186 => 52,  183 => 51,  181 => 50,  177 => 48,  171 => 44,  168 => 43,  164 => 42,  160 => 40,  157 => 39,  152 => 30,  143 => 184,  140 => 183,  138 => 182,  135 => 181,  129 => 178,  126 => 177,  123 => 176,  119 => 174,  117 => 173,  114 => 172,  112 => 82,  109 => 81,  107 => 76,  104 => 75,  102 => 39,  99 => 38,  94 => 36,  89 => 35,  86 => 34,  83 => 33,  81 => 32,  78 => 31,  76 => 30,  71 => 28,  66 => 25,  63 => 24,  57 => 22,  48 => 17,  45 => 15,  43 => 15,  40 => 14,);
    }
}
