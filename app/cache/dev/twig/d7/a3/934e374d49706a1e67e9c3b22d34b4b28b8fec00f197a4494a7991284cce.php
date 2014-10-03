<?php

/* SonataAdminBundle:CRUD:base_list_inner_row.html.twig */
class __TwigTemplate_d7a3934e374d49706a1e67e9c3b22d34b4b28b8fec00f197a4494a7991284cce extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list"), "elements"));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 13
            echo "    ";
            if ((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "name") == "_action") && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "isXmlHttpRequest"))) {
                // line 14
                echo "        ";
                // line 15
                echo "    ";
            } elseif ((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "getOption", array(0 => "ajax_hidden"), "method") == true) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "isXmlHttpRequest"))) {
                // line 16
                echo "        ";
                // line 17
                echo "    ";
            } else {
                // line 18
                echo "        ";
                echo $this->env->getExtension('sonata_admin')->renderListElement((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")));
                echo "
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list_inner_row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 17,  34 => 16,  31 => 15,  29 => 14,  26 => 13,  42 => 14,  39 => 18,  22 => 12,  19 => 11,  676 => 254,  665 => 252,  661 => 251,  652 => 247,  647 => 245,  641 => 243,  639 => 242,  632 => 237,  622 => 233,  615 => 229,  611 => 227,  609 => 226,  607 => 225,  601 => 224,  586 => 223,  582 => 222,  574 => 217,  568 => 216,  560 => 213,  557 => 212,  554 => 211,  551 => 210,  548 => 209,  541 => 204,  528 => 200,  520 => 199,  517 => 198,  512 => 197,  506 => 194,  501 => 191,  498 => 190,  493 => 182,  489 => 168,  486 => 167,  482 => 166,  479 => 165,  476 => 164,  472 => 157,  468 => 156,  465 => 155,  460 => 125,  449 => 123,  445 => 122,  438 => 118,  434 => 117,  430 => 116,  425 => 115,  422 => 114,  399 => 92,  396 => 91,  390 => 128,  387 => 127,  385 => 114,  381 => 112,  379 => 91,  376 => 90,  373 => 89,  367 => 169,  365 => 164,  359 => 160,  355 => 158,  353 => 155,  350 => 154,  343 => 149,  333 => 145,  328 => 143,  325 => 142,  321 => 141,  314 => 137,  309 => 134,  307 => 133,  303 => 131,  300 => 130,  297 => 89,  294 => 88,  292 => 87,  287 => 85,  283 => 83,  280 => 82,  275 => 79,  272 => 78,  269 => 77,  266 => 76,  260 => 72,  254 => 71,  251 => 70,  247 => 68,  243 => 67,  238 => 66,  232 => 65,  220 => 64,  218 => 63,  215 => 62,  212 => 61,  209 => 60,  206 => 59,  203 => 58,  200 => 57,  197 => 56,  194 => 55,  191 => 54,  188 => 53,  186 => 52,  183 => 51,  181 => 50,  177 => 48,  171 => 44,  168 => 43,  164 => 42,  160 => 40,  157 => 39,  152 => 30,  143 => 184,  140 => 183,  138 => 182,  135 => 181,  129 => 178,  126 => 177,  123 => 176,  119 => 174,  117 => 173,  114 => 172,  112 => 82,  109 => 81,  107 => 76,  104 => 75,  102 => 39,  99 => 38,  94 => 36,  89 => 35,  86 => 34,  83 => 33,  81 => 32,  78 => 31,  76 => 30,  71 => 28,  66 => 25,  63 => 24,  57 => 22,  48 => 17,  45 => 15,  43 => 15,  40 => 14,);
    }
}
