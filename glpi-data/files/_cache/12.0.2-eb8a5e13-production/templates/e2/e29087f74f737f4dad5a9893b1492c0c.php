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

/* layout/page_card_notlogged.html.twig */
class __TwigTemplate_541637423825a447213ce6a42fdc0339 extends Template
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
            'logo_block' => [$this, 'block_logo_block'],
            'header_block' => [$this, 'block_header_block'],
            'content_block' => [$this, 'block_content_block'],
            'footer_block' => [$this, 'block_footer_block'],
            'javascript_block' => [$this, 'block_javascript_block'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 32
        yield "
";
        // line 33
        $context["theme"] = $this->extensions['Glpi\Application\View\Extension\FrontEndAssetsExtension']->currentTheme();
        // line 34
        if ( !array_key_exists("css_files", $context)) {
            // line 35
            yield "   ";
            $context["css_files"] = [["path" => "lib/base.css"], ["path" => "lib/tabler.css"], ["path" => "css/glpi.scss"], ["path" => "css/core_palettes.scss"]];
            // line 41
            yield "
   ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Glpi\Application\View\Extension\FrontEndAssetsExtension']->getCustomThemesPaths());
            foreach ($context['_seq'] as $context["_key"] => $context["theme_path"]) {
                // line 43
                yield "      ";
                $context["css_files"] = Twig\Extension\CoreExtension::merge(($context["css_files"] ?? null), [["path" => $context["theme_path"]]]);
                // line 44
                yield "   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['theme_path'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 45
            yield "
   ";
        }
        // line 48
        if ( !array_key_exists("js_files", $context)) {
            // line 49
            yield "   ";
            $context["js_files"] = [["path" => "lib/base.js"], ["path" => "js/common.js"], ["path" => "lib/fuzzy.js"]];
        }
        // line 55
        if ( !array_key_exists("js_modules", $context)) {
            // line 56
            yield "   ";
            $context["js_modules"] = [];
        }
        // line 58
        if ( !array_key_exists("custom_header_tags", $context)) {
            // line 59
            yield "   ";
            $context["custom_header_tags"] = [];
        }
        // line 61
        yield "
";
        // line 63
        $context["js_files"] = Twig\Extension\CoreExtension::merge(($context["js_files"] ?? null), $this->extensions['Glpi\Application\View\Extension\PluginExtension']->getPluginsJsScriptsFiles(true));
        // line 64
        $context["js_modules"] = Twig\Extension\CoreExtension::merge(($context["js_modules"] ?? null), $this->extensions['Glpi\Application\View\Extension\PluginExtension']->getPluginsJsModulesFiles(true));
        // line 65
        yield "
";
        // line 66
        $context["is_anonymous_page"] = true;
        // line 67
        yield "
";
        // line 68
        yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "layout/parts/head.html.twig");
        yield "
<body class=\"welcome-anonymous\">
   <div class=\"skip-links\">
      <a class=\"visually-hidden-focusable skip-link\" href=\"#page\">";
        // line 71
        yield (string) $this->escaper->escape(__("Go to main content"), "html", null, true);
        yield "</a>
   </div>
   <main id=\"page\" class=\"page-anonymous\" role=\"main\" tabindex=\"-1\">
      <div class=\"flex-fill d-flex flex-column justify-content-center py-4 mt-4\">
         ";
        // line 75
        $context["style"] = null;
        // line 76
        yield "         ";
        if (array_key_exists("card_md_width", $context)) {
            // line 77
            yield "            ";
            $context["style"] = "max-width: 40rem";
            // line 78
            yield "         ";
        }
        // line 79
        yield "         ";
        if (array_key_exists("card_bg_width", $context)) {
            // line 80
            yield "            ";
            $context["style"] = "max-width: 60rem";
            // line 81
            yield "         ";
        }
        // line 82
        yield "
         <div class=\"container-tight py-6\" ";
        // line 83
        if ( !(null === ($context["style"] ?? null))) {
            yield "style=\"";
            yield (string) $this->escaper->escape(($context["style"] ?? null), "html", null, true);
            yield "\"";
        }
        yield ">
            <div class=\"text-center\">
               <div class=\"col-md\">
                  ";
        // line 86
        yield from $this->unwrap()->yieldBlock('logo_block', $context, $blocks);
        // line 89
        yield "               </div>
            </div>
            <main>
               <div class=\"card card-md main-content-card\">
                  ";
        // line 94
        yield "                  <div class=\"card-header\">";
        yield from $this->unwrap()->yieldBlock('header_block', $context, $blocks);
        yield "</div>
                  <div class=\"card-body\">
                     ";
        // line 96
        yield from $this->unwrap()->yieldBlock('content_block', $context, $blocks);
        // line 97
        yield "                  </div>
               </div>
            </main>

            <div class=\"text-center text-muted mt-3\">
               ";
        // line 102
        yield from $this->unwrap()->yieldBlock('footer_block', $context, $blocks);
        // line 103
        yield "            </div>

            <div class=\"text-center mt-3\">
               <a href=\"";
        // line 106
        yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->helpUrl(), "html", null, true);
        yield "\">
                  <i class=\"ti ti-help\" aria-hidden=\"true\"></i>
                  ";
        // line 108
        yield (string) $this->escaper->escape(__("Help"), "html", null, true);
        yield "
               </a>
            </div>
         </div>
      </div>
   </main>

   ";
        // line 115
        yield from $this->unwrap()->yieldBlock('javascript_block', $context, $blocks);
        // line 116
        yield "</body>
</html>
";
        return; yield;
    }

    // line 86
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_logo_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 87
        yield "                     <span class=\"glpi-logo mb-4\" title=\"GLPI\"></span>
                  ";
        return; yield;
    }

    // line 94
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        return; yield;
    }

    // line 96
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        return; yield;
    }

    // line 102
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        return; yield;
    }

    // line 115
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascript_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "layout/page_card_notlogged.html.twig";
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
        return array (  259 => 115,  249 => 102,  239 => 96,  229 => 94,  223 => 87,  216 => 86,  209 => 116,  207 => 115,  197 => 108,  192 => 106,  187 => 103,  185 => 102,  178 => 97,  176 => 96,  170 => 94,  164 => 89,  162 => 86,  152 => 83,  149 => 82,  146 => 81,  143 => 80,  140 => 79,  137 => 78,  134 => 77,  131 => 76,  129 => 75,  122 => 71,  116 => 68,  113 => 67,  111 => 66,  108 => 65,  106 => 64,  104 => 63,  101 => 61,  97 => 59,  95 => 58,  91 => 56,  89 => 55,  85 => 49,  83 => 48,  79 => 45,  72 => 44,  69 => 43,  65 => 42,  62 => 41,  59 => 35,  57 => 34,  55 => 33,  52 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "layout/page_card_notlogged.html.twig", "/var/www/html/glpi/templates/layout/page_card_notlogged.html.twig");
    }
}
