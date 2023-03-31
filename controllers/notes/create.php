<?php

    // validate email example...
    // dd(Validator::email('anthony@mail.com'));

    Core\view("notes/create.view.php", [
        'heading' => 'Create Note',
        'errors' => []
    ]);

?>