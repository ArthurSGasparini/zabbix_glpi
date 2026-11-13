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

/* components/form/modals_macros.html.twig */
class __TwigTemplate_9806fe6c5c1b10249be65a913113de62 extends Template
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
        // line 50
        yield "
";
        return; yield;
    }

    protected function loadDeclaredMacros(): array
    {
        return [
            "confirm" => new \Twig\TwigMacro("confirm", function ($modal_title = "", $modal_body = "", $options = [], ...$varargs): string|Markup {
                // line 33
                $macros = $this->macros;
                $context = [
                    "modal_title" => $modal_title,
                    "modal_body" => $modal_body,
                    "options" => $options,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 34
                    yield "   ";
                    $context["options"] = Twig\Extension\CoreExtension::merge(["buttons" => ["cancel" => ["label" => ((CoreExtension::getAttribute($this->env, $this->source,                     // line 37
($context["options"] ?? null), "cancel_label", [], "array", true, true, false, 37)) ? (Twig\Extension\CoreExtension::default((($_v0 = ($context["options"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["cancel_label"] ?? null) : null), _x("button", "Cancel"))) : (_x("button", "Cancel"))), "event" => ((CoreExtension::getAttribute($this->env, $this->source,                     // line 38
($context["options"] ?? null), "cancel_event", [], "array", true, true, false, 38)) ? (Twig\Extension\CoreExtension::default((($_v1 = ($context["options"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["cancel_event"] ?? null) : null), "")) : (""))], "confirm" => ["label" => ((CoreExtension::getAttribute($this->env, $this->source,                     // line 41
($context["options"] ?? null), "confirm_label", [], "array", true, true, false, 41)) ? (Twig\Extension\CoreExtension::default((($_v2 = ($context["options"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["confirm_label"] ?? null) : null), _x("button", "Ok"))) : (_x("button", "Ok"))), "event" => ((CoreExtension::getAttribute($this->env, $this->source,                     // line 42
($context["options"] ?? null), "confirm_event", [], "array", true, true, false, 42)) ? (Twig\Extension\CoreExtension::default((($_v3 = ($context["options"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["confirm_event"] ?? null) : null), "")) : ("")), "class" => "ms-auto"]]],                     // line 46
($context["options"] ?? null));
                    // line 47
                    yield "
   ";
                    // line 48
                    yield (string) $this->getMacroNamespace()->call("modal", [($context["modal_title"] ?? null), ($context["modal_body"] ?? null), ($context["options"] ?? null)], $context, 48, $this->source);
                    yield "
";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["modal_title" => true, "modal_body" => true, "options" => true], false),
            "modal" => new \Twig\TwigMacro("modal", function ($modal_title = null, $modal_body = null, $options = [], ...$varargs): string|Markup {
                // line 51
                $macros = $this->macros;
                $context = [
                    "modal_title" => $modal_title,
                    "modal_body" => $modal_body,
                    "options" => $options,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 52
                    yield "   ";
                    $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
                    // line 53
                    yield "   ";
                    $context["options"] = Twig\Extension\CoreExtension::merge(["id" => ("modal" .                     // line 54
($context["rand"] ?? null)), "rand" =>                     // line 55
($context["rand"] ?? null), "buttons" => [], "modal_classes" => ""],                     // line 58
($context["options"] ?? null));
                    // line 59
                    yield "
   <div class=\"modal fade ";
                    // line 60
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "modal_classes", [], "any", false, false, false, 60), "html", null, true);
                    yield "\" id=\"";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 60), "html", null, true);
                    yield "\" tabindex=\"-1\" role=\"dialog\" aria-modal=\"true\" aria-labelledby=\"";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 60), "html", null, true);
                    yield "_title\" aria-hidden=\"true\">
      <div class=\"modal-dialog\" role=\"document\">
         <div class=\"modal-content\">
            <div class=\"modal-header\">
               <h5 class=\"modal-title\" id=\"";
                    // line 64
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 64), "html", null, true);
                    yield "_title\">";
                    yield (string) $this->escaper->escape(($context["modal_title"] ?? null), "html", null, true);
                    yield "</h5>
               <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
                    // line 65
                    yield (string) $this->escaper->escape(_x("button", "Close"), "html", null, true);
                    yield "\"></button>
            </div>
            <div class=\"modal-body overflow-auto\">
               ";
                    // line 68
                    yield (string) ($context["modal_body"] ?? null);
                    yield "
            </div>
            <div class=\"modal-footer\">
               ";
                    // line 71
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((($_v4 = ($context["options"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["buttons"] ?? null) : null));
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                        // line 72
                        yield "                  <button type=\"button\" class=\"btn ";
                        yield (string) (((($tmp = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "primary", [], "array", true, true, false, 72) &&  !(null === (($_v5 = ($context["options"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["primary"] ?? null) : null)))) ? ((($_v6 = ($context["options"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["primary"] ?? null) : null)) : (true))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("btn-primary") : ("btn-outline-secondary"));
                        yield " ";
                        yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["button"], "class", [], "array", true, true, false, 72)) ? (Twig\Extension\CoreExtension::default((($_v7 = $context["button"]) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["class"] ?? null) : null), "")) : ("")), "html", null, true);
                        yield "\"
                          id=\"";
                        // line 73
                        yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["button"], "id", [], "array", true, true, false, 73)) ? (Twig\Extension\CoreExtension::default((($_v8 = $context["button"]) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["id"] ?? null) : null), ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 73) . "_btn_") . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 73)))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 73) . "_btn_") . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 73)))), "html", null, true);
                        yield "\" data-bs-dismiss=\"modal\">
                     ";
                        // line 74
                        yield (string) ((CoreExtension::getAttribute($this->env, $this->source, $context["button"], "label", [], "array", true, true, false, 74)) ? (Twig\Extension\CoreExtension::default((($_v9 = $context["button"]) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["label"] ?? null) : null), "")) : (""));
                        yield "
                  </button>
               ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent);
                    $context += $_parent;
                    // line 77
                    yield "            </div>
         </div>
      </div>
   </div>
   <script>
      \$(function () {
         ";
                    // line 83
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((($_v10 = ($context["options"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["buttons"] ?? null) : null));
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                        // line 84
                        yield "         \$(\x27#";
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 84), "html", null, true);
                        yield "\x27).on(\x27click\x27, \x27#";
                        yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["button"], "id", [], "array", true, true, false, 84)) ? (Twig\Extension\CoreExtension::default((($_v11 = $context["button"]) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["id"] ?? null) : null), ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 84) . "_btn_") . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 84)))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 84) . "_btn_") . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 84)))), "html", null, true);
                        yield "\x27, function (event) {
            ";
                        // line 85
                        yield (string) ((CoreExtension::getAttribute($this->env, $this->source, $context["button"], "event", [], "array", true, true, false, 85)) ? (Twig\Extension\CoreExtension::default((($_v12 = $context["button"]) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["event"] ?? null) : null), "return true;")) : ("return true;"));
                        yield "
         });
         ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent);
                    $context += $_parent;
                    // line 88
                    yield "      });
   </script>
";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["modal_title" => false, "modal_body" => false, "options" => true], false),
        ];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/form/modals_macros.html.twig";
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
        return array (  240 => 88,  222 => 85,  215 => 84,  198 => 83,  190 => 77,  172 => 74,  168 => 73,  161 => 72,  144 => 71,  138 => 68,  132 => 65,  126 => 64,  115 => 60,  112 => 59,  110 => 58,  109 => 55,  108 => 54,  106 => 53,  103 => 52,  91 => 51,  83 => 48,  80 => 47,  78 => 46,  77 => 42,  76 => 41,  75 => 38,  74 => 37,  72 => 34,  60 => 33,  50 => 50,  47 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/form/modals_macros.html.twig", "/var/www/html/glpi/templates/components/form/modals_macros.html.twig");
    }
}
