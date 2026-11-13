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

/* pages/admin/user/user.html.twig */
class __TwigTemplate_ccaa6b594738958ee3e5d5b49919e84e extends Template
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
        $macros["modals"] = $this->macros["modals"] = $this->load("components/form/modals_macros.html.twig", 34)->unwrap()->getMacroNamespace();
        // line 35
        yield "
";
        // line 36
        $context["params"] = (((array_key_exists("params", $context) &&  !(null === $context["params"]))) ? ($context["params"]) : ([]));
        // line 37
        $context["rand_field"] = ((array_key_exists("rand", $context)) ? (Twig\Extension\CoreExtension::default(($context["rand"] ?? null), Twig\Extension\CoreExtension::random($this->env->getCharset()))) : (Twig\Extension\CoreExtension::random($this->env->getCharset())));
        // line 38
        $context["field_options"] = ["rand" =>         // line 39
($context["rand_field"] ?? null)];
        // line 41
        yield "
";
        // line 42
        $context["internal_auth"] = ((($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 42)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["authtype"] ?? null) : null) == Twig\Extension\CoreExtension::constant("Auth::DB_GLPI"));
        // line 43
        $context["external_auth"] = ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp) &&  !(($tmp = ($context["internal_auth"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp));
        // line 45
        $context["simple_form"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "simplified_form", [], "any", true, true, false, 45)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "simplified_form", [], "any", false, false, false, 45), false)) : (false));
        // line 46
        $context["is_my_form"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getID", [], "method", false, false, false, 46) == $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID"));
        // line 48
        $context["is_preference_form"] = ((array_key_exists("is_preference_form", $context)) ? (Twig\Extension\CoreExtension::default(($context["is_preference_form"] ?? null), false)) : (false));
        // line 49
        $context["target"] = $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path((((($tmp = ($context["is_preference_form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("/front/preference.php") : ("/front/user.form.php")));
        // line 50
        $context["higher_rights"] = ((array_key_exists("higher_rights", $context)) ? (Twig\Extension\CoreExtension::default(($context["higher_rights"] ?? null), false)) : (false));
        // line 51
        yield "
<div class=\"asset\">
    <form id=\"main-form\" name=\"asset_form\" method=\"post\" action=\"";
        // line 53
        yield (string) $this->escaper->escape(($context["target"] ?? null), "html", null, true);
        yield "\" enctype=\"multipart/form-data\" data-submit-once>

        ";
        // line 55
        yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::PRE_ITEM_FORM"), ["item" => ($context["item"] ?? null), "options" => (((array_key_exists("params", $context) &&  !(null === $context["params"]))) ? ($context["params"]) : ([]))]), "html", null, true);
        yield "

        <div class=\"card-body d-flex flex-wrap\">
            <div class=\"col-12 col-xxl-12 flex-column\">
                <div class=\"d-flex flex-row flex-wrap flex-xl-nowrap\">
                    <div class=\"row flex-row align-items-start flex-grow-1\">
                        <div class=\"row flex-row\">
                            ";
        // line 62
        if ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 62)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 63
            yield "                                <input type=\"hidden\" name=\"id\" value=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getID", [], "method", false, false, false, 63), "html", null, true);
            yield "\" />
                            ";
        }
        // line 65
        yield "                            ";
        if ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 65)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = ($context["internal_auth"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) &&  !(($tmp = ($context["is_preference_form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 66
            yield "                                ";
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(66))->call("textField", ["name", (($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 66)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["name"] ?? null) : null), __("Login")], $context, 66, $this->source);
            yield "
                            ";
        } else {
            // line 68
            yield "                                ";
            $context["login_field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 69
                yield "                                    <span class=\"fw-bold\">";
                yield (string) $this->escaper->escape((($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 69)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["name"] ?? null) : null), "html", null, true);
                yield "</span>
                                    <input type=\"hidden\" name=\"name\" value=\"";
                // line 70
                yield (string) $this->escaper->escape((($_v3 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 70)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["name"] ?? null) : null), "html", null, true);
                yield "\" />
                                ";
                return; yield;
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 72
            yield "                                ";
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(72))->call("htmlField", ["name",             // line 74
($context["login_field"] ?? null), __("Login")], $context, 72, $this->source);
            // line 76
            yield "
                            ";
        }
        // line 78
        yield "
                            ";
        // line 79
        if (( !(($tmp = ($context["simple_form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) &&  !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 79)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 80
            yield "                                ";
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/user/user_picture_field.html.twig");
            yield "
                            ";
        } else {
            // line 82
            yield "                                ";
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(82))->call("nullField", [], $context, 82, $this->source);
            yield "
                            ";
        }
        // line 84
        yield "
                            ";
        // line 85
        if (( !(($tmp = ($context["is_preference_form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = ($context["show_sync_field"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 86
            yield "                                ";
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(86))->call("htmlField", ["sync_field", $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 88
($context["item"] ?? null), "fields", [], "any", false, true, false, 88), "sync_field", [], "array", true, true, false, 88)) ? (Twig\Extension\CoreExtension::default((($_v4 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 88)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["sync_field"] ?? null) : null), Twig\Extension\CoreExtension::constant("Dropdown::EMPTY_VALUE"))) : (Twig\Extension\CoreExtension::constant("Dropdown::EMPTY_VALUE")))), __("Synchronization field")], $context, 86, $this->source);
            // line 90
            yield "
                                ";
            // line 91
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(91))->call("nullField", [], $context, 91, $this->source);
            yield "
                            ";
        }
        // line 93
        yield "
                            ";
        // line 94
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(94))->call("textField", ["realname", (($_v5 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 94)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["realname"] ?? null) : null), __("Surname"), ["readonly" =>         // line 95
($context["external_auth"] ?? null), "additional_attributes" => (((($tmp =         // line 96
($context["is_preference_form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (["autocomplete" => "family-name"]) : ([]))]], $context, 94, $this->source);
        // line 97
        yield "
                            ";
        // line 98
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(98))->call("textField", ["firstname", (($_v6 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 98)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["firstname"] ?? null) : null), __("First name"), ["readonly" =>         // line 99
($context["external_auth"] ?? null), "additional_attributes" => (((($tmp =         // line 100
($context["is_preference_form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (["autocomplete" => "given-name"]) : ([]))]], $context, 98, $this->source);
        // line 101
        yield "
                            ";
        // line 102
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(102))->call("textField", ["middlename", (($_v7 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 102)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["middlename"] ?? null) : null), __("Middle name / Patronymic"), ["readonly" =>         // line 103
($context["external_auth"] ?? null), "additional_attributes" => (((($tmp =         // line 104
($context["is_preference_form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (["autocomplete" => "additional-name"]) : ([]))]], $context, 102, $this->source);
        // line 105
        yield "

                            ";
        // line 107
        if ((($tmp = ($context["use_timezones"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 108
            yield "                                ";
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(108))->call("dropdownArrayField", ["timezone", (($_v8 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 108)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["timezone"] ?? null) : null), ($context["timezones"] ?? null), __("Timezone"), Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ["display_emptychoice" => true, "emptylabel" => __("Use server configuration")])], $context, 108, $this->source);
            // line 111
            yield "
                            ";
        } elseif ((($tmp = Session::haveRight("config", Twig\Extension\CoreExtension::constant("READ"))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 113
            yield "                                ";
            $context["tz_not_config"] = ((__("Timezone usage has not been activated.") . " ") . Twig\Extension\CoreExtension::sprintf(__("Run the \"%1\$s\" command to activate it."), "php bin/console database:enable_timezones"));
            // line 114
            yield "                                ";
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(114))->call("htmlField", ["", $this->escaper->escape(($context["tz_not_config"] ?? null)), __("Timezone"), ($context["field_options"] ?? null)], $context, 114, $this->source);
            yield "
                            ";
        }
        // line 116
        yield "
                            ";
        // line 117
        if ( !(($tmp = ($context["is_preference_form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 118
            yield "                                ";
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(118))->call("dropdownYesNo", ["is_active", (($_v9 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 118)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["is_active"] ?? null) : null), __("Active"), ["readonly" =>  !(($tmp =             // line 119
($context["higher_rights"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp), "helper" => (( !(($tmp =             // line 120
($context["higher_rights"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (__("Not enough rights to change this field")) : (""))]], $context, 118, $this->source);
            // line 121
            yield "
                            ";
        }
        // line 123
        yield "
                            ";
        // line 124
        if (( !(($tmp = ($context["simple_form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) &&  !(($tmp = ($context["is_preference_form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 125
            yield "                                ";
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(125))->call("datetimeField", ["begin_date", (($_v10 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 125)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["begin_date"] ?? null) : null), __("Valid since"), ["clearable" => true, "readonly" =>  !(($tmp =             // line 127
($context["higher_rights"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)]], $context, 125, $this->source);
            // line 128
            yield "
                                ";
            // line 129
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(129))->call("datetimeField", ["end_date", (($_v11 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 129)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["end_date"] ?? null) : null), __("Valid until"), ["clearable" => true, "readonly" =>  !(($tmp =             // line 131
($context["higher_rights"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)]], $context, 129, $this->source);
            // line 132
            yield "
                            ";
        }
        // line 134
        yield "
                            ";
        // line 135
        if ((( !(($tmp = ($context["is_preference_form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) &&  !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 135)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) && (($tmp = Session::haveRight("user", Twig\Extension\CoreExtension::constant("User::READAUTHENT"))) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 136
            yield "                                ";
            $context["auth_field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 137
                yield "                                    ";
                yield (string) $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Auth::getMethodLink", [(($_v12 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 137)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["authtype"] ?? null) : null), (($_v13 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 137)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["auths_id"] ?? null) : null)]);
                yield "
                                    ";
                // line 138
                if ( !Twig\Extension\CoreExtension::testEmpty((($_v14 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 138)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["date_sync"] ?? null) : null))) {
                    // line 139
                    yield "                                        <br>
                                        ";
                    // line 140
                    yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::sprintf(__("Last synchronization on %s"), $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($_v15 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 140)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["date_sync"] ?? null) : null))), "html", null, true);
                    yield "
                                    ";
                }
                // line 142
                yield "                                    ";
                if ((($tmp = (($_v16 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 142)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16["last_login"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 143
                    yield "                                        <br>
                                        ";
                    // line 144
                    yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::sprintf(__("Last login on %s"), $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($_v17 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 144)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17["last_login"] ?? null) : null))), "html", null, true);
                    yield "
                                    ";
                }
                // line 146
                yield "                                    ";
                if ((($tmp = (($_v18 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 146)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18["user_dn"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 147
                    yield "                                        <br>
                                        ";
                    // line 148
                    yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::sprintf(__("%1\$s: %2\$s"), __("User DN"), (($_v19 = CoreExtension::getAttribute($this->env, $this->source,                     // line 150
($context["item"] ?? null), "fields", [], "any", false, false, false, 150)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19["user_dn"] ?? null) : null)), "html", null, true);
                    // line 151
                    yield "
                                    ";
                }
                // line 153
                yield "                                    ";
                if ((($tmp = (($_v20 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 153)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20["is_deleted_ldap"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 154
                    yield "                                        <br>
                                        ";
                    // line 155
                    yield (string) $this->escaper->escape(__("User missing in LDAP directory"), "html", null, true);
                    yield "
                                    ";
                }
                // line 157
                yield "                                    ";
                if ( !((($_v21 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 157)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21["2fa"] ?? null) : null) === null)) {
                    // line 158
                    yield "                                        <br>
                                        ";
                    // line 159
                    yield (string) $this->escaper->escape(__("2FA enabled"), "html", null, true);
                    yield "
                                        ";
                    // line 160
                    if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "can", [CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getID", [], "method", false, false, false, 160), Twig\Extension\CoreExtension::constant("UPDATE")], "method", false, false, false, 160)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = Session::haveRight("user", Twig\Extension\CoreExtension::constant("User::UPDATEAUTHENT"))) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                        // line 161
                        yield "                                            <button type=\"submit\" name=\"disable_2fa\" class=\"btn btn-outline-danger btn-sm ms-1\" data-bs-toggle=\"tooltip\"
                                                    title=\"";
                        // line 162
                        yield (string) $this->escaper->escape(__("If 2FA is mandatory for this user, they will be required to set it back up the next time they log in."), "html", null, true);
                        yield "\">
                                                ";
                        // line 163
                        yield (string) $this->escaper->escape(__("Disable"), "html", null, true);
                        yield "
                                            </button>
                                        ";
                    }
                    // line 166
                    yield "                                    ";
                }
                // line 167
                yield "                                ";
                return; yield;
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 168
            yield "                                ";
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(168))->call("htmlField", ["_auth", ($context["auth_field"] ?? null), __("Authentication")], $context, 168, $this->source);
            yield "
                            ";
        } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,         // line 169
($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 169)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 170
            yield "                                <input type=\"hidden\" name=\"authtype\" value=\"1\" />
                            ";
        }
        // line 172
        yield "
                            ";
        // line 173
        if (( !(($tmp = ($context["simple_form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) &&  !(($tmp = ($context["is_preference_form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 174
            yield "                                ";
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(174))->call("dropdownField", ["UserCategory", "usercategories_id", (($_v22 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 174)) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22["usercategories_id"] ?? null) : null), _n("Category", "Categories", 1)], $context, 174, $this->source);
            yield "
                            ";
        }
        // line 176
        yield "                            ";
        if ( !(($tmp = ($context["simple_form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 177
            yield "                                ";
            if ( !(($tmp = ($context["is_preference_form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 178
                yield "                                    ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(178))->call("dropdownField", ["UserTitle", "usertitles_id", (($_v23 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 178)) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23["usertitles_id"] ?? null) : null), _x("person", "Title")], $context, 178, $this->source);
                yield "
                                    ";
                // line 179
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(179))->call("textareaField", ["comment", (($_v24 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 179)) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24["comment"] ?? null) : null), __("Comments")], $context, 179, $this->source);
                yield "
                                ";
            }
            // line 181
            yield "                                ";
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(181))->call("textField", ["registration_number", (($_v25 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 181)) && is_array($_v25) || $_v25 instanceof ArrayAccess ? ($_v25["registration_number"] ?? null) : null), __("Administrative number")], $context, 181, $this->source);
            yield "
                            ";
        }
        // line 183
        yield "                            ";
        if ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 183)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 184
            yield "                                ";
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(184))->call("dropdownField", ["Location", "locations_id", (($_v26 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 184)) && is_array($_v26) || $_v26 instanceof ArrayAccess ? ($_v26["locations_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Location"), ["entity" =>             // line 185
($context["entities"] ?? null)]], $context, 184, $this->source);
            // line 186
            yield "
                            ";
        }
        // line 188
        yield "
                            ";
        // line 189
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 189)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 190
            yield "                                ";
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(190))->call("smallTitle", [_n("Authorization", "Authorizations", 1)], $context, 190, $this->source);
            yield "
                                ";
            // line 191
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(191))->call("dropdownYesNo", ["_is_recursive", 0, __("Recursive")], $context, 191, $this->source);
            yield "
                                ";
            // line 192
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(192))->call("dropdownField", ["Profile", "_profiles_id", $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Profile::getDefault"), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Profile", 1)], $context, 192, $this->source);
            yield "
                                ";
            // line 193
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(193))->call("dropdownField", ["Entity", "_entities_id", ((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "entities_id", [], "any", true, true, false, 193)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "entities_id", [], "any", false, false, false, 193), $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity"))) : ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity"))), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Entity", 1), ["display_emptychoice" => false, "entity" => $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveentities")]], $context, 193, $this->source);
            // line 196
            yield "
                            ";
        } else {
            // line 198
            yield "                                ";
            if (((($tmp = ($context["higher_rights"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = ($context["is_my_form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 199
                yield "                                    ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(199))->call("dropdownArrayField", ["name" => "profiles_id", "value" => (($_v27 = CoreExtension::getAttribute($this->env, $this->source,                 // line 201
($context["item"] ?? null), "fields", [], "any", false, false, false, 201)) && is_array($_v27) || $_v27 instanceof ArrayAccess ? ($_v27["profiles_id"] ?? null) : null), "elements" =>                 // line 202
($context["profiles"] ?? null), "label" => __("Default profile"), "options" => ["display_emptychoice" => true]], $context, 199, $this->source);
                // line 207
                yield "
                                ";
            }
            // line 209
            yield "                                ";
            if (((($tmp = ($context["higher_rights"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = ($context["is_preference_form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 210
                yield "                                    ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(210))->call("dropdownField", ["Entity", "entities_id", ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 210), "entities_id", [], "array", true, true, false, 210)) ? (Twig\Extension\CoreExtension::default((($_v28 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 210)) && is_array($_v28) || $_v28 instanceof ArrayAccess ? ($_v28["entities_id"] ?? null) : null),  -1)) : ( -1)), __("Default entity"), ["toadd" => ["-1" => __("Full structure")], "entity" =>                 // line 214
($context["entities"] ?? null)]], $context, 210, $this->source);
                // line 215
                yield "
                                ";
            }
            // line 217
            yield "                                ";
            if ((($tmp = ($context["higher_rights"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 218
                yield "                                    ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(218))->call("dropdownArrayField", ["name" => "groups_id", "value" => (($_v29 = CoreExtension::getAttribute($this->env, $this->source,                 // line 220
($context["item"] ?? null), "fields", [], "any", false, false, false, 220)) && is_array($_v29) || $_v29 instanceof ArrayAccess ? ($_v29["groups_id"] ?? null) : null), "elements" =>                 // line 221
($context["groups"] ?? null), "label" => __("Default group"), "options" => ["display_emptychoice" => true]], $context, 218, $this->source);
                // line 226
                yield "
                                    ";
                // line 227
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(227))->call("dropdownField", ["User", "users_id_supervisor", (($_v30 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 227)) && is_array($_v30) || $_v30 instanceof ArrayAccess ? ($_v30["users_id_supervisor"] ?? null) : null), __("Supervisor"), ["entity" => $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity"), "entity_sons" => $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity_recursive"), "used" => [CoreExtension::getAttribute($this->env, $this->source,                 // line 230
($context["item"] ?? null), "getID", [], "method", false, false, false, 230)], "right" => "all"]], $context, 227, $this->source);
                // line 232
                yield "
                                ";
            }
            // line 234
            yield "
                                ";
            // line 235
            if ((($tmp = ($context["enable_nickname"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 236
                yield "                                    ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(236))->call("textField", ["nickname", (($_v31 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 236)) && is_array($_v31) || $_v31 instanceof ArrayAccess ? ($_v31["nickname"] ?? null) : null), __("Nickname")], $context, 236, $this->source);
                yield "
                                ";
            }
            // line 238
            yield "                            ";
        }
        // line 239
        yield "
                            ";
        // line 240
        if ((($tmp = ($context["is_preference_form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 241
            yield "                                ";
            $context["lang_dropdown"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 242
                yield "                                    ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showLanguages", ["language", ["value" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 243
($context["item"] ?? null), "fields", [], "any", false, true, false, 243), "language", [], "array", true, true, false, 243)) ? (Twig\Extension\CoreExtension::default((($_v32 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 243)) && is_array($_v32) || $_v32 instanceof ArrayAccess ? ($_v32["language"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("language"))) : ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("language")))]]);
                // line 245
                yield "                                ";
                return; yield;
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 246
            yield "                                ";
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(246))->call("htmlField", ["lang_dropdown", ($context["lang_dropdown"] ?? null), __("Language")], $context, 246, $this->source);
            yield "

                                ";
            // line 248
            if ((($tmp = ($context["is_administrator"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 249
                yield "                                    ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(249))->call("dropdownArrayField", ["use_mode", (($_v33 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 249)) && is_array($_v33) || $_v33 instanceof ArrayAccess ? ($_v33["use_mode"] ?? null) : null), [ (string)Twig\Extension\CoreExtension::constant("Session::NORMAL_MODE") => __("Normal"),  (string)Twig\Extension\CoreExtension::constant("Session::DEBUG_MODE") => __("Debug")], __("Use GLPI in mode")], $context, 249, $this->source);
                // line 252
                yield "
                                ";
            }
            // line 254
            yield "                            ";
        }
        // line 255
        yield "
                            <div role=\"group\" aria-labelledby=\"pref_section_contact\">
                            ";
        // line 257
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(257))->call("smallTitle", [__("Contact information"), "", "", "pref_section_contact"], $context, 257, $this->source);
        yield "
                            ";
        // line 258
        $context["emails_field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 259
            yield "                                ";
            yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("UserEmail::showForUser", [($context["item"] ?? null)]), "html", null, true);
            yield "
                                ";
            // line 260
            yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("UserEmail::showAddEmailButton", [($context["item"] ?? null)]), "html", null, true);
            yield "
                            ";
            return; yield;
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 262
        yield "                            ";
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(262))->call("htmlField", ["_useremails", ($context["emails_field"] ?? null), _n("Email", "Emails", Session::getPluralNumber())], $context, 262, $this->source);
        yield "
                            ";
        // line 263
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(263))->call("textField", ["phone", (($_v34 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 263)) && is_array($_v34) || $_v34 instanceof ArrayAccess ? ($_v34["phone"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Phone", 1), ["additional_attributes" => (((($tmp =         // line 264
($context["is_preference_form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (["autocomplete" => "tel"]) : ([]))]], $context, 263, $this->source);
        // line 265
        yield "
                            ";
        // line 266
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(266))->call("textField", ["mobile", (($_v35 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 266)) && is_array($_v35) || $_v35 instanceof ArrayAccess ? ($_v35["mobile"] ?? null) : null), __("Mobile phone"), ["additional_attributes" => (((($tmp =         // line 267
($context["is_preference_form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (["autocomplete" => "mobile tel"]) : ([]))]], $context, 266, $this->source);
        // line 268
        yield "
                            ";
        // line 269
        if ( !(($tmp = ($context["simple_form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 270
            yield "                                ";
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(270))->call("textField", ["phone2", (($_v36 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 270)) && is_array($_v36) || $_v36 instanceof ArrayAccess ? ($_v36["phone2"] ?? null) : null), __("Phone 2"), ["additional_attributes" => (((($tmp =             // line 271
($context["is_preference_form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (["autocomplete" => "tel"]) : ([]))]], $context, 270, $this->source);
            // line 272
            yield "
                            ";
        }
        // line 274
        yield "                            </div>

                            ";
        // line 276
        if (( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 276)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && ((($tmp = (((array_key_exists("caneditpassword", $context) &&  !(null === $context["caneditpassword"]))) ? ($context["caneditpassword"]) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = ($context["is_preference_form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)))) {
            // line 277
            yield "                                <div role=\"group\" aria-labelledby=\"pref_section_passwords\">
                                ";
            // line 278
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(278))->call("smallTitle", [__("Passwords and access keys"), "", "", "pref_section_passwords"], $context, 278, $this->source);
            yield "
                                ";
            // line 279
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(279))->call("passwordField", ["api_token", $this->extensions['Glpi\Application\View\Extension\SecurityExtension']->decrypt((($_v37 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 279)) && is_array($_v37) || $_v37 instanceof ArrayAccess ? ($_v37["api_token"] ?? null) : null)), __("API token"), ["can_regenerate" => true, "is_disclosable" => true, "clearable" => false, "is_copyable" => true, "additional_attributes" => ["autocomplete" => "new-password"]]], $context, 279, $this->source);
            // line 287
            yield "
                                ";
            // line 288
            if ( !(($tmp = ($context["external_auth"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 289
                yield "                                    ";
                $context["change_pw_field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 290
                    yield "                                        ";
                    if ((($tmp = ($context["is_preference_form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 291
                        yield "                                            <a role=\"button\" class=\"btn btn-outline-secondary btn-sm\" href=\"";
                        yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/front/updatepassword.php"), "html", null, true);
                        yield "\">
                                                <i class=\"ti ti-lock\" aria-hidden=\"true\"></i>
                                                ";
                        // line 293
                        yield (string) $this->escaper->escape(__("Change password"), "html", null, true);
                        yield "
                                            </a>
                                        ";
                    } else {
                        // line 296
                        yield "                                            ";
                        yield (string) ($macros["modals"] ?? $this->throwUninitializedMacroNamespace(296))->call("modal", [__("Change password"), Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/user/change_other_password.html.twig", ["full_width" => true]), ["id" => ("modal_password_" .                         // line 297
($context["rand_field"] ?? null))]], $context, 296, $this->source);
                        // line 298
                        yield "
                                            <script>
                                                \$(\x27#modal_password_";
                        // line 300
                        yield (string) $this->escaper->escape(($context["rand_field"] ?? null), "html", null, true);
                        yield " input\x27).on(\x27keypress\x27, function(e) {
                                                    // Prevent enter key in password fields in modal from submitting form
                                                    if (e.originalEvent.key === \x27Enter\x27) {
                                                        e.preventDefault();
                                                    }
                                                });
                                            </script>
                                            <button
                                                type=\"button\"
                                                class=\"btn btn-outline-secondary btn-sm\"
                                                data-bs-toggle=\"modal\"
                                                data-bs-target=\"#modal_password_";
                        // line 311
                        yield (string) $this->escaper->escape(($context["rand_field"] ?? null), "html", null, true);
                        yield "\"
                                                aria-label=\"";
                        // line 312
                        yield (string) $this->escaper->escape(__("Change password"), "html", null, true);
                        yield "\"
                                            >
                                                <i class=\"ti ti-lock\" aria-hidden=\"true\"></i>
                                                ";
                        // line 315
                        yield (string) $this->escaper->escape(__("Change password"), "html", null, true);
                        yield "
                                            </button>
                                            <div class=\"text-warning d-none\" data-password-change-pending>
                                                ";
                        // line 318
                        yield (string) $this->escaper->escape(__("Password change pending"), "html", null, true);
                        yield "
                                            </div>
                                            <script>
                                                \$(\x27#modal_password_";
                        // line 321
                        yield (string) $this->escaper->escape(($context["rand_field"] ?? null), "html", null, true);
                        yield "\x27).on(\x27hide.bs.modal\x27, () => {
                                                    \$(\x27[data-password-change-pending]\x27).toggleClass(\x27d-none\x27, \$(\x27#modal_password_";
                        // line 322
                        yield (string) $this->escaper->escape(($context["rand_field"] ?? null), "html", null, true);
                        yield " input[name=password]\x27).val() === \x27\x27);
                                                });
                                            </script>
                                        ";
                    }
                    // line 326
                    yield "                                    ";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 327
                yield "                                    ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(327))->call("htmlField", ["_change_pw", ($context["change_pw_field"] ?? null), __("Password")], $context, 327, $this->source);
                yield "
                                ";
            }
            // line 329
            yield "                                </div>
                            ";
        }
        // line 331
        yield "                            ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 331)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 332
            yield "                                <div role=\"group\" aria-labelledby=\"pref_section_passwords\">
                                ";
            // line 333
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(333))->call("smallTitle", [__("Passwords and access keys"), "", "", "pref_section_passwords"], $context, 333, $this->source);
            yield "
                                <div>
                                    ";
            // line 335
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/user/change_other_password.html.twig");
            yield "
                                </div>
                                </div>
                            ";
        }
        // line 339
        yield "                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 344
        if ( !(($tmp = ($context["is_preference_form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 345
            yield "            ";
            if (( !array_key_exists("no_form_buttons", $context) || (($context["no_form_buttons"] ?? null) == false))) {
                // line 346
                yield "                ";
                yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/form/buttons.html.twig");
                yield "
            ";
            } else {
                // line 348
                yield "                ";
                yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::POST_ITEM_FORM"), ["item" => ($context["item"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
                yield "
            ";
            }
            // line 350
            yield "            ";
            if ((($tmp = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "formfooter", [], "array", true, true, false, 350) &&  !(null === (($_v38 = ($context["params"] ?? null)) && is_array($_v38) || $_v38 instanceof ArrayAccess ? ($_v38["formfooter"] ?? null) : null)))) ? ((($_v39 = ($context["params"] ?? null)) && is_array($_v39) || $_v39 instanceof ArrayAccess ? ($_v39["formfooter"] ?? null) : null)) : (true))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 351
                yield "                <div class=\"card-footer mx-n2 mb-n2\">
                    ";
                // line 352
                yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/form/dates.html.twig");
                yield "
                </div>
            ";
            }
            // line 355
            yield "        ";
        } else {
            // line 356
            yield "            ";
            yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::POST_ITEM_FORM"), ["item" => ($context["item"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
            yield "
            <div class=\"card-body mx-n2 border-top d-flex flex-row-reverse align-items-start flex-wrap\">
                <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"update\" value=\"1\">
                    <i class=\"ti ti-device-floppy\" aria-hidden=\"true\"></i>
                    <span>";
            // line 360
            yield (string) $this->escaper->escape(_x("button", "Save"), "html", null, true);
            yield "</span>
                </button>
            </div>
        ";
        }
        // line 364
        yield "    </form>
</div>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/user/user.html.twig";
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
        return array (  734 => 364,  727 => 360,  719 => 356,  716 => 355,  710 => 352,  707 => 351,  704 => 350,  698 => 348,  692 => 346,  689 => 345,  687 => 344,  680 => 339,  673 => 335,  668 => 333,  665 => 332,  662 => 331,  658 => 329,  652 => 327,  648 => 326,  641 => 322,  637 => 321,  631 => 318,  625 => 315,  619 => 312,  615 => 311,  601 => 300,  597 => 298,  595 => 297,  593 => 296,  587 => 293,  581 => 291,  578 => 290,  575 => 289,  573 => 288,  570 => 287,  568 => 279,  564 => 278,  561 => 277,  559 => 276,  555 => 274,  551 => 272,  549 => 271,  547 => 270,  545 => 269,  542 => 268,  540 => 267,  539 => 266,  536 => 265,  534 => 264,  533 => 263,  528 => 262,  522 => 260,  517 => 259,  515 => 258,  511 => 257,  507 => 255,  504 => 254,  500 => 252,  497 => 249,  495 => 248,  489 => 246,  485 => 245,  483 => 243,  481 => 242,  478 => 241,  476 => 240,  473 => 239,  470 => 238,  464 => 236,  462 => 235,  459 => 234,  455 => 232,  453 => 230,  452 => 227,  449 => 226,  447 => 221,  446 => 220,  444 => 218,  441 => 217,  437 => 215,  435 => 214,  433 => 210,  430 => 209,  426 => 207,  424 => 202,  423 => 201,  421 => 199,  418 => 198,  414 => 196,  412 => 193,  408 => 192,  404 => 191,  399 => 190,  397 => 189,  394 => 188,  390 => 186,  388 => 185,  386 => 184,  383 => 183,  377 => 181,  372 => 179,  367 => 178,  364 => 177,  361 => 176,  355 => 174,  353 => 173,  350 => 172,  346 => 170,  344 => 169,  339 => 168,  335 => 167,  332 => 166,  326 => 163,  322 => 162,  319 => 161,  317 => 160,  313 => 159,  310 => 158,  307 => 157,  302 => 155,  299 => 154,  296 => 153,  292 => 151,  290 => 150,  289 => 148,  286 => 147,  283 => 146,  278 => 144,  275 => 143,  272 => 142,  267 => 140,  264 => 139,  262 => 138,  257 => 137,  254 => 136,  252 => 135,  249 => 134,  245 => 132,  243 => 131,  242 => 129,  239 => 128,  237 => 127,  235 => 125,  233 => 124,  230 => 123,  226 => 121,  224 => 120,  223 => 119,  221 => 118,  219 => 117,  216 => 116,  210 => 114,  207 => 113,  203 => 111,  200 => 108,  198 => 107,  194 => 105,  192 => 104,  191 => 103,  190 => 102,  187 => 101,  185 => 100,  184 => 99,  183 => 98,  180 => 97,  178 => 96,  177 => 95,  176 => 94,  173 => 93,  168 => 91,  165 => 90,  163 => 88,  161 => 86,  159 => 85,  156 => 84,  150 => 82,  144 => 80,  142 => 79,  139 => 78,  135 => 76,  133 => 74,  131 => 72,  125 => 70,  120 => 69,  117 => 68,  111 => 66,  108 => 65,  102 => 63,  100 => 62,  90 => 55,  85 => 53,  81 => 51,  79 => 50,  77 => 49,  75 => 48,  73 => 46,  71 => 45,  69 => 43,  67 => 42,  64 => 41,  62 => 39,  61 => 38,  59 => 37,  57 => 36,  54 => 35,  52 => 34,  50 => 33,  47 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/user/user.html.twig", "/var/www/html/glpi/templates/pages/admin/user/user.html.twig");
    }
}
