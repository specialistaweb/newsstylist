<?php

namespace SpecialistaWeb\Newsstylist\Hooks;

use TYPO3\CMS\Core\Core\Environment;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class newsstylist
{
   /**
   * @param array $dataStructure
   * @param array $identifier
   * @return array
   */
   public function parseDataStructureByIdentifierPostProcess(array $dataStructure, array $identifier): array
   {
     if ($identifier['type'] === 'tca' && $identifier['tableName'] === 'tt_content' && $identifier['dataStructureKey'] === 'news_pi1,list') {
         $file = Environment::getPublicPath() . '/typo3conf/ext/newsstylist/Configuration/FlexForms/newsstylist.xml';
         $content = file_get_contents($file);
     	if ($content) {
             $dataStructure['sheets']['extraEntry'] = GeneralUtility::xml2array($content);
         }
         $file = Environment::getPublicPath() . '/typo3conf/ext/newsstylist/Configuration/FlexForms/swiperslider.xml';
         $content = file_get_contents($file);
      	 if ($content) {
       		$dataStructure['sheets']['extraEntry1'] = GeneralUtility::xml2array($content);
         }
     }
     return $dataStructure;
     }
}
