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

/* components/form/inventory_info.html.twig */
class __TwigTemplate_c231a8d31fe764427a1632780ee94bd2 extends Template
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
        if (((($tmp = Session::haveRight("inventory", Twig\Extension\CoreExtension::constant("READ"))) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isDynamic", [], "method", false, false, false, 33) != false))) {
            // line 34
            yield "<div class=\"card m-n2 border-0 shadow-none\">
   <div class=\"card-header\">
      <div class=\"ribbon ribbon-bookmark ribbon-top ribbon-start bg-blue s-1\">
         <i class=\"ti ti-cloud-download fa-2x\" aria-hidden=\"true\"></i>
      </div>
      <h4 class=\"card-title ps-5\">
         ";
            // line 40
            yield (string) $this->escaper->escape(__("Inventory information"), "html", null, true);
            yield "
      </h4>
      ";
            // line 42
            $context["inventory_filename"] = (($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isUsingTrait(($context["item"] ?? null), "Glpi\\Features\\Inventoriable")) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getInventoryFileName", [false], "method", false, false, false, 42)) : (null));
            // line 43
            yield "      ";
            if ( !(null === ($context["inventory_filename"] ?? null))) {
                // line 44
                yield "         <a href=\"";
                yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path(("front/document.send.php?file=_inventory/" . ($context["inventory_filename"] ?? null))), "html", null, true);
                yield "\"
            class=\"btn btn-sm btn-secondary ms-auto\" target=\"_blank\"
            data-bs-toggle=\"tooltip\" data-bs-placement=\"right\"
            title=\"";
                // line 47
                yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::sprintf(__("Download \"%1\$s\" inventory file"), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName(($context["item"] ?? null))), "html", null, true);
                yield "\">
            <i class=\"ti ti-download\" aria-hidden=\"true\"></i>
            <span class=\"visually-hidden\">";
                // line 49
                yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::sprintf(__("Download \"%1\$s\" inventory file"), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName(($context["item"] ?? null))), "html", null, true);
                yield "</span>
         </a>
      ";
            } else {
                // line 52
                yield "         <span class=\"ms-auto\" data-bs-toggle=\"tooltip\" data-bs-placement=\"right\" title=\"";
                yield (string) $this->escaper->escape(__("Inventory file missing"), "html", null, true);
                yield "\">
            <i class=\"ti ti-ban\" aria-hidden=\"true\"></i>
            <span class=\"visually-hidden\">";
                // line 54
                yield (string) $this->escaper->escape(__("Inventory file missing"), "html", null, true);
                yield "</span>
         </span>
      ";
            }
            // line 57
            yield "   </div>

   ";
            // line 59
            $context["agent"] = (($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isUsingTrait(($context["item"] ?? null), "Glpi\\Features\\Inventoriable")) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getInventoryAgent", [], "method", false, false, false, 59)) : (null));
            // line 60
            yield "   ";
            if ( !(null === ($context["agent"] ?? null))) {
                // line 61
                yield "      <div class=\"card-body row\">
         <div class=\"mb-3 col-12 col-sm-4\">
            <div class=\"form-label\">";
                // line 63
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["agent"] ?? null), "getTypeName", [], "method", false, false, false, 63), "html", null, true);
                yield "</div>
            <span>
               <i class=\"";
                // line 65
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["agent"] ?? null), "getIcon", [], "method", false, false, false, 65), "html", null, true);
                yield "\" aria-hidden=\"true\"></i>
               ";
                // line 66
                yield (string) $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink(($context["agent"] ?? null));
                yield "
            </span>
         </div>

         <div class=\"mb-3 col-12 col-sm-4\">
            <div class=\"form-label\">";
                // line 71
                yield (string) $this->escaper->escape(__("Useragent"), "html", null, true);
                yield "</div>
            <span>";
                // line 72
                yield (string) $this->escaper->escape((($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["agent"] ?? null), "fields", [], "any", false, false, false, 72)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["useragent"] ?? null) : null), "html", null, true);
                yield "</span>
         </div>

         <div class=\"mb-3 col-12 col-sm-4\">
            <div class=\"form-label\">";
                // line 76
                yield (string) $this->escaper->escape(__("Inventory tag"), "html", null, true);
                yield "</div>
            <span>";
                // line 77
                yield (string) $this->escaper->escape((($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["agent"] ?? null), "fields", [], "any", false, false, false, 77)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["tag"] ?? null) : null), "html", null, true);
                yield "</span>
         </div>

         <div class=\"mb-3 col-12 col-sm-4\">
            <div class=\"form-label\">";
                // line 81
                yield (string) $this->escaper->escape(__("Public contact address"), "html", null, true);
                yield "</div>
            <span>";
                // line 82
                yield (string) $this->escaper->escape((($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["agent"] ?? null), "fields", [], "any", false, false, false, 82)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["remote_addr"] ?? null) : null), "html", null, true);
                yield "</span>
         </div>

         <div class=\"mb-3 col-12 col-sm-4\">
            <div class=\"form-label\">";
                // line 86
                yield (string) $this->escaper->escape(__("Last contact"), "html", null, true);
                yield "</div>
            <span>";
                // line 87
                yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($_v3 = CoreExtension::getAttribute($this->env, $this->source, ($context["agent"] ?? null), "fields", [], "any", false, false, false, 87)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["last_contact"] ?? null) : null)), "html", null, true);
                yield "</span>
         </div>

         ";
                // line 90
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["last_inventory_update"], "method", false, false, false, 90)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 91
                    yield "            <div class=\"mb-3 col-12 col-sm-4\">
               <div class=\"form-label\">";
                    // line 92
                    yield (string) $this->escaper->escape(__("Last inventory update"), "html", null, true);
                    yield "</div>
               <span>";
                    // line 93
                    yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($_v4 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 93)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["last_inventory_update"] ?? null) : null)), "html", null, true);
                    yield "</span>
            </div>
         ";
                } else {
                    // line 96
                    yield "            <div class=\"mb-3 col-12 col-sm-4\">
            </div>
         ";
                }
                // line 99
                yield "
         <div class=\"mb-3 col-12 col-sm-4\">
            <div class=\"form-label\">
               ";
                // line 102
                yield (string) $this->escaper->escape(__("Agent status"), "html", null, true);
                yield "
               <button type=\"button\" id=\"update-status\" class=\"btn btn-sm btn-icon btn-ghost-secondary\"
                       data-bs-toggle=\"tooltip\" title=\"";
                // line 104
                yield (string) $this->escaper->escape(__("Ask agent about its current status"), "html", null, true);
                yield "\">
                  <i class=\"ti ti-refresh\" aria-hidden=\"true\"></i>
                  <span class=\"visually-hidden\">";
                // line 106
                yield (string) $this->escaper->escape(__("Ask agent about its current status"), "html", null, true);
                yield "</span>
               </button>
            </div>
            <span id=\x27agent_status\x27 aria-live=\"polite\">";
                // line 109
                yield (string) $this->escaper->escape(__("Unknown"), "html", null, true);
                yield "</span>
         </div>

         <div class=\"mb-3 col-12 col-sm-4\">
            <div class=\"form-label\">
               ";
                // line 114
                yield (string) $this->escaper->escape(__("Request inventory"), "html", null, true);
                yield "
               <button type=\"button\" id=\"update-inventory\" class=\"btn btn-sm btn-icon btn-ghost-secondary\"
                       data-bs-toggle=\"tooltip\" title=\"";
                // line 116
                yield (string) $this->escaper->escape(__("Request agent to proceed an new inventory"), "html", null, true);
                yield "\">
                  <i class=\"ti ti-refresh\" aria-hidden=\"true\"></i>
                  <span class=\"visually-hidden\">";
                // line 118
                yield (string) $this->escaper->escape(__("Request agent to proceed an new inventory"), "html", null, true);
                yield "</span>
               </button>
            </div>
            <span id=\x27inventory_status\x27 aria-live=\"polite\">";
                // line 121
                yield (string) $this->escaper->escape(__("Unknown"), "html", null, true);
                yield "</span>
         </div>
      </div>

      <script>
      \$(function () {
         \$(\x27#update-status\x27).on(\x27click\x27, function() {
            var icon = \$(this).find(\x27i\x27);
            icon.addClass(\x27icon-rotate\x27);
            \$.ajax({
               type: \x27POST\x27,
               url: `\${CFG_GLPI.root_doc}/ajax/agent.php`,
               timeout: 30000, // 30 seconds timeout
               dataType: \x27json\x27,
               data: {
                  action: \x27";
                // line 136
                yield (string) $this->escaper->escape($this->escaper->escape(Twig\Extension\CoreExtension::constant("Agent::ACTION_STATUS"), "js"), "html", null, true);
                yield "\x27,
                  id: ";
                // line 137
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["agent"] ?? null), "getID", [], "method", false, false, false, 137), "html", null, true);
                yield "
               },
               success: function(json) {
                  \$(\x27#agent_status\x27).text(json.answer);
               },
               complete: function() {
                  icon.removeClass(\x27icon-rotate\x27);
               }
            });
         });

         \$(\x27#update-inventory\x27).on(\x27click\x27, function() {
            var icon = \$(this).find(\x27i\x27);
            icon.addClass(\x27icon-rotate\x27);
            \$.ajax({
               type: \x27POST\x27,
               url: `\${CFG_GLPI.root_doc}/ajax/agent.php`,
               timeout: 30000, // 30 seconds timeout
               dataType: \x27json\x27,
               data: {
                  action: \x27";
                // line 157
                yield (string) $this->escaper->escape($this->escaper->escape(Twig\Extension\CoreExtension::constant("Agent::ACTION_INVENTORY"), "js"), "html", null, true);
                yield "\x27,
                  id: ";
                // line 158
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["agent"] ?? null), "getID", [], "method", false, false, false, 158), "html", null, true);
                yield "
               },
               success: function(json) {
                  \$(\x27#inventory_status\x27).text(json.answer);
               },
               complete: function() {
                  icon.removeClass(\x27icon-rotate\x27);
               }
            });
         });
      });
      </script>
   ";
            } else {
                // line 171
                yield "   <div class=\"card-body row\">
      <div class=\"mb-3 col-12 col-sm-6\">
         ";
                // line 173
                yield (string) $this->escaper->escape(__("Agent information is not available."), "html", null, true);
                yield "
      </div>
   </div>
   ";
            }
            // line 177
            yield "
   ";
            // line 179
            yield "   ";
            // line 180
            yield "   ";
            if ((($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isUsingTrait(($context["item"] ?? null), "Glpi\\Features\\Inventoriable") && (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getInventoryAgent", [], "method", false, false, false, 180) == null)) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["last_inventory_update"], "method", false, false, false, 180)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 181
                yield "      <div class=\"card-body row\">
         <div class=\"mb-3 col-12 col-sm-6\">
            <div class=\"form-label\">";
                // line 183
                yield (string) $this->escaper->escape(__("Last inventory"), "html", null, true);
                yield "</div>
            <span>";
                // line 184
                yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($_v5 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 184)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["last_inventory_update"] ?? null) : null)), "html", null, true);
                yield "</span>
         </div>
      </div>
   ";
            }
            // line 188
            yield "
   ";
            // line 189
            if ((((($_v6 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 189)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["id"] ?? null) : null) > 0) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["is_dynamic"], "method", false, false, false, 189)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 190
                yield "      ";
                yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::AUTOINVENTORY_INFORMATION"), ($context["item"] ?? null)), "html", null, true);
                yield "
   ";
            }
            // line 192
            yield "</div>
";
        }
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/form/inventory_info.html.twig";
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
        return array (  348 => 192,  342 => 190,  340 => 189,  337 => 188,  330 => 184,  326 => 183,  322 => 181,  319 => 180,  317 => 179,  314 => 177,  307 => 173,  303 => 171,  287 => 158,  283 => 157,  260 => 137,  256 => 136,  238 => 121,  232 => 118,  227 => 116,  222 => 114,  214 => 109,  208 => 106,  203 => 104,  198 => 102,  193 => 99,  188 => 96,  182 => 93,  178 => 92,  175 => 91,  173 => 90,  167 => 87,  163 => 86,  156 => 82,  152 => 81,  145 => 77,  141 => 76,  134 => 72,  130 => 71,  122 => 66,  118 => 65,  113 => 63,  109 => 61,  106 => 60,  104 => 59,  100 => 57,  94 => 54,  88 => 52,  82 => 49,  77 => 47,  70 => 44,  67 => 43,  65 => 42,  60 => 40,  52 => 34,  50 => 33,  47 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/form/inventory_info.html.twig", "/var/www/html/glpi/templates/components/form/inventory_info.html.twig");
    }
}
