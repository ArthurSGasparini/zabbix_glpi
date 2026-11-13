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

/* components/form/header_content.html.twig */
class __TwigTemplate_1ccfa658c438d2a08d62a42495aadc48 extends Template
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
        $context["canedit"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "canedit", [], "array", true, true, false, 33) &&  !(null === (($_v0 = ($context["params"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["canedit"] ?? null) : null)))) ? ((($_v1 = ($context["params"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["canedit"] ?? null) : null)) : (true));
        // line 34
        $context["withtemplate"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "withtemplate", [], "array", true, true, false, 34) &&  !(null === (($_v2 = ($context["params"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["withtemplate"] ?? null) : null)))) ? ((($_v3 = ($context["params"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["withtemplate"] ?? null) : null)) : (""));
        // line 35
        $context["rand"] = ((array_key_exists("rand", $context)) ? (Twig\Extension\CoreExtension::default(($context["rand"] ?? null), Twig\Extension\CoreExtension::random($this->env->getCharset()))) : (Twig\Extension\CoreExtension::random($this->env->getCharset())));
        // line 36
        $context["nametype"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "formtitle", [], "array", true, true, false, 36) &&  !(null === (($_v4 = ($context["params"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["formtitle"] ?? null) : null)))) ? ((($_v5 = ($context["params"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["formtitle"] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getTypeName", [1], "method", false, false, false, 36)));
        // line 37
        $context["friendlyname"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "friendlyname", [], "array", true, true, false, 37) &&  !(null === (($_v6 = ($context["params"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["friendlyname"] ?? null) : null)))) ? ((($_v7 = ($context["params"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["friendlyname"] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getHeaderName", [], "method", false, false, false, 37)));
        // line 38
        $context["id"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 38), "id", [], "array", true, true, false, 38) &&  !(null === (($_v8 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 38)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["id"] ?? null) : null)))) ? ((($_v9 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 38)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["id"] ?? null) : null)) : ( -1));
        // line 39
        $context["in_navheader"] = ((array_key_exists("in_navheader", $context)) ? (Twig\Extension\CoreExtension::default(($context["in_navheader"] ?? null), false)) : (false));
        // line 40
        $context["header_toolbar"] = ((array_key_exists("header_toolbar", $context)) ? (Twig\Extension\CoreExtension::default(($context["header_toolbar"] ?? null), [])) : ([]));
        // line 41
        $context["entity_name"] = ((array_key_exists("entity_name", $context)) ? (Twig\Extension\CoreExtension::default(($context["entity_name"] ?? null), "")) : (""));
        // line 43
        $context["level"] = ((array_key_exists("level", $context)) ? (Twig\Extension\CoreExtension::default(($context["level"] ?? null), 3)) : (3));
        // line 44
        $context["level"] = ((CoreExtension::inFilter(($context["level"] ?? null), [1, 2, 3, 4, 5, 6])) ? (($context["level"] ?? null)) : (3));
        // line 45
        yield "
";
        // line 46
        if ( !array_key_exists("entity_id", $context)) {
            // line 47
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 47) == "Entity")) {
                // line 48
                yield "        ";
                $context["entity_id"] = ((((($_v10 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 48)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["id"] ?? null) : null) == 0)) ? (null) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "entities_id", [], "array", true, true, false, 48) &&  !(null === (($_v11 = ($context["params"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["entities_id"] ?? null) : null)))) ? ((($_v12 = ($context["params"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["entities_id"] ?? null) : null)) : ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 48), "entities_id", [], "array", true, true, false, 48) &&  !(null === (($_v13 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 48)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["entities_id"] ?? null) : null)))) ? ((($_v14 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 48)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["entities_id"] ?? null) : null)) : ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity")))))));
                // line 49
                yield "    ";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isEntityAssign", [], "method", false, false, false, 49)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 50
                yield "        ";
                $context["entity_id"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "entities_id", [], "array", true, true, false, 50) &&  !(null === (($_v15 = ($context["params"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["entities_id"] ?? null) : null)))) ? ((($_v16 = ($context["params"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16["entities_id"] ?? null) : null)) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getEntityID", [], "method", true, true, false, 50) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 50)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 50)) : ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity")))));
                // line 51
                yield "    ";
            } else {
                // line 52
                yield "        ";
                $context["entity_id"] = 0;
                // line 53
                yield "    ";
            }
            // line 54
            yield "    ";
            if ((($tmp = Session::isMultiEntitiesMode()) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 55
                yield "        ";
                $context["entity_name"] = (( !(null === ($context["entity_id"] ?? null))) ? ($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("Entity", ($context["entity_id"] ?? null))) : (null));
                // line 56
                yield "    ";
            }
        }
        // line 58
        yield "
";
        // line 59
        if (((($context["withtemplate"] ?? null) == 2) &&  !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 59)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 60
            yield "   ";
            $context["template_name"] = (($_v17 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 60)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17["template_name"] ?? null) : null);
            // line 61
            yield "   <input type=\"hidden\" name=\"template_name\" value=\"";
            yield (string) $this->escaper->escape(($context["template_name"] ?? null), "html", null, true);
            yield "\" />
   ";
            // line 62
            $context["nametype"] = Twig\Extension\CoreExtension::sprintf(__("Created from the template %s"), ($context["template_name"] ?? null));
        } elseif ((        // line 63
($context["withtemplate"] ?? null) == 1)) {
            // line 64
            yield "   ";
            $context["template_name"] = (($_v18 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 64)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18["template_name"] ?? null) : null);
            // line 65
            yield "   <input type=\"hidden\" name=\"is_template\" value=\"1\" />
";
        } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,         // line 66
($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 66)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 67
            yield "   ";
            $context["nametype"] = Twig\Extension\CoreExtension::sprintf(__("%1\$s - %2\$s"), __("New item"), ($context["nametype"] ?? null));
        }
        // line 69
        yield "
";
        // line 70
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "canEdit", [(($_v19 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 70)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19["id"] ?? null) : null)], "method", false, false, false, 70)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 71
            yield "   <form name=\"massaction_";
            yield (string) $this->escaper->escape(($context["rand"] ?? null), "html", null, true);
            yield "\" id=\"massaction_";
            yield (string) $this->escaper->escape(($context["rand"] ?? null), "html", null, true);
            yield "\" method=\"post\"
         action=\"";
            // line 72
            yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/front/massiveaction.php"), "html", null, true);
            yield "?_single_item[itemtype]=";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 72), "html", null, true);
            yield "&_single_item[id]=";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getID", [], "method", false, false, false, 72), "html", null, true);
            yield "\" data-submit-once>
      <div id=\"massive_container_";
            // line 73
            yield (string) $this->escaper->escape(($context["rand"] ?? null), "html", null, true);
            yield "\"></div>
   </form>
";
        }
        // line 76
        yield "
<div id=\"header_";
        // line 77
        yield (string) $this->escaper->escape(($context["rand"] ?? null), "html", null, true);
        yield "\"
     class=\"card-header main-header d-flex flex-wrap flex-md-nowrap me-2 mt-n2 align-items-stretch ";
        // line 78
        if ((($tmp = ($context["in_navheader"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " align-self-end ";
        }
        yield " flex-grow-1\" style=\"min-width: 100px;\">
   ";
        // line 79
        if (((($context["withtemplate"] ?? null) == 1) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 79)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 80
            yield "      <input type=\"text\" class=\"form-control ms-4 mb-2\" placeholder=\"";
            yield (string) $this->escaper->escape(__("Template name"), "html", null, true);
            yield "\"
             name=\"template_name\" id=\"textfield_template_name";
            // line 81
            yield (string) $this->escaper->escape(($context["rand"] ?? null), "html", null, true);
            yield "\"
             value=\"";
            // line 82
            yield (string) $this->escaper->escape(($context["template_name"] ?? null), "html", null, true);
            yield "\" />
   ";
        }
        // line 84
        yield "   <h";
        yield (string) $this->escaper->escape(($context["level"] ?? null), "html", null, true);
        yield " class=\"card-title d-flex align-items-center ps-0 ";
        yield (string) (((($tmp = ($context["in_navheader"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ps-sm-5") : ("ps-sm-4"));
        yield "\">
      ";
        // line 85
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "showFriendlyNameBadgeInForm", [], "method", false, false, false, 85)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 86
            yield "         ";
            $context["icon"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getIcon", [], "method", false, false, false, 86);
            // line 87
            yield "         ";
            if (( !(($tmp = ($context["in_navheader"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["icon"] ?? null)) > 0))) {
                // line 88
                yield "            <div class=\"ribbon ribbon-bookmark ribbon-top ribbon-start bg-blue s-1\">
               <i class=\"";
                // line 89
                yield (string) $this->escaper->escape(($context["icon"] ?? null), "html", null, true);
                yield " fa-2x\" aria-hidden=\"true\"></i>
            </div>
         ";
            }
            // line 92
            yield "         <span ";
            if ((($tmp = ($context["in_navheader"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " class=\"status rounded-1 me-1\" ";
            }
            yield ">
            ";
            // line 93
            if ((($tmp = ($context["in_navheader"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 94
                yield "               <i class=\"";
                yield (string) $this->escaper->escape(($context["icon"] ?? null), "html", null, true);
                yield "\" aria-hidden=\"true\"></i>
            ";
            }
            // line 96
            yield "            ";
            if (((($context["withtemplate"] ?? null) == 1) && (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "id", [], "any", false, false, false, 96) > 0))) {
                // line 97
                yield "               ";
                yield (string) $this->escaper->escape(_n("Template", "Templates", 1), "html", null, true);
                yield " - ";
                yield (string) $this->escaper->escape(($context["nametype"] ?? null), "html", null, true);
                yield " - ";
                yield (string) $this->escaper->escape(($context["template_name"] ?? null), "html", null, true);
                yield "
            ";
            } elseif ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 98
($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 98)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 99
                yield "               ";
                yield (string) $this->escaper->escape(($context["nametype"] ?? null), "html", null, true);
                yield " - <span id=\"header-friendlyname\"> ";
                yield (string) $this->escaper->escape(($context["friendlyname"] ?? null), "html", null, true);
                yield " </span>
            ";
            } else {
                // line 101
                yield "               ";
                yield (string) $this->escaper->escape(($context["nametype"] ?? null), "html", null, true);
                yield "
            ";
            }
            // line 103
            yield "         </span>
         ";
            // line 104
            if ((((($tmp = ($context["in_navheader"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["is_dynamic"], "method", false, false, false, 104)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) && (($tmp = (($_v20 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 104)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20["is_dynamic"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 105
                yield "            <span class=\"mx-1 status rounded-1\" title=\"";
                yield (string) $this->escaper->escape(__("Automatic Inventory"), "html", null, true);
                yield "\" data-bs-toggle=\"tooltip\">
               <i class=\"";
                // line 106
                yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Agent::getIcon"), "html", null, true);
                yield "\" aria-hidden=\"true\"></i>
            </span>
         ";
            }
            // line 109
            yield "      ";
        }
        // line 110
        yield "      ";
        if (((($tmp = ($context["in_navheader"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["is_deleted"], "method", false, false, false, 110)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 111
            yield "      ";
            $context["title"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["date_mod"], "method", false, false, false, 111)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (Twig\Extension\CoreExtension::sprintf(__("Item has been deleted on %s"), (($_v21 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 111)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21["date_mod"] ?? null) : null))) : (__("Deleted")));
            // line 112
            yield "      <span
         id=\"header-is-deleted\"
         class=\"mx-1 status rounded-1\"
         title=\"";
            // line 115
            yield (string) $this->escaper->escape(($context["title"] ?? null), "html", null, true);
            yield "\"
         data-bs-toggle=\"tooltip\"
      >
         <i class=\"ti ti-trash\" aria-hidden=\"true\"></i>
         ";
            // line 119
            yield (string) $this->escaper->escape(__("Deleted"), "html", null, true);
            yield "
      </span>
      ";
        }
        // line 122
        yield "
      ";
        // line 123
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["header_toolbar"] ?? null)) > 0)) {
            // line 124
            yield "         <div class=\"d-inline-block toolbar ms-2\">
            ";
            // line 125
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["header_toolbar"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["raw_element"]) {
                // line 126
                yield "               ";
                yield (string) $context["raw_element"];
                yield "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['raw_element'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 128
            yield "         </div>
      ";
        }
        // line 130
        yield "   </h";
        yield (string) $this->escaper->escape(($context["level"] ?? null), "html", null, true);
        yield ">

   ";
        // line 132
        $context["single_actions_ms_auto"] = true;
        // line 133
        yield "   ";
        if ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isEntityAssign", [], "method", false, false, false, 133)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = Session::isMultiEntitiesMode()) && $tmp instanceof Markup ? (string) $tmp : $tmp)) &&  !$this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf(($context["item"] ?? null), "Entity"))) {
            // line 134
            yield "      ";
            $context["single_actions_ms_auto"] = false;
            // line 135
            yield "       <div class=\"badge entity-name mx-1 px-2 ms-auto align-items-center col\" title=\"";
            yield (string) $this->escaper->escape(($context["entity_name"] ?? null), "html", null, true);
            yield "\" style=\"min-width: 100px; max-width: fit-content;\">
           <i class=\"ti ti-stack me-2\" aria-hidden=\"true\"></i>
           <div class=\"overflow-hidden text-truncate text-nowrap\">
               <span class=\"float-end ps-1\">";
            // line 138
            yield (string) $this->escaper->escape(($context["entity_name"] ?? null), "html", null, true);
            yield "</span>
           </div>
       </div>

      ";
            // line 142
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "maybeRecursive", [], "method", false, false, false, 142)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 143
                yield "         <span class=\"badge is_recursive-toggle mx-1 px-2 align-items-center col-auto\">
            <label class=\"form-check d-flex align-items-center mb-0\">
               ";
                // line 145
                $context["disabled"] = (($context["canedit"] ?? null) == false);
                // line 146
                yield "               ";
                $context["comment"] = __("Change visibility in child entities.");
                // line 147
                yield "
               ";
                // line 148
                if ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf(($context["item"] ?? null), "CommonDBChild")) {
                    // line 149
                    yield "                  ";
                    $context["comment"] = __("Can՛t change this attribute. It՛s inherited from its parent.");
                    // line 150
                    yield "                  ";
                    $context["disabled"] = true;
                    // line 151
                    yield "               ";
                } elseif ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "canRecurs", [], "method", false, false, false, 151)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 152
                    yield "                  ";
                    $context["comment"] = __("You are not allowed to change the visibility flag for child entities.");
                    // line 153
                    yield "                  ";
                    $context["disabled"] = true;
                    // line 154
                    yield "               ";
                } elseif ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "canUnrecurs", [], "method", false, false, false, 154)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 155
                    yield "                  ";
                    $context["comment"] = __("Flag change forbidden. Linked items found.");
                    // line 156
                    yield "                  ";
                    $context["disabled"] = true;
                    // line 157
                    yield "               ";
                }
                // line 158
                yield "
               ";
                // line 159
                if ( !(($tmp = ($context["disabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<input form=\"main-form\" type=\"hidden\" name=\"is_recursive\" value=\"0\" />";
                }
                // line 160
                yield "               <input form=\"main-form\" class=\"form-check-input\" type=\"checkbox\" name=\"is_recursive\" value=\"1\"
                  ";
                // line 161
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isRecursive", [], "method", false, false, false, 161)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "checked=\"checked\"";
                }
                // line 162
                yield "                  ";
                if ((($tmp = ($context["disabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "disabled=\"disabled\"";
                }
                // line 163
                yield "                  data-glpi-child-entities-checkbox
               />
               ";
                // line 165
                if ((($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf(($context["item"] ?? null), "CommonDBChild") && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 165)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isRecursive", [], "method", false, false, false, 165)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                    // line 166
                    yield "                  ";
                    // line 167
                    yield "                  <input form=\"main-form\" type=\"hidden\" name=\"is_recursive\" value=\"1\" />
               ";
                }
                // line 169
                yield "               <span class=\"form-check-label mb-0 mx-2\">
                  ";
                // line 170
                yield (string) $this->escaper->escape(__("Child entities"), "html", null, true);
                yield "
                  <i class=\"ti ti-info-circle ms-1\" title=\"";
                // line 171
                yield (string) $this->escaper->escape(($context["comment"] ?? null), "html", null, true);
                yield "\" data-bs-toggle=\"tooltip\" role=\"img\" aria-hidden=\"true\"></i>
                  <span class=\"visually-hidden\">";
                // line 172
                yield (string) $this->escaper->escape(($context["comment"] ?? null), "html", null, true);
                yield "</span>
               </span>
            </label>
         </span>
      ";
            }
            // line 177
            yield "   ";
        }
        // line 178
        yield "
   ";
        // line 179
        yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/form/single-action.html.twig");
        yield "
</div>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/form/header_content.html.twig";
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
        return array (  455 => 179,  452 => 178,  449 => 177,  441 => 172,  437 => 171,  433 => 170,  430 => 169,  426 => 167,  424 => 166,  422 => 165,  418 => 163,  413 => 162,  409 => 161,  406 => 160,  402 => 159,  399 => 158,  396 => 157,  393 => 156,  390 => 155,  387 => 154,  384 => 153,  381 => 152,  378 => 151,  375 => 150,  372 => 149,  370 => 148,  367 => 147,  364 => 146,  362 => 145,  358 => 143,  356 => 142,  349 => 138,  342 => 135,  339 => 134,  336 => 133,  334 => 132,  328 => 130,  324 => 128,  314 => 126,  310 => 125,  307 => 124,  305 => 123,  302 => 122,  296 => 119,  289 => 115,  284 => 112,  281 => 111,  278 => 110,  275 => 109,  269 => 106,  264 => 105,  262 => 104,  259 => 103,  253 => 101,  245 => 99,  243 => 98,  234 => 97,  231 => 96,  225 => 94,  223 => 93,  216 => 92,  210 => 89,  207 => 88,  204 => 87,  201 => 86,  199 => 85,  192 => 84,  187 => 82,  183 => 81,  178 => 80,  176 => 79,  170 => 78,  166 => 77,  163 => 76,  157 => 73,  149 => 72,  142 => 71,  140 => 70,  137 => 69,  133 => 67,  131 => 66,  128 => 65,  125 => 64,  123 => 63,  121 => 62,  116 => 61,  113 => 60,  111 => 59,  108 => 58,  104 => 56,  101 => 55,  98 => 54,  95 => 53,  92 => 52,  89 => 51,  86 => 50,  83 => 49,  80 => 48,  77 => 47,  75 => 46,  72 => 45,  70 => 44,  68 => 43,  66 => 41,  64 => 40,  62 => 39,  60 => 38,  58 => 37,  56 => 36,  54 => 35,  52 => 34,  50 => 33,  47 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/form/header_content.html.twig", "/var/www/html/glpi/templates/components/form/header_content.html.twig");
    }
}
