<?php
/**
  * Template Name: Registration
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

	<div id="inner-primary" class="content-area container-fluid registration-page">
		<main id="main" class="site-main row" role="main">
		
			<div class="col-lg-2">
			</div>
			<div class="col-lg-8">

					<h2 class="entry-header"> 
						<?php the_title(); ?>
					</h2>
				
					<?php 
						while ( have_posts() ) : the_post();
							the_content(); 
						endwhile;
					?>
					
					
			</div>
			<div class="col-lg-2">
			</div>
				
		</main><!-- .site-main -->
	</div><!-- .content-area -->
	
	<div id="links" class="container-fluid">
		<div class="row">
			<div class="col-lg-2">
			</div>
			<div class="col-lg-8 download-buttons registration-buttons">	
			
				<a href="<?php echo get_template_directory_uri(); ?>/download/QSMT 2017_registration_form.pdf" download>
					<div class="button-table">
						<div class="button-table-row">
							<div class="button-table-cell">
								<span class="button 1reg">		
									Download Registration Form
								</span>
							</div>
						</div>
					</div>
				</a> 
				<a href="<?php echo get_home_url(); ?>/online-registration-form/">
					<div class="button-table">
						<div class="button-table-row">
							<div class="button-table-cell">
								<span class="button 1reg">		
									Online Registration Form
								</span>
							</div>
						</div>
					</div>
				</a> 
				<div class="clearfix"></div>
				
			</div>
			<div class="col-lg-2">
			</div>
		</div>
	</div>
	
<?php get_footer(); ?>

