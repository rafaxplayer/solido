jQuery(function($) {

    // Script to hide show the Google site title Font input depending on value of the Heading select
    var $font_site_title_select = $('#customize-control-solido_typography_face_site_title select'),
        $font_site_title = $font_site_title_select.val(),
        $face_site_title_input = $('#customize-control-solido_google_font_site_title');

    if ($font_site_title != 'Google Fonts') {
        $face_site_title_input.hide();
    } else {
        $face_site_title_input.fadeIn();
    }

    $font_site_title_select.change(function() {

        var font_change = $(this).val();

        if (font_change != 'Google Fonts') {
            $face_site_title_input.hide();
        } else {
            $face_site_title_input.fadeIn();
        }
    });
    //end site title

    // Script to hide show the Google site description Font input depending on value of the Heading select
    var $font_site_description_select = $('#customize-control-solido_typography_face_site_description select'),
        $font_site_description = $font_site_description_select.val(),
        $face_site_description_input = $('#customize-control-solido_google_font_site_description');

    if ($font_site_description != 'Google Fonts') {
        $face_site_description_input.hide();
    } else {
        $face_site_description_input.fadeIn();
    }

    $font_site_description_select.change(function() {

        var font_change = $(this).val();

        if (font_change != 'Google Fonts') {
            $face_site_description_input.hide();
        } else {
            $face_site_description_input.fadeIn();
        }
    });
    //end site description

    /*************/

    // Script to show hide the Google Titles Font input depending on the value of the Text select
    var $font_titles_select = $('#customize-control-solido_typography_face_titles select'),
        $font_titles = $font_titles_select.val(),
        $face_titles_input = $('#customize-control-solido_google_font_titles');


    if ($font_titles != 'Google Fonts') {
        $face_titles_input.hide();
    } else {
        $face_titles_input.fadeIn();
    }

    $font_titles_select.change(function() {

        var font_change = $(this).val();

        if (font_change != 'Google Fonts') {
            $face_titles_input.hide();
        } else {
            $face_titles_input.fadeIn();
        }
    });
    // end titles

    // Script to hide show the Google texts Font input depending on value of the Heading select
    var $font_texts_select = $('#customize-control-solido_typography_face_texts select'),
        $font_texts = $font_texts_select.val(),
        $face_texts_input = $('#customize-control-solido_google_font_texts');

    if ($font_texts != 'Google Fonts') {
        $face_texts_input.hide();
    } else {
        $face_texts_input.fadeIn();
    }

    $font_texts_select.change(function() {

        var font_change = $(this).val();

        if (font_change != 'Google Fonts') {
            $face_texts_input.hide();
        } else {
            $face_texts_input.fadeIn();
        }
    });

    // end texts

    // Script to hide show the Google header menu Font input depending on value of the Heading select
    var $font_menu_header_select = $('#customize-control-solido_typography_face_menu_header select'),
        $font_menu_header = $font_menu_header_select.val(),
        $face_menu_header_input = $('#customize-control-solido_google_font_menu_header');

    if ($font_menu_header != 'Google Fonts') {
        $face_menu_header_input.hide();
    } else {
        $face_menu_header_input.fadeIn();
    }

    $font_menu_header_select.change(function() {

        var font_change = $(this).val();

        if (font_change != 'Google Fonts') {
            $face_menu_header_input.fadeOut();
        } else {
            $face_menu_header_input.fadeIn();
        }
    });
    //end menu header


    // Script to fadeOut show the input cat for panel services
    var $services_checkbox = $('#customize-control-solido_show_panel_services_control input:checkbox'),
        $services_is_checked = $services_checkbox.is(':checked'),
        $services_cat_input = $('#customize-control-solido_panel_services_control');
    $services_color_control = $('#customize-control-solido_panel_services_color_control');

    if ($services_is_checked) {
        $services_cat_input.fadeIn();
        $services_color_control.fadeIn();
    } else {
        $services_cat_input.fadeOut();
        $services_color_control.fadeOut();
    }

    $services_checkbox.change(function() {

        var check_change = this.checked;

        if (check_change) {
            $services_cat_input.fadeIn();
            $services_color_control.fadeIn();
        } else {
            $services_cat_input.fadeOut();
            $services_color_control.fadeOut();
        }
    });
    //end panel services

    // Script to hide show the input cat for panel team
    var $team_checkbox = $('#customize-control-solido_show_panel_team_control input:checkbox'),
        $team_is_checked = $team_checkbox.is(':checked'),
        $team_text_input = $('#customize-control-solido_text_panel_team_control');
    $team_cat_input = $('#customize-control-solido_panel_team_control');

    if ($services_is_checked) {
        $team_text_input.fadeIn();
        $team_cat_input.fadeIn();
    } else {
        $team_text_input.fadeOut();
        $team_cat_input.fadeOut();
    }

    $team_checkbox.change(function() {

        var check_change = this.checked;

        if (check_change) {
            $team_text_input.fadeIn();
            $team_cat_input.fadeIn();
        } else {
            $team_text_input.fadeOut();
            $team_cat_input.fadeOut();
        }
    });
    //end panel team

    // Script to hide show the inputs for panel contact
    var $contact_checkbox = $('#customize-control-solido_show_panel_contact_control input:checkbox'),
        $contact_is_checked = $contact_checkbox.is(':checked'),
        $contact_image_control = $('#customize-control-solido_image_panel_contact_control');
    $contact_text_input = $('#customize-control-solido_text_panel_contact_control');
    $contact_text_button = $('#customize-control-solido_button_panel_contact_control');
    $contact_page_select = $('#customize-control-solido_link_panel_contact_control');

    if ($contact_is_checked) {
        $contact_image_control.fadeIn();
        $contact_text_input.fadeIn();
        $contact_text_button.fadeIn();
        $contact_page_select.fadeIn();
    } else {
        $contact_image_control.fadeOut();
        $contact_text_input.fadeOut();
        $contact_text_button.fadeOut();
        $contact_page_select.fadeOut();
    }

    $contact_checkbox.change(function() {

        var check_change = this.checked;

        if (check_change) {
            $contact_image_control.fadeIn();
            $contact_text_input.fadeIn();
            $contact_text_button.fadeIn();
            $contact_page_select.fadeIn();
        } else {
            $contact_image_control.fadeOut();
            $contact_text_input.fadeOut();
            $contact_text_button.fadeOut();
            $contact_page_select.fadeOut();
        }
    });
    //end panel team

    // Script to hide show the select of taxonomy with related posts layout
    var $related_checkbox = $('#customize-control-solido_show_related_posts_control input:checkbox'),
        $related_is_checked = $related_checkbox.is(':checked'),
        $related_select_control = $('#customize-control-solido_taxonomy_related_posts_control');

    if ($related_is_checked) {
        $related_select_control.fadeIn();

    } else {
        $related_select_control.fadeOut();

    }

    $related_checkbox.change(function() {

        var check_change = this.checked;

        if (check_change) {
            $related_select_control.fadeIn();

        } else {
            $related_select_control.fadeOut();

        }
    });
    // end related posts

    //Slider options

    var $slider_checkbox = $('#customize-control-solido_show_slider_control input:checkbox'),
        $slider_is_checked = $slider_checkbox.is(':checked'),
        $container_controls = $('#sub-accordion-section-solido_slider_section li');


    $container_controls.each(function(index) {
        if (index != 0 || index != 1) {
            /* if ($slider_is_checked) {
                $(this).fadeIn();

            } else {
                $(this).fadeOut();
            } */
        }
    });

    $slider_checkbox.change(function() {

        var check_change = this.checked;
        $container_controls.each(function(index) {
            if (index != 0 && index != 1) {
                if (check_change) {
                    $(this).fadeIn();
                } else {
                    $(this).fadeOut();
                }
                console.log(index);
            }
        });

    });

});