

	<article id="stories">
		<h1>Stories</h1>
	    <?php
			//the query to find the service times custom post type
			$story_post = new WP_Query();
			$story_post->query( array( 'post_type' => 'stories', 'showposts' => 3));
		
			//the loop
			while ( $story_post->have_posts() ) : $story_post->the_post(); ?>
			<div class="story_post">
			<span class="story_post_title">
			<?php echo the_title(); ?>
		
			</span>
			<span class="story_date">
			<?php echo get_the_date('M j, Y \a\t g:ia');?>
			</span>
			<?php echo the_content(); ?>
			</div><!-- end story_post -->
			<?php endwhile;

			// Reset Post Data to have Template Tags use the main query's current post again. 
			wp_reset_postdata(); 
		?>
	</article><!-- end article stories -->
</div><!-- end article_wrapper -->


<!--
	<div id="google_map">
		<div id="map_canvas"></div>	
	</div>
-->