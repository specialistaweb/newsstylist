<?php
defined('TYPO3_MODE') || die('Access denied.');

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'newsstylist',
            'frontend',
            'tx_newsstylist'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule (
            'SpecialistaWeb.newsstylist',
            'backend',
            'tx_newsstylist'
        );


        // constants
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('newsstylist', 'Configuration/TypoScript', 'NewsStyList');

	// setup
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript('newsstylist', 'setup', '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:newsstylist/Configuration/TypoScript/setup.ts>"');
