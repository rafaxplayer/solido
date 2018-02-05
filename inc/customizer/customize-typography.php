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

    $wp_customize->add_section( 'solido_typography_section', array(
        'title' => esc_html__( 'Typography settings', 'solido' ),
        'priority' => 35,
    ));

    // Font family for titles
    $wp_customize->add_setting(
        'solido_titles_face', array(
            'default' => 'Arial Black, Gadget, sans-serif',
            'sanitize_callback' => 'solido_text_sanitization',
        )
    );

    $wp_customize->add_control(
        'typography_face_titles', array(
            'label' => __( 'Typography Face for the titles', 'solido' ),
            'section' => 'solido_typography_section',
            'type' => 'select',
            'settings' => 'solido_titles_face',
            'choices' => $faces ,
        )
    );

    // Google Font family for titles (only show when is select google font option)
    $wp_customize->add_setting(
        'solido_titles_googlefont', array(
            'default' => 'Arial',
            'sanitize_callback' => 'solido_text_sanitization',
        )
    );

    $wp_customize->add_control(
        'google_font_titles', array(
            'label' => __( 'Google font for Titles', 'solido' ),
            'section' => 'solido_typography_section',
            'type' => 'text',
            'settings' => 'solido_titles_googlefont',
        )
    );

    // Font family for texts
    $wp_customize->add_setting(
        'solido_texts_face', array(
            'default' => 'Arial Black, Gadget, sans-serif',
            'sanitize_callback' => 'solido_text_sanitization',
        )
    );

    $wp_customize->add_control(
        'typography_face_texts', array(
            'label' => __( 'Typography Face for the texts', 'solido' ),
            'section' => 'solido_typography_section',
            'type' => 'select',
            'settings' => 'solido_texts_face',
            'choices' => $faces ,
        )
    );

    // Google Font family for titles (only show when is select google font option)
    $wp_customize->add_setting(
        'solido_texts_googlefont', array(
            'default' => 'Arial',
            'sanitize_callback' => 'solido_text_sanitization',
        )
    );

    $wp_customize->add_control(
        'google_font_texts', array(
            'label' => __( 'Google font for Texts', 'solido' ),
            'section' => 'solido_typography_section',
            'type' => 'text',
            'settings' => 'solido_texts_googlefont',
        )
    );