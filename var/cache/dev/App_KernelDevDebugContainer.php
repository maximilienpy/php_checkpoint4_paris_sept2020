<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerEaHBzlg\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerEaHBzlg/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerEaHBzlg.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerEaHBzlg\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerEaHBzlg\App_KernelDevDebugContainer([
    'container.build_hash' => 'EaHBzlg',
    'container.build_id' => '00e82bbd',
    'container.build_time' => 1612364461,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerEaHBzlg');
