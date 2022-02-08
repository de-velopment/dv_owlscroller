<?php

$EM_CONF[$_EXTKEY] = [
    'title' => '[Development] OWL Scroller',
    'description' => 'Add a new Content Element Type Owl-Scroller',
    'category' => 'plugin',
    'author' => 'D.Eckert',
    'author_email' => 'google@de-velopment.de',
    'state' => 'stable',
    'clearCacheOnLoad' => 0,
    'version' => '1.5.0',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-10.4.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
