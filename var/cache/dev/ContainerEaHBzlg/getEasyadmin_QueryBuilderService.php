<?php

namespace ContainerEaHBzlg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEasyadmin_QueryBuilderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'easyadmin.query_builder' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Search\QueryBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Search/QueryBuilder.php';

        return $container->services['easyadmin.query_builder'] = new \EasyCorp\Bundle\EasyAdminBundle\Search\QueryBuilder(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
