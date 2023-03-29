<?php

    Core\view("403.view.php", [
        'heading' => 'Error 🔔',
    ]);

    Core\dd($_SERVER['REQUEST_URI']);

?>