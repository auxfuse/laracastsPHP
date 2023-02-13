<?php

    $wl = [
        [
            'short' => 'c&j',
            'long' => 'clean and jerk',
            'weight' => '100kg',
            'class' => 'compound'
        ],
        [
            'short' => 'jerk',
            'long' => 'split jerk',
            'weight' => '75kg',
            'class' => 'skill'
        ],
        [
            'short' => 'bsquat',
            'long' => 'backsquat',
            'weight' => '150kg',
            'class' => 'power'
        ],
        [
            'short' => 'fsquat',
            'long' => 'frontsquat',
            'weight' => '120kg',
            'class' => 'power'
        ]
    ];

    function filterByClass($wl, $query) {
        $filteredLifts = [];

        foreach ($wl as $movement) {
            if ($movement['class'] === $query) {
                $filteredLifts[] = $movement;
            }
        }

        return $filteredLifts;
    }
    
?>