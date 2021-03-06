<?php

namespace ContainerEaHBzlg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEasyadmin_Filter_TypeGuesser_DoctrineService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'easyadmin.filter.type_guesser.doctrine' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Form\Filter\Guesser\DoctrineOrmFilterTypeGuesser
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeGuesserInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/Form/DoctrineOrmTypeGuesser.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Form/Filter/Guesser/DoctrineOrmFilterTypeGuesser.php';

        return $container->privates['easyadmin.filter.type_guesser.doctrine'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Filter\Guesser\DoctrineOrmFilterTypeGuesser(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
