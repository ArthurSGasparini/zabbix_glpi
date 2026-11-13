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

/* layout/parts/page_header.html.twig */
class __TwigTemplate_09f949a0e1f340870ccac7ff5ca757b3 extends Template
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
        $context["anonymous"] = (null === $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveprofile"));
        // line 34
        yield "
";
        // line 35
        $context["is_vertical"] = ( !(($tmp = ($context["anonymous"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getPageLayout() == "vertical"));
        // line 36
        $context["is_horizontal"] =  !(($tmp = ($context["is_vertical"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp);
        // line 37
        $context["is_helpdesk"] = ((($tmp = ($context["anonymous"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "helpdesk"));
        // line 38
        $context["has_main_nav"] = ( !(($tmp = ($context["anonymous"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["menu"] ?? null)) > 0) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), "home", [], "any", true, true, false, 38)));
        // line 39
        yield "
<body class=\"";
        // line 40
        yield (string) ((((($tmp = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("fold_menu")) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = ($context["is_vertical"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) ? ("navbar-collapsed") : (""));
        yield " ";
        yield (string) (((($tmp = ($context["is_vertical"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("vertical-layout") : ("horizontal-layout"));
        yield " ";
        yield (string) (((($tmp = ($context["is_debug_active"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("debug-active") : (""));
        yield " ";
        yield (string) (((($tmp = ($context["is_helpdesk"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("helpdesk") : ("central"));
        yield "\">
   <div class=\"skip-links\">
      <a class=\"visually-hidden-focusable skip-link\" href=\"#page\">";
        // line 42
        yield (string) $this->escaper->escape(__("Go to main content"), "html", null, true);
        yield "</a>
      ";
        // line 43
        if ((($tmp = ($context["has_main_nav"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 44
            yield "         <a class=\"visually-hidden-focusable skip-link\" href=\"#navbar-menu\">";
            yield (string) $this->escaper->escape(__("Go to main navigation"), "html", null, true);
            yield "</a>
      ";
        }
        // line 46
        yield "      <a class=\"visually-hidden-focusable skip-link skip-link-search-results\" href=\"#search-results\">";
        yield (string) $this->escaper->escape(__("Go to search results"), "html", null, true);
        yield "</a>
      <a class=\"visually-hidden-focusable skip-link skip-link-itil-timeline\" href=\"#itil-timeline\">";
        // line 47
        yield (string) $this->escaper->escape(__("Go to timeline"), "html", null, true);
        yield "</a>
   </div>
   ";
        // line 49
        if ((((($tmp = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("DBConnection::isDbAvailable")) && $tmp instanceof Markup ? (string) $tmp : $tmp) && Twig\Extension\CoreExtension::constant("GLPI_SKIP_UPDATES", null, true)) &&  !(($tmp = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Update::isDbUpToDate")) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 50
            yield "      <div class=\"banner-need-update\">
         ";
            // line 51
            yield (string) $this->escaper->escape(__("You are bypassing a needed update"), "html", null, true);
            yield "
      </div>
   ";
        }
        // line 54
        yield "   ";
        yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "layout/parts/impersonate_banner.html.twig");
        yield "
   ";
        // line 55
        yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/messages_after_redirect_toasts.html.twig", ["display_container" => true]);
        yield "

   <div class=\"page\">

      ";
        // line 59
        if ((($tmp = ($context["is_vertical"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 60
            yield "      <aside class=\"navbar navbar-vertical navbar-expand-lg sticky-lg-top sidebar\" data-testid=\"sidebar\" aria-label=\"";
            yield (string) $this->escaper->escape(__("Sidebar"), "html", null, true);
            yield "\">
         <div class=\"container-fluid\">
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbar-menu\" aria-controls=\"navbar-menu\" aria-label=\"";
            // line 62
            yield (string) $this->escaper->escape(__("Toggle navigation"), "html", null, true);
            yield "\">
               <span class=\"navbar-toggler-icon\" aria-hidden=\"true\"></span>
            </button>

            <a href=\"";
            // line 66
            yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->indexPath(), "html", null, true);
            yield "\" accesskey=\"1\" title=\"";
            yield (string) $this->escaper->escape(__("Home"), "html", null, true);
            yield "\"
               class=\"navbar-brand\">
               <span class=\"glpi-logo\"></span>
               <span class=\"visually-hidden\">";
            // line 69
            yield (string) $this->escaper->escape(__("Home"), "html", null, true);
            yield "</span>
            </a>

            ";
            // line 72
            if ( !(($tmp = ($context["anonymous"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 73
                yield "               <span class=\"d-none d-lg-inline-block\">
                   ";
                // line 74
                yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "layout/parts/goto_button.html.twig");
                yield "
               </span>
            ";
            }
            // line 77
            yield "
            ";
            // line 78
            if ( !(null === ($context["user"] ?? null))) {
                // line 79
                yield "               ";
                // line 80
                yield "               <div class=\"d-lg-none\">
                  ";
                // line 81
                yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "layout/parts/user_header.html.twig");
                yield "
               </div>
            ";
            }
            // line 84
            yield "
            ";
            // line 85
            if ( !(($tmp = ($context["anonymous"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 86
                yield "               <nav class=\"collapse navbar-collapse\" id=\"navbar-menu\" aria-label=\"";
                yield (string) $this->escaper->escape(__("Main navigation"), "html", null, true);
                yield "\" tabindex=\"-1\">
                   <span class=\"d-inline-block d-lg-none ms-2\">
                       ";
                // line 88
                yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "layout/parts/goto_button.html.twig");
                yield "
                   </span>
                   ";
                // line 90
                yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "layout/parts/menu.html.twig");
                yield "


                  ";
                // line 99
                yield "                  ";
                $context["sidebar_is_folded"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("fold_menu");
                // line 100
                yield "                  <p class=\"text-start\">
                     <button type=\"button\" class=\"btn btn-sm btn-ghost-secondary  ";
                // line 101
                yield (string) (((($tmp = ($context["is_debug_active"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("mb-4") : ("mb-2"));
                yield " mx-auto reduce-menu d-none d-md-block d-lg-block\"
                             aria-controls=\"navbar-menu\"
                             aria-expanded=\"";
                // line 103
                yield (string) (((($tmp = ($context["sidebar_is_folded"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("false") : ("true"));
                yield "\"
                             data-collapse-label=\"";
                // line 104
                yield (string) $this->escaper->escape(__("Collapse menu"), "html", null, true);
                yield "\"
                             data-expand-label=\"";
                // line 105
                yield (string) $this->escaper->escape(__("Expand menu"), "html", null, true);
                yield "\">
                        <span class=\"visually-hidden\">";
                // line 106
                yield (string) (((($tmp = ($context["sidebar_is_folded"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(__("Expand menu"), "html", null, true)) : ($this->escaper->escape(__("Collapse menu"), "html", null, true)));
                yield "</span>
                        <span class=\"menu-label\" aria-hidden=\"true\">";
                // line 107
                yield (string) $this->escaper->escape(__("Collapse menu"), "html", null, true);
                yield "</span>
                     </button>
                  </p>
               </nav>
            ";
            }
            // line 112
            yield "         </div>
      </aside>
      ";
        }
        // line 115
        yield "
      <header class=\"navbar d-print-none sticky-lg-top shadow-sm ";
        // line 116
        yield (string) (((($tmp = ($context["is_vertical"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("navbar-light navbar-expand-md") : ("navbar-dark navbar-expand-xl topbar"));
        yield "\" data-testid=\"main-header\" role=\"banner\">
         ";
        // line 118
        yield "         <div class=\"header-container container-fluid flex-xl-nowrap pe-xl-0 ";
        yield (string) (((($tmp = ($context["is_helpdesk"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("container-xl") : (""));
        yield "\">
            ";
        // line 119
        if ((($tmp = ($context["is_vertical"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 120
            yield "               ";
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "layout/parts/breadcrumbs.html.twig");
            yield "

                <div class=\"ms-lg-auto d-none d-lg-block flex-grow-1 flex-lg-grow-0\">
                     ";
            // line 123
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "layout/parts/global_search_form.html.twig");
            yield "
                </div>

            ";
        } elseif ((($tmp =         // line 126
($context["is_horizontal"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 127
            yield "               <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbar-menu\" aria-controls=\"navbar-menu\" aria-label=\"";
            yield (string) $this->escaper->escape(__("Toggle navigation"), "html", null, true);
            yield "\">
                  <span class=\"navbar-toggler-icon\" aria-hidden=\"true\"></span>
               </button>

               <a href=\"";
            // line 131
            yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->indexPath(), "html", null, true);
            yield "\" accesskey=\"1\" title=\"";
            yield (string) $this->escaper->escape(__("Home"), "html", null, true);
            yield "\"
                  class=\"navbar-brand\">
                  <span class=\"glpi-logo\"></span>
                  <span class=\"visually-hidden\">";
            // line 134
            yield (string) $this->escaper->escape(__("Home"), "html", null, true);
            yield "</span>
               </a>

               <div class=\"d-lg-none\">
                  ";
            // line 138
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "layout/parts/user_header.html.twig");
            yield "
               </div>

               ";
            // line 141
            if ((($tmp = ($context["has_main_nav"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 142
                yield "               <nav class=\"collapse navbar-collapse justify-content-center\" id=\"navbar-menu\" aria-label=\"";
                yield (string) $this->escaper->escape(__("Main navigation"), "html", null, true);
                yield "\" tabindex=\"-1\">
                  ";
                // line 143
                yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "layout/parts/menu.html.twig");
                yield "
                  ";
                // line 144
                if ( !(($tmp = ($context["anonymous"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 145
                    yield "                  <span class=\"ms-xl-2 d-inline-block mt-2 mt-xl-2\">
                     ";
                    // line 146
                    yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "layout/parts/goto_button.html.twig");
                    yield "
                  </span>
                  ";
                }
                // line 149
                yield "               </nav>
               ";
            }
            // line 151
            yield "            ";
        }
        // line 152
        yield "
            <div class=\"ms-md-4 d-none d-lg-block\">
               ";
        // line 154
        yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "layout/parts/user_header.html.twig");
        yield "
            </div>
         </div>
      </header>

      ";
        // line 160
        yield "      ";
        if (((($tmp = ($context["is_horizontal"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) &&  !(($tmp = ($context["is_helpdesk"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 161
            yield "      <div class=\"navbar navbar-expand-md navbar-light secondary-bar sticky-md-top shadow-sm\">
         <div class=\"container-fluid justify-content-start\">
            ";
            // line 163
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "layout/parts/breadcrumbs.html.twig");
            yield "
            <div class=\"ms-md-auto d-none d-md-block flex-grow-1 flex-md-grow-0\">
                ";
            // line 165
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "layout/parts/global_search_form.html.twig");
            yield "
            </div>
         </div>
      </div>
      ";
        }
        // line 170
        yield "
      <div class=\"page-wrapper mb-0\">
         <div class=\"page-body container-fluid ";
        // line 172
        yield (string) (((($tmp = ($context["is_helpdesk"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("container-xl") : (""));
        yield "\">
            <main role=\"main\" id=\"page\" class=\"legacy\" tabindex=\"-1\">
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "layout/parts/page_header.html.twig";
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
        return array (  363 => 172,  359 => 170,  351 => 165,  346 => 163,  342 => 161,  339 => 160,  331 => 154,  327 => 152,  324 => 151,  320 => 149,  314 => 146,  311 => 145,  309 => 144,  305 => 143,  300 => 142,  298 => 141,  292 => 138,  285 => 134,  277 => 131,  269 => 127,  267 => 126,  261 => 123,  254 => 120,  252 => 119,  247 => 118,  243 => 116,  240 => 115,  235 => 112,  227 => 107,  223 => 106,  219 => 105,  215 => 104,  211 => 103,  206 => 101,  203 => 100,  200 => 99,  194 => 90,  189 => 88,  183 => 86,  181 => 85,  178 => 84,  172 => 81,  169 => 80,  167 => 79,  165 => 78,  162 => 77,  156 => 74,  153 => 73,  151 => 72,  145 => 69,  137 => 66,  130 => 62,  124 => 60,  122 => 59,  115 => 55,  110 => 54,  104 => 51,  101 => 50,  99 => 49,  94 => 47,  89 => 46,  83 => 44,  81 => 43,  77 => 42,  66 => 40,  63 => 39,  61 => 38,  59 => 37,  57 => 36,  55 => 35,  52 => 34,  50 => 33,  47 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "layout/parts/page_header.html.twig", "/var/www/html/glpi/templates/layout/parts/page_header.html.twig");
    }
}
