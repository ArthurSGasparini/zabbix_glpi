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

/* __string_template__0bc8cc32591c9958681bfd8ee6d1cc15 */
class __TwigTemplate_01ccfd14f2651de2808bf2a3ac76f69f extends Template
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
        yield "            ";
        if ((($tmp = ($context["mini"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "                <div class=\x27card mb-4 d-none d-md-block dashboard-card\x27>
                    <div class=\x27card-body p-2\x27>
            ";
        }
        // line 5
        yield "            <div class=\"dashboard ";
        yield (string) $this->escaper->escape(($context["embed_class"] ?? null), "html", null, true);
        yield " ";
        yield (string) $this->escaper->escape(($context["mini_class"] ?? null), "html", null, true);
        yield "\" id=\"dashboard-";
        yield (string) $this->escaper->escape(($context["rand"] ?? null), "html", null, true);
        yield "\">
                <span class=\x27glpi_logo\x27></span>
                ";
        // line 7
        yield (string) ($context["toolbars"] ?? null);
        yield "
                ";
        // line 8
        yield (string) ($context["filters"] ?? null);
        yield "
                <div class=\"grid-stack grid-stack-";
        // line 9
        yield (string) $this->escaper->escape(($context["grid_cols"] ?? null), "html", null, true);
        yield "\"
                id=\"grid-stack-";
        // line 10
        yield (string) $this->escaper->escape(($context["rand"] ?? null), "html", null, true);
        yield "\"
                gs-column=\"";
        // line 11
        yield (string) $this->escaper->escape(($context["grid_cols"] ?? null), "html", null, true);
        yield "\"
                gs-min-row=\"";
        // line 12
        yield (string) $this->escaper->escape(($context["grid_rows"] ?? null), "html", null, true);
        yield "\"
                style=\"width: 100%; --gs-col-count: ";
        // line 13
        yield (string) $this->escaper->escape(($context["grid_cols"] ?? null), "html", null, true);
        yield "; --gs-row-count: ";
        yield (string) $this->escaper->escape(($context["grid_rows"] ?? null), "html", null, true);
        yield "; --gs-cell-margin: ";
        yield (string) $this->escaper->escape(($context["cell_margin"] ?? null), "html", null, true);
        yield "px;\">
                    ";
        // line 14
        yield (string) ($context["grid_guide"] ?? null);
        yield "
                    ";
        // line 15
        yield (string) ($context["gridstack_items"] ?? null);
        yield "
                </div>
            </div>
            ";
        // line 18
        if ((($tmp = ($context["mini"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 19
            yield "                    </div>
                </div>
            ";
        }
        // line 22
        yield "            <script type=\"module\">
                import(\x27/js/modules/Dashboard/Dashboard.js\x27).then((m) => {
                    new m.GLPIDashboard(";
        // line 24
        yield (string) json_encode(($context["js_params"] ?? null));
        yield ");
                });
            </script>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "__string_template__0bc8cc32591c9958681bfd8ee6d1cc15";
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
        return array (  118 => 24,  114 => 22,  109 => 19,  107 => 18,  101 => 15,  97 => 14,  89 => 13,  85 => 12,  81 => 11,  77 => 10,  73 => 9,  69 => 8,  65 => 7,  55 => 5,  50 => 2,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__0bc8cc32591c9958681bfd8ee6d1cc15", "");
    }
}
