<?php

/* SonataAdminBundle:CRUD:base_list.html.twig */
class __TwigTemplate_f1a3b8c1452b6f5825fc729fdd2090dcd977e0f6478572cc59c0fcebe5147f48 extends Twig_Template
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
        echo "    <li>";
        $this->env->loadTemplate("SonataAdminBundle:Core:create_button.html.twig")->display($context);
        echo "</li>
";
    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : null)), "method"), array("currentClass" => "active"), "list");
    }

    // line 21
    public function block_list_table($context, array $blocks = array())
    {
        // line 22
        echo "    <div class=\"box box-primary\">
        <div class=\"box-body table-responsive no-padding\">
            ";
        // line 24
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.top", array("admin" => (isset($context["admin"]) ? $context["admin"] : null))));
        echo "

            ";
        // line 26
        $this->displayBlock('list_header', $context, $blocks);
        // line 27
        echo "
            ";
        // line 28
        $context["batchactions"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "batchactions");
        // line 29
        echo "            ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "results")) > 0)) {
            // line 30
            echo "                ";
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "batch"), "method")) {
                // line 31
                echo "                <form action=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "batch", 1 => array("filter" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "filterParameters"))), "method"), "html", null, true);
                echo "\" method=\"POST\" >
                    <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
                // line 32
                echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
                echo "\">
                ";
            }
            // line 34
            echo "                    <table class=\"table table-bordered table-striped\">
                        ";
            // line 35
            $this->displayBlock('table_header', $context, $blocks);
            // line 71
            echo "
                        ";
            // line 72
            $this->displayBlock('table_body', $context, $blocks);
            // line 81
            echo "
                        ";
            // line 82
            $this->displayBlock('table_footer', $context, $blocks);
            // line 170
            echo "                    </table>
                ";
            // line 171
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "batch"), "method")) {
                // line 172
                echo "                </form>
                ";
            }
            // line 174
            echo "            ";
        } else {
            // line 175
            echo "                <div class=\"callout callout-info\">
                    ";
            // line 176
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_result", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 179
        echo "
            ";
        // line 180
        $this->displayBlock('list_footer', $context, $blocks);
        // line 181
        echo "
            ";
        // line 182
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.bottom", array("admin" => (isset($context["admin"]) ? $context["admin"] : null))));
        echo "


        </div>
    </div>
";
    }

    // line 26
    public function block_list_header($context, array $blocks = array())
    {
    }

    // line 35
    public function block_table_header($context, array $blocks = array())
    {
        // line 36
        echo "                            <thead>
                                <tr class=\"sonata-ba-list-field-header\">
                                    ";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list"), "elements"));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 39
            echo "                                        ";
            if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "batch"), "method") && ($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "getOption", array(0 => "code"), "method") == "_batch")) && (twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : null)) > 0))) {
                // line 40
                echo "                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-batch\">
                                              <input type=\"checkbox\" id=\"list_batch_checkbox\">
                                            </th>
                                        ";
            } elseif (($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "getOption", array(0 => "code"), "method") == "_select")) {
                // line 44
                echo "                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-select\"></th>
                                        ";
            } elseif ((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "name") == "_action") && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "isXmlHttpRequest"))) {
                // line 46
                echo "                                            ";
                // line 47
                echo "                                        ";
            } elseif ((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "getOption", array(0 => "ajax_hidden"), "method") == true) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "isXmlHttpRequest"))) {
                // line 48
                echo "                                            ";
                // line 49
                echo "                                        ";
            } else {
                // line 50
                echo "                                            ";
                $context["sortable"] = false;
                // line 51
                echo "                                            ";
                if (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "sortable", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options"), "sortable"))) {
                    // line 52
                    echo "                                                ";
                    $context["sortable"] = true;
                    // line 53
                    echo "                                                ";
                    $context["sort_parameters"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modelmanager"), "sortparameters", array(0 => (isset($context["field_description"]) ? $context["field_description"] : null), 1 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid")), "method");
                    // line 54
                    echo "                                                ";
                    $context["current"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "values"), "_sort_by") == (isset($context["field_description"]) ? $context["field_description"] : null)) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "values"), "_sort_by"), "fieldName") == $this->getAttribute($this->getAttribute((isset($context["sort_parameters"]) ? $context["sort_parameters"] : null), "filter"), "_sort_by")));
                    // line 55
                    echo "                                                ";
                    $context["sort_active_class"] = (((isset($context["current"]) ? $context["current"] : null)) ? ("sonata-ba-list-field-order-active") : (""));
                    // line 56
                    echo "                                                ";
                    $context["sort_by"] = (((isset($context["current"]) ? $context["current"] : null)) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "values"), "_sort_order")) : ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options"), "_sort_order")));
                    // line 57
                    echo "                                            ";
                }
                // line 58
                echo "
                                            ";
                // line 59
                ob_start();
                // line 60
                echo "                                                <th class=\"sonata-ba-list-field-header-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "type"), "html", null, true);
                echo " ";
                if ((isset($context["sortable"]) ? $context["sortable"] : null)) {
                    echo " sonata-ba-list-field-header-order-";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["sort_by"]) ? $context["sort_by"] : null)), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["sort_active_class"]) ? $context["sort_active_class"] : null), "html", null, true);
                }
                echo "\">
                                                    ";
                // line 61
                if ((isset($context["sortable"]) ? $context["sortable"] : null)) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list", 1 => (isset($context["sort_parameters"]) ? $context["sort_parameters"] : null)), "method"), "html", null, true);
                    echo "\">";
                }
                // line 62
                echo "                                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "trans", array(0 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "label"), 1 => array(), 2 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "translationDomain")), "method"), "html", null, true);
                echo "
                                                    ";
                // line 63
                if ((isset($context["sortable"]) ? $context["sortable"] : null)) {
                    echo "</a>";
                }
                // line 64
                echo "                                                </th>
                                            ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 66
                echo "                                        ";
            }
            // line 67
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                                </tr>
                            </thead>
                        ";
    }

    // line 72
    public function block_table_body($context, array $blocks = array())
    {
        // line 73
        echo "                            <tbody>
                                ";
        // line 74
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "results"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 75
            echo "                                    <tr>
                                        ";
            // line 76
            $template = $this->env->resolveTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getTemplate", array(0 => "inner_list_row"), "method"));
            $template->display($context);
            // line 77
            echo "                                    </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "                            </tbody>
                        ";
    }

    // line 82
    public function block_table_footer($context, array $blocks = array())
    {
        // line 83
        echo "                            <tr>
                                <th colspan=\"";
        // line 84
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list"), "elements")) - (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "isXmlHttpRequest")) ? (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list"), "has", array(0 => "_action"), "method") + $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list"), "has", array(0 => "batch"), "method"))) : (0))), "html", null, true);
        echo "\">
                                    <div class=\"form-inline\">
                                        ";
        // line 86
        if ((!$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "isXmlHttpRequest"))) {
            // line 87
            echo "                                            ";
            if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "batch"), "method") && (twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : null)) > 0))) {
                // line 88
                echo "                                                ";
                $this->displayBlock('batch', $context, $blocks);
                // line 129
                echo "                                            ";
            }
            // line 130
            echo "
                                            <div class=\"pull-right\">
                                                ";
            // line 132
            if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "export"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "EXPORT"), "method")) && twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getExportFormats", array(), "method")))) {
                // line 133
                echo "                                                    <div class=\"btn-group\">
                                                        <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                                                            <i class=\"glyphicon glyphicon-export\"></i>
                                                            ";
                // line 136
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_export_download", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                                                            <span class=\"caret\"></span>
                                                        </button>
                                                        <ul class=\"dropdown-menu\">
                                                            ";
                // line 140
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getExportFormats", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
                    // line 141
                    echo "                                                                <li>
                                                                    <a href=\"";
                    // line 142
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "export", 1 => ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), 1 => 0), "method") + array("format" => (isset($context["format"]) ? $context["format"] : null)))), "method"), "html", null, true);
                    echo "\">
                                                                        <i class=\"glyphicon glyphicon-download\"></i>
                                                                        ";
                    // line 144
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["format"]) ? $context["format"] : null)), "html", null, true);
                    echo "
                                                                    </a>
                                                                <li>
                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['format'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 148
                echo "                                                        </ul>
                                                    </div>

                                                    &nbsp;-&nbsp;
                                                ";
            }
            // line 153
            echo "
                                                ";
            // line 154
            $this->displayBlock('pager_results', $context, $blocks);
            // line 157
            echo "                                            </div>
                                        ";
        }
        // line 159
        echo "                                    </div>
                                </th>
                            </tr>

                            ";
        // line 163
        $this->displayBlock('pager_links', $context, $blocks);
        // line 168
        echo "
                        ";
    }

    // line 88
    public function block_batch($context, array $blocks = array())
    {
        // line 89
        echo "                                                    <script>
                                                        ";
        // line 90
        $this->displayBlock('batch_javascript', $context, $blocks);
        // line 111
        echo "                                                    </script>

                                                    ";
        // line 113
        $this->displayBlock('batch_actions', $context, $blocks);
        // line 126
        echo "
                                                    <input type=\"submit\" class=\"btn btn-small btn-primary\" value=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_batch", array(), "SonataAdminBundle"), "html", null, true);
        echo "\">
                                                ";
    }

    // line 90
    public function block_batch_javascript($context, array $blocks = array())
    {
        // line 91
        echo "                                                            jQuery(document).ready(function (\$) {
                                                                \$('#list_batch_checkbox').on('ifChanged', function () {
                                                                    \$(this)
                                                                        .closest('table')
                                                                        .find('td.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                                        .iCheck(\$(this).is(':checked') ? 'check' : 'uncheck')
                                                                    ;
                                                                });

                                                                \$('td.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                                    .on('ifChanged', function () {
                                                                        \$(this)
                                                                            .closest('tr')
                                                                            .toggleClass('sonata-ba-list-row-selected', \$(this).is(':checked'))
                                                                        ;
                                                                    })
                                                                    .trigger('ifChanged')
                                                                ;
                                                            });
                                                        ";
    }

    // line 113
    public function block_batch_actions($context, array $blocks = array())
    {
        // line 114
        echo "                                                        <label class=\"checkbox\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid"), "html", null, true);
        echo "_all_elements\">
                                                            <input type=\"checkbox\" name=\"all_elements\" id=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid"), "html", null, true);
        echo "_all_elements\">
                                                            ";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("all_elements", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                                                             (";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "nbresults"), "html", null, true);
        echo ")
                                                        </label>

                                                        <select name=\"action\" style=\"width: auto; height: auto\">
                                                            ";
        // line 121
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["batchactions"]) ? $context["batchactions"] : null));
        foreach ($context['_seq'] as $context["action"] => $context["options"]) {
            // line 122
            echo "                                                                <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "label"), "html", null, true);
            echo "</option>
                                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['action'], $context['options'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "                                                        </select>
                                                    ";
    }

    // line 154
    public function block_pager_results($context, array $blocks = array())
    {
        // line 155
        echo "                                                    ";
        $template = $this->env->resolveTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getTemplate", array(0 => "pager_results"), "method"));
        $template->display($context);
        // line 156
        echo "                                                ";
    }

    // line 163
    public function block_pager_links($context, array $blocks = array())
    {
        // line 164
        echo "                                ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "haveToPaginate", array(), "method")) {
            // line 165
            echo "                                    ";
            $template = $this->env->resolveTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getTemplate", array(0 => "pager_links"), "method"));
            $template->display($context);
            // line 166
            echo "                                ";
        }
        // line 167
        echo "                            ";
    }

    // line 180
    public function block_list_footer($context, array $blocks = array())
    {
    }

    // line 189
    public function block_list_filters($context, array $blocks = array())
    {
        // line 190
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "filters")) {
            // line 191
            echo "        ";
            $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getTemplate", array(0 => "filter"), "method")));
            // line 192
            echo "        <div class=\"box box-primary\">
            <div class=\"box-header\">
                <h4 class=\"box-title filter_legend ";
            // line 194
            echo (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "hasActiveFilters")) ? ("active") : ("inactive"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_filters", array(), "SonataAdminBundle"), "html", null, true);
            echo "</h4>
            </div>

            <div class=\"box-body\">
                <form class=\"sonata-filter-form ";
            // line 198
            echo ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isChild") && (1 == twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "filters"))))) ? ("hide") : (""));
            echo "\" action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\" method=\"GET\" role=\"form\">
                    ";
            // line 199
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
            echo "
                        <div class=\"filter_container ";
            // line 200
            echo (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "hasActiveFilters")) ? ("active") : ("inactive"));
            echo "\">
                            ";
            // line 201
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "filters"));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 202
                echo "                                <div class=\"form-group\">
                                    <label for=\"";
                // line 203
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children"), $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "formName"), array(), "array"), "children"), "value", array(), "array"), "vars"), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "trans", array(0 => $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "label"), 1 => array(), 2 => $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "translationDomain")), "method"), "html", null, true);
                echo "</label>
                                    ";
                // line 204
                $context["attr"] = (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array(), "any", false, true), $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "formName"), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array(), "any", false, true), $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "formName"), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr"), array())) : (array()));
                // line 205
                echo "                                    ";
                $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")) . " sonata-filter-option"))));
                // line 206
                echo "
                                    ";
                // line 207
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children"), $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "formName"), array(), "array"), "children"), "type", array(), "array"), 'widget', array("attr" => (isset($context["attr"]) ? $context["attr"] : null)));
                echo "

                                    ";
                // line 209
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children"), $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "formName"), array(), "array"), "children"), "value", array(), "array"), 'widget');
                echo "
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 212
            echo "
                            <input type=\"hidden\" name=\"filter[_page]\" id=\"filter__page\" value=\"1\">

                            ";
            // line 215
            $context["foo"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children"), "_page", array(), "array"), "setRendered", array(), "method");
            // line 216
            echo "                            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
            echo "

                            <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa fa-filter\"></i> ";
            // line 218
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "</button>

                            <a class=\"btn btn-default\" href=\"";
            // line 220
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list", 1 => array("filters" => "reset")), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_reset_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
                        </div>

                        ";
            // line 223
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "persistentParameters"));
            foreach ($context['_seq'] as $context["paramKey"] => $context["paramValue"]) {
                // line 224
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
            // line 226
            echo "                </form>
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
        return array (  624 => 224,  620 => 223,  612 => 220,  601 => 216,  594 => 212,  585 => 209,  580 => 207,  577 => 206,  574 => 205,  572 => 204,  566 => 203,  563 => 202,  559 => 201,  551 => 199,  545 => 198,  536 => 194,  526 => 190,  523 => 189,  514 => 167,  511 => 166,  497 => 156,  485 => 124,  463 => 117,  455 => 115,  410 => 113,  404 => 90,  391 => 163,  369 => 148,  354 => 142,  340 => 136,  320 => 87,  318 => 86,  261 => 73,  321 => 100,  306 => 95,  303 => 94,  300 => 93,  287 => 77,  275 => 86,  12 => 36,  145 => 54,  327 => 102,  323 => 88,  319 => 124,  265 => 106,  262 => 81,  228 => 88,  213 => 82,  118 => 46,  110 => 172,  23 => 27,  20 => 1,  270 => 84,  180 => 49,  175 => 47,  172 => 51,  160 => 39,  113 => 39,  100 => 81,  65 => 22,  37 => 24,  58 => 22,  34 => 15,  1402 => 417,  1400 => 416,  1394 => 414,  1385 => 413,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1341 => 397,  1336 => 395,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1297 => 381,  1287 => 379,  1279 => 377,  1273 => 376,  1256 => 369,  1251 => 368,  1237 => 360,  1228 => 357,  1221 => 355,  1218 => 354,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1145 => 322,  1143 => 321,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1036 => 284,  1032 => 283,  1029 => 282,  1016 => 276,  1014 => 272,  1009 => 270,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  964 => 255,  961 => 254,  958 => 253,  952 => 251,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  894 => 226,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  849 => 206,  846 => 205,  841 => 203,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  798 => 184,  796 => 183,  785 => 178,  783 => 177,  780 => 176,  772 => 172,  769 => 171,  764 => 169,  756 => 165,  753 => 164,  751 => 163,  746 => 161,  729 => 155,  715 => 151,  712 => 150,  710 => 149,  707 => 148,  699 => 142,  697 => 141,  696 => 140,  695 => 139,  694 => 138,  689 => 137,  678 => 133,  675 => 132,  662 => 125,  658 => 124,  654 => 123,  649 => 122,  643 => 120,  635 => 226,  619 => 113,  617 => 112,  614 => 111,  598 => 107,  576 => 101,  564 => 99,  557 => 96,  555 => 200,  547 => 93,  515 => 85,  512 => 84,  509 => 83,  503 => 81,  490 => 154,  478 => 74,  459 => 116,  456 => 68,  450 => 114,  442 => 62,  433 => 60,  426 => 58,  414 => 52,  408 => 50,  403 => 48,  377 => 37,  366 => 33,  350 => 26,  342 => 23,  335 => 133,  332 => 20,  311 => 14,  288 => 4,  281 => 75,  253 => 78,  248 => 100,  245 => 335,  210 => 59,  202 => 55,  186 => 51,  124 => 47,  96 => 18,  81 => 20,  76 => 18,  1883 => 659,  1881 => 658,  1879 => 657,  1876 => 656,  1871 => 653,  1860 => 651,  1855 => 650,  1852 => 649,  1849 => 648,  1840 => 643,  1837 => 642,  1833 => 640,  1827 => 638,  1824 => 637,  1821 => 636,  1818 => 635,  1812 => 633,  1806 => 631,  1803 => 630,  1800 => 627,  1780 => 625,  1777 => 624,  1774 => 623,  1771 => 622,  1768 => 621,  1765 => 620,  1763 => 619,  1760 => 618,  1757 => 617,  1754 => 616,  1751 => 615,  1749 => 614,  1746 => 613,  1742 => 612,  1740 => 611,  1737 => 610,  1730 => 603,  1724 => 601,  1718 => 599,  1716 => 598,  1714 => 597,  1711 => 596,  1704 => 589,  1700 => 587,  1693 => 585,  1690 => 581,  1686 => 580,  1681 => 579,  1678 => 578,  1671 => 576,  1668 => 571,  1663 => 570,  1660 => 569,  1657 => 568,  1654 => 567,  1639 => 565,  1636 => 564,  1632 => 563,  1629 => 562,  1611 => 561,  1609 => 560,  1607 => 559,  1604 => 558,  1596 => 552,  1594 => 551,  1592 => 550,  1590 => 549,  1587 => 548,  1578 => 544,  1573 => 542,  1571 => 541,  1568 => 540,  1560 => 535,  1554 => 533,  1552 => 532,  1532 => 531,  1529 => 530,  1521 => 524,  1518 => 523,  1512 => 521,  1509 => 520,  1506 => 519,  1503 => 518,  1498 => 516,  1495 => 515,  1492 => 514,  1490 => 513,  1487 => 512,  1478 => 507,  1475 => 506,  1472 => 505,  1469 => 504,  1467 => 503,  1464 => 502,  1455 => 498,  1453 => 497,  1450 => 496,  1443 => 490,  1438 => 489,  1436 => 488,  1433 => 487,  1425 => 480,  1419 => 478,  1417 => 477,  1414 => 421,  1410 => 474,  1408 => 419,  1398 => 415,  1392 => 469,  1390 => 468,  1387 => 467,  1384 => 466,  1381 => 465,  1379 => 464,  1376 => 463,  1374 => 462,  1368 => 460,  1362 => 458,  1359 => 457,  1357 => 456,  1354 => 455,  1345 => 451,  1339 => 396,  1335 => 448,  1330 => 447,  1324 => 444,  1321 => 443,  1318 => 442,  1316 => 441,  1313 => 440,  1306 => 437,  1303 => 382,  1295 => 432,  1291 => 380,  1286 => 430,  1283 => 378,  1277 => 425,  1271 => 375,  1268 => 374,  1262 => 420,  1260 => 419,  1252 => 418,  1249 => 367,  1246 => 366,  1240 => 412,  1234 => 410,  1231 => 358,  1225 => 407,  1223 => 356,  1217 => 405,  1214 => 404,  1211 => 349,  1204 => 400,  1201 => 399,  1193 => 393,  1187 => 342,  1184 => 390,  1178 => 388,  1175 => 387,  1169 => 385,  1166 => 384,  1160 => 382,  1158 => 381,  1154 => 327,  1152 => 379,  1136 => 378,  1133 => 377,  1130 => 376,  1127 => 375,  1124 => 374,  1121 => 373,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1096 => 364,  1093 => 363,  1081 => 359,  1078 => 358,  1075 => 357,  1072 => 356,  1070 => 355,  1067 => 299,  1058 => 347,  1055 => 346,  1048 => 290,  1045 => 342,  1042 => 341,  1040 => 285,  1033 => 339,  1027 => 281,  1024 => 280,  1021 => 335,  1019 => 334,  1017 => 333,  1015 => 332,  1012 => 271,  1004 => 266,  1001 => 326,  999 => 325,  996 => 324,  988 => 320,  985 => 319,  983 => 318,  980 => 317,  971 => 311,  967 => 256,  963 => 309,  959 => 308,  955 => 252,  950 => 250,  947 => 249,  944 => 304,  938 => 302,  932 => 299,  924 => 298,  912 => 297,  903 => 229,  900 => 228,  897 => 227,  895 => 293,  892 => 225,  883 => 287,  880 => 286,  874 => 284,  872 => 283,  868 => 282,  863 => 281,  860 => 211,  857 => 210,  850 => 276,  844 => 204,  838 => 272,  826 => 271,  819 => 270,  816 => 269,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  797 => 259,  795 => 258,  794 => 257,  793 => 182,  792 => 255,  789 => 254,  786 => 253,  779 => 250,  773 => 247,  767 => 170,  749 => 162,  742 => 244,  739 => 156,  737 => 242,  735 => 241,  732 => 240,  724 => 154,  721 => 153,  719 => 233,  711 => 229,  708 => 228,  706 => 227,  693 => 226,  685 => 224,  683 => 135,  680 => 134,  676 => 220,  674 => 219,  670 => 217,  668 => 216,  666 => 126,  663 => 214,  657 => 210,  655 => 209,  650 => 208,  644 => 207,  640 => 119,  638 => 118,  633 => 202,  629 => 201,  613 => 200,  607 => 218,  604 => 197,  599 => 215,  596 => 106,  593 => 105,  590 => 193,  587 => 192,  584 => 191,  582 => 190,  579 => 189,  570 => 184,  567 => 183,  558 => 181,  553 => 180,  550 => 94,  535 => 177,  532 => 192,  529 => 191,  527 => 91,  524 => 90,  521 => 172,  518 => 180,  516 => 170,  513 => 169,  510 => 164,  507 => 165,  504 => 164,  501 => 163,  498 => 160,  496 => 79,  493 => 155,  486 => 154,  470 => 121,  467 => 72,  464 => 71,  458 => 147,  447 => 113,  443 => 142,  439 => 141,  432 => 140,  428 => 59,  421 => 90,  411 => 132,  400 => 47,  388 => 42,  364 => 112,  359 => 144,  356 => 109,  346 => 107,  343 => 132,  338 => 130,  329 => 130,  326 => 129,  316 => 16,  301 => 117,  286 => 84,  271 => 108,  266 => 366,  255 => 353,  237 => 71,  225 => 67,  195 => 54,  174 => 42,  157 => 56,  129 => 180,  83 => 32,  70 => 27,  233 => 81,  211 => 81,  207 => 58,  198 => 55,  190 => 49,  126 => 179,  120 => 176,  104 => 34,  418 => 136,  405 => 49,  395 => 125,  389 => 158,  378 => 151,  361 => 137,  358 => 139,  351 => 141,  348 => 132,  339 => 136,  333 => 132,  330 => 103,  325 => 128,  315 => 98,  308 => 13,  302 => 79,  299 => 116,  293 => 113,  290 => 90,  284 => 76,  280 => 87,  277 => 109,  260 => 104,  257 => 103,  250 => 341,  222 => 66,  206 => 57,  200 => 54,  191 => 246,  188 => 48,  185 => 61,  170 => 80,  167 => 56,  155 => 74,  150 => 34,  134 => 182,  97 => 56,  53 => 22,  445 => 126,  441 => 115,  438 => 114,  424 => 91,  422 => 110,  419 => 109,  415 => 127,  412 => 126,  406 => 111,  401 => 89,  390 => 43,  385 => 159,  382 => 92,  376 => 153,  371 => 35,  363 => 32,  353 => 82,  349 => 80,  347 => 140,  344 => 24,  336 => 135,  334 => 75,  331 => 74,  328 => 73,  324 => 71,  317 => 67,  313 => 84,  310 => 83,  307 => 82,  295 => 87,  292 => 91,  289 => 112,  279 => 54,  276 => 395,  263 => 365,  259 => 104,  256 => 79,  251 => 101,  249 => 96,  244 => 111,  239 => 64,  236 => 48,  234 => 64,  231 => 69,  226 => 62,  223 => 60,  218 => 59,  215 => 280,  212 => 60,  197 => 74,  194 => 52,  192 => 53,  184 => 48,  181 => 232,  178 => 48,  165 => 64,  161 => 202,  152 => 36,  148 => 49,  146 => 34,  139 => 59,  137 => 29,  127 => 54,  114 => 174,  90 => 34,  84 => 40,  77 => 30,  74 => 29,  52 => 22,  480 => 75,  474 => 122,  469 => 158,  461 => 70,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 61,  435 => 146,  430 => 144,  427 => 116,  423 => 57,  413 => 134,  409 => 131,  407 => 144,  402 => 141,  398 => 88,  393 => 168,  387 => 122,  384 => 121,  381 => 157,  379 => 154,  374 => 36,  368 => 34,  365 => 141,  362 => 111,  360 => 77,  355 => 27,  341 => 131,  337 => 22,  322 => 96,  314 => 99,  312 => 97,  309 => 120,  305 => 119,  298 => 91,  294 => 90,  285 => 111,  283 => 83,  278 => 410,  268 => 107,  264 => 74,  258 => 72,  252 => 68,  247 => 75,  241 => 49,  229 => 101,  220 => 65,  214 => 63,  177 => 43,  169 => 44,  140 => 51,  132 => 42,  128 => 47,  111 => 39,  107 => 38,  61 => 28,  273 => 85,  269 => 94,  254 => 102,  246 => 67,  243 => 66,  240 => 72,  238 => 312,  235 => 63,  230 => 62,  227 => 301,  224 => 61,  221 => 79,  219 => 84,  217 => 64,  208 => 72,  204 => 57,  179 => 44,  159 => 69,  143 => 33,  135 => 45,  131 => 181,  119 => 108,  108 => 171,  102 => 37,  71 => 30,  67 => 26,  63 => 16,  59 => 27,  47 => 22,  38 => 14,  94 => 30,  89 => 33,  85 => 32,  79 => 35,  75 => 29,  68 => 24,  56 => 25,  50 => 21,  29 => 3,  87 => 23,  72 => 28,  55 => 21,  21 => 11,  26 => 14,  98 => 72,  93 => 35,  88 => 37,  78 => 21,  46 => 8,  27 => 14,  40 => 24,  44 => 18,  35 => 16,  31 => 23,  43 => 25,  41 => 6,  28 => 22,  201 => 56,  196 => 52,  183 => 50,  171 => 44,  166 => 209,  163 => 40,  158 => 62,  156 => 38,  151 => 188,  142 => 30,  138 => 49,  136 => 58,  123 => 48,  121 => 24,  117 => 175,  115 => 45,  105 => 170,  101 => 40,  91 => 37,  69 => 27,  66 => 17,  62 => 24,  49 => 18,  24 => 1,  32 => 4,  25 => 12,  22 => 11,  19 => 11,  209 => 58,  203 => 55,  199 => 265,  193 => 51,  189 => 52,  187 => 60,  182 => 69,  176 => 58,  173 => 46,  168 => 43,  164 => 55,  162 => 41,  154 => 36,  149 => 35,  147 => 52,  144 => 26,  141 => 58,  133 => 49,  130 => 57,  125 => 46,  122 => 45,  116 => 107,  112 => 105,  109 => 43,  106 => 104,  103 => 82,  99 => 41,  95 => 71,  92 => 28,  86 => 25,  82 => 23,  80 => 31,  73 => 17,  64 => 24,  60 => 15,  57 => 14,  54 => 16,  51 => 29,  48 => 15,  45 => 26,  42 => 15,  39 => 14,  36 => 4,  33 => 16,  30 => 15,);
    }
}
