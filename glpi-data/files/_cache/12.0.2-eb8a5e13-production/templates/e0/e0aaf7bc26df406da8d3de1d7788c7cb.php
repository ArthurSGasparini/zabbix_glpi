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

/* layout/parts/global_search_form.html.twig */
class __TwigTemplate_c5831fc8cd3ad5bf336c843eb3e310e2 extends Template
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
        if ((($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "central") && (($tmp = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("allow_search_global")) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 34
            yield "<form action=\"";
            yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/search.php"), "html", null, true);
            yield "\" role=\"search\" method=\"get\" data-submit-once>
   <label for=\"global-search\" class=\"visually-hidden\">";
            // line 35
            yield (string) $this->escaper->escape(__("Search…"), "html", null, true);
            yield "</label>
   <div class=\"input-group input-group-flat\">
      <input type=\"text\" id=\"global-search\" class=\"form-control\" name=\"globalsearch\" placeholder=\"";
            // line 37
            yield (string) $this->escaper->escape(__("Search…"), "html", null, true);
            yield "\" />
      <span class=\"input-group-text p-0\">
         <button type=\"submit\" class=\"btn btn-link p-0 m-0\" title=\"";
            // line 39
            yield (string) $this->escaper->escape(__("Search…"), "html", null, true);
            yield "\">
            <span class=\"ti ti-search\" aria-hidden=\"true\"></span>
         </button>
      </span>
   </div>
</form>
";
        }
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "layout/parts/global_search_form.html.twig";
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
        return array (  67 => 39,  62 => 37,  57 => 35,  52 => 34,  50 => 33,  47 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "layout/parts/global_search_form.html.twig", "/var/www/html/glpi/templates/layout/parts/global_search_form.html.twig");
    }
}
