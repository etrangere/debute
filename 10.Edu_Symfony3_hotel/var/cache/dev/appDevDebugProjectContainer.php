<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container4qwll1k\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container4qwll1k/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/Container4qwll1k.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\Container4qwll1k\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \Container4qwll1k\appDevDebugProjectContainer(array(
    'container.build_hash' => '4qwll1k',
    'container.build_id' => 'ede72198',
    'container.build_time' => 1546301822,
), __DIR__.\DIRECTORY_SEPARATOR.'Container4qwll1k');
