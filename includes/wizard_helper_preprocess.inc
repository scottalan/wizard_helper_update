<?php

function wizard_helper_preprocess_wizard_helper_page(&$vars) {

  $form = &$vars['form'];

  // If we don't unset #theme we get an infinite loop.
  // When the form is called again it will get reset.
  unset($form['#theme']);

  // The sub-template we are injecting into this template.
  if (isset($form['#form_id'])) {
    $vars['sub_tpl'] = str_replace('-', '_', $form['#form_id']);
  }

  // Buttons
  $vars['next'] = drupal_render($form['buttons']['next']);
  $vars['previous'] = drupal_render($form['buttons']['previous']);
  $vars['finish'] = drupal_render($form['buttons']['return']);
  $vars['cancel'] = drupal_render($form['buttons']['cancel']);

  // Ctools breadcrumb trail.
  $vars['ctools_trail'] = drupal_render($form['ctools_trail']);

}
