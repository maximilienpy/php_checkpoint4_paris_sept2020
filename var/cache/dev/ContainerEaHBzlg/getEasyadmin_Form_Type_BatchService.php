<?php

namespace ContainerEaHBzlg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEasyadmin_Form_Type_BatchService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'easyadmin.form.type.batch' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Form\Type\EasyAdminBatchFormType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Form/Type/EasyAdminBatchFormType.php';

        return $container->privates['easyadmin.form.type.batch'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\EasyAdminBatchFormType(($container->services['easyadmin.config.manager'] ?? $container->getEasyadmin_Config_ManagerService()));
    }
}
