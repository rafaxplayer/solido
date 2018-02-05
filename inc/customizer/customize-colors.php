<?php
    // ******** Customize colors ************//

    $colors = array();

    // header background color

    $colors[] = array(
        'slug'      =>'solido-primary-color',
        'setting'   =>array(
            'default'  =>'#000',
            'sanitize_callback' => 'sanitize_hex_color',
        ),
        'control'   =>array(
            'label'      => esc_html__('Header Background and color','solido'),
			'section'    => 'colors',
            'settings'   => 'solido-primary-color',
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
        'slug'      =>'solido-header-menu-text-color',
        'setting'   =>array(
            'default'  =>'#ffffff',
            'sanitize_callback' => 'sanitize_hex_color',
        ),
        'control'   =>array(
            'label'      => esc_html__('Header menu text color','solido'),
			'section'    => 'colors',
            'settings'   => 'solido-header-menu-text-color',
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
        'slug'      =>'solido-header-menu-text-hover-color',
        'setting'   =>array(
            'default'  =>'#000',
            'sanitize_callback' => 'sanitize_hex_color',
        ),
        'control'   =>array(
            'label'      => esc_html__('Header menu hover text color','solido'),
            'section'    => 'colors',
            'settings'   => 'solido-header-menu-text-hover-color',
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
        'slug'      =>'solido-header-menu-item-hover-color',
        'setting'   =>array(
            'default'  =>'#dd0000',
            'sanitize_callback' => 'sanitize_hex_color',
        ),
        'control'   =>array(
            'label'      => esc_html__('Header menu item hover background color','solido'),
            'section'    => 'colors',
            'settings'   => 'solido-header-menu-item-hover-color',
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
        'slug'      =>'solido-header-menu-active-color',
        'setting'   =>array(
            'default'  =>'#dd0000',
            'sanitize_callback' => 'sanitize_hex_color',
        ),
        'control'   =>array(
            'label'      => esc_html__('Active menu item color','solido'),
            'section'    => 'colors',
            'settings'   => 'solido-header-menu-active-color',
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
        'slug'      =>'solido-titles-color',
        'setting'   =>array(
            'default'  =>'#525050',
            'sanitize_callback' => 'sanitize_hex_color',
        ),
        'control'   =>array(
            'label'      => esc_html__('Titles color','solido'),
            'section'    => 'colors',
            'settings'   => 'solido-titles-color',
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
        'slug'      =>'solido-paragraphs-color',
        'setting'   =>array(
            'default'  =>'#989894',
            'sanitize_callback' => 'sanitize_hex_color',
        ),
        'control'   =>array(
            'label'      => esc_html__('Texts color','solido'),
            'section'    => 'colors',
            'settings'   => 'solido-paragraphs-color',
            'priority'   => '',
            'description'=> esc_html__('Set blog and pages texts color','solido'),
        ),
        'selective_show' =>false,
        'selective'      =>array(
            'selector'   =>'',
            'container_inclusive' => true,
            'fallback_refresh' => false,
        ),
        
    );
    
    //**** General links *****/
    // Links color
    $colors[] = array(
        'slug'      =>'solido-links-color',
        'setting'   =>array(
            'default'  =>'#dd3333',
            'sanitize_callback' => 'sanitize_hex_color',
        ),
        'control'   =>array(
            'label'      => esc_html__('Links color','solido'),
			'section'    => 'colors',
            'settings'   => 'solido-links-color',
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
        'slug'      =>'solido-links-hover-color',
        'setting'   =>array(
            'default'  =>'#dd0000',
            'sanitize_callback' => 'sanitize_hex_color',
        ),
        'control'   =>array(
            'label'      => esc_html__('Links hover color','solido'),
            'section'    => 'colors',
            'settings'   => 'solido-links-hover-color',
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
    

    $count=100;
    foreach( $colors as $solido_colors ) {

        //Settings
        $wp_customize->add_setting($solido_colors['slug'], $solido_colors['setting']); 
        
        //controls
        $solido_colors['control']['priority'] = $count++;

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $solido_colors['slug'].'_control',$solido_colors['control']));

		if( $solido_colors['selective_show'] ){

			$wp_customize->selective_refresh->add_partial( $solido_colors['slug'], $solido_colors['selective']);
		} 
		
    }