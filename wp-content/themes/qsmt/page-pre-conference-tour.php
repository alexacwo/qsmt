<?php
/**
  * Template Name: Pre-Conference Tour
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

	<div id="about-bkk-primary" class="content-area container-fluid pre-conference-tour">
		<main id="main" class="site-main row" role="main">
		
			<div class="hidden-xs col-md-2 col-sm-2 col-lg-2">
			</div>
			<div id="main-content" class="col-xs-12 col-sm-12 col-md-8 col-sm-8 col-lg-8">

					<h2 class="entry-header"> 
						<?php the_title(); ?>						
					</h2>	
					<h3>
						All tours depart from and return to the conference hotel.
					</h3>					
							
					<div class="col-lg-8 download-buttons registration-buttons">	
					
						<a id="day-1-button" href="#">
							<div class="button-table">
								<div class="button-table-row">
									<div class="button-table-cell">
										<span class="button 1reg">		
											Day 1
										</span>
									</div>
								</div>
							</div>
						</a> 
						<a id="day-2-button" href="#">
							<div class="button-table">
								<div class="button-table-row">
									<div class="button-table-cell">
										<span class="button 1reg">				
											Day 2
										</span>
									</div>
								</div>
							</div>
						</a> 
						<div class="clearfix"></div>
						
					</div>
					
					<div class="inner-content">
						<div class="col-lg-8">			
							<div class="day-1">
								SATURDAY 07 JANUARY 2017
							</div>		
							<div class="day-2">
								SUNDAY 08 JANUARY 2017
							</div>
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
			</div>
			<div class="hidden-xs col-md-2 col-sm-2 col-lg-2">
			</div>
		</div>
	</div>
	
<?php get_footer(); ?>

