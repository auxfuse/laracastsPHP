<?php

    view("403.view.php", [
        'heading' => 'Error 🔔',
    ]);

    dd($_SERVER['REQUEST_URI']);

?>