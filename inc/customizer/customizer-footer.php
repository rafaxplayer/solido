<?php

    if ( ! defined( 'ABSPATH' ) ) { exit; }

    $wp_customize->add_section( 'solido_footer_section', array(
        'title' => esc_html__( 'Footer settings', 'solido' ),
        'priority' => 40,
      ));

    // footer copy 
    $wp_customize->add_setting( 'solido_options[footer-copy]' , array(
		'default' => $defaults['footer-copy'],
		'sanitize_callback' => 'solido_sanitize_checkbox',
	)); 
	
	$wp_customize->add_control( 'solido_footer-copy_control', array(
		'label'      => esc_html__( 'Show footer copy', 'solido' ),
        'section'    => 'solido_footer_section',
        'settings'   => 'solido_options[footer-copy]',
        'type'       =>  'checkbox'
		
    ));

    // text footer
	$wp_customize->add_setting( 'solido_options[footer-text]' , array(
		'default' => $defaults['footer-text'],
		'transport' => 'postMessage',
		'sanitize_callback' => 'solido_text_sanitization',
	)); 
	
	$wp_customize->add_control( 'solido_footer-text_control', array(
		'label'      => esc_html__( 'Footer text', 'solido' ),
        'section'    => 'solido_footer_section',
        'settings'    => 'solido_options[footer-text]',
		
    ));

    