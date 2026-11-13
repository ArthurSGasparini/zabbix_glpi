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

/* layout/parts/profile_selector.html.twig */
class __TwigTemplate_56fef6fd81ea35cac22db785d21e8f52 extends Template
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
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 34
        yield "
<div class=\"dropdown dropstart\">
    <button
        class=\"dropdown-item dropdown-toggle\"
        type=\"button\"
        data-bs-toggle=\"dropdown\"
        aria-haspopup=\"true\"
        aria-expanded=\"false\"
    >
        <i class=\"ti ti-user-check\" aria-hidden=\"true\"></i>
        <span class=\"visually-hidden\">";
        // line 44
        yield (string) $this->escaper->escape(__("Change profile"), "html", null, true);
        yield "</span>
        ";
        // line 45
        yield (string) (((CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveprofile"), "name", [], "array", true, true, false, 45) &&  !(null === (($_v0 = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveprofile")) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["name"] ?? null) : null)))) ? ($this->escaper->escape((($_v1 = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveprofile")) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["name"] ?? null) : null), "html", null, true)) : (""));
        yield "
    </button>
    <div class=\"dropdown-menu\" data-bs-popper=\"none\">
        <span class=\"dropdown-header\">";
        // line 48
        yield (string) $this->escaper->escape(__("Profiles"), "html", null, true);
        yield "</span>
        ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiprofiles"));
        foreach ($context['_seq'] as $context["profile_id"] => $context["profile"]) {
            // line 50
            yield "            ";
            $context["is_active"] = ($context["profile_id"] == (((CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveprofile"), "id", [], "array", true, true, false, 50) &&  !(null === (($_v2 = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveprofile")) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["id"] ?? null) : null)))) ? ((($_v3 = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveprofile")) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["id"] ?? null) : null)) : (0)));
            // line 51
            yield "            <form action=\"";
            yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/Session/ChangeProfile"), "html", null, true);
            yield "\" method=\"POST\">
                <button
                    class=\"dropdown-item ";
            // line 53
            yield (string) (((($tmp = ($context["is_active"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : (""));
            yield "\"
                    type=\"submit\"
                >
                    <i class=\"ti ti-user-check\" aria-hidden=\"true\"></i>
                    ";
            // line 57
            yield (string) $this->escaper->escape((($_v4 = $context["profile"]) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["name"] ?? null) : null), "html", null, true);
            yield "
                </button>
                <input type=\"hidden\" name=\"id\" value=\"";
            // line 59
            yield (string) $this->escaper->escape($context["profile_id"], "html", null, true);
            yield "\" />
            </form>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['profile_id'], $context['profile'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 62
        yield "    </div>
</div>

";
        // line 65
        $context["current_entity"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity_name");
        // line 66
        $context["current_entity_short"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity_shortname");
        // line 67
        if ((($context["current_entity"] ?? null) != ($context["current_entity_short"] ?? null))) {
            // line 68
            yield "    ";
            $context["current_entity_short"] = ("... > " . ($context["current_entity_short"] ?? null));
        }
        // line 70
        if ( !(($tmp = Session::isMultiEntitiesMode()) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 71
            yield "    <span class=\"dropdown-item dropdown-item-text\" title=\"";
            yield (string) $this->escaper->escape(($context["current_entity"] ?? null), "html", null, true);
            yield "\">
        <i class=\"ti ti-stack\" aria-hidden=\"true\"></i>
        ";
            // line 73
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(($context["current_entity_short"] ?? null)), "truncate", [35, "..."], "method", false, false, false, 73), "html", null, true);
            yield "
    </span>
";
        } else {
            // line 76
            yield "    <div class=\"dropdown dropstart\" id=\"entity-tree-dropdown-";
            yield (string) $this->escaper->escape(($context["rand"] ?? null), "html", null, true);
            yield "\"></div>

    <script type=\"module\">
        window.Vue.createApp(window.Vue.components[\x27EntitySelector/EntitySelector\x27].component, {
            current_entity: \x27";
            // line 80
            yield (string) $this->escaper->escape($this->escaper->escape(($context["current_entity"] ?? null), "js"), "html", null, true);
            yield "\x27,
            current_entity_short: \x27";
            // line 81
            yield (string) $this->escaper->escape($this->escaper->escape(($context["current_entity_short"] ?? null), "js"), "html", null, true);
            yield "\x27,
        }).mount(\x27#entity-tree-dropdown-";
            // line 82
            yield (string) $this->escaper->escape(($context["rand"] ?? null), "html", null, true);
            yield "\x27);
    </script>
";
        }
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "layout/parts/profile_selector.html.twig";
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
        return array (  158 => 82,  154 => 81,  150 => 80,  142 => 76,  136 => 73,  130 => 71,  128 => 70,  124 => 68,  122 => 67,  120 => 66,  118 => 65,  113 => 62,  103 => 59,  98 => 57,  91 => 53,  85 => 51,  82 => 50,  78 => 49,  74 => 48,  68 => 45,  64 => 44,  52 => 34,  50 => 33,  47 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "layout/parts/profile_selector.html.twig", "/var/www/html/glpi/templates/layout/parts/profile_selector.html.twig");
    }
}
