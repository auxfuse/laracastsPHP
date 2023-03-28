<?php

    $config = require('config.php');
    require('Validator.php');

    $db = new Database($config['database']);

    $heading = 'Create Note';

    // validate email example...
    // dd(Validator::email('anthony@mail.com'));

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $errors = [];

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

    require('views/notes/create.view.php');

?>