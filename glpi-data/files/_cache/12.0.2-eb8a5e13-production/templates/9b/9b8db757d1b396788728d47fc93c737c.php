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

/* pages/setup/general/preferences_setup.html.twig */
class __TwigTemplate_ad4c6e5b1d7550adb4ada5c25663a3e1 extends Template
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

        $this->blocks = [
            'config_fields' => [$this, 'block_config_fields'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 33
        return $this->parent ??= $this->load("pages/setup/general/base_form.html.twig", 33);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 34
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 34)->unwrap()->getMacroNamespace();
        // line 35
        $macros["inputs"] = $this->macros["inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 35)->unwrap()->getMacroNamespace();
        // line 37
        $context["field_options"] = ["label_class" => "col-xxl-7", "input_class" => "col-xxl-5"];
        // line 33
        $this->parent = $this->load("pages/setup/general/base_form.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 42
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_config_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 43
        yield "   ";
        if ((($tmp = ($context["is_user"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 44
            yield "      ";
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(44))->call("largeTitle", [__("Personalization"), "ti ti-adjustments"], $context, 44, $this->source);
            yield "
      ";
            // line 45
            yield (string) ($macros["inputs"] ?? $this->throwUninitializedMacroNamespace(45))->call("hidden", ["id", (($_v0 = ($context["config"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["id"] ?? null) : null)], $context, 45, $this->source);
            yield "
   ";
        } else {
            // line 47
            yield "      ";
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(47))->call("largeTitle", [__("Default values"), "ti ti-adjustments"], $context, 47, $this->source);
            yield "
   ";
        }
        // line 49
        yield "
   ";
        // line 50
        if ( !(($tmp = ($context["can_edit_config"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 51
            yield "      ";
            $context["lang_dropdown"] = "";
            // line 52
            yield "   ";
        } else {
            // line 53
            yield "      ";
            $context["lang_dropdown"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 54
                yield "         ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showLanguages", ["language", ["value" => (($_v1 =                 // line 55
($context["config"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["language"] ?? null) : null)]]);
                // line 57
                yield "      ";
                return; yield;
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 58
            yield "   ";
        }
        // line 59
        yield "   ";
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(59))->call("htmlField", ["", ($context["lang_dropdown"] ?? null), (((($tmp = ($context["is_user"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (__("Language")) : (__("Default language"))), ($context["field_options"] ?? null)], $context, 59, $this->source);
        yield "
   ";
        // line 60
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(60))->call("dropdownArrayField", ["date_format", (($_v2 = ($context["config"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["date_format"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Toolbox::phpDateFormats"), __("Date format"), ($context["field_options"] ?? null)], $context, 60, $this->source);
        yield "

   ";
        // line 62
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(62))->call("dropdownArrayField", ["names_format", (($_v3 = ($context["config"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["names_format"] ?? null) : null), [ (string)Twig\Extension\CoreExtension::constant("User::REALNAME_BEFORE") => __("Surname, First name"),  (string)Twig\Extension\CoreExtension::constant("User::FIRSTNAME_BEFORE") => __("First name, Surname")], __("Display order of surnames firstnames"),         // line 65
($context["field_options"] ?? null)], $context, 62, $this->source);
        yield "
   ";
        // line 66
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(66))->call("dropdownArrayField", ["number_format", (($_v4 = ($context["config"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["number_format"] ?? null) : null), ["1 234.56", "1,234.56", "1 234,56", "1234.56", "1234,56"], __("Number format"),         // line 72
($context["field_options"] ?? null)], $context, 66, $this->source);
        yield "

   ";
        // line 74
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(74))->call("dropdownNumberField", ["list_limit", (($_v5 = ($context["config"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["list_limit"] ?? null) : null), __("Results to display by page"), Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ["min" => 5, "max" => $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("list_limit_max"), "step" => 5])], $context, 74, $this->source);
        // line 78
        yield "
   ";
        // line 79
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(79))->call("dropdownYesNo", ["backcreated", (($_v6 = ($context["config"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["backcreated"] ?? null) : null), __("Go to created item after creation"), ($context["field_options"] ?? null)], $context, 79, $this->source);
        yield "

   ";
        // line 81
        if (($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "central")) {
            // line 82
            yield "      ";
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(82))->call("dropdownYesNo", ["use_flat_dropdowntree", (($_v7 =             // line 84
($context["config"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["use_flat_dropdowntree"] ?? null) : null), __("Display the tree dropdown complete name in dropdown inputs"),             // line 86
($context["field_options"] ?? null)], $context, 82, $this->source);
            // line 87
            yield "
      ";
            // line 88
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(88))->call("dropdownYesNo", ["use_flat_dropdowntree_on_search_result", (($_v8 =             // line 90
($context["config"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["use_flat_dropdowntree_on_search_result"] ?? null) : null), __("Display the complete name of tree dropdown in search results"),             // line 92
($context["field_options"] ?? null)], $context, 88, $this->source);
            // line 93
            yield "
   ";
        }
        // line 95
        yield "
   ";
        // line 96
        if (( !(($tmp = ($context["is_user"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("show_count_on_tabs") !=  -1))) {
            // line 97
            yield "      ";
            $context["count_options"] = [__("No"), __("Yes")];
            // line 101
            yield "      ";
            if ( !(($tmp = ($context["is_user"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 102
                yield "         ";
                $context["count_options"] = (($context["count_options"] ?? null) + [ (string)(-1) => __("Never")]);
                // line 105
                yield "      ";
            }
            // line 106
            yield "      ";
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(106))->call("dropdownArrayField", ["show_count_on_tabs", (($_v9 = ($context["config"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["show_count_on_tabs"] ?? null) : null), ($context["count_options"] ?? null), __("Display counters"), ($context["field_options"] ?? null)], $context, 106, $this->source);
            yield "
   ";
        }
        // line 108
        yield "
   ";
        // line 109
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(109))->call("dropdownYesNo", ["is_ids_visible", (($_v10 = ($context["config"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["is_ids_visible"] ?? null) : null), __("Show GLPI ID"), ($context["field_options"] ?? null)], $context, 109, $this->source);
        yield "
   ";
        // line 110
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(110))->call("dropdownYesNo", ["keep_devices_when_purging_item", (($_v11 = ($context["config"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["keep_devices_when_purging_item"] ?? null) : null), __("Keep devices when purging an item"), ($context["field_options"] ?? null)], $context, 110, $this->source);
        yield "

   ";
        // line 112
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(112))->call("dropdownYesNo", ["notification_to_myself", (($_v12 = ($context["config"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["notification_to_myself"] ?? null) : null), __("Notifications for my changes"), ($context["field_options"] ?? null)], $context, 112, $this->source);
        yield "
   ";
        // line 113
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(113))->call("dropdownNumberField", ["display_count_on_home", (($_v13 = ($context["config"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["display_count_on_home"] ?? null) : null), __("Results to display on home page"), Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ["min" => 0, "max" => 30])], $context, 113, $this->source);
        // line 116
        yield "

   ";
        // line 118
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(118))->call("dropdownArrayField", ["pdffont", (($_v14 = ($context["config"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["pdffont"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("GLPIPDF::getFontList"), __("PDF export font"), ($context["field_options"] ?? null)], $context, 118, $this->source);
        yield "
   ";
        // line 119
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(119))->call("dropdownArrayField", ["csv_delimiter", (($_v15 = ($context["config"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["csv_delimiter"] ?? null) : null), [";" => ";", "," => ","], __("CSV delimiter"),         // line 122
($context["field_options"] ?? null)], $context, 119, $this->source);
        yield "

   <script>
       function getThemeRules() {
           // Calculate list of relevant CSS rules only once
           if (window._theme_rules === undefined) {
               window._theme_rules = [];
               const stylesheets = document.styleSheets;
                for (let i = 0; i < stylesheets.length; i++) {
                     if (stylesheets[i].href) {
                          const rules = stylesheets[i].cssRules;
                          for (let j = 0; j < rules.length; j++) {
                            if (rules[j][\x27selectorText\x27] !== undefined && rules[j][\x27selectorText\x27].includes(\x27data-glpi-theme\x27)) {
                                 window._theme_rules.push(rules[j]);
                            }
                          }
                     }
                }
           }
           return window._theme_rules;
       }

       function getThemePreviewURL(theme_id) {
           const resolve_color_value = (palette_rule, prop_name) => {
               let value = palette_rule.getPropertyValue(prop_name).trim();
               if (value.startsWith(\x27var(\x27)) {
                   // The color is a CSS variable, resolve it
                   value = resolve_color_value(palette_rule, value.substring(4, value.length - 1).trim());
               }
               return value;
           }

           const theme_rules = getThemeRules();
           const palette_colors = {};

           for (let j = 0; j < theme_rules.length; j++) {
               if (theme_rules[j][\x27selectorText\x27] !== undefined && theme_rules[j][\x27selectorText\x27].includes(`data-glpi-theme=\"\${theme_id}\"`)) {
                   for (let k = 1; k < 5; k++) {
                       const color = resolve_color_value(theme_rules[j].style, `--glpi-palette-color-\${k}`);
                       if (color !== \x27\x27) {
                           palette_colors[`--glpi-palette-color-\${k}`] = color;
                       }
                   }
               }
           }

           if (Object.keys(palette_colors).length === 4) {
               const canvas = document.createElement(\x27canvas\x27);
               canvas.width = 60;
               canvas.height = 20;
               const ctx = canvas.getContext(\x272d\x27);
               // draw the 4 colors as quadrants
               ctx.fillStyle = palette_colors[\x27--glpi-palette-color-1\x27] ?? \x27white\x27;
               ctx.fillRect(0, 0, 30, 10);
               ctx.fillStyle = palette_colors[\x27--glpi-palette-color-2\x27] ?? \x27white\x27;
               ctx.fillRect(30, 0, 30, 10);
               ctx.fillStyle = palette_colors[\x27--glpi-palette-color-3\x27] ?? \x27white\x27;
               ctx.fillRect(0, 10, 30, 10);
               ctx.fillStyle = palette_colors[\x27--glpi-palette-color-4\x27] ?? \x27white\x27;
               ctx.fillRect(30, 10, 30, 10);
               return canvas.toDataURL();
           }
           return `";
        // line 184
        yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/front/palette_preview.php"), "html", null, true);
        yield "?key=\${theme_id}`;
       }

       function formatThemes(theme) {
           if (!theme.id) {
               return _.escape(theme.text);
           }

           return \$(\x27<span></span>\x27).html(
               `<img src=\"\${_.escape(getThemePreviewURL(theme.id))}\" /> \${_.escape(theme.text)}`
           );
       }
       \$(\x27select[name=\"palette\"]\x27).on(\x27change\x27, function(e) {
           // Hotswap theme on selection so the user can see the result without saving
           const palettes_isdark = ";
        // line 198
        yield (string) json_encode(((array_key_exists("palettes_isdark", $context)) ? (Twig\Extension\CoreExtension::default(($context["palettes_isdark"] ?? null), [])) : ([])));
        yield ";
           \$(\x27html\x27).attr({
               \x27data-glpi-theme\x27: e.target.value,
               \x27data-glpi-theme-dark\x27: (palettes_isdark[e.target.value] ?? false) ? \"1\" : \"0\"
           });
       });
       function formatGlobalLayout(layout) {
           if (!layout.id) {
               return _.escape(layout.text);
           }
           return \$(\x27<span></span>\x27).html(
               `<img src=\"";
        // line 209
        yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/pics/layout/global_layout_"), "html", null, true);
        yield "\${_.escape(layout.id.toLowerCase())}.png\" /> \${_.escape(layout.text)}`
           );
       }
   </script>
    ";
        // line 213
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(213))->call("dropdownArrayField", ["palette", (($_v16 = ($context["config"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16["palette"] ?? null) : null), ($context["palettes"] ?? null), __("Color palette"), Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ["templateResult" => "formatThemes", "templateSelection" => "formatThemes"])], $context, 213, $this->source);
        // line 216
        yield "

   ";
        // line 219
        yield "   ";
        if (($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "central")) {
            // line 220
            yield "      ";
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(220))->call("dropdownArrayField", ["page_layout", (($_v17 = ($context["config"] ?? null)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17["page_layout"] ?? null) : null), ["horizontal" => __("Horizontal (menu in header)"), "vertical" => __("Vertical (menu in sidebar)")], __("Page layout"), Twig\Extension\CoreExtension::merge(            // line 223
($context["field_options"] ?? null), ["templateResult" => "formatGlobalLayout", "templateSelection" => "formatGlobalLayout"])], $context, 220, $this->source);
            // line 226
            yield "
   ";
        }
        // line 228
        yield "
   ";
        // line 229
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(229))->call("dropdownArrayField", ["richtext_layout", (($_v18 = ($context["config"] ?? null)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18["richtext_layout"] ?? null) : null), ["inline" => __("Inline (no toolbars)"), "classic" => __("Classic (toolbar on top)")], __("Rich text field layout"),         // line 232
($context["field_options"] ?? null)], $context, 229, $this->source);
        yield "

   ";
        // line 234
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(234))->call("dropdownYesNo", ["highcontrast_css", (($_v19 = ($context["config"] ?? null)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19["highcontrast_css"] ?? null) : null), __("Enable high contrast"), ($context["field_options"] ?? null)], $context, 234, $this->source);
        yield "

   ";
        // line 236
        if ((($tmp = ($context["use_timezones"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 237
            yield "      ";
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(237))->call("dropdownArrayField", ["timezone", ((CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "timezone", [], "array", true, true, false, 237)) ? (Twig\Extension\CoreExtension::default((($_v20 = ($context["config"] ?? null)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20["timezone"] ?? null) : null), "")) : ("")), ($context["timezones"] ?? null), __("Timezone"), Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ["display_emptychoice" => true, "emptylabel" => __("Use server configuration")])], $context, 237, $this->source);
            // line 240
            yield "
   ";
        } else {
            // line 242
            yield "      ";
            $context["tz_not_config"] = ((__("Timezone usage has not been activated.") . " ") . Twig\Extension\CoreExtension::sprintf(__("Run the \"%1\$s\" command to activate it."), "php bin/console database:enable_timezones"));
            // line 243
            yield "      ";
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(243))->call("htmlField", ["", $this->escaper->escape(($context["tz_not_config"] ?? null)), __("Timezone"), ($context["field_options"] ?? null)], $context, 243, $this->source);
            yield "
   ";
        }
        // line 245
        yield "
   ";
        // line 246
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(246))->call("dropdownArrayField", ["default_central_tab", (($_v21 = ($context["config"] ?? null)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21["default_central_tab"] ?? null) : null), ($context["central_tabs"] ?? null), __("Default central tab"), ($context["field_options"] ?? null)], $context, 246, $this->source);
        yield "
   ";
        // line 247
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(247))->call("dropdownArrayField", ["timeline_order", (($_v22 = ($context["config"] ?? null)) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22["timeline_order"] ?? null) : null), [ (string)Twig\Extension\CoreExtension::constant("CommonITILObject::TIMELINE_ORDER_NATURAL") => __("Natural order (old items on top, recent on bottom)"),  (string)Twig\Extension\CoreExtension::constant("CommonITILObject::TIMELINE_ORDER_REVERSE") => __("Reverse order (old items on bottom, recent on top)")], __("Timeline order"),         // line 250
($context["field_options"] ?? null)], $context, 247, $this->source);
        yield "

   ";
        // line 252
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(252))->call("dropdownYesNo", ["show_search_form", (($_v23 = ($context["config"] ?? null)) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23["show_search_form"] ?? null) : null), __("Show search form above results"), ($context["field_options"] ?? null)], $context, 252, $this->source);
        yield "
   ";
        // line 253
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(253))->call("dropdownYesNo", ["search_pagination_on_top", (($_v24 = ($context["config"] ?? null)) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24["search_pagination_on_top"] ?? null) : null), __("Show search pagination above results"), ($context["field_options"] ?? null)], $context, 253, $this->source);
        yield "

   ";
        // line 255
        if (($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "central")) {
            // line 256
            yield "      ";
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(256))->call("smallTitle", [__("Assistance"), "ti ti-headset", "level" => 5], $context, 256, $this->source);
            yield "

      ";
            // line 258
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(258))->call("dropdownYesNo", ["followup_private", (($_v25 = ($context["config"] ?? null)) && is_array($_v25) || $_v25 instanceof ArrayAccess ? ($_v25["followup_private"] ?? null) : null), __("Private followups by default"), ($context["field_options"] ?? null)], $context, 258, $this->source);
            yield "
      ";
            // line 259
            if ((((($tmp = Session::haveRight("ticket", Twig\Extension\CoreExtension::constant("Ticket::READMY"))) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = Session::haveRight("ticket", Twig\Extension\CoreExtension::constant("Ticket::READALL"))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) || (($tmp = Session::haveRight("ticket", Twig\Extension\CoreExtension::constant("Ticket::READASSIGN"))) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 260
                yield "         ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(260))->call("dropdownYesNo", ["show_jobs_at_login", (($_v26 = ($context["config"] ?? null)) && is_array($_v26) || $_v26 instanceof ArrayAccess ? ($_v26["show_jobs_at_login"] ?? null) : null), __("Show new tickets on the home page"), ($context["field_options"] ?? null)], $context, 260, $this->source);
                yield "
      ";
            } else {
                // line 262
                yield "         ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(262))->call("htmlField", ["", $this->escaper->escape(__("No")), __("Show new tickets on the home page"), ($context["field_options"] ?? null)], $context, 262, $this->source);
                yield "
      ";
            }
            // line 264
            yield "
      ";
            // line 265
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(265))->call("dropdownYesNo", ["task_private", (($_v27 = ($context["config"] ?? null)) && is_array($_v27) || $_v27 instanceof ArrayAccess ? ($_v27["task_private"] ?? null) : null), __("Private tasks by default"), ($context["field_options"] ?? null)], $context, 265, $this->source);
            yield "
      ";
            // line 266
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(266))->call("dropdownField", ["RequestType", "default_requesttypes_id", (($_v28 = ($context["config"] ?? null)) && is_array($_v28) || $_v28 instanceof ArrayAccess ? ($_v28["default_requesttypes_id"] ?? null) : null), __("Request sources by default"), Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ["condition" => ["is_active" => 1, "is_ticketheader" => 1]])], $context, 266, $this->source);
            // line 271
            yield "

      ";
            // line 273
            $context["task_state_dropdown"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 274
                yield "         ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Planning::dropdownState", ["task_state", (($_v29 = ($context["config"] ?? null)) && is_array($_v29) || $_v29 instanceof ArrayAccess ? ($_v29["task_state"] ?? null) : null), true]);
                // line 275
                yield "      ";
                return; yield;
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 276
            yield "      ";
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(276))->call("htmlField", ["", ($context["task_state_dropdown"] ?? null), __("Tasks state by default"), ($context["field_options"] ?? null)], $context, 276, $this->source);
            yield "

      ";
            // line 278
            $context["planned_task_state_dropdown"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 279
                yield "         ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Planning::dropdownState", ["planned_task_state", (($_v30 = ($context["config"] ?? null)) && is_array($_v30) || $_v30 instanceof ArrayAccess ? ($_v30["planned_task_state"] ?? null) : null), true]);
                // line 280
                yield "      ";
                return; yield;
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 281
            yield "      ";
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(281))->call("htmlField", ["", ($context["planned_task_state_dropdown"] ?? null), __("Planned tasks state by default"), ($context["field_options"] ?? null)], $context, 281, $this->source);
            yield "

      ";
            // line 283
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(283))->call("dropdownNumberField", ["refresh_views", (($_v31 =             // line 285
($context["config"] ?? null)) && is_array($_v31) || $_v31 instanceof ArrayAccess ? ($_v31["refresh_views"] ?? null) : null), __("Automatically refresh data (tickets list, project kanban) in minutes."), Twig\Extension\CoreExtension::merge(            // line 287
($context["field_options"] ?? null), ["min" => 1, "max" => 30, "step" => 1, "toadd" => [__("Never")]])], $context, 283, $this->source);
            // line 295
            yield "
   ";
        }
        // line 297
        yield "
   ";
        // line 298
        $context["itil_default_field_options"] = Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ["helper" => __("Applies to Tickets, Changes, and Problems")]);
        // line 299
        yield "
   ";
        // line 300
        if ((($tmp = Session::haveRight("ticket", Twig\Extension\CoreExtension::constant("Ticket::OWN"))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 301
            yield "      ";
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(301))->call("dropdownYesNo", ["set_default_tech", (($_v32 = ($context["config"] ?? null)) && is_array($_v32) || $_v32 instanceof ArrayAccess ? ($_v32["set_default_tech"] ?? null) : null), __("Pre-select me as a technician for new ITIL items"), ($context["itil_default_field_options"] ?? null)], $context, 301, $this->source);
            yield "
   ";
        } else {
            // line 303
            yield "      ";
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(303))->call("htmlField", ["", $this->escaper->escape(__("No")), __("Pre-select me as a technician for new ITIL items"), ($context["itil_default_field_options"] ?? null)], $context, 303, $this->source);
            yield "
   ";
        }
        // line 305
        yield "   ";
        if ((($tmp = Session::haveRight("ticket", Twig\Extension\CoreExtension::constant("CREATE"))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 306
            yield "      ";
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(306))->call("dropdownYesNo", ["set_default_requester", (($_v33 = ($context["config"] ?? null)) && is_array($_v33) || $_v33 instanceof ArrayAccess ? ($_v33["set_default_requester"] ?? null) : null), __("Pre-select me as a requester for new ITIL items"), ($context["itil_default_field_options"] ?? null)], $context, 306, $this->source);
            yield "
   ";
        } else {
            // line 308
            yield "      ";
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(308))->call("htmlField", ["", $this->escaper->escape(__("No")), __("Pre-select me as a requester for new ITIL items"), ($context["itil_default_field_options"] ?? null)], $context, 308, $this->source);
            yield "
   ";
        }
        // line 310
        yield "   ";
        if ((($tmp = Session::haveRight("ticket", Twig\Extension\CoreExtension::constant("Ticket::OWN"))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 311
            yield "      ";
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(311))->call("dropdownYesNo", ["set_followup_tech", (($_v34 = ($context["config"] ?? null)) && is_array($_v34) || $_v34 instanceof ArrayAccess ? ($_v34["set_followup_tech"] ?? null) : null), __("Add me as a technician when adding a ticket follow-up"), ($context["field_options"] ?? null)], $context, 311, $this->source);
            yield "
   ";
        } else {
            // line 313
            yield "      ";
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(313))->call("htmlField", ["", $this->escaper->escape(__("No")), __("Add me as a technician when adding a ticket follow-up"), ($context["field_options"] ?? null)], $context, 313, $this->source);
            yield "
   ";
        }
        // line 315
        yield "   ";
        if ((($tmp = Session::haveRight("ticket", Twig\Extension\CoreExtension::constant("Ticket::OWN"))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 316
            yield "      ";
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(316))->call("dropdownYesNo", ["set_solution_tech", (($_v35 = ($context["config"] ?? null)) && is_array($_v35) || $_v35 instanceof ArrayAccess ? ($_v35["set_solution_tech"] ?? null) : null), __("Add me as a technician when adding a ticket solution"), ($context["field_options"] ?? null)], $context, 316, $this->source);
            yield "
   ";
        } else {
            // line 318
            yield "      ";
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(318))->call("htmlField", ["", $this->escaper->escape(__("No")), __("Add me as a technician when adding a ticket solution"), ($context["field_options"] ?? null)], $context, 318, $this->source);
            yield "
   ";
        }
        // line 320
        yield "
   ";
        // line 321
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(321))->call("dropdownArrayField", ["timeline_action_btn_layout", (($_v36 = ($context["config"] ?? null)) && is_array($_v36) || $_v36 instanceof ArrayAccess ? ($_v36["timeline_action_btn_layout"] ?? null) : null), [ (string)Twig\Extension\CoreExtension::constant("Config::TIMELINE_ACTION_BTN_MERGED") => __("Merged"),  (string)Twig\Extension\CoreExtension::constant("Config::TIMELINE_ACTION_BTN_SPLITTED") => __("Splitted")], __("Action button layout"),         // line 324
($context["field_options"] ?? null)], $context, 321, $this->source);
        yield "
   ";
        // line 325
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(325))->call("dropdownArrayField", ["timeline_date_format", (($_v37 = ($context["config"] ?? null)) && is_array($_v37) || $_v37 instanceof ArrayAccess ? ($_v37["timeline_date_format"] ?? null) : null), [ (string)Twig\Extension\CoreExtension::constant("Config::TIMELINE_RELATIVE_DATE") => __("Relative"),  (string)Twig\Extension\CoreExtension::constant("Config::TIMELINE_ABSOLUTE_DATE") => __("Precise")], __("Timeline date display"),         // line 328
($context["field_options"] ?? null)], $context, 325, $this->source);
        yield "

   ";
        // line 330
        $context["priority_colors"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 331
            yield "      <div class=\"row\">
         ";
            // line 332
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 6));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 333
                yield "            ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(333))->call("colorField", [("priority_" . $context["i"]), (($_v38 = ($context["config"] ?? null)) && is_array($_v38) || $_v38 instanceof ArrayAccess ? ($_v38[(($_v39 = ("priority_" . $context["i"])) instanceof \Stringable && (is_array($_v38) || $_v38 instanceof \ArrayObject || $_v38 instanceof \ArrayIterator) ? (string) $_v39 : $_v39)] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Ticket::getPriorityName", [$context["i"]]), ($context["field_options"] ?? null)], $context, 333, $this->source);
                yield "
         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 335
            yield "      </div>
   ";
            return; yield;
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 337
        yield "   <div class=\"hr-text my-3\">
      <i class=\"ti ti-palette\" aria-hidden=\"true\"></i>
      ";
        // line 340
        yield "      <h5 class=\"m-0 fs-5 fw-medium\">";
        yield (string) $this->escaper->escape(__("Priority colors"), "html", null, true);
        yield "</h5>
   </div>
   ";
        // line 342
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(342))->call("htmlField", ["", ($context["priority_colors"] ?? null), "", Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ["input_class" => "col-12", "field_class" => "col-12"])], $context, 342, $this->source);
        // line 345
        yield "

   ";
        // line 347
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(347))->call("smallTitle", [__("Due date progression"), "ti ti-clock-play", "level" => 5], $context, 347, $this->source);
        yield "
   ";
        // line 348
        $context["unit_options"] = ["%" => "%", "hours" => _n("Hour", "Hours", Session::getPluralNumber()), "days" => _n("Day", "Days", Session::getPluralNumber())];
        // line 353
        yield "   ";
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(353))->call("colorField", ["duedateok_color", (($_v40 = ($context["config"] ?? null)) && is_array($_v40) || $_v40 instanceof ArrayAccess ? ($_v40["duedateok_color"] ?? null) : null), __("OK state color"), ($context["field_options"] ?? null)], $context, 353, $this->source);
        yield "
   ";
        // line 354
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(354))->call("nullField", [], $context, 354, $this->source);
        yield "

   ";
        // line 356
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(356))->call("colorField", ["duedatewarning_color", (($_v41 = ($context["config"] ?? null)) && is_array($_v41) || $_v41 instanceof ArrayAccess ? ($_v41["duedatewarning_color"] ?? null) : null), __("Warning state color"), ($context["field_options"] ?? null)], $context, 356, $this->source);
        yield "
   ";
        // line 357
        $context["warn_unit_dropdown"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 358
            yield "      ";
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(358))->call("dropdownArrayField", ["duedatewarning_unit", (($_v42 = ($context["config"] ?? null)) && is_array($_v42) || $_v42 instanceof ArrayAccess ? ($_v42["duedatewarning_unit"] ?? null) : null), ($context["unit_options"] ?? null), "", Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ["no_label" => true, "field_class" => "", "mb" => ""])], $context, 358, $this->source);
            // line 362
            yield "
   ";
            return; yield;
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 364
        yield "   ";
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(364))->call("dropdownNumberField", ["duedatewarning_less", (($_v43 = ($context["config"] ?? null)) && is_array($_v43) || $_v43 instanceof ArrayAccess ? ($_v43["duedatewarning_less"] ?? null) : null), __("Warning state threshold"), Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ["add_field_html" =>         // line 365
($context["warn_unit_dropdown"] ?? null), "input_class" => "col-xxl-5 d-flex align-items-center"])], $context, 364, $this->source);
        // line 367
        yield "

   ";
        // line 369
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(369))->call("colorField", ["duedatecritical_color", (($_v44 = ($context["config"] ?? null)) && is_array($_v44) || $_v44 instanceof ArrayAccess ? ($_v44["duedatecritical_color"] ?? null) : null), __("Critical state color"), ($context["field_options"] ?? null)], $context, 369, $this->source);
        yield "
   ";
        // line 370
        $context["warn_unit_dropdown"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 371
            yield "      ";
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(371))->call("dropdownArrayField", ["duedatecritical_unit", (($_v45 = ($context["config"] ?? null)) && is_array($_v45) || $_v45 instanceof ArrayAccess ? ($_v45["duedatecritical_unit"] ?? null) : null), ($context["unit_options"] ?? null), "", Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ["no_label" => true, "field_class" => "", "mb" => ""])], $context, 371, $this->source);
            // line 375
            yield "
   ";
            return; yield;
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 377
        yield "   ";
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(377))->call("dropdownNumberField", ["duedatecritical_less", (($_v46 = ($context["config"] ?? null)) && is_array($_v46) || $_v46 instanceof ArrayAccess ? ($_v46["duedatecritical_less"] ?? null) : null), __("Critical state threshold"), Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ["add_field_html" =>         // line 378
($context["warn_unit_dropdown"] ?? null), "input_class" => "col-xxl-5 d-flex align-items-center"])], $context, 377, $this->source);
        // line 380
        yield "

   ";
        // line 382
        if ((($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "central") && (($tmp = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("lock_use_lock_item")) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 383
            yield "      ";
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(383))->call("smallTitle", [__("Item locks"), "ti ti-lock", "level" => 5], $context, 383, $this->source);
            yield "
      ";
            // line 384
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(384))->call("dropdownYesNo", ["lock_autolock_mode", (($_v47 = ($context["config"] ?? null)) && is_array($_v47) || $_v47 instanceof ArrayAccess ? ($_v47["lock_autolock_mode"] ?? null) : null), __("Auto-lock Mode"), ($context["field_options"] ?? null)], $context, 384, $this->source);
            yield "
      ";
            // line 385
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(385))->call("dropdownYesNo", ["lock_directunlock_notification", (($_v48 =             // line 387
($context["config"] ?? null)) && is_array($_v48) || $_v48 instanceof ArrayAccess ? ($_v48["lock_directunlock_notification"] ?? null) : null), __("Direct Notification (requester for unlock will be the notification sender)"),             // line 389
($context["field_options"] ?? null)], $context, 385, $this->source);
            // line 390
            yield "
   ";
        }
        // line 392
        yield "
   ";
        // line 393
        if ((($tmp = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("\\Glpi\\Dashboard\\Grid::canViewOneDashboard")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 394
            yield "      ";
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(394))->call("smallTitle", [__("Dashboards"), $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Glpi\\Dashboard\\Dashboard::getIcon"), "", "section-dashboards", "level" => 5], $context, 394, $this->source);
            yield "
      ";
            // line 402
            yield "
      ";
            // line 403
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(403))->call("htmlField", ["", $this->getMacroNamespace()->call("dropdownDashboard", ["default_dashboard_central",             // line 405
($context["config"] ?? null)], $context, 405, $this->source), __("Default for central"),             // line 407
($context["field_options"] ?? null)], $context, 403, $this->source);
            // line 408
            yield "
      ";
            // line 409
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(409))->call("htmlField", ["", $this->getMacroNamespace()->call("dropdownDashboard", ["default_dashboard_assets",             // line 411
($context["config"] ?? null)], $context, 411, $this->source), __("Default for Assets"),             // line 413
($context["field_options"] ?? null)], $context, 409, $this->source);
            // line 414
            yield "
      ";
            // line 415
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(415))->call("htmlField", ["", $this->getMacroNamespace()->call("dropdownDashboard", ["default_dashboard_helpdesk",             // line 417
($context["config"] ?? null)], $context, 417, $this->source), __("Default for Assistance"),             // line 419
($context["field_options"] ?? null)], $context, 415, $this->source);
            // line 420
            yield "
      ";
            // line 421
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(421))->call("htmlField", ["", $this->getMacroNamespace()->call("dropdownDashboard", ["default_dashboard_mini_ticket",             // line 423
($context["config"] ?? null), "mini_core", true], $context, 423, $this->source), __("Default for tickets (mini dashboard)"),             // line 425
($context["field_options"] ?? null)], $context, 421, $this->source);
            // line 426
            yield "
   ";
        }
        // line 428
        yield "
   ";
        // line 429
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(429))->call("smallTitle", [_n("Notification", "Notifications", Session::getPluralNumber()), "ti ti-bell", "level" => 5], $context, 429, $this->source);
        yield "
   ";
        // line 430
        $context["enable_notif_helper"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 431
            yield "      • ";
            yield (string) $this->escaper->escape(__("Disable notifications by default on ITIL objects actor configuration, with ability to derogate to it."), "html", null, true);
            yield "
      • ";
            // line 432
            yield (string) $this->escaper->escape(__("Disable all notifications on all other objects, without ability to derogate to it."), "html", null, true);
            yield "
   ";
            return; yield;
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 434
        yield "   ";
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(434))->call("dropdownYesNo", ["is_notif_enable_default", (($_v49 = ($context["config"] ?? null)) && is_array($_v49) || $_v49 instanceof ArrayAccess ? ($_v49["is_notif_enable_default"] ?? null) : null), __("Enable notifications"), Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ["helper" =>         // line 435
($context["enable_notif_helper"] ?? null)])], $context, 434, $this->source);
        // line 436
        yield "
   ";
        // line 437
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(437))->call("dropdownArrayField", ["toast_location", ((CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "toast_location", [], "array", true, true, false, 437)) ? (Twig\Extension\CoreExtension::default((($_v50 = ($context["config"] ?? null)) && is_array($_v50) || $_v50 instanceof ArrayAccess ? ($_v50["toast_location"] ?? null) : null), "bottom-right")) : ("bottom-right")), ["top-left" => __("Top left"), "top-right" => __("Top right"), "bottom-left" => __("Bottom left"), "bottom-right" => __("Bottom right")], __("Notification location"),         // line 442
($context["field_options"] ?? null)], $context, 437, $this->source);
        yield "
";
        return; yield;
    }

    protected function loadDeclaredMacros(): array
    {
        return [
            "dropdownDashboard" => new \Twig\TwigMacro("dropdownDashboard", function ($name = null, $config = null, $thecontext = "core", $disabled_option = false, ...$varargs): string|Markup {
                // line 395
                $macros = $this->macros;
                $context = [
                    "name" => $name,
                    "config" => $config,
                    "thecontext" => $thecontext,
                    "disabled_option" => $disabled_option,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 396
                    yield "         ";
                    $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("\\Glpi\\Dashboard\\Grid::dropdownDashboard", [($context["name"] ?? null), ["value" => (($_v51 =                     // line 397
($context["config"] ?? null)) && is_array($_v51) || $_v51 instanceof ArrayAccess ? ($_v51[(($_v52 = ($context["name"] ?? null)) instanceof \Stringable && (is_array($_v51) || $_v51 instanceof \ArrayObject || $_v51 instanceof \ArrayIterator) ? (string) $_v52 : $_v52)] ?? null) : null), "display_emptychoice" => true, "context" =>                     // line 399
($context["thecontext"] ?? null)],                     // line 400
($context["disabled_option"] ?? null)]);
                    // line 401
                    yield "      ";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["name" => false, "config" => false, "thecontext" => true, "disabled_option" => true], false),
        ];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/setup/general/preferences_setup.html.twig";
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
        return array (  764 => 401,  762 => 400,  761 => 399,  760 => 397,  758 => 396,  745 => 395,  734 => 442,  733 => 437,  730 => 436,  728 => 435,  726 => 434,  720 => 432,  715 => 431,  713 => 430,  709 => 429,  706 => 428,  702 => 426,  700 => 425,  699 => 423,  698 => 421,  695 => 420,  693 => 419,  692 => 417,  691 => 415,  688 => 414,  686 => 413,  685 => 411,  684 => 409,  681 => 408,  679 => 407,  678 => 405,  677 => 403,  674 => 402,  669 => 394,  667 => 393,  664 => 392,  660 => 390,  658 => 389,  657 => 387,  656 => 385,  652 => 384,  647 => 383,  645 => 382,  641 => 380,  639 => 378,  637 => 377,  632 => 375,  629 => 371,  627 => 370,  623 => 369,  619 => 367,  617 => 365,  615 => 364,  610 => 362,  607 => 358,  605 => 357,  601 => 356,  596 => 354,  591 => 353,  589 => 348,  585 => 347,  581 => 345,  579 => 342,  573 => 340,  569 => 337,  564 => 335,  554 => 333,  550 => 332,  547 => 331,  545 => 330,  540 => 328,  539 => 325,  535 => 324,  534 => 321,  531 => 320,  525 => 318,  519 => 316,  516 => 315,  510 => 313,  504 => 311,  501 => 310,  495 => 308,  489 => 306,  486 => 305,  480 => 303,  474 => 301,  472 => 300,  469 => 299,  467 => 298,  464 => 297,  460 => 295,  458 => 287,  457 => 285,  456 => 283,  450 => 281,  446 => 280,  443 => 279,  441 => 278,  435 => 276,  431 => 275,  428 => 274,  426 => 273,  422 => 271,  420 => 266,  416 => 265,  413 => 264,  407 => 262,  401 => 260,  399 => 259,  395 => 258,  389 => 256,  387 => 255,  382 => 253,  378 => 252,  373 => 250,  372 => 247,  368 => 246,  365 => 245,  359 => 243,  356 => 242,  352 => 240,  349 => 237,  347 => 236,  342 => 234,  337 => 232,  336 => 229,  333 => 228,  329 => 226,  327 => 223,  325 => 220,  322 => 219,  318 => 216,  316 => 213,  309 => 209,  295 => 198,  278 => 184,  213 => 122,  212 => 119,  208 => 118,  204 => 116,  202 => 113,  198 => 112,  193 => 110,  189 => 109,  186 => 108,  180 => 106,  177 => 105,  174 => 102,  171 => 101,  168 => 97,  166 => 96,  163 => 95,  159 => 93,  157 => 92,  156 => 90,  155 => 88,  152 => 87,  150 => 86,  149 => 84,  147 => 82,  145 => 81,  140 => 79,  137 => 78,  135 => 74,  130 => 72,  129 => 66,  125 => 65,  124 => 62,  119 => 60,  114 => 59,  111 => 58,  107 => 57,  105 => 55,  103 => 54,  100 => 53,  97 => 52,  94 => 51,  92 => 50,  89 => 49,  83 => 47,  78 => 45,  73 => 44,  70 => 43,  63 => 42,  58 => 33,  56 => 37,  54 => 35,  52 => 34,  45 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/setup/general/preferences_setup.html.twig", "/var/www/html/glpi/templates/pages/setup/general/preferences_setup.html.twig");
    }
}
