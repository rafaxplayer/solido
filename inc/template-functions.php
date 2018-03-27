<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package solido
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function solido_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}
	// Add class on front page.
	if ( is_front_page() && 'posts' !== get_option( 'show_on_front' ) ) {
		$classes[] = 'solido-front-page';
	}
	return $classes;
}
add_filter( 'body_class', 'solido_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function solido_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'solido_pingback_header' );

if ( ! function_exists( 'solido_excerpt' ) ) :

	function solido_excerpt($num){

		$limit = $num + 1;

		$read_more = sprintf('<div class="more"><a href="%1$s">%2$s</a></div>',
			esc_url( get_permalink( get_the_ID() ) ),
        	/* translators: %s: Name of current post */
			__( 'Read More', 'solido' ));

		$excerpt = explode(' ', get_the_excerpt(), $limit);
			
		array_pop($excerpt);

		$excerpt = '<p>'.implode(" ",$excerpt).'...</p>'. $read_more;
	
		echo $excerpt; 
	}
endif;

function solido_get_excerpt($num){
	$read_more = sprintf('<div class="more"><a href="%1$s">%2$s</a></div>',
			esc_url( get_permalink( get_the_ID() ) ),
        	/* translators: %s: Name of current post */
			__( 'Read More', 'solido' ));

	echo wp_trim_words( get_the_excerpt(), $num, $read_more);
}



