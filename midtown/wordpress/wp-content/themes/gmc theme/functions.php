<?php
	/* Registers a single custom navigation menu in the new custom menu editor of WordPress 3.0. 
	** This allows for creation of custom menus in the dashboard for use in your theme
	**/
	if ( function_exists( 'register_nav_menu' ) ) {
		register_nav_menu( 'Main Navigation', 'Midtown Main Navigation Menu' );
	}
	
	
 	if ( !is_user_logged_in() ) { 
		add_filter( 'show_admin_bar', '__return_false' );
	} 
	
	if ( function_exists ('register_sidebar')) { 
	    register_sidebar ('stories'); 
	} 
	
	if ( function_exists ('register_sidebar')) { 
	    register_sidebar ('sermons'); 
	} 
	
	
   //J.K added a custom post type for announcements for the slider.
   add_action( 'init', 'create_post_type' );                                             
   function create_post_type() {         
         
       	$args = array(
         
		       	'labels' => array(
		       				'name' => __( 'Announcement' ),         
		       				'singular_name' => __( 'Announcement' )         
		       	),         
		       	'public' => true,
		       	'has_archive' => true
		);

		register_post_type( 'Announcement', $args );        
    }

	/* Add action for custom post type in-order for the meeting times to be changes from the ui */
	add_action( 'init', 'create_service_time_post_type' );
	function create_service_time_post_type() {
	  
		$args = array(
				'label' => 'Service Times',
	    		'menu_name' => 'Service Times',
	    		'public' => true,
			    'publicly_queryable' => true,
			    'show_ui' => true, 
			    'show_in_menu' => true, 
			    'query_var' => true,
			    'rewrite' => array('slug' => 'Service Times'),
			    'capability_type' => 'post',
			    'has_archive' => false, 
			    'hierarchical' => false,
			    'menu_position' => null,
			    'supports' => array( 'title','editor','author','thumbnail','excerpt','comments' )
	  	); 
	  register_post_type( 'service_times', $args );
	}
	
	/* Add action for custom post type in-order for the footer info to be changes from the ui. This includes the address, phone #, etc. */
	add_action( 'init', 'create_footer_info_post_type' );
	function create_footer_info_post_type() {
	  
		$args = array(
				'label' => 'Copyright and Address',
			    'menu_name' => 'Copyright & Address Info',
			    'public' => true,
			    'publicly_queryable' => true,
			    'show_ui' => true, 
			    'show_in_menu' => true, 
			    'query_var' => true,
			    'rewrite' => true,
			    'capability_type' => 'post',
			    'has_archive' => false, 
			    'hierarchical' => false,
			    'menu_position' => null,
			    'supports' => array( 'title','editor','author','thumbnail','excerpt','comments' )
	  	); 
	  register_post_type( 'footer_info', $args );
	}
	
	/* Add action for custom post type for the latest sermon posts */
	add_action( 'init', 'create_sermon_post_type' );
	function create_sermon_post_type() {
	  
		$args = array(
				'label' => 'Latest Sermon',
			    'menu_name' => 'Latest Sermon',
			    'public' => true,
			    'publicly_queryable' => true,
			    'show_ui' => true, 
			    'show_in_menu' => true, 
			    'query_var' => true,
			    'rewrite' => true,
			    'capability_type' => 'post',
			    'has_archive' => false, 
			    'hierarchical' => false,
			    'menu_position' => null,
			    'supports' => array( 'title','editor','author','thumbnail','excerpt','comments' )
	  	); 
	  register_post_type( 'sermons', $args );
	}
	
	/* Add action for custom post type for the latest sermon posts */
	add_action( 'init', 'create_stories_post_type' );
	function create_stories_post_type() {
	  
		$args = array(
				'label' => 'Stories',
			    'menu_name' => 'Stories',
			    'public' => true,
			    'publicly_queryable' => true,
			    'show_ui' => true, 
			    'show_in_menu' => true, 
			    'query_var' => true,
			    'rewrite' => true,
			    'capability_type' => 'post',
			    'has_archive' => false, 
			    'hierarchical' => false,
			    'menu_position' => null,
			    'supports' => array( 'title','editor','author','thumbnail','excerpt','comments' )
	  	); 
	  register_post_type( 'stories', $args );
	}
?>