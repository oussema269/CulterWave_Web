<?php

namespace ContainerH80lOZa;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Console_Command_XliffLint_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.console.command.xliff_lint.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LazyCommand.php';

        return $container->privates['.console.command.xliff_lint.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('lint:xliff', [], 'Lint an XLIFF file and outputs encountered errors', false, function () use ($container): \Symfony\Component\Translation\Command\XliffLintCommand {
            return ($container->privates['console.command.xliff_lint'] ?? $container->load('getConsole_Command_XliffLintService'));
        });
    }
}
