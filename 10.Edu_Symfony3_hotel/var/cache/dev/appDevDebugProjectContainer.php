<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPbhxuhk\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPbhxuhk/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerPbhxuhk.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerPbhxuhk\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerPbhxuhk\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Pbhxuhk',
    'container.build_id' => 'e452b57e',
    'container.build_time' => 1548981071,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerPbhxuhk');
