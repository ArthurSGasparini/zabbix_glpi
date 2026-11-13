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

/* pages/admin/profile/legend.html.twig */
class __TwigTemplate_a8bc985b18dd000ffdc0614905e9b29f extends Template
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
<table class=\"table table-borderless table-sm w-auto\">
    <tr>
        <td class=\"text-decoration-underline fw-bold px-2\">";
        // line 35
        yield (string) $this->escaper->escape(__("Caption"), "html", null, true);
        yield "</td>
        <td class=\"table-secondary border-1\" style=\"width: 15px\"></td>
        <td class=\"fw-bold px-2\">";
        // line 37
        yield (string) $this->escaper->escape(__("Global right"), "html", null, true);
        yield "</td>
    </tr>
    <tr>
        <td></td>
        <td class=\"border-1\" style=\"width:15px;\"></td>
        <td class=\"fw-bold px-2\">";
        // line 42
        yield (string) $this->escaper->escape(__("Entity right"), "html", null, true);
        yield "</td>
    </tr>
</table>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/profile/legend.html.twig";
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
        return array (  65 => 42,  57 => 37,  52 => 35,  47 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/profile/legend.html.twig", "/var/www/html/glpi/templates/pages/admin/profile/legend.html.twig");
    }
}
