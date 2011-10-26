<?php 

error_reporting(E_ERROR);


get_header();
  
get_sidebar('sermons');
get_sidebar('stories');

/*
if ( is_home() ) :
  get_footer('home');
else :
  get_footer();
endif;
*/

get_footer();
?>              
           
