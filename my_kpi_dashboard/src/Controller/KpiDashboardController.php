<?php

namespace Drupal\my_kpi_dashboard\Controller;

use Drupal\Core\Controller\ControllerBase;

class KpiDashboardController extends ControllerBase {
  public function page() {
    return [
      '#markup' => 'Synthetic KPI Dashboard Sample'
    ];
  }
}