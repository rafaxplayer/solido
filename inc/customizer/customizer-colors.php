<?php
    // ******** Customize colors ************//

    $colors = array();

    // header background color

    $colors[] = array(
        'slug'      =>'solido_options[colors][primary-color]',
        'setting'   =>array(
            'default'  =>$defaults['colors']['primary-color'],
            'sanitize_callback' => 'sanitize_hex_color',
        ),
        'control'   =>array(
            'label'      => esc_html__('Header Background and bars color','solido'),
			'section'    => 'colors',
            'settings'   => 'solido_options[colors][primary-color]',
            'priority'   => '',
			'description'=> esc_html__('Set header background color when header image is not defined','solido'),
        ),
        'selective_show' =>false,
        'selective'      =>array(
            'selector'   =>'',
			'container_inclusive' => true,
			'fallback_refresh' => false,
        ),
        
    );

    // ***** Header menu colors **** //

    // Menu text color
    $colors[] = array(
        'slug'      =>'solido_options[colors][header-menu-text-color]',
        'setting'   =>array(
            'default'  =>$defaults['colors']['header-menu-text-color'],
            'sanitize_callback' => 'sanitize_hex_color',
        ),
        'control'   =>array(
            'label'      => esc_html__('Header menu text color','solido'),
			'section'    => 'colors',
            'settings'   => 'solido_options[colors][header-menu-text-color]',
            'priority'   => '',
			'description'=> esc_html__('Set Header menu text color','solido'),
        ),
        'selective_show' =>false,
        'selective'      =>array(
            'selector'   =>'',
			'container_inclusive' => true,
			'fallback_refresh' => false,
        ),
        
    );
    // Menu text hover color
    $colors[] = array(
        'slug'      =>'solido_options[colors][header-menu-text-hover-color]',
        'setting'   =>array(
            'default'  =>$defaults['colors']['header-menu-text-hover-color'],
            'sanitize_callback' => 'sanitize_hex_color',
        ),
        'control'   =>array(
            'label'      => esc_html__('Header menu hover text color','solido'),
            'section'    => 'colors',
            'settings'   => 'solido_options[colors][header-menu-text-hover-color]',
            'priority'   => '',
            'description'=> esc_html__('Set Header menu hover items color','solido'),
        ),
        'selective_show' =>false,
        'selective'      =>array(
            'selector'   =>'',
            'container_inclusive' => true,
            'fallback_refresh' => false,
        ),
        
    );

    // Menu Item hover Background color
    $colors[] = array(
        'slug'      =>'solido_options[colors][header-menu-item-hover-color]',
        'setting'   =>array(
            'default'  =>$defaults['colors']['header-menu-item-hover-color'],
            'sanitize_callback' => 'sanitize_hex_color',
        ),
        'control'   =>array(
            'label'      => esc_html__('Header menu item hover background color','solido'),
            'section'    => 'colors',
            'settings'   => 'solido_options[colors][header-menu-item-hover-color]',
            'priority'   => '',
            'description'=> esc_html__('Set background color on Header menu item hover ','solido'),
        ),
        'selective_show' =>false,
        'selective'      =>array(
            'selector'   =>'',
            'container_inclusive' => true,
            'fallback_refresh' => false,
        ),
        
    );

    // Menu Item active color
    $colors[] = array(
        'slug'      =>'solido_options[colors][header-menu-active-color]',
        'setting'   =>array(
            'default'  =>$defaults['colors']['header-menu-active-color'],
            'sanitize_callback' => 'sanitize_hex_color',
        ),
        'control'   =>array(
            'label'      => esc_html__('Active menu item color','solido'),
            'section'    => 'colors',
            'settings'   => 'solido_options[colors][header-menu-active-color]',
            'priority'   => '',
            'description'=> esc_html__('Set active menu item color','solido'),
        ),
        'selective_show' =>false,
        'selective'      =>array(
            'selector'   =>'',
            'container_inclusive' => true,
            'fallback_refresh' => false,
        ),
        
    );

    //**** Titles color *****/
    $colors[] = array(
        'slug'      =>'solido_options[colors][titles-color]',
        'setting'   =>array(
            'default'  =>$defaults['colors']['titles-color'],
            'sanitize_callback' => 'sanitize_hex_color',
        ),
        'control'   =>array(
            'label'      => esc_html__('Titles color','solido'),
            'section'    => 'colors',
            'settings'   => 'solido_options[colors][titles-color]',
            'priority'   => '',
            'description'=> esc_html__('Set blog and pages titles color','solido'),
        ),
        'selective_show' =>false,
        'selective'      =>array(
            'selector'   =>'',
            'container_inclusive' => true,
            'fallback_refresh' => false,
        ),
        
    );

    //**** Paragraphs color *****/
    $colors[] = array(
        'slug'      =>'solido_options[colors][paragraphs-color]',
        'setting'   =>array(
            'default'  =>$defaults['colors']['paragraphs-color'],
            'sanitize_callback' => 'sanitize_hex_color',
        ),
        'control'   =>array(
            'label'      => esc_html__('Texts color','solido'),
            'section'    => 'colors',
            'settings'   => 'solido_options[colors][paragraphs-color]',
            'priority'   => '',
            'description'=> esc_html__('Set blog and pages texts color','solido'),
        ),
        'selective_show' => false,
        'selective'      =>array(
            'selector'   =>'',
            'container_inclusive' => true,
            'fallback_refresh' => false,
        ),
        
    );
    
    //**** General links *****/
    // Links color
    $colors[] = array(
        'slug'      =>'solido_options[colors][links-color]',
        'setting'   =>array(
            'default'  =>$defaults['colors']['links-color'],
            'sanitize_callback' => 'sanitize_hex_color',
        ),
        'control'   =>array(
            'label'      => esc_html__('Links color','solido'),
			'section'    => 'colors',
            'settings'   => 'solido_options[colors][links-color]',
            'priority'   => '',
			'description'=> esc_html__('Set links color','solido'),
        ),
        'selective_show' =>false,
        'selective'      =>array(
            'selector'   =>'',
			'container_inclusive' => true,
			'fallback_refresh' => false,
        ),
        
    );
    // Links hover color
    $colors[] = array(
        'slug'      =>'solido_options[colors][links-hover-color]',
        'setting'   =>array(
            'default'  =>$defaults['colors']['links-hover-color'],
            'sanitize_callback' => 'sanitize_hex_color',
        ),
        'control'   =>array(
            'label'      => esc_html__('Links hover color','solido'),
            'section'    => 'colors',
            'settings'   => 'solido_options[colors][links-hover-color]',
            'priority'   => '',
            'description'=> esc_html__('Set links hover color','solido'),
        ),
        'selective_show' =>false,
        'selective'      =>array(
            'selector'   =>'',
            'container_inclusive' => true,
            'fallback_refresh' => false,
        ),
        
    );
    //Footer text color
    $colors[] = array(
        'slug'      =>'solido_options[colors][footer-text-color]',
        'setting'   =>array(
            'default'  =>$defaults['colors']['footer-text-color'],
            'sanitize_callback' => 'sanitize_hex_color',
        ),
        'control'   =>array(
            'label'      => esc_html__('Footer text color','solido'),
            'section'    => 'colors',
            'settings'   => 'solido_options[colors][footer-text-color]',
            'priority'   => '',
            'description'=> esc_html__('Set Footer text color','solido'),
        ),
        'selective_show' =>false,
        'selective'      =>array(
            'selector'   =>'',
            'container_inclusive' => true,
            'fallback_refresh' => false,
        ),
        
    );

    $count = 100;
    foreach( $colors as $solido_colors ) {

        //Settings
        $wp_customize->add_setting($solido_colors['slug'], $solido_colors['setting']); 
        
        //Controls priority
        $solido_colors['control']['priority'] = $count++;

        // Set control
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $solido_colors['slug'].'_control', $solido_colors['control']));
        
        // set selectie refresh if is true defined
		if( $solido_colors['selective_show'] ){

			$wp_customize->selective_refresh->add_partial( $solido_colors['slug'], $solido_colors['selective']);
		} 
		
    }