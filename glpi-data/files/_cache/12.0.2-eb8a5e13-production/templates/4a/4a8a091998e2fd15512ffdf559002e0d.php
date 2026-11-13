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

/* install/step1.html.twig */
class __TwigTemplate_b8686125300f143c0ec866f8851fb63c extends Template
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
";
        // line 33
        if ((($tmp = ($context["config_write_denied"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 34
            yield "    <h3>";
            yield (string) $this->escaper->escape(__("Checking write access to configuration files"), "html", null, true);
            yield "</h3>
    <div class=\"alert alert-danger\" role=\"alert\">
        <div class=\"d-flex\">
            <div>
                <i class=\"ti ti-alert-circle me-2\" aria-hidden=\"true\"></i>
            </div>
            <div>
                <h4 class=\"alert-title\">";
            // line 41
            yield (string) $this->escaper->escape(__("Write access denied for configuration files"), "html", null, true);
            yield "</h4>
                <div class=\"text-secondary\">
                    ";
            // line 43
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::sprintf(__("A temporary write access to the following files is required: %s."), (("`" . Twig\Extension\CoreExtension::join(($context["config_files_to_update"] ?? null), "`, `")) . "`")), "html", null, true);
            yield "
                    <br />
                    ";
            // line 45
            yield (string) $this->escaper->escape(__("Write access to these files can be removed once the operation is finished."), "html", null, true);
            yield "
                </div>
            </div>
        </div>
    </div>
";
        } else {
            // line 51
            yield "    <h3>";
            yield (string) $this->escaper->escape(__("Checking of the compatibility of your environment with the execution of GLPI"), "html", null, true);
            yield "</h3>
    ";
            // line 52
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "install/blocks/requirements_table.html.twig", ["requirements" => ($context["requirements"] ?? null)], false);
            yield "
";
        }
        // line 54
        yield "
";
        // line 55
        $context["common_hiddens"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 56
            yield "   <input type=\"hidden\" name=\"language\" value=\"";
            yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpilanguage"), "html", null, true);
            yield "\">
   <input type=\"hidden\" name=\"update\" value=\"";
            // line 57
            yield (string) $this->escaper->escape(($context["update"] ?? null), "html", null, true);
            yield "\">
";
            return; yield;
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 59
        yield "
";
        // line 60
        $context["continue_form"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 61
            yield "   <form action=\"install.php\" method=\"post\" class=\"d-inline\" data-submit-once>
      <button type=\"submit\" name=\"submit\" class=\"btn btn-primary\">
         ";
            // line 63
            yield (string) $this->escaper->escape(__("Continue"), "html", null, true);
            yield "
         <i class=\"ti ti-chevron-right ms-1\" aria-hidden=\"true\"></i>
      </button>

      <input type=\"hidden\" name=\"install\" value=\"Etape_1\">
      ";
            // line 68
            yield (string) $this->escaper->escape(($context["common_hiddens"] ?? null), "html", null, true);
            yield "
   </form>
";
            return; yield;
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 71
        yield "
";
        // line 72
        $context["retry_form"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 73
            yield "   <form action=\"install.php\" method=\"post\" class=\"d-inline\" data-submit-once>
      <button type=\"submit\" name=\"submit\" class=\"btn btn-warning\">
         ";
            // line 75
            yield (string) $this->escaper->escape(__("Try again"), "html", null, true);
            yield "
         <i class=\"ti ti-reload ms-1\" aria-hidden=\"true\"></i>
      </button>

      <input type=\"hidden\" name=\"install\" value=\"Etape_0\">
      ";
            // line 80
            yield (string) $this->escaper->escape(($context["common_hiddens"] ?? null), "html", null, true);
            yield "
   </form>
";
            return; yield;
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 83
        yield "
";
        // line 84
        if (((($tmp = ($context["config_write_denied"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["requirements"] ?? null), "hasMissingMandatoryRequirements", [], "method", false, false, false, 84)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 85
            yield "   <h3>";
            yield (string) $this->escaper->escape(__("Do you want to continue?"), "html", null, true);
            yield "</h3>
   <div class=\"text-center\">
      ";
            // line 87
            yield (string) $this->escaper->escape(($context["retry_form"] ?? null), "html", null, true);
            yield "
   </div>
";
        } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,         // line 89
($context["requirements"] ?? null), "hasMissingOptionalRequirements", [], "method", false, false, false, 89)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 90
            yield "   <h3>";
            yield (string) $this->escaper->escape(__("Do you want to continue?"), "html", null, true);
            yield "</h3>
   <div class=\"text-center\">
      ";
            // line 92
            yield (string) $this->escaper->escape(($context["continue_form"] ?? null), "html", null, true);
            yield "
      ";
            // line 93
            yield (string) $this->escaper->escape(($context["retry_form"] ?? null), "html", null, true);
            yield "
   </div>
";
        } else {
            // line 96
            yield "   <div class=\"text-center\">
      ";
            // line 97
            yield (string) $this->escaper->escape(($context["continue_form"] ?? null), "html", null, true);
            yield "
   </div>
";
        }
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "install/step1.html.twig";
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
        return array (  193 => 97,  190 => 96,  184 => 93,  180 => 92,  174 => 90,  172 => 89,  167 => 87,  161 => 85,  159 => 84,  156 => 83,  149 => 80,  141 => 75,  137 => 73,  135 => 72,  132 => 71,  125 => 68,  117 => 63,  113 => 61,  111 => 60,  108 => 59,  102 => 57,  97 => 56,  95 => 55,  92 => 54,  87 => 52,  82 => 51,  73 => 45,  68 => 43,  63 => 41,  52 => 34,  50 => 33,  47 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "install/step1.html.twig", "/var/www/html/glpi/templates/install/step1.html.twig");
    }
}
