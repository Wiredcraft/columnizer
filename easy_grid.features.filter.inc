<?php
/**
 * @file
 * easy_grid.features.filter.inc
 */

/**
 * Implements hook_filter_default_formats().
 */
function easy_grid_filter_default_formats() {
  $formats = array();

  // Exported format: Easy Grid.
  $formats['easy_grid'] = array(
    'format' => 'easy_grid',
    'name' => 'Easy Grid',
    'cache' => '1',
    'status' => '1',
    'weight' => '0',
    'filters' => array(
      'easy_grid' => array(
        'weight' => '0',
        'status' => '1',
        'settings' => array(),
      ),
    ),
  );

  return $formats;
}
