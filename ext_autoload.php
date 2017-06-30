<?php
$extensionClassesPath = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('gridelements_fce') . 'Classes/';

return array(
  'Inouit\gridelementsFce\Hooks\DrawItem' => $extensionClassesPath . 'Hooks/DrawItem.php',
  'Inouit\gridelementsFce\Hooks\CObj'     => $extensionClassesPath . 'Hooks/CObj.php',
  'Inouit\gridelementsFce\Hooks\GetData'  => $extensionClassesPath . 'Hooks/GetData.php',
);