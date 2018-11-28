<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Forschungsprojekte',
    'description' => 'Zeigt die Forschungsprojekte des Historischen Instituts der Universität zu Köln an.',
    'category' => 'plugin',
    'author' => 'Dennis Demmer',
    'author_company' => 'Historisches Institut der Universität zu Köln',
    'author_email' => 'Dennis.Demmer@web.de',
    'state' => 'stable',
    'clearCacheOnLoad' => true,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-8.9.99',
        ]
    ],
    'autoload' => [
        'psr-4' => [
            'HistInst\\ResearchProjects\\' => 'Classes'
        ]
    ],
];
