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

/* pages/admin/user/change_other_password.html.twig */
class __TwigTemplate_309f4dca50b64c4bc2004fde5b245ccb extends Template
{
    private Source $source;
    /**
     * @var array<string, MacroNamespace>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

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
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 33)->unwrap()->getMacroNamespace();
        // line 34
        yield "
";
        // line 35
        $context["full_width"] = ((array_key_exists("full_width", $context)) ? (Twig\Extension\CoreExtension::default(($context["full_width"] ?? null), false)) : (false));
        // line 36
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 37
            yield "    ";
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(37))->call("checkboxField", ["_init_password", 0, __("Send an email to the user to set their own new password."), ["full_width" =>             // line 38
($context["full_width"] ?? null)]], $context, 37, $this->source);
            // line 39
            yield "
";
        }
        // line 41
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(41))->call("passwordField", ["password", "", __("Password"), ["id" => "password", "clearable" => false, "additional_attributes" => ["autocomplete" => "off"], "full_width" =>         // line 47
($context["full_width"] ?? null)]], $context, 41, $this->source);
        // line 48
        yield "
";
        // line 49
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(49))->call("passwordField", ["password2", "", __("Confirm password"), ["clearable" => false, "additional_attributes" => ["autocomplete" => "off"], "full_width" =>         // line 54
($context["full_width"] ?? null)]], $context, 49, $this->source);
        // line 55
        yield "
";
        // line 56
        if ((($tmp = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("use_password_security")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 57
            yield "    ";
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(57))->call("htmlField", ["password_checks", Twig\Extension\CoreExtension::include($this->env, $context, "components/user/password_security_checks.html.twig", ["list_view" => true]), __("Password security policy"), ["full_width" =>             // line 58
($context["full_width"] ?? null)]], $context, 57, $this->source);
            // line 59
            yield "
";
        }
        // line 61
        yield "<script>
    \$(\x27input[name=_init_password]\x27).on(\x27change\x27, function() {
        \$(\x27input[name=password]\x27).closest(\x27.form-field\x27)
            .toggleClass(\x27d-none\x27, \$(this).is(\x27:checked\x27))
            .val(\x27\x27);
        \$(\x27input[name=password2]\x27).closest(\x27.form-field\x27)
            .toggleClass(\x27d-none\x27, \$(this).is(\x27:checked\x27))
            .val(\x27\x27);
        \$(\x27.password-security-checks\x27).closest(\x27.form-field\x27).toggleClass(\x27d-none\x27, \$(this).is(\x27:checked\x27));
    });
    ";
        // line 71
        if ((($tmp = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("use_password_security")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 72
            yield "        \$(\x27input[name=password]\x27).on(\x27input\x27, passwordCheck);
    ";
        }
        // line 74
        yield "</script>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/user/change_other_password.html.twig";
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
        return array (  104 => 74,  100 => 72,  98 => 71,  86 => 61,  82 => 59,  80 => 58,  78 => 57,  76 => 56,  73 => 55,  71 => 54,  70 => 49,  67 => 48,  65 => 47,  64 => 41,  60 => 39,  58 => 38,  56 => 37,  54 => 36,  52 => 35,  49 => 34,  47 => 33,  44 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/user/change_other_password.html.twig", "/var/www/html/glpi/templates/pages/admin/user/change_other_password.html.twig");
    }
}
