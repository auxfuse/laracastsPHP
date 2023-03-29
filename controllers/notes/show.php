<?php

    use Core\Database;

    $config = require(Core\base_path('config.php'));
    $db = new Database($config['database']);

    $currentUserId = 3;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // form was submitted, delete the current note

        $note = $db->query(
            'select * from notes where id = :id', ['id' => $_GET['id']
        ])->findOrFail();
    
        Core\authorise($note['user_id'] === $currentUserId);

        $db->query(
            'delete from notes where id = :id', ['id' => $_GET['id']]
        );

        header("Location: /notes");
        exit();
    } else {
        $note = $db->query(
            'select * from notes where id = :id', ['id' => $_GET['id']]
        )->findOrFail();
    
        Core\authorise($note['user_id'] === $currentUserId);
    
        Core\view("notes/show.view.php", [
            'heading' => 'The Note 📝📝',
            'note' => $note
        ]);
    }


?>