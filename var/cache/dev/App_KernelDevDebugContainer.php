<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYYMkyLY\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYYMkyLY/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerYYMkyLY.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerYYMkyLY\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerYYMkyLY\App_KernelDevDebugContainer([
    'container.build_hash' => 'YYMkyLY',
    'container.build_id' => 'e448e843',
    'container.build_time' => 1682417945,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYYMkyLY');
