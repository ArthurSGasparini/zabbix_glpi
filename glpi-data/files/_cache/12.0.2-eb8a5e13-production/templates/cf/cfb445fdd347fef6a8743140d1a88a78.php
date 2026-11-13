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

/* install/step3.html.twig */
class __TwigTemplate_03cceb38173ece86729db861e2deec50 extends Template
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
<h3>";
        // line 33
        yield (string) $this->escaper->escape(__("Test of the connection at the database"), "html", null, true);
        yield "</h3>

";
        // line 35
        if ((((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["host"] ?? null)) == 0) || (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["user"] ?? null)) == 0)) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["link"] ?? null), "connect_error", [], "any", false, false, false, 35)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 36
            yield "
    ";
            // line 37
            yield (string) $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("Alert:Danger", ["heading" => __("Can\x27t connect to the database"), "content" => Twig\Extension\CoreExtension::sprintf(__("The server answered: %s"), CoreExtension::getAttribute($this->env, $this->source, ($context["link"] ?? null), "connect_error", [], "any", false, false, false, 37))]);
            yield "

   <form action=\"install.php\" method=\"post\" class=\"d-inline\" data-submit-once>
      <button type=\"submit\" name=\"submit\" class=\"btn btn-warning\">
         <i class=\"ti ti-chevron-left me-1 fs-2x alert-icon\" aria-hidden=\"true\"></i>
         ";
            // line 42
            yield (string) $this->escaper->escape(__("Back"), "html", null, true);
            yield "
      </button>

      <input type=\"hidden\" name=\"update\" value=\"";
            // line 45
            yield (string) $this->escaper->escape(($context["update"] ?? null), "html", null, true);
            yield "\">
      <input type=\"hidden\" name=\"install\" value=\"Etape_1\">
   </form>
";
        } else {
            // line 49
            yield "    ";
            yield (string) $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("Alert:Success", ["content" => __("Database connection successful")]);
            yield "

   ";
            // line 51
            if ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["engine_requirement"] ?? null), "isValidated", [], "method", false, false, false, 51)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 52
                yield "       ";
                $_v0 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
                $preRendered = $_v0->preRender("Alert:Danger", Twig\Extension\CoreExtension::toArray(["heading" => __("Database engine is not supported.")]));
                if (null !== $preRendered) {
                    yield $preRendered; 
                } else {
                    $preRenderEvent = $_v0->startEmbedComponent("Alert:Danger", Twig\Extension\CoreExtension::toArray(["heading" => __("Database engine is not supported.")]), $context, "install/step3.html.twig", 37585127181);
                    $embeddedContext = $preRenderEvent->getVariables();
                    $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
                    $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
                    $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 37585127181);
                    $this->load("install/step3.html.twig", 52, "37585127181")->display($embeddedContext, $embeddedBlocks);
                    $_v0->finishEmbedComponent();
                }
                // line 61
                yield "   ";
            }
            // line 62
            yield "
   ";
            // line 63
            if ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["config_requirement"] ?? null), "isValidated", [], "method", false, false, false, 63)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 64
                yield "       ";
                $_v1 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
                $preRendered = $_v1->preRender("Alert:Danger", Twig\Extension\CoreExtension::toArray(["heading" => __("Database configuration is not supported.")]));
                if (null !== $preRendered) {
                    yield $preRendered; 
                } else {
                    $preRenderEvent = $_v1->startEmbedComponent("Alert:Danger", Twig\Extension\CoreExtension::toArray(["heading" => __("Database configuration is not supported.")]), $context, "install/step3.html.twig", 5751881521);
                    $embeddedContext = $preRenderEvent->getVariables();
                    $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
                    $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
                    $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 5751881521);
                    $this->load("install/step3.html.twig", 64, "5751881521")->display($embeddedContext, $embeddedBlocks);
                    $_v1->finishEmbedComponent();
                }
                // line 73
                yield "   ";
            }
            // line 74
            yield "
   ";
            // line 75
            if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["engine_requirement"] ?? null), "isValidated", [], "method", false, false, false, 75)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["config_requirement"] ?? null), "isValidated", [], "method", false, false, false, 75)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 76
                yield "      <div class=\"container mt-4\">
         <form action=\x27install.php\x27 method=\x27post\x27>
            <div class=\"mb-3\">
                ";
                // line 79
                if ((($context["update"] ?? null) == "no")) {
                    // line 80
                    yield "                    <h3>";
                    yield (string) $this->escaper->escape(__("Please select a database:"), "html", null, true);
                    yield "</h3>

                    <div class=\"hr-text text-white mt-6\">
                        ";
                    // line 83
                    yield (string) $this->escaper->escape(__("Create a new database:"), "html", null, true);
                    yield "
                    </div>
                    <input type=\"text\" name=\"newdatabasename\" id=\"new_db\" class=\"form-control\" autofocus>

                    <div class=\"hr-text text-white mt-6\">
                        ";
                    // line 88
                    yield (string) $this->escaper->escape(__("Or use an existing one:"), "html", null, true);
                    yield "
                    </div>
                ";
                } else {
                    // line 91
                    yield "                    <h3>";
                    yield (string) $this->escaper->escape(__("Please select a database to update:"), "html", null, true);
                    yield "</h3>
                ";
                }
                // line 93
                yield "
                ";
                // line 94
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["databases"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["database"]) {
                    // line 95
                    yield "                    <div class=\"form-check\">
                        <input class=\"form-check-input\" type=\"radio\" name=\"databasename\" id=\"";
                    // line 96
                    yield (string) $this->escaper->escape($this->extensions['Twig\Extra\String\StringExtension']->createSlug($context["database"]), "html", null, true);
                    yield "\" value=\"";
                    yield (string) $this->escaper->escape($context["database"], "html", null, true);
                    yield "\">
                        <label class=\"form-check-label\" for=\"";
                    // line 97
                    yield (string) $this->escaper->escape($this->extensions['Twig\Extra\String\StringExtension']->createSlug($context["database"]), "html", null, true);
                    yield "\">
                            ";
                    // line 98
                    yield (string) $this->escaper->escape($context["database"], "html", null, true);
                    yield "
                        </label>
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['database'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 102
                yield "            </div>

            <button type=\"submit\" name=\"submit\" class=\"btn btn-primary\">
               ";
                // line 105
                yield (string) $this->escaper->escape(__("Continue"), "html", null, true);
                yield "
               <i class=\"ti ti-chevron-right ms-1\" aria-hidden=\"true\"></i>
            </button>

            ";
                // line 109
                if ((($context["update"] ?? null) == "no")) {
                    // line 110
                    yield "               <input type=\"hidden\" name=\"install\" value=\"Etape_3\">
            ";
                } else {
                    // line 112
                    yield "               <input type=\"hidden\" name=\"install\" value=\"update_1\">
            ";
                }
                // line 114
                yield "         </form>
      </div>
   ";
            }
        }
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "install/step3.html.twig";
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
        return array (  222 => 114,  218 => 112,  214 => 110,  212 => 109,  205 => 105,  200 => 102,  189 => 98,  185 => 97,  179 => 96,  176 => 95,  172 => 94,  169 => 93,  163 => 91,  157 => 88,  149 => 83,  142 => 80,  140 => 79,  135 => 76,  133 => 75,  130 => 74,  127 => 73,  112 => 64,  110 => 63,  107 => 62,  104 => 61,  89 => 52,  87 => 51,  81 => 49,  74 => 45,  68 => 42,  60 => 37,  57 => 36,  55 => 35,  50 => 33,  47 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "install/step3.html.twig", "/var/www/html/glpi/templates/install/step3.html.twig");
    }
}


/* install/step3.html.twig */
class __TwigTemplate_03cceb38173ece86729db861e2deec50___37585127181 extends Template
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
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 52
        return $this->load(($context["__parent__"] ?? null), 52);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        return; yield;
    }

    // line 53
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 54
        yield "               <ul class=\"alert-list\">
                   ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["engine_requirement"] ?? null), "getValidationMessages", [], "method", false, false, false, 55));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 56
            yield "                       <li>";
            yield (string) $this->escaper->escape($context["message"], "html", null, true);
            yield "</li>
                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 58
        yield "               </ul>
           ";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "install/step3.html.twig";
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
        return array (  339 => 58,  329 => 56,  325 => 55,  322 => 54,  315 => 53,  296 => 52,  222 => 114,  218 => 112,  214 => 110,  212 => 109,  205 => 105,  200 => 102,  189 => 98,  185 => 97,  179 => 96,  176 => 95,  172 => 94,  169 => 93,  163 => 91,  157 => 88,  149 => 83,  142 => 80,  140 => 79,  135 => 76,  133 => 75,  130 => 74,  127 => 73,  112 => 64,  110 => 63,  107 => 62,  104 => 61,  89 => 52,  87 => 51,  81 => 49,  74 => 45,  68 => 42,  60 => 37,  57 => 36,  55 => 35,  50 => 33,  47 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "install/step3.html.twig", "/var/www/html/glpi/templates/install/step3.html.twig");
    }
}


/* install/step3.html.twig */
class __TwigTemplate_03cceb38173ece86729db861e2deec50___5751881521 extends Template
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
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 64
        return $this->load(($context["__parent__"] ?? null), 64);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        return; yield;
    }

    // line 65
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 66
        yield "               <ul class=\"alert-list\">
                   ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["config_requirement"] ?? null), "getValidationMessages", [], "method", false, false, false, 67));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 68
            yield "                       <li>";
            yield (string) $this->escaper->escape($context["message"], "html", null, true);
            yield "</li>
                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 70
        yield "               </ul>
           ";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "install/step3.html.twig";
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
        return array (  453 => 70,  443 => 68,  439 => 67,  436 => 66,  429 => 65,  410 => 64,  339 => 58,  329 => 56,  325 => 55,  322 => 54,  315 => 53,  296 => 52,  222 => 114,  218 => 112,  214 => 110,  212 => 109,  205 => 105,  200 => 102,  189 => 98,  185 => 97,  179 => 96,  176 => 95,  172 => 94,  169 => 93,  163 => 91,  157 => 88,  149 => 83,  142 => 80,  140 => 79,  135 => 76,  133 => 75,  130 => 74,  127 => 73,  112 => 64,  110 => 63,  107 => 62,  104 => 61,  89 => 52,  87 => 51,  81 => 49,  74 => 45,  68 => 42,  60 => 37,  57 => 36,  55 => 35,  50 => 33,  47 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "install/step3.html.twig", "/var/www/html/glpi/templates/install/step3.html.twig");
    }
}
