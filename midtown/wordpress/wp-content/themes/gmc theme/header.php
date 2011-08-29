<!DOCTYPE html>
<html lang=en>
	<head>
		<meta charset=<?php bloginfo('charset'); ?>>
		<meta name="description" content="<?php bloginfo('description') ?>">
		<meta name="keywords" content="Midtown, Grace, Church, Jesus, Ministry, God, Christian, Atlanta">
		<meta name="author" content="Shaun Wallace, Matt Yates, Jeff Kumar">
		<title>	
			<?php bloginfo('name');?> | <?php wp_title();?>
	</title>
	
	<!-- stylesheets -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/reset.css" type="text/css" media="screen">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/admin.css" type="text/css" media="screen">
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
	
	<?php //wp_head(); ?>
</head>
	<body>
		<div class="wrapper clearfix">
			<header>
				<div id="logo">
					<img src="<?php bloginfo('template_directory'); ?>/images/logo.png" title="Grace Midtown Logo" alt="Grace Midtown Logo" />
				</div><!-- end logo -->	
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
				<div id="banner_text">
					MAY THE<br />
					KINGDOM<br />
					OF GOD COME<br />
					IN THIS CITY
				</div><!-- end banner_text -->		
				<div id="meeting_times_bar">
					<h3 id="gathering_times">Church Gathering Times</h3>
					<h3 id="connect">Connect</h3>
					
						<?php global $post; // required
						$args = array('post_type' => 'service_times'); 
						$service_times = get_posts($args);
						
						foreach( $service_times as $post ) : setup_postdata($post); ?>
							<?php the_content();?>
						<?php endforeach; ?>
									
					<div id="social_media_icons">
					
						<ul>
							<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/podcast.png" /></a></li>
							<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/facebook.png" /></a></li>
							<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/twitter.png" /></a></li>
							<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/rss.png" /></a></li>
							<!--  <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/email_icon.png" /></a></li> -->
						</ul>
					</div><!-- end social_media_icons -->
				</div><!-- end meeting_times -->
			</header>
			<div id="content">




