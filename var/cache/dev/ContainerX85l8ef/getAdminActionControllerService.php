<?php

namespace ContainerX85l8ef;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdminActionControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\AdminActionController' shared autowired service.
     *
     * @return \App\Controller\AdminActionController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/AdminActionController.php';

        $container->services['App\\Controller\\AdminActionController'] = $instance = new \App\Controller\AdminActionController();

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Controller\\AdminActionController', $container));

        return $instance;
    }
}