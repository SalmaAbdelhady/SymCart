<?php

/* MopaBootstrapBundle:Form:fields.html.twig */
class __TwigTemplate_75ede5da58adad9c16b979e50eb3d75869fdfa69332d093182d793b77174d6c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("form_div_layout.html.twig");

        $this->blocks = array(
            'button_attributes' => array($this, 'block_button_attributes'),
            'button_widget' => array($this, 'block_button_widget'),
            'button_row' => array($this, 'block_button_row'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'form_tabs' => array($this, 'block_form_tabs'),
            'tabs_widget' => array($this, 'block_tabs_widget'),
            'form_tab' => array($this, 'block_form_tab'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'file_widget' => array($this, 'block_file_widget'),
            'form_legend' => array($this, 'block_form_legend'),
            'form_label' => array($this, 'block_form_label'),
            'help_label' => array($this, 'block_help_label'),
            'help_label_tooltip' => array($this, 'block_help_label_tooltip'),
            'help_label_popover' => array($this, 'block_help_label_popover'),
            'form_actions_widget' => array($this, 'block_form_actions_widget'),
            'form_actions_row' => array($this, 'block_form_actions_row'),
            'form_rows_visible' => array($this, 'block_form_rows_visible'),
            'form_row' => array($this, 'block_form_row'),
            'form_message' => array($this, 'block_form_message'),
            'form_help' => array($this, 'block_form_help'),
            'form_widget_add_btn' => array($this, 'block_form_widget_add_btn'),
            'form_widget_remove_btn' => array($this, 'block_form_widget_remove_btn'),
            'collection_button' => array($this, 'block_collection_button'),
            'label_asterisk' => array($this, 'block_label_asterisk'),
            'widget_addon' => array($this, 'block_widget_addon'),
            'form_errors' => array($this, 'block_form_errors'),
            'error_type' => array($this, 'block_error_type'),
            'widget_form_group_start' => array($this, 'block_widget_form_group_start'),
            'help_widget_popover' => array($this, 'block_help_widget_popover'),
            'widget_form_group_end' => array($this, 'block_widget_form_group_end'),
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

    // line 4
    public function block_button_attributes($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ("btn " . (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")))));
        // line 6
        echo "    ";
        $this->displayParentBlock("button_attributes", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_button_widget($context, array $blocks = array())
    {
        // line 10
        ob_start();
        // line 11
        echo "    ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 12
            echo "        ";
            $context["label"] = call_user_func_array($this->env->getFilter('humanize')->getCallable(), array((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))));
            // line 13
            echo "    ";
        }
        // line 14
        echo "    <button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">
    ";
        // line 15
        if ((!twig_test_empty((isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon"))))) {
            // line 16
            echo "            ";
            echo $this->env->getExtension('mopa_bootstrap_icon')->renderIcon((isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), ((array_key_exists("icon_inverted", $context)) ? (_twig_default_filter((isset($context["icon_inverted"]) ? $context["icon_inverted"] : $this->getContext($context, "icon_inverted")), false)) : (false)));
            echo "
    ";
        }
        // line 18
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "</button>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 22
    public function block_button_row($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        ob_start();
        // line 24
        echo "        ";
        if ((array_key_exists("button_offset", $context) && (!twig_test_empty((isset($context["button_offset"]) ? $context["button_offset"] : $this->getContext($context, "button_offset")))))) {
            // line 25
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "class" => (isset($context["button_offset"]) ? $context["button_offset"] : $this->getContext($context, "button_offset"))));
            // line 26
            echo "            <div class=\"form-group\">
                <div ";
            // line 27
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : $this->getContext($context, "attrvalue")), "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
                ";
            // line 28
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
            echo "
                </div>
            </div>
        ";
        } else {
            // line 32
            echo "            <div>
                ";
            // line 33
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
            echo "
            </div>
        ";
        }
        // line 36
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 41
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        // line 42
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => (((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")) . " ") . (isset($context["widget_form_control_class"]) ? $context["widget_form_control_class"] : $this->getContext($context, "widget_form_control_class")))));
        // line 43
        echo "    ";
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        echo "
    ";
        // line 44
        if ((isset($context["horizontal"]) ? $context["horizontal"] : $this->getContext($context, "horizontal"))) {
            // line 45
            echo "        ";
            $this->displayBlock("form_message", $context, $blocks);
            echo "
    ";
        }
    }

    // line 49
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 50
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 51
        echo "    ";
        if ((((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) != "hidden") && ((!(null === ((array_key_exists("widget_addon_prepend", $context)) ? (_twig_default_filter((isset($context["widget_addon_prepend"]) ? $context["widget_addon_prepend"] : $this->getContext($context, "widget_addon_prepend")), null)) : (null)))) || (!(null === ((array_key_exists("widget_addon_append", $context)) ? (_twig_default_filter((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : $this->getContext($context, "widget_addon_append")), null)) : (null))))))) {
            // line 52
            echo "    <div class=\"input-group\">
        ";
            // line 53
            if ((!(null === ((array_key_exists("widget_addon_prepend", $context)) ? (_twig_default_filter((isset($context["widget_addon_prepend"]) ? $context["widget_addon_prepend"] : $this->getContext($context, "widget_addon_prepend")), null)) : (null))))) {
                // line 54
                echo "            ";
                $context["widget_addon"] = (isset($context["widget_addon_prepend"]) ? $context["widget_addon_prepend"] : $this->getContext($context, "widget_addon_prepend"));
                // line 55
                echo "            ";
                $this->displayBlock("widget_addon", $context, $blocks);
                echo "
        ";
            }
            // line 57
            echo "    ";
        }
        // line 58
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => (((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")) . " ") . (isset($context["widget_form_control_class"]) ? $context["widget_form_control_class"] : $this->getContext($context, "widget_form_control_class")))));
        // line 59
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        echo "
    ";
        // line 60
        if ((isset($context["horizontal"]) ? $context["horizontal"] : $this->getContext($context, "horizontal"))) {
            // line 61
            echo "            ";
            $this->displayBlock("form_message", $context, $blocks);
            echo "
    ";
        }
        // line 63
        echo "    ";
        if ((((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) != "hidden") && ((!(null === ((array_key_exists("widget_addon_prepend", $context)) ? (_twig_default_filter((isset($context["widget_addon_prepend"]) ? $context["widget_addon_prepend"] : $this->getContext($context, "widget_addon_prepend")), null)) : (null)))) || (!(null === ((array_key_exists("widget_addon_append", $context)) ? (_twig_default_filter((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : $this->getContext($context, "widget_addon_append")), null)) : (null))))))) {
            // line 64
            echo "        ";
            if ((!(null === ((array_key_exists("widget_addon_append", $context)) ? (_twig_default_filter((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : $this->getContext($context, "widget_addon_append")), null)) : (null))))) {
                // line 65
                echo "        ";
                $context["widget_addon"] = (isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : $this->getContext($context, "widget_addon_append"));
                // line 66
                echo "        ";
                $this->displayBlock("widget_addon", $context, $blocks);
                echo "
        ";
            }
            // line 68
            echo "    </div>
    ";
        }
    }

    // line 72
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 73
        ob_start();
        // line 74
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 75
        echo "    ";
        if ((((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) != "hidden") && ((!(null === ((array_key_exists("widget_addon_prepend", $context)) ? (_twig_default_filter((isset($context["widget_addon_prepend"]) ? $context["widget_addon_prepend"] : $this->getContext($context, "widget_addon_prepend")), null)) : (null)))) || (!(null === ((array_key_exists("widget_addon_append", $context)) ? (_twig_default_filter((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : $this->getContext($context, "widget_addon_append")), null)) : (null))))))) {
            // line 76
            echo "    <div class=\"input-group\">
        ";
            // line 77
            if ((!(null === ((array_key_exists("widget_addon_prepend", $context)) ? (_twig_default_filter((isset($context["widget_addon_prepend"]) ? $context["widget_addon_prepend"] : $this->getContext($context, "widget_addon_prepend")), null)) : (null))))) {
                // line 78
                echo "            ";
                $context["widget_addon"] = (isset($context["widget_addon_prepend"]) ? $context["widget_addon_prepend"] : $this->getContext($context, "widget_addon_prepend"));
                // line 79
                echo "            ";
                $this->displayBlock("widget_addon", $context, $blocks);
                echo "
        ";
            }
            // line 81
            echo "    ";
        }
        // line 82
        echo "    ";
        if ((!((array_key_exists("widget_remove_btn", $context)) ? (_twig_default_filter((isset($context["widget_remove_btn"]) ? $context["widget_remove_btn"] : $this->getContext($context, "widget_remove_btn")), null)) : (null)))) {
            // line 83
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")) . " not-removable")));
            // line 84
            echo "    ";
        }
        // line 85
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => (((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")) . " ") . (isset($context["widget_form_control_class"]) ? $context["widget_form_control_class"] : $this->getContext($context, "widget_form_control_class")))));
        // line 86
        echo "    ";
        if (((isset($context["static_text"]) ? $context["static_text"] : $this->getContext($context, "static_text")) === true)) {
            // line 87
            echo "        <p class=\"form-control-static\">";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "</p>
    ";
        } else {
            // line 89
            echo "        ";
            $this->displayParentBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        }
        // line 91
        echo "    ";
        if ((((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) != "hidden") && ((!(null === ((array_key_exists("widget_addon_prepend", $context)) ? (_twig_default_filter((isset($context["widget_addon_prepend"]) ? $context["widget_addon_prepend"] : $this->getContext($context, "widget_addon_prepend")), null)) : (null)))) || (!(null === ((array_key_exists("widget_addon_append", $context)) ? (_twig_default_filter((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : $this->getContext($context, "widget_addon_append")), null)) : (null))))))) {
            // line 92
            echo "        ";
            if ((!(null === ((array_key_exists("widget_addon_append", $context)) ? (_twig_default_filter((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : $this->getContext($context, "widget_addon_append")), null)) : (null))))) {
                // line 93
                echo "        ";
                $context["widget_addon"] = (isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : $this->getContext($context, "widget_addon_append"));
                // line 94
                echo "        ";
                $this->displayBlock("widget_addon", $context, $blocks);
                echo "
        ";
            }
            // line 96
            echo "    </div>
    ";
        }
        // line 98
        echo "    ";
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) != "hidden")) {
            // line 99
            echo "        ";
            $this->displayBlock("form_message", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 104
    public function block_form_widget_compound($context, array $blocks = array())
    {
        // line 105
        ob_start();
        // line 106
        echo "    ";
        if (($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent") == null)) {
            // line 107
            echo "        ";
            if ((isset($context["render_fieldset"]) ? $context["render_fieldset"] : $this->getContext($context, "render_fieldset"))) {
                echo "<fieldset>";
            }
            // line 108
            echo "        ";
            if ((isset($context["show_legend"]) ? $context["show_legend"] : $this->getContext($context, "show_legend"))) {
                $this->displayBlock("form_legend", $context, $blocks);
            }
            // line 109
            echo "    ";
        }
        // line 110
        echo "
    ";
        // line 111
        if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "tabbed")) {
            // line 112
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'tabs');
            echo "
        <div class=\"tab-content\">
    ";
        }
        // line 115
        echo "
    ";
        // line 116
        $this->displayBlock("form_rows_visible", $context, $blocks);
        echo "

    ";
        // line 118
        if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "tabbed")) {
            // line 119
            echo "        </div>
    ";
        }
        // line 121
        echo "
    ";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

    ";
        // line 124
        if (($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent") == null)) {
            // line 125
            echo "        ";
            if ((isset($context["render_fieldset"]) ? $context["render_fieldset"] : $this->getContext($context, "render_fieldset"))) {
                echo "</fieldset>";
            }
            // line 126
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 130
    public function block_form_tabs($context, array $blocks = array())
    {
        // line 131
        if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "tabsView", array(), "any", true, true)) {
            // line 132
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "tabsView"), 'widget');
            echo "
";
        }
    }

    // line 136
    public function block_tabs_widget($context, array $blocks = array())
    {
        // line 137
        ob_start();
        // line 138
        echo "<ul class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "attr"), "class"), "html", null, true);
        echo "\">
    ";
        // line 139
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "tabs"));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 140
            echo "        <li";
            if ($this->getAttribute((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")), "active")) {
                echo " class=\"active\"";
            }
            echo ">
            <a data-toggle=\"tab\" href=\"#";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")), "id"), "html", null, true);
            echo "\">
                ";
            // line 142
            if ($this->getAttribute((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")), "icon")) {
                echo $this->env->getExtension('mopa_bootstrap_icon')->renderIcon($this->getAttribute((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")), "icon"));
            }
            // line 143
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")), "label"), array(), $this->getAttribute((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")), "translation_domain")), "html", null, true);
            echo "
            </a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "</ul>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 151
    public function block_form_tab($context, array $blocks = array())
    {
        // line 152
        echo "    ";
        $context["tab_attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((("tab-pane" . (($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "tab_active")) ? (" active") : (""))) . " ") . (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : (""))), "id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
        // line 153
        echo "    <div";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tab_attr"]) ? $context["tab_attr"] : $this->getContext($context, "tab_attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : $this->getContext($context, "attrvalue")), "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
        ";
        // line 154
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
    </div>
";
    }

    // line 158
    public function block_collection_widget($context, array $blocks = array())
    {
        // line 159
        ob_start();
        // line 160
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 161
            echo "        ";
            $context["prototype_markup"] = $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), 'row');
            // line 162
            echo "        ";
            $context["data_prototype_name"] = (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "form", array(), "any", false, true), "vars", array(), "any", false, true), "prototype", array(), "any", false, true), "vars", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "form", array(), "any", false, true), "vars", array(), "any", false, true), "prototype", array(), "any", false, true), "vars", array(), "any", false, true), "name"), "__name__")) : ("__name__"));
            // line 163
            echo "        ";
            $context["data_prototype_label"] = (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "form", array(), "any", false, true), "vars", array(), "any", false, true), "prototype", array(), "any", false, true), "vars", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "form", array(), "any", false, true), "vars", array(), "any", false, true), "prototype", array(), "any", false, true), "vars", array(), "any", false, true), "label"), "__name__label__")) : ("__name__label__"));
            // line 164
            echo "        ";
            $context["widget_form_group_attr"] = twig_array_merge(twig_array_merge((isset($context["widget_form_group_attr"]) ? $context["widget_form_group_attr"] : $this->getContext($context, "widget_form_group_attr")), array("data-prototype" => (isset($context["prototype_markup"]) ? $context["prototype_markup"] : $this->getContext($context, "prototype_markup")), "data-prototype-name" => (isset($context["data_prototype_name"]) ? $context["data_prototype_name"] : $this->getContext($context, "data_prototype_name")), "data-prototype-label" => (isset($context["data_prototype_label"]) ? $context["data_prototype_label"] : $this->getContext($context, "data_prototype_label")))), (isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
            // line 169
            echo "    ";
        }
        // line 170
        echo "    ";
        // line 171
        echo "\t";
        if ((twig_in_filter("collection", $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "block_prefixes")) && $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true))) {
            // line 172
            echo "\t\t";
            $context["widget_form_group_attr"] = twig_array_merge((isset($context["widget_form_group_attr"]) ? $context["widget_form_group_attr"] : $this->getContext($context, "widget_form_group_attr")), array("class" => (((($this->getAttribute((isset($context["widget_form_group_attr"]) ? $context["widget_form_group_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["widget_form_group_attr"]) ? $context["widget_form_group_attr"] : null), "class"), "row")) : ("row")) . " ") . $this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "class"))));
            // line 173
            echo "\t";
        }
        // line 174
        echo "    ";
        // line 175
        echo "    ";
        $context["widget_form_group_attr"] = twig_array_merge((isset($context["widget_form_group_attr"]) ? $context["widget_form_group_attr"] : $this->getContext($context, "widget_form_group_attr")), array("id" => (("collection" . (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))) . "_form_group"), "class" => ((($this->getAttribute((isset($context["widget_form_group_attr"]) ? $context["widget_form_group_attr"] : $this->getContext($context, "widget_form_group_attr")), "class") . " collection-items ") . (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))) . "_form_group")));
        // line 176
        echo "
    <div ";
        // line 177
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["widget_form_group_attr"]) ? $context["widget_form_group_attr"] : $this->getContext($context, "widget_form_group_attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : $this->getContext($context, "attrvalue")), "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
    ";
        // line 179
        echo "    ";
        if (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "value")) == 0) && array_key_exists("prototype", $context))) {
            // line 180
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["prototype_names"]) ? $context["prototype_names"] : $this->getContext($context, "prototype_names")));
            foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
                // line 181
                echo "            ";
                echo strtr((isset($context["prototype_markup"]) ? $context["prototype_markup"] : $this->getContext($context, "prototype_markup")), array("__name__" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "    ";
        }
        // line 184
        echo "    ";
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 189
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 190
        ob_start();
        // line 191
        echo "    ";
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class"), "")) : (""))));
        // line 192
        echo "    ";
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), "class") . " ") . ((((isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")) != "")) ? ((((((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) ? ("checkbox") : ("radio")) . "-") . (isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")))) : ("")))));
        // line 193
        echo "    ";
        if ((isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
            // line 194
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), (isset($context["horizontal_input_wrapper_class"]) ? $context["horizontal_input_wrapper_class"] : $this->getContext($context, "horizontal_input_wrapper_class")))) : ((isset($context["horizontal_input_wrapper_class"]) ? $context["horizontal_input_wrapper_class"] : $this->getContext($context, "horizontal_input_wrapper_class"))))));
            // line 195
            echo "    ";
        }
        // line 196
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 197
            echo "        ";
            if (((isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")) != "inline")) {
                // line 198
                echo "        <div class=\"";
                echo (((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) ? ("checkbox") : ("radio"));
                echo "\">
        ";
            }
            // line 200
            echo "            <label";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : $this->getContext($context, "attrvalue")), "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
                ";
            // line 201
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'widget', array("horizontal_label_class" => (isset($context["horizontal_label_class"]) ? $context["horizontal_label_class"] : $this->getContext($context, "horizontal_label_class")), "horizontal_input_wrapper_class" => (isset($context["horizontal_input_wrapper_class"]) ? $context["horizontal_input_wrapper_class"] : $this->getContext($context, "horizontal_input_wrapper_class")), "attr" => array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class"), "")) : ("")))));
            echo "
                ";
            // line 202
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "vars"), "label"), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "
            </label>
        ";
            // line 204
            if (((isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")) != "inline")) {
                // line 205
                echo "        </div>
        ";
            }
            // line 207
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 208
        echo "    ";
        $this->displayBlock("form_message", $context, $blocks);
        echo "
    ";
        // line 209
        if ((isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
            // line 210
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 214
    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 215
        ob_start();
        // line 216
        if (((!((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
            // line 217
            echo "    ";
            $context["label"] = call_user_func_array($this->env->getFilter('humanize')->getCallable(), array((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))));
        }
        // line 219
        if ((($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent") != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent"), "vars"), "block_prefixes")))) {
            // line 220
            echo "    <div class=\"checkbox\">
";
        }
        // line 222
        echo "
";
        // line 223
        if (((($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent") != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent"), "vars"), "block_prefixes"))) && (isset($context["label_render"]) ? $context["label_render"] : $this->getContext($context, "label_render")))) {
            // line 224
            echo "    <label ";
            if ((!(isset($context["horizontal"]) ? $context["horizontal"] : $this->getContext($context, "horizontal")))) {
                echo "class=\"checkbox-inline\"";
            }
            echo ">
";
        }
        // line 226
        echo "        <input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo "/>
";
        // line 227
        if ((($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent") != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent"), "vars"), "block_prefixes")))) {
            // line 228
            echo "    ";
            if (((isset($context["label_render"]) ? $context["label_render"] : $this->getContext($context, "label_render")) && twig_in_filter((isset($context["widget_checkbox_label"]) ? $context["widget_checkbox_label"] : $this->getContext($context, "widget_checkbox_label")), array(0 => "both", 1 => "widget")))) {
                // line 229
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "
    </label>
    ";
            }
        }
        // line 233
        if ((($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent") != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent"), "vars"), "block_prefixes")))) {
            // line 234
            echo "    </div>
    ";
            // line 235
            $this->displayBlock("form_message", $context, $blocks);
            echo "
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 240
    public function block_date_widget($context, array $blocks = array())
    {
        // line 241
        ob_start();
        // line 242
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 243
            echo "    ";
            if (array_key_exists("datepicker", $context)) {
                // line 244
                echo "        <div data-provider=\"datepicker\" class=\"input-group date\" data-date=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                echo "\" data-link-field=\"";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "\" data-link-format=\"yyyy-mm-dd\">
            <input ";
                // line 245
                if ((!((isset($context["widget_form_control_class"]) ? $context["widget_form_control_class"] : $this->getContext($context, "widget_form_control_class")) === false))) {
                    echo "class=\"";
                    echo twig_escape_filter($this->env, (isset($context["widget_form_control_class"]) ? $context["widget_form_control_class"] : $this->getContext($context, "widget_form_control_class")), "html", null, true);
                    echo "\" ";
                }
                echo "type=\"text\" ";
                if ((isset($context["read_only"]) ? $context["read_only"] : $this->getContext($context, "read_only"))) {
                    echo " readonly=\"readonly\"";
                }
                if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
                    echo " disabled=\"disabled\"";
                }
                if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                    echo " required=\"required\"";
                }
                echo ">
            <input type=\"hidden\" value=\"";
                // line 246
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                echo "\" ";
                $this->displayBlock("widget_attributes", $context, $blocks);
                echo ">
            <span class=\"input-group-addon\">";
                // line 247
                echo $this->env->getExtension('mopa_bootstrap_icon')->renderIcon("calendar");
                echo "</span>
        </div>
    ";
            } else {
                // line 250
                echo "        ";
                $this->displayBlock("form_widget_simple", $context, $blocks);
                echo "
    ";
            }
        } else {
            // line 253
            echo "    ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "inline")) : ("inline"))));
            // line 254
            echo "    \t<div class=\"row\">
        ";
            // line 255
            echo strtr((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 256
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year"), 'widget', array("attr" => array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class"), "")) : ("")) . "")), "horizontal_input_wrapper_class" => ((array_key_exists("horizontal_input_wrapper_class", $context)) ? (_twig_default_filter((isset($context["horizontal_input_wrapper_class"]) ? $context["horizontal_input_wrapper_class"] : $this->getContext($context, "horizontal_input_wrapper_class")), "col-lg-3")) : ("col-lg-3")))), "{{ month }}" =>             // line 257
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month"), 'widget', array("attr" => array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class"), "")) : ("")) . "")), "horizontal_input_wrapper_class" => ((array_key_exists("horizontal_input_wrapper_class", $context)) ? (_twig_default_filter((isset($context["horizontal_input_wrapper_class"]) ? $context["horizontal_input_wrapper_class"] : $this->getContext($context, "horizontal_input_wrapper_class")), "col-lg-3")) : ("col-lg-3")))), "{{ day }}" =>             // line 258
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day"), 'widget', array("attr" => array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class"), "")) : ("")) . "")), "horizontal_input_wrapper_class" => ((array_key_exists("horizontal_input_wrapper_class", $context)) ? (_twig_default_filter((isset($context["horizontal_input_wrapper_class"]) ? $context["horizontal_input_wrapper_class"] : $this->getContext($context, "horizontal_input_wrapper_class")), "col-lg-3")) : ("col-lg-3"))))));
            // line 259
            echo "
        </div>
    ";
            // line 261
            $this->displayBlock("form_message", $context, $blocks);
            echo "
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 266
    public function block_time_widget($context, array $blocks = array())
    {
        // line 267
        ob_start();
        // line 268
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 269
            echo "    ";
            if (array_key_exists("timepicker", $context)) {
                // line 270
                echo "        <div data-provider=\"timepicker\" class=\"input-group date\" data-date=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                echo "\" data-link-field=\"";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "\" data-link-format=\"hh:ii\">
            <input class=\"form-control\" type=\"text\" ";
                // line 271
                if ((isset($context["read_only"]) ? $context["read_only"] : $this->getContext($context, "read_only"))) {
                    echo " readonly=\"readonly\"";
                }
                if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
                    echo " disabled=\"disabled\"";
                }
                if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                    echo " required=\"required\"";
                }
                echo ">
            <input type=\"hidden\" value=\"";
                // line 272
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                echo "\" ";
                $this->displayBlock("widget_attributes", $context, $blocks);
                echo ">
            <span class=\"input-group-addon\">";
                // line 273
                echo $this->env->getExtension('mopa_bootstrap_icon')->renderIcon("time");
                echo "</span>
        </div>
    ";
            } else {
                // line 276
                echo "        ";
                $this->displayBlock("form_widget_simple", $context, $blocks);
                echo "
    ";
            }
        } else {
            // line 279
            echo "    ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : (""))));
            // line 280
            echo "    ";
            ob_start();
            // line 281
            echo "    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour"), 'widget', array("attr" => array("size" => "1"), "horizontal_input_wrapper_class" => ((array_key_exists("horizontal_input_wrapper_class", $context)) ? (_twig_default_filter((isset($context["horizontal_input_wrapper_class"]) ? $context["horizontal_input_wrapper_class"] : $this->getContext($context, "horizontal_input_wrapper_class")), "col-lg-2")) : ("col-lg-2"))));
            echo "
    ";
            // line 282
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute"), 'widget', array("attr" => array("size" => "1"), "horizontal_input_wrapper_class" => ((array_key_exists("horizontal_input_wrapper_class", $context)) ? (_twig_default_filter((isset($context["horizontal_input_wrapper_class"]) ? $context["horizontal_input_wrapper_class"] : $this->getContext($context, "horizontal_input_wrapper_class")), "col-lg-2")) : ("col-lg-2"))));
            echo "
    ";
            // line 283
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                // line 284
                echo "        :";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second"), 'widget', array("attr" => array("size" => "1"), "horizontal_input_wrapper_class" => ((array_key_exists("horizontal_input_wrapper_class", $context)) ? (_twig_default_filter((isset($context["horizontal_input_wrapper_class"]) ? $context["horizontal_input_wrapper_class"] : $this->getContext($context, "horizontal_input_wrapper_class")), "col-lg-2")) : ("col-lg-2"))));
                echo "
    ";
            }
            // line 286
            echo "    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 287
            echo "    ";
            $this->displayBlock("form_message", $context, $blocks);
            echo "
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 292
    public function block_datetime_widget($context, array $blocks = array())
    {
        // line 293
        ob_start();
        // line 294
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 295
            echo "        ";
            if (array_key_exists("datetimepicker", $context)) {
                // line 296
                echo "            <div data-provider=\"datetimepicker\" class=\"input-group date\" data-date=\"";
                if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "Y-m-d H:i"), "html", null, true);
                }
                echo "\" data-link-field=\"";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "\" data-link-format=\"yyyy-mm-dd hh:ii\">
                <input class=\"form-control\" type=\"text\" ";
                // line 297
                if ((isset($context["read_only"]) ? $context["read_only"] : $this->getContext($context, "read_only"))) {
                    echo " readonly=\"readonly\"";
                }
                if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
                    echo " disabled=\"disabled\"";
                }
                if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                    echo " required=\"required\"";
                }
                echo ">
                <input type=\"hidden\" value=\"";
                // line 298
                if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "Y-m-d H:i"), "html", null, true);
                }
                echo "\" ";
                $this->displayBlock("widget_attributes", $context, $blocks);
                echo ">
                <span class=\"input-group-addon\">";
                // line 299
                echo $this->env->getExtension('mopa_bootstrap_icon')->renderIcon("th");
                echo "</span>
            </div>
        ";
            } else {
                // line 302
                echo "            ";
                $this->displayBlock("form_widget_simple", $context, $blocks);
                echo "
        ";
            }
            // line 304
            echo "    ";
        } else {
            // line 305
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : (""))));
            // line 306
            echo "            <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
                ";
            // line 307
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date"), 'errors');
            echo "
                ";
            // line 308
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time"), 'errors');
            echo "
                ";
            // line 309
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date"), 'widget', array("attr" => array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class"), "")) : (""))), "horizontal_input_wrapper_class" => ((array_key_exists("horizontal_input_wrapper_class", $context)) ? (_twig_default_filter((isset($context["horizontal_input_wrapper_class"]) ? $context["horizontal_input_wrapper_class"] : $this->getContext($context, "horizontal_input_wrapper_class")), "col-lg-3")) : ("col-lg-3"))));
            echo "
                ";
            // line 310
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time"), 'widget', array("attr" => array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class"), "")) : (""))), "horizontal_input_wrapper_class" => ((array_key_exists("horizontal_input_wrapper_class", $context)) ? (_twig_default_filter((isset($context["horizontal_input_wrapper_class"]) ? $context["horizontal_input_wrapper_class"] : $this->getContext($context, "horizontal_input_wrapper_class")), "col-lg-2")) : ("col-lg-2"))));
            echo "
                ";
            // line 311
            $this->displayBlock("form_message", $context, $blocks);
            echo "
            </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 317
    public function block_percent_widget($context, array $blocks = array())
    {
        // line 318
        ob_start();
        // line 319
        echo "    ";
        $context["widget_addon_append"] = twig_array_merge((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : $this->getContext($context, "widget_addon_append")), array("text" => (($this->getAttribute((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : null), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : null), "text"), "%")) : ("%"))));
        // line 320
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 324
    public function block_money_widget($context, array $blocks = array())
    {
        // line 325
        ob_start();
        // line 326
        echo "    ";
        $context["widget_addon_prepend"] = ((((((isset($context["widget_addon_prepend"]) ? $context["widget_addon_prepend"] : $this->getContext($context, "widget_addon_prepend")) != false) || ((isset($context["widget_addon_prepend"]) ? $context["widget_addon_prepend"] : $this->getContext($context, "widget_addon_prepend")) == null)) && ((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")) != "{{ widget }}"))) ? (array("text" => strtr((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")))) : (((array_key_exists("widget_addon_prepend", $context)) ? (_twig_default_filter((isset($context["widget_addon_prepend"]) ? $context["widget_addon_prepend"] : $this->getContext($context, "widget_addon_prepend")), null)) : (null))));
        // line 327
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 331
    public function block_file_widget($context, array $blocks = array())
    {
        // line 332
        ob_start();
        // line 333
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "file")) : ("file"));
        // line 334
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => (((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")) . " ") . (isset($context["widget_form_control_class"]) ? $context["widget_form_control_class"] : $this->getContext($context, "widget_form_control_class")))));
        // line 335
        echo "    ";
        if ((!(null === ((array_key_exists("widget_addon_prepend", $context)) ? (_twig_default_filter((isset($context["widget_addon_prepend"]) ? $context["widget_addon_prepend"] : $this->getContext($context, "widget_addon_prepend")), null)) : (null))))) {
            // line 336
            echo "        ";
            $context["widget_addon"] = (isset($context["widget_addon_prepend"]) ? $context["widget_addon_prepend"] : $this->getContext($context, "widget_addon_prepend"));
            // line 337
            echo "        ";
            $this->displayBlock("widget_addon", $context, $blocks);
            echo "
    ";
        }
        // line 339
        echo "<input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo "/>
";
        // line 340
        if ((((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) != "hidden") && (!(null === (($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : null), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : null), "type"), null)) : (null)))))) {
            // line 341
            echo "    ";
            if ((!(null === ((array_key_exists("widget_addon_append", $context)) ? (_twig_default_filter((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : $this->getContext($context, "widget_addon_append")), null)) : (null))))) {
                // line 342
                echo "        ";
                $context["widget_addon"] = (isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : $this->getContext($context, "widget_addon_append"));
                // line 343
                echo "        ";
                $this->displayBlock("widget_addon", $context, $blocks);
                echo "
    ";
            }
        }
        // line 346
        echo "    ";
        if ((isset($context["horizontal"]) ? $context["horizontal"] : $this->getContext($context, "horizontal"))) {
            // line 347
            echo "        ";
            $this->displayBlock("form_message", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 354
    public function block_form_legend($context, array $blocks = array())
    {
        // line 355
        ob_start();
        // line 356
        echo "    ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 357
            echo "        ";
            $context["label"] = call_user_func_array($this->env->getFilter('humanize')->getCallable(), array((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))));
            // line 358
            echo "    ";
        }
        // line 359
        echo "    <";
        echo twig_escape_filter($this->env, (isset($context["legend_tag"]) ? $context["legend_tag"] : $this->getContext($context, "legend_tag")), "html", null, true);
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "</";
        echo twig_escape_filter($this->env, (isset($context["legend_tag"]) ? $context["legend_tag"] : $this->getContext($context, "legend_tag")), "html", null, true);
        echo ">
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 363
    public function block_form_label($context, array $blocks = array())
    {
        // line 364
        if ((!twig_in_filter("checkbox", (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes"))) || twig_in_filter((isset($context["widget_checkbox_label"]) ? $context["widget_checkbox_label"] : $this->getContext($context, "widget_checkbox_label")), array(0 => "label", 1 => "both")))) {
            // line 365
            ob_start();
            // line 366
            echo "    ";
            if ((!((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false))) {
                // line 367
                echo "        ";
                if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                    // line 368
                    echo "            ";
                    $context["label"] = call_user_func_array($this->env->getFilter('humanize')->getCallable(), array((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))));
                    // line 369
                    echo "        ";
                }
                // line 370
                echo "        ";
                if ((!(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")))) {
                    // line 371
                    echo "            ";
                    $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                    // line 372
                    echo "        ";
                }
                // line 373
                echo "        ";
                $context["label_attr_class"] = "";
                // line 374
                echo "        ";
                if ((isset($context["horizontal"]) ? $context["horizontal"] : $this->getContext($context, "horizontal"))) {
                    // line 375
                    echo "            ";
                    $context["label_attr_class"] = (("control-label " . (isset($context["label_attr_class"]) ? $context["label_attr_class"] : $this->getContext($context, "label_attr_class"))) . (isset($context["horizontal_label_class"]) ? $context["horizontal_label_class"] : $this->getContext($context, "horizontal_label_class")));
                    // line 376
                    echo "        ";
                }
                // line 377
                echo "        ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => ((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class"), "")) : ("")) . " ") . (isset($context["label_attr_class"]) ? $context["label_attr_class"] : $this->getContext($context, "label_attr_class"))) . (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) ? (" required") : (" optional")))));
                // line 378
                echo "        <label";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : $this->getContext($context, "attrvalue")), "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">
        ";
                // line 379
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                // line 380
                $this->displayBlock("label_asterisk", $context, $blocks);
                echo "
        ";
                // line 381
                if (((twig_in_filter("collection", $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "block_prefixes")) && ((array_key_exists("widget_add_btn", $context)) ? (_twig_default_filter((isset($context["widget_add_btn"]) ? $context["widget_add_btn"] : $this->getContext($context, "widget_add_btn")), null)) : (null))) && ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "allow_add") == true))) {
                    // line 382
                    echo "            ";
                    $this->displayBlock("form_widget_add_btn", $context, $blocks);
                    echo "
        ";
                }
                // line 384
                echo "        ";
                if ((isset($context["help_label"]) ? $context["help_label"] : $this->getContext($context, "help_label"))) {
                    // line 385
                    echo "            ";
                    $this->displayBlock("help_label", $context, $blocks);
                    echo "
        ";
                }
                // line 387
                echo "        ";
                if ($this->getAttribute((isset($context["help_label_tooltip"]) ? $context["help_label_tooltip"] : $this->getContext($context, "help_label_tooltip")), "title")) {
                    // line 388
                    echo "            ";
                    $this->displayBlock("help_label_tooltip", $context, $blocks);
                    echo "
        ";
                }
                // line 390
                echo "        ";
                if ($this->getAttribute((isset($context["help_label_popover"]) ? $context["help_label_popover"] : $this->getContext($context, "help_label_popover")), "title")) {
                    // line 391
                    echo "            ";
                    $this->displayBlock("help_label_popover", $context, $blocks);
                    echo "
        ";
                }
                // line 393
                echo "        </label>
    ";
            }
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        }
    }

    // line 399
    public function block_help_label($context, array $blocks = array())
    {
        // line 400
        echo "    <span class=\"help-block\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["help_label"]) ? $context["help_label"] : $this->getContext($context, "help_label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "</span>
";
    }

    // line 403
    public function block_help_label_tooltip($context, array $blocks = array())
    {
        // line 404
        echo "    <span class=\"help-block\">
        <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"";
        // line 405
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["help_label_tooltip"]) ? $context["help_label_tooltip"] : $this->getContext($context, "help_label_tooltip")), "placement"), "html", null, true);
        echo "\" data-title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["help_label_tooltip"]) ? $context["help_label_tooltip"] : $this->getContext($context, "help_label_tooltip")), "title"), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "\">
            ";
        // line 406
        if ((!($this->getAttribute((isset($context["help_label_tooltip"]) ? $context["help_label_tooltip"] : $this->getContext($context, "help_label_tooltip")), "icon") === false))) {
            // line 407
            echo "                ";
            echo $this->env->getExtension('mopa_bootstrap_icon')->renderIcon($this->getAttribute((isset($context["help_label_tooltip"]) ? $context["help_label_tooltip"] : $this->getContext($context, "help_label_tooltip")), "icon"));
            echo "
            ";
        }
        // line 409
        echo "            ";
        if ((!($this->getAttribute((isset($context["help_label_tooltip"]) ? $context["help_label_tooltip"] : $this->getContext($context, "help_label_tooltip")), "text") === null))) {
            // line 410
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["help_label_tooltip"]) ? $context["help_label_tooltip"] : $this->getContext($context, "help_label_tooltip")), "text"), "html", null, true);
            echo "
            ";
        }
        // line 412
        echo "        </a>
    </span>
";
    }

    // line 416
    public function block_help_label_popover($context, array $blocks = array())
    {
        // line 417
        echo "    <span class=\"help-block\">
        <a href=\"#\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"";
        // line 418
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["help_label_popover"]) ? $context["help_label_popover"] : $this->getContext($context, "help_label_popover")), "placement"), "html", null, true);
        echo "\" data-title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["help_label_popover"]) ? $context["help_label_popover"] : $this->getContext($context, "help_label_popover")), "title"), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "\" data-content=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["help_label_popover"]) ? $context["help_label_popover"] : $this->getContext($context, "help_label_popover")), "content"), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "\" >
            ";
        // line 419
        if ((!($this->getAttribute((isset($context["help_label_popover"]) ? $context["help_label_popover"] : $this->getContext($context, "help_label_popover")), "icon") === false))) {
            // line 420
            echo "                ";
            echo $this->env->getExtension('mopa_bootstrap_icon')->renderIcon($this->getAttribute((isset($context["help_label_popover"]) ? $context["help_label_popover"] : $this->getContext($context, "help_label_popover")), "icon"));
            echo "
            ";
        }
        // line 422
        echo "            ";
        if ((!($this->getAttribute((isset($context["help_label_popover"]) ? $context["help_label_popover"] : $this->getContext($context, "help_label_popover")), "text") === null))) {
            // line 423
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["help_label_popover"]) ? $context["help_label_popover"] : $this->getContext($context, "help_label_popover")), "text"), "html", null, true);
            echo "
            ";
        }
        // line 425
        echo "        </a>
    </span>
";
    }

    // line 429
    public function block_form_actions_widget($context, array $blocks = array())
    {
        // line 430
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children"));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 431
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["button"]) ? $context["button"] : $this->getContext($context, "button")), 'widget');
            echo "&nbsp; ";
            // line 432
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 436
    public function block_form_actions_row($context, array $blocks = array())
    {
        // line 437
        echo "    ";
        $this->displayBlock("button_row", $context, $blocks);
        echo "
";
    }

    // line 440
    public function block_form_rows_visible($context, array $blocks = array())
    {
        // line 441
        ob_start();
        // line 442
        echo "    ";
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors')) {
            // line 443
            echo "        <div class=\"symfony-form-errors\">
            ";
            // line 444
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
        </div>
    ";
        }
        // line 447
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 448
            echo "        ";
            if (!twig_in_filter("hidden", $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "vars"), "block_prefixes"))) {
                echo " ";
                // line 449
                echo "            ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'row');
                echo "
        ";
            }
            // line 451
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 455
    public function block_form_row($context, array $blocks = array())
    {
        // line 456
        ob_start();
        // line 457
        echo "    ";
        if (twig_in_filter("tab", $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "block_prefixes"))) {
            // line 458
            echo "        ";
            $this->displayBlock("form_tab", $context, $blocks);
            echo "
    ";
        } else {
            // line 460
            echo "        ";
            $this->displayBlock("widget_form_group_start", $context, $blocks);
            echo "

\t\t";
            // line 462
            $context["show_horizontal_wrapper"] = ((isset($context["horizontal"]) ? $context["horizontal"] : $this->getContext($context, "horizontal")) && (!((!(null === $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent"))) && twig_in_filter("collection", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent"), "vars"), "block_prefixes")))));
            // line 463
            echo "
        ";
            // line 464
            if (((isset($context["horizontal"]) ? $context["horizontal"] : $this->getContext($context, "horizontal")) && (!(isset($context["label_render"]) ? $context["label_render"] : $this->getContext($context, "label_render"))))) {
                // line 465
                echo "            ";
                $context["horizontal_input_wrapper_class"] = (((isset($context["horizontal_input_wrapper_class"]) ? $context["horizontal_input_wrapper_class"] : $this->getContext($context, "horizontal_input_wrapper_class")) . " ") . (isset($context["horizontal_label_offset_class"]) ? $context["horizontal_label_offset_class"] : $this->getContext($context, "horizontal_label_offset_class")));
                // line 466
                echo "        ";
            }
            // line 467
            echo "
\t\t";
            // line 468
            if ((isset($context["show_horizontal_wrapper"]) ? $context["show_horizontal_wrapper"] : $this->getContext($context, "show_horizontal_wrapper"))) {
                // line 469
                echo "        <div class=\"";
                echo twig_escape_filter($this->env, (isset($context["horizontal_input_wrapper_class"]) ? $context["horizontal_input_wrapper_class"] : $this->getContext($context, "horizontal_input_wrapper_class")), "html", null, true);
                echo "\">
\t\t";
            }
            // line 471
            echo "        ";
            echo $this->env->getExtension('translator')->trans((isset($context["widget_prefix"]) ? $context["widget_prefix"] : $this->getContext($context, "widget_prefix")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
            echo " ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget', $context);
            echo " ";
            echo $this->env->getExtension('translator')->trans((isset($context["widget_suffix"]) ? $context["widget_suffix"] : $this->getContext($context, "widget_suffix")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
            echo "

\t\t";
            // line 473
            if ((isset($context["show_horizontal_wrapper"]) ? $context["show_horizontal_wrapper"] : $this->getContext($context, "show_horizontal_wrapper"))) {
                // line 474
                echo "        </div>
        ";
            }
            // line 476
            echo "
        ";
            // line 477
            if (((((!(null === $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent"))) && twig_in_filter("collection", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent"), "vars"), "block_prefixes"))) && ((array_key_exists("widget_remove_btn", $context)) ? (_twig_default_filter((isset($context["widget_remove_btn"]) ? $context["widget_remove_btn"] : $this->getContext($context, "widget_remove_btn")), null)) : (null))) && (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete"), false)) : (false)))) {
                // line 478
                echo "            ";
                $this->displayBlock("form_widget_remove_btn", $context, $blocks);
                echo "
        ";
            }
            // line 480
            $this->displayBlock("widget_form_group_end", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 487
    public function block_form_message($context, array $blocks = array())
    {
        // line 488
        ob_start();
        // line 489
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    ";
        // line 490
        $this->displayBlock("form_help", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 496
    public function block_form_help($context, array $blocks = array())
    {
        // line 497
        ob_start();
        // line 498
        if ((isset($context["help_block"]) ? $context["help_block"] : $this->getContext($context, "help_block"))) {
            echo "<p class=\"help-block\">";
            echo $this->env->getExtension('translator')->trans((isset($context["help_block"]) ? $context["help_block"] : $this->getContext($context, "help_block")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
            echo "</p>";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 502
    public function block_form_widget_add_btn($context, array $blocks = array())
    {
        // line 503
        ob_start();
        // line 504
        echo "    ";
        if (((array_key_exists("widget_add_btn", $context)) ? (_twig_default_filter((isset($context["widget_add_btn"]) ? $context["widget_add_btn"] : $this->getContext($context, "widget_add_btn")), null)) : (null))) {
            // line 505
            echo "        ";
            $context["button_type"] = "add";
            // line 506
            echo "        ";
            $context["button_values"] = (isset($context["widget_add_btn"]) ? $context["widget_add_btn"] : $this->getContext($context, "widget_add_btn"));
            // line 507
            echo "        ";
            $this->displayBlock("collection_button", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 512
    public function block_form_widget_remove_btn($context, array $blocks = array())
    {
        // line 513
        ob_start();
        // line 514
        echo "    ";
        if ((!($this->getAttribute((isset($context["widget_remove_btn"]) ? $context["widget_remove_btn"] : $this->getContext($context, "widget_remove_btn")), "wrapper_div") === false))) {
            // line 515
            echo "        <div class=\"form-group\">
            <div class=\"";
            // line 516
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["widget_remove_btn"]) ? $context["widget_remove_btn"] : $this->getContext($context, "widget_remove_btn")), "wrapper_div"), "class"), "html", null, true);
            echo " col-lg-offset-3\">
    ";
        }
        // line 518
        echo "    ";
        if (((array_key_exists("widget_remove_btn", $context)) ? (_twig_default_filter((isset($context["widget_remove_btn"]) ? $context["widget_remove_btn"] : $this->getContext($context, "widget_remove_btn")), null)) : (null))) {
            // line 519
            echo "    ";
            $context["button_type"] = "remove";
            // line 520
            echo "    ";
            $context["button_values"] = (isset($context["widget_remove_btn"]) ? $context["widget_remove_btn"] : $this->getContext($context, "widget_remove_btn"));
            // line 521
            echo "    ";
            $this->displayBlock("collection_button", $context, $blocks);
            echo "
    ";
        }
        // line 523
        echo "    ";
        if ((!($this->getAttribute((isset($context["widget_remove_btn"]) ? $context["widget_remove_btn"] : $this->getContext($context, "widget_remove_btn")), "wrapper_div") === false))) {
            // line 524
            echo "            </div>
        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 530
    public function block_collection_button($context, array $blocks = array())
    {
        // line 531
        echo "<a ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["button_values"]) ? $context["button_values"] : $this->getContext($context, "button_values")), "attr"));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : $this->getContext($context, "attrvalue")), "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " data-collection-";
        echo twig_escape_filter($this->env, (isset($context["button_type"]) ? $context["button_type"] : $this->getContext($context, "button_type")), "html", null, true);
        echo "-btn=\".";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "id", array(), "array"), "html", null, true);
        echo "_form_group\">
";
        // line 532
        if ((!(null === $this->getAttribute((isset($context["button_values"]) ? $context["button_values"] : $this->getContext($context, "button_values")), "icon")))) {
            // line 533
            echo "    ";
            echo $this->env->getExtension('mopa_bootstrap_icon')->renderIcon($this->getAttribute((isset($context["button_values"]) ? $context["button_values"] : $this->getContext($context, "button_values")), "icon"), (($this->getAttribute((isset($context["button_values"]) ? $context["button_values"] : null), "icon_inverted", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["button_values"]) ? $context["button_values"] : null), "icon_inverted"), false)) : (false)));
            echo "
";
        }
        // line 535
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["button_values"]) ? $context["button_values"] : $this->getContext($context, "button_values")), "label"), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "
</a>

";
    }

    // line 540
    public function block_label_asterisk($context, array $blocks = array())
    {
        // line 541
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            // line 542
            if ((isset($context["render_required_asterisk"]) ? $context["render_required_asterisk"] : $this->getContext($context, "render_required_asterisk"))) {
                echo "&nbsp;<span class=\"asterisk\">*</span>";
            }
        } else {
            // line 544
            if ((isset($context["render_optional_text"]) ? $context["render_optional_text"] : $this->getContext($context, "render_optional_text"))) {
                echo "&nbsp;<span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("(optional)", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "</span>";
            }
        }
    }

    // line 548
    public function block_widget_addon($context, array $blocks = array())
    {
        // line 549
        ob_start();
        // line 550
        $context["widget_addon_icon"] = (($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : null), "icon", array(), "any", true, true)) ? ($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : $this->getContext($context, "widget_addon")), "icon")) : (null));
        // line 551
        $context["widget_addon_icon_inverted"] = (($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : null), "icon_inverted", array(), "any", true, true)) ? ($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : $this->getContext($context, "widget_addon")), "icon_inverted")) : (false));
        // line 552
        echo "    <span class=\"input-group-addon\">";
        echo (((($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : null), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : null), "text"), false)) : (false))) ? ($this->env->getExtension('translator')->trans($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : $this->getContext($context, "widget_addon")), "text"), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))) : ($this->env->getExtension('mopa_bootstrap_icon')->renderIcon((isset($context["widget_addon_icon"]) ? $context["widget_addon_icon"] : $this->getContext($context, "widget_addon_icon")), (isset($context["widget_addon_icon_inverted"]) ? $context["widget_addon_icon_inverted"] : $this->getContext($context, "widget_addon_icon_inverted")))));
        echo "</span>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 558
    public function block_form_errors($context, array $blocks = array())
    {
        // line 559
        ob_start();
        // line 560
        if ((isset($context["error_delay"]) ? $context["error_delay"] : $this->getContext($context, "error_delay"))) {
            // line 561
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
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
                // line 562
                echo "        ";
                if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") == 1)) {
                    // line 563
                    echo "            ";
                    if ($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "set", array(0 => "errors", 1 => (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))), "method")) {
                    }
                    // line 564
                    echo "        ";
                }
                // line 565
                echo "    ";
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
        } else {
            // line 567
            echo "    ";
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
                // line 568
                echo "        ";
                if (($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent") == null)) {
                    // line 569
                    echo "            ";
                    $context["__internal_1e0bf1271a532d64cd5c625445cc7590003bb8094f40a85ca85a82411c2cce5a"] = $this->env->loadTemplate("MopaBootstrapBundle::flash.html.twig");
                    // line 570
                    echo "            ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
                    foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                        // line 571
                        echo "                ";
                        echo $context["__internal_1e0bf1271a532d64cd5c625445cc7590003bb8094f40a85ca85a82411c2cce5a"]->getflash("danger", (((null === $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messagePluralization"))) ? ($this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageTemplate"), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageParameters"), "validators")) : ($this->env->getExtension('translator')->transchoice($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageTemplate"), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messagePluralization"), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageParameters"), "validators"))));
                        // line 576
                        echo "
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 578
                    echo "        ";
                } else {
                    // line 579
                    echo "            <span class=\"help-";
                    $this->displayBlock("error_type", $context, $blocks);
                    echo "\">
            ";
                    // line 580
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
                    foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                        // line 581
                        echo "                ";
                        echo twig_escape_filter($this->env, (((null === $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messagePluralization"))) ? ($this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageTemplate"), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageParameters"), "validators")) : ($this->env->getExtension('translator')->transchoice($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageTemplate"), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messagePluralization"), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageParameters"), "validators"))), "html", null, true);
                        // line 585
                        echo " <br>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 587
                    echo "            </span>
        ";
                }
                // line 589
                echo "    ";
            }
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 596
    public function block_error_type($context, array $blocks = array())
    {
        // line 597
        ob_start();
        // line 598
        if ((isset($context["error_type"]) ? $context["error_type"] : $this->getContext($context, "error_type"))) {
            // line 599
            echo "    ";
            echo twig_escape_filter($this->env, (isset($context["error_type"]) ? $context["error_type"] : $this->getContext($context, "error_type")), "html", null, true);
            echo "
";
        } elseif (($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent") == null)) {
            // line 601
            echo "    ";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "error_type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "error_type"), "inline")) : ("inline")), "html", null, true);
            echo "
";
        } else {
            // line 603
            echo "    block
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 610
    public function block_widget_form_group_start($context, array $blocks = array())
    {
        // line 611
        if ((((array_key_exists("widget_form_group", $context)) ? (_twig_default_filter((isset($context["widget_form_group"]) ? $context["widget_form_group"] : $this->getContext($context, "widget_form_group")), false)) : (false)) || ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent") == null))) {
            // line 612
            echo "    ";
            if (((!(null === $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent"))) && twig_in_filter("collection", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent"), "vars"), "block_prefixes")))) {
                echo " ";
                // line 613
                echo "        ";
                if ((!(isset($context["omit_collection_item"]) ? $context["omit_collection_item"] : $this->getContext($context, "omit_collection_item")))) {
                    // line 614
                    echo "            ";
                    // line 615
                    echo "        \t";
                    $context["widget_form_group_attr"] = twig_array_merge((isset($context["widget_form_group_attr"]) ? $context["widget_form_group_attr"] : $this->getContext($context, "widget_form_group_attr")), array("class" => "collection-item"));
                    // line 616
                    echo "        ";
                }
                // line 617
                echo "    ";
            }
            // line 618
            echo "    ";
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
                // line 619
                echo "\t    ";
                // line 620
                echo "\t    ";
                $context["widget_form_group_attr"] = twig_array_merge((isset($context["widget_form_group_attr"]) ? $context["widget_form_group_attr"] : $this->getContext($context, "widget_form_group_attr")), array("class" => ((($this->getAttribute((isset($context["widget_form_group_attr"]) ? $context["widget_form_group_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["widget_form_group_attr"]) ? $context["widget_form_group_attr"] : null), "class"), "")) : ("")) . " has-error")));
                // line 621
                echo "    ";
            }
            // line 622
            echo "    ";
            if (($this->getAttribute((isset($context["help_widget_popover"]) ? $context["help_widget_popover"] : $this->getContext($context, "help_widget_popover")), "selector") === null)) {
                // line 623
                echo "        ";
                $context["help_widget_popover"] = twig_array_merge((isset($context["help_widget_popover"]) ? $context["help_widget_popover"] : $this->getContext($context, "help_widget_popover")), array("selector" => ("#" . (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))));
                // line 624
                echo "    ";
            }
            // line 625
            echo "    <div";
            if ((!($this->getAttribute((isset($context["help_widget_popover"]) ? $context["help_widget_popover"] : $this->getContext($context, "help_widget_popover")), "title") === null))) {
                $this->displayBlock("help_widget_popover", $context, $blocks);
            }
            echo " ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["widget_form_group_attr"]) ? $context["widget_form_group_attr"] : $this->getContext($context, "widget_form_group_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : $this->getContext($context, "attrvalue")), "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
    ";
            // line 627
            echo "    ";
            if (((((twig_length_filter($this->env, (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form"))) > 0) && ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent") != null)) && !twig_in_filter("field", $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "block_prefixes"))) && !twig_in_filter("date", $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "block_prefixes")))) {
                // line 630
                echo "        ";
                if ((isset($context["show_child_legend"]) ? $context["show_child_legend"] : $this->getContext($context, "show_child_legend"))) {
                    // line 631
                    echo "            ";
                    $this->displayBlock("form_legend", $context, $blocks);
                    echo "
        ";
                } elseif ((isset($context["label_render"]) ? $context["label_render"] : $this->getContext($context, "label_render"))) {
                    // line 633
                    echo "            ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
                    echo "
        ";
                } else {
                    // line 635
                    echo "        ";
                }
                // line 636
                echo "    ";
            } else {
                // line 637
                echo "        ";
                if ((isset($context["label_render"]) ? $context["label_render"] : $this->getContext($context, "label_render"))) {
                    // line 638
                    echo "            ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
                    echo "
        ";
                }
                // line 640
                echo "    ";
            }
        } else {
            // line 642
            echo "    ";
            if ((isset($context["label_render"]) ? $context["label_render"] : $this->getContext($context, "label_render"))) {
                // line 643
                echo "        ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
                echo "
    ";
            }
        }
    }

    // line 648
    public function block_help_widget_popover($context, array $blocks = array())
    {
        // line 649
        echo " ";
        ob_start();
        // line 650
        echo " ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["help_widget_popover"]) ? $context["help_widget_popover"] : $this->getContext($context, "help_widget_popover")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 651
            echo " data-";
            echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["attrvalue"]) ? $context["attrvalue"] : $this->getContext($context, "attrvalue")), array(), ((array_key_exists("domain", $context)) ? (_twig_default_filter((isset($context["domain"]) ? $context["domain"] : $this->getContext($context, "domain")), "messages")) : ("messages"))), "html", null, true);
            echo "\"
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 653
        echo " ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 656
    public function block_widget_form_group_end($context, array $blocks = array())
    {
        // line 657
        ob_start();
        // line 658
        if ((((array_key_exists("widget_form_group", $context)) ? (_twig_default_filter((isset($context["widget_form_group"]) ? $context["widget_form_group"] : $this->getContext($context, "widget_form_group")), false)) : (false)) || ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent") == null))) {
            // line 659
            echo "    </div>
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "MopaBootstrapBundle:Form:fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1883 => 659,  1881 => 658,  1879 => 657,  1876 => 656,  1871 => 653,  1860 => 651,  1855 => 650,  1852 => 649,  1849 => 648,  1840 => 643,  1837 => 642,  1833 => 640,  1827 => 638,  1824 => 637,  1821 => 636,  1818 => 635,  1812 => 633,  1806 => 631,  1803 => 630,  1800 => 627,  1780 => 625,  1777 => 624,  1774 => 623,  1771 => 622,  1768 => 621,  1765 => 620,  1763 => 619,  1760 => 618,  1757 => 617,  1754 => 616,  1751 => 615,  1749 => 614,  1746 => 613,  1742 => 612,  1740 => 611,  1737 => 610,  1730 => 603,  1724 => 601,  1718 => 599,  1716 => 598,  1714 => 597,  1711 => 596,  1704 => 589,  1700 => 587,  1693 => 585,  1690 => 581,  1686 => 580,  1681 => 579,  1678 => 578,  1671 => 576,  1668 => 571,  1663 => 570,  1660 => 569,  1657 => 568,  1654 => 567,  1639 => 565,  1636 => 564,  1632 => 563,  1629 => 562,  1611 => 561,  1609 => 560,  1607 => 559,  1604 => 558,  1596 => 552,  1594 => 551,  1592 => 550,  1590 => 549,  1587 => 548,  1578 => 544,  1573 => 542,  1571 => 541,  1568 => 540,  1560 => 535,  1554 => 533,  1552 => 532,  1532 => 531,  1529 => 530,  1521 => 524,  1518 => 523,  1512 => 521,  1509 => 520,  1506 => 519,  1503 => 518,  1498 => 516,  1495 => 515,  1492 => 514,  1490 => 513,  1487 => 512,  1478 => 507,  1475 => 506,  1472 => 505,  1469 => 504,  1467 => 503,  1464 => 502,  1455 => 498,  1453 => 497,  1450 => 496,  1443 => 490,  1438 => 489,  1436 => 488,  1433 => 487,  1425 => 480,  1419 => 478,  1417 => 477,  1414 => 476,  1410 => 474,  1408 => 473,  1398 => 471,  1392 => 469,  1390 => 468,  1387 => 467,  1384 => 466,  1381 => 465,  1379 => 464,  1376 => 463,  1374 => 462,  1368 => 460,  1362 => 458,  1359 => 457,  1357 => 456,  1354 => 455,  1345 => 451,  1339 => 449,  1335 => 448,  1330 => 447,  1324 => 444,  1321 => 443,  1318 => 442,  1316 => 441,  1313 => 440,  1306 => 437,  1303 => 436,  1295 => 432,  1291 => 431,  1286 => 430,  1283 => 429,  1277 => 425,  1271 => 423,  1268 => 422,  1262 => 420,  1260 => 419,  1252 => 418,  1249 => 417,  1246 => 416,  1240 => 412,  1234 => 410,  1231 => 409,  1225 => 407,  1223 => 406,  1217 => 405,  1214 => 404,  1211 => 403,  1204 => 400,  1201 => 399,  1193 => 393,  1187 => 391,  1184 => 390,  1178 => 388,  1175 => 387,  1169 => 385,  1166 => 384,  1160 => 382,  1158 => 381,  1154 => 380,  1152 => 379,  1136 => 378,  1133 => 377,  1130 => 376,  1127 => 375,  1124 => 374,  1121 => 373,  1118 => 372,  1115 => 371,  1112 => 370,  1109 => 369,  1106 => 368,  1103 => 367,  1100 => 366,  1098 => 365,  1096 => 364,  1093 => 363,  1081 => 359,  1078 => 358,  1075 => 357,  1072 => 356,  1070 => 355,  1067 => 354,  1058 => 347,  1055 => 346,  1048 => 343,  1045 => 342,  1042 => 341,  1040 => 340,  1033 => 339,  1027 => 337,  1024 => 336,  1021 => 335,  1019 => 334,  1017 => 333,  1015 => 332,  1012 => 331,  1004 => 327,  1001 => 326,  999 => 325,  996 => 324,  988 => 320,  985 => 319,  983 => 318,  980 => 317,  971 => 311,  967 => 310,  963 => 309,  959 => 308,  955 => 307,  950 => 306,  947 => 305,  944 => 304,  938 => 302,  932 => 299,  924 => 298,  912 => 297,  903 => 296,  900 => 295,  897 => 294,  895 => 293,  892 => 292,  883 => 287,  880 => 286,  874 => 284,  872 => 283,  868 => 282,  863 => 281,  860 => 280,  857 => 279,  850 => 276,  844 => 273,  838 => 272,  826 => 271,  819 => 270,  816 => 269,  814 => 268,  812 => 267,  809 => 266,  801 => 261,  797 => 259,  795 => 258,  794 => 257,  793 => 256,  792 => 255,  789 => 254,  786 => 253,  779 => 250,  773 => 247,  767 => 246,  749 => 245,  742 => 244,  739 => 243,  737 => 242,  735 => 241,  732 => 240,  724 => 235,  721 => 234,  719 => 233,  711 => 229,  708 => 228,  706 => 227,  693 => 226,  685 => 224,  683 => 223,  680 => 222,  676 => 220,  674 => 219,  670 => 217,  668 => 216,  666 => 215,  663 => 214,  657 => 210,  655 => 209,  650 => 208,  644 => 207,  640 => 205,  638 => 204,  633 => 202,  629 => 201,  613 => 200,  607 => 198,  604 => 197,  599 => 196,  596 => 195,  593 => 194,  590 => 193,  587 => 192,  584 => 191,  582 => 190,  579 => 189,  570 => 184,  567 => 183,  558 => 181,  553 => 180,  550 => 179,  535 => 177,  532 => 176,  529 => 175,  527 => 174,  524 => 173,  521 => 172,  518 => 171,  516 => 170,  513 => 169,  510 => 164,  507 => 163,  504 => 162,  501 => 161,  498 => 160,  496 => 159,  493 => 158,  486 => 154,  470 => 153,  467 => 152,  464 => 151,  458 => 147,  447 => 143,  443 => 142,  439 => 141,  432 => 140,  428 => 139,  421 => 137,  411 => 132,  400 => 126,  388 => 122,  364 => 112,  359 => 110,  356 => 109,  346 => 107,  343 => 106,  338 => 104,  329 => 99,  326 => 98,  316 => 94,  301 => 89,  286 => 84,  271 => 79,  266 => 77,  255 => 73,  237 => 65,  225 => 61,  195 => 51,  174 => 43,  129 => 26,  70 => 5,  233 => 47,  211 => 41,  207 => 40,  198 => 52,  190 => 34,  126 => 25,  104 => 15,  418 => 136,  405 => 142,  395 => 125,  389 => 158,  378 => 151,  361 => 137,  358 => 136,  351 => 108,  348 => 132,  339 => 136,  333 => 132,  330 => 131,  325 => 128,  315 => 122,  308 => 119,  302 => 117,  299 => 116,  293 => 112,  290 => 111,  284 => 98,  280 => 82,  277 => 81,  260 => 75,  257 => 74,  250 => 51,  222 => 98,  206 => 55,  200 => 91,  191 => 88,  188 => 87,  185 => 85,  170 => 80,  167 => 79,  155 => 74,  150 => 71,  134 => 59,  97 => 47,  53 => 14,  445 => 126,  441 => 115,  438 => 114,  424 => 145,  422 => 110,  419 => 109,  415 => 107,  412 => 145,  406 => 130,  401 => 101,  390 => 96,  385 => 121,  382 => 92,  376 => 149,  371 => 115,  363 => 78,  353 => 82,  349 => 80,  347 => 77,  344 => 140,  336 => 135,  334 => 75,  331 => 74,  328 => 73,  324 => 71,  317 => 67,  313 => 93,  310 => 92,  307 => 91,  295 => 87,  292 => 86,  289 => 85,  279 => 54,  276 => 53,  263 => 76,  259 => 104,  256 => 52,  251 => 99,  249 => 96,  244 => 111,  239 => 90,  236 => 48,  234 => 64,  231 => 63,  226 => 62,  223 => 60,  218 => 59,  215 => 58,  212 => 57,  197 => 90,  194 => 89,  192 => 50,  184 => 50,  181 => 45,  178 => 46,  165 => 39,  161 => 35,  152 => 26,  148 => 30,  146 => 70,  137 => 62,  127 => 36,  114 => 31,  90 => 5,  84 => 128,  77 => 40,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 116,  423 => 138,  413 => 134,  409 => 131,  407 => 144,  402 => 141,  398 => 100,  393 => 124,  387 => 122,  384 => 121,  381 => 119,  379 => 118,  374 => 116,  368 => 140,  365 => 111,  362 => 111,  360 => 77,  355 => 85,  341 => 105,  337 => 103,  322 => 96,  314 => 99,  312 => 121,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 83,  278 => 86,  268 => 78,  264 => 84,  258 => 81,  252 => 72,  247 => 120,  241 => 49,  229 => 101,  220 => 43,  214 => 42,  177 => 65,  169 => 60,  140 => 22,  132 => 27,  128 => 57,  107 => 19,  61 => 13,  273 => 96,  269 => 94,  254 => 100,  243 => 88,  240 => 66,  238 => 105,  235 => 103,  230 => 46,  227 => 45,  224 => 71,  221 => 56,  219 => 76,  217 => 75,  208 => 68,  204 => 39,  179 => 44,  159 => 61,  143 => 23,  135 => 13,  119 => 42,  102 => 32,  71 => 19,  67 => 4,  63 => 7,  59 => 17,  38 => 6,  94 => 14,  89 => 20,  85 => 11,  75 => 11,  68 => 14,  56 => 4,  87 => 14,  21 => 2,  26 => 6,  93 => 6,  88 => 12,  78 => 21,  46 => 7,  27 => 1,  44 => 4,  31 => 5,  28 => 3,  201 => 53,  196 => 36,  183 => 82,  171 => 42,  166 => 71,  163 => 36,  158 => 28,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 33,  117 => 22,  105 => 12,  91 => 13,  62 => 9,  49 => 19,  24 => 4,  25 => 3,  19 => 13,  79 => 41,  72 => 43,  69 => 9,  47 => 9,  40 => 8,  37 => 10,  22 => 32,  246 => 68,  157 => 33,  145 => 46,  139 => 18,  131 => 58,  123 => 24,  120 => 23,  115 => 16,  111 => 37,  108 => 36,  101 => 15,  98 => 9,  96 => 31,  83 => 10,  74 => 45,  66 => 28,  55 => 15,  52 => 2,  50 => 1,  43 => 2,  41 => 3,  35 => 5,  32 => 4,  29 => 3,  209 => 94,  203 => 54,  199 => 67,  193 => 35,  189 => 49,  187 => 51,  182 => 66,  176 => 33,  173 => 43,  168 => 41,  164 => 30,  162 => 57,  154 => 32,  149 => 25,  147 => 28,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 56,  122 => 43,  116 => 41,  112 => 52,  109 => 18,  106 => 50,  103 => 16,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 42,  80 => 9,  73 => 6,  64 => 38,  60 => 6,  57 => 5,  54 => 3,  51 => 14,  48 => 13,  45 => 17,  42 => 8,  39 => 7,  36 => 5,  33 => 4,  30 => 7,);
    }
}
