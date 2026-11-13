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

/* pages/redirect_post.html.twig */
class __TwigTemplate_104b7ec424a64882af7007e9f804a523 extends Template
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
        // line 44
        yield "
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 49
        yield (string) $this->escaper->escape(__("Redirecting..."), "html", null, true);
        yield "</title>
</head>
<body>
    <form method=\"";
        // line 52
        yield (string) $this->escaper->escape(($context["http_method"] ?? null), "html", null, true);
        yield "\" action=\"";
        yield (string) $this->escaper->escape(($context["url"] ?? null), "html", null, true);
        yield "\" id=\"redirect-form\" data-submit-once>
        ";
        // line 53
        yield (string) $this->getMacroNamespace()->call("render_inputs", [($context["replay_data"] ?? null), ""], $context, 53, $this->source);
        yield "
    </form>
    <script>document.getElementById(\x27redirect-form\x27).submit();</script>
    <noscript>
        <button form=\"redirect-form\" type=\"submit\">";
        // line 57
        yield (string) $this->escaper->escape(__("Continue"), "html", null, true);
        yield "</button>
    </noscript>
</body>
</html>

";
        return; yield;
    }

    protected function loadDeclaredMacros(): array
    {
        return [
            "render_inputs" => new \Twig\TwigMacro("render_inputs", function ($data = null, $prefix = null, ...$varargs): string|Markup {
                // line 34
                $macros = $this->macros;
                $context = [
                    "data" => $data,
                    "prefix" => $prefix,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 35
                    yield "    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["data"] ?? null));
                    foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                        // line 36
                        yield "        ";
                        $context["field_name"] = (((($tmp = ($context["prefix"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((($context["prefix"] ?? null) . "[") . $context["key"]) . "]")) : ($context["key"]));
                        // line 37
                        yield "        ";
                        if (is_iterable($context["value"])) {
                            // line 38
                            yield "            ";
                            yield (string) $this->getMacroNamespace()->call("render_inputs", [$context["value"], ($context["field_name"] ?? null)], $context, 38, $this->source);
                            yield "
        ";
                        } else {
                            // line 40
                            yield "            <input type=\"hidden\" name=\"";
                            yield (string) $this->escaper->escape(($context["field_name"] ?? null), "html", null, true);
                            yield "\" value=\"";
                            yield (string) $this->escaper->escape($context["value"], "html", null, true);
                            yield "\">
        ";
                        }
                        // line 42
                        yield "    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['key'], $context['value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent);
                    $context += $_parent;
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["data" => false, "prefix" => false], false),
        ];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/redirect_post.html.twig";
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
        return array (  127 => 42,  119 => 40,  113 => 38,  110 => 37,  107 => 36,  102 => 35,  91 => 34,  76 => 57,  69 => 53,  63 => 52,  57 => 49,  50 => 44,  47 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/redirect_post.html.twig", "/var/www/html/glpi/templates/pages/redirect_post.html.twig");
    }
}
