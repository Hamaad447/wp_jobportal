<?php 

function mdd_add_submenu_page() {

	add_submenu_page(
		'edit.php?post_type=job',
		'Record Jobs',
		'Record Jobs',
		'manage_options',
		'Record Jobs',
		'recorder_admin_jobs_callback'
	);
}
 
add_action("admin_menu", 'mdd_add_submenu_page');

function recorder_admin_jobs_callback() {

	$args = array(
		'post_type' 				=> 'job',
		'orderby'					=> 'menu_order',
		'order'						=>'ASC',
		'not_found_row' 			=> true,
		'update_post_term_cache' 	=> false,
		'post_per_post' 			=> 50
	);
	$job_listing = new WP_Query( $args );

	/*echo "<pre>";var_dump($job_listing);echo '</pre>';*/

	?>
	<div id="job-sort" class="wrap">
		<div id="icon-job-admin" class="icon32"> <br></div>
		<h2><?php _e('Sort Job Positions', 'wp-job-listing') ?></h2>
		<img src="<?php echo esc_url(admin_url(). '/image/loading.gif'); ?>" >
		<?php if ($job_listing->have_posts()) :?>
			<p> <?php _e('<strong>Note:</strong> this only affects the jobs listed using the shortcode functions', 'wp_job_listing') ?></p>
			<ul id="custom-type-list">
				<?php while ($job_listing->have_posts()) : $job_listing->the_post()  ?>
					<li id="<?php the_id(); ?>"><?php the_title(); ?></li>
				<?php endwhile; ?>
			</ul>
		<?php else: ?>
			<p>No Record found</p>
		<?php endif; ?>
	</div>
	<?php
}



 ?>
