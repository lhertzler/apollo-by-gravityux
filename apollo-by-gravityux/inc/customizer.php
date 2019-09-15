<?php
/**
 * apollo Theme Customizer.
 *
 * @package apollo
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function apollo_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	$wp_customize->add_section( 'apollo_theme_options', array(
		'title'             => esc_html__( 'Theme Options', 'apollo-by-gravityux' ),
		'priority'          => 130,
	) );

	$wp_customize->add_setting( 'apollo_sticky_header', array(
		'default'           => '',
		'sanitize_callback' => 'apollo_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'apollo_sticky_header', array(
		'label'             => esc_html__( 'Fixed header when scrolling down.', 'apollo-by-gravityux' ),
		'section'           => 'apollo_theme_options',
		'type'              => 'checkbox',
	) );

	$wp_customize->add_setting( 'apollo_footer_top_column', array(
		'default'           => 'column-1',
		'sanitize_callback' => 'apollo_sanitize_column',
	) );

	$wp_customize->add_control( 'apollo_footer_top_column', array(
		'label'             => esc_html__( 'Top Footer Area Layout', 'apollo-by-gravityux' ),
		'section'           => 'apollo_theme_options',
		'type'              => 'radio',
		'choices'           => array(
			'column-1' => esc_html__( '1 Column', 'apollo-by-gravityux' ),
			'column-2' => esc_html__( '2 Columns', 'apollo-by-gravityux' ),
			'column-3' => esc_html__( '3 Columns', 'apollo-by-gravityux' ),
		),
	) );

	$wp_customize->add_setting( 'apollo_footer_bottom_column', array(
		'default'           => 'column-3',
		'sanitize_callback' => 'apollo_sanitize_column',
	) );

	$wp_customize->add_control( 'apollo_footer_bottom_column', array(
		'label'             => esc_html__( 'Bottom Footer Area Layout', 'apollo-by-gravityux' ),
		'section'           => 'apollo_theme_options',
		'type'              => 'radio',
		'choices'           => array(
			'column-1' => esc_html__( '1 Column', 'apollo-by-gravityux' ),
			'column-2' => esc_html__( '2 Columns', 'apollo-by-gravityux' ),
			'column-3' => esc_html__( '3 Columns', 'apollo-by-gravityux' ),
		),
	) );
}
add_action( 'customize_register', 'apollo_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function apollo_customize_preview_js() {
	wp_enqueue_script( 'apollo_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'apollo_customize_preview_js' );

/**
 * Sanitize the checkbox.
 *
 * @param boolean $input.
 * @return boolean true if portfolio page template displays title and content.
 */
function apollo_sanitize_checkbox( $input ) {
	if ( 1 == $input ) {
		return true;
	} else {
		return false;
	}
}

/**
 * Sanitize the Column value.
 *
 * @param string $column.
 * @return string (column-1|column-2|column-3).
 */
function apollo_sanitize_column( $column ) {
	if ( ! in_array( $column, array( 'column-1', 'column-2', 'column-3' ) ) ) {
		$column = 'column-1';
	}
	return $column;
}