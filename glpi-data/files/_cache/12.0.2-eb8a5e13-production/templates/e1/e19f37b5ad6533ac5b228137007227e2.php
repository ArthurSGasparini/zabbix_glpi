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

/* pages/reauth/password_form.html.twig */
class __TwigTemplate_32e9b417126c88a289d5ea998dfc036e extends Template
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
<p class=\"text-muted mb-2\">";
        // line 33
        yield (string) $this->escaper->escape(__("To continue, confirm your identity by entering your password."), "html", null, true);
        yield "</p>
<input type=\"password\"
       name=\"user_input\"
       class=\"form-control\"
       placeholder=\"";
        // line 37
        yield (string) $this->escaper->escape(__("Password"), "html", null, true);
        yield "\"
       autocomplete=\"current-password\"
       required
       autofocus />

";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/reauth/password_form.html.twig";
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
        return array (  57 => 37,  50 => 33,  47 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/reauth/password_form.html.twig", "/var/www/html/glpi/templates/pages/reauth/password_form.html.twig");
    }
}
