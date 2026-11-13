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

/* components/pager.html.twig */
class __TwigTemplate_f3c92f5293e5de52e7655c89ce5bf090 extends Template
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
        if ( !array_key_exists("additional_params", $context)) {
            // line 34
            yield "    ";
            $context["additional_params"] = "";
        } else {
            // line 36
            yield "    ";
            if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["additional_params"] ?? null)) > 0) &&  !(is_string($_v0 = ($context["additional_params"] ?? null)) && is_string($_v1 = "&") && str_starts_with($_v0, $_v1)))) {
                // line 37
                yield "        ";
                $context["additional_params"] = ("&" . ($context["additional_params"] ?? null));
                // line 38
                yield "    ";
            }
        }
        // line 40
        yield "
";
        // line 41
        $context["href"] = ((array_key_exists("href", $context)) ? (Twig\Extension\CoreExtension::default(($context["href"] ?? null), "")) : (""));
        // line 42
        yield "
";
        // line 44
        $context["start"] = ((array_key_exists("start", $context)) ? (Twig\Extension\CoreExtension::default(($context["start"] ?? null), 0)) : (0));
        // line 45
        yield "
";
        // line 46
        $context["href_separator"] = ((CoreExtension::inFilter("?", ($context["href"] ?? null))) ? ("&") : ("?"));
        // line 47
        $context["href"] = (((($context["href"] ?? null) . ($context["href_separator"] ?? null)) . "start=%start%") . ($context["additional_params"] ?? null));
        // line 48
        if ((array_key_exists("is_tab", $context) && (($context["is_tab"] ?? null) == true))) {
            // line 49
            yield "   ";
            $context["href"] = (("javascript:reloadTab(\x27start=%start%" . $this->escaper->escape(($context["additional_params"] ?? null), "js")) . "\x27);");
        }
        // line 51
        if ( !array_key_exists("limit", $context)) {
            // line 52
            yield "    ";
            $context["limit"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("list_limit");
        }
        // line 54
        yield "
";
        // line 55
        $context["forward"] = (($context["start"] ?? null) + ($context["limit"] ?? null));
        // line 56
        $context["end"] = (($context["count"] ?? null) - ($context["limit"] ?? null));
        // line 57
        $context["current_start"] = (($context["start"] ?? null) + 1);
        // line 58
        $context["current_end"] = ((($context["current_start"] ?? null) + ($context["limit"] ?? null)) - 1);
        // line 59
        if ((($context["current_end"] ?? null) > ($context["count"] ?? null))) {
            // line 60
            yield "    ";
            $context["current_end"] = ($context["count"] ?? null);
        }
        // line 62
        yield "
";
        // line 63
        $context["back"] = (($context["start"] ?? null) - ($context["limit"] ?? null));
        // line 64
        if (((($context["current_start"] ?? null) - ($context["limit"] ?? null)) <= 0)) {
            // line 65
            yield "   ";
            $context["back"] = 0;
        }
        // line 67
        yield "
";
        // line 68
        $context["nb_pages"] = Twig\Extension\CoreExtension::round((($context["count"] ?? null) / ($context["limit"] ?? null)), 0, "ceil");
        // line 69
        $context["current_page"] = (Twig\Extension\CoreExtension::round(((($context["current_start"] ?? null) - 1) / ($context["limit"] ?? null)), 0, "ceil") + 1);
        // line 70
        yield "
";
        // line 71
        $context["short_display"] = ((array_key_exists("short_display", $context)) ? (Twig\Extension\CoreExtension::default(($context["short_display"] ?? null), false)) : (false));
        // line 72
        $context["no_limit_display"] = ((array_key_exists("no_limit_display", $context)) ? (Twig\Extension\CoreExtension::default(($context["no_limit_display"] ?? null), false)) : (false));
        // line 73
        yield "
";
        // line 75
        $context["adjacents"] = 2;
        // line 76
        $context["skip_adjacents"] = false;
        // line 77
        $context["rand"] = ((array_key_exists("rand", $context)) ? (Twig\Extension\CoreExtension::default(($context["rand"] ?? null), Twig\Extension\CoreExtension::random($this->env->getCharset()))) : (Twig\Extension\CoreExtension::random($this->env->getCharset())));
        // line 78
        yield "
<div class=\"flex-grow-1 d-flex flex-wrap flex-md-nowrap  align-items-center justify-content-between mb-2 search-pager\">
    ";
        // line 80
        if ( !(($tmp = ($context["no_limit_display"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 81
            yield "        ";
            if ( !(($tmp = ($context["short_display"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 82
                yield "            <span class=\"search-limit d-none d-md-block\">
                ";
                // line 83
                yield from $this->load("components/dropdown/limit.html.twig", 83)->unwrap()->yield(CoreExtension::merge($context, ["no_onchange" => ((                // line 84
array_key_exists("fluid_search", $context)) ? (Twig\Extension\CoreExtension::default(($context["fluid_search"] ?? null), false)) : (false)), "select_class" => "search-limit-dropdown", "href" => Twig\Extension\CoreExtension::replace(                // line 86
($context["href"] ?? null), ["%start%" => ($context["start"] ?? null)]), "additional_attributes" => (((($tmp =                 // line 87
($context["short_display"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (["title" => __("Rows per page")]) : (["aria-labelledby" => (("list_limit" .                 // line 90
($context["rand"] ?? null)) . "_label")])), "rand" =>                 // line 92
($context["rand"] ?? null)]));
                // line 94
                yield "                <span id=\"list_limit";
                yield (string) $this->escaper->escape(($context["rand"] ?? null), "html", null, true);
                yield "_label\">";
                yield (string) $this->escaper->escape(__("rows / page"), "html", null, true);
                yield "</span>
            </span>
        ";
            }
            // line 97
            yield "        <span class=\"search-limit ";
            yield (string) (((($tmp = ($context["short_display"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("d-block d-md-none"));
            yield "\">
            ";
            // line 98
            yield from $this->load("components/dropdown/limit.html.twig", 98)->unwrap()->yield(CoreExtension::merge($context, ["no_onchange" => ((            // line 99
array_key_exists("fluid_search", $context)) ? (Twig\Extension\CoreExtension::default(($context["fluid_search"] ?? null), false)) : (false)), "select_class" => "search-limit-dropdown", "href" => Twig\Extension\CoreExtension::replace(            // line 101
($context["href"] ?? null), ["%start%" => ($context["start"] ?? null)]), "rand" => (            // line 102
($context["rand"] ?? null) . "_short_display")]));
            // line 104
            yield "        </span>
    ";
        }
        // line 106
        yield "
    ";
        // line 107
        if ( !(($tmp = ($context["short_display"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 108
            yield "        <p class=\"m-0 text-muted d-none d-md-block page-infos\">
            ";
            // line 109
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::sprintf(__("Showing %s to %s of %s rows"), ($context["current_start"] ?? null), ($context["current_end"] ?? null), ($context["count"] ?? null)), "html", null, true);
            yield "
        </p>

        <p class=\"m-0 text-muted d-block d-md-none text-nowrap ms-2 page-infos\">
            ";
            // line 113
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::sprintf(__("%s-%s/%s"), ($context["current_start"] ?? null), ($context["current_end"] ?? null), ($context["count"] ?? null)), "html", null, true);
            yield "
        </p>
    ";
        }
        // line 116
        yield "
    ";
        // line 117
        if (((($tmp = ($context["short_display"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($context["nb_pages"] ?? null) <= 1))) {
            // line 118
            yield "        <span class=\"text-muted mx-2 my-0 page-infos\">
            ";
            // line 119
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::sprintf(__("%s-%s of %s"), ($context["current_start"] ?? null), ($context["current_end"] ?? null), ($context["count"] ?? null)), "html", null, true);
            yield "
        </span>
    ";
        }
        // line 122
        yield "
    <ul class=\"pagination m-0 mt-sm-2 mt-md-0 align-items-center ";
        // line 123
        yield (string) (((($tmp = ($context["short_display"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("mx-2") : (""));
        yield "\">
        ";
        // line 124
        if ((($context["nb_pages"] ?? null) > 1)) {
            // line 125
            yield "            ";
            $context["is_first_page"] = (($context["start"] ?? null) == 0);
            // line 126
            yield "            ";
            $context["is_last_page"] = (($context["forward"] ?? null) >= ($context["count"] ?? null));
            // line 127
            yield "
            <li class=\"page-item ";
            // line 128
            if ((($tmp = ($context["is_first_page"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "disabled";
            }
            yield "\">
                <a class=\"page-link d-flex page-link-start\" href=\"";
            // line 129
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::replace(($context["href"] ?? null), ["%start%" => 0]), "html", null, true);
            yield "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"";
            yield (string) $this->escaper->escape(__("Start"), "html", null, true);
            yield "\" data-start=\"0\" ";
            if ((($tmp = ($context["is_first_page"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "aria-disabled=\"true\"";
            }
            yield ">
                    <i class=\"ti ti-chevrons-left\" aria-hidden=\"true\"></i>
                </a>
            </li>
            <li class=\"page-item ";
            // line 133
            if ((($tmp = ($context["is_first_page"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "disabled";
            }
            yield "\">
                <a class=\"page-link d-flex page-link-prev\" href=\"";
            // line 134
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::replace(($context["href"] ?? null), ["%start%" => ($context["back"] ?? null)]), "html", null, true);
            yield "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"";
            yield (string) $this->escaper->escape(__("Previous"), "html", null, true);
            yield "\" data-start=\"";
            yield (string) $this->escaper->escape(($context["back"] ?? null), "html", null, true);
            yield "\" ";
            if ((($tmp = ($context["is_first_page"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "aria-disabled=\"true\"";
            }
            yield ">
                    <i class=\"ti ti-chevron-left\" aria-hidden=\"true\"></i>
                </a>
            </li>


            ";
            // line 140
            if ((($tmp = ($context["short_display"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 141
                yield "                <li class=\"text-muted mx-2 my-0\">
                    <span class=\"page-link\">
                        ";
                // line 143
                yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::sprintf(__("%s-%s of %s"), ($context["current_start"] ?? null), ($context["current_end"] ?? null), ($context["count"] ?? null)), "html", null, true);
                yield "
                    </span>
                </li>
            ";
            } else {
                // line 147
                yield "                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, ($context["nb_pages"] ?? null)));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 148
                    yield "                    ";
                    if ((((($context["current_page"] ?? null) - ($context["adjacents"] ?? null)) <= $context["page"]) && ((($context["current_page"] ?? null) + ($context["adjacents"] ?? null)) >= $context["page"]))) {
                        // line 149
                        yield "                        ";
                        $context["page_start"] = (($context["page"] - 1) * ($context["limit"] ?? null));
                        // line 150
                        yield "                        <li class=\"d-none d-sm-block page-item ";
                        if (($context["page"] == ($context["current_page"] ?? null))) {
                            yield "active selected";
                        }
                        yield "\">
                            <a class=\"page-link page-link-num\" href=\"";
                        // line 151
                        yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::replace(($context["href"] ?? null), ["%start%" => ($context["page_start"] ?? null)]), "html", null, true);
                        yield "\" data-start=\"";
                        yield (string) $this->escaper->escape(($context["page_start"] ?? null), "html", null, true);
                        yield "\">";
                        yield (string) $this->escaper->escape($context["page"], "html", null, true);
                        yield "</a>
                        </li>
                        ";
                        // line 153
                        if (((($context["current_page"] ?? null) + ($context["adjacents"] ?? null)) == $context["page"])) {
                            // line 154
                            yield "                        ";
                            $context["skip_adjacents"] = false;
                            // line 155
                            yield "                        ";
                        }
                        // line 156
                        yield "                    ";
                    } elseif ((($context["skip_adjacents"] ?? null) == false)) {
                        // line 157
                        yield "                        ";
                        $context["skip_adjacents"] = true;
                        // line 158
                        yield "                        <li class=\"d-none d-sm-block page-item disabled\">
                            <a class=\"page-link\" href=\"#\" aria-disabled=\"true\">...</a>
                        </li>
                    ";
                    }
                    // line 162
                    yield "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 163
                yield "            ";
            }
            // line 164
            yield "
            <li class=\"page-item ";
            // line 165
            if ((($tmp = ($context["is_last_page"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "disabled";
            }
            yield "\">
                <a class=\"page-link d-flex page-link-next\" href=\"";
            // line 166
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::replace(($context["href"] ?? null), ["%start%" => ($context["forward"] ?? null)]), "html", null, true);
            yield "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"";
            yield (string) $this->escaper->escape(__("Next"), "html", null, true);
            yield "\" data-start=\"";
            yield (string) $this->escaper->escape(($context["forward"] ?? null), "html", null, true);
            yield "\" ";
            if ((($tmp = ($context["is_last_page"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "aria-disabled=\"true\"";
            }
            yield ">
                    <i class=\"ti ti-chevron-right\" aria-hidden=\"true\"></i>
                </a>
            </li>
            <li class=\"page-item ";
            // line 170
            if ((($tmp = ($context["is_last_page"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "disabled";
            }
            yield "\">
                <a class=\"page-link d-flex page-link-last\" href=\"";
            // line 171
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::replace(($context["href"] ?? null), ["%start%" => ($context["end"] ?? null)]), "html", null, true);
            yield "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"";
            yield (string) $this->escaper->escape(__("End"), "html", null, true);
            yield "\" data-start=\"";
            yield (string) $this->escaper->escape(($context["end"] ?? null), "html", null, true);
            yield "\" ";
            if ((($tmp = ($context["is_last_page"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "aria-disabled=\"true\"";
            }
            yield ">
                    <i class=\"ti ti-chevrons-right\" aria-hidden=\"true\"></i>
                </a>
            </li>
        ";
        }
        // line 176
        yield "    </ul>
</div>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/pager.html.twig";
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
        return array (  399 => 176,  383 => 171,  377 => 170,  362 => 166,  356 => 165,  353 => 164,  350 => 163,  343 => 162,  337 => 158,  334 => 157,  331 => 156,  328 => 155,  325 => 154,  323 => 153,  314 => 151,  307 => 150,  304 => 149,  301 => 148,  296 => 147,  289 => 143,  285 => 141,  283 => 140,  266 => 134,  260 => 133,  247 => 129,  241 => 128,  238 => 127,  235 => 126,  232 => 125,  230 => 124,  226 => 123,  223 => 122,  217 => 119,  214 => 118,  212 => 117,  209 => 116,  203 => 113,  196 => 109,  193 => 108,  191 => 107,  188 => 106,  184 => 104,  182 => 102,  181 => 101,  180 => 99,  179 => 98,  174 => 97,  165 => 94,  163 => 92,  162 => 90,  161 => 87,  160 => 86,  159 => 84,  158 => 83,  155 => 82,  152 => 81,  150 => 80,  146 => 78,  144 => 77,  142 => 76,  140 => 75,  137 => 73,  135 => 72,  133 => 71,  130 => 70,  128 => 69,  126 => 68,  123 => 67,  119 => 65,  117 => 64,  115 => 63,  112 => 62,  108 => 60,  106 => 59,  104 => 58,  102 => 57,  100 => 56,  98 => 55,  95 => 54,  91 => 52,  89 => 51,  85 => 49,  83 => 48,  81 => 47,  79 => 46,  76 => 45,  74 => 44,  71 => 42,  69 => 41,  66 => 40,  62 => 38,  59 => 37,  56 => 36,  52 => 34,  50 => 33,  47 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/pager.html.twig", "/var/www/html/glpi/templates/components/pager.html.twig");
    }
}
