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

	<div id="inner-primary" class="content-area container-fluid">
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
					
					<div class="program-table-row border-top padding-bottom">						
						<div class="program-table-head-cell date">
							<div class="title">
								Date
							</div>
							<div class="text">
								Friday
								<br>06 January 2017
							</div>
							<div class="clearfix"></div>
						</div>
						
						<div class="program-table-head-cell events">
							<div class="title">
								Events
							</div>
							<div class="text">
								<div class="line-break"><br></div>
								<strong>Registration opens</strong>
							</div>
							<div class="clearfix"></div>
						</div>
						
						<div class="program-table-head-cell venue">
							<div class="title">
								Venue
							</div>
							<div class="text">
								<div class="line-break"><br></div>
								<strong>Intercontinental Hotel</strong>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					
					<div class="program-table-row border-top padding-bottom">		
						<div class="program-table-head-cell date">
							<div class="title">
								Date
							</div>
							<div class="text">
								Saturday
								<br>07 January 2017
							</div>
							<div class="clearfix"></div>
						</div>
						
						<div class="program-table-head-cell events">
							<div class="title">
								Events
							</div>
							<div class="text">							
								<div class="line-break"><br></div>
								<strong>Registration continues</strong>
							</div>
							<div class="clearfix"></div>
						</div>
						
						<div class="program-table-head-cell venue">
							<div class="title">
								Venue
							</div>
							<div class="text">							
								<div class="line-break"><br></div>
								Intercontinental Hotel
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					
					<?php
					
					if( have_rows('repeater_saturday_07_january') ) {						
						while ( have_rows('repeater_saturday_07_january') ) {
							
							the_row();
							$repeater_saturday_07_january_time = get_sub_field('repeater_saturday_07_january_time');
							$repeater_saturday_07_january_event = get_sub_field('repeater_saturday_07_january_event'); 
							$repeater_saturday_07_january_venue = get_sub_field('repeater_saturday_07_january_venue'); ?> 
							
							<div class="program-table-row">
								<div class="program-table-head-cell date">
									<div class="time">
										<?php echo ($repeater_saturday_07_january_time) ? $repeater_saturday_07_january_time : '&nbsp;'; ?>
									</div>
								</div>
								
								<div class="program-table-head-cell events">
									<div class="title">
										Events
									</div>
									<div class="text">
										<div class="time">
											<?php echo $repeater_saturday_07_january_time; ?>
										</div>
										<?php echo ($repeater_saturday_07_january_event) ? $repeater_saturday_07_january_event : '&nbsp;'; ?>
									</div>
									<div class="clearfix"></div>											
								</div>
						
								<div class="program-table-head-cell venue">
									<div class="title" style="<?php if (empty($repeater_saturday_07_january_venue)) echo 'display:none;'; ?>">
										Venue
									</div>
									<div class="text" style="<?php if (empty($repeater_saturday_07_january_venue)) echo 'display:none;'; ?>">
										<?php echo ($repeater_saturday_07_january_venue) ? $repeater_saturday_07_january_venue : '&nbsp;'; ?>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							
						<?php }					
					} ?>
					
					<div class="program-table-row border-top">
						<div class="program-table-head-cell date">
							<div class="title">
								Date
							</div>
							<div class="text">
								<h4>Day 1</h4>
								
								Sunday
								<br>08 January 2017
							</div>
							<div class="clearfix"></div>
						</div>
						
						<div class="program-table-head-cell events">
							<div class="title">
								Events
							</div>
							<div class="text">											
								<div class="line-break"><br></div>							
								<div class="line-break"><br></div>
								<strong>Registration continues</strong>
							</div>
							<div class="clearfix"></div>
						</div>
						
						<div class="program-table-head-cell venue">
							<div class="title">
								Venue
							</div>
							<div class="text">												
								<div class="line-break"><br></div>							
								<div class="line-break"><br></div>
								Intercontinental Hotel
							</div>
							<div class="clearfix"></div>
						</div>
					</div>	
					
					<?php
					
					if( have_rows('repeater_sunday_08_january') ) {						
						while ( have_rows('repeater_sunday_08_january') ) {
							
							the_row();
							$repeater_sunday_08_january_time = get_sub_field('repeater_sunday_08_january_time');
							$repeater_sunday_08_january_event = get_sub_field('repeater_sunday_08_january_event'); 
							$repeater_sunday_08_january_venue = get_sub_field('repeater_sunday_08_january_venue'); ?> 
							
							<div class="program-table-row">
								<div class="program-table-head-cell date">
									<div class="time">
										<?php echo ($repeater_sunday_08_january_time) ? $repeater_sunday_08_january_time : '&nbsp;'; ?>
									</div>
								</div>
								
								<div class="program-table-head-cell events">
									<div class="title">
										Events
									</div>
									<div class="text">
										<div class="time">
											<?php echo $repeater_sunday_08_january_time; ?>
										</div>
										<?php echo ($repeater_sunday_08_january_event) ? $repeater_sunday_08_january_event : '&nbsp;'; ?>
									</div>
									<div class="clearfix"></div>											
								</div>
						
								<div class="program-table-head-cell venue">
									<div class="title" style="<?php if (empty($repeater_sunday_08_january_venue)) echo 'display:none;'; ?>">
										Venue
									</div>
									<div class="text" style="<?php if (empty($repeater_sunday_08_january_venue)) echo 'display:none;'; ?>">
										<?php echo ($repeater_sunday_08_january_venue) ? $repeater_sunday_08_january_venue : '&nbsp;'; ?>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							
						<?php }					
					} ?>	
					
					<div class="program-table-row border-top">
						<div class="program-table-head-cell date">
							<div class="title">
								Date
							</div>
							<div class="text">
								<h4>Day 2</h4>
								
								Monday
								<br>09 January 2017
							</div>
							<div class="clearfix"></div>
						</div>
						
						<div class="program-table-head-cell events hidden-xs hidden-sm">
						</div>
						
						<div class="program-table-head-cell venue hidden-xs hidden-sm">
						</div>
					</div>	
					
					<?php
					
					if( have_rows('repeater_monday_09_january') ) {						
						while ( have_rows('repeater_monday_09_january') ) {
							
							the_row();
							$repeater_monday_09_january_time = get_sub_field('repeater_monday_09_january_time');
							$repeater_monday_09_january_event = get_sub_field('repeater_monday_09_january_event'); 
							$repeater_monday_09_january_venue = get_sub_field('repeater_monday_09_january_venue'); ?> 
							
							<div class="program-table-row">
								<div class="program-table-head-cell date">
									<div class="time">
										<?php echo ($repeater_monday_09_january_time) ? $repeater_monday_09_january_time : '&nbsp;'; ?>
									</div>
								</div>
								
								<div class="program-table-head-cell events">
									<div class="title">
										Events
									</div>
									<div class="text">
										<div class="time">
											<?php echo $repeater_monday_09_january_time; ?>
										</div>
										<?php echo ($repeater_monday_09_january_event) ? $repeater_monday_09_january_event : '&nbsp;'; ?>
									</div>
									<div class="clearfix"></div>											
								</div>
						
								<div class="program-table-head-cell venue">
									<div class="title" style="<?php if (empty($repeater_monday_09_january_venue)) echo 'display:none;'; ?>">
										Venue
									</div>
									<div class="text" style="<?php if (empty($repeater_monday_09_january_venue)) echo 'display:none;'; ?>">
										<?php echo ($repeater_monday_09_january_venue) ? $repeater_monday_09_january_venue : '&nbsp;'; ?>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							
						<?php }					
					} ?>
					
					<div class="program-table-row border-top">
						<div class="program-table-head-cell date">
							<div class="title">
								Date
							</div>
							<div class="text">
								<h4>Day 3</h4>
								
								Tuesday
								<br>10 January 2017
							</div>
							<div class="clearfix"></div>
						</div>
						
						<div class="program-table-head-cell events hidden-xs hidden-sm">
						</div>
						
						<div class="program-table-head-cell venue hidden-xs hidden-sm">
						</div>
					</div>	
					
					<?php
					
					if( have_rows('repeater_tuesday_10_january') ) {						
						while ( have_rows('repeater_tuesday_10_january') ) {
							
							the_row();
							$repeater_tuesday_10_january_time = get_sub_field('repeater_tuesday_10_january_time');
							$repeater_tuesday_10_january_event = get_sub_field('repeater_tuesday_10_january_event'); 
							$repeater_tuesday_10_january_venue = get_sub_field('repeater_tuesday_10_january_venue'); ?> 
							
							<div class="program-table-row">
								<div class="program-table-head-cell date">
									<div class="time">
										<?php echo ($repeater_tuesday_10_january_time) ? $repeater_tuesday_10_january_time : '&nbsp;'; ?>
									</div>
								</div>
								
								<div class="program-table-head-cell events">
									<div class="title">
										Events
									</div>
									<div class="text">
										<div class="time">
											<?php echo $repeater_tuesday_10_january_time; ?>
										</div>
										<?php echo ($repeater_tuesday_10_january_event) ? $repeater_tuesday_10_january_event : '&nbsp;'; ?>
									</div>
									<div class="clearfix"></div>											
								</div>
						
								<div class="program-table-head-cell venue">
									<div class="title" style="<?php if (empty($repeater_tuesday_10_january_venue)) echo 'display:none;'; ?>">
										Venue
									</div>
									<div class="text" style="<?php if (empty($repeater_tuesday_10_january_venue)) echo 'display:none;'; ?>">
										<?php echo ($repeater_tuesday_10_january_venue) ? $repeater_tuesday_10_january_venue : '&nbsp;'; ?>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							
						<?php }					
					} ?>	
					
					<div class="program-table-row border-top">
						<div class="program-table-head-cell date">
							<div class="title">
								Date
							</div>
							<div class="text">
								<h4>Day 4</h4>
								
								Wednesday
								<br>11 January 2017
							</div>
							<div class="clearfix"></div>
						</div>
						
						<div class="program-table-head-cell events hidden-xs hidden-sm">
						</div>
						
						<div class="program-table-head-cell venue hidden-xs hidden-sm">
						</div>
					</div>						
					
					<?php
					
					if( have_rows('repeater_wednesday_11_january') ) {						
						while ( have_rows('repeater_wednesday_11_january') ) {
							
							the_row();
							$repeater_wednesday_11_january_time = get_sub_field('repeater_wednesday_11_january_time');
							$repeater_wednesday_11_january_event = get_sub_field('repeater_wednesday_11_january_event'); 
							$repeater_wednesday_11_january_venue = get_sub_field('repeater_wednesday_11_january_venue'); ?> 
							
							<div class="program-table-row">
								<div class="program-table-head-cell date">
									<div class="time">
										<?php echo ($repeater_wednesday_11_january_time) ? $repeater_wednesday_11_january_time : '&nbsp;'; ?>
									</div>
								</div>
								
								<div class="program-table-head-cell events">
									<div class="title">
										Events
									</div>
									<div class="text">
										<div class="time">
											<?php echo $repeater_wednesday_11_january_time; ?>
										</div>
										<?php echo ($repeater_wednesday_11_january_event) ? $repeater_wednesday_11_january_event : '&nbsp;'; ?>
									</div>
									<div class="clearfix"></div>											
								</div>
						
								<div class="program-table-head-cell venue">
									<div class="title" style="<?php if (empty($repeater_wednesday_11_january_venue)) echo 'display:none; '; ?>">
										Venue
									</div>
									<div class="text" style="<?php if (empty($repeater_wednesday_11_january_venue)) echo 'display:none; '; ?>">
										<?php echo ($repeater_wednesday_11_january_venue) ? $repeater_wednesday_11_january_venue : '&nbsp;'; ?>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							
						<?php }					
					} ?>
					
					<div class="program-table-row border-top">
						<div class="program-table-head-cell date">
							<div class="title">
								Date
							</div>
							<div class="text">
								<h4>Day 5</h4>
								
								Thursday
								<br>12 January 2017
							</div>
							<div class="clearfix"></div>
						</div>
						
						<div class="program-table-head-cell events hidden-xs hidden-sm">
						</div>
						
						<div class="program-table-head-cell venue hidden-xs hidden-sm">
						</div>
					</div>						
					
					<?php
					
					if( have_rows('repeater_thursday_12_january') ) {						
						while ( have_rows('repeater_thursday_12_january') ) {
							
							the_row();
							$repeater_thursday_12_january_time = get_sub_field('repeater_thursday_12_january_time');
							$repeater_thursday_12_january_event = get_sub_field('repeater_thursday_12_january_event'); 
							$repeater_thursday_12_january_venue = get_sub_field('repeater_thursday_12_january_venue'); ?>
							
							<div class="program-table-row">
								<div class="program-table-head-cell date">
									<div class="time">
										<?php echo ($repeater_thursday_12_january_time) ? $repeater_thursday_12_january_time : '&nbsp;'; ?>
									</div>
								</div>
								
								<div class="program-table-head-cell events">
									<div class="title">
										Events
									</div>
									<div class="text">
										<div class="time">
											<?php echo $repeater_thursday_12_january_time; ?>
										</div>
										<?php echo ($repeater_thursday_12_january_event) ? $repeater_thursday_12_january_event : '&nbsp;'; ?>
									</div>
									<div class="clearfix"></div>											
								</div>
						
								<div class="program-table-head-cell venue">
									<div class="title" style="<?php if (empty($repeater_thursday_12_january_venue)) echo 'display:none;'; ?>">
										Venue
									</div>
									<div class="text" style="<?php if (empty($repeater_thursday_12_january_venue)) echo 'display:none;'; ?>">
										<?php echo ($repeater_thursday_12_january_venue) ? $repeater_thursday_12_january_venue : '&nbsp;'; ?>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							
						<?php }					
					} ?>
					
					<div class="program-table-row border-top">
						<div class="program-table-head-cell date">
							<div class="title">
								Date
							</div>
							<div class="text">
								<h4>Day 6</h4>
								
								Friday
								<br>13 January 2017
							</div>
							<div class="clearfix"></div>
						</div>
						
						<div class="program-table-head-cell events hidden-xs hidden-sm">
						</div>
						
						<div class="program-table-head-cell venue hidden-xs hidden-sm">
						</div>
					</div>					
					
					<?php
					
					if( have_rows('repeater_friday_13_january') ) {						
						while ( have_rows('repeater_friday_13_january') ) {
							
							the_row();
							$repeater_friday_13_january_time = get_sub_field('repeater_friday_13_january_time');
							$repeater_friday_13_january_event = get_sub_field('repeater_friday_13_january_event'); 
							$repeater_friday_13_january_venue = get_sub_field('repeater_friday_13_january_venue'); ?> 
							
							<div class="program-table-row">
								<div class="program-table-head-cell date">
									<div class="time">
										<?php echo ($repeater_friday_13_january_time) ? $repeater_friday_13_january_time : '&nbsp;'; ?>
									</div>
								</div>
								
								<div class="program-table-head-cell events">
									<div class="title">
										Events
									</div>
									<div class="text">
										<div class="time">
											<?php echo $repeater_friday_13_january_time; ?>
										</div>
										<?php echo ($repeater_friday_13_january_event) ? $repeater_friday_13_january_event : '&nbsp;'; ?>
									</div>
									<div class="clearfix"></div>											
								</div>
						
								<div class="program-table-head-cell venue">
									<div class="title" style="<?php if (empty($repeater_friday_13_january_venue)) echo 'display:none;'; ?>">
										Venue
									</div>
									<div class="text" style="<?php if (empty($repeater_friday_13_january_venue)) echo 'display:none;'; ?>">
										<?php echo ($repeater_friday_13_january_venue) ? $repeater_friday_13_january_venue : '&nbsp;'; ?>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							
						<?php }					
					} ?>
					
					<div class="program-table-row border-top">
						<div class="program-table-head-cell date">
							<div class="title">
								Date
							</div>
							<div class="text">
								<h4>Day 7-11</h4>
								
								Friday
								<br>13 January-
								<br>Tuesday
								<br>17 January 2017
							</div>
							<div class="clearfix"></div>
						</div>
						
						<div class="program-table-head-cell events">
							<div class="title">
								Events
							</div>
							<div class="text">							
								<div class="line-break"><br></div>
								Post-conference tour to northern Thailand: Chiang Mai, Chiang Rai, Nan, Lamphun, Hill Tribes
							</div>
							<div class="clearfix"></div>
						</div>
						
						<div class="program-table-head-cell venue">
							<div class="title">
								Venue
							</div>
							<div class="text">						
								<div class="line-break"><br></div>
								Northern Thailand
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					
					<div class="program-table-row border-top border-bottom">
						<div class="program-table-head-cell date">
							<div class="title">
								Date
							</div>
							<div class="text">
								<h4>Day 11-14</h4>
								
								Tuesday
								<br>17 January-
								<br>Friday
								<br>20 January 2017
							</div>
							<div class="clearfix"></div>
						</div>
						
						<div class="program-table-head-cell events">
							<div class="title">
								Events
							</div>
							<div class="text">							
								<div class="line-break"><br></div>
								Optional post-conference tour extension to northeastern Thailand (Isaan): Surin, Chonnabot, Khon Kaen, and environs.
							</div>
							<div class="clearfix"></div>
						</div>
						
						<div class="program-table-head-cell venue">
							<div class="title">
								Venue
							</div>
							<div class="text">					
							<div class="line-break"><br></div>
							Northeastern Thailand
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					
					<div class="clearfix"></div>
					
					<div class="time-note">Times subject to change; lunch and site visits included with registration days 2-6</div>
				
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
				
				<a href="<?php echo get_template_directory_uri(); ?>/download/QSMT_2017_symposium_program_download.pdf" download>
					<div class="button-table" style="margin-bottom:55px;">
						<div class="button-table-row">
							<div class="button-table-cell">
								<span class="button 1reg">
									Download the program
								</span>
							</div>
						</div>
					</div>
				</a>

				<a class="about-page-link" href="<?php echo get_home_url(); ?>/speakers">SPEAKERS ></a>

				<br>

				<a href="<?php echo get_home_url(); ?>/registration">
					<div class="button-table" style="margin-top:55px;">
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

