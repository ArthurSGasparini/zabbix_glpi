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

/* pages/admin/plugins/list_suspend_banner.html.twig */
class __TwigTemplate_8bf95b166e8a14351fc7bddb2889f5e6 extends Template
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
        if ((($tmp = ($context["execution_suspended"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 34
            yield "    <div class=\"alert alert-warning\" role=\"alert\">
        ";
            // line 35
            yield (string) $this->escaper->escape(__("The execution of the plugins is suspended."), "html", null, true);
            yield "
        <form class=\"d-inline\" action=\"";
            // line 36
            yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Plugin"), "html", null, true);
            yield "\" method=\"POST\">
            <button type=\"submit\" name=\"action\" value=\"resume_all_execution\" class=\"btn btn-sm btn-primary me-1\">
                <i class=\"ti ti-player-play-filled\" aria-hidden=\"true\"></i>
                <span>";
            // line 39
            yield (string) $this->escaper->escape(__("Resume execution of all active plugins"), "html", null, true);
            yield "</span>
            </button>
        </form>
    </div>
";
        } else {
            // line 44
            yield "    <div class=\"text-end mb-3\">
        <form class=\"d-inline\" action=\"";
            // line 45
            yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Plugin"), "html", null, true);
            yield "\" method=\"POST\">
            <button type=\"submit\" name=\"action\" value=\"suspend_all_execution\" class=\"btn btn-primary me-1\">
                <i class=\"ti ti-player-pause-filled\" aria-hidden=\"true\"></i>
                <span>";
            // line 48
            yield (string) $this->escaper->escape(__("Suspend execution of all plugins"), "html", null, true);
            yield "</span>
            </button>
        </form>
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
        return "pages/admin/plugins/list_suspend_banner.html.twig";
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
        return array (  82 => 48,  76 => 45,  73 => 44,  65 => 39,  59 => 36,  55 => 35,  52 => 34,  50 => 33,  47 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/plugins/list_suspend_banner.html.twig", "/var/www/html/glpi/templates/pages/admin/plugins/list_suspend_banner.html.twig");
    }
}
