<?php

namespace Drupal\dbhospitalizations\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'DBHospitalizationsBlock' block.
 *
 * @Block(
 *  id = "dbhospitalizations_block",
 *  admin_label = @Translation("Dashboard Hospitalizations block"),
 * )
 */
class DBHospitalizationsBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['dbhospitalizations_block']['#markup'] = 'Dashboard hospitalizations block here.';
    $build['dbhospitalizations_block']['#attached']['library'][] = 'dbhospitalizations/d3';
    $build['dbhospitalizations_block']['#attached']['library'][] = 'dbhospitalizations/dbhospitalizations_src';
    $build['dbhospitalizations_block']['#theme'] = 'dbhospitalizations';
    return $build;
  }

}