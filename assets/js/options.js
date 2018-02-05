jQuery(function($) {

    // Script to show hide the Google Text Font input depending on the value of the Text select
    var font = $('#customize-control-typography_face_titles select').val();

    if (font != 'Google Fonts') {
        $('#customize-control-google_font_titles').hide();
    } else {
        $('#customize-control-google_font_titles').show();
    }

    $('#customize-control-typography_face_titles select').change(function() {
        var font_change = $(this).val();
        if (font_change != 'Google Fonts') {
            $('#customize-control-google_font_titles').hide();
        } else {
            $('#customize-control-google_font_titles').show();
        }
    });

    // Script to hide show the Google Heading Font input depending on value of the Heading select
    var font = $('#customize-control-typography_face_texts select').val();
    if (font != 'Google Fonts') {
        $('#customize-control-google_font_texts').hide();
    } else {
        $('#customize-control-google_font_texts').show();
    }
    $('#customize-control-typography_face_texts select').change(function() {
        var font_change = $(this).val();
        if (font_change != 'Google Fonts') {
            $('#customize-control-google_font_texts').hide();
        } else {
            $('#customize-control-google_font_texts').show();
        }
    });

});