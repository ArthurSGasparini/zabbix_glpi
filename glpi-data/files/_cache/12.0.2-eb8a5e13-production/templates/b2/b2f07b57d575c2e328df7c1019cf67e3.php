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

/* layout/parts/goto_button.html.twig */
class __TwigTemplate_116f810e4c063f29b7c9276df6697076 extends Template
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
        if (($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "central")) {
            // line 34
            yield "   ";
            $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
            // line 35
            yield "   ";
            $context["shortcut"] = __("Ctrl+Alt+G");
            // line 36
            yield "   ";
            if ((($context["platform"] ?? null) == Twig\Extension\CoreExtension::constant("donatj\\UserAgent\\Platforms::MACINTOSH"))) {
                // line 37
                yield "      ";
                $context["shortcut"] = __("Option+Command+G");
                // line 38
                yield "   ";
            }
            // line 39
            yield "
   <button type=\"button\" class=\"btn btn-sm btn-ghost-secondary trigger-fuzzy justify-content-start mb-md-2\"
           title=\"";
            // line 41
            yield (string) $this->escaper->escape(($context["shortcut"] ?? null), "html", null, true);
            yield "\"
           data-bs-toggle=\"tooltip\"
           data-bs-placement=\"right\">
      <i class=\"ti ti-arrow-big-right me-1\" aria-hidden=\"true\"></i>
      <span class=\"visually-hidden\">";
            // line 45
            yield (string) $this->escaper->escape(__("Find menu"), "html", null, true);
            yield "</span>
      <span class=\"menu-label ";
            // line 46
            yield (string) (( !(($tmp = ($context["is_vertical"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("d-block d-xl-none d-xxl-block") : (""));
            yield "\" aria-hidden=\"true\">
         ";
            // line 47
            yield (string) $this->escaper->escape(__("Find menu"), "html", null, true);
            yield "
      </span>
   </button>
   <div id=\"fuzzy-search-modal\"></div>
   <script type=\"module\">
       if (document.querySelector(\x27#fuzzy-search-modal\x27).__vue_app__ === undefined) {
           window.Vue.createApp(window.Vue.components[\x27FuzzySearch/Modal\x27].component).mount(\x27#fuzzy-search-modal\x27);
       }
   </script>
";
        }
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "layout/parts/goto_button.html.twig";
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
        return array (  86 => 47,  82 => 46,  78 => 45,  71 => 41,  67 => 39,  64 => 38,  61 => 37,  58 => 36,  55 => 35,  52 => 34,  50 => 33,  47 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "layout/parts/goto_button.html.twig", "/var/www/html/glpi/templates/layout/parts/goto_button.html.twig");
    }
}
