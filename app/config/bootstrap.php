<?php

use Snipworks\BitCore\Inflector;
use Snipworks\BitCore\BitException;

spl_autoload_register(function ($class) {
    if (Inflector::ends('Controller', $class)) {
        $dir = 'app/controllers';
    } elseif (Inflector::ends('Service', $class)) {
        $dir = 'app/services';
    } else {
        $dir = 'app/models';
    }

    $path = sprintf('%s/%s.php', $dir, $class);
    if (!file_exists(__ROOT__ . $path)) {
        throw new BitException(sprintf('[Autoload] Class %s not found (path: %s)', $class, $path));
    }

    /** @noinspection PhpIncludeInspection */
    require_once(__ROOT__ . $path);
});
