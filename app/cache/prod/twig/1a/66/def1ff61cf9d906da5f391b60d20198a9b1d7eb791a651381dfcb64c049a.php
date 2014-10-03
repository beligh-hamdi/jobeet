<?php

/* SonataAdminBundle::standard_layout.html.twig */
class __TwigTemplate_1a66def1ff61cf9d906da5f391b60d20198a9b1d7eb791a651381dfcb64c049a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_attributes' => array($this, 'block_html_attributes'),
            'meta_tags' => array($this, 'block_meta_tags'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'sonata_head_title' => array($this, 'block_sonata_head_title'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_header_noscript_warning' => array($this, 'block_sonata_header_noscript_warning'),
            'logo' => array($this, 'block_logo'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'sonata_top_nav_menu' => array($this, 'block_sonata_top_nav_menu'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_side_nav' => array($this, 'block_sonata_side_nav'),
            'sonata_sidebar_search' => array($this, 'block_sonata_sidebar_search'),
            'side_bar_before_nav' => array($this, 'block_side_bar_before_nav'),
            'side_bar_nav' => array($this, 'block_side_bar_nav'),
            'side_bar_after_nav' => array($this, 'block_side_bar_after_nav'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
            'sonata_page_content_header' => array($this, 'block_sonata_page_content_header'),
            'sonata_page_content_nav' => array($this, 'block_sonata_page_content_nav'),
            'tab_menu_navbar_header' => array($this, 'block_tab_menu_navbar_header'),
            'sonata_admin_content' => array($this, 'block_sonata_admin_content'),
            'notice' => array($this, 'block_notice'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $context["_preview"] = $this->renderBlock("preview", $context, $blocks);
        // line 12
        $context["_form"] = $this->renderBlock("form", $context, $blocks);
        // line 13
        $context["_show"] = $this->renderBlock("show", $context, $blocks);
        // line 14
        $context["_list_table"] = $this->renderBlock("list_table", $context, $blocks);
        // line 15
        $context["_list_filters"] = $this->renderBlock("list_filters", $context, $blocks);
        // line 16
        $context["_tab_menu"] = $this->renderBlock("tab_menu", $context, $blocks);
        // line 17
        $context["_content"] = $this->renderBlock("content", $context, $blocks);
        // line 18
        $context["_title"] = $this->renderBlock("title", $context, $blocks);
        // line 19
        $context["_breadcrumb"] = $this->renderBlock("breadcrumb", $context, $blocks);
        // line 20
        $context["_actions"] = $this->renderBlock("actions", $context, $blocks);
        // line 21
        $context["_navbar_title"] = $this->renderBlock("navbar_title", $context, $blocks);
        // line 22
        $context["_list_filters_actions"] = $this->renderBlock("list_filters_actions", $context, $blocks);
        // line 23
        echo "
<!DOCTYPE html>
<html ";
        // line 25
        $this->displayBlock('html_attributes', $context, $blocks);
        echo ">
    <head>
        ";
        // line 27
        $this->displayBlock('meta_tags', $context, $blocks);
        // line 31
        echo "
        ";
        // line 32
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 39
        echo "
        ";
        // line 40
        $this->displayBlock('javascripts', $context, $blocks);
        // line 68
        echo "
        <title>
        ";
        // line 70
        $this->displayBlock('sonata_head_title', $context, $blocks);
        // line 90
        echo "        </title>
    </head>
    <body ";
        // line 92
        $this->displayBlock('body_attributes', $context, $blocks);
        echo ">
        ";
        // line 93
        $this->displayBlock('sonata_header', $context, $blocks);
        // line 177
        echo "
        ";
        // line 178
        $this->displayBlock('sonata_wrapper', $context, $blocks);
        // line 346
        echo "    </body>
</html>
";
    }

    // line 25
    public function block_html_attributes($context, array $blocks = array())
    {
        echo "class=\"no-js\"";
    }

    // line 27
    public function block_meta_tags($context, array $blocks = array())
    {
        // line 28
        echo "            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        ";
    }

    // line 32
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 33
        echo "
            ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "stylesheets", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
            // line 35
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["stylesheet"]) ? $context["stylesheet"] : null)), "html", null, true);
            echo "\">
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
        ";
    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        // line 41
        echo "            <script>
                window.SONATA_CONFIG = {
                    CONFIRM_EXIT: ";
        // line 43
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "confirm_exit"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    USE_SELECT2: ";
        // line 44
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "use_select2"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    USE_ICHECK: ";
        // line 45
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "use_icheck"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        // line 46
        echo "                };
                window.SONATA_TRANSLATIONS = {
                    CONFIRM_EXIT:  '";
        // line 48
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("confirm_exit", array(), "SonataAdminBundle"), "js"), "html", null, true);
        echo "'
               };
            </script>

            ";
        // line 52
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "javascripts", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["javascript"]) {
            // line 53
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["javascript"]) ? $context["javascript"] : null)), "html", null, true);
            echo "\"></script>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['javascript'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "
            ";
        // line 57
        echo "            ";
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "use_select2"), "method"))) {
            // line 58
            echo "                ";
            $context["locale"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "locale");
            // line 59
            echo "                ";
            if (((isset($context["locale"]) ? $context["locale"] : null) == "pt")) {
                $context["locale"] = "pt_PT";
            }
            // line 60
            echo "
                ";
            // line 62
            echo "                ";
            if ((twig_slice($this->env, (isset($context["locale"]) ? $context["locale"] : null), 0, 2) != "en")) {
                // line 63
                echo "                    <script src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/sonatacore/vendor/select2/select2_locale_" . strtr((isset($context["locale"]) ? $context["locale"] : null), array("_" => "-"))) . ".js")), "html", null, true);
                echo "\"></script>
                ";
            }
            // line 65
            echo "            ";
        }
        // line 66
        echo "
        ";
    }

    // line 70
    public function block_sonata_head_title($context, array $blocks = array())
    {
        // line 71
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 73
        if ((!twig_test_empty((isset($context["_title"]) ? $context["_title"] : null)))) {
            // line 74
            echo "                ";
            echo (isset($context["_title"]) ? $context["_title"] : null);
            echo "
            ";
        } else {
            // line 76
            echo "                ";
            if (array_key_exists("action", $context)) {
                // line 77
                echo "                    -
                    ";
                // line 78
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "breadcrumbs", array(0 => (isset($context["action"]) ? $context["action"] : null)), "method"));
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
                foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                    // line 79
                    echo "                        ";
                    if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first"))) {
                        // line 80
                        echo "                            ";
                        if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") != 2)) {
                            // line 81
                            echo "                                &gt;
                            ";
                        }
                        // line 83
                        echo "
                            ";
                        // line 84
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "label"), "html", null, true);
                        echo "
                        ";
                    }
                    // line 86
                    echo "                    ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 87
                echo "                ";
            }
            // line 88
            echo "            ";
        }
        // line 89
        echo "        ";
    }

    // line 92
    public function block_body_attributes($context, array $blocks = array())
    {
        echo "class=\"sonata-bc skin-black fixed\"";
    }

    // line 93
    public function block_sonata_header($context, array $blocks = array())
    {
        // line 94
        echo "            <header class=\"header\">
                ";
        // line 95
        $this->displayBlock('sonata_header_noscript_warning', $context, $blocks);
        // line 102
        echo "                ";
        $this->displayBlock('logo', $context, $blocks);
        // line 114
        echo "                ";
        $this->displayBlock('sonata_nav', $context, $blocks);
        // line 175
        echo "            </header>
        ";
    }

    // line 95
    public function block_sonata_header_noscript_warning($context, array $blocks = array())
    {
        // line 96
        echo "                    <noscript>
                        <div class=\"noscript-warning\">
                            ";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("noscript_warning", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                        </div>
                    </noscript>
                ";
    }

    // line 102
    public function block_logo($context, array $blocks = array())
    {
        // line 103
        echo "                    ";
        ob_start();
        // line 104
        echo "                    <a class=\"logo\" href=\"";
        echo $this->env->getExtension('routing')->getUrl("sonata_admin_dashboard");
        echo "\">
                        ";
        // line 105
        if ((("single_image" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "title_mode"), "method")))) {
            // line 106
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "titlelogo")), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "title"), "html", null, true);
            echo "\">
                        ";
        }
        // line 108
        echo "                        ";
        if ((("single_text" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "title_mode"), "method")))) {
            // line 109
            echo "                            <span>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "title"), "html", null, true);
            echo "</span>
                        ";
        }
        // line 111
        echo "                    </a>
                    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 113
        echo "                ";
    }

    // line 114
    public function block_sonata_nav($context, array $blocks = array())
    {
        // line 115
        echo "                    ";
        if (array_key_exists("admin_pool", $context)) {
            // line 116
            echo "                        <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                            <a href=\"#\" class=\"navbar-btn sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </a>

                            <div class=\"navbar-left\">
                                ";
            // line 125
            $this->displayBlock('sonata_breadcrumb', $context, $blocks);
            // line 150
            echo "                            </div>

                            ";
            // line 152
            $this->displayBlock('sonata_top_nav_menu', $context, $blocks);
            // line 172
            echo "                        </nav>
                    ";
        }
        // line 174
        echo "                ";
    }

    // line 125
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        // line 126
        echo "                                    ";
        if (((!twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : null))) || array_key_exists("action", $context))) {
            // line 127
            echo "                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            ";
            // line 128
            if (twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : null))) {
                // line 129
                echo "                                                ";
                if (array_key_exists("action", $context)) {
                    // line 130
                    echo "                                                    ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "breadcrumbs", array(0 => (isset($context["action"]) ? $context["action"] : null)), "method"));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                        // line 131
                        echo "                                                        ";
                        if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last"))) {
                            // line 132
                            echo "                                                            <li>
                                                                ";
                            // line 133
                            if ((!twig_test_empty($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "uri")))) {
                                // line 134
                                echo "                                                                    <a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "uri"), "html", null, true);
                                echo "\">";
                                echo $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "label");
                                echo "</a>
                                                                ";
                            } else {
                                // line 136
                                echo "                                                                    ";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "label"), "html", null, true);
                                echo "
                                                                ";
                            }
                            // line 138
                            echo "                                                            </li>
                                                        ";
                        } else {
                            // line 140
                            echo "                                                            <li class=\"active\"><span>";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "label"), "html", null, true);
                            echo "</span></li>
                                                        ";
                        }
                        // line 142
                        echo "                                                    ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 143
                    echo "                                                ";
                }
                // line 144
                echo "                                            ";
            } else {
                // line 145
                echo "                                                ";
                echo (isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : null);
                echo "
                                            ";
            }
            // line 147
            echo "                                        </ol>
                                    ";
        }
        // line 149
        echo "                                ";
    }

    // line 152
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        // line 153
        echo "                                <div class=\"navbar-right\">
                                    <ul class=\"nav navbar-nav\">
                                        <li class=\"dropdown\">
                                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                <i class=\"fa fa-plus-square fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                                            </a>
                                            ";
        // line 159
        $template = $this->env->resolveTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getTemplate", array(0 => "add_block"), "method"));
        $template->display($context);
        // line 160
        echo "                                        </li>
                                        <li class=\"dropdown user-menu\">
                                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                <i class=\"fa fa-user fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                                            </a>
                                            <ul class=\"dropdown-menu dropdown-user\">
                                                ";
        // line 166
        $template = $this->env->resolveTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getTemplate", array(0 => "user_block"), "method"));
        $template->display($context);
        // line 167
        echo "                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            ";
    }

    // line 178
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        // line 179
        echo "            <div class=\"wrapper row-offcanvas row-offcanvas-left\">
                ";
        // line 180
        $this->displayBlock('sonata_left_side', $context, $blocks);
        // line 252
        echo "
                <aside class=\"right-side\">
                    ";
        // line 254
        $this->displayBlock('sonata_page_content', $context, $blocks);
        // line 342
        echo "                </aside>

            </div>
        ";
    }

    // line 180
    public function block_sonata_left_side($context, array $blocks = array())
    {
        // line 181
        echo "                    <aside class=\"left-side sidebar-offcanvas\">
                        <section class=\"sidebar\">
                            ";
        // line 183
        $this->displayBlock('sonata_side_nav', $context, $blocks);
        // line 249
        echo "                        </section>
                    </aside>
                ";
    }

    // line 183
    public function block_sonata_side_nav($context, array $blocks = array())
    {
        // line 184
        echo "                                ";
        $this->displayBlock('sonata_sidebar_search', $context, $blocks);
        // line 198
        echo "
                                ";
        // line 199
        $this->displayBlock('side_bar_before_nav', $context, $blocks);
        // line 200
        echo "                                ";
        $this->displayBlock('side_bar_nav', $context, $blocks);
        // line 245
        echo "                                ";
        $this->displayBlock('side_bar_after_nav', $context, $blocks);
        // line 248
        echo "                            ";
    }

    // line 184
    public function block_sonata_sidebar_search($context, array $blocks = array())
    {
        // line 185
        echo "                                    ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "security"), "token") && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 186
            echo "                                        <form action=\"";
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_search");
            echo "\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                            <div class=\"input-group custom-search-form\">
                                                <input type=\"text\" name=\"q\" value=\"";
            // line 188
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "get", array(0 => "q"), "method"), "html", null, true);
            echo "\" class=\"form-control\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("search_placeholder", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
                                                    <span class=\"input-group-btn\">
                                                        <button class=\"btn btn-flat\" type=\"submit\">
                                                            <i class=\"fa fa-search\"></i>
                                                        </button>
                                                    </span>
                                            </div>
                                        </form>
                                    ";
        }
        // line 197
        echo "                                ";
    }

    // line 199
    public function block_side_bar_before_nav($context, array $blocks = array())
    {
        echo " ";
    }

    // line 200
    public function block_side_bar_nav($context, array $blocks = array())
    {
        // line 201
        echo "                                    ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "security"), "token") && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 202
            echo "                                        <ul class=\"sidebar-menu\">
                                            ";
            // line 203
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "dashboardgroups"));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 204
                echo "                                                ";
                $context["display"] = (twig_test_empty($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "roles")) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"));
                // line 205
                echo "                                                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "roles"));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    if ((!(isset($context["display"]) ? $context["display"] : null))) {
                        // line 206
                        echo "                                                    ";
                        $context["display"] = $this->env->getExtension('security')->isGranted((isset($context["role"]) ? $context["role"] : null));
                        // line 207
                        echo "                                                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 208
                echo "
                                                ";
                // line 210
                echo "                                                ";
                $context["item_count"] = 0;
                // line 211
                echo "                                                ";
                if ((isset($context["display"]) ? $context["display"] : null)) {
                    // line 212
                    echo "                                                    ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        if (((isset($context["item_count"]) ? $context["item_count"] : null) == 0)) {
                            // line 213
                            echo "                                                        ";
                            if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "LIST"), "method"))) {
                                // line 214
                                echo "                                                            ";
                                $context["item_count"] = ((isset($context["item_count"]) ? $context["item_count"] : null) + 1);
                                // line 215
                                echo "                                                        ";
                            }
                            // line 216
                            echo "                                                    ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 217
                    echo "                                                ";
                }
                // line 218
                echo "
                                                ";
                // line 219
                if (((isset($context["display"]) ? $context["display"] : null) && ((isset($context["item_count"]) ? $context["item_count"] : null) > 0))) {
                    // line 220
                    echo "                                                    ";
                    $context["active"] = false;
                    // line 221
                    echo "                                                    ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 222
                        echo "                                                        ";
                        if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "LIST"), "method")) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "get", array(0 => "_sonata_admin"), "method") == $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "code")))) {
                            // line 223
                            echo "                                                            ";
                            $context["active"] = true;
                            // line 224
                            echo "                                                        ";
                        }
                        // line 225
                        echo "                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 226
                    echo "                                                    <li class=\"treeview";
                    if ((isset($context["active"]) ? $context["active"] : null)) {
                        echo " active";
                    }
                    echo "\">
                                                        <a href=\"#\">
                                                            ";
                    // line 228
                    if ((($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "icon"))) : (""))) {
                        echo $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "icon");
                    }
                    // line 229
                    echo "                                                            <span>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "label"), array(), $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "label_catalogue")), "html", null, true);
                    echo "</span>
                                                            <i class=\"fa pull-right fa-angle-left\"></i>
                                                        </a>
                                                        <ul class=\"treeview-menu";
                    // line 232
                    if ((isset($context["active"]) ? $context["active"] : null)) {
                        echo " active";
                    }
                    echo "\">
                                                            ";
                    // line 233
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 234
                        echo "                                                                ";
                        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "LIST"), "method"))) {
                            // line 235
                            echo "                                                                    <li";
                            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "get", array(0 => "_sonata_admin"), "method") == $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "code"))) {
                                echo " class=\"active\"";
                            }
                            echo "><a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list"), "method"), "html", null, true);
                            echo "\"><i class=\"fa fa-angle-double-right\"></i> ";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "label"), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "translationdomain")), "html", null, true);
                            echo "</a></li>
                                                                ";
                        }
                        // line 237
                        echo "                                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 238
                    echo "                                                        </ul>
                                                    </li>
                                                ";
                }
                // line 241
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 242
            echo "                                        </ul>
                                    ";
        }
        // line 244
        echo "                                ";
    }

    // line 245
    public function block_side_bar_after_nav($context, array $blocks = array())
    {
        // line 246
        echo "                                    <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\"><a href=\"http://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a></p>
                                ";
    }

    // line 254
    public function block_sonata_page_content($context, array $blocks = array())
    {
        // line 255
        echo "                        <section class=\"content-header\">
                            ";
        // line 256
        $this->displayBlock('sonata_page_content_header', $context, $blocks);
        // line 302
        echo "                        </section>

                        <section class=\"content\">
                            ";
        // line 305
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 340
        echo "                        </section>
                    ";
    }

    // line 256
    public function block_sonata_page_content_header($context, array $blocks = array())
    {
        // line 257
        echo "                                ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 300
        echo "
                            ";
    }

    // line 257
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        // line 258
        echo "                                    ";
        if ((((!twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : null))) || (!twig_test_empty((isset($context["_actions"]) ? $context["_actions"] : null)))) || (!twig_test_empty((isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : null))))) {
            // line 259
            echo "                                        <nav class=\"navbar navbar-default\" role=\"navigation\">
                                            ";
            // line 260
            $this->displayBlock('tab_menu_navbar_header', $context, $blocks);
            // line 267
            echo "                                            <div class=\"container-fluid\">
                                                <div class=\"navbar-left\">
                                                    ";
            // line 269
            if ((!twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : null)))) {
                // line 270
                echo "                                                        ";
                echo (isset($context["_tab_menu"]) ? $context["_tab_menu"] : null);
                echo "
                                                    ";
            }
            // line 272
            echo "                                                </div>

                                                ";
            // line 274
            if ((((array_key_exists("admin", $context) && array_key_exists("action", $context)) && ((isset($context["action"]) ? $context["action"] : null) == "list")) && (twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "listModes")) > 1))) {
                // line 275
                echo "                                                    <div class=\"nav navbar-right btn-group\">
                                                        ";
                // line 276
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "listModes"));
                foreach ($context['_seq'] as $context["mode"] => $context["settings"]) {
                    // line 277
                    echo "                                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list", 1 => twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "query"), "all"), array("_list_mode" => (isset($context["mode"]) ? $context["mode"] : null)))), "method"), "html", null, true);
                    echo "\" class=\"btn btn-default navbar-btn btn-sm";
                    if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getListMode", array(), "method") == (isset($context["mode"]) ? $context["mode"] : null))) {
                        echo " active";
                    }
                    echo "\"><i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "class"), "html", null, true);
                    echo "\"></i></a>
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['mode'], $context['settings'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 279
                echo "                                                    </div>
                                                ";
            }
            // line 281
            echo "
                                                ";
            // line 282
            if ((!twig_test_empty(trim(strtr((isset($context["_actions"]) ? $context["_actions"] : null), array("<li>" => "", "</li>" => "")))))) {
                // line 283
                echo "                                                    <ul class=\"nav navbar-nav navbar-right\">
                                                        <li class=\"dropdown sonata-actions\">
                                                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 285
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_actions", array(), "SonataAdminBundle"), "html", null, true);
                echo " <b class=\"caret\"></b></a>
                                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                                ";
                // line 287
                echo (isset($context["_actions"]) ? $context["_actions"] : null);
                echo "
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                ";
            }
            // line 292
            echo "
                                                ";
            // line 293
            if ((!twig_test_empty((isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : null)))) {
                // line 294
                echo "                                                    ";
                echo (isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : null);
                echo "
                                                ";
            }
            // line 296
            echo "                                            </div>
                                        </nav>
                                    ";
        }
        // line 299
        echo "                                ";
    }

    // line 260
    public function block_tab_menu_navbar_header($context, array $blocks = array())
    {
        // line 261
        echo "                                                ";
        if ((!twig_test_empty((isset($context["_navbar_title"]) ? $context["_navbar_title"] : null)))) {
            // line 262
            echo "                                                    <div class=\"navbar-header\">
                                                        <span class=\"navbar-brand\">";
            // line 263
            echo (isset($context["_navbar_title"]) ? $context["_navbar_title"] : null);
            echo "</span>
                                                    </div>
                                                ";
        }
        // line 266
        echo "                                            ";
    }

    // line 305
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        // line 306
        echo "
                                ";
        // line 307
        $this->displayBlock('notice', $context, $blocks);
        // line 310
        echo "
                                ";
        // line 311
        if ((!twig_test_empty((isset($context["_preview"]) ? $context["_preview"] : null)))) {
            // line 312
            echo "                                    <div class=\"sonata-ba-preview\">";
            echo (isset($context["_preview"]) ? $context["_preview"] : null);
            echo "</div>
                                ";
        }
        // line 314
        echo "
                                ";
        // line 315
        if ((!twig_test_empty((isset($context["_content"]) ? $context["_content"] : null)))) {
            // line 316
            echo "                                    <div class=\"sonata-ba-content\">";
            echo (isset($context["_content"]) ? $context["_content"] : null);
            echo "</div>
                                ";
        }
        // line 318
        echo "
                                ";
        // line 319
        if ((!twig_test_empty((isset($context["_show"]) ? $context["_show"] : null)))) {
            // line 320
            echo "                                    <div class=\"sonata-ba-show\">";
            echo (isset($context["_show"]) ? $context["_show"] : null);
            echo "</div>
                                ";
        }
        // line 322
        echo "
                                ";
        // line 323
        if ((!twig_test_empty((isset($context["_form"]) ? $context["_form"] : null)))) {
            // line 324
            echo "                                    <div class=\"sonata-ba-form\">";
            echo (isset($context["_form"]) ? $context["_form"] : null);
            echo "</div>
                                ";
        }
        // line 326
        echo "
                                ";
        // line 327
        if (((!twig_test_empty((isset($context["_list_table"]) ? $context["_list_table"] : null))) || (!twig_test_empty((isset($context["_list_filters"]) ? $context["_list_filters"] : null))))) {
            // line 328
            echo "                                    ";
            if (trim((isset($context["_list_filters"]) ? $context["_list_filters"] : null))) {
                // line 329
                echo "                                        <div class=\"row\">
                                            ";
                // line 330
                echo (isset($context["_list_filters"]) ? $context["_list_filters"] : null);
                echo "
                                        </div>
                                    ";
            }
            // line 333
            echo "
                                    <div class=\"row\">
                                        ";
            // line 335
            echo (isset($context["_list_table"]) ? $context["_list_table"] : null);
            echo "
                                    </div>

                                ";
        }
        // line 339
        echo "                            ";
    }

    // line 307
    public function block_notice($context, array $blocks = array())
    {
        // line 308
        echo "                                    ";
        $this->env->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig")->display($context);
        // line 309
        echo "                                ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1067 => 309,  1064 => 308,  1061 => 307,  1057 => 339,  1050 => 335,  1046 => 333,  1040 => 330,  1037 => 329,  1034 => 328,  1032 => 327,  1029 => 326,  1023 => 324,  1021 => 323,  1018 => 322,  1012 => 320,  1010 => 319,  1007 => 318,  1001 => 316,  999 => 315,  996 => 314,  990 => 312,  988 => 311,  985 => 310,  983 => 307,  980 => 306,  977 => 305,  973 => 266,  967 => 263,  964 => 262,  961 => 261,  958 => 260,  954 => 299,  949 => 296,  943 => 294,  941 => 293,  938 => 292,  930 => 287,  925 => 285,  921 => 283,  919 => 282,  916 => 281,  912 => 279,  897 => 277,  893 => 276,  890 => 275,  888 => 274,  884 => 272,  878 => 270,  876 => 269,  872 => 267,  870 => 260,  867 => 259,  864 => 258,  861 => 257,  856 => 300,  853 => 257,  850 => 256,  845 => 340,  843 => 305,  838 => 302,  836 => 256,  833 => 255,  830 => 254,  825 => 246,  822 => 245,  818 => 244,  814 => 242,  808 => 241,  803 => 238,  797 => 237,  785 => 235,  782 => 234,  778 => 233,  772 => 232,  765 => 229,  761 => 228,  753 => 226,  747 => 225,  744 => 224,  741 => 223,  738 => 222,  733 => 221,  730 => 220,  728 => 219,  725 => 218,  722 => 217,  715 => 216,  712 => 215,  709 => 214,  706 => 213,  700 => 212,  697 => 211,  694 => 210,  691 => 208,  684 => 207,  681 => 206,  675 => 205,  672 => 204,  668 => 203,  662 => 201,  659 => 200,  653 => 199,  649 => 197,  635 => 188,  629 => 186,  626 => 185,  623 => 184,  619 => 248,  616 => 245,  613 => 200,  608 => 198,  605 => 184,  602 => 183,  596 => 249,  594 => 183,  590 => 181,  587 => 180,  580 => 342,  578 => 254,  572 => 180,  569 => 179,  566 => 178,  558 => 167,  555 => 166,  547 => 160,  544 => 159,  536 => 153,  533 => 152,  529 => 149,  525 => 147,  519 => 145,  516 => 144,  513 => 143,  499 => 142,  483 => 136,  475 => 134,  473 => 133,  470 => 132,  467 => 131,  446 => 129,  441 => 127,  431 => 174,  421 => 150,  419 => 125,  408 => 116,  405 => 115,  394 => 111,  388 => 109,  375 => 105,  370 => 104,  364 => 102,  356 => 98,  344 => 175,  338 => 102,  336 => 95,  330 => 93,  320 => 89,  317 => 88,  295 => 84,  288 => 81,  265 => 78,  262 => 77,  253 => 74,  245 => 71,  234 => 65,  228 => 63,  225 => 62,  178 => 45,  172 => 56,  676 => 254,  665 => 202,  661 => 251,  652 => 247,  647 => 245,  641 => 243,  639 => 242,  632 => 237,  622 => 233,  615 => 229,  611 => 199,  609 => 226,  607 => 225,  601 => 224,  586 => 223,  582 => 222,  574 => 252,  568 => 216,  560 => 213,  557 => 212,  554 => 211,  551 => 210,  548 => 209,  541 => 204,  528 => 200,  520 => 199,  517 => 198,  512 => 197,  506 => 194,  501 => 191,  498 => 190,  493 => 140,  489 => 138,  486 => 167,  482 => 166,  479 => 165,  476 => 164,  472 => 157,  468 => 156,  465 => 155,  460 => 125,  449 => 130,  445 => 122,  438 => 126,  434 => 117,  425 => 152,  422 => 114,  399 => 92,  396 => 91,  390 => 128,  385 => 108,  376 => 90,  373 => 89,  367 => 103,  359 => 160,  353 => 155,  350 => 154,  343 => 149,  333 => 94,  328 => 143,  325 => 142,  321 => 141,  307 => 133,  303 => 131,  300 => 86,  297 => 89,  292 => 83,  280 => 82,  275 => 79,  272 => 78,  266 => 76,  260 => 72,  251 => 73,  232 => 65,  215 => 62,  197 => 56,  188 => 48,  392 => 107,  389 => 106,  383 => 104,  377 => 106,  354 => 95,  352 => 96,  349 => 95,  342 => 91,  335 => 89,  332 => 88,  326 => 86,  324 => 92,  318 => 83,  315 => 82,  302 => 76,  299 => 75,  293 => 73,  287 => 85,  284 => 70,  282 => 79,  279 => 68,  276 => 67,  271 => 62,  257 => 56,  222 => 60,  211 => 57,  190 => 38,  96 => 40,  12 => 36,  267 => 5,  263 => 58,  218 => 63,  205 => 90,  146 => 33,  259 => 76,  250 => 113,  244 => 111,  242 => 70,  237 => 66,  233 => 48,  231 => 99,  210 => 97,  200 => 64,  192 => 90,  174 => 85,  114 => 50,  145 => 53,  194 => 62,  185 => 61,  157 => 39,  216 => 99,  212 => 61,  206 => 59,  195 => 52,  184 => 46,  181 => 44,  167 => 36,  165 => 33,  137 => 34,  129 => 56,  20 => 11,  65 => 29,  110 => 346,  52 => 15,  152 => 30,  120 => 46,  81 => 33,  58 => 18,  34 => 14,  153 => 20,  148 => 37,  126 => 55,  124 => 47,  97 => 75,  76 => 63,  53 => 55,  281 => 115,  256 => 102,  239 => 94,  223 => 87,  207 => 91,  198 => 77,  191 => 54,  175 => 57,  150 => 37,  139 => 51,  118 => 20,  83 => 32,  74 => 62,  186 => 60,  161 => 48,  37 => 16,  23 => 11,  170 => 44,  160 => 40,  155 => 40,  134 => 33,  127 => 59,  113 => 46,  104 => 43,  100 => 43,  90 => 70,  84 => 39,  77 => 27,  70 => 61,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 128,  440 => 148,  437 => 147,  435 => 125,  430 => 116,  427 => 172,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 114,  398 => 113,  393 => 126,  387 => 127,  384 => 121,  381 => 112,  379 => 91,  374 => 101,  368 => 99,  365 => 164,  362 => 97,  360 => 109,  355 => 158,  341 => 114,  337 => 90,  322 => 101,  314 => 87,  312 => 98,  309 => 134,  305 => 77,  298 => 91,  294 => 88,  285 => 80,  283 => 83,  278 => 86,  268 => 61,  264 => 107,  258 => 81,  252 => 53,  247 => 68,  241 => 77,  229 => 105,  220 => 64,  214 => 58,  177 => 48,  169 => 33,  140 => 183,  132 => 57,  128 => 47,  111 => 72,  107 => 44,  61 => 26,  273 => 110,  269 => 77,  254 => 71,  246 => 90,  243 => 67,  240 => 86,  238 => 66,  235 => 108,  230 => 47,  227 => 104,  224 => 45,  221 => 77,  219 => 86,  217 => 59,  208 => 55,  204 => 53,  179 => 37,  159 => 30,  143 => 184,  135 => 181,  131 => 32,  119 => 44,  108 => 178,  102 => 43,  71 => 31,  67 => 19,  63 => 59,  59 => 58,  47 => 52,  38 => 18,  94 => 40,  89 => 68,  85 => 36,  79 => 31,  75 => 32,  68 => 23,  56 => 17,  50 => 14,  29 => 15,  87 => 40,  72 => 25,  55 => 21,  21 => 11,  26 => 18,  98 => 36,  93 => 70,  88 => 37,  78 => 36,  46 => 12,  27 => 14,  40 => 19,  44 => 11,  35 => 20,  31 => 40,  43 => 20,  41 => 20,  28 => 14,  201 => 52,  196 => 90,  183 => 51,  171 => 35,  166 => 49,  163 => 32,  158 => 41,  156 => 64,  151 => 28,  142 => 31,  138 => 25,  136 => 58,  123 => 47,  121 => 51,  117 => 45,  115 => 47,  105 => 177,  101 => 42,  91 => 39,  69 => 33,  66 => 22,  62 => 20,  49 => 17,  24 => 13,  32 => 14,  25 => 12,  22 => 12,  19 => 11,  209 => 60,  203 => 58,  199 => 53,  193 => 83,  189 => 47,  187 => 46,  182 => 70,  176 => 73,  173 => 35,  168 => 43,  164 => 42,  162 => 43,  154 => 63,  149 => 60,  147 => 27,  144 => 47,  141 => 35,  133 => 49,  130 => 22,  125 => 28,  122 => 27,  116 => 25,  112 => 82,  109 => 81,  106 => 37,  103 => 93,  99 => 92,  95 => 90,  92 => 35,  86 => 33,  82 => 32,  80 => 31,  73 => 32,  64 => 21,  60 => 19,  57 => 20,  54 => 16,  51 => 23,  48 => 13,  45 => 21,  42 => 49,  39 => 15,  36 => 17,  33 => 16,  30 => 14,);
    }
}
