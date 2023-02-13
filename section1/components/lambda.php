<?php

    $books = [
        [
            'name' => 'squat bible',
            'author' => 'aaron horschig',
            'releaseYear' => '2017'
        ],
        [
            'name' => 'duma key',
            'author' => 'stephen king',
            'releaseYear' => '2008'
        ],
        [
            'name' => 'php & mysql',
            'author' => 'jon duckett',
            'releaseYear' => '2022'
        ],
        [
            'name' => 'html & css',
            'author' => 'jon duckett',
            'releaseYear' => '2015'
        ]
    ];

    // generic lambda
    $filterByAuthor = function ($books, $author) {
        $filteredBooks = [];

        foreach ($books as $book) {
            if ($book['author'] === $author) {
                $filteredBooks[] = $book;
            }
        }

        return $filteredBooks;
    };

    $filteredBooks = $filterByAuthor($books, 'stephen king');

    // lambda refactor
    function filter($items, $key, $value) {
        $filteredItems = [];

        foreach ($items as $item) {
            if ($item[$key] === $value) {
                $filteredItems[] = $item;
            }
        }

        return $filteredItems;
    }
        // filter(array, key, value);
        // change any param to update filterSet...
    $filterSet = filter($books, 'author', 'jon duckett');

    // non-rigid lambda refactor
    function f($items, $fn) {
        $fItems = [];

        foreach ($items as $item) {
            if ($fn($item)) {
                $fItems[] = $item;
            }
        }

        return $fItems;
    }

    $fBooks = f($books, function ($book) {
        return $book['releaseYear'] >= 2017;
    });

    $phpArrayFilter = array_filter($books, function ($book) {
        return $book['author'] != 'jon duckett';
    });


?>