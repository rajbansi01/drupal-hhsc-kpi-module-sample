<?php

namespace Drupal\my_kpi_dashboard\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * @Block(
 *   id = "kpi_summary_block",
 *   admin_label = @Translation("KPI Summary")
 * )
 */
class KpiSummaryBlock extends BlockBase {
  public function build() {
    return ['#markup' => 'KPI Summary Block'];
  }
}