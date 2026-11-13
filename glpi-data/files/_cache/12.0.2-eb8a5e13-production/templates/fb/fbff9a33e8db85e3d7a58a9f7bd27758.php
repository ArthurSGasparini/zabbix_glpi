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

/* components/form/basic_inputs_macros.html.twig */
class __TwigTemplate_71a243884e5b0cbbfa9733e566d4d387 extends Template
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
        // line 125
        yield "

";
        // line 140
        yield "

";
        // line 169
        yield "

";
        // line 205
        yield "

";
        // line 210
        yield "

";
        // line 215
        yield "

";
        // line 232
        yield "

";
        // line 237
        yield "

";
        // line 401
        yield "

";
        // line 408
        yield "

";
        // line 511
        yield "

";
        // line 535
        yield "

";
        // line 568
        yield "

";
        // line 573
        yield "
";
        return; yield;
    }

    protected function loadDeclaredMacros(): array
    {
        return [
            "input" => new \Twig\TwigMacro("input", function ($name = null, $value = null, $options = [], ...$varargs): string|Markup {
                // line 33
                $macros = $this->macros;
                $context = [
                    "name" => $name,
                    "value" => $value,
                    "options" => $options,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 34
                    yield "    ";
                    $context["options"] = Twig\Extension\CoreExtension::merge(["id" => null, "type" => "text", "input_addclass" => "", "additional_attributes" => [], "readonly" => false, "disabled" => false, "multiple" => false, "required" => false, "maxlength" => null, "is_disclosable" => false, "is_copyable" => false, "clearable" => false, "with_class" => true],                     // line 48
($context["options"] ?? null));
                    // line 49
                    yield "
    ";
                    // line 50
                    if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 50), "isMandatoryField", [($context["name"] ?? null)], "method", true, true, false, 50)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 50), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 50), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 51
                        yield "        ";
                        $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["required" => true]);
                        // line 52
                        yield "    ";
                    }
                    // line 53
                    yield "
    ";
                    // line 54
                    if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 54), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 54)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 54), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 54), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 55
                        yield "        ";
                        $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                        // line 56
                        yield "    ";
                    }
                    // line 57
                    yield "
    ";
                    // line 58
                    $context["has_addons"] = ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "is_disclosable", [], "any", false, false, false, 58)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "is_copyable", [], "any", false, false, false, 58)) && $tmp instanceof Markup ? (string) $tmp : $tmp));
                    // line 59
                    yield "
    ";
                    // line 60
                    if (((($tmp = ($context["has_addons"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 60)))) {
                        // line 61
                        yield "        ";
                        $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => ((Html::sanitizeDomId(                        // line 62
($context["name"] ?? null)) . "_") . Twig\Extension\CoreExtension::random($this->env->getCharset()))]);
                        // line 64
                        yield "    ";
                    }
                    // line 65
                    yield "
    ";
                    // line 66
                    $context["input"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 67
                        yield "        <input type=\"";
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "type", [], "any", false, false, false, 67), "html", null, true);
                        yield "\" ";
                        yield (string) (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 67) != null)) ? ($this->escaper->escape(("id=" . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 67)), "html", null, true)) : (""));
                        yield "
        ";
                        // line 68
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "with_class", [], "any", false, false, false, 68)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 69
                            yield "               class=\"form-control ";
                            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "input_addclass", [], "any", false, false, false, 69), "html", null, true);
                            yield " ";
                            yield (string) (((($tmp = ($context["has_addons"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("rounded-end-0") : (""));
                            yield "\"
        ";
                        }
                        // line 71
                        yield "               name=\"";
                        yield (string) $this->escaper->escape(($context["name"] ?? null), "html", null, true);
                        yield "\" value=\"";
                        yield (string) $this->escaper->escape(($context["value"] ?? null), "html", null, true);
                        yield "\"
            ";
                        // line 72
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "additional_attributes", [], "any", false, false, false, 72));
                        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
                            // line 73
                            yield "               ";
                            yield (string) $this->escaper->escape($context["attr"], "html", null, true);
                            yield "=\"";
                            yield (string) $this->escaper->escape($context["value"], "html", null, true);
                            yield "\"
            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['attr'], $context['value'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent);
                        $context += $_parent;
                        // line 75
                        yield "               ";
                        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "maxlength", [], "any", false, false, false, 75)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(("maxlength=" . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "maxlength", [], "any", false, false, false, 75)), "html", null, true)) : (""));
                        yield "
               ";
                        // line 76
                        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 76)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("readonly") : (""));
                        yield "
               ";
                        // line 77
                        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 77)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
                        yield "
               ";
                        // line 78
                        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "multiple", [], "any", false, false, false, 78)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("multiple") : (""));
                        yield " ";
                        // line 79
                        yield "               ";
                        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 79)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("required") : (""));
                        yield "
               ";
                        // line 80
                        if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "pattern", [], "any", true, true, false, 80)) {
                            yield "pattern=\"";
                            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "pattern", [], "any", false, false, false, 80), "html", null, true);
                            yield "\"";
                        }
                        // line 81
                        yield "               ";
                        if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "min", [], "any", true, true, false, 81)) {
                            yield "min=\"";
                            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "min", [], "any", false, false, false, 81), "html", null, true);
                            yield "\"";
                        }
                        // line 82
                        yield "               ";
                        if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "max", [], "any", true, true, false, 82)) {
                            yield "max=\"";
                            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "max", [], "any", false, false, false, 82), "html", null, true);
                            yield "\"";
                        }
                        // line 83
                        yield "               ";
                        if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", true, true, false, 83)) {
                            yield "step=\"";
                            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", false, false, false, 83), "html", null, true);
                            yield "\"";
                        }
                        yield " />
    ";
                        return; yield;
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 85
                    yield "
    ";
                    // line 86
                    $context["more_html"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 87
                        yield "        ";
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "is_disclosable", [], "any", false, false, false, 87)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 88
                            yield "            <button type=\"button\" class=\"btn btn-outline-secondary\"
                 aria-label=\"";
                            // line 89
                            yield (string) $this->escaper->escape(__("Show password"), "html", null, true);
                            yield "\" title=\"";
                            yield (string) $this->escaper->escape(__("Show password"), "html", null, true);
                            yield "\"
                 data-show-label=\"";
                            // line 90
                            yield (string) $this->escaper->escape(__("Show password"), "html", null, true);
                            yield "\" data-hide-label=\"";
                            yield (string) $this->escaper->escape(__("Hide password"), "html", null, true);
                            yield "\"
                 onclick=\"toggleDisclosablePasswordField(this, \x27";
                            // line 91
                            yield (string) $this->escaper->escape($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 91), "js"), "html", null, true);
                            yield "\x27)\">
                <i class=\"ti ti-eye disclose\" aria-hidden=\"true\"></i>
            </button>
        ";
                        }
                        // line 95
                        yield "
        ";
                        // line 96
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "is_copyable", [], "any", false, false, false, 96)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 97
                            yield "            <button type=\"button\" class=\"btn btn-outline-secondary\"
                 aria-label=\"";
                            // line 98
                            yield (string) $this->escaper->escape(__("Click to copy to clipboard"), "html", null, true);
                            yield "\" title=\"";
                            yield (string) $this->escaper->escape(__("Click to copy to clipboard"), "html", null, true);
                            yield "\"
                 onclick=\"copyDisclosablePasswordFieldToClipboard(\x27";
                            // line 99
                            yield (string) $this->escaper->escape($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 99), "js"), "html", null, true);
                            yield "\x27)\">
                <i class=\"ti ti-clipboard-copy disclose\" aria-hidden=\"true\"></i>
            </button>
        ";
                        }
                        // line 103
                        yield "    ";
                        return; yield;
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 104
                    yield "
    ";
                    // line 105
                    if ((($tmp = ($context["has_addons"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 106
                        yield "        ";
                        $context["input"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                            // line 107
                            yield "            <div class=\"btn-group btn-group-sm d-flex\">
                ";
                            // line 108
                            yield (string) $this->escaper->escape(($context["input"] ?? null), "html", null, true);
                            yield "
                ";
                            // line 109
                            yield (string) $this->escaper->escape(($context["more_html"] ?? null), "html", null, true);
                            yield "
            </div>
        ";
                            return; yield;
                        })())) ? '' : new Markup($tmp, $this->env->getCharset());
                        // line 112
                        yield "    ";
                    }
                    // line 113
                    yield "
    ";
                    // line 114
                    yield (string) $this->escaper->escape(($context["input"] ?? null), "html", null, true);
                    yield "

    ";
                    // line 116
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "clearable", [], "any", false, false, false, 116)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 117
                        yield "        <div class=\"d-flex align-items-center gap-1 mt-1\">
            <input type=\"checkbox\" name=\"_blank_";
                        // line 118
                        yield (string) $this->escaper->escape(($context["name"] ?? null), "html", null, true);
                        yield "\" id=\"_blank_";
                        yield (string) $this->escaper->escape(($context["name"] ?? null), "html", null, true);
                        yield "\" class=\"form-check-input\">
            <label for=\"_blank_";
                        // line 119
                        yield (string) $this->escaper->escape(($context["name"] ?? null), "html", null, true);
                        yield "\" class=\"form-check-label\">
                ";
                        // line 120
                        yield (string) $this->escaper->escape(__("Clear"), "html", null, true);
                        yield "
            </label>
        </div>
    ";
                    }
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["name" => false, "value" => false, "options" => true], false),
            "text" => new \Twig\TwigMacro("text", function ($name = null, $value = null, $options = [], ...$varargs): string|Markup {
                // line 127
                $macros = $this->macros;
                $context = [
                    "name" => $name,
                    "value" => $value,
                    "options" => $options,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 128
                    yield "    ";
                    $context["options"] = Twig\Extension\CoreExtension::merge(["copyable" => false],                     // line 130
($context["options"] ?? null));
                    // line 131
                    yield "
    ";
                    // line 132
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "copyable", [], "any", false, false, false, 132)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 133
                        yield "        <div class=\"copy_to_clipboard_wrapper\">
    ";
                    }
                    // line 135
                    yield "    ";
                    yield (string) $this->getMacroNamespace()->call("input", [($context["name"] ?? null), ($context["value"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["type" => "text"])], $context, 135, $this->source);
                    yield "
    ";
                    // line 136
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "copyable", [], "any", false, false, false, 136)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 137
                        yield "        </div>
    ";
                    }
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["name" => false, "value" => false, "options" => true], false),
            "number" => new \Twig\TwigMacro("number", function ($name = null, $value = null, $options = [], ...$varargs): string|Markup {
                // line 142
                $macros = $this->macros;
                $context = [
                    "name" => $name,
                    "value" => $value,
                    "options" => $options,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 143
                    yield "    ";
                    $context["options"] = Twig\Extension\CoreExtension::merge(["step" => 1],                     // line 145
($context["options"] ?? null));
                    // line 146
                    yield "
    ";
                    // line 147
                    if ((( !CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "decimals", [], "any", true, true, false, 147) &&  !(($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", true, true, false, 147)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 147), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) &&  !(($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", true, true, false, 147)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 147), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                        // line 148
                        yield "        ";
                        // line 149
                        yield "        ";
                        $context["decimals_part"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", false, false, false, 149), ".");
                        // line 150
                        yield "        ";
                        $context["decimals"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["decimals_part"] ?? null), 1, [], "array", true, true, false, 150)) ? (Twig\Extension\CoreExtension::length($this->env->getCharset(), (($_v0 = ($context["decimals_part"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[1] ?? null) : null))) : (0));
                        // line 151
                        yield "        ";
                        $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["decimals" => ($context["decimals"] ?? null)]);
                        // line 152
                        yield "    ";
                    }
                    // line 153
                    yield "
    ";
                    // line 154
                    if ((($context["value"] ?? null) == "")) {
                        // line 155
                        yield "        ";
                        $context["value"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "min", [], "any", true, true, false, 155)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "min", [], "any", false, false, false, 155)) : (0));
                        // line 156
                        yield "    ";
                    }
                    // line 157
                    yield "
    ";
                    // line 158
                    if (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", false, false, false, 158) != "any") && (Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", false, false, false, 158), 0, "floor") != CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", false, false, false, 158)))) {
                        // line 159
                        yield "        ";
                        if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "decimals", [], "any", true, true, false, 159)) {
                            // line 160
                            yield "            ";
                            $context["value"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::formatNumber", [($context["value"] ?? null), true, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "decimals", [], "any", false, false, false, 160)]);
                            // line 161
                            yield "        ";
                        } else {
                            // line 162
                            yield "            ";
                            // line 163
                            yield "            ";
                            $context["value"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::formatNumber", [($context["value"] ?? null), true]);
                            // line 164
                            yield "        ";
                        }
                        // line 165
                        yield "    ";
                    }
                    // line 166
                    yield "
    ";
                    // line 167
                    yield (string) $this->getMacroNamespace()->call("input", [($context["name"] ?? null), ($context["value"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["type" => "number"])], $context, 167, $this->source);
                    yield "
";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["name" => false, "value" => false, "options" => true], false),
            "color" => new \Twig\TwigMacro("color", function ($name = null, $value = null, $options = [], ...$varargs): string|Markup {
                // line 171
                $macros = $this->macros;
                $context = [
                    "name" => $name,
                    "value" => $value,
                    "options" => $options,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 172
                    yield "    ";
                    $context["options"] = Twig\Extension\CoreExtension::merge(["id" => ((                    // line 173
($context["name"] ?? null) . "_") . (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", true, true, false, 173) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 173)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 173)) : (Twig\Extension\CoreExtension::random($this->env->getCharset()))))],                     // line 174
($context["options"] ?? null));
                    // line 175
                    yield "
    ";
                    // line 176
                    $context["describedby"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 176) . "_format");
                    // line 177
                    yield "    ";
                    yield (string) $this->getMacroNamespace()->call("input", [($context["name"] ?? null), ($context["value"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["type" => "text", "input_addclass" => "rounded-0", "additional_attributes" => Twig\Extension\CoreExtension::merge((((CoreExtension::getAttribute($this->env, $this->source,                     // line 180
($context["options"] ?? null), "additional_attributes", [], "any", true, true, false, 180) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "additional_attributes", [], "any", false, false, false, 180)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "additional_attributes", [], "any", false, false, false, 180)) : ([])), ["placeholder" => "#RRGGBB", "aria-describedby" =>                     // line 182
($context["describedby"] ?? null)])])], $context, 177, $this->source);
                    // line 184
                    yield "
    <span id=\"";
                    // line 185
                    yield (string) $this->escaper->escape(($context["describedby"] ?? null), "html", null, true);
                    yield "\" class=\"visually-hidden\">";
                    yield (string) $this->escaper->escape(__("Expected format: a hexadecimal color code, for example #FF0000."), "html", null, true);
                    yield "</span>
    <script>
        \$(function () {
            \$(\"#";
                    // line 188
                    yield (string) $this->escaper->escape($this->escaper->escape($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 188), "css"), "js"), "html", null, true);
                    yield "\").spectrum({
                showInput: true,
                preferredFormat: \"hex\",
                type: \"text\",
                cancelText: \"";
                    // line 192
                    yield (string) $this->escaper->escape($this->escaper->escape(__("Cancel"), "js"), "html", null, true);
                    yield "\",
                chooseText: \"";
                    // line 193
                    yield (string) $this->escaper->escape($this->escaper->escape(__("Validate"), "js"), "html", null, true);
                    yield "\",
                change: function (color) {
                    if (color !== null && color.getAlpha() !== 1) {
                        let hex = color.toHexString();
                        hex += (\"0\" + Math.round(parseFloat(color.getAlpha()) * 255).toString(16)).slice(-2);
                        this.value = hex;
                    }
                }
            });
        });
    </script>
";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["name" => false, "value" => false, "options" => true], false),
            "password" => new \Twig\TwigMacro("password", function ($name = null, $value = null, $options = [], ...$varargs): string|Markup {
                // line 207
                $macros = $this->macros;
                $context = [
                    "name" => $name,
                    "value" => $value,
                    "options" => $options,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 208
                    yield "    ";
                    yield (string) $this->getMacroNamespace()->call("input", [($context["name"] ?? null), ($context["value"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["type" => "password"])], $context, 208, $this->source);
                    yield "
";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["name" => false, "value" => false, "options" => true], false),
            "email" => new \Twig\TwigMacro("email", function ($name = null, $value = null, $options = [], ...$varargs): string|Markup {
                // line 212
                $macros = $this->macros;
                $context = [
                    "name" => $name,
                    "value" => $value,
                    "options" => $options,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 213
                    yield "    ";
                    yield (string) $this->getMacroNamespace()->call("input", [($context["name"] ?? null), ($context["value"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["type" => "email"])], $context, 213, $this->source);
                    yield "
";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["name" => false, "value" => false, "options" => true], false),
            "file" => new \Twig\TwigMacro("file", function ($name = null, $value = null, $options = [], ...$varargs): string|Markup {
                // line 217
                $macros = $this->macros;
                $context = [
                    "name" => $name,
                    "value" => $value,
                    "options" => $options,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 218
                    yield "    ";
                    $context["options"] = Twig\Extension\CoreExtension::merge(["simple" => false],                     // line 220
($context["options"] ?? null));
                    // line 221
                    yield "
    ";
                    // line 222
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "simple", [], "any", false, false, false, 222)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 223
                        yield "        ";
                        yield (string) $this->getMacroNamespace()->call("input", [($context["name"] ?? null), ($context["value"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["type" => "file"])], $context, 223, $this->source);
                        yield "
    ";
                    } else {
                        // line 225
                        yield "        ";
                        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::file", [Twig\Extension\CoreExtension::merge(                        // line 226
($context["options"] ?? null), ["name" =>                         // line 227
($context["name"] ?? null)])]);
                        // line 230
                        yield "    ";
                    }
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["name" => false, "value" => false, "options" => true], false),
            "hidden" => new \Twig\TwigMacro("hidden", function ($name = null, $value = null, $options = [], ...$varargs): string|Markup {
                // line 234
                $macros = $this->macros;
                $context = [
                    "name" => $name,
                    "value" => $value,
                    "options" => $options,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 235
                    yield "    ";
                    yield (string) $this->getMacroNamespace()->call("input", [($context["name"] ?? null), ($context["value"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["type" => "hidden", "with_class" => false])], $context, 235, $this->source);
                    yield "
";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["name" => false, "value" => false, "options" => true], false),
            "date" => new \Twig\TwigMacro("date", function ($name = null, $value = null, $options = [], ...$varargs): string|Markup {
                // line 239
                $macros = $this->macros;
                $context = [
                    "name" => $name,
                    "value" => $value,
                    "options" => $options,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 240
                    yield "    ";
                    $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "enableTime" => false, "noCalendar" => false, "checkIsExpired" => false, "clearable" => false, "container_addclass" => "", "input_addclass" => "", "readonly" => false, "disabled" => false, "maybeempty" => false, "addCalendarButton" => true, "field_label" => "", "mode" => "single"],                     // line 254
($context["options"] ?? null));
                    // line 255
                    yield "
    ";
                    // line 256
                    $context["editable"] = ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 256)) && $tmp instanceof Markup ? (string) $tmp : $tmp) &&  !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 256)) && $tmp instanceof Markup ? (string) $tmp : $tmp));
                    // line 257
                    yield "
    ";
                    // line 258
                    $context["options"] = Twig\Extension\CoreExtension::merge(["id" => ((Html::sanitizeDomId(                    // line 259
($context["name"] ?? null)) . "_") . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 259))],                     // line 260
($context["options"] ?? null));
                    // line 261
                    yield "
    ";
                    // line 262
                    if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 262), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 262)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 262), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 262), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 263
                        yield "        ";
                        $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                        // line 264
                        yield "    ";
                    }
                    // line 265
                    yield "
    ";
                    // line 266
                    if ((($context["value"] ?? null) == "NULL")) {
                        // line 267
                        yield "      ";
                        $context["value"] = null;
                        // line 268
                        yield "   ";
                    }
                    // line 269
                    yield "
    ";
                    // line 270
                    $context["final_expiration_class"] = "";
                    // line 271
                    yield "    ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "checkIsExpired", [], "any", false, false, false, 271)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 272
                        yield "        ";
                        if (($this->extensions['Twig\Extension\CoreExtension']->formatDate(($context["value"] ?? null), "Y-m-d H:i:s") < $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d H:i:s"))) {
                            // line 273
                            yield "            ";
                            $context["final_expiration_class"] = " warn";
                            // line 274
                            yield "        ";
                        }
                        // line 275
                        yield "    ";
                    } else {
                        // line 276
                        yield "        ";
                        if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "expiration_class", [], "any", true, true, false, 276)) {
                            // line 277
                            yield "            ";
                            $context["final_expiration_class"] = (" " . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "expiration_class", [], "any", false, false, false, 277));
                            // line 278
                            yield "        ";
                        } else {
                            // line 279
                            yield "            ";
                            $context["final_expiration_class"] = "";
                            // line 280
                            yield "        ";
                        }
                        // line 281
                        yield "    ";
                    }
                    // line 282
                    yield "
    <div
        class=\"btn-group flex-grow-1 flatpickr d-flex ";
                    // line 284
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "container_addclass", [], "any", false, false, false, 284), "html", null, true);
                    yield "\"
        id=\"";
                    // line 285
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 285), "html", null, true);
                    yield "\"
        data-bs-toggle=\"tooltip\"
        data-bs-placement=\"bottom\"
        title=\"";
                    // line 288
                    yield (string) (((($tmp = ($context["editable"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(__("Enter or select a date"), "html", null, true)) : ($this->escaper->escape(_n("Date", "Dates", 1), "html", null, true)));
                    yield "\"
    >
        ";
                    // line 290
                    yield (string) $this->getMacroNamespace()->call("input", [($context["name"] ?? null), ($context["value"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["type" => "text", "id" => (CoreExtension::getAttribute($this->env, $this->source,                     // line 292
($context["options"] ?? null), "id", [], "any", false, false, false, 292) . "_input"), "additional_attributes" => Twig\Extension\CoreExtension::merge((((CoreExtension::getAttribute($this->env, $this->source,                     // line 293
($context["options"] ?? null), "additional_attributes", [], "any", true, true, false, 293) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "additional_attributes", [], "any", false, false, false, 293)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "additional_attributes", [], "any", false, false, false, 293)) : ([])), ["data-input" => ""]), "input_addclass" => (CoreExtension::getAttribute($this->env, $this->source,                     // line 294
($context["options"] ?? null), "input_addclass", [], "any", false, false, false, 294) . ($context["final_expiration_class"] ?? null)), "clearable" => false])], $context, 290, $this->source);
                    // line 296
                    yield "

        ";
                    // line 298
                    if (((($tmp = ($context["editable"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "addCalendarButton", [], "any", false, false, false, 298)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                        // line 299
                        yield "            ";
                        $context["calendar_icon"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enableTime", [], "any", false, false, false, 299)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ti ti-calendar-time") : ("ti ti-calendar"));
                        // line 300
                        yield "            <button type=\"button\" class=\"btn btn-outline-secondary btn-sm\" data-toggle>
                <i class=\"";
                        // line 301
                        yield (string) $this->escaper->escape(($context["calendar_icon"] ?? null), "html", null, true);
                        yield "\" aria-hidden=\"true\"></i>
                <span class=\"visually-hidden\">";
                        // line 302
                        yield (string) $this->escaper->escape(__("Enter or select a date"), "html", null, true);
                        yield "</span>
            </button>
            ";
                        // line 305
                        yield "            ";
                        if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "clearable", [], "any", false, false, false, 305)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "maybeempty", [], "any", false, false, false, 305)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                            // line 306
                            yield "                <button type=\"button\" class=\"btn btn-outline-secondary btn-sm\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" data-clear title=\"";
                            yield (string) $this->escaper->escape(__("Clear"), "html", null, true);
                            yield "\">
                    <i class=\"ti ti-circle-x\" aria-hidden=\"true\"></i>
                </button>
            ";
                        }
                        // line 310
                        yield "        ";
                    }
                    // line 311
                    yield "    </div>

    ";
                    // line 313
                    if ((($tmp = ($context["editable"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 314
                        yield "        ";
                        $context["locale"] = $this->extensions['Glpi\Application\View\Extension\I18nExtension']->getCurrentLocale();
                        // line 315
                        yield "        ";
                        if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enableTime", [], "any", false, false, false, 315)) && $tmp instanceof Markup ? (string) $tmp : $tmp) &&  !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "noCalendar", [], "any", false, false, false, 315)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                            // line 316
                            yield "            ";
                            $context["date_format"] = "Y-m-d H:i:S";
                            // line 317
                            yield "            ";
                            $context["alt_format"] = ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Toolbox::getDateFormat", ["js"]) . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enableTime", [], "any", false, false, false, 317)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" H:i:S") : ("")));
                            // line 318
                            yield "        ";
                        } elseif (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enableTime", [], "any", false, false, false, 318)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "noCalendar", [], "any", false, false, false, 318)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                            // line 319
                            yield "            ";
                            $context["date_format"] = "H:i:S";
                            // line 320
                            yield "            ";
                            $context["alt_format"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enableTime", [], "any", false, false, false, 320)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" H:i:S") : (""));
                            // line 321
                            yield "        ";
                        } elseif (( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enableTime", [], "any", false, false, false, 321)) && $tmp instanceof Markup ? (string) $tmp : $tmp) &&  !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "noCalendar", [], "any", false, false, false, 321)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                            // line 322
                            yield "            ";
                            $context["date_format"] = "Y-m-d";
                            // line 323
                            yield "            ";
                            $context["alt_format"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Toolbox::getDateFormat", ["js"]);
                            // line 324
                            yield "        ";
                        } else {
                            // line 325
                            yield "            ";
                            // line 326
                            yield "            ";
                            $context["date_format"] = "Y-m-d H:i:S";
                            // line 327
                            yield "        ";
                        }
                        // line 328
                        yield "
        ";
                        // line 330
                        yield "        ";
                        $context["a11y_name"] = (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "field_label", [], "any", false, false, false, 330))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "field_label", [], "any", false, false, false, 330)) : (__("Enter or select a date")));
                        // line 331
                        yield "        ";
                        if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enableTime", [], "any", false, false, false, 331)) && $tmp instanceof Markup ? (string) $tmp : $tmp) &&  !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "noCalendar", [], "any", false, false, false, 331)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                            // line 332
                            yield "            ";
                            $context["format_hint"] = ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Toolbox::getDateFormat", ["php"]) . " HH:MM:SS");
                            // line 333
                            yield "        ";
                        } elseif (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enableTime", [], "any", false, false, false, 333)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "noCalendar", [], "any", false, false, false, 333)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                            // line 334
                            yield "            ";
                            $context["format_hint"] = "HH:MM:SS";
                            // line 335
                            yield "        ";
                        } else {
                            // line 336
                            yield "            ";
                            $context["format_hint"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Toolbox::getDateFormat", ["php"]);
                            // line 337
                            yield "        ";
                        }
                        // line 338
                        yield "        <script>
            \$(function() {
                \$(\"#";
                        // line 340
                        yield (string) $this->escaper->escape($this->escaper->escape($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 340), "css"), "js"), "html", null, true);
                        yield "\").flatpickr({
                    wrap: true,
                    altInput: true,
                    dateFormat: \x27";
                        // line 343
                        yield (string) $this->escaper->escape($this->escaper->escape(($context["date_format"] ?? null), "js"), "html", null, true);
                        yield "\x27,
                    altFormat: \x27";
                        // line 344
                        yield (string) $this->escaper->escape($this->escaper->escape(($context["alt_format"] ?? null), "js"), "html", null, true);
                        yield "\x27,
                    enableTime: ";
                        // line 345
                        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enableTime", [], "any", false, false, false, 345)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
                        yield ",
                    enableSeconds: ";
                        // line 346
                        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enableTime", [], "any", false, false, false, 346)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
                        yield ",
                    noCalendar: ";
                        // line 347
                        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "noCalendar", [], "any", false, false, false, 347)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
                        yield ",
                    weekNumbers: true,
                    time_24hr: true,
                    mode: \x27";
                        // line 350
                        yield (string) $this->escaper->escape($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "mode", [], "any", false, false, false, 350), "js"), "html", null, true);
                        yield "\x27,
                    allowInput: ";
                        // line 351
                        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 351)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("false") : ("true"));
                        yield ",
                    clickOpens: ";
                        // line 352
                        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 352)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("false") : ("true"));
                        yield ",
                    locale: getFlatPickerLocale(\"";
                        // line 353
                        yield (string) $this->escaper->escape($this->escaper->escape((($_v1 = ($context["locale"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["language"] ?? null) : null), "js"), "html", null, true);
                        yield "\", \"";
                        yield (string) $this->escaper->escape($this->escaper->escape((($_v2 = ($context["locale"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["region"] ?? null) : null), "js"), "html", null, true);
                        yield "\"),
                    onReady(dates, currentdatestring, picker) {
                        // `altInput: true` hides the original input and exposes a substitute one
                        if (picker.altInput) {
                            // so copy all aria-* attributes from the original input to the altInput
                            for (const attribute of picker.input.attributes) {
                                if (attribute.name.startsWith(\x27aria-\x27)) {
                                    picker.altInput.setAttribute(attribute.name, attribute.value);
                                }
                            }

                            // keep a caller provided label, fall back to the field label
                            if (!picker.altInput.hasAttribute(\x27aria-label\x27) && !picker.altInput.hasAttribute(\x27aria-labelledby\x27)) {
                                picker.altInput.setAttribute(\x27aria-label\x27, \x27";
                        // line 366
                        yield (string) $this->escaper->escape($this->escaper->escape(($context["a11y_name"] ?? null), "js"), "html", null, true);
                        yield "\x27);
                            }
                            // keep a caller-provided placeholder; only fall back to the format hint
                            if (!picker.altInput.getAttribute(\x27placeholder\x27)) {
                                picker.altInput.setAttribute(\x27placeholder\x27, \x27";
                        // line 370
                        yield (string) $this->escaper->escape($this->escaper->escape(($context["format_hint"] ?? null), "js"), "html", null, true);
                        yield "\x27);
                            }
                            picker.altInput.setAttribute(\x27aria-haspopup\x27, \x27dialog\x27);
                            picker.altInput.setAttribute(\x27aria-expanded\x27, \x27false\x27);
                            picker.calendarContainer.id = picker.input.id + \x27_calendar\x27;
                            picker.altInput.setAttribute(\x27aria-controls\x27, picker.calendarContainer.id);
                            // flatpickr does not close on Escape while the altInput is focused
                            picker.altInput.addEventListener(\x27keydown\x27, (event) => {
                                if (event.key === \x27Escape\x27 && picker.isOpen) {
                                    event.stopPropagation();
                                    picker.close();
                                    picker.altInput.focus();
                                }
                            });
                        }
                    },
                    onOpen(dates, currentdatestring, picker) {
                        picker.altInput.setAttribute(\x27aria-expanded\x27, \x27true\x27);
                    },
                    onClose(dates, currentdatestring, picker) {
                        picker.setDate(picker.altInput.value, true, picker.config.altFormat)
                        picker.altInput.setAttribute(\x27aria-expanded\x27, \x27false\x27);
                    },
                    plugins: [
                        CustomFlatpickrButtons()
                    ]
                });
            });
        </script>
    ";
                    }
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["name" => false, "value" => false, "options" => true], false),
            "datetime" => new \Twig\TwigMacro("datetime", function ($name = null, $value = null, $options = [], ...$varargs): string|Markup {
                // line 403
                $macros = $this->macros;
                $context = [
                    "name" => $name,
                    "value" => $value,
                    "options" => $options,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 404
                    yield "    ";
                    yield (string) $this->getMacroNamespace()->call("date", [($context["name"] ?? null), ($context["value"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["enableTime" => true])], $context, 404, $this->source);
                    // line 406
                    yield "
";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["name" => false, "value" => false, "options" => true], false),
            "textarea" => new \Twig\TwigMacro("textarea", function ($name = null, $value = null, $options = [], ...$varargs): string|Markup {
                // line 410
                $macros = $this->macros;
                $context = [
                    "name" => $name,
                    "value" => $value,
                    "options" => $options,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 411
                    yield "    ";
                    $context["options"] = Twig\Extension\CoreExtension::merge(["id" => null, "rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "rows" => 3, "enable_richtext" => false, "enable_images" => true, "mention_options" => ["enabled" => (CoreExtension::getAttribute($this->env, $this->source,                     // line 418
($context["options"] ?? null), "enable_mentions", [], "any", true, true, false, 418) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enable_mentions", [], "any", false, false, false, 418)) && $tmp instanceof Markup ? (string) $tmp : $tmp)), "full" => true, "users" => []], "entities_id" => $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity"), "readonly" => false, "disabled" => false, "required" => false, "add_body_classes" => [], "toolbar" => true, "toolbar_location" => "top", "init" => true, "init_on_demand" => false, "placeholder" => "", "enable_form_tags" => false, "form_tags_form_id" => null, "aria_label" => "", "statusbar" => true, "content_style" => "", "input_addclass" => "", "additional_attributes" => [], "plugins_to_remove" => []],                     // line 440
($context["options"] ?? null));
                    // line 441
                    yield "
    ";
                    // line 442
                    if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 442), "isMandatoryField", [($context["name"] ?? null)], "method", true, true, false, 442)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 442), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 442), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 443
                        yield "        ";
                        $context["options"] = Twig\Extension\CoreExtension::merge(["required" => true], ($context["options"] ?? null));
                        // line 444
                        yield "    ";
                    }
                    // line 445
                    yield "    ";
                    $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,                     // line 446
($context["options"] ?? null), "id", [], "any", false, false, false, 446)) > 0)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 446)) : (((($context["name"] ?? null) . "_") . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 446))))]);
                    // line 448
                    yield "
    ";
                    // line 450
                    yield "    <textarea class=\"form-control ";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "input_addclass", [], "any", false, false, false, 450), "html", null, true);
                    yield "\"
            id=\"";
                    // line 451
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 451), "html", null, true);
                    yield "\" name=\"";
                    yield (string) $this->escaper->escape(($context["name"] ?? null), "html", null, true);
                    yield "\" rows=\"";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rows", [], "any", false, false, false, 451), "html", null, true);
                    yield "\"
            style=\"width: 100%;\"
            ";
                    // line 453
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "additional_attributes", [], "any", false, false, false, 453));
                    foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
                        // line 454
                        yield "               ";
                        yield (string) $this->escaper->escape($context["attr"], "html", null, true);
                        yield "=\"";
                        yield (string) $this->escaper->escape($context["value"], "html", null, true);
                        yield "\"
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['attr'], $context['value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent);
                    $context += $_parent;
                    // line 456
                    yield "            ";
                    if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "aria_label", [], "any", false, false, false, 456))) {
                        // line 457
                        yield "                aria-label=\"";
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "aria_label", [], "any", false, false, false, 457), "html", null, true);
                        yield "\"
            ";
                    }
                    // line 459
                    yield "            ";
                    if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "placeholder", [], "any", false, false, false, 459))) {
                        // line 460
                        yield "                placeholder=\"";
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "placeholder", [], "any", false, false, false, 460), "html", null, true);
                        yield "\"
            ";
                    }
                    // line 462
                    yield "            ";
                    yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 462)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
                    yield "
            ";
                    // line 463
                    yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 463)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("readonly") : (""));
                    yield "
            ";
                    // line 464
                    yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 464)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("required") : (""));
                    yield ">";
                    yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enable_richtext", [], "any", false, false, false, 464)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getSafeHtml(($context["value"] ?? null)))) : ($this->escaper->escape(($context["value"] ?? null), "html", null, true)));
                    yield "</textarea>

    ";
                    // line 466
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enable_richtext", [], "any", false, false, false, 466)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 467
                        yield "        ";
                        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::initEditorSystem", [CoreExtension::getAttribute($this->env, $this->source,                         // line 468
($context["options"] ?? null), "id", [], "any", false, false, false, 468), CoreExtension::getAttribute($this->env, $this->source,                         // line 469
($context["options"] ?? null), "rand", [], "any", false, false, false, 469), true, ((CoreExtension::getAttribute($this->env, $this->source,                         // line 471
($context["options"] ?? null), "disabled", [], "any", true, true, false, 471)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 471), false)) : (false)), CoreExtension::getAttribute($this->env, $this->source,                         // line 472
($context["options"] ?? null), "enable_images", [], "any", false, false, false, 472), ((CoreExtension::getAttribute($this->env, $this->source,                         // line 473
($context["options"] ?? null), "editor_height", [], "any", true, true, false, 473)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "editor_height", [], "any", false, false, false, 473), 150)) : (150)), CoreExtension::getAttribute($this->env, $this->source,                         // line 474
($context["options"] ?? null), "add_body_classes", [], "any", false, false, false, 474), CoreExtension::getAttribute($this->env, $this->source,                         // line 475
($context["options"] ?? null), "toolbar_location", [], "any", false, false, false, 475), CoreExtension::getAttribute($this->env, $this->source,                         // line 476
($context["options"] ?? null), "init", [], "any", false, false, false, 476), CoreExtension::getAttribute($this->env, $this->source,                         // line 477
($context["options"] ?? null), "placeholder", [], "any", false, false, false, 477), CoreExtension::getAttribute($this->env, $this->source,                         // line 478
($context["options"] ?? null), "toolbar", [], "any", false, false, false, 478), CoreExtension::getAttribute($this->env, $this->source,                         // line 479
($context["options"] ?? null), "statusbar", [], "any", false, false, false, 479), CoreExtension::getAttribute($this->env, $this->source,                         // line 480
($context["options"] ?? null), "content_style", [], "any", false, false, false, 480), CoreExtension::getAttribute($this->env, $this->source,                         // line 481
($context["options"] ?? null), "init_on_demand", [], "any", false, false, false, 481), CoreExtension::getAttribute($this->env, $this->source,                         // line 482
($context["options"] ?? null), "plugins_to_remove", [], "any", false, false, false, 482)]);
                        // line 484
                        yield "   ";
                    }
                    // line 485
                    yield "   ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enable_form_tags", [], "any", false, false, false, 485)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 486
                        yield "        <script>
            \$(function() {
                const form_tags = new GLPI.RichText.FormTags(
                    tinymce.get(\x27";
                        // line 489
                        yield (string) $this->escaper->escape($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 489), "js"), "html", null, true);
                        yield "\x27),
                    ";
                        // line 490
                        yield (string) json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "form_tags_form_id", [], "any", false, false, false, 490));
                        yield ",
                );
                form_tags.register();
            });
        </script>
    ";
                    }
                    // line 496
                    yield "
    ";
                    // line 497
                    if (((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "mention_options", [], "any", false, true, false, 497), "enabled", [], "any", true, true, false, 497)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "mention_options", [], "any", false, false, false, 497), "enabled", [], "any", false, false, false, 497), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("use_notifications")) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                        // line 498
                        yield "        <script>
            \$(function() {
                const user_mention = new GLPI.RichText.UserMention(
                    tinymce.get(\x27";
                        // line 501
                        yield (string) $this->escaper->escape($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 501), "js"), "html", null, true);
                        yield "\x27),
                    ";
                        // line 502
                        yield (string) json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "entities_id", [], "any", false, false, false, 502));
                        yield ",
                    \x27";
                        // line 503
                        yield (string) $this->escaper->escape(Session::getNewIDORToken("User", ["right" => "all", "entity_restrict" => json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "entities_id", [], "any", false, false, false, 503))]), "html", null, true);
                        yield "\x27,
                    ";
                        // line 504
                        yield (string) json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "mention_options", [], "any", false, false, false, 504));
                        yield "
                );
                user_mention.register();
            });
        </script>
    ";
                    }
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["name" => false, "value" => false, "options" => true], false),
            "checkbox" => new \Twig\TwigMacro("checkbox", function ($name = null, $value = null, $options = [], ...$varargs): string|Markup {
                // line 513
                $macros = $this->macros;
                $context = [
                    "name" => $name,
                    "value" => $value,
                    "options" => $options,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 514
                    yield "    ";
                    $context["options"] = Twig\Extension\CoreExtension::merge(["id" => null, "input_addclass" => "", "readonly" => false, "disabled" => false, "required" => false, "additional_attributes" => []],                     // line 521
($context["options"] ?? null));
                    // line 522
                    yield "
    <input type=\"hidden\"   name=\"";
                    // line 523
                    yield (string) $this->escaper->escape(($context["name"] ?? null), "html", null, true);
                    yield "\" value=\"0\" />
    <input type=\"checkbox\" name=\"";
                    // line 524
                    yield (string) $this->escaper->escape(($context["name"] ?? null), "html", null, true);
                    yield "\" value=\"1\"
           class=\"form-check-input ";
                    // line 525
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "input_addclass", [], "any", false, false, false, 525), "html", null, true);
                    yield "\"
           ";
                    // line 526
                    yield (string) (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 526) != null)) ? ((("id=\"" . $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 526))) . "\"")) : (""));
                    yield "
           ";
                    // line 527
                    yield (string) (((($context["value"] ?? null) == 1)) ? ("checked") : (""));
                    yield "
           ";
                    // line 528
                    yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 528)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("readonly") : (""));
                    yield "
           ";
                    // line 529
                    yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 529)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("required") : (""));
                    yield "
           ";
                    // line 530
                    yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 530)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
                    yield "
            ";
                    // line 531
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "additional_attributes", [], "any", false, false, false, 531));
                    foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
                        // line 532
                        yield "                ";
                        yield (string) $this->escaper->escape($context["attr"], "html", null, true);
                        yield "=\"";
                        yield (string) $this->escaper->escape($context["value"], "html", null, true);
                        yield "\"
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['attr'], $context['value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent);
                    $context += $_parent;
                    // line 533
                    yield "/>
";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["name" => false, "value" => false, "options" => true], false),
            "button" => new \Twig\TwigMacro("button", function ($name = null, $label = "", $type = "button", $value = "", $options = [], ...$varargs): string|Markup {
                // line 537
                $macros = $this->macros;
                $context = [
                    "name" => $name,
                    "label" => $label,
                    "type" => $type,
                    "value" => $value,
                    "options" => $options,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 538
                    yield "    ";
                    $context["options"] = Twig\Extension\CoreExtension::merge(["type" => "submit", "class" => "btn btn-primary", "icon" => "", "icon_title" => "", "additional_attributes" => []],                     // line 544
($context["options"] ?? null));
                    // line 545
                    yield "
    ";
                    // line 547
                    yield "    ";
                    if ((Twig\Extension\CoreExtension::testEmpty(($context["label"] ?? null)) && Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "icon_title", [], "any", false, false, false, 547)))) {
                        // line 548
                        yield "        ";
                        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("trigger_error", ["A button must be given either a `label` or an `icon_title` to be named.", Twig\Extension\CoreExtension::constant("E_USER_WARNING")]);
                        // line 552
                        yield "    ";
                    }
                    // line 553
                    yield "
    <button class=\"";
                    // line 554
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "class", [], "any", false, false, false, 554), "html", null, true);
                    yield "\" type=\"";
                    yield (string) $this->escaper->escape(($context["type"] ?? null), "html", null, true);
                    yield "\" name=\"";
                    yield (string) $this->escaper->escape(($context["name"] ?? null), "html", null, true);
                    yield "\" value=\"";
                    yield (string) $this->escaper->escape(($context["value"] ?? null), "html", null, true);
                    yield "\"
        ";
                    // line 555
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "additional_attributes", [], "any", false, false, false, 555));
                    foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
                        // line 556
                        yield "            ";
                        yield (string) $this->escaper->escape($context["attr"], "html", null, true);
                        yield "=\"";
                        yield (string) $this->escaper->escape($context["value"], "html", null, true);
                        yield "\"
        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['attr'], $context['value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent);
                    $context += $_parent;
                    // line 557
                    yield ">
        ";
                    // line 558
                    if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "icon", [], "any", false, false, false, 558))) {
                        // line 559
                        yield "            <i class=\"";
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "icon", [], "any", false, false, false, 559), "html", null, true);
                        yield "\" title=\"";
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "icon_title", [], "any", false, false, false, 559), "html", null, true);
                        yield "\" aria-hidden=\"true\"></i>
        ";
                    }
                    // line 561
                    yield "        ";
                    if ( !Twig\Extension\CoreExtension::testEmpty(($context["label"] ?? null))) {
                        // line 562
                        yield "            <span>";
                        yield (string) $this->escaper->escape(($context["label"] ?? null), "html", null, true);
                        yield "</span>
        ";
                    } elseif ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source,                     // line 563
($context["options"] ?? null), "icon_title", [], "any", false, false, false, 563))) {
                        // line 564
                        yield "            <span class=\"visually-hidden\">";
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "icon_title", [], "any", false, false, false, 564), "html", null, true);
                        yield "</span>
        ";
                    }
                    // line 566
                    yield "    </button>
";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["name" => false, "label" => true, "type" => true, "value" => true, "options" => true], false),
            "submit" => new \Twig\TwigMacro("submit", function ($name = null, $label = "", $value = "", $options = [], ...$varargs): string|Markup {
                // line 570
                $macros = $this->macros;
                $context = [
                    "name" => $name,
                    "label" => $label,
                    "value" => $value,
                    "options" => $options,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 571
                    yield "    ";
                    yield (string) $this->getMacroNamespace()->call("button", [($context["name"] ?? null), ($context["label"] ?? null), "submit", ($context["value"] ?? null), ($context["options"] ?? null)], $context, 571, $this->source);
                    yield "
";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["name" => false, "label" => true, "value" => true, "options" => true], false),
            "label" => new \Twig\TwigMacro("label", function ($label = null, $id = null, $options = [], $class = "form-label", ...$varargs): string|Markup {
                // line 574
                $macros = $this->macros;
                $context = [
                    "label" => $label,
                    "id" => $id,
                    "options" => $options,
                    "class" => $class,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 575
                    yield "    ";
                    $context["options"] = Twig\Extension\CoreExtension::merge(["locked" => false, "locked_value" => null, "tpl_mark" => null, "helper" => false],                     // line 580
($context["options"] ?? null));
                    // line 581
                    yield "
    ";
                    // line 582
                    $context["required_mark"] = "";
                    // line 583
                    yield "    ";
                    if (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "name", [], "any", true, true, false, 583) && (($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 583), "isMandatoryField", [CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "name", [], "any", false, false, false, 583)], "method", true, true, false, 583)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 583), "isMandatoryField", [CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "name", [], "any", false, false, false, 583)], "method", false, false, false, 583), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) || (($tmp = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", true, true, false, 583) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 583)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 583)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                        // line 584
                        yield "        ";
                        $context["required_mark"] = "<span class=\"required\">*</span>";
                        // line 585
                        yield "    ";
                    }
                    // line 586
                    yield "
    ";
                    // line 587
                    $context["helper"] = "";
                    // line 588
                    yield "    ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "helper", [], "any", false, false, false, 588)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 589
                        yield "        ";
                        // line 590
                        yield "        ";
                        // line 591
                        yield "        ";
                        $context["helper_safe_text"] = Twig\Extension\CoreExtension::nl2br($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "helper", [], "any", false, false, false, 591)));
                        // line 592
                        yield "        ";
                        $context["helper"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                            // line 593
                            yield "        <span class=\"form-help\" tabindex=\"0\"
              aria-label=\"";
                            // line 594
                            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "helper", [], "any", false, false, false, 594), "html", null, true);
                            yield "\"
              data-bs-toggle=\"tooltip\"
              data-bs-trigger=\"hover focus\"
              data-bs-placement=\"top\"
              data-bs-html=\"true\"
              data-bs-title=\"";
                            // line 599
                            yield (string) ($context["helper_safe_text"] ?? null);
                            yield "\">
            ?
        </span>
        ";
                            return; yield;
                        })())) ? '' : new Markup($tmp, $this->env->getCharset());
                        // line 603
                        yield "    ";
                    }
                    // line 604
                    yield "
    ";
                    // line 605
                    $context["locked_mark"] = "";
                    // line 606
                    yield "    ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "locked", [], "any", false, false, false, 606)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 607
                        yield "        ";
                        $context["locked_mark"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                            // line 608
                            yield "        ";
                            $context["locked_title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                                yield (string) $this->escaper->escape(__("Field will not be updated from inventory"), "html", null, true);
                                return; yield;
                            })())) ? '' : new Markup($tmp, $this->env->getCharset());
                            // line 609
                            yield "        ";
                            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "locked_value", [], "any", false, false, false, 609))) {
                                // line 610
                                yield "            ";
                                $context["locked_title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                                    yield (string) $this->escaper->escape(($context["locked_title"] ?? null), "html", null, true);
                                    yield "
            -
            ";
                                    // line 612
                                    yield (string) $this->escaper->escape(((__("Last inventory value was:") . " ") . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "locked_value", [], "any", false, false, false, 612)), "html", null, true);
                                    return; yield;
                                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                                // line 613
                                yield "        ";
                            }
                            // line 614
                            yield "        <i class=\"ti ti-lock\" title=\"";
                            yield (string) $this->escaper->escape(($context["locked_title"] ?? null), "html", null, true);
                            yield "\" data-bs-toggle=\"tooltip\" aria-hidden=\"true\"></i>
        <span class=\"visually-hidden\">";
                            // line 615
                            yield (string) $this->escaper->escape(($context["locked_title"] ?? null), "html", null, true);
                            yield "</span>
        ";
                            return; yield;
                        })())) ? '' : new Markup($tmp, $this->env->getCharset());
                        // line 617
                        yield "    ";
                    }
                    // line 618
                    yield "
    <label class=\"";
                    // line 619
                    yield (string) $this->escaper->escape(($context["class"] ?? null), "html", null, true);
                    yield "\" for=\"";
                    yield (string) $this->escaper->escape(($context["id"] ?? null), "html", null, true);
                    yield "\">
        ";
                    // line 620
                    yield (string) $this->escaper->escape(($context["label"] ?? null), "html", null, true);
                    yield "
        ";
                    // line 621
                    yield (string) ($context["locked_mark"] ?? null);
                    yield "
        ";
                    // line 622
                    yield (string) ($context["required_mark"] ?? null);
                    yield "
        ";
                    // line 623
                    yield (string) ($context["helper"] ?? null);
                    yield "
        ";
                    // line 624
                    if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "tpl_mark", [], "any", false, false, false, 624))) {
                        // line 625
                        yield "            ";
                        yield (string) CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "tpl_mark", [], "any", false, false, false, 625);
                        yield "
        ";
                    }
                    // line 627
                    yield "    </label>
";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["label" => false, "id" => false, "options" => true, "class" => true], false),
        ];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/form/basic_inputs_macros.html.twig";
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
        return array (  1538 => 627,  1532 => 625,  1530 => 624,  1526 => 623,  1522 => 622,  1518 => 621,  1514 => 620,  1508 => 619,  1505 => 618,  1502 => 617,  1496 => 615,  1491 => 614,  1488 => 613,  1484 => 612,  1477 => 610,  1474 => 609,  1468 => 608,  1465 => 607,  1462 => 606,  1460 => 605,  1457 => 604,  1454 => 603,  1446 => 599,  1438 => 594,  1435 => 593,  1432 => 592,  1429 => 591,  1427 => 590,  1425 => 589,  1422 => 588,  1420 => 587,  1417 => 586,  1414 => 585,  1411 => 584,  1408 => 583,  1406 => 582,  1403 => 581,  1401 => 580,  1399 => 575,  1386 => 574,  1377 => 571,  1364 => 570,  1357 => 566,  1351 => 564,  1349 => 563,  1344 => 562,  1341 => 561,  1333 => 559,  1331 => 558,  1328 => 557,  1316 => 556,  1312 => 555,  1302 => 554,  1299 => 553,  1296 => 552,  1293 => 548,  1290 => 547,  1287 => 545,  1285 => 544,  1283 => 538,  1269 => 537,  1262 => 533,  1250 => 532,  1246 => 531,  1242 => 530,  1238 => 529,  1234 => 528,  1230 => 527,  1226 => 526,  1222 => 525,  1218 => 524,  1214 => 523,  1211 => 522,  1209 => 521,  1207 => 514,  1195 => 513,  1182 => 504,  1178 => 503,  1174 => 502,  1170 => 501,  1165 => 498,  1163 => 497,  1160 => 496,  1151 => 490,  1147 => 489,  1142 => 486,  1139 => 485,  1136 => 484,  1134 => 482,  1133 => 481,  1132 => 480,  1131 => 479,  1130 => 478,  1129 => 477,  1128 => 476,  1127 => 475,  1126 => 474,  1125 => 473,  1124 => 472,  1123 => 471,  1122 => 469,  1121 => 468,  1119 => 467,  1117 => 466,  1110 => 464,  1106 => 463,  1101 => 462,  1095 => 460,  1092 => 459,  1086 => 457,  1083 => 456,  1071 => 454,  1067 => 453,  1058 => 451,  1053 => 450,  1050 => 448,  1048 => 446,  1046 => 445,  1043 => 444,  1040 => 443,  1038 => 442,  1035 => 441,  1033 => 440,  1032 => 418,  1030 => 411,  1018 => 410,  1011 => 406,  1008 => 404,  996 => 403,  959 => 370,  952 => 366,  934 => 353,  930 => 352,  926 => 351,  922 => 350,  916 => 347,  912 => 346,  908 => 345,  904 => 344,  900 => 343,  894 => 340,  890 => 338,  887 => 337,  884 => 336,  881 => 335,  878 => 334,  875 => 333,  872 => 332,  869 => 331,  866 => 330,  863 => 328,  860 => 327,  857 => 326,  855 => 325,  852 => 324,  849 => 323,  846 => 322,  843 => 321,  840 => 320,  837 => 319,  834 => 318,  831 => 317,  828 => 316,  825 => 315,  822 => 314,  820 => 313,  816 => 311,  813 => 310,  805 => 306,  802 => 305,  797 => 302,  793 => 301,  790 => 300,  787 => 299,  785 => 298,  781 => 296,  779 => 294,  778 => 293,  777 => 292,  776 => 290,  771 => 288,  765 => 285,  761 => 284,  757 => 282,  754 => 281,  751 => 280,  748 => 279,  745 => 278,  742 => 277,  739 => 276,  736 => 275,  733 => 274,  730 => 273,  727 => 272,  724 => 271,  722 => 270,  719 => 269,  716 => 268,  713 => 267,  711 => 266,  708 => 265,  705 => 264,  702 => 263,  700 => 262,  697 => 261,  695 => 260,  694 => 259,  693 => 258,  690 => 257,  688 => 256,  685 => 255,  683 => 254,  681 => 240,  669 => 239,  660 => 235,  648 => 234,  641 => 230,  639 => 227,  638 => 226,  636 => 225,  630 => 223,  628 => 222,  625 => 221,  623 => 220,  621 => 218,  609 => 217,  600 => 213,  588 => 212,  579 => 208,  567 => 207,  549 => 193,  545 => 192,  538 => 188,  530 => 185,  527 => 184,  525 => 182,  524 => 180,  522 => 177,  520 => 176,  517 => 175,  515 => 174,  514 => 173,  512 => 172,  500 => 171,  492 => 167,  489 => 166,  486 => 165,  483 => 164,  480 => 163,  478 => 162,  475 => 161,  472 => 160,  469 => 159,  467 => 158,  464 => 157,  461 => 156,  458 => 155,  456 => 154,  453 => 153,  450 => 152,  447 => 151,  444 => 150,  441 => 149,  439 => 148,  437 => 147,  434 => 146,  432 => 145,  430 => 143,  418 => 142,  410 => 137,  408 => 136,  403 => 135,  399 => 133,  397 => 132,  394 => 131,  392 => 130,  390 => 128,  378 => 127,  367 => 120,  363 => 119,  357 => 118,  354 => 117,  352 => 116,  347 => 114,  344 => 113,  341 => 112,  334 => 109,  330 => 108,  327 => 107,  324 => 106,  322 => 105,  319 => 104,  315 => 103,  308 => 99,  302 => 98,  299 => 97,  297 => 96,  294 => 95,  287 => 91,  281 => 90,  275 => 89,  272 => 88,  269 => 87,  267 => 86,  264 => 85,  253 => 83,  246 => 82,  239 => 81,  233 => 80,  228 => 79,  225 => 78,  221 => 77,  217 => 76,  212 => 75,  200 => 73,  196 => 72,  189 => 71,  181 => 69,  179 => 68,  172 => 67,  170 => 66,  167 => 65,  164 => 64,  162 => 62,  160 => 61,  158 => 60,  155 => 59,  153 => 58,  150 => 57,  147 => 56,  144 => 55,  142 => 54,  139 => 53,  136 => 52,  133 => 51,  131 => 50,  128 => 49,  126 => 48,  124 => 34,  112 => 33,  102 => 573,  98 => 568,  94 => 535,  90 => 511,  86 => 408,  82 => 401,  78 => 237,  74 => 232,  70 => 215,  66 => 210,  62 => 205,  58 => 169,  54 => 140,  50 => 125,  47 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/form/basic_inputs_macros.html.twig", "/var/www/html/glpi/templates/components/form/basic_inputs_macros.html.twig");
    }
}
