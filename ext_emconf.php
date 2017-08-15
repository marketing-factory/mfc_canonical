<?php

$EM_CONF['mfc_canonical'] = [
    'title' => 'Canonical',
    'description' => 'Build a canonical tag depending on configuration',
    'category' => 'Marketing Factory',
    'version' => '3.0.0',
    'state' => 'stable',
    'modify_tables' => 'pages',
    'clearCacheOnLoad' => 1,
    'author' => 'Sebastian Fischer, Simon Schmidt',
    'author_email' => 'sf@marketing-factory.de, sfs@marketing-factory.de',
    'author_company' => 'Marketing Factory Consulting GmbH',
    'constraints' => [
        'depends' => [
            'typo3' => '7.6.0-8.7.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'psr-4' => [
            'Mfc\\MfcCanonical\\' => 'Classes/',
        ],
    ],
];
