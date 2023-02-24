<?php

namespace ContainerV2F5LvL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WSbH3C6Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.WSbH3C6' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.WSbH3C6'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'question' => ['privates', '.errored..service_locator.WSbH3C6.App\\Entity\\Question', NULL, 'Cannot autowire service ".service_locator.WSbH3C6": it references class "App\\Entity\\Question" but no such service exists.'],
        ], [
            'question' => 'App\\Entity\\Question',
        ]);
    }
}
