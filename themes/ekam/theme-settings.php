<?php

/**
 * @file
 * theme-settings.php
 *
 * Provides theme settings for Ekam - Bootstrap 4 blogging theme.
 */

use Drupal\Core\Form\FormStateInterface;

/**
 * Implements hook_form_FORM_ID_alter().
 */
function ekam_form_system_theme_settings_alter(&$form, FormStateInterface $form_state, $form_id = NULL) {

  $form['drushup_settings']['footer'] = [
    '#type' => 'details',
    '#title' => t('Theme Settings'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  ];

  $form['drushup_settings']['footer']['drupal_developers'] = [
    '#type'          => 'textfield',
    '#title'         => t('drupal_developers'),
    '#default_value' => theme_get_setting('drupal_developers'),
    '#description'   => t("Place this text in the widget spot on your site."),
  ];

  $form['drushup_settings']['footer']['ptiwebtech'] = [
    '#type'          => 'textfield',
    '#title'         => t('ptiwebtech'),
    '#default_value' => theme_get_setting('ptiwebtech'),
    '#description'   => t("Place this text in the widget spot on your site."),
  ];

  $form['drushup_settings']['footer']['twitter'] = [
    '#type'          => 'textfield',
    '#title'         => t('twitter'),
    '#default_value' => theme_get_setting('twitter'),
    '#description'   => t("Place this text in the widget spot on your site."),
  ];

  $form['drushup_settings']['footer']['facebook'] = [
    '#type'          => 'textfield',
    '#title'         => t('facebook'),
    '#default_value' => theme_get_setting('facebook'),
    '#description'   => t("Place this text in the widget spot on your site."),
  ];

  $form['drushup_settings']['footer']['instagram'] = [
    '#type'          => 'textfield',
    '#title'         => t('instagram'),
    '#default_value' => theme_get_setting('instagram'),
    '#description'   => t("Place this text in the widget spot on your site."),
  ];
}
