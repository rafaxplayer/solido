<?php

if ( ! defined( 'ABSPATH' ) ) { exit; }

$wp_customize->add_section( 'solido_login_section', array(
    'title' => esc_html__( 'Login Form settings', 'solido' ),
    'priority' => 31,
  ));

// Logo for login form
$wp_customize->add_setting( 'solido_login_logo' , array(
    'default' => '',
    'sanitize_callback' => 'solido_sanitize_url',
));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'solido_login_logo_control', array(
    'label'      => __( 'Logo for login form', 'solido' ),
    'section'    => 'solido_login_section',
    'settings'   => 'solido_login_logo',
    'description'=> esc_html__('Set Image for login logo form (max sizes recomended 250px x 84px)','solido'),
)));

// Logo position for login form
$wp_customize->add_setting( 'solido_login_logo_position' , array(
    'default' => 'center',
    'sanitize_callback' => 'solido_text_sanitization',
));

$wp_customize->add_control( 'solido_login_logo_position_control', array(
    'label'      => esc_html__( 'Set the position where the log will be displayed', 'solido' ),
    'section'    => 'solido_login_section',
    'settings'   => 'solido_login_logo_position',
    'type' => 'select',
    'description'  => 'To see it, you must close the session and the login form will be shown',
    'choices' => array( 
        'left' => esc_html__( 'Left', 'solido' ), 
        'center' => esc_html__( 'Center ( Default )', 'solido' ),
        'right' => esc_html__( 'Right', 'solido' ),
        
    ),
));

// Background color
$wp_customize->add_setting('solido_login_background_color',array(
    'default'  => '#fff',
    'sanitize_callback' => 'sanitize_hex_color',
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,'solido_login_background_color_control',array(
    'label'      => esc_html__('Background color','solido'),
    'section'    => 'solido_login_section',
    'settings'   => 'solido_login_background_color',
    'priority'   => '112',
    'description'=> esc_html__('Set Background color for login page','solido'),
)));

//Background image
$wp_customize->add_setting( 'solido_login_background_image' , array(
    'default' => '',
    'sanitize_callback' => 'solido_sanitize_url',
));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'solido_login_background_image_control', array(
    'label'      => __( 'Image for background login page', 'solido' ),
    'section'    => 'solido_login_section',
    'settings'   => 'solido_login_background_image',
    'description'=> esc_html__('Set Image for background login page','solido'),
)));