<?php

namespace ContainerHcl3agw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/*
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class OpenCFPProductionProjectContainer extends Container
{
    private $parameters;
    private $targetDirs = array();

    public function __construct()
    {
        $dir = $this->targetDirs[0] = \dirname(__DIR__);
        for ($i = 1; $i <= 1; ++$i) {
            $this->targetDirs[$i] = $dir = \dirname($dir);
        }
        $this->parameters = $this->getDefaultParameters();

        $this->services = array();
        $this->normalizedIds = array(
            'cartalyst\\sentinel\\sentinel' => 'Cartalyst\\Sentinel\\Sentinel',
            'htmlpurifier' => 'HTMLPurifier',
            'illuminate\\database\\capsule\\manager' => 'Illuminate\\Database\\Capsule\\Manager',
            'illuminate\\database\\databasemanager' => 'Illuminate\\Database\\DatabaseManager',
            'opencfp\\application\\speakers' => 'OpenCFP\\Application\\Speakers',
            'opencfp\\domain\\callforpapers' => 'OpenCFP\\Domain\\CallForPapers',
            'opencfp\\domain\\services\\accountmanagement' => 'OpenCFP\\Domain\\Services\\AccountManagement',
            'opencfp\\domain\\services\\identityprovider' => 'OpenCFP\\Domain\\Services\\IdentityProvider',
            'opencfp\\domain\\talk\\talkfilter' => 'OpenCFP\\Domain\\Talk\\TalkFilter',
            'opencfp\\domain\\talk\\talkformatter' => 'OpenCFP\\Domain\\Talk\\TalkFormatter',
            'opencfp\\domain\\talk\\talkhandler' => 'OpenCFP\\Domain\\Talk\\TalkHandler',
            'opencfp\\http\\action\\admin\\dashboardaction' => 'OpenCFP\\Http\\Action\\Admin\\DashboardAction',
            'opencfp\\http\\action\\admin\\speaker\\promoteaction' => 'OpenCFP\\Http\\Action\\Admin\\Speaker\\PromoteAction',
            'opencfp\\http\\action\\admin\\talk\\indexaction' => 'OpenCFP\\Http\\Action\\Admin\\Talk\\IndexAction',
            'opencfp\\http\\action\\admin\\talk\\rateaction' => 'OpenCFP\\Http\\Action\\Admin\\Talk\\RateAction',
            'opencfp\\http\\action\\admin\\talk\\viewaction' => 'OpenCFP\\Http\\Action\\Admin\\Talk\\ViewAction',
            'opencfp\\http\\action\\dashboardaction' => 'OpenCFP\\Http\\Action\\DashboardAction',
            'opencfp\\http\\action\\forgot\\indexaction' => 'OpenCFP\\Http\\Action\\Forgot\\IndexAction',
            'opencfp\\http\\action\\forgot\\resetprocessaction' => 'OpenCFP\\Http\\Action\\Forgot\\ResetProcessAction',
            'opencfp\\http\\action\\forgot\\updatepasswordaction' => 'OpenCFP\\Http\\Action\\Forgot\\UpdatePasswordAction',
            'opencfp\\http\\action\\page\\homepageaction' => 'OpenCFP\\Http\\Action\\Page\\HomePageAction',
            'opencfp\\http\\action\\profile\\changepasswordprocessaction' => 'OpenCFP\\Http\\Action\\Profile\\ChangePasswordProcessAction',
            'opencfp\\http\\action\\reviewer\\dashboardaction' => 'OpenCFP\\Http\\Action\\Reviewer\\DashboardAction',
            'opencfp\\http\\action\\reviewer\\speaker\\indexaction' => 'OpenCFP\\Http\\Action\\Reviewer\\Speaker\\IndexAction',
            'opencfp\\http\\action\\reviewer\\speaker\\viewaction' => 'OpenCFP\\Http\\Action\\Reviewer\\Speaker\\ViewAction',
            'opencfp\\http\\action\\reviewer\\talk\\indexaction' => 'OpenCFP\\Http\\Action\\Reviewer\\Talk\\IndexAction',
            'opencfp\\http\\action\\reviewer\\talk\\rateaction' => 'OpenCFP\\Http\\Action\\Reviewer\\Talk\\RateAction',
            'opencfp\\http\\action\\reviewer\\talk\\viewaction' => 'OpenCFP\\Http\\Action\\Reviewer\\Talk\\ViewAction',
            'opencfp\\http\\action\\security\\loginaction' => 'OpenCFP\\Http\\Action\\Security\\LogInAction',
            'opencfp\\http\\action\\security\\logoutaction' => 'OpenCFP\\Http\\Action\\Security\\LogOutAction',
            'opencfp\\http\\action\\signup\\indexaction' => 'OpenCFP\\Http\\Action\\Signup\\IndexAction',
            'opencfp\\http\\action\\signup\\processaction' => 'OpenCFP\\Http\\Action\\Signup\\ProcessAction',
            'opencfp\\http\\action\\talk\\createaction' => 'OpenCFP\\Http\\Action\\Talk\\CreateAction',
            'opencfp\\http\\action\\talk\\createprocessaction' => 'OpenCFP\\Http\\Action\\Talk\\CreateProcessAction',
            'opencfp\\http\\action\\talk\\deleteaction' => 'OpenCFP\\Http\\Action\\Talk\\DeleteAction',
            'opencfp\\http\\action\\talk\\editaction' => 'OpenCFP\\Http\\Action\\Talk\\EditAction',
            'opencfp\\http\\action\\talk\\updateaction' => 'OpenCFP\\Http\\Action\\Talk\\UpdateAction',
            'opencfp\\http\\action\\talk\\viewaction' => 'OpenCFP\\Http\\Action\\Talk\\ViewAction',
            'opencfp\\http\\controller\\admin\\exportscontroller' => 'OpenCFP\\Http\\Controller\\Admin\\ExportsController',
            'opencfp\\http\\controller\\admin\\speakerscontroller' => 'OpenCFP\\Http\\Controller\\Admin\\SpeakersController',
            'opencfp\\http\\controller\\admin\\talkscontroller' => 'OpenCFP\\Http\\Controller\\Admin\\TalksController',
            'opencfp\\http\\controller\\forgotcontroller' => 'OpenCFP\\Http\\Controller\\ForgotController',
            'opencfp\\http\\controller\\profilecontroller' => 'OpenCFP\\Http\\Controller\\ProfileController',
            'opencfp\\http\\form\\resetform' => 'OpenCFP\\Http\\Form\\ResetForm',
            'opencfp\\http\\view\\talkhelper' => 'OpenCFP\\Http\\View\\TalkHelper',
            'opencfp\\infrastructure\\auth\\sentinelauthentication' => 'OpenCFP\\Infrastructure\\Auth\\SentinelAuthentication',
            'opencfp\\infrastructure\\cachewarmer\\htmlpurifierwarmer' => 'OpenCFP\\Infrastructure\\CacheWarmer\\HtmlPurifierWarmer',
            'opencfp\\infrastructure\\event\\authenticationlistener' => 'OpenCFP\\Infrastructure\\Event\\AuthenticationListener',
            'opencfp\\infrastructure\\event\\csrfvalidationlistener' => 'OpenCFP\\Infrastructure\\Event\\CsrfValidationListener',
            'opencfp\\infrastructure\\event\\exceptionlistener' => 'OpenCFP\\Infrastructure\\Event\\ExceptionListener',
            'opencfp\\infrastructure\\event\\requestcleanerlistener' => 'OpenCFP\\Infrastructure\\Event\\RequestCleanerListener',
            'opencfp\\infrastructure\\event\\twigglobalslistener' => 'OpenCFP\\Infrastructure\\Event\\TwigGlobalsListener',
            'symfony\\bundle\\frameworkbundle\\controller\\redirectcontroller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController',
            'symfony\\bundle\\frameworkbundle\\controller\\templatecontroller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController',
        );
        $this->syntheticIds = array(
            'kernel' => true,
        );
        $this->methodMap = array(
            'Cartalyst\\Sentinel\\Sentinel' => 'getSentinelService',
            'HTMLPurifier' => 'getHTMLPurifierService',
            'OpenCFP\\Domain\\CallForPapers' => 'getCallForPapersService',
            'OpenCFP\\Domain\\Services\\AccountManagement' => 'getAccountManagementService',
            'OpenCFP\\Http\\View\\TalkHelper' => 'getTalkHelperService',
            'OpenCFP\\Infrastructure\\Auth\\SentinelAuthentication' => 'getSentinelAuthenticationService',
            'OpenCFP\\Infrastructure\\Event\\AuthenticationListener' => 'getAuthenticationListenerService',
            'OpenCFP\\Infrastructure\\Event\\CsrfValidationListener' => 'getCsrfValidationListenerService',
            'OpenCFP\\Infrastructure\\Event\\RequestCleanerListener' => 'getRequestCleanerListenerService',
            'OpenCFP\\Infrastructure\\Event\\TwigGlobalsListener' => 'getTwigGlobalsListenerService',
            'annotation_reader' => 'getAnnotationReaderService',
            'annotations.reader' => 'getAnnotations_ReaderService',
            'argument_metadata_factory' => 'getArgumentMetadataFactoryService',
            'cache.annotations' => 'getCache_AnnotationsService',
            'config_cache_factory' => 'getConfigCacheFactoryService',
            'controller_name_converter' => 'getControllerNameConverterService',
            'debug.debug_handlers_listener' => 'getDebug_DebugHandlersListenerService',
            'debug.file_link_formatter' => 'getDebug_FileLinkFormatterService',
            'debug.stopwatch' => 'getDebug_StopwatchService',
            'event_dispatcher' => 'getEventDispatcherService',
            'framework_extra_bundle.event.is_granted' => 'getFrameworkExtraBundle_Event_IsGrantedService',
            'http_kernel' => 'getHttpKernelService',
            'locale_listener' => 'getLocaleListenerService',
            'monolog.handler.opencfp' => 'getMonolog_Handler_OpencfpService',
            'monolog.logger.cache' => 'getMonolog_Logger_CacheService',
            'monolog.logger.request' => 'getMonolog_Logger_RequestService',
            'request_stack' => 'getRequestStackService',
            'resolve_controller_name_subscriber' => 'getResolveControllerNameSubscriberService',
            'response_listener' => 'getResponseListenerService',
            'router' => 'getRouterService',
            'router.request_context' => 'getRouter_RequestContextService',
            'router_listener' => 'getRouterListenerService',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService',
            'sensio_framework_extra.cache.listener' => 'getSensioFrameworkExtra_Cache_ListenerService',
            'sensio_framework_extra.controller.listener' => 'getSensioFrameworkExtra_Controller_ListenerService',
            'sensio_framework_extra.converter.listener' => 'getSensioFrameworkExtra_Converter_ListenerService',
            'sensio_framework_extra.converter.manager' => 'getSensioFrameworkExtra_Converter_ManagerService',
            'sensio_framework_extra.view.listener' => 'getSensioFrameworkExtra_View_ListenerService',
            'session' => 'getSessionService',
            'session.handler' => 'getSession_HandlerService',
            'session.save_listener' => 'getSession_SaveListenerService',
            'session.storage.metadata_bag' => 'getSession_Storage_MetadataBagService',
            'session.storage.native' => 'getSession_Storage_NativeService',
            'session_listener' => 'getSessionListenerService',
            'streamed_response_listener' => 'getStreamedResponseListenerService',
            'translator.default' => 'getTranslator_DefaultService',
            'translator_listener' => 'getTranslatorListenerService',
            'twig' => 'getTwigService',
            'twig.loader' => 'getTwig_LoaderService',
            'validate_request_listener' => 'getValidateRequestListenerService',
            'wouterj_eloquent.twig.sql_format_extension' => 'getWouterjEloquent_Twig_SqlFormatExtensionService',
        );
        $this->fileMap = array(
            'OpenCFP\\Application\\Speakers' => __DIR__.'/getSpeakersService.php',
            'OpenCFP\\Domain\\Services\\IdentityProvider' => __DIR__.'/getIdentityProviderService.php',
            'OpenCFP\\Domain\\Talk\\TalkFilter' => __DIR__.'/getTalkFilterService.php',
            'OpenCFP\\Domain\\Talk\\TalkFormatter' => __DIR__.'/getTalkFormatterService.php',
            'OpenCFP\\Domain\\Talk\\TalkHandler' => __DIR__.'/getTalkHandlerService.php',
            'OpenCFP\\Http\\Action\\Admin\\DashboardAction' => __DIR__.'/getDashboardActionService.php',
            'OpenCFP\\Http\\Action\\Admin\\Speaker\\PromoteAction' => __DIR__.'/getPromoteActionService.php',
            'OpenCFP\\Http\\Action\\Admin\\Talk\\IndexAction' => __DIR__.'/getIndexActionService.php',
            'OpenCFP\\Http\\Action\\Admin\\Talk\\RateAction' => __DIR__.'/getRateActionService.php',
            'OpenCFP\\Http\\Action\\Admin\\Talk\\ViewAction' => __DIR__.'/getViewActionService.php',
            'OpenCFP\\Http\\Action\\DashboardAction' => __DIR__.'/getDashboardAction2Service.php',
            'OpenCFP\\Http\\Action\\Forgot\\IndexAction' => __DIR__.'/getIndexAction2Service.php',
            'OpenCFP\\Http\\Action\\Forgot\\ResetProcessAction' => __DIR__.'/getResetProcessActionService.php',
            'OpenCFP\\Http\\Action\\Forgot\\UpdatePasswordAction' => __DIR__.'/getUpdatePasswordActionService.php',
            'OpenCFP\\Http\\Action\\Page\\HomePageAction' => __DIR__.'/getHomePageActionService.php',
            'OpenCFP\\Http\\Action\\Profile\\ChangePasswordProcessAction' => __DIR__.'/getChangePasswordProcessActionService.php',
            'OpenCFP\\Http\\Action\\Reviewer\\DashboardAction' => __DIR__.'/getDashboardAction3Service.php',
            'OpenCFP\\Http\\Action\\Reviewer\\Speaker\\IndexAction' => __DIR__.'/getIndexAction3Service.php',
            'OpenCFP\\Http\\Action\\Reviewer\\Speaker\\ViewAction' => __DIR__.'/getViewAction2Service.php',
            'OpenCFP\\Http\\Action\\Reviewer\\Talk\\IndexAction' => __DIR__.'/getIndexAction4Service.php',
            'OpenCFP\\Http\\Action\\Reviewer\\Talk\\RateAction' => __DIR__.'/getRateAction2Service.php',
            'OpenCFP\\Http\\Action\\Reviewer\\Talk\\ViewAction' => __DIR__.'/getViewAction3Service.php',
            'OpenCFP\\Http\\Action\\Security\\LogInAction' => __DIR__.'/getLogInActionService.php',
            'OpenCFP\\Http\\Action\\Security\\LogOutAction' => __DIR__.'/getLogOutActionService.php',
            'OpenCFP\\Http\\Action\\Signup\\IndexAction' => __DIR__.'/getIndexAction5Service.php',
            'OpenCFP\\Http\\Action\\Signup\\ProcessAction' => __DIR__.'/getProcessActionService.php',
            'OpenCFP\\Http\\Action\\Talk\\CreateAction' => __DIR__.'/getCreateActionService.php',
            'OpenCFP\\Http\\Action\\Talk\\CreateProcessAction' => __DIR__.'/getCreateProcessActionService.php',
            'OpenCFP\\Http\\Action\\Talk\\DeleteAction' => __DIR__.'/getDeleteActionService.php',
            'OpenCFP\\Http\\Action\\Talk\\EditAction' => __DIR__.'/getEditActionService.php',
            'OpenCFP\\Http\\Action\\Talk\\UpdateAction' => __DIR__.'/getUpdateActionService.php',
            'OpenCFP\\Http\\Action\\Talk\\ViewAction' => __DIR__.'/getViewAction4Service.php',
            'OpenCFP\\Http\\Controller\\Admin\\ExportsController' => __DIR__.'/getExportsControllerService.php',
            'OpenCFP\\Http\\Controller\\Admin\\SpeakersController' => __DIR__.'/getSpeakersControllerService.php',
            'OpenCFP\\Http\\Controller\\Admin\\TalksController' => __DIR__.'/getTalksControllerService.php',
            'OpenCFP\\Http\\Controller\\ForgotController' => __DIR__.'/getForgotControllerService.php',
            'OpenCFP\\Http\\Controller\\ProfileController' => __DIR__.'/getProfileControllerService.php',
            'OpenCFP\\Http\\Form\\ResetForm' => __DIR__.'/getResetFormService.php',
            'OpenCFP\\Infrastructure\\CacheWarmer\\HtmlPurifierWarmer' => __DIR__.'/getHtmlPurifierWarmerService.php',
            'OpenCFP\\Infrastructure\\Event\\ExceptionListener' => __DIR__.'/getExceptionListenerService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController' => __DIR__.'/getRedirectControllerService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController' => __DIR__.'/getTemplateControllerService.php',
            'annotations.cache_warmer' => __DIR__.'/getAnnotations_CacheWarmerService.php',
            'argument_resolver.default' => __DIR__.'/getArgumentResolver_DefaultService.php',
            'argument_resolver.request' => __DIR__.'/getArgumentResolver_RequestService.php',
            'argument_resolver.request_attribute' => __DIR__.'/getArgumentResolver_RequestAttributeService.php',
            'argument_resolver.service' => __DIR__.'/getArgumentResolver_ServiceService.php',
            'argument_resolver.session' => __DIR__.'/getArgumentResolver_SessionService.php',
            'argument_resolver.variadic' => __DIR__.'/getArgumentResolver_VariadicService.php',
            'cache.app' => __DIR__.'/getCache_AppService.php',
            'cache.default_clearer' => __DIR__.'/getCache_DefaultClearerService.php',
            'cache.global_clearer' => __DIR__.'/getCache_GlobalClearerService.php',
            'cache.property_access' => __DIR__.'/getCache_PropertyAccessService.php',
            'cache.system' => __DIR__.'/getCache_SystemService.php',
            'cache.system_clearer' => __DIR__.'/getCache_SystemClearerService.php',
            'cache.validator' => __DIR__.'/getCache_ValidatorService.php',
            'cache_clearer' => __DIR__.'/getCacheClearerService.php',
            'cache_warmer' => __DIR__.'/getCacheWarmerService.php',
            'console.command.about' => __DIR__.'/getConsole_Command_AboutService.php',
            'console.command.assets_install' => __DIR__.'/getConsole_Command_AssetsInstallService.php',
            'console.command.cache_clear' => __DIR__.'/getConsole_Command_CacheClearService.php',
            'console.command.cache_pool_clear' => __DIR__.'/getConsole_Command_CachePoolClearService.php',
            'console.command.cache_pool_prune' => __DIR__.'/getConsole_Command_CachePoolPruneService.php',
            'console.command.cache_warmup' => __DIR__.'/getConsole_Command_CacheWarmupService.php',
            'console.command.config_debug' => __DIR__.'/getConsole_Command_ConfigDebugService.php',
            'console.command.config_dump_reference' => __DIR__.'/getConsole_Command_ConfigDumpReferenceService.php',
            'console.command.container_debug' => __DIR__.'/getConsole_Command_ContainerDebugService.php',
            'console.command.debug_autowiring' => __DIR__.'/getConsole_Command_DebugAutowiringService.php',
            'console.command.event_dispatcher_debug' => __DIR__.'/getConsole_Command_EventDispatcherDebugService.php',
            'console.command.form_debug' => __DIR__.'/getConsole_Command_FormDebugService.php',
            'console.command.opencfp_console_command_usercreatecommand' => __DIR__.'/getConsole_Command_OpencfpConsoleCommandUsercreatecommandService.php',
            'console.command.opencfp_console_command_userdemotecommand' => __DIR__.'/getConsole_Command_OpencfpConsoleCommandUserdemotecommandService.php',
            'console.command.opencfp_console_command_userpromotecommand' => __DIR__.'/getConsole_Command_OpencfpConsoleCommandUserpromotecommandService.php',
            'console.command.router_debug' => __DIR__.'/getConsole_Command_RouterDebugService.php',
            'console.command.router_match' => __DIR__.'/getConsole_Command_RouterMatchService.php',
            'console.command.translation_debug' => __DIR__.'/getConsole_Command_TranslationDebugService.php',
            'console.command.translation_update' => __DIR__.'/getConsole_Command_TranslationUpdateService.php',
            'console.command.xliff_lint' => __DIR__.'/getConsole_Command_XliffLintService.php',
            'console.command.yaml_lint' => __DIR__.'/getConsole_Command_YamlLintService.php',
            'console.command_loader' => __DIR__.'/getConsole_CommandLoaderService.php',
            'console.error_listener' => __DIR__.'/getConsole_ErrorListenerService.php',
            'deprecated.form.registry' => __DIR__.'/getDeprecated_Form_RegistryService.php',
            'deprecated.form.registry.csrf' => __DIR__.'/getDeprecated_Form_Registry_CsrfService.php',
            'file_locator' => __DIR__.'/getFileLocatorService.php',
            'filesystem' => __DIR__.'/getFilesystemService.php',
            'form.factory' => __DIR__.'/getForm_FactoryService.php',
            'form.registry' => __DIR__.'/getForm_RegistryService.php',
            'form.resolved_type_factory' => __DIR__.'/getForm_ResolvedTypeFactoryService.php',
            'form.server_params' => __DIR__.'/getForm_ServerParamsService.php',
            'form.type.birthday' => __DIR__.'/getForm_Type_BirthdayService.php',
            'form.type.button' => __DIR__.'/getForm_Type_ButtonService.php',
            'form.type.checkbox' => __DIR__.'/getForm_Type_CheckboxService.php',
            'form.type.choice' => __DIR__.'/getForm_Type_ChoiceService.php',
            'form.type.collection' => __DIR__.'/getForm_Type_CollectionService.php',
            'form.type.country' => __DIR__.'/getForm_Type_CountryService.php',
            'form.type.currency' => __DIR__.'/getForm_Type_CurrencyService.php',
            'form.type.date' => __DIR__.'/getForm_Type_DateService.php',
            'form.type.datetime' => __DIR__.'/getForm_Type_DatetimeService.php',
            'form.type.email' => __DIR__.'/getForm_Type_EmailService.php',
            'form.type.file' => __DIR__.'/getForm_Type_FileService.php',
            'form.type.form' => __DIR__.'/getForm_Type_FormService.php',
            'form.type.hidden' => __DIR__.'/getForm_Type_HiddenService.php',
            'form.type.integer' => __DIR__.'/getForm_Type_IntegerService.php',
            'form.type.language' => __DIR__.'/getForm_Type_LanguageService.php',
            'form.type.locale' => __DIR__.'/getForm_Type_LocaleService.php',
            'form.type.money' => __DIR__.'/getForm_Type_MoneyService.php',
            'form.type.number' => __DIR__.'/getForm_Type_NumberService.php',
            'form.type.password' => __DIR__.'/getForm_Type_PasswordService.php',
            'form.type.percent' => __DIR__.'/getForm_Type_PercentService.php',
            'form.type.radio' => __DIR__.'/getForm_Type_RadioService.php',
            'form.type.range' => __DIR__.'/getForm_Type_RangeService.php',
            'form.type.repeated' => __DIR__.'/getForm_Type_RepeatedService.php',
            'form.type.reset' => __DIR__.'/getForm_Type_ResetService.php',
            'form.type.search' => __DIR__.'/getForm_Type_SearchService.php',
            'form.type.submit' => __DIR__.'/getForm_Type_SubmitService.php',
            'form.type.text' => __DIR__.'/getForm_Type_TextService.php',
            'form.type.textarea' => __DIR__.'/getForm_Type_TextareaService.php',
            'form.type.time' => __DIR__.'/getForm_Type_TimeService.php',
            'form.type.timezone' => __DIR__.'/getForm_Type_TimezoneService.php',
            'form.type.url' => __DIR__.'/getForm_Type_UrlService.php',
            'form.type_extension.csrf' => __DIR__.'/getForm_TypeExtension_CsrfService.php',
            'form.type_extension.form.http_foundation' => __DIR__.'/getForm_TypeExtension_Form_HttpFoundationService.php',
            'form.type_extension.form.validator' => __DIR__.'/getForm_TypeExtension_Form_ValidatorService.php',
            'form.type_extension.repeated.validator' => __DIR__.'/getForm_TypeExtension_Repeated_ValidatorService.php',
            'form.type_extension.submit.validator' => __DIR__.'/getForm_TypeExtension_Submit_ValidatorService.php',
            'form.type_extension.upload.validator' => __DIR__.'/getForm_TypeExtension_Upload_ValidatorService.php',
            'form.type_guesser.validator' => __DIR__.'/getForm_TypeGuesser_ValidatorService.php',
            'fragment.handler' => __DIR__.'/getFragment_HandlerService.php',
            'fragment.renderer.inline' => __DIR__.'/getFragment_Renderer_InlineService.php',
            'kernel.class_cache.cache_warmer' => __DIR__.'/getKernel_ClassCache_CacheWarmerService.php',
            'logger' => __DIR__.'/getLoggerService.php',
            'monolog.activation_strategy.not_found' => __DIR__.'/getMonolog_ActivationStrategy_NotFoundService.php',
            'monolog.handler.fingers_crossed.error_level_activation_strategy' => __DIR__.'/getMonolog_Handler_FingersCrossed_ErrorLevelActivationStrategyService.php',
            'monolog.handler.null_internal' => __DIR__.'/getMonolog_Handler_NullInternalService.php',
            'monolog.logger.console' => __DIR__.'/getMonolog_Logger_ConsoleService.php',
            'monolog.logger.php' => __DIR__.'/getMonolog_Logger_PhpService.php',
            'monolog.logger.translation' => __DIR__.'/getMonolog_Logger_TranslationService.php',
            'property_accessor' => __DIR__.'/getPropertyAccessorService.php',
            'router.cache_warmer' => __DIR__.'/getRouter_CacheWarmerService.php',
            'routing.loader' => __DIR__.'/getRouting_LoaderService.php',
            'services_resetter' => __DIR__.'/getServicesResetterService.php',
            'session.storage.filesystem' => __DIR__.'/getSession_Storage_FilesystemService.php',
            'session.storage.php_bridge' => __DIR__.'/getSession_Storage_PhpBridgeService.php',
            'swiftmailer.command.debug' => __DIR__.'/getSwiftmailer_Command_DebugService.php',
            'swiftmailer.command.new_email' => __DIR__.'/getSwiftmailer_Command_NewEmailService.php',
            'swiftmailer.command.send_email' => __DIR__.'/getSwiftmailer_Command_SendEmailService.php',
            'swiftmailer.email_sender.listener' => __DIR__.'/getSwiftmailer_EmailSender_ListenerService.php',
            'swiftmailer.mailer.default' => __DIR__.'/getSwiftmailer_Mailer_DefaultService.php',
            'swiftmailer.mailer.default.transport' => __DIR__.'/getSwiftmailer_Mailer_Default_TransportService.php',
            'translation.dumper.csv' => __DIR__.'/getTranslation_Dumper_CsvService.php',
            'translation.dumper.ini' => __DIR__.'/getTranslation_Dumper_IniService.php',
            'translation.dumper.json' => __DIR__.'/getTranslation_Dumper_JsonService.php',
            'translation.dumper.mo' => __DIR__.'/getTranslation_Dumper_MoService.php',
            'translation.dumper.php' => __DIR__.'/getTranslation_Dumper_PhpService.php',
            'translation.dumper.po' => __DIR__.'/getTranslation_Dumper_PoService.php',
            'translation.dumper.qt' => __DIR__.'/getTranslation_Dumper_QtService.php',
            'translation.dumper.res' => __DIR__.'/getTranslation_Dumper_ResService.php',
            'translation.dumper.xliff' => __DIR__.'/getTranslation_Dumper_XliffService.php',
            'translation.dumper.yml' => __DIR__.'/getTranslation_Dumper_YmlService.php',
            'translation.extractor' => __DIR__.'/getTranslation_ExtractorService.php',
            'translation.extractor.php' => __DIR__.'/getTranslation_Extractor_PhpService.php',
            'translation.loader' => __DIR__.'/getTranslation_LoaderService.php',
            'translation.loader.csv' => __DIR__.'/getTranslation_Loader_CsvService.php',
            'translation.loader.dat' => __DIR__.'/getTranslation_Loader_DatService.php',
            'translation.loader.ini' => __DIR__.'/getTranslation_Loader_IniService.php',
            'translation.loader.json' => __DIR__.'/getTranslation_Loader_JsonService.php',
            'translation.loader.mo' => __DIR__.'/getTranslation_Loader_MoService.php',
            'translation.loader.php' => __DIR__.'/getTranslation_Loader_PhpService.php',
            'translation.loader.po' => __DIR__.'/getTranslation_Loader_PoService.php',
            'translation.loader.qt' => __DIR__.'/getTranslation_Loader_QtService.php',
            'translation.loader.res' => __DIR__.'/getTranslation_Loader_ResService.php',
            'translation.loader.xliff' => __DIR__.'/getTranslation_Loader_XliffService.php',
            'translation.loader.yml' => __DIR__.'/getTranslation_Loader_YmlService.php',
            'translation.reader' => __DIR__.'/getTranslation_ReaderService.php',
            'translation.warmer' => __DIR__.'/getTranslation_WarmerService.php',
            'translation.writer' => __DIR__.'/getTranslation_WriterService.php',
            'twig.cache_warmer' => __DIR__.'/getTwig_CacheWarmerService.php',
            'twig.command.debug' => __DIR__.'/getTwig_Command_DebugService.php',
            'twig.command.lint' => __DIR__.'/getTwig_Command_LintService.php',
            'twig.controller.exception' => __DIR__.'/getTwig_Controller_ExceptionService.php',
            'twig.controller.preview_error' => __DIR__.'/getTwig_Controller_PreviewErrorService.php',
            'twig.exception_listener' => __DIR__.'/getTwig_ExceptionListenerService.php',
            'twig.form.renderer' => __DIR__.'/getTwig_Form_RendererService.php',
            'twig.profile' => __DIR__.'/getTwig_ProfileService.php',
            'twig.runtime.httpkernel' => __DIR__.'/getTwig_Runtime_HttpkernelService.php',
            'twig.template_cache_warmer' => __DIR__.'/getTwig_TemplateCacheWarmerService.php',
            'twig.translation.extractor' => __DIR__.'/getTwig_Translation_ExtractorService.php',
            'uri_signer' => __DIR__.'/getUriSignerService.php',
            'validator' => __DIR__.'/getValidatorService.php',
            'validator.builder' => __DIR__.'/getValidator_BuilderService.php',
            'validator.email' => __DIR__.'/getValidator_EmailService.php',
            'validator.expression' => __DIR__.'/getValidator_ExpressionService.php',
            'validator.mapping.cache_warmer' => __DIR__.'/getValidator_Mapping_CacheWarmerService.php',
            'wouterj_eloquent' => __DIR__.'/getWouterjEloquentService.php',
            'wouterj_eloquent.aliases.loader' => __DIR__.'/getWouterjEloquent_Aliases_LoaderService.php',
            'wouterj_eloquent.commands.migrate' => __DIR__.'/getWouterjEloquent_Commands_MigrateService.php',
            'wouterj_eloquent.commands.migrate_fresh' => __DIR__.'/getWouterjEloquent_Commands_MigrateFreshService.php',
            'wouterj_eloquent.commands.migrate_install' => __DIR__.'/getWouterjEloquent_Commands_MigrateInstallService.php',
            'wouterj_eloquent.commands.migrate_make' => __DIR__.'/getWouterjEloquent_Commands_MigrateMakeService.php',
            'wouterj_eloquent.commands.migrate_refresh' => __DIR__.'/getWouterjEloquent_Commands_MigrateRefreshService.php',
            'wouterj_eloquent.commands.migrate_reset' => __DIR__.'/getWouterjEloquent_Commands_MigrateResetService.php',
            'wouterj_eloquent.commands.migrate_rollback' => __DIR__.'/getWouterjEloquent_Commands_MigrateRollbackService.php',
            'wouterj_eloquent.commands.migrate_status' => __DIR__.'/getWouterjEloquent_Commands_MigrateStatusService.php',
            'wouterj_eloquent.commands.seed' => __DIR__.'/getWouterjEloquent_Commands_SeedService.php',
            'wouterj_eloquent.commands.seed_make' => __DIR__.'/getWouterjEloquent_Commands_SeedMakeService.php',
            'wouterj_eloquent.database_manager' => __DIR__.'/getWouterjEloquent_DatabaseManagerService.php',
            'wouterj_eloquent.events' => __DIR__.'/getWouterjEloquent_EventsService.php',
            'wouterj_eloquent.facade.initializer' => __DIR__.'/getWouterjEloquent_Facade_InitializerService.php',
            'wouterj_eloquent.form.type_guesser' => __DIR__.'/getWouterjEloquent_Form_TypeGuesserService.php',
            'wouterj_eloquent.initializer' => __DIR__.'/getWouterjEloquent_InitializerService.php',
            'wouterj_eloquent.migrations.creator' => __DIR__.'/getWouterjEloquent_Migrations_CreatorService.php',
            'wouterj_eloquent.migrations.repository' => __DIR__.'/getWouterjEloquent_Migrations_RepositoryService.php',
            'wouterj_eloquent.migrator' => __DIR__.'/getWouterjEloquent_MigratorService.php',
            'wouterj_eloquent.query_listener' => __DIR__.'/getWouterjEloquent_QueryListenerService.php',
        );
        $this->privates = array(
            'Illuminate\\Database\\Capsule\\Manager' => true,
            'Illuminate\\Database\\DatabaseManager' => true,
            'session.storage' => true,
            'swiftmailer.mailer' => true,
            'swiftmailer.transport' => true,
            'Cartalyst\\Sentinel\\Sentinel' => true,
            'HTMLPurifier' => true,
            'OpenCFP\\Application\\Speakers' => true,
            'OpenCFP\\Domain\\CallForPapers' => true,
            'OpenCFP\\Domain\\Talk\\TalkFilter' => true,
            'OpenCFP\\Domain\\Talk\\TalkFormatter' => true,
            'OpenCFP\\Domain\\Talk\\TalkHandler' => true,
            'OpenCFP\\Http\\Form\\ResetForm' => true,
            'OpenCFP\\Http\\View\\TalkHelper' => true,
            'OpenCFP\\Infrastructure\\Auth\\SentinelAuthentication' => true,
            'OpenCFP\\Infrastructure\\CacheWarmer\\HtmlPurifierWarmer' => true,
            'OpenCFP\\Infrastructure\\Event\\AuthenticationListener' => true,
            'OpenCFP\\Infrastructure\\Event\\CsrfValidationListener' => true,
            'OpenCFP\\Infrastructure\\Event\\ExceptionListener' => true,
            'OpenCFP\\Infrastructure\\Event\\RequestCleanerListener' => true,
            'OpenCFP\\Infrastructure\\Event\\TwigGlobalsListener' => true,
            'annotation_reader' => true,
            'annotations.cache_warmer' => true,
            'annotations.reader' => true,
            'argument_metadata_factory' => true,
            'argument_resolver.default' => true,
            'argument_resolver.request' => true,
            'argument_resolver.request_attribute' => true,
            'argument_resolver.service' => true,
            'argument_resolver.session' => true,
            'argument_resolver.variadic' => true,
            'cache.annotations' => true,
            'cache.default_clearer' => true,
            'cache.property_access' => true,
            'cache.validator' => true,
            'config_cache_factory' => true,
            'console.command.about' => true,
            'console.command.assets_install' => true,
            'console.command.cache_clear' => true,
            'console.command.cache_pool_clear' => true,
            'console.command.cache_pool_prune' => true,
            'console.command.cache_warmup' => true,
            'console.command.config_debug' => true,
            'console.command.config_dump_reference' => true,
            'console.command.container_debug' => true,
            'console.command.debug_autowiring' => true,
            'console.command.event_dispatcher_debug' => true,
            'console.command.form_debug' => true,
            'console.command.router_debug' => true,
            'console.command.router_match' => true,
            'console.command.translation_debug' => true,
            'console.command.translation_update' => true,
            'console.command.xliff_lint' => true,
            'console.command.yaml_lint' => true,
            'console.error_listener' => true,
            'controller_name_converter' => true,
            'debug.debug_handlers_listener' => true,
            'debug.file_link_formatter' => true,
            'debug.stopwatch' => true,
            'deprecated.form.registry' => true,
            'deprecated.form.registry.csrf' => true,
            'file_locator' => true,
            'form.registry' => true,
            'form.resolved_type_factory' => true,
            'form.server_params' => true,
            'form.type.choice' => true,
            'form.type.form' => true,
            'form.type_extension.csrf' => true,
            'form.type_extension.form.http_foundation' => true,
            'form.type_extension.form.validator' => true,
            'form.type_extension.repeated.validator' => true,
            'form.type_extension.submit.validator' => true,
            'form.type_extension.upload.validator' => true,
            'form.type_guesser.validator' => true,
            'fragment.handler' => true,
            'fragment.renderer.inline' => true,
            'framework_extra_bundle.event.is_granted' => true,
            'kernel.class_cache.cache_warmer' => true,
            'locale_listener' => true,
            'logger' => true,
            'monolog.activation_strategy.not_found' => true,
            'monolog.handler.fingers_crossed.error_level_activation_strategy' => true,
            'monolog.handler.null_internal' => true,
            'monolog.handler.opencfp' => true,
            'monolog.logger.cache' => true,
            'monolog.logger.console' => true,
            'monolog.logger.php' => true,
            'monolog.logger.request' => true,
            'monolog.logger.translation' => true,
            'property_accessor' => true,
            'resolve_controller_name_subscriber' => true,
            'response_listener' => true,
            'router.cache_warmer' => true,
            'router.request_context' => true,
            'router_listener' => true,
            'sensio_framework_extra.cache.listener' => true,
            'sensio_framework_extra.controller.listener' => true,
            'sensio_framework_extra.converter.listener' => true,
            'sensio_framework_extra.converter.manager' => true,
            'sensio_framework_extra.view.listener' => true,
            'session.handler' => true,
            'session.save_listener' => true,
            'session.storage.filesystem' => true,
            'session.storage.metadata_bag' => true,
            'session.storage.native' => true,
            'session.storage.php_bridge' => true,
            'session_listener' => true,
            'streamed_response_listener' => true,
            'swiftmailer.command.debug' => true,
            'swiftmailer.command.new_email' => true,
            'swiftmailer.command.send_email' => true,
            'swiftmailer.email_sender.listener' => true,
            'translation.dumper.csv' => true,
            'translation.dumper.ini' => true,
            'translation.dumper.json' => true,
            'translation.dumper.mo' => true,
            'translation.dumper.php' => true,
            'translation.dumper.po' => true,
            'translation.dumper.qt' => true,
            'translation.dumper.res' => true,
            'translation.dumper.xliff' => true,
            'translation.dumper.yml' => true,
            'translation.extractor' => true,
            'translation.extractor.php' => true,
            'translation.loader' => true,
            'translation.loader.csv' => true,
            'translation.loader.dat' => true,
            'translation.loader.ini' => true,
            'translation.loader.json' => true,
            'translation.loader.mo' => true,
            'translation.loader.php' => true,
            'translation.loader.po' => true,
            'translation.loader.qt' => true,
            'translation.loader.res' => true,
            'translation.loader.xliff' => true,
            'translation.loader.yml' => true,
            'translation.reader' => true,
            'translation.warmer' => true,
            'translation.writer' => true,
            'translator.default' => true,
            'translator_listener' => true,
            'twig.cache_warmer' => true,
            'twig.command.debug' => true,
            'twig.command.lint' => true,
            'twig.exception_listener' => true,
            'twig.form.renderer' => true,
            'twig.loader' => true,
            'twig.profile' => true,
            'twig.runtime.httpkernel' => true,
            'twig.template_cache_warmer' => true,
            'twig.translation.extractor' => true,
            'uri_signer' => true,
            'validate_request_listener' => true,
            'validator.builder' => true,
            'validator.email' => true,
            'validator.expression' => true,
            'validator.mapping.cache_warmer' => true,
            'wouterj_eloquent.aliases.loader' => true,
            'wouterj_eloquent.commands.migrate' => true,
            'wouterj_eloquent.commands.migrate_fresh' => true,
            'wouterj_eloquent.commands.migrate_install' => true,
            'wouterj_eloquent.commands.migrate_make' => true,
            'wouterj_eloquent.commands.migrate_refresh' => true,
            'wouterj_eloquent.commands.migrate_reset' => true,
            'wouterj_eloquent.commands.migrate_rollback' => true,
            'wouterj_eloquent.commands.migrate_status' => true,
            'wouterj_eloquent.commands.seed' => true,
            'wouterj_eloquent.commands.seed_make' => true,
            'wouterj_eloquent.events' => true,
            'wouterj_eloquent.form.type_guesser' => true,
            'wouterj_eloquent.migrations.creator' => true,
            'wouterj_eloquent.migrations.repository' => true,
            'wouterj_eloquent.migrator' => true,
            'wouterj_eloquent.query_listener' => true,
            'wouterj_eloquent.twig.sql_format_extension' => true,
        );
        $this->aliases = array(
            'Illuminate\\Database\\Capsule\\Manager' => 'wouterj_eloquent',
            'Illuminate\\Database\\DatabaseManager' => 'wouterj_eloquent.database_manager',
            'cache.app_clearer' => 'cache.default_clearer',
            'mailer' => 'swiftmailer.mailer.default',
            'session.storage' => 'session.storage.native',
            'swiftmailer.mailer' => 'swiftmailer.mailer.default',
            'swiftmailer.transport' => 'swiftmailer.mailer.default.transport',
            'translator' => 'translator.default',
        );
    }

    public function getRemovedIds()
    {
        return include __DIR__.'/removed-ids.php';
    }

    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled()
    {
        return true;
    }

    public function isFrozen()
    {
        @trigger_error(sprintf('The %s() method is deprecated since version 3.3 and will be removed in 4.0. Use the isCompiled() method instead.', __METHOD__), E_USER_DEPRECATED);

        return true;
    }

    protected function load($file, $lazyLoad = true)
    {
        return include $file;
    }

    /*
     * Gets the public 'OpenCFP\Domain\Services\AccountManagement' shared autowired service.
     *
     * @return \OpenCFP\Infrastructure\Auth\SentinelAccountManagement
     */
    protected function getAccountManagementService()
    {
        return $this->services['OpenCFP\Domain\Services\AccountManagement'] = new \OpenCFP\Infrastructure\Auth\SentinelAccountManagement(${($_ = isset($this->services['Cartalyst\Sentinel\Sentinel']) ? $this->services['Cartalyst\Sentinel\Sentinel'] : $this->getSentinelService()) && false ?: '_'});
    }

    /*
     * Gets the public 'event_dispatcher' shared service.
     *
     * @return \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher
     */
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this);

        $instance->addListener(
            'kernel.request', array(0 => function () {
                return ${($_ = isset($this->services['OpenCFP\Infrastructure\Event\AuthenticationListener']) ? $this->services['OpenCFP\Infrastructure\Event\AuthenticationListener'] : $this->getAuthenticationListenerService()) && false ?: '_'};
            }, 1 => 'onKernelRequest'), -1024
        );
        $instance->addListener(
            'kernel.request', array(0 => function () {
                return ${($_ = isset($this->services['OpenCFP\Infrastructure\Event\CsrfValidationListener']) ? $this->services['OpenCFP\Infrastructure\Event\CsrfValidationListener'] : $this->getCsrfValidationListenerService()) && false ?: '_'};
            }, 1 => 'onKernelRequest'), 16
        );
        $instance->addListener(
            'kernel.exception', array(0 => function () {
                return ${($_ = isset($this->services['OpenCFP\Infrastructure\Event\ExceptionListener']) ? $this->services['OpenCFP\Infrastructure\Event\ExceptionListener'] : $this->services['OpenCFP\Infrastructure\Event\ExceptionListener'] = new \OpenCFP\Infrastructure\Event\ExceptionListener()) && false ?: '_'};
            }, 1 => 'onKernelException'), -8
        );
        $instance->addListener(
            'kernel.request', array(0 => function () {
                return ${($_ = isset($this->services['OpenCFP\Infrastructure\Event\RequestCleanerListener']) ? $this->services['OpenCFP\Infrastructure\Event\RequestCleanerListener'] : $this->getRequestCleanerListenerService()) && false ?: '_'};
            }, 1 => 'onKernelRequest'), 0
        );
        $instance->addListener(
            'kernel.request', array(0 => function () {
                return ${($_ = isset($this->services['OpenCFP\Infrastructure\Event\TwigGlobalsListener']) ? $this->services['OpenCFP\Infrastructure\Event\TwigGlobalsListener'] : $this->getTwigGlobalsListenerService()) && false ?: '_'};
            }, 1 => 'onKernelRequest'), 128
        );
        $instance->addListener(
            'kernel.response', array(0 => function () {
                return ${($_ = isset($this->services['response_listener']) ? $this->services['response_listener'] : $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8')) && false ?: '_'};
            }, 1 => 'onKernelResponse'), 0
        );
        $instance->addListener(
            'kernel.response', array(0 => function () {
                return ${($_ = isset($this->services['streamed_response_listener']) ? $this->services['streamed_response_listener'] : $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener()) && false ?: '_'};
            }, 1 => 'onKernelResponse'), -1024
        );
        $instance->addListener(
            'kernel.request', array(0 => function () {
                return ${($_ = isset($this->services['locale_listener']) ? $this->services['locale_listener'] : $this->getLocaleListenerService()) && false ?: '_'};
            }, 1 => 'onKernelRequest'), 16
        );
        $instance->addListener(
            'kernel.finish_request', array(0 => function () {
                return ${($_ = isset($this->services['locale_listener']) ? $this->services['locale_listener'] : $this->getLocaleListenerService()) && false ?: '_'};
            }, 1 => 'onKernelFinishRequest'), 0
        );
        $instance->addListener(
            'kernel.request', array(0 => function () {
                return ${($_ = isset($this->services['validate_request_listener']) ? $this->services['validate_request_listener'] : $this->services['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener()) && false ?: '_'};
            }, 1 => 'onKernelRequest'), 256
        );
        $instance->addListener(
            'kernel.request', array(0 => function () {
                return ${($_ = isset($this->services['resolve_controller_name_subscriber']) ? $this->services['resolve_controller_name_subscriber'] : $this->getResolveControllerNameSubscriberService()) && false ?: '_'};
            }, 1 => 'onKernelRequest'), 24
        );
        $instance->addListener(
            'console.error', array(0 => function () {
                return ${($_ = isset($this->services['console.error_listener']) ? $this->services['console.error_listener'] : $this->load(__DIR__.'/getConsole_ErrorListenerService.php')) && false ?: '_'};
            }, 1 => 'onConsoleError'), -128
        );
        $instance->addListener(
            'console.terminate', array(0 => function () {
                return ${($_ = isset($this->services['console.error_listener']) ? $this->services['console.error_listener'] : $this->load(__DIR__.'/getConsole_ErrorListenerService.php')) && false ?: '_'};
            }, 1 => 'onConsoleTerminate'), -128
        );
        $instance->addListener(
            'kernel.request', array(0 => function () {
                return ${($_ = isset($this->services['session_listener']) ? $this->services['session_listener'] : $this->getSessionListenerService()) && false ?: '_'};
            }, 1 => 'onKernelRequest'), 128
        );
        $instance->addListener(
            'kernel.response', array(0 => function () {
                return ${($_ = isset($this->services['session.save_listener']) ? $this->services['session.save_listener'] : $this->services['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener()) && false ?: '_'};
            }, 1 => 'onKernelResponse'), -1000
        );
        $instance->addListener(
            'kernel.request', array(0 => function () {
                return ${($_ = isset($this->services['translator_listener']) ? $this->services['translator_listener'] : $this->getTranslatorListenerService()) && false ?: '_'};
            }, 1 => 'onKernelRequest'), 10
        );
        $instance->addListener(
            'kernel.finish_request', array(0 => function () {
                return ${($_ = isset($this->services['translator_listener']) ? $this->services['translator_listener'] : $this->getTranslatorListenerService()) && false ?: '_'};
            }, 1 => 'onKernelFinishRequest'), 0
        );
        $instance->addListener(
            'kernel.request', array(0 => function () {
                return ${($_ = isset($this->services['debug.debug_handlers_listener']) ? $this->services['debug.debug_handlers_listener'] : $this->getDebug_DebugHandlersListenerService()) && false ?: '_'};
            }, 1 => 'configure'), 2048
        );
        $instance->addListener(
            'kernel.request', array(0 => function () {
                return ${($_ = isset($this->services['router_listener']) ? $this->services['router_listener'] : $this->getRouterListenerService()) && false ?: '_'};
            }, 1 => 'onKernelRequest'), 32
        );
        $instance->addListener(
            'kernel.finish_request', array(0 => function () {
                return ${($_ = isset($this->services['router_listener']) ? $this->services['router_listener'] : $this->getRouterListenerService()) && false ?: '_'};
            }, 1 => 'onKernelFinishRequest'), 0
        );
        $instance->addListener(
            'kernel.controller', array(0 => function () {
                return ${($_ = isset($this->services['sensio_framework_extra.controller.listener']) ? $this->services['sensio_framework_extra.controller.listener'] : $this->getSensioFrameworkExtra_Controller_ListenerService()) && false ?: '_'};
            }, 1 => 'onKernelController'), 0
        );
        $instance->addListener(
            'kernel.controller', array(0 => function () {
                return ${($_ = isset($this->services['sensio_framework_extra.converter.listener']) ? $this->services['sensio_framework_extra.converter.listener'] : $this->getSensioFrameworkExtra_Converter_ListenerService()) && false ?: '_'};
            }, 1 => 'onKernelController'), 0
        );
        $instance->addListener(
            'kernel.controller', array(0 => function () {
                return ${($_ = isset($this->services['sensio_framework_extra.view.listener']) ? $this->services['sensio_framework_extra.view.listener'] : $this->getSensioFrameworkExtra_View_ListenerService()) && false ?: '_'};
            }, 1 => 'onKernelController'), -128
        );
        $instance->addListener(
            'kernel.view', array(0 => function () {
                return ${($_ = isset($this->services['sensio_framework_extra.view.listener']) ? $this->services['sensio_framework_extra.view.listener'] : $this->getSensioFrameworkExtra_View_ListenerService()) && false ?: '_'};
            }, 1 => 'onKernelView'), 0
        );
        $instance->addListener(
            'kernel.controller', array(0 => function () {
                return ${($_ = isset($this->services['sensio_framework_extra.cache.listener']) ? $this->services['sensio_framework_extra.cache.listener'] : $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener()) && false ?: '_'};
            }, 1 => 'onKernelController'), 0
        );
        $instance->addListener(
            'kernel.response', array(0 => function () {
                return ${($_ = isset($this->services['sensio_framework_extra.cache.listener']) ? $this->services['sensio_framework_extra.cache.listener'] : $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener()) && false ?: '_'};
            }, 1 => 'onKernelResponse'), 0
        );
        $instance->addListener(
            'kernel.controller_arguments', array(0 => function () {
                return ${($_ = isset($this->services['framework_extra_bundle.event.is_granted']) ? $this->services['framework_extra_bundle.event.is_granted'] : $this->getFrameworkExtraBundle_Event_IsGrantedService()) && false ?: '_'};
            }, 1 => 'onKernelControllerArguments'), 0
        );
        $instance->addListener(
            'kernel.exception', array(0 => function () {
                return ${($_ = isset($this->services['twig.exception_listener']) ? $this->services['twig.exception_listener'] : $this->load(__DIR__.'/getTwig_ExceptionListenerService.php')) && false ?: '_'};
            }, 1 => 'onKernelException'), -128
        );
        $instance->addListener(
            'kernel.exception', array(0 => function () {
                return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->load(__DIR__.'/getSwiftmailer_EmailSender_ListenerService.php')) && false ?: '_'};
            }, 1 => 'onException'), 0
        );
        $instance->addListener(
            'kernel.terminate', array(0 => function () {
                return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->load(__DIR__.'/getSwiftmailer_EmailSender_ListenerService.php')) && false ?: '_'};
            }, 1 => 'onTerminate'), 0
        );
        $instance->addListener(
            'console.error', array(0 => function () {
                return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->load(__DIR__.'/getSwiftmailer_EmailSender_ListenerService.php')) && false ?: '_'};
            }, 1 => 'onException'), 0
        );
        $instance->addListener(
            'console.terminate', array(0 => function () {
                return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->load(__DIR__.'/getSwiftmailer_EmailSender_ListenerService.php')) && false ?: '_'};
            }, 1 => 'onTerminate'), 0
        );

        return $instance;
    }

    /*
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(
            ${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'}, new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'})) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.request']) ? $this->services['monolog.logger.request'] : $this->getMonolog_Logger_RequestService()) && false ?: '_'}), ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(
                ${($_ = isset($this->services['argument_metadata_factory']) ? $this->services['argument_metadata_factory'] : $this->services['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory()) && false ?: '_'}, new RewindableGenerator(
                    function () {
                        yield 0 => ${($_ = isset($this->services['argument_resolver.request_attribute']) ? $this->services['argument_resolver.request_attribute'] : $this->services['argument_resolver.request_attribute'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver()) && false ?: '_'};
                        yield 1 => ${($_ = isset($this->services['argument_resolver.request']) ? $this->services['argument_resolver.request'] : $this->services['argument_resolver.request'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver()) && false ?: '_'};
                        yield 2 => ${($_ = isset($this->services['argument_resolver.session']) ? $this->services['argument_resolver.session'] : $this->services['argument_resolver.session'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver()) && false ?: '_'};
                        yield 3 => ${($_ = isset($this->services['argument_resolver.service']) ? $this->services['argument_resolver.service'] : $this->load(__DIR__.'/getArgumentResolver_ServiceService.php')) && false ?: '_'};
                        yield 4 => ${($_ = isset($this->services['argument_resolver.default']) ? $this->services['argument_resolver.default'] : $this->services['argument_resolver.default'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver()) && false ?: '_'};
                        yield 5 => ${($_ = isset($this->services['argument_resolver.variadic']) ? $this->services['argument_resolver.variadic'] : $this->services['argument_resolver.variadic'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver()) && false ?: '_'};
                    }, 6
                )
            )
        );
    }

    /*
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /*
     * Gets the public 'router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router
     */
    protected function getRouterService()
    {
        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router($this, '/application/resources/config/routing.yml', array('cache_dir' => $this->targetDirs[0], 'debug' => false, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'OpenCFPProductionProjectContainerUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'OpenCFPProductionProjectContainerUrlMatcher', 'strict_requirements' => true), ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'});

        $instance->setConfigCacheFactory(${($_ = isset($this->services['config_cache_factory']) ? $this->services['config_cache_factory'] : $this->services['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'security.csrf.token_manager' shared service.
     *
     * @return \Symfony\Component\Security\Csrf\CsrfTokenManager
     */
    protected function getSecurity_Csrf_TokenManagerService()
    {
        return $this->services['security.csrf.token_manager'] = new \Symfony\Component\Security\Csrf\CsrfTokenManager(new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator(), new \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage(${($_ = isset($this->services['session']) ? $this->services['session'] : $this->getSessionService()) && false ?: '_'}), ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'});
    }

    /*
     * Gets the public 'session' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session
     */
    protected function getSessionService()
    {
        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session(${($_ = isset($this->services['session.storage.native']) ? $this->services['session.storage.native'] : $this->getSession_Storage_NativeService()) && false ?: '_'}, new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag(), new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag());
    }

    /*
     * Gets the public 'twig' shared service.
     *
     * @return \Twig\Environment
     */
    protected function getTwigService()
    {
        $this->services['twig'] = $instance = new \Twig\Environment(${($_ = isset($this->services['twig.loader']) ? $this->services['twig.loader'] : $this->getTwig_LoaderService()) && false ?: '_'}, array('default_path' => '/application/resources/views', 'debug' => false, 'exception_controller' => 'twig.controller.exception:showAction', 'form_themes' => $this->parameters['twig.form.resources'], 'autoescape' => 'name', 'cache' => ($this->targetDirs[0].'/twig'), 'charset' => 'UTF-8', 'paths' => array(), 'date' => array('format' => 'F j, Y H:i', 'interval_format' => '%d days', 'timezone' => null), 'number_format' => array('decimals' => 0, 'decimal_point' => '.', 'thousands_separator' => ',')));

        $a = ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'};
        $b = ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'};

        $c = new \Symfony\Bridge\Twig\AppVariable();
        $c->setEnvironment('production');
        $c->setDebug(false);
        if ($this->has('request_stack')) {
            $c->setRequestStack($a);
        }

        $instance->addExtension(new \OpenCFP\Infrastructure\Templating\TwigExtension($a, $b, new \OpenCFP\WebPath()));
        $instance->addExtension(new \Aptoma\Twig\Extension\MarkdownExtension(new \Aptoma\Twig\Extension\MarkdownEngine\MichelfMarkdownEngine()));
        $instance->addExtension(new \Twig_Extensions_Extension_Text());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension(${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->services['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(null)) && false ?: '_'}, '/application/classes', 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension($b));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension(${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)) && false ?: '_'}, false));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension($a, ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension(array(0 => $this, 1 => 'twig.form.renderer')));
        $instance->addExtension(${($_ = isset($this->services['wouterj_eloquent.twig.sql_format_extension']) ? $this->services['wouterj_eloquent.twig.sql_format_extension'] : $this->services['wouterj_eloquent.twig.sql_format_extension'] = new \WouterJ\EloquentBundle\Twig\SqlFormatterExtension()) && false ?: '_'});
        $instance->addGlobal('app', $c);
        $instance->addRuntimeLoader(
            new \Twig\RuntimeLoader\ContainerRuntimeLoader(
                new \Symfony\Component\DependencyInjection\ServiceLocator(
                    array('Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => function () {
                        return ${($_ = isset($this->services['twig.runtime.httpkernel']) ? $this->services['twig.runtime.httpkernel'] : $this->load(__DIR__.'/getTwig_Runtime_HttpkernelService.php')) && false ?: '_'};
                    }, 'Symfony\\Component\\Form\\FormRenderer' => function () {
                        return ${($_ = isset($this->services['twig.form.renderer']) ? $this->services['twig.form.renderer'] : $this->load(__DIR__.'/getTwig_Form_RendererService.php')) && false ?: '_'};
                    })
                )
            )
        );
        $instance->addGlobal('site', $this->parameters['config.application']);
        $instance->addGlobal('talkHelper', ${($_ = isset($this->services['OpenCFP\Http\View\TalkHelper']) ? $this->services['OpenCFP\Http\View\TalkHelper'] : $this->getTalkHelperService()) && false ?: '_'});
        (new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', null, 0, '.', ','))->configure($instance);

        return $instance;
    }

    /*
     * Gets the private 'Cartalyst\Sentinel\Sentinel' shared autowired service.
     *
     * @return \Cartalyst\Sentinel\Sentinel
     */
    protected function getSentinelService()
    {
        $a = new \Illuminate\Events\Dispatcher();

        $b = new \Cartalyst\Sentinel\Users\IlluminateUserRepository(new \Cartalyst\Sentinel\Hashing\NativeHasher(), $a);

        $this->services['Cartalyst\Sentinel\Sentinel'] = $instance = new \Cartalyst\Sentinel\Sentinel(new \Cartalyst\Sentinel\Persistences\IlluminatePersistenceRepository(new \OpenCFP\Infrastructure\Auth\SymfonySentinelSession(${($_ = isset($this->services['session']) ? $this->services['session'] : $this->getSessionService()) && false ?: '_'}), new \Cartalyst\Sentinel\Cookies\NullCookie()), $b, new \Cartalyst\Sentinel\Roles\IlluminateRoleRepository(), new \Cartalyst\Sentinel\Activations\IlluminateActivationRepository(), $a);

        $instance->setReminderRepository(new \Cartalyst\Sentinel\Reminders\IlluminateReminderRepository($b));
        $instance->setThrottleRepository(new \Cartalyst\Sentinel\Throttling\IlluminateThrottleRepository());

        return $instance;
    }

    /*
     * Gets the private 'HTMLPurifier' shared service.
     *
     * @return \HTMLPurifier
     */
    protected function getHTMLPurifierService()
    {
        $a = \HTMLPurifier_Config::createDefault();
        $a->set('Cache.SerializerPermissions', 493);
        $a->set('Cache.SerializerPath', ($this->targetDirs[0].'/htmlpurifier'));

        return $this->services['HTMLPurifier'] = new \HTMLPurifier($a);
    }

    /*
     * Gets the private 'OpenCFP\Domain\CallForPapers' shared autowired service.
     *
     * @return \OpenCFP\Domain\CallForPapers
     */
    protected function getCallForPapersService()
    {
        return $this->services['OpenCFP\Domain\CallForPapers'] = new \OpenCFP\Domain\CallForPapers(new \DateTimeImmutable('Jan. 18th, 2018'));
    }

    /*
     * Gets the private 'OpenCFP\Http\View\TalkHelper' shared autowired service.
     *
     * @return \OpenCFP\Http\View\TalkHelper
     */
    protected function getTalkHelperService()
    {
        return $this->services['OpenCFP\Http\View\TalkHelper'] = new \OpenCFP\Http\View\TalkHelper($this->parameters['talk.categories'], $this->parameters['talk.levels'], $this->parameters['talk.types']);
    }

    /*
     * Gets the private 'OpenCFP\Infrastructure\Auth\SentinelAuthentication' shared autowired service.
     *
     * @return \OpenCFP\Infrastructure\Auth\SentinelAuthentication
     */
    protected function getSentinelAuthenticationService()
    {
        return $this->services['OpenCFP\Infrastructure\Auth\SentinelAuthentication'] = new \OpenCFP\Infrastructure\Auth\SentinelAuthentication(${($_ = isset($this->services['Cartalyst\Sentinel\Sentinel']) ? $this->services['Cartalyst\Sentinel\Sentinel'] : $this->getSentinelService()) && false ?: '_'}, ${($_ = isset($this->services['OpenCFP\Domain\Services\AccountManagement']) ? $this->services['OpenCFP\Domain\Services\AccountManagement'] : $this->getAccountManagementService()) && false ?: '_'});
    }

    /*
     * Gets the private 'OpenCFP\Infrastructure\Event\AuthenticationListener' shared autowired service.
     *
     * @return \OpenCFP\Infrastructure\Event\AuthenticationListener
     */
    protected function getAuthenticationListenerService()
    {
        return $this->services['OpenCFP\Infrastructure\Event\AuthenticationListener'] = new \OpenCFP\Infrastructure\Event\AuthenticationListener(${($_ = isset($this->services['OpenCFP\Infrastructure\Auth\SentinelAuthentication']) ? $this->services['OpenCFP\Infrastructure\Auth\SentinelAuthentication'] : $this->getSentinelAuthenticationService()) && false ?: '_'}, ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'});
    }

    /*
     * Gets the private 'OpenCFP\Infrastructure\Event\CsrfValidationListener' shared autowired service.
     *
     * @return \OpenCFP\Infrastructure\Event\CsrfValidationListener
     */
    protected function getCsrfValidationListenerService()
    {
        return $this->services['OpenCFP\Infrastructure\Event\CsrfValidationListener'] = new \OpenCFP\Infrastructure\Event\CsrfValidationListener(new \OpenCFP\Infrastructure\Auth\CsrfValidator(${($_ = isset($this->services['security.csrf.token_manager']) ? $this->services['security.csrf.token_manager'] : $this->getSecurity_Csrf_TokenManagerService()) && false ?: '_'}), ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'});
    }

    /*
     * Gets the private 'OpenCFP\Infrastructure\Event\RequestCleanerListener' shared autowired service.
     *
     * @return \OpenCFP\Infrastructure\Event\RequestCleanerListener
     */
    protected function getRequestCleanerListenerService()
    {
        return $this->services['OpenCFP\Infrastructure\Event\RequestCleanerListener'] = new \OpenCFP\Infrastructure\Event\RequestCleanerListener(${($_ = isset($this->services['HTMLPurifier']) ? $this->services['HTMLPurifier'] : $this->getHTMLPurifierService()) && false ?: '_'});
    }

    /*
     * Gets the private 'OpenCFP\Infrastructure\Event\TwigGlobalsListener' shared autowired service.
     *
     * @return \OpenCFP\Infrastructure\Event\TwigGlobalsListener
     */
    protected function getTwigGlobalsListenerService()
    {
        return $this->services['OpenCFP\Infrastructure\Event\TwigGlobalsListener'] = new \OpenCFP\Infrastructure\Event\TwigGlobalsListener(${($_ = isset($this->services['OpenCFP\Infrastructure\Auth\SentinelAuthentication']) ? $this->services['OpenCFP\Infrastructure\Auth\SentinelAuthentication'] : $this->getSentinelAuthenticationService()) && false ?: '_'}, ${($_ = isset($this->services['OpenCFP\Domain\CallForPapers']) ? $this->services['OpenCFP\Domain\CallForPapers'] : $this->getCallForPapersService()) && false ?: '_'}, ${($_ = isset($this->services['session']) ? $this->services['session'] : $this->getSessionService()) && false ?: '_'}, ${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->getTwigService()) && false ?: '_'});
    }

    /*
     * Gets the private 'annotation_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader
     */
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\CachedReader(${($_ = isset($this->services['annotations.reader']) ? $this->services['annotations.reader'] : $this->getAnnotations_ReaderService()) && false ?: '_'}, new \Symfony\Component\Cache\DoctrineProvider(\Symfony\Component\Cache\Adapter\PhpArrayAdapter::create(($this->targetDirs[0].'/annotations.php'), ${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->getCache_AnnotationsService()) && false ?: '_'})), false);
    }

    /*
     * Gets the private 'annotations.reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    protected function getAnnotations_ReaderService()
    {
        $this->services['annotations.reader'] = $instance = new \Doctrine\Common\Annotations\AnnotationReader();

        $a = new \Doctrine\Common\Annotations\AnnotationRegistry();
        $a->registerLoader('class_exists');

        $instance->addGlobalIgnoredName('required', $a);

        return $instance;
    }

    /*
     * Gets the private 'argument_metadata_factory' shared service.
     *
     * @return \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory
     */
    protected function getArgumentMetadataFactoryService()
    {
        return $this->services['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory();
    }

    /*
     * Gets the private 'cache.annotations' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_AnnotationsService()
    {
        return $this->services['cache.annotations'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('HsraTWAQLV', 0, 'DSlTOdj6w97MWR6BjDgG6c', ($this->targetDirs[0].'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->getMonolog_Logger_CacheService()) && false ?: '_'});
    }

    /*
     * Gets the private 'config_cache_factory' shared service.
     *
     * @return \Symfony\Component\Config\ResourceCheckerConfigCacheFactory
     */
    protected function getConfigCacheFactoryService()
    {
        return $this->services['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory();
    }

    /*
     * Gets the private 'controller_name_converter' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser
     */
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'});
    }

    /*
     * Gets the private 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->services['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(null, null, -1, 0, false, ${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->services['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(null)) && false ?: '_'}, false);
    }

    /*
     * Gets the private 'debug.file_link_formatter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\FileLinkFormatter
     */
    protected function getDebug_FileLinkFormatterService()
    {
        return $this->services['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(null);
    }

    /*
     * Gets the private 'debug.stopwatch' shared service.
     *
     * @return \Symfony\Component\Stopwatch\Stopwatch
     */
    protected function getDebug_StopwatchService()
    {
        return $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true);
    }

    /*
     * Gets the private 'framework_extra_bundle.event.is_granted' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener
     */
    protected function getFrameworkExtraBundle_Event_IsGrantedService()
    {
        return $this->services['framework_extra_bundle.event.is_granted'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener(new \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter(${($_ = isset($this->services['argument_metadata_factory']) ? $this->services['argument_metadata_factory'] : $this->services['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory()) && false ?: '_'}), null);
    }

    /*
     * Gets the private 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->services['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, 'en', ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'});
    }

    /*
     * Gets the private 'monolog.handler.opencfp' shared service.
     *
     * @return \Monolog\Handler\StreamHandler
     */
    protected function getMonolog_Handler_OpencfpService()
    {
        $this->services['monolog.handler.opencfp'] = $instance = new \Monolog\Handler\StreamHandler('/application/log/app.log', 400, true, null);

        $instance->pushProcessor(new \Monolog\Processor\PsrLogMessageProcessor());

        return $instance;
    }

    /*
     * Gets the private 'monolog.logger.cache' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_CacheService()
    {
        $this->services['monolog.logger.cache'] = $instance = new \Symfony\Bridge\Monolog\Logger('cache');

        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.opencfp']) ? $this->services['monolog.handler.opencfp'] : $this->getMonolog_Handler_OpencfpService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the private 'monolog.logger.request' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->services['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.opencfp']) ? $this->services['monolog.handler.opencfp'] : $this->getMonolog_Handler_OpencfpService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the private 'resolve_controller_name_subscriber' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber
     */
    protected function getResolveControllerNameSubscriberService()
    {
        return $this->services['resolve_controller_name_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber(${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'})) && false ?: '_'});
    }

    /*
     * Gets the private 'response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ResponseListener
     */
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }

    /*
     * Gets the private 'router.request_context' shared service.
     *
     * @return \Symfony\Component\Routing\RequestContext
     */
    protected function getRouter_RequestContextService()
    {
        return $this->services['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /*
     * Gets the private 'router_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouterListenerService()
    {
        return $this->services['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.request']) ? $this->services['monolog.logger.request'] : $this->getMonolog_Logger_RequestService()) && false ?: '_'}, '/application', false);
    }

    /*
     * Gets the private 'sensio_framework_extra.cache.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener
     */
    protected function getSensioFrameworkExtra_Cache_ListenerService()
    {
        return $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener();
    }

    /*
     * Gets the private 'sensio_framework_extra.controller.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->services['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->getAnnotationReaderService()) && false ?: '_'});
    }

    /*
     * Gets the private 'sensio_framework_extra.converter.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        return $this->services['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener(${($_ = isset($this->services['sensio_framework_extra.converter.manager']) ? $this->services['sensio_framework_extra.converter.manager'] : $this->getSensioFrameworkExtra_Converter_ManagerService()) && false ?: '_'}, true);
    }

    /*
     * Gets the private 'sensio_framework_extra.converter.manager' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager
     */
    protected function getSensioFrameworkExtra_Converter_ManagerService()
    {
        $this->services['sensio_framework_extra.converter.manager'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();

        $instance->add(new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter(null, null), 0, 'doctrine.orm');
        $instance->add(new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter(), 0, 'datetime');

        return $instance;
    }

    /*
     * Gets the private 'sensio_framework_extra.view.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->services['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener(new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'}), ${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->getTwigService()) && false ?: '_'});
    }

    /*
     * Gets the private 'session.handler' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\Handler\StrictSessionHandler
     */
    protected function getSession_HandlerService()
    {
        return $this->services['session.handler'] = new \Symfony\Component\HttpFoundation\Session\Storage\Handler\StrictSessionHandler(new \Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler(($this->targetDirs[0].'/sessions')));
    }

    /*
     * Gets the private 'session.save_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SaveSessionListener
     */
    protected function getSession_SaveListenerService()
    {
        return $this->services['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener();
    }

    /*
     * Gets the private 'session.storage.metadata_bag' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag
     */
    protected function getSession_Storage_MetadataBagService()
    {
        return $this->services['session.storage.metadata_bag'] = new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', '0');
    }

    /*
     * Gets the private 'session.storage.native' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage
     */
    protected function getSession_Storage_NativeService()
    {
        return $this->services['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage($this->parameters['session.storage.options'], ${($_ = isset($this->services['session.handler']) ? $this->services['session.handler'] : $this->getSession_HandlerService()) && false ?: '_'}, ${($_ = isset($this->services['session.storage.metadata_bag']) ? $this->services['session.storage.metadata_bag'] : $this->services['session.storage.metadata_bag'] = new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', '0')) && false ?: '_'});
    }

    /*
     * Gets the private 'session_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SessionListener
     */
    protected function getSessionListenerService()
    {
        return $this->services['session_listener'] = new \Symfony\Component\HttpKernel\EventListener\SessionListener(
            new \Symfony\Component\DependencyInjection\ServiceLocator(
                array('session' => function () {
                    return ${($_ = isset($this->services['session']) ? $this->services['session'] : $this->getSessionService()) && false ?: '_'};
                })
            )
        );
    }

    /*
     * Gets the private 'streamed_response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener
     */
    protected function getStreamedResponseListenerService()
    {
        return $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }

    /*
     * Gets the private 'translator.default' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\Translator
     */
    protected function getTranslator_DefaultService()
    {
        $this->services['translator.default'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator(
            new \Symfony\Component\DependencyInjection\ServiceLocator(
                array('translation.loader.csv' => function () {
                    return ${($_ = isset($this->services['translation.loader.csv']) ? $this->services['translation.loader.csv'] : $this->services['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader()) && false ?: '_'};
                }, 'translation.loader.dat' => function () {
                    return ${($_ = isset($this->services['translation.loader.dat']) ? $this->services['translation.loader.dat'] : $this->services['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader()) && false ?: '_'};
                }, 'translation.loader.ini' => function () {
                    return ${($_ = isset($this->services['translation.loader.ini']) ? $this->services['translation.loader.ini'] : $this->services['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader()) && false ?: '_'};
                }, 'translation.loader.json' => function () {
                    return ${($_ = isset($this->services['translation.loader.json']) ? $this->services['translation.loader.json'] : $this->services['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader()) && false ?: '_'};
                }, 'translation.loader.mo' => function () {
                    return ${($_ = isset($this->services['translation.loader.mo']) ? $this->services['translation.loader.mo'] : $this->services['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader()) && false ?: '_'};
                }, 'translation.loader.php' => function () {
                    return ${($_ = isset($this->services['translation.loader.php']) ? $this->services['translation.loader.php'] : $this->services['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader()) && false ?: '_'};
                }, 'translation.loader.po' => function () {
                    return ${($_ = isset($this->services['translation.loader.po']) ? $this->services['translation.loader.po'] : $this->services['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader()) && false ?: '_'};
                }, 'translation.loader.qt' => function () {
                    return ${($_ = isset($this->services['translation.loader.qt']) ? $this->services['translation.loader.qt'] : $this->services['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader()) && false ?: '_'};
                }, 'translation.loader.res' => function () {
                    return ${($_ = isset($this->services['translation.loader.res']) ? $this->services['translation.loader.res'] : $this->services['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader()) && false ?: '_'};
                }, 'translation.loader.xliff' => function () {
                    return ${($_ = isset($this->services['translation.loader.xliff']) ? $this->services['translation.loader.xliff'] : $this->services['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader()) && false ?: '_'};
                }, 'translation.loader.yml' => function () {
                    return ${($_ = isset($this->services['translation.loader.yml']) ? $this->services['translation.loader.yml'] : $this->services['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader()) && false ?: '_'};
                })
            ), new \Symfony\Component\Translation\Formatter\MessageFormatter(new \Symfony\Component\Translation\MessageSelector()), 'en', array('translation.loader.php' => array(0 => 'php'), 'translation.loader.yml' => array(0 => 'yaml', 1 => 'yml'), 'translation.loader.xliff' => array(0 => 'xlf', 1 => 'xliff'), 'translation.loader.po' => array(0 => 'po'), 'translation.loader.mo' => array(0 => 'mo'), 'translation.loader.qt' => array(0 => 'ts'), 'translation.loader.csv' => array(0 => 'csv'), 'translation.loader.res' => array(0 => 'res'), 'translation.loader.dat' => array(0 => 'dat'), 'translation.loader.ini' => array(0 => 'ini'), 'translation.loader.json' => array(0 => 'json')), array('cache_dir' => ($this->targetDirs[0].'/translations'), 'debug' => false, 'resource_files' => array('af' => array(0 => '/application/vendor/symfony/validator/Resources/translations/validators.af.xlf'), 'ar' => array(0 => '/application/vendor/symfony/validator/Resources/translations/validators.ar.xlf', 1 => '/application/vendor/symfony/form/Resources/translations/validators.ar.xlf', 2 => '/application/vendor/symfony/security-core/Resources/translations/security.ar.xlf'), 'az' => array(0 => '/application/vendor/symfony/validator/Resources/translations/validators.az.xlf', 1 => '/application/vendor/symfony/form/Resources/translations/validators.az.xlf', 2 => '/application/vendor/symfony/security-core/Resources/translations/security.az.xlf'), 'bg' => array(0 => '/application/vendor/symfony/validator/Resources/translations/validators.bg.xlf', 1 => '/application/vendor/symfony/form/Resources/translations/validators.bg.xlf', 2 => '/application/vendor/symfony/security-core/Resources/translations/security.bg.xlf'), 'ca' => array(0 => '/application/vendor/symfony/validator/Resources/translations/validators.ca.xlf', 1 => '/application/vendor/symfony/form/Resources/translations/validators.ca.xlf', 2 => '/application/vendor/symfony/security-core/Resources/translations/security.ca.xlf'), 'cs' => array(0 => '/application/vendor/symfony/validator/Resources/translations/validators.cs.xlf', 1 => '/application/vendor/symfony/form/Resources/translations/validators.cs.xlf', 2 => '/application/vendor/symfony/security-core/Resources/translations/security.cs.xlf'), 'cy' => array(0 => '/application/vendor/symfony/validator/Resources/translations/validators.cy.xlf'), 'da' => array(0 => '/application/vendor/symfony/validator/Resources/translations/validators.da.xlf', 1 => '/application/vendor/symfony/form/Resources/translations/validators.da.xlf', 2 => '/application/vendor/symfony/security-core/Resources/translations/security.da.xlf'), 'de' => array(0 => '/application/vendor/symfony/validator/Resources/translations/validators.de.xlf', 1 => '/application/vendor/symfony/form/Resources/translations/validators.de.xlf', 2 => '/application/vendor/symfony/security-core/Resources/translations/security.de.xlf'), 'el' => array(0 => '/application/vendor/symfony/validator/Resources/translations/validators.el.xlf', 1 => '/application/vendor/symfony/form/Resources/translations/validators.el.xlf', 2 => '/application/vendor/symfony/security-core/Resources/translations/security.el.xlf'), 'en' => array(0 => '/application/vendor/symfony/validator/Resources/translations/validators.en.xlf', 1 => '/application/vendor/symfony/form/Resources/translations/validators.en.xlf', 2 => '/application/vendor/symfony/security-core/Resources/translations/security.en.xlf'), 'es' => array(0 => '/application/vendor/symfony/validator/Resources/translations/validators.es.xlf', 1 => '/application/vendor/symfony/form/Resources/translations/validators.es.xlf', 2 => '/application/vendor/symfony/security-core/Resources/translations/security.es.xlf'), 'et' => array(0 => '/application/vendor/symfony/validator/Resources/translations/validators.et.xlf', 1 => '/application/vendor/symfony/form/Resources/translations/validators.et.xlf'), 'eu' => array(0 => '/application/vendor/symfony/validator/Resources/translations/validators.eu.xlf', 1 => '/application/vendor/symfony/form/Resources/translations/validators.eu.xlf'), 'fa' => array(0 => '/application/vendor/symfony/validator/Resources/translations/validators.fa.xlf', 1 => '/application/vendor/symfony/form/Resources/translations/validators.fa.xlf', 2 => '/application/vendor/symfony/security-core/Resources/translations/security.fa.xlf'), 'fi' => array(0 => '/application/vendor/symfony/validator/Resources/translations/validators.fi.xlf', 1 => '/application/vendor/symfony/form/Resources/translations/validators.fi.xlf'), 'fr' => array(0 => '/application/vendor/symfony/validator/Resources/translations/validators.fr.xlf', 1 => '/application/vendor/symfony/form/Resources/translations/validators.fr.xlf', 2 => '/application/vendor/symfony/security-core/Resources/translations/security.fr.xlf'), 'gl' => array(0 => '/application/vendor/symfony/validator/Resources/translations/validators.gl.xlf', 1 => '/application/vendor/symfony/form/Resources/translations/validators.gl.xlf', 2 => '/application/vendor/symfony/security-core/Resources/translations/security.gl.xlf'), 'he' => array(0 => '/application/vendor/symfony/validator/Resources/translations/validators.he.xlf', 1 => '/application/vendor/symfony/form/Resources/translations/validators.he.xlf', 2 => '/application/vendor/symfony/security-core/Resources/translations/security.he.xlf'), 'hr' => array(0 => '/application/vendor/symfony/validator/Resources/translations/validators.hr.xlf', 1 => '/application/vendor/symfony/form/Resources/translations/validators.hr.xlf', 2 => '/application/vendor/symfony/security-core/Resources/translations/security.hr.xlf'), 'hu' => array(0 => '/application/vendor/symfony/validator/Resources/translations/validators.hu.xlf', 1 => '/application/vendor/symfony/form/Resources/translations/validators.hu.xlf', 2 => '/application/vendor/symfony/security-core/Resources/translations/security.hu.xlf'), 'hy' => array(0 => '/application/vendor/symfony/validator/Resources/translations/validators.hy.xlf', 1 => '/application/vendor/symfony/form/Resources/translations/validators.hy.xlf'), 'id' => array(0 => '/application/vendor/symfony/validator/Resources/translations/validators.id.xlf', 1 => '/application/vendor/symfony/form/Resources/translations/validators.id.xlf', 2 => '/application/vendor/symfony/security-core/Resources/translations/security.id.xlf'), 'it' => array(0 => '/application/vendor/symfony/validator/Resources/translations/validators.it.xlf', 1 => '/application/vendor/symfony/form/Resources/translations/validators.it.xlf', 2 => '/application/vendor/symfony/security-core/Resources/translations/security.it.xlf'), 'ja' => array(0 => '/application/vendor/symfony/validator/Resources/translations/validators.ja.xlf', 1 => '/application/vendor/symfony/form/Resources/translations/validators.ja.xlf', 2 => '/application/vendor/symfony/security-core/Resources/translations/security.ja.xlf'), 'lb' => array(0 => '/application/vendor/symfony/validator/Resources/translations/validators.lb.xlf', 1 => '/application/vendor/symfony/form/Resources/translations/validators.lb.xlf', 2 => '/application/vendor/symfony/security-core/Resources/translations/security.lb.xlf'), 'lt' => array(0 => '/application/vendor/symfony/validator/Resources/translations/validators.lt.xlf', 1 => '/application/vendor/symfony/form/Resources/translations/validators.lt.xlf', 2 => '/application/vendor/symfony/security-core/Resources/translations/security.lt.xlf'), 'lv' => array(0 => '/application/vendor/symfony/validator/Resources/translations/validators.lv.xlf', 1 => '/application/vendor/symfony/form/Resources/translations/validators.lv.xlf', 2 => '/application/vendor/symfony/security-core/Resources/translations/security.lv.xlf'), 'mn' => array(0 => '/application/vendor/symfony/validator/Resources/translations/validators.mn.xlf', 1 => '/application/vendor/symfony/form/Resources/translations/validators.mn.xlf'), 'nl' => array(0 => '/application/vendor/symfony/validator/Resources/translations/validators.nl.xlf', 1 => '/application/vendor/symfony/form/Resources/translations/validators.nl.xlf', 2 => '/application/vendor/symfony/security-core/Resources/translations/security.nl.xlf'), 'nn' => array(0 => '/application/vendor/symfony/validator/Resources/translations/validators.nn.xlf'), 'no' => array(0 => '/application/vendor/symfony/validator/Resources/translations/validators.no.xlf', 1 => '/application/vendor/symfony/form/Resources/translations/validators.no.xlf', 2 => '/application/vendor/symfony/security-core/Resources/translations/security.no.xlf'), 'pl' => array(0 => '/application/vendor/symfony/validator/Resources/translations/validators.pl.xlf', 1 => '/application/vendor/symfony/form/Resources/translations/validators.pl.xlf', 2 => '/application/vendor/symfony/security-core/Resources/translations/security.pl.xlf'), 'pt' => array(0 => '/application/vendor/symfony/validator/Resources/translations/validators.pt.xlf', 1 => '/application/vendor/symfony/form/Resources/translations/validators.pt.xlf'), 'pt_BR' => array(0 => '/application/vendor/symfony/validator/Resources/translations/validators.pt_BR.xlf', 1 => '/application/vendor/symfony/form/Resources/translations/validators.pt_BR.xlf', 2 => '/application/vendor/symfony/security-core/Resources/translations/security.pt_BR.xlf'), 'ro' => array(0 => '/application/vendor/symfony/validator/Resources/translations/validators.ro.xlf', 1 => '/application/vendor/symfony/form/Resources/translations/validators.ro.xlf', 2 => '/application/vendor/symfony/security-core/Resources/translations/security.ro.xlf'), 'ru' => array(0 => '/application/vendor/symfony/validator/Resources/translations/validators.ru.xlf', 1 => '/application/vendor/symfony/form/Resources/translations/validators.ru.xlf', 2 => '/application/vendor/symfony/security-core/Resources/translations/security.ru.xlf'), 'sk' => array(0 => '/application/vendor/symfony/validator/Resources/translations/validators.sk.xlf', 1 => '/application/vendor/symfony/form/Resources/translations/validators.sk.xlf', 2 => '/application/vendor/symfony/security-core/Resources/translations/security.sk.xlf'), 'sl' => array(0 => '/application/vendor/symfony/validator/Resources/translations/validators.sl.xlf', 1 => '/application/vendor/symfony/form/Resources/translations/validators.sl.xlf', 2 => '/application/vendor/symfony/security-core/Resources/translations/security.sl.xlf'), 'sq' => array(0 => '/application/vendor/symfony/validator/Resources/translations/validators.sq.xlf'), 'sr_Cyrl' => array(0 => '/application/vendor/symfony/validator/Resources/translations/validators.sr_Cyrl.xlf', 1 => '/application/vendor/symfony/form/Resources/translations/validators.sr_Cyrl.xlf', 2 => '/application/vendor/symfony/security-core/Resources/translations/security.sr_Cyrl.xlf'), 'sr_Latn' => array(0 => '/application/vendor/symfony/validator/Resources/translations/validators.sr_Latn.xlf', 1 => '/application/vendor/symfony/form/Resources/translations/validators.sr_Latn.xlf', 2 => '/application/vendor/symfony/security-core/Resources/translations/security.sr_Latn.xlf'), 'sv' => array(0 => '/application/vendor/symfony/validator/Resources/translations/validators.sv.xlf', 1 => '/application/vendor/symfony/form/Resources/translations/validators.sv.xlf', 2 => '/application/vendor/symfony/security-core/Resources/translations/security.sv.xlf'), 'th' => array(0 => '/application/vendor/symfony/validator/Resources/translations/validators.th.xlf', 1 => '/application/vendor/symfony/security-core/Resources/translations/security.th.xlf'), 'tr' => array(0 => '/application/vendor/symfony/validator/Resources/translations/validators.tr.xlf', 1 => '/application/vendor/symfony/security-core/Resources/translations/security.tr.xlf'), 'uk' => array(0 => '/application/vendor/symfony/validator/Resources/translations/validators.uk.xlf', 1 => '/application/vendor/symfony/form/Resources/translations/validators.uk.xlf'), 'vi' => array(0 => '/application/vendor/symfony/validator/Resources/translations/validators.vi.xlf', 1 => '/application/vendor/symfony/security-core/Resources/translations/security.vi.xlf'), 'zh_CN' => array(0 => '/application/vendor/symfony/validator/Resources/translations/validators.zh_CN.xlf', 1 => '/application/vendor/symfony/form/Resources/translations/validators.zh_CN.xlf', 2 => '/application/vendor/symfony/security-core/Resources/translations/security.zh_CN.xlf'), 'zh_TW' => array(0 => '/application/vendor/symfony/validator/Resources/translations/validators.zh_TW.xlf'), 'pt_PT' => array(0 => '/application/vendor/symfony/security-core/Resources/translations/security.pt_PT.xlf'), 'ua' => array(0 => '/application/vendor/symfony/security-core/Resources/translations/security.ua.xlf')))
        );

        $instance->setConfigCacheFactory(${($_ = isset($this->services['config_cache_factory']) ? $this->services['config_cache_factory'] : $this->services['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory()) && false ?: '_'});
        $instance->setFallbackLocales(array(0 => 'en'));

        return $instance;
    }

    /*
     * Gets the private 'translator_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\TranslatorListener
     */
    protected function getTranslatorListenerService()
    {
        return $this->services['translator_listener'] = new \Symfony\Component\HttpKernel\EventListener\TranslatorListener(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'});
    }

    /*
     * Gets the private 'twig.loader' shared service.
     *
     * @return \Twig\Loader\FilesystemLoader
     */
    protected function getTwig_LoaderService()
    {
        $this->services['twig.loader'] = $instance = new \Twig\Loader\FilesystemLoader(array(), '/application');

        $instance->addPath('/application/vendor/symfony/framework-bundle/Resources/views', 'Framework');
        $instance->addPath('/application/vendor/symfony/framework-bundle/Resources/views', '!Framework');
        $instance->addPath('/application/resources/views/bundles/TwigBundle', 'Twig');
        $instance->addPath('/application/vendor/symfony/twig-bundle/Resources/views', 'Twig');
        $instance->addPath('/application/vendor/symfony/twig-bundle/Resources/views', '!Twig');
        $instance->addPath('/application/vendor/symfony/swiftmailer-bundle/Resources/views', 'Swiftmailer');
        $instance->addPath('/application/vendor/symfony/swiftmailer-bundle/Resources/views', '!Swiftmailer');
        $instance->addPath('/application/vendor/wouterj/eloquent-bundle/Resources/views', 'WouterJEloquent');
        $instance->addPath('/application/vendor/wouterj/eloquent-bundle/Resources/views', '!WouterJEloquent');
        $instance->addPath('/application/resources/views');
        $instance->addPath('/application/vendor/symfony/twig-bridge/Resources/views/Form');

        return $instance;
    }

    /*
     * Gets the private 'validate_request_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener
     */
    protected function getValidateRequestListenerService()
    {
        return $this->services['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener();
    }

    /*
     * Gets the private 'wouterj_eloquent.twig.sql_format_extension' shared service.
     *
     * @return \WouterJ\EloquentBundle\Twig\SqlFormatterExtension
     */
    protected function getWouterjEloquent_Twig_SqlFormatExtensionService()
    {
        return $this->services['wouterj_eloquent.twig.sql_format_extension'] = new \WouterJ\EloquentBundle\Twig\SqlFormatterExtension();
    }

    public function getParameter($name)
    {
        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            $name = $this->normalizeParameterName($name);

            if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
                throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
            }
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name)
    {
        $name = $this->normalizeParameterName($name);

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = array(
        'kernel.cache_dir' => false,
        'session.save_path' => false,
        'validator.mapping.cache.file' => false,
    );
    private $dynamicParameters = array();

    /*
     * Computes a dynamic parameter.
     *
     * @param string The name of the dynamic parameter to load
     *
     * @return mixed The value of the dynamic parameter
     *
     * @throws InvalidArgumentException When the dynamic parameter does not exist
     */
    private function getDynamicParameter($name)
    {
        switch ($name) {
        case 'kernel.cache_dir': $value = $this->targetDirs[0]; 
            break;
        case 'session.save_path': $value = ($this->targetDirs[0].'/sessions'); 
            break;
        case 'validator.mapping.cache.file': $value = ($this->targetDirs[0].'/validation.php'); 
            break;
        default: 
            throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    private $normalizedParameterNames = array();

    private function normalizeParameterName($name)
    {
        if (isset($this->normalizedParameterNames[$normalizedName = strtolower($name)]) || isset($this->parameters[$normalizedName]) || array_key_exists($normalizedName, $this->parameters)) {
            $normalizedName = isset($this->normalizedParameterNames[$normalizedName]) ? $this->normalizedParameterNames[$normalizedName] : $normalizedName;
            if ((string) $name !== $normalizedName) {
                @trigger_error(sprintf('Parameter names will be made case sensitive in Symfony 4.0. Using "%s" instead of "%s" is deprecated since version 3.4.', $name, $normalizedName), E_USER_DEPRECATED);
            }
        } else {
            $normalizedName = $this->normalizedParameterNames[$normalizedName] = (string) $name;
        }

        return $normalizedName;
    }

    /*
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'kernel.root_dir' => '/application/classes',
            'kernel.project_dir' => '/application',
            'kernel.environment' => 'production',
            'kernel.debug' => false,
            'kernel.name' => 'OpenCFP',
            'kernel.logs_dir' => '/application/log',
            'kernel.bundles' => array(
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'WouterJEloquentBundle' => 'WouterJ\\EloquentBundle\\WouterJEloquentBundle',
            ),
            'kernel.bundles_metadata' => array(
                'FrameworkBundle' => array(
                    'parent' => null,
                    'path' => '/application/vendor/symfony/framework-bundle',
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ),
                'SensioFrameworkExtraBundle' => array(
                    'parent' => null,
                    'path' => '/application/vendor/sensio/framework-extra-bundle',
                    'namespace' => 'Sensio\\Bundle\\FrameworkExtraBundle',
                ),
                'MonologBundle' => array(
                    'parent' => null,
                    'path' => '/application/vendor/symfony/monolog-bundle',
                    'namespace' => 'Symfony\\Bundle\\MonologBundle',
                ),
                'TwigBundle' => array(
                    'parent' => null,
                    'path' => '/application/vendor/symfony/twig-bundle',
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ),
                'SwiftmailerBundle' => array(
                    'parent' => null,
                    'path' => '/application/vendor/symfony/swiftmailer-bundle',
                    'namespace' => 'Symfony\\Bundle\\SwiftmailerBundle',
                ),
                'WouterJEloquentBundle' => array(
                    'parent' => null,
                    'path' => '/application/vendor/wouterj/eloquent-bundle',
                    'namespace' => 'WouterJ\\EloquentBundle',
                ),
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'OpenCFPProductionProjectContainer',
            'config.application' => array(
                'title' => 'Darkmira Tour PHP 2018',
                'url' => 'http://cfpt.darkmiratour.rocks',
                'email' => 'cgrandval@darkmira.com.br',
                'eventurl' => 'https://php.darkmiratour.rocks/2018',
                'event_location' => 'Brasília, DF, Brazil',
                'enddate' => 'Jan. 18th, 2018',
                'show_submission_count' => false,
                'airport' => 'BSB',
                'arrival' => 1523664000,
                'departure' => 1523750400,
                'secure_ssl' => false,
                'online_conference' => false,
                'date_format' => 'd/m/Y',
                'date_timezone' => 'America/Recife',
                'coc_link' => 'http://cfpt.darkmiratour.rocks/coc',
                'show_contrib_banner' => true,
                'venue_image_path' => '/assets/img/venue.jpg',
            ),
            'log.level' => 'error',
            'talk.categories' => array(
                'bestpractices' => 'Development / Security best practices',
                'security' => 'Web / PHP security',
                'tools' => 'Security / Development tools',
                'testing' => 'Testing (unit, functional, etc.)',
                'patterns' => 'Design patterns',
                'versioning' => 'Version control',
                'ux' => 'User Cases / Experiences',
                'api' => 'APIs (REST, SOAP, whatever)',
                'continuous' => 'Continuous Integration / Deployment',
                'framework' => 'Framework-related topics',
                'prodev' => 'Professional development',
                'devops' => 'Devops',
                'other' => 'Others',
            ),
            'talk.levels' => array(
                'entry' => 'Entry level',
                'mid' => 'Mid-level',
                'advanced' => 'Advanced',
            ),
            'talk.types' => array(
                'regular' => 'Regular (40 mins + 10 questions)',
                'lightning' => 'Lightning talks (10 mins)',
            ),
            'reviewer.users' => array(
                0 => null,
            ),
            'application.title' => 'Darkmira Tour PHP 2018',
            'application.url' => 'http://cfpt.darkmiratour.rocks',
            'application.email' => 'cgrandval@darkmira.com.br',
            'application.eventurl' => 'https://php.darkmiratour.rocks/2018',
            'application.event_location' => 'Brasília, DF, Brazil',
            'application.enddate' => 'Jan. 18th, 2018',
            'application.show_submission_count' => false,
            'application.airport' => 'BSB',
            'application.arrival' => 1523664000,
            'application.departure' => 1523750400,
            'application.secure_ssl' => false,
            'application.online_conference' => false,
            'application.date_format' => 'd/m/Y',
            'application.date_timezone' => 'America/Recife',
            'application.coc_link' => 'http://cfpt.darkmiratour.rocks/coc',
            'application.show_contrib_banner' => true,
            'application.venue_image_path' => '/assets/img/venue.jpg',
            'database.host' => '127.0.0.1',
            'database.database' => 'php_096_cfp_20',
            'database.dsn' => 'mysql:dbname=php_096_cfp_20;host=localhost',
            'database.user' => 'cfp_dmt_394_php',
            'database.password' => 'ktR{MrrergETxir7N;U;vJEz3uDjJhA9QNzXv8ng',
            'mail.host' => 'smtp.gmail.com',
            'mail.port' => 465,
            'mail.username' => 'no-reply@darkmiratour.com',
            'mail.password' => 'NkTBnpBq6#NmYfFdFWy]C9zk8pshtB8nE$g4L',
            'mail.encryption' => 'ssl',
            'mail.auth_mode' => 'login',
            'security.firewalls' => array(
                'secured_area' => array(
                    'form_forgot' => array(
                        'csrf_parameter' => '_csrf_security_token',
                        'csrf_token_id' => 'forgot_password',
                    ),
                ),
            ),
            'fragment.renderer.hinclude.global_template' => '',
            'fragment.path' => '/_fragment',
            'kernel.secret' => 'opencfp',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => array(

            ),
            'kernel.default_locale' => 'en',
            'templating.helper.code.file_link_format' => null,
            'debug.file_link_format' => null,
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => array(
                'cookie_httponly' => true,
                'gc_probability' => 1,
                'use_strict_mode' => true,
            ),
            'session.metadata.update_threshold' => '0',
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'validator.mapping.cache.prefix' => '',
            'validator.translation_domain' => 'validators',
            'translator.logging' => false,
            'translator.default_path' => '/application/translations',
            'data_collector.templates' => array(

            ),
            'debug.error_handler.throw_at' => 0,
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'router.options.matcher.cache_class' => 'OpenCFPProductionProjectContainerUrlMatcher',
            'router.options.generator.cache_class' => 'OpenCFPProductionProjectContainerUrlGenerator',
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => '/application/resources/config/routing.yml',
            'router.cache_class_prefix' => 'OpenCFPProductionProjectContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => array(

            ),
            'monolog.handlers_to_channels' => array(
                'monolog.handler.opencfp' => null,
            ),
            'twig.exception_listener.controller' => 'twig.controller.exception:showAction',
            'twig.form.resources' => array(
                0 => 'form_div_layout.html.twig',
            ),
            'twig.default_path' => '/application/resources/views',
            'swiftmailer.mailer.default.transport.name' => 'smtp',
            'swiftmailer.mailer.default.transport.smtp.encryption' => 'ssl',
            'swiftmailer.mailer.default.transport.smtp.port' => 465,
            'swiftmailer.mailer.default.transport.smtp.host' => 'smtp.gmail.com',
            'swiftmailer.mailer.default.transport.smtp.username' => 'no-reply@darkmiratour.com',
            'swiftmailer.mailer.default.transport.smtp.password' => 'NkTBnpBq6#NmYfFdFWy]C9zk8pshtB8nE$g4L',
            'swiftmailer.mailer.default.transport.smtp.auth_mode' => 'login',
            'swiftmailer.mailer.default.transport.smtp.timeout' => 30,
            'swiftmailer.mailer.default.transport.smtp.source_ip' => null,
            'swiftmailer.mailer.default.transport.smtp.local_domain' => null,
            'swiftmailer.mailer.default.spool.enabled' => false,
            'swiftmailer.mailer.default.plugin.impersonate' => null,
            'swiftmailer.mailer.default.single_address' => null,
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.spool.enabled' => false,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => null,
            'swiftmailer.mailers' => array(
                'default' => 'swiftmailer.mailer.default',
            ),
            'swiftmailer.default_mailer' => 'default',
            'wouterj_eloquent.migrations.table' => 'migrations',
            'wouterj_eloquent.migration_path' => '/application/classes/migrations',
            'wouterj_eloquent.app_seeder_path' => '/application/src',
            'wouterj_eloquent.project_path' => '/application',
            'wouterj_eloquent.default_connection' => 'default',
            'console.command.ids' => array(
                'console.command.opencfp_console_command_usercreatecommand' => 'console.command.opencfp_console_command_usercreatecommand',
                'console.command.opencfp_console_command_userdemotecommand' => 'console.command.opencfp_console_command_userdemotecommand',
                'console.command.opencfp_console_command_userpromotecommand' => 'console.command.opencfp_console_command_userpromotecommand',
                'console.command.symfony_bundle_frameworkbundle_command_aboutcommand' => 'console.command.about',
                'console.command.symfony_bundle_frameworkbundle_command_assetsinstallcommand' => 'console.command.assets_install',
                'console.command.symfony_bundle_frameworkbundle_command_cacheclearcommand' => 'console.command.cache_clear',
                'console.command.symfony_bundle_frameworkbundle_command_cachepoolclearcommand' => 'console.command.cache_pool_clear',
                'console.command.symfony_bundle_frameworkbundle_command_cachepoolprunecommand' => 'console.command.cache_pool_prune',
                'console.command.symfony_bundle_frameworkbundle_command_cachewarmupcommand' => 'console.command.cache_warmup',
                'console.command.symfony_bundle_frameworkbundle_command_configdebugcommand' => 'console.command.config_debug',
                'console.command.symfony_bundle_frameworkbundle_command_configdumpreferencecommand' => 'console.command.config_dump_reference',
                'console.command.symfony_bundle_frameworkbundle_command_containerdebugcommand' => 'console.command.container_debug',
                'console.command.symfony_bundle_frameworkbundle_command_debugautowiringcommand' => 'console.command.debug_autowiring',
                'console.command.symfony_bundle_frameworkbundle_command_eventdispatcherdebugcommand' => 'console.command.event_dispatcher_debug',
                'console.command.symfony_bundle_frameworkbundle_command_routerdebugcommand' => 'console.command.router_debug',
                'console.command.symfony_bundle_frameworkbundle_command_routermatchcommand' => 'console.command.router_match',
                'console.command.symfony_bundle_frameworkbundle_command_translationdebugcommand' => 'console.command.translation_debug',
                'console.command.symfony_bundle_frameworkbundle_command_translationupdatecommand' => 'console.command.translation_update',
                'console.command.symfony_bundle_frameworkbundle_command_xlifflintcommand' => 'console.command.xliff_lint',
                'console.command.symfony_bundle_frameworkbundle_command_yamllintcommand' => 'console.command.yaml_lint',
                'console.command.symfony_component_form_command_debugcommand' => 'console.command.form_debug',
                'console.command.symfony_bridge_twig_command_debugcommand' => 'twig.command.debug',
                'console.command.symfony_bundle_twigbundle_command_lintcommand' => 'twig.command.lint',
                'console.command.symfony_bundle_swiftmailerbundle_command_debugcommand' => 'swiftmailer.command.debug',
                'console.command.symfony_bundle_swiftmailerbundle_command_newemailcommand' => 'swiftmailer.command.new_email',
                'console.command.symfony_bundle_swiftmailerbundle_command_sendemailcommand' => 'swiftmailer.command.send_email',
                'console.command.wouterj_eloquentbundle_command_migratecommand' => 'wouterj_eloquent.commands.migrate',
                'console.command.wouterj_eloquentbundle_command_migratefreshcommand' => 'wouterj_eloquent.commands.migrate_fresh',
                'console.command.wouterj_eloquentbundle_command_migrateinstallcommand' => 'wouterj_eloquent.commands.migrate_install',
                'console.command.wouterj_eloquentbundle_command_migratemakecommand' => 'wouterj_eloquent.commands.migrate_make',
                'console.command.wouterj_eloquentbundle_command_migraterefreshcommand' => 'wouterj_eloquent.commands.migrate_refresh',
                'console.command.wouterj_eloquentbundle_command_migrateresetcommand' => 'wouterj_eloquent.commands.migrate_reset',
                'console.command.wouterj_eloquentbundle_command_migraterollbackcommand' => 'wouterj_eloquent.commands.migrate_rollback',
                'console.command.wouterj_eloquentbundle_command_migratestatuscommand' => 'wouterj_eloquent.commands.migrate_status',
                'console.command.wouterj_eloquentbundle_command_seedcommand' => 'wouterj_eloquent.commands.seed',
                'console.command.wouterj_eloquentbundle_command_seedermakecommand' => 'wouterj_eloquent.commands.seed_make',
            ),
            'console.lazy_command.ids' => array(
                'console.command.about' => true,
                'console.command.assets_install' => true,
                'console.command.cache_clear' => true,
                'console.command.cache_pool_clear' => true,
                'console.command.cache_pool_prune' => true,
                'console.command.cache_warmup' => true,
                'console.command.config_debug' => true,
                'console.command.config_dump_reference' => true,
                'console.command.container_debug' => true,
                'console.command.debug_autowiring' => true,
                'console.command.event_dispatcher_debug' => true,
                'console.command.router_debug' => true,
                'console.command.router_match' => true,
                'console.command.translation_debug' => true,
                'console.command.translation_update' => true,
                'console.command.xliff_lint' => true,
                'console.command.yaml_lint' => true,
                'console.command.form_debug' => true,
                'twig.command.debug' => true,
                'twig.command.lint' => true,
                'swiftmailer.command.debug' => true,
                'swiftmailer.command.new_email' => true,
                'swiftmailer.command.send_email' => true,
                'wouterj_eloquent.commands.migrate' => true,
                'wouterj_eloquent.commands.migrate_fresh' => true,
                'wouterj_eloquent.commands.migrate_install' => true,
                'wouterj_eloquent.commands.migrate_make' => true,
                'wouterj_eloquent.commands.migrate_refresh' => true,
                'wouterj_eloquent.commands.migrate_reset' => true,
                'wouterj_eloquent.commands.migrate_rollback' => true,
                'wouterj_eloquent.commands.migrate_status' => true,
                'wouterj_eloquent.commands.seed' => true,
                'wouterj_eloquent.commands.seed_make' => true,
            ),
        );
    }
}
