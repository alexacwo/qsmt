<?php
/**
  * Template Name: About Pages
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
		$about_image = get_field( "about_image" );
		$about_title = get_field( "about_title" );
		$about_introtext = get_field( "about_introtext" );
	?>
	<?php
	if( $banner_image ) { ?>	
		<div id="masthead" class="about-banner" role="banner" style="background: url('<?php echo $banner_image; ?>">		
		</div>	 
	<?php }	?>
	

	<div id="about-primary" class="content-area container-fluid">
		<main id="main" class="site-main row" role="main">
		
			<div class="col-lg-2">
			</div>
			<div id="main-content" class="col-lg-8">

					<h2 class="entry-header"> 
						 <?php if( $about_title ) echo $about_title; ?>
					</h2>					
					
					<div class="col-lg-8">
					
						<?php if( $about_introtext ) echo $about_introtext; ?>
						
						<?php
						
							/* Visitor Information page block */
							
							$hours_of_operation = get_field( "hours_of_operation" );
							$admission = get_field( "admission" );
							$location = get_field( "location" );
							$telephone = get_field( "telephone" );
							$fax = get_field( "fax" );
							$website = get_field( "website" );
							
							
							if ( 	$hours_of_operation ||
									$admission ||
									$location ||
									$telephone ||
									$fax ||
									$website
								) { ?>
							
									<div class="about-row">
										<div class="about-cell title">
											Hours of operation:
										</div> 
										<div class="about-cell padding">
										</div> 
										<div class="about-cell">
											<?php echo $hours_of_operation; ?>
										</div>  
									</div> 
									
									<div class="about-row margin"></div> 
									
									<div class="about-row">
										<div class="about-cell title">
											Admission:
										</div>  
										<div class="about-cell padding">
										</div> 
										<div class="about-cell">
											<?php echo $admission; ?>
										</div>
									</div>
									
									<div class="about-row margin"></div> 
									
									<div class="about-row">
										<div class="about-cell title">
											Location:
										</div>  
										<div class="about-cell padding">
										</div> 
										<div class="about-cell">
											<?php echo $location; ?>
										</div>  
									</div>
									
									<div class="about-row margin"></div> 
									
									<div class="about-row">
										<div class="about-cell title">
											Telephone:
										</div>  
										<div class="about-cell padding">
										</div> 
										<div class="about-cell">
											<?php echo $telephone; ?>
										</div> 
									</div>
									
									<div class="about-row margin"></div> 
									
									<div class="about-row">
										<div class="about-cell title">
											Fax:
										</div>  
										<div class="about-cell padding">
										</div> 
										<div class="about-cell">
											<?php echo $fax; ?>
										</div>  
									</div>
									
									<div class="about-row margin"></div> 
									
									<div class="about-row">
										<div class="about-cell title">
											Website:
										</div>  
										<div class="about-cell padding">
										</div> 
										<div class="about-cell">
											<?php echo $website; ?>
										</div> 
									</div>
									
									<div class="about-row margin"></div> 
						<?php 
						/* End of Visitor Information block */
						}	?>
						
					</div>
					<div class="col-lg-4">

						<?php	if( $about_image ) { ?>
								<img src="<?php echo $about_image; ?>" alt="<?php if( $about_title ) echo $about_title; ?>" />
						<?php }	?>
					</div>
						
					<?php
						
						/* Exhibitions block */
						
						$galleries_1_and_2_text = get_field( "galleries_1_and_2_text" );
						$galleries_1_and_2_image = get_field( "galleries_1_and_2_image" );
						$galleries_3_and_4_text = get_field( "galleries_3_and_4_text" );
						$galleries_3_and_4_image = get_field( "galleries_3_and_4_image" );						
						
						if ( 	$galleries_1_and_2_text ||
								$galleries_1_and_2_image ||
								$galleries_3_and_4_text ||
								$galleries_3_and_4_image
							) { ?>
						<div class="exhibitions">
							<div class="col-lg-8" style="padding-left: 0px;"> 
								<?php if ($galleries_1_and_2_text) { ?>
									<h3>Galleries 1 and 2:</h3>
									<?php echo $galleries_1_and_2_text; ?>
								<?php } ?>
							</div>
							<div class="col-lg-4" style="padding-right: 0px;">
								<?php if ($galleries_1_and_2_image) { ?>
									<img src="<?php echo $galleries_1_and_2_image; ?>" alt="<?php if( $about_title ) echo $about_title; ?>" />
								<?php } ?>
							</div>
							
							<div class="col-lg-8" style="padding-left: 0px;"> 						
								<?php if ($galleries_3_and_4_text) { ?>
									<h3>Galleries 1 and 2:</h3>
									<?php echo $galleries_3_and_4_text; ?>
								<?php } ?>
							</div>
							<div class="col-lg-4" style="padding-right: 0px;">					
								<?php if ($galleries_3_and_4_image) { ?>
									<img src="<?php echo $galleries_3_and_4_image; ?>" alt="<?php if( $about_title ) echo $about_title; ?>" />
								<?php } ?>
							</div>
						</div>
					<?php }
						/* End of Exhibitions block */ ?>	
				
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
			<div class="col-lg-2">
			</div>
		</div>
	</div>
	
<?php get_footer(); ?>

