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
        '/' => 'controllers/index.php',
        '/about' => 'controllers/about.php',
        '/notes' => 'controllers/notes/index.php',
        '/note' => 'controllers/notes/show.php',
        '/notes/create' => 'controllers/notes/create.php',
        '/contact' => 'controllers/contact.php',
    ];

    routeToController($uri, $routes);

?>