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

/* twig_components/Mfa/CodeInput.html.twig */
class __TwigTemplate_959f69a79fecc51da9d2bcd527f7939a extends Template
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
<div class=\"d-flex justify-content-center gap-2\" dir=\"ltr\"
     role=\"group\" aria-label=\"";
        // line 34
        yield (string) $this->escaper->escape(__("Authentication code"), "html", null, true);
        yield "\" data-mfa-code-input>
   ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "digits", [], "any", false, false, false, 35)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 36
            yield "      <input type=\"text\" name=\"totp_code[]\"
             class=\"form-control text-center fw-bold totp-code-digit\"
             maxlength=\"1\" inputmode=\"numeric\" pattern=\"[0-9]\" required
             autocomplete=\"";
            // line 39
            yield (string) ((($context["i"] == 1)) ? ("one-time-code") : ("off"));
            yield "\"
             aria-label=\"";
            // line 40
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::sprintf(__("Digit %1\$s of %2\$s"), $context["i"], CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "digits", [], "any", false, false, false, 40)), "html", null, true);
            yield "\">
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 42
        yield "</div>
<script type=\"module\">
    import(\x27/js/modules/Security/MfaCodeInput.js\x27).then((m) => m.MfaCodeInput.init());
</script>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "twig_components/Mfa/CodeInput.html.twig";
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
        return array (  77 => 42,  68 => 40,  64 => 39,  59 => 36,  55 => 35,  51 => 34,  47 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "twig_components/Mfa/CodeInput.html.twig", "/var/www/html/glpi/templates/twig_components/Mfa/CodeInput.html.twig");
    }
}
