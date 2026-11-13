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

/* pages/login.html.twig */
class __TwigTemplate_a47932701d729c1f865c5500d4eb00c2 extends Template
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
            'content_block' => [$this, 'block_content_block'],
            'footer_block' => [$this, 'block_footer_block'],
            'javascript_block' => [$this, 'block_javascript_block'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 33
        return $this->parent ??= $this->load("layout/page_card_notlogged.html.twig", 33);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("layout/page_card_notlogged.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 35
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 36
        yield "    <form action=\"";
        yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/login.php"), "html", null, true);
        yield "\" method=\"post\" data-submit-once>
        <input type=\"hidden\" name=\"noAUTO\" value=\"";
        // line 37
        yield (string) $this->escaper->escape(($context["noAuto"] ?? null), "html", null, true);
        yield "\"/>
        <input type=\"hidden\" name=\"redirect\" value=\"";
        // line 38
        yield (string) $this->escaper->escape(($context["redirect"] ?? null), "html", null, true);
        yield "\"/>
        ";
        // line 39
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["text_login"] ?? null)) > 0)) {
            // line 40
            yield "            <div class=\"rich_text_container text-center\">
                ";
            // line 41
            yield (string) $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getSafeHtml(($context["text_login"] ?? null));
            yield "
            </div>
        ";
        }
        // line 44
        yield "        <div class=\"row justify-content-center\">
            <div class=\"col-md-5\">
                <div class=\"card-header mb-4\">
                    <h2 class=\"mx-auto\">";
        // line 47
        yield (string) $this->escaper->escape(__("Login to your account"), "html", null, true);
        yield "</h2>
                </div>
                <div class=\"mb-3\">
                    <label class=\"form-label\" for=\"login_name\">";
        // line 50
        yield (string) $this->escaper->escape(__("Login"), "html", null, true);
        yield "</label>
                    <input type=\"text\" class=\"form-control\" id=\"login_name\" name=\"login_name\" placeholder=\"\" autocomplete=\"username\"/>
                </div>
                <div class=\"mb-4\">
                    <div class=\"d-flex\">
                        <label class=\"form-label\" for=\"login_password\">
                            ";
        // line 56
        yield (string) $this->escaper->escape(__("Password"), "html", null, true);
        yield "
                        </label>
                    </div>
                    <input type=\"password\" class=\"form-control\" id=\"login_password\" name=\"login_password\" placeholder=\"\" autocomplete=\"current-password\"/>
                </div>

                ";
        // line 62
        if ((($tmp = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("display_login_source")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 63
            yield "                    <div class=\"mb-3\">
                        <label class=\"form-label\" for=\"dropdown_auth";
            // line 64
            yield (string) $this->escaper->escape(($context["rand"] ?? null), "html", null, true);
            yield "\">";
            yield (string) $this->escaper->escape(__("Login source"), "html", null, true);
            yield "</label>
                        ";
            // line 65
            yield (string) ($context["auth_dropdown_login"] ?? null);
            yield "
                    </div>
                ";
        }
        // line 68
        yield "
                ";
        // line 69
        if ((($tmp = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("login_remember_time")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 70
            yield "                    <div class=\"mb-2\">
                        <label class=\"form-check\" for=\"login_remember\">
                            <input type=\"checkbox\" class=\"form-check-input\" id=\"login_remember\" name=\"login_remember\" ";
            // line 72
            yield (string) (((($tmp = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("login_remember_default")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
            yield "/>
                            <span class=\"form-check-label\">";
            // line 73
            yield (string) $this->escaper->escape(__("Remember me"), "html", null, true);
            yield "</span>
                        </label>
                    </div>
                ";
        }
        // line 77
        yield "
                <div class=\"form-footer\">
                    <button type=\"submit\" name=\"submit\" class=\"btn btn-primary w-100 mb-2\">
                        ";
        // line 80
        yield (string) $this->escaper->escape(__("Sign in"), "html", null, true);
        yield "
                    </button>
                    ";
        // line 82
        if ((($tmp = ($context["show_lost_password"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 83
            yield "                        <div class=\"ms-auto text-center forgot_password ";
            yield (string) (((($tmp = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("display_login_source")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("d-none") : (""));
            yield "\">
                            <a href=\"";
            // line 84
            yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/lostpassword.php?lostpassword=1"), "html", null, true);
            yield "\">
                                ";
            // line 85
            yield (string) $this->escaper->escape(__("Forgotten password?"), "html", null, true);
            yield "
                            </a>
                        </div>
                        ";
            // line 88
            if ((($tmp = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("display_login_source")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 89
                yield "                            <script>
                                \$(() => {
                                    if (\$(\x27select[name=\"auth\"]\x27).val() === \x27local\x27) {
                                        \$(\x27.forgot_password\x27).removeClass(\x27d-none\x27);
                                    }
                                    \$(\x27select[name=\"auth\"]\x27).on(\x27change\x27, function () {
                                        if (\$(this).val() === \x27local\x27) {
                                            \$(\x27.forgot_password\x27).removeClass(\x27d-none\x27);
                                        } else {
                                            \$(\x27.forgot_password\x27).addClass(\x27d-none\x27);
                                        }
                                    });
                                });
                            </script>
                        ";
            }
            // line 104
            yield "                    ";
        }
        // line 105
        yield "                </div>
            </div>

            ";
        // line 108
        if ((($tmp = ($context["right_panel"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 109
            yield "                <div class=\"col-auto px-2 text-center\">
                    ";
            // line 110
            yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::DISPLAY_LOGIN")), "html", null, true);
            yield "
                </div>
            ";
        }
        // line 113
        yield "        </div>
        ";
        // line 114
        if ((($tmp = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("use_public_faq")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 115
            yield "            <div class=\"text-center mt-4 border-top\">
                <a class=\"btn btn-outline-secondary mt-4\" href=\"";
            // line 116
            yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/helpdesk.faq.php"), "html", null, true);
            yield "\">
                    <i class=\"ti ti-help\" aria-hidden=\"true\"></i>&nbsp;
                    ";
            // line 118
            yield (string) $this->escaper->escape(__("FAQ"), "html", null, true);
            yield "
                </a>
            </div>
        ";
        }
        // line 122
        yield "    </form>
";
        return; yield;
    }

    // line 125
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 126
        yield "    ";
        yield (string) ($context["copyright_message"] ?? null);
        yield "

    ";
        // line 128
        if ((($tmp = ($context["must_call_cron"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 129
            yield "        <div style=\"background-image: url(\x27";
            yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/front/cron.php"), "html", null, true);
            yield "\x27);\"></div>
    ";
        }
        return; yield;
    }

    // line 133
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascript_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 134
        yield "    <script type=\"text/javascript\">
        \$(function () {
            \$(\x27#login_name\x27).focus();
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
        return "pages/login.html.twig";
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
        return array (  277 => 134,  270 => 133,  261 => 129,  259 => 128,  253 => 126,  246 => 125,  240 => 122,  233 => 118,  228 => 116,  225 => 115,  223 => 114,  220 => 113,  214 => 110,  211 => 109,  209 => 108,  204 => 105,  201 => 104,  184 => 89,  182 => 88,  176 => 85,  172 => 84,  167 => 83,  165 => 82,  160 => 80,  155 => 77,  148 => 73,  144 => 72,  140 => 70,  138 => 69,  135 => 68,  129 => 65,  123 => 64,  120 => 63,  118 => 62,  109 => 56,  100 => 50,  94 => 47,  89 => 44,  83 => 41,  80 => 40,  78 => 39,  74 => 38,  70 => 37,  65 => 36,  58 => 35,  47 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/login.html.twig", "/var/www/html/glpi/templates/pages/login.html.twig");
    }
}
