<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGfslwl6\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGfslwl6/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerGfslwl6.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerGfslwl6\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerGfslwl6\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Gfslwl6',
    'container.build_id' => '9c478002',
    'container.build_time' => 1543588618,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerGfslwl6');
