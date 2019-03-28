<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Study_Class
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/style.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/main.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'study-class' ); ?></a>

		<!-- <div class="top-container">
    	<?php if( !empty($income_feature_image) ) : ?>
			<img src="<?php echo $income_feature_image['url']; ?>" alt="<?php echo $income_feature_image['alt']; ?>">
			<?php endif; ?>
		</div> -->

		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="header" id="myHeader">
				<div class="navbar">
					<?php
							wp_nav_menu(array(
								'thrmr_location'			=>  'primary',
								'container'						=>	'nav',
								'menu_class'					=>  'nav navbar-nav navbar-right list-reset flex flex-row'
							))
					?>
				</div>
			</div>

		</div>


	  <script>
	  window.onscroll = function() {myFunction()};
	  
	  var header = document.getElementById("myHeader");
	  var sticky = header.offsetTop;
	  
	  function myFunction() {
	    if (window.pageYOffset > sticky) {
	      header.classList.add("sticky");
	    } else {
	      header.classList.remove("sticky");
	    }
	  }
	  </script>


	<div id="content" class="site-content">

