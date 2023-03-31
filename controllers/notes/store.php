<?php

    use Core\Validator;
    use Core\Database;

    $config = require(Core\base_path('config.php'));
    $db = new Database($config['database']);

    $errors = [];

    if (! Validator::string($_POST['body'], 1, 500)) {
        $errors['body'] = 'A body of no more than 500 chars is required';
    }

    if (! empty($errors)) {
        return Core\view("notes/create.view.php", [
            'heading' => 'Create Note',
            'errors' => $errors
        ]);
    }

    if (empty($errors)) {
        $db->query(
            'INSERT INTO notes(body, user_id) VALUES(:body, :user_id)',
            [
                'body' => $_POST['body'],
                'user_id' => 3
            ]
        );
        header("Location: /notes");
        die();
    }

?>