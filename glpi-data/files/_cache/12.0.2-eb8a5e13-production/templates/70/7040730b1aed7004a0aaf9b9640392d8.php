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

/* components/form/single-action.html.twig */
class __TwigTemplate_efd638803a62dac885eee40a3f6e86ef extends Template
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
        if ( !array_key_exists("onlyicon", $context)) {
            // line 34
            yield "   ";
            $context["onlyicon"] = false;
        }
        // line 36
        yield "
";
        // line 37
        if (( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 37) . "::isMassiveActionAllowed"), [(($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 37)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["id"] ?? null) : null)])) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 38
            yield "   ";
            $context["input"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getMassiveActionsForItem", [], "method", false, false, false, 38), "getInput", [], "method", false, false, false, 38);
            // line 39
            yield "   ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (($_v1 = ($context["input"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["actions"] ?? null) : null)) > 0)) {
                // line 40
                yield "   ";
                $context["ms_auto"] = (((($tmp = (((array_key_exists("single_actions_ms_auto", $context) &&  !(null === $context["single_actions_ms_auto"]))) ? ($context["single_actions_ms_auto"]) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ms-auto") : (""));
                // line 41
                yield "<div class=\"d-none d-sm-block btn-group ";
                yield (string) $this->escaper->escape(($context["ms_auto"] ?? null), "html", null, true);
                yield "\" aria-labelledby=\"single-action\"
     ";
                // line 42
                if ((($tmp = ($context["onlyicon"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"";
                }
                yield ">
   <button class=\"btn ";
                // line 43
                yield (string) (((($tmp = ($context["onlyicon"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("btn-icon") : ("dropdown-toggle"));
                yield " btn-outline-secondary\" type=\"button\"
           id=\"single-action\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\"
           aria-expanded=\"false\">
      <i class=\"ti ti-dots-vertical\" aria-hidden=\"true\"></i>
      ";
                // line 47
                if ( !(($tmp = ($context["onlyicon"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 48
                    yield "         <span>";
                    yield (string) $this->escaper->escape(_n("Action", "Actions", Session::getPluralNumber()), "html", null, true);
                    yield "</span>
      ";
                }
                // line 50
                yield "   </button>

   <div id=\"single-ma-action-menu\" class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow mt-2\">
      ";
                // line 53
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((($_v2 = ($context["input"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["actions"] ?? null) : null));
                foreach ($context['_seq'] as $context["key"] => $context["action"]) {
                    // line 54
                    yield "         <a class=\"dropdown-item\" data-action=\"";
                    yield (string) $this->escaper->escape($context["key"], "html", null, true);
                    yield "\" role=\"button\" href=\"#\">";
                    yield (string) $context["action"];
                    yield "</a>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['key'], $context['action'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 56
                yield "   </div>
</div>
<script>
\$(function () {
   var ma = ";
                // line 60
                yield (string) json_encode(($context["input"] ?? null));
                yield ";

   \$(document).on(\x27click\x27, \x27#single-ma-action-menu .moreactions\x27, function () {
      \$(\x27.moreactions + .dropdown-menu\x27).toggle();
   });

   \$(document).on(\x27click\x27, function (event) {
      var target = \$(event.target);
      var parent = target.parent();

      if (!target.hasClass(\x27moreactions\x27)
         && !parent.hasClass(\x27moreactions\x27)) {
         \$(\x27.moreactions + .dropdown-menu\x27).hide();
      }
   });

   \$(document).on(\x27click\x27, \x27#single-ma-action-menu [data-action]\x27, function () {
      \$(\x27.moreactions + .dropdown-menu\x27).hide();

      var current_action = \$(this).data(\x27action\x27);

      glpi_ajax_dialog({
         url: `\${CFG_GLPI.root_doc}/ajax/dropdownMassiveAction.php`,
         title: ma.actions[current_action],
         params: Object.assign(
            { action: current_action },
            ma
         ),
         appendTo: \x27#massive_container_";
                // line 88
                yield (string) $this->escaper->escape($this->escaper->escape($this->escaper->escape(($context["rand"] ?? null), "css"), "js"), "html", null, true);
                yield "\x27,
      });
   });
});
</script>
   ";
            }
        }
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/form/single-action.html.twig";
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
        return array (  154 => 88,  123 => 60,  117 => 56,  105 => 54,  101 => 53,  96 => 50,  90 => 48,  88 => 47,  81 => 43,  75 => 42,  70 => 41,  67 => 40,  64 => 39,  61 => 38,  59 => 37,  56 => 36,  52 => 34,  50 => 33,  47 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/form/single-action.html.twig", "/var/www/html/glpi/templates/components/form/single-action.html.twig");
    }
}
