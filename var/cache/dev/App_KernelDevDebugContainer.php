<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container7XeQMYL\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container7XeQMYL/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container7XeQMYL.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container7XeQMYL\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container7XeQMYL\App_KernelDevDebugContainer([
    'container.build_hash' => '7XeQMYL',
    'container.build_id' => 'f9838398',
    'container.build_time' => 1659833118,
], __DIR__.\DIRECTORY_SEPARATOR.'Container7XeQMYL');
