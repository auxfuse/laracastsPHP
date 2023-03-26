<?php

    $config = require('config.php');

    $db = new Database($config['database']);

    $currentUserId = 3;

    $heading = 'The Note 📝📝';

    $note = $db->query('select * from notes where id = :id', ['id' => $_GET['id']])->fetch();

    if (! $note) {
        abort();
    }

    if ($note['user_id'] !== $currentUserId) {
        abort(Response::FORBIDDEN);
    }

    require('views/note.view.php');

?>