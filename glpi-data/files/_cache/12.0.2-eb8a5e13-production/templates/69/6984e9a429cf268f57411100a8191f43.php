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

/* pages/setup/general/general_setup.html.twig */
class __TwigTemplate_f4b4006f635ea35d17a5ec2735c1a89c extends Template
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
        // line 36
        $context["field_options"] = ["full_width" => true];
        // line 40
        $context["inline_field_options"] = Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ["input_addclass" => "w-auto"]);
        // line 33
        $this->parent = $this->load("pages/setup/general/base_form.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 44
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_config_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 45
        yield "
<div class=\"row ps-4\">

    ";
        // line 48
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(48))->call("textField", ["url_base", (($_v0 =         // line 50
($context["config"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["url_base"] ?? null) : null), __("URL of the application"),         // line 52
($context["field_options"] ?? null)], $context, 48, $this->source);
        // line 53
        yield "

    ";
        // line 55
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(55))->call("textareaField", ["text_login", (($_v1 =         // line 57
($context["config"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["text_login"] ?? null) : null), __("Text in the login box"), Twig\Extension\CoreExtension::merge(        // line 59
($context["field_options"] ?? null), ["enable_richtext" => true, "enable_images" => false])], $context, 55, $this->source);
        // line 63
        yield "

    ";
        // line 65
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(65))->call("textField", ["helpdesk_doc_url", (($_v2 =         // line 67
($context["config"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["helpdesk_doc_url"] ?? null) : null), __("Simplified interface help link"),         // line 69
($context["field_options"] ?? null)], $context, 65, $this->source);
        // line 70
        yield "

    ";
        // line 72
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(72))->call("textField", ["central_doc_url", (($_v3 =         // line 74
($context["config"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["central_doc_url"] ?? null) : null), __("Standard interface help link"),         // line 76
($context["field_options"] ?? null)], $context, 72, $this->source);
        // line 77
        yield "

    ";
        // line 79
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(79))->call("numberField", ["decimal_number", (($_v4 =         // line 81
($context["config"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["decimal_number"] ?? null) : null), __("Default decimals limit"), Twig\Extension\CoreExtension::merge(        // line 83
($context["inline_field_options"] ?? null), ["min" => 1, "max" => 4, "required" => true])], $context, 79, $this->source);
        // line 88
        yield "

    ";
        // line 90
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(90))->call("checkboxField", ["use_public_faq", (($_v5 =         // line 92
($context["config"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["use_public_faq"] ?? null) : null), __("Allow FAQ anonymous access"),         // line 94
($context["field_options"] ?? null)], $context, 90, $this->source);
        // line 95
        yield "

    ";
        // line 97
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(97))->call("checkboxField", ["allow_unauthenticated_uploads", (((CoreExtension::getAttribute($this->env, $this->source,         // line 99
($context["config"] ?? null), "allow_unauthenticated_uploads", [], "array", true, true, false, 99) &&  !(null === (($_v6 = ($context["config"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["allow_unauthenticated_uploads"] ?? null) : null)))) ? ((($_v7 = ($context["config"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["allow_unauthenticated_uploads"] ?? null) : null)) : (false)), __("Allow unauthenticated uploads"), Twig\Extension\CoreExtension::merge(        // line 101
($context["field_options"] ?? null), ["helper" => __("Do not use this option if your GLPI is reachable from the internet. Use at your own risk.")])], $context, 97, $this->source);
        // line 104
        yield "

</div>

<div class=\"hr-text\">
    <i class=\"ti ti-list\" aria-hidden=\"true\"></i>
    <span>";
        // line 110
        yield (string) $this->escaper->escape(__("Dynamic display"), "html", null, true);
        yield "</span>
</div>

<div class=\"row ps-4\">

    ";
        // line 115
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(115))->call("numberField", ["dropdown_max", (($_v8 =         // line 117
($context["config"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["dropdown_max"] ?? null) : null), __("Page size for dropdown (paging using scroll)"), Twig\Extension\CoreExtension::merge(        // line 119
($context["inline_field_options"] ?? null), ["min" => 1, "max" => 200, "required" => true])], $context, 115, $this->source);
        // line 124
        yield "

    ";
        // line 126
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(126))->call("dropdownNumberField", ["ajax_limit_count", (($_v9 =         // line 128
($context["config"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["ajax_limit_count"] ?? null) : null), __("Don\x27t show search engine in dropdowns if the number of items is less than"), Twig\Extension\CoreExtension::merge(        // line 130
($context["inline_field_options"] ?? null), ["min" => 1, "max" => 200, "toadd" => ["0" => __("Never")], "width" => "auto", "required" => true])], $context, 126, $this->source);
        // line 137
        yield "
</div>

<div class=\"hr-text\">
    <i class=\"ti ti-search\" aria-hidden=\"true\"></i>
    <span>";
        // line 142
        yield (string) $this->escaper->escape(__("Search engine"), "html", null, true);
        yield "</span>
</div>

<div class=\"row ps-4\">

    ";
        // line 147
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(147))->call("dropdownArrayField", ["allow_search_view", (($_v10 =         // line 149
($context["config"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["allow_search_view"] ?? null) : null), [__("No"), Twig\Extension\CoreExtension::sprintf(__("%1\$s (%2\$s)"), __("Yes"), __("last criterion")), Twig\Extension\CoreExtension::sprintf(__("%1\$s (%2\$s)"), __("Yes"), __("default criterion"))], __("Items seen"), Twig\Extension\CoreExtension::merge(        // line 156
($context["inline_field_options"] ?? null), ["width" => "auto"])], $context, 147, $this->source);
        // line 159
        yield "

    ";
        // line 161
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(161))->call("dropdownYesNo", ["allow_search_global", (($_v11 =         // line 163
($context["config"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["allow_search_global"] ?? null) : null), __("Global search"), Twig\Extension\CoreExtension::merge(        // line 165
($context["inline_field_options"] ?? null), ["width" => "auto"])], $context, 161, $this->source);
        // line 168
        yield "

    ";
        // line 170
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(170))->call("dropdownArrayField", ["allow_search_all", (($_v12 =         // line 172
($context["config"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["allow_search_all"] ?? null) : null), [__("No"), Twig\Extension\CoreExtension::sprintf(__("%1\$s (%2\$s)"), __("Yes"), __("last criterion"))], __("All"), Twig\Extension\CoreExtension::merge(        // line 178
($context["inline_field_options"] ?? null), ["width" => "auto"])], $context, 170, $this->source);
        // line 181
        yield "

    ";
        // line 183
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(183))->call("numberField", ["list_limit_max", (($_v13 =         // line 185
($context["config"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["list_limit_max"] ?? null) : null), __("Default search results limit (page)"), Twig\Extension\CoreExtension::merge(        // line 187
($context["inline_field_options"] ?? null), ["min" => 5, "max" => 200, "step" => 5, "required" => true])], $context, 183, $this->source);
        // line 193
        yield "

    ";
        // line 195
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(195))->call("numberField", ["cut", (($_v14 =         // line 197
($context["config"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["cut"] ?? null) : null), __("Default characters limit (summary text boxes)"), Twig\Extension\CoreExtension::merge(        // line 199
($context["inline_field_options"] ?? null), ["step" => 50, "required" => true])], $context, 195, $this->source);
        // line 203
        yield "

    ";
        // line 205
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(205))->call("numberField", ["url_maxlength", (($_v15 =         // line 207
($context["config"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["url_maxlength"] ?? null) : null), __("Default url length limit"), Twig\Extension\CoreExtension::merge(        // line 209
($context["inline_field_options"] ?? null), ["min" => 20, "max" => 80, "step" => 5, "required" => true])], $context, 205, $this->source);
        // line 215
        yield "

</div>

<div class=\"hr-text\">
    <i class=\"ti ti-lock\" aria-hidden=\"true\"></i>
    <span>";
        // line 221
        yield (string) $this->escaper->escape(__("Item locks"), "html", null, true);
        yield "</span>
</div>

<div class=\"row ps-4\">

    ";
        // line 226
        $context["locks_rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 227
        yield "    ";
        $context["id_lock_use_lock_item"] = ("lock_use_lock_item_" . ($context["locks_rand"] ?? null));
        // line 228
        yield "    ";
        $context["id_lock_lockprofile_id"] = ("dropdown_lock_lockprofile_id" . ($context["locks_rand"] ?? null));
        // line 229
        yield "    ";
        $context["id_lock_item_list_id"] = ("dropdown_lock_item_list" . ($context["locks_rand"] ?? null));
        // line 230
        yield "    ";
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(230))->call("checkboxField", ["lock_use_lock_item", (($_v16 =         // line 232
($context["config"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16["lock_use_lock_item"] ?? null) : null), __("Use locks"), Twig\Extension\CoreExtension::merge(        // line 234
($context["field_options"] ?? null), ["id" =>         // line 235
($context["id_lock_use_lock_item"] ?? null)])], $context, 230, $this->source);
        // line 237
        yield "

    ";
        // line 239
        $context["lock_options"] = ($context["field_options"] ?? null);
        // line 240
        yield "    ";
        if ( !(($tmp = (($_v17 = ($context["config"] ?? null)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17["lock_use_lock_item"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 241
            yield "        ";
            $context["lock_options"] = Twig\Extension\CoreExtension::merge(($context["lock_options"] ?? null), ["disabled" => true]);
            // line 244
            yield "    ";
        }
        // line 245
        yield "
    ";
        // line 246
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(246))->call("dropdownField", ["Profile", "lock_lockprofile_id", (($_v18 =         // line 249
($context["config"] ?? null)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18["lock_lockprofile_id"] ?? null) : null), __("Profile to be used when locking items"), Twig\Extension\CoreExtension::merge(Twig\Extension\CoreExtension::merge(        // line 251
($context["inline_field_options"] ?? null), ($context["lock_options"] ?? null)), ["width" => "auto", "rand" =>         // line 253
($context["locks_rand"] ?? null), "condition" => ["interface" => "central"]])], $context, 246, $this->source);
        // line 258
        yield "

    ";
        // line 260
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(260))->call("dropdownArrayField", ["lock_item_list", "", $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("ObjectLock::getLockableObjects"), __("List of items to lock"), Twig\Extension\CoreExtension::merge(        // line 265
($context["lock_options"] ?? null), ["multiple" => true, "values" => (($_v19 =         // line 267
($context["config"] ?? null)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19["lock_item_list"] ?? null) : null), "rand" =>         // line 268
($context["locks_rand"] ?? null)])], $context, 260, $this->source);
        // line 270
        yield "

    <script>
    \$(function(ready){
        \$(\x27#";
        // line 274
        yield (string) $this->escaper->escape(($context["id_lock_use_lock_item"] ?? null), "html", null, true);
        yield "\x27).change(function(){
            var enabled = this.checked;
            \$(\x27#";
        // line 276
        yield (string) $this->escaper->escape(($context["id_lock_lockprofile_id"] ?? null), "html", null, true);
        yield "\x27).prop(\x27disabled\x27, !enabled);
            \$(\x27#";
        // line 277
        yield (string) $this->escaper->escape(($context["id_lock_item_list_id"] ?? null), "html", null, true);
        yield "\x27).prop(\x27disabled\x27, !enabled);
        });
    });
    </script>
</div>

<div class=\"hr-text\">
    <i class=\"ti ti-layout-kanban\" aria-hidden=\"true\"></i>
    <span>";
        // line 285
        yield (string) $this->escaper->escape(__("Project Task State"), "html", null, true);
        yield "</span>
</div>

<div class=\"row ps-4\">

    ";
        // line 290
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(290))->call("dropdownField", ["ProjectState", "projecttask_unstarted_states_id", ((CoreExtension::getAttribute($this->env, $this->source,         // line 293
($context["config"] ?? null), "projecttask_unstarted_states_id", [], "array", true, true, false, 293)) ? (Twig\Extension\CoreExtension::default((($_v20 = ($context["config"] ?? null)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20["projecttask_unstarted_states_id"] ?? null) : null), "0")) : ("0")), __("Status of unstarted tasks"), Twig\Extension\CoreExtension::merge(        // line 295
($context["inline_field_options"] ?? null), ["width" => "auto"])], $context, 290, $this->source);
        // line 298
        yield "

    ";
        // line 300
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(300))->call("dropdownField", ["ProjectState", "projecttask_inprogress_states_id", ((CoreExtension::getAttribute($this->env, $this->source,         // line 303
($context["config"] ?? null), "projecttask_inprogress_states_id", [], "array", true, true, false, 303)) ? (Twig\Extension\CoreExtension::default((($_v21 = ($context["config"] ?? null)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21["projecttask_inprogress_states_id"] ?? null) : null), "0")) : ("0")), __("Status of tasks in progress"), Twig\Extension\CoreExtension::merge(        // line 305
($context["inline_field_options"] ?? null), ["width" => "auto"])], $context, 300, $this->source);
        // line 308
        yield "

    ";
        // line 310
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(310))->call("dropdownField", ["ProjectState", "projecttask_completed_states_id", ((CoreExtension::getAttribute($this->env, $this->source,         // line 313
($context["config"] ?? null), "projecttask_completed_states_id", [], "array", true, true, false, 313)) ? (Twig\Extension\CoreExtension::default((($_v22 = ($context["config"] ?? null)) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22["projecttask_completed_states_id"] ?? null) : null), "0")) : ("0")), __("Status of tasks done"), Twig\Extension\CoreExtension::merge(        // line 315
($context["inline_field_options"] ?? null), ["width" => "auto"])], $context, 310, $this->source);
        // line 318
        yield "
</div>

<div class=\"hr-text\">
    <i class=\"ti ti-login\" aria-hidden=\"true\"></i>
    <span>";
        // line 323
        yield (string) $this->escaper->escape(__("Auto Login"), "html", null, true);
        yield "</span>
</div>

<div class=\"row ps-4\">

    ";
        // line 328
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(328))->call("dropdownTimestampField", ["login_remember_time", (($_v23 =         // line 330
($context["config"] ?? null)) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23["login_remember_time"] ?? null) : null), __("Time to allow \"Remember Me\""), Twig\Extension\CoreExtension::merge(        // line 332
($context["inline_field_options"] ?? null), ["emptylabel" => __("Disabled"), "min" => 0, "max" => (Twig\Extension\CoreExtension::constant("MONTH_TIMESTAMP") * 2), "step" => Twig\Extension\CoreExtension::constant("DAY_TIMESTAMP"), "toadd" => [Twig\Extension\CoreExtension::constant("HOUR_TIMESTAMP"), (Twig\Extension\CoreExtension::constant("HOUR_TIMESTAMP") * 2), (Twig\Extension\CoreExtension::constant("HOUR_TIMESTAMP") * 6), (Twig\Extension\CoreExtension::constant("HOUR_TIMESTAMP") * 12)], "width" => "auto"])], $context, 328, $this->source);
        // line 345
        yield "

    ";
        // line 347
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(347))->call("checkboxField", ["login_remember_default", (($_v24 =         // line 349
($context["config"] ?? null)) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24["login_remember_default"] ?? null) : null), __("Default state of checkbox"),         // line 351
($context["field_options"] ?? null)], $context, 347, $this->source);
        // line 352
        yield "

    ";
        // line 354
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(354))->call("checkboxField", ["display_login_source", (($_v25 =         // line 356
($context["config"] ?? null)) && is_array($_v25) || $_v25 instanceof ArrayAccess ? ($_v25["display_login_source"] ?? null) : null), __("Display source dropdown on login page"),         // line 358
($context["field_options"] ?? null)], $context, 354, $this->source);
        // line 359
        yield "
</div>

";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/setup/general/general_setup.html.twig";
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
        return array (  368 => 359,  366 => 358,  365 => 356,  364 => 354,  360 => 352,  358 => 351,  357 => 349,  356 => 347,  352 => 345,  350 => 332,  349 => 330,  348 => 328,  340 => 323,  333 => 318,  331 => 315,  330 => 313,  329 => 310,  325 => 308,  323 => 305,  322 => 303,  321 => 300,  317 => 298,  315 => 295,  314 => 293,  313 => 290,  305 => 285,  294 => 277,  290 => 276,  285 => 274,  279 => 270,  277 => 268,  276 => 267,  275 => 265,  274 => 260,  270 => 258,  268 => 253,  267 => 251,  266 => 249,  265 => 246,  262 => 245,  259 => 244,  256 => 241,  253 => 240,  251 => 239,  247 => 237,  245 => 235,  244 => 234,  243 => 232,  241 => 230,  238 => 229,  235 => 228,  232 => 227,  230 => 226,  222 => 221,  214 => 215,  212 => 209,  211 => 207,  210 => 205,  206 => 203,  204 => 199,  203 => 197,  202 => 195,  198 => 193,  196 => 187,  195 => 185,  194 => 183,  190 => 181,  188 => 178,  187 => 172,  186 => 170,  182 => 168,  180 => 165,  179 => 163,  178 => 161,  174 => 159,  172 => 156,  171 => 149,  170 => 147,  162 => 142,  155 => 137,  153 => 130,  152 => 128,  151 => 126,  147 => 124,  145 => 119,  144 => 117,  143 => 115,  135 => 110,  127 => 104,  125 => 101,  124 => 99,  123 => 97,  119 => 95,  117 => 94,  116 => 92,  115 => 90,  111 => 88,  109 => 83,  108 => 81,  107 => 79,  103 => 77,  101 => 76,  100 => 74,  99 => 72,  95 => 70,  93 => 69,  92 => 67,  91 => 65,  87 => 63,  85 => 59,  84 => 57,  83 => 55,  79 => 53,  77 => 52,  76 => 50,  75 => 48,  70 => 45,  63 => 44,  58 => 33,  56 => 40,  54 => 36,  52 => 34,  45 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/setup/general/general_setup.html.twig", "/var/www/html/glpi/templates/pages/setup/general/general_setup.html.twig");
    }
}
