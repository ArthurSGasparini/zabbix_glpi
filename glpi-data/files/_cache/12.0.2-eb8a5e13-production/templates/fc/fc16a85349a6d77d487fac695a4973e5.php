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

/* components/search/query_builder/search_option.html.twig */
class __TwigTemplate_e11f4d3fca17b81faf472f8bc10e8e80 extends Template
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
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["actions"] ?? null)) > 0)) {
            // line 37
            yield "   ";
            $context["searchtype_name"] = ((((($context["fieldname"] ?? null) . ($context["prefix"] ?? null)) . "[") . ($context["num"] ?? null)) . "][searchtype]");
            // line 38
            yield "   <div class=\"col-auto\">
      ";
            // line 39
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(39))->call("dropdownArrayField", [($context["searchtype_name"] ?? null), ($context["searchtype"] ?? null), ($context["actions"] ?? null), "", ["rand" =>             // line 40
($context["rand"] ?? null), "full_width" => true, "input_class" => "col-12", "no_label" => true, "mb" => "mb-0"]], $context, 39, $this->source);
            // line 45
            yield "
   </div>
";
        }
        // line 48
        yield "
<div class=\"col-auto\" id=\"";
        // line 49
        yield (string) $this->escaper->escape(($context["dropdownname"] ?? null), "html", null, true);
        yield "\" data-itemtype=\"";
        yield (string) $this->escaper->escape(($context["itemtype"] ?? null), "html", null, true);
        yield "\" data-fieldname=\"";
        yield (string) $this->escaper->escape(($context["fieldname"] ?? null), "html", null, true);
        yield "\" data-prefix=\"";
        yield (string) $this->escaper->escape(($context["prefix"] ?? null), "html", null, true);
        yield "\" data-num=\"";
        yield (string) $this->escaper->escape(($context["num"] ?? null), "html", null, true);
        yield "\">
   ";
        // line 50
        $context["params"] = ["value" =>         // line 51
($context["value"] ?? null), "searchopt" =>         // line 52
($context["searchopt"] ?? null), "searchtype" =>         // line 53
($context["searchtype"] ?? null), "num" =>         // line 54
($context["num"] ?? null), "itemtype" =>         // line 55
($context["itemtype"] ?? null), "_idor_token" => Session::getNewIDORToken(        // line 56
($context["itemtype"] ?? null)), "from_meta" => ((        // line 57
array_key_exists("from_meta", $context)) ? (($context["from_meta"] ?? null)) : (false)), "prefix" =>         // line 58
($context["prefix"] ?? null), "p" =>         // line 59
($context["p"] ?? null)];
        // line 61
        yield "   ";
        yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Glpi\\Search\\Input\\QueryBuilder::displaySearchoptionValue", [($context["params"] ?? null)]), "html", null, true);
        yield "
</div>

";
        // line 64
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["actions"] ?? null)) > 0)) {
            // line 65
            yield "    ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Ajax::updateItemOnSelectEvent", [(("dropdown_" .             // line 66
($context["searchtype_name"] ?? null)) . ($context["rand"] ?? null)),             // line 67
($context["dropdownname"] ?? null), ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("root_doc") . "/ajax/search.php"), Twig\Extension\CoreExtension::merge(            // line 69
($context["params"] ?? null), ["action" => "display_searchoption_value", "searchtype" => "__VALUE__"])]);
        }
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/search/query_builder/search_option.html.twig";
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
        return array (  112 => 69,  111 => 67,  110 => 66,  108 => 65,  106 => 64,  99 => 61,  97 => 59,  96 => 58,  95 => 57,  94 => 56,  93 => 55,  92 => 54,  91 => 53,  90 => 52,  89 => 51,  88 => 50,  76 => 49,  73 => 48,  68 => 45,  66 => 40,  65 => 39,  62 => 38,  59 => 37,  57 => 36,  55 => 35,  52 => 34,  50 => 33,  47 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/search/query_builder/search_option.html.twig", "/var/www/html/glpi/templates/components/search/query_builder/search_option.html.twig");
    }
}
