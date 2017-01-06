<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AntStarterTheme
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer row" role="contentinfo">
		<div class="site-info col-xs-12">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'ant_theme' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'ant_theme' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'ant_theme' ), 'ant_theme', '<a href="https://automattic.com/" rel="designer">WPZOO</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
