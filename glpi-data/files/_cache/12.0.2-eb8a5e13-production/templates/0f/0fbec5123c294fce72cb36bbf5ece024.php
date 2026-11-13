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

/* pages/setup/general/glpinetwork_setup.html.twig */
class __TwigTemplate_440974335e73afc65fb352482fdbc4dd extends Template
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
        if ( !(($tmp = ($context["services_available"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 36
            yield "    <div class=\"alert alert-warning\">
        <div class=\"alert-title\">";
            // line 37
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::sprintf(__("%1\$s services website seems to be unavailable from your network or offline!"), __("GLPI Network")), "html", null, true);
            yield "</div>
        <span class=\"text-secondary\">
            ";
            // line 39
            if ( !(null === ($context["curl_error"] ?? null))) {
                // line 40
                yield "                ";
                yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::sprintf(__("Error was: %s"), ($context["curl_error"] ?? null)), "html", null, true);
                yield "
            ";
            }
            // line 42
            yield "        </span>
    </div>
";
        }
        // line 45
        yield "
";
        // line 46
        $context["form_path"] = ((array_key_exists("form_path", $context)) ? (Twig\Extension\CoreExtension::default(($context["form_path"] ?? null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Config"))) : ($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Config")));
        // line 47
        yield "<form name=\"form\"
      action=\"";
        // line 48
        yield (string) $this->escaper->escape(($context["form_path"] ?? null), "html", null, true);
        yield "\"
      method=\"post\"
      data-track-changes=\"true\">

    ";
        // line 52
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(52))->call("largeTitle", [__("Registration"), "ti ti-shield-star", true], $context, 52, $this->source);
        yield "

    ";
        // line 54
        if (Twig\Extension\CoreExtension::testEmpty(($context["registration_key"] ?? null))) {
            // line 55
            yield "
        ";
            // line 56
            $context["registration_alert"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 57
                yield "            <div class=\"alert alert-info mb-0 d-inline-flex mt-3\">
                <div class=\"alert-icon\">
                    <i class=\"ti ti-shield-check\" aria-hidden=\"true\"></i>
                </div>
                <div>
                    <h4 class=\"alert-heading\">";
                // line 62
                yield (string) $this->escaper->escape(__("A registration key is needed to use some advanced features (like the plugin marketplace) in GLPI"), "html", null, true);
                yield "</h4>
                    <div class=\"alert-description\">
                        <a href=\"";
                // line 64
                yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::constant("GLPI_NETWORK_SERVICES"), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-secondary me-1\" target=\"_blank\" rel=\"noopener noreferrer\">
                            <i class=\"ti ti-external-link\" aria-hidden=\"true\"></i>
                            <span>";
                // line 66
                yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::sprintf(__("Register on %1\$s!"), __("GLPI Network")), "html", null, true);
                yield "</span>
                        </a>
                        ";
                // line 68
                yield (string) $this->escaper->escape(__("And retrieve your key to paste it below"), "html", null, true);
                yield "
                    </div>
                </div>
            </div>
        ";
                return; yield;
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 73
            yield "
        ";
            // line 74
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(74))->call("htmlField", ["", ($context["registration_alert"] ?? null), null, ["full_width" => true]], $context, 74, $this->source);
            // line 76
            yield "

        ";
            // line 78
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(78))->call("passwordField", ["glpinetwork_registration_key",             // line 80
($context["registration_key"] ?? null), __("Registration key"), ["full_width" => true, "is_disclosable" => true]], $context, 78, $this->source);
            // line 86
            yield "

    ";
        } else {
            // line 89
            yield "        ";
            if ( !Twig\Extension\CoreExtension::testEmpty((($_v0 = ($context["informations"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["validation_message"] ?? null) : null))) {
                // line 90
                yield "            ";
                $context["subscription_ok"] = ((($tmp = (($_v1 = ($context["informations"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["is_valid"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = (($_v2 = (($_v3 = ($context["informations"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["subscription"] ?? null) : null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["is_running"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp));
                // line 91
                yield "            ";
                $context["alert_sub_ok"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 92
                    yield "                <span class=\"";
                    yield (string) (((($tmp = ($context["subscription_ok"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-success") : ("text-danger"));
                    yield "\">
                    <i class=\"ti ti-info-circle\" aria-hidden=\"true\"></i>
                    ";
                    // line 94
                    yield (string) $this->escaper->escape((($_v4 = ($context["informations"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["validation_message"] ?? null) : null), "html", null, true);
                    yield "
                </span>
            ";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 97
                yield "            ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(97))->call("htmlField", ["", ($context["alert_sub_ok"] ?? null), null, ["full_width" => true]], $context, 97, $this->source);
                // line 99
                yield "
        ";
            }
            // line 101
            yield "
        ";
            // line 102
            if ((($tmp = (($_v5 = ($context["informations"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["is_valid"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 103
                yield "            ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(103))->call("htmlField", ["", $this->escaper->escape((($_v6 = (($_v7 = ($context["informations"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["subscription"] ?? null) : null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["title"] ?? null) : null)), __("Subscription"), ["full_width" => true]], $context, 103, $this->source);
                // line 105
                yield "

            ";
                // line 107
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(107))->call("htmlField", ["", Twig\Extension\CoreExtension::sprintf(__("From %1\$s to %2\$s"), (("<b>" . $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDate((($_v8 = (($_v9 = ($context["informations"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["subscription"] ?? null) : null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["begin_date"] ?? null) : null)))) . "</b>"), (("<b>" . $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDate((($_v10 = (($_v11 = ($context["informations"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["subscription"] ?? null) : null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["end_date"] ?? null) : null)))) . "</b>")), __("Period"), ["full_width" => true]], $context, 107, $this->source);
                // line 109
                yield "

            ";
                // line 111
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(111))->call("htmlField", ["", $this->escaper->escape((($_v12 = (($_v13 = ($context["informations"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["owner"] ?? null) : null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["name"] ?? null) : null)), __("Registered by"), ["full_width" => true]], $context, 111, $this->source);
                // line 113
                yield "
        ";
            }
            // line 115
            yield "
        ";
            // line 116
            $context["clear_btn"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 117
                yield "            <button type=\"submit\" name=\"reset_registration_key\" value=\"1\" class=\"ms-auto btn btn-outline-danger\">
                <i class=\"ti ti-x\" aria-hidden=\"true\"></i>
                <span>";
                // line 119
                yield (string) $this->escaper->escape(__("Remove registration key"), "html", null, true);
                yield "</span>
            </button>
        ";
                return; yield;
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 122
            yield "
        ";
            // line 123
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(123))->call("htmlField", ["", ($context["clear_btn"] ?? null), null, ["full_width" => true]], $context, 123, $this->source);
            // line 125
            yield "
    ";
        }
        // line 127
        yield "


    ";
        // line 130
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(130))->call("largeTitle", [__("Marketplace"), "ti ti-puzzle"], $context, 130, $this->source);
        yield "


    ";
        // line 133
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(133))->call("dropdownArrayField", ["marketplace_replace_plugins", Twig\Extension\CoreExtension::default($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("marketplace_replace_plugins"), 1), ["1" => __("Ask before replacing"), "2" => __("Replace plugins page with marketplace"), "3" => __("Never replace plugins page")], __("Plugin page replacement"), ["full_width" => true, "helper" => __("Choose whether to replace the classic plugins page with the new marketplace interface.")]], $context, 133, $this->source);
        // line 146
        yield "

    ";
        // line 148
        $context["btns_marketplace"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 149
            yield "        <a href=\"";
            yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/front/marketplace.php"), "html", null, true);
            yield "\" class=\"btn btn-outline-secondary btn-sm\">
            <i class=\"ti ti-arrow-narrow-right-dashed\" aria-hidden=\"true\"></i>
            <span>";
            // line 151
            yield (string) $this->escaper->escape(__("Access GLPI Network Marketplace"), "html", null, true);
            yield "</span>
        </a>
    ";
            return; yield;
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 154
        yield "
    ";
        // line 155
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(155))->call("htmlField", ["", ($context["btns_marketplace"] ?? null), null, ["full_width" => true]], $context, 155, $this->source);
        // line 157
        yield "

    ";
        // line 159
        if ((($tmp = ($context["canedit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 160
            yield "        <div class=\"card-footer mx-n2 d-flex\">
            <button type=\"submit\" name=\"update\" value=\"1\" class=\"ms-auto btn btn-primary\">
                <i class=\"ti ti-device-floppy\" aria-hidden=\"true\"></i>
                <span>";
            // line 163
            yield (string) $this->escaper->escape(_x("button", "Save"), "html", null, true);
            yield "</span>
            </button>
        </div>
    ";
        }
        // line 167
        yield "</form>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/setup/general/glpinetwork_setup.html.twig";
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
        return array (  286 => 167,  279 => 163,  274 => 160,  272 => 159,  268 => 157,  266 => 155,  263 => 154,  256 => 151,  250 => 149,  248 => 148,  244 => 146,  242 => 133,  236 => 130,  231 => 127,  227 => 125,  225 => 123,  222 => 122,  215 => 119,  211 => 117,  209 => 116,  206 => 115,  202 => 113,  200 => 111,  196 => 109,  194 => 107,  190 => 105,  187 => 103,  185 => 102,  182 => 101,  178 => 99,  175 => 97,  168 => 94,  162 => 92,  159 => 91,  156 => 90,  153 => 89,  148 => 86,  146 => 80,  145 => 78,  141 => 76,  139 => 74,  136 => 73,  127 => 68,  122 => 66,  117 => 64,  112 => 62,  105 => 57,  103 => 56,  100 => 55,  98 => 54,  93 => 52,  86 => 48,  83 => 47,  81 => 46,  78 => 45,  73 => 42,  67 => 40,  65 => 39,  60 => 37,  57 => 36,  55 => 35,  52 => 34,  50 => 33,  47 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/setup/general/glpinetwork_setup.html.twig", "/var/www/html/glpi/templates/pages/setup/general/glpinetwork_setup.html.twig");
    }
}
