<?php

    // validate email example...
    // dd(Validator::email('anthony@mail.com'));

    view("notes/create.view.php", [
        'heading' => 'Create Note',
        'errors' => []
    ]);

?>