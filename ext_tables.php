<?php

if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

$tempColumns = array(
	'tx_mfccanonical_canonical' => Array (
		'exclude' => 1,
		'label' => 'LLL:EXT:mfc_canonical/Resources/Private/Language/locallang_tca.xml:pages.tx_mfccanonical_canonical',
		'config' => Array (
			'type' => 'input',
			'max' => 2000,
		),
	),
);

t3lib_div::loadTCA('pages');
t3lib_extMgm::addTCAcolumns('pages', $tempColumns, 1);
t3lib_extMgm::addToAllTCAtypes('pages', 'tx_mfccanonical_canonical', '', 'after:nav_title');

t3lib_div::loadTCA('pages_language_overlay');
t3lib_extMgm::addTCAcolumns('pages_language_overlay', $tempColumns, 1);
t3lib_extMgm::addToAllTCAtypes('pages_language_overlay', 'tx_mfccanonical_canonical', '', 'after:nav_title');

/** @noinspection PhpUndefinedVariableInspection */
t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript/', 'Canonical');

?>