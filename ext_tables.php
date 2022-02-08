<?php
defined('TYPO3_MODE') || die();

(static function() {
	
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('
			tx_dvowlscroller_settings, 
');
$GLOBALS['TBE_STYLES']['skins']['dv_owlscroller'] = array();
$GLOBALS['TBE_STYLES']['skins']['dv_owlscroller']['name'] = 'Dvowlscroller Extension';
$GLOBALS['TBE_STYLES']['skins']['dv_owlscroller']['stylesheetDirectories'] = array(
    'css' => 'EXT:dv_owlscroller/Resources/Public/Css/Backend/',
);

	
	
})();
