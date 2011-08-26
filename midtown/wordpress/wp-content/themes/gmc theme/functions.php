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
?>