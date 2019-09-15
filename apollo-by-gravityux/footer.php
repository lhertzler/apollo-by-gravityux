<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package apollo
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-footer-wrapper">
			<?php apollo_social_menu(); ?>

			<div class="site-info">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'apollo-by-gravityux' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'apollo-by-gravityux' ), 'WordPress' ); ?></a>
				<span class="sep">/</span>
				<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'apollo-by-gravityux' ), 'apollo-by-gravityux', '<a href="http://gravityux.com/" rel="designer">GravityUX</a>' ); ?>
			</div><!-- .site-info -->
		</div><!-- .site-footer-wrapper -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
