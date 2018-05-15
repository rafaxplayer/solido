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

if ( ! defined( 'ABSPATH' ) ) { exit; }

function solido_customize_register( $wp_customize ) {

	$defaults = defaults_customizer();
	
	if( file_exists( trailingslashit( get_template_directory()) .'/inc/customizer/customizer-values.php')){
		
		require_once trailingslashit( get_template_directory()) .'/inc/customizer/customizer-values.php';
	}

	if( file_exists( trailingslashit( get_template_directory()) .'/inc/customizer/customizer-layouts.php')){
		
		require_once trailingslashit( get_template_directory()) .'/inc/customizer/customizer-layouts.php';
	}

	if( file_exists( trailingslashit( get_template_directory()) .'/inc/customizer/customizer-login.php')){
		
		require_once trailingslashit( get_template_directory()) .'/inc/customizer/customizer-login.php';
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
	
	if( file_exists( trailingslashit( get_template_directory()) .'/inc/customizer/customizer-front-page.php')){
		
		require_once trailingslashit( get_template_directory()) .'/inc/customizer/customizer-front-page.php';
	}

	
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_control( 'blogname' )->priority         	= 30;
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	$wp_customize->get_control( 'header_textcolor' )->description = __('Set site title & Description text color','solido');
	$wp_customize->get_control( 'background_color' )->description = __('Set site background color','solido');
	$wp_customize->get_control( 'custom_logo' )->description = __('Image file size 250px x 250px','solido');
	$wp_customize->remove_control( 'display_header_text' );
	
	// position menu header
	 $wp_customize->add_setting( 'solido-show-site-branding' , array(
		'default' => $defaults['show-site-branding'],
		'sanitize_callback' => 'solido_sanitize_checkbox',
    ));
    
    $wp_customize->add_control( 'solido_show_site_branding_control', array(
		'label'      => esc_html__( 'Show or hide title and description','solido' ),
		'section'    => 'title_tagline',
        'settings'   => 'solido-show-site-branding',
        'type' => 'checkbox',
        'priority' => 20,
                    
    ));  

	if ( isset( $wp_customize->selective_refresh ) ) {

		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => function(){
				bloginfo( 'name' );
			},
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => function(){
				bloginfo( 'description' );
			},
		) );

		$wp_customize->selective_refresh->add_partial( 'solido_options[panel-image-contact]',array(
			'selector'   	=>'#solido-contact',
			'setting'		=>'solido_options[panel-image-contact]',
			'render_callback'=> function(){
				$solido_options = get_theme_mod('solido_options');
				return $solido_options['panel-image-contact'];
			},
			
		));

		$wp_customize->selective_refresh->add_partial( 'solido_options[panel-text-team]',array(
			'selector'   	=>'#team-text',
			'setting'		=>'solido_options[panel-text-team]',
			'render_callback'=>function(){
				$solido_options = get_theme_mod('solido_options');
				return $solido_options['panel-text-team'];
			}
			
		));

		$wp_customize->selective_refresh->add_partial( 'solido_options[panel-text-contact]',array(
			'selector'   	=>'#contact-text',
			'setting'		=>'solido_options[panel-text-contact]',
			'render_callback'=>function(){
				$solido_options = get_theme_mod('solido_options');
				return $solido_options['panel-text-contact'];
			}
			
		));

		$wp_customize->selective_refresh->add_partial( 'solido_options[panel-button-contact]',array(
			'selector'   	=>'#contact-button',
			'setting'		=>'solido_options[panel-button-contact]',
			'render_callback'=>function(){
				$solido_options = get_theme_mod('solido_options');
				return $solido_options['panel-button-contact'];
			}
			
		));

		$wp_customize->selective_refresh->add_partial( 'solido_footer_text',array(
			'selector'   	=>'.footer-text',
			'setting'		=>'solido_options[footer-text]',
			'render_callback'=>function(){
				$solido_options = get_theme_mod('solido_options');
				return $solido_options['footer-text'];
			}
			
		));
	}
}
add_action( 'customize_register', 'solido_customize_register' );


/**
 * Check if this page is fron-page.php template
 *
*/
function solido_is_static_front_page() {
	
	return ( is_front_page() && ! is_home() );
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
