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

/* components/form/dates.html.twig */
class __TwigTemplate_f6e845c1da4c2e43e7b61154a818e6e2 extends Template
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
        $context["withtemplate"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "withtemplate", [], "array", true, true, false, 33) &&  !(null === (($_v0 = ($context["params"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["withtemplate"] ?? null) : null)))) ? ((($_v1 = ($context["params"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["withtemplate"] ?? null) : null)) : (""));
        // line 34
        yield "
";
        // line 35
        if ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 35)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 36
            yield "<div class=\"row\">
   ";
            // line 37
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["date_creation"], "method", false, false, false, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 38
                yield "   <div class=\"col-sm-6 col-12\">
      ";
                // line 39
                yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::sprintf(__("Created on %s"), $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 39)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["date_creation"] ?? null) : null))), "html", null, true);
                yield "
   </div>
   ";
            }
            // line 42
            yield "
   ";
            // line 43
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["date_mod"], "method", false, false, false, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 44
                yield "   <div class=\"col-sm-6 col-12\">
      ";
                // line 45
                yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::sprintf(__("Last update on %s"), $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($_v3 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 45)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["date_mod"] ?? null) : null))), "html", null, true);
                yield "
   </div>
   ";
            }
            // line 48
            yield "</div>
";
        }
        // line 50
        yield "
";
        // line 51
        if (((array_key_exists("withtemplate", $context) && (($context["withtemplate"] ?? null) > 0)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (($_v4 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 51)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["template_name"] ?? null) : null)) > 0))) {
            // line 52
            yield "<div class=\"row\">
   <div class=\"col-12\">
      ";
            // line 54
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::sprintf(__("Created from the template %s"), (($_v5 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 54)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["template_name"] ?? null) : null)), "html", null, true);
            yield "
   </div>
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
        return "components/form/dates.html.twig";
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
        return array (  98 => 54,  94 => 52,  92 => 51,  89 => 50,  85 => 48,  79 => 45,  76 => 44,  74 => 43,  71 => 42,  65 => 39,  62 => 38,  60 => 37,  57 => 36,  55 => 35,  52 => 34,  50 => 33,  47 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/form/dates.html.twig", "/var/www/html/glpi/templates/components/form/dates.html.twig");
    }
}
