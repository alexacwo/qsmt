<?php
/**
  * Template Name: About BKK/About Conference Venue
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
		$about_image_1 = get_field( "about_image_1" );				
		$about_image_2 = get_field( "about_image_2" );				
		$intro_text = get_field( "intro_text" );
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
					
					<div class="inner-content">
						<div class="col-lg-8">			
							<?php if ( $intro_text ) echo $intro_text; ?>							
						</div>						
						<div class="col-lg-4">		
							<?php if ($about_image_1) { ?>
								<img src="<?php echo $about_image_1; ?>" alt="<?php if( the_title() ) the_title(); ?>" />
							<?php } ?>	
	
							<?php if ($about_image_2) { ?>
								<img src="<?php echo $about_image_2; ?>" alt="<?php if( the_title() ) the_title(); ?>" />
							<?php } ?>								
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
				
				<?php $post_id = get_the_id(); ?>
				
				<?php switch ($post_id) {
					
					case 98: /* About Bangkok */ ?>		
					
						<a href="<?php echo get_template_directory_uri(); ?>/download/QSMT 2017_about_bkk_download.pdf" download>
							<div class="button-table">
								<div class="button-table-row">
									<div class="button-table-cell">
										<span class="button 1reg">
											Download Bangkok Info
										</span>
									</div>
								</div>
							</div>
						</a>
					<?php break;
						
					case 100: /* About Conference Venue */ ?>
					
						<img src="<?php echo get_template_directory_uri(); ?>/download/intercontinental_bkk_map.jpg" alt="Intercontinental Bangkok Map" />
					
						<a href="<?php echo get_template_directory_uri(); ?>/download/intercontinental_bkk_map.jpg" download>
							<div class="button-table">
								<div class="button-table-row">
									<div class="button-table-cell">
										<span class="button 1reg">
											Download Intercontinental Bangkok Map
										</span>
									</div>
								</div>
							</div>
						</a>
					<?php break;
				} ?>
				
				<?php $link_to_the_next_page = get_field( "link_to_the_next_page" );

					if( $link_to_the_next_page ) { ?>
						<a class="about-page-link" href="<?php echo get_home_url().'/'.$link_to_the_next_page->post_name; ?>"><?php echo $link_to_the_next_page->post_title; ?> ></a>
					<?php } ?>	
				
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

