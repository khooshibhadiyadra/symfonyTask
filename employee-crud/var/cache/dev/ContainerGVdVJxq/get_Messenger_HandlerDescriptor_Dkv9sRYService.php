<?php

namespace ContainerGVdVJxq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_Dkv9sRYService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.messenger.handler_descriptor.Dkv9sRY' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlerDescriptor.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/notifier/Messenger/MessageHandler.php';

        return $container->privates['.messenger.handler_descriptor.Dkv9sRY'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(new \Symfony\Component\Notifier\Messenger\MessageHandler(($container->privates['texter.transports'] ?? $container->load('getTexter_TransportsService'))), []);
    }
}
