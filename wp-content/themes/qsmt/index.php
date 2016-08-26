<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage QSMT
 * @since QSMT 1.0
 */

get_header(); ?>

	
	<div id="masthead" class="jumbotron" role="banner">
		<div class="site-header-main">
		
			<div class="col-lg-1">
			</div>
			<div class="site-branding col-xs col-lg-10" style="text-align:right; padding-top:290px; color: #fff;">
				<img src="<?php echo get_template_directory_uri(); ?>/img/inside_out.png" style="padding-bottom: 18px;"/>
				
				<span style="text-transform: uppercase; padding-bottom: 25px; display: block;">Clothing, cloth<br>
				and the meeting of cultures</span>
				<span>8-13 January 2017</span>
				<br><span>Bangkok</span>
			</div> 

			<div class="col-lg-1">
			</div>
		</div> 
		
	</div>
	
	<div id="primary" class="content-area container-fluid">
		<main id="main" class="site-main row" role="main">
		
			<div class="col-lg-2">
			</div>
			<div class="col-lg-8">

				<h2 class="frontpage-header">
					Queen Sirikit Museum of Textiles
					<br>Second International Symposium 2017
				</h2>
				
				<div class="row frontpage-middle-block">
					<div class="col-lg-8">
					<p>
						The conference will explore the broad subject of cultural exchange through dress and textiles.
						<br>The meeting will be held in conjunction with the ICOM Costume Committee, but non-ICOM members
						are welcome both as speakers and symposium attendees.
					</p>

					<p>
					During two days of optional pre-conference tours (not included in the symposium price), attendees will have opportunities to explore traditional markets or an old, canal-side neighborhood, take a Thai cooking class, or spend a luxurious day at a riverside spa with a special conference discount.
					</p>

					<p>
					The five-day symposium will alternate paper presentations at the conference hotel with days of visits to museums, royal palaces, and other historic sites in Bangkok. Among the highlights will be an afternoon at the Queen Sirikit Museum of Textiles, which will be closed to the public during our visit. We will see two exhibitions, Fit For a Queen: Her Majesty Queen Sirikit’s Creations by Balmain, and Dressing Gods and Demons: Costumes for Khon, and will divide into groups for behind-the-scenes visits to the textile conservation lab and storage.
					<p> 

					<p>
					The conference will be held at the Intercontinental Hotel in the heart of Bangkok, which is offering a special conference rate for attendees. For those wishing more modest accommodation, the Holiday Inn  adjacent to the Intercontinental is also holding a block of rooms for us at a discounted conference rate.
					</p>

					<p>
					An up-country tour of 5 days (14-18 January) with an optional 3-day extension (19-21 January) is
					being planned. 
					</p>

					</div>
					<div class="col-lg-4">
						<img src="<?php echo get_template_directory_uri(); ?>/img/frontpage_dancing.jpg" />
					</div>
				</div>
				
				<div class="frontpage-hr">
				</div>
				
				<div class="row frontpage-bottom-block">
					<div class="col-lg-4">
						<h3>Program</h3>
						<img src="<?php echo get_template_directory_uri(); ?>/img/frontpage_program.jpg" />
					</div>
					<div class="col-lg-4">
						<h3>Registration</h3>
						<img src="<?php echo get_template_directory_uri(); ?>/img/frontpage_registration.jpg" />
					</div>
					<div class="col-lg-4">
						<h3>Plan Your Trip</h3>
						<img src="<?php echo get_template_directory_uri(); ?>/img/frontpage_plan.jpg" />
					</div>
				</div>
			</div>
			<div class="col-lg-2">
			</div>
				
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
