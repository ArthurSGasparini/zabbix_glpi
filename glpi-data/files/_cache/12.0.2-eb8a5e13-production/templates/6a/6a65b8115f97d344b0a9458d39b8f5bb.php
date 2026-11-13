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

/* pages/setup/general/api_setup.html.twig */
class __TwigTemplate_1e2f45786ffa9b2db02d3df9259134ea extends Template
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
        // line 33
        $this->parent = $this->load("pages/setup/general/base_form.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 36
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_config_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 37
        yield "   ";
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(37))->call("largeTitle", [__("API"), "ti ti-api-app"], $context, 37, $this->source);
        yield "

    ";
        // line 39
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(39))->call("smallTitle", [__("API")], $context, 39, $this->source);
        yield "
    ";
        // line 40
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(40))->call("sliderField", ["enable_hlapi", CoreExtension::getAttribute($this->env, $this->source, ($context["config_object"] ?? null), "isHlApiEnabled", [], "method", false, false, false, 40), __("Enable API")], $context, 40, $this->source);
        yield "
    ";
        // line 41
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(41))->call("nullField", [], $context, 41, $this->source);
        yield "
    ";
        // line 42
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["config_object"] ?? null), "isHlApiEnabled", [], "method", false, false, false, 42)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 43
            yield "        ";
            $context["getting_started_doc"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                yield "<a href=\"";
                yield (string) $this->escaper->escape(($context["getting_started_doc_url"] ?? null), "html", null, true);
                yield "\">";
                yield (string) $this->escaper->escape(__("API Getting Started"), "html", null, true);
                yield "</a>";
                return; yield;
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 44
            yield "        ";
            $context["endpoint_doc"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                yield "<a href=\"";
                yield (string) $this->escaper->escape(($context["endpoint_doc_url"] ?? null), "html", null, true);
                yield "\">";
                yield (string) $this->escaper->escape(__("API Endpoints"), "html", null, true);
                yield "</a>";
                return; yield;
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 45
            yield "        ";
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(45))->call("htmlField", ["",             // line 47
($context["getting_started_doc"] ?? null)], $context, 45, $this->source);
            // line 48
            yield "
        ";
            // line 49
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(49))->call("htmlField", ["",             // line 51
($context["endpoint_doc"] ?? null)], $context, 49, $this->source);
            // line 52
            yield "
        ";
            // line 53
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(53))->call("textField", ["_url_base_api", ($context["api_url"] ?? null), __("URL of the API"), ["readonly" => true, "copyable" => true]], $context, 53, $this->source);
            // line 56
            yield "
    ";
        }
        // line 58
        yield "
    ";
        // line 59
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(59))->call("smallTitle", [__("Legacy API")], $context, 59, $this->source);
        yield "
    ";
        // line 60
        if ((($tmp = (($_v0 = ($context["config"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["enable_api"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 61
            yield "        ";
            yield (string) $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("Alert:Warning", ["heading" => __("The Legacy API is enabled. It is recommended to only use the new API when possible.")]);
            yield "
    ";
        }
        // line 63
        yield "    ";
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(63))->call("sliderField", ["enable_api", (($_v1 = ($context["config"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["enable_api"] ?? null) : null), __("Enable Legacy REST API"), ["additional_attributes" => ["onchange" => "confirmEnableLegacyApi(this)"]]], $context, 63, $this->source);
        // line 67
        yield "
    ";
        // line 68
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(68))->call("nullField", [], $context, 68, $this->source);
        yield "
    <script>
        function confirmEnableLegacyApi(element) {
            if (element.checked) {
                glpi_confirm({
                    title: \"";
        // line 73
        yield (string) $this->escaper->escape(__("Enable Legacy REST API"), "html", null, true);
        yield "\",
                    message: \"";
        // line 74
        yield (string) $this->escaper->escape(__("Are you sure you want to enable the Legacy API? It is recommended to only use the new API when possible."), "html", null, true);
        yield "\",
                    cancel_callback: () => element.checked = false
                });
            }
        }
    </script>
   ";
        // line 80
        if ((($tmp = (($_v2 = ($context["config"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["enable_api"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 81
            yield "      ";
            $context["legacy_doc"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                yield "<a href=\"";
                yield (string) $this->escaper->escape(($context["legacy_doc_url"] ?? null), "html", null, true);
                yield "\">";
                yield (string) $this->escaper->escape(__("API inline Documentation"), "html", null, true);
                yield "</a>";
                return; yield;
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 82
            yield "      ";
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(82))->call("htmlField", ["",             // line 84
($context["legacy_doc"] ?? null)], $context, 82, $this->source);
            // line 85
            yield "
      ";
            // line 86
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(86))->call("nullField", [], $context, 86, $this->source);
            yield "
      ";
            // line 87
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(87))->call("textField", ["_legacy_url_base_api", ($context["legacy_api_url"] ?? null), __("URL of the API"), ["readonly" => true, "copyable" => true]], $context, 87, $this->source);
            // line 90
            yield "
      ";
            // line 91
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(91))->call("nullField", [], $context, 91, $this->source);
            yield "
      ";
            // line 92
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(92))->call("sliderField", ["enable_api_login_credentials", (($_v3 = ($context["config"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["enable_api_login_credentials"] ?? null) : null), __("Enable login with credentials"), ["helper" => __("Allow to login to API and get a session token with user credentials")]], $context, 92, $this->source);
            // line 94
            yield "
      ";
            // line 95
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(95))->call("sliderField", ["enable_api_login_external_token", (($_v4 = ($context["config"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["enable_api_login_external_token"] ?? null) : null), __("Enable login with external token"), ["helper" => __("Allow to login to API and get a session token with user external token. See Remote access key in user Settings tab")]], $context, 95, $this->source);
            // line 97
            yield "
   ";
        }
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/setup/general/api_setup.html.twig";
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
        return array (  206 => 97,  204 => 95,  201 => 94,  199 => 92,  195 => 91,  192 => 90,  190 => 87,  186 => 86,  183 => 85,  181 => 84,  179 => 82,  169 => 81,  167 => 80,  158 => 74,  154 => 73,  146 => 68,  143 => 67,  140 => 63,  134 => 61,  132 => 60,  128 => 59,  125 => 58,  121 => 56,  119 => 53,  116 => 52,  114 => 51,  113 => 49,  110 => 48,  108 => 47,  106 => 45,  96 => 44,  86 => 43,  84 => 42,  80 => 41,  76 => 40,  72 => 39,  66 => 37,  59 => 36,  54 => 33,  52 => 34,  45 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/setup/general/api_setup.html.twig", "/var/www/html/glpi/templates/pages/setup/general/api_setup.html.twig");
    }
}
