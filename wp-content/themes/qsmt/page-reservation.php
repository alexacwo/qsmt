<?php
/**
  * Template Name: Reservation page
 *
 * This is the template that displays the front page
 *
 * @package WordPress
 * @subpackage QSMT
 * @since QSMT 1.0
 */

get_header(); ?>

	<?php 
		$banner_image = get_field( "banner_image" );
	?>
	
	<?php
	if( $banner_image ) { ?>		
		<div id="masthead" class="about-banner" role="banner" style="background: url('<?php echo $banner_image; ?>">		
		</div>	 
	<?php }	?>	 
	<div id="reservation-primary" class="content-area container-fluid reservation-form">
		<main id="main" class="site-main row" role="main">
		
			<div class="col-lg-2">
			</div>
			<div id="main-content" class="col-lg-8">
			
				<div class="col-lg-12">
				
					<?php 
						while ( have_posts() ) : the_post();
							the_content(); 
						endwhile;
					?>
					
				</div>
				
			</div>
			<div class="col-lg-2">
			</div>
				
		</main><!-- .site-main -->
	</div>
	
	<div id="links" class="container-fluid">
		<div class="row">
		</div>
	</div>
	
<?php get_footer(); ?>
