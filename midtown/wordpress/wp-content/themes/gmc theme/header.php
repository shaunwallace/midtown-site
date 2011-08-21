<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">

    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>

    <meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
	<meta name="description" content="<?php bloginfo('description') ?>" />
	<?php if(is_search()) { ?>
	<meta name="robots" content="noindex, nofollow" /> 
    <?php }?>
    
<!-- Styles  -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/library/styles/print.css" type="text/css" media="print" />
	<!--[if IE]><link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/library/styles/ie.css" type="text/css" media="screen, projection" /><![endif]-->
	<!--[if lte IE 7]><link type="text/css" href="<?php bloginfo('template_directory'); ?>/library/styles/ie-nav.css" rel="stylesheet" media="all" /><![endif]-->
	<!--[if IE]><link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/library/styles/basic_ie.css" type="text/css" media="screen, projection" /><![endif]-->

<!--	
	<?php if ($css == 'Enabled') {?>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/library/functions/style.php" type="text/css" media="screen, projection" />
	<?php } ?>
-->
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<!-- Javascripts  -->
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.2.6.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/nav.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
	$(navigationArrow("<?php bloginfo('template_directory'); ?>/images/arrow.png"));
	});
	</script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/swfobject.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/search.js"></script>
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php
$slider = get_option('T_slider');
if($slider == "On") { ?>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/slider/jquery.dimensions.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/slider/ui.mouse.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/slider/ui.slider.js"></script>
	<?php } ?>
<?php
$slideshow_height = get_option('T_slideshow_height');
$slideshow = get_option('T_slideshow');
if($slideshow == "On") { ?>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.innerfade.js"></script>
	<script type="text/javascript">
	   $(document).ready(
				function(){

					$('ul#portfolio').innerfade({
						speed: 1000,
						timeout: 3500,
						type: 'sequence',
						containerheight: '<?php echo $slideshow_height; ?>px'
					});
			});
  	</script>
<?php } ?>

<?php wp_head(); ?>

</head>

<body>
<div id="top">

<!-- Begin Masthead -->
<div id="masthead">
 <h4 class="left"><a href="<?php bloginfo('home'); ?>/" title="Home" class="logo"><?php bloginfo('name'); ?></a> <span class="description"><?php bloginfo('description'); ?></span></h4>
</div>

<?php include (TEMPLATEPATH . '/nav.php'); ?>

<div class="clear"></div>
</div>

<div class="container">
<div class="container-inner">