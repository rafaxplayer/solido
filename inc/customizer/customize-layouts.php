<?php

    $wp_customize->add_section( 'solido_layouts_section', array(
        'title' => esc_html__( 'Layouts settings', 'solido' ),
        'priority' => 30,
      ));

    // position sidebar
	$wp_customize->add_setting( 'solido_sidebar_position' , array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'absint',
	)); 
	
	$wp_customize->add_control( 'solido_sidebar_position_control', array(
		'label'      => esc_html__( 'Sidebar position', 'solido' ),
		'section'    => 'solido_layouts_section',
		'settings'   => 'solido_sidebar_position',
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
	$wp_customize->add_setting( 'solido_header_menu_position' , array(
		'default' => 1,
		'sanitize_callback' => 'absint',
	)); 
	
	$wp_customize->add_control( 'solido_header_menu_position_control', array(
		'label'      => __( 'Header menu position', 'solido' ),
		'section'    => 'solido_layouts_section',
		'settings'   => 'solido_header_menu_position',
        'type' => 'select',
        'priority' => 101,
        'choices' => array( 
            1 => esc_html__( 'Right menu (default)', 'solido' ), 
            2 => esc_html__( 'Left menu', 'solido' ),
            3 => esc_html__( 'Center menu', 'solido' ),
            
        )
    ));
    
    ?>