<?php

    use Core\Database;
    use Core\Validator;
    

    $config = require(Core\base_path('config.php'));
    $db = new Database($config['database']);

    $errors = [];

    // validate email example...
    // dd(Validator::email('anthony@mail.com'));

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        if (! Validator::string($_POST['body'], 1, 500)) {
            $errors['body'] = 'A body of no more than 500 chars is required';
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
        }

    }

    Core\view("notes/create.view.php", [
        'heading' => 'Create Note',
        'errors' => $errors
    ]);

?>