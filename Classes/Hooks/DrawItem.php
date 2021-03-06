<?php
namespace Inouit\gridelementsFce\Hooks;
class DrawItem extends \GridElementsTeam\Gridelements\Hooks\DrawItem {

  /**
   * Renders the grid layout table after the HTML content for the single elements has been rendered
   *
   * @param array     $layoutSetup: The setup of the layout that is selected for the grid we are going to render
   * @param array     $row: The current data row for the container item
   * @param array     $head: The data for the column headers of the grid we are going to render
   * @param array     $gridContent: The content data of the grid we are going to render
   * @return string
   */
  public function renderGridLayoutTable($layoutSetup, $row, $head, $gridContent) {
    $content = '';

    // Title
    $langPrefix = 'LLL:EXT:gridelements_fce/Resources/Private/Language/locallang_db.xlf:';
    $content = '<strong>'.$this->languageService->sL($langPrefix.'flexform.CType').'</strong>'.$this->languageService->sL($layoutSetup['title']);

    // Flexform configuration
    if(isset($layoutSetup['config']['display'])) {
      $content .= $this->renderFlexformLayoutTable($layoutSetup, $row, $head, $gridContent);
    }

    // add colgroups
    $colCount = intval($layoutSetup['config']['colCount']);
    $rowCount = intval($layoutSetup['config']['rowCount']);
    if($colCount != 0 || $rowCount != 0) {
      $content .= parent::renderGridLayoutTable($layoutSetup, $row, $head, $gridContent);
    }

    return $content;
  }


  /**
   * Renders the grid layout table if the gridelements has config but no row or column
   *
   * @param array     $layoutSetup: The setup of the layout that is selected for the grid we are going to render
   * @param array     $row: The current data row for the container item
   * @return string
   */
  private function renderFlexformLayoutTable($layoutSetup, $row) {
    $grid = '';
    $langPrefix = 'LLL:EXT:gridelements_fce/Resources/Private/Language/locallang_db.xlf:';

    // Display values
    if ($layoutSetup['config'] && $layoutSetup['config']['display'] && !empty($layoutSetup['config']['display']) && !empty($row['pi_flexform'])) {
      $fieldsToDisplay = \TYPO3\CMS\Core\Utility\GeneralUtility::trimExplode(',', $layoutSetup['config']['display'], TRUE);

      $flexformConfig = \TYPO3\CMS\Core\Utility\GeneralUtility::xml2array($row['pi_flexform']);

      if(!empty($fieldsToDisplay) && is_array($flexformConfig['data']) && is_array($flexformConfig['data']['sDEF']) && is_array($flexformConfig['data']['sDEF']['lDEF'])) {
        $flex = $flexformConfig['data']['sDEF']['lDEF'];

        $grid .= '<table class="typo3-dblist">'
          .'<tr class="bgColor2">'
          .'<td><strong>'.$this->languageService->sL($langPrefix.'flexform.fieldName').'</strong></td>'
          .'<td><strong>'.$this->languageService->sL($langPrefix.'flexform.value').'</strong></td>'
          .'</tr>';

        $i = 0;
        foreach($fieldsToDisplay as $field) {
          if($flex[$field]) {
            if(is_array($flex[$field]['el'])) {
              // section
              $grid .= '<tr class="bgColor' . ($i % 2 ? '1' : '4') . '">'
                .'<td width="30%">' . $this->languageService->sL($langPrefix.'flexform.nbItem') . '</td>'
                .'<td>' . count($flex[$field]['el']) . '</td>'
                .'</tr>';
            }else {
              // field
              $grid .= '<tr class="bgColor' . ($i % 2 ? '1' : '4') . '">'
                .'<td width="30%">' . $field . '</td>'
                .'<td>' . $flex[$field]['vDEF'] . '</td>'
                .'</tr>';
            }
            $i++;
          }
        }

        $grid .= '</table>';
      }

    }

    return $grid;
  }
}