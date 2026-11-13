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

/* pages/admin/profile/base_tab.html.twig */
class __TwigTemplate_f33447c77599e97c6ce41a520cebdee8 extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 32
        yield "
";
        // line 33
        $macros["inputs"] = $this->macros["inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 33)->unwrap()->getMacroNamespace();
        // line 34
        yield "
";
        // line 35
        $context["show_legend"] = ((array_key_exists("show_legend", $context)) ? (Twig\Extension\CoreExtension::default(($context["show_legend"] ?? null), false)) : (false));
        // line 36
        $context["can_edit"] = (((($tmp = Session::haveRight("profile", Twig\Extension\CoreExtension::constant("CREATE"))) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = Session::haveRight("profile", Twig\Extension\CoreExtension::constant("UPDATE"))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) || (($tmp = Session::haveRight("profile", Twig\Extension\CoreExtension::constant("PURGE"))) && $tmp instanceof Markup ? (string) $tmp : $tmp));
        // line 37
        yield "
";
        // line 47
        yield "
";
        // line 57
        yield "
<div class=\"asset\">
    ";
        // line 59
        if ((($tmp = ($context["can_edit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 60
            yield "        <form method=\"post\" action=\"";
            yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Profile"), "html", null, true);
            yield "\" data-track-changes=\"true\">
            <input type=\"hidden\" name=\"id\" value=\"";
            // line 61
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getID", [], "method", false, false, false, 61), "html", null, true);
            yield "\">
    ";
        }
        // line 63
        yield "            <div>
                <div class=\"card-body p-0\">
                    ";
        // line 65
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 66
        yield "                    ";
        if ((($tmp = ($context["show_legend"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 67
            yield "                        ";
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "pages/admin/profile/legend.html.twig");
            yield "
                    ";
        }
        // line 69
        yield "                </div>
    ";
        // line 70
        if ((($tmp = ($context["can_edit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 71
            yield "                <div class=\"card-body mx-n2 border-top d-flex flex-row-reverse align-items-start flex-wrap\">
                    ";
            // line 72
            yield (string) ($macros["inputs"] ?? $this->throwUninitializedMacroNamespace(72))->call("submit", ["update", _x("button", "Save"), 1, ["class" => "btn btn-primary", "icon" => "ti ti-device-floppy"]], $context, 72, $this->source);
            // line 75
            yield "
                </div>
    ";
        }
        // line 78
        yield "            </div>
    ";
        // line 79
        if ((($tmp = ($context["can_edit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 80
            yield "        </form>
    ";
        }
        // line 82
        yield "</div>
";
        return; yield;
    }

    // line 65
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        return; yield;
    }

    protected function loadDeclaredMacros(): array
    {
        return [
            "displayRightsMatrix" => new \Twig\TwigMacro("displayRightsMatrix", function ($item = null, $interface = null, $form = null, $group = null, $title = null, ...$varargs): string|Markup {
                // line 38
                $macros = $this->macros;
                $context = [
                    "item" => $item,
                    "interface" => $interface,
                    "form" => $form,
                    "group" => $group,
                    "title" => $title,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 39
                    yield "    ";
                    CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "displayRightsChoiceMatrix", [$this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Profile::getRightsForForm", [                    // line 40
($context["interface"] ?? null), ($context["form"] ?? null), ($context["group"] ?? null)]), ["canedit" => (((($tmp = Session::haveRight("profile", Twig\Extension\CoreExtension::constant("CREATE"))) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = Session::haveRight("profile", Twig\Extension\CoreExtension::constant("UPDATE"))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) || (($tmp = Session::haveRight("profile", Twig\Extension\CoreExtension::constant("PURGE"))) && $tmp instanceof Markup ? (string) $tmp : $tmp)), "title" =>                     // line 43
($context["title"] ?? null)]], "method", false, false, false, 39);
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["item" => false, "interface" => false, "form" => false, "group" => false, "title" => false], false),
            "displayLifecycleMatrix" => new \Twig\TwigMacro("displayLifecycleMatrix", function ($item = null, $title = null, $html_field = null, $db_field = null, $statuses = null, ...$varargs): string|Markup {
                // line 48
                $macros = $this->macros;
                $context = [
                    "item" => $item,
                    "title" => $title,
                    "html_field" => $html_field,
                    "db_field" => $db_field,
                    "statuses" => $statuses,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 49
                    yield "    ";
                    CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "displayLifeCycleMatrix", [                    // line 50
($context["title"] ?? null),                     // line 51
($context["html_field"] ?? null),                     // line 52
($context["db_field"] ?? null),                     // line 53
($context["statuses"] ?? null), (((($tmp = Session::haveRight("profile", Twig\Extension\CoreExtension::constant("CREATE"))) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = Session::haveRight("profile", Twig\Extension\CoreExtension::constant("UPDATE"))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) || (($tmp = Session::haveRight("profile", Twig\Extension\CoreExtension::constant("PURGE"))) && $tmp instanceof Markup ? (string) $tmp : $tmp))], "method", false, false, false, 49);
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["item" => false, "title" => false, "html_field" => false, "db_field" => false, "statuses" => false], false),
        ];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/profile/base_tab.html.twig";
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
        return array (  183 => 53,  182 => 52,  181 => 51,  180 => 50,  178 => 49,  164 => 48,  158 => 43,  157 => 40,  155 => 39,  141 => 38,  127 => 65,  121 => 82,  117 => 80,  115 => 79,  112 => 78,  107 => 75,  105 => 72,  102 => 71,  100 => 70,  97 => 69,  91 => 67,  88 => 66,  86 => 65,  82 => 63,  77 => 61,  72 => 60,  70 => 59,  66 => 57,  63 => 47,  60 => 37,  58 => 36,  56 => 35,  53 => 34,  51 => 33,  48 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/profile/base_tab.html.twig", "/var/www/html/glpi/templates/pages/admin/profile/base_tab.html.twig");
    }
}
