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
			<div class="col-xs-12 col-sm-12 col-md-8 col-sm-8 col-lg-8">

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
						<div class="col-xs-12 col-lg-12">			
							<div class="day-1">
								<h4>SATURDAY 07 JANUARY 2017</h4>
								
								<?php
								
									if( have_rows('saturday_07_jan_repeater') ) {

										$i = 1;
										while ( have_rows('saturday_07_jan_repeater') ) {				

											the_row();
											the_sub_field('saturday_07_text'); ?>
											<div class="images-container">
												<?php for($j = 1; $j<4; $j++) { ?>
													<div class="col-xs-12 col-lg-4 images">
														<img src="<?php the_sub_field('saturday_07_image_0'.$j); ?>" />
													</div>
												<?php } ?>
												<div class="clearfix"></div>
											</div>
											<?php $i++;
										}
									}
								?>
		
							</div>		
							<div class="day-2">
								<h4>SUNDAY 08 JANUARY 2017</h4>
								
								<?php
								
									if( have_rows('sunday_08_jan_repeater') ) {

										$i = 1;
										$k = 7;
										while ( have_rows('sunday_08_jan_repeater') ) {				

											the_row();
											the_sub_field('sunday_08_text'); ?>
											<div class="images-container">
											
												<?php 
												for($j = 1; $j<$k; $j++) { ?>
													<div class="col-xs-12 col-lg-4 images">
														<img src="<?php the_sub_field('sunday_08_image_0'.$j); ?>" />
													</div>
												<?php } ?>
												<div class="clearfix"></div>
											</div>
											<?php $i++;
											$k = 4; /* First loop though 6 images, then over 3 images */
										}
									}
								?>
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
			
				<div class="col-xs-12 col-lg-4">
					<a href="<?php echo get_template_directory_uri(); ?>/download/QSMT 2017_pre_conference_tour_program.pdf" download>
						<div class="button-table">
							<div class="button-table-row">
								<div class="button-table-cell">
									<span class="button 1reg">														
										Download the program
									</span>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-xs-12 col-lg-4">
					<a href="<?php echo get_template_directory_uri(); ?>/download/QSMT 2017_pre_conference_tour_booking_form.pdf" download>
						<div class="button-table">
							<div class="button-table-row">
								<div class="button-table-cell">
									<span class="button 1reg">														
										Download tour booking form
									</span>
								</div>
							</div>
						</div>
					</a>
				</div>
				
				<div class="col-xs-12 col-lg-4">
					<a href="<?php echo get_home_url(); ?>/online-tour-booking-form/">
						<div class="button-table">
							<div class="button-table-row">
								<div class="button-table-cell">
									<span class="button 1reg">			
										Online tour booking form
									</span>
								</div>
							</div>
						</div>
					</a>
				</div> 
				
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

