<?php
$GLOBALS['TCA']['tx_dvowlscroller_settings']['columns']['images']['config']['overrideChildTca']['columns']['crop'] = [
	'config' => [
		'cropVariants' => [

	'default' => [
		'disabled' => true
	],
		'desktop' => [
		'disabled' => true
	],
		'mobile' => [
		'disabled' => true
	],
    'owlscroller' => [
        'title' => 'LLL:EXT:dv_owlscroller/Resources/Private/Language/locallang_db.xlf:dv_owlscroller.item.crop',
        'allowedAspectRatios' => [
            '4:2' => [
                'title' => '4 : 3',
                'value' => 4/3
            ],
        ]
    ],
    
],
		],
	];
