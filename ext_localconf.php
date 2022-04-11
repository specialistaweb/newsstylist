<?php


// all use statements must come first
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

// Prevent Script from being called directly
defined('TYPO3') or die();

// encapsulate all locally defined variables
(function () {
    // Add your code here
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS'][\TYPO3\CMS\Core\Configuration\FlexForm\FlexFormTools::class]['flexParsing'][]  = \SpecialistaWeb\Newsstylist\Hooks\newsstylist::class;
})();

/*
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}



// TCEFORM
//\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $_EXTKEY . '/Configuration/PageTS/TCEFORM.txt">');


// add hook for news estension and to load the fields
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS'][\TYPO3\CMS\Core\Configuration\FlexForm\FlexFormTools::class]['flexParsing'][]  = \SpecialistaWeb\Newsstylist\Hooks\newsstylist::class;
//$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS'][\TYPO3\CMS\Core\Configuration\FlexForm\FlexFormTools::class]['flexParsing'][]  = \SpecialistaWeb\Newsstylist\Hooks\swiperslider::class;
*/

