<?php
/**
 * Ant Starter Theme Theme Customizer
 *
 * @package AntStarterTheme
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function ant_theme_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'            => '.site-title a',
				'container_inclusive' => false,
				'render_callback'     => 'ant_theme_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'            => '.site-description',
				'container_inclusive' => false,
				'render_callback'     => 'ant_theme_customize_partial_blogdescription',
			)
		);
	}

}
add_action( 'customize_register', 'ant_theme_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function ant_theme_customize_preview_js() {
	wp_enqueue_script( 'ant_theme_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'ant_theme_customize_preview_js' );


function ant_theme_customize_partial_blogname() {
	bloginfo( 'name' );
}

function ant_theme_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

function ant_theme_sanitize_checkbox( $value ) {
	if ( 1 == $value ) {
		return 1;
	} else {
		return 0;
	}
}

function ant_theme_sanitize_choices( $value, $WP_Customize_Setting ) {
	$choices = ant_theme_option_choices();
	if ( in_array( $value, array_keys( $choices[ $WP_Customize_Setting->id ] ), true ) ) {
		return $value;
	} else {
		return null;
	}
}