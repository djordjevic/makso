<?php

namespace ContainerX85l8ef;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getKnpSnappy_ImageService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'knp_snappy.image' shared service.
     *
     * @return \Knp\Snappy\Image
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-snappy/src/Knp/Snappy/GeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-snappy/src/Knp/Snappy/AbstractGenerator.php';
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-snappy/src/Knp/Snappy/Image.php';

        $container->services['knp_snappy.image'] = $instance = new \Knp\Snappy\Image($container->getEnv('WKHTMLTOIMAGE_PATH'), [], []);

        $instance->setLogger(($container->privates['logger'] ?? ($container->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));

        return $instance;
    }
}
