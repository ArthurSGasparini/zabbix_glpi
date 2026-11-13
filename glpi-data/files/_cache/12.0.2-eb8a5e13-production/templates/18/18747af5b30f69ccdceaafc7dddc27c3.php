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

/* layout/parts/breadcrumbs.html.twig */
class __TwigTemplate_2c58cb5de552485bdfa2f073cb28b647 extends Template
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
<nav aria-label=\"";
        // line 33
        yield (string) $this->escaper->escape(__("Breadcrumbs"), "html", null, true);
        yield "\">
   <ol class=\"breadcrumb breadcrumb-alternate pe-1 pe-sm-3\">
      <li class=\"breadcrumb-item text-truncate\">
      <a href=\"";
        // line 36
        yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->indexPath(), "html", null, true);
        yield "\" class=\"d-inline-flex align-items-center gap-1\">
            <i class=\"ti ti-home-2\" aria-hidden=\"true\"></i>
            ";
        // line 38
        yield (string) $this->escaper->escape(__("Home"), "html", null, true);
        yield "
         </a>
      </li>

      ";
        // line 42
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", true, true, false, 42)) {
            // line 43
            yield "      <li class=\"breadcrumb-item text-truncate\">
      <a href=\"";
            // line 44
            yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", false, true, false, 44), "default", [], "array", true, true, false, 44) &&  !(null === (($_v0 = (($_v1 = ($context["menu"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[(($_v2 = ($context["sector"] ?? null)) instanceof \Stringable && (is_array($_v1) || $_v1 instanceof \ArrayObject || $_v1 instanceof \ArrayIterator) ? (string) $_v2 : $_v2)] ?? null) : null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["default"] ?? null) : null)))) ? ((($_v3 = (($_v4 = ($context["menu"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[(($_v5 = ($context["sector"] ?? null)) instanceof \Stringable && (is_array($_v4) || $_v4 instanceof \ArrayObject || $_v4 instanceof \ArrayIterator) ? (string) $_v5 : $_v5)] ?? null) : null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["default"] ?? null) : null)) : ("/front/central.php"))), "html", null, true);
            yield "\" class=\"d-inline-flex align-items-center gap-1\">
            ";
            // line 45
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", false, true, false, 45), "icon", [], "array", true, true, false, 45) &&  !Twig\Extension\CoreExtension::testEmpty((($_v6 = (($_v7 = ($context["menu"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7[(($_v8 = ($context["sector"] ?? null)) instanceof \Stringable && (is_array($_v7) || $_v7 instanceof \ArrayObject || $_v7 instanceof \ArrayIterator) ? (string) $_v8 : $_v8)] ?? null) : null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["icon"] ?? null) : null)))) {
                // line 46
                yield "                <i class=\"";
                yield (string) $this->escaper->escape((($_v9 = (($_v10 = ($context["menu"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10[(($_v11 = ($context["sector"] ?? null)) instanceof \Stringable && (is_array($_v10) || $_v10 instanceof \ArrayObject || $_v10 instanceof \ArrayIterator) ? (string) $_v11 : $_v11)] ?? null) : null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["icon"] ?? null) : null), "html", null, true);
                yield "\" aria-hidden=\"true\"></i>
            ";
            }
            // line 48
            yield "            ";
            yield (string) $this->escaper->escape((($_v12 = (($_v13 = ($context["menu"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13[(($_v14 = ($context["sector"] ?? null)) instanceof \Stringable && (is_array($_v13) || $_v13 instanceof \ArrayObject || $_v13 instanceof \ArrayIterator) ? (string) $_v14 : $_v14)] ?? null) : null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["title"] ?? null) : null), "html", null, true);
            yield "
         </a>
      </li>
      ";
        }
        // line 52
        yield "
      ";
        // line 53
        $context["with_option"] = false;
        // line 54
        yield "      ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", false, true, false, 54), "content", [], "array", false, true, false, 54), ($context["item"] ?? null), [], "array", true, true, false, 54)) {
            // line 55
            yield "         ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", false, true, false, 55), "content", [], "array", false, true, false, 55), ($context["item"] ?? null), [], "array", false, true, false, 55), "page", [], "array", true, true, false, 55)) {
                // line 56
                yield "         ";
                $context["with_option"] = (( !Twig\Extension\CoreExtension::testEmpty(($context["option"] ?? null)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", false, true, false, 56), "content", [], "array", false, true, false, 56), ($context["item"] ?? null), [], "array", false, true, false, 56), "options", [], "array", false, true, false, 56), ($context["option"] ?? null), [], "array", false, true, false, 56), "title", [], "array", true, true, false, 56)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", false, true, false, 56), "content", [], "array", false, true, false, 56), ($context["item"] ?? null), [], "array", false, true, false, 56), "options", [], "array", false, true, false, 56), ($context["option"] ?? null), [], "array", false, true, false, 56), "page", [], "array", true, true, false, 56));
                // line 57
                yield "         <li class=\"breadcrumb-item text-truncate\">
            <a href=\"";
                // line 58
                yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path((($_v15 = (($_v16 = (($_v17 = (($_v18 = ($context["menu"] ?? null)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18[(($_v19 = ($context["sector"] ?? null)) instanceof \Stringable && (is_array($_v18) || $_v18 instanceof \ArrayObject || $_v18 instanceof \ArrayIterator) ? (string) $_v19 : $_v19)] ?? null) : null)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17["content"] ?? null) : null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16[(($_v20 = ($context["item"] ?? null)) instanceof \Stringable && (is_array($_v16) || $_v16 instanceof \ArrayObject || $_v16 instanceof \ArrayIterator) ? (string) $_v20 : $_v20)] ?? null) : null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["page"] ?? null) : null)), "html", null, true);
                yield "\"
               class=\"d-inline-flex align-items-center gap-1\"
               ";
                // line 60
                if ( !(($tmp = ($context["with_option"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "aria-current=\"page\"";
                }
                yield ">
               ";
                // line 61
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", false, true, false, 61), "content", [], "array", false, true, false, 61), ($context["item"] ?? null), [], "array", false, true, false, 61), "icon", [], "array", true, true, false, 61) &&  !Twig\Extension\CoreExtension::testEmpty((($_v21 = (($_v22 = (($_v23 = (($_v24 = ($context["menu"] ?? null)) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24[(($_v25 = ($context["sector"] ?? null)) instanceof \Stringable && (is_array($_v24) || $_v24 instanceof \ArrayObject || $_v24 instanceof \ArrayIterator) ? (string) $_v25 : $_v25)] ?? null) : null)) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23["content"] ?? null) : null)) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22[(($_v26 = ($context["item"] ?? null)) instanceof \Stringable && (is_array($_v22) || $_v22 instanceof \ArrayObject || $_v22 instanceof \ArrayIterator) ? (string) $_v26 : $_v26)] ?? null) : null)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21["icon"] ?? null) : null)))) {
                    // line 62
                    yield "                   <i class=\"";
                    yield (string) $this->escaper->escape((($_v27 = (($_v28 = (($_v29 = (($_v30 = ($context["menu"] ?? null)) && is_array($_v30) || $_v30 instanceof ArrayAccess ? ($_v30[(($_v31 = ($context["sector"] ?? null)) instanceof \Stringable && (is_array($_v30) || $_v30 instanceof \ArrayObject || $_v30 instanceof \ArrayIterator) ? (string) $_v31 : $_v31)] ?? null) : null)) && is_array($_v29) || $_v29 instanceof ArrayAccess ? ($_v29["content"] ?? null) : null)) && is_array($_v28) || $_v28 instanceof ArrayAccess ? ($_v28[(($_v32 = ($context["item"] ?? null)) instanceof \Stringable && (is_array($_v28) || $_v28 instanceof \ArrayObject || $_v28 instanceof \ArrayIterator) ? (string) $_v32 : $_v32)] ?? null) : null)) && is_array($_v27) || $_v27 instanceof ArrayAccess ? ($_v27["icon"] ?? null) : null), "html", null, true);
                    yield "\" aria-hidden=\"true\"></i>
               ";
                }
                // line 64
                yield "               ";
                yield (string) $this->escaper->escape((($_v33 = (($_v34 = (($_v35 = (($_v36 = ($context["menu"] ?? null)) && is_array($_v36) || $_v36 instanceof ArrayAccess ? ($_v36[(($_v37 = ($context["sector"] ?? null)) instanceof \Stringable && (is_array($_v36) || $_v36 instanceof \ArrayObject || $_v36 instanceof \ArrayIterator) ? (string) $_v37 : $_v37)] ?? null) : null)) && is_array($_v35) || $_v35 instanceof ArrayAccess ? ($_v35["content"] ?? null) : null)) && is_array($_v34) || $_v34 instanceof ArrayAccess ? ($_v34[(($_v38 = ($context["item"] ?? null)) instanceof \Stringable && (is_array($_v34) || $_v34 instanceof \ArrayObject || $_v34 instanceof \ArrayIterator) ? (string) $_v38 : $_v38)] ?? null) : null)) && is_array($_v33) || $_v33 instanceof ArrayAccess ? ($_v33["title"] ?? null) : null), "html", null, true);
                yield "
            </a>
         </li>
         ";
            }
            // line 68
            yield "
         ";
            // line 69
            if ((($tmp = ($context["with_option"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 70
                yield "         <li class=\"breadcrumb-item text-truncate\">
            <a href=\"";
                // line 71
                yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path((($_v39 = (($_v40 = (($_v41 = (($_v42 = (($_v43 = (($_v44 = ($context["menu"] ?? null)) && is_array($_v44) || $_v44 instanceof ArrayAccess ? ($_v44[(($_v45 = ($context["sector"] ?? null)) instanceof \Stringable && (is_array($_v44) || $_v44 instanceof \ArrayObject || $_v44 instanceof \ArrayIterator) ? (string) $_v45 : $_v45)] ?? null) : null)) && is_array($_v43) || $_v43 instanceof ArrayAccess ? ($_v43["content"] ?? null) : null)) && is_array($_v42) || $_v42 instanceof ArrayAccess ? ($_v42[(($_v46 = ($context["item"] ?? null)) instanceof \Stringable && (is_array($_v42) || $_v42 instanceof \ArrayObject || $_v42 instanceof \ArrayIterator) ? (string) $_v46 : $_v46)] ?? null) : null)) && is_array($_v41) || $_v41 instanceof ArrayAccess ? ($_v41["options"] ?? null) : null)) && is_array($_v40) || $_v40 instanceof ArrayAccess ? ($_v40[(($_v47 = ($context["option"] ?? null)) instanceof \Stringable && (is_array($_v40) || $_v40 instanceof \ArrayObject || $_v40 instanceof \ArrayIterator) ? (string) $_v47 : $_v47)] ?? null) : null)) && is_array($_v39) || $_v39 instanceof ArrayAccess ? ($_v39["page"] ?? null) : null)), "html", null, true);
                yield "\"
               class=\"d-inline-flex align-items-center gap-1\"
               aria-current=\"page\"
               data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\"
               title=\"";
                // line 75
                yield (string) $this->escaper->escape((($_v48 = (($_v49 = (($_v50 = (($_v51 = (($_v52 = (($_v53 = ($context["menu"] ?? null)) && is_array($_v53) || $_v53 instanceof ArrayAccess ? ($_v53[(($_v54 = ($context["sector"] ?? null)) instanceof \Stringable && (is_array($_v53) || $_v53 instanceof \ArrayObject || $_v53 instanceof \ArrayIterator) ? (string) $_v54 : $_v54)] ?? null) : null)) && is_array($_v52) || $_v52 instanceof ArrayAccess ? ($_v52["content"] ?? null) : null)) && is_array($_v51) || $_v51 instanceof ArrayAccess ? ($_v51[(($_v55 = ($context["item"] ?? null)) instanceof \Stringable && (is_array($_v51) || $_v51 instanceof \ArrayObject || $_v51 instanceof \ArrayIterator) ? (string) $_v55 : $_v55)] ?? null) : null)) && is_array($_v50) || $_v50 instanceof ArrayAccess ? ($_v50["options"] ?? null) : null)) && is_array($_v49) || $_v49 instanceof ArrayAccess ? ($_v49[(($_v56 = ($context["option"] ?? null)) instanceof \Stringable && (is_array($_v49) || $_v49 instanceof \ArrayObject || $_v49 instanceof \ArrayIterator) ? (string) $_v56 : $_v56)] ?? null) : null)) && is_array($_v48) || $_v48 instanceof ArrayAccess ? ($_v48["title"] ?? null) : null), "html", null, true);
                yield "\" >
               ";
                // line 76
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", false, true, false, 76), "content", [], "array", false, true, false, 76), ($context["item"] ?? null), [], "array", false, true, false, 76), "options", [], "array", false, true, false, 76), ($context["option"] ?? null), [], "array", false, true, false, 76), "icon", [], "array", true, true, false, 76) &&  !Twig\Extension\CoreExtension::testEmpty((($_v57 = (($_v58 = (($_v59 = (($_v60 = (($_v61 = (($_v62 = ($context["menu"] ?? null)) && is_array($_v62) || $_v62 instanceof ArrayAccess ? ($_v62[(($_v63 = ($context["sector"] ?? null)) instanceof \Stringable && (is_array($_v62) || $_v62 instanceof \ArrayObject || $_v62 instanceof \ArrayIterator) ? (string) $_v63 : $_v63)] ?? null) : null)) && is_array($_v61) || $_v61 instanceof ArrayAccess ? ($_v61["content"] ?? null) : null)) && is_array($_v60) || $_v60 instanceof ArrayAccess ? ($_v60[(($_v64 = ($context["item"] ?? null)) instanceof \Stringable && (is_array($_v60) || $_v60 instanceof \ArrayObject || $_v60 instanceof \ArrayIterator) ? (string) $_v64 : $_v64)] ?? null) : null)) && is_array($_v59) || $_v59 instanceof ArrayAccess ? ($_v59["options"] ?? null) : null)) && is_array($_v58) || $_v58 instanceof ArrayAccess ? ($_v58[(($_v65 = ($context["option"] ?? null)) instanceof \Stringable && (is_array($_v58) || $_v58 instanceof \ArrayObject || $_v58 instanceof \ArrayIterator) ? (string) $_v65 : $_v65)] ?? null) : null)) && is_array($_v57) || $_v57 instanceof ArrayAccess ? ($_v57["icon"] ?? null) : null)))) {
                    // line 77
                    yield "                   <i class=\"";
                    yield (string) $this->escaper->escape((($_v66 = (($_v67 = (($_v68 = (($_v69 = (($_v70 = (($_v71 = ($context["menu"] ?? null)) && is_array($_v71) || $_v71 instanceof ArrayAccess ? ($_v71[(($_v72 = ($context["sector"] ?? null)) instanceof \Stringable && (is_array($_v71) || $_v71 instanceof \ArrayObject || $_v71 instanceof \ArrayIterator) ? (string) $_v72 : $_v72)] ?? null) : null)) && is_array($_v70) || $_v70 instanceof ArrayAccess ? ($_v70["content"] ?? null) : null)) && is_array($_v69) || $_v69 instanceof ArrayAccess ? ($_v69[(($_v73 = ($context["item"] ?? null)) instanceof \Stringable && (is_array($_v69) || $_v69 instanceof \ArrayObject || $_v69 instanceof \ArrayIterator) ? (string) $_v73 : $_v73)] ?? null) : null)) && is_array($_v68) || $_v68 instanceof ArrayAccess ? ($_v68["options"] ?? null) : null)) && is_array($_v67) || $_v67 instanceof ArrayAccess ? ($_v67[(($_v74 = ($context["option"] ?? null)) instanceof \Stringable && (is_array($_v67) || $_v67 instanceof \ArrayObject || $_v67 instanceof \ArrayIterator) ? (string) $_v74 : $_v74)] ?? null) : null)) && is_array($_v66) || $_v66 instanceof ArrayAccess ? ($_v66["icon"] ?? null) : null), "html", null, true);
                    yield "\" aria-hidden=\"true\"></i>
               ";
                }
                // line 79
                yield "               ";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString((($_v75 = (($_v76 = (($_v77 = (($_v78 = (($_v79 = (($_v80 = ($context["menu"] ?? null)) && is_array($_v80) || $_v80 instanceof ArrayAccess ? ($_v80[(($_v81 = ($context["sector"] ?? null)) instanceof \Stringable && (is_array($_v80) || $_v80 instanceof \ArrayObject || $_v80 instanceof \ArrayIterator) ? (string) $_v81 : $_v81)] ?? null) : null)) && is_array($_v79) || $_v79 instanceof ArrayAccess ? ($_v79["content"] ?? null) : null)) && is_array($_v78) || $_v78 instanceof ArrayAccess ? ($_v78[(($_v82 = ($context["item"] ?? null)) instanceof \Stringable && (is_array($_v78) || $_v78 instanceof \ArrayObject || $_v78 instanceof \ArrayIterator) ? (string) $_v82 : $_v82)] ?? null) : null)) && is_array($_v77) || $_v77 instanceof ArrayAccess ? ($_v77["options"] ?? null) : null)) && is_array($_v76) || $_v76 instanceof ArrayAccess ? ($_v76[(($_v83 = ($context["option"] ?? null)) instanceof \Stringable && (is_array($_v76) || $_v76 instanceof \ArrayObject || $_v76 instanceof \ArrayIterator) ? (string) $_v83 : $_v83)] ?? null) : null)) && is_array($_v75) || $_v75 instanceof ArrayAccess ? ($_v75["title"] ?? null) : null)), "truncate", [17, "..."], "method", false, false, false, 79), "html", null, true);
                yield "
            </a>
         </li>
         ";
            }
            // line 83
            yield "
      ";
        }
        // line 85
        yield "   </ol>
</nav>

";
        // line 88
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), ($context["sector"] ?? null), [], "array", false, true, false, 88), "content", [], "array", false, true, false, 88), ($context["item"] ?? null), [], "array", true, true, false, 88)) {
            // line 89
            yield "    ";
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "layout/parts/context_links.html.twig");
            yield "
";
        }
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "layout/parts/breadcrumbs.html.twig";
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
        return array (  183 => 89,  181 => 88,  176 => 85,  172 => 83,  164 => 79,  158 => 77,  156 => 76,  152 => 75,  145 => 71,  142 => 70,  140 => 69,  137 => 68,  129 => 64,  123 => 62,  121 => 61,  115 => 60,  110 => 58,  107 => 57,  104 => 56,  101 => 55,  98 => 54,  96 => 53,  93 => 52,  85 => 48,  79 => 46,  77 => 45,  73 => 44,  70 => 43,  68 => 42,  61 => 38,  56 => 36,  50 => 33,  47 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "layout/parts/breadcrumbs.html.twig", "/var/www/html/glpi/templates/layout/parts/breadcrumbs.html.twig");
    }
}
