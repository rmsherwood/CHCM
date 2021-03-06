<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package cilantro
 */
?>

	</div><!-- #content -->
	<footer id="colophon" class="site-footer" role="contentinfo">

		<?php get_sidebar('footer'); ?>
		<div class="site-info">
			<p>© 2014 Columbia Heights Marketplace</p>
		</div><!-- .site-info -->
		<?php cilantro_social_menu(); ?>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
