<?php
function mdd_job_post_type() {
	 
	 $sungular = 'Job Listing';
	 $plural = 'Job Listings'; 

	 $labels = array(
	 	'name' 					=> $sungular,
	 	'singular_name' 		=> $plural,
	 	'add_new' 				=> 'Add New',
	 	'add_new_item' 			=> 'Add New ' . $singular_name,
	 	'edit' 					=> 'Edit',
	 	'edit_item' 			=> 'Edit ' . $singular_name,
	 	'new_item' 				=> 'New ' . $singular_name,
	 	'view' 					=> 'View ' . $singular_name,
	 	'view_item' 			=> 'View ' . $singular_name,
	 	'search_term' 			=> 'Search ' . $plural,
	 	'not_found' 			=> 'No ' . $singular_name . ' found',
	 	'not_found_in_trash' 	=> 'No ' . $singular_name . ' in trash'
	 );

	 $args = array(
	 	'labels' => $labels,
	 	'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_position'		 => 10,
        'menu_icon'			 => 'dashicons-store',
        'query_var'          => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'rewrite'            => array( 'slug' => 'jobs' ),
        'supports'           => array( 'title','editor' ),
    );

	 register_post_type("Job", $args);
}

add_action("init", 'mdd_job_post_type');


function mdd_register_texonomy() {

	$sungular = 'Department';
	 $plural = 'Departments'; 

	 $labels = array(
	 	'name' 					=> $sungular,
	 	'singular_name' 		=> $plural,
	 	'add_new' 				=> 'Add New',
	 	'add_new_item' 			=> 'Add New ' . $singular_name,
	 	'edit' 					=> 'Edit',
	 	'edit_item' 			=> 'Edit ' . $singular_name,
	 	'new_item' 				=> 'New ' . $singular_name,
	 	'view' 					=> 'View ' . $singular_name,
	 	'view_item' 			=> 'View ' . $singular_name,
	 	'search_term' 			=> 'Search ' . $plural,
	 	'not_found' 			=> 'No ' . $singular_name . ' found',
	 	'not_found_in_trash' 	=> 'No ' . $singular_name . ' in trash'
	 );

	$args = array(
		'hierarchical' 			=>  false,
		'labels' 				=> $labels,
		'show_ui' 				=> true,
		'show_admin_column' 	=> true,
		'update_count_callback' => '_update_post_term_count',
		'query_var' 			=> true,
		'rewrite'  				=> array('slug' => 'Department'),
	);

	register_taxonomy('Department', 'job', $args);
}

add_action('init', 'mdd_register_texonomy');

?>