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

/* components/search/query_builder/main.html.twig */
class __TwigTemplate_a5c4844932bfaf1166a5de2d9bfa54f7 extends Template
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
        $context["is_ajax"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["_request"] ?? null), "searchform_id", [], "array", true, true, false, 33) &&  !(null === (($_v0 = ($context["_request"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["searchform_id"] ?? null) : null)));
        // line 34
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 35
        $context["mainform"] = (( !array_key_exists("mainform", $context)) ? (true) : (($context["mainform"] ?? null)));
        // line 36
        $context["main_block_class"] = (((($tmp = ($context["mainform"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("sub_criteria"));
        // line 37
        $context["card_class"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 38
            yield "   ";
            if ((($tmp = ($context["mainform"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 39
                yield "      ";
                yield (string) $this->escaper->escape(("search-form card card-sm" . (((($tmp = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("show_search_form")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" border mb-3") : (""))), "html", null, true);
                yield "
   ";
            } else {
                // line 41
                yield "      ";
                yield "border d-inline-block ms-1";
                yield "
   ";
            }
            return; yield;
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 44
        $context["hide_criteria"] =  !(CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "hide_criteria", [], "any", true, true, false, 44) &&  !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "hide_criteria", [], "any", false, false, false, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp));
        // line 45
        $context["extra_actions_templates"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "extra_actions_templates", [], "any", true, true, false, 45)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "extra_actions_templates", [], "any", false, false, false, 45), [])) : ([]));
        // line 46
        $context["hide_controls"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "hide_controls", [], "any", true, true, false, 46) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "hide_controls", [], "any", false, false, false, 46)) && $tmp instanceof Markup ? (string) $tmp : $tmp));
        // line 47
        $context["showmassiveactions"] = ( !CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "showmassiveactions", [], "any", true, true, false, 47) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "showmassiveactions", [], "any", false, false, false, 47)) && $tmp instanceof Markup ? (string) $tmp : $tmp));
        // line 48
        yield "
";
        // line 49
        if (((($tmp = ($context["mainform"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = ($context["showaction"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 50
            yield "   <form
      name=\"searchform";
            // line 51
            yield (string) $this->escaper->escape(($context["normalized_itemtype"] ?? null), "html", null, true);
            yield "\"
      class=\"search-form-container\"
      method=\"get\"
      action=\"";
            // line 54
            yield (string) $this->escaper->escape((($_v1 = ($context["p"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["target"] ?? null) : null), "html", null, true);
            yield "\"
      data-glpi-search-form
   >

   ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["additional_params"] ?? null));
            foreach ($context['_seq'] as $context["param_name"] => $context["param_value"]) {
                // line 59
                yield "       <input type=\"hidden\" name=\"";
                yield (string) $this->escaper->escape($context["param_name"], "html", null, true);
                yield "\" value=\"";
                yield (string) $this->escaper->escape($context["param_value"], "html", null, true);
                yield "\" />
   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['param_name'], $context['param_value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
        }
        // line 62
        yield "
<div class=\"";
        // line 63
        yield (string) $this->escaper->escape(($context["card_class"] ?? null), "html", null, true);
        yield "\">
   <div id=\"searchcriteria";
        // line 64
        yield (string) $this->escaper->escape(($context["rand"] ?? null), "html", null, true);
        yield "\" class=\"";
        yield (string) $this->escaper->escape(($context["main_block_class"] ?? null), "html", null, true);
        yield "\">
      ";
        // line 66
        yield "      ";
        $context["nbsearchcountvar"] = (("nbcriteria" . ($context["normalized_itemtype"] ?? null)) . Twig\Extension\CoreExtension::random($this->env->getCharset()));
        // line 67
        yield "      <script>
         let ";
        // line 68
        yield (string) $this->escaper->escape(($context["nbsearchcountvar"] ?? null), "html", null, true);
        yield " = ";
        yield (string) ((Twig\Extension\CoreExtension::testEmpty(($context["criteria"] ?? null))) ? (0) : ($this->escaper->escape((max(Twig\Extension\CoreExtension::keys(($context["criteria"] ?? null))) + 1), "html", null, true)));
        yield ";
      </script>
      <div class=\"list-group list-group-flush list-group-hoverable criteria-list pt-2\" id=\"criteriatable";
        // line 70
        yield (string) $this->escaper->escape(($context["normalized_itemtype"] ?? null), "html", null, true);
        yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
        yield "\">
         ";
        // line 71
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "defaultfilter", [], "any", true, true, false, 71)) {
            // line 72
            yield "            <div class=\"p-2 b-0\">
               <label class=\"form-check form-switch btn btn-sm btn-ghost-secondary me-1 me-sm-2 px-1 mb-0 flex-column-reverse flex-sm-row\"
                     data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" data-bs-trigger=\"hover\"
                     title=\"";
            // line 75
            yield (string) $this->escaper->escape(__("Toggle additional default filters"), "html", null, true);
            yield "\">
                  <input type=\"checkbox\" class=\"form-check-input ms-0 me-1 mt-0 default-filter\" role=\"button\"
                        ";
            // line 77
            yield (string) ((CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "nodefault", [], "any", true, true, false, 77)) ? ("") : ("checked"));
            yield " autocomplete=\"off\" ";
            yield (string) (((($tmp = ($context["can_disablefilter"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("disabled"));
            yield " />
                  <span class=\"form-check-label mb-1 mb-sm-0\">
                     <i class=\"fs-2 ti ti-filter\" aria-hidden=\"true\"></i>
                  </span>
               </label>
               <span title=\"";
            // line 82
            yield (string) $this->escaper->escape((($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "defaultfilter", [], "any", false, false, false, 82)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["comment"] ?? null) : null), "html", null, true);
            yield "\">";
            yield (string) $this->escaper->escape((($_v3 = CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "defaultfilter", [], "any", false, false, false, 82)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["name"] ?? null) : null), "html", null, true);
            yield "</span>
            </div>
         ";
        }
        // line 85
        yield "         ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::keys((($_v4 = ($context["p"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["criteria"] ?? null) : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 86
            yield "            ";
            yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Glpi\\Search\\Input\\QueryBuilder::displayCriteria", [["itemtype" =>             // line 87
($context["itemtype"] ?? null), "num" =>             // line 88
$context["i"], "p" =>             // line 89
($context["p"] ?? null)]]), "html", null, true);
            // line 90
            yield "
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 92
        yield "         <a id=\"more-criteria";
        yield (string) $this->escaper->escape(($context["rand"] ?? null), "html", null, true);
        yield "\" role=\"button\" class=\"normalcriteria list-group-item p-2 b-0 d-none\"></a>
      </div>
      ";
        // line 94
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["_get"] ?? null), "savedsearches_id", [], "array", true, true, false, 94)) {
            // line 95
            yield "         <input type=\"hidden\" name=\"savedsearches_id\" value=\"";
            yield (string) $this->escaper->escape((($_v5 = ($context["_get"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["savedsearches_id"] ?? null) : null), "html", null, true);
            yield "\">
      ";
        }
        // line 97
        yield "
      ";
        // line 99
        yield "      <input type=\"hidden\" name=\"params[hide_criteria]\" value=\"";
        yield (string) (((($tmp = ($context["hide_criteria"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("0"));
        yield "\">
      <input type=\"hidden\" name=\"params[hide_controls]\" value=\"";
        // line 100
        yield (string) (((($tmp = ($context["hide_controls"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("0"));
        yield "\">
      <input type=\"hidden\" name=\"params[showmassiveactions]\" value=\"";
        // line 101
        yield (string) (((($tmp = ($context["showmassiveactions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("0"));
        yield "\">

      <div class=\"card-footer d-flex search_actions\">
         <button id=\"addsearchcriteria";
        // line 104
        yield (string) $this->escaper->escape(($context["rand"] ?? null), "html", null, true);
        yield "\" class=\"btn btn-sm btn-ghost-secondary me-1\" type=\"button\">
            <i class=\"ti ti-square-plus\" aria-hidden=\"true\"></i>
            <span class=\"d-none d-sm-block\">";
        // line 106
        yield (string) $this->escaper->escape(__("rule"), "html", null, true);
        yield "</span>
         </button>
         ";
        // line 108
        if ((array_key_exists("linked", $context) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["linked"] ?? null)) > 0))) {
            // line 109
            yield "            <button id=\"addmetasearchcriteria";
            yield (string) $this->escaper->escape(($context["rand"] ?? null), "html", null, true);
            yield "\" class=\"btn btn-sm btn-ghost-secondary me-1\" type=\"button\">
               <i class=\"ti ti-circle-plus\" aria-hidden=\"true\"></i>
               <span class=\"d-none d-sm-block\">";
            // line 111
            yield (string) $this->escaper->escape(__("global rule"), "html", null, true);
            yield "</span>
            </button>
         ";
        }
        // line 114
        yield "         <button id=\"addcriteriagroup";
        yield (string) $this->escaper->escape(($context["rand"] ?? null), "html", null, true);
        yield "\" class=\"btn btn-sm btn-ghost-secondary me-1\" type=\"button\">
            <i class=\"ti ti-code-plus\" aria-hidden=\"true\"></i>
            <span class=\"d-none d-sm-block\">";
        // line 116
        yield (string) $this->escaper->escape(__("group"), "html", null, true);
        yield "</span>
         </button>
         ";
        // line 118
        if ((($tmp = ($context["mainform"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 119
            yield "            ";
            $context["action_count"] = ((($context["showaction"] ?? null) + (($_v6 = ($context["p"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["showbookmark"] ?? null) : null)) + (($_v7 = ($context["p"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["showreset"] ?? null) : null));
            // line 120
            yield "            <span class=\"ms-3 ";
            yield (string) (((($context["action_count"] ?? null) > 1)) ? ("btn-group") : (""));
            yield "\">
                ";
            // line 121
            if ((($tmp = ($context["showaction"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 122
                yield "                ";
                // line 123
                yield "                <button class=\"btn ";
                yield (string) (((($tmp = (($_v8 = ($context["p"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["is_criteria_filter"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("btn-ghost-secondary") : ("btn-sm btn-primary"));
                yield "\" type=\"button\" name=\"";
                yield (string) $this->escaper->escape((($_v9 = ($context["p"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["actionname"] ?? null) : null), "html", null, true);
                yield "\">
                    <i class=\"ti ti-search\" aria-hidden=\"true\"></i>
                    <span class=\"d-none d-sm-block\">";
                // line 125
                yield (string) $this->escaper->escape((($_v10 = ($context["p"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["actionvalue"] ?? null) : null), "html", null, true);
                yield "</span>
                </button>
                ";
            }
            // line 128
            yield "                ";
            if ((($tmp = (($_v11 = ($context["p"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["showbookmark"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 129
                yield "                ";
                yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "pages/tools/savedsearch/save_button.html.twig", ["type" => Twig\Extension\CoreExtension::constant("SavedSearch::SEARCH"), "itemtype" =>                 // line 131
($context["itemtype"] ?? null), "active" => CoreExtension::getAttribute($this->env, $this->source,                 // line 132
($context["_get"] ?? null), "savedsearches_id", [], "array", true, true, false, 132)]);
                // line 133
                yield "
                ";
            }
            // line 135
            yield "                ";
            if ((($tmp = (($_v12 = ($context["p"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["showreset"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 136
                yield "                <a class=\"btn btn-sm btn-outline-secondary btn-icon px-2 search-reset\"
                   data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\"
                   href=\"";
                // line 138
                yield (string) $this->escaper->escape((((($_v13 = ($context["p"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["target"] ?? null) : null) . ((CoreExtension::inFilter("?", (($_v14 = ($context["p"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["target"] ?? null) : null))) ? ("&") : ("?"))) . "reset=reset"), "html", null, true);
                yield "\" title=\"";
                yield (string) $this->escaper->escape(__("Blank"), "html", null, true);
                yield "\">
                    <i class=\"ti ti-square-x\" aria-hidden=\"true\"></i>
                </a>
                ";
            } elseif ((($tmp = (($_v15 =             // line 141
($context["p"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["forcereset"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 142
                yield "                <input type=\"hidden\" name=\"reset\" value=\"reset\">
                ";
            }
            // line 144
            yield "            </span>
         ";
        }
        // line 146
        yield "         ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["extra_actions_templates"] ?? null));
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
        foreach ($context['_seq'] as $context["template"] => $context["params"]) {
            // line 147
            yield "            ";
            yield from $this->load($context["template"], 147)->unwrap()->yield(CoreExtension::merge($context, $context["params"]));
            // line 148
            yield "         ";
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
        unset($context['_seq'], $context['template'], $context['params'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 149
        yield "      </div>

      ";
        // line 152
        yield "      ";
        $context["idor_display_criteria"] = Session::getNewIDORToken(($context["itemtype"] ?? null));
        // line 153
        yield "      ";
        $context["itemtype_escaped"] = $this->escaper->escape(($context["itemtype"] ?? null), "js");
        // line 154
        yield "
      ";
        // line 156
        yield "      ";
        $context["ajax_url"] = ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("root_doc") . "/ajax/search.php");
        // line 157
        yield "      <script>
         \$(\x27#addsearchcriteria";
        // line 158
        yield (string) $this->escaper->escape(($context["rand"] ?? null), "html", null, true);
        yield "\x27).on(\x27click\x27, function(event) {
             event.preventDefault();
             \$.post(\"";
        // line 160
        yield (string) $this->escaper->escape(($context["ajax_url"] ?? null), "html", null, true);
        yield "\", {
                 \x27action\x27: \x27display_criteria\x27,
                 \x27itemtype\x27: \"";
        // line 162
        yield (string) $this->escaper->escape(($context["itemtype_escaped"] ?? null), "html", null, true);
        yield "\",
                 \x27num\x27: ";
        // line 163
        yield (string) $this->escaper->escape(($context["nbsearchcountvar"] ?? null), "html", null, true);
        yield ",
                 \x27p\x27: ";
        // line 164
        yield (string) json_encode(($context["p"] ?? null));
        yield ",
                 \x27_idor_token\x27: \"";
        // line 165
        yield (string) $this->escaper->escape(($context["idor_display_criteria"] ?? null), "html", null, true);
        yield "\"
             }).done(function (data) {
               \$(data).insertBefore(\x27#more-criteria";
        // line 167
        yield (string) $this->escaper->escape(($context["rand"] ?? null), "html", null, true);
        yield "\x27);
               ";
        // line 168
        yield (string) $this->escaper->escape(($context["nbsearchcountvar"] ?? null), "html", null, true);
        yield " = ";
        yield (string) $this->escaper->escape(($context["nbsearchcountvar"] ?? null), "html", null, true);
        yield " + 1;
             });
         });
         \$(\x27#addmetasearchcriteria";
        // line 171
        yield (string) $this->escaper->escape(($context["rand"] ?? null), "html", null, true);
        yield "\x27).on(\x27click\x27, function(event) {
             event.preventDefault();
             \$.post(\"";
        // line 173
        yield (string) $this->escaper->escape(($context["ajax_url"] ?? null), "html", null, true);
        yield "\", {
                 \x27action\x27: \x27display_meta_criteria\x27,
                 \x27itemtype\x27: \"";
        // line 175
        yield (string) $this->escaper->escape(($context["itemtype_escaped"] ?? null), "html", null, true);
        yield "\",
                 \x27num\x27: ";
        // line 176
        yield (string) $this->escaper->escape(($context["nbsearchcountvar"] ?? null), "html", null, true);
        yield ",
                 \x27p\x27: ";
        // line 177
        yield (string) json_encode(($context["p"] ?? null));
        yield ",
                 \x27_idor_token\x27: \"";
        // line 178
        yield (string) $this->escaper->escape(($context["idor_display_criteria"] ?? null), "html", null, true);
        yield "\"
             }).done(function (data) {
                 \$(data).insertBefore(\x27#more-criteria";
        // line 180
        yield (string) $this->escaper->escape(($context["rand"] ?? null), "html", null, true);
        yield "\x27);
                ";
        // line 181
        yield (string) $this->escaper->escape(($context["nbsearchcountvar"] ?? null), "html", null, true);
        yield " = ";
        yield (string) $this->escaper->escape(($context["nbsearchcountvar"] ?? null), "html", null, true);
        yield " + 1;
             });
         });
         \$(\x27#addcriteriagroup";
        // line 184
        yield (string) $this->escaper->escape(($context["rand"] ?? null), "html", null, true);
        yield "\x27).on(\x27click\x27, function(event) {
             event.preventDefault();
             \$.post(\"";
        // line 186
        yield (string) $this->escaper->escape(($context["ajax_url"] ?? null), "html", null, true);
        yield "\", {
                 \x27action\x27: \x27display_criteria_group\x27,
                 \x27itemtype\x27: \"";
        // line 188
        yield (string) $this->escaper->escape(($context["itemtype_escaped"] ?? null), "html", null, true);
        yield "\",
                 \x27num\x27: ";
        // line 189
        yield (string) $this->escaper->escape(($context["nbsearchcountvar"] ?? null), "html", null, true);
        yield ",
                 \x27p\x27: ";
        // line 190
        yield (string) json_encode(($context["p"] ?? null));
        yield ",
                 \x27_idor_token\x27: \"";
        // line 191
        yield (string) $this->escaper->escape(($context["idor_display_criteria"] ?? null), "html", null, true);
        yield "\"
             }).done(function (data) {
                 \$(data).insertBefore(\x27#more-criteria";
        // line 193
        yield (string) $this->escaper->escape(($context["rand"] ?? null), "html", null, true);
        yield "\x27);
                ";
        // line 194
        yield (string) $this->escaper->escape(($context["nbsearchcountvar"] ?? null), "html", null, true);
        yield " = ";
        yield (string) $this->escaper->escape(($context["nbsearchcountvar"] ?? null), "html", null, true);
        yield " + 1;
             });
         });

         ";
        // line 198
        if (((($tmp = ($context["mainform"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) &&  !(($tmp = ($context["hide_criteria"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 199
            yield "            \$(document).off(\x27click\x27, \x27.remove-search-criteria\x27).on(\"click\", \".remove-search-criteria\", function() {
                // force removal of tooltip
                const tooltip = bootstrap.Tooltip.getInstance(\$(this)[0]);
                if (tooltip !== null) {
                    tooltip.dispose();
                }

                const rowID = \$(this).data(\x27rowid\x27);
                \$(\x27#\x27 + rowID).remove();
                \$(\x27#searchcriteria";
            // line 208
            yield (string) $this->escaper->escape(($context["rand"] ?? null), "html", null, true);
            yield " .criteria-list .list-group-item:first-child\x27).addClass(\x27headerRow\x27).show();
            });
         ";
        }
        // line 211
        yield "      </script>

      ";
        // line 213
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (($_v16 = ($context["p"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16["addhidden"] ?? null) : null)) > 0)) {
            // line 214
            yield "         ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((($_v17 = ($context["p"] ?? null)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17["addhidden"] ?? null) : null));
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 215
                yield "            <input type=\"hidden\" name=\"";
                yield (string) $this->escaper->escape($context["key"], "html", null, true);
                yield "\" value=\"";
                yield (string) $this->escaper->escape($context["val"], "html", null, true);
                yield "\">
         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['val'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 217
            yield "      ";
        }
        // line 218
        yield "
      ";
        // line 219
        if ((($tmp = ($context["mainform"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 220
            yield "         <input type=\"hidden\" name=\"itemtype\" value=\"";
            yield (string) $this->escaper->escape(($context["itemtype"] ?? null), "html", null, true);
            yield "\">
         <input type=\"hidden\" name=\"start\" value=\"0\">
          ";
            // line 222
            $context["item"] = (((($context["itemtype"] ?? null) != "AllAssets")) ? ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("getItemForItemtype", [($context["itemtype"] ?? null)])) : (null));
            // line 223
            yield "          ";
            if (( !(null === ($context["item"] ?? null)) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "maybeDeleted", [], "method", false, false, false, 223)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 224
                yield "              <input type=\"hidden\" id=\"is_deleted\" name=\"is_deleted\" value=\"";
                yield (string) $this->escaper->escape((($_v18 = ($context["p"] ?? null)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18["is_deleted"] ?? null) : null), "html", null, true);
                yield "\">
          ";
            }
            // line 226
            yield "          <input type=\"hidden\" id=\"as_map\" name=\"as_map\" value=\"";
            yield (string) $this->escaper->escape((($_v19 = ($context["p"] ?? null)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19["as_map"] ?? null) : null), "html", null, true);
            yield "\">
          <input type=\"hidden\" id=\"browse\" name=\"browse\" value=\"";
            // line 227
            yield (string) $this->escaper->escape((($_v20 = ($context["p"] ?? null)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20["browse"] ?? null) : null), "html", null, true);
            yield "\">
          <input type=\"hidden\" id=\"unpublished\" name=\"unpublished\" value=\"";
            // line 228
            yield (string) $this->escaper->escape((($_v21 = ($context["p"] ?? null)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21["unpublished"] ?? null) : null), "html", null, true);
            yield "\">
      ";
        }
        // line 230
        yield "   </div>
</div>

";
        // line 233
        if (((($tmp = ($context["mainform"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = ($context["showaction"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 234
            yield "   </form>
";
        }
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/search/query_builder/main.html.twig";
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
        return array (  596 => 234,  594 => 233,  589 => 230,  584 => 228,  580 => 227,  575 => 226,  569 => 224,  566 => 223,  564 => 222,  558 => 220,  556 => 219,  553 => 218,  550 => 217,  538 => 215,  533 => 214,  531 => 213,  527 => 211,  521 => 208,  510 => 199,  508 => 198,  499 => 194,  495 => 193,  490 => 191,  486 => 190,  482 => 189,  478 => 188,  473 => 186,  468 => 184,  460 => 181,  456 => 180,  451 => 178,  447 => 177,  443 => 176,  439 => 175,  434 => 173,  429 => 171,  421 => 168,  417 => 167,  412 => 165,  408 => 164,  404 => 163,  400 => 162,  395 => 160,  390 => 158,  387 => 157,  384 => 156,  381 => 154,  378 => 153,  375 => 152,  371 => 149,  356 => 148,  353 => 147,  335 => 146,  331 => 144,  327 => 142,  325 => 141,  317 => 138,  313 => 136,  310 => 135,  306 => 133,  304 => 132,  303 => 131,  301 => 129,  298 => 128,  292 => 125,  284 => 123,  282 => 122,  280 => 121,  275 => 120,  272 => 119,  270 => 118,  265 => 116,  259 => 114,  253 => 111,  247 => 109,  245 => 108,  240 => 106,  235 => 104,  229 => 101,  225 => 100,  220 => 99,  217 => 97,  211 => 95,  209 => 94,  203 => 92,  195 => 90,  193 => 89,  192 => 88,  191 => 87,  189 => 86,  184 => 85,  176 => 82,  166 => 77,  161 => 75,  156 => 72,  154 => 71,  149 => 70,  142 => 68,  139 => 67,  136 => 66,  130 => 64,  126 => 63,  123 => 62,  110 => 59,  106 => 58,  99 => 54,  93 => 51,  90 => 50,  88 => 49,  85 => 48,  83 => 47,  81 => 46,  79 => 45,  77 => 44,  69 => 41,  63 => 39,  60 => 38,  58 => 37,  56 => 36,  54 => 35,  52 => 34,  50 => 33,  47 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/search/query_builder/main.html.twig", "/var/www/html/glpi/templates/components/search/query_builder/main.html.twig");
    }
}
