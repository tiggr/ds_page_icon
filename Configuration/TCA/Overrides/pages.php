<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

$tempColumns = array(
    'tx_dspageicon_icon' => array(
        'exclude' => 0,
        'label'   => 'LLL:EXT:ds_page_icon/Resources/Private/Language/locallang_db.xlf:ds_page_icon.ds_page_icon_icon',
        'config'  => array(
            'type'               => 'select',
            'items'              => Array(
                Array('', 0),
            ),
            'fileFolder'         => 'EXT:ds_page_icon/Resources/Public/Icons/page',
            'fileFolder_extList' => 'png',
            'selicon_cols'       => 8,
            'iconsInOptionTags'  => 1, // doesn't display but...
            'size'               => 1,
            'maxitems'           => 1,
        )
    )
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages', $tempColumns);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'pages',
    'layout',
    '--linebreak--, tx_dspageicon_icon;;;;1-1-1',
    'after:backend_layout_next_level');
