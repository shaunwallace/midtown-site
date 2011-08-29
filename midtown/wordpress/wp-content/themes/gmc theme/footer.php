				</div><!-- end content -->
				<article>
				</article>

			</div><!-- end wrapper -->
			<footer>
				<div id="copyright_contact_info">
					
					<?php global $post; // required
					$args = array('post_type' => 'footer_info'); 
					$footer_info = get_posts($args);
					
					foreach( $footer_info as $post ) : setup_postdata($post); ?>
						<?php the_content();?>
					<?php endforeach; ?>
					
					 <?php /* echo '&copy; ' .  date('Y') . ' Grace Midtown Church . 1095 State Street . Atlanta, GA 30318 | Phone: 404.874.9008' */?> 
				</div><!-- end copyright_contact_info -->
			</footer>
			<?php wp_footer(); ?> 
		</body>
</html>