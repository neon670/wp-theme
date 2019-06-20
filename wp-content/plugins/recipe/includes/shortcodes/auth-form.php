<?php

function r_recipe_auth_form_shortcode(){
	$formHTML 				= file_get_contents('auth-from-template' true)

	$formHTML 				= str_replace(
		'NONCE_FIELD_PH', 
		wp_nonce_field('recipe_auth', '_wpnonce', true, false)
	)

	return $formHTML;
}