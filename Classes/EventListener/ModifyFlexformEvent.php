<?php

namespace SpecialistaWeb\Newsstylist\Eventlistener;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Configuration\Event\AfterFlexFormDataStructureParsedEvent;
use TYPO3\CMS\Core\Utility\ArrayUtility;

class ModifyFlexformEvent
{
        public function __invoke(AfterFlexFormDataStructureParsedEvent $event): void
        {
                $dataStructure = $event->getDataStructure();
                $identifier = $event->getIdentifier();

                if ($identifier['type'] === 'tca' && $identifier['tableName'] === 'tt_content'
                 && ($identifier['dataStructureKey'] === '*,news_pi1' || $identifier['dataStructureKey'] === '*,news_newsliststicky'
                 || $identifier['dataStructureKey'] === 'news_pi1' || $identifier['dataStructureKey'] === 'news_newsliststicky')) {

                        // load newsstylist xml file
                        $newsstylist = GeneralUtility::getFileAbsFileName('EXT:newsstylist/Configuration/FlexForms/Newsstylist14.xml');
                        $newsstylistContent = file_get_contents($newsstylist);
                        if ($newsstylistContent) {
                                $extraDataStructure['sheets']['newsstylist'] = GeneralUtility::xml2array($newsstylistContent);
                                ArrayUtility::mergeRecursiveWithOverrule($dataStructure, $extraDataStructure);
                        }

                        // load swiperslider xml file
                        $swiperfile = GeneralUtility::getFileAbsFileName('EXT:newsstylist/Configuration/FlexForms/Swiperslider14.xml');
                        $swipercontent = file_get_contents($swiperfile);
                        if ($swipercontent) {
                                $extraDataStructure['sheets']['swiperslider'] = GeneralUtility::xml2array($swipercontent);
                                ArrayUtility::mergeRecursiveWithOverrule($dataStructure, $extraDataStructure);
                        }

                }

                $event->setDataStructure($dataStructure);
        }
}