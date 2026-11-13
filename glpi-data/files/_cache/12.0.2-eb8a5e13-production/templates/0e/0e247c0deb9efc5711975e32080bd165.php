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

/* components/logs.html.twig */
class __TwigTemplate_252e06c0ed04ca6799edecbfdc0774c1 extends Template
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
        // line 33
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 33)->unwrap()->getMacroNamespace();
        // line 34
        yield "
";
        // line 35
        if ((($context["total_number"] ?? null) < 1)) {
            // line 36
            yield "   <div class=\"alert alert-info\">
      ";
            // line 37
            yield (string) $this->escaper->escape(__("No historical"), "html", null, true);
            yield "
   </div>
";
        } else {
            // line 40
            yield "
   ";
            // line 41
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/pager.html.twig", ["count" => ($context["filtered_number"] ?? null)]);
            yield "
   <div class=\"table-responsive\">
   <table class=\"table table-hover\">
      <thead>
         <tr>
            <th>";
            // line 46
            yield (string) $this->escaper->escape(__("ID"), "html", null, true);
            yield "</th>
            <th>";
            // line 47
            yield (string) $this->escaper->escape(_n("Date", "Dates", 1), "html", null, true);
            yield "</th>
            <th>";
            // line 48
            yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("User"), "html", null, true);
            yield "</th>
            <th>";
            // line 49
            yield (string) $this->escaper->escape(_n("Field", "Fields", 1), "html", null, true);
            yield "</th>
            <th>";
            // line 50
            yield (string) $this->escaper->escape(_x("name", "Update"), "html", null, true);
            yield "</th>
            <th>
               <span class=\"float-end log-toolbar mb-0\">
                  <button class=\"btn btn-sm show_filters ";
            // line 53
            yield (string) (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["filters"] ?? null)) > 0)) ? ("btn-secondary active") : ("btn-outline-secondary"));
            yield "\">
                     <i class=\"ti ti-filter\" aria-hidden=\"true\"></i>
                     <span class=\"d-none d-xl-block\">";
            // line 55
            yield (string) $this->escaper->escape(__("Filter"), "html", null, true);
            yield "</span>
                  </button>
                  <a href=\"";
            // line 57
            yield (string) $this->escaper->escape(($context["csv_url"] ?? null), "html", null, true);
            yield "\" class=\"btn btn-sm text-capitalize btn-outline-secondary\">
                     <i class=\"ti ti-download\" aria-hidden=\"true\"></i>
                     <span class=\"d-none d-xl-block\">";
            // line 59
            yield (string) $this->escaper->escape(__("Export"), "html", null, true);
            yield "</span>
                  </a>
               </span>
            </th>
         </tr>

         ";
            // line 65
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["filters"] ?? null)) > 0)) {
                // line 66
                yield "         <tr class=\"filter_row\">
            <td>
               <input type=\"hidden\" name=\"filters[active]\" value=\"1\" />
               <input type=\"hidden\" name=\"items_id\" value=\"";
                // line 69
                yield (string) $this->escaper->escape(($context["items_id"] ?? null), "html", null, true);
                yield "\" />
            </td>
            <td>
               ";
                // line 72
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(72))->call("dateField", ["filters[date]", (((CoreExtension::getAttribute($this->env, $this->source,                 // line 74
($context["filters"] ?? null), "date", [], "array", true, true, false, 74) &&  !(null === (($_v0 = ($context["filters"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["date"] ?? null) : null)))) ? ((($_v1 = ($context["filters"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["date"] ?? null) : null)) : ("")), "", ["no_label" => true, "full_width" => true, "mb" => ""]], $context, 72, $this->source);
                // line 81
                yield "
            </td>
            <td>
               <select name=\"filters[users_names][]\" class=\"form-select logs-filter-select-multiple\" multiple>
                  ";
                // line 85
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["user_names"] ?? null));
                foreach ($context['_seq'] as $context["value"] => $context["username"]) {
                    // line 86
                    yield "                     <option value=\"";
                    yield (string) $this->escaper->escape($context["value"], "html", null, true);
                    yield "\" ";
                    yield (string) (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "users_names", [], "array", true, true, false, 86) && CoreExtension::inFilter($context["value"], (($_v2 = ($context["filters"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["users_names"] ?? null) : null)))) ? ("selected") : (""));
                    yield ">
                        ";
                    // line 87
                    yield (string) $this->escaper->escape($context["username"], "html", null, true);
                    yield "
                     </option>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['value'], $context['username'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 90
                yield "               </select>
            </td>
            <td>
               <select name=\"filters[affected_fields][]\" class=\"form-select logs-filter-select-multiple\" multiple>
                  ";
                // line 94
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["affected_fields"] ?? null));
                foreach ($context['_seq'] as $context["value"] => $context["field"]) {
                    // line 95
                    yield "                     <option value=\"";
                    yield (string) $this->escaper->escape($context["value"], "html", null, true);
                    yield "\" ";
                    yield (string) (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "affected_fields", [], "array", true, true, false, 95) && CoreExtension::inFilter($context["value"], (($_v3 = ($context["filters"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["affected_fields"] ?? null) : null)))) ? ("selected") : (""));
                    yield ">
                        ";
                    // line 96
                    yield (string) $this->escaper->escape($context["field"], "html", null, true);
                    yield "
                     </option>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['value'], $context['field'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 99
                yield "               </select>
            </td>
            <td colspan=\"2\">
               <select name=\"filters[linked_actions][]\" class=\"form-select logs-filter-select-multiple\" multiple>
                  ";
                // line 103
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["linked_actions"] ?? null));
                foreach ($context['_seq'] as $context["value"] => $context["action"]) {
                    // line 104
                    yield "                     <option value=\"";
                    yield (string) $this->escaper->escape($context["value"], "html", null, true);
                    yield "\" ";
                    yield (string) (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "linked_actions", [], "array", true, true, false, 104) && CoreExtension::inFilter($context["value"], (($_v4 = ($context["filters"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["linked_actions"] ?? null) : null)))) ? ("selected") : (""));
                    yield ">
                        ";
                    // line 105
                    yield (string) $this->escaper->escape($context["action"], "html", null, true);
                    yield "
                     </option>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['value'], $context['action'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 108
                yield "               </select>
            </td>
         </tr>
         ";
            }
            // line 112
            yield "
      </thead>
      <tbody>
      ";
            // line 115
            if ((($context["filtered_number"] ?? null) < 1)) {
                // line 116
                yield "         <tr><td colspan=\"6\">";
                yield (string) $this->escaper->escape(__("No historical matching your filters"), "html", null, true);
                yield "</td></tr>
      ";
            } else {
                // line 118
                yield "         ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["logs"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                    // line 119
                    yield "            ";
                    if ((($tmp = (($_v5 = $context["entry"]) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["display_history"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 120
                        yield "               <tr>
                  <td>";
                        // line 121
                        yield (string) $this->escaper->escape((($_v6 = $context["entry"]) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["id"] ?? null) : null), "html", null, true);
                        yield "</td>
                  <td>";
                        // line 122
                        yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($_v7 = $context["entry"]) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["date_mod"] ?? null) : null)), "html", null, true);
                        yield "</td>
                  <td>";
                        // line 123
                        yield (string) $this->escaper->escape((($_v8 = $context["entry"]) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["user_name"] ?? null) : null), "html", null, true);
                        yield "</td>
                  <td>";
                        // line 124
                        yield (string) $this->escaper->escape((($_v9 = $context["entry"]) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["field"] ?? null) : null), "html", null, true);
                        yield "</td>
                  <td colspan=\"2\" style=\"width: 60%\">";
                        // line 125
                        yield (string) (($_v10 = $context["entry"]) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["change"] ?? null) : null);
                        yield "</td>
               </tr>
            ";
                    }
                    // line 128
                    yield "         ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['entry'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 129
                yield "      ";
            }
            // line 130
            yield "      </tbody>
   </table>
   </div>";
            // line 133
            yield "
   <div class=\"ms-auto d-inline-flex align-items-center d-none d-md-block mb-2 my-2\">
        ";
            // line 135
            yield (string) $this->escaper->escape(__("Entries to show:"), "html", null, true);
            yield "
        ";
            // line 136
            yield from $this->load("components/dropdown/limit.html.twig", 136)->unwrap()->yield($context);
            // line 137
            yield "   </div>
";
        }
        // line 139
        yield "


<script type=\"text/javascript\">
\$(function() {
   \$(\x27.logs-filter-select-multiple\x27).select2();
});
</script>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/logs.html.twig";
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
        return array (  300 => 139,  296 => 137,  294 => 136,  290 => 135,  286 => 133,  282 => 130,  279 => 129,  272 => 128,  266 => 125,  262 => 124,  258 => 123,  254 => 122,  250 => 121,  247 => 120,  244 => 119,  239 => 118,  233 => 116,  231 => 115,  226 => 112,  220 => 108,  210 => 105,  203 => 104,  199 => 103,  193 => 99,  183 => 96,  176 => 95,  172 => 94,  166 => 90,  156 => 87,  149 => 86,  145 => 85,  139 => 81,  137 => 74,  136 => 72,  130 => 69,  125 => 66,  123 => 65,  114 => 59,  109 => 57,  104 => 55,  99 => 53,  93 => 50,  89 => 49,  85 => 48,  81 => 47,  77 => 46,  69 => 41,  66 => 40,  60 => 37,  57 => 36,  55 => 35,  52 => 34,  50 => 33,  47 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/logs.html.twig", "/var/www/html/glpi/templates/components/logs.html.twig");
    }
}
