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

/* components/form/pictures.html.twig */
class __TwigTemplate_d21ab7704fafd3db905d311bbe76c1ba extends Template
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
        yield "
";
        // line 35
        $context["model_itemtype"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getModelClass", [], "method", false, false, false, 35);
        // line 36
        $context["gallery_type"] = ((array_key_exists("gallery_type", $context)) ? (Twig\Extension\CoreExtension::default(($context["gallery_type"] ?? null), "")) : (""));
        // line 37
        if (( !(null === ($context["model_itemtype"] ?? null)) || $this->extensions['Glpi\Application\View\Extension\PhpExtension']->isUsingTrait(($context["item"] ?? null), "Glpi\\Features\\AssetImage"))) {
            // line 38
            yield "
    ";
            // line 39
            $context["picture_single"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getItemtypeOrModelPicture", ["picture"], "method", false, false, false, 39);
            // line 40
            yield "    ";
            $context["picture_front"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getItemtypeOrModelPicture", ["picture_front"], "method", false, false, false, 40);
            // line 41
            yield "    ";
            $context["picture_rear"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getItemtypeOrModelPicture", ["picture_rear"], "method", false, false, false, 41);
            // line 42
            yield "    ";
            $context["pictures_misc"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getItemtypeOrModelPicture", ["pictures"], "method", false, false, false, 42);
            // line 43
            yield "    ";
            $context["has_pictures"] = ((( !Twig\Extension\CoreExtension::testEmpty(($context["picture_single"] ?? null)) ||  !Twig\Extension\CoreExtension::testEmpty(($context["picture_front"] ?? null))) ||  !Twig\Extension\CoreExtension::testEmpty(($context["picture_rear"] ?? null))) ||  !Twig\Extension\CoreExtension::testEmpty(($context["pictures_misc"] ?? null)));
            // line 44
            yield "    ";
            $context["has_qr"] = ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 44), $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("asset_types")));
            // line 45
            yield "
    ";
            // line 46
            if (((($tmp = ($context["has_pictures"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = ($context["has_qr"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 47
                yield "        <div class=\"";
                yield (string) (((($context["gallery_type"] ?? null) == "horizontal")) ? ("col-12 me-n2") : (""));
                yield " d-flex flex-column card\">
            <div class=\"card-body\">
                ";
                // line 49
                if ((($tmp = ($context["has_pictures"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 50
                    yield "                    <h3 class=\"mb-3\">
                        ";
                    // line 51
                    yield (string) $this->escaper->escape(_n("Picture", "Pictures", Session::getPluralNumber()), "html", null, true);
                    yield "
                    </h3>

                    <div class=\"d-flex\">
                        ";
                    // line 55
                    if ( !Twig\Extension\CoreExtension::testEmpty(($context["picture_single"] ?? null))) {
                        // line 56
                        yield "                            ";
                        $context["picture_single"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["picture_single"] ?? null));
                        // line 57
                        yield "                            ";
                        $context["imgs"] = [Twig\Extension\CoreExtension::merge(($context["picture_single"] ?? null), ["title" => _n("Picture", "Pictures", 1)])];
                        // line 58
                        yield "                        ";
                    } else {
                        // line 59
                        yield "                            ";
                        if ((( !Twig\Extension\CoreExtension::testEmpty(($context["picture_front"] ?? null)) ||  !Twig\Extension\CoreExtension::testEmpty(($context["picture_rear"] ?? null))) ||  !Twig\Extension\CoreExtension::testEmpty(($context["pictures_misc"] ?? null)))) {
                            // line 60
                            yield "                                ";
                            $context["imgs"] = [];
                            // line 61
                            yield "                                ";
                            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["picture_front"] ?? null)) >= 1)) {
                                // line 62
                                yield "                                    ";
                                $context["picture_front"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["picture_front"] ?? null));
                                // line 63
                                yield "                                    ";
                                $context["imgs"] = Twig\Extension\CoreExtension::merge(($context["imgs"] ?? null), [Twig\Extension\CoreExtension::merge(($context["picture_front"] ?? null), ["title" => __("Front picture")])]);
                                // line 64
                                yield "                                ";
                            }
                            // line 65
                            yield "                                ";
                            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["picture_rear"] ?? null)) >= 1)) {
                                // line 66
                                yield "                                    ";
                                $context["picture_rear"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["picture_rear"] ?? null));
                                // line 67
                                yield "                                    ";
                                $context["imgs"] = Twig\Extension\CoreExtension::merge(($context["imgs"] ?? null), [Twig\Extension\CoreExtension::merge(($context["picture_rear"] ?? null), ["title" => __("Rear picture")])]);
                                // line 68
                                yield "                                ";
                            }
                            // line 69
                            yield "                                ";
                            if ( !Twig\Extension\CoreExtension::testEmpty(($context["pictures_misc"] ?? null))) {
                                // line 70
                                yield "                                    ";
                                $context["imgs"] = Twig\Extension\CoreExtension::merge(($context["imgs"] ?? null), ($context["pictures_misc"] ?? null));
                                // line 71
                                yield "                                ";
                            }
                            // line 72
                            yield "                            ";
                        }
                        // line 73
                        yield "                        ";
                    }
                    // line 74
                    yield "                        ";
                    yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/photoswipe.html.twig", ["imgs" => ($context["imgs"] ?? null), "gallery_type" => ($context["gallery_type"] ?? null)]);
                    yield "
                    </div>
                ";
                }
                // line 77
                yield "                ";
                if ((($tmp = ($context["has_qr"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 78
                    yield "                    ";
                    yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(78))->call("htmlField", ["qrcode", $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("BarcodeManager::renderQRCode", [                    // line 80
($context["item"] ?? null)]), __("Asset URL"), ["is_horizontal" => false, "helper" => __("Scan this QRCode to be redirected to the asset page from your mobile device")]], $context, 78, $this->source);
                    // line 86
                    yield "
                ";
                }
                // line 88
                yield "            </div>
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
        return "components/form/pictures.html.twig";
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
        return array (  178 => 88,  174 => 86,  172 => 80,  170 => 78,  167 => 77,  160 => 74,  157 => 73,  154 => 72,  151 => 71,  148 => 70,  145 => 69,  142 => 68,  139 => 67,  136 => 66,  133 => 65,  130 => 64,  127 => 63,  124 => 62,  121 => 61,  118 => 60,  115 => 59,  112 => 58,  109 => 57,  106 => 56,  104 => 55,  97 => 51,  94 => 50,  92 => 49,  86 => 47,  84 => 46,  81 => 45,  78 => 44,  75 => 43,  72 => 42,  69 => 41,  66 => 40,  64 => 39,  61 => 38,  59 => 37,  57 => 36,  55 => 35,  52 => 34,  50 => 33,  47 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/form/pictures.html.twig", "/var/www/html/glpi/templates/components/form/pictures.html.twig");
    }
}
