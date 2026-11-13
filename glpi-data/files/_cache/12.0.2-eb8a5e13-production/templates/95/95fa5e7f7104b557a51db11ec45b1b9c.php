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

/* install/step2.html.twig */
class __TwigTemplate_a6b01b56848cc823c9c16d54850e3d58 extends Template
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
        yield (string) $this->escaper->escape(__("Database connection setup"), "html", null, true);
        yield "</h3>

<form action=\"install.php\" method=\"post\" data-submit-once>

   <div class=\"mb-3\">
      <label for=\"db_host\" class=\"form-label\">";
        // line 38
        yield (string) $this->escaper->escape(__("SQL server (MariaDB or MySQL)"), "html", null, true);
        yield "</label>
      <input type=\"text\" class=\"form-control\" id=\"db_host\" name=\"db_host\">
   </div>

   <div class=\"mb-3\">
      <label for=\"db_user\" class=\"form-label\">";
        // line 43
        yield (string) $this->escaper->escape(__("SQL user"), "html", null, true);
        yield "</label>
      <input type=\"text\" class=\"form-control\" id=\"db_user\" name=\"db_user\">
   </div>

   <div class=\"mb-3\">
      <label for=\"db_pass\" class=\"form-label\">";
        // line 48
        yield (string) $this->escaper->escape(__("SQL password"), "html", null, true);
        yield "</label>
      <input type=\"password\" class=\"form-control\" id=\"db_pass\" name=\"db_pass\">
   </div>

   <button type=\"submit\" name=\"submit\" class=\"btn btn-primary\">
      ";
        // line 53
        yield (string) $this->escaper->escape(__("Continue"), "html", null, true);
        yield "
      <i class=\"ti ti-chevron-right ms-1\" aria-hidden=\"true\"></i>
   </button>

   <input type=\"hidden\" name=\"update\" value=\"";
        // line 57
        yield (string) $this->escaper->escape(($context["update"] ?? null), "html", null, true);
        yield "\">
   <input type=\"hidden\" name=\"install\" value=\"Etape_2\">
</form>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "install/step2.html.twig";
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
        return array (  89 => 57,  82 => 53,  74 => 48,  66 => 43,  58 => 38,  50 => 33,  47 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "install/step2.html.twig", "/var/www/html/glpi/templates/install/step2.html.twig");
    }
}
