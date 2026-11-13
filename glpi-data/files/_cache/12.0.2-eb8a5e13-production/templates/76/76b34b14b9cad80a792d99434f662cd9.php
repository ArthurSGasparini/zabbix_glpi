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

/* install/step6.html.twig */
class __TwigTemplate_22c0c35352750b0f3b83ecea64377e75 extends Template
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
<h3>";
        // line 33
        yield (string) $this->escaper->escape(__("Collect data"), "html", null, true);
        yield "</h3>

<hr>
<p>
   ";
        // line 37
        yield (string) ($context["telemetry_info"] ?? null);
        yield "
</p>

<hr>
<p>
   ";
        // line 42
        yield (string) ($context["reference_info"] ?? null);
        yield "
</p>

<hr>
<form action=\"install.php\" method=\"post\" data-submit-once>
   <button type=\"submit\" name=\"submit\" class=\"btn btn-primary\">
      ";
        // line 48
        yield (string) $this->escaper->escape(__("Continue"), "html", null, true);
        yield "
      <i class=\"ti ti-chevron-right ms-1\" aria-hidden=\"true\"></i>
   </button>

   <input type=\"hidden\" name=\"install\" value=\"Etape_5\">
</form>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "install/step6.html.twig";
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
        return array (  74 => 48,  65 => 42,  57 => 37,  50 => 33,  47 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "install/step6.html.twig", "/var/www/html/glpi/templates/install/step6.html.twig");
    }
}
