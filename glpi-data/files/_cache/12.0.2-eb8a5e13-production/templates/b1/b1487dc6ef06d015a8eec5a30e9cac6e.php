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

/* install/accept_license.html.twig */
class __TwigTemplate_e095f370ae27a9f91ead1254a45fdfd2 extends Template
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
<div class=\"container text-center license-container\">
    <textarea id=\"license\" style=\"height:250px\" readonly=\"readonly\" class=\"form-control\">";
        // line 34
        yield (string) $this->escaper->escape(($context["copying"] ?? null), "html", null, true);
        yield "</textarea>

    <p>
        <a class=\"btn btn-sm btn-info\" target=\"_blank\" href=\"https://www.gnu.org/licenses/translations.html\">
            <i class=\"ti ti-external-link me-1\" aria-hidden=\"true\"></i>
            ";
        // line 39
        yield (string) $this->escaper->escape(__("Unofficial translations are also available"), "html", null, true);
        yield "
        </a>
    </p>

    <form action=\"install.php\" method=\"post\" data-submit-once>
        <input type=\"hidden\" name=\"install\" value=\"License\" />

        <button type=\"submit\" name=\"submit\" class=\"btn btn-primary\">
            ";
        // line 47
        yield (string) $this->escaper->escape(__("Continue"), "html", null, true);
        yield "
            <i class=\"ti ti-chevron-right ms-1\" aria-hidden=\"true\"></i>
        </button>
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
        return "install/accept_license.html.twig";
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
        return array (  70 => 47,  59 => 39,  51 => 34,  47 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "install/accept_license.html.twig", "/var/www/html/glpi/templates/install/accept_license.html.twig");
    }
}
