<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMiMs5Ie\appAppKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMiMs5Ie/appAppKernelProdContainer.php') {
    touch(__DIR__.'/ContainerMiMs5Ie.legacy');

    return;
}

if (!\class_exists(appAppKernelProdContainer::class, false)) {
    \class_alias(\ContainerMiMs5Ie\appAppKernelProdContainer::class, appAppKernelProdContainer::class, false);
}

return new \ContainerMiMs5Ie\appAppKernelProdContainer([
    'container.build_hash' => 'MiMs5Ie',
    'container.build_id' => 'af467673',
    'container.build_time' => 1704823331,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerMiMs5Ie');
