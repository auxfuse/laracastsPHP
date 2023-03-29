<?php

    view("404.view.php", [
        'heading' => 'Error 🔔',
    ]);

    dd($_SERVER['REQUEST_URI']);

?>