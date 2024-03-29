<?php
/**
 * The template for displaying featured posts on the index page
 *
 * @package apollo
 */
?>

<div class="featured-post">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); apollo_background_image(); ?>>
		<div class="hentry-wrapper">
			<header class="entry-header">
				<?php
				apollo_entry_meta();

				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				?>
			</header><!-- .entry-header -->

			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->

			<footer class="entry-footer">
				<?php apollo_entry_footer(); ?>
			</footer><!-- .entry-footer -->
		</div><!-- .hentry-wrapper -->
	</article><!-- #post-## -->
</div><!-- .featured-post -->