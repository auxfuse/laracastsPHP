<?php

    Core\view("index.view.php", [
        'heading' => 'Home 🏠',
    ]);

    Core\dd($_SERVER['REQUEST_URI']);

?>