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

/* pages/2fa/macros.html.twig */
class __TwigTemplate_31604293dd9d575b89bb5b53f321beaf extends Template
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
        // line 67
        yield "
";
        // line 132
        yield "
";
        return; yield;
    }

    protected function loadDeclaredMacros(): array
    {
        return [
            "tfa_backup_code_toggle" => new \Twig\TwigMacro("tfa_backup_code_toggle", function ($update_card_title = false, ...$varargs): string|Markup {
                // line 40
                $macros = $this->macros;
                $context = [
                    "update_card_title" => $update_card_title,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 41
                    yield "   <input type=\"text\" name=\"backup_code\" class=\"form-control d-none\" disabled=\"disabled\" placeholder=\"";
                    yield (string) $this->escaper->escape(__("Backup code"), "html", null, true);
                    yield "\"/>
   <button type=\"button\" class=\"btn btn-link px-1 js-tfa-switch-code-type\">";
                    // line 42
                    yield (string) $this->escaper->escape(__("Use a backup code"), "html", null, true);
                    yield "</button>
   <script>
       \$(document).ready(function() {
           \$(\x27.js-tfa-switch-code-type\x27).on(\x27click\x27, function(e) {
               const btn = \$(e.currentTarget);
               const wrapper = btn.closest(\x27[data-code-type]\x27);
               const card_title = ";
                    // line 48
                    yield (string) (((($tmp = ($context["update_card_title"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
                    yield " ? btn.closest(\x27.card\x27).find(\x27.card-title\x27) : \$();

               if (wrapper.attr(\x27data-code-type\x27) === \x27code\x27) {
                   wrapper.attr(\x27data-code-type\x27, \x27backup_code\x27);
                   \$(\x27input[name=\"totp_code[]\"]\x27).attr(\x27disabled\x27, \x27disabled\x27).addClass(\x27d-none\x27);
                   \$(\x27input[name=\"backup_code\"]\x27).removeAttr(\x27disabled\x27).removeClass(\x27d-none\x27);
                   btn.text(\x27";
                    // line 54
                    yield (string) $this->escaper->escape($this->escaper->escape(__("Use a code from your authenticator app"), "js"), "html", null, true);
                    yield "\x27);
                   card_title.text(\x27";
                    // line 55
                    yield (string) $this->escaper->escape($this->escaper->escape(__("Please enter a backup code"), "js"), "html", null, true);
                    yield "\x27);
               } else {
                   wrapper.attr(\x27data-code-type\x27, \x27code\x27);
                   \$(\x27input[name=\"backup_code\"]\x27).attr(\x27disabled\x27, \x27disabled\x27).addClass(\x27d-none\x27);
                   \$(\x27input[name=\"totp_code[]\"]\x27).removeAttr(\x27disabled\x27).removeClass(\x27d-none\x27);
                   btn.text(\x27";
                    // line 60
                    yield (string) $this->escaper->escape($this->escaper->escape(__("Use a backup code"), "js"), "html", null, true);
                    yield "\x27);
                   card_title.text(\x27";
                    // line 61
                    yield (string) $this->escaper->escape($this->escaper->escape(__("Please enter the code from your authenticator app"), "js"), "html", null, true);
                    yield "\x27);
               }
           });
       });
   </script>
";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["update_card_title" => true], false),
            "tfa_setup" => new \Twig\TwigMacro("tfa_setup", function ($user_id = null, $secret = null, $qrcode = null, $enforced = false, $in_grace_period = false, $grace_period_days_left = 0, ...$varargs): string|Markup {
                // line 68
                $macros = $this->macros;
                $context = [
                    "user_id" => $user_id,
                    "secret" => $secret,
                    "qrcode" => $qrcode,
                    "enforced" => $enforced,
                    "in_grace_period" => $in_grace_period,
                    "grace_period_days_left" => $grace_period_days_left,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 69
                    yield "   <form method=\"post\" action=\"";
                    yield (string) $this->escaper->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("MFA/Verify"), "html", null, true);
                    yield "\" autocomplete=\"off\" class=\"";
                    yield (string) (((($tmp = ($context["enforced"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("m-n5") : (""));
                    yield "\">
      <div class=\"card mx-auto\" style=\"width: fit-content\">
         <div class=\"card-header\">
            ";
                    // line 72
                    if ((($tmp = ($context["enforced"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 73
                        yield "               <h1 class=\"card-title\">";
                        yield (string) $this->escaper->escape(__("2FA is required for your account"), "html", null, true);
                        yield "</h1>
            ";
                    } else {
                        // line 75
                        yield "               <h1 class=\"card-title\">";
                        yield (string) $this->escaper->escape(__("2FA Setup"), "html", null, true);
                        yield "</h1>
            ";
                    }
                    // line 77
                    yield "         </div>
         <div class=\"card-body\">
            <ol class=\"col mb-0\">
               <li>";
                    // line 80
                    yield (string) $this->escaper->escape(__("Install an authenticator app on your mobile device such as Google Authenticator or Authy."), "html", null, true);
                    yield "</li>
               <li class=\"mt-2\">
                  ";
                    // line 82
                    yield (string) $this->escaper->escape(__("Scan the following QR code or enter the code shown into your authenticator app."), "html", null, true);
                    yield "
                  <div class=\"col-md-6 mx-auto\">
                     <div class=\"text-center\">
                        <img src=\"";
                    // line 85
                    yield (string) $this->escaper->escape(($context["qrcode"] ?? null), "html", null, true);
                    yield "\" alt=\"";
                    yield (string) $this->escaper->escape(__("QR Code"), "html", null, true);
                    yield "\" />
                     </div>
                  </div>
                  <div class=\"mx-auto\">
                     <div>
                        <div class=\"btn-group d-flex\">
                           <input class=\"form-control\" alt=\"";
                    // line 91
                    yield (string) $this->escaper->escape(__("2FA secret"), "html", null, true);
                    yield "\" value=\"";
                    yield (string) $this->escaper->escape(($context["secret"] ?? null), "html", null, true);
                    yield "\" aria-label=\"";
                    yield (string) $this->escaper->escape(__("2FA secret"), "html", null, true);
                    yield "\" />
                           <button type=\"button\" class=\"btn btn-icon flex-grow-0 flex-shrink-0\" name=\"copy_secret\" data-clipboard-text=\"";
                    // line 92
                    yield (string) $this->escaper->escape(($context["secret"] ?? null), "html", null, true);
                    yield "\"
                                   aria-label=\"";
                    // line 93
                    yield (string) $this->escaper->escape(__("Copy"), "html", null, true);
                    yield "\">
                              <i class=\"ti ti-clipboard-copy\" aria-hidden=\"true\"></i>
                           </button>
                           <script>
                              \$(document).ready(function() {
                                  \$(\x27button[name=\"copy_secret\"]\x27).on(\x27click\x27, function() {
                                      navigator.clipboard.writeText(\$(this).data(\x27clipboard-text\x27));
                                  });
                              });
                           </script>
                        </div>
                        <input type=\"hidden\" name=\"secret\" value=\"";
                    // line 104
                    yield (string) $this->escaper->escape(($context["secret"] ?? null), "html", null, true);
                    yield "\" />
                        <input type=\"hidden\" name=\"_idor_token\" value=\"";
                    // line 105
                    yield (string) $this->escaper->escape(Session::getNewIDORToken("", ["user_id" => ($context["user_id"] ?? null), "secret" => ($context["secret"] ?? null)]), "html", null, true);
                    yield "\" />
                     </div>
                  </div>
               </li>
               <li class=\"mt-3\">
                  ";
                    // line 110
                    yield (string) $this->escaper->escape(__("After entering the code into your authenticator, enter the code shown in the app to finish the setup"), "html", null, true);
                    yield "
                  <div class=\"col-md-6 mx-auto mt-2\">
                     ";
                    // line 113
                    yield "                     ";
                    yield (string) $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("Mfa:CodeInput");
                    yield "
                  </div>
               </li>
            </ol>
         </div>
         <div class=\"card-footer d-flex flex-wrap\">
            ";
                    // line 119
                    if (((($tmp = ($context["enforced"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = ($context["in_grace_period"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                        // line 120
                        yield "               <div>";
                        yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::sprintf(__("You can skip this step for now, but you will be required to set it up later (%s days)"), ($context["grace_period_days_left"] ?? null)), "html", null, true);
                        yield "</div>
            ";
                    }
                    // line 122
                    yield "            <div class=\"ms-auto\">
               ";
                    // line 123
                    if (((($tmp = ($context["enforced"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = ($context["in_grace_period"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                        // line 124
                        yield "                  <button type=\"submit\" formnovalidate class=\"btn btn-outline-secondary\" name=\"skip_mfa\">";
                        yield (string) $this->escaper->escape(__("Skip"), "html", null, true);
                        yield "</button>
               ";
                    }
                    // line 126
                    yield "               <button type=\"submit\" name=\"continue\" class=\"btn btn-primary ms-1\">";
                    yield (string) $this->escaper->escape(__("Verify"), "html", null, true);
                    yield "</button>
            </div>
         </div>
      </div>
   </form>
";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["user_id" => false, "secret" => false, "qrcode" => false, "enforced" => true, "in_grace_period" => true, "grace_period_days_left" => true], false),
            "tfa_backup_codes_container" => new \Twig\TwigMacro("tfa_backup_codes_container", function ($backup_codes = [], $regen_button_name = "regenerate_backup_codes", ...$varargs): string|Markup {
                // line 133
                $macros = $this->macros;
                $context = [
                    "backup_codes" => $backup_codes,
                    "regen_button_name" => $regen_button_name,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 134
                    yield "    <div id=\"backup_codes\" class=\"d-none py-2\" style=\"width: fit-content;\">
        <h3 class=\"mb-2 alert alert-warning\">";
                    // line 135
                    yield (string) $this->escaper->escape(__("Backup codes (This is the only time these will be shown)"), "html", null, true);
                    yield "</h3>
        <h4 class=\"mb-2\">";
                    // line 136
                    yield (string) $this->escaper->escape(__("These are one-time use codes in case your authenticator is inaccessible"), "html", null, true);
                    yield "</h4>
    </div>
    <script type=\"module\">
        \$(\x27#backup_codes\x27).on(\x27click\x27, \x27button[name=\"copy_backup_codes\"]\x27, function() {
            const codes = [];
            \$(\x27#backup_codes\x27).find(\x27td.backup-code\x27).each(function () {
                codes.push(\$(this).text());
            });
            const newline = navigator.platform.match(/Windows/) ? \"\\r\\n\" : \"\\n\";
            navigator.clipboard.writeText(codes.join(newline));
            const btn = \$(this);

            btn.find(\x27i\x27).removeClass(\x27ti ti-copy\x27).addClass(\x27ti ti-check\x27);
            btn.removeClass(\x27btn-outline-secondary\x27).addClass(\x27btn-success\x27);
            btn.text(\x27";
                    // line 150
                    yield (string) $this->escaper->escape($this->escaper->escape(__("Copied"), "js"), "html", null, true);
                    yield "\x27);
        });

        function showCodes(codes) {
            const backup_code_container = \$(\x27#backup_codes\x27);
            if (codes.length === 0) {
                // An error occurred
                backup_code_container.html(\x27";
                    // line 157
                    yield (string) $this->escaper->escape($this->escaper->escape(__("An error occurred"), "js"), "html", null, true);
                    yield "\x27);
            } else {
                //Remove any previous code table
                backup_code_container.find(\x27table\x27).remove();
                backup_code_container.append(`<table class=\"table table-bordered mx-auto text-center\" style=\"width: fit-content\"><tbody></tbody></table>`);
                const table_body = backup_code_container.find(\x27tbody\x27);
                \$.each(codes, function (index, value) {
                    let code_item = \$(\x27<tr><td class=\"backup-code\" data-testid=\"backup-code\"></td></tr>\x27);
                    // Stylize the codes to make them easier to read and reduce ambiguity
                    for (let i = 0; i < value.length; i++) {
                        if (isNaN(value[i])) {
                            if (value[i] === value[i].toUpperCase()) {
                                code_item.find(\x27td\x27).append(\$(\x27<u></u>\x27).text(value[i]));
                            } else {
                                code_item.find(\x27td\x27).append(value[i]);
                            }
                        } else {
                            code_item.find(\x27td\x27).append(\$(\x27<span></span>\x27).addClass(\x27text-info\x27).text(value[i]));
                        }
                    }
                    table_body.append(code_item);
                });
                table_body.append(`<tr><td>
                            <button class=\"btn btn-outline-secondary\" type=\"button\" name=\"copy_backup_codes\">
                                <i class=\"ti ti-copy\" aria-hidden=\"true\"></i>
                                ";
                    // line 182
                    yield (string) $this->escaper->escape(__("Copy backup codes"), "html", null, true);
                    yield "
                            </button>
                        </td></tr>`);
            }
            backup_code_container.removeClass(\x27d-none\x27);
        }

        if (\$(\x27button[name=\"";
                    // line 189
                    yield (string) $this->escaper->escape(($context["regen_button_name"] ?? null), "html", null, true);
                    yield "\"]\x27).length > 0) {
            \$(\x27button[name=\"";
                    // line 190
                    yield (string) $this->escaper->escape(($context["regen_button_name"] ?? null), "html", null, true);
                    yield "\"]\x27).on(\x27click\x27, function () {
                \$.ajax({
                    url: CFG_GLPI.root_doc + \x27/ajax/2fa.php\x27,
                    method: \x27POST\x27,
                    data: {
                        regenerate_backup_codes: 1
                    },
                    success: function (data) {
                        showCodes(JSON.parse(data));
                    },
                    error: function () {
                        const backup_code_container = \$(\x27#backup_codes\x27);
                        backup_code_container.html(\x27";
                    // line 202
                    yield (string) $this->escaper->escape($this->escaper->escape(__("An error occurred"), "js"), "html", null, true);
                    yield "\x27);
                        backup_code_container.removeClass(\x27d-none\x27);
                    }
                });
            });
        }

        ";
                    // line 209
                    if ( !Twig\Extension\CoreExtension::testEmpty(($context["backup_codes"] ?? null))) {
                        // line 210
                        yield "            showCodes(";
                        yield (string) json_encode(($context["backup_codes"] ?? null));
                        yield ");
        ";
                    }
                    // line 212
                    yield "    </script>
";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["backup_codes" => true, "regen_button_name" => true], false),
        ];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/2fa/macros.html.twig";
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
        return array (  394 => 212,  388 => 210,  386 => 209,  376 => 202,  361 => 190,  357 => 189,  347 => 182,  319 => 157,  309 => 150,  292 => 136,  288 => 135,  285 => 134,  274 => 133,  261 => 126,  255 => 124,  253 => 123,  250 => 122,  244 => 120,  242 => 119,  232 => 113,  227 => 110,  219 => 105,  215 => 104,  201 => 93,  197 => 92,  189 => 91,  178 => 85,  172 => 82,  167 => 80,  162 => 77,  156 => 75,  150 => 73,  148 => 72,  139 => 69,  124 => 68,  112 => 61,  108 => 60,  100 => 55,  96 => 54,  87 => 48,  78 => 42,  73 => 41,  63 => 40,  53 => 132,  50 => 67,  47 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/2fa/macros.html.twig", "/var/www/html/glpi/templates/pages/2fa/macros.html.twig");
    }
}
