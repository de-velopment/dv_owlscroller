<?php
defined('TYPO3_MODE') || die();


//Neues Content ELement als DropDown bereitstellen
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
   'tt_content',
   'CType',
    [
        // title
        'LLL:EXT:dv_owlscroller/Resources/Private/Language/locallang_db.xlf:dv_owlscroller.element.title',
        // plugin signature: extkey_identifier
        'dv_owlscroller',
        // icon identifier
        'element-dvowlscroller',
    ],
    'textmedia',
    'after'
);

// Configure the default backend fields for the content element
$GLOBALS['TCA']['tt_content']['types']['dv_owlscroller'] = [
   'showitem' => '
   --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
  --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
  --palette--;;header,
  --div--;LLL:EXT:dv_owlscroller/Resources/Private/Language/locallang_db.xlf:dv_owlscroller.tab.title,
  --palette--;--linebreak--,dvowlscroller_settings_relation,
  --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.appearance,
  --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.frames;frames,
  --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.access,
  --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.visibility;visibility,
  --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.access;access,
  --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.extended',
 ];
$originalSliderContent = $GLOBALS['TCA']['tt_content'];
$overridesForSliderContent = [
  'ctrl' => [
    'typeicon_classes' => [
      'dv_owlscroller' => 'dv_owlscroller-plugin',
    ]
  ]
];
$GLOBALS['TCA']['tt_content'] = array_merge_recursive($originalSliderContent, $overridesForSliderContent);
$dvOwlScrollerOptions = array(
  'dvowlscroller_settings_relation' => [
    'exclude' => 1,
    'label' => 'LLL:EXT:dv_owlscroller/Resources/Private/Language/locallang.xlf:dv_owlscroller.tab.title',
    'config' => [
      'type' => 'inline',
      'foreign_table' => 'tx_dvowlscroller_settings',
      'maxitems' => 1,
      'appearance' => [
          'collapseAll' => 0,
          'levelLinksPosition' => 'top',
          'showSynchronizationLink' => 1,
          'showPossibleLocalizationRecords' => 1,
          'showAllLocalizationLink' => 1
      ],
    ],
  ],
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content',$dvOwlScrollerOptions);
