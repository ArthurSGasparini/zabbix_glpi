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

/* pages/setup/general/api_apiclients_section.html.twig */
class __TwigTemplate_36b04ccd80cedb312d90637cf4a045ce extends Template
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
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(35))->call("largeTitle", [__("API clients (Legacy API)"), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeIcon("APIClient")], $context, 35, $this->source);
        yield "
";
        // line 36
        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::displayTitle", ["", "", "", ["apiclient.form.php" => __("Add API client")]]);
        // line 39
        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Search::show", ["APIClient"]);
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/setup/general/api_apiclients_section.html.twig";
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
        return array (  58 => 39,  56 => 36,  52 => 35,  49 => 34,  47 => 33,  44 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/setup/general/api_apiclients_section.html.twig", "/var/www/html/glpi/templates/pages/setup/general/api_apiclients_section.html.twig");
    }
}
