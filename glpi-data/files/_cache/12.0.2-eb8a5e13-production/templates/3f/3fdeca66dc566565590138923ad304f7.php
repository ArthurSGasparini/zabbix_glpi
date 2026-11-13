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

/* pages/admin/user/user_picture_field.html.twig */
class __TwigTemplate_6434f87335b4cfe17e96744d8deaf363 extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 33)->unwrap()->getMacroNamespace();
        // line 34
        $macros["inputs"] = $this->macros["inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 34)->unwrap()->getMacroNamespace();
        // line 35
        $macros["modals"] = $this->macros["modals"] = $this->load("components/form/modals_macros.html.twig", 35)->unwrap()->getMacroNamespace();
        // line 36
        yield "
";
        // line 37
        $context["can_update"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "canUpdate", [], "method", false, false, false, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "canUpdateItem", [], "method", false, false, false, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) || (($tmp = ((array_key_exists("is_preference_form", $context)) ? (Twig\Extension\CoreExtension::default(($context["is_preference_form"] ?? null), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp));
        // line 38
        $context["avatar"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 39
            yield "    ";
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/user/picture.html.twig", ["user_object" =>             // line 40
($context["item"] ?? null), "with_link" => false, "avatar_size" => "avatar-xl"]);
            // line 43
            yield "
";
            return; yield;
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 45
        $context["avatar_initials"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 46
            yield "    ";
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/user/picture.html.twig", ["user_object" =>             // line 47
($context["item"] ?? null), "with_link" => false, "avatar_size" => "avatar-xl", "force_initials" => true]);
            // line 51
            yield "
";
            return; yield;
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 53
        yield "
";
        // line 54
        $context["picture_field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 55
            yield "    ";
            $context["picture_avatars"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 56
                yield "        <div data-current-avatar data-testid=\"current-avatar-container\">";
                yield (string) $this->escaper->escape(($context["avatar"] ?? null), "html", null, true);
                yield "</div>
        <div data-default-avatar data-testid=\"default-avatar\" class=\"d-none\">";
                // line 57
                yield (string) $this->escaper->escape(($context["avatar_initials"] ?? null), "html", null, true);
                yield "</div>
        <div class=\"avatar avatar-xl rounded d-none\" data-preview-avatar data-testid=\"preview-avatar\">
            <img src=\"\" alt=\"";
                // line 59
                yield (string) $this->escaper->escape(__("Preview"), "html", null, true);
                yield "\" class=\"img-fluid\" />
        </div>
    ";
                return; yield;
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 62
            yield "    ";
            if ((($tmp = ($context["can_update"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 63
                yield "        <button type=\"button\" class=\"cursor-pointer flex-shrink-1 border-0 bg-transparent p-0\"
                title=\"";
                // line 64
                yield (string) $this->escaper->escape(__("Change picture"), "html", null, true);
                yield "\" aria-label=\"";
                yield (string) $this->escaper->escape(__("Change picture"), "html", null, true);
                yield "\"
                data-bs-toggle=\"modal\" data-bs-target=\"#modal_picture_";
                // line 65
                yield (string) $this->escaper->escape(($context["rand_field"] ?? null), "html", null, true);
                yield "\">
            ";
                // line 66
                yield (string) $this->escaper->escape(($context["picture_avatars"] ?? null), "html", null, true);
                yield "
        </button>
    ";
            } else {
                // line 69
                yield "        <div>";
                yield (string) $this->escaper->escape(($context["picture_avatars"] ?? null), "html", null, true);
                yield "</div>
    ";
            }
            // line 71
            yield "    ";
            if ((($tmp = ($context["can_update"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 72
                yield "        ";
                $context["modal_content"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 73
                    yield "            <div class=\"text-center\">
                <div data-current-avatar data-testid=\"current-avatar\">";
                    // line 74
                    yield (string) $this->escaper->escape(($context["avatar"] ?? null), "html", null, true);
                    yield "</div>
                <div data-default-avatar data-testid=\"default-avatar\" class=\"d-none\">";
                    // line 75
                    yield (string) $this->escaper->escape(($context["avatar_initials"] ?? null), "html", null, true);
                    yield "</div>
                <div class=\"avatar avatar-xl rounded d-none\" data-preview-avatar data-testid=\"preview-avatar\">
                    <img src=\"\" alt=\"";
                    // line 77
                    yield (string) $this->escaper->escape(__("Preview"), "html", null, true);
                    yield "\" class=\"img-fluid\" />
                </div>
                ";
                    // line 79
                    yield (string) ($macros["inputs"] ?? $this->throwUninitializedMacroNamespace(79))->call("file", ["picture", null, ["onlyimages" => true, "multiple" => false]], $context, 79, $this->source);
                    // line 82
                    yield "
                ";
                    // line 83
                    if ( !Twig\Extension\CoreExtension::testEmpty((($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 83)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["picture"] ?? null) : null))) {
                        // line 84
                        yield "                    ";
                        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(84))->call("checkboxField", ["_blank_picture", 0, __("Clear"), ["additional_attributes" => ["onclick" => "\$(this).closest(\".modal\").find(\"[data-current-avatar], [data-default-avatar], .fileupload\").toggleClass(\"d-none\");"]]], $context, 84, $this->source);
                        // line 88
                        yield "
                ";
                    }
                    // line 90
                    yield "                <script type=\"module\">
                    function updateAvatarVisibilities() {
                        // Cannot rely on \x27fileuploadprocessstop\x27 event or files property as they flat out don\x27t work. fileupload_info content is not updated fast enough to be seen from change event.
                        const has_pending_file = \$(\x27#modal_picture_";
                    // line 93
                    yield (string) $this->escaper->escape(($context["rand_field"] ?? null), "html", null, true);
                    yield " [data-preview-avatar] img\x27).attr(\x27src\x27) !== \x27\x27;
                        const will_clear = \$(\x27#modal_picture_";
                    // line 94
                    yield (string) $this->escaper->escape(($context["rand_field"] ?? null), "html", null, true);
                    yield " input[name=_blank_picture]\x27).is(\x27:checked\x27);

                        \$(\x27[data-preview-avatar]\x27).toggleClass(\x27d-none\x27, !has_pending_file || will_clear);
                        \$(\x27[data-current-avatar]\x27).toggleClass(\x27d-none\x27, has_pending_file || will_clear);
                        \$(\x27[data-default-avatar]\x27).toggleClass(\x27d-none\x27, !will_clear);
                    }

                    \$(\x27#modal_picture_";
                    // line 101
                    yield (string) $this->escaper->escape(($context["rand_field"] ?? null), "html", null, true);
                    yield "\x27).on(\x27mouseup\x27, \x27.remove_file_upload\x27, (e) => {
                        // Click handler doesn\x27t work. Don\x27t know. So much wasted time. Some other handler probably blocks it.
                        \$(\x27#modal_picture_";
                    // line 103
                    yield (string) $this->escaper->escape(($context["rand_field"] ?? null), "html", null, true);
                    yield " [data-preview-avatar] img\x27).attr(\x27src\x27, \x27\x27);
                        updateAvatarVisibilities();
                    });
                    \$(\x27#modal_picture_";
                    // line 106
                    yield (string) $this->escaper->escape(($context["rand_field"] ?? null), "html", null, true);
                    yield " input[type=file]\x27).on(\x27change\x27, (e) => {
                        // fileuploadprocessstop event doesn\x27t work on the file input or .fileupload. Maybe doesn\x27t work at all.
                        const preview_img = URL.createObjectURL(e.target.files[0]);
                        \$(\x27[data-preview-avatar] img\x27).attr(\x27src\x27, preview_img);
                        updateAvatarVisibilities();
                    });
                    \$(\x27#modal_picture_";
                    // line 112
                    yield (string) $this->escaper->escape(($context["rand_field"] ?? null), "html", null, true);
                    yield " input[name=_blank_picture]\x27).on(\x27change\x27, (e) => {
                        updateAvatarVisibilities();
                    });
                </script>
            </div>
        ";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 118
                yield "        ";
                yield (string) ($macros["modals"] ?? $this->throwUninitializedMacroNamespace(118))->call("modal", [__("Change picture"), ($context["modal_content"] ?? null), ["id" => ("modal_picture_" .                 // line 119
($context["rand_field"] ?? null))]], $context, 118, $this->source);
                // line 120
                yield "
    ";
            }
            return; yield;
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 123
        yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(123))->call("htmlField", ["_picture", ($context["picture_field"] ?? null), _n("Picture", "Pictures", 1), ["wrapper_class" => "form-control-plaintext d-flex"]], $context, 123, $this->source);
        // line 125
        yield "
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/user/user_picture_field.html.twig";
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
        return array (  234 => 125,  232 => 123,  226 => 120,  224 => 119,  222 => 118,  212 => 112,  203 => 106,  197 => 103,  192 => 101,  182 => 94,  178 => 93,  173 => 90,  169 => 88,  166 => 84,  164 => 83,  161 => 82,  159 => 79,  154 => 77,  149 => 75,  145 => 74,  142 => 73,  139 => 72,  136 => 71,  130 => 69,  124 => 66,  120 => 65,  114 => 64,  111 => 63,  108 => 62,  101 => 59,  96 => 57,  91 => 56,  88 => 55,  86 => 54,  83 => 53,  78 => 51,  76 => 47,  74 => 46,  72 => 45,  67 => 43,  65 => 40,  63 => 39,  61 => 38,  59 => 37,  56 => 36,  54 => 35,  52 => 34,  50 => 33,  47 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/user/user_picture_field.html.twig", "/var/www/html/glpi/templates/pages/admin/user/user_picture_field.html.twig");
    }
}
