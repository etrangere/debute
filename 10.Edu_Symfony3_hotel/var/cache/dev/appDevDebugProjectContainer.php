<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXrlvqjs\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXrlvqjs/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerXrlvqjs.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerXrlvqjs\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerXrlvqjs\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Xrlvqjs',
    'container.build_id' => '47fe7d2d',
    'container.build_time' => 1546198340,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerXrlvqjs');
