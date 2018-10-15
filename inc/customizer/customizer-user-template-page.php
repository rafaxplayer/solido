<?php
// ******** Customize user Landing page template************//
if ( ! defined( 'ABSPATH' ) ) { exit; }

$wp_customize->add_section( 'solido_template_user_section', array(
    'title' => esc_html__( 'Solido Template User Page', 'solido' ),
    'description' => esc_html__('This is setting for User Page template','solido'),
    'priority' => 36,
    'active_callback' => 'solido_is_template_user',
)); 


// User image
$wp_customize->add_setting( 'template-user-image', array(
    'sanitize_callback' => 'esc_url_raw',
    'default'       => get_template_directory_uri().'/assets/images/profile.jpg',
) );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'solido-template-user-image-control', array(
    'label'			=> esc_html__( 'User image', 'solido' ),
    'description'	=> esc_html__( 'Select image for user avatar', 'hikaru' ),
    'section' 		=> 'solido_template_user_section',
    'settings'      => 'template-user-image',
    
) ) );


//Font color for name
$wp_customize->add_setting('solido_options[colors][user-name-color]',array(
    'default'  => $defaults['colors']['user-name-color'],
    'sanitize_callback' => 'sanitize_hex_color',
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,'solido_user-name-color_control',array(
    'label'      => esc_html__('User name color','solido'),
    'settings'   => 'solido_options[colors][user-name-color]',
    'section'    => 'solido_template_user_section',
    'description'=> esc_html__('Set user name title color','solido'),
)));

//Font color for description
$wp_customize->add_setting('solido_options[colors][user-description-color]',array(
    'default'  => $defaults['colors']['user-description-color'],
    'sanitize_callback' => 'sanitize_hex_color',
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,'solido_user-name-color_control',array(
    'label'      => esc_html__('User description color','solido'),
    'settings'   => 'solido_options[colors][user-description-color]',
    'section'    => 'solido_template_user_section',
    'description'=> esc_html__('Set user description color','solido'),
)));

//User description
// text footer
$wp_customize->add_setting( 'solido_tempate_user_desc' , array(
    'default' => 'User Description',
    'transport' => 'postMessage',
    'sanitize_callback' => 'solido_text_sanitization',
)); 

$wp_customize->add_control( 'solido_user_template_description_control', array(
    'label'      => esc_html__( 'User description', 'solido' ),
    'section'    => 'solido_template_user_section',
    'settings'    => 'solido_tempate_user_desc',
    
));



