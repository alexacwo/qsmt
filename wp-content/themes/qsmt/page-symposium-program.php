<?php
/**
  * Template Name: Symposium Program
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

	<div id="primary" class="content-area container-fluid">
		<main id="main" class="site-main row" role="main">
		
			<div class="col-lg-2">
			</div>
			<div class="col-lg-8">

					<h2 class="entry-header"> 
						<?php the_title(); ?>
					</h2>
					
					<div class="program-table-head">
						<div class="program-table-head-cell date">
							Date
						</div>
						
						<div class="program-table-head-cell events">
							Events
						</div>
						
						<div class="program-table-head-cell venue">
							Venue
						</div>
					</div>	
					
					<div class="program-table-row border-top">
						<div class="program-table-head-cell date">
							Friday
							<br>06 January 2017
						</div>
						
						<div class="program-table-head-cell events">
							<br>
							Registration opens
						</div>
						
						<div class="program-table-head-cell venue">
							<br>
							Intercontinental Hotel
						</div>
					</div>
					
					<div class="program-table-row border-top">
						<div class="program-table-head-cell date">
							Saturday
							<br>07 January 2017
						</div>
						
						<div class="program-table-head-cell events">
							<br>
							Registration continues
						</div>
						
						<div class="program-table-head-cell venue">
							<br>
							Intercontinental Hotel
						</div>
					</div>
					
					<div class="program-table-row">
						<div class="program-table-head-cell date">
							...
						</div>
						
						<div class="program-table-head-cell events">
							Optional pre-conference tours (own expense)
						</div>
						
						<div class="program-table-head-cell venue">
							Bangkok and environs
						</div>
					</div>
					
					<div class="program-table-row border-top">
						<div class="program-table-head-cell date">
							<h4>Day 1</h4>
							
							Sunday
							<br>08 January 2017
						</div>
						
						<div class="program-table-head-cell events">
							<br>
							<br>
							Registration continues
						</div>
						
						<div class="program-table-head-cell venue">
							<br>
							<br>
							Intercontinental Hotel
						</div>
					</div>
					
					<div class="program-table-row">
						<div class="program-table-head-cell date">
							...
						</div>
						
						<div class="program-table-head-cell events">
							...
						</div>
						
						<div class="program-table-head-cell venue">
							...
						</div>
					</div>
					
					<div class="program-table-row border-top">
						<div class="program-table-head-cell date">
							Day 2
							<br>Monday
							<br>09 January 2017
						</div>
						
						<div class="program-table-head-cell events">
							<br>
							<br>
							...
						</div>
						
						<div class="program-table-head-cell venue">
							<br>
							<br>
							...
						</div>
					</div>
					
					<div class="program-table-row">
						<div class="program-table-head-cell date">
							...
						</div>
						
						<div class="program-table-head-cell events">
							...
						</div>
						
						<div class="program-table-head-cell venue">
							...
						</div>
					</div>
					
					<div class="program-table-row border-top">
						<div class="program-table-head-cell date">
							Day 3
							<br>Tuesday
							<br>10 January 2017
						</div>
						
						<div class="program-table-head-cell events">
							<br>
							<br>
							...
						</div>
						
						<div class="program-table-head-cell venue">
							<br>
							<br>
							...
						</div>
					</div>
					
					<div class="program-table-row">
						<div class="program-table-head-cell date">
							...
						</div>
						
						<div class="program-table-head-cell events">
							...
						</div>
						
						<div class="program-table-head-cell venue">
							...
						</div>
					</div>
					
					<div class="program-table-row border-top">
						<div class="program-table-head-cell date">
							Day 4
							<br>Wednesday
							<br>11 January 2017
						</div>
						
						<div class="program-table-head-cell events">
							<br>
							<br>
							...
						</div>
						
						<div class="program-table-head-cell venue">
							<br>
							<br>
							...
						</div>
					</div>
					
					<div class="program-table-row">
						<div class="program-table-head-cell date">
							...
						</div>
						
						<div class="program-table-head-cell events">
							...
						</div>
						
						<div class="program-table-head-cell venue">
							...
						</div>
					</div>
					
					<div class="program-table-row border-top">
						<div class="program-table-head-cell date">
							Day 5
							<br>Thursday
							<br>12 January 2017
						</div>
						
						<div class="program-table-head-cell events">
							<br>
							<br>
							...
						</div>
						
						<div class="program-table-head-cell venue">
							<br>
							<br>
							...
						</div>
					</div>
					
					<div class="program-table-row">
						<div class="program-table-head-cell date">
							...
						</div>
						
						<div class="program-table-head-cell events">
							...
						</div>
						
						<div class="program-table-head-cell venue">
							...
						</div>
					</div>
					
					<div class="program-table-row border-top">
						<div class="program-table-head-cell date">
							Day 6
							<br>Friday
							<br>13 January 2017
						</div>
						
						<div class="program-table-head-cell events">
							<br>
							<br>
						</div>
						
						<div class="program-table-head-cell venue">
							<br>
							<br>
						</div>
					</div>
					
					<div class="program-table-row">
						<div class="program-table-head-cell date">
							...
						</div>
						
						<div class="program-table-head-cell events">
							...
						</div>
						
						<div class="program-table-head-cell venue">
							...
						</div>
					</div>
					
					<div class="program-table-row border-top">
						<div class="program-table-head-cell date">
							Day 7-11
							<br>Friday
							<br>13 January-
							<br>Tuesday
							<br>17 January 2017
						</div>
						
						<div class="program-table-head-cell events">
							<br>
							Post-conference tour to northern Thailand: Chiang Mai, Chiang Rai, Nan, Lamphun, Hill Tribes
						</div>
						
						<div class="program-table-head-cell venue">
							<br>
							Northern Thailand
						</div>
					</div>
					
					<div class="program-table-row border-top border-bottom">
						<div class="program-table-head-cell date">
							Day 11-14
							<br>Tuesday
							<br>17 January-
							<br>Friday
							<br>20 January 2017
						</div>
						
						<div class="program-table-head-cell events">
							<br>
							Opational post-conference tour extension to northeastern Thailand (Isaan): Surin, Chonnabot, Khon Kaen, and environs.
						</div>
						
						<div class="program-table-head-cell venue">
							<br>
							Northeastern Thailand
						</div>
					</div>
					
					<div class="clearfix"></div>
					
					<div style="margin-bottom: 95px;">Times subject to change; lunch and site visits included with registration days 2-6</div>
				
			</div>
			<div class="col-lg-2">
			</div>
				
		</main><!-- .site-main -->
	</div><!-- .content-area -->
	
	<div id="links" class="container-fluid">
		<div class="row">
			<div class="col-lg-2">
			</div>
			<div class="col-lg-8">							
				
				<a href="<?php echo get_template_directory_uri(); ?>/download/QSMT_2017_symposium_program_download.pdf" download>
					<div style="margin-bottom:55px;">
						<span class="button reg">
							Download the program
						</span>
					</div>
				</a>

				<a class="about-page-link" href="<?php echo get_home_url(); ?>/speakers">SPEAKERS ></a>

				<br>

				<a href="<?php echo get_home_url(); ?>/registration">
					<div style="margin-top:55px;">
						<span class="button reg">
							Registration
						</span>
					</div>
				</a>

			</div>
			<div class="col-lg-2">
			</div>
		</div>
	</div>
	
<?php get_footer(); ?>

