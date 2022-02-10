<?php

namespace DvOwlscroller\DvOwlscroller\Hooks\PageLayoutView;

use \TYPO3\CMS\Backend\View\PageLayoutViewDrawItemHookInterface;
use \TYPO3\CMS\Backend\View\PageLayoutView;
use \TYPO3\CMS\Core\Utility\GeneralUtility;
use \TYPO3\CMS\Core\Database\ConnectionPool;
use \TYPO3\CMS\Extbase\Object\ObjectManager;
use \TYPO3\CMS\Fluid\View\StandaloneView;

class OwlscrollerPreviewRender implements PageLayoutViewDrawItemHookInterface
{
	
	/**
	 * Preprocesses the preview rendering of a content element of type "OWL Carousel"
	 *
	 * @param \TYPO3\CMS\Backend\View\PageLayoutView $parentObject Calling parent object
	 * @param bool $drawItem Whether to draw the item using the default functionality
	 * @param string $headerContent Header content
	 * @param string $itemContent Item content
	 * @param array $row Record row of tt_content
	 *
	 * @return void
	 */
	public function preProcess(
		PageLayoutView &$parentObject,
		&$drawItem,
		&$headerContent,
		&$itemContent,
		array &$row
	)
	{

if ($row['CType'] === 'dv_owlscroller')
		{
			$drawItem = false;
			
			$objectManager = GeneralUtility::makeInstance(ObjectManager::class);
			$standaloneView = $objectManager->get(StandaloneView::class);
			$standaloneView->setTemplateRootPaths([10, 'EXT:dv_owlscroller/Resources/Private/Backend/Templates/']);
			$standaloneView->setLayoutRootPaths([10,'EXT:dv_owlscroller/Resources/Private/Backend/Layouts/']);
			$standaloneView->setPartialRootPaths([10,'EXT:dv_owlscroller/Resources/Private/Backend/Partials/']);
			$standaloneView->setFormat('html');
			$standaloneView->setTemplate('PageLayoutView.html');

			$queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getQueryBuilderForTable('tx_dvowlscroller_settings');
			$settings = $queryBuilder
				->select('*')
				->from('tx_dvowlscroller_settings')
				->where(
					$queryBuilder->expr()->eq('uid', $queryBuilder->createNamedParameter($row['dvowlscroller_settings_relation'],\PDO::PARAM_INT)),
					$queryBuilder->expr()->eq('hidden', $queryBuilder->createNamedParameter(0, \PDO::PARAM_INT)),
					$queryBuilder->expr()->eq('deleted', $queryBuilder->createNamedParameter(0, \PDO::PARAM_INT))
				)
				->execute()
				->fetch(0);
				
				
			
			
			if(!empty($settings)){
			
				$fileObjects = array();
				$fileRepository = GeneralUtility::makeInstance(\TYPO3\CMS\Core\Resource\FileRepository::class);
				$fileObjects[] = $fileRepository->findByRelation('tx_dvowlscroller_settings', 'images', $settings['uid']);
				
				$countItems = count($settings);
				
				}
			

			

			$standaloneView->assignMultiple([
				'items' => $countItems,
				'title' => $parentObject->CType_labels[$row['CType']],
				'type' => $row['CType'],
				'owlsliderSettings' => $settings,
				'owlsliderImages' => $fileObjects
			]);

			$itemContent .= $standaloneView->render();

		}
	}
	
	
}