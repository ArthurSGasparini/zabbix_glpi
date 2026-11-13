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

/* components/search/display_data.html.twig */
class __TwigTemplate_f882937a048771bac1b88bfc0c53ab7e extends Template
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
        $context["is_ajax"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "searchform_id", [], "array", true, true, false, 33) &&  !(null === (($_v0 = ($context["data"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["searchform_id"] ?? null) : null)));
        // line 34
        $context["fluid_search"] = ((array_key_exists("fluid_search", $context)) ? (Twig\Extension\CoreExtension::default(($context["fluid_search"] ?? null), true)) : (true));
        // line 35
        if ( !(($tmp = ($context["is_ajax"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 36
            yield "   <div class=\"ajax-container search-display-data\">
";
        }
        // line 38
        $context["push_history"] = (array_key_exists("push_history", $context) && (($tmp = ($context["push_history"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp));
        // line 39
        $context["hide_controls"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "search", [], "array", false, true, false, 39), "hide_controls", [], "array", true, true, false, 39) &&  !(null === (($_v1 = (($_v2 = ($context["data"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["search"] ?? null) : null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["hide_controls"] ?? null) : null)))) ? ((($_v3 = (($_v4 = ($context["data"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["search"] ?? null) : null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["hide_controls"] ?? null) : null)) : ((((array_key_exists("hide_controls", $context) &&  !(null === $context["hide_controls"]))) ? ($context["hide_controls"]) : (false))));
        // line 40
        yield "
";
        // line 42
        $context["normalized_itemtype"] = Twig\Extension\CoreExtension::replace(($context["itemtype"] ?? null), ["\\" => ""]);
        // line 43
        $context["as_map"] = ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "search", [], "array", false, true, false, 43), "as_map", [], "array", true, true, false, 43) &&  !(null === (($_v5 = (($_v6 = ($context["data"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["search"] ?? null) : null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["as_map"] ?? null) : null)))) ? ((($_v7 = (($_v8 = ($context["data"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["search"] ?? null) : null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["as_map"] ?? null) : null)) : (false)) == 1);
        // line 44
        yield "
<div
    class=\"card search-card\"
    data-testid=\"search-format-";
        // line 47
        yield (string) (((($tmp = ($context["as_map"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("map") : ("table"));
        yield "\"
>
    ";
        // line 49
        if ( !(($tmp = ($context["hide_controls"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 50
            yield "        ";
            if (((($_v9 = ($context["data"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["display_type"] ?? null) : null) == Twig\Extension\CoreExtension::constant("Search::GLOBAL_SEARCH"))) {
                // line 51
                yield "            <div class=\"card-header d-flex justify-content-between search-header\">
                <h3>";
                // line 52
                yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName(($context["itemtype"] ?? null)), "html", null, true);
                yield "</h3>

                ";
                // line 54
                if ((($context["count"] ?? null) > (($context["start"] ?? null) + Twig\Extension\CoreExtension::constant("Search::GLOBAL_DISPLAY_COUNT")))) {
                    // line 55
                    yield "                    <a class=\"btn btn-ghost-secondary\" href=\"";
                    yield (string) $this->escaper->escape(($context["href"] ?? null), "html", null, true);
                    yield "\">
                        <i class=\"ti ti-eye\" aria-hidden=\"true\"></i>
                        <span>";
                    // line 57
                    yield (string) $this->escaper->escape(__("View all"), "html", null, true);
                    yield "</span>
                    </a>
                ";
                }
                // line 60
                yield "            </div>
        ";
            } else {
                // line 62
                yield "            ";
                yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/search/controls.html.twig");
                yield "
        ";
            }
            // line 64
            yield "    ";
        }
        // line 65
        yield "
    ";
        // line 66
        $context["massive_action_form_id"] = (("massform" . ($context["normalized_itemtype"] ?? null)) . ($context["rand"] ?? null));
        // line 67
        yield "    <form id=\"";
        yield (string) $this->escaper->escape(($context["massive_action_form_id"] ?? null), "html", null, true);
        yield "\" method=\"get\" action=\"";
        yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/massiveaction.php"), "html", null, true);
        yield "\"
          data-search-itemtype=\"";
        // line 68
        yield (string) $this->escaper->escape((($_v10 = ($context["data"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["itemtype"] ?? null) : null), "html", null, true);
        yield "\"
          data-start=\"";
        // line 69
        yield (string) $this->escaper->escape(($context["start"] ?? null), "html", null, true);
        yield "\" data-count=\"";
        yield (string) $this->escaper->escape(($context["count"] ?? null), "html", null, true);
        yield "\" data-limit=\"";
        yield (string) $this->escaper->escape(($context["limit"] ?? null), "html", null, true);
        yield "\" data-submit-once
          class=\"masssearchform\">

        ";
        // line 72
        if ( !(($tmp = ($context["as_map"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 73
            yield "            ";
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/search/table.html.twig");
            yield "
        ";
        } elseif ((        // line 74
($context["count"] ?? null) > 0)) {
            // line 75
            yield "            ";
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/search/map.html.twig");
            yield "
        ";
        }
        // line 77
        yield "        ";
        if ((($context["count"] ?? null) > 0)) {
            // line 78
            yield "            ";
            if ((((($_v11 = ($context["data"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["display_type"] ?? null) : null) != Twig\Extension\CoreExtension::constant("Search::GLOBAL_SEARCH")) &&  !(($tmp = ($context["as_map"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 79
                yield "                <div class=\"card-footer search-footer ";
                yield (string) (( !(($tmp = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("search_pagination_on_top")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("d-block") : ("d-block d-xxl-none"));
                yield "\">
                    ";
                // line 80
                yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/pager.html.twig");
                yield "
                </div>
            ";
            }
            // line 83
            yield "        ";
        } elseif ((($tmp = ($context["as_map"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 84
            yield "            ";
            if ((($tmp = ($context["search_error"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 85
                yield "                ";
                yield (string) $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("Alert:Danger", ["heading" => __("An error occurred during the search"), "content" => __("Consider changing the search criteria or adjusting the displayed columns.")]);
                yield "
            ";
            } else {
                // line 87
                yield "                ";
                yield (string) $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("Alert", ["content" => __("No results found")]);
                yield "
            ";
            }
            // line 89
            yield "        ";
        }
        // line 90
        yield "    </form>
</div>
";
        // line 92
        if ( !(($tmp = ($context["is_ajax"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 93
            yield "   </div>

   ";
            // line 95
            if ( !(($tmp = ($context["as_map"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 96
                yield "      <script>
          window.initFluidSearch";
                // line 97
                yield (string) $this->escaper->escape(($context["rand"] ?? null), "html", null, true);
                yield "  = () => {
             const allowed_forced_params = [\x27hide_controls\x27, \x27usesession\x27, \x27forcetoview\x27, \x27criteria\x27, \x27showmassiveactions\x27];
             let forced_params = {};
             let all_params = ";
                // line 100
                yield (string) json_encode(((CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "search", [], "array", true, true, false, 100)) ? (Twig\Extension\CoreExtension::default((($_v12 = ($context["data"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["search"] ?? null) : null), [])) : ([])));
                yield ";

             \$.each(all_params, (k, v) => {
                if (allowed_forced_params.includes(k)) {
                   forced_params[k] = v;
                }
             });

             new GLPI.Search.ResultsView(
                \"";
                // line 109
                yield (string) $this->escaper->escape(($context["massive_action_form_id"] ?? null), "html", null, true);
                yield "\",
                GLPI.Search.Table,
                ";
                // line 111
                yield (string) (((($tmp = ($context["push_history"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
                yield ",
                forced_params
             );
          };
          if (document.readyState === \x27complete\x27) {
              initFluidSearch";
                // line 116
                yield (string) $this->escaper->escape(($context["rand"] ?? null), "html", null, true);
                yield "();
          } else {
              \$(document).on(\x27ready\x27, initFluidSearch";
                // line 118
                yield (string) $this->escaper->escape(($context["rand"] ?? null), "html", null, true);
                yield ");
          }
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
        return "components/search/display_data.html.twig";
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
        return array (  251 => 118,  246 => 116,  238 => 111,  233 => 109,  221 => 100,  215 => 97,  212 => 96,  210 => 95,  206 => 93,  204 => 92,  200 => 90,  197 => 89,  191 => 87,  185 => 85,  182 => 84,  179 => 83,  173 => 80,  168 => 79,  165 => 78,  162 => 77,  156 => 75,  154 => 74,  149 => 73,  147 => 72,  137 => 69,  133 => 68,  126 => 67,  124 => 66,  121 => 65,  118 => 64,  112 => 62,  108 => 60,  102 => 57,  96 => 55,  94 => 54,  89 => 52,  86 => 51,  83 => 50,  81 => 49,  76 => 47,  71 => 44,  69 => 43,  67 => 42,  64 => 40,  62 => 39,  60 => 38,  56 => 36,  54 => 35,  52 => 34,  50 => 33,  47 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/search/display_data.html.twig", "/var/www/html/glpi/templates/components/search/display_data.html.twig");
    }
}
