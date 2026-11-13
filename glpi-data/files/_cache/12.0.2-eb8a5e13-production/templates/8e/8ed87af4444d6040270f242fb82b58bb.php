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

/* pages/setup/general/base_form.html.twig */
class __TwigTemplate_53ab309650e7f77e88eb00785de0b491 extends Template
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
            'config_fields' => [$this, 'block_config_fields'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 32
        yield "
";
        // line 33
        $context["form_path"] = ((array_key_exists("form_path", $context)) ? (Twig\Extension\CoreExtension::default(($context["form_path"] ?? null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Config"))) : ($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Config")));
        // line 34
        if ((($tmp = ($context["canedit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 35
            yield "    <form name=\"form\"
          action=\"";
            // line 36
            yield (string) $this->escaper->escape(($context["form_path"] ?? null), "html", null, true);
            yield "\"
          method=\"post\"
          data-track-changes=\"true\">
";
        }
        // line 40
        yield "
<div class=\"row\">
    ";
        // line 42
        yield from $this->unwrap()->yieldBlock('config_fields', $context, $blocks);
        // line 44
        yield "</div>

";
        // line 46
        if ((($tmp = ($context["canedit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 47
            yield "        <div class=\"card-footer mx-n2 d-flex\">
            <button type=\"submit\" name=\"update\" value=\"1\" class=\"ms-auto btn btn-primary\">
                <i class=\"ti ti-device-floppy\" aria-hidden=\"true\"></i>
                <span>";
            // line 50
            yield (string) $this->escaper->escape(_x("button", "Save"), "html", null, true);
            yield "</span>
            </button>
        </div>
    </form>
";
        }
        return; yield;
    }

    // line 42
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_config_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 43
        yield "    ";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/setup/general/base_form.html.twig";
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
        return array (  100 => 43,  93 => 42,  82 => 50,  77 => 47,  75 => 46,  71 => 44,  69 => 42,  65 => 40,  58 => 36,  55 => 35,  53 => 34,  51 => 33,  48 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/setup/general/base_form.html.twig", "/var/www/html/glpi/templates/pages/setup/general/base_form.html.twig");
    }
}
