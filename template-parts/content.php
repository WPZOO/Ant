<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package AntStarterTheme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php ant_theme_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<?php
		$postlength = get_theme_mod( 'excerpt-content' );
		if ( $postlength != 'content' && ! is_single() ) {
			get_template_part( 'template-parts/_the_excerpt' );
		}
		else {
			get_template_part( 'template-parts/_the_content' );
		}
	?>

	<footer class="entry-footer">
		<?php ant_theme_entry_footer(); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
