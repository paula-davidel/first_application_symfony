<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerS1OeMfn\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerS1OeMfn/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerS1OeMfn.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerS1OeMfn\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerS1OeMfn\App_KernelDevDebugContainer([
    'container.build_hash' => 'S1OeMfn',
    'container.build_id' => 'c990c6f8',
    'container.build_time' => 1588672044,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerS1OeMfn');
