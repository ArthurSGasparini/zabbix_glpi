<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/Security/Session/All/Revoke' => [[['_route' => 'security_sessions_revokeall', '_controller' => 'Glpi\\Controller\\Security\\SessionTrackerController::revokeAllSessions'], null, ['POST' => 0], null, false, false, null]],
        '/Altcha/Challenge' => [[['_route' => 'glpi_altcha_challenge', '_controller' => 'Glpi\\Controller\\Altcha\\ChallengeController'], null, ['GET' => 0], null, false, false, null]],
        '/front/central.php' => [[['_route' => 'front_central_legacy', '_controller' => 'Glpi\\Controller\\CentralController'], null, null, null, false, false, null]],
        '/Central' => [[['_route' => 'front_central', '_controller' => 'Glpi\\Controller\\CentralController'], null, null, null, false, false, null]],
        '/front/config/dataandprivacyconfig.form.php' => [
            [['_route' => 'data_privacy_config_form', '_controller' => 'Glpi\\Controller\\Config\\DataAndPrivacyConfigController::showForm'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'update_data_privacy_config_form', '_controller' => 'Glpi\\Controller\\Config\\DataAndPrivacyConfigController::handleFormSubmission'], null, ['POST' => 0], null, false, false, null],
        ],
        '/Config/Helpdesk/AddTile' => [[['_route' => 'glpi_config_helpdesk_add_tile', '_controller' => 'Glpi\\Controller\\Config\\Helpdesk\\AddTileController'], null, ['POST' => 0], null, false, false, null]],
        '/Config/Helpdesk/CopyParentEntity' => [[['_route' => 'glpi_config_helpdesk_copy_parent_entity', '_controller' => 'Glpi\\Controller\\Config\\Helpdesk\\CopyParentEntityController'], null, ['POST' => 0], null, false, false, null]],
        '/Config/Helpdesk/DeleteTile' => [[['_route' => 'glpi_config_helpdesk_delete_tile', '_controller' => 'Glpi\\Controller\\Config\\Helpdesk\\DeleteTileController'], null, ['POST' => 0], null, false, false, null]],
        '/Config/Helpdesk/SetTilesOrder' => [[['_route' => 'glpi_config_helpdesk_set_tiles_order', '_controller' => 'Glpi\\Controller\\Config\\Helpdesk\\SetTilesOrderController'], null, ['POST' => 0], null, false, false, null]],
        '/Config/Helpdesk/ShowAddTileForm' => [[['_route' => 'glpi_config_helpdesk_show_add_tile_form', '_controller' => 'Glpi\\Controller\\Config\\Helpdesk\\ShowAddTileFormController'], null, ['GET' => 0], null, false, false, null]],
        '/Config/Helpdesk/ShowEditTileForm' => [[['_route' => 'glpi_config_helpdesk_show_edit_tile_form', '_controller' => 'Glpi\\Controller\\Config\\Helpdesk\\ShowEditTileFormController'], null, ['GET' => 0], null, false, false, null]],
        '/Config/Helpdesk/UpdateTile' => [[['_route' => 'glpi_config_helpdesk_update_tile', '_controller' => 'Glpi\\Controller\\Config\\Helpdesk\\UpdateTileController'], null, ['POST' => 0], null, false, false, null]],
        '/Form/AllowListDropdown/CountUsers' => [[['_route' => 'form_allow_list_dropdown_count_users', '_controller' => 'Glpi\\Controller\\Form\\AllowListDropdown\\CountUsersController'], null, ['GET' => 0], null, false, false, null]],
        '/Form/Condition/Visibility/Editor' => [[['_route' => 'glpi_form_condition_visibility_editor', '_controller' => 'Glpi\\Controller\\Form\\Condition\\EditorController::visibilityEditor'], null, ['POST' => 0], null, false, false, null]],
        '/Form/Condition/Validation/Editor' => [[['_route' => 'glpi_form_condition_validation_editor', '_controller' => 'Glpi\\Controller\\Form\\Condition\\EditorController::validationEditor'], null, ['POST' => 0], null, false, false, null]],
        '/Form/Condition/Editor/SupportedValueOperators' => [[['_route' => 'glpi_form_condition_editor_supported_value_operators', '_controller' => 'Glpi\\Controller\\Form\\Condition\\EditorController::supportedValueOperators'], null, ['POST' => 0], null, false, false, null]],
        '/Form/Condition/Engine' => [[['_route' => 'glpi_form_condition_engine', '_controller' => 'Glpi\\Controller\\Form\\Condition\\EngineController'], null, ['POST' => 0], null, false, false, null]],
        '/Form/Delegation' => [[['_route' => 'glpi_form_delegation', '_controller' => 'Glpi\\Controller\\Form\\DelegationController'], null, ['GET' => 0], null, false, false, null]],
        '/Form/Export' => [[['_route' => 'glpi_form_export', '_controller' => 'Glpi\\Controller\\Form\\ExportController'], null, null, null, false, false, null]],
        '/Form/Import' => [[['_route' => 'glpi_form_import', '_controller' => 'Glpi\\Controller\\Form\\Import\\Step1IndexController'], null, ['GET' => 0], null, false, false, null]],
        '/Form/Import/Preview' => [[['_route' => 'glpi_form_import_preview', '_controller' => 'Glpi\\Controller\\Form\\Import\\Step2PreviewController'], null, ['POST' => 0], null, false, false, null]],
        '/Form/Import/ResolveIssues' => [[['_route' => 'glpi_form_import_resolve_issues', '_controller' => 'Glpi\\Controller\\Form\\Import\\Step3ResolveIssuesController'], null, ['POST' => 0], null, false, false, null]],
        '/Form/Import/Execute' => [[['_route' => 'glpi_form_import_execute', '_controller' => 'Glpi\\Controller\\Form\\Import\\Step4ExecuteController'], null, ['POST' => 0], null, false, false, null]],
        '/Form/Question/ActorsDropdown' => [[['_route' => 'glpi_form_question_actors_dropdown_value', '_controller' => 'Glpi\\Controller\\Form\\QuestionActorsDropdownController'], null, ['POST' => 0], null, false, false, null]],
        '/Form/Question/DropdownValues' => [[['_route' => 'glpi_form_question_dropdown_values', '_controller' => 'Glpi\\Controller\\Form\\QuestionDropdownValuesController'], null, ['POST' => 0], null, false, false, null]],
        '/Form/SubmitAnswers' => [[['_route' => 'glpi_form_submit_answers', '_controller' => 'Glpi\\Controller\\Form\\SubmitAnswerController'], null, ['POST' => 0], null, false, false, null]],
        '/Form/TagList' => [[['_route' => 'glpi_form_tags_list', '_controller' => 'Glpi\\Controller\\Form\\TagListController'], null, ['GET' => 0], null, false, false, null]],
        '/Form/ValidateAnswers' => [[['_route' => 'glpi_form_validate_answers', '_controller' => 'Glpi\\Controller\\Form\\ValidateAnswerController'], null, ['POST' => 0], null, false, false, null]],
        '/GenericAjaxCrud' => [[['_route' => 'glpi_generic_ajax_crud', '_controller' => 'Glpi\\Controller\\GenericAjaxCrudController'], null, null, null, false, false, null]],
        '/Helpdesk' => [[['_route' => 'glpi_helpdesk_index', '_controller' => 'Glpi\\Controller\\Helpdesk\\IndexController'], null, ['GET' => 0], null, false, false, null]],
        '/Helpdesk/Search' => [[['_route' => 'glpi_helpdesk_search', '_controller' => 'Glpi\\Controller\\Helpdesk\\SearchController'], null, ['GET' => 0], null, false, false, null]],
        '/Helpdesk/Translation/Add' => [[['_route' => 'glpi_add_helpdesk_translation', '_controller' => 'Glpi\\Controller\\Helpdesk\\Translation\\AddNewHelpdeskTranslationController'], null, ['POST' => 0], null, false, false, null]],
        '/' => [[['_route' => 'glpi_index', '_controller' => 'Glpi\\Controller\\IndexController', '_locale' => 'base'], null, null, null, false, false, null]],
        '/index.php' => [[['_route' => 'glpi_index', '_controller' => 'Glpi\\Controller\\IndexController', '_locale' => 'legacy_index_file'], null, null, null, false, false, null]],
        '/Install/InitDatabase' => [[['_route' => 'glpi_install_initdatabase', '_controller' => 'Glpi\\Controller\\InstallController::initDatabase'], null, ['POST' => 0], null, false, false, null]],
        '/Install/UpdateDatabase' => [[['_route' => 'glpi_install_updatedatabase', '_controller' => 'Glpi\\Controller\\InstallController::updateDatabase'], null, ['POST' => 0], null, false, false, null]],
        '/Inventory' => [[['_route' => 'glpi_inventory', '_controller' => 'Glpi\\Controller\\InventoryController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/front/inventory.php' => [[['_route' => 'glpi_inventory_legacy', '_controller' => 'Glpi\\Controller\\InventoryController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/Inventory/RefusedEquipment' => [[['_route' => 'glpi_refused_inventory', '_controller' => 'Glpi\\Controller\\InventoryController::refusedEquipement'], null, ['POST' => 0], null, false, false, null]],
        '/Inventory/Configuration' => [[['_route' => 'glpi_inventory_configuration', '_controller' => 'Glpi\\Controller\\InventoryController::configure'], null, ['GET' => 0], null, false, false, null]],
        '/front/inventory.conf.php' => [
            [['_route' => 'glpi_inventory_configuration_legacy', '_controller' => 'Glpi\\Controller\\InventoryController::configure'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'glpi_inventory_store_configuration_legacy', '_controller' => 'Glpi\\Controller\\InventoryController::storeConfiguration'], null, ['POST' => 0], null, false, false, null],
        ],
        '/Inventory/Configuration/Store' => [[['_route' => 'glpi_inventory_store_configuration', '_controller' => 'Glpi\\Controller\\InventoryController::storeConfiguration'], null, ['POST' => 0], null, false, false, null]],
        '/Inventory/ImportFiles' => [[['_route' => 'glpi_inventory_report', '_controller' => 'Glpi\\Controller\\InventoryController::report'], null, ['POST' => 0], null, false, false, null]],
        '/front/authmail.form.php' => [[['_route' => 'glpi_itemtype_authmail_form', '_controller' => 'Glpi\\Controller\\ItemType\\Form\\AuthMailFormController'], null, null, null, false, false, null]],
        '/front/contact.form.php' => [[['_route' => 'glpi_itemtype_contact_form', '_controller' => 'Glpi\\Controller\\ItemType\\Form\\ContactFormController'], null, null, null, false, false, null]],
        '/front/mailcollector.form.php' => [[['_route' => 'glpi_itemtype_mailcollector_form', '_controller' => 'Glpi\\Controller\\ItemType\\Form\\MailCollectorFormController'], null, null, null, false, false, null]],
        '/front/plug.form.php' => [[['_route' => 'glpi_itemtype_plug_form', '_controller' => 'Glpi\\Controller\\ItemType\\Form\\PlugFormController'], null, null, null, false, false, null]],
        '/front/savedsearch.form.php' => [[['_route' => 'glpi_itemtype_savedsearch_form', '_controller' => 'Glpi\\Controller\\ItemType\\Form\\SavedSearchFormController'], null, null, null, false, false, null]],
        '/front/plug.php' => [[['_route' => 'glpi_itemtype_plug_list', '_controller' => 'Glpi\\Controller\\ItemType\\List\\PlugListController'], null, null, null, false, false, null]],
        '/Knowbase/AddPermission' => [[['_route' => 'glpi_knowbaseitem_add_permission', '_controller' => 'Glpi\\Controller\\Knowbase\\AddPermissionController'], null, ['POST' => 0], null, false, false, null]],
        '/Knowbase/Aside/Search' => [[['_route' => 'knowbase_aside_search', '_controller' => 'Glpi\\Controller\\Knowbase\\AsideSearchController'], null, ['GET' => 0], null, false, false, null]],
        '/Knowbase/KnowbaseItem/Create' => [[['_route' => 'knowbase_article_create', '_controller' => 'Glpi\\Controller\\Knowbase\\CreateArticleController'], null, ['POST' => 0], null, false, false, null]],
        '/Knowbase/PermissionDropdown' => [[['_route' => 'knowbase_permission_dropdown', '_controller' => 'Glpi\\Controller\\Knowbase\\PermissionDropdownController'], null, ['POST' => 0], null, false, false, null]],
        '/Knowbase/PermissionSubvisibility' => [[['_route' => 'knowbase_permission_subvisibility', '_controller' => 'Glpi\\Controller\\Knowbase\\PermissionSubvisibilityController'], null, ['POST' => 0], null, false, false, null]],
        '/MFA/Setup' => [[['_route' => 'mfa_setup', '_controller' => 'Glpi\\Controller\\Security\\MFAController::setup'], null, null, null, false, false, null]],
        '/MFA/Prompt' => [[['_route' => 'mfa_prompt', '_controller' => 'Glpi\\Controller\\Security\\MFAController::prompt'], null, ['GET' => 0], null, false, false, null]],
        '/MFA/Verify' => [[['_route' => 'mfa_verify_totp', '_controller' => 'Glpi\\Controller\\Security\\MFAController::verify'], null, ['POST' => 0], null, false, false, null]],
        '/MFA/ShowBackupCodes' => [[['_route' => 'mfa_show_status', '_controller' => 'Glpi\\Controller\\Security\\MFAController::showBackupCodes'], null, ['GET' => 0], null, false, false, null]],
        '/ReAuth/Prompt' => [[['_route' => 'reauth_prompt', '_controller' => 'Glpi\\Controller\\Security\\ReAuthController::prompt'], null, ['GET' => 0], null, false, false, null]],
        '/ReAuth/Verify' => [[['_route' => 'reauth_verify', '_controller' => 'Glpi\\Controller\\Security\\ReAuthController::verify'], null, ['POST' => 0], null, false, false, null]],
        '/ReAuth/CAS' => [[['_route' => 'reauth_cas_start', '_controller' => 'Glpi\\Controller\\Security\\Reauth\\CASController::casStart'], null, ['GET' => 0], null, false, false, null]],
        '/ReAuth/CAS/Callback' => [[['_route' => 'reauth_cas_callback', '_controller' => 'Glpi\\Controller\\Security\\Reauth\\CASController::casCallback'], null, ['GET' => 0], null, false, false, null]],
        '/front/security/securityconfig.form.php' => [
            [['_route' => 'security_config_form', '_controller' => 'Glpi\\Controller\\Security\\SecurityConfigController::showForm'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'update_security_config_form', '_controller' => 'Glpi\\Controller\\Security\\SecurityConfigController::handleFormSubmission'], null, ['POST' => 0], null, false, false, null],
        ],
        '/ServiceCatalog' => [[['_route' => 'glpi_service_catalog', '_controller' => 'Glpi\\Controller\\ServiceCatalog\\IndexController'], null, ['GET' => 0], null, false, false, null]],
        '/ServiceCatalog/Items' => [[['_route' => 'glpi_form_list', '_controller' => 'Glpi\\Controller\\ServiceCatalog\\ItemsController'], null, ['GET' => 0], null, false, false, null]],
        '/Session/ChangeEntity' => [[['_route' => 'glpi_change_entity', '_controller' => 'Glpi\\Controller\\Session\\ChangeEntityController'], null, ['POST' => 0], null, false, false, null]],
        '/Session/ChangeProfile' => [[['_route' => 'glpi_change_profile', '_controller' => 'Glpi\\Controller\\Session\\ChangeProfileController'], null, ['POST' => 0], null, false, false, null]],
        '/status.php' => [[['_route' => 'glpi_status', '_controller' => 'Glpi\\Controller\\StatusController'], null, null, null, false, false, null]],
        '/UI/Illustration/Search' => [[['_route' => 'glpi_ui_illustration_search', '_controller' => 'Glpi\\Controller\\UI\\Illustration\\SearchController'], null, null, null, false, false, null]],
        '/UI/Illustration/Upload' => [[['_route' => 'glpi_ui_illustration_upload', '_controller' => 'Glpi\\Controller\\UI\\Illustration\\UploadController'], null, ['POST' => 0], null, false, false, null]],
        '/.well-known/change-password' => [[['_route' => 'glpi_wellknown_change_password', '_controller' => 'Glpi\\Controller\\WellKnownController::changePassword'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api(?'
                    .'|\\.php(.*)(*:23)'
                    .'|rest\\.php(.*)(*:43)'
                .')'
                .'|/caldav\\.php(.*)(*:67)'
                .'|/AuthLDAP/(\\d+)/Replica/(\\d+)/Test(*:108)'
                .'|/DCRoom/(\\d+)/AxisLabel(*:139)'
                .'|/Form/(?'
                    .'|([^/]++)/Destination(?'
                        .'|/(?'
                            .'|Add(*:186)'
                            .'|([^/]++)/(?'
                                .'|Purge(*:211)'
                                .'|Update(*:225)'
                            .')'
                        .')'
                        .'|s/([^/]++)(*:245)'
                    .')'
                    .'|Render/(\\d+)(*:266)'
                    .'|Translation/([^/]++)/(?'
                        .'|Add(*:301)'
                        .'|([^/]++)(?'
                            .'|/Delete(*:327)'
                            .'|(*:335)'
                        .')'
                    .')'
                .')'
                .'|/Helpdesk/Translation/([^/]++)(?'
                    .'|/Delete(*:386)'
                    .'|(*:394)'
                .')'
                .'|/Knowbase/(?'
                    .'|(\\d+)/AddComment(*:432)'
                    .'|(\\d+)/AsideActions(*:458)'
                    .'|Aside/Article/(?'
                        .'|(\\d+)/Children(*:497)'
                        .'|(\\d+)/Fold(*:515)'
                    .')'
                    .'|(\\d+)/CompareRevision/(\\d+)(*:551)'
                    .'|(\\d+)/CompareTranslationRevision/(\\d+)(*:597)'
                    .'|KnowbaseItem/(?'
                        .'|(\\d+)/Delete(*:633)'
                        .'|(\\d+)/Translation/([^/]++)/Delete(*:674)'
                        .'|(\\d+)/Translation/([^/]++)(*:708)'
                    .')'
                    .'|(\\d+)/HistoryPage/(\\d+)(*:740)'
                    .'|KnowbaseItem/(?'
                        .'|(\\d+)/Content(*:777)'
                        .'|(\\d+)/Full(*:795)'
                        .'|(\\d+)/Answer(*:815)'
                        .'|Search/([^/]++)/(\\d+)(*:844)'
                        .'|Permission/(KnowbaseItem_User|Group_KnowbaseItem|Entity_KnowbaseItem|KnowbaseItem_Profile)/(\\d+)(*:948)'
                    .')'
                    .'|(\\d+)/LinkDocuments(*:976)'
                    .'|(\\d+)/LinkItem(*:998)'
                    .'|(\\d+)/LinkItemModal(*:1025)'
                    .'|KnowbaseItem/(\\d+)/Languages(*:1062)'
                    .'|Aside/Article/(\\d+)/Move(*:1095)'
                    .'|(\\d+)/MoveModal(*:1119)'
                    .'|PurgeComment/(\\d+)(*:1146)'
                    .'|(\\d+)/RevertTo/(\\d+)(*:1175)'
                    .'|(\\d+)/RevertTranslationRevision/(\\d+)(*:1221)'
                    .'|KnowbaseItem/(\\d+)/Translation(*:1260)'
                    .'|(\\d+)/SidePanel/([^/]++)(*:1293)'
                    .'|(\\d+)/ToggleFavorite(*:1322)'
                    .'|(\\d+)/ToggleField(*:1348)'
                    .'|U(?'
                        .'|nlink(?'
                            .'|Document/(\\d+)(*:1383)'
                            .'|Item/(\\d+)(*:1402)'
                        .')'
                        .'|pdateComment/(\\d+)(*:1430)'
                    .')'
                    .'|(\\d+)/UpdateServiceCatalog(*:1466)'
                    .'|(\\d+)/UpdateVisibilityDates(*:1502)'
                    .'|(\\d+)/UploadDocuments(*:1532)'
                    .'|(\\d+)/UploadInlineImage(*:1564)'
                .')'
                .'|/Plugin/([^/]++)/Logo(*:1595)'
                .'|/progress/check/([^/]++)(*:1628)'
                .'|/S(?'
                    .'|ecurity/(?'
                        .'|Session/([^/]++)/Revoke(*:1676)'
                        .'|AccessToken/([^/]++)/Revoke(*:1712)'
                    .')'
                    .'|hare/(?'
                        .'|([0-9a-f]{64})(*:1744)'
                        .'|Token/(?'
                            .'|([^/]++)/(\\d+)(?'
                                .'|(*:1779)'
                            .')'
                            .'|(\\d+)/Toggle(*:1801)'
                            .'|(\\d+)/Regenerate(*:1826)'
                            .'|(\\d+)/Delete(*:1847)'
                        .')'
                    .')'
                .')'
                .'|/U(?'
                    .'|I/Illustration/Custom(?'
                        .'|Illustration/([^/]++)(*:1909)'
                        .'|Scene/([^/]++)(*:1932)'
                    .')'
                    .'|ser/InfoCard/([^/]++)(*:1963)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        23 => [[['_route' => 'glpi_api', '_controller' => 'Glpi\\Controller\\ApiController'], ['request_parameters'], null, null, false, true, null]],
        43 => [[['_route' => 'glpi_api_rest', '_controller' => 'Glpi\\Controller\\ApiRestController'], ['request_parameters'], null, null, false, true, null]],
        67 => [[['_route' => 'glpi_caldav', '_controller' => 'Glpi\\Controller\\CaldavController'], ['request_parameters'], null, null, false, true, null]],
        108 => [[['_route' => 'authldap_replica_status', '_controller' => 'Glpi\\Controller\\Config\\LDAPController::testReplica'], ['authldaps_id', 'authldapreplicates_id'], ['POST' => 0], null, false, false, null]],
        139 => [[['_route' => 'glpi_dcroom_axis_label_update', '_controller' => 'Glpi\\Controller\\DCRoom\\UpdateAxisLabelController'], ['id'], ['POST' => 0], null, false, false, null]],
        186 => [[['_route' => 'glpi_form_destination_add', '_controller' => 'Glpi\\Controller\\Form\\Destination\\AddDestinationController'], ['form_id'], ['POST' => 0], null, false, false, null]],
        211 => [[['_route' => 'glpi_form_destination_purge', '_controller' => 'Glpi\\Controller\\Form\\Destination\\PurgeDestinationController'], ['form_id', 'destination_id'], ['POST' => 0], null, false, false, null]],
        225 => [[['_route' => 'glpi_form_destination_update', '_controller' => 'Glpi\\Controller\\Form\\Destination\\UpdateDestinationController'], ['form_id', 'destination_id'], ['POST' => 0], null, false, false, null]],
        245 => [[['_route' => 'glpi_form_destination_get_form', '_controller' => 'Glpi\\Controller\\Form\\Destination\\GetDestinationFormController'], ['form_id', 'destination_id'], ['GET' => 0], null, false, true, null]],
        266 => [[['_route' => 'glpi_form_render', '_controller' => 'Glpi\\Controller\\Form\\RendererController'], ['id'], ['GET' => 0], null, false, true, null]],
        301 => [[['_route' => 'glpi_add_form_translation', '_controller' => 'Glpi\\Controller\\Form\\Translation\\AddNewFormTranslationController'], ['form_id'], ['POST' => 0], null, false, false, null]],
        327 => [[['_route' => 'glpi_delete_form_translation', '_controller' => 'Glpi\\Controller\\Form\\Translation\\DeleteFormTranslationController'], ['form_id', 'language'], ['POST' => 0], null, false, false, null]],
        335 => [
            [['_route' => 'glpi_get_form_translation', '_controller' => 'Glpi\\Controller\\Form\\Translation\\GetFormTranslationController'], ['form_id', 'language'], ['GET' => 0], null, false, true, null],
            [['_route' => 'glpi_update_form_translation', '_controller' => 'Glpi\\Controller\\Form\\Translation\\UpdateFormTranslationController'], ['form_id', 'language'], ['POST' => 0], null, false, true, null],
        ],
        386 => [[['_route' => 'glpi_delete_helpdesk_translation', '_controller' => 'Glpi\\Controller\\Helpdesk\\Translation\\DeleteHelpdeskTranslationController'], ['language'], ['POST' => 0], null, false, false, null]],
        394 => [[['_route' => 'glpi_update_helpdesk_translation', '_controller' => 'Glpi\\Controller\\Helpdesk\\Translation\\UpdateHelpdeskTranslationController'], ['language'], ['POST' => 0], null, false, true, null]],
        432 => [[['_route' => 'knowbase_article_add_comment', '_controller' => 'Glpi\\Controller\\Knowbase\\AddCommentController'], ['id'], ['POST' => 0], null, false, false, null]],
        458 => [[['_route' => 'knowbase_aside_actions', '_controller' => 'Glpi\\Controller\\Knowbase\\AsideActionsController'], ['id'], ['GET' => 0], null, false, false, null]],
        497 => [[['_route' => 'knowbase_aside_article_children', '_controller' => 'Glpi\\Controller\\Knowbase\\AsideArticleChildrenController'], ['id'], ['GET' => 0], null, false, false, null]],
        515 => [[['_route' => 'knowbase_aside_article_fold', '_controller' => 'Glpi\\Controller\\Knowbase\\AsideArticleFoldController'], ['id'], ['POST' => 0], null, false, false, null]],
        551 => [[['_route' => 'knowbase_article_compare_revision', '_controller' => 'Glpi\\Controller\\Knowbase\\CompareRevisionController'], ['id', 'revision_id'], ['GET' => 0], null, false, true, null]],
        597 => [[['_route' => 'knowbase_article_compare_translation_revision', '_controller' => 'Glpi\\Controller\\Knowbase\\CompareTranslationRevisionController'], ['id', 'revision_id'], ['GET' => 0], null, false, true, null]],
        633 => [[['_route' => 'knowbase_article_delete', '_controller' => 'Glpi\\Controller\\Knowbase\\DeleteArticleController'], ['id'], ['POST' => 0], null, false, false, null]],
        674 => [[['_route' => 'knowbaseitem_translation_delete', '_controller' => 'Glpi\\Controller\\Knowbase\\DeleteTranslationController'], ['knowbaseitems_id', 'language'], ['POST' => 0], null, false, false, null]],
        708 => [[['_route' => 'knowbaseitem_translation_content', '_controller' => 'Glpi\\Controller\\Knowbase\\GetTranslationContentController'], ['knowbaseitems_id', 'language'], null, null, false, true, null]],
        740 => [[['_route' => 'knowbase_article_history_page', '_controller' => 'Glpi\\Controller\\Knowbase\\HistoryPageController'], ['id', 'offset'], ['GET' => 0], null, false, true, null]],
        777 => [[['_route' => 'knowbaseitem_content', '_controller' => 'Glpi\\Controller\\Knowbase\\KnowbaseItemController::content'], ['knowbaseitems_id'], null, null, false, false, null]],
        795 => [[['_route' => 'knowbaseitem_full', '_controller' => 'Glpi\\Controller\\Knowbase\\KnowbaseItemController::full'], ['knowbaseitems_id'], null, null, false, false, null]],
        815 => [[['_route' => 'knowbaseitem_update_answer', '_controller' => 'Glpi\\Controller\\Knowbase\\KnowbaseItemController::updateAnswer'], ['knowbaseitems_id'], ['POST' => 0], null, false, false, null]],
        844 => [[['_route' => 'knowbaseitem_search', '_controller' => 'Glpi\\Controller\\Knowbase\\KnowbaseItemController::search'], ['itemtype', 'items_id'], null, null, false, true, null]],
        948 => [[['_route' => 'knowbaseitem_delete_permission', '_controller' => 'Glpi\\Controller\\Knowbase\\KnowbaseItemController::deletePermission'], ['itemtype', 'permission_id'], ['POST' => 0], null, false, true, null]],
        976 => [[['_route' => 'knowbase_link_documents', '_controller' => 'Glpi\\Controller\\Knowbase\\LinkDocumentController'], ['id'], ['POST' => 0], null, false, false, null]],
        998 => [[['_route' => 'knowbase_link_item', '_controller' => 'Glpi\\Controller\\Knowbase\\LinkItemController'], ['id'], ['POST' => 0], null, false, false, null]],
        1025 => [[['_route' => 'knowbase_link_item_modal', '_controller' => 'Glpi\\Controller\\Knowbase\\LinkItemModalController'], ['id'], null, null, false, false, null]],
        1062 => [[['_route' => 'knowbaseitem_languages', '_controller' => 'Glpi\\Controller\\Knowbase\\ListTranslationLanguagesController'], ['knowbaseitems_id'], null, null, false, false, null]],
        1095 => [[['_route' => 'knowbase_aside_article_move', '_controller' => 'Glpi\\Controller\\Knowbase\\MoveArticleController'], ['id'], ['POST' => 0], null, false, false, null]],
        1119 => [[['_route' => 'knowbase_move_modal', '_controller' => 'Glpi\\Controller\\Knowbase\\MoveModalController'], ['id'], ['GET' => 0], null, false, false, null]],
        1146 => [[['_route' => 'knowbase_purge_comment', '_controller' => 'Glpi\\Controller\\Knowbase\\PurgeCommentController'], ['id'], ['POST' => 0], null, false, true, null]],
        1175 => [[['_route' => 'knowbase_article_revert_revision', '_controller' => 'Glpi\\Controller\\Knowbase\\RevertRevisionController'], ['id', 'revision_id'], ['POST' => 0], null, false, true, null]],
        1221 => [[['_route' => 'knowbase_article_revert_translation_revision', '_controller' => 'Glpi\\Controller\\Knowbase\\RevertTranslationRevisionController'], ['id', 'revision_id'], ['POST' => 0], null, false, true, null]],
        1260 => [[['_route' => 'knowbaseitem_translation_save', '_controller' => 'Glpi\\Controller\\Knowbase\\SaveTranslationController'], ['knowbaseitems_id'], ['POST' => 0], null, false, false, null]],
        1293 => [[['_route' => 'knowbase_side_panel', '_controller' => 'Glpi\\Controller\\Knowbase\\SidePanelController'], ['id', 'key'], null, null, false, true, null]],
        1322 => [[['_route' => 'knowbase_toggle_favorite', '_controller' => 'Glpi\\Controller\\Knowbase\\ToggleFavoriteController'], ['id'], ['POST' => 0], null, false, false, null]],
        1348 => [[['_route' => 'knowbase_toggle_field', '_controller' => 'Glpi\\Controller\\Knowbase\\ToggleFieldController'], ['id'], ['POST' => 0], null, false, false, null]],
        1383 => [[['_route' => 'knowbase_unlink_document', '_controller' => 'Glpi\\Controller\\Knowbase\\UnlinkDocumentController'], ['id'], ['POST' => 0], null, false, true, null]],
        1402 => [[['_route' => 'knowbase_unlink_item', '_controller' => 'Glpi\\Controller\\Knowbase\\UnlinkItemController'], ['id'], ['POST' => 0], null, false, true, null]],
        1430 => [[['_route' => 'knowbase_update_comment', '_controller' => 'Glpi\\Controller\\Knowbase\\UpdateCommentController'], ['id'], ['POST' => 0], null, false, true, null]],
        1466 => [[['_route' => 'knowbase_item_update_service_catalog', '_controller' => 'Glpi\\Controller\\Knowbase\\UpdateServiceCatalogController'], ['id'], ['POST' => 0], null, false, false, null]],
        1502 => [[['_route' => 'knowbase_update_visibility_dates', '_controller' => 'Glpi\\Controller\\Knowbase\\UpdateVisibilityDatesController'], ['id'], ['POST' => 0], null, false, false, null]],
        1532 => [[['_route' => 'knowbase_upload_documents', '_controller' => 'Glpi\\Controller\\Knowbase\\UploadDocumentsController'], ['id'], ['POST' => 0], null, false, false, null]],
        1564 => [[['_route' => 'knowbase_upload_inline_image', '_controller' => 'Glpi\\Controller\\Knowbase\\UploadInlineImageController'], ['knowbaseitems_id'], ['POST' => 0], null, false, false, null]],
        1595 => [[['_route' => 'glpi_plugin_logo', '_controller' => 'Glpi\\Controller\\Plugin\\LogoController'], ['plugin_key'], ['GET' => 0], null, false, false, null]],
        1628 => [[['_route' => 'glpi_progress_check', '_controller' => 'Glpi\\Controller\\ProgressController::check'], ['key'], ['GET' => 0], null, false, true, null]],
        1676 => [[['_route' => 'security_sessions_revoke', '_controller' => 'Glpi\\Controller\\Security\\SessionTrackerController::revokeSession'], ['login_session_uid'], ['POST' => 0], null, false, false, null]],
        1712 => [[['_route' => 'security_accesstoken_revoke', '_controller' => 'Glpi\\Controller\\Security\\SessionTrackerController::revokeAccessToken'], ['uuid'], ['POST' => 0], null, false, false, null]],
        1744 => [[['_route' => 'glpi_share_access', '_controller' => 'Glpi\\Controller\\ShareAccessController'], ['token'], ['GET' => 0], null, false, true, null]],
        1779 => [
            [['_route' => 'glpi_share_token_list', '_controller' => 'Glpi\\Controller\\ShareTokenController::list'], ['itemtype', 'items_id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'glpi_share_token_create', '_controller' => 'Glpi\\Controller\\ShareTokenController::create'], ['itemtype', 'items_id'], ['POST' => 0], null, false, true, null],
        ],
        1801 => [[['_route' => 'glpi_share_token_toggle', '_controller' => 'Glpi\\Controller\\ShareTokenController::toggle'], ['token_id'], ['POST' => 0], null, false, false, null]],
        1826 => [[['_route' => 'glpi_share_token_regenerate', '_controller' => 'Glpi\\Controller\\ShareTokenController::regenerate'], ['token_id'], ['POST' => 0], null, false, false, null]],
        1847 => [[['_route' => 'glpi_share_token_delete', '_controller' => 'Glpi\\Controller\\ShareTokenController::delete'], ['token_id'], ['POST' => 0], null, false, false, null]],
        1909 => [[['_route' => 'glpi_ui_illustration_custom_illustration', '_controller' => 'Glpi\\Controller\\UI\\Illustration\\CustomIllustrationController'], ['id'], ['GET' => 0], null, false, true, null]],
        1932 => [[['_route' => 'glpi_ui_illustration_custom_scene', '_controller' => 'Glpi\\Controller\\UI\\Illustration\\CustomSceneController'], ['id'], ['GET' => 0], null, false, true, null]],
        1963 => [
            [['_route' => 'glpi_user_info_card', '_controller' => 'Glpi\\Controller\\User\\InfoCardController'], ['users_id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
