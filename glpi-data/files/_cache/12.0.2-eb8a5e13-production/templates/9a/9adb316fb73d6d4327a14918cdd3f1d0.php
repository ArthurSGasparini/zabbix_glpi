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

/* components/checkbox_matrix.html.twig */
class __TwigTemplate_820cca55aa12bd2cdc792f0d08c9afe4 extends Template
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
<div class=\"mb-4 table-responsive\">
   <table class=\"table table-hover card-table\">
      <thead>
         ";
        // line 36
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["title"] ?? null))) {
            // line 37
            yield "         <tr class=\"border-top\">
            <th colspan=\"";
            // line 38
            yield (string) $this->escaper->escape(($context["number_columns"] ?? null), "html", null, true);
            yield "\">
               <span class=\"fs-4\">";
            // line 39
            yield (string) $this->escaper->escape(($context["title"] ?? null), "html", null, true);
            yield "</span>
            </th>
         </tr>
         ";
        }
        // line 43
        yield "         <tr>
            <th>";
        // line 44
        yield (string) (($_v0 = ($context["param"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["first_cell"] ?? null) : null);
        yield "</th>
            ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["columns"] ?? null));
        foreach ($context['_seq'] as $context["col_name"] => $context["column"]) {
            // line 46
            yield "               ";
            $context["col_id"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::cleanId", [((("col_label_" . $context["col_name"]) . "_") . (($_v1 = ($context["param"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["rand"] ?? null) : null))]);
            // line 47
            yield "               <th id=\"";
            yield (string) $this->escaper->escape(($context["col_id"] ?? null), "html", null, true);
            yield "\">
                  ";
            // line 48
            if ( !is_iterable($context["column"])) {
                // line 49
                yield "                     ";
                yield (string) $this->escaper->escape($context["column"], "html", null, true);
                yield "
                  ";
            } else {
                // line 51
                yield "                     ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["column"], "short", [], "array", true, true, false, 51) && CoreExtension::getAttribute($this->env, $this->source, $context["column"], "long", [], "array", true, true, false, 51))) {
                    // line 52
                    yield "                        ";
                    yield (string) $this->escaper->escape((($_v2 = $context["column"]) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["short"] ?? null) : null), "html", null, true);
                    yield "
                        ";
                    // line 53
                    $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::showToolTip", [(($_v3 = $context["column"]) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["long"] ?? null) : null), ["applyto" => ($context["col_id"] ?? null)]]);
                    // line 54
                    yield "                     ";
                } else {
                    // line 55
                    yield "                        ";
                    yield (string) $this->escaper->escape((($_v4 = $context["column"]) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["label"] ?? null) : null), "html", null, true);
                    yield "
                     ";
                }
                // line 57
                yield "                  ";
            }
            // line 58
            yield "               </th>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['col_name'], $context['column'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 60
        yield "
            ";
        // line 61
        if ((($tmp = (($_v5 = ($context["param"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["row_check_all"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 62
            yield "               ";
            $context["col_id"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::cleanId", [("col_of_table_" . (($_v6 = ($context["param"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["rand"] ?? null) : null))]);
            // line 63
            yield "               <th id=\"";
            yield (string) $this->escaper->escape(($context["col_id"] ?? null), "html", null, true);
            yield "\">
                  ";
            // line 64
            yield (string) $this->escaper->escape(__("Select/unselect all"), "html", null, true);
            yield "
               </th>
            ";
        }
        // line 67
        yield "         </tr>
      </thead>
      <tbody>
         ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["row_name"] => $context["row"]) {
            // line 71
            yield "            <tr>
               ";
            // line 72
            if ( !is_iterable($context["row"])) {
                // line 73
                yield "                  <td colspan=\"";
                yield (string) $this->escaper->escape(($context["number_columns"] ?? null), "html", null, true);
                yield "\">";
                yield (string) $this->escaper->escape($context["row"], "html", null, true);
                yield "</td>
               ";
            } else {
                // line 75
                yield "                  ";
                $context["row_id"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::cleanId", [((("row_label_" . $context["row_name"]) . "_") . (($_v7 = ($context["param"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["rand"] ?? null) : null))]);
                // line 76
                yield "                  <td class=\"";
                yield (string) (((CoreExtension::getAttribute($this->env, $this->source, $context["row"], "class", [], "array", true, true, false, 76) &&  !(null === (($_v8 = $context["row"]) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["class"] ?? null) : null)))) ? ($this->escaper->escape((($_v9 = $context["row"]) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["class"] ?? null) : null), "html", null, true)) : (""));
                yield "\" id=\"";
                yield (string) $this->escaper->escape(($context["row_id"] ?? null), "html", null, true);
                yield "\">
                     ";
                // line 77
                yield (string) (((CoreExtension::getAttribute($this->env, $this->source, $context["row"], "label", [], "array", true, true, false, 77) &&  !(null === (($_v10 = $context["row"]) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["label"] ?? null) : null)))) ? ($this->escaper->escape((($_v11 = $context["row"]) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["label"] ?? null) : null), "html", null, true)) : ("&nbsp;"));
                yield "
                  </td>

                  ";
                // line 80
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["columns"] ?? null));
                foreach ($context['_seq'] as $context["col_name"] => $context["column"]) {
                    // line 81
                    yield "                     ";
                    $context["content"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "columns", [], "array", false, true, false, 81), $context["col_name"], [], "array", true, true, false, 81) &&  !(null === (($_v12 = (($_v13 = $context["row"]) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["columns"] ?? null) : null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12[(($_v14 = $context["col_name"]) instanceof \Stringable && (is_array($_v12) || $_v12 instanceof \ArrayObject || $_v12 instanceof \ArrayIterator) ? (string) $_v14 : $_v14)] ?? null) : null)))) ? ((($_v15 = (($_v16 = $context["row"]) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16["columns"] ?? null) : null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15[(($_v17 = $context["col_name"]) instanceof \Stringable && (is_array($_v15) || $_v15 instanceof \ArrayObject || $_v15 instanceof \ArrayIterator) ? (string) $_v17 : $_v17)] ?? null) : null)) : (false));
                    // line 82
                    yield "                     <td>
                        ";
                    // line 83
                    if ((is_iterable(($context["content"] ?? null)) && CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "checked", [], "array", true, true, false, 83))) {
                        // line 84
                        yield "                           ";
                        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "readonly", [], "array", true, true, false, 84)) {
                            // line 85
                            yield "                              ";
                            $context["content"] = Twig\Extension\CoreExtension::merge(($context["content"] ?? null), ["readonly" => false]);
                            // line 86
                            yield "                           ";
                        }
                        // line 87
                        yield "                           ";
                        $context["content"] = Twig\Extension\CoreExtension::merge(($context["content"] ?? null), ["name" => (((                        // line 88
$context["row_name"] . "[") . $context["col_name"]) . "]"), "id" => $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::cleanId", [((((("cb_" .                         // line 89
$context["row_name"]) . "_") . $context["col_name"]) . "_") . (($_v18 = ($context["param"] ?? null)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18["rand"] ?? null) : null))])]);
                        // line 91
                        yield "                           ";
                        $context["massive_tags"] = [];
                        // line 92
                        yield "                           ";
                        if ((($tmp = (($_v19 = ($context["param"] ?? null)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19["row_check_all"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 93
                            yield "                              ";
                            $context["massive_tags"] = Twig\Extension\CoreExtension::merge(($context["massive_tags"] ?? null), [((("row_" .                             // line 94
$context["row_name"]) . "_") . (($_v20 = ($context["param"] ?? null)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20["rand"] ?? null) : null))]);
                            // line 96
                            yield "                           ";
                        }
                        // line 97
                        yield "                           ";
                        if ((($tmp = (($_v21 = ($context["param"] ?? null)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21["col_check_all"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 98
                            yield "                              ";
                            $context["massive_tags"] = Twig\Extension\CoreExtension::merge(($context["massive_tags"] ?? null), [((("col_" .                             // line 99
$context["col_name"]) . "_") . (($_v22 = ($context["param"] ?? null)) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22["rand"] ?? null) : null))]);
                            // line 101
                            yield "                           ";
                        }
                        // line 102
                        yield "                           ";
                        if (((($tmp = (($_v23 = ($context["param"] ?? null)) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23["row_check_all"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = (($_v24 = ($context["param"] ?? null)) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24["col_check_all"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                            // line 103
                            yield "                              ";
                            $context["massive_tags"] = Twig\Extension\CoreExtension::merge(($context["massive_tags"] ?? null), [("table_" . (($_v25 =                             // line 104
($context["param"] ?? null)) && is_array($_v25) || $_v25 instanceof ArrayAccess ? ($_v25["rand"] ?? null) : null))]);
                            // line 106
                            yield "                           ";
                        }
                        // line 107
                        yield "                           ";
                        $context["content"] = Twig\Extension\CoreExtension::merge(($context["content"] ?? null), ["massive_tags" =>                         // line 108
($context["massive_tags"] ?? null)]);
                        // line 110
                        yield "                           ";
                        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::showCheckbox", [($context["content"] ?? null)]);
                        // line 111
                        yield "
                        ";
                    } else {
                        // line 113
                        yield "                           ";
                        if ( !is_iterable(($context["content"] ?? null))) {
                            // line 114
                            yield "                              ";
                            yield (string) $this->escaper->escape(($context["content"] ?? null), "html", null, true);
                            yield "
                           ";
                        }
                        // line 116
                        yield "                        ";
                    }
                    // line 117
                    yield "                     </td>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['col_name'], $context['column'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 119
                yield "
                  ";
                // line 120
                if ((($tmp = (($_v26 = ($context["param"] ?? null)) && is_array($_v26) || $_v26 instanceof ArrayAccess ? ($_v26["row_check_all"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 121
                    yield "                     <td>
                        ";
                    // line 122
                    $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::showCheckbox", [["title" => __("Check/uncheck all"), "criterion" => ["tag_for_massive" => ((("row_" .                     // line 125
$context["row_name"]) . "_") . (($_v27 = ($context["param"] ?? null)) && is_array($_v27) || $_v27 instanceof ArrayAccess ? ($_v27["rand"] ?? null) : null))], "massive_tags" => ("table_" . (($_v28 =                     // line 127
($context["param"] ?? null)) && is_array($_v28) || $_v28 instanceof ArrayAccess ? ($_v28["rand"] ?? null) : null)), "id" => $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::cleanId", [((("cb_checkall_row_" .                     // line 128
$context["row_name"]) . "_") . (($_v29 = ($context["param"] ?? null)) && is_array($_v29) || $_v29 instanceof ArrayAccess ? ($_v29["rand"] ?? null) : null))]), "checked" => ((($_v30 = (($_v31 =                     // line 129
($context["nb_cb_per_row"] ?? null)) && is_array($_v31) || $_v31 instanceof ArrayAccess ? ($_v31[(($_v32 = $context["row_name"]) instanceof \Stringable && (is_array($_v31) || $_v31 instanceof \ArrayObject || $_v31 instanceof \ArrayIterator) ? (string) $_v32 : $_v32)] ?? null) : null)) && is_array($_v30) || $_v30 instanceof ArrayAccess ? ($_v30["checked"] ?? null) : null) >= (($_v33 = (($_v34 = ($context["nb_cb_per_row"] ?? null)) && is_array($_v34) || $_v34 instanceof ArrayAccess ? ($_v34[(($_v35 = $context["row_name"]) instanceof \Stringable && (is_array($_v34) || $_v34 instanceof \ArrayObject || $_v34 instanceof \ArrayIterator) ? (string) $_v35 : $_v35)] ?? null) : null)) && is_array($_v33) || $_v33 instanceof ArrayAccess ? ($_v33["total"] ?? null) : null))]]);
                    // line 131
                    yield "                     </td>
                  ";
                }
                // line 133
                yield "               ";
            }
            // line 134
            yield "            </tr>
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['row_name'], $context['row'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 136
        yield "
         ";
        // line 137
        if ((($tmp = (($_v36 = ($context["param"] ?? null)) && is_array($_v36) || $_v36 instanceof ArrayAccess ? ($_v36["col_check_all"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 138
            yield "            <tr>
               <td>";
            // line 139
            yield (string) $this->escaper->escape(__("Select/unselect all"), "html", null, true);
            yield "</td>
               ";
            // line 140
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["columns"] ?? null));
            foreach ($context['_seq'] as $context["col_name"] => $context["column"]) {
                // line 141
                yield "                  <td>
                     ";
                // line 142
                if (((($_v37 = (($_v38 = ($context["nb_cb_per_col"] ?? null)) && is_array($_v38) || $_v38 instanceof ArrayAccess ? ($_v38[(($_v39 = $context["col_name"]) instanceof \Stringable && (is_array($_v38) || $_v38 instanceof \ArrayObject || $_v38 instanceof \ArrayIterator) ? (string) $_v39 : $_v39)] ?? null) : null)) && is_array($_v37) || $_v37 instanceof ArrayAccess ? ($_v37["total"] ?? null) : null) >= 2)) {
                    // line 143
                    yield "                        ";
                    $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::showCheckbox", [["title" => __("Check/uncheck all"), "criterion" => ["tag_for_massive" => ((("col_" .                     // line 146
$context["col_name"]) . "_") . (($_v40 = ($context["param"] ?? null)) && is_array($_v40) || $_v40 instanceof ArrayAccess ? ($_v40["rand"] ?? null) : null))], "massive_tags" => ("table_" . (($_v41 =                     // line 148
($context["param"] ?? null)) && is_array($_v41) || $_v41 instanceof ArrayAccess ? ($_v41["rand"] ?? null) : null)), "id" => $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::cleanId", [(("cb_checkall_col_" .                     // line 149
$context["col_name"]) . (($_v42 = ($context["param"] ?? null)) && is_array($_v42) || $_v42 instanceof ArrayAccess ? ($_v42["rand"] ?? null) : null))]), "checked" => ((($_v43 = (($_v44 =                     // line 150
($context["nb_cb_per_col"] ?? null)) && is_array($_v44) || $_v44 instanceof ArrayAccess ? ($_v44[(($_v45 = $context["col_name"]) instanceof \Stringable && (is_array($_v44) || $_v44 instanceof \ArrayObject || $_v44 instanceof \ArrayIterator) ? (string) $_v45 : $_v45)] ?? null) : null)) && is_array($_v43) || $_v43 instanceof ArrayAccess ? ($_v43["checked"] ?? null) : null) >= (($_v46 = (($_v47 = ($context["nb_cb_per_col"] ?? null)) && is_array($_v47) || $_v47 instanceof ArrayAccess ? ($_v47[(($_v48 = $context["col_name"]) instanceof \Stringable && (is_array($_v47) || $_v47 instanceof \ArrayObject || $_v47 instanceof \ArrayIterator) ? (string) $_v48 : $_v48)] ?? null) : null)) && is_array($_v46) || $_v46 instanceof ArrayAccess ? ($_v46["total"] ?? null) : null))]]);
                    // line 152
                    yield "                     ";
                }
                // line 153
                yield "                  </td>
               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['col_name'], $context['column'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 155
            yield "
               ";
            // line 156
            if ((($tmp = (($_v49 = ($context["param"] ?? null)) && is_array($_v49) || $_v49 instanceof ArrayAccess ? ($_v49["row_check_all"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 157
                yield "                  <td>
                     ";
                // line 158
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::showCheckbox", [["title" => __("Check/uncheck all"), "criterion" => ["tag_for_massive" => ("table_" . (($_v50 =                 // line 161
($context["param"] ?? null)) && is_array($_v50) || $_v50 instanceof ArrayAccess ? ($_v50["rand"] ?? null) : null))], "massive_tags" => "", "id" => $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::cleanId", [("cb_checkall_table_" . (($_v51 =                 // line 164
($context["param"] ?? null)) && is_array($_v51) || $_v51 instanceof ArrayAccess ? ($_v51["rand"] ?? null) : null))]), "specific_tags" => ["data-testid" => "cb-checkall-table"]]]);
                // line 167
                yield "                  </td>
               ";
            }
            // line 169
            yield "            </tr>
         ";
        }
        // line 171
        yield "      </tbody>
   </table>
</div>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/checkbox_matrix.html.twig";
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
        return array (  361 => 171,  357 => 169,  353 => 167,  351 => 164,  350 => 161,  349 => 158,  346 => 157,  344 => 156,  341 => 155,  333 => 153,  330 => 152,  328 => 150,  327 => 149,  326 => 148,  325 => 146,  323 => 143,  321 => 142,  318 => 141,  314 => 140,  310 => 139,  307 => 138,  305 => 137,  302 => 136,  294 => 134,  291 => 133,  287 => 131,  285 => 129,  284 => 128,  283 => 127,  282 => 125,  281 => 122,  278 => 121,  276 => 120,  273 => 119,  265 => 117,  262 => 116,  256 => 114,  253 => 113,  249 => 111,  246 => 110,  244 => 108,  242 => 107,  239 => 106,  237 => 104,  235 => 103,  232 => 102,  229 => 101,  227 => 99,  225 => 98,  222 => 97,  219 => 96,  217 => 94,  215 => 93,  212 => 92,  209 => 91,  207 => 89,  206 => 88,  204 => 87,  201 => 86,  198 => 85,  195 => 84,  193 => 83,  190 => 82,  187 => 81,  183 => 80,  177 => 77,  170 => 76,  167 => 75,  159 => 73,  157 => 72,  154 => 71,  150 => 70,  145 => 67,  139 => 64,  134 => 63,  131 => 62,  129 => 61,  126 => 60,  118 => 58,  115 => 57,  109 => 55,  106 => 54,  104 => 53,  99 => 52,  96 => 51,  90 => 49,  88 => 48,  83 => 47,  80 => 46,  76 => 45,  72 => 44,  69 => 43,  62 => 39,  58 => 38,  55 => 37,  53 => 36,  47 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/checkbox_matrix.html.twig", "/var/www/html/glpi/templates/components/checkbox_matrix.html.twig");
    }
}
