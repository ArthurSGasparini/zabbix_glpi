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

/* install/blocks/requirements_table.html.twig */
class __TwigTemplate_76ca81b438633a8a31ce20cf924210ff extends Template
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
<table class=\"table tab_check\">
   <thead>
      <tr>
         <th>";
        // line 36
        yield (string) $this->escaper->escape(__("Test done"), "html", null, true);
        yield "</th>
         <th>";
        // line 37
        yield (string) $this->escaper->escape(__("Results"), "html", null, true);
        yield "</th>
      </tr>
   </thead>
   <tbody>
      ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["requirements"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["requirement"]) {
            // line 42
            yield "         ";
            if ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["requirement"], "isOutOfContext", [], "method", false, false, false, 42)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 43
                yield "            ";
                $context["is_important"] = ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["requirement"], "isOptional", [], "method", false, false, false, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["requirement"], "isRecommendedForSecurity", [], "method", false, false, false, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp));
                // line 44
                yield "            <tr class=\"tab_bg_1\">
               <td class=\"text-start\">
                  ";
                // line 46
                if ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["requirement"], "isOptional", [], "method", false, false, false, 46)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 47
                    yield "                     <span class=\"badge bg-warning-lt\">";
                    yield (string) $this->escaper->escape(__("Required"), "html", null, true);
                    yield "</span>
                  ";
                } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,                 // line 48
$context["requirement"], "isRecommendedForSecurity", [], "method", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 49
                    yield "                     <span class=\"badge bg-danger-lt\">";
                    yield (string) $this->escaper->escape(__("Security"), "html", null, true);
                    yield "</span>
                  ";
                } else {
                    // line 51
                    yield "                     <span class=\"badge bg-secondary text-secondary-fg\">";
                    yield (string) $this->escaper->escape(__("Suggested"), "html", null, true);
                    yield "</span>
                  ";
                }
                // line 53
                yield "                  <strong>";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["requirement"], "getTitle", [], "method", false, false, false, 53), "html", null, true);
                yield "</strong>
                  ";
                // line 54
                $context["description"] = CoreExtension::getAttribute($this->env, $this->source, $context["requirement"], "getDescription", [], "method", false, false, false, 54);
                // line 55
                yield "                  ";
                if ( !Twig\Extension\CoreExtension::testEmpty(($context["description"] ?? null))) {
                    // line 56
                    yield "                      <br />
                      <em>";
                    // line 57
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["requirement"], "getDescription", [], "method", false, false, false, 57), "html", null, true);
                    yield "</em>
                  ";
                }
                // line 59
                yield "                  ";
                if ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["requirement"], "isValidated", [], "method", false, false, false, 59)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 60
                    yield "                      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["requirement"], "getValidationMessages", [], "method", false, false, false, 60));
                    foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                        // line 61
                        yield "                          <br />
                          <strong>
                             <em class=\"";
                        // line 63
                        yield (string) (((($tmp = ($context["is_important"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("red") : ("missing"));
                        yield "\">
                                ";
                        // line 64
                        yield (string) $this->escaper->escape($context["message"], "html", null, true);
                        yield "
                             </em>
                          </strong>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent);
                    $context += $_parent;
                    // line 68
                    yield "                  ";
                }
                // line 69
                yield "               </td>
               <td class=\"";
                // line 70
                yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["requirement"], "isMissing", [], "method", false, false, false, 70)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((($tmp = ($context["is_important"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("red") : ("missing"))) : ("green"));
                yield "\">
                  <span data-bs-toggle=\"popover\"
                        data-bs-placement=\"right\"
                        data-bs-html=\"true\"
                        data-bs-custom-class=\"validation-messages\"
                        data-bs-content=\"";
                // line 75
                yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, $context["requirement"], "getValidationMessages", [], "method", false, false, false, 75), "<br />"), "html", null, true);
                yield "\">
                     <i class=\"";
                // line 76
                yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["requirement"], "isValidated", [], "method", false, false, false, 76)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ti ti-check") : ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["requirement"], "isOptional", [], "method", false, false, false, 76)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ti ti-alert-triangle") : ("ti ti-x"))));
                yield "\" aria-hidden=\"true\"></i>
                     <span class=\"visually-hidden\">
                        ";
                // line 78
                yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["requirement"], "isValidated", [], "method", false, false, false, 78)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(__("OK"), "html", null, true)) : ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["requirement"], "isOptional", [], "method", false, false, false, 78)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(__("Warning"), "html", null, true)) : ($this->escaper->escape(_n("Error", "Errors", 1), "html", null, true)))));
                yield "
                     </span>
                  </span>
               </td>
            </tr>
         ";
            }
            // line 84
            yield "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['requirement'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 85
        yield "   </tbody>
</table>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "install/blocks/requirements_table.html.twig";
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
        return array (  183 => 85,  176 => 84,  167 => 78,  162 => 76,  158 => 75,  150 => 70,  147 => 69,  144 => 68,  133 => 64,  129 => 63,  125 => 61,  120 => 60,  117 => 59,  112 => 57,  109 => 56,  106 => 55,  104 => 54,  99 => 53,  93 => 51,  87 => 49,  85 => 48,  80 => 47,  78 => 46,  74 => 44,  71 => 43,  68 => 42,  64 => 41,  57 => 37,  53 => 36,  47 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "install/blocks/requirements_table.html.twig", "/var/www/html/glpi/templates/install/blocks/requirements_table.html.twig");
    }
}
