<?php

namespace Container9xCti0j;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdminReviewControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\AdminReviewController' shared autowired service.
     *
     * @return \App\Controller\AdminReviewController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/AdminReviewController.php';

        $container->services['App\\Controller\\AdminReviewController'] = $instance = new \App\Controller\AdminReviewController();

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Controller\\AdminReviewController', $container));

        return $instance;
    }
}
