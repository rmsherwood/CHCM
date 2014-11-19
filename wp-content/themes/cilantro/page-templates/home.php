<?php
/**
 * Template Name: Homepage
 *
 * @package cilantro
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section id="highlights">
				<div class="indent clear">
						<?php 
						$query = new WP_Query( 'pagename=highlights' );
						// The Loop
						if ( $query->have_posts() ) {
							while ( $query->have_posts() ) {
								$query->the_post();
								echo '<div class="entry-content">';
								the_content();
								echo '</div>';
							}
						}
						
						/* Restore original Post Data */
						wp_reset_postdata();
						?>
				</div><!-- .indent -->
			</section><!-- #highlights -->

			<section id="social"><!--Social-->
				<div class="indent clear">
					<div id="email">
						<form>
							<p>Join our mailing list:</p>
							<input type="email" value name="EMAIL" class="email" id="mce-EMAIL" placeholder="Enter your email address" required>
							<input type="submit" value="JOIN" name="subscribe" id="mc-embedded-subscribe" class="button">
						</form>
					</div>

					<div id="social-icons">
						<p>Follow us!</p>
						<?php cilantro_social_menu(); ?>
					</div>
				</div><!-- .indent -->
			</section><!-- #social -->
			
			<secton id="map"><!--Google Map --> 
				<div id="map-container">
					<div id="map-text">
					<h2><a href="https://www.google.com/maps/place/Columbia+Heights+Civic+Plaza/@38.9298636,-77.0323024,19z/data=!4m2!3m1!1s0x0000000000000000:0x81c266bb35892a4d" target="_blank">The Columbia Heights Community Marketplace is open every Saturday, 9 am - 1pm at the Columbia Heights Civic Plaza<br><span>(14<sup>th</sup> Street and Park Road NW, Washington, DC 20010)</span></a></h2>
					</div>
					<div id="map-canvas"></div>					
				</div>

				<!--<div class="google-maps">
				    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7098.94326104394!2d78.0430654485247!3d27.172909818538997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1385710909804" width="600" height="450" frameborder="0" style="border:0"></iframe>
				</div>	-->

			</secton> <!-- Google Map -->
			

			
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
