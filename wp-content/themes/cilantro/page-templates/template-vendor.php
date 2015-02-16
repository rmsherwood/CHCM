<?php
/**
 * Template Name: Vendor
 *@package cilantro
 */

get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php 
				
			
				// Get 'vendor' posts
			$team_posts = get_posts( array(
				'post_type' => 'vendor',
				'posts_per_page' => -1, // Unlimited posts
				'orderby' => 'vendor_order', // Order alphabetically by name
				'order' => 'ASC',

			) );
			
			if ( $team_posts ):
			?>
			<section class="row profiles">
				<div class="intro">
					<h2>Vendors</h2>
					<p>The Columbia Heights farmers market features a wide variety of the best local farmers, small food businesses, and prepared food vendors. They are at the core of what we do, and we’d love for you to get to know them!</p>

					<p><iframe src="//player.vimeo.com/video/106146346" width="640" height="360" frameborder="0" title="Pleitez Produce at the Columbia Heights farmers market" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></p>
				</div>
				
				<?php 
				foreach ( $team_posts as $post ): 
				setup_postdata($post);
				
				// Resize and CDNize thumbnails using Automattic Photon service
				$thumb_src = null;
				if ( has_post_thumbnail($post->ID) ) {
					$src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'team-thumb' );
					$thumb_src = $src[0];
				}
				?>
				<article class="col-sm-6 profile">
					<div class="profile-header">
						<?php if ( $thumb_src ): ?>
						<img src="<?php echo $thumb_src; ?>" alt="<?php the_title(); ?>, <?php the_field('team_position'); ?>" class="img-circle">
						<?php endif; ?>
					</div>
					
					<div class="profile-content">
						<h3><?php the_title(); ?></h3>
						<p class="lead position"><?php the_field('team_position'); ?></p>
						<?php the_content(); ?>
					</div>
					
					<div class="profile-footer">
						<a href="tel:<?php the_field('team_phone'); ?>"><i class="icon-mobile-phone"></i></a>
						<a href="mailto:<?php echo antispambot( get_field('team_email') ); ?>"><i class="icon-envelope"></i></a>
						<?php if ( $twitter = get_field('team_twitter') ): ?>
						<a href="<?php echo $twitter; ?>"><i class="icon-twitter"></i></a>
						<?php endif; ?>
						<?php if ( $linkedin = get_field('team_linkedin') ): ?>
						<a href="<?php echo $linkedin; ?>"><i class="icon-linkedin"></i></a>
						<?php endif; ?>
					</div>
				</article><!-- /.profile -->
				<?php endforeach; ?>
			</section><!-- /.row -->
			<?php endif; ?>


		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
