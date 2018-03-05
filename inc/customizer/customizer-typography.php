<?php

    // List fonts
    $faces = array(
        'Arial, Helvetica, sans-serif' => 'Arial',
        'Arial Black, Gadget, sans-serif' => 'Arial Black',
        'Comic Sans MS, cursive' => 'Comic Sans MS',
        'Courier New, monospace' => 'Courier New',
        'Georgia, serif' => 'Georgia',
        '"HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue",Helvetica, Arial, "Lucida Grande", sans-serif' => 'Helvetica Neue',
        'Impact, Charcoal, sans-serif' => 'Impact',
        'Lucida Console, Monaco, monospace' => 'Lucida Console',
        'Lucida Sans Unicode, Lucida Grande, sans-serif' => 'Lucida Sans Unicode',
        '"Open Sans", sans-serif' => 'Open Sans',
        'Palatino Linotype, Book Antiqua, Palatino, serif' => 'Palatino Linotype',
        'Tahoma, Geneva, sans-serif' => 'Tahoma',
        'Times New Roman, Times, serif' => 'Times New Roman',
        'Trebuchet MS, sans-serif' => 'Trebuchet MS',
        'Verdana, Geneva, sans-serif' => 'Verdana',
        'Symbol' => 'Symbol',
        'Webdings' => 'Webdings',
        'Wingdings, Zapf Dingbats' => 'Wingdings',
        'MS Sans Serif, Geneva, sans-serif' => 'MS Sans Serif',
        'MS Serif, New York, serif' => 'MS Serif',
        'Google Fonts' => 'Google Fonts',
    );

    $font_sizes_texts= array(
            '.3em' => '.3',
            '.4em' => '.4',
            '.5em' => '.5',
            '.6em' => '.6',
            '.7em' => '.7',
            '.8em' => '.8',
            '.9em' => '.9',
            '1em' => '1',
            '1.1em' => '1.1',
            '1.2em' => '1.2',
            '1.3em' => '1.3',
            '1.4em' => '1.4',
            '1.5em' => '1.5',
            '1.6em' => '1.6',
            '1.7em' => '1.7',
            '1.8em' => '1.8',
            '1.9em' => '1.9',
            '2em' => '2',
            '2.5em' => '2.5',
            '3em' => '3',
            '3.5em' => '3.5',
            '4em' => '4',
            '4.5em' => '4.5',
            '5em' => '5',
            '5.5em' => '5.5',
            '6em' => '6',
        );

    $font_size_header= array(
            '1em' => '1',
            '1.1em' => '1.1',
            '1.2em' => '1.2',
            '1.3em' => '1.3',
            '1.4em' => '1.4',
            '1.5em' => '1.5',
            '1.6em' => '1.6',
            '1.7em' => '1.7',
            '1.8em' => '1.8',
            '1.9em' => '1.9',
            '2em' => '2',
            '2.1em' => '2.1',
            '2.2em' => '2.2',
            '2.3em' => '2.3',
            '2.4em' => '2.4',
            '2.5em' => '2.5',
            '2.6em' => '2.6',
            '2.7em' => '2.7',
            '2.8em' => '2.8',
            '2.9em' => '2.9',
            '3em' => '3',
            '3.1em' => '3.1',
            '3.2em' => '3.2',
            '3.3em' => '3.3',
            '3.4em' => '3.4',
            '3.5em' => '3.5',
            '3.6em' => '3.6',
            '3.7em' => '3.7',
            '3.8em' => '3.8',
            '3.9em' => '3.9',
            '4em' => '4',
            '4.1em' => '4.1',
            '4.2em' => '4.2',
            '4.3em' => '4.3',
            '4.4em' => '4.4',
            '4.5em' => '4.5',
            '4.6em' => '4.6',
            '4.7em' => '4.7',
            '4.8em' => '4.8',
            '4.9em' => '4.9',
            '5em' => '5',
            '5.5em' => '5.5',
            '6em' => '6',
        );

    $font_styles = array(
            'normal' => 'normal',
            'italic' => 'italic'
        );
    

    $font_weights = array(
            '100'=>'100',
            '200'=>'200',
            '300'=>'300',
            '400'=>'400',
            '500'=>'500',
            '600'=>'600',
            '700'=>'700',
            '800'=>'800',
            '900'=>'900',
        );

    $wp_customize->add_panel( 'solido_typography_panel', array(
        'title' => esc_html__( 'Typography settings', 'solido' ),
        'priority' => 35,
    ));

    /**
     * TITLES
     */

    $wp_customize->add_section( 'solido_typography_titles_section', array(
        'title' => esc_html__( 'Titles', 'solido' ),
        'panel' =>  'solido_typography_panel',
        'description' => esc_html__('Set typography settings for titles of page , post and widgets','solido'),
    ));

    // Font family for titles
    $wp_customize->add_setting(
        'solido_options[typography][titles_face]', array(
            'default' => $defaults['typography']['titles_face'],
            'sanitize_callback' => 'solido_text_sanitization',
        )
    );

    $wp_customize->add_control(
        'solido_typography_face_titles', array(
            'label' => __( 'Typography Face for the titles', 'solido' ),
            'section' => 'solido_typography_titles_section',
            'type' => 'select',
            'settings' => 'solido_options[typography][titles_face]',
            'choices' => $faces ,
        )
    );

    // Google Font family for titles (only show when is select google font option)
    $wp_customize->add_setting(
        'solido_options[typography][titles_googlefont]', array(
            'default' => $defaults['typography']['titles_googlefont'],
            'sanitize_callback' => 'solido_text_sanitization',
        )
    );

    $wp_customize->add_control(
        'solido_google_font_titles', array(
            'label' => __( 'Google font for Titles', 'solido' ),
            'section' => 'solido_typography_titles_section',
            'type' => 'text',
            'settings' => 'solido_options[typography][titles_googlefont]',
        )
    );

    // Font weigth for titles
    $wp_customize->add_setting(
        'solido_options[typography][titles_fontweight]', array(
            'default' => $defaults['typography']['titles_fontweight'],
            'sanitize_callback' => 'solido_text_sanitization',
        )
    );

    $wp_customize->add_control(
        'solido_titles_fontweight', array(
            'label' => __( 'Titles font weight', 'solido' ),
            'section' => 'solido_typography_titles_section',
            'type' => 'select',
            'settings' => 'solido_options[typography][titles_fontweight]',
            'choices' => $font_weights,
        )
    );

    // Font style for titles
    $wp_customize->add_setting(
        'solido_options[typography][titles_fontstyle]', array(
            'default' => $defaults['typography']['titles_fontstyle'],
            'sanitize_callback' => 'solido_text_sanitization',
        )
    );

    $wp_customize->add_control(
        'solido_titles_fontstyle', array(
            'label' => __( 'Titles font style', 'solido' ),
            'section' => 'solido_typography_titles_section',
            'type' => 'select',
            'settings' => 'solido_options[typography][titles_fontstyle]',
            'choices' => $font_styles ,
        )
    );


    /**
     * SITE TITLE & DESCRIPTION
     */
    $wp_customize->add_section( 'solido_typography_branding_section', array(
        'title' => esc_html__( 'Site Branding', 'solido' ),
        'panel' =>  'solido_typography_panel',
        'description' => esc_html__('Set typography settings for header site title and description','solido')
    ));


    // Font family for site title
    $wp_customize->add_setting(
        'solido_options[typography][site_title_face]', array(
            'default' => $defaults['typography']['site_title_face'],
            'sanitize_callback' => 'solido_text_sanitization',
        )
    );

    $wp_customize->add_control(
        'solido_typography_face_site_title', array(
            'label' => __( 'Typography Face for site title', 'solido' ),
            'section' => 'solido_typography_branding_section',
            'type' => 'select',
            'settings' => 'solido_options[typography][site_title_face]',
            'choices' => $faces ,
        )
    );

    // Google Font family for site title (only show when is select google font option)
    $wp_customize->add_setting(
        'solido_options[typography][site_title_googlefont]', array(
            'default' => $defaults['typography']['site_title_googlefont'],
            'sanitize_callback' => 'solido_text_sanitization',
        )
    );

    $wp_customize->add_control(
        'solido_google_font_site_title', array(
            'label' => __( 'Google font for site title', 'solido' ),
            'section' => 'solido_typography_branding_section',
            'type' => 'text',
            'settings' => 'solido_options[typography][site_title_googlefont]',
        )
    );



    // Font size site title 
    $wp_customize->add_setting(
        'solido_options[typography][site_title_fontsize]', array(
            'default' => $defaults['typography']['site_title_fontsize'],
            'sanitize_callback' => 'solido_text_sanitization',
        )
    );

    $wp_customize->add_control(
        'solido_site_title_fontsize', array(
            'label' => __( 'Font size site ttile', 'solido' ),
            'section' => 'solido_typography_branding_section',
            'settings' => 'solido_options[typography][site_title_fontsize]',
            'type' => 'select',
            'choices'  =>$font_size_header,
            
        )
    );

    // Font family for site description
    $wp_customize->add_setting(
        'solido_options[typography][site_description_face]', array(
            'default' => $defaults['typography']['site_description_face'],
            'sanitize_callback' => 'solido_text_sanitization',
        )
    );

    $wp_customize->add_control(
        'solido_typography_face_site_description', array(
            'label' => __( 'Typography Face for site description', 'solido' ),
            'section' => 'solido_typography_branding_section',
            'type' => 'select',
            'settings' => 'solido_options[typography][site_description_face]',
            'choices' => $faces ,
        )
    );

    // Google Font family for site description (only show when is select google font option)
    $wp_customize->add_setting(
        'solido_options[typography][site_description_googlefont]', array(
            'default' => $defaults['typography']['site_description_googlefont'],
            'sanitize_callback' => 'solido_text_sanitization',
        )
    );

    $wp_customize->add_control(
        'solido_google_font_site_description', array(
            'label' => __( 'Google font for site description', 'solido' ),
            'section' => 'solido_typography_branding_section',
            'type' => 'text',
            'settings' => 'solido_options[typography][site_description_googlefont]',
        )
    );

    // Font size site description 
    $wp_customize->add_setting(
        'solido_options[typography][site_description_fontsize]', array(
            'default' => $defaults['typography']['site_description_fontsize'],
            'sanitize_callback' => 'solido_text_sanitization',
        )
    );

    $wp_customize->add_control(
        'solido_header_description_fontsize', array(
            'label' => __( 'Font size site description', 'solido' ),
            'section' => 'solido_typography_branding_section',
            'settings' => 'solido_options[typography][site_description_fontsize]',
            'type' => 'select',
            'choices'  =>$font_sizes_texts,
            
        )
    );



    /**
     * MENU HEADER
     */
    $wp_customize->add_section( 'solido_typography_header_menu_section', array(
        'title' => esc_html__( 'Menu header', 'solido' ),
        'panel' =>  'solido_typography_panel',
        'description' => esc_html__('Set typography settings menu header','solido')
    ));
    

     // Font family for menu header
    $wp_customize->add_setting(
        'solido_options[typography][menu_header_face]', array(
            'default' => $defaults['typography']['menu_header_face'],
            'sanitize_callback' => 'solido_text_sanitization',
        )
    );

    $wp_customize->add_control(
        'solido_typography_face_menu_header', array(
            'label' => __( 'Typography Face for the menu header', 'solido' ),
            'section' => 'solido_typography_header_menu_section',
            'type' => 'select',
            'settings' => 'solido_options[typography][menu_header_face]',
            'choices' => $faces ,
        )
    );

    // Google Font family for menu header (only show when is select google font option)
    $wp_customize->add_setting(
        'solido_options[typography][menu_header_googlefont]', array(
            'default' => $defaults['typography']['menu_header_googlefont'],
            'sanitize_callback' => 'solido_text_sanitization',
        )
    );

    $wp_customize->add_control(
        'solido_google_font_menu_header', array(
            'label' => __( 'Google font for menu header', 'solido' ),
            'section' => 'solido_typography_header_menu_section',
            'type' => 'text',
            'settings' => 'solido_options[typography][menu_header_googlefont]',
        )
    );

    // Font size menu header
    $wp_customize->add_setting(
        'solido_options[typography][menu_header_fontsize]', array(
            'default' => $defaults['typography']['menu_header_fontsize'],
            'sanitize_callback' => 'solido_text_sanitization',
        )
    );

    $wp_customize->add_control(
        'solido_menu_header_fontsize', array(
            'label' => __( 'Font size menu header texts', 'solido' ),
            'section' => 'solido_typography_header_menu_section',
            'settings' => 'solido_options[typography][menu_header_fontsize]',
            'type' => 'select',
            'choices'  =>$font_sizes_texts,
            
        )
    );

    // Font weigth for menu header
    $wp_customize->add_setting(
        'solido_options[typography][menu_header_fontweight]', array(
            'default' => $defaults['typography']['menu_header_fontweight'],
            'sanitize_callback' => 'solido_text_sanitization',
        )
    );

    $wp_customize->add_control(
        'solido_menu_header_fontweight', array(
            'label' => __( 'Menu header font weight', 'solido' ),
            'section' => 'solido_typography_header_menu_section',
            'type' => 'select',
            'settings' => 'solido_options[typography][menu_header_fontweight]',
            'choices' => $font_weights,
        )
    );

    // Font style for menu header
    $wp_customize->add_setting(
        'solido_options[typography][menu_header_fontstyle]', array(
            'default' => $defaults['typography']['menu_header_fontstyle'],
            'sanitize_callback' => 'solido_text_sanitization',
        )
    );

    $wp_customize->add_control(
        'solido_menu_header_fontstyle', array(
            'label' => __( 'Menu header font style', 'solido' ),
            'section' => 'solido_typography_header_menu_section',
            'type' => 'select',
            'settings' => 'solido_options[typography][menu_header_fontstyle]',
            'choices' => $font_styles ,
        )
    );


    /**
     * TEXTS
     */

    $wp_customize->add_section( 'solido_typography_texts_section', array(
        'title' => esc_html__( 'Texts', 'solido' ),
        'panel' =>  'solido_typography_panel',
        'description' => esc_html__('Set typography settings texts of posts and pages','solido')
    ));

     // Font family for texts
    $wp_customize->add_setting(
        'solido_options[typography][texts_face]', array(
            'default' => $defaults['typography']['texts_face'],
            'sanitize_callback' => 'solido_text_sanitization',
        )
    );

    $wp_customize->add_control(
        'solido_typography_face_texts', array(
            'label' => __( 'Typography Face for the texts', 'solido' ),
            'section' => 'solido_typography_texts_section',
            'type' => 'select',
            'settings' => 'solido_options[typography][texts_face]',
            'choices' => $faces ,
        )
    );

    // Google Font family for texts (only show when is select google font option)
    $wp_customize->add_setting(
        'solido_options[typography][texts_googlefont]', array(
            'default' => $defaults['typography']['texts_googlefont'],
            'sanitize_callback' => 'solido_text_sanitization',
        )
    );

    $wp_customize->add_control(
        'solido_google_font_texts', array(
            'label' => __( 'Google font for Texts', 'solido' ),
            'section' => 'solido_typography_texts_section',
            'type' => 'text',
            'settings' => 'solido_options[typography][texts_googlefont]',
        )
    );


     // Google Font size texts 
     $wp_customize->add_setting(
        'solido_options[typography][texts_fontsize]', array(
            'default' => $defaults['typography']['texts_fontsize'],
            'sanitize_callback' => 'solido_text_sanitization',
        )
    );

    $wp_customize->add_control(
        'solido_texts_font_size', array(
            'label' => __( 'Font size for Texts', 'solido' ),
            'section' => 'solido_typography_texts_section',
            'settings' => 'solido_options[typography][texts_fontsize]',
            'type' => 'select',
            'choices' => $font_sizes_texts,
            
        )
    );

    // Font style for texts
    $wp_customize->add_setting(
        'solido_options[typography][texts_fontstyle]', array(
            'default' => $defaults['typography']['texts_fontstyle'],
            'sanitize_callback' => 'solido_text_sanitization',
        )
    );

    $wp_customize->add_control(
        'solido_texts_fontstyle', array(
            'label' => __( 'Texts font style', 'solido' ),
            'section' => 'solido_typography_texts_section',
            'type' => 'select',
            'settings' => 'solido_options[typography][texts_fontstyle]',
            'choices' => $font_styles ,
        )
    );
    // Font weigth for texts
    $wp_customize->add_setting(
        'solido_options[typography][texts_fontweight]', array(
            'default' => $defaults['typography']['texts_fontweight'],
            'sanitize_callback' => 'solido_text_sanitization',
        )
    );

    $wp_customize->add_control(
        'solido_texts_fontweight', array(
            'label' => __( 'Texts font weight', 'solido' ),
            'section' => 'solido_typography_texts_section',
            'type' => 'select',
            'settings' => 'solido_options[typography][texts_fontweight]',
            'choices' => $font_weights,
        )
    );