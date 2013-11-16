<?php
/**
 * @file template.php
 */
 
/**
 * form logintoboggan
 */

function free_form_alter(&$form, $form_state, $form_id) {
  switch($form_id) {
    case 'user_login':
    case 'user_login_block':
		$form['#attributes']['class'][] = 'form-inline';
    break ;
  }
} 
