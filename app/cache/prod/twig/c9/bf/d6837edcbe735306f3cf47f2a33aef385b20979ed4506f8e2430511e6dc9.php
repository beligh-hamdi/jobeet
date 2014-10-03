<?php

/* SonataAdminBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_c9bfd6837edcbe735306f3cf47f2a33aef385b20979ed4506f8e2430511e6dc9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("form_div_layout.html.twig");

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'form_label' => array($this, 'block_form_label'),
            'widget_container_attributes_choice_widget' => array($this, 'block_widget_container_attributes_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'form_row' => array($this, 'block_form_row'),
            'label' => array($this, 'block_label'),
            'sonata_type_native_collection_widget_row' => array($this, 'block_sonata_type_native_collection_widget_row'),
            'sonata_type_native_collection_widget' => array($this, 'block_sonata_type_native_collection_widget'),
            'sonata_type_immutable_array_widget' => array($this, 'block_sonata_type_immutable_array_widget'),
            'sonata_type_immutable_array_widget_row' => array($this, 'block_sonata_type_immutable_array_widget_row'),
            'sonata_type_model_autocomplete_widget' => array($this, 'block_sonata_type_model_autocomplete_widget'),
            'sonata_type_model_autocomplete_dropdown_item_format' => array($this, 'block_sonata_type_model_autocomplete_dropdown_item_format'),
            'sonata_type_model_autocomplete_selection_format' => array($this, 'block_sonata_type_model_autocomplete_selection_format'),
            'sonata_type_choice_field_mask_widget' => array($this, 'block_sonata_type_choice_field_mask_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_form_widget($context, array $blocks = array())
    {
        // line 15
        $this->displayParentBlock("form_widget", $context, $blocks);
        echo "
    ";
        // line 16
        if ((array_key_exists("sonata_help", $context) && (isset($context["sonata_help"]) ? $context["sonata_help"] : null))) {
            // line 17
            echo "        <span class=\"help-block sonata-ba-field-widget-help\">";
            echo (isset($context["sonata_help"]) ? $context["sonata_help"] : null);
            echo "</span>
    ";
        }
    }

    // line 21
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 22
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")) . " form-control")));
        // line 23
        echo "    ";
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        echo "
";
    }

    // line 26
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 27
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")) . " form-control")));
        // line 28
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        echo "
";
    }

    // line 32
    public function block_form_label($context, array $blocks = array())
    {
        // line 33
        ob_start();
        // line 34
        echo "
    ";
        // line 35
        $context["label_class"] = "";
        // line 36
        echo "    ";
        if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin") && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"), "getConfigurationPool", array(), "method"), "getOption", array(0 => "form_type"), "method") == "horizontal"))) {
            // line 37
            echo "        ";
            $context["label_class"] = " control-label col-sm-3";
            // line 38
            echo "    ";
        } else {
            // line 39
            echo "        ";
            $context["label_class"] = " control-label";
            // line 40
            echo "    ";
        }
        // line 41
        echo "
    ";
        // line 43
        echo "    ";
        if ((!((isset($context["label"]) ? $context["label"] : null) === false))) {
            // line 44
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class"), "")) : ("")) . (isset($context["label_class"]) ? $context["label_class"] : null))));
            // line 45
            echo "
        ";
            // line 46
            if ((!(isset($context["compound"]) ? $context["compound"] : null))) {
                // line 47
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("for" => (isset($context["id"]) ? $context["id"] : null)));
                // line 48
                echo "        ";
            }
            // line 49
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : null)) {
                // line 50
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class"), "")) : ("")) . " required"))));
                // line 51
                echo "        ";
            }
            // line 52
            echo "
        ";
            // line 53
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : null))) {
                // line 54
                echo "            ";
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : null));
                // line 55
                echo "        ";
            }
            // line 56
            echo "
        ";
            // line 57
            if (((array_key_exists("in_list_checkbox", $context) && (isset($context["in_list_checkbox"]) ? $context["in_list_checkbox"] : null)) && array_key_exists("widget", $context))) {
                // line 58
                echo "            <label";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : null));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : null), "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : null), "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">
                ";
                // line 59
                echo (isset($context["widget"]) ? $context["widget"] : null);
                echo "
                <span>
                    ";
                // line 61
                if ((!$this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"))) {
                    // line 62
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
                } else {
                    // line 64
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null), array(), $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "translationDomain")), "html", null, true);
                }
                // line 66
                echo "                </span>
            </label>
        ";
            } else {
                // line 69
                echo "            <label";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : null));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : null), "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : null), "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">
                ";
                // line 70
                if ((!$this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"))) {
                    // line 71
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
                } else {
                    // line 73
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"), "trans", array(0 => (isset($context["label"]) ? $context["label"] : null), 1 => array(), 2 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "translationDomain")), "method"), "html", null, true);
                    echo "
                ";
                }
                // line 75
                echo "            </label>
        ";
            }
            // line 77
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 81
    public function block_widget_container_attributes_choice_widget($context, array $blocks = array())
    {
        // line 82
        echo "    ";
        ob_start();
        // line 83
        echo "        id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\"
        ";
        // line 84
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : null), "html", null, true);
            echo "=\"";
            if (((isset($context["attrname"]) ? $context["attrname"] : null) == "class")) {
                echo "list-unstyled ";
            }
            echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : null), "html", null, true);
            echo "\" ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "        ";
        if (!twig_in_filter("class", (isset($context["attr"]) ? $context["attr"] : null))) {
            echo "class=\"list-unstyled\"";
        }
        // line 86
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 89
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 90
        ob_start();
        // line 91
        echo "    <ul ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 92
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 93
            echo "            <li>
                ";
            // line 94
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : null), 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
            echo " ";
            // line 95
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : null), 'label');
            echo "
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "    </ul>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 102
    public function block_choice_widget($context, array $blocks = array())
    {
        // line 103
        ob_start();
        // line 104
        echo "    ";
        if ((isset($context["compound"]) ? $context["compound"] : null)) {
            // line 105
            echo "        <ul ";
            $this->displayBlock("widget_container_attributes_choice_widget", $context, $blocks);
            echo ">
        ";
            // line 106
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 107
                echo "            <li>
                ";
                // line 108
                ob_start();
                // line 109
                echo "                    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : null), 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
                echo " ";
                // line 110
                echo "                ";
                $context["form_widget_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 111
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : null), 'label', array("in_list_checkbox" => true, "widget" => (isset($context["form_widget_content"]) ? $context["form_widget_content"] : null)) + (twig_test_empty($_label_ = (($this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "vars", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "vars", array(), "any", false, true), "label"), null)) : (null))) ? array() : array("label" => $_label_)));
                echo "
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            echo "        </ul>
    ";
        } else {
            // line 116
            echo "    ";
            if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin") && (!$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"), "getConfigurationPool", array(), "method"), "getOption", array(0 => "use_select2"), "method")))) {
                // line 117
                echo "        ";
                $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")) . " form-control")));
                // line 118
                echo "    ";
            }
            // line 119
            echo "    <select ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
                echo " multiple=\"multiple\"";
            }
            echo ">
        ";
            // line 120
            if ((!(null === (isset($context["empty_value"]) ? $context["empty_value"] : null)))) {
                // line 121
                echo "            <option value=\"\">
                ";
                // line 122
                if ((!$this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"))) {
                    // line 123
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["empty_value"]) ? $context["empty_value"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
                } else {
                    // line 125
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["empty_value"]) ? $context["empty_value"] : null), array(), $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "translationDomain")), "html", null, true);
                }
                // line 127
                echo "            </option>
        ";
            }
            // line 129
            echo "        ";
            if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : null)) > 0)) {
                // line 130
                echo "            ";
                $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : null);
                // line 131
                echo "            ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
            ";
                // line 132
                if ((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : null)) > 0)) {
                    // line 133
                    echo "                <option disabled=\"disabled\">";
                    echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : null), "html", null, true);
                    echo "</option>
            ";
                }
                // line 135
                echo "        ";
            }
            // line 136
            echo "        ";
            $context["options"] = (isset($context["choices"]) ? $context["choices"] : null);
            // line 137
            echo "        ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
    </select>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 143
    public function block_form_row($context, array $blocks = array())
    {
        // line 144
        echo "    ";
        $context["label_class"] = "";
        // line 145
        echo "    ";
        $context["div_class"] = "";
        // line 146
        echo "    ";
        if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin") && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"), "getConfigurationPool", array(), "method"), "getOption", array(0 => "form_type"), "method") == "horizontal"))) {
            // line 147
            echo "        ";
            $context["label_class"] = "control-label col-sm-3";
            // line 148
            echo "        ";
            $context["div_class"] = "col-sm-9 col-md-9";
            // line 149
            echo "    ";
        } else {
            // line 150
            echo "        ";
            $context["label_class"] = "control-label";
            // line 151
            echo "    ";
        }
        // line 152
        echo "
    ";
        // line 153
        if ((((!array_key_exists("sonata_admin", $context)) || (!(isset($context["sonata_admin_enabled"]) ? $context["sonata_admin_enabled"] : null))) || (!$this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description")))) {
            // line 154
            echo "        <div class=\"form-group ";
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
                echo " has-error";
            }
            echo "\">
            ";
            // line 155
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : null), null)) : (null))) ? array() : array("label" => $_label_)));
            echo "
            <div class=\"";
            // line 156
            if (((isset($context["label"]) ? $context["label"] : null) === false)) {
                echo "sonata-collection-row-without-label";
            }
            echo "\">
                ";
            // line 157
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
            echo " ";
            // line 158
            echo "                ";
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
                // line 159
                echo "                    <div class=\"help-block sonata-ba-field-error-messages\">
                        ";
                // line 160
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
                echo "
                    </div>
                ";
            }
            // line 163
            echo "            </div>
        </div>
    ";
        } else {
            // line 166
            echo "        <div class=\"form-group";
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
                echo " has-error";
            }
            echo "\" id=\"sonata-ba-field-container-";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\">
            ";
            // line 167
            $this->displayBlock('label', $context, $blocks);
            // line 174
            echo "
            ";
            // line 175
            $context["has_label"] = ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true) || (!((isset($context["label"]) ? $context["label"] : null) === false)));
            // line 176
            echo "            <div class=\"";
            echo twig_escape_filter($this->env, (isset($context["div_class"]) ? $context["div_class"] : null), "html", null, true);
            echo " sonata-ba-field sonata-ba-field-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "edit"), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "inline"), "html", null, true);
            echo " ";
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
                echo "sonata-ba-field-error";
            }
            echo " ";
            if ((!(isset($context["has_label"]) ? $context["has_label"] : null))) {
                echo "sonata-collection-row-without-label";
            }
            echo "\">

                ";
            // line 178
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
            echo " ";
            // line 179
            echo "
                ";
            // line 180
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
                // line 181
                echo "                    <div class=\"help-block sonata-ba-field-error-messages\">
                        ";
                // line 182
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
                echo "
                    </div>
                ";
            }
            // line 185
            echo "
                ";
            // line 186
            if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "help")) {
                // line 187
                echo "                    <span class=\"help-block sonata-ba-field-help\">";
                echo $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"), "trans", array(0 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "help"), 1 => array(), 2 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "translationDomain")), "method");
                echo "</span>
                ";
            }
            // line 189
            echo "            </div>
        </div>
    ";
        }
    }

    // line 167
    public function block_label($context, array $blocks = array())
    {
        // line 168
        echo "                ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 169
            echo "                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label', array("attr" => array("class" => (isset($context["label_class"]) ? $context["label_class"] : null))) + (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "options"), "name")) ? array() : array("label" => $_label_)));
            echo "
                ";
        } else {
            // line 171
            echo "                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label', array("attr" => array("class" => (isset($context["label_class"]) ? $context["label_class"] : null))) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : null), null)) : (null))) ? array() : array("label" => $_label_)));
            echo "
                ";
        }
        // line 173
        echo "            ";
    }

    // line 194
    public function block_sonata_type_native_collection_widget_row($context, array $blocks = array())
    {
        // line 195
        ob_start();
        // line 196
        echo "    <div class=\"sonata-collection-row\">
        ";
        // line 197
        if ((isset($context["allow_delete"]) ? $context["allow_delete"] : null)) {
            // line 198
            echo "            <a href=\"#\" class=\"btn sonata-collection-delete\"><i class=\"fa fa-minus-circle\"></i></a>
        ";
        }
        // line 200
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : null), 'row');
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 205
    public function block_sonata_type_native_collection_widget($context, array $blocks = array())
    {
        // line 206
        ob_start();
        // line 207
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 208
            echo "        ";
            $context["child"] = (isset($context["prototype"]) ? $context["prototype"] : null);
            // line 209
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("data-prototype" => $this->renderBlock("sonata_type_native_collection_widget_row", $context, $blocks), "data-prototype-name" => $this->getAttribute($this->getAttribute((isset($context["prototype"]) ? $context["prototype"] : null), "vars"), "name"), "class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : (""))));
            // line 210
            echo "    ";
        }
        // line 211
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 212
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
        ";
        // line 213
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 214
            echo "            ";
            $this->displayBlock("sonata_type_native_collection_widget_row", $context, $blocks);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 216
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
        ";
        // line 217
        if ((isset($context["allow_add"]) ? $context["allow_add"] : null)) {
            // line 218
            echo "            <div><a href=\"#\" class=\"btn sonata-collection-add\"><i class=\"fa fa-plus-circle\"></i></a></div>
        ";
        }
        // line 220
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 224
    public function block_sonata_type_immutable_array_widget($context, array $blocks = array())
    {
        // line 225
        echo "    ";
        ob_start();
        // line 226
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 227
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "

            ";
        // line 229
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
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
        foreach ($context['_seq'] as $context["key"] => $context["child"]) {
            // line 230
            echo "                ";
            $this->displayBlock("sonata_type_immutable_array_widget_row", $context, $blocks);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 232
        echo "
            ";
        // line 233
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 238
    public function block_sonata_type_immutable_array_widget_row($context, array $blocks = array())
    {
        // line 239
        echo "    ";
        ob_start();
        // line 240
        echo "        <div class=\"form-group";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            echo " error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
        echo "\">

            ";
        // line 242
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : null), 'label');
        echo "

            ";
        // line 244
        $context["div_class"] = "";
        // line 245
        echo "            ";
        if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin") && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"), "getConfigurationPool", array(), "method"), "getOption", array(0 => "form_type"), "method") == "horizontal"))) {
            // line 246
            echo "                ";
            $context["div_class"] = "col-sm-9 col-md-9";
            // line 247
            echo "            ";
        }
        // line 248
        echo "
            <div class=\"";
        // line 249
        echo twig_escape_filter($this->env, (isset($context["div_class"]) ? $context["div_class"] : null), "html", null, true);
        echo " sonata-ba-field sonata-ba-field-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "edit"), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "inline"), "html", null, true);
        echo " ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
                ";
        // line 250
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : null), 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
        echo " ";
        // line 251
        echo "            </div>

            ";
        // line 253
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            // line 254
            echo "                <div class=\"help-block sonata-ba-field-error-messages\">
                    ";
            // line 255
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : null), 'errors');
            echo "
                </div>
            ";
        }
        // line 258
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 262
    public function block_sonata_type_model_autocomplete_widget($context, array $blocks = array())
    {
        // line 263
        ob_start();
        // line 264
        echo "
    ";
        // line 265
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title"), 'widget');
        echo "

    ";
        // line 267
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 268
            echo "        ";
            if ((!$this->getAttribute((isset($context["child"]) ? $context["child"] : null), "rendered"))) {
                // line 269
                echo "            ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : null), 'widget');
                echo "
        ";
            }
            // line 271
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 272
        echo "
    <script>
        (function (\$) {
            var autocompleteInput = \$(\"#";
        // line 275
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title"), "vars"), "id"), "html", null, true);
        echo "\");
            autocompleteInput.select2({
                placeholder: \"";
        // line 277
        echo twig_escape_filter($this->env, (isset($context["placeholder"]) ? $context["placeholder"] : null), "html", null, true);
        echo "\",
                allowClear: ";
        // line 278
        echo (((isset($context["required"]) ? $context["required"] : null)) ? ("false") : ("true"));
        echo ",
                enable: ";
        // line 279
        echo (((isset($context["disabled"]) ? $context["disabled"] : null)) ? ("false") : ("true"));
        echo ",
                readonly: ";
        // line 280
        echo (((isset($context["read_only"]) ? $context["read_only"] : null)) ? ("true") : ("false"));
        echo ",
                minimumInputLength: ";
        // line 281
        echo twig_escape_filter($this->env, (isset($context["minimum_input_length"]) ? $context["minimum_input_length"] : null), "html", null, true);
        echo ",
                multiple: ";
        // line 282
        echo (((isset($context["multiple"]) ? $context["multiple"] : null)) ? ("true") : ("false"));
        echo ",
                ajax: {
                    url:  \"";
        // line 284
        echo twig_escape_filter($this->env, (((isset($context["url"]) ? $context["url"] : null)) ? ((isset($context["url"]) ? $context["url"] : null)) : ($this->env->getExtension('routing')->getUrl($this->getAttribute((isset($context["route"]) ? $context["route"] : null), "name"), (($this->getAttribute((isset($context["route"]) ? $context["route"] : null), "parameters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["route"]) ? $context["route"] : null), "parameters"), array())) : (array()))))), "html", null, true);
        echo "\",
                    dataType: 'json',
                    quietMillis: 100,
                    data: function (term, page) { // page is the one-based page number tracked by Select2
                        return {
                                //search term
                                \"";
        // line 290
        echo twig_escape_filter($this->env, (isset($context["req_param_name_search"]) ? $context["req_param_name_search"] : null), "html", null, true);
        echo "\": term,

                                // page size
                                \"";
        // line 293
        echo twig_escape_filter($this->env, (isset($context["req_param_name_items_per_page"]) ? $context["req_param_name_items_per_page"] : null), "html", null, true);
        echo "\": ";
        echo twig_escape_filter($this->env, (isset($context["items_per_page"]) ? $context["items_per_page"] : null), "html", null, true);
        echo ",

                                // page number
                                \"";
        // line 296
        echo twig_escape_filter($this->env, (isset($context["req_param_name_page_number"]) ? $context["req_param_name_page_number"] : null), "html", null, true);
        echo "\": page,

                                // admin
                                'uniqid': \"";
        // line 299
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"), "uniqid"), "html", null, true);
        echo "\",
                                'code':   \"";
        // line 300
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"), "code"), "html", null, true);
        echo "\",
                                'field':  \"";
        // line 301
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "\"

                                // other parameters
                                ";
        // line 304
        if ((!twig_test_empty((isset($context["req_params"]) ? $context["req_params"] : null)))) {
            echo ",";
            // line 305
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["req_params"]) ? $context["req_params"] : null));
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
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 306
                echo "\"";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "js"), "html", null, true);
                echo "\": \"";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "js"), "html", null, true);
                echo "\"";
                // line 307
                if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last"))) {
                    echo ", ";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 310
        echo "                            };
                    },
                    results: function (data, page) {
                        // notice we return the value of more so Select2 knows if more results can be loaded
                        return {results: data.items, more: data.more};
                    }
                },
                formatResult: function (item) {
                    return ";
        // line 318
        $this->displayBlock('sonata_type_model_autocomplete_dropdown_item_format', $context, $blocks);
        echo ";// format of one dropdown item
                },
                formatSelection: function (item) {
                    return ";
        // line 321
        $this->displayBlock('sonata_type_model_autocomplete_selection_format', $context, $blocks);
        echo ";// format selected item '<b>'+item.label+'</b>';
                },
                dropdownCssClass: \"";
        // line 323
        echo twig_escape_filter($this->env, (isset($context["dropdown_css_class"]) ? $context["dropdown_css_class"] : null), "html", null, true);
        echo "\",
                escapeMarkup: function (m) { return m; } // we do not want to escape markup since we are displaying html in results
            });

            autocompleteInput.on(\"change\", function(e) {

                // console.log(\"change \"+JSON.stringify({val:e.val, added:e.added, removed:e.removed}));

                // add new input
                var el = null;
                if (undefined !== e.added) {

                    var addedItems = e.added;

                    if(!\$.isArray(addedItems)) {
                        addedItems = [addedItems];
                    }

                    var length = addedItems.length;
                    for (var i = 0; i < length; i++) {
                        el = addedItems[i];
                        \$(\"#";
        // line 344
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "identifiers"), "vars"), "id"), "html", null, true);
        echo "\").append('<input type=\"hidden\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "identifiers"), "vars"), "full_name"), "html", null, true);
        echo "[]\" value=\"'+el.id+'\" />');
                    }
                }

                // remove input
                if (undefined !== e.removed && null !== e.removed) {
                    var removedItems = e.removed;

                    if(!\$.isArray(removedItems)) {
                        removedItems = [removedItems];
                    }

                    var length = removedItems.length;
                    for (var i = 0; i < length; i++) {
                        el = removedItems[i];
                        \$('#";
        // line 359
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "identifiers"), "vars"), "id"), "html", null, true);
        echo " input:hidden[value=\"'+el.id+'\"]').remove();
                    }
                }
            });

            // Initialise the autocomplete
            var data = [];
            ";
        // line 366
        if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
            // line 367
            echo "data = [";
            // line 368
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "labels"));
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
            foreach ($context['_seq'] as $context["key"] => $context["label_text"]) {
                // line 369
                echo "{id: '";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "identifiers"), (isset($context["key"]) ? $context["key"] : null), array(), "array"), "js"), "html", null, true);
                echo "', label:'";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["label_text"]) ? $context["label_text"] : null), "js"), "html", null, true);
                echo "'}";
                // line 370
                if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last"))) {
                    echo ", ";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['label_text'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 372
            echo "];";
        } elseif ($this->getAttribute($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "labels", array(), "any", false, true), 0, array(), "array", true, true)) {
            // line 374
            echo "data = {id: '";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "identifiers"), 0, array(), "array"), "js"), "html", null, true);
            echo "', label:'";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "labels"), 0, array(), "array"), "js"), "html", null, true);
            echo "'};";
        }
        // line 376
        echo "            if (undefined==data.length || 0<data.length) { // Leave placeholder if no data set
                autocompleteInput.select2('data', data);
            }
        })(jQuery);
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 318
    public function block_sonata_type_model_autocomplete_dropdown_item_format($context, array $blocks = array())
    {
        echo "'<div class=\"sonata-autocomplete-dropdown-item\">'+item.label+'</div>'";
    }

    // line 321
    public function block_sonata_type_model_autocomplete_selection_format($context, array $blocks = array())
    {
        echo "item.label";
    }

    // line 384
    public function block_sonata_type_choice_field_mask_widget($context, array $blocks = array())
    {
        // line 385
        echo "    ";
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    ";
        // line 386
        $context["main_form_name"] = twig_slice($this->env, (isset($context["id"]) ? $context["id"] : null), 0, (twig_length_filter($this->env, (isset($context["id"]) ? $context["id"] : null)) - twig_length_filter($this->env, (isset($context["name"]) ? $context["name"] : null))));
        // line 387
        echo "    <script>
        jQuery(document).ready(function() {
            var allFields = ";
        // line 389
        echo twig_jsonencode_filter((isset($context["all_fields"]) ? $context["all_fields"] : null));
        echo ";
            var map = ";
        // line 390
        echo twig_jsonencode_filter((isset($context["map"]) ? $context["map"] : null));
        echo ";

            showMaskChoiceEl = jQuery('#";
        // line 392
        echo twig_escape_filter($this->env, (isset($context["main_form_name"]) ? $context["main_form_name"] : null), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "');

            showMaskChoiceEl.on('change', function () {
                choice_field_mask_show(jQuery(this).val());
            });

            function choice_field_mask_show(val)
            {
                var controlGroupIdFunc = function (field) {
                    return '#sonata-ba-field-container-";
        // line 401
        echo twig_escape_filter($this->env, (isset($context["main_form_name"]) ? $context["main_form_name"] : null), "html", null, true);
        echo "' + field;

                };
                if (map[val] == undefined) {
                    jQuery.each(allFields, function (i, field) {
                        jQuery(controlGroupIdFunc(field)).hide();
                    });
                    return;
                }

                jQuery.each(allFields, function (i, field) {
                    jQuery(controlGroupIdFunc(field)).hide();
                });
                jQuery.each(map[val], function (i, field) {
                    jQuery(controlGroupIdFunc(field)).show();
                });
            }
            choice_field_mask_show(showMaskChoiceEl.val());
        });

    </script>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Form:form_admin_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1145 => 401,  1132 => 392,  1127 => 390,  1123 => 389,  1119 => 387,  1117 => 386,  1112 => 385,  1109 => 384,  1103 => 321,  1097 => 318,  1087 => 376,  1077 => 372,  1055 => 369,  1038 => 368,  1004 => 344,  969 => 318,  959 => 310,  936 => 306,  910 => 301,  906 => 300,  896 => 296,  882 => 290,  873 => 284,  868 => 282,  860 => 280,  852 => 278,  848 => 277,  832 => 271,  823 => 268,  811 => 264,  809 => 263,  800 => 258,  794 => 255,  770 => 249,  767 => 248,  764 => 247,  758 => 245,  756 => 244,  736 => 239,  705 => 230,  688 => 229,  666 => 220,  660 => 217,  655 => 216,  638 => 214,  621 => 213,  612 => 211,  606 => 209,  603 => 208,  600 => 207,  598 => 206,  595 => 205,  553 => 168,  543 => 189,  537 => 187,  535 => 186,  532 => 185,  526 => 182,  523 => 181,  521 => 180,  518 => 179,  515 => 178,  497 => 176,  495 => 175,  492 => 174,  490 => 167,  481 => 166,  464 => 158,  455 => 156,  451 => 155,  442 => 153,  436 => 151,  433 => 150,  424 => 147,  418 => 145,  415 => 144,  380 => 130,  329 => 111,  313 => 106,  308 => 105,  274 => 92,  1080 => 374,  1074 => 338,  1068 => 336,  1066 => 335,  1060 => 333,  1051 => 332,  1048 => 331,  1036 => 367,  1030 => 324,  1024 => 359,  1022 => 321,  1020 => 320,  1016 => 319,  995 => 312,  989 => 310,  981 => 307,  979 => 306,  975 => 321,  971 => 304,  963 => 302,  957 => 301,  946 => 296,  942 => 307,  939 => 294,  928 => 286,  924 => 285,  908 => 278,  904 => 277,  902 => 299,  900 => 275,  891 => 271,  881 => 265,  879 => 264,  869 => 259,  840 => 255,  837 => 253,  835 => 252,  826 => 269,  824 => 246,  819 => 267,  815 => 239,  812 => 238,  806 => 262,  804 => 233,  801 => 232,  795 => 228,  793 => 227,  791 => 254,  789 => 253,  786 => 224,  779 => 216,  774 => 212,  754 => 208,  751 => 242,  748 => 205,  745 => 203,  742 => 202,  739 => 240,  737 => 199,  735 => 198,  732 => 197,  726 => 191,  723 => 190,  719 => 187,  717 => 186,  714 => 185,  704 => 182,  701 => 180,  699 => 179,  696 => 178,  692 => 175,  690 => 174,  687 => 173,  683 => 227,  678 => 226,  673 => 165,  671 => 164,  663 => 160,  658 => 158,  654 => 155,  645 => 150,  643 => 149,  640 => 148,  636 => 145,  633 => 144,  627 => 140,  624 => 139,  620 => 136,  617 => 212,  614 => 133,  599 => 128,  592 => 126,  589 => 124,  584 => 122,  579 => 118,  577 => 196,  576 => 115,  575 => 195,  570 => 112,  567 => 110,  565 => 109,  562 => 171,  556 => 169,  552 => 102,  550 => 167,  539 => 96,  522 => 92,  505 => 88,  502 => 87,  477 => 82,  463 => 76,  443 => 74,  439 => 152,  429 => 66,  412 => 143,  410 => 59,  397 => 55,  357 => 37,  346 => 117,  339 => 114,  334 => 26,  323 => 19,  290 => 7,  270 => 316,  255 => 284,  180 => 62,  1067 => 309,  1064 => 334,  1061 => 370,  1057 => 339,  1050 => 335,  1046 => 333,  1040 => 330,  1037 => 329,  1034 => 366,  1032 => 327,  1029 => 326,  1023 => 324,  1021 => 323,  1018 => 322,  1012 => 320,  1010 => 318,  1007 => 317,  1001 => 316,  999 => 315,  996 => 314,  990 => 312,  988 => 311,  985 => 310,  983 => 308,  980 => 323,  977 => 305,  973 => 266,  967 => 303,  964 => 262,  961 => 261,  958 => 260,  954 => 300,  949 => 296,  943 => 294,  941 => 293,  938 => 292,  930 => 287,  925 => 285,  921 => 284,  919 => 305,  916 => 304,  912 => 279,  897 => 274,  893 => 276,  890 => 275,  888 => 293,  884 => 267,  878 => 270,  876 => 263,  872 => 267,  870 => 260,  867 => 258,  864 => 281,  861 => 257,  856 => 279,  853 => 257,  850 => 256,  845 => 340,  843 => 275,  838 => 272,  836 => 256,  833 => 251,  830 => 250,  825 => 246,  822 => 245,  818 => 244,  814 => 265,  808 => 235,  803 => 238,  797 => 229,  785 => 251,  782 => 250,  778 => 233,  772 => 232,  765 => 229,  761 => 246,  753 => 226,  747 => 225,  744 => 224,  741 => 223,  738 => 222,  733 => 238,  730 => 220,  728 => 192,  725 => 233,  722 => 232,  715 => 216,  712 => 215,  709 => 214,  706 => 213,  700 => 212,  697 => 211,  694 => 210,  691 => 208,  684 => 207,  681 => 169,  675 => 225,  672 => 224,  668 => 163,  662 => 218,  659 => 200,  653 => 199,  649 => 153,  635 => 188,  629 => 141,  626 => 185,  623 => 184,  619 => 248,  616 => 245,  613 => 200,  608 => 198,  605 => 184,  602 => 183,  596 => 249,  594 => 127,  590 => 181,  587 => 123,  580 => 197,  578 => 254,  572 => 194,  569 => 179,  566 => 178,  558 => 167,  555 => 166,  547 => 160,  544 => 99,  536 => 95,  533 => 152,  529 => 149,  525 => 147,  519 => 91,  516 => 144,  513 => 143,  499 => 142,  483 => 136,  475 => 134,  473 => 133,  470 => 160,  467 => 159,  446 => 75,  441 => 127,  431 => 174,  421 => 146,  419 => 125,  408 => 116,  405 => 115,  394 => 54,  388 => 132,  375 => 105,  370 => 125,  364 => 102,  356 => 98,  344 => 175,  338 => 102,  336 => 95,  330 => 23,  320 => 108,  317 => 107,  295 => 11,  288 => 81,  265 => 299,  262 => 77,  253 => 74,  245 => 270,  234 => 83,  228 => 81,  225 => 62,  178 => 61,  172 => 56,  676 => 254,  665 => 202,  661 => 159,  652 => 154,  647 => 245,  641 => 243,  639 => 242,  632 => 237,  622 => 233,  615 => 229,  611 => 199,  609 => 210,  607 => 225,  601 => 224,  586 => 200,  582 => 198,  574 => 113,  568 => 173,  560 => 213,  557 => 212,  554 => 103,  551 => 210,  548 => 100,  541 => 97,  528 => 200,  520 => 199,  517 => 198,  512 => 197,  506 => 194,  501 => 191,  498 => 190,  493 => 140,  489 => 138,  486 => 167,  482 => 166,  479 => 165,  476 => 163,  472 => 79,  468 => 156,  465 => 77,  460 => 125,  449 => 130,  445 => 122,  438 => 126,  434 => 117,  425 => 64,  422 => 114,  399 => 136,  396 => 135,  390 => 133,  385 => 108,  376 => 90,  373 => 127,  367 => 123,  359 => 160,  353 => 155,  350 => 154,  343 => 116,  333 => 94,  328 => 22,  325 => 142,  321 => 18,  307 => 133,  303 => 103,  300 => 102,  297 => 89,  292 => 83,  280 => 82,  275 => 330,  272 => 78,  266 => 76,  260 => 293,  251 => 73,  232 => 249,  215 => 62,  197 => 72,  188 => 194,  392 => 107,  389 => 51,  383 => 131,  377 => 129,  354 => 95,  352 => 119,  349 => 118,  342 => 30,  335 => 89,  332 => 88,  326 => 110,  324 => 92,  318 => 83,  315 => 82,  302 => 76,  299 => 75,  293 => 73,  287 => 5,  284 => 95,  282 => 3,  279 => 68,  276 => 67,  271 => 62,  257 => 291,  222 => 77,  211 => 57,  190 => 38,  96 => 53,  12 => 36,  267 => 90,  263 => 294,  218 => 75,  205 => 90,  146 => 54,  259 => 86,  250 => 274,  244 => 111,  242 => 269,  237 => 262,  233 => 82,  231 => 82,  210 => 97,  200 => 73,  192 => 90,  174 => 64,  114 => 91,  145 => 53,  194 => 197,  185 => 61,  157 => 58,  216 => 99,  212 => 73,  206 => 59,  195 => 52,  184 => 68,  181 => 185,  167 => 36,  165 => 61,  137 => 34,  129 => 48,  20 => 11,  65 => 29,  110 => 346,  52 => 15,  152 => 56,  120 => 46,  81 => 32,  58 => 28,  34 => 14,  153 => 55,  148 => 37,  126 => 47,  124 => 46,  97 => 36,  76 => 25,  53 => 17,  281 => 94,  256 => 102,  239 => 84,  223 => 87,  207 => 70,  198 => 77,  191 => 69,  175 => 57,  150 => 37,  139 => 139,  118 => 44,  83 => 37,  74 => 26,  186 => 66,  161 => 162,  37 => 16,  23 => 11,  170 => 44,  160 => 40,  155 => 57,  134 => 133,  127 => 59,  113 => 46,  104 => 74,  100 => 37,  90 => 33,  84 => 33,  77 => 27,  70 => 61,  480 => 162,  474 => 80,  469 => 158,  461 => 157,  457 => 153,  453 => 151,  444 => 154,  440 => 148,  437 => 70,  435 => 69,  430 => 149,  427 => 148,  423 => 63,  413 => 134,  409 => 132,  407 => 131,  402 => 137,  398 => 113,  393 => 126,  387 => 127,  384 => 121,  381 => 48,  379 => 91,  374 => 101,  368 => 99,  365 => 122,  362 => 121,  360 => 120,  355 => 158,  341 => 114,  337 => 27,  322 => 109,  314 => 16,  312 => 98,  309 => 134,  305 => 104,  298 => 12,  294 => 98,  285 => 4,  283 => 83,  278 => 93,  268 => 300,  264 => 89,  258 => 81,  252 => 283,  247 => 273,  241 => 77,  229 => 105,  220 => 64,  214 => 231,  177 => 65,  169 => 168,  140 => 52,  132 => 49,  128 => 47,  111 => 90,  107 => 44,  61 => 21,  273 => 317,  269 => 91,  254 => 85,  246 => 90,  243 => 67,  240 => 263,  238 => 84,  235 => 250,  230 => 244,  227 => 243,  224 => 241,  221 => 77,  219 => 237,  217 => 232,  208 => 55,  204 => 215,  179 => 37,  159 => 158,  143 => 184,  135 => 50,  131 => 132,  119 => 95,  108 => 178,  102 => 43,  71 => 15,  67 => 23,  63 => 59,  59 => 58,  47 => 15,  38 => 20,  94 => 45,  89 => 37,  85 => 36,  79 => 26,  75 => 32,  68 => 23,  56 => 17,  50 => 14,  29 => 15,  87 => 32,  72 => 25,  55 => 21,  21 => 11,  26 => 18,  98 => 36,  93 => 70,  88 => 37,  78 => 36,  46 => 12,  27 => 14,  40 => 19,  44 => 14,  35 => 19,  31 => 40,  43 => 20,  41 => 20,  28 => 14,  201 => 213,  196 => 211,  183 => 64,  171 => 173,  166 => 167,  163 => 32,  158 => 41,  156 => 157,  151 => 152,  142 => 31,  138 => 51,  136 => 138,  123 => 47,  121 => 45,  117 => 45,  115 => 43,  105 => 177,  101 => 73,  91 => 44,  69 => 11,  66 => 10,  62 => 20,  49 => 17,  24 => 13,  32 => 18,  25 => 12,  22 => 12,  19 => 11,  209 => 71,  203 => 58,  199 => 212,  193 => 83,  189 => 70,  187 => 69,  182 => 70,  176 => 178,  173 => 59,  168 => 62,  164 => 163,  162 => 60,  154 => 153,  149 => 55,  147 => 27,  144 => 53,  141 => 52,  133 => 49,  130 => 22,  125 => 46,  122 => 27,  116 => 94,  112 => 41,  109 => 40,  106 => 39,  103 => 38,  99 => 54,  95 => 35,  92 => 34,  86 => 36,  82 => 32,  80 => 28,  73 => 32,  64 => 22,  60 => 19,  57 => 20,  54 => 16,  51 => 16,  48 => 24,  45 => 23,  42 => 49,  39 => 15,  36 => 17,  33 => 16,  30 => 14,);
    }
}
