<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package apollo
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="hentry-wrapper">
		<?php if ( ! is_single() || ! apollo_has_post_thumbnail() ) : ?>
			<header class="entry-header" <?php apollo_background_image(); ?>>
				<div class="entry-header-wrapper">
					<?php
					apollo_entry_meta();

					if ( is_single() ) {
						the_title( '<h1 class="entry-title">', '</h1>' );
					} else {
						the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
					}
					?>
				</div><!-- .entry-header-wrapper -->
			</header><!-- .entry-header -->
		<?php endif; ?>

		<div class="entry-content">
			<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'apollo-by-gravityux' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'apollo-by-gravityux' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'apollo-by-gravityux' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
			?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php apollo_entry_footer(); ?>
		</footer><!-- .entry-footer -->

		<?php apollo_author_bio();	?>
	</div><!-- .hentry-wrapper -->
</article><!-- #post-## -->
