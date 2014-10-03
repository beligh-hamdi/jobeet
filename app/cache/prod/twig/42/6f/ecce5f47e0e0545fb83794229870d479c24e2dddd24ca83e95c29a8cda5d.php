<?php

/* SonataAdminBundle:CRUD:base_history.html.twig */
class __TwigTemplate_426fecce5f47e0e0545fb83794229870d479c24e2dddd24ca83e95c29a8cda5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((isset($context["base_template"]) ? $context["base_template"] : null));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        echo "    <li>";
        $this->env->loadTemplate("SonataAdminBundle:Button:edit_button.html.twig")->display($context);
        echo "</li>
    <li>";
        // line 16
        $this->env->loadTemplate("SonataAdminBundle:Button:acl_button.html.twig")->display($context);
        echo "</li>
    <li>";
        // line 17
        $this->env->loadTemplate("SonataAdminBundle:Button:show_button.html.twig")->display($context);
        echo "</li>
    <li>";
        // line 18
        $this->env->loadTemplate("SonataAdminBundle:Button:list_button.html.twig")->display($context);
        echo "</li>
";
    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        // line 22
        echo "
    <div class=\"col-md-5\">
        <table class=\"table\" id=\"revisions\">
            <thead>
                <tr>
                    <th>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_revision", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                    <th>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_timestamp", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                    <th>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_username", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                    <th>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_action", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                    <th>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_compare", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["revisions"]) ? $context["revisions"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["revision"]) {
            // line 36
            echo "                    <tr class=\"";
            if ((((isset($context["currentRevision"]) ? $context["currentRevision"] : null) != false) && ($this->getAttribute((isset($context["revision"]) ? $context["revision"] : null), "rev") == $this->getAttribute((isset($context["currentRevision"]) ? $context["currentRevision"] : null), "rev")))) {
                echo "current-revision";
            }
            echo "\">
                        <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : null), "rev"), "html", null, true);
            echo "</td>
                        <td>";
            // line 38
            $template = $this->env->resolveTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getTemplate", array(0 => "history_revision_timestamp"), "method"));
            $template->display($context);
            echo "</td>
                        <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : null), "username"), "html", null, true);
            echo "</td>
                        <td><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateObjectUrl", array(0 => "history_view_revision", 1 => (isset($context["object"]) ? $context["object"] : null), 2 => array("revision" => $this->getAttribute((isset($context["revision"]) ? $context["revision"] : null), "rev"))), "method"), "html", null, true);
            echo "\" class=\"revision-link\" rel=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : null), "rev"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_view_revision", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a></td>
                        <td>
                            ";
            // line 42
            if ((((isset($context["currentRevision"]) ? $context["currentRevision"] : null) == false) || ($this->getAttribute((isset($context["revision"]) ? $context["revision"] : null), "rev") == $this->getAttribute((isset($context["currentRevision"]) ? $context["currentRevision"] : null), "rev")))) {
                // line 43
                echo "                                /
                            ";
            } else {
                // line 45
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateObjectUrl", array(0 => "history_compare_revisions", 1 => (isset($context["object"]) ? $context["object"] : null), 2 => array("base_revision" => $this->getAttribute((isset($context["currentRevision"]) ? $context["currentRevision"] : null), "rev"), "compare_revision" => $this->getAttribute((isset($context["revision"]) ? $context["revision"] : null), "rev"))), "method"), "html", null, true);
                echo "\" class=\"revision-compare-link\" rel=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : null), "rev"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_compare_revision", array(), "SonataAdminBundle"), "html", null, true);
                echo "</a>
                            ";
            }
            // line 47
            echo "                        </td>
                    </tr>
                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revision'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "            </tbody>
        </table>
    </div>
    <div id=\"revision-detail\" class=\"col-md-7 revision-detail\">

    </div>

    <script>
        jQuery(document).ready(function() {

            jQuery('a.revision-link, a.revision-compare-link').bind('click', function(event) {
                event.stopPropagation();
                event.preventDefault();

                action = jQuery(this).hasClass('revision-link')
                    ? 'show'
                    : 'compare';

                jQuery('#revision-detail').html('');

                if(action == 'show'){
                    jQuery('table#revisions tbody tr').removeClass('current');
                    jQuery(this).parent('').removeClass('current');
                }

                jQuery.ajax({
                    url: jQuery(this).attr('href'),
                    dataType: 'html',
                    success: function(data) {
                        jQuery('#revision-detail').html(data);
                    }
                });

                return false;
            });

        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  392 => 107,  389 => 106,  383 => 104,  377 => 102,  354 => 95,  352 => 94,  349 => 93,  342 => 91,  335 => 89,  332 => 88,  326 => 86,  324 => 85,  318 => 83,  315 => 82,  302 => 76,  299 => 75,  293 => 73,  287 => 71,  284 => 70,  282 => 69,  279 => 68,  276 => 67,  271 => 62,  257 => 56,  222 => 44,  211 => 41,  190 => 38,  96 => 30,  12 => 36,  267 => 5,  263 => 58,  218 => 97,  205 => 90,  146 => 33,  259 => 118,  250 => 113,  244 => 111,  242 => 101,  237 => 109,  233 => 48,  231 => 99,  210 => 97,  200 => 94,  192 => 90,  174 => 85,  114 => 51,  145 => 54,  194 => 40,  185 => 61,  157 => 56,  216 => 99,  212 => 58,  206 => 54,  195 => 84,  184 => 87,  181 => 77,  167 => 36,  165 => 69,  137 => 29,  129 => 25,  20 => 1,  65 => 27,  110 => 38,  52 => 22,  152 => 61,  120 => 46,  81 => 20,  58 => 24,  34 => 15,  153 => 20,  148 => 49,  126 => 24,  124 => 47,  97 => 24,  76 => 18,  53 => 15,  281 => 115,  256 => 102,  239 => 94,  223 => 87,  207 => 91,  198 => 77,  191 => 73,  175 => 74,  150 => 35,  139 => 54,  118 => 32,  83 => 20,  74 => 30,  186 => 81,  161 => 6,  37 => 24,  23 => 1,  170 => 71,  160 => 50,  155 => 58,  134 => 45,  127 => 59,  113 => 44,  104 => 40,  100 => 61,  90 => 24,  84 => 36,  77 => 31,  70 => 22,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 101,  368 => 99,  365 => 98,  362 => 97,  360 => 109,  355 => 106,  341 => 105,  337 => 90,  322 => 101,  314 => 99,  312 => 98,  309 => 79,  305 => 77,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 61,  264 => 107,  258 => 81,  252 => 53,  247 => 99,  241 => 77,  229 => 105,  220 => 70,  214 => 84,  177 => 86,  169 => 11,  140 => 30,  132 => 27,  128 => 42,  111 => 44,  107 => 47,  61 => 24,  273 => 110,  269 => 6,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 108,  230 => 47,  227 => 104,  224 => 45,  221 => 77,  219 => 86,  217 => 75,  208 => 96,  204 => 53,  179 => 76,  159 => 66,  143 => 56,  135 => 69,  131 => 60,  119 => 40,  108 => 42,  102 => 64,  71 => 30,  67 => 29,  63 => 28,  59 => 27,  47 => 17,  38 => 5,  94 => 43,  89 => 40,  85 => 25,  79 => 35,  75 => 31,  68 => 24,  56 => 16,  50 => 14,  29 => 3,  87 => 23,  72 => 28,  55 => 12,  21 => 11,  26 => 14,  98 => 39,  93 => 21,  88 => 28,  78 => 19,  46 => 8,  27 => 14,  40 => 3,  44 => 18,  35 => 16,  31 => 23,  43 => 18,  41 => 6,  28 => 22,  201 => 52,  196 => 90,  183 => 78,  171 => 57,  166 => 63,  163 => 58,  158 => 5,  156 => 64,  151 => 61,  142 => 31,  138 => 49,  136 => 58,  123 => 48,  121 => 59,  117 => 53,  115 => 39,  105 => 65,  101 => 40,  91 => 37,  69 => 16,  66 => 30,  62 => 14,  49 => 21,  24 => 1,  32 => 4,  25 => 3,  22 => 12,  19 => 1,  209 => 92,  203 => 89,  199 => 86,  193 => 83,  189 => 82,  187 => 48,  182 => 70,  176 => 73,  173 => 72,  168 => 70,  164 => 79,  162 => 68,  154 => 63,  149 => 60,  147 => 34,  144 => 47,  141 => 55,  133 => 49,  130 => 43,  125 => 46,  122 => 56,  116 => 111,  112 => 109,  109 => 43,  106 => 37,  103 => 41,  99 => 36,  95 => 28,  92 => 23,  86 => 21,  82 => 35,  80 => 26,  73 => 17,  64 => 25,  60 => 23,  57 => 18,  54 => 23,  51 => 16,  48 => 15,  45 => 14,  42 => 19,  39 => 17,  36 => 4,  33 => 3,  30 => 15,);
    }
}
