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

/* pages/admin/group_user.html.twig */
class __TwigTemplate_8b603a6a1f8b53b4d5884bbef8eb5e01 extends Template
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
        $macros["inputs"] = $this->macros["inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 34)->unwrap()->getMacroNamespace();
        // line 35
        yield "
";
        // line 37
        yield "<div class=\"asset\">
    <form name=\"asset_form\" method=\"post\" action=\"";
        // line 38
        yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Group_User"), "html", null, true);
        yield "\" enctype=\"multipart/form-data\" data-submit-once>
        <div class=\"d-flex flex-row flex-wrap\">
            ";
        // line 40
        $context["field_options"] = ["field_class" => "col-4"];
        // line 43
        yield "            ";
        if (( !array_key_exists("source_itemtype", $context) || (($context["source_itemtype"] ?? null) == "User"))) {
            // line 44
            yield "                ";
            yield (string) ($macros["inputs"] ?? $this->throwUninitializedMacroNamespace(44))->call("hidden", ["users_id", (($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 44)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["users_id"] ?? null) : null)], $context, 44, $this->source);
            yield "
                ";
            // line 45
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(45))->call("dropdownField", ["Group", "groups_id", ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 45), "groups_id", [], "array", true, true, false, 45)) ? (Twig\Extension\CoreExtension::default((($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 45)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["groups_id"] ?? null) : null), 0)) : (0)), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Group"), (["used" =>             // line 46
($context["used"] ?? null), "condition" => ["is_usergroup" => 1], "entity" => $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity"), "entity_sons" => true] +             // line 52
($context["field_options"] ?? null))], $context, 45, $this->source);
            yield "
            ";
        }
        // line 54
        yield "            ";
        if (( !array_key_exists("source_itemtype", $context) || (($context["source_itemtype"] ?? null) == "Group"))) {
            // line 55
            yield "                ";
            yield (string) ($macros["inputs"] ?? $this->throwUninitializedMacroNamespace(55))->call("hidden", ["groups_id", (($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 55)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["groups_id"] ?? null) : null)], $context, 55, $this->source);
            yield "
                ";
            // line 56
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(56))->call("dropdownField", ["User", "users_id", ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 56), "users_id", [], "array", true, true, false, 56)) ? (Twig\Extension\CoreExtension::default((($_v3 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 56)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["users_id"] ?? null) : null), 0)) : (0)), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("User"), (["used" =>             // line 57
($context["used"] ?? null), "entity" => ((            // line 58
array_key_exists("entityrestrict", $context)) ? (Twig\Extension\CoreExtension::default(($context["entityrestrict"] ?? null), $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity"))) : ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity"))), "right" => "all", "with_no_right" => true] +             // line 61
($context["field_options"] ?? null))], $context, 56, $this->source);
            yield "
            ";
        }
        // line 63
        yield "
            ";
        // line 64
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(64))->call("dropdownYesNo", ["is_manager", (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 64), "is_manager", [], "array", true, true, false, 64) &&  !(null === (($_v4 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 64)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["is_manager"] ?? null) : null)))) ? ((($_v5 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 64)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["is_manager"] ?? null) : null)) : (false)), _n("Manager", "Managers", 1), ($context["field_options"] ?? null)], $context, 64, $this->source);
        yield "
            ";
        // line 65
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(65))->call("dropdownYesNo", ["is_userdelegate", (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 65), "is_userdelegate", [], "array", true, true, false, 65) &&  !(null === (($_v6 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 65)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["is_userdelegate"] ?? null) : null)))) ? ((($_v7 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 65)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["is_userdelegate"] ?? null) : null)) : (false)), __("Delegatee"), ($context["field_options"] ?? null)], $context, 65, $this->source);
        yield "
        </div>
        <div class=\"d-flex flex-row-reverse pe-2\">
            ";
        // line 68
        yield (string) ($macros["inputs"] ?? $this->throwUninitializedMacroNamespace(68))->call("submit", ["add", _x("button", "Add"), 1, ["icon" => "ti ti-plus"], ($context["field_options"] ?? null)], $context, 68, $this->source);
        yield "
        </div>
    </form>
</div>
<hr class=\"my-2\">
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/group_user.html.twig";
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
        return array (  111 => 68,  105 => 65,  101 => 64,  98 => 63,  93 => 61,  92 => 58,  91 => 57,  90 => 56,  85 => 55,  82 => 54,  77 => 52,  76 => 46,  75 => 45,  70 => 44,  67 => 43,  65 => 40,  60 => 38,  57 => 37,  54 => 35,  52 => 34,  50 => 33,  47 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/group_user.html.twig", "/var/www/html/glpi/templates/pages/admin/group_user.html.twig");
    }
}
