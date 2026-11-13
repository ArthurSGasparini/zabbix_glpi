<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\MacroNamespace;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTestError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* components/datatable.html.twig */
class __TwigTemplate_69ef3c66b1a57e4fb50340a8cf50dfe8 extends Template
{
    private Source $source;
    /**
     * @var array<string, MacroNamespace>
     */
    private array $macros = [];
    private \Twig\Runtime\EscaperRuntime $escaper;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->escaper = $env->getRuntime('Twig\Runtime\EscaperRuntime');

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 32
        yield "
";
        // line 90
        yield "
";
        // line 91
        $context["datatable_id"] = ((array_key_exists("datatable_id", $context)) ? (Twig\Extension\CoreExtension::default(($context["datatable_id"] ?? null), ("datatable" . Twig\Extension\CoreExtension::random($this->env->getCharset())))) : (("datatable" . Twig\Extension\CoreExtension::random($this->env->getCharset()))));
        // line 92
        $context["filters"] = ((array_key_exists("filters", $context)) ? (Twig\Extension\CoreExtension::default(($context["filters"] ?? null), [])) : ([]));
        // line 93
        $context["additional_params"] = ((array_key_exists("additional_params", $context)) ? (Twig\Extension\CoreExtension::default(($context["additional_params"] ?? null), "")) : (""));
        // line 94
        $context["sort"] = ((array_key_exists("sort", $context)) ? (Twig\Extension\CoreExtension::default(($context["sort"] ?? null), null)) : (null));
        // line 95
        $context["nosort"] = ((array_key_exists("nosort", $context)) ? (Twig\Extension\CoreExtension::default(($context["nosort"] ?? null), false)) : (false));
        // line 96
        $context["order"] = ((array_key_exists("order", $context)) ? (Twig\Extension\CoreExtension::default(($context["order"] ?? null), "ASC")) : ("ASC"));
        // line 97
        $context["csv_url"] = ((array_key_exists("csv_url", $context)) ? (Twig\Extension\CoreExtension::default(($context["csv_url"] ?? null), "")) : (""));
        // line 98
        $context["footers"] = ((array_key_exists("footers", $context)) ? (Twig\Extension\CoreExtension::default(($context["footers"] ?? null), [])) : ([]));
        // line 99
        $context["showmassiveactions"] = ((array_key_exists("showmassiveactions", $context)) ? (Twig\Extension\CoreExtension::default(($context["showmassiveactions"] ?? null), false)) : (false));
        // line 100
        yield "
";
        // line 101
        if ( !array_key_exists("filtered_number", $context)) {
            // line 102
            yield "    ";
            $context["filtered_number"] = ($context["total_number"] ?? null);
        }
        // line 104
        yield "
";
        // line 105
        $context["use_pager"] = ((array_key_exists("use_pager", $context)) ? (Twig\Extension\CoreExtension::default(($context["use_pager"] ?? null), (array_key_exists("start", $context) && array_key_exists("limit", $context)))) : ((array_key_exists("start", $context) && array_key_exists("limit", $context))));
        // line 106
        yield "
";
        // line 108
        $context["use_pager"] = ((array_key_exists("nopager", $context)) ? ( !(($tmp = ($context["nopager"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) : (($context["use_pager"] ?? null)));
        // line 109
        yield "
";
        // line 110
        if (((($context["total_number"] ?? null) < 1) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["filters"] ?? null)) == 0))) {
            // line 111
            yield "    <table id=\"";
            yield (string) $this->escaper->escape(($context["datatable_id"] ?? null), "html", null, true);
            yield "\" class=\"table\">
        <thead>
        ";
            // line 113
            if ((array_key_exists("super_header", $context) &&  !Twig\Extension\CoreExtension::testEmpty(($context["super_header"] ?? null)))) {
                // line 114
                yield "            ";
                $context["super_header_label"] = ((is_array(($context["super_header"] ?? null))) ? ((($_v0 = ($context["super_header"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["label"] ?? null) : null)) : (($context["super_header"] ?? null)));
                // line 115
                yield "            ";
                if ( !Twig\Extension\CoreExtension::testEmpty(($context["super_header_label"] ?? null))) {
                    // line 116
                    yield "                ";
                    $context["super_header_raw"] = ((is_array(($context["super_header"] ?? null))) ? ((((CoreExtension::getAttribute($this->env, $this->source, ($context["super_header"] ?? null), "is_raw", [], "array", true, true, false, 116) &&  !(null === (($_v1 = ($context["super_header"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["is_raw"] ?? null) : null)))) ? ((($_v2 = ($context["super_header"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["is_raw"] ?? null) : null)) : (false))) : (false));
                    // line 117
                    yield "                ";
                    $context["super_header_level"] = ((is_array(($context["super_header"] ?? null))) ? ((((CoreExtension::getAttribute($this->env, $this->source, ($context["super_header"] ?? null), "level", [], "array", true, true, false, 117) &&  !(null === (($_v3 = ($context["super_header"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["level"] ?? null) : null)))) ? ((($_v4 = ($context["super_header"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["level"] ?? null) : null)) : (null))) : (null));
                    // line 118
                    yield "                <tr>
                    <th colspan=\"1\">
                        ";
                    // line 120
                    if (((($tmp = ($context["super_header_level"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) &&  !(($context["super_header_raw"] ?? null) === "th_elements"))) {
                        yield "<span role=\"heading\" aria-level=\"";
                        yield (string) $this->escaper->escape(($context["super_header_level"] ?? null), "html", null, true);
                        yield "\">";
                    }
                    // line 121
                    yield "                        ";
                    yield (string) (((($tmp = ($context["super_header_raw"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["super_header_label"] ?? null)) : ($this->escaper->escape(($context["super_header_label"] ?? null), "html", null, true)));
                    yield "
                        ";
                    // line 122
                    if (((($tmp = ($context["super_header_level"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) &&  !(($context["super_header_raw"] ?? null) === "th_elements"))) {
                        yield "</span>";
                    }
                    // line 123
                    yield "                    </th>
                </tr>
            ";
                }
                // line 126
                yield "        ";
            }
            // line 127
            yield "        </thead>
        <tbody>
            <tr>
                <td>
                    <div class=\"alert alert-info\">
                        ";
            // line 132
            yield (string) $this->escaper->escape(__("No results found"), "html", null, true);
            yield "
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
";
        } else {
            // line 139
            yield "    ";
            $context["total_cols"] = ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["columns"] ?? null)) + (((($tmp = ($context["showmassiveactions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (1) : (0))) + (((($tmp = (((array_key_exists("nofilter", $context) &&  !(null === $context["nofilter"]))) ? ($context["nofilter"]) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (0) : (1)));
            // line 140
            yield "    ";
            if ((($tmp = ($context["use_pager"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 141
                yield "        ";
                yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/pager.html.twig", ["count" =>                 // line 142
($context["filtered_number"] ?? null), "additional_params" => ((((                // line 143
($context["additional_params"] ?? null) . "&sort=") . ($context["sort"] ?? null)) . "&order=") . ($context["order"] ?? null))]);
                // line 144
                yield "
    ";
            }
            // line 146
            yield "
    <div class=\"table-responsive ";
            // line 147
            yield (string) $this->escaper->escape(((array_key_exists("container_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["container_class"] ?? null), "")) : ("")), "html", null, true);
            yield "\" ";
            if ((($tmp = ($context["showmassiveactions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " id=\"";
                yield (string) $this->escaper->escape((($_v5 = ($context["massiveactionparams"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["container"] ?? null) : null), "html", null, true);
                yield "\" ";
            }
            yield ">
        ";
            // line 148
            if ((($tmp = ($context["showmassiveactions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 149
                yield "            <div class=\"mb-2\">
                ";
                // line 150
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::showMassiveActions", [Twig\Extension\CoreExtension::merge(["action_button_classes" => "btn btn-sm btn-outline-secondary me-2"], ((array_key_exists("massiveactionparams", $context)) ? (Twig\Extension\CoreExtension::default(($context["massiveactionparams"] ?? null), [])) : ([])))]);
                // line 151
                yield "            </div>
        ";
            }
            // line 153
            yield "        <table id=\"";
            yield (string) $this->escaper->escape(($context["datatable_id"] ?? null), "html", null, true);
            yield "\" class=\"table ";
            yield (string) $this->escaper->escape(((array_key_exists("table_class_style", $context)) ? (Twig\Extension\CoreExtension::default(($context["table_class_style"] ?? null), "table-hover")) : ("table-hover")), "html", null, true);
            yield "\" aria-label=\"";
            yield (string) $this->escaper->escape(((array_key_exists("datatable_aria_label", $context)) ? (Twig\Extension\CoreExtension::default(($context["datatable_aria_label"] ?? null), "")) : ("")), "html", null, true);
            yield "\">
            <thead>
                ";
            // line 155
            if ((array_key_exists("super_header", $context) &&  !Twig\Extension\CoreExtension::testEmpty(($context["super_header"] ?? null)))) {
                // line 156
                yield "                    ";
                $context["super_header_label"] = ((is_array(($context["super_header"] ?? null))) ? ((($_v6 = ($context["super_header"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["label"] ?? null) : null)) : (($context["super_header"] ?? null)));
                // line 157
                yield "                    ";
                $context["super_header_raw"] = ((is_array(($context["super_header"] ?? null))) ? ((((CoreExtension::getAttribute($this->env, $this->source, ($context["super_header"] ?? null), "is_raw", [], "array", true, true, false, 157) &&  !(null === (($_v7 = ($context["super_header"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["is_raw"] ?? null) : null)))) ? ((($_v8 = ($context["super_header"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["is_raw"] ?? null) : null)) : (false))) : (false));
                // line 158
                yield "                    ";
                $context["super_header_level"] = ((is_array(($context["super_header"] ?? null))) ? ((((CoreExtension::getAttribute($this->env, $this->source, ($context["super_header"] ?? null), "level", [], "array", true, true, false, 158) &&  !(null === (($_v9 = ($context["super_header"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["level"] ?? null) : null)))) ? ((($_v10 = ($context["super_header"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["level"] ?? null) : null)) : (null))) : (null));
                // line 159
                yield "                    <tr>
                        ";
                // line 160
                if ( !(($context["super_header_raw"] ?? null) === "th_elements")) {
                    yield "<th colspan=\"";
                    yield (string) $this->escaper->escape(($context["total_cols"] ?? null), "html", null, true);
                    yield "\">";
                }
                // line 161
                yield "                            ";
                if (((($tmp = ($context["super_header_level"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) &&  !(($context["super_header_raw"] ?? null) === "th_elements"))) {
                    yield "<span role=\"heading\" aria-level=\"";
                    yield (string) $this->escaper->escape(($context["super_header_level"] ?? null), "html", null, true);
                    yield "\">";
                }
                // line 162
                yield "                            ";
                yield (string) (((($tmp = ($context["super_header_raw"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["super_header_label"] ?? null)) : ($this->escaper->escape(($context["super_header_label"] ?? null), "html", null, true)));
                yield "
                            ";
                // line 163
                if (((($tmp = ($context["super_header_level"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) &&  !(($context["super_header_raw"] ?? null) === "th_elements"))) {
                    yield "</span>";
                }
                // line 164
                yield "                        ";
                if ( !(($context["super_header_raw"] ?? null) === "th_elements")) {
                    yield "</th>";
                }
                // line 165
                yield "                    </tr>
                ";
            }
            // line 167
            yield "                ";
            if (( !array_key_exists("no_header", $context) || (($context["no_header"] ?? null) == false))) {
                // line 168
                yield "                    <tr>
                        ";
                // line 169
                if ((($tmp = ($context["showmassiveactions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 170
                    yield "                            <th scope=\"col\" style=\"width: 30px;\">
                                <div>
                                    <input class=\"form-check-input massive_action_checkbox\" type=\"checkbox\" id=\"checkall_";
                    // line 172
                    yield (string) $this->escaper->escape((($_v11 = ($context["massiveactionparams"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["container"] ?? null) : null), "html", null, true);
                    yield "\"
                                        value=\"\" aria-label=\"";
                    // line 173
                    yield (string) $this->escaper->escape(__("Check all"), "html", null, true);
                    yield "\"
                                        onclick=\"checkAsCheckboxes(this, \x27";
                    // line 174
                    yield (string) $this->escaper->escape($this->escaper->escape((($_v12 = ($context["massiveactionparams"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["container"] ?? null) : null), "js"), "html", null, true);
                    yield "\x27, \x27.massive_action_checkbox\x27);\" />
                                </div>
                            </th>
                        ";
                }
                // line 178
                yield "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["columns"] ?? null));
                foreach ($context['_seq'] as $context["colkey"] => $context["column"]) {
                    // line 179
                    yield "                            ";
                    $context["column_label"] = ((is_array($context["column"])) ? ((($_v13 = $context["column"]) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["label"] ?? null) : null)) : ($context["column"]));
                    // line 180
                    yield "                            ";
                    $context["raw_header"] = ((is_array($context["column"])) ? (((CoreExtension::getAttribute($this->env, $this->source, $context["column"], "raw_header", [], "array", true, true, false, 180)) ? (Twig\Extension\CoreExtension::default((($_v14 = $context["column"]) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["raw_header"] ?? null) : null), false)) : (false))) : (false));
                    // line 181
                    yield "                            ";
                    $context["sort_icon"] = "";
                    // line 182
                    yield "                            ";
                    $context["new_order"] = "DESC";
                    // line 183
                    yield "                            ";
                    if ((($context["sort"] ?? null) == $context["colkey"])) {
                        // line 184
                        yield "                                ";
                        $context["sort_icon"] = (((($context["order"] ?? null) == "ASC")) ? ("ti ti-sort-ascending") : ((((($context["order"] ?? null) == "DESC")) ? ("ti ti-sort-descending") : (""))));
                        // line 185
                        yield "                                ";
                        $context["new_order"] = (((($context["order"] ?? null) == "ASC")) ? ("DESC") : ("ASC"));
                        // line 186
                        yield "                            ";
                    }
                    // line 187
                    yield "
                            ";
                    // line 188
                    $context["sort_href"] = (((((("javascript:reloadTab(\x27sort=" . $this->escaper->escape($context["colkey"], "js")) . "&order=") . ($context["new_order"] ?? null)) . "&") . $this->escaper->escape(($context["additional_params"] ?? null), "js")) . "\x27);");
                    // line 189
                    yield "
                            <th scope=\"col\">
                                ";
                    // line 191
                    if (( !(($tmp = ($context["nosort"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) &&  !(is_array($context["column"]) && CoreExtension::getAttribute($this->env, $this->source, $context["column"], "nosort", [], "array", true, true, false, 191)))) {
                        // line 192
                        yield "                                    <a href=\"";
                        yield (string) $this->escaper->escape(($context["sort_href"] ?? null), "html", null, true);
                        yield "\">
                                    <i class=\"";
                        // line 193
                        yield (string) $this->escaper->escape(($context["sort_icon"] ?? null), "html", null, true);
                        yield "\" aria-hidden=\"true\"></i>
                                ";
                    }
                    // line 195
                    yield "                                <span>";
                    yield (string) (((($tmp = ($context["raw_header"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["column_label"] ?? null)) : ($this->escaper->escape(($context["column_label"] ?? null), "html", null, true)));
                    yield "</span>
                                ";
                    // line 196
                    if (( !(($tmp = ($context["nosort"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) &&  !(is_array($context["column"]) && CoreExtension::getAttribute($this->env, $this->source, $context["column"], "nosort", [], "array", true, true, false, 196)))) {
                        // line 197
                        yield "                                    </a>
                                ";
                    }
                    // line 199
                    yield "                            </th>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['colkey'], $context['column'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 201
                yield "
                       ";
                // line 202
                if (( !array_key_exists("nofilter", $context) || (($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["csv_url"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                    // line 203
                    yield "                           <th scope=\"col\">
                               <span class=\"float-end log-toolbar mb-0\">
                                   ";
                    // line 205
                    if ( !array_key_exists("nofilter", $context)) {
                        // line 206
                        yield "                                       <button class=\"btn btn-sm show_filters ";
                        yield (string) (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["filters"] ?? null)) > 0)) ? ("btn-secondary active") : ("btn-outline-secondary"));
                        yield "\">
                                           <i class=\"ti ti-filter\" aria-hidden=\"true\"></i>
                                           <span class=\"d-none d-xl-block\">";
                        // line 208
                        yield (string) $this->escaper->escape(__("Filter"), "html", null, true);
                        yield "</span>
                                       </button>
                                   ";
                    }
                    // line 211
                    yield "                                   ";
                    if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["csv_url"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 212
                        yield "                                       <a href=\"";
                        yield (string) $this->escaper->escape(($context["csv_url"] ?? null), "html", null, true);
                        yield "\" class=\"btn btn-sm text-capitalize btn-outline-secondary\">
                                           <i class=\"ti ti-download\" aria-hidden=\"true\"></i>
                                           <span class=\"d-none d-xl-block\">";
                        // line 214
                        yield (string) $this->escaper->escape(__("Export"), "html", null, true);
                        yield "</span>
                                       </a>
                                   ";
                    }
                    // line 217
                    yield "                               </span>
                           </th>
                         ";
                }
                // line 220
                yield "                    </tr>
                ";
            }
            // line 222
            yield "                ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["filters"] ?? null)) > 0)) {
                // line 223
                yield "                    <tr class=\"filter_row\">
                        ";
                // line 224
                if ((($tmp = ($context["showmassiveactions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 225
                    yield "                            <td></td>
                        ";
                }
                // line 227
                yield "                        <td style=\"display: none\">
                            <input type=\"hidden\" name=\"filters[active]\" value=\"1\" />
                            <input type=\"hidden\" name=\"items_id\" value=\"";
                // line 229
                yield (string) $this->escaper->escape(($context["items_id"] ?? null), "html", null, true);
                yield "\" />
                        </td>
                        ";
                // line 231
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["columns"] ?? null));
                foreach ($context['_seq'] as $context["colkey"] => $context["colum"]) {
                    // line 232
                    yield "                            ";
                    $context["formatter"] = Twig\Extension\CoreExtension::default(((CoreExtension::getAttribute($this->env, $this->source, $context["colum"], "filter_formatter", [], "array", true, true, false, 232)) ? (Twig\Extension\CoreExtension::default((($_v15 = $context["colum"]) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["filter_formatter"] ?? null) : null), ((CoreExtension::getAttribute($this->env, $this->source, ($context["formatters"] ?? null), $context["colkey"], [], "array", true, true, false, 232)) ? (Twig\Extension\CoreExtension::default((($_v16 = ($context["formatters"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16[(($_v17 = $context["colkey"]) instanceof \Stringable && (is_array($_v16) || $_v16 instanceof \ArrayObject || $_v16 instanceof \ArrayIterator) ? (string) $_v17 : $_v17)] ?? null) : null), "")) : ("")))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["formatters"] ?? null), $context["colkey"], [], "array", true, true, false, 232)) ? (Twig\Extension\CoreExtension::default((($_v18 = ($context["formatters"] ?? null)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18[(($_v19 = $context["colkey"]) instanceof \Stringable && (is_array($_v18) || $_v18 instanceof \ArrayObject || $_v18 instanceof \ArrayIterator) ? (string) $_v19 : $_v19)] ?? null) : null), "")) : ("")))), "");
                    // line 233
                    yield "                            <td>
                                ";
                    // line 234
                    if (( !is_array($context["colum"]) || (((CoreExtension::getAttribute($this->env, $this->source, $context["colum"], "no_filter", [], "array", true, true, false, 234)) ? (Twig\Extension\CoreExtension::default((($_v20 = $context["colum"]) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20["no_filter"] ?? null) : null), false)) : (false)) == false))) {
                        // line 235
                        yield "                                    ";
                        if (((($context["formatter"] ?? null) == "array") && CoreExtension::getAttribute($this->env, $this->source, ($context["columns_values"] ?? null), $context["colkey"], [], "array", true, true, false, 235))) {
                            // line 236
                            yield "                                           <select name=\"filters[";
                            yield (string) $this->escaper->escape($context["colkey"], "html", null, true);
                            yield "][]\"
                                                class=\"form-select filter-select-multiple\" multiple>
                                            ";
                            // line 238
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable((($_v21 = ($context["columns_values"] ?? null)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21[(($_v22 = $context["colkey"]) instanceof \Stringable && (is_array($_v21) || $_v21 instanceof \ArrayObject || $_v21 instanceof \ArrayIterator) ? (string) $_v22 : $_v22)] ?? null) : null));
                            foreach ($context['_seq'] as $context["field"] => $context["value"]) {
                                // line 239
                                yield "                                                <option value=\"";
                                yield (string) $this->escaper->escape($context["field"], "html", null, true);
                                yield "\" ";
                                yield (string) (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), $context["colkey"], [], "array", true, true, false, 239) && CoreExtension::inFilter($context["field"], (($_v23 = ($context["filters"] ?? null)) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23[(($_v24 = $context["colkey"]) instanceof \Stringable && (is_array($_v23) || $_v23 instanceof \ArrayObject || $_v23 instanceof \ArrayIterator) ? (string) $_v24 : $_v24)] ?? null) : null)))) ? ("selected") : (""));
                                yield ">
                                                    ";
                                // line 240
                                yield (string) $this->escaper->escape($context["value"], "html", null, true);
                                yield "
                                                </option>
                                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['field'], $context['value'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent);
                            $context += $_parent;
                            // line 243
                            yield "                                        </select>
                                    ";
                        } elseif (((                        // line 244
($context["formatter"] ?? null) == "dropdown") && CoreExtension::getAttribute($this->env, $this->source, $context["colum"], "filter_itemtype", [], "array", true, true, false, 244))) {
                            // line 245
                            yield "                                        ";
                            yield (string) $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call(((($_v25 = $context["colum"]) && is_array($_v25) || $_v25 instanceof ArrayAccess ? ($_v25["filter_itemtype"] ?? null) : null) . "::dropdown"), [Twig\Extension\CoreExtension::merge(["name" => (("filters[" .                             // line 246
$context["colkey"]) . "][]"), "multiple" => true, "value" => (((CoreExtension::getAttribute($this->env, $this->source,                             // line 248
($context["filters"] ?? null), $context["colkey"], [], "array", true, true, false, 248) &&  !(null === (($_v26 = ($context["filters"] ?? null)) && is_array($_v26) || $_v26 instanceof ArrayAccess ? ($_v26[(($_v27 = $context["colkey"]) instanceof \Stringable && (is_array($_v26) || $_v26 instanceof \ArrayObject || $_v26 instanceof \ArrayIterator) ? (string) $_v27 : $_v27)] ?? null) : null)))) ? ((($_v28 = ($context["filters"] ?? null)) && is_array($_v28) || $_v28 instanceof ArrayAccess ? ($_v28[(($_v29 = $context["colkey"]) instanceof \Stringable && (is_array($_v28) || $_v28 instanceof \ArrayObject || $_v28 instanceof \ArrayIterator) ? (string) $_v29 : $_v29)] ?? null) : null)) : ([])), "width" => "100%", "display" => false], (((CoreExtension::getAttribute($this->env, $this->source,                             // line 251
$context["colum"], "filter_params", [], "array", true, true, false, 251) &&  !(null === (($_v30 = $context["colum"]) && is_array($_v30) || $_v30 instanceof ArrayAccess ? ($_v30["filter_params"] ?? null) : null)))) ? ((($_v31 = $context["colum"]) && is_array($_v31) || $_v31 instanceof ArrayAccess ? ($_v31["filter_params"] ?? null) : null)) : ([])))]);
                            yield "
                                    ";
                        } elseif ((                        // line 252
($context["formatter"] ?? null) == "datetime")) {
                            // line 253
                            yield "                                        ";
                            yield (string) $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::showDateTimeField", [(("filters[" .                             // line 254
$context["colkey"]) . "]"), ["value" => (((CoreExtension::getAttribute($this->env, $this->source,                             // line 256
($context["filters"] ?? null), $context["colkey"], [], "array", true, true, false, 256) &&  !(null === (($_v32 = ($context["filters"] ?? null)) && is_array($_v32) || $_v32 instanceof ArrayAccess ? ($_v32[(($_v33 = $context["colkey"]) instanceof \Stringable && (is_array($_v32) || $_v32 instanceof \ArrayObject || $_v32 instanceof \ArrayIterator) ? (string) $_v33 : $_v33)] ?? null) : null)))) ? ((($_v34 = ($context["filters"] ?? null)) && is_array($_v34) || $_v34 instanceof ArrayAccess ? ($_v34[(($_v35 = $context["colkey"]) instanceof \Stringable && (is_array($_v34) || $_v34 instanceof \ArrayObject || $_v34 instanceof \ArrayIterator) ? (string) $_v35 : $_v35)] ?? null) : null)) : ("")), "display" => false]]);
                            // line 259
                            yield "
                                    ";
                        } elseif ((                        // line 260
($context["formatter"] ?? null) == "date")) {
                            // line 261
                            yield "                                        ";
                            yield (string) $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::showDateField", [(("filters[" .                             // line 262
$context["colkey"]) . "]"), ["value" => (((CoreExtension::getAttribute($this->env, $this->source,                             // line 264
($context["filters"] ?? null), $context["colkey"], [], "array", true, true, false, 264) &&  !(null === (($_v36 = ($context["filters"] ?? null)) && is_array($_v36) || $_v36 instanceof ArrayAccess ? ($_v36[(($_v37 = $context["colkey"]) instanceof \Stringable && (is_array($_v36) || $_v36 instanceof \ArrayObject || $_v36 instanceof \ArrayIterator) ? (string) $_v37 : $_v37)] ?? null) : null)))) ? ((($_v38 = ($context["filters"] ?? null)) && is_array($_v38) || $_v38 instanceof ArrayAccess ? ($_v38[(($_v39 = $context["colkey"]) instanceof \Stringable && (is_array($_v38) || $_v38 instanceof \ArrayObject || $_v38 instanceof \ArrayIterator) ? (string) $_v39 : $_v39)] ?? null) : null)) : ("")), "display" => false]]);
                            // line 267
                            yield "
                                    ";
                        } elseif ((is_string($_v40 =                         // line 268
($context["formatter"] ?? null)) && is_string($_v41 = "progress") && str_starts_with($_v40, $_v41))) {
                            // line 269
                            yield "                                        <input type=\"range\" class=\"form-range\"
                                            name=\"filters[";
                            // line 270
                            yield (string) $this->escaper->escape($context["colkey"], "html", null, true);
                            yield "]\"
                                            value=\"";
                            // line 271
                            yield (string) (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), $context["colkey"], [], "array", true, true, false, 271) &&  !(null === (($_v42 = ($context["filters"] ?? null)) && is_array($_v42) || $_v42 instanceof ArrayAccess ? ($_v42[(($_v43 = $context["colkey"]) instanceof \Stringable && (is_array($_v42) || $_v42 instanceof \ArrayObject || $_v42 instanceof \ArrayIterator) ? (string) $_v43 : $_v43)] ?? null) : null)))) ? ($this->escaper->escape((($_v44 = ($context["filters"] ?? null)) && is_array($_v44) || $_v44 instanceof ArrayAccess ? ($_v44[(($_v45 = $context["colkey"]) instanceof \Stringable && (is_array($_v44) || $_v44 instanceof \ArrayObject || $_v44 instanceof \ArrayIterator) ? (string) $_v45 : $_v45)] ?? null) : null), "html", null, true)) : (0));
                            yield "\"
                                            min=\"0\" max=\"100\" step=\"1\">
                                    ";
                        } elseif ((                        // line 273
($context["formatter"] ?? null) == "avatar")) {
                            // line 274
                            yield "                                        ";
                            // line 275
                            yield "                                    ";
                        } elseif ((($context["formatter"] ?? null) == "yesno")) {
                            // line 276
                            yield "                                        <select name=\"filters[";
                            yield (string) $this->escaper->escape($context["colkey"], "html", null, true);
                            yield "]\" class=\"form-select\">
                                            <option value=\"\">";
                            // line 277
                            yield (string) $this->escaper->escape(__("All"), "html", null, true);
                            yield "</option>
                                            <option value=\"1\" ";
                            // line 278
                            yield (string) ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), $context["colkey"], [], "array", true, true, false, 278) &&  !(null === (($_v46 = ($context["filters"] ?? null)) && is_array($_v46) || $_v46 instanceof ArrayAccess ? ($_v46[(($_v47 = $context["colkey"]) instanceof \Stringable && (is_array($_v46) || $_v46 instanceof \ArrayObject || $_v46 instanceof \ArrayIterator) ? (string) $_v47 : $_v47)] ?? null) : null)))) ? ((($_v48 = ($context["filters"] ?? null)) && is_array($_v48) || $_v48 instanceof ArrayAccess ? ($_v48[(($_v49 = $context["colkey"]) instanceof \Stringable && (is_array($_v48) || $_v48 instanceof \ArrayObject || $_v48 instanceof \ArrayIterator) ? (string) $_v49 : $_v49)] ?? null) : null)) : ("")) == "1")) ? ("selected") : (""));
                            yield ">
                                                ";
                            // line 279
                            yield (string) $this->escaper->escape(__("Yes"), "html", null, true);
                            yield "
                                            </option>
                                            <option value=\"0\" ";
                            // line 281
                            yield (string) ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), $context["colkey"], [], "array", true, true, false, 281) &&  !(null === (($_v50 = ($context["filters"] ?? null)) && is_array($_v50) || $_v50 instanceof ArrayAccess ? ($_v50[(($_v51 = $context["colkey"]) instanceof \Stringable && (is_array($_v50) || $_v50 instanceof \ArrayObject || $_v50 instanceof \ArrayIterator) ? (string) $_v51 : $_v51)] ?? null) : null)))) ? ((($_v52 = ($context["filters"] ?? null)) && is_array($_v52) || $_v52 instanceof ArrayAccess ? ($_v52[(($_v53 = $context["colkey"]) instanceof \Stringable && (is_array($_v52) || $_v52 instanceof \ArrayObject || $_v52 instanceof \ArrayIterator) ? (string) $_v53 : $_v53)] ?? null) : null)) : ("")) == "0")) ? ("selected") : (""));
                            yield ">
                                                ";
                            // line 282
                            yield (string) $this->escaper->escape(__("No"), "html", null, true);
                            yield "
                                            </option>
                                        </select>
                                    ";
                        } else {
                            // line 286
                            yield "                                        <input type=\"text\" class=\"form-control\"
                                            name=\"filters[";
                            // line 287
                            yield (string) $this->escaper->escape($context["colkey"], "html", null, true);
                            yield "]\"
                                            value=\"";
                            // line 288
                            yield (string) (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), $context["colkey"], [], "array", true, true, false, 288) &&  !(null === (($_v54 = ($context["filters"] ?? null)) && is_array($_v54) || $_v54 instanceof ArrayAccess ? ($_v54[(($_v55 = $context["colkey"]) instanceof \Stringable && (is_array($_v54) || $_v54 instanceof \ArrayObject || $_v54 instanceof \ArrayIterator) ? (string) $_v55 : $_v55)] ?? null) : null)))) ? ($this->escaper->escape((($_v56 = ($context["filters"] ?? null)) && is_array($_v56) || $_v56 instanceof ArrayAccess ? ($_v56[(($_v57 = $context["colkey"]) instanceof \Stringable && (is_array($_v56) || $_v56 instanceof \ArrayObject || $_v56 instanceof \ArrayIterator) ? (string) $_v57 : $_v57)] ?? null) : null), "html", null, true)) : (""));
                            yield "\">
                                    ";
                        }
                        // line 290
                        yield "                                ";
                    }
                    // line 291
                    yield "                            </td>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['colkey'], $context['colum'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 293
                yield "                    </tr>
                ";
            }
            // line 295
            yield "            </thead>
            <tbody>
                ";
            // line 297
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["entries"] ?? null)) > 0)) {
                // line 298
                yield "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["entries"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                    // line 299
                    yield "                        ";
                    $context["row_massiveactions"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "showmassiveactions", [], "array", true, true, false, 299)) ? ((($_v58 = $context["entry"]) && is_array($_v58) || $_v58 instanceof ArrayAccess ? ($_v58["showmassiveactions"] ?? null) : null)) : (($context["showmassiveactions"] ?? null)));
                    // line 300
                    yield "                        <tr
                            class=\"";
                    // line 301
                    yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 301)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("border-transparent") : (""));
                    yield " ";
                    yield (string) $this->escaper->escape(((array_key_exists("row_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["row_class"] ?? null), "")) : ("")), "html", null, true);
                    yield " ";
                    yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "row_class", [], "array", true, true, false, 301)) ? (Twig\Extension\CoreExtension::default((($_v59 = $context["entry"]) && is_array($_v59) || $_v59 instanceof ArrayAccess ? ($_v59["row_class"] ?? null) : null), "")) : ("")), "html", null, true);
                    yield "\"
                            ";
                    // line 302
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "itemtype", [], "array", true, true, false, 302)) {
                        // line 303
                        yield "                                data-itemtype=\"";
                        yield (string) $this->escaper->escape((($_v60 = $context["entry"]) && is_array($_v60) || $_v60 instanceof ArrayAccess ? ($_v60["itemtype"] ?? null) : null), "html", null, true);
                        yield "\"
                            ";
                    }
                    // line 305
                    yield "                            ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "id", [], "array", true, true, false, 305)) {
                        // line 306
                        yield "                                data-id=\"";
                        yield (string) (((CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "id", [], "array", true, true, false, 306) &&  !(null === (($_v61 = $context["entry"]) && is_array($_v61) || $_v61 instanceof ArrayAccess ? ($_v61["id"] ?? null) : null)))) ? ($this->escaper->escape((($_v62 = $context["entry"]) && is_array($_v62) || $_v62 instanceof ArrayAccess ? ($_v62["id"] ?? null) : null), "html", null, true)) : (""));
                        yield "\"
                            ";
                    }
                    // line 308
                    yield "                            ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "row_aria_label", [], "array", true, true, false, 308)) {
                        // line 309
                        yield "                                aria-label=\"";
                        yield (string) $this->escaper->escape((($_v63 = $context["entry"]) && is_array($_v63) || $_v63 instanceof ArrayAccess ? ($_v63["row_aria_label"] ?? null) : null), "html", null, true);
                        yield "\"
                            ";
                    }
                    // line 311
                    yield "                        >
                            ";
                    // line 312
                    if ((($tmp = ($context["showmassiveactions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 313
                        yield "                                <td style=\"width: 10px\">
                                    ";
                        // line 314
                        if ((($tmp = ($context["row_massiveactions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 315
                            yield "                                        ";
                            if (( !CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "skip_ma", [], "array", true, true, false, 315) || ((($_v64 = $context["entry"]) && is_array($_v64) || $_v64 instanceof ArrayAccess ? ($_v64["skip_ma"] ?? null) : null) == false))) {
                                // line 316
                                yield "                                            <input class=\"form-check-input massive_action_checkbox\" type=\"checkbox\" data-glpicore-ma-tags=\"common\"
                                                   value=\"1\" aria-label=\"";
                                // line 317
                                yield (string) $this->escaper->escape(__("Select item"), "html", null, true);
                                yield "\"
                                                   name=\"item[";
                                // line 318
                                yield (string) $this->escaper->escape((($_v65 = $context["entry"]) && is_array($_v65) || $_v65 instanceof ArrayAccess ? ($_v65["itemtype"] ?? null) : null), "html", null, true);
                                yield "][";
                                yield (string) $this->escaper->escape((($_v66 = $context["entry"]) && is_array($_v66) || $_v66 instanceof ArrayAccess ? ($_v66["id"] ?? null) : null), "html", null, true);
                                yield "]\" />
                                        ";
                            }
                            // line 320
                            yield "                                    ";
                        }
                        // line 321
                        yield "                                </td>
                            ";
                    }
                    // line 323
                    yield "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["columns"] ?? null));
                    foreach ($context['_seq'] as $context["colkey"] => $context["colum"]) {
                        // line 324
                        yield "                                ";
                        if (CoreExtension::inFilter($context["colkey"], Twig\Extension\CoreExtension::keys($context["entry"]))) {
                            // line 325
                            yield "                                    ";
                            $context["colspan"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["entry"], ($context["colkey"] . "_colspan"), [], "array", true, true, false, 325)) ? (Twig\Extension\CoreExtension::default((($_v67 = $context["entry"]) && is_array($_v67) || $_v67 instanceof ArrayAccess ? ($_v67[(($_v68 = ($context["colkey"] . "_colspan")) instanceof \Stringable && (is_array($_v67) || $_v67 instanceof \ArrayObject || $_v67 instanceof \ArrayIterator) ? (string) $_v68 : $_v68)] ?? null) : null), 1)) : (1));
                            // line 326
                            yield "                                    ";
                            $context["aria_label"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["entry"], ($context["colkey"] . "_aria_label"), [], "array", true, true, false, 326)) ? (Twig\Extension\CoreExtension::default((($_v69 = $context["entry"]) && is_array($_v69) || $_v69 instanceof ArrayAccess ? ($_v69[(($_v70 = ($context["colkey"] . "_aria_label")) instanceof \Stringable && (is_array($_v69) || $_v69 instanceof \ArrayObject || $_v69 instanceof \ArrayIterator) ? (string) $_v70 : $_v70)] ?? null) : null), "")) : (""));
                            // line 327
                            yield "                                    <td colspan=\"";
                            yield (string) $this->escaper->escape(($context["colspan"] ?? null), "html", null, true);
                            yield "\" aria-label=\"";
                            yield (string) $this->escaper->escape(($context["aria_label"] ?? null), "html", null, true);
                            yield "\">

                                        ";
                            // line 329
                            $context["formatter"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["formatters"] ?? null), $context["colkey"], [], "array", true, true, false, 329) &&  !(null === (($_v71 = ($context["formatters"] ?? null)) && is_array($_v71) || $_v71 instanceof ArrayAccess ? ($_v71[(($_v72 = $context["colkey"]) instanceof \Stringable && (is_array($_v71) || $_v71 instanceof \ArrayObject || $_v71 instanceof \ArrayIterator) ? (string) $_v72 : $_v72)] ?? null) : null)))) ? ((($_v73 = ($context["formatters"] ?? null)) && is_array($_v73) || $_v73 instanceof ArrayAccess ? ($_v73[(($_v74 = $context["colkey"]) instanceof \Stringable && (is_array($_v73) || $_v73 instanceof \ArrayObject || $_v73 instanceof \ArrayIterator) ? (string) $_v74 : $_v74)] ?? null) : null)) : (""));
                            // line 330
                            yield "
                                        ";
                            // line 331
                            if ((($context["formatter"] ?? null) == "maintext")) {
                                // line 332
                                yield "                                            <span class=\"d-inline-block bg-blue-lt p-1 text-truncate\"
                                                title=\"";
                                // line 333
                                yield (string) $this->escaper->escape((($_v75 = $context["entry"]) && is_array($_v75) || $_v75 instanceof ArrayAccess ? ($_v75[(($_v76 = $context["colkey"]) instanceof \Stringable && (is_array($_v75) || $_v75 instanceof \ArrayObject || $_v75 instanceof \ArrayIterator) ? (string) $_v76 : $_v76)] ?? null) : null), "html", null, true);
                                yield "\"
                                                data-bs-toggle=\"tooltip\"
                                                style=\"max-width: 250px;\">
                                                ";
                                // line 336
                                yield (string) $this->escaper->escape((($_v77 = $context["entry"]) && is_array($_v77) || $_v77 instanceof ArrayAccess ? ($_v77[(($_v78 = $context["colkey"]) instanceof \Stringable && (is_array($_v77) || $_v77 instanceof \ArrayObject || $_v77 instanceof \ArrayIterator) ? (string) $_v78 : $_v78)] ?? null) : null), "html", null, true);
                                yield "
                                            </span>
                                        ";
                            } elseif ((                            // line 338
($context["formatter"] ?? null) == "longtext")) {
                                // line 339
                                yield "                                            <span class=\"d-inline-block text-truncate\"
                                                title=\"";
                                // line 340
                                yield (string) $this->escaper->escape((($_v79 = $context["entry"]) && is_array($_v79) || $_v79 instanceof ArrayAccess ? ($_v79[(($_v80 = $context["colkey"]) instanceof \Stringable && (is_array($_v79) || $_v79 instanceof \ArrayObject || $_v79 instanceof \ArrayIterator) ? (string) $_v80 : $_v80)] ?? null) : null), "html", null, true);
                                yield "\"
                                                data-bs-toggle=\"tooltip\"
                                                style=\"max-width: 250px;\">
                                                ";
                                // line 343
                                yield (string) $this->escaper->escape((($_v81 = $context["entry"]) && is_array($_v81) || $_v81 instanceof ArrayAccess ? ($_v81[(($_v82 = $context["colkey"]) instanceof \Stringable && (is_array($_v81) || $_v81 instanceof \ArrayObject || $_v81 instanceof \ArrayIterator) ? (string) $_v82 : $_v82)] ?? null) : null), "html", null, true);
                                yield "
                                            </span>
                                        ";
                            } elseif ((is_string($_v83 =                             // line 345
($context["formatter"] ?? null)) && is_string($_v84 = "progress") && str_starts_with($_v83, $_v84))) {
                                // line 346
                                yield "                                            ";
                                yield (string) $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getProgressBar((($_v85 = $context["entry"]) && is_array($_v85) || $_v85 instanceof ArrayAccess ? ($_v85[(($_v86 = $context["colkey"]) instanceof \Stringable && (is_array($_v85) || $_v85 instanceof \ArrayObject || $_v85 instanceof \ArrayIterator) ? (string) $_v86 : $_v86)] ?? null) : null));
                                yield "
                                        ";
                            } elseif ((                            // line 347
($context["formatter"] ?? null) == "date")) {
                                // line 348
                                yield "                                            ";
                                yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDate((($_v87 = $context["entry"]) && is_array($_v87) || $_v87 instanceof ArrayAccess ? ($_v87[(($_v88 = $context["colkey"]) instanceof \Stringable && (is_array($_v87) || $_v87 instanceof \ArrayObject || $_v87 instanceof \ArrayIterator) ? (string) $_v88 : $_v88)] ?? null) : null)), "html", null, true);
                                yield "
                                        ";
                            } elseif ((                            // line 349
($context["formatter"] ?? null) == "datetime")) {
                                // line 350
                                yield "                                            ";
                                yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($_v89 = $context["entry"]) && is_array($_v89) || $_v89 instanceof ArrayAccess ? ($_v89[(($_v90 = $context["colkey"]) instanceof \Stringable && (is_array($_v89) || $_v89 instanceof \ArrayObject || $_v89 instanceof \ArrayIterator) ? (string) $_v90 : $_v90)] ?? null) : null)), "html", null, true);
                                yield "
                                        ";
                            } elseif ((                            // line 351
($context["formatter"] ?? null) == "duration")) {
                                // line 352
                                yield "                                            ";
                                yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDuration((($_v91 = $context["entry"]) && is_array($_v91) || $_v91 instanceof ArrayAccess ? ($_v91[(($_v92 = $context["colkey"]) instanceof \Stringable && (is_array($_v91) || $_v91 instanceof \ArrayObject || $_v91 instanceof \ArrayIterator) ? (string) $_v92 : $_v92)] ?? null) : null)), "html", null, true);
                                yield "
                                        ";
                            } elseif ((                            // line 353
($context["formatter"] ?? null) == "bytesize")) {
                                // line 354
                                yield "                                            ";
                                yield (string) $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Toolbox::getSize", [(($_v93 = $context["entry"]) && is_array($_v93) || $_v93 instanceof ArrayAccess ? ($_v93[(($_v94 = $context["colkey"]) instanceof \Stringable && (is_array($_v93) || $_v93 instanceof \ArrayObject || $_v93 instanceof \ArrayIterator) ? (string) $_v94 : $_v94)] ?? null) : null)]);
                                yield "
                                        ";
                            } elseif ((                            // line 355
($context["formatter"] ?? null) == "number")) {
                                // line 356
                                yield "                                            ";
                                yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedNumber((($_v95 = $context["entry"]) && is_array($_v95) || $_v95 instanceof ArrayAccess ? ($_v95[(($_v96 = $context["colkey"]) instanceof \Stringable && (is_array($_v95) || $_v95 instanceof \ArrayObject || $_v95 instanceof \ArrayIterator) ? (string) $_v96 : $_v96)] ?? null) : null)), "html", null, true);
                                yield "
                                        ";
                            } elseif ((                            // line 357
($context["formatter"] ?? null) == "integer")) {
                                // line 358
                                yield "                                            ";
                                yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedInteger((($_v97 = $context["entry"]) && is_array($_v97) || $_v97 instanceof ArrayAccess ? ($_v97[(($_v98 = $context["colkey"]) instanceof \Stringable && (is_array($_v97) || $_v97 instanceof \ArrayObject || $_v97 instanceof \ArrayIterator) ? (string) $_v98 : $_v98)] ?? null) : null)), "html", null, true);
                                yield "
                                        ";
                            } elseif ((                            // line 359
($context["formatter"] ?? null) == "raw_html")) {
                                // line 360
                                yield "                                            ";
                                yield (string) (($_v99 = $context["entry"]) && is_array($_v99) || $_v99 instanceof ArrayAccess ? ($_v99[(($_v100 = $context["colkey"]) instanceof \Stringable && (is_array($_v99) || $_v99 instanceof \ArrayObject || $_v99 instanceof \ArrayIterator) ? (string) $_v100 : $_v100)] ?? null) : null);
                                yield "
                                        ";
                            } elseif ((                            // line 361
($context["formatter"] ?? null) == "avatar")) {
                                // line 362
                                yield "                                            ";
                                // line 363
                                yield "                                            ";
                                $context["entry_data"] = (($_v101 = $context["entry"]) && is_array($_v101) || $_v101 instanceof ArrayAccess ? ($_v101[(($_v102 = $context["colkey"]) instanceof \Stringable && (is_array($_v101) || $_v101 instanceof \ArrayObject || $_v101 instanceof \ArrayIterator) ? (string) $_v102 : $_v102)] ?? null) : null);
                                // line 364
                                yield "                                            ";
                                $context["avatar_size"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["entry_data"] ?? null), "avatar_size", [], "array", true, true, false, 364) &&  !(null === (($_v103 = ($context["entry_data"] ?? null)) && is_array($_v103) || $_v103 instanceof ArrayAccess ? ($_v103["avatar_size"] ?? null) : null)))) ? ((($_v104 = ($context["entry_data"] ?? null)) && is_array($_v104) || $_v104 instanceof ArrayAccess ? ($_v104["avatar_size"] ?? null) : null)) : ("avatar-md"));
                                // line 365
                                yield "                                            ";
                                $context["img"] = (($_v105 = ($context["entry_data"] ?? null)) && is_array($_v105) || $_v105 instanceof ArrayAccess ? ($_v105["picture"] ?? null) : null);
                                // line 366
                                yield "                                            ";
                                $context["initials"] = (($_v106 = ($context["entry_data"] ?? null)) && is_array($_v106) || $_v106 instanceof ArrayAccess ? ($_v106["initials"] ?? null) : null);
                                // line 367
                                yield "                                            ";
                                $context["bg_color"] = (( !Twig\Extension\CoreExtension::testEmpty(($context["img"] ?? null))) ? ("inherit") : ((($_v107 = ($context["entry_data"] ?? null)) && is_array($_v107) || $_v107 instanceof ArrayAccess ? ($_v107["initials_bg"] ?? null) : null)));
                                // line 368
                                yield "                                            <span class=\"avatar ";
                                yield (string) $this->escaper->escape(($context["avatar_size"] ?? null), "html", null, true);
                                yield " rounded\"
                                                style=\"";
                                // line 369
                                if ( !(null === ($context["img"] ?? null))) {
                                    yield " background-image: url(";
                                    yield (string) $this->escaper->escape(($context["img"] ?? null), "html", null, true);
                                    yield "); ";
                                }
                                yield " background-color: ";
                                yield (string) $this->escaper->escape(($context["bg_color"] ?? null), "html", null, true);
                                yield "\">
                                                ";
                                // line 370
                                if (Twig\Extension\CoreExtension::testEmpty(($context["img"] ?? null))) {
                                    // line 371
                                    yield "                                                    ";
                                    yield (string) $this->escaper->escape(($context["initials"] ?? null), "html", null, true);
                                    yield "
                                                ";
                                }
                                // line 373
                                yield "                                            </span>
                                        ";
                            } elseif (((                            // line 374
($context["formatter"] ?? null) == "badge") &&  !Twig\Extension\CoreExtension::testEmpty((($_v108 = $context["entry"]) && is_array($_v108) || $_v108 instanceof ArrayAccess ? ($_v108[(($_v109 = $context["colkey"]) instanceof \Stringable && (is_array($_v108) || $_v108 instanceof \ArrayObject || $_v108 instanceof \ArrayIterator) ? (string) $_v109 : $_v109)] ?? null) : null)))) {
                                // line 375
                                yield "                                            ";
                                $context["entry_data"] = (($_v110 = $context["entry"]) && is_array($_v110) || $_v110 instanceof ArrayAccess ? ($_v110[(($_v111 = $context["colkey"]) instanceof \Stringable && (is_array($_v110) || $_v110 instanceof \ArrayObject || $_v110 instanceof \ArrayIterator) ? (string) $_v111 : $_v111)] ?? null) : null);
                                // line 376
                                yield "                                            ";
                                $context["content"] = (($_v112 = ($context["entry_data"] ?? null)) && is_array($_v112) || $_v112 instanceof ArrayAccess ? ($_v112["content"] ?? null) : null);
                                // line 377
                                yield "                                            ";
                                $context["color"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["entry_data"] ?? null), "color", [], "array", true, true, false, 377) &&  !(null === (($_v113 = ($context["entry_data"] ?? null)) && is_array($_v113) || $_v113 instanceof ArrayAccess ? ($_v113["color"] ?? null) : null)))) ? ((($_v114 = ($context["entry_data"] ?? null)) && is_array($_v114) || $_v114 instanceof ArrayAccess ? ($_v114["color"] ?? null) : null)) : ("#BBBBBB"));
                                // line 378
                                yield "                                            ";
                                if ( !CoreExtension::matches("/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})\$/", ($context["color"] ?? null))) {
                                    // line 379
                                    yield "                                                ";
                                    $context["color"] = "#BBBBBB";
                                    // line 380
                                    yield "                                            ";
                                }
                                // line 381
                                yield "                                            ";
                                if ( !Twig\Extension\CoreExtension::testEmpty(($context["content"] ?? null))) {
                                    // line 382
                                    yield "                                                <div class=\"badge_block\" style=\"border-color: ";
                                    yield (string) $this->escaper->escape(($context["color"] ?? null), "html", null, true);
                                    yield "\">
                                                    <span class=\"me-1\" style=\"background: ";
                                    // line 383
                                    yield (string) $this->escaper->escape(($context["color"] ?? null), "html", null, true);
                                    yield "\"></span>
                                                    ";
                                    // line 384
                                    yield (string) $this->escaper->escape(($context["content"] ?? null), "html", null, true);
                                    yield "
                                                </div>
                                            ";
                                }
                                // line 387
                                yield "                                        ";
                            } elseif ((($context["formatter"] ?? null) == "yesno")) {
                                // line 388
                                yield "                                            ";
                                if (((($_v115 = $context["entry"]) && is_array($_v115) || $_v115 instanceof ArrayAccess ? ($_v115[(($_v116 = $context["colkey"]) instanceof \Stringable && (is_array($_v115) || $_v115 instanceof \ArrayObject || $_v115 instanceof \ArrayIterator) ? (string) $_v116 : $_v116)] ?? null) : null) == 1)) {
                                    // line 389
                                    yield "                                                <div aria-label=\"";
                                    yield (string) $this->escaper->escape(__("Yes"), "html", null, true);
                                    yield "\"><i class=\"ti ti-circle-check\" aria-hidden=\"true\"></i></div>
                                            ";
                                } else {
                                    // line 391
                                    yield "                                                <div aria-label=\"";
                                    yield (string) $this->escaper->escape(__("No"), "html", null, true);
                                    yield "\"></div>
                                            ";
                                }
                                // line 393
                                yield "                                        ";
                            } else {
                                // line 394
                                yield "                                            ";
                                yield (string) $this->escaper->escape((($_v117 = $context["entry"]) && is_array($_v117) || $_v117 instanceof ArrayAccess ? ($_v117[(($_v118 = $context["colkey"]) instanceof \Stringable && (is_array($_v117) || $_v117 instanceof \ArrayObject || $_v117 instanceof \ArrayIterator) ? (string) $_v118 : $_v118)] ?? null) : null), "html", null, true);
                                yield "
                                        ";
                            }
                            // line 396
                            yield "                                    </td>
                                ";
                        }
                        // line 398
                        yield "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['colkey'], $context['colum'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent);
                    $context += $_parent;
                    // line 399
                    yield "                            ";
                    if ( !(($tmp = (((array_key_exists("nofilter", $context) &&  !(null === $context["nofilter"]))) ? ($context["nofilter"]) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 400
                        yield "                                <td></td>
                            ";
                    }
                    // line 402
                    yield "                        </tr>
                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 404
                yield "                ";
            } else {
                // line 405
                yield "                    <tr>
                        <td colspan=\"";
                // line 406
                yield (string) $this->escaper->escape(($context["total_cols"] ?? null), "html", null, true);
                yield "\">
                            ";
                // line 407
                yield (string) $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("Alert", ["content" => __("No results found")]);
                yield "
                        </td>
                    </tr>
                ";
            }
            // line 411
            yield "            </tbody>
            ";
            // line 412
            if ((($tmp = ($context["footers"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 413
                yield "                <tfoot class=\"";
                yield (string) $this->escaper->escape(((array_key_exists("footer_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["footer_class"] ?? null), "")) : ("")), "html", null, true);
                yield "\">
                    ";
                // line 414
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["footers"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["footer"]) {
                    // line 415
                    yield "                        <tr>
                            ";
                    // line 416
                    if ((($tmp = ($context["showmassiveactions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 417
                        yield "                                <td></td>
                            ";
                    }
                    // line 419
                    yield "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable($context["footer"]);
                    foreach ($context['_seq'] as $context["footer_col"] => $context["footerval"]) {
                        // line 420
                        yield "                                <td>";
                        yield (string) Twig\Extension\CoreExtension::nl2br($this->escaper->escape($context["footerval"], "html", null, true));
                        yield "</td>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['footer_col'], $context['footerval'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent);
                    $context += $_parent;
                    // line 422
                    yield "                            ";
                    if ( !array_key_exists("nofilter", $context)) {
                        // line 423
                        yield "                                <td></td>
                            ";
                    }
                    // line 425
                    yield "                        </tr>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['footer'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 427
                yield "                </tfoot>
            ";
            }
            // line 429
            yield "        </table>
    </div>

    ";
            // line 432
            if ((($tmp = ($context["use_pager"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 433
                yield "        <div class=\"ms-auto d-inline-flex align-items-center d-none d-md-block my-2\">
            ";
                // line 434
                yield (string) $this->escaper->escape(__("Entries to show:"), "html", null, true);
                yield "
            ";
                // line 435
                yield from $this->load("components/dropdown/limit.html.twig", 435)->unwrap()->yield($context);
                // line 436
                yield "        </div>
    ";
            }
            // line 438
            yield "
    <script type=\"text/javascript\">
    \$(function() {
        \$(\x27.filter-select-multiple\x27).select2();
    });
    </script>
";
        }
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/datatable.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDefaultEscapeStrategy(): string|false
    {
        return "html";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  1020 => 438,  1016 => 436,  1014 => 435,  1010 => 434,  1007 => 433,  1005 => 432,  1000 => 429,  996 => 427,  988 => 425,  984 => 423,  981 => 422,  971 => 420,  966 => 419,  962 => 417,  960 => 416,  957 => 415,  953 => 414,  948 => 413,  946 => 412,  943 => 411,  936 => 407,  932 => 406,  929 => 405,  926 => 404,  910 => 402,  906 => 400,  903 => 399,  896 => 398,  892 => 396,  886 => 394,  883 => 393,  877 => 391,  871 => 389,  868 => 388,  865 => 387,  859 => 384,  855 => 383,  850 => 382,  847 => 381,  844 => 380,  841 => 379,  838 => 378,  835 => 377,  832 => 376,  829 => 375,  827 => 374,  824 => 373,  818 => 371,  816 => 370,  806 => 369,  801 => 368,  798 => 367,  795 => 366,  792 => 365,  789 => 364,  786 => 363,  784 => 362,  782 => 361,  777 => 360,  775 => 359,  770 => 358,  768 => 357,  763 => 356,  761 => 355,  756 => 354,  754 => 353,  749 => 352,  747 => 351,  742 => 350,  740 => 349,  735 => 348,  733 => 347,  728 => 346,  726 => 345,  721 => 343,  715 => 340,  712 => 339,  710 => 338,  705 => 336,  699 => 333,  696 => 332,  694 => 331,  691 => 330,  689 => 329,  681 => 327,  678 => 326,  675 => 325,  672 => 324,  667 => 323,  663 => 321,  660 => 320,  653 => 318,  649 => 317,  646 => 316,  643 => 315,  641 => 314,  638 => 313,  636 => 312,  633 => 311,  627 => 309,  624 => 308,  618 => 306,  615 => 305,  609 => 303,  607 => 302,  599 => 301,  596 => 300,  593 => 299,  575 => 298,  573 => 297,  569 => 295,  565 => 293,  557 => 291,  554 => 290,  549 => 288,  545 => 287,  542 => 286,  535 => 282,  531 => 281,  526 => 279,  522 => 278,  518 => 277,  513 => 276,  510 => 275,  508 => 274,  506 => 273,  501 => 271,  497 => 270,  494 => 269,  492 => 268,  489 => 267,  487 => 264,  486 => 262,  484 => 261,  482 => 260,  479 => 259,  477 => 256,  476 => 254,  474 => 253,  472 => 252,  468 => 251,  467 => 248,  466 => 246,  464 => 245,  462 => 244,  459 => 243,  449 => 240,  442 => 239,  438 => 238,  432 => 236,  429 => 235,  427 => 234,  424 => 233,  421 => 232,  417 => 231,  412 => 229,  408 => 227,  404 => 225,  402 => 224,  399 => 223,  396 => 222,  392 => 220,  387 => 217,  381 => 214,  375 => 212,  372 => 211,  366 => 208,  360 => 206,  358 => 205,  354 => 203,  352 => 202,  349 => 201,  341 => 199,  337 => 197,  335 => 196,  330 => 195,  325 => 193,  320 => 192,  318 => 191,  314 => 189,  312 => 188,  309 => 187,  306 => 186,  303 => 185,  300 => 184,  297 => 183,  294 => 182,  291 => 181,  288 => 180,  285 => 179,  280 => 178,  273 => 174,  269 => 173,  265 => 172,  261 => 170,  259 => 169,  256 => 168,  253 => 167,  249 => 165,  244 => 164,  240 => 163,  235 => 162,  228 => 161,  222 => 160,  219 => 159,  216 => 158,  213 => 157,  210 => 156,  208 => 155,  198 => 153,  194 => 151,  192 => 150,  189 => 149,  187 => 148,  177 => 147,  174 => 146,  170 => 144,  168 => 143,  167 => 142,  165 => 141,  162 => 140,  159 => 139,  149 => 132,  142 => 127,  139 => 126,  134 => 123,  130 => 122,  125 => 121,  119 => 120,  115 => 118,  112 => 117,  109 => 116,  106 => 115,  103 => 114,  101 => 113,  95 => 111,  93 => 110,  90 => 109,  88 => 108,  85 => 106,  83 => 105,  80 => 104,  76 => 102,  74 => 101,  71 => 100,  69 => 99,  67 => 98,  65 => 97,  63 => 96,  61 => 95,  59 => 94,  57 => 93,  55 => 92,  53 => 91,  50 => 90,  47 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/datatable.html.twig", "/var/www/html/glpi/templates/components/datatable.html.twig");
    }
}
