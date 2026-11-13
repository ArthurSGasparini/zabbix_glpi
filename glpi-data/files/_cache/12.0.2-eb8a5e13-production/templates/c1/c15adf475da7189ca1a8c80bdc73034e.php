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

/* pages/admin/user.substitute.html.twig */
class __TwigTemplate_bf39b06249535c5a5f8042f0ece5b23a extends Template
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
        $context["id"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 35), "id", [], "array", true, true, false, 35) &&  !(null === (($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 35)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["id"] ?? null) : null)))) ? ((($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 35)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["id"] ?? null) : null)) : ( -1));
        // line 36
        yield "
<div class=\"asset\">

";
        // line 39
        if ((($tmp = ($context["canedit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 40
            yield "   <form name=\"asset_form\" method=\"post\" action=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getFormURL", [], "method", false, false, false, 40), "html", null, true);
            yield "\" enctype=\"multipart/form-data\" data-submit-once>
";
        }
        // line 42
        yield "
   <div id=\"mainformtable\">

      ";
        // line 45
        yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::PRE_ITEM_FORM"), ["item" => ($context["item"] ?? null), "options" => (((array_key_exists("params", $context) &&  !(null === $context["params"]))) ? ($context["params"]) : ([]))]), "html", null, true);
        yield "

      <div class=\"card-body d-flex flex-wrap\">
         <div class=\"col-12 col-xxl-12 flex-column\">
            <div class=\"d-flex flex-row flex-wrap flex-xl-nowrap\">
               <div class=\"row flex-row align-items-start flex-grow-1\">
                  <div class=\"row flex-row\">
                     <input type=\"hidden\" name=\"users_id\" value=";
        // line 52
        yield (string) $this->escaper->escape((($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "fields", [], "any", false, false, false, 52)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["id"] ?? null) : null), "html", null, true);
        yield " />

                     <div class=\"row col-12 col-sm-12 mb-4\">
                        <div class=\"alert alert-info\" style=\"margin: 0 auto; max-width: 900px\">
                           <span>
                              <i class=\"ti ti-info-circle\" aria-hidden=\"true\"></i>&nbsp;";
        // line 57
        yield (string) $this->escaper->escape(__("Substitutes are users who can approve or refuse tickets on your behalf."), "html", null, true);
        yield "
                           </span>
                        </div>
                     </div>

                     ";
        // line 62
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(62))->call("datetimeField", ["substitution_start_date", (($_v3 = CoreExtension::getAttribute($this->env, $this->source,         // line 64
($context["user"] ?? null), "fields", [], "any", false, false, false, 64)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["substitution_start_date"] ?? null) : null), __("Start date ")], $context, 62, $this->source);
        // line 66
        yield "

                     ";
        // line 68
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(68))->call("datetimeField", ["substitution_end_date", (($_v4 = CoreExtension::getAttribute($this->env, $this->source,         // line 70
($context["user"] ?? null), "fields", [], "any", false, false, false, 70)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["substitution_end_date"] ?? null) : null), __("End date ")], $context, 68, $this->source);
        // line 72
        yield "

                     ";
        // line 74
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(74))->call("dropdownField", ["User", "substitutes", [], __("Approval substitutes"), ["multiple" => "multiple", "used" => [(($_v5 = CoreExtension::getAttribute($this->env, $this->source,         // line 81
($context["user"] ?? null), "fields", [], "any", false, false, false, 81)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["id"] ?? null) : null)], "value" =>         // line 82
($context["substitutes"] ?? null), "right" => ["validate_request", "validate_incident"]]], $context, 74, $this->source);
        // line 88
        yield "

                     ";
        // line 90
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(90))->call("nullField", [], $context, 90, $this->source);
        yield "

                     ";
        // line 92
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["delegators"] ?? null)) > 0)) {
            // line 93
            yield "                        <div class=\"row col-12 col-sm-12 mb-4 mt-5\">
                           <div class=\"alert alert-info\" style=\"margin: 0 auto; max-width: 900px\">
                              <span>
                                 <i class=\"ti ti-info-circle\" aria-hidden=\"true\"></i>&nbsp;";
            // line 96
            yield (string) $this->escaper->escape(__("Delegators are users who gave you the right to approve or refuse tickets on their behalf."), "html", null, true);
            yield "
                              </span>
                           </div>
                        </div>

                        <div>
                           <div class=\"card\">
                              <div class=\"table-responsive\">
                                 <table class=\"table card-table table-hover table-striped\">
                                 <thead>
                                    <tr>
                                       <th style=\"width: 33%;\">";
            // line 107
            yield (string) $this->escaper->escape(__("Name"), "html", null, true);
            yield "</th>
                                       <th style=\"width: 33%;\">";
            // line 108
            yield (string) $this->escaper->escape(__("Substitution start date"), "html", null, true);
            yield "</th>
                                       <th style=\"width: 33%;\">";
            // line 109
            yield (string) $this->escaper->escape(__("Substitution end date"), "html", null, true);
            yield "</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                 ";
            // line 113
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["delegators"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["delegator"]) {
                // line 114
                yield "                                    ";
                $context["delegator"] = $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItem("User", $context["delegator"]);
                // line 115
                yield "                                    <tr>
                                       <td valign=\"top\">";
                // line 116
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["delegator"], "getFriendlyName", [], "method", false, false, false, 116), "html", null, true);
                yield "</td>
                                       <td valign=\"top\">";
                // line 117
                yield (string) $this->escaper->escape((($_v6 = CoreExtension::getAttribute($this->env, $this->source, $context["delegator"], "fields", [], "any", false, false, false, 117)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["substitution_start_date"] ?? null) : null), "html", null, true);
                yield "</td>
                                       <td valign=\"top\">";
                // line 118
                yield (string) $this->escaper->escape((($_v7 = CoreExtension::getAttribute($this->env, $this->source, $context["delegator"], "fields", [], "any", false, false, false, 118)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["substitution_end_date"] ?? null) : null), "html", null, true);
                yield "</td>
                                    </tr>
                                 ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['delegator'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 121
            yield "                                 </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                     ";
        }
        // line 127
        yield "
                  </div> ";
        // line 129
        yield "               </div> ";
        // line 130
        yield "            </div> ";
        // line 131
        yield "         </div>
      </div> ";
        // line 133
        yield "
      <div class=\"row\">
         ";
        // line 135
        yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::POST_ITEM_FORM"), ["item" => ($context["item"] ?? null), "options" => (((array_key_exists("params", $context) &&  !(null === $context["params"]))) ? ($context["params"]) : ([]))]), "html", null, true);
        yield "
      </div>

   ";
        // line 138
        if ((($tmp = ($context["canedit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 139
            yield "         <div class=\"card-body mx-n2 mb-4 border-top d-flex flex-row-reverse align-items-start flex-wrap\">
            <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"update\" value=\"1\">
               <i class=\"ti ti-device-floppy\" aria-hidden=\"true\"></i>
               <span>";
            // line 142
            yield (string) $this->escaper->escape(_x("button", "Save"), "html", null, true);
            yield "</span>
            </button>
         </div>
      </div> ";
            // line 146
            yield "   </form> ";
            // line 147
            yield "   ";
        }
        // line 148
        yield "</div> ";
        // line 149
        yield "
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/user.substitute.html.twig";
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
        return array (  240 => 149,  238 => 148,  235 => 147,  233 => 146,  227 => 142,  222 => 139,  220 => 138,  214 => 135,  210 => 133,  207 => 131,  205 => 130,  203 => 129,  200 => 127,  192 => 121,  182 => 118,  178 => 117,  174 => 116,  171 => 115,  168 => 114,  164 => 113,  157 => 109,  153 => 108,  149 => 107,  135 => 96,  130 => 93,  128 => 92,  123 => 90,  119 => 88,  117 => 82,  116 => 81,  115 => 74,  111 => 72,  109 => 70,  108 => 68,  104 => 66,  102 => 64,  101 => 62,  93 => 57,  85 => 52,  75 => 45,  70 => 42,  64 => 40,  62 => 39,  57 => 36,  55 => 35,  52 => 34,  50 => 33,  47 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/user.substitute.html.twig", "/var/www/html/glpi/templates/pages/admin/user.substitute.html.twig");
    }
}
