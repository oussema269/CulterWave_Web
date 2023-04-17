<?php

namespace ContainerHn9oTEk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Security_Command_UserPasswordEncoder_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.security.command.user_password_encoder.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LazyCommand.php';

        return $container->privates['.security.command.user_password_encoder.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('security:encode-password', [], 'Encode a password', false, function () use ($container): \Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand {
            return ($container->privates['security.command.user_password_encoder'] ?? $container->load('getSecurity_Command_UserPasswordEncoderService'));
        });
    }
}
