<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "newsstylist".
 *
 * Auto generated 30-11-2024 18:54
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'News StyList',
  'description' => 'Extends news system, list view, with 5 layouts and several options to repositioning the objects; swiperlider included',
  'category' => 'plugin',
  'version' => '14.0.1',
  'state' => 'stable',
  'uploadfolder' => false,
  'clearcacheonload' => false,
  'author' => 'Giulia Tuveri (specialistaweb.it)',
  'author_email' => 'gt@specialistaweb.it',
  'author_company' => 'specialistaweb.it',
  'constraints' =>
  array (
    'depends' =>
    array (
      'typo3' => '13.4.0-14.4.99',
      'bootstrap_package' => '15.0.0-16.4.99',
      'news' => '14.0.0-14.4.99',
    ),
    'conflicts' =>
    array (
    ),
    'suggests' =>
    array (
    ),
  ),
);