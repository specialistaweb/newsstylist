<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "newsstylist".
 *
 * Auto generated 22-12-2020 09:21
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'News StyList',
  'description' => 'all in one: one-touch settings within news plugin - fast & cool way to change the output of news, List view 5 layouts (default, card, carousel, newsletter) and swiper slider with some effects',
  'category' => 'plugin',
  'author' => 'Alessandro Tuveri (University of Udine), Giulia Tuveri (specialistaweb.it)',
  'author_email' => 'at@uniud.it, gt@specialistaweb.it',
  'state' => 'beta',
  'uploadfolder' => false,
  'clearCacheOnLoad' => 0,
  'version' => '1.8.0',
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '8.7.0-10.99.99',
      'bootstrap_package' => '9.0.0-11.99.99',
      'news' => '7.3.0-8.99.99',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
    ),
  ),
  'autoload' => 
  array (
    'psr-4' => 
    array (
      'SpecialistaWeb\\Newsstylist\\' => 'Classes',
    ),
  ),
  'clearcacheonload' => false,
  'author_company' => NULL,
  'createDirs' => NULL,
);

