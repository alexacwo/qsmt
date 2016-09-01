<?php
/**
  * Template Name: Accomodation
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
		$link_to_the_next_page = get_field( "link_to_the_next_page" );
	?>
	
	<?php
	if( $banner_image ) { ?>		
		<div id="masthead" class="about-banner" role="banner" style="background: url('<?php echo $banner_image; ?>">		
		</div>	 
	<?php }	?>	

	<div id="inner-primary" class="content-area container-fluid">
		<main id="main" class="site-main row" role="main">
		
			<div class="col-lg-2">
			</div>
			<div class="col-lg-8">

					<h2 class="entry-header"> 
						<?php the_title(); ?>
					</h2>
		
					<?php						
						/* Accomodation block */
						
						$accomodation_text = get_field( "accomodation_text" );
						$accomodation_image = get_field( "accomodation_image" );
						$intercontinental_hotel_text = get_field( "intercontinental_hotel_text" );
						$intercontinental_hotel_image = get_field( "intercontinental_hotel_image" );
						$airport_transfers_text = get_field( "airport_transfers_text" );
						$airport_transfers_image = get_field( "airport_transfers_image" );							
						
						if ( 	$accomodation_text ||
								$accomodation_image ||
								$intercontinental_hotel_text ||
								$intercontinental_hotel_image ||
								$airport_transfers_text ||
								$airport_transfers_image
							) { ?>
						<div class="accomodation">
							<div class="col-lg-8" style="padding-left: 0px;">
								<?php if ($accomodation_text) { ?>
									<h3>Accomodation</h3>
									<?php echo $accomodation_text; ?>
								<?php } ?>
								
								<div class="accomodation-buttons left download-buttons">
									<a href="<?php echo get_template_directory_uri(); ?>/download/QSMT_2017_symposium_program_download.pdf" download>
										<div class="button-table">
											<div class="button-table-row">
												<div class="button-table-cell">
													<span class="button 1reg">														
														Download hotel registration form
													</span>
												</div>
											</div>
										</div>
									</a>
								</div>
								
								<div class="accomodation-buttons right download-buttons">
									<a href="<?php echo get_home_url(); ?>/holiday-inn-hotel-reservation-form/">
										<div class="button-table">
											<div class="button-table-row">
												<div class="button-table-cell">
													<span class="button 1reg">			
														Click here to make a reservation
													</span>
												</div>
											</div>
										</div>
									</a>
								</div> 
							</div>
							<div class="col-lg-4" style="padding-right: 0px;">
								<?php if ($accomodation_image) { ?>
									<img src="<?php echo $accomodation_image; ?>" alt="<?php if( the_title() ) the_title(); ?>" />
								<?php } ?>
							</div>
							
							<div class="col-lg-8" style="padding-left: 0px;"> 						
								<?php if ($intercontinental_hotel_text) { ?>
									<?php echo $intercontinental_hotel_text; ?>
								<?php } ?> 
								
								<div class="accomodation-buttons left download-buttons">
									<a href="<?php echo get_template_directory_uri(); ?>/download/QSMT_2017_symposium_program_download.pdf" download>
										<div class="button-table">
											<div class="button-table-row">
												<div class="button-table-cell">
													<span class="button 1reg">			
														Download hotel registration form
													</span>
												</div>
											</div>
										</div>
									</a>
								</div>
								
								<div class="accomodation-buttons right download-buttons">
									<a href="<?php echo get_home_url(); ?>/intercontinental-bangkok-hotel-reservation-form/">
										<div class="button-table">
											<div class="button-table-row">
												<div class="button-table-cell">
													<span class="button 1reg">			
														Click here to make a reservation
													</span>
												</div>
											</div>
										</div>
									</a>
								</div> 
							</div>
							<div class="col-lg-4" style="padding-right: 0px;">					
								<?php if ($intercontinental_hotel_image) { ?>
									<img src="<?php echo $intercontinental_hotel_image; ?>" alt="<?php if( the_title() ) the_title(); ?>" />
								<?php } ?>
							</div>
							
							<div class="col-lg-8 accomodation-margin-bottom" style="padding-left: 0px;"> 					
								<?php if ($airport_transfers_text) { ?>
								<h3>Airport Transfers</h3>	
									<?php echo $airport_transfers_text; ?>
								<?php } ?>
							</div>
							<div class="col-lg-4" style="padding-right: 0px;">					
								<?php if ($airport_transfers_image) { ?>
									<img src="<?php echo $airport_transfers_image; ?>" alt="<?php if( the_title() ) the_title(); ?>" />
								<?php } ?>
							</div>
						</div>
					<?php }
					
						/* End of Accomodation block */ ?>	
						
					<div class="clearfix"></div> 
					
			</div>
			<div class="col-lg-2">
			</div>
				
		</main><!-- .site-main -->
	</div><!-- .content-area -->
	
	<div id="links" class="container-fluid">
		<div class="row">
			<div class="col-lg-2">
			</div>
			<div class="col-lg-8 download-buttons">	 
			
				<?php if( $link_to_the_next_page ) { ?>
					<a class="about-page-link" href="<?php echo get_home_url().'/'.$link_to_the_next_page->post_name; ?>"><?php echo $link_to_the_next_page->post_title; ?> ></a>
				<?php } ?>

				<br>

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
			<div class="col-lg-2">
			</div>
		</div>
	</div>
	
<?php get_footer(); ?>

