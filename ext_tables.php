<?php
defined('TYPO3_MODE') or die();
/** @var string $_EXTKEY */

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/', 'Canonical');
