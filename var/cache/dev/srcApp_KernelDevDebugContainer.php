<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVw7XOx4\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVw7XOx4/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerVw7XOx4.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerVw7XOx4\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerVw7XOx4\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'Vw7XOx4',
    'container.build_id' => '245d8dac',
    'container.build_time' => 1566143364,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVw7XOx4');
