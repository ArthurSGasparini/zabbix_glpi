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

/* install/choose_language.html.twig */
class __TwigTemplate_048108c2ebd437cefc25471286977e14 extends Template
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
<form action=\"install.php\" method=\"post\" data-submit-once>
   <div class=\"container\">
      <div class=\"mb-3\">
         ";
        // line 36
        yield (string) ($context["languages_dropdown"] ?? null);
        yield "
      </div>

      <button type=\"submit\" name=\"lang_select\" class=\"btn btn-primary\" autofocus>
         ";
        // line 40
        yield (string) $this->escaper->escape(__("OK"), "html", null, true);
        yield "
         <i class=\"ti ti-chevron-right ms-1\" aria-hidden=\"true\"></i>
      </button>
   </div>

   <input type=\"hidden\" name=\"install\" value=\"lang_select\" />
</form>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "install/choose_language.html.twig";
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
        return array (  60 => 40,  53 => 36,  47 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "install/choose_language.html.twig", "/var/www/html/glpi/templates/install/choose_language.html.twig");
    }
}
