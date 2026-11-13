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

/* components/search/query_builder/criteria.html.twig */
class __TwigTemplate_97e8deaa8f081fe7a0f65fa60a293899 extends Template
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
        $context["add_padding"] = (((($tmp = ($context["from_meta"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("p-0") : ("p-2"));
        // line 36
        $context["add_class"] = ((array_key_exists("add_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["add_class"] ?? null), "")) : (""));
        // line 37
        $context["normalized_itemtype"] = Twig\Extension\CoreExtension::replace(($context["itemtype"] ?? null), ["\\" => ""]);
        // line 38
        yield "
";
        // line 39
        if (((($tmp = ($context["meta"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) &&  !(($tmp = ($context["from_meta"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 40
            yield "   ";
            yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Glpi\\Search\\Input\\QueryBuilder::displayMetaCriteria", [["from_meta" => (((            // line 41
array_key_exists("from_meta", $context) &&  !(null === $context["from_meta"]))) ? ($context["from_meta"]) : (false)), "itemtype" =>             // line 42
($context["itemtype"] ?? null), "p" =>             // line 43
($context["p"] ?? null), "num" =>             // line 44
($context["num"] ?? null)]]), "html", null, true);
            // line 45
            yield "
";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 46
($context["criteria"] ?? null), "criteria", [], "array", true, true, false, 46) && is_iterable((($_v0 = ($context["criteria"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["criteria"] ?? null) : null)))) {
            // line 47
            yield "   ";
            yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Glpi\\Search\\Input\\QueryBuilder::displayCriteriaGroup", [["itemtype" =>             // line 48
($context["itemtype"] ?? null), "p" =>             // line 49
($context["p"] ?? null), "num" =>             // line 50
($context["num"] ?? null)]]), "html", null, true);
            // line 51
            yield "
";
        } else {
            // line 53
            yield "   <div class=\"list-group-item ";
            yield (string) $this->escaper->escape(($context["add_padding"] ?? null), "html", null, true);
            yield " border-0 normalcriteria";
            yield (string) $this->escaper->escape(($context["add_class"] ?? null), "html", null, true);
            yield "\" id=\"";
            yield (string) $this->escaper->escape(($context["row_id"] ?? null), "html", null, true);
            yield "\">
      <div class=\"row g-1\">
         ";
            // line 55
            if ( !(($tmp = ($context["from_meta"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 56
                yield "            <div class=\"col-auto\">
               <button class=\"btn btn-sm btn-icon btn-ghost-secondary remove-search-criteria\" type=\"button\" data-rowid=\"";
                // line 57
                yield (string) $this->escaper->escape(($context["row_id"] ?? null), "html", null, true);
                yield "\"
                       data-bs-toggle=\"tooltip\" data-bs-placement=\"left\" title=\"";
                // line 58
                yield (string) $this->escaper->escape(__("Delete a rule"), "html", null, true);
                yield "\">
                  <i class=\"ti ti-square-rounded-minus\" aria-hidden=\"true\"></i>
               </button>
            </div>
         ";
            }
            // line 63
            yield "
         ";
            // line 64
            if ( !(($tmp = ($context["from_meta"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 65
                yield "            <div class=\"col-auto\">
               ";
                // line 66
                $context["value"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["criteria"] ?? null), "link", [], "array", true, true, false, 66)) ? ((($_v1 = ($context["criteria"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["link"] ?? null) : null)) : (""));
                // line 67
                yield "               ";
                $context["operators"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Glpi\\Search\\SearchEngine::getLogicalOperators", [(($context["num"] ?? null) == 0)]);
                // line 68
                yield "               ";
                yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(68))->call("dropdownArrayField", [(((("criteria" . ($context["prefix"] ?? null)) . "[") . ($context["num"] ?? null)) . "][link]"), ($context["value"] ?? null), ($context["operators"] ?? null), "", ["full_width" => true, "input_class" => "col-12", "no_label" => true, "mb" => "mb-0"]], $context, 68, $this->source);
                // line 73
                yield "
            </div>
         ";
            }
            // line 76
            yield "
         <div class=\"col-auto\">
            ";
            // line 78
            $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
            // line 79
            yield "            ";
            $context["value"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["criteria"] ?? null), "field", [], "array", true, true, false, 79)) ? ((($_v2 = ($context["criteria"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["field"] ?? null) : null)) : (""));
            // line 80
            yield "            ";
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(80))->call("dropdownArrayField", [(((("criteria" . ($context["prefix"] ?? null)) . "[") . ($context["num"] ?? null)) . "][field]"), ($context["value"] ?? null), ($context["values"] ?? null), "", ["rand" =>             // line 81
($context["rand"] ?? null), "full_width" => true, "input_class" => "col-12", "no_label" => true, "mb" => "mb-0"]], $context, 80, $this->source);
            // line 86
            yield "
         </div>

         ";
            // line 89
            $context["field_id"] = ((((("dropdown_criteria" . ($context["prefix"] ?? null)) . "[") . ($context["num"] ?? null)) . "][field]") . ($context["rand"] ?? null));
            // line 90
            yield "         ";
            $context["spanid"] = ((("SearchSpan" . ($context["normalized_itemtype"] ?? null)) . Twig\Extension\CoreExtension::replace(($context["prefix"] ?? null), ["[" => "_", "]" => "_"])) . ($context["num"] ?? null));
            // line 91
            yield "         <div class=\"col-auto\">
            <div class=\"row g-1\" id=\"";
            // line 92
            yield (string) $this->escaper->escape(($context["spanid"] ?? null), "html", null, true);
            yield "\">
               ";
            // line 93
            $context["used_itemtype"] = (((($context["itemtype"] ?? null) == "AllAssets")) ? ("Computer") : (($context["itemtype"] ?? null)));
            // line 94
            yield "               ";
            $context["searchtype"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["criteria"] ?? null), "searchtype", [], "array", true, true, false, 94)) ? (Twig\Extension\CoreExtension::default((($_v3 = ($context["criteria"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["searchtype"] ?? null) : null), "")) : (""));
            // line 95
            yield "
               ";
            // line 96
            $context["params"] = ["itemtype" =>             // line 97
($context["used_itemtype"] ?? null), "_idor_token" => Session::getNewIDORToken(            // line 98
($context["used_itemtype"] ?? null)), "field" =>             // line 99
($context["value"] ?? null), "searchtype" =>             // line 100
($context["searchtype"] ?? null), "value" =>             // line 101
($context["p_value"] ?? null), "num" =>             // line 102
($context["num"] ?? null), "p" =>             // line 103
($context["p"] ?? null), "mb" => "mb-0"];
            // line 106
            yield "               ";
            yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Glpi\\Search\\Input\\QueryBuilder::displaySearchoption", [($context["params"] ?? null)]), "html", null, true);
            yield "
            </div>

            ";
            // line 109
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Ajax::updateItemOnSelectEvent", [            // line 110
($context["field_id"] ?? null),             // line 111
($context["spanid"] ?? null), ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("root_doc") . "/ajax/search.php"), Twig\Extension\CoreExtension::merge(            // line 113
($context["params"] ?? null), ["action" => "display_searchoption", "field" => "__VALUE__"])]);
            // line 118
            yield "         </div>
      </div>
   </div>
";
        }
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/search/query_builder/criteria.html.twig";
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
        return array (  195 => 118,  193 => 113,  192 => 111,  191 => 110,  190 => 109,  183 => 106,  181 => 103,  180 => 102,  179 => 101,  178 => 100,  177 => 99,  176 => 98,  175 => 97,  174 => 96,  171 => 95,  168 => 94,  166 => 93,  162 => 92,  159 => 91,  156 => 90,  154 => 89,  149 => 86,  147 => 81,  145 => 80,  142 => 79,  140 => 78,  136 => 76,  131 => 73,  128 => 68,  125 => 67,  123 => 66,  120 => 65,  118 => 64,  115 => 63,  107 => 58,  103 => 57,  100 => 56,  98 => 55,  88 => 53,  84 => 51,  82 => 50,  81 => 49,  80 => 48,  78 => 47,  76 => 46,  73 => 45,  71 => 44,  70 => 43,  69 => 42,  68 => 41,  66 => 40,  64 => 39,  61 => 38,  59 => 37,  57 => 36,  55 => 35,  52 => 34,  50 => 33,  47 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/search/query_builder/criteria.html.twig", "/var/www/html/glpi/templates/components/search/query_builder/criteria.html.twig");
    }
}
