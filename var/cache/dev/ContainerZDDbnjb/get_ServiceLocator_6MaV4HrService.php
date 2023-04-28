<?php

namespace ContainerZDDbnjb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_6MaV4HrService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.6MaV4Hr' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.6MaV4Hr'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'codeRepository' => ['privates', 'App\\Repository\\CodeRepository', 'getCodeRepositoryService', true],
            'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService', true],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'codeRepository' => 'App\\Repository\\CodeRepository',
            'mailer' => '?',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}
