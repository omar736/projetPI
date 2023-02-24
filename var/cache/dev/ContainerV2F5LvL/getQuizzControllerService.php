<?php

namespace ContainerV2F5LvL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getQuizzControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\QuizzController' shared autowired service.
     *
     * @return \App\Controller\QuizzController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'QuizzController.php';

        $container->services['App\\Controller\\QuizzController'] = $instance = new \App\Controller\QuizzController();

        $instance->setContainer(($container->privates['.service_locator.ULEwkxg'] ?? $container->load('get_ServiceLocator_ULEwkxgService'))->withContext('App\\Controller\\QuizzController', $container));

        return $instance;
    }
}
