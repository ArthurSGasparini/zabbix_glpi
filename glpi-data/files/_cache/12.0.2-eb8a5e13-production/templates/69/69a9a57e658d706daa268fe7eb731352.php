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

/* install/step7.html.twig */
class __TwigTemplate_1dd6a5053c49057c5e7298610ed892f9 extends Template
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
<h2>";
        // line 33
        yield (string) $this->escaper->escape(__("One last thing before starting"), "html", null, true);
        yield "</h2>

<p>
   ";
        // line 36
        yield (string) ($context["glpinetwork"] ?? null);
        yield "
</p>

<hr>
<form action=\"install.php\" method=\"post\" data-submit-once>
   <p>
   <button type=\"submit\" name=\"submit\" class=\"btn btn-primary\">
      ";
        // line 43
        yield (string) $this->escaper->escape(__("Continue"), "html", null, true);
        yield "
      <i class=\"ti ti-chevron-right ms-1\" aria-hidden=\"true\"></i>
   </button>
   </p>

   <input type=\x27hidden\x27 name=\x27install\x27 value=\x27Etape_6\x27>
</form>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "install/step7.html.twig";
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
        return array (  66 => 43,  56 => 36,  50 => 33,  47 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "install/step7.html.twig", "/var/www/html/glpi/templates/install/step7.html.twig");
    }
}
