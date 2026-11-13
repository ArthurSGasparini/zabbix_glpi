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

/* __string_template__03771e810ba598d47cb233202bd74730 */
class __TwigTemplate_07ffeb103944617410f7549756db6a22 extends Template
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
        // line 1
        yield "            <script type=\"module\">
                (async () => {
                    await import(\x27/js/modules/Dashboard/Dashboard.js\x27);

                    const target = GLPI.Dashboard.getActiveDashboard() ?
                        GLPI.Dashboard.getActiveDashboard().element.find(\x27#";
        // line 6
        yield (string) $this->escaper->escape(($context["chart_id"] ?? null), "html", null, true);
        yield " .chart\x27)
                        : \$(\x27#";
        // line 7
        yield (string) $this->escaper->escape(($context["chart_id"] ?? null), "html", null, true);
        yield " .chart\x27);
                    const myChart = echarts.init(target[0]);
                    myChart.setOption(";
        // line 9
        yield (string) json_encode(($context["options"] ?? null));
        yield ");
                    myChart
                        .on(\x27click\x27, function (params) {
                            const data_url = _.get(params, \x27data.url\x27, \x27\x27);
                            if (data_url.length > 0) {
                                window.location.href = data_url;
                            }
                        });

                    target.on(\x27mouseover\x27, () => {
                        myChart.setOption({\x27toolbox\x27: {\x27show\x27: true}});
                    }).on(\x27mouseout\x27, () => {
                        myChart.setOption({\x27toolbox\x27: {\x27show\x27: false}});
                    });
                })();
            </script>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "__string_template__03771e810ba598d47cb233202bd74730";
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
        return array (  63 => 9,  58 => 7,  54 => 6,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__03771e810ba598d47cb233202bd74730", "");
    }
}
