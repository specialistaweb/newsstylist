<?php


// all use statements must come first
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

// encapsulate all locally defined variables
// Add your code here

	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS'][\TYPO3\CMS\Core\Configuration\FlexForm\FlexFormTools::class]['flexParsing'][]  = \SpecialistaWeb\Newsstylist\Hooks\NewsStylist12::class;
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS'][\TYPO3\CMS\Core\Configuration\FlexForm\FlexFormTools::class]['flexParsing'][]  = \SpecialistaWeb\Newsstylist\Hooks\newsslider::class;

