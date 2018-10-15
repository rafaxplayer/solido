<?php
// ******** Customize Fron page ************//


$wp_customize->add_panel( 'solido_front_page_panel', array(
    'title' => esc_html__( 'Theme Front Page', 'solido' ),
    'description' => esc_html__('To establish adjustments for the static page template of the tem, it is necessary to have in the section homepage settins marked "a static page" and choose a page.','solido'),
    'priority' => 36,
    'active_callback' => 'solido_is_static_front_page',
)); 


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

