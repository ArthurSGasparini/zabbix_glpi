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

/* generic_show_form.html.twig */
class __TwigTemplate_1ac47ab663d6c5043cff7cb691552b97 extends Template
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
            'form_fields' => [$this, 'block_form_fields'],
            'more_fields' => [$this, 'block_more_fields'],
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
        $context["no_header"] = ((array_key_exists("no_header", $context)) ? (Twig\Extension\CoreExtension::default(($context["no_header"] ?? null), ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 35)) && $tmp instanceof Markup ? (string) $tmp : $tmp) &&  !(($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["_get"] ?? null), "_in_modal", [], "any", true, true, false, 35)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["_get"] ?? null), "_in_modal", [], "any", false, false, false, 35), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)))) : (( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 35)) && $tmp instanceof Markup ? (string) $tmp : $tmp) &&  !(($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["_get"] ?? null), "_in_modal", [], "any", true, true, false, 35)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["_get"] ?? null), "_in_modal", [], "any", false, false, false, 35), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp))));
        // line 36
        $context["bg"] = "";
        // line 37
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isDeleted", [], "method", false, false, false, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 38
            yield "   ";
            $context["bg"] = "asset-deleted";
        }
        // line 40
        yield "
<div class=\"asset ";
        // line 41
        yield (string) $this->escaper->escape(($context["bg"] ?? null), "html", null, true);
        yield "\">
   ";
        // line 42
        yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/form/header.html.twig", ["in_twig" => true]);
        yield "

   ";
        // line 44
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 45
        yield "   ";
        $context["params"] = (((array_key_exists("params", $context) &&  !(null === $context["params"]))) ? ($context["params"]) : ([]));
        // line 46
        yield "   ";
        $context["target"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "target", [], "array", true, true, false, 46) &&  !(null === (($_v0 = ($context["params"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["target"] ?? null) : null)))) ? ((($_v1 = ($context["params"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["target"] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getFormURL", [], "method", false, false, false, 46)));
        // line 47
        yield "   ";
        $context["withtemplate"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "withtemplate", [], "array", true, true, false, 47) &&  !(null === (($_v2 = ($context["params"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["withtemplate"] ?? null) : null)))) ? ((($_v3 = ($context["params"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["withtemplate"] ?? null) : null)) : (""));
        // line 48
        yield "   ";
        $context["item_type"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 48);
        // line 49
        yield "   ";
        $context["item_has_pictures"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "hasItemtypeOrModelPictures", [], "method", false, false, false, 49);
        // line 50
        yield "   ";
        $context["field_options"] = ["locked_fields" => CoreExtension::getAttribute($this->env, $this->source,         // line 51
($context["item"] ?? null), "getLockedFields", [], "method", false, false, false, 51), "rand" =>         // line 52
($context["rand"] ?? null)];
        // line 54
        yield "
    ";
        // line 56
        yield "    ";
        $context["custom_fields"] = ((array_key_exists("custom_fields", $context)) ? (Twig\Extension\CoreExtension::default(($context["custom_fields"] ?? null), [])) : ([]));
        // line 57
        yield "    ";
        $context["field_order"] = ((array_key_exists("field_order", $context)) ? (Twig\Extension\CoreExtension::default(($context["field_order"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getFormFields", [], "method", false, false, false, 57))) : (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getFormFields", [], "method", false, false, false, 57)));
        // line 58
        yield "    ";
        $context["has_third_col"] = ((($tmp = ($context["item_has_pictures"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 58)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && CoreExtension::inFilter(($context["item_type"] ?? null), $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("asset_types"))));
        // line 59
        yield "
   <div class=\"card-body d-flex flex-wrap\">
      <div class=\"col-12 col-xxl-";
        // line 61
        yield (string) (((($tmp = ($context["has_third_col"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("9") : ("12"));
        yield " flex-column\">
         <div class=\"d-flex flex-row flex-wrap flex-xl-nowrap\">
            <div class=\"row flex-row align-items-start flex-grow-1\" style=\"min-width: 0;\">
               <div class=\"row flex-row\">
                  ";
        // line 65
        yield from $this->unwrap()->yieldBlock('form_fields', $context, $blocks);
        // line 560
        yield "               </div> ";
        // line 561
        yield "            </div> ";
        // line 562
        yield "         </div> ";
        // line 563
        yield "      </div>
       <div class=\"col-12 col-xxl-3 flex-column\">
           <div class=\"flex-row asset-pictures\">
               ";
        // line 566
        yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/form/pictures.html.twig", ["gallery_type" => ""]);
        yield "
           </div>
       </div>
   </div> ";
        // line 570
        yield "
   ";
        // line 571
        if ((($context["item_type"] ?? null) == "Contract")) {
            // line 572
            yield "      ";
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/form/support_hours.html.twig");
            yield "
   ";
        }
        // line 574
        yield "   ";
        if (( !array_key_exists("no_form_buttons", $context) || (($context["no_form_buttons"] ?? null) == false))) {
            // line 575
            yield "      ";
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/form/buttons.html.twig");
            yield "
   ";
        }
        // line 577
        yield "   ";
        if (( !array_key_exists("no_inventory_footer", $context) || (($context["no_inventory_footer"] ?? null) == false))) {
            // line 578
            yield "      ";
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/form/inventory_info.html.twig");
            yield "
   ";
        }
        // line 580
        yield "
   ";
        // line 581
        if ((($tmp = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "formfooter", [], "array", true, true, false, 581) &&  !(null === (($_v4 = ($context["params"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["formfooter"] ?? null) : null)))) ? ((($_v5 = ($context["params"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["formfooter"] ?? null) : null)) : (true))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 582
            yield "      <div class=\"card-footer mx-n2 mb-n2\">
         ";
            // line 583
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/form/dates.html.twig");
            yield "
      </div>
   ";
        }
        // line 586
        yield "</div>
";
        return; yield;
    }

    // line 65
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 66
        yield "                      ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["field_order"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 67
            yield "                          ";
            $context["specific_field_options"] = Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ((CoreExtension::getAttribute($this->env, $this->source, ($context["additional_field_options"] ?? null), $context["field"], [], "array", true, true, false, 67)) ? (Twig\Extension\CoreExtension::default((($_v6 = ($context["additional_field_options"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[(($_v7 = $context["field"]) instanceof \Stringable && (is_array($_v6) || $_v6 instanceof \ArrayObject || $_v6 instanceof \ArrayIterator) ? (string) $_v7 : $_v7)] ?? null) : null), [])) : ([])));
            // line 68
            yield "
                          ";
            // line 69
            if (($context["field"] === "name")) {
                // line 70
                yield "                              ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(70))->call("autoNameField", ["name", ($context["item"] ?? null), (((($context["item_type"] ?? null) == "Contact")) ? (__("Surname")) : (__("Name"))), ($context["withtemplate"] ?? null), ($context["specific_field_options"] ?? null)], $context, 70, $this->source);
                yield "
                          ";
            } elseif ((            // line 71
$context["field"] === "firstname")) {
                // line 72
                yield "                              ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(72))->call("autoNameField", ["firstname", ($context["item"] ?? null), __("First name"), ($context["withtemplate"] ?? null), ($context["specific_field_options"] ?? null)], $context, 72, $this->source);
                yield "
                          ";
            } elseif ((((            // line 73
$context["field"] === "template_name") && (($context["withtemplate"] ?? null) == 1)) && (($tmp = ($context["no_header"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 74
                yield "                              ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(74))->call("autoNameField", ["template_name", ($context["item"] ?? null), __("Template name"), 0, ($context["specific_field_options"] ?? null)], $context, 74, $this->source);
                yield "
                          ";
            } elseif ((((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 75
($context["item"] ?? null), "isField", ["is_active"], "method", false, false, false, 75)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && ($context["field"] === "_template_is_active")) && (($context["withtemplate"] ?? null) >= 1))) {
                // line 76
                yield "                              ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(76))->call("hiddenField", ["is_active", (($_v8 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 76)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["is_active"] ?? null) : null)], $context, 76, $this->source);
                yield "
                          ";
            } elseif (((            // line 77
$context["field"] === "states_id") && CoreExtension::inFilter(get_class(($context["item"] ?? null)), $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("state_types")))) {
                // line 78
                yield "                              ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(78))->call("dropdownField", ["State", "states_id", (($_v9 = CoreExtension::getAttribute($this->env, $this->source,                 // line 81
($context["item"] ?? null), "fields", [], "any", false, false, false, 81)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["states_id"] ?? null) : null), __("Status"), Twig\Extension\CoreExtension::merge(                // line 83
($context["specific_field_options"] ?? null), ["entity" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 84
($context["item"] ?? null), "fields", [], "any", false, true, false, 84), "entities_id", [], "array", true, true, false, 84)) ? (Twig\Extension\CoreExtension::default((($_v10 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 84)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["entities_id"] ?? null) : null),  -1)) : ( -1)), "condition" => CoreExtension::getAttribute($this->env, $this->source,                 // line 85
($context["item"] ?? null), "getStateVisibilityCriteria", [], "method", false, false, false, 85)])], $context, 78, $this->source);
                // line 87
                yield "
                          ";
            } elseif (((            // line 88
$context["field"] === CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getForeignKeyField", [], "method", false, false, false, 88)) && (($context["item_type"] ?? null) != "Software"))) {
                // line 89
                yield "                              ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(89))->call("dropdownField", [                // line 90
($context["item_type"] ?? null),                 // line 91
$context["field"], (($_v11 = CoreExtension::getAttribute($this->env, $this->source,                 // line 92
($context["item"] ?? null), "fields", [], "any", false, false, false, 92)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11[(($_v12 = $context["field"]) instanceof \Stringable && (is_array($_v11) || $_v11 instanceof \ArrayObject || $_v11 instanceof \ArrayIterator) ? (string) $_v12 : $_v12)] ?? null) : null), __("As child of"), Twig\Extension\CoreExtension::merge(                // line 94
($context["specific_field_options"] ?? null), ["entity" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 95
($context["item"] ?? null), "fields", [], "any", false, true, false, 95), "entities_id", [], "array", true, true, false, 95)) ? (Twig\Extension\CoreExtension::default((($_v13 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 95)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["entities_id"] ?? null) : null),  -1)) : ( -1)), "used" => [CoreExtension::getAttribute($this->env, $this->source,                 // line 96
($context["item"] ?? null), "getID", [], "method", false, false, false, 96)]])], $context, 89, $this->source);
                // line 98
                yield "
                          ";
            } elseif (((            // line 99
$context["field"] === "is_helpdesk_visible") && (($context["item_type"] ?? null) != "SoftwareLicense"))) {
                // line 100
                yield "                              ";
                // line 101
                yield "                              ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(101))->call("checkboxField", ["is_helpdesk_visible", (($_v14 = CoreExtension::getAttribute($this->env, $this->source,                 // line 103
($context["item"] ?? null), "fields", [], "any", false, false, false, 103)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["is_helpdesk_visible"] ?? null) : null), __("Associable to a ticket"),                 // line 105
($context["specific_field_options"] ?? null)], $context, 101, $this->source);
                // line 106
                yield "
                          ";
            } elseif ((            // line 107
$context["field"] === "_dc_breadcrumbs")) {
                // line 108
                yield "                              ";
                $context["conditions_met"] = 0;
                // line 109
                yield "                              ";
                $context["dc_breadcrumbs"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 110
                    yield "                                  ";
                    if ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isUsingTrait(($context["item"] ?? null), "Glpi\\Features\\DCBreadcrumb")) {
                        // line 111
                        yield "                                      ";
                        yield (string) $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 111) . "::renderDcBreadcrumb"), [CoreExtension::getAttribute($this->env, $this->source,                         // line 112
($context["item"] ?? null), "getID", [], "any", false, false, false, 112)]);
                        // line 113
                        yield "
                                  ";
                    }
                    // line 115
                    yield "                              ";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 116
                yield "                              ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::trim(($context["dc_breadcrumbs"] ?? null))) > 0)) {
                    // line 117
                    yield "                                  ";
                    yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(117))->call("htmlField", ["",                     // line 119
($context["dc_breadcrumbs"] ?? null), __("Data center position")], $context, 117, $this->source);
                    // line 121
                    yield "
                                  ";
                    // line 122
                    $context["conditions_met"] = (($context["conditions_met"] ?? null) + 1);
                    // line 123
                    yield "                              ";
                }
                // line 124
                yield "
                              ";
                // line 125
                if ((array_key_exists("cluster", $context) &&  !(null === ($context["cluster"] ?? null)))) {
                    // line 126
                    yield "                                  ";
                    yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(126))->call("htmlField", ["", CoreExtension::getAttribute($this->env, $this->source,                     // line 128
($context["cluster"] ?? null), "getLink", [], "method", false, false, false, 128), _n("Cluster", "Clusters", 1)], $context, 126, $this->source);
                    // line 130
                    yield "
                                  ";
                    // line 131
                    $context["conditions_met"] = (($context["conditions_met"] ?? null) + 1);
                    // line 132
                    yield "                              ";
                }
                // line 133
                yield "                              ";
                if ((($context["conditions_met"] ?? null) == 1)) {
                    // line 134
                    yield "                                  ";
                    yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(134))->call("nullField", [], $context, 134, $this->source);
                    yield "
                              ";
                }
                // line 136
                yield "                          ";
            } elseif (($context["field"] === "locations_id")) {
                // line 137
                yield "                              ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(137))->call("dropdownField", ["Location", "locations_id", (($_v15 = CoreExtension::getAttribute($this->env, $this->source,                 // line 140
($context["item"] ?? null), "fields", [], "any", false, false, false, 140)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["locations_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Location"), Twig\Extension\CoreExtension::merge(                // line 142
($context["specific_field_options"] ?? null), ["entity" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 143
($context["item"] ?? null), "fields", [], "any", false, true, false, 143), "entities_id", [], "array", true, true, false, 143)) ? (Twig\Extension\CoreExtension::default((($_v16 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 143)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16["entities_id"] ?? null) : null),  -1)) : ( -1))])], $context, 137, $this->source);
                // line 145
                yield "
                          ";
            } elseif (((            // line 146
$context["field"] === "item_type") && (($context["item_type"] ?? null) == "Unmanaged"))) {
                // line 147
                yield "                              ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(147))->call("dropdownArrayField", ["item_type", (($_v17 = CoreExtension::getAttribute($this->env, $this->source,                 // line 149
($context["item"] ?? null), "fields", [], "any", false, false, false, 149)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17["itemtype"] ?? null) : null), _n("Type", "Types", 1), ["Computer", "NetworkEquipment", "Printer", "Peripheral", "Phone"],                 // line 154
($context["specific_field_options"] ?? null)], $context, 147, $this->source);
                // line 155
                yield "
                          ";
            } elseif (((            // line 156
$context["field"] === "itemtype") && (($context["item_type"] ?? null) == "DefaultFilter"))) {
                // line 157
                yield "                              ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(157))->call("dropdownItemTypes", ["itemtype", (($_v18 = CoreExtension::getAttribute($this->env, $this->source,                 // line 159
($context["item"] ?? null), "fields", [], "any", false, false, false, 159)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18["itemtype"] ?? null) : null), __("Itemtype"), Twig\Extension\CoreExtension::merge(                // line 161
($context["specific_field_options"] ?? null), ["types" => $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("globalsearch_types")])], $context, 157, $this->source);
                // line 162
                yield "
                          ";
            } elseif ((            // line 163
$context["field"] === "date_domaincreation")) {
                // line 164
                yield "                              ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(164))->call("datetimeField", ["date_domaincreation", (($_v19 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 164)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19["date_domaincreation"] ?? null) : null), __("Registration date")], $context, 164, $this->source);
                yield "
                          ";
            } elseif ((            // line 165
$context["field"] === CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getTypeForeignKeyField", [], "method", false, false, false, 165))) {
                // line 166
                yield "                              ";
                $context["type_itemtype"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getTypeClass", [], "method", false, false, false, 166);
                // line 167
                yield "                              ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(167))->call("dropdownField", [                // line 168
($context["type_itemtype"] ?? null),                 // line 169
$context["field"], (($_v20 = CoreExtension::getAttribute($this->env, $this->source,                 // line 170
($context["item"] ?? null), "fields", [], "any", false, false, false, 170)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20[(($_v21 = $context["field"]) instanceof \Stringable && (is_array($_v20) || $_v20 instanceof \ArrayObject || $_v20 instanceof \ArrayIterator) ? (string) $_v21 : $_v21)] ?? null) : null), _n("Type", "Types", 1),                 // line 172
($context["specific_field_options"] ?? null)], $context, 167, $this->source);
                // line 173
                yield "
                          ";
            } elseif ((            // line 174
$context["field"] === "usertitles_id")) {
                // line 175
                yield "                              ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(175))->call("dropdownField", ["UserTitle", "usertitles_id", (($_v22 = CoreExtension::getAttribute($this->env, $this->source,                 // line 178
($context["item"] ?? null), "fields", [], "any", false, false, false, 178)) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22["usertitles_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("UserTitle"), Twig\Extension\CoreExtension::merge(                // line 180
($context["specific_field_options"] ?? null), ["entity" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 181
($context["item"] ?? null), "fields", [], "any", false, true, false, 181), "entities_id", [], "array", true, true, false, 181)) ? (Twig\Extension\CoreExtension::default((($_v23 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 181)) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23["entities_id"] ?? null) : null),  -1)) : ( -1))])], $context, 175, $this->source);
                // line 183
                yield "
                          ";
            } elseif ((            // line 184
$context["field"] === "registration_number")) {
                // line 185
                yield "                              ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(185))->call("autoNameField", ["registration_number",                 // line 187
($context["item"] ?? null), (((is_string($_v24 =                 // line 188
($context["item_type"] ?? null)) && is_string($_v25 = "User") && str_starts_with($_v24, $_v25))) ? (_x("user", "Administrative number")) : (_x("infocom", "Administrative number"))),                 // line 189
($context["withtemplate"] ?? null),                 // line 190
($context["specific_field_options"] ?? null)], $context, 185, $this->source);
                // line 191
                yield "
                          ";
            } elseif ((            // line 192
$context["field"] === "phone")) {
                // line 193
                yield "                              ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(193))->call("autoNameField", ["phone",                 // line 195
($context["item"] ?? null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Phone"),                 // line 197
($context["withtemplate"] ?? null),                 // line 198
($context["specific_field_options"] ?? null)], $context, 193, $this->source);
                // line 199
                yield "
                          ";
            } elseif ((            // line 200
$context["field"] === "phone2")) {
                // line 201
                yield "                              ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(201))->call("autoNameField", ["phone2",                 // line 203
($context["item"] ?? null), __("Phone 2"),                 // line 205
($context["withtemplate"] ?? null),                 // line 206
($context["specific_field_options"] ?? null)], $context, 201, $this->source);
                // line 207
                yield "
                          ";
            } elseif ((            // line 208
$context["field"] === "phonenumber")) {
                // line 209
                yield "                              ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(209))->call("autoNameField", ["phonenumber",                 // line 211
($context["item"] ?? null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Phone"),                 // line 213
($context["withtemplate"] ?? null),                 // line 214
($context["specific_field_options"] ?? null)], $context, 209, $this->source);
                // line 215
                yield "
                          ";
            } elseif ((            // line 216
$context["field"] === "mobile")) {
                // line 217
                yield "                              ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(217))->call("autoNameField", ["mobile",                 // line 219
($context["item"] ?? null), __("Mobile phone"),                 // line 221
($context["withtemplate"] ?? null),                 // line 222
($context["specific_field_options"] ?? null)], $context, 217, $this->source);
                // line 223
                yield "
                          ";
            } elseif ((            // line 224
$context["field"] === "fax")) {
                // line 225
                yield "                              ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(225))->call("autoNameField", ["fax",                 // line 227
($context["item"] ?? null), __("Fax"),                 // line 229
($context["withtemplate"] ?? null),                 // line 230
($context["specific_field_options"] ?? null)], $context, 225, $this->source);
                // line 231
                yield "
                          ";
            } elseif ((            // line 232
$context["field"] === "website")) {
                // line 233
                yield "                              ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(233))->call("autoNameField", ["website",                 // line 235
($context["item"] ?? null), __("Website"),                 // line 237
($context["withtemplate"] ?? null),                 // line 238
($context["specific_field_options"] ?? null)], $context, 233, $this->source);
                // line 239
                yield "
                          ";
            } elseif ((            // line 240
$context["field"] === "email")) {
                // line 241
                yield "                              ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(241))->call("autoNameField", ["email",                 // line 243
($context["item"] ?? null), _n("Email", "Emails", 1),                 // line 245
($context["withtemplate"] ?? null),                 // line 246
($context["specific_field_options"] ?? null)], $context, 241, $this->source);
                // line 247
                yield "
                          ";
            } elseif ((            // line 248
$context["field"] === "address")) {
                // line 249
                yield "                              ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(249))->call("textareaField", ["address", (($_v26 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 249)) && is_array($_v26) || $_v26 instanceof ArrayAccess ? ($_v26["address"] ?? null) : null), __("Address")], $context, 249, $this->source);
                yield "
                          ";
            } elseif ((            // line 250
$context["field"] === "town")) {
                // line 251
                yield "                              ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(251))->call("autoNameField", ["town",                 // line 253
($context["item"] ?? null), __("City"),                 // line 255
($context["withtemplate"] ?? null),                 // line 256
($context["specific_field_options"] ?? null)], $context, 251, $this->source);
                // line 257
                yield "
                          ";
            } elseif ((            // line 258
$context["field"] === "postcode")) {
                // line 259
                yield "                              ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(259))->call("autoNameField", ["postcode",                 // line 261
($context["item"] ?? null), __("Postal code"),                 // line 263
($context["withtemplate"] ?? null),                 // line 264
($context["specific_field_options"] ?? null)], $context, 259, $this->source);
                // line 265
                yield "
                          ";
            } elseif (((            // line 266
$context["field"] === "state") && ((($context["item_type"] ?? null) == "Supplier") || (($context["item_type"] ?? null) == "Contact")))) {
                // line 267
                yield "                              ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(267))->call("autoNameField", ["state",                 // line 269
($context["item"] ?? null), _x("location", "State"),                 // line 271
($context["withtemplate"] ?? null),                 // line 272
($context["specific_field_options"] ?? null)], $context, 267, $this->source);
                // line 273
                yield "
                          ";
            } elseif ((            // line 274
$context["field"] === "country")) {
                // line 275
                yield "                              ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(275))->call("autoNameField", ["country",                 // line 277
($context["item"] ?? null), __("Country"),                 // line 279
($context["withtemplate"] ?? null),                 // line 280
($context["specific_field_options"] ?? null)], $context, 275, $this->source);
                // line 281
                yield "
                          ";
            } elseif ((            // line 282
$context["field"] === "date_expiration")) {
                // line 283
                yield "                              ";
                if ((($context["item_type"] ?? null) == "Certificate")) {
                    // line 284
                    yield "                                  ";
                    yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(284))->call("dateField", ["date_expiration", (($_v27 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 284)) && is_array($_v27) || $_v27 instanceof ArrayAccess ? ($_v27["date_expiration"] ?? null) : null), __("Expiration date"), Twig\Extension\CoreExtension::merge(["helper" => __("Empty for infinite"), "checkIsExpired" => false, "expiration_class" => CoreExtension::getAttribute($this->env, $this->source,                     // line 287
($context["params"] ?? null), "expiration_class", [], "any", false, false, false, 287)],                     // line 288
($context["specific_field_options"] ?? null))], $context, 284, $this->source);
                    yield "
                              ";
                } elseif ((                // line 289
($context["item_type"] ?? null) == "ItemAntivirus")) {
                    // line 290
                    yield "                                  ";
                    yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(290))->call("dateField", ["date_expiration", (($_v28 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 290)) && is_array($_v28) || $_v28 instanceof ArrayAccess ? ($_v28["date_expiration"] ?? null) : null), __("Expiration date"), Twig\Extension\CoreExtension::merge(["helper" => __("Empty for infinite"), "checkIsExpired" => true],                     // line 293
($context["specific_field_options"] ?? null))], $context, 290, $this->source);
                    yield "
                              ";
                } else {
                    // line 295
                    yield "                                  ";
                    yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(295))->call("datetimeField", ["date_expiration", (($_v29 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 295)) && is_array($_v29) || $_v29 instanceof ArrayAccess ? ($_v29["date_expiration"] ?? null) : null), __("Expiration date"), Twig\Extension\CoreExtension::merge(["helper" => __("Empty for infinite"), "checkIsExpired" => true],                     // line 298
($context["specific_field_options"] ?? null))], $context, 295, $this->source);
                    yield "
                              ";
                }
                // line 300
                yield "                          ";
            } elseif (($context["field"] === "ref")) {
                // line 301
                yield "                              ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(301))->call("textField", ["ref", (($_v30 = CoreExtension::getAttribute($this->env, $this->source,                 // line 303
($context["item"] ?? null), "fields", [], "any", false, false, false, 303)) && is_array($_v30) || $_v30 instanceof ArrayAccess ? ($_v30["ref"] ?? null) : null), __("Reference"),                 // line 305
($context["specific_field_options"] ?? null)], $context, 301, $this->source);
                // line 306
                yield "
                          ";
            } elseif ((            // line 307
$context["field"] === "users_id_tech")) {
                // line 308
                yield "                              ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(308))->call("dropdownField", ["User", "users_id_tech", (($_v31 = CoreExtension::getAttribute($this->env, $this->source,                 // line 311
($context["item"] ?? null), "fields", [], "any", false, false, false, 311)) && is_array($_v31) || $_v31 instanceof ArrayAccess ? ($_v31["users_id_tech"] ?? null) : null), __("Technician in charge"), Twig\Extension\CoreExtension::merge(                // line 313
($context["specific_field_options"] ?? null), ["entity" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 314
($context["item"] ?? null), "fields", [], "any", false, true, false, 314), "entities_id", [], "array", true, true, false, 314)) ? (Twig\Extension\CoreExtension::default((($_v32 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 314)) && is_array($_v32) || $_v32 instanceof ArrayAccess ? ($_v32["entities_id"] ?? null) : null),  -1)) : ( -1)), "right" => "own_ticket"])], $context, 308, $this->source);
                // line 317
                yield "
                          ";
            } elseif ((            // line 318
$context["field"] === "manufacturers_id")) {
                // line 319
                yield "                              ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(319))->call("dropdownField", ["Manufacturer", "manufacturers_id", (($_v33 = CoreExtension::getAttribute($this->env, $this->source,                 // line 322
($context["item"] ?? null), "fields", [], "any", false, false, false, 322)) && is_array($_v33) || $_v33 instanceof ArrayAccess ? ($_v33["manufacturers_id"] ?? null) : null), (((is_string($_v34 =                 // line 323
($context["item_type"] ?? null)) && is_string($_v35 = "Software") && str_starts_with($_v34, $_v35))) ? (__("Publisher")) : ($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Manufacturer"))),                 // line 324
($context["specific_field_options"] ?? null)], $context, 319, $this->source);
                // line 325
                yield "
                          ";
            } elseif ((            // line 326
$context["field"] === "groups_id_tech")) {
                // line 327
                yield "                              ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(327))->call("dropdownField", ["Group", "groups_id_tech", (($_v36 = CoreExtension::getAttribute($this->env, $this->source,                 // line 330
($context["item"] ?? null), "fields", [], "any", false, false, false, 330)) && is_array($_v36) || $_v36 instanceof ArrayAccess ? ($_v36["groups_id_tech"] ?? null) : null), __("Group in charge"), Twig\Extension\CoreExtension::merge(                // line 332
($context["specific_field_options"] ?? null), ["entity" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 333
($context["item"] ?? null), "fields", [], "any", false, true, false, 333), "entities_id", [], "array", true, true, false, 333)) ? (Twig\Extension\CoreExtension::default((($_v37 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 333)) && is_array($_v37) || $_v37 instanceof ArrayAccess ? ($_v37["entities_id"] ?? null) : null),  -1)) : ( -1)), "condition" => ["is_assign" => 1], "multiple" => (($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isUsingTrait(                // line 335
($context["item"] ?? null), "Glpi\\Features\\AssignableItem")) ? (true) : (false)), "templateSelection" => (($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isUsingTrait(                // line 336
($context["item"] ?? null), "Glpi\\Features\\AssignableItem")) ? ("templateGroupSelection") : (null))])], $context, 327, $this->source);
                // line 338
                yield "
                          ";
            } elseif ((            // line 339
$context["field"] === CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getModelForeignKeyField", [], "method", false, false, false, 339))) {
                // line 340
                yield "                              ";
                $context["model_itemtype"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getModelClass", [], "method", false, false, false, 340);
                // line 341
                yield "                              ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(341))->call("dropdownField", [                // line 342
($context["model_itemtype"] ?? null),                 // line 343
$context["field"], (($_v38 = CoreExtension::getAttribute($this->env, $this->source,                 // line 344
($context["item"] ?? null), "fields", [], "any", false, false, false, 344)) && is_array($_v38) || $_v38 instanceof ArrayAccess ? ($_v38[(($_v39 = $context["field"]) instanceof \Stringable && (is_array($_v38) || $_v38 instanceof \ArrayObject || $_v38 instanceof \ArrayIterator) ? (string) $_v39 : $_v39)] ?? null) : null), _n("Model", "Models", 1),                 // line 346
($context["specific_field_options"] ?? null)], $context, 341, $this->source);
                // line 347
                yield "
                          ";
            } elseif (((            // line 348
$context["field"] === "contact_num") && (($context["item_type"] ?? null) != "SoftwareLicense"))) {
                // line 349
                yield "                              ";
                // line 350
                yield "                              ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(350))->call("textField", ["contact_num", (($_v40 = CoreExtension::getAttribute($this->env, $this->source,                 // line 352
($context["item"] ?? null), "fields", [], "any", false, false, false, 352)) && is_array($_v40) || $_v40 instanceof ArrayAccess ? ($_v40["contact_num"] ?? null) : null), __("Alternate username number"),                 // line 354
($context["specific_field_options"] ?? null)], $context, 350, $this->source);
                // line 355
                yield "
                          ";
            } elseif ((            // line 356
$context["field"] === "serial")) {
                // line 357
                yield "                              ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(357))->call("textField", ["serial", (($_v41 = CoreExtension::getAttribute($this->env, $this->source,                 // line 359
($context["item"] ?? null), "fields", [], "any", false, false, false, 359)) && is_array($_v41) || $_v41 instanceof ArrayAccess ? ($_v41["serial"] ?? null) : null), __("Serial number"),                 // line 361
($context["specific_field_options"] ?? null)], $context, 357, $this->source);
                // line 362
                yield "
                          ";
            } elseif (((            // line 363
$context["field"] === "contact") && (($context["item_type"] ?? null) != "SoftwareLicense"))) {
                // line 364
                yield "                              ";
                // line 365
                yield "                              ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(365))->call("textField", ["contact", (($_v42 = CoreExtension::getAttribute($this->env, $this->source,                 // line 367
($context["item"] ?? null), "fields", [], "any", false, false, false, 367)) && is_array($_v42) || $_v42 instanceof ArrayAccess ? ($_v42["contact"] ?? null) : null), __("Alternate username"),                 // line 369
($context["specific_field_options"] ?? null)], $context, 365, $this->source);
                // line 370
                yield "
                          ";
            } elseif ((            // line 371
$context["field"] === "otherserial")) {
                // line 372
                yield "                              ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(372))->call("autoNameField", ["otherserial",                 // line 374
($context["item"] ?? null), __("Inventory number"),                 // line 376
($context["withtemplate"] ?? null),                 // line 377
($context["specific_field_options"] ?? null)], $context, 372, $this->source);
                // line 378
                yield "
                          ";
            } elseif ((            // line 379
$context["field"] === "sysdescr")) {
                // line 380
                yield "                              ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(380))->call("textareaField", ["sysdescr", (($_v43 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 380)) && is_array($_v43) || $_v43 instanceof ArrayAccess ? ($_v43["sysdescr"] ?? null) : null), __("Sysdescr"), ($context["specific_field_options"] ?? null)], $context, 380, $this->source);
                yield "
                          ";
            } elseif ((            // line 381
$context["field"] === "snmpcredentials_id")) {
                // line 382
                yield "                              ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(382))->call("dropdownField", ["SNMPCredential", "snmpcredentials_id", (($_v44 = CoreExtension::getAttribute($this->env, $this->source,                 // line 385
($context["item"] ?? null), "fields", [], "any", false, false, false, 385)) && is_array($_v44) || $_v44 instanceof ArrayAccess ? ($_v44["snmpcredentials_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("SNMPCredential"),                 // line 387
($context["specific_field_options"] ?? null)], $context, 382, $this->source);
                // line 388
                yield "
                          ";
            } elseif ((            // line 389
$context["field"] === "users_id")) {
                // line 390
                yield "                              ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(390))->call("dropdownField", ["User", "users_id", (($_v45 = CoreExtension::getAttribute($this->env, $this->source,                 // line 393
($context["item"] ?? null), "fields", [], "any", false, false, false, 393)) && is_array($_v45) || $_v45 instanceof ArrayAccess ? ($_v45["users_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("User"), Twig\Extension\CoreExtension::merge(                // line 395
($context["specific_field_options"] ?? null), ["entity" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 396
($context["item"] ?? null), "fields", [], "any", false, true, false, 396), "entities_id", [], "array", true, true, false, 396)) ? (Twig\Extension\CoreExtension::default((($_v46 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 396)) && is_array($_v46) || $_v46 instanceof ArrayAccess ? ($_v46["entities_id"] ?? null) : null),  -1)) : ( -1)), "right" => "all"])], $context, 390, $this->source);
                // line 399
                yield "
                          ";
            } elseif ((            // line 400
$context["field"] === "is_global")) {
                // line 401
                yield "                              ";
                $context["management_restrict"] = 0;
                // line 402
                yield "                              ";
                if ((($context["item_type"] ?? null) == "Monitor")) {
                    // line 403
                    yield "                                  ";
                    $context["management_restrict"] = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("monitors_management_restrict");
                    // line 404
                    yield "                              ";
                } elseif ((($context["item_type"] ?? null) == "Peripheral")) {
                    // line 405
                    yield "                                  ";
                    $context["management_restrict"] = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("peripherals_management_restrict");
                    // line 406
                    yield "                              ";
                } elseif ((($context["item_type"] ?? null) == "Phone")) {
                    // line 407
                    yield "                                  ";
                    $context["management_restrict"] = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("phones_management_restrict");
                    // line 408
                    yield "                              ";
                } elseif ((($context["item_type"] ?? null) == "Printer")) {
                    // line 409
                    yield "                                  ";
                    $context["management_restrict"] = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("printers_management_restrict");
                    // line 410
                    yield "                              ";
                } else {
                    // line 411
                    yield "                                  ";
                    $context["management_restrict"] = 0;
                    // line 412
                    yield "                              ";
                }
                // line 413
                yield "                              ";
                $context["dd_globalswitch"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 414
                    yield "                                  ";
                    $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showGlobalSwitch", [(($_v47 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 414)) && is_array($_v47) || $_v47 instanceof ArrayAccess ? ($_v47["id"] ?? null) : null), ["withtemplate" =>                     // line 415
($context["withtemplate"] ?? null), "value" => (($_v48 = CoreExtension::getAttribute($this->env, $this->source,                     // line 416
($context["item"] ?? null), "fields", [], "any", false, false, false, 416)) && is_array($_v48) || $_v48 instanceof ArrayAccess ? ($_v48["is_global"] ?? null) : null), "management_restrict" =>                     // line 417
($context["management_restrict"] ?? null), "target" =>                     // line 418
($context["target"] ?? null), "width" => "100%"]]);
                    // line 421
                    yield "                              ";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 422
                yield "                              ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(422))->call("htmlField", ["is_global",                 // line 424
($context["dd_globalswitch"] ?? null), __("Management type")], $context, 422, $this->source);
                // line 426
                yield "
                          ";
            } elseif ((            // line 427
$context["field"] === "size")) {
                // line 428
                yield "                              ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(428))->call("numberField", ["size", (($_v49 = CoreExtension::getAttribute($this->env, $this->source,                 // line 430
($context["item"] ?? null), "fields", [], "any", false, false, false, 430)) && is_array($_v49) || $_v49 instanceof ArrayAccess ? ($_v49["size"] ?? null) : null), __("Size"), Twig\Extension\CoreExtension::merge(                // line 432
($context["specific_field_options"] ?? null), ["min" => 0, "max" => 999.99, "step" => 0.01])], $context, 428, $this->source);
                // line 437
                yield "
                          ";
            } elseif ((            // line 438
$context["field"] === "networks_id")) {
                // line 439
                yield "                              ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(439))->call("dropdownField", ["Network", "networks_id", (($_v50 = CoreExtension::getAttribute($this->env, $this->source,                 // line 442
($context["item"] ?? null), "fields", [], "any", false, false, false, 442)) && is_array($_v50) || $_v50 instanceof ArrayAccess ? ($_v50["networks_id"] ?? null) : null), _n("Network", "Networks", 1),                 // line 444
($context["specific_field_options"] ?? null)], $context, 439, $this->source);
                // line 445
                yield "
                          ";
            } elseif ((            // line 446
$context["field"] === "groups_id")) {
                // line 447
                yield "                              ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(447))->call("dropdownField", ["Group", "groups_id", (($_v51 = CoreExtension::getAttribute($this->env, $this->source,                 // line 450
($context["item"] ?? null), "fields", [], "any", false, false, false, 450)) && is_array($_v51) || $_v51 instanceof ArrayAccess ? ($_v51["groups_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Group"), Twig\Extension\CoreExtension::merge(                // line 452
($context["specific_field_options"] ?? null), ["entity" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 453
($context["item"] ?? null), "fields", [], "any", false, true, false, 453), "entities_id", [], "array", true, true, false, 453)) ? (Twig\Extension\CoreExtension::default((($_v52 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 453)) && is_array($_v52) || $_v52 instanceof ArrayAccess ? ($_v52["entities_id"] ?? null) : null),  -1)) : ( -1)), "condition" => ["is_itemgroup" => 1], "multiple" => (($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isUsingTrait(                // line 455
($context["item"] ?? null), "Glpi\\Features\\AssignableItem")) ? (true) : (false)), "templateSelection" => (($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isUsingTrait(                // line 456
($context["item"] ?? null), "Glpi\\Features\\AssignableItem")) ? ("templateGroupSelection") : (null))])], $context, 447, $this->source);
                // line 458
                yield "
                          ";
            } elseif ((            // line 459
$context["field"] === "uuid")) {
                // line 460
                yield "                              ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(460))->call("textField", ["uuid", (($_v53 = CoreExtension::getAttribute($this->env, $this->source,                 // line 462
($context["item"] ?? null), "fields", [], "any", false, false, false, 462)) && is_array($_v53) || $_v53 instanceof ArrayAccess ? ($_v53["uuid"] ?? null) : null), __("UUID"),                 // line 464
($context["specific_field_options"] ?? null)], $context, 460, $this->source);
                // line 465
                yield "
                          ";
            } elseif ((            // line 466
$context["field"] === "version")) {
                // line 467
                yield "                              ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(467))->call("autoNameField", ["version",                 // line 469
($context["item"] ?? null), _n("Version", "Versions", 1),                 // line 471
($context["withtemplate"] ?? null),                 // line 472
($context["specific_field_options"] ?? null)], $context, 467, $this->source);
                // line 473
                yield "
                          ";
            } elseif ((            // line 474
$context["field"] === "comment")) {
                // line 475
                yield "                              ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(475))->call("textareaField", ["comment", (($_v54 = CoreExtension::getAttribute($this->env, $this->source,                 // line 477
($context["item"] ?? null), "fields", [], "any", false, false, false, 477)) && is_array($_v54) || $_v54 instanceof ArrayAccess ? ($_v54["comment"] ?? null) : null), _n("Comment", "Comments", Session::getPluralNumber()),                 // line 479
($context["specific_field_options"] ?? null)], $context, 475, $this->source);
                // line 480
                yield "
                          ";
            } elseif ((            // line 481
$context["field"] === "ram")) {
                // line 482
                yield "                              ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(482))->call("numberField", ["ram", (($_v55 = CoreExtension::getAttribute($this->env, $this->source,                 // line 484
($context["item"] ?? null), "fields", [], "any", false, false, false, 484)) && is_array($_v55) || $_v55 instanceof ArrayAccess ? ($_v55["ram"] ?? null) : null), Twig\Extension\CoreExtension::sprintf(__("%1\$s (%2\$s)"), _n("Memory", "Memories", 1), __("Mio")),                 // line 486
($context["specific_field_options"] ?? null)], $context, 482, $this->source);
                // line 487
                yield "
                          ";
            } elseif ((            // line 488
$context["field"] === "last_pages_counter")) {
                // line 489
                yield "                              ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(489))->call("numberField", ["last_pages_counter", (($_v56 = CoreExtension::getAttribute($this->env, $this->source,                 // line 491
($context["item"] ?? null), "fields", [], "any", false, false, false, 491)) && is_array($_v56) || $_v56 instanceof ArrayAccess ? ($_v56["last_pages_counter"] ?? null) : null), __("Current counter of pages"),                 // line 493
($context["specific_field_options"] ?? null)], $context, 489, $this->source);
                // line 494
                yield "
                          ";
            } elseif ((            // line 495
$context["field"] === "alarm_threshold")) {
                // line 496
                yield "                              ";
                $context["dd_alarm_treshold"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 497
                    yield "                                  ";
                    $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showNumber", ["alarm_threshold", Twig\Extension\CoreExtension::merge(["value" => (($_v57 = CoreExtension::getAttribute($this->env, $this->source,                     // line 498
($context["item"] ?? null), "fields", [], "any", false, false, false, 498)) && is_array($_v57) || $_v57 instanceof ArrayAccess ? ($_v57["alarm_threshold"] ?? null) : null), "rand" =>                     // line 499
($context["rand"] ?? null), "width" => "100%", "min" => 0, "max" => 100, "step" => 1, "toadd" => ["-1" => __("Never")]],                     // line 505
($context["params"] ?? null))]);
                    // line 506
                    yield "                              ";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 507
                yield "                              ";
                $context["last_alert_html"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 508
                    yield "                                  <span class=\"text-muted\">
                                      ";
                    // line 509
                    $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Alert::displayLastAlert", [($context["item_type"] ?? null), (($_v58 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 509)) && is_array($_v58) || $_v58 instanceof ArrayAccess ? ($_v58["id"] ?? null) : null)]);
                    // line 510
                    yield "                                  </span>
                              ";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 512
                yield "                              ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(512))->call("htmlField", ["alarm_threshold",                 // line 514
($context["dd_alarm_treshold"] ?? null), __("Alert threshold"), Twig\Extension\CoreExtension::merge(                // line 516
($context["specific_field_options"] ?? null), ["add_field_html" =>                 // line 517
($context["last_alert_html"] ?? null)])], $context, 512, $this->source);
                // line 519
                yield "
                          ";
            } elseif ((            // line 520
$context["field"] === "brand")) {
                // line 521
                yield "                              ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(521))->call("textField", ["brand", (($_v59 = CoreExtension::getAttribute($this->env, $this->source,                 // line 523
($context["item"] ?? null), "fields", [], "any", false, false, false, 523)) && is_array($_v59) || $_v59 instanceof ArrayAccess ? ($_v59["brand"] ?? null) : null), __("Brand"),                 // line 525
($context["specific_field_options"] ?? null)], $context, 521, $this->source);
                // line 526
                yield "
                          ";
            } elseif ((            // line 527
$context["field"] === "begin_date")) {
                // line 528
                yield "                              ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(528))->call("dateField", ["begin_date", (($_v60 = CoreExtension::getAttribute($this->env, $this->source,                 // line 530
($context["item"] ?? null), "fields", [], "any", false, false, false, 530)) && is_array($_v60) || $_v60 instanceof ArrayAccess ? ($_v60["begin_date"] ?? null) : null), __("Start date"),                 // line 532
($context["specific_field_options"] ?? null)], $context, 528, $this->source);
                // line 533
                yield "
                          ";
            } elseif ((            // line 534
$context["field"] === "autoupdatesystems_id")) {
                // line 535
                yield "                              ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(535))->call("dropdownField", ["AutoUpdateSystem", "autoupdatesystems_id", (($_v61 = CoreExtension::getAttribute($this->env, $this->source,                 // line 538
($context["item"] ?? null), "fields", [], "any", false, false, false, 538)) && is_array($_v61) || $_v61 instanceof ArrayAccess ? ($_v61["autoupdatesystems_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("AutoUpdateSystem"),                 // line 540
($context["specific_field_options"] ?? null)], $context, 535, $this->source);
                // line 541
                yield "
                          ";
            } elseif ((            // line 542
$context["field"] === "pictures")) {
                // line 543
                yield "                              ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(543))->call("fileField", ["pictures", null, _n("Picture", "Pictures", Session::getPluralNumber()), ["onlyimages" => true, "multiple" => true]], $context, 543, $this->source);
                // line 546
                yield "
                          ";
            } elseif ((            // line 547
$context["field"] === "is_active")) {
                // line 548
                yield "                              ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(548))->call("dropdownYesNo", ["is_active", (($_v62 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 548)) && is_array($_v62) || $_v62 instanceof ArrayAccess ? ($_v62["is_active"] ?? null) : null), __("Active"), ($context["specific_field_options"] ?? null)], $context, 548, $this->source);
                yield "
                          ";
            } elseif ((((            // line 549
$context["field"] === "last_boot") && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["is_dynamic"], "method", false, false, false, 549)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) && (($tmp = (($_v63 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 549)) && is_array($_v63) || $_v63 instanceof ArrayAccess ? ($_v63["is_dynamic"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 550
                yield "                              ";
                // line 551
                yield "                              ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(551))->call("htmlField", ["last_boot", $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($_v64 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 551)) && is_array($_v64) || $_v64 instanceof ArrayAccess ? ($_v64["last_boot"] ?? null) : null), true)), __("Last boot date")], $context, 551, $this->source);
                yield "
                          ";
            } elseif (CoreExtension::inFilter(            // line 552
$context["field"], Twig\Extension\CoreExtension::keys(($context["custom_fields"] ?? null)))) {
                // line 553
                yield "                              ";
                yield (string) CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v65 = ($context["custom_fields"] ?? null)) && is_array($_v65) || $_v65 instanceof ArrayAccess ? ($_v65[(($_v66 = $context["field"]) instanceof \Stringable && (is_array($_v65) || $_v65 instanceof \ArrayObject || $_v65 instanceof \ArrayIterator) ? (string) $_v66 : $_v66)] ?? null) : null), "getFieldType", [], "method", false, false, false, 553), "getFormInput", [$context["field"], (($_v67 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 553)) && is_array($_v67) || $_v67 instanceof ArrayAccess ? ($_v67[(($_v68 = $context["field"]) instanceof \Stringable && (is_array($_v67) || $_v67 instanceof \ArrayObject || $_v67 instanceof \ArrayIterator) ? (string) $_v68 : $_v68)] ?? null) : null)], "method", false, false, false, 553);
                yield "
                          ";
            }
            // line 555
            yield "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 556
        yield "
                     ";
        // line 557
        yield from $this->unwrap()->yieldBlock('more_fields', $context, $blocks);
        // line 559
        yield "                  ";
        return; yield;
    }

    // line 557
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_more_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 558
        yield "                     ";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "generic_show_form.html.twig";
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
        return array (  973 => 558,  966 => 557,  961 => 559,  959 => 557,  956 => 556,  949 => 555,  943 => 553,  941 => 552,  936 => 551,  934 => 550,  932 => 549,  927 => 548,  925 => 547,  922 => 546,  919 => 543,  917 => 542,  914 => 541,  912 => 540,  911 => 538,  909 => 535,  907 => 534,  904 => 533,  902 => 532,  901 => 530,  899 => 528,  897 => 527,  894 => 526,  892 => 525,  891 => 523,  889 => 521,  887 => 520,  884 => 519,  882 => 517,  881 => 516,  880 => 514,  878 => 512,  873 => 510,  871 => 509,  868 => 508,  865 => 507,  861 => 506,  859 => 505,  858 => 499,  857 => 498,  855 => 497,  852 => 496,  850 => 495,  847 => 494,  845 => 493,  844 => 491,  842 => 489,  840 => 488,  837 => 487,  835 => 486,  834 => 484,  832 => 482,  830 => 481,  827 => 480,  825 => 479,  824 => 477,  822 => 475,  820 => 474,  817 => 473,  815 => 472,  814 => 471,  813 => 469,  811 => 467,  809 => 466,  806 => 465,  804 => 464,  803 => 462,  801 => 460,  799 => 459,  796 => 458,  794 => 456,  793 => 455,  792 => 453,  791 => 452,  790 => 450,  788 => 447,  786 => 446,  783 => 445,  781 => 444,  780 => 442,  778 => 439,  776 => 438,  773 => 437,  771 => 432,  770 => 430,  768 => 428,  766 => 427,  763 => 426,  761 => 424,  759 => 422,  755 => 421,  753 => 418,  752 => 417,  751 => 416,  750 => 415,  748 => 414,  745 => 413,  742 => 412,  739 => 411,  736 => 410,  733 => 409,  730 => 408,  727 => 407,  724 => 406,  721 => 405,  718 => 404,  715 => 403,  712 => 402,  709 => 401,  707 => 400,  704 => 399,  702 => 396,  701 => 395,  700 => 393,  698 => 390,  696 => 389,  693 => 388,  691 => 387,  690 => 385,  688 => 382,  686 => 381,  681 => 380,  679 => 379,  676 => 378,  674 => 377,  673 => 376,  672 => 374,  670 => 372,  668 => 371,  665 => 370,  663 => 369,  662 => 367,  660 => 365,  658 => 364,  656 => 363,  653 => 362,  651 => 361,  650 => 359,  648 => 357,  646 => 356,  643 => 355,  641 => 354,  640 => 352,  638 => 350,  636 => 349,  634 => 348,  631 => 347,  629 => 346,  628 => 344,  627 => 343,  626 => 342,  624 => 341,  621 => 340,  619 => 339,  616 => 338,  614 => 336,  613 => 335,  612 => 333,  611 => 332,  610 => 330,  608 => 327,  606 => 326,  603 => 325,  601 => 324,  600 => 323,  599 => 322,  597 => 319,  595 => 318,  592 => 317,  590 => 314,  589 => 313,  588 => 311,  586 => 308,  584 => 307,  581 => 306,  579 => 305,  578 => 303,  576 => 301,  573 => 300,  568 => 298,  566 => 295,  561 => 293,  559 => 290,  557 => 289,  553 => 288,  552 => 287,  550 => 284,  547 => 283,  545 => 282,  542 => 281,  540 => 280,  539 => 279,  538 => 277,  536 => 275,  534 => 274,  531 => 273,  529 => 272,  528 => 271,  527 => 269,  525 => 267,  523 => 266,  520 => 265,  518 => 264,  517 => 263,  516 => 261,  514 => 259,  512 => 258,  509 => 257,  507 => 256,  506 => 255,  505 => 253,  503 => 251,  501 => 250,  496 => 249,  494 => 248,  491 => 247,  489 => 246,  488 => 245,  487 => 243,  485 => 241,  483 => 240,  480 => 239,  478 => 238,  477 => 237,  476 => 235,  474 => 233,  472 => 232,  469 => 231,  467 => 230,  466 => 229,  465 => 227,  463 => 225,  461 => 224,  458 => 223,  456 => 222,  455 => 221,  454 => 219,  452 => 217,  450 => 216,  447 => 215,  445 => 214,  444 => 213,  443 => 211,  441 => 209,  439 => 208,  436 => 207,  434 => 206,  433 => 205,  432 => 203,  430 => 201,  428 => 200,  425 => 199,  423 => 198,  422 => 197,  421 => 195,  419 => 193,  417 => 192,  414 => 191,  412 => 190,  411 => 189,  410 => 188,  409 => 187,  407 => 185,  405 => 184,  402 => 183,  400 => 181,  399 => 180,  398 => 178,  396 => 175,  394 => 174,  391 => 173,  389 => 172,  388 => 170,  387 => 169,  386 => 168,  384 => 167,  381 => 166,  379 => 165,  374 => 164,  372 => 163,  369 => 162,  367 => 161,  366 => 159,  364 => 157,  362 => 156,  359 => 155,  357 => 154,  356 => 149,  354 => 147,  352 => 146,  349 => 145,  347 => 143,  346 => 142,  345 => 140,  343 => 137,  340 => 136,  334 => 134,  331 => 133,  328 => 132,  326 => 131,  323 => 130,  321 => 128,  319 => 126,  317 => 125,  314 => 124,  311 => 123,  309 => 122,  306 => 121,  304 => 119,  302 => 117,  299 => 116,  295 => 115,  291 => 113,  289 => 112,  287 => 111,  284 => 110,  281 => 109,  278 => 108,  276 => 107,  273 => 106,  271 => 105,  270 => 103,  268 => 101,  266 => 100,  264 => 99,  261 => 98,  259 => 96,  258 => 95,  257 => 94,  256 => 92,  255 => 91,  254 => 90,  252 => 89,  250 => 88,  247 => 87,  245 => 85,  244 => 84,  243 => 83,  242 => 81,  240 => 78,  238 => 77,  233 => 76,  231 => 75,  226 => 74,  224 => 73,  219 => 72,  217 => 71,  212 => 70,  210 => 69,  207 => 68,  204 => 67,  199 => 66,  192 => 65,  186 => 586,  180 => 583,  177 => 582,  175 => 581,  172 => 580,  166 => 578,  163 => 577,  157 => 575,  154 => 574,  148 => 572,  146 => 571,  143 => 570,  137 => 566,  132 => 563,  130 => 562,  128 => 561,  126 => 560,  124 => 65,  117 => 61,  113 => 59,  110 => 58,  107 => 57,  104 => 56,  101 => 54,  99 => 52,  98 => 51,  96 => 50,  93 => 49,  90 => 48,  87 => 47,  84 => 46,  81 => 45,  79 => 44,  74 => 42,  70 => 41,  67 => 40,  63 => 38,  61 => 37,  59 => 36,  57 => 35,  54 => 34,  52 => 33,  49 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "generic_show_form.html.twig", "/var/www/html/glpi/templates/generic_show_form.html.twig");
    }
}
