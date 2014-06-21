<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "mfc_canonical".
 *
 * Auto generated 21-06-2014 15:48
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Canonical',
	'description' => 'Build a canonical tag depending on configuration',
	'category' => 'Marketing Factory',
	'shy' => 0,
	'version' => '2.0.0',
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
			'php' => '5.3.0-5.5.99',
			'typo3' => '4.5.0-6.2.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:9:{s:16:"ext_autoload.php";s:4:"cc1f";s:12:"ext_icon.gif";s:4:"3527";s:17:"ext_localconf.php";s:4:"611a";s:14:"ext_tables.php";s:4:"9109";s:14:"ext_tables.sql";s:4:"6542";s:26:"Classes/User/Canonical.php";s:4:"9d01";s:38:"Configuration/TypoScript/constants.txt";s:4:"2b06";s:34:"Configuration/TypoScript/setup.txt";s:4:"3c3d";s:44:"Resources/Private/Language/locallang_tca.xml";s:4:"45fb";}',
	'suggests' => array(
	),
);

?>