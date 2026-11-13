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

/* layout/parts/user_header.html.twig */
class __TwigTemplate_ce5669169f489b2061b870916f1e7d18 extends Template
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
        $context["rand_header"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 34
        yield "
<div class=\"btn-group\">
   ";
        // line 36
        if ( !(null === ($context["user"] ?? null))) {
            // line 37
            yield "      <div class=\"navbar-nav flex-row order-md-last user-menu\">
         <div class=\"nav-item dropdown\">
            <button type=\"button\" class=\"nav-link d-flex lh-1 text-reset p-1 border-0 dropdown-toggle user-menu-dropdown-toggle ";
            // line 39
            if ((($tmp = ($context["is_debug_active"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "bg-red-lt";
            } else {
                yield "bg-transparent";
            }
            yield "\"
               data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\"
               aria-haspopup=\"true\" aria-expanded=\"false\">
               <span class=\"visually-hidden\">";
            // line 42
            yield (string) $this->escaper->escape(__("User menu"), "html", null, true);
            yield "</span>
               ";
            // line 43
            if ( !(($tmp = ($context["anonymous"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 44
                yield "                  <div class=\"pe-2 d-none d-xl-block\">
                     <div>";
                // line 45
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString((((CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveprofile"), "name", [], "array", true, true, false, 45) &&  !(null === (($_v0 = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveprofile")) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["name"] ?? null) : null)))) ? ((($_v1 = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveprofile")) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["name"] ?? null) : null)) : (""))), "truncate", [35, "..."], "method", false, false, false, 45), "html", null, true);
                yield "</div>
                     ";
                // line 46
                $context["entity_completename"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity_name");
                // line 47
                yield "                     <div class=\"mt-1 small text-muted-menu\" title=\"";
                yield (string) $this->escaper->escape(($context["entity_completename"] ?? null), "html", null, true);
                yield "\"
                          data-testid=\"current-entity\">
                        ";
                // line 49
                yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->truncateLeft(($context["entity_completename"] ?? null)), "html", null, true);
                yield "
                     </div>
                  </div>

                  ";
                // line 53
                yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/user/picture.html.twig", ["users_id" => (($_v2 = CoreExtension::getAttribute($this->env, $this->source,                 // line 54
($context["user"] ?? null), "fields", [], "any", false, false, false, 54)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["id"] ?? null) : null), "with_link" => false, "avatar_size" => ""]);
                // line 57
                yield "
               ";
            }
            // line 59
            yield "            </button>
            <div class=\"dropdown-menu dropdown-menu-end mt-1 dropdown-menu-arrow animate__animated animate__fadeInRight\" data-testid=\"user-menu-dropdown\">
               <span class=\"dropdown-header\">";
            // line 61
            yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName(($context["user"] ?? null)), "html", null, true);
            yield "</span>

               ";
            // line 63
            if ( !(($tmp = ($context["anonymous"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 64
                yield "                  ";
                yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "layout/parts/profile_selector.html.twig");
                yield "

                  <div class=\"dropdown-divider\"></div>

                  ";
                // line 71
                yield "                  ";
                if ((($tmp = Session::haveRight("config", Twig\Extension\CoreExtension::constant("UPDATE"))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 72
                    yield "                     <a href=\"";
                    yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/switchdebug.php"), "html", null, true);
                    yield "\"
                        class=\"dropdown-item ";
                    // line 73
                    if ((($tmp = ($context["is_debug_active"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "bg-red-lt";
                    }
                    yield "\"
                        title=\"";
                    // line 74
                    yield (string) $this->escaper->escape(__("Change mode"), "html", null, true);
                    yield "\">
                        <i class=\"ti ti-bug debug\" aria-hidden=\"true\"></i>
                        ";
                    // line 76
                    yield (string) (((($tmp = ($context["is_debug_active"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(__("Debug mode enabled"), "html", null, true)) : ($this->escaper->escape(__("Debug mode disabled"), "html", null, true)));
                    yield "
                     </a>
                  ";
                }
                // line 79
                yield "               ";
            }
            // line 80
            yield "
               ";
            // line 82
            yield "
               <div class=\"dropdown-item\">
                  <i class=\"ti ti-language\" aria-hidden=\"true\"></i>
                  ";
            // line 85
            yield (string) $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("User::showSwitchLangForm");
            yield "
               </div>

               <div class=\"dropdown-divider\"></div>

               <a href=\"";
            // line 90
            yield (string) $this->escaper->escape(($context["help_url"] ?? null), "html", null, true);
            yield "\" class=\"dropdown-item\">
                  <i class=\"ti ti-help\" aria-hidden=\"true\"></i>
                  ";
            // line 92
            yield (string) $this->escaper->escape(__("Help"), "html", null, true);
            yield "
               </a>

      ";
            // line 95
            if ((($tmp = Session::haveRight("config", Twig\Extension\CoreExtension::constant("READ"))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 96
                yield "               <button type=\"button\" class=\"dropdown-item\"
                  id=\"show_about_modal_";
                // line 97
                yield (string) $this->escaper->escape(($context["rand_header"] ?? null), "html", null, true);
                yield "\"
                  data-testid=\"about-link\">
                  <i class=\"ti ti-info-circle\" aria-hidden=\"true\"></i>
                  ";
                // line 100
                yield (string) $this->escaper->escape(__("About"), "html", null, true);
                yield "
                  ";
                // line 101
                if ( !(null === ($context["found_new_version"] ?? null))) {
                    // line 102
                    yield "                     <span class=\"badge bg-info text-dark ms-2\">
                        <span aria-hidden=\"true\">1</span>
                        <span class=\"visually-hidden\">";
                    // line 104
                    yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::sprintf(__("A new version is available: %s."), ($context["found_new_version"] ?? null)), "html", null, true);
                    yield "</span>
                     </span>
                  ";
                }
                // line 107
                yield "               </button>
      ";
            }
            // line 109
            yield "
               <div class=\"dropdown-divider\"></div>

               <a href=\"";
            // line 112
            yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/front/preference.php"), "html", null, true);
            yield "\" class=\"dropdown-item\">
                  <i class=\"ti ti-user-cog\" aria-hidden=\"true\"></i>
                  ";
            // line 114
            yield (string) $this->escaper->escape(__("My settings"), "html", null, true);
            yield "
               </a>
               <a href=\"";
            // line 116
            yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path(("/front/logout.php" . (((($tmp = (((($tmp = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiextauth")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiextauth")) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("?noAUTO=1") : ("")))), "html", null, true);
            yield "\" class=\"dropdown-item\">
                  <i class=\"ti ti-logout\" aria-hidden=\"true\"></i>
                  ";
            // line 118
            yield (string) $this->escaper->escape(__("Logout"), "html", null, true);
            yield "
               </a>
            </div>
         </div>
      </div>

      ";
            // line 124
            if ((($tmp = Session::haveRight("config", Twig\Extension\CoreExtension::constant("READ"))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 125
                yield "      <div class=\"modal fade\" id=\"about_modal_";
                yield (string) $this->escaper->escape(($context["rand_header"] ?? null), "html", null, true);
                yield "\" tabindex=\"-1\"
           aria-labelledby=\"about_modal_title_";
                // line 126
                yield (string) $this->escaper->escape(($context["rand_header"] ?? null), "html", null, true);
                yield "\">
         <div class=\"modal-dialog\">
            <div class=\"modal-content\">
               <div class=\"modal-header\">
                  <h4 class=\"modal-title\" id=\"about_modal_title_";
                // line 130
                yield (string) $this->escaper->escape(($context["rand_header"] ?? null), "html", null, true);
                yield "\">";
                yield (string) $this->escaper->escape(__("About"), "html", null, true);
                yield "</h4>
                  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
                // line 131
                yield (string) $this->escaper->escape(__("Close"), "html", null, true);
                yield "\" title=\"";
                yield (string) $this->escaper->escape(__("Close"), "html", null, true);
                yield "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"left\"></button>
               </div>
               <div class=\"modal-body text-center\">
                  <p>
                     <img src=\"";
                // line 135
                yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("pics/logos/logo-GLPI-100-grey.png"), "html", null, true);
                yield "\" alt=\"\" style=\"max-width:100px; height:auto;\" />
                  </p>
                  ";
                // line 137
                if ( !(($tmp = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("\\Glpi\\Toolbox\\VersionParser::isStableRelease", [Twig\Extension\CoreExtension::constant("GLPI_VERSION")])) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 138
                    yield "                      <div class=\x27alert alert-important alert-warning d-flex\x27>
                        <strong>⚠️  ";
                    // line 139
                    yield (string) $this->escaper->escape(__("This version is UNSTABLE and some SECURITY FIXES may not be included."), "html", null, true);
                    yield " ⚠️</strong>
                      </div>
                  ";
                }
                // line 142
                yield "                  <p><a href=\"https://glpi-project.org/\" title=\"Powered by Teclib and contributors\" class=\"copyright\">
                     <span class=\"d-block\">GLPI ";
                // line 143
                yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::constant("GLPI_VERSION"), "html", null, true);
                yield "</span>
                     Copyright (C) 2015-";
                // line 144
                yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::constant("GLPI_YEAR"), "html", null, true);
                yield " Teclib\x27 and contributors
                  </a></p>
                  ";
                // line 146
                if ( !(null === ($context["found_new_version"] ?? null))) {
                    // line 147
                    yield "                     <p>
                        <a href=\"https://glpi-project.org\" target=\"_blank\"
                           title=\"";
                    // line 149
                    yield (string) $this->escaper->escape(__("You will find it on the GLPI-PROJECT.org site."), "html", null, true);
                    yield "\">
                           ";
                    // line 150
                    yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::sprintf(__("A new version is available: %s."), ($context["found_new_version"] ?? null)), "html", null, true);
                    yield "
                           <span class=\"badge bg-info text-dark\">
                              1
                           </span>
                        </a>
                     </p>
                  ";
                }
                // line 157
                yield "               </div>
            </div>
         </div>
      </div>
      ";
            }
            // line 162
            yield "   ";
        }
        // line 163
        yield "</div>

<script type=\"text/javascript\">
\$(function() {
   \$(\"#show_about_modal_";
        // line 167
        yield (string) $this->escaper->escape(($context["rand_header"] ?? null), "html", null, true);
        yield "\").click(function(e) {
      e.preventDefault();
      \$(\"#about_modal_";
        // line 169
        yield (string) $this->escaper->escape(($context["rand_header"] ?? null), "html", null, true);
        yield "\").remove().modal(\"show\");
   });
});
</script>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "layout/parts/user_header.html.twig";
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
        return array (  339 => 169,  334 => 167,  328 => 163,  325 => 162,  318 => 157,  308 => 150,  304 => 149,  300 => 147,  298 => 146,  293 => 144,  289 => 143,  286 => 142,  280 => 139,  277 => 138,  275 => 137,  270 => 135,  261 => 131,  255 => 130,  248 => 126,  243 => 125,  241 => 124,  232 => 118,  227 => 116,  222 => 114,  217 => 112,  212 => 109,  208 => 107,  202 => 104,  198 => 102,  196 => 101,  192 => 100,  186 => 97,  183 => 96,  181 => 95,  175 => 92,  170 => 90,  162 => 85,  157 => 82,  154 => 80,  151 => 79,  145 => 76,  140 => 74,  134 => 73,  129 => 72,  126 => 71,  118 => 64,  116 => 63,  111 => 61,  107 => 59,  103 => 57,  101 => 54,  100 => 53,  93 => 49,  87 => 47,  85 => 46,  81 => 45,  78 => 44,  76 => 43,  72 => 42,  62 => 39,  58 => 37,  56 => 36,  52 => 34,  50 => 33,  47 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "layout/parts/user_header.html.twig", "/var/www/html/glpi/templates/layout/parts/user_header.html.twig");
    }
}
