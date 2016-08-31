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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css" integrity="sha384-MIwDKRSSImVFAZCVLtU0LMDdON6KVCrZHyVQQj6e8wIEJkW4tvwqXrbMIya1vriY" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header>
		<?php if (( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ))  ) : ?>
			<div id="site-header-menu" class="site-header-menu container-fluid">
				<div class="row">
				<div class="hidden-xs col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xxl-2">
				</div> 
				<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xxl-8 site-header-logos-parent">
				
					<div class="col-xs-12 col-sm-8 col-md-6 col-lg-5 col-xl-4 site-header-logos">
						<div>
						<img src="<?php echo get_template_directory_uri(); ?>/img/qsmt_logo.png" /></div><div><img src="<?php echo get_template_directory_uri(); ?>/img/com_costume.png" />
						</div>
					</div>
					
					<nav id="site-navigation" class="main-navigation col-xs-12 col-sm-4 col-md-6 col-lg-7 col-xl-8" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'qsmt' ); ?>">
					
						<a href="#" class="mobile-menu">
							<img src="<?php echo get_template_directory_uri(); ?>/img/menu_ham.png" />
						</a>
						<script>
							jQuery( document ).ready(function() {
								
								
								jQuery( '.mobile-menu').click(function (event) {
									event.preventDefault();
									
									//jQuery('.menu').();
									jQuery('#site-navigation #menu-primary>li').slideToggle();
								});  
								 
								/* jQuery( '#menu-primary>li').hover(function () {
									clearTimeout(jQuery.data(this,'timer'));
									jQuery('ul',this).stop(true,true).slideDown(200);
								}, function () {
									jQuery.data(this,'timer', setTimeout(jQuery.proxy(function() {
										jQuery('ul',this).stop(true,true).slideUp(200);
									}, this), 100));
								}); */ 
								
								 jQuery( '#menu-primary>li').hover(function ( ) {  
									clearTimeout(jQuery.data(this,'timer'));
									jQuery('ul',this).stop(true,true).slideDown(200);
								}, function ( ) { 
									event.preventDefault();
									jQuery.data(this,'timer', setTimeout(jQuery.proxy(function() {
										jQuery('ul',this).stop(true,true).slideUp(200);
									}, this), 100));
								});    
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
				<div class="hidden-xs col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xxl-2">
				</div>
			</div><!-- .site-header-menu -->
		<?php endif; ?>
	</header>
				
	<section id="content" class="row1 site-content">
