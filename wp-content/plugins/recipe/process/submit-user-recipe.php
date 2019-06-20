<?php

function r_submit_user_recipe(){
	$output		= ['status' => 1];

	if(empty($_POST['title'])){
		wp_send_json($output);
	}

	global $wpdb;
	$title 							= santitize_text_field($_POST['title']);
	$content						= wp_kses_post($_POST['content']);
	$recipe_date					= [];
	$recipe_date['rating']			= 0;
	$recipe_data['rating_count']	= 0;

	$post_id 						= wp_insert_post([
		'post_content'				=> $content,
		'post_name'					=> $title,
		'post_title'				=>	$title,
		'post_status'				=> 'pending',
		'post_type'					=>'recipe'
	]);
	update_post_meta($post_id, 'recipe_data', $recipe_data );
	$output['status'] 				= 2;
	wp_send_json($output);
}
