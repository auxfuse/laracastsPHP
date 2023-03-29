<?php

    Core\view("about.view.php", [
        'heading' => 'About ➡',
    ]);

    Core\dd($_SERVER['REQUEST_URI']);

?>