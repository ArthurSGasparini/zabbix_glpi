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

/* pages/setup/authentication/sync.html.twig */
class __TwigTemplate_63abfb15a274546e1e27e4d729e1ddbe extends Template
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
        // line 36
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 37
        yield "
<form method=\"post\" action=\"";
        // line 38
        yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("User"), "html", null, true);
        yield "\">
   ";
        // line 39
        yield (string) ($macros["inputs"] ?? $this->throwUninitializedMacroNamespace(39))->call("hidden", ["id", CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "getID", [], "any", false, false, false, 39)], $context, 39, $this->source);
        yield "

   ";
        // line 41
        if (CoreExtension::inFilter((($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "fields", [], "any", false, false, false, 41)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["authtype"] ?? null) : null), [Twig\Extension\CoreExtension::constant("Auth::LDAP")])) {
            // line 42
            yield "      ";
            yield (string) ($macros["inputs"] ?? $this->throwUninitializedMacroNamespace(42))->call("submit", ["force_ldap_resynch", __("Force synchronization"), 1, ["icon" => "ti ti-refresh"]], $context, 42, $this->source);
            // line 44
            yield "
      ";
            // line 45
            yield (string) ($macros["inputs"] ?? $this->throwUninitializedMacroNamespace(45))->call("submit", ["clean_ldap_fields", __("Clean LDAP fields and force synchronisation"), 1, ["icon" => "ti ti-recycle"]], $context, 45, $this->source);
            // line 47
            yield "
   ";
        }
        // line 49
        yield "   ";
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(49))->call("htmlField", ["", $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Auth::dropdown", [["name" => "authtype", "rand" =>         // line 51
($context["rand"] ?? null), "display" => false]]), __("Change of the authentication method"), ["is_horizontal" => false]], $context, 49, $this->source);
        // line 55
        yield "
   ";
        // line 56
        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Ajax::updateItemOnSelectEvent", [("dropdown_authtype" . ($context["rand"] ?? null)), "show_massiveaction_field", $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/dropdownMassiveActionAuthMethods.php"), ["authtype" => "__VALUE__", "name" => "change_auth_method"]]);
        // line 60
        yield "   <span id=\"show_massiveaction_field\"></span>
</form>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/setup/authentication/sync.html.twig";
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
        return array (  94 => 60,  92 => 56,  89 => 55,  87 => 51,  85 => 49,  81 => 47,  79 => 45,  76 => 44,  73 => 42,  71 => 41,  66 => 39,  62 => 38,  59 => 37,  57 => 36,  54 => 35,  52 => 34,  50 => 33,  47 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/setup/authentication/sync.html.twig", "/var/www/html/glpi/templates/pages/setup/authentication/sync.html.twig");
    }
}
