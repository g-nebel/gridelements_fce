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
	'version' => '2.0.1',
	'state' => 'stable',
	'uploadfolder' => false,
	'createDirs' => '',
	'clearcacheonload' => true,
	'author' => 'Grégory Copin,Georg Nebel',
	'author_email' => 'gcopin@inouit.com',
	'author_company' => 'Inouit',
	'constraints' =>
	array (
		'depends' =>
		array (
			'typo3' => '7.6.0-7.99.99',
			'gridelements' => '7.0.0',
		),
		'conflicts' =>
		array (
		),
		'suggests' =>
		array (
		),
	),
);

