<?php
/**
 * solido Theme Customizer
 *
 * @package solido
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function solido_customize_register( $wp_customize ) {

	$defaults = defaults_customizer();

	if( file_exists( trailingslashit( get_template_directory()) .'/inc/customizer/customizer-layouts.php')){
		
		require_once trailingslashit( get_template_directory()) .'/inc/customizer/customizer-layouts.php';
	}
	
	if( file_exists( trailingslashit( get_template_directory()) .'/inc/customizer/customizer-colors.php')){
			
		require_once trailingslashit( get_template_directory()) .'/inc/customizer/customizer-colors.php';
	}
	
	if( file_exists( trailingslashit( get_template_directory()) .'/inc/customizer/customizer-typography.php')){
			
		require_once trailingslashit( get_template_directory()) .'/inc/customizer/customizer-typography.php';
	}

	if( file_exists( trailingslashit( get_template_directory()) .'/inc/customizer/customizer-footer.php')){
		
		require_once trailingslashit( get_template_directory()) .'/inc/customizer/customizer-footer.php';
	}
	

	
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	

	if ( isset( $wp_customize->selective_refresh ) ) {

		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'solido_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'solido_customize_partial_blogdescription',
		) );

		$wp_customize->selective_refresh->add_partial( 'solido_footer_text',array(
			'selector'   	=>'.footer-text',
			'setting'		=>'solido_options[footer-text]',
			'render_callback'=>'solido_customize_partial_footer-text'
			
		));
	}
}
add_action( 'customize_register', 'solido_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function solido_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function solido_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Render footer text for the selective refresh partial.
 *
*/
function solido_customize_partial_footertext(){
	$solido_options = get_theme_mod('solido_options');
	return $solido_options['footer-text'];
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function solido_customize_preview_js() {

	wp_enqueue_script( 'solido-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'jquery' ), '20151215', true );
	wp_enqueue_script( 'solido-customize-init', get_template_directory_uri() . '/assets/js/options.js', array( 'jquery' ), '20151215', true );
}
add_action( 'customize_preview_init', 'solido_customize_preview_js' );


function solido_customize_options_js() {
	
	wp_enqueue_script( 'solido-customize-options', get_template_directory_uri() . '/assets/js/options.js', array( 'jquery' ), '20151215', true );
}
add_action( 'admin_enqueue_scripts', 'solido_customize_options_js' );


if( file_exists( trailingslashit( get_template_directory()) .'/inc/customizer/customizer-sanitize.php')){
		
	require_once trailingslashit( get_template_directory()) .'/inc/customizer/customizer-sanitize.php';
}


if( file_exists( trailingslashit( get_template_directory()) .'/inc/customizer/customizer-css.php')){
		
	require_once trailingslashit( get_template_directory()) .'/inc/customizer/customizer-css.php';
}