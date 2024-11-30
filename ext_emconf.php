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
  'description' => 'all in one: one-touch settings within news plugin - fast & cool way to change the output of news, List view 5 layouts (default, card, carousel, newsletter) and swiper slider with some effects',
  'category' => 'plugin',
  'version' => '6.0.0',
  'state' => 'beta',
  'uploadfolder' => false,
  'clearcacheonload' => false,
  'author' => 'Giulia Tuveri (specialistaweb.it)',
  'author_email' => 'gt@specialistaweb.it',
  'author_company' => 'specialistaweb.it',
  'constraints' =>
  array (
    'depends' =>
    array (
      'typo3' => '12.0.0-13.4.99',
      'bootstrap_package' => '13.0.0-15.0.99',
      'news' => '12.0.0-12.1.99',
    ),
    'conflicts' =>
    array (
    ),
    'suggests' =>
    array (
    ),
  ),
);