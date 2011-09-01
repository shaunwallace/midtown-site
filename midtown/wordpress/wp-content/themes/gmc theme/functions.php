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
	
   //J.K added a custom post type for announcements for the slider.
   add_action( 'init', 'create_post_type' );                                             
   function create_post_type() {         
       register_post_type( 'Announcement',
         
       array(
         
       'labels' => array(
         
          'name' => __( 'Announcement' ),         
          'singular_name' => __( 'Announcement' )         
         ),         
       'public' => true,
        
       'has_archive' => true,
         
       )         
     ); }
	/* Add action for custom post type in-order for the meeting times to be changes from the ui */
	add_action('init', 'create_service_time_list');
	function create_service_time_list() 
	{
	  
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
	    'supports' => array('title','editor','author','thumbnail','excerpt','comments')
	  ); 
	  register_post_type('service_times',$args);
	}
	
	/* Add action for custom post type in-order for the meeting times to be changes from the ui */
	add_action('init', 'create_footer_info');
	function create_footer_info() 
	{
	  
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
	    'supports' => array('title','editor','author','thumbnail','excerpt','comments')
	  ); 
	  register_post_type('footer_info',$args);
	}
?>