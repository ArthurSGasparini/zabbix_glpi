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

/* components/dropdown/comments.html.twig */
class __TwigTemplate_992ef6efc1a5b8630770d7c6e2207456 extends Template
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
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["extra_rows"] ?? null)) > 0)) {
            // line 34
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["extra_rows"] ?? null));
            foreach ($context['_seq'] as $context["label"] => $context["value"]) {
                // line 35
                yield "        <span class=\"b\">";
                yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::sprintf(__("%1\$s: %2\$s"), $context["label"], ""), "html", null, true);
                yield "</span>";
                yield (string) Twig\Extension\CoreExtension::nl2br($this->escaper->escape($context["value"], "html", null, true));
                yield "<br />
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['label'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 37
            yield "    ";
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["comment"] ?? null))) {
                // line 38
                yield "        <span class=\"b\">";
                yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::sprintf(__("%1\$s: %2\$s"), __("Comments"), ""), "html", null, true);
                yield "</span>
    ";
            }
        }
        // line 41
        yield "
";
        // line 42
        yield (string) Twig\Extension\CoreExtension::nl2br($this->escaper->escape(($context["comment"] ?? null), "html", null, true));
        yield "
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/dropdown/comments.html.twig";
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
        return array (  82 => 42,  79 => 41,  72 => 38,  69 => 37,  57 => 35,  52 => 34,  50 => 33,  47 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/dropdown/comments.html.twig", "/var/www/html/glpi/templates/components/dropdown/comments.html.twig");
    }
}
