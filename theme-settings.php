<?php

// Generate the form using Forms API. http://api.drupal.org/api/7

function backdrop_form_system_theme_settings_alter(&$form, $form_state) {
 $form['custom'] = array(
    '#title' => 'Custom theme settings', 
    '#type' => 'fieldset', 
  );
	// Custom Copyright Information
	$form['custom']['copyright_information'] = array(
    '#title' => 'Copyright information',
    '#description' => t('Information about copyright holder of the website - will show up at the bottom of the page'), 
    '#type' => 'textfield',
    '#default_value' => theme_get_setting('copyright_information'),
    '#size' => 60, 
    '#maxlength' => 128, 
    '#required' => FALSE,
  );

	$form['custom']['background_img'] = array(
    '#title' => 'Background Image',
    '#description' => t('Customize the Background Image for Your Site'), 
    '#type' => 'textfield',
    '#default_value' => theme_get_setting('background_img'),
    '#required' => FALSE,
  );

}