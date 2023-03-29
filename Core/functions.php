<?php

    namespace Core;

    use Core\Response;

    function dd($value) {
        echo '<pre>';
        var_dump($value);
        echo '</pre>';

        die();
    };

    function urlIs($value) {
        return $_SERVER['REQUEST_URI'] === $value;
    }

    function routeToController($uri, $routes) {
        if (array_key_exists($uri, $routes)) {
            require(base_path($routes[$uri]));
        } else {
            abort();
        }
    }

    function abort($code = 404) {
        http_response_code($code);

        require(base_path("controllers/{$code}.php"));
        die();
    }

    function authorise($condition, $status = Response::FORBIDDEN) {
        if(! $condition) {
            abort($status);
        }
    }

    function base_path($path) {
        return BASE_PATH . $path;
    }

    function view($path, $attributes = []) {
        extract($attributes);

        require base_path('views/' . $path);
    }

?>