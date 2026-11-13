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

/* pages/admin/profile/assistance.html.twig */
class __TwigTemplate_d45e684839bd10b76e099f57906156a4 extends Template
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

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 33
        return $this->parent ??= $this->load("pages/admin/profile/base_tab.html.twig", 33);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 34
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 34)->unwrap()->getMacroNamespace();
        // line 36
        $context["is_root_entity_active"] = Session::haveAccessToEntity(0);
        // line 33
        $this->parent = $this->load("pages/admin/profile/base_tab.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 38
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 39
        yield "    ";
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(39))->call("smallTitle", [__("ITIL Templates")], $context, 39, $this->source);
        yield "
    ";
        // line 40
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(40))->call("dropdownField", ["TicketTemplate", "tickettemplates_id", (($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 40)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["tickettemplates_id"] ?? null) : null), __("Default ticket template"), ["full_width" => true, "condition" => Twig\Extension\CoreExtension::merge(["entities_id" => 0], (((($tmp = Session::isMultiEntitiesMode()) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (["is_recursive" => 1]) : ([]))), "addicon" =>         // line 43
($context["is_root_entity_active"] ?? null)]], $context, 40, $this->source);
        // line 44
        yield "
    ";
        // line 45
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(45))->call("dropdownField", ["ChangeTemplate", "changetemplates_id", (($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 45)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["changetemplates_id"] ?? null) : null), __("Default change template"), ["full_width" => true, "condition" => Twig\Extension\CoreExtension::merge(["entities_id" => 0], (((($tmp = Session::isMultiEntitiesMode()) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (["is_recursive" => 1]) : ([]))), "addicon" =>         // line 48
($context["is_root_entity_active"] ?? null)]], $context, 45, $this->source);
        // line 49
        yield "
    ";
        // line 50
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(50))->call("dropdownField", ["ProblemTemplate", "problemtemplates_id", (($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 50)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["problemtemplates_id"] ?? null) : null), __("Default problem template"), ["full_width" => true, "condition" => Twig\Extension\CoreExtension::merge(["entities_id" => 0], (((($tmp = Session::isMultiEntitiesMode()) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (["is_recursive" => 1]) : ([]))), "addicon" =>         // line 53
($context["is_root_entity_active"] ?? null)]], $context, 50, $this->source);
        // line 54
        yield "

    ";
        // line 56
        yield (string) $this->getMacroNamespace()->call("displayRightsMatrix", [($context["item"] ?? null), "central", "tracking", "itilobjects", _n("ITIL object", "ITIL objects", Session::getPluralNumber())], $context, 56, $this->source);
        yield "
    ";
        // line 57
        yield (string) $this->getMacroNamespace()->call("displayRightsMatrix", [($context["item"] ?? null), "central", "tracking", "tickets", $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Ticket", Session::getPluralNumber())], $context, 57, $this->source);
        yield "
    ";
        // line 58
        yield (string) $this->getMacroNamespace()->call("displayRightsMatrix", [($context["item"] ?? null), "central", "tracking", "changes", $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Change", Session::getPluralNumber())], $context, 58, $this->source);
        yield "
    ";
        // line 59
        yield (string) $this->getMacroNamespace()->call("displayRightsMatrix", [($context["item"] ?? null), "central", "tracking", "problems", $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Problem", Session::getPluralNumber())], $context, 59, $this->source);
        yield "
    ";
        // line 60
        yield (string) $this->getMacroNamespace()->call("displayRightsMatrix", [($context["item"] ?? null), "central", "tracking", "followups_tasks", (($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("ITILFollowup", Session::getPluralNumber()) . " / ") . $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("CommonITILTask", Session::getPluralNumber()))], $context, 60, $this->source);
        yield "

    ";
        // line 62
        if (($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("use_notifications") == "0")) {
            // line 63
            yield "        ";
            $context["activation_msg"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 64
                yield "            <span class=\"alert alert-warning\">
                ";
                // line 65
                yield (string) $this->escaper->escape(__("Notifications must be enabled to activate mentions."), "html", null, true);
                yield "
            </span>
        ";
                return; yield;
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 68
            yield "        ";
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(68))->call("htmlField", ["use_mentions", ($context["activation_msg"] ?? null), __("Mentions configuration"), ["full_width" => true]], $context, 68, $this->source);
            yield "
    ";
        } else {
            // line 70
            yield "        ";
            $context["user_mention_helper"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 71
                yield "            ";
                yield (string) $this->escaper->escape(__("Enables or disables the ability to mention users within the application."), "html", null, true);
                yield "
            ";
                // line 72
                yield (string) $this->escaper->escape(((__("Disabled") . ": ") . __("User mentions are disabled for this profile.")), "html", null, true);
                yield "
            ";
                // line 73
                yield (string) $this->escaper->escape(((__("Full") . ": ") . __("Displays all users. Mentioned users will be added as observers if they are not already actors.")), "html", null, true);
                yield "
            ";
                // line 74
                yield (string) $this->escaper->escape(((__("Restricted") . ": ") . __("Limits the display to actors directly involved in the ticket.")), "html", null, true);
                yield "
        ";
                return; yield;
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 76
            yield "        ";
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(76))->call("dropdownArrayField", ["use_mentions", (($_v3 = CoreExtension::getAttribute($this->env, $this->source,             // line 78
($context["item"] ?? null), "fields", [], "any", false, false, false, 78)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["use_mentions"] ?? null) : null), [ (string)Twig\Extension\CoreExtension::constant("Glpi\\RichText\\UserMention::USER_MENTION_DISABLED") => __("Disabled"),  (string)Twig\Extension\CoreExtension::constant("Glpi\\RichText\\UserMention::USER_MENTION_FULL") => __("Full"),  (string)Twig\Extension\CoreExtension::constant("Glpi\\RichText\\UserMention::USER_MENTION_RESTRICTED") => __("Restricted")], __("Mentions configuration"), ["helper" =>             // line 85
($context["user_mention_helper"] ?? null)]], $context, 76, $this->source);
            // line 86
            yield "
    ";
        }
        // line 88
        yield "
    ";
        // line 89
        yield (string) $this->getMacroNamespace()->call("displayRightsMatrix", [($context["item"] ?? null), "central", "tracking", "validations", $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("CommonITILValidation", Session::getPluralNumber())], $context, 89, $this->source);
        yield "

    ";
        // line 91
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(91))->call("smallTitle", [__("Association")], $context, 91, $this->source);
        yield "

    ";
        // line 93
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(93))->call("checkboxField", ["_show_group_hardware", (($_v4 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 93)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["show_group_hardware"] ?? null) : null), __("See hardware of my groups"), ["full_width" => true]], $context, 93, $this->source);
        // line 95
        yield "

    ";
        // line 97
        $context["helpdesk_hardware_field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 98
            yield "        ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Profile::getLinearRightChoice", [$this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Profile::getHelpdeskHardwareTypes", [true]), ["field" => "helpdesk_hardware", "value" => (($_v5 = CoreExtension::getAttribute($this->env, $this->source,             // line 102
($context["item"] ?? null), "fields", [], "any", false, false, false, 102)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["helpdesk_hardware"] ?? null) : null)]]);
            // line 105
            yield "    ";
            return; yield;
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 106
        yield "    ";
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(106))->call("htmlField", ["helpdesk_hardware", ($context["helpdesk_hardware_field"] ?? null), __("Link with items for the creation of tickets"), ["full_width" => true]], $context, 106, $this->source);
        // line 108
        yield "

    ";
        // line 110
        $context["associable_types_field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 111
            yield "        ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Profile::dropdownHelpdeskItemtypes", [["values" => (($_v6 = CoreExtension::getAttribute($this->env, $this->source,             // line 112
($context["item"] ?? null), "fields", [], "any", false, false, false, 112)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["helpdesk_item_type"] ?? null) : null)]]);
            // line 114
            yield "    ";
            return; yield;
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 115
        yield "    ";
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(115))->call("htmlField", ["helpdesk_item_type", ($context["associable_types_field"] ?? null), __("Associable items to tickets, changes and problems"), ["full_width" => true]], $context, 115, $this->source);
        // line 117
        yield "

    ";
        // line 119
        yield (string) $this->getMacroNamespace()->call("displayRightsMatrix", [($context["item"] ?? null), "central", "tracking", "visibility", __("Visibility")], $context, 119, $this->source);
        yield "
    ";
        // line 120
        yield (string) $this->getMacroNamespace()->call("displayRightsMatrix", [($context["item"] ?? null), "central", "tracking", "planning", __("Planning")], $context, 120, $this->source);
        yield "

";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/profile/assistance.html.twig";
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
        return array (  222 => 120,  218 => 119,  214 => 117,  211 => 115,  207 => 114,  205 => 112,  203 => 111,  201 => 110,  197 => 108,  194 => 106,  190 => 105,  188 => 102,  186 => 98,  184 => 97,  180 => 95,  178 => 93,  173 => 91,  168 => 89,  165 => 88,  161 => 86,  159 => 85,  158 => 78,  156 => 76,  150 => 74,  146 => 73,  142 => 72,  137 => 71,  134 => 70,  128 => 68,  121 => 65,  118 => 64,  115 => 63,  113 => 62,  108 => 60,  104 => 59,  100 => 58,  96 => 57,  92 => 56,  88 => 54,  86 => 53,  85 => 50,  82 => 49,  80 => 48,  79 => 45,  76 => 44,  74 => 43,  73 => 40,  68 => 39,  61 => 38,  56 => 33,  54 => 36,  52 => 34,  45 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/profile/assistance.html.twig", "/var/www/html/glpi/templates/pages/admin/profile/assistance.html.twig");
    }
}
