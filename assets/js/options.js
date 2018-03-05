jQuery(function($) {

    // Script to hide show the Google site title Font input depending on value of the Heading select
    var $font_site_title_select = $('#customize-control-solido_typography_face_site_title select'),
        $font_site_title = $font_site_title_select.val(),
        $face_site_title_input = $('#customize-control-solido_google_font_site_title');

    if ($font_site_title != 'Google Fonts') {
        $face_site_title_input.hide();
    } else {
        $face_site_title_input.show();
    }

    $font_site_title_select.change(function() {

        var font_change = $(this).val();

        if (font_change != 'Google Fonts') {
            $face_site_title_input.hide();
        } else {
            $face_site_title_input.show();
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
        $face_site_description_input.show();
    }

    $font_site_description_select.change(function() {

        var font_change = $(this).val();

        if (font_change != 'Google Fonts') {
            $face_site_description_input.hide();
        } else {
            $face_site_description_input.show();
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
        $face_titles_input.show();
    }

    $font_titles_select.change(function() {

        var font_change = $(this).val();

        if (font_change != 'Google Fonts') {
            $face_titles_input.hide();
        } else {
            $face_titles_input.show();
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
        $face_texts_input.show();
    }

    $font_texts_select.change(function() {

        var font_change = $(this).val();

        if (font_change != 'Google Fonts') {
            $face_texts_input.hide();
        } else {
            $face_texts_input.show();
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
        $face_menu_header_input.show();
    }

    $font_menu_header_select.change(function() {

        var font_change = $(this).val();

        if (font_change != 'Google Fonts') {
            $face_menu_header_input.hide();
        } else {
            $face_menu_header_input.show();
        }
    });
    //end menu header


    // Script to hide show the input cat for panel services
    var $services_checkbox = $('#customize-control-solido_show_panel_services_control input:checkbox'),
        $services_is_checked = $services_checkbox.is(':checked'),
        $services_cat_input = $('#customize-control-solido_panel_services_control');
    console.log($services_is_checked);
    if ($services_is_checked) {
        $services_cat_input.show();
    } else {
        $services_cat_input.hide();
    }

    $services_checkbox.change(function() {

        var check_change = this.checked;

        if (check_change) {
            $services_cat_input.show();
        } else {
            $services_cat_input.hide();
        }
    });
    //end panel services

});