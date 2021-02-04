<?php

namespace ContainerEaHBzlg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_L2S7K8tService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.L2S7K8t' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.L2S7K8t'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'projectRepository' => ['privates', 'App\\Repository\\ProjectRepository', 'getProjectRepositoryService', true],
            'technoRepository' => ['privates', 'App\\Repository\\TechnoRepository', 'getTechnoRepositoryService', true],
        ], [
            'projectRepository' => 'App\\Repository\\ProjectRepository',
            'technoRepository' => 'App\\Repository\\TechnoRepository',
        ]);
    }
}
