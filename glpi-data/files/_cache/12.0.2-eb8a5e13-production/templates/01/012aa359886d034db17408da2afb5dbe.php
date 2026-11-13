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

/* components/user/picture.html.twig */
class __TwigTemplate_150e48a7f619e4735d6f102ccb2ef7da extends Template
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
        $context["enable_anonymization"] = (((array_key_exists("enable_anonymization", $context) &&  !(null === $context["enable_anonymization"]))) ? ($context["enable_anonymization"]) : (false));
        // line 34
        $context["avatar_size"] = (((array_key_exists("avatar_size", $context) &&  !(null === $context["avatar_size"]))) ? ($context["avatar_size"]) : ("avatar-md"));
        // line 35
        $context["anonymized"] = ((($tmp = ($context["enable_anonymization"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->getEntityConfig("anonymize_support_agents", $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity")) != Twig\Extension\CoreExtension::constant("Entity::ANONYMIZE_DISABLED")));
        // line 36
        $context["user"] = (((array_key_exists("user_object", $context) &&  !(null === $context["user_object"]))) ? ($context["user_object"]) : (((array_key_exists("users_id", $context)) ? ($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItem("User", ($context["users_id"] ?? null))) : (null))));
        // line 37
        $context["with_link"] = (((array_key_exists("with_link", $context) &&  !(null === $context["with_link"]))) ? ($context["with_link"]) : (true));
        // line 38
        $context["force_initials"] = (((array_key_exists("force_initials", $context) &&  !(null === $context["force_initials"]))) ? ($context["force_initials"]) : (false));
        // line 39
        $context["extra_class"] = (((array_key_exists("extra_class", $context) &&  !(null === $context["extra_class"]))) ? ($context["extra_class"]) : (""));
        // line 40
        $context["circle"] = (((array_key_exists("circle", $context) &&  !(null === $context["circle"]))) ? ($context["circle"]) : (false));
        // line 41
        if (( !(($tmp = ($context["force_initials"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) &&  !(null === ($context["user"] ?? null)))) {
            // line 42
            yield "    ";
            $context["user_thumbnail"] = CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "getThumbnailPicturePath", [($context["enable_anonymization"] ?? null)], "method", false, false, false, 42);
            // line 43
            yield "    ";
            if (((($context["user_thumbnail"] ?? null) == null) &&  !(($tmp = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->getEntityConfig("display_users_initials", $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity"))) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 44
                yield "        ";
                $context["user_thumbnail"] = CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "getPicturePath", [($context["enable_anonymization"] ?? null)], "method", false, false, false, 44);
                // line 45
                yield "    ";
            }
        } else {
            // line 47
            yield "    ";
            $context["user_thumbnail"] = null;
        }
        // line 49
        yield "
";
        // line 50
        if ((((($tmp = ($context["with_link"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) &&  !(($tmp = ($context["anonymized"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) &&  !(null === ($context["user"] ?? null)))) {
            // line 51
            yield "   <a href=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "getLinkURL", [], "method", false, false, false, 51), "html", null, true);
            yield "\" class=\"d-flex align-items-center\">
";
        }
        // line 53
        yield "
";
        // line 54
        $context["bg_color"] = (((($tmp = ($context["user"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "getUserInitialsBgColor", [], "method", false, false, false, 54)) : ("#cccccc"));
        // line 55
        $context["fg_color"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Toolbox::getFgColor", [($context["bg_color"] ?? null), 60]);
        // line 56
        yield "<span class=\"avatar ";
        yield (string) $this->escaper->escape(($context["avatar_size"] ?? null), "html", null, true);
        yield " rounded";
        yield (string) (((($tmp = ($context["circle"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("-circle") : (""));
        yield " ";
        yield (string) $this->escaper->escape(($context["extra_class"] ?? null), "html", null, true);
        yield "\"
      style=\"";
        // line 57
        if ( !(null === ($context["user_thumbnail"] ?? null))) {
            yield "background-image: url(";
            yield (string) $this->escaper->escape(($context["user_thumbnail"] ?? null), "html", null, true);
            yield "); background-color: inherit; ";
        } else {
            yield " background-color: ";
            yield (string) $this->escaper->escape(($context["bg_color"] ?? null), "html", null, true);
            yield ";";
        }
        yield " aspect-ratio: 1;\">
   ";
        // line 58
        if ((null === ($context["user_thumbnail"] ?? null))) {
            // line 59
            yield "      ";
            if ( !(null === ($context["user"] ?? null))) {
                // line 60
                yield "         ";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "getUserInitials", [($context["enable_anonymization"] ?? null)], "method", false, false, false, 60), "html", null, true);
                yield "
      ";
            } else {
                // line 62
                yield "         <i class=\"ti ti-user\" aria-hidden=\"true\"></i>
      ";
            }
            // line 64
            yield "   ";
        }
        // line 65
        yield "</span>

";
        // line 67
        if ((((($tmp = ($context["with_link"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) &&  !(($tmp = ($context["anonymized"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) &&  !(null === ($context["user"] ?? null)))) {
            // line 68
            yield "   ";
            if ((($tmp = (((array_key_exists("display_login", $context) &&  !(null === $context["display_login"]))) ? ($context["display_login"]) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 69
                yield "      <span class=\"ms-2\">";
                yield (string) $this->escaper->escape((($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "fields", [], "any", false, false, false, 69)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["name"] ?? null) : null), "html", null, true);
                yield "</span>
   ";
            }
            // line 71
            yield "
   </a>
";
        }
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/user/picture.html.twig";
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
        return array (  157 => 71,  151 => 69,  148 => 68,  146 => 67,  142 => 65,  139 => 64,  135 => 62,  129 => 60,  126 => 59,  124 => 58,  112 => 57,  103 => 56,  101 => 55,  99 => 54,  96 => 53,  90 => 51,  88 => 50,  85 => 49,  81 => 47,  77 => 45,  74 => 44,  71 => 43,  68 => 42,  66 => 41,  64 => 40,  62 => 39,  60 => 38,  58 => 37,  56 => 36,  54 => 35,  52 => 34,  50 => 33,  47 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/user/picture.html.twig", "/var/www/html/glpi/templates/components/user/picture.html.twig");
    }
}
