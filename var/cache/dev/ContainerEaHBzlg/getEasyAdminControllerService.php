<?php

namespace ContainerEaHBzlg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEasyAdminControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'EasyCorp\Bundle\EasyAdminBundle\Controller\EasyAdminController' shared autowired service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Controller\EasyAdminController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Controller/AdminControllerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Controller/EasyAdminController.php';

        $container->services['EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\EasyAdminController'] = $instance = new \EasyCorp\Bundle\EasyAdminBundle\Controller\EasyAdminController();

        $instance->setContainer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'easyadmin.autocomplete' => ['services', 'easyadmin.autocomplete', 'getEasyadmin_AutocompleteService', true],
            'easyadmin.config.manager' => ['services', 'easyadmin.config.manager', 'getEasyadmin_Config_ManagerService', false],
            'easyadmin.filter.registry' => ['services', 'easyadmin.filter.registry', 'getEasyadmin_Filter_RegistryService', false],
            'easyadmin.paginator' => ['services', 'easyadmin.paginator', 'getEasyadmin_PaginatorService', true],
            'easyadmin.property_accessor' => ['services', 'easyadmin.property_accessor', 'getEasyadmin_PropertyAccessorService', false],
            'easyadmin.query_builder' => ['services', 'easyadmin.query_builder', 'getEasyadmin_QueryBuilderService', true],
            'easyadmin.security.authorization_checker' => ['services', 'easyadmin.security.authorization_checker', 'getEasyadmin_Security_AuthorizationCheckerService', false],
            'event_dispatcher' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'form.factory' => ['services', '.container.private.form.factory', 'get_Container_Private_Form_FactoryService', true],
            'http_kernel' => ['services', 'http_kernel', 'getHttpKernelService', false],
            'parameter_bag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'router' => ['services', 'router', 'getRouterService', false],
            'security.authorization_checker' => ['services', 'security.authorization_checker', 'getSecurity_AuthorizationCheckerService', false],
            'security.csrf.token_manager' => ['services', '.container.private.security.csrf.token_manager', 'get_Container_Private_Security_Csrf_TokenManagerService', true],
            'security.token_storage' => ['services', 'security.token_storage', 'getSecurity_TokenStorageService', false],
            'serializer' => ['services', '.container.private.serializer', 'get_Container_Private_SerializerService', true],
            'session' => ['services', 'session', 'getSessionService', true],
            'twig' => ['services', '.container.private.twig', 'get_Container_Private_TwigService', false],
        ], [
            'doctrine' => '?',
            'easyadmin.autocomplete' => '?',
            'easyadmin.config.manager' => '?',
            'easyadmin.filter.registry' => '?',
            'easyadmin.paginator' => '?',
            'easyadmin.property_accessor' => '?',
            'easyadmin.query_builder' => '?',
            'easyadmin.security.authorization_checker' => '?',
            'event_dispatcher' => '?',
            'form.factory' => '?',
            'http_kernel' => '?',
            'parameter_bag' => '?',
            'request_stack' => '?',
            'router' => '?',
            'security.authorization_checker' => '?',
            'security.csrf.token_manager' => '?',
            'security.token_storage' => '?',
            'serializer' => '?',
            'session' => '?',
            'twig' => '?',
        ]))->withContext('EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\EasyAdminController', $container));

        return $instance;
    }
}
