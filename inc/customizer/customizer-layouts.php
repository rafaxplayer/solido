<?php

    $wp_customize->add_section( 'solido_layouts_section', array(
        'title' => esc_html__( 'Layouts settings', 'solido' ),
        'priority' => 30,
      ));

    // position sidebar
	$wp_customize->add_setting( 'solido_options[sidebar_position]' , array(
		'default' => $defaults['sidebar_position'],
		'transport' => 'refresh',
		'sanitize_callback' => 'absint',
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
		'sanitize_callback' => 'absint',
	)); 
	
	$wp_customize->add_control( 'solido_header_menu_position_control', array(
		'label'      => __( 'Header menu position', 'solido' ),
		'section'    => 'solido_layouts_section',
		'settings'   => 'solido_options[header_menu_position]',
        'type' => 'select',
        'priority' => 101,
        'choices' => array( 
            1 => esc_html__( 'Right (default)', 'solido' ), 
            2 => esc_html__( 'Left', 'solido' ),
            3 => esc_html__( 'Center bottom', 'solido' ),
            4 => esc_html__( 'Center Top', 'solido' ),
            
        )
    ));

    // position menu header
	$wp_customize->add_setting( 'solido_options[show-slider]' , array(
		'default' => $defaults['show-slider'],
		'sanitize_callback' => 'solido_sanitize_checkbox',
    ));
    
    $wp_customize->add_control( 'solido_show_slider_control', array(
		'label'      => __( 'Show slider', 'solido' ),
		'section'    => 'solido_layouts_section',
        'settings'   => 'solido_options[show-slider]',
        'description'=> esc_html__('For use slider , create post with category "slider"','solido'),
        'type' => 'checkbox',
        'priority' => 102,
                    
    ));


    // Blog style
	$wp_customize->add_setting( 'solido_options[blog-list-style]' , array(
		'default' => $defaults['blog-list-style'],
		'sanitize_callback' => 'absint',
    ));
    
    $wp_customize->add_control( 'solido_blog-list-style_control', array(
		'label'      => __( 'Blog list style', 'solido' ),
		'section'    => 'solido_layouts_section',
		'settings'   => 'solido_options[blog-list-style]',
        'type'       => 'select',
        'choices'     => array(
            1 => esc_html__('Grid format (default)', 'solido'),
            2 => esc_html__('List format', 'solido')
        ),
        'priority'   => 103,
                    
    ));
    
    
    ?>