<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'JariHermannErnst.' . $_EXTKEY,
	'Pi1',
	array(
		'Cite' => 'displayCite',
		
	),
	// non-cacheable actions
	array(
		'Cite' => 'displayCite',
		
	)
);
