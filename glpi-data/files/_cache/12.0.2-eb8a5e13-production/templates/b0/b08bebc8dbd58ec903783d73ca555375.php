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

/* layout/parts/head.html.twig */
class __TwigTemplate_4351f68e692e9f128f6a620389924be1 extends Template
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
<!DOCTYPE html>
<html lang=\"";
        // line 34
        yield (string) (((array_key_exists("lang", $context) &&  !(null === $context["lang"]))) ? ($this->escaper->escape($context["lang"], "html", null, true)) : ("en"));
        yield "\"
    ";
        // line 35
        if ((($tmp = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiisrtl")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 36
            yield "        dir=\"rtl\"
    ";
        }
        // line 38
        yield "    ";
        if ((($tmp = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpihighcontrast_css")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 39
            yield "        data-high-contrast=\"1\"
    ";
        }
        // line 41
        yield "    ";
        if (array_key_exists("theme", $context)) {
            // line 42
            yield "        data-glpi-theme=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getKey", [], "method", false, false, false, 42), "html", null, true);
            yield "\"
        data-glpi-theme-dark=\"";
            // line 43
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isDarkTheme", [], "method", false, false, false, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("0"));
            yield "\"
    ";
        }
        // line 45
        yield "    ";
        if (array_key_exists("glpi_request_id", $context)) {
            // line 46
            yield "        data-glpi-request-id=\"";
            yield (string) $this->escaper->escape(($context["glpi_request_id"] ?? null), "html", null, true);
            yield "\"
    ";
        }
        // line 48
        yield ">
<head>
   <title>";
        // line 50
        if (array_key_exists("title", $context)) {
            yield (string) $this->escaper->escape(($context["title"] ?? null), "html", null, true);
            yield " - ";
        }
        yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("app_name"), "html", null, true);
        yield "</title>

   <meta charset=\"utf-8\" />

   ";
        // line 55
        yield "   <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />

   ";
        // line 58
        yield "   <meta name=\"robots\" content=\"noindex, nofollow\" />

    ";
        // line 61
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::merge(($context["custom_header_tags"] ?? null), $this->extensions['Glpi\Application\View\Extension\PluginExtension']->getPluginsHeaderTags(((array_key_exists("is_anonymous_page", $context)) ? (Twig\Extension\CoreExtension::default(($context["is_anonymous_page"] ?? null), false)) : (false)))));
        foreach ($context['_seq'] as $context["_key"] => $context["header_tag"]) {
            // line 62
            yield "        <";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["header_tag"], "tag", [], "any", false, false, false, 62), "html", null, true);
            yield " ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["header_tag"], "properties", [], "any", false, false, false, 62));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                yield (string) $this->escaper->escape($context["key"], "html", null, true);
                yield "=\"";
                yield (string) $this->escaper->escape($context["value"], "html", null, true);
                yield "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            yield "/>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['header_tag'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 64
        yield "
   ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::merge(($context["css_files"] ?? null), $this->extensions['Glpi\Application\View\Extension\PluginExtension']->getPluginsCssFiles(((array_key_exists("is_anonymous_page", $context)) ? (Twig\Extension\CoreExtension::default(($context["is_anonymous_page"] ?? null), false)) : (false)))));
        foreach ($context['_seq'] as $context["_key"] => $context["css_file"]) {
            // line 66
            yield "      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\FrontEndAssetsExtension']->cssPath(CoreExtension::getAttribute($this->env, $this->source, $context["css_file"], "path", [], "any", false, false, false, 66), (((CoreExtension::getAttribute($this->env, $this->source, $context["css_file"], "options", [], "any", true, true, false, 66) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["css_file"], "options", [], "any", false, false, false, 66)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["css_file"], "options", [], "any", false, false, false, 66)) : ([]))), "html", null, true);
            yield "\" />
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['css_file'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 68
        yield "
   ";
        // line 69
        yield (string) $this->extensions['Glpi\Application\View\Extension\FrontEndAssetsExtension']->customCss();
        yield "

   <link rel=\"shortcut icon\" type=\"images/x-icon\" href=\"";
        // line 71
        yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\FrontEndAssetsExtension']->assetPath("/pics/favicon.ico"), "html", null, true);
        yield "\" />

   ";
        // line 73
        yield (string) $this->extensions['Glpi\Application\View\Extension\FrontEndAssetsExtension']->importmap();
        yield "

   ";
        // line 75
        yield (string) $this->extensions['Glpi\Application\View\Extension\FrontEndAssetsExtension']->configJs();
        yield "

   ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["js_files"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["js_file"]) {
            // line 78
            yield "      <script type=\"text/javascript\" src=\"";
            yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\FrontEndAssetsExtension']->jsPath(CoreExtension::getAttribute($this->env, $this->source, $context["js_file"], "path", [], "any", false, false, false, 78), (((CoreExtension::getAttribute($this->env, $this->source, $context["js_file"], "options", [], "any", true, true, false, 78) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["js_file"], "options", [], "any", false, false, false, 78)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["js_file"], "options", [], "any", false, false, false, 78)) : ([]))), "html", null, true);
            yield "\"></script>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['js_file'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 80
        yield "
   ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["js_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["js_file"]) {
            // line 82
            yield "      <script type=\"module\" src=\"";
            yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\FrontEndAssetsExtension']->jsPath(CoreExtension::getAttribute($this->env, $this->source, $context["js_file"], "path", [], "any", false, false, false, 82), (((CoreExtension::getAttribute($this->env, $this->source, $context["js_file"], "options", [], "any", true, true, false, 82) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["js_file"], "options", [], "any", false, false, false, 82)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["js_file"], "options", [], "any", false, false, false, 82)) : ([]))), "html", null, true);
            yield "\"></script>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['js_file'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 84
        yield "
   ";
        // line 85
        yield (string) $this->extensions['Glpi\Application\View\Extension\FrontEndAssetsExtension']->localesJs();
        yield "
</head>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "layout/parts/head.html.twig";
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
        return array (  215 => 85,  212 => 84,  202 => 82,  198 => 81,  195 => 80,  185 => 78,  181 => 77,  176 => 75,  171 => 73,  166 => 71,  161 => 69,  158 => 68,  148 => 66,  144 => 65,  141 => 64,  118 => 62,  113 => 61,  109 => 58,  105 => 55,  94 => 50,  90 => 48,  84 => 46,  81 => 45,  76 => 43,  71 => 42,  68 => 41,  64 => 39,  61 => 38,  57 => 36,  55 => 35,  51 => 34,  47 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "layout/parts/head.html.twig", "/var/www/html/glpi/templates/layout/parts/head.html.twig");
    }
}
