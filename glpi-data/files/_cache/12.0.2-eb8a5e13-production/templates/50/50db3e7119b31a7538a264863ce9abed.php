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

/* pages/login_error.html.twig */
class __TwigTemplate_32984946bf6ad6ae9d0b94d212d5b634 extends Template
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

        $this->blocks = [
            'content_block' => [$this, 'block_content_block'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 33
        return $this->parent ??= $this->load("layout/page_card_notlogged.html.twig", 33);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("layout/page_card_notlogged.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 35
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 36
        yield "<div class=\"alert alert-warning\">
    <div class=\"d-flex align-items-center\">
        <div class=\"me-4\">
            <i class=\"ti ti-alert-triangle fa-2x\" aria-hidden=\"true\"></i>
        </div>
        <div>
            <h4 class=\"alert-title\">
                ";
        // line 43
        yield (string) $this->escaper->escape(_n("Error", "Errors", 1), "html", null, true);
        yield "
            </h4>
            <div>
                ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["errors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 47
            yield "                    ";
            yield (string) $this->escaper->escape($context["error"], "html", null, true);
            yield "<br />
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 49
        yield "            </div>

            <a href=\"";
        // line 51
        yield (string) $this->escaper->escape(($context["login_url"] ?? null), "html", null, true);
        yield "\" class=\"btn btn-primary mt-3\">
                <i class=\"ti ti-login\" aria-hidden=\"true\"></i>
                <span>";
        // line 53
        yield (string) $this->escaper->escape(__("Log in again"), "html", null, true);
        yield "</span>
            </a>
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
        return "pages/login_error.html.twig";
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
        return array (  101 => 53,  96 => 51,  92 => 49,  82 => 47,  78 => 46,  72 => 43,  63 => 36,  56 => 35,  45 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/login_error.html.twig", "/var/www/html/glpi/templates/pages/login_error.html.twig");
    }
}
