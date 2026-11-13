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

/* install/step0.html.twig */
class __TwigTemplate_57c7fff6aa9edf2306aceec6eb09010f extends Template
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
<div class=\"container text-center\">
   <div class=\"text-start\">
       ";
        // line 35
        yield (string) $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("Alert", ["heading" => __("Installation or update of GLPI"), "content" => __("Choose \x27Install\x27 for a completely new installation of GLPI, or select \x27Upgrade\x27 to update your version of GLPI from an earlier version.")]);
        yield "
   </div>

   <form action=\"install.php\" method=\"post\" class=\"d-inline\" data-submit-once>
      <button type=\"submit\" name=\"submit\" class=\"btn btn-primary\">
         ";
        // line 40
        yield (string) $this->escaper->escape(_x("button", "Install"), "html", null, true);
        yield "
         <i class=\"fas fa-download ms-1\" aria-hidden=\"true\"></i>
      </button>

      <input type=\"hidden\" name=\"update\" value=\"no\">
      <input type=\"hidden\" name=\"install\" value=\"Etape_0\">
   </form>

   <form action=\"install.php\" method=\"post\" class=\"d-inline\" data-submit-once>
      <button type=\"submit\" name=\"submit\" class=\"btn btn-primary\">
         ";
        // line 50
        yield (string) $this->escaper->escape(_x("button", "Upgrade"), "html", null, true);
        yield "
         <i class=\"fas fa-caret-square-up ms-1\" aria-hidden=\"true\"></i>
      </button>

      <input type=\"hidden\" name=\"update\" value=\"yes\">
      <input type=\"hidden\" name=\"install\" value=\"Etape_0\">
   </form>
</div>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "install/step0.html.twig";
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
        return array (  73 => 50,  60 => 40,  52 => 35,  47 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "install/step0.html.twig", "/var/www/html/glpi/templates/install/step0.html.twig");
    }
}
