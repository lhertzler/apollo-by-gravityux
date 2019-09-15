<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package apollo
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="hentry-wrapper">
		<?php if ( ! has_post_thumbnail() ) : ?>
			<header class="entry-header" <?php apollo_background_image(); ?>>
				<div class="entry-header-wrapper">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</div><!-- .entry-header-wrapper -->
			</header><!-- .entry-header -->
		<?php endif; ?>

		<div class="entry-content">
			<?php
			the_content();

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

		<?php
		edit_post_link(
			sprintf(
				/* translators: %s: Name of current post */
				esc_html__( 'Edit %s', 'apollo-by-gravityux' ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			),
			'<footer class="entry-footer"><span class="edit-link">',
			'</span></footer><!-- .entry-footer -->'
		);
		?>
	</div><!-- .hentry-wrapper -->
</article><!-- #post-## -->
