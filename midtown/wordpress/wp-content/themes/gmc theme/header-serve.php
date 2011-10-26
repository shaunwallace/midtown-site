<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="description" content="<?php bloginfo('description') ?>">
		<meta name="keywords" content="Midtown, Grace, Church, Jesus, Ministry, God, Christian, Atlanta">
		<meta name="author" content="Shaun Wallace, Matt Yates, Jeff Kumar">
		
		<title><?php wp_title(); ?> <?php bloginfo( 'name' ); ?></title>
	
	<!-- stylesheets -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/reset.css" type="text/css" media="screen">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/admin.css" type="text/css" media="screen">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/community.css" type="text/css" media="screen">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>" type="text/css" media="screen">
	
	
	<!--[if IE]>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/ie.css" type="text/css">
	<![endif]-->
	
	<!-- javascript -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.js"></script>
	
	<script>
		// IE specific to fix unstyled elements in HTML5
		document.createElement('header');
		document.createElement('nav');
		document.createElement('article');
		document.createElement('footer');		
	</script>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />

	<script type="text/javascript"
	    src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript">
	  var map;
	  function initialize() {
	    var myOptions = {
	      zoom: 12,
	      center: new google.maps.LatLng(33.751034,-84.39002),
	      mapTypeId: google.maps.MapTypeId.ROADMAP
	    };
	    map = new google.maps.Map(document.getElementById('map_canvas'),
	        myOptions);
	  }

	  google.maps.event.addDomListener(window, 'load', initialize);
	</script>	
	
	<?php wp_head(); ?>
</head>
	<body onload="initialize()">
		<div class="wrapper clearfix">
			<header>
				<div id="logo">
					<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" title="Grace Midtown Logo" alt="Grace Midtown Logo" /></a>
				</div><!-- end logo -->	
				<div id="times_wrapper">
					<!-- <h3 id="gathering_times">Church Gathering Times</h3> -->				
					<?php
						//the query to find the service times custom post type
						$service_times = new WP_Query();
						$service_times->query( 'post_type=service_times' );
				
						//the loop
						while ( $service_times->have_posts() ) : $service_times->the_post();
							the_content();
						endwhile;

						// Reset Post Data to have Template Tags use the main query's current post again. 
						wp_reset_postdata(); 
					?>
				</div><!-- end times_wrapper -->
				<nav>
					<!-- Given a theme_location parameter, the function displays the menu assigned to that location, 
					or nothing if no such location exists or no menu is assigned to it -->				
					<?php wp_nav_menu( array( 'container_class' => 'nav', 'theme_location' => 'Main Navigation' ) ); ?>	
				</nav>	
				<div id="livestream">
					<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/livestream_icon.png" title="Click here to watch our livestream" 		
					alt="Grace Midtown Livetream" /></a>
				<a href="#">Livestream</a>
				</div><!-- end livestream -->
				<div id="banner_image">
					
				</div><!-- end banner_image -->		
			</header>
			
			<div id="content_wrapper">
				<div id="content">					