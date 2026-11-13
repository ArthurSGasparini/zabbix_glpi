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

/* layout/parts/menu.html.twig */
class __TwigTemplate_24f11a78353ef04abb43aa34710a412e extends Template
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
        $context["is_vertical"] = ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getPageLayout() == "vertical");
        // line 34
        $context["is_horizontal"] =  !(($tmp = ($context["is_vertical"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp);
        // line 35
        $context["is_menu_folded"] = ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("fold_menu") == "1");
        // line 36
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 37
        yield "
<ul class=\"navbar-nav\" id=\"menu_";
        // line 38
        yield (string) $this->escaper->escape(($context["rand"] ?? null), "html", null, true);
        yield "\">
";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["menu"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["firstlevel"]) {
            // line 40
            yield "   ";
            $context["firstlevel_active"] = ((array_key_exists("sector", $context) && CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", true, true, false, 40)) && (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", false, true, false, 40), "title", [], "array", true, true, false, 40)) ? (Twig\Extension\CoreExtension::default((($_v0 = (($_v1 = ($context["menu"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[(($_v2 = ($context["sector"] ?? null)) instanceof \Stringable && (is_array($_v1) || $_v1 instanceof \ArrayObject || $_v1 instanceof \ArrayIterator) ? (string) $_v2 : $_v2)] ?? null) : null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["title"] ?? null) : null), "")) : ("")) == (($_v3 = $context["firstlevel"]) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["title"] ?? null) : null)));
            // line 41
            yield "   ";
            $context["firstlevel_shown"] = (((($tmp = ($context["firstlevel_active"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = ($context["is_vertical"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) && (($context["is_menu_folded"] ?? null) == false));
            // line 42
            yield "   ";
            $context["has_subitems"] = false;
            // line 43
            yield "   ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["firstlevel"], "content", [], "array", true, true, false, 43)) {
                // line 44
                yield "      ";
                // line 45
                yield "      ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((($_v4 = $context["firstlevel"]) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["content"] ?? null) : null));
                foreach ($context['_seq'] as $context["_key"] => $context["secondlevel"]) {
                    // line 46
                    yield "         ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["secondlevel"], "page", [], "array", true, true, false, 46)) {
                        // line 47
                        yield "            ";
                        $context["has_subitems"] = true;
                        // line 48
                        yield "         ";
                    }
                    // line 49
                    yield "      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['secondlevel'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 50
                yield "   ";
            }
            // line 51
            yield "   ";
            if ((($tmp = ($context["has_subitems"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 52
                yield "      ";
                $context["sector_header_id"] = Twig\Extension\CoreExtension::sprintf("menu_%s_sector_%s", ($context["rand"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 52));
                // line 53
                yield "   <li class=\"nav-item dropdown ";
                yield (string) (((($tmp = ($context["firstlevel_active"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : (""));
                yield "\">
      <button type=\"button\"
         class=\"nav-link dropdown-toggle ";
                // line 55
                yield (string) (((($tmp = ($context["firstlevel_active"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : (""));
                yield " ";
                yield (string) (((($tmp = ($context["firstlevel_shown"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show") : (""));
                yield "\"
         data-bs-toggle=\"dropdown\"
         data-testid=\"sidebar-menu-toggle\"
         aria-expanded=\"";
                // line 58
                yield (string) (((($tmp = ($context["firstlevel_shown"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
                yield "\">
         <i class=\"";
                // line 59
                yield (string) (((CoreExtension::getAttribute($this->env, $this->source, $context["firstlevel"], "icon", [], "array", true, true, false, 59) &&  !(null === (($_v5 = $context["firstlevel"]) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["icon"] ?? null) : null)))) ? ($this->escaper->escape((($_v6 = $context["firstlevel"]) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["icon"] ?? null) : null), "html", null, true)) : (""));
                yield "\" aria-hidden=\"true\"></i>
         <span class=\"menu-label\">";
                // line 60
                yield (string) $this->escaper->escape((($_v7 = $context["firstlevel"]) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["title"] ?? null) : null), "html", null, true);
                yield "</span>
      </button>
      <div class=\"dropdown-menu ";
                // line 62
                yield (string) ((((($tmp = ($context["firstlevel_active"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($context["is_vertical"] ?? null) != false))) ? ("") : ("animate__animated"));
                yield " ";
                yield (string) (((($tmp = ($context["is_vertical"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("animate__fadeInLeft") : ("animate__zoomIn"));
                yield " ";
                yield (string) (((($tmp = ($context["firstlevel_shown"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show") : (""));
                yield "\"
           aria-labelledby=\"";
                // line 63
                yield (string) $this->escaper->escape(($context["sector_header_id"] ?? null), "html", null, true);
                yield "\">
         <div class=\"dropdown-header\" id=\"";
                // line 64
                yield (string) $this->escaper->escape(($context["sector_header_id"] ?? null), "html", null, true);
                yield "\">";
                yield (string) $this->escaper->escape((($_v8 = $context["firstlevel"]) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["title"] ?? null) : null), "html", null, true);
                yield "</div>
         <div class=\"dropdown-menu-columns\">
            <div class=\"dropdown-menu-column\">
            ";
                // line 67
                $context["has_dashboard"] = CoreExtension::getAttribute($this->env, $this->source, $context["firstlevel"], "default_dashboard", [], "array", true, true, false, 67);
                // line 68
                yield "            ";
                if ((($tmp = ($context["has_dashboard"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 69
                    yield "               <a class=\"dropdown-item\"
                  href=\"";
                    // line 70
                    yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path((($_v9 = $context["firstlevel"]) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["default_dashboard"] ?? null) : null)), "html", null, true);
                    yield "\">
                  <i class=\"";
                    // line 71
                    yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Glpi\\Dashboard\\Dashboard::getIcon"), "html", null, true);
                    yield "\" aria-hidden=\"true\"></i>
                  ";
                    // line 72
                    yield (string) $this->escaper->escape(__("Dashboard"), "html", null, true);
                    yield "
               </a>
            ";
                }
                // line 75
                yield "            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((($_v10 = $context["firstlevel"]) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["content"] ?? null) : null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["sublevel"]) {
                    // line 76
                    yield "               ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["sublevel"], "page", [], "array", true, true, false, 76)) {
                        // line 77
                        yield "               <a class=\"dropdown-item ";
                        yield (string) (((($context["menu_active"] ?? null) == (($_v11 = $context["sublevel"]) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["title"] ?? null) : null))) ? ("active") : (""));
                        yield "\"
                  href=\"";
                        // line 78
                        yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path((($_v12 = $context["sublevel"]) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["page"] ?? null) : null)), "html", null, true);
                        yield "\"
                  ";
                        // line 79
                        if ((($context["menu_active"] ?? null) == (($_v13 = $context["sublevel"]) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["title"] ?? null) : null))) {
                            yield "aria-current=\"page\"";
                        }
                        // line 80
                        yield "                  ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["sublevel"], "shortcut", [], "array", true, true, false, 80) &&  !Twig\Extension\CoreExtension::testEmpty((($_v14 = $context["sublevel"]) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["shortcut"] ?? null) : null)))) {
                            yield "accesskey=\"";
                            yield (string) $this->escaper->escape((($_v15 = $context["sublevel"]) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["shortcut"] ?? null) : null), "html", null, true);
                            yield "\"";
                        }
                        yield ">
                  <i class=\"";
                        // line 81
                        yield (string) (((CoreExtension::getAttribute($this->env, $this->source, $context["sublevel"], "icon", [], "array", true, true, false, 81) &&  !(null === (($_v16 = $context["sublevel"]) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16["icon"] ?? null) : null)))) ? ($this->escaper->escape((($_v17 = $context["sublevel"]) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17["icon"] ?? null) : null), "html", null, true)) : (""));
                        yield "\" aria-hidden=\"true\"></i>
                  <span class=\x27text-wrap\x27>
                     ";
                        // line 83
                        yield (string) $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->underlineShortcutLetter((($_v18 = $context["sublevel"]) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18["title"] ?? null) : null), (((CoreExtension::getAttribute($this->env, $this->source, $context["sublevel"], "shortcut", [], "array", true, true, false, 83) &&  !(null === (($_v19 = $context["sublevel"]) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19["shortcut"] ?? null) : null)))) ? ((($_v20 = $context["sublevel"]) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20["shortcut"] ?? null) : null)) : ("")));
                        yield "
                  </span>
               </a>
               ";
                    }
                    // line 87
                    yield "
               ";
                    // line 88
                    $context["count_per_column"] = 6;
                    // line 89
                    yield "               ";
                    if ((((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 89) % ($context["count_per_column"] ?? null)) == (((($tmp = ($context["has_dashboard"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($context["count_per_column"] ?? null) - 1)) : (0))) &&  !(($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 89)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                        // line 90
                        yield "                  </div>
                  <div class=\"dropdown-menu-column\">
               ";
                    }
                    // line 93
                    yield "            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['sublevel'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 94
                yield "            </div>
         </div>
      </div>
   </li>
   ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 98
$context["firstlevel"], "default", [], "array", true, true, false, 98) && ((((CoreExtension::getAttribute($this->env, $this->source, $context["firstlevel"], "display", [], "array", true, true, false, 98) &&  !(null === (($_v21 = $context["firstlevel"]) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21["display"] ?? null) : null)))) ? ((($_v22 = $context["firstlevel"]) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22["display"] ?? null) : null)) : (true)) != false))) {
                // line 99
                yield "      <li class=\"nav-item dropdown ";
                yield (string) (((($tmp = ($context["firstlevel_active"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : (""));
                yield "\">
         <a class=\"nav-link\" href=\"";
                // line 100
                yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path((($_v23 = $context["firstlevel"]) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23["default"] ?? null) : null)), "html", null, true);
                yield "\"
            ";
                // line 101
                if ((($tmp = ($context["firstlevel_active"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "aria-current=\"page\"";
                }
                yield ">
            <i class=\"";
                // line 102
                yield (string) (((CoreExtension::getAttribute($this->env, $this->source, $context["firstlevel"], "icon", [], "array", true, true, false, 102) &&  !(null === (($_v24 = $context["firstlevel"]) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24["icon"] ?? null) : null)))) ? ($this->escaper->escape((($_v25 = $context["firstlevel"]) && is_array($_v25) || $_v25 instanceof ArrayAccess ? ($_v25["icon"] ?? null) : null), "html", null, true)) : (""));
                yield "\" aria-hidden=\"true\"></i>
            <span class=\"menu-label\">";
                // line 103
                yield (string) $this->escaper->escape((($_v26 = $context["firstlevel"]) && is_array($_v26) || $_v26 instanceof ArrayAccess ? ($_v26["title"] ?? null) : null), "html", null, true);
                yield "</span>
         </a>
      </li>
   ";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['firstlevel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 108
        yield "</ul>

";
        // line 110
        if ((($tmp = ($context["is_vertical"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 111
            yield "<script type=\"text/javascript\">
\$(function() {
   // below, some modifications of dropdowns menu behavior
   document.querySelectorAll(\x27#menu_";
            // line 114
            yield (string) $this->escaper->escape(($context["rand"] ?? null), "html", null, true);
            yield " > .dropdown\x27).forEach(function(menuDropdown) {
      // prevent menu closes
      menuDropdown.addEventListener(\x27hide.bs.dropdown\x27, function (event) {
         var orig_event = event.clickEvent;
         if (typeof orig_event != \"undefined\"
             && typeof orig_event.target != \"undefined\") {
            // prevent body clicking to hide menu
            if (!document.getElementById(\x27menu_";
            // line 121
            yield (string) $this->escaper->escape(($context["rand"] ?? null), "html", null, true);
            yield "\x27).contains(orig_event.target)) {
               event.preventDefault();
               return;
            }

            // prevent menu links to close menu (waiting the page redirection)
            var clicked_item = orig_event.target.closest(\x27.dropdown-item\x27);
            if (clicked_item !== null) {
               if (!orig_event.ctrlKey && !orig_event.metaKey && orig_event.button !== 1) {
                   for (var item of document.querySelectorAll(\x27#menu_";
            // line 130
            yield (string) $this->escaper->escape(($context["rand"] ?? null), "html", null, true);
            yield " .dropdown-item\x27)) {
                      item.classList.remove(\x27active\x27);
                   }
                   clicked_item.classList.add(\x27active\x27);
               }
               event.preventDefault();
            }
         }
      });

      // opening a sub menu close others
      menuDropdown.addEventListener(\x27show.bs.dropdown\x27, function (event) {
          // The CSS-only \"flyout on hover\" replacement for Bootstrap\x27s dropdown only
          // exists at the `lg` breakpoint and up (see _global-menu.scss, min-width:992px).
          // Below that, the sidebar is an off-canvas mobile menu: dropdowns must stay
          // Bootstrap-driven or they can never be opened (glpi-project/glpi#23124).
          if (\$(\x27body\x27).hasClass(\x27navbar-collapsed\x27) && window.matchMedia(\x27(min-width: 992px)\x27).matches) {
              // Dropdown submenus will be shown with CSS, and shouldn\x27t be handled by Bootstrap
              event.preventDefault();
              event.stopPropagation();
          }
         \$(\x27#menu_";
            // line 151
            yield (string) $this->escaper->escape(($context["rand"] ?? null), "html", null, true);
            yield " .nav-link\x27).removeClass(\x27show active\x27);
         \$(\x27#menu_";
            // line 152
            yield (string) $this->escaper->escape(($context["rand"] ?? null), "html", null, true);
            yield " .nav-link.dropdown-toggle\x27).attr(\x27aria-expanded\x27, \x27false\x27);
         \$(\x27#menu_";
            // line 153
            yield (string) $this->escaper->escape(($context["rand"] ?? null), "html", null, true);
            yield " .nav-item\x27).removeClass(\x27active\x27);
         \$(\x27#menu_";
            // line 154
            yield (string) $this->escaper->escape(($context["rand"] ?? null), "html", null, true);
            yield " .dropdown-menu\x27).removeClass(\x27show\x27);
      })
   });
});
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
        return "layout/parts/menu.html.twig";
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
        return array (  394 => 154,  390 => 153,  386 => 152,  382 => 151,  358 => 130,  346 => 121,  336 => 114,  331 => 111,  329 => 110,  325 => 108,  305 => 103,  301 => 102,  295 => 101,  291 => 100,  286 => 99,  284 => 98,  278 => 94,  263 => 93,  258 => 90,  255 => 89,  253 => 88,  250 => 87,  243 => 83,  238 => 81,  229 => 80,  225 => 79,  221 => 78,  216 => 77,  213 => 76,  195 => 75,  189 => 72,  185 => 71,  181 => 70,  178 => 69,  175 => 68,  173 => 67,  165 => 64,  161 => 63,  153 => 62,  148 => 60,  144 => 59,  140 => 58,  132 => 55,  126 => 53,  123 => 52,  120 => 51,  117 => 50,  110 => 49,  107 => 48,  104 => 47,  101 => 46,  96 => 45,  94 => 44,  91 => 43,  88 => 42,  85 => 41,  82 => 40,  65 => 39,  61 => 38,  58 => 37,  56 => 36,  54 => 35,  52 => 34,  50 => 33,  47 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "layout/parts/menu.html.twig", "/var/www/html/glpi/templates/layout/parts/menu.html.twig");
    }
}
