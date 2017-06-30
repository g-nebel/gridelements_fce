<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "gridelements_fce".
 *
 * Auto generated 03-12-2014 20:44
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'Gridelements Extended for flexible content elements',
	'description' => 'This extension provide some hooks to make flexible content elements easier with gridelements. We\'ve published a Yeoman generator to improve your development (watch documentation for more details)',
	'category' => 'plugin',
	'version' => '1.0.2',
	'state' => 'stable',
	'uploadfolder' => false,
	'createDirs' => '',
	'clearcacheonload' => true,
	'author' => 'Grégory Copin',
	'author_email' => 'gcopin@inouit.com',
	'author_company' => 'Inouit',
	'constraints' => 
	array (
		'depends' => 
		array (
			'typo3' => '6.2.0-7.9.99',
			'php' => '5.3.0-0.0.0',
			'cms' => '1.1.0-0.0.0',
			'extbase' => '',
			'fluid' => '',
			'gridelements' => '2.0.2',
		),
		'conflicts' => 
		array (
		),
		'suggests' => 
		array (
		),
	),
);

