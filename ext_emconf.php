<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "tt_news".
 *
 * Auto generated 18-10-2013 06:34
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'News',
	'description' => 'Website news with front page teasers and article handling inside.',
	'category' => 'plugin',
	'shy' => 0,
	'version' => '3.0.0',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => 'mod1',
	'state' => 'beta',
	'uploadfolder' => 1,
	'createDirs' => '',
	'modify_tables' => 'be_groups,be_users',
	'clearcacheonload' => 1,
	'lockType' => '',
	'author' => 'Rupert Germann',
	'author_email' => 'rupi@gmx.li',
	'author_company' => 'www.rgData.de',
	'CGLcompliance' => NULL,
	'CGLcompliance_note' => NULL,
	'constraints' => 
	array (
		'depends' => 
		array (
			'cms' => '',
			'php' => '5.0.0-5.3.99',
			'typo3' => '4.1.0-4.3.99',
		),
		'conflicts' => 
		array (
		),
		'suggests' => 
		array (
		),
	),
);

?>