<div id="article_wrapper">
	<article id="latest_sermon">
			<h1>Watch the Latest Sermon</h1> 	
		    <?php
				//the query to find the service times custom post type
				$latest_sermon = new WP_Query();
				$latest_sermon->query( 'post_type=sermons' );
			
				//the loop
				while ( $latest_sermon->have_posts() ) : $latest_sermon->the_post(); ?>
				<span class="sermon_title">
				<?php	echo the_title(); ?>
				</span>
				<?php	echo the_content();
				endwhile;

				// Reset Post Data to have Template Tags use the main query's current post again. 
				wp_reset_postdata(); 
			?>
	</article><!-- end article latest_sermon -->