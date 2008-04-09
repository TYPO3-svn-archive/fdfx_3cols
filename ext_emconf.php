<?php

########################################################################
# Extension Manager/Repository config file for ext: "fdfx_3cols"
#
# Auto generated 09-04-2008 20:44
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => '3 Columns',
	'description' => 'Extension of fdfx_2cols.  Adds an additional right column.  RTE enabled. DIV or plain table template controlls the rendering providing 3 different layout options. Each element is styled with CSS.

fdfx_2cols must be installed first!',
	'category' => 'fe',
	'shy' => 0,
	'dependencies' => 'fdfx_2cols',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => 'tt_content',
	'clearCacheOnLoad' => 1,
	'lockType' => '',
	'author' => 'Peter Russ',
	'author_email' => 'peter.russ@4many.net',
	'author_company' => '4Many Services',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'version' => '2.3.0',
	'constraints' => array(
		'depends' => array(
			'typo3' => '3.6.3-0.0.0',
			'php' => '4.3.3-0.0.0',
			'fdfx_2cols' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:12:{s:12:"ext_icon.gif";s:4:"a5b1";s:17:"ext_localconf.php";s:4:"528c";s:14:"ext_tables.php";s:4:"7e1b";s:14:"ext_tables.sql";s:4:"1673";s:28:"ext_typoscript_constants.txt";s:4:"b76e";s:24:"ext_typoscript_setup.txt";s:4:"5e83";s:16:"locallang_db.php";s:4:"c0ae";s:20:"tpl.3column.div.html";s:4:"793e";s:16:"tpl.3column.html";s:4:"71fb";s:14:"doc/manual.pdf";s:4:"8167";s:14:"doc/manual.sxw";s:4:"274f";s:30:"pi1/class.tx_fdfx3cols_pi1.php";s:4:"ed72";}',
	'suggests' => array(
	),
);

?>