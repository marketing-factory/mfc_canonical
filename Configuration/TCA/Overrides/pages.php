<?php

call_user_func(function () {
    $ll = 'LLL:EXT:mfc_canonical/Resources/Private/Language/locallang_tca.xlf:';

    $columns = [
        'tx_mfccanonical_canonical' => [
            'exclude' => 1,
            'label' => $ll . 'pages.tx_mfccanonical_canonical',
            'config' => [
                'type' => 'input',
                'max' => 2000,
            ],
        ],
    ];

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages', $columns);

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
        'pages',
        'title',
        '--linebreak--, tx_mfccanonical_canonical',
        'after:subtitle'
    );
});
