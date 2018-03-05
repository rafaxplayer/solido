<?php

function solido_text_sanitization( $text ) {
	return sanitize_text_field( $text );
}

function solido_fontsize_sanitization($size){
	
	return $size . "px";

}

function solido_sanitize_checkbox($value){

	if('1'== $value){
		return true;
	}
	return false;

}

// darken hex color

function solido_darken_color($rgb, $darker=2) {

	$hash = (strpos($rgb, '#') !== false) ? '#' : '';
	$rgb = (strlen($rgb) == 7) ? str_replace('#', '', $rgb) : ((strlen($rgb) == 6) ? $rgb : false);
	if(strlen($rgb) != 6) return $hash.'000000';
	$darker = ($darker > 1) ? $darker : 1;

	list($R16,$G16,$B16) = str_split($rgb,2);

	$R = sprintf("%02X", floor(hexdec($R16)/$darker));
	$G = sprintf("%02X", floor(hexdec($G16)/$darker));
	$B = sprintf("%02X", floor(hexdec($B16)/$darker));

	return $hash.$R.$G.$B;
}

function solido_sanitize_url( $url ) {
	return esc_url_raw( $url );
}

function solido_sanitize_dropdown_pages( $page_id, $setting ) {
	// Ensure $input is an absolute integer.
	$page_id = absint( $page_id );
  
	// If $page_id is an ID of a published page, return it; otherwise, return the default.
	return ( 'publish' == get_post_status( $page_id ) ? get_permalink($page_id) : '#' );
}