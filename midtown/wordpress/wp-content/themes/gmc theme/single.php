<?php     
get_header();
 ?>
 
   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="post" id="post-<?php the_ID(); ?>">
    <div class="post-info">
     <h2><?php the_title(); ?></h2>    
    <img src="<?php bloginfo('template_directory') ?>/images/authors/<?php the_author_ID()?>.jpg" alt="<?php the_author() ?>" alt="<?php the_author() ?>" title="<?php the_author() ?>" />
    <em><?php the_time('F jS, Y') ?></em>
    <span class="post-tag"><?php the_tags('', ' . ', ''); ?></span>
    </div>
 
    <div class="entry">                                     
    <span><?php 
      the_content(); 
    ?></span>  
    </div>    
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>           
<?php comments_template(); ?>                                 
<?php get_footer();  ?>
