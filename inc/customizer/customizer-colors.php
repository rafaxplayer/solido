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
        )
        
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
        )
        
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
        )
        
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
        )
        
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
        )
        
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
        )
        
    );

    //**** Blog entryes date background color *****/
    $colors[] = array(
        'slug'      =>'solido_options[colors][blog-dates-background-color]',
        'setting'   =>array(
            'default'  =>$defaults['colors']['blog-dates-background-color'],
            'sanitize_callback' => 'sanitize_hex_color',
        ),
        'control'   =>array(
            'label'      => esc_html__('Blog background dates color','solido'),
            'section'    => 'colors',
            'settings'   => 'solido_options[colors][blog-dates-background-color]',
            'priority'   => '',
            'description'=> esc_html__('Set blog background dates color','solido'),
        )
        
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
        )
        
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
        )
        
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
        )
        
    );

    /**** Footer ****/

     //Footer background color
     $colors[] = array(
        'slug'      =>'solido_options[colors][footer-background-color]',
        'setting'   =>array(
            'default'  =>$defaults['colors']['footer-background-color'],
            'sanitize_callback' => 'sanitize_hex_color',
        ),
        'control'   =>array(
            'label'      => esc_html__('Footer background color','solido'),
            'section'    => 'colors',
            'settings'   => 'solido_options[colors][footer-background-color]',
            'priority'   => '',
            'description'=> esc_html__('Set Footer background color','solido'),
        )
        
    );

    //Footer widgets text color
    $colors[] = array(
        'slug'      =>'solido_options[colors][footer-widgets-text-color]',
        'setting'   =>array(
            'default'  =>$defaults['colors']['footer-widgets-text-color'],
            'sanitize_callback' => 'sanitize_hex_color',
        ),
        'control'   =>array(
            'label'      => esc_html__('Footer widgets text color','solido'),
            'section'    => 'colors',
            'settings'   => 'solido_options[colors][footer-widgets-text-color]',
            'priority'   => '',
            'description'=> esc_html__('Set Footer widgets text color','solido'),
        )
        
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
        )
        
    );

    $count = 100;
    foreach( $colors as $solido_colors ) {

        //Settings
        $wp_customize->add_setting($solido_colors['slug'], $solido_colors['setting']); 
        
        //Controls priority
        $solido_colors['control']['priority'] = $count++;

        // Set control
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $solido_colors['slug'].'_control', $solido_colors['control']));
         
		
    }