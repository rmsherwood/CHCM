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

						<!-- Begin MailChimp Signup Form -->
						<div id="mc_embed_signup">
							<form action="//chfestivus.us2.list-manage.com/subscribe/post?u=c9e1059055f66989609825b25&amp;id=1141135051" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
							    <div id="mc_embed_signup_scroll">
							    	<p>Join our mailing list:</p>						
									<div class="mc-field-group">
										<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Enter your email address">
									</div>
									<div id="mce-responses">
										<div class="response" id="mce-error-response" style="display:none"></div>
										<div class="response" id="mce-success-response" style="display:none"></div>
									</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
							    	<div style="position: absolute; left: -5000px; display:inline-block;">
							    		<input type="text" name="b_c9e1059055f66989609825b25_1141135051" tabindex="-1" value="">
						    		</div>
							    	<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
						    	</div>
						    	</form>
					    </div>
							
					</div>					
						<!--End mc_embed_signup-->
					

					<div id="social-icons">
						<p>Follow us!</p>
						<?php cilantro_social_menu(); ?>
					</div>
				</div><!-- .indent -->
			</section><!-- #social -->
			
			<section id="twitter-feed">
				<a class="twitter-timeline" width="800" height="800" href="https://twitter.com/CoHeightsMarket" data-widget-id="535680575785676800" data-chrome="nofooter noborders transparent"  data-tweet-limit="3">>Tweets by @CoHeightsMarket</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			</section>


			<secton id="map"><!--Google Map --> 
				<div id="map-container">
					<div id="map-text">
					<h2>The Columbia Heights Community Marketplace is closed for the season!  It will reopen for the Spring of 2015.  Check back with us then.<!--<a href="https://www.google.com/maps/place/Columbia+Heights+Civic+Plaza/@38.9298636,-77.0323024,19z/data=!4m2!3m1!1s0x0000000000000000:0x81c266bb35892a4d" target="_blank">The Columbia Heights Community Marketplace is open every Saturday, 9 am - 1pm at the Columbia Heights Civic Plaza<br><span>(14<sup>th</sup> Street and Park Road NW, Washington, DC 20010)</span></a>!--></h2>
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
