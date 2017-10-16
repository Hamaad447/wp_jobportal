<?php
/**
*Plugin Name: Job Portal
*plugin URI: www.google.com
*Description: A plugin for job portal in which job handling will be maintained
*Author: Hamaad Hussain
*Version: 1.0.0
*License:GPLv2
**/

/* testing work

function mddy_remove_dashboard_widget() {
	remove_meta_box('dashboard_primary','dashboard','side');
}
add_action('wp_dashboard_setup','mddy_remove_dashboard_widget');

function mddy_add_google_in_main_menu() {
	global $wp_admin_bar;
	//var_dump($wp_admin_bar);
	
	$wp_admin_bar ->add_menu(array(
			'id' => 'google_analytics',
			'title' => 'Google analyticss',
			'href' => 'https://analytics.google.com'
		));
}
add_action('wp_before_admin_bar_render','mddy_add_google_in_main_menu');

function mdd_custom_post_type (){
	
	$labels = array(
		'name' => 'Store',
		'singular_name' => 'Store',
		'add_new' => 'Add new Book',
		'all_items' => 'All Items',
		'add_new_item' => 'Add Book',
		'edit_item' => 'Edit Book',
		'new_item' => 'New Book',
		'view_item' => 'View Book',
		'search_item' => 'Search Books',
		'not_found' => 'No items found',
		'not_found_in_trash' => 'No items found in trash',
		'parent_item_colon' => 'Parent Item'
	);
	$args = apply_filters("mdd_post_type_args", array(
		'labels' 			=> $labels,
		'public' 			=> true,
		'has_archive' 		=> true,
		'publicly_queryable'=> true,
		'query_var' 		=> true,
		'rewrite' 			=> true,
		'capability_type' 	=> 'post',
		'hierarchical' 		=> false,
		'supports' 			=> array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions' ),
		'taxonomies' 		=> array('category', 'post_tag'),
		'menu_position' 	=> 5,
		'exclude_from_search' => false
	) );
	register_post_type('Store',$args);
}
add_action('init','mdd_custom_post_type');
*/

if ( !defined ( "ABSPATH" ) ) {
	exit;
}

require_once( plugin_dir_path(__FILE__) . 'wp-portal-cpt.php');
require_once( plugin_dir_path(__FILE__) . 'wp-portal-metabox.php');
require_once( plugin_dir_path(__FILE__) . 'wp-job-settings.php');

function mdd_admin_enqueue_scripts() {

	global $pagenow, $typenow;
}

add_action ('admin_enqueue_scripts', 'mdd_admin_enqueue_scripts');



















?>