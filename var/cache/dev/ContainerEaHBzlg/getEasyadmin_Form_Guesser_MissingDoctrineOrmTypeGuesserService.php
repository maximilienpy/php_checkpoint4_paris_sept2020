<?php

namespace ContainerEaHBzlg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEasyadmin_Form_Guesser_MissingDoctrineOrmTypeGuesserService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'easyadmin.form.guesser.missing_doctrine_orm_type_guesser' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Form\Guesser\MissingDoctrineOrmTypeGuesser
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeGuesserInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/Form/DoctrineOrmTypeGuesser.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Form/Guesser/MissingDoctrineOrmTypeGuesser.php';

        return $container->services['easyadmin.form.guesser.missing_doctrine_orm_type_guesser'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Guesser\MissingDoctrineOrmTypeGuesser(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}