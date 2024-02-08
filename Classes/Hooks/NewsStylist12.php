<?php

declare(strict_types=1);

namespace SpecialistaWeb\Newsstylist\Hooks;

/**
 * This file is part of the "eventnews" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

use TYPO3\CMS\Core\Configuration\Event\AfterFlexFormDataStructureParsedEvent;
use TYPO3\CMS\Core\Information\Typo3Version;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class NewsStylist12
{

    public function __invoke(AfterFlexFormDataStructureParsedEvent $event): void
    {
        $dataStructure = $event->getDataStructure();
        $identifier = $event->getIdentifier();

        if ($identifier['type'] === 'tca' && $identifier['tableName'] === 'tt_content' && $this->isActiveOnKey($identifier['dataStructureKey'])) {
            $content = file_get_contents($this->getPath());
            if ($content) {
                $dataStructure['sheets']['newsstylist'] = GeneralUtility::xml2array($content);
            }
            $content = file_get_contents($this->getPathSwiper());
            if ($content) {
                $dataStructure['sheets']['swiperslider'] = GeneralUtility::xml2array($content);
            }

        }
        $event->setDataStructure($dataStructure);
    }

    public function parseDataStructureByIdentifierPostProcess(array $dataStructure, array $identifier): array
    {
        if ($identifier['type'] === 'tca' && $identifier['tableName'] === 'tt_content' && $this->isActiveOnKey($identifier['dataStructureKey'])) {
            $content = file_get_contents($this->getPath());
            if ($content) {
                $dataStructure['sheets']['newsstylist'] = GeneralUtility::xml2array($content);
            }

            $content = file_get_contents($this->getPathSwiper());
            if ($content) {
                $dataStructure['sheets']['swiperslider'] = GeneralUtility::xml2array($content);
            }

        }
        return $dataStructure;
    }

    protected function isActiveOnKey(string $dataStructureKey): bool
    {
        $validKeys = ['*,newsstylist_', '*,news_'];
        $active = false;
        foreach($validKeys as $prefix) {
            if (substr($dataStructureKey, 0, strlen($prefix)) === $prefix) {
                $active = true;
                break;
            }
        }
        return $active;
    }

    protected function getPath(): string
    {
        $file = (new Typo3Version())->getMajorVersion() >= 12 ? 'newsstylist12.xml' : 'newsstylist.xml';
        return ExtensionManagementUtility::extPath('newsstylist') . 'Configuration/FlexForms/' . $file;
    }

    protected function getPathSwiper(): string
    {
        $file = (new Typo3Version())->getMajorVersion() >= 12 ? 'swiperslider12.xml' : 'swiperslider.xml';
        return ExtensionManagementUtility::extPath('newsstylist') . 'Configuration/FlexForms/' . $file;
    }

}
