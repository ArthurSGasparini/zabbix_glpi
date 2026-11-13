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

/* pages/setup/sessiontracker/sessiontracker.html.twig */
class __TwigTemplate_350a4f988c79f770283d1a4174354b61 extends Template
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
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 36
        $context["user_filter_id"] = ("filter_user" . ($context["rand"] ?? null));
        // line 37
        $context["status_filter_id"] = ("filter_status" . ($context["rand"] ?? null));
        // line 38
        $context["type_filter_id"] = ("filter_type" . ($context["rand"] ?? null));
        // line 39
        $context["authtype_filter_id"] = ("filter_authtype" . ($context["rand"] ?? null));
        // line 40
        $context["ip_filter_id"] = ("filter_ip" . ($context["rand"] ?? null));
        // line 41
        $context["date_filter_id"] = ("filter_date" . ($context["rand"] ?? null));
        // line 42
        $context["filters_popover_id"] = ("filters-popover-" . ($context["rand"] ?? null));
        // line 43
        $context["datatable_id"] = ("sessions-datatable-" . ($context["rand"] ?? null));
        // line 44
        yield "
<div id=\"session-tracker\">
    <style>
       @scope {
          section {
             grid-template-columns: minmax(400px, 1fr);
             grid-template-rows: auto auto 1fr;
          }

          .session-tracker-toolbar {
             display: grid;
             grid-template-columns: repeat(4, minmax(100px, 300px)) auto;

             .form-field {
                width: 100% !important;
             }
          }

          @media (max-width: 768px) {
             .session-tracker-toolbar {
                display: flex;
                flex-wrap: wrap;
             }

             .session-tracker-toolbar > :not(.session-actions) {
                display: none;
             }

             .desktop-only {
                display: none;
             }
          }

          @media (min-width: 769px) {
             .mobile-only {
                display: none;
             }
          }
       }
    </style>
    <section class=\"d-grid h-100 gap-2 mw-100\">
        <header class=\"d-flex justify-content-between\">
            <div>
                <h1>
                    <i class=\"ti ti-user-shield\" aria-hidden=\"true\"></i>
                    ";
        // line 89
        yield (string) $this->escaper->escape(__("Session list"), "html", null, true);
        yield "
                </h1>
            </div>
            <div>
                <button class=\"btn btn-outline-danger gap-1 revoke-all-sessions\"
                        aria-label=\"";
        // line 94
        yield (string) $this->escaper->escape(__("Revoke all active sessions"), "html", null, true);
        yield "\" title=\"";
        yield (string) $this->escaper->escape(__("Revoke all active sessions"), "html", null, true);
        yield "\">
                    <i class=\"ti ti-logout\" aria-hidden=\"true\"></i>
                    <span class=\"desktop-only\">";
        // line 96
        yield (string) $this->escaper->escape(__("Revoke all active sessions"), "html", null, true);
        yield "</span>
                </button>
            </div>
        </header>
        ";
        // line 100
        if ((($tmp = ($context["is_admin_view"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 101
            yield "            <div class=\"session-tracker-toolbar gap-2\">
                ";
            // line 102
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(102))->call("textField", ["filter_user", (($_v0 = ($context["filters"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["user"] ?? null) : null), _n("User", "Users", 1), ["is_horizontal" => false, "id" =>             // line 104
($context["user_filter_id"] ?? null), "rand" =>             // line 105
($context["rand"] ?? null)]], $context, 102, $this->source);
            // line 106
            yield "
                ";
            // line 107
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(107))->call("dropdownArrayField", ["filter_status", (($_v1 = ($context["filters"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["status"] ?? null) : null), ["active" => __("Active"), "all" => __("All")], __("Status"), ["is_horizontal" => false, "id" =>             // line 112
($context["status_filter_id"] ?? null), "rand" =>             // line 113
($context["rand"] ?? null)]], $context, 107, $this->source);
            // line 114
            yield "
                ";
            // line 115
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(115))->call("dropdownArrayField", ["filter_type", (($_v2 = ($context["filters"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["type"] ?? null) : null), ["all" => __("All"), "web" => __("Browser"), "api" => __("API")], _n("Type", "Types", 1), ["is_horizontal" => false, "id" =>             // line 121
($context["type_filter_id"] ?? null), "rand" =>             // line 122
($context["rand"] ?? null)]], $context, 115, $this->source);
            // line 123
            yield "
                ";
            // line 124
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(124))->call("dropdownArrayField", ["filter_authtype", (($_v3 = ($context["filters"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["authtype"] ?? null) : null), (["all" => __("All")] + $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Auth::getAuthSources", [true])), __("Authentication"), ["is_horizontal" => false, "id" =>             // line 128
($context["authtype_filter_id"] ?? null), "rand" =>             // line 129
($context["rand"] ?? null)]], $context, 124, $this->source);
            // line 130
            yield "
                ";
            // line 131
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(131))->call("textField", ["filter_ip", (($_v4 = ($context["filters"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["ip"] ?? null) : null), _n("IP address", "IP addresses", 1), ["is_horizontal" => false, "id" =>             // line 133
($context["ip_filter_id"] ?? null), "helper" => __("CIDR notation and comma separated values are supported."), "rand" =>             // line 135
($context["rand"] ?? null)]], $context, 131, $this->source);
            // line 136
            yield "
                ";
            // line 137
            yield (string) ($macros["fields"] ?? $this->throwUninitializedMacroNamespace(137))->call("datetimeField", ["filter_date", "", __("Date range"), ["is_horizontal" => false, "mode" => "range", "clearable" => true, "id" =>             // line 141
($context["date_filter_id"] ?? null), "rand" =>             // line 142
($context["rand"] ?? null)]], $context, 137, $this->source);
            // line 143
            yield "
                <div style=\"grid-column: 5; grid-row: 2\" class=\"d-flex align-self-center gap-2 session-actions\">
                    <button class=\"desktop-only btn btn-primary align-self-end gap-1 filter-sessions\">
                        <i class=\"ti ti-filter\" aria-hidden=\"true\"></i>
                        ";
            // line 147
            yield (string) $this->escaper->escape(__("Filter"), "html", null, true);
            yield "
                    </button>
                    <button class=\"mobile-only btn btn-primary align-self-end gap-1\"
                            aria-controls=\"";
            // line 150
            yield (string) $this->escaper->escape(($context["filters_popover_id"] ?? null), "html", null, true);
            yield "\" :aria-expanded=\"false\" :aria-haspopup=\"true\"
                            data-bs-toggle=\"dropdown\" data-bs-placement=\"bottom\">
                        <i class=\"ti ti-filter\" aria-hidden=\"true\"></i>
                        ";
            // line 153
            yield (string) $this->escaper->escape(__("Filters"), "html", null, true);
            yield "
                    </button>
                    <div id=\"";
            // line 155
            yield (string) $this->escaper->escape(($context["filters_popover_id"] ?? null), "html", null, true);
            yield "\" class=\"dropdown-menu dropdown-menu-card\" role=\"region\">
                        <div class=\"p-3\">
                            <div class=\"filters-content mb-3 d-flex gap-1 flex-column\"></div>
                            <div class=\"d-flex justify-content-end gap-1\">
                                <button class=\"btn btn-outline-secondary align-self-end gap-1 reset-filters\">
                                    <i class=\"ti ti-reload\" aria-hidden=\"true\"></i>
                                    ";
            // line 161
            yield (string) $this->escaper->escape(__("Reset"), "html", null, true);
            yield "
                                </button>
                                <button class=\"btn btn-primary gap-1 filter-sessions\">
                                    <i class=\"ti ti-filter\" aria-hidden=\"true\"></i>
                                    ";
            // line 165
            yield (string) $this->escaper->escape(__("Filter"), "html", null, true);
            yield "
                                </button>
                            </div>
                        </div>
                    </div>
                    <button class=\"desktop-only btn btn-outline-secondary align-self-end gap-1 reset-filters\">
                        <i class=\"ti ti-reload\" aria-hidden=\"true\"></i>
                        ";
            // line 172
            yield (string) $this->escaper->escape(__("Reset"), "html", null, true);
            yield "
                    </button>
                </div>
            </div>
        ";
        }
        // line 177
        yield "        <div class=\"overflow-x-auto ";
        yield (string) (((($tmp = ($context["is_admin_view"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("mt-4") : (""));
        yield "\">
            ";
        // line 178
        yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/datatable.html.twig", ["datatable_id" =>         // line 179
($context["datatable_id"] ?? null), "is_tab" => true, "nofilter" => true, "use_pager" => true, "no_limit_display" => true, "nosort" => true, "start" =>         // line 185
($context["start"] ?? null), "href" =>         // line 186
($context["href"] ?? null), "columns" => ["type" => _n("Type", "Types", 1), "user" => _n("User", "Users", 1), "details" => __("Details"), "ip_address" => _n("IP address", "IP addresses", 1), "login" => __("Login"), "last_activity" => __("Last activity"), "status" => __("Status"), "actions" => __("Actions")], "formatters" => ["type" => "raw_html", "user" => "raw_html", "details" => "raw_html", "login" => "datetime", "last_activity" => "datetime", "status" => "raw_html", "actions" => "raw_html"], "entries" =>         // line 206
($context["sessions"] ?? null), "total_number" =>         // line 207
($context["sessions_count"] ?? null)], false);
        // line 208
        yield "
        </div>
    </section>

    <script type=\"module\">
        const user_filter = document.getElementById(\x27";
        // line 213
        yield (string) $this->escaper->escape($this->escaper->escape(($context["user_filter_id"] ?? null), "js"), "html", null, true);
        yield "\x27);
        const status_filter = document.getElementById(\x27dropdown_";
        // line 214
        yield (string) $this->escaper->escape($this->escaper->escape(($context["status_filter_id"] ?? null), "js"), "html", null, true);
        yield "\x27);
        const type_filter = document.getElementById(\x27dropdown_";
        // line 215
        yield (string) $this->escaper->escape($this->escaper->escape(($context["type_filter_id"] ?? null), "js"), "html", null, true);
        yield "\x27);
        const authtype_filter = document.getElementById(\x27dropdown_";
        // line 216
        yield (string) $this->escaper->escape($this->escaper->escape(($context["authtype_filter_id"] ?? null), "js"), "html", null, true);
        yield "\x27);
        const ip_filter = document.getElementById(\x27";
        // line 217
        yield (string) $this->escaper->escape($this->escaper->escape(($context["ip_filter_id"] ?? null), "js"), "html", null, true);
        yield "\x27);
        const date_filter = document.getElementById(\x27";
        // line 218
        yield (string) $this->escaper->escape($this->escaper->escape(($context["date_filter_id"] ?? null), "js"), "html", null, true);
        yield "\x27);
        const filters_popover = document.getElementById(\x27";
        // line 219
        yield (string) $this->escaper->escape($this->escaper->escape(($context["filters_popover_id"] ?? null), "js"), "html", null, true);
        yield "\x27);
        const ipv4_pattern = /^(25[0-5]|2[0-4]\\d|1\\d{2}|[1-9]?\\d)(\\.(25[0-5]|2[0-4]\\d|1\\d{2}|[1-9]?\\d)){3}\$/;
        const ipv6_pattern = /^(([0-9a-fA-F]{1,4}:){7}([0-9a-fA-F]{1,4}|:))|(([0-9a-fA-F]{1,4}:){1,7}:)|(([0-9a-fA-F]{1,4}:){1,6}:[0-9a-fA-F]{1,4})|(([0-9a-fA-F]{1,4}:){1,5}(:[0-9a-fA-F]{1,4}){1,2})|(([0-9a-fA-F]{1,4}:){1,4}(:[0-9a-fA-F]{1,4}){1,3})|(([0-9a-fA-F]{1,4}:){1,3}(:[0-9a-fA-F]{1,4}){1,4})|(([0-9a-fA-F]{1,4}:){1,2}(:[0-9a-fA-F]{1,4}){1,5})|([0-9a-fA-F]{1,4}:)((:[0-9a-fA-F]{1,4}){1,6})|(:)((:[0-9a-fA-F]{1,4}){1,7}|:)|fe80:(:[0-9a-fA-F]{0,4}){0,4}%[0-9a-zA-Z]{1,}\$/;

        ";
        // line 223
        if ((($tmp = ($context["is_admin_view"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 224
            yield "            window.displaySessionMessages();
            window.addEventListener(\x27resize\x27, onResize);
            onResize();

            function onResize() {
                // get all filter inputs (everything except .session-actions) and move them in the popover if the toggle button is visible, or back to the toolbar if not
                const filter_inputs = document.querySelectorAll(\x27.session-tracker-toolbar > :not(.session-actions), .filters-content > *\x27);
                const toggle_button = document.querySelector(\x27.session-tracker-toolbar > .session-actions > .mobile-only\x27);
                if (window.getComputedStyle(toggle_button).display !== \x27none\x27) {
                    filter_inputs.forEach(input => {
                        if (!filters_popover.contains(input)) {
                            filters_popover.querySelector(\x27.filters-content\x27).appendChild(input);
                        }
                    });
                } else {
                    filter_inputs.forEach(input => {
                        if (!input.parentElement.classList.contains(\x27session-actions\x27)) {
                            document.querySelector(\x27.session-tracker-toolbar\x27).insertBefore(input, toggle_button.parentElement);
                        }
                    });
                }
            }

            date_filter._flatpickr.setDate(";
            // line 247
            yield (string) json_encode((($_v5 = ($context["filters"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["date"] ?? null) : null));
            yield ", false);
            // The default onClose handler added by the twig templates is unwanted (forces value to apply even when unchanged)
            date_filter._flatpickr.config.onClose = [];
            date_filter._flatpickr.config.onChange.push((selectedDates) => {
                if (selectedDates.length === 2) {
                    date_filter._flatpickr.close();
                    reloadWithFilters();
                }
            });

            \$(type_filter).on(\x27change\x27, () => {
                reloadWithFilters();
            });
            \$(authtype_filter).on(\x27change\x27,  ()  => {
                reloadWithFilters();
            });
            \$(status_filter).on(\x27change\x27, () => {
                reloadWithFilters();
            });
            user_filter.addEventListener(\x27keyup\x27, (event) => {
                if (event.key === \x27Enter\x27) {
                    reloadWithFilters();
                }
            });
            ip_filter.addEventListener(\x27keyup\x27, (event) => {
                if (event.key === \x27Enter\x27) {
                    reloadWithFilters();
                }
            });
        ";
        }
        // line 277
        yield "
        function getFilterData() {
            ";
        // line 279
        if ((($tmp = ($context["is_admin_view"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 280
            yield "                return {
                    \x27user\x27: user_filter.value.trim(),
                    \x27status\x27: status_filter.value,
                    \x27type\x27: type_filter.value,
                    \x27authtype\x27: authtype_filter.value,
                    \x27ip\x27: ip_filter.value.trim(),
                    \x27date\x27: JSON.stringify(date_filter._flatpickr.selectedDates),
                };
            ";
        } else {
            // line 289
            yield "                return {};
            ";
        }
        // line 291
        yield "        }

        function reloadWithFilters() {
            window.reloadTab(new URLSearchParams(getFilterData()).toString());
        }

        async function revoke(url, options = {}) {
            const default_error = \x27";
        // line 298
        yield (string) $this->escaper->escape($this->escaper->escape(__("An unexpected error occurred"), "js"), "html", null, true);
        yield "\x27;
            try {
                const response = await fetch(url, {
                    method: \x27POST\x27,
                    ...options,
                    headers: {
                        \x27X-Requested-With\x27: \x27XMLHttpRequest\x27,
                        \x27Accept\x27: \x27application/json\x27,
                        ...(options.headers ?? {}),
                    },
                });
                if (!response.ok) {
                    const data = await response.json().catch(() => ({}));
                    glpi_toast_error(data.message ?? default_error, data.title);
                    return;
                }
                reloadWithFilters();
            } catch {
                glpi_toast_error(default_error);
            }
        }

        document.querySelector(\x27button.revoke-all-sessions\x27).addEventListener(\x27click\x27, async () => {
            const confirmed = await glpi_confirm_danger({
                title: \x27";
        // line 322
        yield (string) $this->escaper->escape($this->escaper->escape(__("Revoke all active sessions"), "js"), "html", null, true);
        yield "\x27,
                message: \x27";
        // line 323
        yield (string) $this->escaper->escape($this->escaper->escape(__("Are you sure you want to revoke all active sessions (excluding the current session)?"), "js"), "html", null, true);
        yield "\x27,
                confirm_label: \x27";
        // line 324
        yield (string) $this->escaper->escape($this->escaper->escape(__("Revoke"), "js"), "html", null, true);
        yield "\x27
            });
            if (confirmed) {
                await revoke(`";
        // line 327
        yield (string) $this->escaper->escape($this->escaper->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/Security/Session/All/Revoke"), "js"), "html", null, true);
        yield "`, {
                    headers: {
                        \x27Content-Type\x27: \x27application/x-www-form-urlencoded\x27,
                    },
                    body: new URLSearchParams({
                        users_id: ";
        // line 332
        yield (string) (((($tmp = ($context["is_admin_view"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (0) : ($this->escaper->escape($this->escaper->escape($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID"), "js"), "html", null, true)));
        yield "
                    }),
                });
            }
        });

        const revoke_buttons = document.querySelectorAll(\x27button.revoke-session\x27);
        revoke_buttons.forEach(button => {
            button.addEventListener(\x27click\x27, async () => {
                const session_type = button.dataset[\x27type\x27];
                const identifier = button.dataset[\x27identifier\x27];
                const confirmed = await glpi_confirm_danger({
                    message: \x27";
        // line 344
        yield (string) $this->escaper->escape($this->escaper->escape(__("Are you sure you want to revoke this session?"), "js"), "html", null, true);
        yield "\x27,
                    confirm_label: \x27";
        // line 345
        yield (string) $this->escaper->escape($this->escaper->escape(__("Revoke"), "js"), "html", null, true);
        yield "\x27
                });
                if (confirmed) {
                    const url = session_type === \x27api\x27
                        ? `";
        // line 349
        yield (string) $this->escaper->escape($this->escaper->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/Security/AccessToken/"), "js"), "html", null, true);
        yield "\${identifier}/Revoke`
                        : `";
        // line 350
        yield (string) $this->escaper->escape($this->escaper->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/Security/Session/"), "js"), "html", null, true);
        yield "\${identifier}/Revoke`;
                    await revoke(url);
                }
            });
        });

        const filter_session_buttons = document.querySelectorAll(\x27button.filter-sessions\x27);
        filter_session_buttons.forEach(button => {
            button.addEventListener(\x27click\x27, () => {
                const user_filter_value = user_filter.value.trim();
                const status_filter_value = status_filter.value;
                const type_filter_value = type_filter.value;
                const authtype_filter_value = authtype_filter.value;
                const ip_filter_value = ip_filter.value.trim();
                const date_filter_value = JSON.stringify(date_filter._flatpickr.selectedDates);

                applyFilters({
                    \x27user\x27: user_filter_value,
                    \x27status\x27: status_filter_value,
                    \x27type\x27: type_filter_value,
                    \x27authtype\x27: authtype_filter_value,
                    \x27ip\x27: ip_filter_value,
                    \x27date\x27: date_filter_value,
                });
            });
        });

        const reset_filter_buttons = document.querySelectorAll(\x27button.reset-filters\x27);
        reset_filter_buttons.forEach(button => {
            button.addEventListener(\x27click\x27, () => {
                user_filter.value = \x27\x27;
                status_filter.value = \x27active\x27;
                type_filter.value = \x27all\x27;
                authtype_filter.value = \x27all\x27;
                ip_filter.value = \x27\x27;
                date_filter._flatpickr.clear();
                reloadWithFilters();
            });
        });

        function applyFilters(filters) {
            // Validate IP filter
            if (filters[\x27ip\x27] !== \x27\x27) {
                const ip_filter_values = filters[\x27ip\x27].split(\x27,\x27).map(v => v.trim());
                for (const value of ip_filter_values) {
                    if (!ipv4_pattern.test(value) && !ipv6_pattern.test(value) && !/^.+\\/\\d+\$/.test(value)) {
                        ip_filter.setCustomValidity(__(\x27Please enter a valid IP address, CIDR notation, or comma separated values.\x27));
                        ip_filter.reportValidity();
                        return;
                    }
                }
            }

            reloadWithFilters();
        }
    </script>
</div>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/setup/sessiontracker/sessiontracker.html.twig";
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
        return array (  462 => 350,  458 => 349,  451 => 345,  447 => 344,  432 => 332,  424 => 327,  418 => 324,  414 => 323,  410 => 322,  383 => 298,  374 => 291,  370 => 289,  359 => 280,  357 => 279,  353 => 277,  320 => 247,  295 => 224,  293 => 223,  286 => 219,  282 => 218,  278 => 217,  274 => 216,  270 => 215,  266 => 214,  262 => 213,  255 => 208,  253 => 207,  252 => 206,  251 => 186,  250 => 185,  249 => 179,  248 => 178,  243 => 177,  235 => 172,  225 => 165,  218 => 161,  209 => 155,  204 => 153,  198 => 150,  192 => 147,  186 => 143,  184 => 142,  183 => 141,  182 => 137,  179 => 136,  177 => 135,  176 => 133,  175 => 131,  172 => 130,  170 => 129,  169 => 128,  168 => 124,  165 => 123,  163 => 122,  162 => 121,  161 => 115,  158 => 114,  156 => 113,  155 => 112,  154 => 107,  151 => 106,  149 => 105,  148 => 104,  147 => 102,  144 => 101,  142 => 100,  135 => 96,  128 => 94,  120 => 89,  73 => 44,  71 => 43,  69 => 42,  67 => 41,  65 => 40,  63 => 39,  61 => 38,  59 => 37,  57 => 36,  55 => 35,  52 => 34,  50 => 33,  47 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/setup/sessiontracker/sessiontracker.html.twig", "/var/www/html/glpi/templates/pages/setup/sessiontracker/sessiontracker.html.twig");
    }
}
