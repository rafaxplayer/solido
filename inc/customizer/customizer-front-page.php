<?php
// ******** Customize Fron page ************//
if ( ! defined( 'ABSPATH' ) ) { exit; }

$wp_customize->add_panel( 'solido_front_page_panel', array(
    'title' => esc_html__( 'Theme Front Page', 'solido' ),
    'description' => esc_html__('To establish adjustments for the static page template of the tem, it is necessary to have in the section homepage settins marked "a static page" and choose a page.','solido'),
    'priority' => 36,
    'active_callback' => 'solido_is_static_front_page',
)); 


/**
 * Slider
 */
$wp_customize->add_section( 'solido_slider_section', array(
    'title' => esc_html__( 'Slider Settings', 'solido' ),
    'panel'=> 'solido_front_page_panel',
    
));

// show/hidde slider
$wp_customize->add_setting( 'solido_options[show-slider]' , array(
    'default' => $defaults['show-slider'],
    'sanitize_callback' => 'solido_sanitize_checkbox',
));

$wp_customize->add_control( 'solido_show_slider_control', array(
    'label'      => esc_html__( 'Show slider', 'solido' ),
    'section'    => 'solido_slider_section',
    'settings'   => 'solido_options[show-slider]',
    'description'=> esc_html__('For use slider , create post with category "slider", only Front page','solido'),
    'type' => 'checkbox',
    
));

//Font color for slider titles
$wp_customize->add_setting('solido_options[colors][slider-titles-color]',array(
    'default'  => $defaults['colors']['slider-titles-color'],
    'sanitize_callback' => 'sanitize_hex_color',
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,'solido_slider_titles_color_control',array(
    'label'      => esc_html__('Slider_titles color','solido'),
    'section'    => 'solido_slider_section',
    'settings'   => 'solido_options[colors][slider-titles-color]',
    'description'=> esc_html__('Set Slider titles color','solido'),
)));

// Font family for slider titles
$wp_customize->add_setting(
    'solido_options[typography][slider_titles_face]', array(
        'default' => $defaults['typography']['titles_face'],
        'sanitize_callback' => 'solido_text_sanitization',
    )
);

$wp_customize->add_control(
    'solido_typography_slider_titles', array(
        'label' => esc_html__( 'Typography Face for the slider titles', 'solido' ),
        'section' => 'solido_slider_section',
        'type' => 'select',
        'settings' => 'solido_options[typography][slider_titles_face]',
        'choices' => $faces ,
    )
);

// Google Font family for slider titles (only show when is select google font option)
$wp_customize->add_setting(
    'solido_options[typography][slider_titles_googlefont]', array(
        'default' => $defaults['typography']['titles_googlefont'],
        'sanitize_callback' => 'solido_text_sanitization',
    )
);

$wp_customize->add_control(
    'solido_google_font_slider_titles', array(
        'label' => esc_html__( 'Google font for slider Titles', 'solido' ),
        'section' => 'solido_slider_section',
        'type' => 'text',
        'settings' => 'solido_options[typography][slider_titles_googlefont]',
    )
);

//Font size for slider titles 
$wp_customize->add_setting(
    'solido_options[typography][slider_titles_fontsize]', array(
        'default' => $defaults['typography']['titles_fontsize'],
        'sanitize_callback' => 'solido_text_sanitization',
    )
);

$wp_customize->add_control(
    'solido_titles_font_size', array(
        'label' => esc_html__( 'Font size for Titles', 'solido' ),
        'section' => 'solido_slider_section',
        'settings' => 'solido_options[typography][slider_titles_fontsize]',
        'type' => 'select',
        'choices' => $font_sizes_texts,
        
    )
);

// Font weigth for slider titles
$wp_customize->add_setting(
    'solido_options[typography][slider_titles_fontweight]', array(
        'default' => $defaults['typography']['titles_fontweight'],
        'sanitize_callback' => 'solido_text_sanitization',
    )
);

$wp_customize->add_control(
    'solido_titles_fontweight', array(
        'label' => esc_html__( 'Slider titles font weight', 'solido' ),
        'section' => 'solido_slider_section',
        'type' => 'select',
        'settings' => 'solido_options[typography][slider_titles_fontweight]',
        'choices' => $font_weights,
    )
);

// Font style for slider titles
$wp_customize->add_setting(
    'solido_options[typography][slider_titles_fontstyle]', array(
        'default' => $defaults['typography']['titles_fontstyle'],
        'sanitize_callback' => 'solido_text_sanitization',
    )
);

$wp_customize->add_control(
    'solido_slider_titles_fontstyle', array(
        'label' => esc_html__( 'Slider titles font style', 'solido' ),
        'section' => 'solido_slider_section',
        'type' => 'select',
        'settings' => 'solido_options[typography][slider_titles_fontstyle]',
        'choices' => $font_styles ,
    )
);


/**
 * Slider paragraph
 */

 //Font color for slider paragraph
$wp_customize->add_setting('solido_options[colors][slider-paragraph-color]',array(
    'default'  => $defaults['colors']['slider-paragraph-color'],
    'sanitize_callback' => 'sanitize_hex_color',
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,'solido_slider_paragraph_color_control',array(
    'label'      => esc_html__('Slider paragraph color','solido'),
    'section'    => 'solido_slider_section',
    'settings'   => 'solido_options[colors][slider-paragraph-color]',
    'description'=> esc_html__('Set Slider paragraph color','solido'),
)));

// Font family for slider paragraph
$wp_customize->add_setting(
    'solido_options[typography][slider_paragraph_face]', array(
        'default' => $defaults['typography']['texts_face'],
        'sanitize_callback' => 'solido_text_sanitization',
    )
);

$wp_customize->add_control(
    'solido_typography_slider_paragraph', array(
        'label' => esc_html__( 'Typography Face for the slider paragraph', 'solido' ),
        'section' => 'solido_slider_section',
        'type' => 'select',
        'settings' => 'solido_options[typography][slider_paragraph_face]',
        'choices' => $faces ,
    )
);

// Google Font family for slider paragraph (only show when is select google font option)
$wp_customize->add_setting(
    'solido_options[typography][slider_paragraph_googlefont]', array(
        'default' => $defaults['typography']['texts_googlefont'],
        'sanitize_callback' => 'solido_text_sanitization',
    )
);

$wp_customize->add_control(
    'solido_google_font_slider_paragraph', array(
        'label' => esc_html__( 'Google font for slider paragraph', 'solido' ),
        'section' => 'solido_slider_section',
        'type' => 'text',
        'settings' => 'solido_options[typography][slider_paragraph_googlefont]',
    )
);

//Font size for slider paragraph 
$wp_customize->add_setting(
    'solido_options[typography][slider_paragraph_fontsize]', array(
        'default' => $defaults['typography']['texts_fontsize'],
        'sanitize_callback' => 'solido_text_sanitization',
    )
);

$wp_customize->add_control(
    'solido_slider_paragraph_font_size', array(
        'label' => esc_html__( 'Font size for slider paragraphs', 'solido' ),
        'section' => 'solido_slider_section',
        'settings' => 'solido_options[typography][slider_paragraph_fontsize]',
        'type' => 'select',
        'choices' => $font_sizes_texts,
        
    )
);

// Font weigth for slider paragraph
$wp_customize->add_setting(
    'solido_options[typography][slider_paragraph_fontweight]', array(
        'default' => $defaults['typography']['titles_fontweight'],
        'sanitize_callback' => 'solido_text_sanitization',
    )
);

$wp_customize->add_control(
    'solido_slider_paragraph_fontweight', array(
        'label' => esc_html__( 'Slider paragraph font weight', 'solido' ),
        'section' => 'solido_slider_section',
        'type' => 'select',
        'settings' => 'solido_options[typography][slider_paragraph_fontweight]',
        'choices' => $font_weights,
    )
);

// Font style for slider paragraph
$wp_customize->add_setting(
    'solido_options[typography][slider_paragraph_fontstyle]', array(
        'default' => $defaults['typography']['titles_fontstyle'],
        'sanitize_callback' => 'solido_text_sanitization',
    )
);

$wp_customize->add_control(
    'solido_slider_paragraph_fontstyle', array(
        'label' => esc_html__( 'Slider paragraph font style', 'solido' ),
        'section' => 'solido_slider_section',
        'type' => 'select',
        'settings' => 'solido_options[typography][slider_paragraph_fontstyle]',
        'choices' => $font_styles ,
    )
);

/**
 * Panel Services
 */
$wp_customize->add_section( 'solido_panel_services_section', array(
    'title' => esc_html__( 'Panel Services Settings', 'solido' ),
    'panel'=> 'solido_front_page_panel',
    
));

// Show panel services
$wp_customize->add_setting( 'solido_options[show-panel-services]' , array(
    'default' => $defaults['show_panels'],
    'sanitize_callback' => 'solido_sanitize_checkbox',
));

$wp_customize->add_control( 'solido_show_panel_services_control', array(
    'label'      => esc_html__( 'Show panel services', 'solido' ),
    'section'    => 'solido_panel_services_section',
    'settings'   => 'solido_options[show-panel-services]',
    'description'=> esc_html__('Show or hide panel services in to front page','solido'),
    'type' => 'checkbox',
                
));

//Category for services
$wp_customize->add_setting( 'solido_options[panel-services-cat]' , array(
    'default' => $defaults['panels-services-cat'],
    'sanitize_callback' => 'solido_text_sanitization',
));

$wp_customize->add_control( 'solido_panel_services_control', array(
    'label'      => esc_html__( 'Category for display services ', 'solido' ),
    'section'    => 'solido_panel_services_section',
    'settings'   => 'solido_options[panel-services-cat]',
    'description'=> esc_html__('Enter category name for display services items (default "service")','solido'),
));

//Color for services 
$wp_customize->add_setting( 'solido_options[colors][panel-services-color]' , array(
    'default' => $defaults['colors']['panel-services-color'],
    'sanitize_callback' => 'solido_text_sanitization',
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,'solido_panel_services_color_control', array(
    'label'      => esc_html__( 'Color for panel services ', 'solido' ),
    'section'    => 'solido_panel_services_section',
    'settings'   => 'solido_options[colors][panel-services-color]',
    'description'=> esc_html__('Set color for panel service','solido'),
)));


/**
 * Panel Team
 */

$wp_customize->add_section( 'solido_panel_team_section', array(
    'title' => esc_html__( 'Panel Team Settings', 'solido' ),
    'panel'=> 'solido_front_page_panel',
));

// show panel team
$wp_customize->add_setting( 'solido_options[show-panel-team]' , array(
    'default' => $defaults['show_panels'],
    'sanitize_callback' => 'solido_sanitize_checkbox',
));

$wp_customize->add_control( 'solido_show_panel_team_control', array(
    'label'      => esc_html__( 'Show panel team', 'solido' ),
    'section'    => 'solido_panel_team_section',
    'settings'   => 'solido_options[show-panel-team]',
    'description'=> esc_html__('Show or hide panel team in to front page','solido'),
    'type' => 'checkbox',
));

// Text panel team
$wp_customize->add_setting( 'solido_options[panel-text-team]' , array(
    'default' => $defaults['panel-text-team'],
    'sanitize_callback' => 'solido_text_sanitization',
    'transport' => 'postMessage',
));

$wp_customize->add_control( 'solido_text_panel_team_control', array(
    'label'      => esc_html__( 'Text for panel team', 'solido' ),
    'section'    => 'solido_panel_team_section',
    'settings'   => 'solido_options[panel-text-team]',
    'description'=> esc_html__('Set text for panel team','solido'),
    'type' => 'text',
));

//Category for team
$wp_customize->add_setting( 'solido_options[panel-team-cat]' , array(
    'default' => $defaults['panels-team-cat'],
    'sanitize_callback' => 'solido_text_sanitization',
));

$wp_customize->add_control( 'solido_panel_team_control', array(
    'label'      => esc_html__( 'Category for display team items ', 'solido' ),
    'section'    => 'solido_panel_team_section',
    'settings'   => 'solido_options[panel-team-cat]',
    'description'=> esc_html__('Enter category name for display team items (default "team")','solido'),
));

//Text color panel team
$wp_customize->add_setting('solido_options[colors][panel-team-text-color]',array(
    'default'  => $defaults['colors']['panel-team-text-color'],
    'sanitize_callback' => 'sanitize_hex_color',
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,'solido_panel-team-text-color_control',array(
    'label'      => esc_html__('Panel team text color','solido'),
    'section'    => 'solido_panel_team_section',
    'settings'   => 'solido_options[colors][panel-team-text-color]',
    'priority'   => '',
    'description'=> esc_html__('Set panel team text color','solido'),
)));

//Background color panel team
$wp_customize->add_setting('solido_options[colors][panel-team-background-color]',array(
    'default'  => $defaults['colors']['panel-team-background-color'],
    'sanitize_callback' => 'sanitize_hex_color',
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,'solido_paenl_team_background_color_control',array(
    'label'      => esc_html__('Panel team background color','solido'),
    'section'    => 'solido_panel_team_section',
    'settings'   => 'solido_options[colors][panel-team-background-color]',
    'priority'   => '',
    'description'=> esc_html__('Set panel team background color','solido'),
)));



/**
 * Panel Contact
 */

$wp_customize->add_section( 'solido_panel_contact_section', array(
    'title' => esc_html__( 'Panel Contact Settings', 'solido' ),
    'panel'=> 'solido_front_page_panel',
));

// show panel contact
$wp_customize->add_setting( 'solido_options[show-panel-contact]' , array(
    'default' => $defaults['show_panels'],
    'sanitize_callback' => 'solido_sanitize_checkbox',
));

$wp_customize->add_control( 'solido_show_panel_contact_control', array(
    'label'      => __( 'Show panel contact', 'solido' ),
    'section'    => 'solido_panel_contact_section',
    'settings'   => 'solido_options[show-panel-contact]',
    'description'=> esc_html__('Show or hide panel contact in to front page','solido'),
    'type' => 'checkbox',
));

// Image panel contact
$wp_customize->add_setting( 'solido_options[panel-image-contact]' , array(
    'default' => $defaults['panel-image-contact'],
    'sanitize_callback' => 'solido_sanitize_url',
));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'solido_image_panel_contact_control', array(
    'label'      => __( 'Image for background panel contact', 'solido' ),
    'section'    => 'solido_panel_contact_section',
    'settings'   => 'solido_options[panel-image-contact]',
    'description'=> esc_html__('Set Image for background panel contact','solido'),
)));

// Text panel contact
$wp_customize->add_setting( 'solido_options[panel-text-contact]' , array(
    'default' => $defaults['panel-text-contact'],
    'sanitize_callback' => 'solido_text_sanitization',
    'transport' => 'postMessage',
));

$wp_customize->add_control( 'solido_text_panel_contact_control', array(
    'label'      => __( 'Text for panel contact', 'solido' ),
    'section'    => 'solido_panel_contact_section',
    'settings'   => 'solido_options[panel-text-contact]',
    'description'=> esc_html__('Set text for panel contact','solido'),
    'type' => 'text',
));

// Button text panel contact
$wp_customize->add_setting( 'solido_options[panel-button-contact]' , array(
    'default' => $defaults['panel-button-contact'],
    'sanitize_callback' => 'solido_text_sanitization',
    'transport' => 'postMessage'
));

$wp_customize->add_control( 'solido_button_panel_contact_control', array(
    'label'      => __( 'Button text for panel contact', 'solido' ),
    'section'    => 'solido_panel_contact_section',
    'settings'   => 'solido_options[panel-button-contact]',
    'description'=> esc_html__('Set button text for panel contact','solido'),
    'type' => 'text',
));

//link to page contact
 $wp_customize->add_setting( 'solido_options[panel-link-contact]', array(
    'default' => $defaults['panel-link-contact'],
    'sanitize_callback' => 'solido_sanitize_dropdown_pages',
));
  
$wp_customize->add_control( 'solido_link_panel_contact_control', array(
    'label'     => __('Your page contains the contact form' ,'solido'),
    'type'      => 'dropdown-pages',
    'section'   => 'solido_panel_contact_section',
    'settings'  => 'solido_options[panel-link-contact]',
    'description'=> esc_html__('Set page for panel contact','solido'),
));  

?>

