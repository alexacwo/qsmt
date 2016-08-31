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
 
	<?php
	
	// Start the loop.
	while ( have_posts() ) : the_post();

		// Include the page content template.
		get_template_part( 'template-parts/content', 'page' );

		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) {
			comments_template();
		}

		// End of the loop.
	endwhile;
	?>
	
<?php get_footer(); ?>
