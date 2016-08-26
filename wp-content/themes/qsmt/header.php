<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage QSMT
 * @since QSMT 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header>
		<?php if (( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ))  ) : ?>
			<div id="site-header-menu" class="site-header-menu container-fluid">
				<div class="row">
				<div class="hidden-xs col-lg-2">
				</div> 
				<div class="col-xs-12 col-lg-8 site-header-logos-parent">
				
					<div class="col-xs-12 col-lg-4 site-header-logos">
						<div>
							<img src="<?php echo get_template_directory_uri(); ?>/img/qsmt_logo.png" />
						</div>						
						<div>
							<img src="<?php echo get_template_directory_uri(); ?>/img/com_costume.png" />
						</div>
					</div>
					
					<nav id="site-navigation" class="main-navigation col-xs-12 col-lg-8" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'qsmt' ); ?>">
					
						<a href="#" class="mobile-menu">
							<img src="<?php echo get_template_directory_uri(); ?>/img/menu_ham.png" />
						</a>
						<script type="text/javascript" src="http://osvaldas.info/examples/drop-down-navigation-touch-friendly-and-responsive/doubletaptogo.min.js"></script>
						<script>
							jQuery( document ).ready(function() {
									
								jQuery( '#site-navigation li:has(ul)' ).doubleTapToGo();
								jQuery( '.mobile-menu').click(function (event) {
									event.preventDefault();
									
									jQuery('.menu').toggle();
								}); /*
								 
								jQuery( '#menu-primary>li').hover(function () {
									clearTimeout(jQuery.data(this,'timer'));
									jQuery('ul',this).stop(true,true).slideDown(200);
								}, function () {
									jQuery.data(this,'timer', setTimeout(jQuery.proxy(function() {
										jQuery('ul',this).stop(true,true).slideUp(200);
									}, this), 100));
								}); */
							});
						</script>
						
						<div class="menu">
							<?php
								wp_nav_menu( array(
									'theme_location' => 'primary',
									'menu_class'     => 'primary-menu',
								 ) );
							?>
						</div>
					</nav> 
					
				</div>
				<div class="hidden-xs col-lg-2">
				</div>
			</div><!-- .site-header-menu -->
		<?php endif; ?>
	</header>
				
	<section id="content" class="row site-content">
