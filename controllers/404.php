<?php

    Core\view("404.view.php", [
        'heading' => 'Error 🔔',
    ]);

    Core\dd($_SERVER['REQUEST_URI']);

?>