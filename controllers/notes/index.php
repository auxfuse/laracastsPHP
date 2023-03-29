<?php

    use Core\Database;

    $config = require(Core\base_path('config.php'));
    $db = new Core\Database($config['database']);

    $notes = $db->query(
        'select * from notes where user_id = 3'
    )->get();

    Core\view("notes/index.view.php", [
        'heading' => 'My Notes 📓',
        'notes' => $notes
    ]);

?>