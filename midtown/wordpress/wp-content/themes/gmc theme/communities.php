<?php
/*
Template Name: Communities
*/
?>

<?php get_header('serve'); ?>
<p id="map_header_text">find a community group near you</p>
<div id="map_canvas"></div>

<div id="sidebar">
	<img src="<?php bloginfo('template_directory'); ?>/images/calendar_icon.png" title="Calendar" alt="Check out the calendar of events" />
	<p id="see_our_calender">See our Calendar<p>
	<hr />
	<h3>Upcoming Dates</h3>
	
	<?php
		//the query to find the service times custom post type
		$calendar = new WP_Query();
		$calendar->query( 'post_type=community_calendar' );

		//the loop
		while ( $calendar->have_posts() ) : $calendar->the_post(); 
			echo '<p class="calendar_date">';
			echo get_the_date('M j, Y');
			echo '</p>';
			the_content();
		endwhile;

		// Reset Post Data to have Template Tags use the main query's current post again. 
		wp_reset_postdata(); 
	?>
	
</div>

<div id="community_vision">
	<?php
		//the query to find the service times custom post type
		$vision = new WP_Query();
		$vision->query( 'post_type=community_vision' );

		//the loop
		while ( $vision->have_posts() ) : $vision->the_post(); 
			echo '<div class="vision">'; ?>
			<img src="<?php bloginfo('template_directory'); ?>/images/community_logo_placeholder.png" title="Community Logo" alt="" />
			<?php
			echo '<span class="vision_header">';
			the_excerpt();
			echo '</span>';
			the_content();
			echo '</div>';
			
		endwhile;

		// Reset Post Data to have Template Tags use the main query's current post again. 
		wp_reset_postdata(); 
	?>
	
</div><!-- end community_vision -->

<!--
<div id="facebook_like_button">
	<div id="fb-root"></div>
		<script src="http://connect.facebook.net/en_US/all.js#appId=109962169105381&amp;xfbml=1"></script>
			<fb:like href="http://www.facebook.com/gracemidtown" send="true" width="500" show_faces="true" action="like" font=""></fb:like>
</div> -->

<?php get_footer(); ?>
