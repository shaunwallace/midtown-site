	
	</div><!-- end content -->
	</div><!-- end content_wrapper -->
		</div><!-- end wrapper -->
		<!--<div id="map_canvas" style="width:100%; height:100%; display: block;"></div>-->
			<footer>
				<div id="yellow_bar_wrapper">
					<div id="meeting_times_bar">
						<img id="midtown_cross_logo" src="<?php bloginfo('template_directory'); ?>/images/grace_midtown_symbol.png">
						<p>Making Disciples &amp; Releasing Communities On Mission</p>
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
				</div><!-- end yellow_bar_wrapper -->
				<div id="copyright_contact_info">
					<?php
						//the query to find the service times custom post type
						
						$footer_info = new WP_Query();
						$footer_info->query( 'post_type=footer_info' );
					
						//the loop
						while ( $footer_info->have_posts() ) : $footer_info->the_post();
							the_content();
						endwhile;

						// Reset Post Data to have Template Tags use the main query's current post again. 
						wp_reset_postdata();
						
					?>
				</div><!-- end copyright_contact_info -->
			</footer>
			<?php wp_footer(); ?> 
		</body>
</html>