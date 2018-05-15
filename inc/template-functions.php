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

if ( ! defined( 'ABSPATH' ) ) { exit; }

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

/**
 * Custom excerpt for index.php
 */
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

/**
 * Custom excerpt for front page
 */
if ( ! function_exists( 'solido_get_excerpt' ) ) :

	function solido_get_excerpt($num){
		$read_more = sprintf('<div class="more"><a href="%1$s">%2$s</a></div>',
				esc_url( get_permalink( get_the_ID() ) ),
				/* translators: %s: Name of current post */
				__( 'Read More', 'solido' ));
		echo wp_trim_words( get_the_excerpt(), $num, $read_more);
	}

endif;
/**
 * Add related post to single post
 */
if( ! function_exists( 'solido_related_posts' ) ) :

	function solido_related_posts(){

		if(!is_singular() || !get_theme_mod('solido_show_related_posts',true)){ return; }
		
		// get the user taxonomy select
		$taxonomy = get_theme_mod('solido_taxonomy_related_posts','category');
		
		$terms = get_the_terms( get_the_ID(), $taxonomy);
		$terms_ids = array();
		
		if( $terms ):
			foreach ($terms as $term): 
				$terms_ids[] = $term->term_id;
			endforeach;
		else:
			return;
		endif;

		// set query 
		$taxonomyQuery = $taxonomy =='category' ? array('category__in'=> $terms_ids) : array('tag__in'=> $terms_ids);
		
		$args = array(
			'posts_per_page'	=> 3,
			'post__not_in'		=>array(get_the_ID()),
			'orderby'			=>'rand'
		);
		array_unshift($args,$taxonomyQuery);
				
		$loop	= new WP_QUERY($args);

		if ( $loop->have_posts() ): ?>
			<h2 class="entry-title"><?php _e('Related Posts','solido');?></h2>
			<div class="related-posts">
				
				<?php while ( $loop->have_posts() ):
					$loop->the_post();
					get_template_part( '/template-parts/content', 'relatedposts'); 
									
				endwhile;?>
			</div>

    	<?php endif;
   		wp_reset_query();

	}
endif;

