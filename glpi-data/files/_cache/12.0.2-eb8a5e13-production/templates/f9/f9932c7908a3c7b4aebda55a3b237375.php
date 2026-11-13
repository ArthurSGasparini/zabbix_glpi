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

/* __string_template__c628b5ae1a029e9fea56f619a14d9735 */
class __TwigTemplate_1ec32052d742442cc824a0aa36b04492 extends Template
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
        yield "                ";
        $context["bg_color"] = (( !Twig\Extension\CoreExtension::testEmpty(($context["picture"] ?? null))) ? ("inherit") : (($context["initials_bg"] ?? null)));
        // line 2
        yield "                <span class=\"avatar avatar-md me-2\"
                    style=\"";
        // line 3
        if ( !(null === ($context["picture"] ?? null))) {
            yield " background-image: url(";
            yield (string) $this->escaper->escape(($context["picture"] ?? null), "html", null, true);
            yield "); ";
        }
        yield " background-color: ";
        yield (string) $this->escaper->escape(($context["bg_color"] ?? null), "html", null, true);
        yield "\">
                    ";
        // line 4
        if (Twig\Extension\CoreExtension::testEmpty(($context["picture"] ?? null))) {
            // line 5
            yield "                        ";
            yield (string) $this->escaper->escape(($context["initials"] ?? null), "html", null, true);
            yield "
                    ";
        }
        // line 7
        yield "                </span>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "__string_template__c628b5ae1a029e9fea56f619a14d9735";
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
        return array (  71 => 7,  65 => 5,  63 => 4,  53 => 3,  50 => 2,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__c628b5ae1a029e9fea56f619a14d9735", "");
    }
}
