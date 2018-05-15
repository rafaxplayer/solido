<?php
    if ( ! defined( 'ABSPATH' ) ) { exit; }
    
    $wp_customize->add_section( 'solido_layouts_section', array(
        'title' => esc_html__( 'Layouts settings', 'solido' ),
        'priority' => 30,
      ));

    // position sidebar
	$wp_customize->add_setting( 'solido_options[sidebar_position]' , array(
		'default' => $defaults['sidebar_position'],
		'transport' => 'refresh',
		'sanitize_callback' => 'solido_sanitize_number_absint',
	)); 
	
	$wp_customize->add_control( 'solido_sidebar_position_control', array(
		'label'      => esc_html__( 'Sidebar position', 'solido' ),
		'section'    => 'solido_layouts_section',
		'settings'   => 'solido_options[sidebar_position]',
        'type' => 'select',
        'priority' => 100,
        'choices' => array( 
            1 => esc_html__( 'Right Sidebar (default)', 'solido' ), 
            2 => esc_html__( 'Left Sidebar', 'solido' ),
            3 => esc_html__( 'Bottom Sidebar', 'solido' ),
            4 => esc_html__( 'Hidde Sidebar', 'solido' ),
        ),
    ));

    // position menu header
	$wp_customize->add_setting( 'solido_options[header_menu_position]' , array(
		'default' => $defaults['header_menu_position'],
		'sanitize_callback' => 'solido_sanitize_number_absint',
	)); 
	
	$wp_customize->add_control( 'solido_header_menu_position_control', array(
		'label'      => esc_html__( 'Header menu position', 'solido' ),
		'section'    => 'solido_layouts_section',
		'settings'   => 'solido_options[header_menu_position]',
        'type' => 'select',
        'priority' => 101,
        'choices' => array( 
            1 => esc_html__( 'Right (default)', 'solido' ), 
            2 => esc_html__( 'Left', 'solido' ),
            3 => esc_html__( 'Center bottom', 'solido' ),
            4 => esc_html__( 'Center Top', 'solido' ),
        ),
    ));
    

    // Blog style
	$wp_customize->add_setting( 'solido_options[blog-list-style]' , array(
		'default' => $defaults['blog-list-style'],
		'sanitize_callback' => 'solido_sanitize_number_absint',
    ));
    
    $wp_customize->add_control( 'solido_blog-list-style_control', array(
		'label'      => esc_html__( 'Blog list style', 'solido' ),
		'section'    => 'solido_layouts_section',
		'settings'   => 'solido_options[blog-list-style]',
        'type'       => 'select',
        'choices'     => array(
            1 => esc_html__('Grid format (default)', 'solido'),
            2 => esc_html__('List format', 'solido')
        ),
        'priority'   => 103,
    ));

    // show related post view
	$wp_customize->add_setting( 'solido_show_related_posts' , array(
		'default' => $defaults['show-related_posts'],
		'sanitize_callback' => 'solido_sanitize_checkbox',
    ));
    
    $wp_customize->add_control( 'solido_show_related_posts_control', array(
		'label'      => esc_html__( 'Show related posts', 'solido' ),
		'section'    => 'solido_layouts_section',
        'settings'   => 'solido_show_related_posts',
        'description'=> esc_html__('Show related post on single posts','solido'),
        'type' => 'checkbox',
        'priority' => 104,
    ));

    // taxonomy for related posts
	$wp_customize->add_setting( 'solido_taxonomy_related_posts' , array(
		'default' => $defaults['solido_taxonomy_related_posts'],
		'sanitize_callback' => 'solido_text_sanitization',
	)); 
	
	$wp_customize->add_control( 'solido_taxonomy_related_posts_control', array(
		'label'      => esc_html__( 'Set terms for display related posts (Tags or Categories)', 'solido' ),
		'section'    => 'solido_layouts_section',
		'settings'   => 'solido_taxonomy_related_posts',
        'type' => 'select',
        'priority' => 105,
        'choices' => array( 
            'category' => esc_html__( 'Categories', 'solido' ), 
            'post_tag' => esc_html__( 'Tags', 'solido' ),
            
        ),
    ));
    
    
?>