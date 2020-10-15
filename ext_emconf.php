<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "news_ttnewsimport".
 *
 * Auto generated 15-09-2020 15:51
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'tt_news importer',
  'description' => 'Importer of ext:tt_news items to ext:news',
  'category' => 'be',
  'author' => 'Frans Saris',
  'author_email' => 't3ext@beech.it',
  'company' => 'Beech.it',
  'state' => 'stable',
  'uploadfolder' => false,
  'createDirs' => '',
  'clearCacheOnLoad' => 1,
  'version' => '2.0.0',
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '6.2.4-8.99.99',
      'php' => '5.3.0-0.0.0',
      'news' => '3.0.0',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
    ),
  ),
  'clearcacheonload' => true,
  'author_company' => NULL,
);

