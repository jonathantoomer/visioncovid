<?php

namespace Drupal\dbencounters\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'DBEncountersBlock' block.
 *
 * @Block(
 *  id = "dbencounters_block",
 *  admin_label = @Translation("Dashboard encounters block"),
 * )
 */
class DBencountersBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['dbencounters_block']['#markup'] = 'Dashboard encounters block here.';
    $build['dbencounters_block']['#attached']['library'][] = 'dbencounters/d3';
    $build['dbencounters_block']['#attached']['library'][] = 'dbencounters/dbencounters_src';
    $build['dbencounters_block']['#theme'] = 'dbencounters';
    return $build;
  }

}