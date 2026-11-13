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

/* components/search/table.html.twig */
class __TwigTemplate_3b50b5bf6b528acb689fc964c8f279cf extends Template
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
        $context["searchform_id"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "searchform_id", [], "array", true, true, false, 33)) ? (Twig\Extension\CoreExtension::default((($_v0 = ($context["data"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["searchform_id"] ?? null) : null), ("search_" . ($context["rand"] ?? null)))) : (("search_" . ($context["rand"] ?? null))));
        // line 34
        $context["massive_action_form_id"] = (((array_key_exists("massive_action_form_id", $context) &&  !(null === $context["massive_action_form_id"]))) ? ($context["massive_action_form_id"]) : (""));
        // line 35
        $context["is_trashbin"] = (($_v1 = (($_v2 = ($context["data"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["search"] ?? null) : null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["is_deleted"] ?? null) : null);
        // line 36
        yield "
<div class=\"table-responsive-lg\">
   <table
      class=\"search-results table card-table table-hover ";
        // line 39
        yield (string) (((($tmp = ($context["is_trashbin"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("table-danger deleted-results") : ("table-striped"));
        yield "\"
      data-testid=\"";
        // line 40
        yield (string) (((($tmp = ($context["is_trashbin"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("search-results-trashbin") : ("search-results"));
        yield "\"
      id=\"";
        // line 41
        yield (string) $this->escaper->escape(($context["searchform_id"] ?? null), "html", null, true);
        yield "\"
   >
      <thead>
         <tr ";
        // line 44
        if ((($context["count"] ?? null) == 0)) {
            yield "style=\"display: none;\"";
        }
        yield ">
            ";
        // line 45
        if ((($tmp = ($context["showmassiveactions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 46
            yield "            <th style=\"width: 30px;\">
               <div>
                  <input class=\"form-check-input massive_action_checkbox\" type=\"checkbox\" id=\"checkall_";
            // line 48
            yield (string) $this->escaper->escape(($context["rand"] ?? null), "html", null, true);
            yield "\"
                        value=\"\" aria-label=\"";
            // line 49
            yield (string) $this->escaper->escape(__("Check all as"), "html", null, true);
            yield "\"
                        onclick=\"checkAsCheckboxes(this, \x27";
            // line 50
            yield (string) $this->escaper->escape($this->escaper->escape(($context["searchform_id"] ?? null), "js"), "html", null, true);
            yield "\x27, \x27.massive_action_checkbox\x27);\"
                        form=\"";
            // line 51
            yield (string) $this->escaper->escape(($context["massive_action_form_id"] ?? null), "html", null, true);
            yield "\" />
               </div>
            </th>
            ";
        }
        // line 55
        yield "
            ";
        // line 56
        $context["sorts"] = (($_v3 = (($_v4 = ($context["data"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["search"] ?? null) : null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["sort"] ?? null) : null);
        // line 57
        yield "            ";
        if ((($tmp = ($context["search_was_executed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 58
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((($_v5 = (($_v6 = ($context["data"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["data"] ?? null) : null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["cols"] ?? null) : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
                // line 59
                yield "               ";
                // line 60
                yield "               ";
                $context["linkto"] = "";
                // line 61
                yield "               ";
                $context["so_no_sort"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["col"], "searchopt", [], "array", false, true, false, 61), "nosort", [], "array", true, true, false, 61) &&  !(null === (($_v7 = (($_v8 = $context["col"]) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["searchopt"] ?? null) : null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["nosort"] ?? null) : null)))) ? ((($_v9 = (($_v10 = $context["col"]) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["searchopt"] ?? null) : null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["nosort"] ?? null) : null)) : (false));
                // line 62
                yield "               ";
                $context["meta"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["col"], "meta", [], "array", true, true, false, 62) &&  !(null === (($_v11 = $context["col"]) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["meta"] ?? null) : null)))) ? ((($_v12 = $context["col"]) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["meta"] ?? null) : null)) : (false));
                // line 63
                yield "               ";
                $context["sort_order"] = "nosort";
                // line 64
                yield "               ";
                $context["sort_num"] = "";
                // line 65
                yield "               ";
                $context["can_sort"] = (( !(($tmp = ($context["meta"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) &&  !(($tmp = ($context["no_sort"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) &&  !(($tmp = ($context["so_no_sort"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp));
                // line 66
                yield "               ";
                if ((($tmp = ($context["can_sort"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 67
                    yield "                  ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["sorts"] ?? null));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["sort_opt"]) {
                        // line 68
                        yield "                     ";
                        if (($context["sort_opt"] == (($_v13 = $context["col"]) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["id"] ?? null) : null))) {
                            // line 69
                            yield "                        ";
                            $context["sort_order"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "search", [], "array", false, true, false, 69), "order", [], "array", false, true, false, 69), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 69), [], "array", true, true, false, 69)) ? (Twig\Extension\CoreExtension::default((($_v14 = (($_v15 = (($_v16 = ($context["data"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16["search"] ?? null) : null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["order"] ?? null) : null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14[(($_v17 = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 69)) instanceof \Stringable && (is_array($_v14) || $_v14 instanceof \ArrayObject || $_v14 instanceof \ArrayIterator) ? (string) $_v17 : $_v17)] ?? null) : null), "ASC")) : ("ASC"));
                            // line 70
                            yield "                        ";
                            $context["sort_num"] = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 70);
                            // line 71
                            yield "                     ";
                        }
                        // line 72
                        yield "                  ";
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
                    unset($context['_seq'], $context['_key'], $context['sort_opt'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent);
                    $context += $_parent;
                    // line 73
                    yield "               ";
                }
                // line 74
                yield "
               ";
                // line 75
                $context["col_name"] = (($_v18 = $context["col"]) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18["name"] ?? null) : null);
                // line 76
                yield "               ";
                // line 77
                yield "               ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["col"], "groupname", [], "array", true, true, false, 77)) {
                    // line 78
                    yield "                  ";
                    $context["groupname"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["col"], "groupname", [], "array", false, true, false, 78), "name", [], "array", true, true, false, 78) &&  !(null === (($_v19 = (($_v20 = $context["col"]) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20["groupname"] ?? null) : null)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19["name"] ?? null) : null)))) ? ((($_v21 = (($_v22 = $context["col"]) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22["groupname"] ?? null) : null)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21["name"] ?? null) : null)) : ((($_v23 = $context["col"]) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23["groupname"] ?? null) : null)));
                    // line 79
                    yield "                  ";
                    $context["col_name"] = Twig\Extension\CoreExtension::sprintf(__("%1\$s - %2\$s"), ($context["groupname"] ?? null), (($_v24 = $context["col"]) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24["name"] ?? null) : null));
                    // line 80
                    yield "               ";
                }
                // line 81
                yield "
               ";
                // line 83
                yield "               ";
                if (( !(($tmp = ($context["itemtype"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) == (($_v25 = $context["col"]) && is_array($_v25) || $_v25 instanceof ArrayAccess ? ($_v25["itemtype"] ?? null) : null))) {
                    // line 84
                    yield "                  ";
                    $context["col_name"] = Twig\Extension\CoreExtension::sprintf(__("%1\$s - %2\$s"), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName((($_v26 = $context["col"]) && is_array($_v26) || $_v26 instanceof ArrayAccess ? ($_v26["itemtype"] ?? null) : null)), ($context["col_name"] ?? null));
                    // line 85
                    yield "               ";
                }
                // line 86
                yield "
               <th data-searchopt-id=\"";
                // line 87
                yield (string) $this->escaper->escape((($_v27 = $context["col"]) && is_array($_v27) || $_v27 instanceof ArrayAccess ? ($_v27["id"] ?? null) : null), "html", null, true);
                yield "\" ";
                if ( !(($tmp = ($context["can_sort"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "data-nosort=\"true\"";
                }
                yield " data-sort-order=\"";
                yield (string) $this->escaper->escape(($context["sort_order"] ?? null), "html", null, true);
                yield "\"
                  ";
                // line 88
                if ( !Twig\Extension\CoreExtension::testEmpty(($context["sort_num"] ?? null))) {
                    yield "data-sort-num=\"";
                    yield (string) $this->escaper->escape((($context["sort_num"] ?? null) - 1), "html", null, true);
                    yield "\"";
                }
                yield ">
                  ";
                // line 89
                $context["sort_icon"] = (((($context["sort_order"] ?? null) == "ASC")) ? ("ti ti-caret-down-filled") : ((((($context["sort_order"] ?? null) == "DESC")) ? ("ti ti-caret-up-filled") : (""))));
                // line 90
                yield "                  ";
                yield (string) $this->escaper->escape(($context["col_name"] ?? null), "html", null, true);
                yield "
                  ";
                // line 91
                if ((($tmp = ($context["can_sort"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 92
                    yield "                     <span class=\"sort-indicator\"><i class=\"";
                    yield (string) $this->escaper->escape(($context["sort_icon"] ?? null), "html", null, true);
                    yield "\" aria-hidden=\"true\"></i><span class=\"sort-num\">";
                    yield (string) (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["sorts"] ?? null)) > 1)) ? ($this->escaper->escape(($context["sort_num"] ?? null), "html", null, true)) : (""));
                    yield "</span></span>
                  ";
                }
                // line 94
                yield "               </th>
            ";
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
            unset($context['_seq'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 96
            yield "            ";
        }
        // line 97
        yield "
            ";
        // line 99
        yield "            ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["union_search_type"] ?? null), ($context["itemtype"] ?? null), [], "array", true, true, false, 99)) {
            // line 100
            yield "               <th>
                  ";
            // line 101
            yield (string) $this->escaper->escape(__("Item type"), "html", null, true);
            yield "
               </th>
            ";
        }
        // line 104
        yield "         </tr>
      </thead>
      <tbody>

         ";
        // line 108
        if ((($context["count"] ?? null) == 0)) {
            // line 109
            yield "            ";
            if ( !(($tmp = ($context["search_was_executed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 110
                yield "               ";
                // line 111
                yield "            ";
            } else {
                // line 112
                yield "               <tr>
                  <td colspan=\"";
                // line 113
                yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (($_v28 = (($_v29 = ($context["data"] ?? null)) && is_array($_v29) || $_v29 instanceof ArrayAccess ? ($_v29["data"] ?? null) : null)) && is_array($_v28) || $_v28 instanceof ArrayAccess ? ($_v28["cols"] ?? null) : null)), "html", null, true);
                yield "\">
                     ";
                // line 114
                if ((($tmp = ($context["search_error"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 115
                    yield "                         ";
                    yield (string) $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("Alert:Danger", ["heading" => __("An error occurred during the search"), "content" => __("Consider changing the search criteria or adjusting the displayed columns.")]);
                    yield "
                     ";
                } else {
                    // line 117
                    yield "                         ";
                    yield (string) $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("Alert", ["content" => __("No results found")]);
                    yield "
                     ";
                }
                // line 119
                yield "                  </td>
               </tr>
            ";
            }
            // line 122
            yield "         ";
        } else {
            // line 123
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((($_v30 = (($_v31 = ($context["data"] ?? null)) && is_array($_v31) || $_v31 instanceof ArrayAccess ? ($_v31["data"] ?? null) : null)) && is_array($_v30) || $_v30 instanceof ArrayAccess ? ($_v30["rows"] ?? null) : null));
            foreach ($context['_seq'] as $context["rowkey"] => $context["row"]) {
                // line 124
                yield "               <tr>
                  ";
                // line 125
                if ((($tmp = ($context["showmassiveactions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 126
                    yield "                  <td>
                     <div>
                        ";
                    // line 129
                    yield "                        ";
                    if (((($context["itemtype"] ?? null) == "Entity") &&  !(($tmp = Session::haveAccessToEntity((($_v32 = $context["row"]) && is_array($_v32) || $_v32 instanceof ArrayAccess ? ($_v32["id"] ?? null) : null))) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                        // line 130
                        yield "                        ";
                    } elseif ((((($context["itemtype"] ?? null) == "User") &&  !(($tmp = Session::canViewAllEntities()) && $tmp instanceof Markup ? (string) $tmp : $tmp)) &&  !(($tmp = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->hasAccessToUserEntities((($_v33 = $context["row"]) && is_array($_v33) || $_v33 instanceof ArrayAccess ? ($_v33["id"] ?? null) : null))) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                        // line 131
                        yield "                        ";
                    } elseif ((($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf(($context["item"] ?? null), "CommonDBTM") && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "maybeRecursive", [], "method", false, false, false, 131)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) &&  !(($tmp = Session::haveAccessToEntity((($_v34 = $context["row"]) && is_array($_v34) || $_v34 instanceof ArrayAccess ? ($_v34["entities_id"] ?? null) : null))) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                        // line 132
                        yield "                        ";
                    } else {
                        // line 133
                        yield "                           ";
                        $context["row_itemtype"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["row"], "TYPE", [], "array", true, true, false, 133) &&  !(null === (($_v35 = $context["row"]) && is_array($_v35) || $_v35 instanceof ArrayAccess ? ($_v35["TYPE"] ?? null) : null)))) ? ((($_v36 = $context["row"]) && is_array($_v36) || $_v36 instanceof ArrayAccess ? ($_v36["TYPE"] ?? null) : null)) : (($context["itemtype"] ?? null)));
                        // line 134
                        yield "                           ";
                        if ((($tmp = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call((($context["row_itemtype"] ?? null) . "::isMassiveActionAllowed"), [(($_v37 = $context["row"]) && is_array($_v37) || $_v37 instanceof ArrayAccess ? ($_v37["id"] ?? null) : null)])) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 135
                            yield "                              ";
                            $context["checked"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpimassiveactionselected"), ($context["row_itemtype"] ?? null), [], "array", false, true, false, 135), (($_v38 = $context["row"]) && is_array($_v38) || $_v38 instanceof ArrayAccess ? ($_v38["id"] ?? null) : null), [], "array", true, true, false, 135) &&  !(null === (($_v39 = (($_v40 = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpimassiveactionselected")) && is_array($_v40) || $_v40 instanceof ArrayAccess ? ($_v40[(($_v41 = ($context["row_itemtype"] ?? null)) instanceof \Stringable && (is_array($_v40) || $_v40 instanceof \ArrayObject || $_v40 instanceof \ArrayIterator) ? (string) $_v41 : $_v41)] ?? null) : null)) && is_array($_v39) || $_v39 instanceof ArrayAccess ? ($_v39[(($_v42 = (($_v43 = $context["row"]) && is_array($_v43) || $_v43 instanceof ArrayAccess ? ($_v43["id"] ?? null) : null)) instanceof \Stringable && (is_array($_v39) || $_v39 instanceof \ArrayObject || $_v39 instanceof \ArrayIterator) ? (string) $_v42 : $_v42)] ?? null) : null)))) ? ((($_v44 = (($_v45 = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpimassiveactionselected")) && is_array($_v45) || $_v45 instanceof ArrayAccess ? ($_v45[(($_v46 = ($context["row_itemtype"] ?? null)) instanceof \Stringable && (is_array($_v45) || $_v45 instanceof \ArrayObject || $_v45 instanceof \ArrayIterator) ? (string) $_v46 : $_v46)] ?? null) : null)) && is_array($_v44) || $_v44 instanceof ArrayAccess ? ($_v44[(($_v47 = (($_v48 = $context["row"]) && is_array($_v48) || $_v48 instanceof ArrayAccess ? ($_v48["id"] ?? null) : null)) instanceof \Stringable && (is_array($_v44) || $_v44 instanceof \ArrayObject || $_v44 instanceof \ArrayIterator) ? (string) $_v47 : $_v47)] ?? null) : null)) : (false));
                            // line 136
                            yield "                              <input class=\"form-check-input massive_action_checkbox\" type=\"checkbox\" data-glpicore-ma-tags=\"common\"
                                 value=\"1\" aria-label=\"";
                            // line 137
                            yield (string) $this->escaper->escape(__("Select item"), "html", null, true);
                            yield "\" ";
                            if ((($tmp = ($context["checked"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                yield "checked=\"checked\"";
                            }
                            // line 138
                            yield "                                 name=\"item[";
                            yield (string) (((CoreExtension::getAttribute($this->env, $this->source, $context["row"], "TYPE", [], "array", true, true, false, 138) &&  !(null === (($_v49 = $context["row"]) && is_array($_v49) || $_v49 instanceof ArrayAccess ? ($_v49["TYPE"] ?? null) : null)))) ? ($this->escaper->escape((($_v50 = $context["row"]) && is_array($_v50) || $_v50 instanceof ArrayAccess ? ($_v50["TYPE"] ?? null) : null), "html", null, true)) : ($this->escaper->escape(($context["itemtype"] ?? null), "html", null, true)));
                            yield "][";
                            yield (string) $this->escaper->escape((($_v51 = $context["row"]) && is_array($_v51) || $_v51 instanceof ArrayAccess ? ($_v51["id"] ?? null) : null), "html", null, true);
                            yield "]\"
                                 form=\"";
                            // line 139
                            yield (string) $this->escaper->escape(($context["massive_action_form_id"] ?? null), "html", null, true);
                            yield "\" />
                           ";
                        }
                        // line 141
                        yield "                        ";
                    }
                    // line 142
                    yield "                     </div>
                  </td>
                  ";
                }
                // line 145
                yield "
                  ";
                // line 146
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((($_v52 = (($_v53 = ($context["data"] ?? null)) && is_array($_v53) || $_v53 instanceof ArrayAccess ? ($_v53["data"] ?? null) : null)) && is_array($_v52) || $_v52 instanceof ArrayAccess ? ($_v52["cols"] ?? null) : null));
                foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
                    // line 147
                    yield "                     ";
                    $context["colkey"] = (((($_v54 = $context["col"]) && is_array($_v54) || $_v54 instanceof ArrayAccess ? ($_v54["itemtype"] ?? null) : null) . "_") . (($_v55 = $context["col"]) && is_array($_v55) || $_v55 instanceof ArrayAccess ? ($_v55["id"] ?? null) : null));
                    // line 148
                    yield "                     ";
                    // line 149
                    yield "                     ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["col"], "meta", [], "array", true, true, false, 149) && (($tmp = (($_v56 = $context["col"]) && is_array($_v56) || $_v56 instanceof ArrayAccess ? ($_v56["meta"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                        // line 150
                        yield "                        ";
                        yield (string) $this->extensions['Glpi\Application\View\Extension\SearchExtension']->showItem(0, (($_v57 = (($_v58 = $context["row"]) && is_array($_v58) || $_v58 instanceof ArrayAccess ? ($_v58[(($_v59 = ($context["colkey"] ?? null)) instanceof \Stringable && (is_array($_v58) || $_v58 instanceof \ArrayObject || $_v58 instanceof \ArrayIterator) ? (string) $_v59 : $_v59)] ?? null) : null)) && is_array($_v57) || $_v57 instanceof ArrayAccess ? ($_v57["displayname"] ?? null) : null), 0, 0);
                        yield "
                     ";
                    } else {
                        // line 152
                        yield "                        ";
                        // line 153
                        yield "                        ";
                        yield (string) $this->extensions['Glpi\Application\View\Extension\SearchExtension']->showItem(0, (($_v60 = (($_v61 = $context["row"]) && is_array($_v61) || $_v61 instanceof ArrayAccess ? ($_v61[(($_v62 = ($context["colkey"] ?? null)) instanceof \Stringable && (is_array($_v61) || $_v61 instanceof \ArrayObject || $_v61 instanceof \ArrayIterator) ? (string) $_v62 : $_v62)] ?? null) : null)) && is_array($_v60) || $_v60 instanceof ArrayAccess ? ($_v60["displayname"] ?? null) : null), 0, 0, ((("data-searchopt-content-id=\"" . $this->escaper->escape((($_v63 = $context["col"]) && is_array($_v63) || $_v63 instanceof ArrayAccess ? ($_v63["id"] ?? null) : null))) . "\" ") . $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Search::displayConfigItem", [($context["itemtype"] ?? null), (($_v64 = $context["col"]) && is_array($_v64) || $_v64 instanceof ArrayAccess ? ($_v64["id"] ?? null) : null), $context["row"]])));
                        yield "
                     ";
                    }
                    // line 155
                    yield "                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['col'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 156
                yield "
                  ";
                // line 158
                yield "                  ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["union_search_type"] ?? null), ($context["itemtype"] ?? null), [], "array", true, true, false, 158)) {
                    // line 159
                    yield "                     <td>
                        ";
                    // line 160
                    yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName((($_v65 = $context["row"]) && is_array($_v65) || $_v65 instanceof ArrayAccess ? ($_v65["TYPE"] ?? null) : null)), "html", null, true);
                    yield "
                     </td>
                  ";
                }
                // line 163
                yield "               </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['rowkey'], $context['row'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 165
            yield "         ";
        }
        // line 166
        yield "      </tbody>
   </table>
</div>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/search/table.html.twig";
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
        return array (  477 => 166,  474 => 165,  466 => 163,  460 => 160,  457 => 159,  454 => 158,  451 => 156,  444 => 155,  438 => 153,  436 => 152,  430 => 150,  427 => 149,  425 => 148,  422 => 147,  418 => 146,  415 => 145,  410 => 142,  407 => 141,  402 => 139,  395 => 138,  389 => 137,  386 => 136,  383 => 135,  380 => 134,  377 => 133,  374 => 132,  371 => 131,  368 => 130,  365 => 129,  361 => 126,  359 => 125,  356 => 124,  351 => 123,  348 => 122,  343 => 119,  337 => 117,  331 => 115,  329 => 114,  325 => 113,  322 => 112,  319 => 111,  317 => 110,  314 => 109,  312 => 108,  306 => 104,  300 => 101,  297 => 100,  294 => 99,  291 => 97,  288 => 96,  272 => 94,  264 => 92,  262 => 91,  257 => 90,  255 => 89,  247 => 88,  237 => 87,  234 => 86,  231 => 85,  228 => 84,  225 => 83,  222 => 81,  219 => 80,  216 => 79,  213 => 78,  210 => 77,  208 => 76,  206 => 75,  203 => 74,  200 => 73,  185 => 72,  182 => 71,  179 => 70,  176 => 69,  173 => 68,  155 => 67,  152 => 66,  149 => 65,  146 => 64,  143 => 63,  140 => 62,  137 => 61,  134 => 60,  132 => 59,  114 => 58,  111 => 57,  109 => 56,  106 => 55,  99 => 51,  95 => 50,  91 => 49,  87 => 48,  83 => 46,  81 => 45,  75 => 44,  69 => 41,  65 => 40,  61 => 39,  56 => 36,  54 => 35,  52 => 34,  50 => 33,  47 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/search/table.html.twig", "/var/www/html/glpi/templates/components/search/table.html.twig");
    }
}
