<?php

/* SonataAdminBundle:CRUD:base_list.html.twig */
class __TwigTemplate_d088e056cf0f4701c77ab9aa932e9e086a9b52581df8f29e507e6b2172597a40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'list_table' => array($this, 'block_list_table'),
            'list_header' => array($this, 'block_list_header'),
            'table_header' => array($this, 'block_table_header'),
            'table_body' => array($this, 'block_table_body'),
            'table_footer' => array($this, 'block_table_footer'),
            'batch' => array($this, 'block_batch'),
            'batch_javascript' => array($this, 'block_batch_javascript'),
            'batch_actions' => array($this, 'block_batch_actions'),
            'pager_results' => array($this, 'block_pager_results'),
            'pager_links' => array($this, 'block_pager_links'),
            'list_footer' => array($this, 'block_list_footer'),
            'list_filters_actions' => array($this, 'block_list_filters_actions'),
            'list_filters' => array($this, 'block_list_filters'),
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
        ob_start();
        // line 16
        echo "    ";
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "create"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "CREATE"), "method"))) {
            // line 17
            echo "        <li>";
            $this->env->loadTemplate("SonataAdminBundle:Core:create_button.html.twig")->display($context);
            echo "</li>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 22
    public function block_tab_menu($context, array $blocks = array())
    {
        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : null)), "method"), array("currentClass" => "active", "template" => $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
    }

    // line 24
    public function block_list_table($context, array $blocks = array())
    {
        // line 25
        echo "    <div class=\"col-xs-12 col-md-12\">
        <div class=\"box box-primary\">
            <div class=\"box-body table-responsive no-padding\">
                ";
        // line 28
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.top", array("admin" => (isset($context["admin"]) ? $context["admin"] : null))));
        echo "

                ";
        // line 30
        $this->displayBlock('list_header', $context, $blocks);
        // line 31
        echo "
                ";
        // line 32
        $context["batchactions"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "batchactions");
        // line 33
        echo "                ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "results")) > 0)) {
            // line 34
            echo "                    ";
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "batch"), "method")) {
                // line 35
                echo "                    <form action=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "batch", 1 => array("filter" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "filterParameters"))), "method"), "html", null, true);
                echo "\" method=\"POST\" >
                        <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
                // line 36
                echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
                echo "\">
                    ";
            }
            // line 38
            echo "                        <table class=\"table table-bordered table-striped\">
                            ";
            // line 39
            $this->displayBlock('table_header', $context, $blocks);
            // line 75
            echo "
                            ";
            // line 76
            $this->displayBlock('table_body', $context, $blocks);
            // line 81
            echo "
                            ";
            // line 82
            $this->displayBlock('table_footer', $context, $blocks);
            // line 172
            echo "                        </table>
                    ";
            // line 173
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "batch"), "method")) {
                // line 174
                echo "                    </form>
                    ";
            }
            // line 176
            echo "                ";
        } else {
            // line 177
            echo "                    <div class=\"callout callout-info\">
                        ";
            // line 178
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_result", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 181
        echo "
                ";
        // line 182
        $this->displayBlock('list_footer', $context, $blocks);
        // line 183
        echo "
                ";
        // line 184
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.bottom", array("admin" => (isset($context["admin"]) ? $context["admin"] : null))));
        echo "
            </div>
        </div>
    </div>
";
    }

    // line 30
    public function block_list_header($context, array $blocks = array())
    {
    }

    // line 39
    public function block_table_header($context, array $blocks = array())
    {
        // line 40
        echo "                                <thead>
                                    <tr class=\"sonata-ba-list-field-header\">
                                        ";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list"), "elements"));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 43
            echo "                                            ";
            if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "batch"), "method") && ($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "getOption", array(0 => "code"), "method") == "_batch")) && (twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : null)) > 0))) {
                // line 44
                echo "                                                <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-batch\">
                                                  <input type=\"checkbox\" id=\"list_batch_checkbox\">
                                                </th>
                                            ";
            } elseif (($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "getOption", array(0 => "code"), "method") == "_select")) {
                // line 48
                echo "                                                <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-select\"></th>
                                            ";
            } elseif ((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "name") == "_action") && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "isXmlHttpRequest"))) {
                // line 50
                echo "                                                ";
                // line 51
                echo "                                            ";
            } elseif ((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "getOption", array(0 => "ajax_hidden"), "method") == true) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "isXmlHttpRequest"))) {
                // line 52
                echo "                                                ";
                // line 53
                echo "                                            ";
            } else {
                // line 54
                echo "                                                ";
                $context["sortable"] = false;
                // line 55
                echo "                                                ";
                if (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "sortable", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options"), "sortable"))) {
                    // line 56
                    echo "                                                    ";
                    $context["sortable"] = true;
                    // line 57
                    echo "                                                    ";
                    $context["sort_parameters"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modelmanager"), "sortparameters", array(0 => (isset($context["field_description"]) ? $context["field_description"] : null), 1 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid")), "method");
                    // line 58
                    echo "                                                    ";
                    $context["current"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "values"), "_sort_by") == (isset($context["field_description"]) ? $context["field_description"] : null)) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "values"), "_sort_by"), "fieldName") == $this->getAttribute($this->getAttribute((isset($context["sort_parameters"]) ? $context["sort_parameters"] : null), "filter"), "_sort_by")));
                    // line 59
                    echo "                                                    ";
                    $context["sort_active_class"] = (((isset($context["current"]) ? $context["current"] : null)) ? ("sonata-ba-list-field-order-active") : (""));
                    // line 60
                    echo "                                                    ";
                    $context["sort_by"] = (((isset($context["current"]) ? $context["current"] : null)) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "values"), "_sort_order")) : ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options"), "_sort_order")));
                    // line 61
                    echo "                                                ";
                }
                // line 62
                echo "
                                                ";
                // line 63
                ob_start();
                // line 64
                echo "                                                    <th class=\"sonata-ba-list-field-header-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "type"), "html", null, true);
                echo " ";
                if ((isset($context["sortable"]) ? $context["sortable"] : null)) {
                    echo " sonata-ba-list-field-header-order-";
                    echo twig_escape_filter($this->env, strtolower((isset($context["sort_by"]) ? $context["sort_by"] : null)), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["sort_active_class"]) ? $context["sort_active_class"] : null), "html", null, true);
                }
                echo "\">
                                                        ";
                // line 65
                if ((isset($context["sortable"]) ? $context["sortable"] : null)) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list", 1 => (isset($context["sort_parameters"]) ? $context["sort_parameters"] : null)), "method"), "html", null, true);
                    echo "\">";
                }
                // line 66
                echo "                                                        ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "trans", array(0 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "label"), 1 => array(), 2 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "translationDomain")), "method"), "html", null, true);
                echo "
                                                        ";
                // line 67
                if ((isset($context["sortable"]) ? $context["sortable"] : null)) {
                    echo "</a>";
                }
                // line 68
                echo "                                                    </th>
                                                ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 70
                echo "                                            ";
            }
            // line 71
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                                    </tr>
                                </thead>
                            ";
    }

    // line 76
    public function block_table_body($context, array $blocks = array())
    {
        // line 77
        echo "                                <tbody>
                                    ";
        // line 78
        $template = $this->env->resolveTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getTemplate", array(0 => ("outer_list_rows_" . $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getListMode", array(), "method"))), "method"));
        $template->display($context);
        // line 79
        echo "                                </tbody>
                            ";
    }

    // line 82
    public function block_table_footer($context, array $blocks = array())
    {
        // line 83
        echo "                                <tfoot>
                                    <tr>
                                        <th colspan=\"";
        // line 85
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list"), "elements")) - (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "isXmlHttpRequest")) ? (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list"), "has", array(0 => "_action"), "method") + $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list"), "has", array(0 => "batch"), "method"))) : (0))), "html", null, true);
        echo "\">
                                            <div class=\"form-inline\">
                                                ";
        // line 87
        if ((!$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "isXmlHttpRequest"))) {
            // line 88
            echo "                                                    ";
            if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "batch"), "method") && (twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : null)) > 0))) {
                // line 89
                echo "                                                        ";
                $this->displayBlock('batch', $context, $blocks);
                // line 130
                echo "                                                    ";
            }
            // line 131
            echo "
                                                    <div class=\"pull-right\">
                                                        ";
            // line 133
            if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "export"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "EXPORT"), "method")) && twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getExportFormats", array(), "method")))) {
                // line 134
                echo "                                                            <div class=\"btn-group\">
                                                                <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                                                                    <i class=\"glyphicon glyphicon-export\"></i>
                                                                    ";
                // line 137
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_export_download", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                                                                    <span class=\"caret\"></span>
                                                                </button>
                                                                <ul class=\"dropdown-menu\">
                                                                    ";
                // line 141
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getExportFormats", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
                    // line 142
                    echo "                                                                        <li>
                                                                            <a href=\"";
                    // line 143
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "export", 1 => ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), 1 => 0), "method") + array("format" => (isset($context["format"]) ? $context["format"] : null)))), "method"), "html", null, true);
                    echo "\">
                                                                                <i class=\"glyphicon glyphicon-download\"></i>
                                                                                ";
                    // line 145
                    echo twig_escape_filter($this->env, strtoupper((isset($context["format"]) ? $context["format"] : null)), "html", null, true);
                    echo "
                                                                            </a>
                                                                        <li>
                                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['format'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 149
                echo "                                                                </ul>
                                                            </div>

                                                            &nbsp;-&nbsp;
                                                        ";
            }
            // line 154
            echo "
                                                        ";
            // line 155
            $this->displayBlock('pager_results', $context, $blocks);
            // line 158
            echo "                                                    </div>
                                                ";
        }
        // line 160
        echo "                                            </div>
                                        </th>
                                    </tr>

                                    ";
        // line 164
        $this->displayBlock('pager_links', $context, $blocks);
        // line 169
        echo "
                                </tfoot>
                            ";
    }

    // line 89
    public function block_batch($context, array $blocks = array())
    {
        // line 90
        echo "                                                            <script>
                                                                ";
        // line 91
        $this->displayBlock('batch_javascript', $context, $blocks);
        // line 112
        echo "                                                            </script>

                                                            ";
        // line 114
        $this->displayBlock('batch_actions', $context, $blocks);
        // line 127
        echo "
                                                            <input type=\"submit\" class=\"btn btn-small btn-primary\" value=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_batch", array(), "SonataAdminBundle"), "html", null, true);
        echo "\">
                                                        ";
    }

    // line 91
    public function block_batch_javascript($context, array $blocks = array())
    {
        // line 92
        echo "                                                                    jQuery(document).ready(function (\$) {
                                                                        \$('#list_batch_checkbox').on('ifChanged', function () {
                                                                            \$(this)
                                                                                .closest('table')
                                                                                .find('td.sonata-ba-list-field-batch input[type=\"checkbox\"], div.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                                                .iCheck(\$(this).is(':checked') ? 'check' : 'uncheck')
                                                                            ;
                                                                        });

                                                                        \$('td.sonata-ba-list-field-batch input[type=\"checkbox\"], div.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                                            .on('ifChanged', function () {
                                                                                \$(this)
                                                                                    .closest('tr, div.sonata-ba-list-field-batch')
                                                                                    .toggleClass('sonata-ba-list-row-selected', \$(this).is(':checked'))
                                                                                ;
                                                                            })
                                                                            .trigger('ifChanged')
                                                                        ;
                                                                    });
                                                                ";
    }

    // line 114
    public function block_batch_actions($context, array $blocks = array())
    {
        // line 115
        echo "                                                                <label class=\"checkbox\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid"), "html", null, true);
        echo "_all_elements\">
                                                                    <input type=\"checkbox\" name=\"all_elements\" id=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid"), "html", null, true);
        echo "_all_elements\">
                                                                    ";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("all_elements", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                                                                     (";
        // line 118
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "nbresults"), "html", null, true);
        echo ")
                                                                </label>

                                                                <select name=\"action\" style=\"width: auto; height: auto\" class=\"form-control\">
                                                                    ";
        // line 122
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["batchactions"]) ? $context["batchactions"] : null));
        foreach ($context['_seq'] as $context["action"] => $context["options"]) {
            // line 123
            echo "                                                                        <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "label"), "html", null, true);
            echo "</option>
                                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['action'], $context['options'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "                                                                </select>
                                                            ";
    }

    // line 155
    public function block_pager_results($context, array $blocks = array())
    {
        // line 156
        echo "                                                            ";
        $template = $this->env->resolveTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getTemplate", array(0 => "pager_results"), "method"));
        $template->display($context);
        // line 157
        echo "                                                        ";
    }

    // line 164
    public function block_pager_links($context, array $blocks = array())
    {
        // line 165
        echo "                                        ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "haveToPaginate", array(), "method")) {
            // line 166
            echo "                                            ";
            $template = $this->env->resolveTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getTemplate", array(0 => "pager_links"), "method"));
            $template->display($context);
            // line 167
            echo "                                        ";
        }
        // line 168
        echo "                                    ";
    }

    // line 182
    public function block_list_footer($context, array $blocks = array())
    {
    }

    // line 190
    public function block_list_filters_actions($context, array $blocks = array())
    {
        // line 191
        echo "    <ul class=\"nav navbar-nav navbar-right\">

        <li class=\"dropdown sonata-actions\">
            <a href=\"#\" class=\"dropdown-toggle sonata-ba-action\" data-toggle=\"dropdown\">";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_filters", array(), "SonataAdminBundle"), "html", null, true);
        echo " <b class=\"caret\"></b></a>

            <ul class=\"dropdown-menu\" role=\"menu\">
                ";
        // line 197
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "filters"));
        foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
            if ($this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "options"), "show_filter", array(), "array")) {
                // line 198
                echo "                    <li>
                        <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-";
                // line 199
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid"), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "name"), "html", null, true);
                echo "\" filter-container=\"filter-container-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid", array(), "method"), "html", null, true);
                echo "\">
                            <i class=\"fa ";
                // line 200
                echo (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "isActive", array(), "method")) ? ("fa-check-square-o") : ("fa-square-o"));
                echo "\"></i>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "trans", array(0 => $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "label"), 1 => array(), 2 => $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "translationDomain")), "method"), "html", null, true);
                echo "
                        </a>
                    </li>
                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 204
        echo "            </ul>
        </li>
    </ul>
";
    }

    // line 209
    public function block_list_filters($context, array $blocks = array())
    {
        // line 210
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "filters")) {
            // line 211
            echo "        ";
            $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getTemplate", array(0 => "filter"), "method")));
            // line 212
            echo "
        <div class=\"col-xs-12 col-md-12 sonata-filters-box\" style=\"display: ";
            // line 213
            echo (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "hasActiveFilters")) ? ("block") : ("none"));
            echo "\" id=\"filter-container-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid", array(), "method"), "html", null, true);
            echo "\">
            <div class=\"box box-primary\" >
                <div class=\"box-body\">
                    <form class=\"sonata-filter-form form-horizontal ";
            // line 216
            echo ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isChild") && (1 == twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "filters"))))) ? ("hide") : (""));
            echo "\" action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\" method=\"GET\" role=\"form\">
                        ";
            // line 217
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
            echo "

                        <div class=\"clearfix\">
                            <div class=\"col-md-9\">
                                <div class=\"filter_container\">
                                    ";
            // line 222
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "filters"));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 223
                echo "                                        <div class=\"form-group\" id=\"filter-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid"), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "name"), "html", null, true);
                echo "\" sonata-filter=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "options"), "show_filter", array(), "array")) ? ("true") : ("false"));
                echo "\" style=\"display: ";
                if (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "isActive", array(), "method") && $this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "options"), "show_filter", array(), "array"))) {
                    echo "block";
                } else {
                    echo "none";
                }
                echo "\">
                                            <label for=\"";
                // line 224
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children"), $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "formName"), array(), "array"), "children"), "value", array(), "array"), "vars"), "id"), "html", null, true);
                echo "\" class=\"col-sm-3 control-label\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "trans", array(0 => $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "label"), 1 => array(), 2 => $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "translationDomain")), "method"), "html", null, true);
                echo "</label>
                                            ";
                // line 225
                $context["attr"] = (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array(), "any", false, true), $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "formName"), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array(), "any", false, true), $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "formName"), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr"), array())) : (array()));
                // line 226
                echo "                                            ";
                // line 227
                echo "
                                            <div class=\"col-sm-2\">
                                                ";
                // line 229
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children"), $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "formName"), array(), "array"), "children"), "type", array(), "array"), 'widget', array("attr" => (isset($context["attr"]) ? $context["attr"] : null)));
                echo "
                                            </div>

                                            <div class=\"col-sm-3\">
                                                ";
                // line 233
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children"), $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "formName"), array(), "array"), "children"), "value", array(), "array"), 'widget');
                echo "
                                            </div>
                                        </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 237
            echo "                                </div>
                            </div>
                            <div class=\"pull-right\">
                                <input type=\"hidden\" name=\"filter[_page]\" id=\"filter__page\" value=\"1\">

                                ";
            // line 242
            $context["foo"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children"), "_page", array(), "array"), "setRendered", array(), "method");
            // line 243
            echo "                                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
            echo "

                                <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa fa-filter\"></i> ";
            // line 245
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "</button>

                                <a class=\"btn btn-default\" href=\"";
            // line 247
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list", 1 => array("filters" => "reset")), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_reset_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
                            </div>
                        </div>

                        ";
            // line 251
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "persistentParameters"));
            foreach ($context['_seq'] as $context["paramKey"] => $context["paramValue"]) {
                // line 252
                echo "                            <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, (isset($context["paramKey"]) ? $context["paramKey"] : null), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["paramValue"]) ? $context["paramValue"] : null), "html", null, true);
                echo "\">
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['paramKey'], $context['paramValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 254
            echo "                    </form>
                </div>
            </div>
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  676 => 254,  665 => 252,  661 => 251,  652 => 247,  647 => 245,  641 => 243,  639 => 242,  632 => 237,  622 => 233,  615 => 229,  611 => 227,  609 => 226,  607 => 225,  601 => 224,  586 => 223,  582 => 222,  574 => 217,  568 => 216,  560 => 213,  557 => 212,  554 => 211,  551 => 210,  548 => 209,  541 => 204,  528 => 200,  520 => 199,  517 => 198,  512 => 197,  506 => 194,  501 => 191,  498 => 190,  493 => 182,  489 => 168,  486 => 167,  482 => 166,  479 => 165,  476 => 164,  472 => 157,  468 => 156,  465 => 155,  460 => 125,  449 => 123,  445 => 122,  438 => 118,  434 => 117,  425 => 115,  422 => 114,  399 => 92,  396 => 91,  390 => 128,  385 => 114,  376 => 90,  373 => 89,  367 => 169,  359 => 160,  353 => 155,  350 => 154,  343 => 149,  333 => 145,  328 => 143,  325 => 142,  321 => 141,  307 => 133,  303 => 131,  300 => 130,  297 => 89,  292 => 87,  280 => 82,  275 => 79,  272 => 78,  266 => 76,  260 => 72,  251 => 70,  232 => 65,  215 => 62,  197 => 56,  188 => 53,  392 => 107,  389 => 106,  383 => 104,  377 => 102,  354 => 95,  352 => 94,  349 => 93,  342 => 91,  335 => 89,  332 => 88,  326 => 86,  324 => 85,  318 => 83,  315 => 82,  302 => 76,  299 => 75,  293 => 73,  287 => 85,  284 => 70,  282 => 69,  279 => 68,  276 => 67,  271 => 62,  257 => 56,  222 => 44,  211 => 41,  190 => 38,  96 => 30,  12 => 36,  267 => 5,  263 => 58,  218 => 63,  205 => 90,  146 => 33,  259 => 118,  250 => 113,  244 => 111,  242 => 101,  237 => 109,  233 => 48,  231 => 99,  210 => 97,  200 => 57,  192 => 90,  174 => 85,  114 => 172,  145 => 54,  194 => 55,  185 => 61,  157 => 39,  216 => 99,  212 => 61,  206 => 59,  195 => 84,  184 => 87,  181 => 50,  167 => 36,  165 => 69,  137 => 29,  129 => 178,  20 => 1,  65 => 27,  110 => 38,  52 => 22,  152 => 30,  120 => 46,  81 => 32,  58 => 24,  34 => 15,  153 => 20,  148 => 49,  126 => 177,  124 => 47,  97 => 24,  76 => 30,  53 => 15,  281 => 115,  256 => 102,  239 => 94,  223 => 87,  207 => 91,  198 => 77,  191 => 54,  175 => 74,  150 => 35,  139 => 54,  118 => 32,  83 => 33,  74 => 30,  186 => 52,  161 => 6,  37 => 24,  23 => 1,  170 => 71,  160 => 40,  155 => 58,  134 => 45,  127 => 59,  113 => 44,  104 => 75,  100 => 61,  90 => 24,  84 => 36,  77 => 31,  70 => 22,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 116,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 127,  384 => 121,  381 => 112,  379 => 91,  374 => 101,  368 => 99,  365 => 164,  362 => 97,  360 => 109,  355 => 158,  341 => 105,  337 => 90,  322 => 101,  314 => 137,  312 => 98,  309 => 134,  305 => 77,  298 => 91,  294 => 88,  285 => 89,  283 => 83,  278 => 86,  268 => 61,  264 => 107,  258 => 81,  252 => 53,  247 => 68,  241 => 77,  229 => 105,  220 => 64,  214 => 84,  177 => 48,  169 => 11,  140 => 183,  132 => 27,  128 => 42,  111 => 44,  107 => 76,  61 => 24,  273 => 110,  269 => 77,  254 => 71,  246 => 90,  243 => 67,  240 => 86,  238 => 66,  235 => 108,  230 => 47,  227 => 104,  224 => 45,  221 => 77,  219 => 86,  217 => 75,  208 => 96,  204 => 53,  179 => 76,  159 => 66,  143 => 184,  135 => 181,  131 => 60,  119 => 174,  108 => 42,  102 => 39,  71 => 28,  67 => 29,  63 => 24,  59 => 27,  47 => 17,  38 => 14,  94 => 36,  89 => 35,  85 => 25,  79 => 35,  75 => 31,  68 => 24,  56 => 16,  50 => 14,  29 => 3,  87 => 23,  72 => 19,  55 => 12,  21 => 11,  26 => 14,  98 => 39,  93 => 21,  88 => 28,  78 => 31,  46 => 8,  27 => 14,  40 => 14,  44 => 18,  35 => 16,  31 => 23,  43 => 15,  41 => 6,  28 => 22,  201 => 52,  196 => 90,  183 => 51,  171 => 44,  166 => 63,  163 => 58,  158 => 5,  156 => 64,  151 => 61,  142 => 31,  138 => 182,  136 => 58,  123 => 176,  121 => 59,  117 => 173,  115 => 39,  105 => 65,  101 => 40,  91 => 37,  69 => 16,  66 => 25,  62 => 14,  49 => 28,  24 => 1,  32 => 4,  25 => 12,  22 => 11,  19 => 1,  209 => 60,  203 => 58,  199 => 86,  193 => 83,  189 => 82,  187 => 48,  182 => 70,  176 => 73,  173 => 72,  168 => 43,  164 => 42,  162 => 68,  154 => 63,  149 => 60,  147 => 34,  144 => 47,  141 => 55,  133 => 49,  130 => 43,  125 => 46,  122 => 56,  116 => 111,  112 => 82,  109 => 81,  106 => 37,  103 => 41,  99 => 38,  95 => 28,  92 => 28,  86 => 34,  82 => 23,  80 => 26,  73 => 17,  64 => 25,  60 => 15,  57 => 22,  54 => 23,  51 => 29,  48 => 17,  45 => 16,  42 => 19,  39 => 17,  36 => 4,  33 => 3,  30 => 15,);
    }
}
