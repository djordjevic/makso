<?php

namespace ContainerX85l8ef;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProizvodTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\ProizvodType' shared autowired service.
     *
     * @return \App\Form\ProizvodType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/ProizvodType.php';

        return $container->privates['App\\Form\\ProizvodType'] = new \App\Form\ProizvodType();
    }
}
