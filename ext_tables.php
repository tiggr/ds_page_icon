<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

t3lib_div::loadTCA('pages');

$tempColumns = array(
	'tx_dspageicon_icon' => array(
		'exclude' => 0,
		'label'   => 'LLL:EXT:ds_page_icon/Resources/Private/Language/locallang_db.xlf:ds_page_icon.ds_page_icon_icon',
		'config'  => array(
			'type'               => 'select',
			'items'              => Array(
				Array('', 0),
			),
			'fileFolder'         => 'EXT:ds_page_icon/Resources/Public/Icons',
			'fileFolder_extList' => 'png',
			'selicon_cols'       => 8,
			'iconsInOptionTags'  => 1, // doesn't display but...
			'size'               => 1,
			'maxitems'           => 1,
		)
	)
);

t3lib_extMgm::addTCAcolumns('pages', $tempColumns, 1);
t3lib_extMgm::addFieldsToPalette(
	'pages',
	'layout',
	'--linebreak--, tx_dspageicon_icon;;;;1-1-1',
	'after:backend_layout_next_level');

unset($tempColumns);
?>