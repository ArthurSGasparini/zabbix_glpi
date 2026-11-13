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

/* pages/admin/add_profile_authorization.html.twig */
class __TwigTemplate_b10abe602d0c5eaece517d79c32f1456 extends Template
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
        $macros["inputs"] = $this->macros["inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 33)->unwrap()->getMacroNamespace();
        // line 34
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 34)->unwrap()->getMacroNamespace();
        // line 35
        yield "
";
        // line 36
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 37
        $context["field_options"] = ["field_class" => "col-4"];
        // line 40
        yield "<div>
    <form method=\"post\" action=\"";
        // line 41
        yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Profile_User"), "html", null, true);
        yield "\" data-submit-once>
        <div class=\"card-body d-flex flex-wrap p-0 mt-n3\">
            <div class=\"col-12 flex-column\">
                <div class=\"d-flex flex-row flex-wrap flex-xl-nowrap\">
                    <div class=\"row flex-row align-items-start flex-grow-1\">
                        <div class=\"row flex-row\">
                            ";
        // line 47
        yield (string) ($macros["inputs"] ?? $this->throwUninitializedMacroNamespace(47))->call("hidden", [$this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeForeignKey(($context["source_itemtype"] ?? null)), ($context["source_items_id"] ?? null)], $context, 47, $this->source);
        yield "
                            ";
        // line 48
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(48))->call("largeTitle", [__("Add an authorization to a user")], $context, 48, $this->source);
        yield "
                            ";
        // line 49
        if ((($context["source_itemtype"] ?? null) != "Entity")) {
            // line 50
            yield "                                ";
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(50))->call("dropdownField", ["Entity", "entities_id", $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity"), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Entity"), Twig\Extension\CoreExtension::merge(["entity" => $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveentities")],             // line 52
($context["field_options"] ?? null))], $context, 50, $this->source);
            yield "
                            ";
        }
        // line 54
        yield "                            ";
        if ((($context["source_itemtype"] ?? null) != "Profile")) {
            // line 55
            yield "                                ";
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(55))->call("dropdownField", ["Profile", "profiles_id", null, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Profile"), Twig\Extension\CoreExtension::merge(["condition" => ["WHERE" => $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Profile::getUnderActiveProfileRestrictCriteria")], "display_emptychoice" => false],             // line 60
($context["field_options"] ?? null))], $context, 55, $this->source);
            yield "
                            ";
        }
        // line 62
        yield "                            ";
        if ((($context["source_itemtype"] ?? null) != "User")) {
            // line 63
            yield "                                ";
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(63))->call("dropdownField", ["User", "users_id", null, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("User"), Twig\Extension\CoreExtension::merge(["display_emptychoice" => false, "entity" => $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveentities"), "right" => "all", "used" =>             // line 67
($context["used_users"] ?? null)],             // line 68
($context["field_options"] ?? null))], $context, 63, $this->source);
            yield "
                            ";
        }
        // line 70
        yield "                            ";
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(70))->call("dropdownYesNo", ["is_recursive", 0, __("Recursive"), ($context["field_options"] ?? null)], $context, 70, $this->source);
        yield "
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"card-body mx-n2 border-top d-flex flex-row-reverse align-items-start flex-wrap py-2\">
            ";
        // line 77
        yield (string) ($macros["inputs"] ?? $this->throwUninitializedMacroNamespace(77))->call("submit", ["add", _x("button", "Add"), "", ["icon" => "ti ti-plus"]], $context, 77, $this->source);
        yield "
        </div>
    </form>
</div>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/add_profile_authorization.html.twig";
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
        return array (  122 => 77,  111 => 70,  106 => 68,  105 => 67,  103 => 63,  100 => 62,  95 => 60,  93 => 55,  90 => 54,  85 => 52,  83 => 50,  81 => 49,  77 => 48,  73 => 47,  64 => 41,  61 => 40,  59 => 37,  57 => 36,  54 => 35,  52 => 34,  50 => 33,  47 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/add_profile_authorization.html.twig", "/var/www/html/glpi/templates/pages/admin/add_profile_authorization.html.twig");
    }
}
