<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHejubkm\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHejubkm/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerHejubkm.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerHejubkm\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerHejubkm\appDevDebugProjectContainer();
