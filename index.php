<?php

    require('functions.php');

    $uri = $_SERVER['REQUEST_URI'];

    if ($uri === "/laracastsPHP/") {
        require('controllers/index.php');
    } else if ($uri === '/laracastsPHP/about') {
        require('controllers/about.php');
    }

    echo $uri;
    var_dump($_SERVER);

?>