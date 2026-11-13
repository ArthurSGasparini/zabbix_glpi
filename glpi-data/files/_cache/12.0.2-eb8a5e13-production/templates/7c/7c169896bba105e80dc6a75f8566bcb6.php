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

/* components/search/query_builder/sort/criteria.html.twig */
class __TwigTemplate_b9bd331dc33c6d33e394d8c5e18b0b82 extends Template
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
        yield "
";
        // line 35
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 36
        $context["dd_options"] = ["rand" =>         // line 37
($context["rand"] ?? null), "full_width" => true, "input_class" => "col-12", "no_label" => true, "mb" => "mb-0"];
        // line 43
        yield "
";
        // line 44
        $context["order_dropdown_template"] = new Markup("    (option) => {
        if (!option.id) {
            return _.escape(option.text);
        }

        let container = document.createElement(\x27span\x27);
        if (option.id === \x27ASC\x27) {
            container.innerHTML = \x27<i class=\"ti ti-sort-ascending me-1\" aria-hidden=\"true\"></i>\x27 + _.escape(option.text);
        } else if (option.id === \x27DESC\x27) {
            container.innerHTML = \x27<i class=\"ti ti-sort-descending me-1\" aria-hidden=\"true\"></i>\x27 + _.escape(option.text);
        }

        return container;
    }
", $this->env->getCharset());
        // line 60
        yield "<div class=\"list-group-item border-0 p-2\" id=\"";
        yield (string) $this->escaper->escape(($context["rowid"] ?? null), "html", null, true);
        yield "\">
    <div class=\"row g-1\">
        <div class=\"col-auto\">
            <button class=\"btn btn-sm btn-icon btn-ghost-secondary remove-order-criteria\" type=\"button\" data-rowid=\"";
        // line 63
        yield (string) $this->escaper->escape(($context["rowid"] ?? null), "html", null, true);
        yield "\"
                    data-bs-toggle=\"tooltip\" data-bs-placement=\"left\" title=\"";
        // line 64
        yield (string) $this->escaper->escape(__("Delete a sort"), "html", null, true);
        yield "\">
                <i class=\"ti ti-square-rounded-minus\" aria-hidden=\"true\"></i>
            </button>
        </div>

        <div class=\"col-auto\">
            ";
        // line 70
        $context["sort_value"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "soption_id", [], "array", true, true, false, 70) &&  !(null === (($_v0 = ($context["order"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["soption_id"] ?? null) : null)))) ? ((($_v1 = ($context["order"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["soption_id"] ?? null) : null)) : (""));
        // line 71
        yield "            ";
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(71))->call("dropdownArrayField", [("sort" . "[]"), ($context["sort_value"] ?? null), ($context["values"] ?? null), "", Twig\Extension\CoreExtension::merge(($context["dd_options"] ?? null), ["used" => (((        // line 72
array_key_exists("used", $context) &&  !(null === $context["used"]))) ? ($context["used"]) : ([]))])], $context, 71, $this->source);
        // line 73
        yield "
        </div>

        <div class=\"col-auto\">
            ";
        // line 77
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(77))->call("dropdownArrayField", [("order" . "[]"), (($_v2 = ($context["order"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["order"] ?? null) : null), ["ASC" => __("ASC"), "DESC" => __("DESC")], "", Twig\Extension\CoreExtension::merge(        // line 80
($context["dd_options"] ?? null), ["templateResult" =>         // line 81
($context["order_dropdown_template"] ?? null), "templateSelection" =>         // line 82
($context["order_dropdown_template"] ?? null)])], $context, 77, $this->source);
        // line 83
        yield "
        </div>
    </div>
</div>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/search/query_builder/sort/criteria.html.twig";
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
        return array (  116 => 83,  114 => 82,  113 => 81,  112 => 80,  111 => 77,  105 => 73,  103 => 72,  101 => 71,  99 => 70,  90 => 64,  86 => 63,  79 => 60,  63 => 44,  60 => 43,  58 => 37,  57 => 36,  55 => 35,  52 => 34,  50 => 33,  47 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/search/query_builder/sort/criteria.html.twig", "/var/www/html/glpi/templates/components/search/query_builder/sort/criteria.html.twig");
    }
}
