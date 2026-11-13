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

/* pages/admin/profile/form.html.twig */
class __TwigTemplate_0c955ac5087c38f74492510c4f441c32 extends Template
{
    private Source $source;
    /**
     * @var array<string, MacroNamespace>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'form_fields' => [$this, 'block_form_fields'],
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
        // line 33
        $this->parent = $this->load("generic_show_form.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 36
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 37
        yield "    ";
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(37))->call("textField", ["name", (($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 37)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["name"] ?? null) : null), __("Name")], $context, 37, $this->source);
        yield "
    ";
        // line 38
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(38))->call("textareaField", ["comment", (($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 38)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["comment"] ?? null) : null), _n("Comment", "Comments", Session::getPluralNumber())], $context, 38, $this->source);
        yield "
    ";
        // line 39
        yield from $this->unwrap()->yieldBlock('more_fields', $context, $blocks);
        return; yield;
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_more_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 40
        yield "        ";
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(40))->call("checkboxField", ["is_default", (($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 40)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["is_default"] ?? null) : null), __("Default profile")], $context, 40, $this->source);
        yield "
        ";
        // line 41
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(41))->call("nullField", [], $context, 41, $this->source);
        yield "
        ";
        // line 42
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(42))->call("dropdownArrayField", ["interface", (($_v3 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 42)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["interface"] ?? null) : null), ($context["interfaces"] ?? null), __("Profile\x27s interface"), ["readonly" => ((($tmp =         // line 43
($context["last_super_admin_profile"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && ((($_v4 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 43)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["interface"] ?? null) : null) == "central"))]], $context, 42, $this->source);
        // line 44
        yield "
        ";
        // line 45
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(45))->call("nullField", [], $context, 45, $this->source);
        yield "
        ";
        // line 46
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(46))->call("checkboxField", ["_password_update", (($_v5 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 46)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["password_update"] ?? null) : null), __("Update own password")], $context, 46, $this->source);
        yield "
        ";
        // line 47
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(47))->call("nullField", [], $context, 47, $this->source);
        yield "
        ";
        // line 48
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(48))->call("checkboxField", ["create_ticket_on_login", (($_v6 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 48)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["create_ticket_on_login"] ?? null) : null), __("Ticket creation form on login")], $context, 48, $this->source);
        yield "
    ";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/profile/form.html.twig";
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
        return array (  111 => 48,  107 => 47,  103 => 46,  99 => 45,  96 => 44,  94 => 43,  93 => 42,  89 => 41,  84 => 40,  73 => 39,  69 => 38,  64 => 37,  57 => 36,  52 => 33,  50 => 34,  43 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/profile/form.html.twig", "/var/www/html/glpi/templates/pages/admin/profile/form.html.twig");
    }
}
