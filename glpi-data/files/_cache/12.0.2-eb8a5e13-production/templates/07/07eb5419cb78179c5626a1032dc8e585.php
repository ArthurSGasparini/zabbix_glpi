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

/* __string_template__92d90a53d6315f46b1312ed13a8fae44 */
class __TwigTemplate_56842628c08101f1a6bc9dcec6f56fba extends Template
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
                    const chart_options = ";
        // line 8
        yield (string) json_encode(($context["options"] ?? null));
        yield ";
                    const palette = ";
        // line 9
        yield (string) json_encode(($context["palette"] ?? null));
        yield ";
                    \$.each(chart_options.series, function (index, serie) {
                        if (";
        // line 11
        yield (string) (((($tmp = ($context["distributed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
        yield ") {
                            serie[\x27itemStyle\x27] = {
                                ...serie[\x27itemStyle\x27],
                                \x27color\x27: (param) => palette[param.dataIndex % palette.length]
                            }
                        }
                        // Hide labels with a value of zero to avoid overlapping values
                        serie[\x27label\x27] = {
                            ...serie[\x27label\x27],
                            \x27formatter\x27: (param) => {
                                const raw_value = (param.data !== null && typeof param.data === \x27object\x27) ? param.data.value : param.data;
                                return raw_value == 0 ? \x27\x27 : raw_value;
                            }
                        };
                    });
                    if (";
        // line 26
        yield (string) (((($tmp = ($context["horizontal"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
        yield ") {
                        chart_options[\x27xAxis\x27] = {
                            ...chart_options[\x27xAxis\x27],
                            \x27axisLabel\x27: {
                                \x27formatter\x27: (value) => {
                                    if (value < 1e3) {
                                        return value;
                                    } else if (value < 1e6) {
                                        return value / 1e3 + \"K\";
                                    } else {
                                        return value / 1e6 + \"M\";
                                    }
                                }
                            }
                        };
                    }

                    const myChart = echarts.init(target[0]);
                    myChart.setOption(chart_options);
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
        return "__string_template__92d90a53d6315f46b1312ed13a8fae44";
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
        return array (  89 => 26,  71 => 11,  66 => 9,  62 => 8,  58 => 7,  54 => 6,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__92d90a53d6315f46b1312ed13a8fae44", "");
    }
}
