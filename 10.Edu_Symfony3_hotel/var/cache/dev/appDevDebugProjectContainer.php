<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSob9diw\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSob9diw/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerSob9diw.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerSob9diw\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerSob9diw\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Sob9diw',
    'container.build_id' => '0a3187bb',
    'container.build_time' => 1546035523,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerSob9diw');
