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

/* components/form/fields_macros.html.twig */
class __TwigTemplate_8fae9805888ba49f0a7ee90bd676f3de extends Template
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
        // line 57
        yield "
";
        // line 82
        yield "
";
        // line 98
        yield "

";
        // line 124
        yield "
";
        // line 139
        yield "
";
        // line 153
        yield "

";
        // line 193
        yield "

";
        // line 207
        yield "

";
        // line 222
        yield "

";
        // line 283
        yield "

";
        // line 293
        yield "

";
        // line 303
        yield "

";
        // line 317
        yield "

";
        // line 344
        yield "

";
        // line 358
        yield "
";
        // line 371
        yield "
";
        // line 409
        yield "
";
        // line 445
        yield "
";
        // line 459
        yield "
";
        // line 463
        yield "
";
        // line 491
        yield "
";
        // line 520
        yield "
";
        // line 547
        yield "
";
        // line 572
        yield "
";
        // line 602
        yield "
";
        // line 617
        yield "
";
        // line 642
        yield "
";
        // line 661
        yield "
";
        // line 688
        yield "
";
        // line 715
        yield "
";
        // line 753
        yield "
";
        // line 791
        yield "
";
        // line 809
        yield "
";
        // line 855
        yield "
";
        // line 866
        yield "
";
        // line 876
        yield "

";
        // line 904
        yield "

";
        // line 969
        yield "

";
        // line 1007
        yield "
";
        // line 1012
        yield "
";
        // line 1051
        yield "
";
        return; yield;
    }

    protected function loadDeclaredMacros(): array
    {
        return [
            "largeTitle" => new \Twig\TwigMacro("largeTitle", function ($label = null, $icon = "", $first = false, $helper = "", ...$varargs): string|Markup {
                // line 33
                $macros = $this->macros;
                $context = [
                    "label" => $label,
                    "icon" => $icon,
                    "first" => $first,
                    "helper" => $helper,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 34
                    yield "   ";
                    $context["margins"] = "mt-3";
                    // line 35
                    yield "   ";
                    if ((($tmp = ($context["first"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 36
                        yield "      ";
                        $context["margins"] = "mt-n2";
                        // line 37
                        yield "   ";
                    }
                    // line 38
                    yield "
   <div class=\"card border-0 shadow-none p-0 m-0 ";
                    // line 39
                    yield (string) $this->escaper->escape(($context["margins"] ?? null), "html", null, true);
                    yield "\">
      <div class=\"card-header mb-3 pt-2 border-top rounded-0\">
         <h4 class=\"card-title ";
                    // line 41
                    yield (string) (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["icon"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ms-5") : (""));
                    yield "\">
            ";
                    // line 42
                    if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["icon"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 43
                        yield "               <div class=\"ribbon ribbon-bookmark ribbon-top ribbon-start bg-blue s-1\">
                  <i class=\"fs-2x ";
                        // line 44
                        yield (string) $this->escaper->escape(($context["icon"] ?? null), "html", null, true);
                        yield "\" aria-hidden=\"true\"></i>
               </div>
            ";
                    }
                    // line 47
                    yield "            ";
                    yield (string) $this->escaper->escape(($context["label"] ?? null), "html", null, true);
                    yield "
            ";
                    // line 48
                    if ( !Twig\Extension\CoreExtension::testEmpty(($context["helper"] ?? null))) {
                        // line 49
                        yield "               <span class=\"form-help\" tabindex=\"0\" aria-label=\"";
                        yield (string) $this->escaper->escape(($context["helper"] ?? null), "html", null, true);
                        yield "\"
                     data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover focus\" data-bs-placement=\"top\"
                     data-bs-html=\"true\" data-bs-title=\"";
                        // line 51
                        yield (string) $this->escaper->escape(($context["helper"] ?? null), "html", null, true);
                        yield "\">?</span>
            ";
                    }
                    // line 53
                    yield "         </h4>
      </div>
   </div>
";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["label" => false, "icon" => true, "first" => true, "helper" => true], false),
            "smallTitle" => new \Twig\TwigMacro("smallTitle", function ($label = null, $icon = "", $helper = "", $id = "", $level = 4, ...$varargs): string|Markup {
                // line 58
                $macros = $this->macros;
                $context = [
                    "label" => $label,
                    "icon" => $icon,
                    "helper" => $helper,
                    "id" => $id,
                    "level" => $level,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 59
                    yield "   ";
                    $context["margins"] = "mt-2 mb-2";
                    // line 60
                    yield "   ";
                    $context["id"] = (((($context["id"] ?? null) != "")) ? (($context["id"] ?? null)) : (("formsection" . Twig\Extension\CoreExtension::random($this->env->getCharset()))));
                    // line 61
                    yield "   ";
                    $context["level"] = ((CoreExtension::inFilter(($context["level"] ?? null), [1, 2, 3, 4, 5, 6])) ? (($context["level"] ?? null)) : (4));
                    // line 62
                    yield "
   <div class=\"card border-0 shadow-none p-0 m-0 ";
                    // line 63
                    yield (string) $this->escaper->escape(($context["margins"] ?? null), "html", null, true);
                    yield "\">
      <div id=\"";
                    // line 64
                    yield (string) $this->escaper->escape(($context["id"] ?? null), "html", null, true);
                    yield "\" class=\"card-header mb-1 p-0 ps-3 py-1\">
         ";
                    // line 66
                    yield "         <h";
                    yield (string) $this->escaper->escape(($context["level"] ?? null), "html", null, true);
                    yield " class=\"card-subtitle fs-4 ";
                    yield (string) (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["icon"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ms-4") : (""));
                    yield "\">
            ";
                    // line 67
                    if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["icon"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 68
                        yield "               <div class=\"ribbon ribbon-bookmark ribbon-top ribbon-start bg-blue s-1\">
                  <i class=\"fs-2x ";
                        // line 69
                        yield (string) $this->escaper->escape(($context["icon"] ?? null), "html", null, true);
                        yield "\" aria-hidden=\"true\"></i>
               </div>
            ";
                    }
                    // line 72
                    yield "             <span class=\"ms-2\">";
                    yield (string) $this->escaper->escape(($context["label"] ?? null), "html", null, true);
                    yield "</span>
            ";
                    // line 73
                    if ( !Twig\Extension\CoreExtension::testEmpty(($context["helper"] ?? null))) {
                        // line 74
                        yield "               <span class=\"form-help\" tabindex=\"0\" aria-label=\"";
                        yield (string) $this->escaper->escape(($context["helper"] ?? null), "html", null, true);
                        yield "\"
                     data-bs-toggle=\"tooltip\" data-bs-trigger=\"hover focus\" data-bs-placement=\"top\"
                     data-bs-html=\"true\" data-bs-title=\"";
                        // line 76
                        yield (string) $this->escaper->escape(($context["helper"] ?? null), "html", null, true);
                        yield "\">?</span>
            ";
                    }
                    // line 78
                    yield "         </h";
                    yield (string) $this->escaper->escape(($context["level"] ?? null), "html", null, true);
                    yield ">
      </div>
   </div>
";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["label" => false, "icon" => true, "helper" => true, "id" => true, "level" => true], false),
            "autoNameField" => new \Twig\TwigMacro("autoNameField", function ($name = null, $item = null, $label = "", $withtemplate = 0, $options = [], ...$varargs): string|Markup {
                // line 83
                $macros = $this->macros;
                $context = [
                    "name" => $name,
                    "item" => $item,
                    "label" => $label,
                    "withtemplate" => $withtemplate,
                    "options" => $options,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 84
                    yield "   ";
                    $context["tpl_value"] = (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "value", [], "any", true, true, false, 84) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "value", [], "any", false, false, false, 84)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "value", [], "any", false, false, false, 84)) : (""))) > 0)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "value", [], "any", false, false, false, 84)) : ((($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 84)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[(($_v1 = ($context["name"] ?? null)) instanceof \Stringable && (is_array($_v0) || $_v0 instanceof \ArrayObject || $_v0 instanceof \ArrayIterator) ? (string) $_v1 : $_v1)] ?? null) : null)));
                    // line 85
                    yield "   ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isTemplate", [], "method", false, false, false, 85)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " ";
                        // line 86
                        yield "       ";
                        $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["tpl_mark" => CoreExtension::getAttribute($this->env, $this->source,                         // line 87
($context["item"] ?? null), "getAutofillMark", [($context["name"] ?? null), ["withtemplate" => ($context["withtemplate"] ?? null)], ($context["tpl_value"] ?? null)], "method", false, false, false, 87)]);
                        // line 89
                        yield "   ";
                    }
                    // line 90
                    yield "   ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 90), ($context["name"] ?? null), [], "array", true, true, false, 90) &&  !(null === (($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 90)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[(($_v3 = ($context["name"] ?? null)) instanceof \Stringable && (is_array($_v2) || $_v2 instanceof \ArrayObject || $_v2 instanceof \ArrayIterator) ? (string) $_v3 : $_v3)] ?? null) : null)))) {
                        // line 91
                        yield "      ";
                        $context["value"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("autoName", [(($_v4 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 91)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[(($_v5 = ($context["name"] ?? null)) instanceof \Stringable && (is_array($_v4) || $_v4 instanceof \ArrayObject || $_v4 instanceof \ArrayIterator) ? (string) $_v5 : $_v5)] ?? null) : null), ($context["name"] ?? null), (($context["withtemplate"] ?? null) == 2), CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 91), (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 91), "entities_id", [], "array", true, true, false, 91) &&  !(null === (($_v6 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 91)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["entities_id"] ?? null) : null)))) ? ((($_v7 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 91)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["entities_id"] ?? null) : null)) : ( -1))]);
                        // line 92
                        yield "   ";
                    } else {
                        // line 93
                        yield "      ";
                        $context["value"] = null;
                        // line 94
                        yield "   ";
                    }
                    // line 95
                    yield "
   ";
                    // line 96
                    yield (string) $this->getMacroNamespace()->call("textField", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], $context, 96, $this->source);
                    yield "
";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["name" => false, "item" => false, "label" => true, "withtemplate" => true, "options" => true], false),
            "textField" => new \Twig\TwigMacro("textField", function ($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup {
                // line 100
                $macros = $this->macros;
                $context = [
                    "name" => $name,
                    "value" => $value,
                    "label" => $label,
                    "options" => $options,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 101
                    yield "   ";
                    $context["options"] = Twig\Extension\CoreExtension::merge(["id" => "%id%"],                     // line 103
($context["options"] ?? null));
                    // line 104
                    yield "
   ";
                    // line 105
                    if (CoreExtension::inFilter(($context["name"] ?? null), ["name"])) {
                        // line 106
                        yield "        ";
                        $context["current_attrs"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "additional_attributes", [], "any", true, true, false, 106)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "additional_attributes", [], "any", false, false, false, 106), [])) : ([]));
                        // line 107
                        yield "
         ";
                        // line 108
                        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["current_attrs"] ?? null), "autocomplete", [], "any", true, true, false, 108)) {
                            // line 109
                            yield "            ";
                            $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["additional_attributes" => Twig\Extension\CoreExtension::merge(                            // line 110
($context["current_attrs"] ?? null), ["autocomplete" => "off"])]);
                            // line 114
                            yield "         ";
                        }
                        // line 115
                        yield "   ";
                    }
                    // line 116
                    yield "
   ";
                    // line 117
                    $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 118
                        yield "        ";
                        $macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 118)->unwrap()->getMacroNamespace();
                        // line 119
                        yield "        ";
                        yield (string) ($macros["_inputs"] ?? $this->throwUninitializedMacroNamespace(119))->call("text", [($context["name"] ?? null), ($context["value"] ?? null), ($context["options"] ?? null)], $context, 119, $this->source);
                        yield "
   ";
                        return; yield;
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 121
                    yield "
   ";
                    // line 122
                    yield (string) $this->getMacroNamespace()->call("field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], $context, 122, $this->source);
                    yield "
";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["name" => false, "value" => false, "label" => true, "options" => true], false),
            "urlField" => new \Twig\TwigMacro("urlField", function ($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup {
                // line 125
                $macros = $this->macros;
                $context = [
                    "name" => $name,
                    "value" => $value,
                    "label" => $label,
                    "options" => $options,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 126
                    yield "    ";
                    $context["options"] = Twig\Extension\CoreExtension::merge(["id" => "%id%"],                     // line 128
($context["options"] ?? null));
                    // line 129
                    yield "
    ";
                    // line 130
                    $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 131
                        yield "        ";
                        $macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 131)->unwrap()->getMacroNamespace();
                        // line 132
                        yield "        ";
                        yield (string) ($macros["_inputs"] ?? $this->throwUninitializedMacroNamespace(132))->call("input", [($context["name"] ?? null), ($context["value"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["type" => "url"])], $context, 132, $this->source);
                        // line 134
                        yield "
    ";
                        return; yield;
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 136
                    yield "
    ";
                    // line 137
                    yield (string) $this->getMacroNamespace()->call("field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], $context, 137, $this->source);
                    yield "
";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["name" => false, "value" => false, "label" => true, "options" => true], false),
            "checkboxField" => new \Twig\TwigMacro("checkboxField", function ($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup {
                // line 140
                $macros = $this->macros;
                $context = [
                    "name" => $name,
                    "value" => $value,
                    "label" => $label,
                    "options" => $options,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 141
                    yield "   ";
                    $context["options"] = Twig\Extension\CoreExtension::merge(["id" => "%id%", "center" => true],                     // line 144
($context["options"] ?? null));
                    // line 145
                    yield "
    ";
                    // line 146
                    $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 147
                        yield "        ";
                        $macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 147)->unwrap()->getMacroNamespace();
                        // line 148
                        yield "        ";
                        yield (string) ($macros["_inputs"] ?? $this->throwUninitializedMacroNamespace(148))->call("checkbox", [($context["name"] ?? null), ($context["value"] ?? null), ($context["options"] ?? null)], $context, 148, $this->source);
                        yield "
    ";
                        return; yield;
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 150
                    yield "
    ";
                    // line 151
                    yield (string) $this->getMacroNamespace()->call("field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], $context, 151, $this->source);
                    yield "
";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["name" => false, "value" => false, "label" => true, "options" => true], false),
            "sliderField" => new \Twig\TwigMacro("sliderField", function ($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup {
                // line 155
                $macros = $this->macros;
                $context = [
                    "name" => $name,
                    "value" => $value,
                    "label" => $label,
                    "options" => $options,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 156
                    yield "   ";
                    if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 156), "isMandatoryField", [($context["name"] ?? null)], "method", true, true, false, 156)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 156), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 156), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 157
                        yield "      ";
                        $context["options"] = Twig\Extension\CoreExtension::merge(["required" => true],                         // line 159
($context["options"] ?? null));
                        // line 160
                        yield "   ";
                    }
                    // line 161
                    yield "   ";
                    if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 161), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 161)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 161), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 161), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 162
                        yield "      ";
                        $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                        // line 163
                        yield "   ";
                    }
                    // line 164
                    yield "   ";
                    $context["options"] = Twig\Extension\CoreExtension::merge(["no_value" => 0, "yes_value" => 1, "readonly" => false, "required" => false, "disabled" => false, "additional_attributes" => [], "label2" => ""],                     // line 172
($context["options"] ?? null));
                    // line 173
                    yield "
   ";
                    // line 174
                    $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 175
                        yield "      <label class=\"form-check form-switch mt-2\">
         <input type=\"hidden\"   name=\"";
                        // line 176
                        yield (string) $this->escaper->escape(($context["name"] ?? null), "html", null, true);
                        yield "\" value=\"";
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "no_value", [], "any", false, false, false, 176), "html", null, true);
                        yield "\" />
         <input type=\"checkbox\" name=\"";
                        // line 177
                        yield (string) $this->escaper->escape(($context["name"] ?? null), "html", null, true);
                        yield "\" value=\"";
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "yes_value", [], "any", false, false, false, 177), "html", null, true);
                        yield "\" class=\"form-check-input\" id=\"%id%\"
                ";
                        // line 178
                        yield (string) (((($context["value"] ?? null) == 1)) ? ("checked") : (""));
                        yield "
                ";
                        // line 179
                        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 179)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("readonly") : (""));
                        yield "
                ";
                        // line 180
                        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 180)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("required") : (""));
                        yield "
                ";
                        // line 181
                        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 181)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
                        yield "
                ";
                        // line 182
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "additional_attributes", [], "any", false, false, false, 182));
                        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
                            // line 183
                            yield "                    ";
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
                        // line 184
                        yield " />
         ";
                        // line 185
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "label2", [], "any", false, false, false, 185)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 186
                            yield "            <span class=\"form-check-label\">";
                            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "label2", [], "any", false, false, false, 186), "html", null, true);
                            yield "</span>
         ";
                        }
                        // line 188
                        yield "      </label>
   ";
                        return; yield;
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 190
                    yield "
   ";
                    // line 191
                    yield (string) $this->getMacroNamespace()->call("field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], $context, 191, $this->source);
                    yield "
";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["name" => false, "value" => false, "label" => true, "options" => true], false),
            "numberField" => new \Twig\TwigMacro("numberField", function ($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup {
                // line 195
                $macros = $this->macros;
                $context = [
                    "name" => $name,
                    "value" => $value,
                    "label" => $label,
                    "options" => $options,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 196
                    yield "    ";
                    $context["options"] = Twig\Extension\CoreExtension::merge(["id" => "%id%"],                     // line 198
($context["options"] ?? null));
                    // line 199
                    yield "
    ";
                    // line 200
                    $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 201
                        yield "        ";
                        $macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 201)->unwrap()->getMacroNamespace();
                        // line 202
                        yield "        ";
                        yield (string) ($macros["_inputs"] ?? $this->throwUninitializedMacroNamespace(202))->call("number", [($context["name"] ?? null), ($context["value"] ?? null), ($context["options"] ?? null)], $context, 202, $this->source);
                        yield "
    ";
                        return; yield;
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 204
                    yield "
    ";
                    // line 205
                    yield (string) $this->getMacroNamespace()->call("field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], $context, 205, $this->source);
                    yield "
";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["name" => false, "value" => false, "label" => true, "options" => true], false),
            "readOnlyField" => new \Twig\TwigMacro("readOnlyField", function ($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup {
                // line 209
                $macros = $this->macros;
                $context = [
                    "name" => $name,
                    "value" => $value,
                    "label" => $label,
                    "options" => $options,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 210
                    yield "   ";
                    $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                    // line 211
                    yield "   ";
                    $context["value"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 212
                        yield "      <span class=\"form-control ";
                        yield (string) (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "input_addclass", [], "any", true, true, false, 212) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "input_addclass", [], "any", false, false, false, 212)))) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "input_addclass", [], "any", false, false, false, 212), "html", null, true)) : (""));
                        yield "\" readonly>
         ";
                        // line 213
                        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["value"] ?? null)) == 0)) {
                            // line 214
                            yield "            &nbsp;
         ";
                        } else {
                            // line 216
                            yield "            ";
                            yield (string) $this->escaper->escape(($context["value"] ?? null), "html", null, true);
                            yield "
         ";
                        }
                        // line 218
                        yield "      </span>
   ";
                        return; yield;
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 220
                    yield "   ";
                    yield (string) $this->getMacroNamespace()->call("field", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], $context, 220, $this->source);
                    yield "
";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["name" => false, "value" => false, "label" => true, "options" => true], false),
            "textareaField" => new \Twig\TwigMacro("textareaField", function ($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup {
                // line 224
                $macros = $this->macros;
                $context = [
                    "name" => $name,
                    "value" => $value,
                    "label" => $label,
                    "options" => $options,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 225
                    yield "   ";
                    $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "enable_richtext" => false, "enable_images" => true, "enable_fileupload" => false, "mention_options" => ["enabled" => (CoreExtension::getAttribute($this->env, $this->source,                     // line 231
($context["options"] ?? null), "enable_mentions", [], "any", true, true, false, 231) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enable_mentions", [], "any", false, false, false, 231)) && $tmp instanceof Markup ? (string) $tmp : $tmp)), "full" => true, "users" => []], "entities_id" => $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity"), "uploads" => [], "rows" => 3, "readonly" => false],                     // line 239
($context["options"] ?? null));
                    // line 240
                    yield "
   ";
                    // line 241
                    if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", true, true, false, 241)) {
                        // line 242
                        yield "       ";
                        // line 243
                        yield "       ";
                        $context["options"] = Twig\Extension\CoreExtension::merge(["id" => ((Html::sanitizeDomId(($context["name"] ?? null)) . "_") . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 243))], ($context["options"] ?? null));
                        // line 244
                        yield "   ";
                    }
                    // line 245
                    yield "
   ";
                    // line 246
                    $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 247
                        yield "        ";
                        $macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 247)->unwrap()->getMacroNamespace();
                        // line 248
                        yield "        ";
                        yield (string) ($macros["_inputs"] ?? $this->throwUninitializedMacroNamespace(248))->call("textarea", [($context["name"] ?? null), ($context["value"] ?? null), ($context["options"] ?? null)], $context, 248, $this->source);
                        yield "
   ";
                        return; yield;
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 250
                    yield "
   ";
                    // line 251
                    $context["add_html"] = "";
                    // line 252
                    yield "   ";
                    if (( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 252)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enable_fileupload", [], "any", false, false, false, 252)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                        // line 253
                        yield "      ";
                        $context["add_html"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                            // line 254
                            yield "         ";
                            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::file", [["editor_id" => CoreExtension::getAttribute($this->env, $this->source,                             // line 255
($context["options"] ?? null), "id", [], "any", false, false, false, 255), "multiple" => true, "uploads" => CoreExtension::getAttribute($this->env, $this->source,                             // line 257
($context["options"] ?? null), "uploads", [], "any", false, false, false, 257), "required" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                             // line 258
($context["options"] ?? null), "fields_template", [], "any", false, true, false, 258), "isMandatoryField", ["_documents_id"], "method", true, true, false, 258)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 258), "isMandatoryField", ["_documents_id"], "method", false, false, false, 258), false)) : (false))]]);
                            // line 260
                            yield "      ";
                            return; yield;
                        })())) ? '' : new Markup($tmp, $this->env->getCharset());
                        // line 261
                        yield "   ";
                    } elseif (((( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 261)) && $tmp instanceof Markup ? (string) $tmp : $tmp) &&  !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enable_fileupload", [], "any", false, false, false, 261)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enable_richtext", [], "any", false, false, false, 261)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enable_images", [], "any", false, false, false, 261)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                        // line 262
                        yield "      ";
                        $context["add_html"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                            // line 263
                            yield "         ";
                            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::file", [["editor_id" => CoreExtension::getAttribute($this->env, $this->source,                             // line 264
($context["options"] ?? null), "id", [], "any", false, false, false, 264), "name" =>                             // line 265
($context["name"] ?? null), "only_uploaded_files" => true, "uploads" => CoreExtension::getAttribute($this->env, $this->source,                             // line 267
($context["options"] ?? null), "uploads", [], "any", false, false, false, 267), "required" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                             // line 268
($context["options"] ?? null), "fields_template", [], "any", false, true, false, 268), "isMandatoryField", ["_documents_id"], "method", true, true, false, 268)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 268), "isMandatoryField", ["_documents_id"], "method", false, false, false, 268), false)) : (false)), "init" => (((CoreExtension::getAttribute($this->env, $this->source,                             // line 269
($context["options"] ?? null), "init_fileupload", [], "any", true, true, false, 269) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "init_fileupload", [], "any", false, false, false, 269)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "init_fileupload", [], "any", false, false, false, 269)) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "init", [], "any", true, true, false, 269) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "init", [], "any", false, false, false, 269)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "init", [], "any", false, false, false, 269)) : (true))))]]);
                            // line 271
                            yield "      ";
                            return; yield;
                        })())) ? '' : new Markup($tmp, $this->env->getCharset());
                        // line 272
                        yield "   ";
                    }
                    // line 273
                    yield "
   ";
                    // line 274
                    if ((($context["add_html"] ?? null) != "")) {
                        // line 275
                        yield "      ";
                        if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_field_html", [], "any", true, true, false, 275)) {
                            // line 276
                            yield "         ";
                            $context["add_html"] = (($context["add_html"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_field_html", [], "any", false, false, false, 276));
                            // line 277
                            yield "      ";
                        }
                        // line 278
                        yield "      ";
                        $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["add_field_html" => ($context["add_html"] ?? null)]);
                        // line 279
                        yield "   ";
                    }
                    // line 280
                    yield "
   ";
                    // line 281
                    yield (string) $this->getMacroNamespace()->call("field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], $context, 281, $this->source);
                    yield "
";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["name" => false, "value" => false, "label" => true, "options" => true], false),
            "dateField" => new \Twig\TwigMacro("dateField", function ($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup {
                // line 285
                $macros = $this->macros;
                $context = [
                    "name" => $name,
                    "value" => $value,
                    "label" => $label,
                    "options" => $options,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 286
                    yield "   ";
                    $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 287
                        yield "        ";
                        $macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 287)->unwrap()->getMacroNamespace();
                        // line 288
                        yield "        ";
                        yield (string) ($macros["_inputs"] ?? $this->throwUninitializedMacroNamespace(288))->call("date", [($context["name"] ?? null), ($context["value"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["field_label" => ($context["label"] ?? null)])], $context, 288, $this->source);
                        yield "
   ";
                        return; yield;
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 290
                    yield "
   ";
                    // line 291
                    yield (string) $this->getMacroNamespace()->call("field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], $context, 291, $this->source);
                    yield "
";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["name" => false, "value" => false, "label" => true, "options" => true], false),
            "datetimeField" => new \Twig\TwigMacro("datetimeField", function ($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup {
                // line 295
                $macros = $this->macros;
                $context = [
                    "name" => $name,
                    "value" => $value,
                    "label" => $label,
                    "options" => $options,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 296
                    yield "   ";
                    $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 297
                        yield "        ";
                        $macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 297)->unwrap()->getMacroNamespace();
                        // line 298
                        yield "        ";
                        yield (string) ($macros["_inputs"] ?? $this->throwUninitializedMacroNamespace(298))->call("datetime", [($context["name"] ?? null), ($context["value"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["field_label" => ($context["label"] ?? null)])], $context, 298, $this->source);
                        yield "
   ";
                        return; yield;
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 300
                    yield "
   ";
                    // line 301
                    yield (string) $this->getMacroNamespace()->call("field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], $context, 301, $this->source);
                    yield "
";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["name" => false, "value" => false, "label" => true, "options" => true], false),
            "colorField" => new \Twig\TwigMacro("colorField", function ($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup {
                // line 305
                $macros = $this->macros;
                $context = [
                    "name" => $name,
                    "value" => $value,
                    "label" => $label,
                    "options" => $options,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 306
                    yield "    ";
                    $context["options"] = Twig\Extension\CoreExtension::merge(["id" => "%id%"],                     // line 308
($context["options"] ?? null));
                    // line 309
                    yield "
    ";
                    // line 310
                    $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 311
                        yield "        ";
                        $macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 311)->unwrap()->getMacroNamespace();
                        // line 312
                        yield "        ";
                        yield (string) ($macros["_inputs"] ?? $this->throwUninitializedMacroNamespace(312))->call("color", [($context["name"] ?? null), ($context["value"] ?? null), ($context["options"] ?? null)], $context, 312, $this->source);
                        yield "
    ";
                        return; yield;
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 314
                    yield "
    ";
                    // line 315
                    yield (string) $this->getMacroNamespace()->call("field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], $context, 315, $this->source);
                    yield "
";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["name" => false, "value" => false, "label" => true, "options" => true], false),
            "passwordField" => new \Twig\TwigMacro("passwordField", function ($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup {
                // line 319
                $macros = $this->macros;
                $context = [
                    "name" => $name,
                    "value" => $value,
                    "label" => $label,
                    "options" => $options,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 320
                    yield "   ";
                    $context["options"] = Twig\Extension\CoreExtension::merge(["id" => "%id%", "can_regenerate" => (((CoreExtension::getAttribute($this->env, $this->source,                     // line 322
($context["options"] ?? null), "can_regenerate", [], "any", true, true, false, 322) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "can_regenerate", [], "any", false, false, false, 322)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "can_regenerate", [], "any", false, false, false, 322)) : (false)), "clearable" => ((CoreExtension::getAttribute($this->env, $this->source,                     // line 323
($context["options"] ?? null), "clearable", [], "any", true, true, false, 323)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "clearable", [], "any", false, false, false, 323)) : ( !(($tmp = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "is_disclosable", [], "any", true, true, false, 323) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "is_disclosable", [], "any", false, false, false, 323)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "is_disclosable", [], "any", false, false, false, 323)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp))), "is_copyable" => (((CoreExtension::getAttribute($this->env, $this->source,                     // line 324
($context["options"] ?? null), "is_disclosable", [], "any", true, true, false, 324) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "is_disclosable", [], "any", false, false, false, 324)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "is_disclosable", [], "any", false, false, false, 324)) : (false))],                     // line 325
($context["options"] ?? null));
                    // line 326
                    yield "
    ";
                    // line 327
                    $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 328
                        yield "        ";
                        $macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 328)->unwrap()->getMacroNamespace();
                        // line 329
                        yield "        ";
                        yield (string) ($macros["_inputs"] ?? $this->throwUninitializedMacroNamespace(329))->call("password", [($context["name"] ?? null), ($context["value"] ?? null), ($context["options"] ?? null)], $context, 329, $this->source);
                        yield "
    ";
                        return; yield;
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 331
                    yield "
   ";
                    // line 333
                    yield "   ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "can_regenerate", [], "any", false, false, false, 333)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 334
                        yield "      ";
                        $context["regenerate_chk"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                            // line 335
                            yield "         <div class=\"d-flex align-items-center gap-1 mt-1\">
             <input class=\"form-check-input\" type=\"checkbox\" name=\"_regenerate_";
                            // line 336
                            yield (string) $this->escaper->escape(($context["name"] ?? null), "html", null, true);
                            yield "\" id=\"_regenerate_";
                            yield (string) $this->escaper->escape(($context["name"] ?? null), "html", null, true);
                            yield "\"><label class=\"form-check-label\" for=\"_regenerate_";
                            yield (string) $this->escaper->escape(($context["name"] ?? null), "html", null, true);
                            yield "\">";
                            yield (string) $this->escaper->escape(__("Regenerate"), "html", null, true);
                            yield "</label>
         </div>
      ";
                            return; yield;
                        })())) ? '' : new Markup($tmp, $this->env->getCharset());
                        // line 339
                        yield "      ";
                        $context["field"] = (($context["field"] ?? null) . ($context["regenerate_chk"] ?? null));
                        // line 340
                        yield "   ";
                    }
                    // line 341
                    yield "
   ";
                    // line 342
                    yield (string) $this->getMacroNamespace()->call("field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], $context, 342, $this->source);
                    yield "
";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["name" => false, "value" => false, "label" => true, "options" => true], false),
            "emailField" => new \Twig\TwigMacro("emailField", function ($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup {
                // line 346
                $macros = $this->macros;
                $context = [
                    "name" => $name,
                    "value" => $value,
                    "label" => $label,
                    "options" => $options,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 347
                    yield "    ";
                    $context["options"] = Twig\Extension\CoreExtension::merge(["id" => "%id%"],                     // line 349
($context["options"] ?? null));
                    // line 350
                    yield "
    ";
                    // line 351
                    $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 352
                        yield "        ";
                        $macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 352)->unwrap()->getMacroNamespace();
                        // line 353
                        yield "        ";
                        yield (string) ($macros["_inputs"] ?? $this->throwUninitializedMacroNamespace(353))->call("email", [($context["name"] ?? null), ($context["value"] ?? null), ($context["options"] ?? null)], $context, 353, $this->source);
                        yield "
    ";
                        return; yield;
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 355
                    yield "
   ";
                    // line 356
                    yield (string) $this->getMacroNamespace()->call("field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], $context, 356, $this->source);
                    yield "
";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["name" => false, "value" => false, "label" => true, "options" => true], false),
            "fileField" => new \Twig\TwigMacro("fileField", function ($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup {
                // line 359
                $macros = $this->macros;
                $context = [
                    "name" => $name,
                    "value" => $value,
                    "label" => $label,
                    "options" => $options,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 360
                    yield "   ";
                    $context["options"] = Twig\Extension\CoreExtension::merge(["id" => "%id%", "rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "simple" => false],                     // line 364
($context["options"] ?? null));
                    // line 365
                    yield "   ";
                    $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 366
                        yield "        ";
                        $macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 366)->unwrap()->getMacroNamespace();
                        // line 367
                        yield "        ";
                        yield (string) ($macros["_inputs"] ?? $this->throwUninitializedMacroNamespace(367))->call("file", [($context["name"] ?? null), ($context["value"] ?? null), ($context["options"] ?? null)], $context, 367, $this->source);
                        yield "
   ";
                        return; yield;
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 369
                    yield "   ";
                    yield (string) $this->getMacroNamespace()->call("field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], $context, 369, $this->source);
                    yield "
";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["name" => false, "value" => false, "label" => true, "options" => true], false),
            "imageField" => new \Twig\TwigMacro("imageField", function ($name = null, $value = null, $label = "", $options = [], $link_options = [], ...$varargs): string|Markup {
                // line 372
                $macros = $this->macros;
                $context = [
                    "name" => $name,
                    "value" => $value,
                    "label" => $label,
                    "options" => $options,
                    "link_options" => $link_options,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 373
                    yield "   ";
                    $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 374
                        yield "      <div class=\"img-overlay-wrapper position-relative\">
         ";
                        // line 375
                        $context["clearable"] = (($_v8 = ($context["options"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["clearable"] ?? null) : null);
                        // line 376
                        yield "         ";
                        $context["url"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "url", [], "array", true, true, false, 376) &&  !(null === (($_v9 = ($context["options"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["url"] ?? null) : null)))) ? ((($_v10 = ($context["options"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["url"] ?? null) : null)) : (null));
                        // line 377
                        yield "         ";
                        $context["options"] = Twig\Extension\CoreExtension::filter($this->env, $this->env->hasExtension(\Twig\Extension\SandboxExtension::class) && $this->env->getExtension(\Twig\Extension\SandboxExtension::class)->getChecker()->isSandboxed($this->source), ($context["options"] ?? null), function ($__v__, $__k__) use ($context, $macros) { $context["v"] = $__v__; $context["k"] = $__k__; return ((($context["k"] ?? null) != "url") && (($context["k"] ?? null) != "clearable")); });
                        // line 378
                        yield "         ";
                        if ( !Twig\Extension\CoreExtension::testEmpty(($context["url"] ?? null))) {
                            // line 379
                            yield "            <a href=\"";
                            yield (string) $this->escaper->escape(($context["url"] ?? null), "html", null, true);
                            yield "\" ";
                            yield (string) $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::parseAttributes", [($context["link_options"] ?? null)]);
                            yield ">
         ";
                        }
                        // line 381
                        yield "               <img src=\"";
                        yield (string) $this->escaper->escape(($context["value"] ?? null), "html", null, true);
                        yield "\" ";
                        yield (string) $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::parseAttributes", [($context["options"] ?? null)]);
                        yield " />
         ";
                        // line 382
                        if ( !Twig\Extension\CoreExtension::testEmpty(($context["url"] ?? null))) {
                            // line 383
                            yield "            </a>
         ";
                        }
                        // line 385
                        yield "         ";
                        if ((($tmp = ($context["clearable"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 386
                            yield "            <input type=\"hidden\" name=\"_blank_";
                            yield (string) $this->escaper->escape(($context["name"] ?? null), "html", null, true);
                            yield "\" />";
                            // line 387
                            $context["clear_js"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                                // line 388
                                yield "const blank_input = \$(\x27input[name=\\\x27_blank_";
                                yield (string) $this->escaper->escape($this->escaper->escape($this->escaper->escape(($context["name"] ?? null), "css"), "js"), "html", null, true);
                                yield "\\\x27]\x27);
                 blank_input.val(blank_input.val() ? \x27\x27 : true);
                 if (\$(this).closest(\x27.picture_gallery_item\x27).length) {
                    \$(this).closest(\x27.picture_gallery_item\x27).hide();
                    \$(this).closest(\x27.picture_gallery\x27).siblings(\x27.deletion_pending\x27).removeClass(\x27d-none\x27);
                 } else {
                    \$(this).closest(\x27.img-overlay-wrapper\x27).hide();
                 }";
                                return; yield;
                            })())) ? '' : new Markup($tmp, $this->env->getCharset());
                            // line 397
                            yield "<button type=\"button\" class=\"btn p-2 position-absolute top-0 start-0\" title=\"";
                            yield (string) $this->escaper->escape(__("Delete"), "html", null, true);
                            yield "\"
                    onclick=\"";
                            // line 398
                            yield (string) $this->escaper->escape(($context["clear_js"] ?? null), "html", null, true);
                            yield "\">
               <i class=\"ti ti-x\" aria-hidden=\"true\"></i>
            </button>
         ";
                        }
                        // line 402
                        yield "      </div>
   ";
                        return; yield;
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 404
                    yield "   ";
                    if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 404), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 404)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 404), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 404), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 405
                        yield "      ";
                        $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                        // line 406
                        yield "   ";
                    }
                    // line 407
                    yield "   ";
                    yield (string) $this->getMacroNamespace()->call("field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], $context, 407, $this->source);
                    yield "
";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["name" => false, "value" => false, "label" => true, "options" => true, "link_options" => true], false),
            "imageGalleryField" => new \Twig\TwigMacro("imageGalleryField", function ($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup {
                // line 410
                $macros = $this->macros;
                $context = [
                    "name" => $name,
                    "value" => $value,
                    "label" => $label,
                    "options" => $options,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 411
                    yield "   ";
                    $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 412
                        yield "       <div class=\"text-warning deletion_pending d-none\">
           ";
                        // line 413
                        yield (string) $this->escaper->escape(__("The deletion will only take effect after saving the form"), "html", null, true);
                        yield "
       </div>
      <div class=\"picture_gallery d-flex flex-wrap overflow-auto p-3\">
         ";
                        // line 416
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(($context["value"] ?? null));
                        foreach ($context['_seq'] as $context["i"] => $context["picture"]) {
                            // line 417
                            yield "            <div class=\"picture_gallery_item\" style=\"position: relative; width: fit-content\">
               ";
                            // line 418
                            yield (string) $this->getMacroNamespace()->call("imageField", [((($context["name"] ?? null) . "_") . $context["i"]), $context["picture"], "", ["style" => "max-width: 300px; max-height: 150px", "class" => "picture_square", "clearable" => (($_v11 =                             // line 421
($context["options"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["clearable"] ?? null) : null), "no_label" => true]], $context, 418, $this->source);
                            // line 423
                            yield "
            </div>
         ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['i'], $context['picture'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent);
                        $context += $_parent;
                        // line 426
                        yield "      </div>
      ";
                        // line 427
                        yield (string) $this->getMacroNamespace()->call("fileField", [($context["name"] ?? null), null, "", ["onlyimages" => true, "multiple" => true]], $context, 427, $this->source);
                        // line 430
                        yield "
   ";
                        return; yield;
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 432
                    yield "
   ";
                    // line 433
                    if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 433), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 433)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 433), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 433), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 434
                        yield "      ";
                        $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                        // line 435
                        yield "   ";
                    }
                    // line 436
                    yield "
   ";
                    // line 437
                    $context["id"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", true, true, false, 437) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 437)) > 0))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 437)) : (((Html::sanitizeDomId(($context["name"] ?? null)) . "_") . (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", true, true, false, 437) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 437)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 437)) : ("")))));
                    // line 438
                    yield "   ";
                    $macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 438)->unwrap()->getMacroNamespace();
                    // line 439
                    yield "   ";
                    yield (string) ($macros["_inputs"] ?? $this->throwUninitializedMacroNamespace(439))->call("label", [($context["label"] ?? null), ($context["id"] ?? null), ($context["options"] ?? null)], $context, 439, $this->source);
                    yield "
   ";
                    // line 440
                    yield (string) $this->getMacroNamespace()->call("field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["full_width" => true, "no_label" => true])], $context, 440, $this->source);
                    // line 443
                    yield "
";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["name" => false, "value" => false, "label" => true, "options" => true], false),
            "hiddenField" => new \Twig\TwigMacro("hiddenField", function ($name = null, $value = null, $options = [], ...$varargs): string|Markup {
                // line 446
                $macros = $this->macros;
                $context = [
                    "name" => $name,
                    "value" => $value,
                    "options" => $options,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 447
                    yield "    ";
                    if ( !is_iterable(($context["options"] ?? null))) {
                        // line 448
                        yield "        ";
                        // line 454
                        yield "        ";
                        $context["options"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["varargs"] ?? null), 0, [], "array", true, true, false, 454)) ? (Twig\Extension\CoreExtension::default((($_v12 = ($context["varargs"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12[0] ?? null) : null), [])) : ([]));
                        // line 455
                        yield "    ";
                    }
                    // line 456
                    yield "    ";
                    $macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 456)->unwrap()->getMacroNamespace();
                    // line 457
                    yield "    ";
                    yield (string) ($macros["_inputs"] ?? $this->throwUninitializedMacroNamespace(457))->call("hidden", [($context["name"] ?? null), ($context["value"] ?? null), ($context["options"] ?? null)], $context, 457, $this->source);
                    yield "
";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["name" => false, "value" => false, "options" => true], false),
            "csrfField" => new \Twig\TwigMacro("csrfField", function (...$varargs): string|Markup {
                // line 460
                $macros = $this->macros;
                $context = [
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 461
                    yield "   ";
                    $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Toolbox::deprecated", ["Csrf protection is now handled without tokens."]);
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, [], false),
            "dropdownNumberField" => new \Twig\TwigMacro("dropdownNumberField", function ($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup {
                // line 464
                $macros = $this->macros;
                $context = [
                    "name" => $name,
                    "value" => $value,
                    "label" => $label,
                    "options" => $options,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 465
                    yield "    ";
                    $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "width" => "100%", "disabled" => false],                     // line 469
($context["options"] ?? null));
                    // line 470
                    yield "
   ";
                    // line 471
                    if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 471), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 471)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 471), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 471), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 472
                        yield "      ";
                        $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                        // line 473
                        yield "   ";
                    }
                    // line 474
                    yield "
   ";
                    // line 475
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 475)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 476
                        yield "      ";
                        $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                        // line 477
                        yield "   ";
                    }
                    // line 478
                    yield "   ";
                    if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 478), "isMandatoryField", [($context["name"] ?? null)], "method", true, true, false, 478)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 478), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 478), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 479
                        yield "      ";
                        $context["options"] = Twig\Extension\CoreExtension::merge(["specific_tags" => ["required" => true]], ($context["options"] ?? null));
                        // line 480
                        yield "   ";
                    }
                    // line 481
                    yield "
   ";
                    // line 482
                    $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 483
                        yield "      ";
                        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showNumber", [($context["name"] ?? null), Twig\Extension\CoreExtension::merge(["value" =>                         // line 484
($context["value"] ?? null), "rand" => CoreExtension::getAttribute($this->env, $this->source,                         // line 485
($context["options"] ?? null), "rand", [], "any", false, false, false, 485)],                         // line 486
($context["options"] ?? null))]);
                        // line 487
                        yield "   ";
                        return; yield;
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 488
                    yield "
   ";
                    // line 489
                    yield (string) $this->getMacroNamespace()->call("field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => (("dropdown_" . Twig\Extension\CoreExtension::replace(($context["name"] ?? null), ["[" => "_", "]" => "_"])) . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 489))])], $context, 489, $this->source);
                    yield "
";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["name" => false, "value" => false, "label" => true, "options" => true], false),
            "dropdownArrayField" => new \Twig\TwigMacro("dropdownArrayField", function ($name = null, $value = null, $elements = null, $label = "", $options = [], ...$varargs): string|Markup {
                // line 492
                $macros = $this->macros;
                $context = [
                    "name" => $name,
                    "value" => $value,
                    "elements" => $elements,
                    "label" => $label,
                    "options" => $options,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 493
                    yield "    ";
                    $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "disabled" => false, "width" => "100%"],                     // line 497
($context["options"] ?? null));
                    // line 498
                    yield "
   ";
                    // line 499
                    if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 499), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 499)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 499), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 499), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 500
                        yield "      ";
                        $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                        // line 501
                        yield "   ";
                    }
                    // line 502
                    yield "
   ";
                    // line 503
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 503)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 504
                        yield "      ";
                        $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                        // line 505
                        yield "   ";
                    }
                    // line 506
                    yield "
   ";
                    // line 507
                    if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 507), "isMandatoryField", [($context["name"] ?? null)], "method", true, true, false, 507)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 507), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 507), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 508
                        yield "      ";
                        $context["options"] = Twig\Extension\CoreExtension::merge(["required" => true], ($context["options"] ?? null));
                        // line 509
                        yield "   ";
                    }
                    // line 510
                    yield "
   ";
                    // line 511
                    $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 512
                        yield "      ";
                        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showFromArray", [($context["name"] ?? null), ($context["elements"] ?? null), Twig\Extension\CoreExtension::merge(["value" =>                         // line 513
($context["value"] ?? null), "rand" => CoreExtension::getAttribute($this->env, $this->source,                         // line 514
($context["options"] ?? null), "rand", [], "any", false, false, false, 514)],                         // line 515
($context["options"] ?? null))]);
                        // line 516
                        yield "   ";
                        return; yield;
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 517
                    yield "
   ";
                    // line 518
                    yield (string) $this->getMacroNamespace()->call("field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => (("dropdown_" . Twig\Extension\CoreExtension::replace(($context["name"] ?? null), ["[" => "_", "]" => "_"])) . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 518))])], $context, 518, $this->source);
                    yield "
";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["name" => false, "value" => false, "elements" => false, "label" => true, "options" => true], false),
            "dropdownTimestampField" => new \Twig\TwigMacro("dropdownTimestampField", function ($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup {
                // line 521
                $macros = $this->macros;
                $context = [
                    "name" => $name,
                    "value" => $value,
                    "label" => $label,
                    "options" => $options,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 522
                    yield "    ";
                    $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "width" => "100%", "disabled" => false],                     // line 526
($context["options"] ?? null));
                    // line 527
                    yield "   ";
                    if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 527), "isMandatoryField", [($context["name"] ?? null)], "method", true, true, false, 527)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 527), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 527), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 528
                        yield "      ";
                        $context["options"] = Twig\Extension\CoreExtension::merge(["required" => true], ($context["options"] ?? null));
                        // line 529
                        yield "   ";
                    }
                    // line 530
                    yield "
   ";
                    // line 531
                    if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 531), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 531)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 531), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 531), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 532
                        yield "      ";
                        $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                        // line 533
                        yield "   ";
                    }
                    // line 534
                    yield "
   ";
                    // line 535
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 535)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 536
                        yield "      ";
                        $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                        // line 537
                        yield "   ";
                    }
                    // line 538
                    yield "
   ";
                    // line 539
                    $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 540
                        yield "      ";
                        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showTimestamp", [($context["name"] ?? null), Twig\Extension\CoreExtension::merge(["value" =>                         // line 541
($context["value"] ?? null)],                         // line 542
($context["options"] ?? null))]);
                        // line 543
                        yield "   ";
                        return; yield;
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 544
                    yield "
   ";
                    // line 545
                    yield (string) $this->getMacroNamespace()->call("field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => (("dropdown_" . Twig\Extension\CoreExtension::replace(($context["name"] ?? null), ["[" => "_", "]" => "_"])) . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 545))])], $context, 545, $this->source);
                    yield "
";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["name" => false, "value" => false, "label" => true, "options" => true], false),
            "dropdownYesNo" => new \Twig\TwigMacro("dropdownYesNo", function ($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup {
                // line 548
                $macros = $this->macros;
                $context = [
                    "name" => $name,
                    "value" => $value,
                    "label" => $label,
                    "options" => $options,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 549
                    yield "    ";
                    $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "width" => "100%", "disabled" => false],                     // line 553
($context["options"] ?? null));
                    // line 554
                    yield "   ";
                    if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 554), "isMandatoryField", [($context["name"] ?? null)], "method", true, true, false, 554)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 554), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 554), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 555
                        yield "      ";
                        $context["options"] = Twig\Extension\CoreExtension::merge(["required" => true], ($context["options"] ?? null));
                        // line 556
                        yield "   ";
                    }
                    // line 557
                    yield "
   ";
                    // line 558
                    if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 558), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 558)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 558), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 558), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 559
                        yield "      ";
                        $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                        // line 560
                        yield "   ";
                    }
                    // line 561
                    yield "
   ";
                    // line 562
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 562)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 563
                        yield "      ";
                        $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                        // line 564
                        yield "   ";
                    }
                    // line 565
                    yield "
   ";
                    // line 566
                    $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 567
                        yield "      ";
                        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showYesNo", [($context["name"] ?? null), ($context["value"] ?? null),  -1, ($context["options"] ?? null)]);
                        // line 568
                        yield "   ";
                        return; yield;
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 569
                    yield "
   ";
                    // line 570
                    yield (string) $this->getMacroNamespace()->call("field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => (("dropdown_" . Twig\Extension\CoreExtension::replace(($context["name"] ?? null), ["[" => "_", "]" => "_"])) . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 570))])], $context, 570, $this->source);
                    yield "
";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["name" => false, "value" => false, "label" => true, "options" => true], false),
            "dropdownItemTypes" => new \Twig\TwigMacro("dropdownItemTypes", function ($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup {
                // line 573
                $macros = $this->macros;
                $context = [
                    "name" => $name,
                    "value" => $value,
                    "label" => $label,
                    "options" => $options,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 574
                    yield "    ";
                    $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "width" => "100%", "disabled" => false],                     // line 578
($context["options"] ?? null));
                    // line 579
                    yield "   ";
                    if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 579), "isMandatoryField", [($context["name"] ?? null)], "method", true, true, false, 579)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 579), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 579), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 580
                        yield "      ";
                        $context["options"] = Twig\Extension\CoreExtension::merge(["required" => true], ($context["options"] ?? null));
                        // line 581
                        yield "   ";
                    }
                    // line 582
                    yield "
   ";
                    // line 583
                    if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 583), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 583)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 583), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 583), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 584
                        yield "      ";
                        $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                        // line 585
                        yield "   ";
                    }
                    // line 586
                    yield "
   ";
                    // line 587
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 587)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 588
                        yield "      ";
                        $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                        // line 589
                        yield "   ";
                    }
                    // line 590
                    yield "
   ";
                    // line 591
                    $context["types"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "types", [], "array", true, true, false, 591)) ? (Twig\Extension\CoreExtension::default((($_v13 = ($context["options"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["types"] ?? null) : null), [])) : ([]));
                    // line 592
                    yield "
   ";
                    // line 593
                    $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 594
                        yield "      ";
                        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showItemTypes", [($context["name"] ?? null), ($context["types"] ?? null), Twig\Extension\CoreExtension::merge(["rand" => CoreExtension::getAttribute($this->env, $this->source,                         // line 595
($context["options"] ?? null), "rand", [], "any", false, false, false, 595), "value" =>                         // line 596
($context["value"] ?? null)],                         // line 597
($context["options"] ?? null))]);
                        // line 598
                        yield "   ";
                        return; yield;
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 599
                    yield "
   ";
                    // line 600
                    yield (string) $this->getMacroNamespace()->call("field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => (("dropdown_" . Twig\Extension\CoreExtension::replace(($context["name"] ?? null), ["[" => "_", "]" => "_"])) . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 600))])], $context, 600, $this->source);
                    yield "
";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["name" => false, "value" => false, "label" => true, "options" => true], false),
            "dropdownItemsFromItemtypes" => new \Twig\TwigMacro("dropdownItemsFromItemtypes", function ($name = null, $label = "", $options = [], ...$varargs): string|Markup {
                // line 603
                $macros = $this->macros;
                $context = [
                    "name" => $name,
                    "label" => $label,
                    "options" => $options,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 604
                    yield "   ";
                    $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset())],                     // line 606
($context["options"] ?? null));
                    // line 607
                    yield "
   ";
                    // line 608
                    if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 608), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 608)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 608), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 608), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 609
                        yield "      ";
                        $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                        // line 610
                        yield "   ";
                    }
                    // line 611
                    yield "
   ";
                    // line 612
                    $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 613
                        yield "      ";
                        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showSelectItemFromItemtypes", [($context["options"] ?? null)]);
                        // line 614
                        yield "   ";
                        return; yield;
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 615
                    yield "   ";
                    yield (string) $this->getMacroNamespace()->call("field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => (("dropdown_" . Twig\Extension\CoreExtension::replace(($context["name"] ?? null), ["[" => "_", "]" => "_"])) . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 615))])], $context, 615, $this->source);
                    yield "
";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["name" => false, "label" => true, "options" => true], false),
            "dropdownIcons" => new \Twig\TwigMacro("dropdownIcons", function ($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup {
                // line 618
                $macros = $this->macros;
                $context = [
                    "name" => $name,
                    "value" => $value,
                    "label" => $label,
                    "options" => $options,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 619
                    yield "    ";
                    $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "width" => "100%", "disabled" => false],                     // line 623
($context["options"] ?? null));
                    // line 624
                    yield "   ";
                    if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 624), "isMandatoryField", [($context["name"] ?? null)], "method", true, true, false, 624)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 624), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 624), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 625
                        yield "      ";
                        $context["options"] = Twig\Extension\CoreExtension::merge(["required" => true], ($context["options"] ?? null));
                        // line 626
                        yield "   ";
                    }
                    // line 627
                    yield "
   ";
                    // line 628
                    if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 628), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 628)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 628), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 628), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 629
                        yield "      ";
                        $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                        // line 630
                        yield "   ";
                    }
                    // line 631
                    yield "
   ";
                    // line 632
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 632)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 633
                        yield "      ";
                        $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                        // line 634
                        yield "   ";
                    }
                    // line 635
                    yield "
   ";
                    // line 636
                    $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 637
                        yield "      ";
                        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::dropdownIcons", [($context["name"] ?? null), ($context["value"] ?? null), "", ($context["options"] ?? null)]);
                        // line 638
                        yield "   ";
                        return; yield;
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 639
                    yield "
   ";
                    // line 640
                    yield (string) $this->getMacroNamespace()->call("field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => (("dropdown_" . Twig\Extension\CoreExtension::replace(($context["name"] ?? null), ["[" => "_", "]" => "_"])) . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 640))])], $context, 640, $this->source);
                    yield "
";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["name" => false, "value" => false, "label" => true, "options" => true], false),
            "dropdownWebIcons" => new \Twig\TwigMacro("dropdownWebIcons", function ($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup {
                // line 643
                $macros = $this->macros;
                $context = [
                    "name" => $name,
                    "value" => $value,
                    "label" => $label,
                    "options" => $options,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 644
                    yield "    ";
                    $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset())], Twig\Extension\CoreExtension::merge(                    // line 646
($context["options"] ?? null), ["noselect2" => true]));
                    // line 649
                    yield "    ";
                    // line 650
                    yield "    ";
                    $context["value"] = Twig\Extension\CoreExtension::replace(($context["value"] ?? null), ["ti " => ""]);
                    // line 651
                    yield "
    ";
                    // line 652
                    yield (string) $this->getMacroNamespace()->call("dropdownArrayField", [($context["name"] ?? null), ($context["value"] ?? null), [ (string)($context["value"] ?? null) => ($context["value"] ?? null)], ($context["label"] ?? null), ($context["options"] ?? null)], $context, 652, $this->source);
                    yield "
    <script type=\"module\">
        import(\x27/js/modules/Form/WebIconSelector.js\x27).then((m) => {
            const dropdown_id = \x27";
                    // line 655
                    yield (string) $this->escaper->escape($this->escaper->escape(Twig\Extension\CoreExtension::replace((("dropdown_" . ($context["name"] ?? null)) . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 655)), ["[" => "_", "]" => "_"]), "js"), "html", null, true);
                    yield "\x27;
            const selector = new m.default(document.getElementById(dropdown_id));
            selector.init();
        });
    </script>
";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["name" => false, "value" => false, "label" => true, "options" => true], false),
            "dropdownHoursField" => new \Twig\TwigMacro("dropdownHoursField", function ($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup {
                // line 662
                $macros = $this->macros;
                $context = [
                    "name" => $name,
                    "value" => $value,
                    "label" => $label,
                    "options" => $options,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 663
                    yield "    ";
                    $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "width" => "100%", "disabled" => false],                     // line 667
($context["options"] ?? null));
                    // line 668
                    yield "   ";
                    if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 668), "isMandatoryField", [($context["name"] ?? null)], "method", true, true, false, 668)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 668), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 668), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 669
                        yield "      ";
                        $context["options"] = Twig\Extension\CoreExtension::merge(["required" => true], ($context["options"] ?? null));
                        // line 670
                        yield "   ";
                    }
                    // line 671
                    yield "
   ";
                    // line 672
                    if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 672), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 672)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 672), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 672), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 673
                        yield "      ";
                        $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                        // line 674
                        yield "   ";
                    }
                    // line 675
                    yield "
   ";
                    // line 676
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 676)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 677
                        yield "      ";
                        $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                        // line 678
                        yield "   ";
                    }
                    // line 679
                    yield "
   ";
                    // line 680
                    $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 681
                        yield "      ";
                        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showHours", [($context["name"] ?? null), Twig\Extension\CoreExtension::merge(["value" =>                         // line 682
($context["value"] ?? null)],                         // line 683
($context["options"] ?? null))]);
                        // line 684
                        yield "   ";
                        return; yield;
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 685
                    yield "
   ";
                    // line 686
                    yield (string) $this->getMacroNamespace()->call("field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => (("dropdown_" . Twig\Extension\CoreExtension::replace(($context["name"] ?? null), ["[" => "_", "]" => "_"])) . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 686))])], $context, 686, $this->source);
                    yield "
";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["name" => false, "value" => false, "label" => true, "options" => true], false),
            "dropdownFrequency" => new \Twig\TwigMacro("dropdownFrequency", function ($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup {
                // line 689
                $macros = $this->macros;
                $context = [
                    "name" => $name,
                    "value" => $value,
                    "label" => $label,
                    "options" => $options,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 690
                    yield "   ";
                    $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "disabled" => false],                     // line 693
($context["options"] ?? null));
                    // line 694
                    yield "   ";
                    if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 694), "isMandatoryField", [($context["name"] ?? null)], "method", true, true, false, 694)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 694), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 694), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 695
                        yield "      ";
                        $context["options"] = Twig\Extension\CoreExtension::merge(["required" => true], ($context["options"] ?? null));
                        // line 696
                        yield "   ";
                    }
                    // line 697
                    yield "
   ";
                    // line 698
                    if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 698), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 698)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 698), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 698), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 699
                        yield "      ";
                        $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                        // line 700
                        yield "   ";
                    }
                    // line 701
                    yield "
   ";
                    // line 702
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 702)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 703
                        yield "      ";
                        $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                        // line 704
                        yield "   ";
                    }
                    // line 705
                    yield "
   ";
                    // line 706
                    $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 707
                        yield "      ";
                        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showFrequency", [($context["name"] ?? null), ($context["value"] ?? null), Twig\Extension\CoreExtension::merge(["width" => "100%", "value" =>                         // line 709
($context["value"] ?? null)],                         // line 710
($context["options"] ?? null))]);
                        // line 711
                        yield "   ";
                        return; yield;
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 712
                    yield "
   ";
                    // line 713
                    yield (string) $this->getMacroNamespace()->call("field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => (("dropdown_" . Twig\Extension\CoreExtension::replace(($context["name"] ?? null), ["[" => "_", "]" => "_"])) . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 713))])], $context, 713, $this->source);
                    yield "
";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["name" => false, "value" => false, "label" => true, "options" => true], false),
            "dropdownField" => new \Twig\TwigMacro("dropdownField", function ($itemtype = null, $name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup {
                // line 716
                $macros = $this->macros;
                $context = [
                    "itemtype" => $itemtype,
                    "name" => $name,
                    "value" => $value,
                    "label" => $label,
                    "options" => $options,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 717
                    yield "   ";
                    if ((($tmp = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "multiple", [], "any", true, true, false, 717) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "multiple", [], "any", false, false, false, 717)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "multiple", [], "any", false, false, false, 717)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 718
                        yield "      ";
                        // line 719
                        yield "      ";
                        $context["defined_input_name"] = (("_" . ($context["name"] ?? null)) . "_defined");
                        // line 720
                        yield "      <input type=\"hidden\" name=\"";
                        yield (string) $this->escaper->escape(($context["defined_input_name"] ?? null), "html", null, true);
                        yield "\" value=\"1\"></input>

      ";
                        // line 723
                        yield "      ";
                        $context["name"] = (($context["name"] ?? null) . "[]");
                        // line 724
                        yield "   ";
                    }
                    // line 725
                    yield "    ";
                    $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "width" => "100%", "disabled" => false],                     // line 729
($context["options"] ?? null));
                    // line 730
                    yield "   ";
                    if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 730), "isMandatoryField", [($context["name"] ?? null)], "method", true, true, false, 730)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 730), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 730), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 731
                        yield "      ";
                        $context["options"] = Twig\Extension\CoreExtension::merge(["specific_tags" => ["required" => true]], ($context["options"] ?? null));
                        // line 732
                        yield "   ";
                    }
                    // line 733
                    yield "
   ";
                    // line 734
                    if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 734), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 734)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 734), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 734), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 735
                        yield "      ";
                        $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                        // line 736
                        yield "   ";
                    }
                    // line 737
                    yield "
   ";
                    // line 738
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 738)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 739
                        yield "      ";
                        $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                        // line 740
                        yield "   ";
                    }
                    // line 741
                    yield "
   ";
                    // line 742
                    $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 743
                        yield "      ";
                        yield (string) $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeDropdown(($context["itemtype"] ?? null), Twig\Extension\CoreExtension::merge(["name" =>                         // line 744
($context["name"] ?? null), "value" =>                         // line 745
($context["value"] ?? null)],                         // line 746
($context["options"] ?? null)));
                        yield "
   ";
                        return; yield;
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 748
                    yield "
   ";
                    // line 749
                    if ( !Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim(($context["field"] ?? null)))) {
                        // line 750
                        yield "      ";
                        yield (string) $this->getMacroNamespace()->call("field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => (("dropdown_" . Twig\Extension\CoreExtension::replace(($context["name"] ?? null), ["[" => "_", "]" => "_"])) . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 750))])], $context, 750, $this->source);
                        yield "
   ";
                    }
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["itemtype" => false, "name" => false, "value" => false, "label" => true, "options" => true], false),
            "dropdownAjaxField" => new \Twig\TwigMacro("dropdownAjaxField", function ($url = null, $name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup {
                // line 754
                $macros = $this->macros;
                $context = [
                    "url" => $url,
                    "name" => $name,
                    "value" => $value,
                    "label" => $label,
                    "options" => $options,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 755
                    yield "    ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "multiple", [], "any", false, false, false, 755)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 756
                        yield "        ";
                        // line 757
                        yield "        ";
                        $context["defined_input_name"] = (("_" . ($context["name"] ?? null)) . "_defined");
                        // line 758
                        yield "        <input type=\"hidden\" name=\"";
                        yield (string) $this->escaper->escape(($context["defined_input_name"] ?? null), "html", null, true);
                        yield "\" value=\"1\"></input>

        ";
                        // line 761
                        yield "        ";
                        $context["name"] = (($context["name"] ?? null) . "[]");
                        // line 762
                        yield "    ";
                    }
                    // line 763
                    yield "    ";
                    $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "width" => "100%"],                     // line 766
($context["options"] ?? null));
                    // line 767
                    yield "    ";
                    if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 767), "isMandatoryField", [($context["name"] ?? null)], "method", true, true, false, 767)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 767), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 767), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 768
                        yield "        ";
                        $context["options"] = Twig\Extension\CoreExtension::merge(["specific_tags" => ["required" => true]], ($context["options"] ?? null));
                        // line 769
                        yield "    ";
                    }
                    // line 770
                    yield "
    ";
                    // line 771
                    if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 771), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 771)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 771), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 771), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 772
                        yield "        ";
                        $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                        // line 773
                        yield "    ";
                    }
                    // line 774
                    yield "
    ";
                    // line 775
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 775)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 776
                        yield "        ";
                        $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                        // line 777
                        yield "    ";
                    }
                    // line 778
                    yield "
    ";
                    // line 779
                    $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => (("dropdown_" . Twig\Extension\CoreExtension::replace(                    // line 780
($context["name"] ?? null), ["[" => "_", "]" => "_"])) . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 780))]);
                    // line 782
                    yield "    ";
                    $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 783
                        yield "        ";
                        $context["ajax_opts"] = Twig\Extension\CoreExtension::filter($this->env, $this->env->hasExtension(\Twig\Extension\SandboxExtension::class) && $this->env->getExtension(\Twig\Extension\SandboxExtension::class)->getChecker()->isSandboxed($this->source), ($context["options"] ?? null), function ($__v__, $__k__) use ($context, $macros) { $context["v"] = $__v__; $context["k"] = $__k__; return CoreExtension::inFilter(($context["k"] ?? null), ["templateResult", "templateSelection", "rand"]); });
                        // line 784
                        yield "        ";
                        yield (string) $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::jsAjaxDropdown", [($context["name"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 784), ($context["url"] ?? null), ($context["ajax_opts"] ?? null)]);
                        yield "
    ";
                        return; yield;
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 786
                    yield "
    ";
                    // line 787
                    if ( !Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim(($context["field"] ?? null)))) {
                        // line 788
                        yield "        ";
                        yield (string) $this->getMacroNamespace()->call("field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], $context, 788, $this->source);
                        yield "
    ";
                    }
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["url" => false, "name" => false, "value" => false, "label" => true, "options" => true], false),
            "htmlField" => new \Twig\TwigMacro("htmlField", function ($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup {
                // line 792
                $macros = $this->macros;
                $context = [
                    "name" => $name,
                    "value" => $value,
                    "label" => $label,
                    "options" => $options,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 793
                    yield "   ";
                    if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["value"] ?? null)) == 0)) {
                        // line 794
                        yield "      ";
                        $context["value"] = "&nbsp;";
                        // line 795
                        yield "   ";
                    }
                    // line 796
                    yield "   ";
                    $context["options"] = Twig\Extension\CoreExtension::merge(["wrapper_class" => "form-control-plaintext"],                     // line 798
($context["options"] ?? null));
                    // line 799
                    yield "
   ";
                    // line 800
                    if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 800), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 800)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 800), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 800), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 801
                        yield "      ";
                        $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                        // line 802
                        yield "   ";
                    }
                    // line 803
                    yield "
   ";
                    // line 804
                    $context["value"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 805
                        yield "      <span class=\"";
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "wrapper_class", [], "any", false, false, false, 805), "html", null, true);
                        yield "\">";
                        yield (string) ($context["value"] ?? null);
                        yield "</span>
   ";
                        return; yield;
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 807
                    yield "   ";
                    yield (string) $this->getMacroNamespace()->call("field", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], $context, 807, $this->source);
                    yield "
";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["name" => false, "value" => false, "label" => true, "options" => true], false),
            "field" => new \Twig\TwigMacro("field", function ($name = null, $field = null, $label = "", $options = [], ...$varargs): string|Markup {
                // line 810
                $macros = $this->macros;
                $context = [
                    "name" => $name,
                    "field" => $field,
                    "label" => $label,
                    "options" => $options,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 811
                    yield "   ";
                    $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "is_horizontal" => true, "include_field" => true, "add_field_html" => "", "locked" => false, "locked_fields" => [], "no_label" => false],                     // line 819
($context["options"] ?? null));
                    // line 820
                    yield "
   ";
                    // line 821
                    if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "locked_fields", [], "any", false, true, false, 821), ($context["name"] ?? null), [], "array", true, true, false, 821)) {
                        // line 822
                        yield "      ";
                        $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["locked" => true, "locked_value" => (($_v14 = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "locked_fields", [], "any", false, false, false, 822)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14[(($_v15 = ($context["name"] ?? null)) instanceof \Stringable && (is_array($_v14) || $_v14 instanceof \ArrayObject || $_v14 instanceof \ArrayIterator) ? (string) $_v15 : $_v15)] ?? null) : null)]);
                        // line 823
                        yield "   ";
                    } elseif (CoreExtension::inFilter(($context["name"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "locked_fields", [], "any", false, false, false, 823))) {
                        // line 824
                        yield "      ";
                        $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["locked" => true]);
                        // line 825
                        yield "   ";
                    }
                    // line 826
                    yield "
   ";
                    // line 827
                    if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 827), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 827)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 827), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 827), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 828
                        yield "      ";
                        $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                        // line 829
                        yield "   ";
                    }
                    // line 830
                    yield "
   ";
                    // line 831
                    if ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "include_field", [], "any", false, false, false, 831)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 832
                        yield "      ";
                        yield (string) $this->escaper->escape(($context["field"] ?? null), "html", null, true);
                        yield "
   ";
                    } else {
                        // line 834
                        yield "      ";
                        $context["id"] = Html::sanitizeDomId(((((Twig\Extension\CoreExtension::length($this->env->getCharset(), (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", true, true, false, 834) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 834)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 834)) : (""))) > 0) && (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 834) != "%id%"))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 834)) : (((($context["name"] ?? null) . "_") . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 834)))));
                        // line 835
                        yield "      ";
                        // line 836
                        yield "      ";
                        $context["field"] = Twig\Extension\CoreExtension::replace(($context["field"] ?? null), [ (string)$this->escaper->escape($this->escaper->escape("%id%", "css"), "js") =>                         // line 837
($context["id"] ?? null),  (string)$this->escaper->escape("%id%", "js") =>                         // line 838
($context["id"] ?? null),  (string)$this->escaper->escape("%id%", "css") =>                         // line 839
($context["id"] ?? null), "%id%" =>                         // line 840
($context["id"] ?? null)]);
                        // line 842
                        yield "      ";
                        $context["add_field_html"] = (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_field_html", [], "any", false, false, false, 842)) > 0)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_field_html", [], "any", false, false, false, 842)) : (""));
                        // line 843
                        yield "
      ";
                        // line 844
                        if ( !(($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 844), "isHiddenField", [($context["name"] ?? null)], "method", true, true, false, 844)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 844), "isHiddenField", [($context["name"] ?? null)], "method", false, false, false, 844), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 845
                            yield "         ";
                            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "no_label", [], "any", false, false, false, 845)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 846
                                yield "            ";
                                yield (string) $this->getMacroNamespace()->call("noLabelField", [($context["field"] ?? null), ($context["id"] ?? null), ($context["add_field_html"] ?? null), ($context["options"] ?? null)], $context, 846, $this->source);
                                yield "
         ";
                            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,                             // line 847
($context["options"] ?? null), "is_horizontal", [], "any", false, false, false, 847)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 848
                                yield "            ";
                                yield (string) $this->getMacroNamespace()->call("horizontalField", [($context["label"] ?? null), ($context["field"] ?? null), ($context["id"] ?? null), ($context["add_field_html"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["name" => ($context["name"] ?? null)])], $context, 848, $this->source);
                                yield "
         ";
                            } else {
                                // line 850
                                yield "            ";
                                yield (string) $this->getMacroNamespace()->call("verticalField", [($context["label"] ?? null), ($context["field"] ?? null), ($context["id"] ?? null), ($context["add_field_html"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["name" => ($context["name"] ?? null)])], $context, 850, $this->source);
                                yield "
         ";
                            }
                            // line 852
                            yield "      ";
                        }
                        // line 853
                        yield "   ";
                    }
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["name" => false, "field" => false, "label" => true, "options" => true], false),
            "ajaxField" => new \Twig\TwigMacro("ajaxField", function ($id = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup {
                // line 856
                $macros = $this->macros;
                $context = [
                    "id" => $id,
                    "value" => $value,
                    "label" => $label,
                    "options" => $options,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 857
                    yield "   ";
                    $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 858
                        yield "      <div id=\"";
                        yield (string) $this->escaper->escape(($context["id"] ?? null), "html", null, true);
                        yield "\" class=\"form-field-ajax\">
         ";
                        // line 859
                        if ( !(null === ($context["value"] ?? null))) {
                            // line 860
                            yield "            ";
                            yield (string) ($context["value"] ?? null);
                            yield "
         ";
                        }
                        // line 862
                        yield "      </div>
   ";
                        return; yield;
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 864
                    yield "   ";
                    yield (string) $this->getMacroNamespace()->call("field", [($context["id"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => ((($context["id"] ?? null) . "_") . (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", true, true, false, 864) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 864)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 864)) : (Twig\Extension\CoreExtension::random($this->env->getCharset()))))])], $context, 864, $this->source);
                    yield "
";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["id" => false, "value" => false, "label" => true, "options" => true], false),
            "nullField" => new \Twig\TwigMacro("nullField", function ($options = [], ...$varargs): string|Markup {
                // line 867
                $macros = $this->macros;
                $context = [
                    "options" => $options,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 868
                    yield "   ";
                    $context["options"] = Twig\Extension\CoreExtension::merge(["is_horizontal" => true], ($context["options"] ?? null));
                    // line 869
                    yield "
   ";
                    // line 870
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "is_horizontal", [], "any", false, false, false, 870)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 871
                        yield "      ";
                        yield (string) $this->getMacroNamespace()->call("horizontalField", [null, null, null, null, ($context["options"] ?? null)], $context, 871, $this->source);
                        yield "
   ";
                    } else {
                        // line 873
                        yield "      ";
                        yield (string) $this->getMacroNamespace()->call("verticalField", [null, null, null, null, ($context["options"] ?? null)], $context, 873, $this->source);
                        yield "
   ";
                    }
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["options" => true], false),
            "noLabelField" => new \Twig\TwigMacro("noLabelField", function ($field = null, $id = "", $add_field_html = "", $options = [], ...$varargs): string|Markup {
                // line 878
                $macros = $this->macros;
                $context = [
                    "field" => $field,
                    "id" => $id,
                    "add_field_html" => $add_field_html,
                    "options" => $options,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 879
                    yield "   ";
                    $context["options"] = Twig\Extension\CoreExtension::merge(["full_width" => false, "mb" => "mb-3", "add_field_class" => "", "add_field_attribs" => [], "inline_add_field_html" => false],                     // line 885
($context["options"] ?? null));
                    // line 886
                    yield "
   ";
                    // line 887
                    $context["class"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "field_class", [], "any", true, true, false, 887) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "field_class", [], "any", false, false, false, 887)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "field_class", [], "any", false, false, false, 887)) : ("col-12 col-sm-6"));
                    // line 888
                    yield "   ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "full_width", [], "any", false, false, false, 888)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 889
                        yield "      ";
                        $context["class"] = "col-12";
                        // line 890
                        yield "   ";
                    }
                    // line 891
                    yield "   ";
                    $context["class"] = ((($context["class"] ?? null) . " ") . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_field_class", [], "any", false, false, false, 891));
                    // line 892
                    yield "
   ";
                    // line 893
                    if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_field_attribs", [], "any", false, false, false, 893))) {
                        // line 894
                        yield "      ";
                        $context["extra_attribs"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::parseAttributes", ["options" => CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_field_attribs", [], "any", false, false, false, 894)]);
                        // line 895
                        yield "   ";
                    } else {
                        // line 896
                        yield "      ";
                        $context["extra_attribs"] = "";
                        // line 897
                        yield "   ";
                    }
                    // line 898
                    yield "
   <div class=\"";
                    // line 899
                    yield (string) $this->escaper->escape(($context["class"] ?? null), "html", null, true);
                    yield " ";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "mb", [], "any", false, false, false, 899), "html", null, true);
                    yield " ";
                    yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "inline_add_field_html", [], "any", false, false, false, 899)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("d-flex") : (""));
                    yield "\" ";
                    yield (string) ($context["extra_attribs"] ?? null);
                    yield ">
      ";
                    // line 900
                    yield (string) ($context["field"] ?? null);
                    yield "
      ";
                    // line 901
                    yield (string) ($context["add_field_html"] ?? null);
                    yield "
   </div>
";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["field" => false, "id" => true, "add_field_html" => true, "options" => true], false),
            "horizontalField" => new \Twig\TwigMacro("horizontalField", function ($label = null, $field = null, $id = null, $add_field_html = "", $options = [], ...$varargs): string|Markup {
                // line 906
                $macros = $this->macros;
                $context = [
                    "label" => $label,
                    "field" => $field,
                    "id" => $id,
                    "add_field_html" => $add_field_html,
                    "options" => $options,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 907
                    yield "   ";
                    $context["options"] = Twig\Extension\CoreExtension::merge(["full_width" => false, "align_label_right" => true, "mb" => "mb-2", "field_class" => "col-12 col-sm-6", "container_id" => "", "add_field_class" => "", "add_label_class" => "", "add_field_attribs" => [], "center" => false, "label_align" => "end", "inline_add_field_html" => false, "icon_label" => false],                     // line 920
($context["options"] ?? null));
                    // line 921
                    yield "
   ";
                    // line 922
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "icon_label", [], "any", false, false, false, 922)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 923
                        yield "      ";
                        $context["options"] = Twig\Extension\CoreExtension::merge(["label_class" => "col-2", "input_class" => "col-10"],                         // line 926
($context["options"] ?? null));
                        // line 927
                        yield "   ";
                    }
                    // line 928
                    yield "
   ";
                    // line 929
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "full_width", [], "any", false, false, false, 929)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 930
                        yield "      ";
                        $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["field_class" => "col-12 glpi-full-width"]);
                        // line 933
                        yield "   ";
                    }
                    // line 934
                    yield "
   ";
                    // line 935
                    $context["options"] = Twig\Extension\CoreExtension::merge(["label_class" => "col-xxl-5", "input_class" => "col-xxl-7"],                     // line 938
($context["options"] ?? null));
                    // line 939
                    yield "
   ";
                    // line 940
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "align_label_right", [], "any", false, false, false, 940)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 941
                        yield "      ";
                        $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["label_class" => ((CoreExtension::getAttribute($this->env, $this->source,                         // line 942
($context["options"] ?? null), "label_class", [], "any", false, false, false, 942) . " text-xxl-") . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "label_align", [], "any", false, false, false, 942))]);
                        // line 944
                        yield "   ";
                    }
                    // line 945
                    yield "
   ";
                    // line 946
                    if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_field_attribs", [], "any", false, false, false, 946))) {
                        // line 947
                        yield "      ";
                        $context["extra_attribs"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::parseAttributes", ["options" => CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_field_attribs", [], "any", false, false, false, 947)]);
                        // line 948
                        yield "   ";
                    } else {
                        // line 949
                        yield "      ";
                        $context["extra_attribs"] = "";
                        // line 950
                        yield "   ";
                    }
                    // line 951
                    yield "
   ";
                    // line 953
                    yield "   ";
                    if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "container_id", [], "any", false, false, false, 953))) {
                        // line 954
                        yield "      ";
                        $context["container_id"] = ("id=" . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "container_id", [], "any", false, false, false, 954));
                        // line 955
                        yield "   ";
                    } else {
                        // line 956
                        yield "      ";
                        $context["container_id"] = "";
                        // line 957
                        yield "   ";
                    }
                    // line 958
                    yield "
   <div class=\"form-field row align-items-center ";
                    // line 959
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "field_class", [], "any", false, false, false, 959), "html", null, true);
                    yield " ";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_field_class", [], "any", false, false, false, 959), "html", null, true);
                    yield " ";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "mb", [], "any", false, false, false, 959), "html", null, true);
                    yield "\" ";
                    yield (string) ($context["extra_attribs"] ?? null);
                    yield " ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "name", [], "any", true, true, false, 959) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "name", [], "any", false, false, false, 959)))) {
                        yield "data-testid=\"form-field-";
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "name", [], "any", false, false, false, 959), "html", null, true);
                        yield "\"";
                    }
                    yield ">
      ";
                    // line 960
                    $macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 960)->unwrap()->getMacroNamespace();
                    // line 961
                    yield "      ";
                    yield (string) ($macros["_inputs"] ?? $this->throwUninitializedMacroNamespace(961))->call("label", [($context["label"] ?? null), ($context["id"] ?? null), ($context["options"] ?? null), ((("col-form-label " . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "label_class", [], "any", false, false, false, 961)) . " ") . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_label_class", [], "any", false, false, false, 961))], $context, 961, $this->source);
                    yield "
      ";
                    // line 962
                    $context["flex_class"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "center", [], "any", false, false, false, 962)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("d-flex align-items-center") : ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "inline_add_field_html", [], "any", false, false, false, 962)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("d-flex") : (""))));
                    // line 963
                    yield "      <div ";
                    yield (string) $this->escaper->escape(($context["container_id"] ?? null), "html", null, true);
                    yield " class=\"";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "input_class", [], "any", false, false, false, 963), "html", null, true);
                    yield " ";
                    yield (string) $this->escaper->escape(($context["flex_class"] ?? null), "html", null, true);
                    yield " field-container\">
         ";
                    // line 964
                    yield (string) ($context["field"] ?? null);
                    yield "
         ";
                    // line 965
                    yield (string) ($context["add_field_html"] ?? null);
                    yield "
      </div>
   </div>
";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["label" => false, "field" => false, "id" => false, "add_field_html" => true, "options" => true], false),
            "verticalField" => new \Twig\TwigMacro("verticalField", function ($label = null, $field = null, $id = null, $add_field_html = "", $options = [], ...$varargs): string|Markup {
                // line 971
                $macros = $this->macros;
                $context = [
                    "label" => $label,
                    "field" => $field,
                    "id" => $id,
                    "add_field_html" => $add_field_html,
                    "options" => $options,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 972
                    yield "   ";
                    $context["options"] = Twig\Extension\CoreExtension::merge(["full_width" => false, "mb" => "mb-2", "field_class" => "col-12 col-sm-6", "add_field_class" => "", "add_field_attribs" => [], "insert_content_after_label" => "", "label_class" => "", "input_class" => ""],                     // line 981
($context["options"] ?? null));
                    // line 982
                    yield "
   ";
                    // line 983
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "full_width", [], "any", false, false, false, 983)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 984
                        yield "      ";
                        $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["field_class" => "col-12"]);
                        // line 987
                        yield "   ";
                    }
                    // line 988
                    yield "
   ";
                    // line 989
                    if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_field_attribs", [], "any", false, false, false, 989))) {
                        // line 990
                        yield "      ";
                        $context["extra_attribs"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::parseAttributes", ["options" => CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_field_attribs", [], "any", false, false, false, 990)]);
                        // line 991
                        yield "   ";
                    } else {
                        // line 992
                        yield "      ";
                        $context["extra_attribs"] = "";
                        // line 993
                        yield "   ";
                    }
                    // line 994
                    yield "
   <div class=\"form-field ";
                    // line 995
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "field_class", [], "any", false, false, false, 995), "html", null, true);
                    yield " ";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_field_class", [], "any", false, false, false, 995), "html", null, true);
                    yield " ";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "mb", [], "any", false, false, false, 995), "html", null, true);
                    yield "\" ";
                    yield (string) ($context["extra_attribs"] ?? null);
                    yield " ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "name", [], "any", true, true, false, 995) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "name", [], "any", false, false, false, 995)))) {
                        yield "data-testid=\"form-field-";
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "name", [], "any", false, false, false, 995), "html", null, true);
                        yield "\"";
                    }
                    yield ">
      ";
                    // line 996
                    $macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 996)->unwrap()->getMacroNamespace();
                    // line 997
                    yield "      <div class=\"d-flex align-items-center\">
         ";
                    // line 998
                    yield (string) ($macros["_inputs"] ?? $this->throwUninitializedMacroNamespace(998))->call("label", [($context["label"] ?? null), ($context["id"] ?? null), ($context["options"] ?? null), ("col-form-label " . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "label_class", [], "any", false, false, false, 998))], $context, 998, $this->source);
                    yield "
         ";
                    // line 999
                    yield (string) CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "insert_content_after_label", [], "any", false, false, false, 999);
                    yield "
      </div>
      <div class=\"";
                    // line 1001
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "input_class", [], "any", false, false, false, 1001), "html", null, true);
                    yield " field-container\">
         ";
                    // line 1002
                    yield (string) ($context["field"] ?? null);
                    yield "
      </div>
      ";
                    // line 1004
                    yield (string) ($context["add_field_html"] ?? null);
                    yield "
   </div>
";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["label" => false, "field" => false, "id" => false, "add_field_html" => true, "options" => true], false),
            "label" => new \Twig\TwigMacro("label", function ($label = null, $id = null, $options = [], $class = "form-label", ...$varargs): string|Markup {
                // line 1008
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
                    // line 1009
                    yield "    ";
                    $macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 1009)->unwrap()->getMacroNamespace();
                    // line 1010
                    yield "    ";
                    yield (string) ($macros["_inputs"] ?? $this->throwUninitializedMacroNamespace(1010))->call("label", [($context["label"] ?? null), ($context["id"] ?? null), ($context["options"] ?? null), ($context["class"] ?? null)], $context, 1010, $this->source);
                    yield "
";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["label" => false, "id" => false, "options" => true, "class" => true], false),
            "codeField" => new \Twig\TwigMacro("codeField", function ($name = null, $value = null, $label = null, $options = null, ...$varargs): string|Markup {
                // line 1013
                $macros = $this->macros;
                $context = [
                    "name" => $name,
                    "value" => $value,
                    "label" => $label,
                    "options" => $options,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 1014
                    yield "    ";
                    $context["options"] = Twig\Extension\CoreExtension::merge(["single_line" => false, "language" => "twig", "completions" => [], "helper" => Twig\Extension\CoreExtension::sprintf(__("This field accepts %s content. Press Ctrl+Space to trigger autocompletion."), "Twig")],                     // line 1019
($context["options"] ?? null));
                    // line 1020
                    yield "
    ";
                    // line 1021
                    if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "helper", [], "any", false, false, false, 1021))) {
                        // line 1022
                        yield "        ";
                        $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["helper" => Twig\Extension\CoreExtension::sprintf(CoreExtension::getAttribute($this->env, $this->source,                         // line 1023
($context["options"] ?? null), "helper", [], "any", false, false, false, 1023), CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "language", [], "any", false, false, false, 1023))]);
                        // line 1025
                        yield "    ";
                    }
                    // line 1026
                    yield "
    ";
                    // line 1027
                    $context["code_container_id"] = ((($context["name"] ?? null) . "_") . Twig\Extension\CoreExtension::random($this->env->getCharset()));
                    // line 1028
                    yield "    ";
                    $context["code_container"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 1029
                        yield "        <div id=\"";
                        yield (string) $this->escaper->escape(($context["code_container_id"] ?? null), "html", null, true);
                        yield "\" class=\"form-control overflow-hidden text-start\" style=\"height: ";
                        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "single_line", [], "any", false, false, false, 1029)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("36px") : ($this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "height", [], "any", true, true, false, 1029)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "height", [], "any", false, false, false, 1029), "auto")) : ("auto")), "html", null, true)));
                        yield ";\"></div>
    ";
                        return; yield;
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 1031
                    yield "    ";
                    yield (string) $this->getMacroNamespace()->call("htmlField", [($context["name"] ?? null), ($context["code_container"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(["wrapper_class" => "d-flex flex-grow-1"],                     // line 1033
($context["options"] ?? null))], $context, 1031, $this->source);
                    yield "
    <script>
        \$(() => {
            const editor_options = ";
                    // line 1036
                    yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "single_line", [], "any", false, false, false, 1036)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
                    yield " ? window.GLPI.Monaco.getSingleLineEditorOptions() : {};
            window.GLPI.Monaco.createEditor(\x27";
                    // line 1037
                    yield (string) $this->escaper->escape($this->escaper->escape(($context["code_container_id"] ?? null), "js"), "html", null, true);
                    yield "\x27, \x27";
                    yield (string) $this->escaper->escape($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "language", [], "any", false, false, false, 1037), "js"), "html", null, true);
                    yield "\x27, \"";
                    yield (string) $this->escaper->escape($this->escaper->escape(($context["value"] ?? null), "js"), "html", null, true);
                    yield "\", ";
                    yield (string) json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "completions", [], "any", false, false, false, 1037));
                    yield ", editor_options).then(() => {
                \$(\x27#";
                    // line 1038
                    yield (string) $this->escaper->escape($this->escaper->escape($this->escaper->escape(($context["code_container_id"] ?? null), "css"), "js"), "html", null, true);
                    yield "\x27).closest(\x27form\x27).on(\x27formdata\x27, (e) => {
                    const editors = window.monaco.editor.getEditors().filter((editor) => {
                        return editor._domElement.id === \x27";
                    // line 1040
                    yield (string) $this->escaper->escape($this->escaper->escape(($context["code_container_id"] ?? null), "js"), "html", null, true);
                    yield "\x27;
                    });
                    if (editors.length) {
                        e.originalEvent.formData.delete(\x27";
                    // line 1043
                    yield (string) $this->escaper->escape($this->escaper->escape(($context["name"] ?? null), "js"), "html", null, true);
                    yield "\x27);
                        e.originalEvent.formData.append(\x27";
                    // line 1044
                    yield (string) $this->escaper->escape($this->escaper->escape(($context["name"] ?? null), "js"), "html", null, true);
                    yield "\x27, editors[0].getValue());
                    }
                });
            });
        });
    </script>
";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["name" => false, "value" => false, "label" => false, "options" => false], false),
            "illustrationField" => new \Twig\TwigMacro("illustrationField", function ($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup {
                // line 1052
                $macros = $this->macros;
                $context = [
                    "name" => $name,
                    "value" => $value,
                    "label" => $label,
                    "options" => $options,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 1053
                    yield "    ";
                    $context["options"] = Twig\Extension\CoreExtension::merge(["extra_css_classes" => "", "backdrop" => true, "allow_empty" => false],                     // line 1057
($context["options"] ?? null));
                    // line 1058
                    yield "    ";
                    $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 1059
                        yield "        ";
                        yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/illustration/icon_picker.html.twig", ["name" =>                         // line 1060
($context["name"] ?? null), "value" =>                         // line 1061
($context["value"] ?? null), "size" => 100, "preview_css_classes" => ("illustration-selector d-flex align-items-center card border-1 " . CoreExtension::getAttribute($this->env, $this->source,                         // line 1063
($context["options"] ?? null), "extra_css_classes", [], "any", false, false, false, 1063)), "backdrop" => CoreExtension::getAttribute($this->env, $this->source,                         // line 1064
($context["options"] ?? null), "backdrop", [], "any", false, false, false, 1064), "allow_empty" => CoreExtension::getAttribute($this->env, $this->source,                         // line 1065
($context["options"] ?? null), "allow_empty", [], "any", false, false, false, 1065)], false);
                        // line 1066
                        yield "
    ";
                        return; yield;
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 1068
                    yield "
    ";
                    // line 1069
                    $context["options"] = Twig\Extension\CoreExtension::merge(["id" => "%id%"],                     // line 1071
($context["options"] ?? null));
                    // line 1072
                    yield "    ";
                    yield (string) $this->getMacroNamespace()->call("field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], $context, 1072, $this->source);
                    yield "
";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["name" => false, "value" => false, "label" => true, "options" => true], false),
        ];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/form/fields_macros.html.twig";
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
        return array (  3014 => 1072,  3012 => 1071,  3011 => 1069,  3008 => 1068,  3003 => 1066,  3001 => 1065,  3000 => 1064,  2999 => 1063,  2998 => 1061,  2997 => 1060,  2995 => 1059,  2992 => 1058,  2990 => 1057,  2988 => 1053,  2975 => 1052,  2962 => 1044,  2958 => 1043,  2952 => 1040,  2947 => 1038,  2937 => 1037,  2933 => 1036,  2927 => 1033,  2925 => 1031,  2916 => 1029,  2913 => 1028,  2911 => 1027,  2908 => 1026,  2905 => 1025,  2903 => 1023,  2901 => 1022,  2899 => 1021,  2896 => 1020,  2894 => 1019,  2892 => 1014,  2879 => 1013,  2870 => 1010,  2867 => 1009,  2854 => 1008,  2845 => 1004,  2840 => 1002,  2836 => 1001,  2831 => 999,  2827 => 998,  2824 => 997,  2822 => 996,  2806 => 995,  2803 => 994,  2800 => 993,  2797 => 992,  2794 => 991,  2791 => 990,  2789 => 989,  2786 => 988,  2783 => 987,  2780 => 984,  2778 => 983,  2775 => 982,  2773 => 981,  2771 => 972,  2757 => 971,  2747 => 965,  2743 => 964,  2734 => 963,  2732 => 962,  2727 => 961,  2725 => 960,  2709 => 959,  2706 => 958,  2703 => 957,  2700 => 956,  2697 => 955,  2694 => 954,  2691 => 953,  2688 => 951,  2685 => 950,  2682 => 949,  2679 => 948,  2676 => 947,  2674 => 946,  2671 => 945,  2668 => 944,  2666 => 942,  2664 => 941,  2662 => 940,  2659 => 939,  2657 => 938,  2656 => 935,  2653 => 934,  2650 => 933,  2647 => 930,  2645 => 929,  2642 => 928,  2639 => 927,  2637 => 926,  2635 => 923,  2633 => 922,  2630 => 921,  2628 => 920,  2626 => 907,  2612 => 906,  2603 => 901,  2599 => 900,  2589 => 899,  2586 => 898,  2583 => 897,  2580 => 896,  2577 => 895,  2574 => 894,  2572 => 893,  2569 => 892,  2566 => 891,  2563 => 890,  2560 => 889,  2557 => 888,  2555 => 887,  2552 => 886,  2550 => 885,  2548 => 879,  2535 => 878,  2525 => 873,  2519 => 871,  2517 => 870,  2514 => 869,  2511 => 868,  2501 => 867,  2492 => 864,  2487 => 862,  2481 => 860,  2479 => 859,  2474 => 858,  2471 => 857,  2458 => 856,  2451 => 853,  2448 => 852,  2442 => 850,  2436 => 848,  2434 => 847,  2429 => 846,  2426 => 845,  2424 => 844,  2421 => 843,  2418 => 842,  2416 => 840,  2415 => 839,  2414 => 838,  2413 => 837,  2411 => 836,  2409 => 835,  2406 => 834,  2400 => 832,  2398 => 831,  2395 => 830,  2392 => 829,  2389 => 828,  2387 => 827,  2384 => 826,  2381 => 825,  2378 => 824,  2375 => 823,  2372 => 822,  2370 => 821,  2367 => 820,  2365 => 819,  2363 => 811,  2350 => 810,  2341 => 807,  2332 => 805,  2330 => 804,  2327 => 803,  2324 => 802,  2321 => 801,  2319 => 800,  2316 => 799,  2314 => 798,  2312 => 796,  2309 => 795,  2306 => 794,  2303 => 793,  2290 => 792,  2280 => 788,  2278 => 787,  2275 => 786,  2268 => 784,  2265 => 783,  2262 => 782,  2260 => 780,  2259 => 779,  2256 => 778,  2253 => 777,  2250 => 776,  2248 => 775,  2245 => 774,  2242 => 773,  2239 => 772,  2237 => 771,  2234 => 770,  2231 => 769,  2228 => 768,  2225 => 767,  2223 => 766,  2221 => 763,  2218 => 762,  2215 => 761,  2209 => 758,  2206 => 757,  2204 => 756,  2201 => 755,  2187 => 754,  2177 => 750,  2175 => 749,  2172 => 748,  2166 => 746,  2165 => 745,  2164 => 744,  2162 => 743,  2160 => 742,  2157 => 741,  2154 => 740,  2151 => 739,  2149 => 738,  2146 => 737,  2143 => 736,  2140 => 735,  2138 => 734,  2135 => 733,  2132 => 732,  2129 => 731,  2126 => 730,  2124 => 729,  2122 => 725,  2119 => 724,  2116 => 723,  2110 => 720,  2107 => 719,  2105 => 718,  2102 => 717,  2088 => 716,  2080 => 713,  2077 => 712,  2073 => 711,  2071 => 710,  2070 => 709,  2068 => 707,  2066 => 706,  2063 => 705,  2060 => 704,  2057 => 703,  2055 => 702,  2052 => 701,  2049 => 700,  2046 => 699,  2044 => 698,  2041 => 697,  2038 => 696,  2035 => 695,  2032 => 694,  2030 => 693,  2028 => 690,  2015 => 689,  2007 => 686,  2004 => 685,  2000 => 684,  1998 => 683,  1997 => 682,  1995 => 681,  1993 => 680,  1990 => 679,  1987 => 678,  1984 => 677,  1982 => 676,  1979 => 675,  1976 => 674,  1973 => 673,  1971 => 672,  1968 => 671,  1965 => 670,  1962 => 669,  1959 => 668,  1957 => 667,  1955 => 663,  1942 => 662,  1930 => 655,  1924 => 652,  1921 => 651,  1918 => 650,  1916 => 649,  1914 => 646,  1912 => 644,  1899 => 643,  1891 => 640,  1888 => 639,  1884 => 638,  1881 => 637,  1879 => 636,  1876 => 635,  1873 => 634,  1870 => 633,  1868 => 632,  1865 => 631,  1862 => 630,  1859 => 629,  1857 => 628,  1854 => 627,  1851 => 626,  1848 => 625,  1845 => 624,  1843 => 623,  1841 => 619,  1828 => 618,  1819 => 615,  1815 => 614,  1812 => 613,  1810 => 612,  1807 => 611,  1804 => 610,  1801 => 609,  1799 => 608,  1796 => 607,  1794 => 606,  1792 => 604,  1780 => 603,  1772 => 600,  1769 => 599,  1765 => 598,  1763 => 597,  1762 => 596,  1761 => 595,  1759 => 594,  1757 => 593,  1754 => 592,  1752 => 591,  1749 => 590,  1746 => 589,  1743 => 588,  1741 => 587,  1738 => 586,  1735 => 585,  1732 => 584,  1730 => 583,  1727 => 582,  1724 => 581,  1721 => 580,  1718 => 579,  1716 => 578,  1714 => 574,  1701 => 573,  1693 => 570,  1690 => 569,  1686 => 568,  1683 => 567,  1681 => 566,  1678 => 565,  1675 => 564,  1672 => 563,  1670 => 562,  1667 => 561,  1664 => 560,  1661 => 559,  1659 => 558,  1656 => 557,  1653 => 556,  1650 => 555,  1647 => 554,  1645 => 553,  1643 => 549,  1630 => 548,  1622 => 545,  1619 => 544,  1615 => 543,  1613 => 542,  1612 => 541,  1610 => 540,  1608 => 539,  1605 => 538,  1602 => 537,  1599 => 536,  1597 => 535,  1594 => 534,  1591 => 533,  1588 => 532,  1586 => 531,  1583 => 530,  1580 => 529,  1577 => 528,  1574 => 527,  1572 => 526,  1570 => 522,  1557 => 521,  1549 => 518,  1546 => 517,  1542 => 516,  1540 => 515,  1539 => 514,  1538 => 513,  1536 => 512,  1534 => 511,  1531 => 510,  1528 => 509,  1525 => 508,  1523 => 507,  1520 => 506,  1517 => 505,  1514 => 504,  1512 => 503,  1509 => 502,  1506 => 501,  1503 => 500,  1501 => 499,  1498 => 498,  1496 => 497,  1494 => 493,  1480 => 492,  1472 => 489,  1469 => 488,  1465 => 487,  1463 => 486,  1462 => 485,  1461 => 484,  1459 => 483,  1457 => 482,  1454 => 481,  1451 => 480,  1448 => 479,  1445 => 478,  1442 => 477,  1439 => 476,  1437 => 475,  1434 => 474,  1431 => 473,  1428 => 472,  1426 => 471,  1423 => 470,  1421 => 469,  1419 => 465,  1406 => 464,  1399 => 461,  1390 => 460,  1381 => 457,  1378 => 456,  1375 => 455,  1372 => 454,  1370 => 448,  1367 => 447,  1355 => 446,  1348 => 443,  1346 => 440,  1341 => 439,  1338 => 438,  1336 => 437,  1333 => 436,  1330 => 435,  1327 => 434,  1325 => 433,  1322 => 432,  1317 => 430,  1315 => 427,  1312 => 426,  1303 => 423,  1301 => 421,  1300 => 418,  1297 => 417,  1293 => 416,  1287 => 413,  1284 => 412,  1281 => 411,  1268 => 410,  1259 => 407,  1256 => 406,  1253 => 405,  1250 => 404,  1245 => 402,  1238 => 398,  1233 => 397,  1220 => 388,  1218 => 387,  1214 => 386,  1211 => 385,  1207 => 383,  1205 => 382,  1198 => 381,  1190 => 379,  1187 => 378,  1184 => 377,  1181 => 376,  1179 => 375,  1176 => 374,  1173 => 373,  1159 => 372,  1150 => 369,  1143 => 367,  1140 => 366,  1137 => 365,  1135 => 364,  1133 => 360,  1120 => 359,  1112 => 356,  1109 => 355,  1102 => 353,  1099 => 352,  1097 => 351,  1094 => 350,  1092 => 349,  1090 => 347,  1077 => 346,  1069 => 342,  1066 => 341,  1063 => 340,  1060 => 339,  1047 => 336,  1044 => 335,  1041 => 334,  1038 => 333,  1035 => 331,  1028 => 329,  1025 => 328,  1023 => 327,  1020 => 326,  1018 => 325,  1017 => 324,  1016 => 323,  1015 => 322,  1013 => 320,  1000 => 319,  992 => 315,  989 => 314,  982 => 312,  979 => 311,  977 => 310,  974 => 309,  972 => 308,  970 => 306,  957 => 305,  949 => 301,  946 => 300,  939 => 298,  936 => 297,  933 => 296,  920 => 295,  912 => 291,  909 => 290,  902 => 288,  899 => 287,  896 => 286,  883 => 285,  875 => 281,  872 => 280,  869 => 279,  866 => 278,  863 => 277,  860 => 276,  857 => 275,  855 => 274,  852 => 273,  849 => 272,  845 => 271,  843 => 269,  842 => 268,  841 => 267,  840 => 265,  839 => 264,  837 => 263,  834 => 262,  831 => 261,  827 => 260,  825 => 258,  824 => 257,  823 => 255,  821 => 254,  818 => 253,  815 => 252,  813 => 251,  810 => 250,  803 => 248,  800 => 247,  798 => 246,  795 => 245,  792 => 244,  789 => 243,  787 => 242,  785 => 241,  782 => 240,  780 => 239,  779 => 231,  777 => 225,  764 => 224,  755 => 220,  750 => 218,  744 => 216,  740 => 214,  738 => 213,  733 => 212,  730 => 211,  727 => 210,  714 => 209,  706 => 205,  703 => 204,  696 => 202,  693 => 201,  691 => 200,  688 => 199,  686 => 198,  684 => 196,  671 => 195,  663 => 191,  660 => 190,  655 => 188,  649 => 186,  647 => 185,  644 => 184,  632 => 183,  628 => 182,  624 => 181,  620 => 180,  616 => 179,  612 => 178,  606 => 177,  600 => 176,  597 => 175,  595 => 174,  592 => 173,  590 => 172,  588 => 164,  585 => 163,  582 => 162,  579 => 161,  576 => 160,  574 => 159,  572 => 157,  569 => 156,  556 => 155,  548 => 151,  545 => 150,  538 => 148,  535 => 147,  533 => 146,  530 => 145,  528 => 144,  526 => 141,  513 => 140,  505 => 137,  502 => 136,  497 => 134,  494 => 132,  491 => 131,  489 => 130,  486 => 129,  484 => 128,  482 => 126,  469 => 125,  461 => 122,  458 => 121,  451 => 119,  448 => 118,  446 => 117,  443 => 116,  440 => 115,  437 => 114,  435 => 110,  433 => 109,  431 => 108,  428 => 107,  425 => 106,  423 => 105,  420 => 104,  418 => 103,  416 => 101,  403 => 100,  395 => 96,  392 => 95,  389 => 94,  386 => 93,  383 => 92,  380 => 91,  377 => 90,  374 => 89,  372 => 87,  370 => 86,  366 => 85,  363 => 84,  349 => 83,  338 => 78,  333 => 76,  327 => 74,  325 => 73,  320 => 72,  314 => 69,  311 => 68,  309 => 67,  302 => 66,  298 => 64,  294 => 63,  291 => 62,  288 => 61,  285 => 60,  282 => 59,  268 => 58,  259 => 53,  254 => 51,  248 => 49,  246 => 48,  241 => 47,  235 => 44,  232 => 43,  230 => 42,  226 => 41,  221 => 39,  218 => 38,  215 => 37,  212 => 36,  209 => 35,  206 => 34,  193 => 33,  183 => 1051,  180 => 1012,  177 => 1007,  173 => 969,  169 => 904,  165 => 876,  162 => 866,  159 => 855,  156 => 809,  153 => 791,  150 => 753,  147 => 715,  144 => 688,  141 => 661,  138 => 642,  135 => 617,  132 => 602,  129 => 572,  126 => 547,  123 => 520,  120 => 491,  117 => 463,  114 => 459,  111 => 445,  108 => 409,  105 => 371,  102 => 358,  98 => 344,  94 => 317,  90 => 303,  86 => 293,  82 => 283,  78 => 222,  74 => 207,  70 => 193,  66 => 153,  63 => 139,  60 => 124,  56 => 98,  53 => 82,  50 => 57,  47 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/form/fields_macros.html.twig", "/var/www/html/glpi/templates/components/form/fields_macros.html.twig");
    }
}
