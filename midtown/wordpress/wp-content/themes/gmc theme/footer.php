		</div><!-- end wrapper -->
			<footer>
				<div id="copyright_contact_info">
					<?php
						//the query to find the service times custom post type
						$footer_info = new WP_Query();
						$footer_info->query( 'post_type=footer_info' );
					
						//the loop
						while ( $footer_info->have_posts() ) : $footer_info->the_post();
							echo the_content();
						endwhile;

						// Reset Post Data to have Template Tags use the main query's current post again. 
						wp_reset_postdata();
					?>
				</div><!-- end copyright_contact_info -->
			</footer>
			<?php wp_footer(); ?> 
		</body>
</html>