<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerC51ZK7F\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerC51ZK7F/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerC51ZK7F.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerC51ZK7F\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerC51ZK7F\App_KernelDevDebugContainer([
    'container.build_hash' => 'C51ZK7F',
    'container.build_id' => 'ed475702',
    'container.build_time' => 1677273220,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerC51ZK7F');
