<?php
    // ******** Customize colors ************//

    // header background color
    $wp_customize->add_setting('solido_options[colors][primary-color]',array(
        'default'  => $defaults['colors']['primary-color'],
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,'solido_primary_color_control',array(
        'label'      => esc_html__('Header Background and bars color','solido'),
        'section'    => 'colors',
        'settings'   => 'solido_options[colors][primary-color]',
        'priority'   => '101',
        'description'=> esc_html__('Set header background color when header image is not defined','solido'),
     )));


    // ***** Header menu colors **** //
    // Menu text color
    $wp_customize->add_setting('solido_options[colors][header-menu-text-color]',array(
        'default'  => $defaults['colors']['header-menu-text-color'],
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,'solido_header_menu_text_color_control',array(
        'label'      => esc_html__('Header menu text color','solido'),
		'section'    => 'colors',
        'settings'   => 'solido_options[colors][header-menu-text-color]',
        'priority'   => '102',
		'description'=> esc_html__('Set Header menu text color','solido'),
     )));

    // Menu text hover color
    $wp_customize->add_setting('solido_options[colors][header-menu-text-hover-color]',array(
        'default'  => $defaults['colors']['header-menu-text-hover-color'],
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,'solido_header_menu_text_hover_color_control',array(
        'label'      => esc_html__('Header menu hover text color','solido'),
        'section'    => 'colors',
        'settings'   => 'solido_options[colors][header-menu-text-hover-color]',
        'priority'   => '103',
        'description'=> esc_html__('Set Header menu hover items color','solido'),
     )));

     // Menu Item hover Background color
    $wp_customize->add_setting('solido_options[colors][header-menu-item-hover-color]',array(
        'default'  => $defaults['colors']['header-menu-item-hover-color'],
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,'solido_header_menu_item_hover_color_control',array(
        'label'      => esc_html__('Header menu item hover background color','solido'),
        'section'    => 'colors',
        'settings'   => 'solido_options[colors][header-menu-item-hover-color]',
        'priority'   => '104',
        'description'=> esc_html__('Set background color on Header menu item hover ','solido'),
     )));

     // Menu Item active color
     $wp_customize->add_setting('solido_options[colors][header-menu-active-color]',array(
        'default'  => $defaults['colors']['header-menu-active-color'],
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,'solido_header_menu_active_color_control',array(
        'label'      => esc_html__('Active menu item color','solido'),
        'section'    => 'colors',
        'settings'   => 'solido_options[colors][header-menu-active-color]',
        'priority'   => '105',
        'description'=> esc_html__('Set active menu item color','solido'),
     )));

    //**** Titles color *****/
    $wp_customize->add_setting('solido_options[colors][titles-color]',array(
        'default'  => $defaults['colors']['titles-color'],
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,'solido_titles_color_control',array(
        'label'      => esc_html__('Titles color','solido'),
        'section'    => 'colors',
        'settings'   => 'solido_options[colors][titles-color]',
        'priority'   => '106',
        'description'=> esc_html__('Set blog and pages titles color','solido'),
    )));

    //**** Blog entryes date background color *****/
    $wp_customize->add_setting('solido_options[colors][blog-dates-background-color]',array(
        'default'  => $defaults['colors']['blog-dates-background-color'],
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,'solido_blog-dates-background_color_control',array(
        'label'      => esc_html__('Blog background dates color','solido'),
        'section'    => 'colors',
        'settings'   => 'solido_options[colors][blog-dates-background-color]',
        'priority'   => '106',
        'description'=> esc_html__('Set blog background dates color','solido'),
    )));


    //**** Paragraphs color *****/
    $wp_customize->add_setting('solido_options[colors][paragraphs-color]',array(
        'default'  => $defaults['colors']['paragraphs-color'],
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,'solido_paragraph_color_control',array(
        'label'      => esc_html__('Texts color','solido'),
        'section'    => 'colors',
        'settings'   => 'solido_options[colors][paragraphs-color]',
        'priority'   => '107',
        'description'=> esc_html__('Set blog and pages texts color','solido'),
    )));

    //**** General links *****/
    // Links color
    $wp_customize->add_setting('solido_options[colors][links-color]',array(
        'default'  => $defaults['colors']['links-color'],
        'sanitize_callback' => 'sanitize_hex_color'
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,'solido_links_color_control',array(
        'label'      => esc_html__('Links color','solido'),
        'section'    => 'colors',
        'settings'   => 'solido_options[colors][links-color]',
        'priority'   => '108',
        'description'=> esc_html__('Set links color','solido'),
    )));

    // Links hover color
    $wp_customize->add_setting('solido_options[colors][links-hover-color]',array(
        'default'  => $defaults['colors']['links-hover-color'],
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,'solido_links_hover_color_control',array(
        'label'      => esc_html__('Links hover color','solido'),
        'section'    => 'colors',
        'settings'   => 'solido_options[colors][links-hover-color]',
        'priority'   => '109',
        'description'=> esc_html__('Set links hover color','solido'),
    )));

    /**** Footer ****/
    //Footer background color
    $wp_customize->add_setting('solido_options[colors][footer-background-color]',array(
        'default'  => $defaults['colors']['footer-background-color'],
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,'solido_footer_background_color_control',array(
        'label'      => esc_html__('Footer background color','solido'),
        'section'    => 'colors',
        'settings'   => 'solido_options[colors][footer-background-color]',
        'priority'   => '110',
        'description'=> esc_html__('Set Footer background color','solido'),
    )));

    //Footer widgets text color
    $wp_customize->add_setting('solido_options[colors][footer-widgets-text-color]',array(
        'default'  => $defaults['colors']['footer-widgets-text-color'],
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,'solido_footer_widgets_text_color_control',array(
        'label'      => esc_html__('Footer widgets text color','solido'),
        'section'    => 'colors',
        'settings'   => 'solido_options[colors][footer-widgets-text-color]',
        'priority'   => '111',
        'description'=> esc_html__('Set Footer widgets text color','solido'),
    )));

    //Footer text color
    $wp_customize->add_setting('solido_options[colors][footer-text-color]',array(
        'default'  => $defaults['colors']['footer-text-color'],
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,'solido_footer_background_color_control',array(
        'label'      => esc_html__('Footer text color','solido'),
        'section'    => 'colors',
        'settings'   => 'solido_options[colors][footer-text-color]',
        'priority'   => '112',
        'description'=> esc_html__('Set Footer text color','solido'),
    )));
            
?>