<?php
	return[
	'ctrl' => [
		'title' => 'LLL:EXT:dv_owlscroller/Resources/Private/Language/locallang.xlf:dv_owlscroller.tab.title',
		'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
		],
		'searchFields' => 'title, images',
        'iconfile' => 'EXT:dv_owlscroller/Resources/Public/Icons/ContentElements/element_dv_owlscroller.svg'
        //EOF 'ctrl'
        ],
        'interface' => [
	     'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, images, items_mobile, items_tablet, items_desktop, margin, loop, center, stagepadding, autowidth, startposition, nav, rewind, navtext, dots, autoplay, autoplayhoverpause, autoplayspeed, navspeed, responsive, dvowlscroller_items_relation'
	    //EOF 'interface'    
        ],
        'palettes' => [
	     'palette_0' => [
            'showitem' => '
                sys_language_uid, 
                l10n_parent, 
                l10n_diffsource, 
                hidden, 
            ',
        ],
        'palette_1' => [
            'showitem' => '
                 images,
            ',
        ],
        'palette_2' => [
            'showitem' => '
               items, --linebreak--, margin, stagepadding, --linebreak--, center, autowidth,
            ',
        ],
        'palette_3' => [
            'showitem' => '
               responsive,--linebreak--, items_mobile, items_tablet, items_desktop
            ',
        ],
        'palette_4' => [
            'showitem' => '
                nav,--linebreak--, navtext,--linebreak--, dots,
            ',
        ],
         'palette_5' => [
            'showitem' => '
               loop,--linebreak--, startposition,--linebreak--,  autoplay,--linebreak--, autoplayhoverpause,--linebreak--, autoplayspeed,--linebreak--, navspeed,
            ',
        ],
	     //EOF 'palettes' 
        ],
           'types' => [
        '1' => [
            'showitem' => '
            --div--;LLL:EXT:dv_owlscroller/Resources/Private/Language/locallang_db.xlf:dv_owlscroller.tab.title,
               
                --palette--;LLL:EXT:dv_owlscroller/Resources/Private/Language/locallang_db.xlf:language;palette_0,
               
                --palette--;LLL:EXT:dv_owlscroller/Resources/Private/Language/locallang_db.xlf:dv_owlscroller.element.create;palette_1,
           
            --div--;LLL:EXT:dv_owlscroller/Resources/Private/Language/locallang_db.xlf:dv_owlscroller.tab.settings,
           
                --palette--;LLL:EXT:dv_owlscroller/Resources/Private/Language/locallang_db.xlf:dv_owlscroller.settings.space;palette_2,
           
                --palette--;LLL:EXT:dv_owlscroller/Resources/Private/Language/locallang_db.xlf:dv_owlscroller.settings.responsive;palette_3,
           
                --palette--;LLL:EXT:dv_owlscroller/Resources/Private/Language/locallang_db.xlf:dv_owlscroller.settings.navigation;palette_4,
           
                --palette--;LLL:EXT:dv_owlscroller/Resources/Private/Language/locallang_db.xlf:dv_owlscroller.settings.miscellaneouss;palette_5,
           
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'
        ],
    //EOF Types
    ],
     'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_dvowlscroller_settings',
                'foreign_table_where' => 'AND tx_dvowlscroller_settings.pid=###CURRENT_PID### AND tx_dvowlscroller_settings.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.enabled'
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'behaviour' => [
                'allowLanguageSynchronization' => true
            ],
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'behaviour' => [
                'allowLanguageSynchronization' => true
            ],
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
            ],
        ],
        'title' => [
            'exclude' => true,
            'label' => 'LLL:EXT:dv_owlscroller/Resources/Private/Language/locallang_db.xlf:dv_owlscroller.settings.title',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'items' => [
            'exclude' => true,
            'label' => 'LLL:EXT:dv_owlscroller/Resources/Private/Language/locallang_db.xlf:dv_owlscroller.settings.items',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'int',
                 'default' => 4,
            ],
        ],
        'margin' => [
            'exclude' => true,
            'label' => 'LLL:EXT:dv_owlscroller/Resources/Private/Language/locallang_db.xlf:dv_owlscroller.settings.margin',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'int'
            ],
        ],
        'loop' => [
            'exclude' => true,
            'label' => 'LLL:EXT:dv_owlscroller/Resources/Private/Language/locallang_db.xlf:dv_owlscroller.settings.loop',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:dv_owlscroller/Resources/Private/Language/locallang_db.xlf:dv_owlscroller.settings.enabled'
                    ]
                ],
                'default' => 1,
            ]
        ],
		'center' => [
            'exclude' => true,
            'label' => 'LLL:EXT:dv_owlscroller/Resources/Private/Language/locallang_db.xlf:dv_owlscroller.settings.center
',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:dv_owlscroller/Resources/Private/Language/locallang_db.xlf:dv_owlscroller.settings.enabled'
                    ]
                ],
                'default' => 0,
            ]
        ],
		'stagepadding' => [
            'exclude' => true,
            'label' => 'LLL:EXT:dv_owlscroller/Resources/Private/Language/locallang_db.xlf:dv_owlscroller.settings.stagepadding
',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'int'
            ],
        ],
        'autowidth' => [
            'exclude' => true,
            'label' => 'LLL:EXT:dv_owlscroller/Resources/Private/Language/locallang_db.xlf:dv_owlscroller.settings.autowidth
',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:dv_owlscroller/Resources/Private/Language/locallang_db.xlf:dv_owlscroller.settings.enabled'
                    ]
                ],
                'default' => 0,
            ]
        ],

        'startposition' => [
            'exclude' => true,
            'label' => 'LLL:EXT:dv_owlscroller/Resources/Private/Language/locallang_db.xlf:dv_owlscroller.settings.startposition
',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'int',
                 'default' => 1,
            ],
        ],
		'nav' => [
            'exclude' => true,
            'label' => 'LLL:EXT:dv_owlscroller/Resources/Private/Language/locallang_db.xlf:dv_owlscroller.settings.nav
',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:dv_owlscroller/Resources/Private/Language/locallang_db.xlf:dv_owlscroller.settings.enabled'
                    ]
                ],
                'default' => 0,
            ]
        ],
'rewind' => [
            'exclude' => true,
            'label' => 'LLL:EXT:dv_owlscroller/Resources/Private/Language/locallang_db.xlf:dv_owlscroller.settings.rewind
',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:dv_owlscroller/Resources/Private/Language/locallang_db.xlf:dv_owlscroller.settings.enabled'
                    ]
                ],
                'default' => 1,
            ]
        ],
        
          'navtext' => [
            'exclude' => true,
            'label' => 'LLL:EXT:dv_owlscroller/Resources/Private/Language/locallang_db.xlf:dv_owlscroller.settings.navtext
',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                 'default' => '"zurück" , "weiter"'
            ],
           
        ],
          'dots' => [
            'exclude' => true,
            'label' => 'LLL:EXT:dv_owlscroller/Resources/Private/Language/locallang_db.xlf:dv_owlscroller.settings.dots
',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:dv_owlscroller/Resources/Private/Language/locallang_db.xlf:dv_owlscroller.settings.enabled'
                    ]
                ],
                'default' => 1,
            ]

        ],

		'autoplay' => [
            'exclude' => true,
            'label' => 'LLL:EXT:dv_owlscroller/Resources/Private/Language/locallang_db.xlf:dv_owlscroller.settings.autoplay
',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:dv_owlscroller/Resources/Private/Language/locallang_db.xlf:dv_owlscroller.settings.enabled'
                    ]
                ],
                'default' => 1,
            ]
        ],
        'autoplayhoverpause' => [
            'exclude' => true,
            'label' => 'LLL:EXT:dv_owlscroller/Resources/Private/Language/locallang_db.xlf:dv_owlscroller.settings.autoplayhoverpause
',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:dv_owlscroller/Resources/Private/Language/locallang_db.xlf:dv_owlscroller.settings.enabled'
                    ]
                ],
                'default' => 1,
            ]
        ],

		  'autoplayspeed' => [
            'exclude' => true,
            'label' => 'LLL:EXT:dv_owlscroller/Resources/Private/Language/locallang_db.xlf:dv_owlscroller.settings.autoplayspeed
',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'int',
                 'default' => 2000,
            ],
           
        ],
		  'navspeed' => [
            'exclude' => true,
            'label' => 'LLL:EXT:dv_owlscroller/Resources/Private/Language/locallang_db.xlf:dv_owlscroller.settings.navspeed
',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'int',
                 'default' => 500,
            ],
        ],


        'responsive' => [
            'exclude' => true,
            'label' => 'LLL:EXT:dv_owlscroller/Resources/Private/Language/locallang_db.xlf:dv_owlscroller.settings.responsive',
             'onChange' => 'reload',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:dv_owlscroller/Resources/Private/Language/locallang_db.xlf:dv_owlscroller.settings.enabled'
                    ]
                ],
                'default' => 0,
            ]
        ],
         'items_mobile' => [
            'exclude' => true,
            'label' => 'LLL:EXT:dv_owlscroller/Resources/Private/Language/locallang_db.xlf:dv_owlscroller.settings.items.mobile',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'int',
                 'default' => 1
            ],
             'displayCond' => 'FIELD:responsive:REQ:true',
        ],
         'items_tablet' => [
            'exclude' => true,
            'label' => 'LLL:EXT:dv_owlscroller/Resources/Private/Language/locallang_db.xlf:dv_owlscroller.settings.items.tablet',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'int',
                 'default' => 2
            ],
             'displayCond' => 'FIELD:responsive:REQ:true',
        ],
         'items_desktop' => [
            'exclude' => true,
            'label' => 'LLL:EXT:dv_owlscroller/Resources/Private/Language/locallang_db.xlf:dv_owlscroller.settings.items.desktop',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'int',
                 'default' => 4
            ],
             'displayCond' => 'FIELD:responsive:REQ:true',
        ],
       'images' => [
            'exclude' => true,
            'label' => 'LLL:EXT:dv_owlscroller/Resources/Private/Language/locallang_db.xlf:dv_owlscroller.item',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'tx_dvowlscroller',
                [
                    'appearance' => [
                        'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference'
                    ],
                    'overrideChildTca' => [
                        'types' => [
                            '0' => [
                                'showitem' => '
                                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette'
                            ],
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => [
                                'showitem' => '
                                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette'
                            ],
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
                                'showitem' => '
                                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette'
                            ],
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => [
                                'showitem' => '
                                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette'
                            ],
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => [
                                'showitem' => '
                                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette'
                            ],
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => [
                                'showitem' => '
                                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette'
                            ],
                        ],
                    ],
                    'maxitems' => 99
                ],
                $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
            ),
        ],
        
    //EOF Columns   
    ]

        
        
     //EOF return   
     ];
        