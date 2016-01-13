<?php
/** @var string $_EXTKEY */

$EM_CONF[$_EXTKEY] = array(
    'title' => 'Canonical',
    'description' => 'Build a canonical tag depending on configuration',
    'category' => 'Marketing Factory',
    'shy' => 0,
    'version' => '2.1.1',
    'dependencies' => '',
    'conflicts' => '',
    'priority' => '',
    'loadOrder' => '',
    'module' => '',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'modify_tables' => 'pages',
    'clearcacheonload' => 1,
    'lockType' => '',
    'author' => 'Sebastian Fischer, Simon Schmidt',
    'author_email' => 'sf@marketing-factory.de, sfs@marketing-factory.de',
    'author_company' => 'Marketing Factory Consulting GmbH',
    'CGLcompliance' => '',
    'CGLcompliance_note' => '',
    'constraints' => array(
        'depends' => array(
            'php' => '5.3.0-7.0.99',
            'typo3' => '6.2.0-7.9.99',
        ),
        'conflicts' => array(),
        'suggests' => array(),
    ),
    '_md5_values_when_last_written' => '',
    'suggests' => array(),
    'autoload' => array(
        'psr-4' => array(
            'Mfc\\MfcCanonical\\' => 'Classes/',
        ),
    ),
);
