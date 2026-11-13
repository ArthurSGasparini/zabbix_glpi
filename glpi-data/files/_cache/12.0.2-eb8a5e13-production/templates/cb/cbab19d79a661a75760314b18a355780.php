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

/* __string_template__0384d6611694fa0ee654f77400b356a1 */
class __TwigTemplate_4223d1e1f3ad9f1e4c2e20e1bf4077f9 extends Template
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
        // line 1
        yield "                <div class=\"firstbloc\">
                    ";
        // line 2
        if ((($tmp = ($context["show_add"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 3
            yield "                        <a class=\"btn btn-primary ms-1\" href=\"";
            yield (string) $this->escaper->escape((((($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("ManualLink") . "?itemtype=") . CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 3)) . "&items_id=") . (($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 3)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[(($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getIndexName", [], "method", false, false, false, 3)) instanceof \Stringable && (is_array($_v0) || $_v0 instanceof \ArrayObject || $_v0 instanceof \ArrayIterator) ? (string) $_v1 : $_v1)] ?? null) : null)), "html", null, true);
            yield "\">
                            <i class=\"ti ti-link\" aria-hidden=\"true\"></i>
                            <span>";
            // line 5
            yield (string) $this->escaper->escape(($context["add_msg"] ?? null), "html", null, true);
            yield "</span>
                        </a>
                    ";
        }
        // line 8
        yield "                    ";
        if ((($tmp = ($context["show_configure"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 9
            yield "                        <a class=\"btn btn-primary ms-1\" href=\"";
            yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeSearchPath("Link"), "html", null, true);
            yield "\">
                            <i class=\"ti ti-settings\" aria-hidden=\"true\"></i>
                            <span>";
            // line 11
            yield (string) $this->escaper->escape(($context["configure_msg"] ?? null), "html", null, true);
            yield "</span>
                        </a>
                    ";
        }
        // line 14
        yield "                </div>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "__string_template__0384d6611694fa0ee654f77400b356a1";
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
        return array (  79 => 14,  73 => 11,  67 => 9,  64 => 8,  58 => 5,  52 => 3,  50 => 2,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__0384d6611694fa0ee654f77400b356a1", "");
    }
}
