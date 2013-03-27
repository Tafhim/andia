<?php

$theme_path = drupal_get_path('theme', 'andia');
require_once $theme_path . '/includes/menu.inc';

/**
 * Preprocess variables for page.tpl.php
 *
 * @see page.tpl.php
 */
function andia_preprocess_page(&$variables) {
  // Add information about the number of sidebars.
  if (!empty($variables['page']['sidebar_first']) && !empty($variables['page']['sidebar_second'])) {
    $variables['columns'] = 3;
  }
  elseif (!empty($variables['page']['sidebar_first'])) {
    $variables['columns'] = 2;
  }
  elseif (!empty($variables['page']['sidebar_second'])) {
    $variables['columns'] = 2;
  }
  else {
    $variables['columns'] = 1;
  }

  // Primary nav
  $variables['primary_nav'] = FALSE;
  if ($variables['main_menu']) {
    // Build links
    $variables['primary_nav'] = menu_tree(variable_get('menu_main_links_source', 'main-menu'));
    // Provide default theme wrapper function
    $variables['primary_nav']['#theme_wrappers'] = array('menu_tree__primary');
  }

  // Secondary nav
  $variables['secondary_nav'] = FALSE;
  if ($variables['secondary_menu']) {
    // Build links
    $variables['secondary_nav'] = menu_tree(variable_get('menu_secondary_links_source', 'user-menu'));
    // Provide default theme wrapper function
    $variables['secondary_nav']['#theme_wrappers'] = array('menu_tree__secondary');
  }

}

/**
 * andia theme wrapper function for the primary menu links
 */
function andia_menu_tree__primary(&$variables) {
  return '<ul class="nav">' . $variables['tree'] . '</ul>';
}

/**
 * andia theme wrapper function for the secondary menu links
 */
function andia_menu_tree__secondary(&$variables) {
  return '<ul class="nav pull-right">' . $variables['tree'] . '</ul>';
}