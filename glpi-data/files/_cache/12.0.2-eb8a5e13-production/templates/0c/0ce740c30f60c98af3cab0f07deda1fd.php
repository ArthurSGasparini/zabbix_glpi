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

/* pages/admin/profile/admin.html.twig */
class __TwigTemplate_48c72b5394f1794cec266996309cee1b extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 34
        return $this->parent ??= $this->load("pages/admin/profile/base_tab.html.twig", 34);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 33
        $context["show_legend"] = true;
        // line 34
        $this->parent = $this->load("pages/admin/profile/base_tab.html.twig", 34);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 36
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 37
        yield "    ";
        yield (string) $this->getMacroNamespace()->call("displayRightsMatrix", [($context["item"] ?? null), "central", "admin", "general", __("Administration")], $context, 37, $this->source);
        yield "
    ";
        // line 38
        yield (string) $this->getMacroNamespace()->call("displayRightsMatrix", [($context["item"] ?? null), "central", "admin", "inventory", __("Inventory")], $context, 38, $this->source);
        yield "
    ";
        // line 39
        yield (string) $this->getMacroNamespace()->call("displayRightsMatrix", [($context["item"] ?? null), "central", "admin", "rules", _n("Rule", "Rules", Session::getPluralNumber())], $context, 39, $this->source);
        yield "
    ";
        // line 40
        yield (string) $this->getMacroNamespace()->call("displayRightsMatrix", [($context["item"] ?? null), "central", "admin", "dictionaries", __("Dropdowns dictionary")], $context, 40, $this->source);
        yield "
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/profile/admin.html.twig";
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
        return array (  76 => 40,  72 => 39,  68 => 38,  63 => 37,  56 => 36,  51 => 34,  49 => 33,  42 => 34,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/profile/admin.html.twig", "/var/www/html/glpi/templates/pages/admin/profile/admin.html.twig");
    }
}
