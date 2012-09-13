<?php
/**
 * @file
 * columnizer.features.filter.inc
 */

/**
 * Implements hook_filter_default_formats().
 */
function columnizer_filter_default_formats() {
  $formats = array();

  // Exported format: Easy Grid.
  $formats['columnizer'] = array(
    'format' => 'columnizer',
    'name' => 'Columnizer',
    'cache' => '1',
    'status' => '1',
    'weight' => '0',
    'filters' => array(
      'columnizer' => array(
        'weight' => '0',
        'status' => '1',
        'settings' => array(),
      ),
    ),
  );

  return $formats;
}
