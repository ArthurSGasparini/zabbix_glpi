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

/* pages/reauth/prompt.html.twig */
class __TwigTemplate_58672e192f73c059dc1b9b220c9ef657 extends Template
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
            'logo_block' => [$this, 'block_logo_block'],
            'header_block' => [$this, 'block_header_block'],
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
    public function block_logo_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 36
        yield "   <a href=\"";
        yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->indexPath(), "html", null, true);
        yield "\" title=\"";
        yield (string) $this->escaper->escape(__("Home"), "html", null, true);
        yield "\">
      <span class=\"glpi-logo mb-4\" title=\"GLPI\"></span>
   </a>
";
        return; yield;
    }

    // line 41
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 42
        yield "   <span class=\"card-title\">";
        yield (string) $this->escaper->escape(__("Confirmation required"), "html", null, true);
        yield "</span>
";
        return; yield;
    }

    // line 45
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 46
        yield "   ";
        if ((($tmp = (((array_key_exists("failed", $context) &&  !(null === $context["failed"]))) ? ($context["failed"]) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 47
            yield "       ";
            yield (string) $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("Alert:Danger", ["heading" => __("Authentication failure")]);
            yield "
   ";
        }
        // line 49
        yield "
   ";
        // line 50
        yield (string) $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("Alert:Warning", ["heading" => __("Sensitive area"), "content" => __("The action you requested may change GLPI behavior or display confidential data.")]);
        yield "

  <form method=\"";
        // line 52
        yield (string) $this->escaper->escape(($context["verify_http_method"] ?? null), "html", null, true);
        yield "\" action=\"";
        yield (string) $this->escaper->escape(($context["verify_url"] ?? null), "html", null, true);
        yield "\" data-submit-once autocomplete=\"off\">
     <div class=\"mb-3\">
        <label class=\"form-label\">";
        // line 54
        yield (string) $this->escaper->escape(($context["label"] ?? null), "html", null, true);
        yield "</label>
        ";
        // line 55
        yield from $this->load(($context["template"] ?? null), 55)->unwrap()->yield($context);
        // line 56
        yield "     </div>

     <div class=\"d-flex justify-content-end gap-2\">

         ";
        // line 61
        yield "        <a href=\"";
        yield (string) $this->escaper->escape(($context["cancel_url"] ?? null), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary\">";
        yield (string) $this->escaper->escape(__("Cancel"), "html", null, true);
        yield "</a>

         ";
        // line 64
        yield "        <button type=\"submit\" class=\"btn btn-primary\">";
        yield (string) $this->escaper->escape(__("Verify"), "html", null, true);
        yield "</button>

     </div>
  </form>

";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/reauth/prompt.html.twig";
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
        return array (  143 => 64,  135 => 61,  129 => 56,  127 => 55,  123 => 54,  116 => 52,  111 => 50,  108 => 49,  102 => 47,  99 => 46,  92 => 45,  84 => 42,  77 => 41,  65 => 36,  58 => 35,  47 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/reauth/prompt.html.twig", "/var/www/html/glpi/templates/pages/reauth/prompt.html.twig");
    }
}
