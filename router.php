<?php

    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];

    // if ($uri === "/laracastsPHP/") {
    //     require('controllers/index.php');
    // } else if ($uri === '/about') {
    //     require('controllers/about.php');
    // } else if ($uri === '/contact') {
    //     require('controllers/contact.php');
    // }

    $routes = [
        '/laracastsPHP/' => 'controllers/index.php',
        '/about' => 'controllers/about.php',
        '/contact' => 'controllers/contact.php',
    ];

    routeToController($uri, $routes);

?>