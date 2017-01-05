<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'JariHermannErnst.' . $_EXTKEY,
	'Pi1',
	'Random cite'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Random cites');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_jherandomcites_domain_model_cite', 'EXT:jhe_randomcites/Resources/Private/Language/locallang_csh_tx_jherandomcites_domain_model_cite.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_jherandomcites_domain_model_cite');
