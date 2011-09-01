  <?php get_header(); ?>
 
        <div id="container">
            <div id="content">
 
                <div id="nav-above" class="navigation">
                </div><!-- #nav-above -->
 
                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                </div><!-- #post-<?php the_ID(); ?> -->           
 
                <div id="nav-below" class="navigation">
                </div><!-- #nav-below -->                   
 
            </div><!-- #content -->
        </div><!-- #container -->
 
<?php get_sidebar(); ?>
