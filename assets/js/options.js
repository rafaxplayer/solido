jQuery(function($) {

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



});