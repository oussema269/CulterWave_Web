<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZDDbnjb\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZDDbnjb/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZDDbnjb.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerZDDbnjb\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerZDDbnjb\App_KernelDevDebugContainer([
    'container.build_hash' => 'ZDDbnjb',
    'container.build_id' => '12b3bb0d',
    'container.build_time' => 1682685407,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZDDbnjb');
