<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "newsstylist".
 *
 * Auto generated 24-07-2022 10:04
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'News StyList',
  'description' => 'all in one: one-touch settings within news plugin - fast & cool way to change the output of news, List view 5 layouts (default, card, carousel, newsletter) and swiper slider with some effects',
  'category' => 'plugin',
  'version' => '2.0.4',
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
      'typo3' => '11.0.0-11.5.99',
      'bootstrap_package' => '11.0.3-12.0.99',
      'news' => '9.0.0-10.99.99',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
    ),
  ),
);

