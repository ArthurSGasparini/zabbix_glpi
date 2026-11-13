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

/* pages/setup/apiclient.html.twig */
class __TwigTemplate_880ab4c74a138ae66cdedf40a6c51aed extends Template
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
            'more_fields' => [$this, 'block_more_fields'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 33
        return $this->parent ??= $this->load("generic_show_form.html.twig", 33);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 34
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 34)->unwrap()->getMacroNamespace();
        // line 35
        $context["params"] = (((array_key_exists("params", $context) &&  !(null === $context["params"]))) ? ($context["params"]) : ([]));
        // line 33
        $this->parent = $this->load("generic_show_form.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 37
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_more_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 38
        yield "    ";
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(38))->call("dropdownArrayField", ["dolog_method", (($_v0 = CoreExtension::getAttribute($this->env, $this->source,         // line 40
($context["item"] ?? null), "fields", [], "any", false, false, false, 40)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["dolog_method"] ?? null) : null),         // line 41
($context["log_methods"] ?? null), __("Log connections")], $context, 38, $this->source);
        // line 43
        yield "

    <div class=\"hr-text\">
        <i class=\"ti ti-filter\" aria-hidden=\"true\"></i>
        <span>";
        // line 47
        yield (string) $this->escaper->escape(__("Filter access"), "html", null, true);
        yield "</span>
    </div>
    <p><em>";
        // line 49
        yield (string) $this->escaper->escape(__("Leave these parameters empty to disable API access restriction"), "html", null, true);
        yield "</em></p>


    ";
        // line 52
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(52))->call("textField", ["ipv4_range_start", (( !Twig\Extension\CoreExtension::testEmpty((($_v1 = CoreExtension::getAttribute($this->env, $this->source,         // line 54
($context["item"] ?? null), "fields", [], "any", false, false, false, 54)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["ipv4_range_start"] ?? null) : null))) ? (long2ip((($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 54)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["ipv4_range_start"] ?? null) : null))) : ("")), __("IPv4 address range start")], $context, 52, $this->source);
        // line 56
        yield "

    ";
        // line 58
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(58))->call("textField", ["ipv4_range_end", (( !Twig\Extension\CoreExtension::testEmpty((($_v3 = CoreExtension::getAttribute($this->env, $this->source,         // line 60
($context["item"] ?? null), "fields", [], "any", false, false, false, 60)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["ipv4_range_end"] ?? null) : null))) ? (long2ip((($_v4 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 60)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["ipv4_range_end"] ?? null) : null))) : ("")), __("IPv4 address range end")], $context, 58, $this->source);
        // line 62
        yield "

    ";
        // line 64
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(64))->call("textField", ["ipv6", (($_v5 = CoreExtension::getAttribute($this->env, $this->source,         // line 66
($context["item"] ?? null), "fields", [], "any", false, false, false, 66)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["ipv6"] ?? null) : null), __("IPv6 address")], $context, 64, $this->source);
        // line 68
        yield "

    ";
        // line 70
        $context["reset_btn"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 71
            yield "        ";
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(71))->call("checkboxField", ["_reset_app_token", (((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 73
($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 73)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (1) : (0)), __("Regenerate"), ["full_width" => true]], $context, 71, $this->source);
            // line 78
            yield "
    ";
            return; yield;
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 80
        yield "
    ";
        // line 81
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(81))->call("passwordField", ["app_token", $this->extensions['Glpi\Application\View\Extension\SecurityExtension']->decrypt((($_v6 = CoreExtension::getAttribute($this->env, $this->source,         // line 83
($context["item"] ?? null), "fields", [], "any", false, false, false, 83)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["app_token"] ?? null) : null)), Twig\Extension\CoreExtension::sprintf(__("%1\$s (%2\$s)"), __("Application token"), "app_token"), ["add_field_html" =>         // line 86
($context["reset_btn"] ?? null), "is_disclosable" => true, "clearable" => false]], $context, 81, $this->source);
        // line 90
        yield "

";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/setup/apiclient.html.twig";
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
        return array (  129 => 90,  127 => 86,  126 => 83,  125 => 81,  122 => 80,  117 => 78,  115 => 73,  113 => 71,  111 => 70,  107 => 68,  105 => 66,  104 => 64,  100 => 62,  98 => 60,  97 => 58,  93 => 56,  91 => 54,  90 => 52,  84 => 49,  79 => 47,  73 => 43,  71 => 41,  70 => 40,  68 => 38,  61 => 37,  56 => 33,  54 => 35,  52 => 34,  45 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/setup/apiclient.html.twig", "/var/www/html/glpi/templates/pages/setup/apiclient.html.twig");
    }
}
