<?php
/**
 * Template Name: Team
 */
get_header(); 

the_post();

// Get 'team' posts
$team_posts = get_posts( array(

	'post_type' => 'team',
	'posts_per_page' => -1, // Unlimited posts
	'orderby' => 'team_order', // Order alphabetically by name
	'order' => 'ASC',
	'meta_key' => 'team_group',
	'meta_value' => 'Team'
) );


// Get 'Board of Director' posts
$board_posts = get_posts( array(

	'post_type' => 'team',
	'posts_per_page' => -1, // Unlimited posts
	'orderby' => 'team_order', // Order alphabetically by name
	'order' => 'ASC',
	'meta_key' => 'team_group',
	'meta_value' => 'Board of Directors'
) );


 if  ( $board_posts ):
?>

<section class="row profiles">
	<div class="intro">
		<h1 class="entry-title">About Us</h1>
		<p>Columbia Heights Community Marketplace was founded in 2010 with a mission to enable equitable access able to healthy, local food. Since then, the Columbia Heights farmers market has grown to become one of the largest in Washington, DC, and CHCM's food access programs have helped thousands of low-income customers buy healthy, local food. CHCM is committed to building innovative, community-based opportunities for regional farmers and food businesses to connect with urban customers, while also providing education and incentive programs that engage low-income customer segments traditionally excluded from these market channels. </p>
		<h1 class="entry-title">Board of Directors &amp; Staff</h1>

		<h2>Board of Directors, 2014</h2>
	</div>
	
	<?php 
	foreach ( $board_posts as $post ): 
	setup_postdata($post);
	
	// Resize and CDNize thumbnails using Automattic Photon service
	$thumb_src = null;
	if ( has_post_thumbnail($post->ID) ) {
		$src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'team-thumb' );
		$thumb_src = $src[0];
	}
	?>
	<article class="profile">
		<div class="profile-header">
			<?php if ( $thumb_src ): ?>
			<img src="<?php echo $thumb_src; ?>" alt="<?php the_title(); ?>, <?php the_field('team_position'); ?>" class="img-circle">
			<?php endif; ?>
		</div>
		
		<div class="profile-content">
			<h3><?php the_title(); ?></h3>
			<p class="lead position"><?php the_field('team_position'); ?></p>
			<?php the_content(); ?>
			<h3 class="BIGTEST"><?php echo $object->labels->name; ?></h3>
		</div>
		
		<div class="profile-footer">
			<a href="mailto:<?php echo antispambot( get_field('team_email') ); ?>" class="email"></a>
			<?php if ( $linkedin = get_field('team_linkedin') ): ?>
			<a href="<?php echo $linkedin; ?>" class="linkedin"></a>
<?php endif; ?>
		</div>
	</article><!-- /.profile -->
	<?php endforeach; ?>
</section><!-- /.row -->
<?php endif; ?>
<?php if ( $team_posts ):
?>
<section class="row profiles">
	<div class="intro">
		<h2>Staff, 2014</h2>
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
	<article class="profile">
		<div class="profile-header">
			<?php if ( $thumb_src ): ?>
			<img src="<?php echo $thumb_src; ?>" alt="<?php the_title(); ?>, <?php the_field('team_position'); ?>" class="img-circle">
			<?php endif; ?>
		</div>
		
		<div class="profile-content">
			<h3><?php the_title(); ?></h3>
			<p class="lead position"><?php the_field('team_position'); ?></p>
			<?php the_content(); ?>
			<h3 class="BIGTEST"><?php echo $object->labels->name; ?></h3>
		</div>
		
			<div class="profile-footer">
			<a href="mailto:<?php echo antispambot( get_field('team_email') ); ?>" class="email"></a>
			<?php if ( $linkedin = get_field('team_linkedin') ): ?>
			<a href="<?php echo $linkedin; ?>" class="linkedin"></a>
<?php endif; ?>

		</div>
	</article><!-- /.profile -->
	<?php endforeach; ?>
</section><!-- /.row -->

<?php endif; ?>


<?php get_footer(); ?>
