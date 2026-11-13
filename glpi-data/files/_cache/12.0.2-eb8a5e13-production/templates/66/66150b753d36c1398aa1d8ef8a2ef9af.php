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

/* layout/parts/context_links.html.twig */
class __TwigTemplate_5aa71361e6e80da0733b584f0f30c602 extends Template
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
        // line 43
        $macros["context_links"] = $this->macros["context_links"] = $this->getMacroNamespace();
        // line 44
        yield "
";
        // line 45
        $context["links"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", false, true, false, 45), "content", [], "array", false, true, false, 45), ($context["item"] ?? null), [], "array", false, true, false, 45), "options", [], "array", false, true, false, 45), ($context["option"] ?? null), [], "array", false, true, false, 45), "links", [], "array", true, true, false, 45) &&  !(null === (($_v0 = (($_v1 = (($_v2 = (($_v3 = (($_v4 = (($_v5 = ($context["menu"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[(($_v6 = ($context["sector"] ?? null)) instanceof \Stringable && (is_array($_v5) || $_v5 instanceof \ArrayObject || $_v5 instanceof \ArrayIterator) ? (string) $_v6 : $_v6)] ?? null) : null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["content"] ?? null) : null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[(($_v7 = ($context["item"] ?? null)) instanceof \Stringable && (is_array($_v3) || $_v3 instanceof \ArrayObject || $_v3 instanceof \ArrayIterator) ? (string) $_v7 : $_v7)] ?? null) : null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["options"] ?? null) : null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[(($_v8 = ($context["option"] ?? null)) instanceof \Stringable && (is_array($_v1) || $_v1 instanceof \ArrayObject || $_v1 instanceof \ArrayIterator) ? (string) $_v8 : $_v8)] ?? null) : null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["links"] ?? null) : null)))) ? ((($_v9 = (($_v10 = (($_v11 = (($_v12 = (($_v13 = (($_v14 = ($context["menu"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14[(($_v15 = ($context["sector"] ?? null)) instanceof \Stringable && (is_array($_v14) || $_v14 instanceof \ArrayObject || $_v14 instanceof \ArrayIterator) ? (string) $_v15 : $_v15)] ?? null) : null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["content"] ?? null) : null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12[(($_v16 = ($context["item"] ?? null)) instanceof \Stringable && (is_array($_v12) || $_v12 instanceof \ArrayObject || $_v12 instanceof \ArrayIterator) ? (string) $_v16 : $_v16)] ?? null) : null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["options"] ?? null) : null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10[(($_v17 = ($context["option"] ?? null)) instanceof \Stringable && (is_array($_v10) || $_v10 instanceof \ArrayObject || $_v10 instanceof \ArrayIterator) ? (string) $_v17 : $_v17)] ?? null) : null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["links"] ?? null) : null)) : ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", false, true, false, 45), "content", [], "array", false, true, false, 45), ($context["item"] ?? null), [], "array", false, true, false, 45), "links", [], "array", true, true, false, 45) &&  !(null === (($_v18 = (($_v19 = (($_v20 = (($_v21 = ($context["menu"] ?? null)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21[(($_v22 = ($context["sector"] ?? null)) instanceof \Stringable && (is_array($_v21) || $_v21 instanceof \ArrayObject || $_v21 instanceof \ArrayIterator) ? (string) $_v22 : $_v22)] ?? null) : null)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20["content"] ?? null) : null)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19[(($_v23 = ($context["item"] ?? null)) instanceof \Stringable && (is_array($_v19) || $_v19 instanceof \ArrayObject || $_v19 instanceof \ArrayIterator) ? (string) $_v23 : $_v23)] ?? null) : null)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18["links"] ?? null) : null)))) ? ((($_v24 = (($_v25 = (($_v26 = (($_v27 = ($context["menu"] ?? null)) && is_array($_v27) || $_v27 instanceof ArrayAccess ? ($_v27[(($_v28 = ($context["sector"] ?? null)) instanceof \Stringable && (is_array($_v27) || $_v27 instanceof \ArrayObject || $_v27 instanceof \ArrayIterator) ? (string) $_v28 : $_v28)] ?? null) : null)) && is_array($_v26) || $_v26 instanceof ArrayAccess ? ($_v26["content"] ?? null) : null)) && is_array($_v25) || $_v25 instanceof ArrayAccess ? ($_v25[(($_v29 = ($context["item"] ?? null)) instanceof \Stringable && (is_array($_v25) || $_v25 instanceof \ArrayObject || $_v25 instanceof \ArrayIterator) ? (string) $_v29 : $_v29)] ?? null) : null)) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24["links"] ?? null) : null)) : (""))));
        // line 46
        $context["lists_itemtype"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", false, true, false, 46), "content", [], "array", false, true, false, 46), ($context["item"] ?? null), [], "array", false, true, false, 46), "options", [], "array", false, true, false, 46), ($context["option"] ?? null), [], "array", false, true, false, 46), "lists_itemtype", [], "array", true, true, false, 46) &&  !(null === (($_v30 = (($_v31 = (($_v32 = (($_v33 = (($_v34 = (($_v35 = ($context["menu"] ?? null)) && is_array($_v35) || $_v35 instanceof ArrayAccess ? ($_v35[(($_v36 = ($context["sector"] ?? null)) instanceof \Stringable && (is_array($_v35) || $_v35 instanceof \ArrayObject || $_v35 instanceof \ArrayIterator) ? (string) $_v36 : $_v36)] ?? null) : null)) && is_array($_v34) || $_v34 instanceof ArrayAccess ? ($_v34["content"] ?? null) : null)) && is_array($_v33) || $_v33 instanceof ArrayAccess ? ($_v33[(($_v37 = ($context["item"] ?? null)) instanceof \Stringable && (is_array($_v33) || $_v33 instanceof \ArrayObject || $_v33 instanceof \ArrayIterator) ? (string) $_v37 : $_v37)] ?? null) : null)) && is_array($_v32) || $_v32 instanceof ArrayAccess ? ($_v32["options"] ?? null) : null)) && is_array($_v31) || $_v31 instanceof ArrayAccess ? ($_v31[(($_v38 = ($context["option"] ?? null)) instanceof \Stringable && (is_array($_v31) || $_v31 instanceof \ArrayObject || $_v31 instanceof \ArrayIterator) ? (string) $_v38 : $_v38)] ?? null) : null)) && is_array($_v30) || $_v30 instanceof ArrayAccess ? ($_v30["lists_itemtype"] ?? null) : null)))) ? ((($_v39 = (($_v40 = (($_v41 = (($_v42 = (($_v43 = (($_v44 = ($context["menu"] ?? null)) && is_array($_v44) || $_v44 instanceof ArrayAccess ? ($_v44[(($_v45 = ($context["sector"] ?? null)) instanceof \Stringable && (is_array($_v44) || $_v44 instanceof \ArrayObject || $_v44 instanceof \ArrayIterator) ? (string) $_v45 : $_v45)] ?? null) : null)) && is_array($_v43) || $_v43 instanceof ArrayAccess ? ($_v43["content"] ?? null) : null)) && is_array($_v42) || $_v42 instanceof ArrayAccess ? ($_v42[(($_v46 = ($context["item"] ?? null)) instanceof \Stringable && (is_array($_v42) || $_v42 instanceof \ArrayObject || $_v42 instanceof \ArrayIterator) ? (string) $_v46 : $_v46)] ?? null) : null)) && is_array($_v41) || $_v41 instanceof ArrayAccess ? ($_v41["options"] ?? null) : null)) && is_array($_v40) || $_v40 instanceof ArrayAccess ? ($_v40[(($_v47 = ($context["option"] ?? null)) instanceof \Stringable && (is_array($_v40) || $_v40 instanceof \ArrayObject || $_v40 instanceof \ArrayIterator) ? (string) $_v47 : $_v47)] ?? null) : null)) && is_array($_v39) || $_v39 instanceof ArrayAccess ? ($_v39["lists_itemtype"] ?? null) : null)) : ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", false, true, false, 46), "content", [], "array", false, true, false, 46), ($context["item"] ?? null), [], "array", false, true, false, 46), "lists_itemtype", [], "array", true, true, false, 46) &&  !(null === (($_v48 = (($_v49 = (($_v50 = (($_v51 = ($context["menu"] ?? null)) && is_array($_v51) || $_v51 instanceof ArrayAccess ? ($_v51[(($_v52 = ($context["sector"] ?? null)) instanceof \Stringable && (is_array($_v51) || $_v51 instanceof \ArrayObject || $_v51 instanceof \ArrayIterator) ? (string) $_v52 : $_v52)] ?? null) : null)) && is_array($_v50) || $_v50 instanceof ArrayAccess ? ($_v50["content"] ?? null) : null)) && is_array($_v49) || $_v49 instanceof ArrayAccess ? ($_v49[(($_v53 = ($context["item"] ?? null)) instanceof \Stringable && (is_array($_v49) || $_v49 instanceof \ArrayObject || $_v49 instanceof \ArrayIterator) ? (string) $_v53 : $_v53)] ?? null) : null)) && is_array($_v48) || $_v48 instanceof ArrayAccess ? ($_v48["lists_itemtype"] ?? null) : null)))) ? ((($_v54 = (($_v55 = (($_v56 = (($_v57 = ($context["menu"] ?? null)) && is_array($_v57) || $_v57 instanceof ArrayAccess ? ($_v57[(($_v58 = ($context["sector"] ?? null)) instanceof \Stringable && (is_array($_v57) || $_v57 instanceof \ArrayObject || $_v57 instanceof \ArrayIterator) ? (string) $_v58 : $_v58)] ?? null) : null)) && is_array($_v56) || $_v56 instanceof ArrayAccess ? ($_v56["content"] ?? null) : null)) && is_array($_v55) || $_v55 instanceof ArrayAccess ? ($_v55[(($_v59 = ($context["item"] ?? null)) instanceof \Stringable && (is_array($_v55) || $_v55 instanceof \ArrayObject || $_v55 instanceof \ArrayIterator) ? (string) $_v59 : $_v59)] ?? null) : null)) && is_array($_v54) || $_v54 instanceof ArrayAccess ? ($_v54["lists_itemtype"] ?? null) : null)) : (""))));
        // line 47
        if (Twig\Extension\CoreExtension::testEmpty(($context["lists_itemtype"] ?? null))) {
            // line 48
            yield "    ";
            $context["lists_itemtype"] = ($context["item"] ?? null);
        }
        // line 50
        yield "
";
        // line 51
        $context["display_divider"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["links"] ?? null), "add", [], "array", true, true, false, 51) || (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["links"] ?? null)) > 0));
        // line 52
        yield "
";
        // line 53
        if ((($tmp = ($context["display_divider"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 54
            yield "   ";
            // line 55
            yield "   <ul class=\"nav navbar-nav border-start border-left ps-1 ps-sm-2 flex-row\">
";
        }
        // line 57
        yield "
";
        // line 58
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["links"] ?? null), "add", [], "array", true, true, false, 58)) {
            // line 59
            yield "   ";
            yield (string) ($macros["context_links"] ?? $this->throwUninitializedMacroNamespace(59))->call("action_link", [$this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path((($_v60 = ($context["links"] ?? null)) && is_array($_v60) || $_v60 instanceof ArrayAccess ? ($_v60["add"] ?? null) : null)), __("Add"), "ti ti-plus", "btn-primary"], $context, 59, $this->source);
            yield "
";
        }
        // line 61
        yield "
";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["link"]) {
            // line 63
            yield "   ";
            if (((($context["type"] == "add") || ($context["type"] == "search")) || ($context["type"] == "lists"))) {
                // line 64
                yield "   ";
            } elseif (($context["type"] == "template")) {
                // line 65
                yield "      ";
                yield (string) ($macros["context_links"] ?? $this->throwUninitializedMacroNamespace(65))->call("action_link", [$this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path($context["link"]), __("Templates"), "ti ti-template", null, __("Manage templates...")], $context, 65, $this->source);
                yield "
   ";
            } elseif ((            // line 66
$context["type"] == "showall")) {
                // line 67
                yield "      ";
                yield (string) ($macros["context_links"] ?? $this->throwUninitializedMacroNamespace(67))->call("action_link", [$this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path($context["link"]), __("Show all"), "ti ti-eye-check"], $context, 67, $this->source);
                yield "
   ";
            } elseif ((            // line 68
$context["type"] == "summary")) {
                // line 69
                yield "      ";
                yield (string) ($macros["context_links"] ?? $this->throwUninitializedMacroNamespace(69))->call("action_link", [$this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path($context["link"]), __("Summary"), "ti ti-notes"], $context, 69, $this->source);
                yield "
   ";
            } elseif ((            // line 70
$context["type"] == "summary_kanban")) {
                // line 71
                yield "      ";
                yield (string) ($macros["context_links"] ?? $this->throwUninitializedMacroNamespace(71))->call("action_link", [$this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path($context["link"]), __("Global Kanban"), "ti ti-layout-columns"], $context, 71, $this->source);
                yield "
   ";
            } elseif ((            // line 72
$context["type"] == "transfer_list")) {
                // line 73
                yield "      ";
                yield (string) ($macros["context_links"] ?? $this->throwUninitializedMacroNamespace(73))->call("action_link", [$this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path($context["link"]), __("Transfer list"), "ti ti-list-check"], $context, 73, $this->source);
                yield "
   ";
            } elseif ((            // line 74
$context["type"] == "config")) {
                // line 75
                yield "      ";
                yield (string) ($macros["context_links"] ?? $this->throwUninitializedMacroNamespace(75))->call("action_link", [$this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path($context["link"]), __("Setup"), "ti ti-tool"], $context, 75, $this->source);
                yield "
   ";
            } elseif ((            // line 76
$context["type"] == "view_form_categories")) {
                // line 77
                yield "      ";
                yield (string) ($macros["context_links"] ?? $this->throwUninitializedMacroNamespace(77))->call("action_link", [$this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path($context["link"]), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Glpi\\Form\\Category", Session::getPluralNumber()), "ti ti-folder"], $context, 77, $this->source);
                yield "
   ";
            } elseif ((            // line 78
$context["type"] == "all_articles")) {
                // line 79
                yield "      ";
                yield (string) ($macros["context_links"] ?? $this->throwUninitializedMacroNamespace(79))->call("action_link", [$this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path($context["link"]), __("All articles"), "ti ti-list-search"], $context, 79, $this->source);
                yield "
   ";
            } elseif ((            // line 80
$context["type"] == "import_forms")) {
                // line 81
                yield "      ";
                yield (string) ($macros["context_links"] ?? $this->throwUninitializedMacroNamespace(81))->call("action_link", [$this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path($context["link"]), __("Import forms"), "ti ti-file-arrow-left"], $context, 81, $this->source);
                yield "
   ";
            } elseif ((            // line 82
$context["type"] == "Glpi\\Dropdown\\DropdownDefinition")) {
                // line 83
                yield "      ";
                yield (string) ($macros["context_links"] ?? $this->throwUninitializedMacroNamespace(83))->call("action_link", [$this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path(                // line 84
$context["link"]), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Glpi\\Dropdown\\DropdownDefinition"), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeIcon("Glpi\\Dropdown\\DropdownDefinition")], $context, 83, $this->source);
                // line 87
                yield "
   ";
            } else {
                // line 89
                yield "      <li class=\"nav-item\">
         <a href=\"";
                // line 90
                yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path($context["link"]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-ghost-secondary me-1 pe-2\">
            ";
                // line 91
                yield (string) $context["type"];
                yield "
         </a>
      </li>
   ";
            }
            // line 95
            yield "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['type'], $context['link'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 97
        yield "
";
        // line 98
        if ((($tmp = ($context["display_divider"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 99
            yield "   </ul>
";
        }
        return; yield;
    }

    protected function loadDeclaredMacros(): array
    {
        return [
            "action_link" => new \Twig\TwigMacro("action_link", function ($url = null, $label = null, $icon = null, $btn_class = null, $tooltip = null, ...$varargs): string|Markup {
                // line 33
                $macros = $this->macros;
                $context = [
                    "url" => $url,
                    "label" => $label,
                    "icon" => $icon,
                    "btn_class" => $btn_class,
                    "tooltip" => $tooltip,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 34
                    yield "   <li class=\"nav-item\">
      <a href=\"";
                    // line 35
                    yield (string) $this->escaper->escape(($context["url"] ?? null), "html", null, true);
                    yield "\" class=\"btn btn-sm ";
                    yield (string) $this->escaper->escape(((array_key_exists("btn_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["btn_class"] ?? null), "btn-ghost-secondary")) : ("btn-ghost-secondary")), "html", null, true);
                    yield " me-1 pe-2\"
         data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"";
                    // line 36
                    yield (string) $this->escaper->escape(((array_key_exists("tooltip", $context)) ? (Twig\Extension\CoreExtension::default(($context["tooltip"] ?? null), ($context["label"] ?? null))) : (($context["label"] ?? null))), "html", null, true);
                    yield "\">
         <i class=\"";
                    // line 37
                    yield (string) $this->escaper->escape(($context["icon"] ?? null), "html", null, true);
                    yield "\" aria-hidden=\"true\"></i>
         <span class=\"d-none d-xxl-block\" aria-hidden=\"true\">";
                    // line 38
                    yield (string) $this->escaper->escape(($context["label"] ?? null), "html", null, true);
                    yield "</span>
         <span class=\"visually-hidden\">";
                    // line 39
                    yield (string) $this->escaper->escape(($context["label"] ?? null), "html", null, true);
                    yield "</span>
      </a>
   </li>
";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["url" => false, "label" => false, "icon" => false, "btn_class" => false, "tooltip" => false], false),
        ];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "layout/parts/context_links.html.twig";
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
        return array (  249 => 39,  245 => 38,  241 => 37,  237 => 36,  231 => 35,  228 => 34,  214 => 33,  203 => 99,  201 => 98,  198 => 97,  190 => 95,  183 => 91,  179 => 90,  176 => 89,  172 => 87,  170 => 84,  168 => 83,  166 => 82,  161 => 81,  159 => 80,  154 => 79,  152 => 78,  147 => 77,  145 => 76,  140 => 75,  138 => 74,  133 => 73,  131 => 72,  126 => 71,  124 => 70,  119 => 69,  117 => 68,  112 => 67,  110 => 66,  105 => 65,  102 => 64,  99 => 63,  95 => 62,  92 => 61,  86 => 59,  84 => 58,  81 => 57,  77 => 55,  75 => 54,  73 => 53,  70 => 52,  68 => 51,  65 => 50,  61 => 48,  59 => 47,  57 => 46,  55 => 45,  52 => 44,  50 => 43,  47 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "layout/parts/context_links.html.twig", "/var/www/html/glpi/templates/layout/parts/context_links.html.twig");
    }
}
