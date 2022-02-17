<?php
defined('TYPO3_MODE') || die();


//Beginn Einbindung TSConfig > Anzeige als ContentElement bei Neuen Datensatz	
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig("@import 'EXT:dv_owlscroller/Configuration/TsConfig/Page/*.typoscript'"); 
 //Ende Einbindung TSConfig


//Einbindung Backend Preview
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['dv_owlscroller'] = \DvOwlscroller\DvOwlscroller\Hooks\PageLayoutView\OwlscrollerPreviewRender::class;

 //Extension Icons  
    $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
    $iconRegistry->registerIcon(
        'dv_owlscroller-plugin',
        \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        ['source' => 'EXT:dv_owlscroller/Resources/Public/Icons/user_plugin_dv_owlscroller.svg']
    );
    $iconRegistry->registerIcon(
        'element-dvowlscroller',
        \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        ['source' => 'EXT:dv_owlscroller/Resources/Public/Icons/element_dv_owlscroller.svg']
    );


