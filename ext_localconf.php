<?php


// Prevent Script from being called directly
defined('TYPO3') or die();

// all use statements must come first
//use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

// encapsulate all locally defined variables
// Add your code here

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS'][\TYPO3\CMS\Core\Configuration\FlexForm\FlexFormTools::class]['flexParsing'][]  = \SpecialistaWeb\Newsstylist\Hooks\NewsStylist12::class;

// UNUSEFUL:	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS'][\TYPO3\CMS\Core\Configuration\FlexForm\FlexFormTools::class]['flexParsing'][]  = \SpecialistaWeb\Newsstylist\Hooks\newsstylist::class;