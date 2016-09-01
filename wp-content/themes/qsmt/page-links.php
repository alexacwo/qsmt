<?php
/**
  * Template Name: Links
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
		$links_image_1 = get_field( "links_image_1" );				
		$links_desc_1 = get_field( "links_desc_1" );			
		$links_image_2 = get_field( "links_image_2" );		
		$links_desc_2 = get_field( "links_desc_2" );						
		$links_image_3 = get_field( "links_image_3" );		
		$links_desc_3 = get_field( "links_desc_3" );			
	?>
	<?php
	if( $banner_image ) { ?>	
		<div id="masthead" class="about-banner" role="banner" style="background: url('<?php echo $banner_image; ?>">		
		</div>	 
	<?php }	?>

	<div id="about-bkk-primary" class="content-area container-fluid">
		<main id="main" class="site-main row" role="main">
		
			<div class="hidden-xs col-md-2 col-sm-2 col-lg-2">
			</div>
			<div id="main-content" class="col-xs-12 col-sm-12 col-md-8 col-sm-8 col-lg-8">

					<h2 class="entry-header"> 
						<?php the_title(); ?>
					</h2>	
					
					<div class="inner-content links-page">
						<div class="col-lg-8">							
							<?php if ($links_image_1) { ?>
								<img src="<?php echo $links_image_1; ?>" alt="<?php if( the_title() ) the_title(); ?>" />
							<?php } ?>	
							
							<div class="image-description">
								<?php if ($links_desc_1) {  echo $links_desc_1; } ?>	
							</div>
							
							<hr>
	
							<?php if ($links_image_2) { ?>
								<img src="<?php echo $links_image_2; ?>" alt="<?php if( the_title() ) the_title(); ?>" />
							<?php } ?>	
							
							<div class="image-description">
								<?php if ($links_desc_2) {  echo $links_desc_2; } ?>	
							</div>
							
							<hr>
	
							<?php if ($links_image_3) { ?>
								<img src="<?php echo $links_image_3; ?>" alt="<?php if( the_title() ) the_title(); ?>" />
							<?php } ?>	
							
							<div class="image-description">
								<?php if ($links_desc_3) {  echo $links_desc_3; } ?>	
							</div>
							
						</div>						
						<div class="col-lg-4">									
						</div>							
						<div class="clearfix"></div> 
					</div>
					
			</div>
			<div class="hidden-xs col-md-2 col-sm-2 col-lg-2">
			</div>
				
		</main><!-- .site-main -->
	</div><!-- .content-area -->
	
	<div id="links" class="container-fluid">
		<div class="row">
			<div class="hidden-xs col-md-2 col-sm-2 col-lg-2">
			</div>
			<div class="col-xs-12 col-sm-12 col-md-8 col-sm-8 col-lg-8 download-buttons">	
				 
				<a href="<?php echo get_home_url(); ?>/registration">
					<div class="button-table">
						<div class="button-table-row">
							<div class="button-table-cell">
								<span class="button 1reg">
									Registration
								</span>
							</div>
						</div>
					</div>
				</a>

			</div>
			<div class="hidden-xs col-md-2 col-sm-2 col-lg-2">
			</div>
		</div>
	</div>
	
<?php get_footer(); ?>

