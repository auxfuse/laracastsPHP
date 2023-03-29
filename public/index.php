<?php

    const BASE_PATH = __DIR__.'/../';

    require(BASE_PATH.'Core/functions.php');

    spl_autoload_register(function ($class) {
        // Core\Database
        $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
        require(Core\base_path($class . '.php'));
    });

    require(Core\base_path('Core/router.php'));

?>