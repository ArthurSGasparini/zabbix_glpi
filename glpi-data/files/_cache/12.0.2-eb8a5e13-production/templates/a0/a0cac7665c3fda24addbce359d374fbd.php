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

/* components/search/controls.html.twig */
class __TwigTemplate_02094e5ffff05c21d8e3c769986e523a extends Template
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
        if (((($tmp = ($context["showmassiveactions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($context["count"] ?? null) > 0))) {
            // line 34
            yield "    <div class=\"massiveactions-control card-header search-header ps-3 animate__animated animate__faster d-none\">
        ";
            // line 35
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::showMassiveActions", [($context["massiveactionparams"] ?? null)]);
            // line 36
            yield "    </div>
";
        }
        // line 38
        yield "
<div class=\"card-header search-header px-1 px-xl-3\">
    ";
        // line 40
        if ( !(($tmp = (((CoreExtension::getAttribute($this->env, $this->source, ($context["original_params"] ?? null), "hide_controls", [], "any", true, true, false, 40) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["original_params"] ?? null), "hide_controls", [], "any", false, false, false, 40)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["original_params"] ?? null), "hide_controls", [], "any", false, false, false, 40)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 41
            yield "        <div class=\"search-controls d-flex justify-content-between align-items-center\">

            ";
            // line 43
            $context["mainform"] = (((array_key_exists("mainform", $context) &&  !(null === $context["mainform"]))) ? ($context["mainform"]) : (true));
            // line 44
            yield "            ";
            $context["showaction"] = (((array_key_exists("showaction", $context) &&  !(null === $context["showaction"]))) ? ($context["showaction"]) : (true));
            // line 45
            yield "            ";
            if (((($tmp = ($context["mainform"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = ($context["showaction"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 46
                yield "                <form
                    name=\"searchform";
                // line 47
                yield (string) $this->escaper->escape(($context["normalized_itemtype"] ?? null), "html", null, true);
                yield "\"
                    class=\"search-form-container needs-validation\"
                    novalidate
                    method=\"get\"
                    action=\"";
                // line 51
                yield (string) $this->escaper->escape(($context["href"] ?? null), "html", null, true);
                yield "\"
                    ";
                // line 52
                if ( !(($tmp = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("show_search_form")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 53
                    yield "                        ";
                    // line 58
                    yield "                        data-glpi-search-form
                    ";
                }
                // line 60
                yield "                >
            ";
            }
            // line 62
            yield "            ";
            if ( !(($tmp = (((CoreExtension::getAttribute($this->env, $this->source, ($context["original_params"] ?? null), "hide_criteria", [], "any", true, true, false, 62) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["original_params"] ?? null), "hide_criteria", [], "any", false, false, false, 62)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["original_params"] ?? null), "hide_criteria", [], "any", false, false, false, 62)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 63
                yield "                <div class=\"primary-controls\">
                <div class=\"btn-group me-1 me-xl-2\">
                    ";
                // line 65
                $context["is_filter_active"] = false;
                // line 66
                yield "                    ";
                if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["active_search_name"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 67
                    yield "                        ";
                    $context["is_filter_active"] = true;
                    // line 68
                    yield "                    ";
                }
                // line 69
                yield "                    ";
                $context["animation_cls"] = "animate__animated animate__zoomIn";
                // line 70
                yield "
                    ";
                // line 71
                $context["active_savedsearch_class"] = (((($tmp = ($context["active_savedsearch"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("btn-active-search") : (""));
                // line 72
                yield "                    <button type=\"button\" class=\"btn btn-icon btn-sm p-1 ";
                yield (string) $this->escaper->escape(($context["active_savedsearch_class"] ?? null), "html", null, true);
                yield " btn-ghost-secondary show-saved-searches\"
                        data-itemtype=\"";
                // line 73
                yield (string) $this->escaper->escape(($context["itemtype"] ?? null), "html", null, true);
                yield "\"
                        title=\"";
                // line 74
                yield (string) $this->escaper->escape(__("Show saved searches"), "html", null, true);
                yield "\"  data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                        <i class=\"ti ti-bookmarks\" aria-hidden=\"true\"></i>
                    </button>
                    ";
                // line 77
                if ( !(($tmp = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("show_search_form")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 78
                    yield "                        ";
                    $context["active_filter_class"] = (((($tmp = ($context["is_filter_active"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("btn-active-search") : ("btn-ghost-secondary"));
                    // line 79
                    yield "                        <button class=\"btn btn-sm py-1 show-search-filters ";
                    yield (string) $this->escaper->escape(($context["active_filter_class"] ?? null), "html", null, true);
                    yield " btn-ghost-secondary dropdown-toggle\" type=\"button\"
                                data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\"
                                data-testid=\"search-filters-button\">
                            <i class=\"ti ti-list-search\" aria-hidden=\"true\"></i>
                            ";
                    // line 83
                    if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["active_search_name"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 84
                        yield "                                <span class=\"d-none d-xl-inline-block text-truncate\" style=\"max-width: 250px\" title=\"";
                        yield (string) $this->escaper->escape(($context["active_search_name"] ?? null), "html", null, true);
                        yield "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                                    ";
                        // line 85
                        yield (string) $this->escaper->escape(($context["active_search_name"] ?? null), "html", null, true);
                        yield "
                                </span>
                            ";
                    } else {
                        // line 88
                        yield "                                <span class=\"d-none d-xl-inline-block\">";
                        yield (string) $this->escaper->escape(__("Search"), "html", null, true);
                        yield "</span>
                            ";
                    }
                    // line 90
                    yield "                        </button>
                        <div class=\"dropdown-menu dropdown-menu-card ";
                    // line 91
                    yield (string) $this->escaper->escape(($context["animation_cls"] ?? null), "html", null, true);
                    yield "\" style=\"width: max-content; max-width: 100vw;\"
                             data-testid=\"search-filters-panel\">
                            ";
                    // line 93
                    $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Glpi\\Search\\Input\\QueryBuilder::showGenericSearch", [($context["itemtype"] ?? null), ($context["original_params"] ?? null)]);
                    // line 94
                    yield "                        </div>
                    ";
                }
                // line 96
                yield "                </div>

                ";
                // line 98
                if ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "search", [], "array", false, true, false, 98), "as_map", [], "array", true, true, false, 98)) ? (Twig\Extension\CoreExtension::default((($_v0 = (($_v1 = ($context["data"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["search"] ?? null) : null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["as_map"] ?? null) : null), false)) : (false)) != 1)) {
                    // line 99
                    yield "                    ";
                    $context["active_sort_class"] = (((($tmp = ($context["active_sort"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("btn-active-sort") : (""));
                    // line 100
                    yield "                    <button class=\"btn btn-sm py-1 show-search-sorts ";
                    yield (string) $this->escaper->escape(($context["active_sort_class"] ?? null), "html", null, true);
                    yield " btn-ghost-secondary dropdown-toggle me-1 me-xl-2\" type=\"button\"
                                data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\"
                                data-testid=\"search-sorts-button\">
                        <i class=\"ti ti-arrows-sort\" aria-hidden=\"true\"></i>
                        ";
                    // line 104
                    $context["sort_names"] = (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["active_sort_name"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["active_sort_name"] ?? null)) : (__("Sort")));
                    // line 105
                    yield "                        <span class=\"d-none d-xl-inline-block text-truncate\" style=\"max-width: 250px\" title=\"";
                    yield (string) $this->escaper->escape(($context["sort_names"] ?? null), "html", null, true);
                    yield "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                            ";
                    // line 106
                    yield (string) $this->escaper->escape(($context["sort_names"] ?? null), "html", null, true);
                    yield "
                        </span>
                    </button>
                    <div class=\"dropdown-menu dropdown-menu-card ";
                    // line 109
                    yield (string) $this->escaper->escape(($context["animation_cls"] ?? null), "html", null, true);
                    yield "\" style=\"width: max-content; max-width: 100vw;\"
                         data-testid=\"search-sorts-panel\">
                        ";
                    // line 111
                    $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Glpi\\Search\\Input\\QueryBuilder::showGenericSort", [($context["itemtype"] ?? null), ($context["original_params"] ?? null)]);
                    // line 112
                    yield "                    </div>
                ";
                }
                // line 114
                yield "            </div>
            ";
            }
            // line 116
            yield "
            ";
            // line 117
            if (((($tmp = ($context["mainform"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = ($context["showaction"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 118
                yield "                </form>
            ";
            }
            // line 120
            yield "
            <div class=\"middle-controls d-flex\">
                ";
            // line 122
            if ((($tmp = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("method_exists", [($context["itemtype"] ?? null), "showSearchStatusArea"])) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 123
                yield "                    ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call([($context["itemtype"] ?? null), "showSearchStatusArea"]);
                // line 124
                yield "                ";
            }
            // line 125
            yield "
                ";
            // line 126
            if ((($tmp = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("search_pagination_on_top")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 127
                yield "                    ";
                if ((((($_v2 = ($context["data"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["display_type"] ?? null) : null) != Twig\Extension\CoreExtension::constant("Search::GLOBAL_SEARCH")) && ((($_v3 = (($_v4 = ($context["data"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["search"] ?? null) : null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["as_map"] ?? null) : null) == 0))) {
                    // line 128
                    yield "                        <div class=\"search-footer flex-grow-1 mx-1 d-none d-xxl-block mb-n2\" style=\"max-width: 650px;\">
                            ";
                    // line 129
                    yield from $this->load("components/pager.html.twig", 129)->unwrap()->yield(CoreExtension::merge($context, ["short_display" => true]));
                    // line 132
                    yield "                        </div>
                    ";
                }
                // line 134
                yield "                ";
            }
            // line 135
            yield "            </div>

            ";
            // line 137
            $context["submit_search_form"] = "this.closest(\x27[data-glpi-search-container]\x27).querySelector(\x27[data-glpi-search-form]\x27).submit()";
            // line 138
            yield "            <div class=\"secondary-controls\">
                ";
            // line 139
            if ((($tmp = ($context["may_be_located"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 140
                yield "                    <div class=\"btn-group me-1 me-xl-2 shadow-none\" role=\"group\">
                        ";
                // line 141
                $context["table_class"] = ((((($_v5 = (($_v6 = ($context["data"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["search"] ?? null) : null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["as_map"] ?? null) : null) == 0)) ? ("btn-ghost-info") : (""));
                // line 142
                yield "                        <input
                            type=\"radio\"
                            class=\"btn-check\"
                            name=\"as_map\"
                            value=\"1\"
                            autocomplete=\"off\"
                            id=\"show_as_table\"
                            onclick=\"toogle(\x27as_map\x27,\x27\x27,\x27\x27,\x27\x27); ";
                // line 149
                yield (string) $this->escaper->escape(($context["submit_search_form"] ?? null), "html", null, true);
                yield ";\"
                            ";
                // line 150
                yield (string) ((((($_v7 = (($_v8 = ($context["data"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["search"] ?? null) : null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["as_map"] ?? null) : null) == 0)) ? ("checked") : (""));
                yield "
                        >
                            <label class=\"btn btn-icon btn-sm btn-pill px-2 py-1 ";
                // line 152
                yield (string) $this->escaper->escape(($context["table_class"] ?? null), "html", null, true);
                yield "\" title=\"";
                yield (string) $this->escaper->escape(__("Show as table"), "html", null, true);
                yield "\"
                                for=\"show_as_table\"
                                data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                                <i class=\"ti ti-table\" aria-hidden=\"true\"></i>
                                <span class=\"visually-hidden\">";
                // line 156
                yield (string) $this->escaper->escape(__("Show as table"), "html", null, true);
                yield "</span>
                            </label >

                        ";
                // line 159
                $context["located_class"] = ((((($_v9 = (($_v10 = ($context["data"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["search"] ?? null) : null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["as_map"] ?? null) : null) == 1)) ? ("btn-ghost-info") : (""));
                // line 160
                yield "                        <input
                            type=\"radio\"
                            class=\"btn-check\"
                            name=\"as_map\"
                            value=\"1\"
                            autocomplete=\"off\"
                            id=\"show_as_map\"
                            onclick=\"toogle(\x27as_map\x27,\x27\x27,\x27\x27,\x27\x27); ";
                // line 167
                yield (string) $this->escaper->escape(($context["submit_search_form"] ?? null), "html", null, true);
                yield ";\"
                            ";
                // line 168
                yield (string) ((((($_v11 = (($_v12 = ($context["data"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["search"] ?? null) : null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["as_map"] ?? null) : null) == 1)) ? ("checked") : (""));
                yield "
                        >
                        <label class=\"btn btn-icon btn-sm btn-pill px-2 py-1 ";
                // line 170
                yield (string) $this->escaper->escape(($context["located_class"] ?? null), "html", null, true);
                yield "\" title=\"";
                yield (string) $this->escaper->escape(__("Show as map"), "html", null, true);
                yield "\"
                            for=\"show_as_map\"
                            data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                            <i class=\"ti ti-map-2\" aria-hidden=\"true\"></i>
                            <span class=\"visually-hidden\">";
                // line 174
                yield (string) $this->escaper->escape(__("Show as map"), "html", null, true);
                yield "</span>
                        </label >
                    </div>
                ";
            }
            // line 178
            yield "
                ";
            // line 179
            if ((($tmp = ($context["may_be_browsed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 180
                yield "                    <button
                        class=\"btn btn-icon btn-sm ";
                // line 181
                yield (string) (((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "search", [], "array", false, true, false, 181), "browse", [], "array", true, true, false, 181)) ? (Twig\Extension\CoreExtension::default((($_v13 = (($_v14 = ($context["data"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["search"] ?? null) : null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["browse"] ?? null) : null), false)) : (false)) == 1)) ? ("btn-secondary") : ("btn-ghost-secondary"));
                yield " me-1 me-xl-2 px-1\"
                        type=\"button\"
                        title=\"";
                // line 183
                yield (string) $this->escaper->escape(__("Toggle browse"), "html", null, true);
                yield "\"
                        data-bs-toggle=\"tooltip\"
                        data-bs-placement=\"top\"
                        aria-pressed=\"";
                // line 186
                yield (string) (((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "search", [], "array", false, true, false, 186), "browse", [], "array", true, true, false, 186)) ? (Twig\Extension\CoreExtension::default((($_v15 = (($_v16 = ($context["data"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16["search"] ?? null) : null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["browse"] ?? null) : null), false)) : (false)) == 1)) ? ("true") : ("false"));
                yield "\"
                        onclick=\"toogle(\x27browse\x27,\x27\x27,\x27\x27,\x27\x27); ";
                // line 187
                yield (string) $this->escaper->escape(($context["submit_search_form"] ?? null), "html", null, true);
                yield ";\"
                    >
                        <i class=\"ti ";
                // line 189
                yield (string) (((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "search", [], "array", false, true, false, 189), "browse", [], "array", true, true, false, 189)) ? (Twig\Extension\CoreExtension::default((($_v17 = (($_v18 = ($context["data"] ?? null)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18["search"] ?? null) : null)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17["browse"] ?? null) : null), false)) : (false)) == 1)) ? ("ti-checkbox") : ("ti-square"));
                yield "\" aria-hidden=\"true\"></i>
                        <span class=\"d-flex align-bottom\">
                            <i class=\"ti ti-subtask\" aria-hidden=\"true\"></i>
                        </span>
                    </button>
                ";
            }
            // line 195
            yield "
                ";
            // line 196
            if ((($tmp = ($context["may_be_deleted"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 197
                yield "                    <button
                        class=\"btn btn-icon btn-sm ";
                // line 198
                yield (string) ((((($_v19 = (($_v20 = ($context["data"] ?? null)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20["search"] ?? null) : null)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19["is_deleted"] ?? null) : null) == 1)) ? ("btn-danger") : ("btn-ghost-danger"));
                yield " me-1 me-xl-2 px-1\"
                        type=\"button\"
                        title=\"";
                // line 200
                yield (string) $this->escaper->escape(__("Show the trashbin"), "html", null, true);
                yield "\"
                        data-bs-toggle=\"tooltip\"
                        data-bs-placement=\"top\"
                        aria-pressed=\"";
                // line 203
                yield (string) ((((($_v21 = (($_v22 = ($context["data"] ?? null)) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22["search"] ?? null) : null)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21["is_deleted"] ?? null) : null) == 1)) ? ("true") : ("false"));
                yield "\"
                        onclick=\"toogle(\x27is_deleted\x27,\x27\x27,\x27\x27,\x27\x27); ";
                // line 204
                yield (string) $this->escaper->escape(($context["submit_search_form"] ?? null), "html", null, true);
                yield ";\"
                    >
                        <i class=\"ti ";
                // line 206
                yield (string) ((((($_v23 = (($_v24 = ($context["data"] ?? null)) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24["search"] ?? null) : null)) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23["is_deleted"] ?? null) : null) == 1)) ? ("ti-checkbox") : ("ti-square"));
                yield "\" aria-hidden=\"true\"></i>
                        <span class=\"d-flex align-bottom\">
                            <i class=\"ti ti-trash\" aria-hidden=\"true\"></i>
                        </span>
                    </button>
                ";
            }
            // line 212
            yield "
                ";
            // line 213
            if ((($tmp = ($context["may_be_unpublished"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 214
                yield "                    ";
                $context["show_unpublished"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "search", [], "array", false, true, false, 214), "unpublished", [], "array", true, true, false, 214)) ? (Twig\Extension\CoreExtension::default((($_v25 = (($_v26 = ($context["data"] ?? null)) && is_array($_v26) || $_v26 instanceof ArrayAccess ? ($_v26["search"] ?? null) : null)) && is_array($_v25) || $_v25 instanceof ArrayAccess ? ($_v25["unpublished"] ?? null) : null), false)) : (false)) == 1);
                // line 215
                yield "                    <button
                        class=\"btn btn-icon btn-sm ";
                // line 216
                yield (string) (((($tmp = ($context["show_unpublished"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("btn-warning") : ("btn-ghost-warning"));
                yield " me-1 me-xl-2 px-1\"
                        type=\"button\"
                        title=\"";
                // line 218
                yield (string) $this->escaper->escape(__("Show unpublished"), "html", null, true);
                yield "\"
                        data-bs-toggle=\"tooltip\"
                        data-bs-placement=\"top\"
                        aria-pressed=\"";
                // line 221
                yield (string) (((($tmp = ($context["show_unpublished"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
                yield "\"
                        onclick=\"toogle(\x27unpublished\x27,\x27\x27,\x27\x27,\x27\x27); ";
                // line 222
                yield (string) $this->escaper->escape(($context["submit_search_form"] ?? null), "html", null, true);
                yield ";\"
                    >
                        <i
                            class=\"ti ";
                // line 225
                yield (string) (((($tmp = ($context["show_unpublished"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ti-checkbox") : ("ti-square"));
                yield "\"
                            data-testid=\"unpublished-";
                // line 226
                yield (string) (((($tmp = ($context["show_unpublished"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("on") : ("off"));
                yield "\" aria-hidden=\"true\"
                        ></i>
                        <span class=\"d-flex align-bottom\">
                            <i class=\"ti ti-eye-off\" aria-hidden=\"true\"></i>
                        </span>
                    </button>
                ";
            }
            // line 233
            yield "

                ";
            // line 235
            if ((($tmp = ($context["can_config"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 236
                yield "                    <button class=\"show_displaypreference_modal  btn btn-sm btn-ghost-secondary\"
                        type=\"button\"
                        title=\"";
                // line 238
                yield (string) $this->escaper->escape(__("Select default items to show"), "html", null, true);
                yield "\"
                        data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                        <i class=\"ti ti-table-row\" aria-hidden=\"true\"></i>
                    </button>
                    <template id=\"displaypreference_modal_template";
                // line 242
                yield (string) $this->escaper->escape(($context["rand"] ?? null), "html", null, true);
                yield "\">
                        ";
                // line 243
                yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/search/displaypreference_modal.html.twig", ["rand" =>                 // line 244
($context["rand"] ?? null), "itemtype" =>                 // line 245
($context["itemtype"] ?? null)]);
                // line 246
                yield "
                    </template>
                ";
            }
            // line 249
            yield "
                ";
            // line 250
            if ( !(($tmp = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("show_search_form")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 251
                yield "                    <button type=\"button\" class=\"btn btn-icon btn-sm p-1 btn-ghost-secondary refresh-search\"
                        title=\"";
                // line 252
                yield (string) $this->escaper->escape(__("Refresh"), "html", null, true);
                yield "\"  data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" data-bs-trigger=\"hover\">
                        <i class=\"ti ti-refresh\" aria-hidden=\"true\"></i>
                    </button>
                ";
            }
            // line 256
            yield "
                ";
            // line 257
            if ((($context["count"] ?? null) > 0)) {
                // line 258
                yield "                    <button class=\"dropdown-toggle btn btn-sm btn-ghost-secondary\" type=\"button\" name=\"export\" id=\"dropdown-export-";
                yield (string) $this->escaper->escape(($context["rand"] ?? null), "html", null, true);
                yield "\"
                            data-bs-toggle=\"dropdown\" aria-expanded=\"false\" data-bs-popper-config=\x27{\"strategy\":\"fixed\"}\x27>
                        <span title=\"";
                // line 260
                yield (string) $this->escaper->escape(__("Export"), "html", null, true);
                yield "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                            <i id=\"export_dropdown_icon\" class=\"ti ti-download\" aria-hidden=\"true\"></i>
                        </span>
                    </button>
                    ";
                // line 264
                $context["exporthref"] = (((($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/front/report.dynamic.php") . "?") . Twig\Extension\CoreExtension::urlencode(["item_type" =>                 // line 265
($context["itemtype"] ?? null), "sort" =>                 // line 266
($context["sort"] ?? null), "order" =>                 // line 267
($context["order"] ?? null), "start" =>                 // line 268
($context["start"] ?? null)])) . "&") .                 // line 269
($context["posthref"] ?? null));
                // line 270
                yield "                    <div class=\"dropdown-menu\" style=\"z-index: 10001\" aria-labelledby=\"dropdown-export-";
                yield (string) $this->escaper->escape(($context["rand"] ?? null), "html", null, true);
                yield "\" role=\"menu\">
                        <div role=\"separator\"><h6 class=\"dropdown-header\">";
                // line 271
                yield (string) $this->escaper->escape(__("Current page"), "html", null, true);
                yield "</h6></div>
                        <a class=\"dropdown-item\" href=\"";
                // line 272
                yield (string) $this->escaper->escape(((($context["exporthref"] ?? null) . "&display_type=") . Twig\Extension\CoreExtension::constant("Search::PDF_OUTPUT_LANDSCAPE")), "html", null, true);
                yield "\" role=\"menuitem\">
                            <i class=\"ti ti-file-type-pdf\" aria-hidden=\"true\"></i>";
                // line 274
                yield (string) $this->escaper->escape(__("Landscape PDF"), "html", null, true);
                // line 275
                yield "</a>
                        <a class=\"dropdown-item\" href=\"";
                // line 276
                yield (string) $this->escaper->escape(((($context["exporthref"] ?? null) . "&display_type=") . Twig\Extension\CoreExtension::constant("Search::PDF_OUTPUT_PORTRAIT")), "html", null, true);
                yield "\" role=\"menuitem\">
                            <i class=\"ti ti-file-type-pdf\" aria-hidden=\"true\"></i>
                            ";
                // line 278
                yield (string) $this->escaper->escape(__("Portrait PDF"), "html", null, true);
                yield "
                        </a>
                        <a class=\"dropdown-item\" href=\"";
                // line 280
                yield (string) $this->escaper->escape(((($context["exporthref"] ?? null) . "&display_type=") . Twig\Extension\CoreExtension::constant("Search::CSV_OUTPUT")), "html", null, true);
                yield "\" role=\"menuitem\">
                            <i class=\"ti ti-file-type-csv\" aria-hidden=\"true\"></i>
                            ";
                // line 282
                yield (string) $this->escaper->escape(__("CSV"), "html", null, true);
                yield "
                        </a>
                        <a class=\"dropdown-item\" href=\"";
                // line 284
                yield (string) $this->escaper->escape(((($context["exporthref"] ?? null) . "&display_type=") . Twig\Extension\CoreExtension::constant("Search::ODS_OUTPUT")), "html", null, true);
                yield "\" role=\"menuitem\">
                            <i class=\"ti ti-file-spreadsheet\" aria-hidden=\"true\"></i>
                            ";
                // line 286
                yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::sprintf(__("Spreadsheet (%s)"), "ODS"), "html", null, true);
                yield "
                        </a>
                        <a class=\"dropdown-item\" href=\"";
                // line 288
                yield (string) $this->escaper->escape(((($context["exporthref"] ?? null) . "&display_type=") . Twig\Extension\CoreExtension::constant("Search::XLSX_OUTPUT")), "html", null, true);
                yield "\" role=\"menuitem\">
                            <i class=\"ti ti-file-spreadsheet\" aria-hidden=\"true\"></i>
                            ";
                // line 290
                yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::sprintf(__("Spreadsheet (%s)"), "XLSX"), "html", null, true);
                yield "
                        </a>
                        <hr class=\"dropdown-divider\">
                        <div role=\"separator\"><h6 class=\"dropdown-header\">";
                // line 293
                yield (string) $this->escaper->escape(__("All pages"), "html", null, true);
                yield "</h6></div>
                        <a class=\"dropdown-item\" href=\"";
                // line 294
                yield (string) $this->escaper->escape(((($context["exporthref"] ?? null) . "&display_type=-") . Twig\Extension\CoreExtension::constant("Search::PDF_OUTPUT_LANDSCAPE")), "html", null, true);
                yield "\" role=\"menuitem\">
                            <i class=\"ti ti-file-type-pdf\" aria-hidden=\"true\"></i>
                            ";
                // line 296
                yield (string) $this->escaper->escape(__("Landscape PDF"), "html", null, true);
                yield "
                        </a>
                        <a class=\"dropdown-item\" href=\"";
                // line 298
                yield (string) $this->escaper->escape(((($context["exporthref"] ?? null) . "&display_type=-") . Twig\Extension\CoreExtension::constant("Search::PDF_OUTPUT_PORTRAIT")), "html", null, true);
                yield "\" role=\"menuitem\">
                            <i class=\"ti ti-file-type-pdf\" aria-hidden=\"true\"></i>
                            ";
                // line 300
                yield (string) $this->escaper->escape(__("Portrait PDF"), "html", null, true);
                yield "
                        </a>
                        <a class=\"dropdown-item\" href=\"";
                // line 302
                yield (string) $this->escaper->escape(((($context["exporthref"] ?? null) . "&display_type=-") . Twig\Extension\CoreExtension::constant("Search::CSV_OUTPUT")), "html", null, true);
                yield "\" role=\"menuitem\">
                            <i class=\"ti ti-file-type-csv\" aria-hidden=\"true\"></i>
                            ";
                // line 304
                yield (string) $this->escaper->escape(__("CSV"), "html", null, true);
                yield "
                        </a>
                        <a class=\"dropdown-item\" href=\"";
                // line 306
                yield (string) $this->escaper->escape(((($context["exporthref"] ?? null) . "&display_type=-") . Twig\Extension\CoreExtension::constant("Search::ODS_OUTPUT")), "html", null, true);
                yield "\" role=\"menuitem\">
                            <i class=\"ti ti-file-spreadsheet\" aria-hidden=\"true\"></i>
                            ";
                // line 308
                yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::sprintf(__("Spreadsheet (%s)"), "ODS"), "html", null, true);
                yield "
                        </a>
                        <a class=\"dropdown-item\" href=\"";
                // line 310
                yield (string) $this->escaper->escape(((($context["exporthref"] ?? null) . "&display_type=-") . Twig\Extension\CoreExtension::constant("Search::XLSX_OUTPUT")), "html", null, true);
                yield "\" role=\"menuitem\">
                            <i class=\"ti ti-file-spreadsheet\" aria-hidden=\"true\"></i>
                            ";
                // line 312
                yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::sprintf(__("Spreadsheet (%s)"), "XLSX"), "html", null, true);
                yield "
                        </a>
                        ";
                // line 314
                if ((($context["itemtype"] ?? null) != "Stat")) {
                    // line 315
                    yield "                        <hr class=\"dropdown-divider\">
                        <a class=\"dropdown-item\" href=\"";
                    // line 316
                    yield (string) $this->escaper->escape(((($context["exporthref"] ?? null) . "&display_type=-") . Twig\Extension\CoreExtension::constant("Search::NAMES_OUTPUT")), "html", null, true);
                    yield "\"
                           id=\"copy_names_to_clipboard\" role=\"menuitem\">
                            <i class=\"ti ti-copy\" aria-hidden=\"true\"></i>
                            ";
                    // line 319
                    yield (string) $this->escaper->escape(__("Copy names to clipboard"), "html", null, true);
                    yield "
                        </a>
                        ";
                }
                // line 322
                yield "                    </div>
                    <script>
                        // Ugly trick to fix z-index context issue by placing our dropdown at the end of the body
                        \$(\"#dropdown-export-";
                // line 325
                yield (string) $this->escaper->escape(($context["rand"] ?? null), "html", null, true);
                yield "\").on(\"show.bs.dropdown\", function() {
                            \$(document.body).append(\$(\"ul[aria-labelledby=dropdown-export-";
                // line 326
                yield (string) $this->escaper->escape(($context["rand"] ?? null), "html", null, true);
                yield "]\").detach());
                        });
                    </script>
                ";
            }
            // line 330
            yield "            </div>
        </div>
    ";
        }
        // line 333
        yield "</div>

<script type=\"text/javascript\">
\$(document).ready(function() {
   const refreshSearchResults = function() {
      const search_display = \$(\x27.ajax-container.search-display-data\x27);
      try {
         if (search_display.length === 1 && search_display.data(\x27js_class\x27) !== undefined) {
            search_display.data(\x27js_class\x27).view.refreshResults();
         } else {
            window.location.reload();
         }
      } catch (err) {
         window.location.reload();
      }
   };

   \$(\x27.show_displaypreference_modal\x27).click(function(e) {
      e.preventDefault();

      // remove old modal
      \$(\x27#displayprefence_modal";
        // line 354
        yield (string) $this->escaper->escape(($context["rand"] ?? null), "html", null, true);
        yield "\x27).remove();

      // create new one
      \$(\x27body\x27).append(\$(\x27#displaypreference_modal_template";
        // line 357
        yield (string) $this->escaper->escape(($context["rand"] ?? null), "html", null, true);
        yield "\x27).html());
      const modal_el = \$(\x27#displaypreference_modal";
        // line 358
        yield (string) $this->escaper->escape(($context["rand"] ?? null), "html", null, true);
        yield "\x27);
      modal_el.modal(\x27show\x27);
   });

   \$(\"body\").on(\x27hide.bs.modal\x27, \x27#displaypreference_modal";
        // line 362
        yield (string) $this->escaper->escape(($context["rand"] ?? null), "html", null, true);
        yield "\x27, function() {
      refreshSearchResults();
   });

   \$(\x27.default-filter\x27).change(function(event) {
      const search_params = new URLSearchParams(window.location.search);
      if (!\$(this).is(\":checked\")) {
          search_params.set(\x27nodefault\x27, \x271\x27);
      } else {
          search_params.delete(\x27nodefault\x27);
      }
      window.location.replace(\x27?\x27 + search_params.toString());
   });

   \$(\x27.refresh-search\x27).on(\x27click\x27, function(e) {
      e.preventDefault();
      const tooltip = bootstrap.Tooltip.getInstance(\$(this)[0]);
      if (tooltip !== null) {
         tooltip.hide();
      }
      refreshSearchResults();
   });

   // Callbacks for copy success/failure
   function copy_success() {
      glpi_toast_info(__(\x27Results copied to clipboard\x27));
      \$(\x27#export_dropdown_icon\x27).removeClass(\x27spinner-border spinner-border-sm\x27);
      \$(\x27#export_dropdown_icon\x27).addClass(\x27ti-file-download\x27);
   }
   function copy_error() {
      glpi_toast_error(__(\x27Unexpected error\x27));
      \$(\x27#export_dropdown_icon\x27).removeClass(\x27spinner-border spinner-border-sm\x27);
      \$(\x27#export_dropdown_icon\x27).addClass(\x27ti-file-download\x27);
   }

   \$(\x27#copy_names_to_clipboard\x27).click(function(e) {
      // Get target link
      const link = \$(e.currentTarget).prop(\x27href\x27);

      // Show loading indicator
      \$(\x27#export_dropdown_icon\x27).removeClass(\x27ti-file-download\x27);
      \$(\x27#export_dropdown_icon\x27).addClass(\x27spinner-border spinner-border-sm\x27);

      // Prevent link from working
      e.preventDefault();

      // Get data using ajax
      \$.get(link, function (data) {
         navigator.clipboard.writeText(data).then(copy_success, copy_error);
      }).fail(copy_error);
   });

    // show massive actions control when at least one checkbox is checked
    const update_massiveactions_control = function() {
        const nb_ma_checked = \$(\x27.massive_action_checkbox:checked\x27).length;

        if (nb_ma_checked === 0) {
            \$(\x27.massiveactions-control\x27)
                .removeClass(\x27animate__slideInLeft\x27)
                .addClass(\x27animate__slideOutLeft\x27)
        } else {
            \$(\x27.massiveactions-control\x27)
                .removeClass(\x27d-none\x27)
                .removeClass(\x27animate__slideOutLeft\x27)
                .addClass(\x27animate__slideInLeft\x27);
        }
    };
    \$(\x27.massive_action_checkbox\x27).on(\x27change\x27, update_massiveactions_control);

    // Ensure the actions button visibility is in sync with the checkbox state.
    // Browsers may restore the checked state of form controls on back/forward
    // navigation (bfcache) without firing any standard event, so we also handle
    // the `pageshow` event (which is fired on both regular loads and bfcache
    // restorations) to refresh the control state. A single call is enough, no
    // need to trigger the change event for every single checkbox.
    \$(window).on(\x27pageshow\x27, update_massiveactions_control);
    update_massiveactions_control();
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
        return "components/search/controls.html.twig";
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
        return array (  744 => 362,  737 => 358,  733 => 357,  727 => 354,  704 => 333,  699 => 330,  692 => 326,  688 => 325,  683 => 322,  677 => 319,  671 => 316,  668 => 315,  666 => 314,  661 => 312,  656 => 310,  651 => 308,  646 => 306,  641 => 304,  636 => 302,  631 => 300,  626 => 298,  621 => 296,  616 => 294,  612 => 293,  606 => 290,  601 => 288,  596 => 286,  591 => 284,  586 => 282,  581 => 280,  576 => 278,  571 => 276,  568 => 275,  566 => 274,  562 => 272,  558 => 271,  553 => 270,  551 => 269,  550 => 268,  549 => 267,  548 => 266,  547 => 265,  546 => 264,  539 => 260,  533 => 258,  531 => 257,  528 => 256,  521 => 252,  518 => 251,  516 => 250,  513 => 249,  508 => 246,  506 => 245,  505 => 244,  504 => 243,  500 => 242,  493 => 238,  489 => 236,  487 => 235,  483 => 233,  473 => 226,  469 => 225,  463 => 222,  459 => 221,  453 => 218,  448 => 216,  445 => 215,  442 => 214,  440 => 213,  437 => 212,  428 => 206,  423 => 204,  419 => 203,  413 => 200,  408 => 198,  405 => 197,  403 => 196,  400 => 195,  391 => 189,  386 => 187,  382 => 186,  376 => 183,  371 => 181,  368 => 180,  366 => 179,  363 => 178,  356 => 174,  347 => 170,  342 => 168,  338 => 167,  329 => 160,  327 => 159,  321 => 156,  312 => 152,  307 => 150,  303 => 149,  294 => 142,  292 => 141,  289 => 140,  287 => 139,  284 => 138,  282 => 137,  278 => 135,  275 => 134,  271 => 132,  269 => 129,  266 => 128,  263 => 127,  261 => 126,  258 => 125,  255 => 124,  252 => 123,  250 => 122,  246 => 120,  242 => 118,  240 => 117,  237 => 116,  233 => 114,  229 => 112,  227 => 111,  222 => 109,  216 => 106,  211 => 105,  209 => 104,  201 => 100,  198 => 99,  196 => 98,  192 => 96,  188 => 94,  186 => 93,  181 => 91,  178 => 90,  172 => 88,  166 => 85,  161 => 84,  159 => 83,  151 => 79,  148 => 78,  146 => 77,  140 => 74,  136 => 73,  131 => 72,  129 => 71,  126 => 70,  123 => 69,  120 => 68,  117 => 67,  114 => 66,  112 => 65,  108 => 63,  105 => 62,  101 => 60,  97 => 58,  95 => 53,  93 => 52,  89 => 51,  82 => 47,  79 => 46,  76 => 45,  73 => 44,  71 => 43,  67 => 41,  65 => 40,  61 => 38,  57 => 36,  55 => 35,  52 => 34,  50 => 33,  47 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/search/controls.html.twig", "/var/www/html/glpi/templates/components/search/controls.html.twig");
    }
}
