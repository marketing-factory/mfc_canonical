<?php

call_user_func(function () {

    $ll = 'LLL:EXT:mfc_canonical/Resources/Private/Language/locallang_tca.xml:';

    $columns = array(
        'tx_mfccanonical_canonical' => array(
            'exclude' => 1,
            'label' => $ll . 'pages.tx_mfccanonical_canonical',
            'config' => array(
                'type' => 'input',
                'max' => 2000,
            ),
        ),
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
        'pages',
        $columns,
        false
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
        'pages',
        'title',
        '--linebreak--, tx_mfccanonical_canonical',
        'after:subtitle'
    );

});
