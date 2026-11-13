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

/* twig_components/Alert/Base.html.twig */
class __TwigTemplate_961e142dd20beb0e31bba5d1734b8f19 extends Template
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
            'icon' => [$this, 'block_icon'],
            'heading' => [$this, 'block_heading'],
            'content' => [$this, 'block_content'],
            'action' => [$this, 'block_action'],
            'close' => [$this, 'block_close'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 32
        yield "
";
        // line 42
        yield "
";
        // line 48
        yield "
<div ";
        // line 49
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "defaults", [["class" => CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "classes", [], "any", false, false, false, 49), "role" => "alert"]], "method", false, false, false, 49), "html", null, true);
        yield ">";
        // line 50
        yield from $this->unwrap()->yieldBlock('icon', $context, $blocks);
        // line 56
        yield "<div class=\"flex-grow-1\">";
        // line 57
        yield from $this->unwrap()->yieldBlock('heading', $context, $blocks);
        // line 63
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 68
        yield "</div>";
        // line 70
        yield from $this->unwrap()->yieldBlock('action', $context, $blocks);
        // line 79
        if ((($tmp = ($context["dismissible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 80
            yield from $this->unwrap()->yieldBlock('close', $context, $blocks);
        }
        // line 84
        yield "</div>
";
        return; yield;
    }

    // line 50
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_icon(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 51
        yield "<div>
            <i class=\"";
        // line 52
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "resolvedIcon", [], "any", false, false, false, 52), "html", null, true);
        yield " fs-2x alert-icon\" aria-hidden=\"true\"></i>
        </div>";
        return; yield;
    }

    // line 57
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_heading(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 58
        if (( !(null === ($context["heading"] ?? null)) &&  !Twig\Extension\CoreExtension::testEmpty(($context["heading"] ?? null)))) {
            // line 59
            yield "<h4 class=\"alert-heading\">";
            yield (string) $this->escaper->escape(($context["heading"] ?? null), "html", null, true);
            yield "</h4>";
        }
        return; yield;
    }

    // line 63
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 64
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["content"] ?? null))) {
            // line 65
            yield "<div class=\"alert-description\">";
            yield (string) $this->escaper->escape(($context["content"] ?? null), "html", null, true);
            yield "</div>";
        }
        return; yield;
    }

    // line 70
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_action(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 71
        if ((($tmp = ($context["link_url"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 72
            yield "<a class=\"alert-link\"
               href=\"";
            // line 73
            yield (string) $this->escaper->escape(($context["link_url"] ?? null), "html", null, true);
            yield "\"
               target=\"";
            // line 74
            yield (string) (((($tmp = ($context["link_blank"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("_blank") : ("_self"));
            yield "\"
            >";
            // line 75
            yield (string) (((($tmp = ($context["link_text"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(($context["link_text"] ?? null), "html", null, true)) : ($this->escaper->escape(($context["link_url"] ?? null), "html", null, true)));
            yield "</a>";
        }
        return; yield;
    }

    // line 80
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_close(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 81
        yield "<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"";
        yield (string) $this->escaper->escape(__("Close"), "html", null, true);
        yield "\"></button>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "twig_components/Alert/Base.html.twig";
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
        return array (  172 => 81,  165 => 80,  158 => 75,  154 => 74,  150 => 73,  147 => 72,  145 => 71,  138 => 70,  130 => 65,  128 => 64,  121 => 63,  113 => 59,  111 => 58,  104 => 57,  97 => 52,  94 => 51,  87 => 50,  81 => 84,  78 => 80,  76 => 79,  74 => 70,  72 => 68,  70 => 63,  68 => 57,  66 => 56,  64 => 50,  61 => 49,  58 => 48,  55 => 42,  52 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "twig_components/Alert/Base.html.twig", "/var/www/html/glpi/templates/twig_components/Alert/Base.html.twig");
    }
}
