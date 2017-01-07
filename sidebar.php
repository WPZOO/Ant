<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AntStarterTheme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}

$layout = get_theme_mod( 'sidebar-layout' );
?>

<aside id="secondary" class="widget-area col-xs-12 col-sm-3 <?php echo esc_attr ( $layout ) ?>" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
