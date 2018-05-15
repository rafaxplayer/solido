<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package solido
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

if ( ! function_exists( 'solido_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function solido_posted_on() {
		?>
		<div class="post-date">
			<a class="day" href="<?php echo esc_url(get_day_link(get_post_time('Y'), get_post_time('m'), get_post_time('j')));?>">
				<span><?php the_time('d'); ?></span>
			</a>
			<a class="moth" href="<?php echo esc_url(get_day_link(get_post_time('Y'), get_post_time('m'), get_post_time('j')));?>">
				<span><?php the_time('M'); ?></span>
			</a>
		</div>
		<?php
	}
endif;
if(!function_exists('solido_get_date')){
	function solido_get_date(){
		the_date('m d y', '<span>', '</span>');
	}
}
if ( ! function_exists( 'solido_posted_by' ) ) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function solido_posted_by() {
		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( 'by %s', 'post author', 'solido' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);

		echo '<span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.

	}
endif;

if ( ! function_exists( 'solido_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function solido_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'solido' ) );
			if ( $categories_list ) {
				
				printf( '<span class="cat-links"><i class="fas fa-folder"></i>&nbsp;%s</span>', $categories_list); 
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'solido' ) );
			if ( $tags_list ) {
				/* translators: 1: list of tags. */
				printf( '&nbsp;/&nbsp;<span class="tags-links"><i class="fas fa-tag"></i>&nbsp;%s</span>', $tags_list); 
			}
		}

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() > 0) ) {
			
			echo '&nbsp;/&nbsp;<span class="comments-link">';
			comments_popup_link( '', '<i class="far fa-comment"></i> 1', '<i class="far fa-comment"></i> %', '', '');
			echo '</span>';
		}

		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'solido' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			),
			'&nbsp;&nbsp;<span class="edit-link"><i class="fas fa-pencil-alt">&nbsp;</i>',
			'</span>'
		);
	}
endif;

if ( ! function_exists( 'solido_post_thumbnail' ) ) :
/**
 * Displays an optional post thumbnail.
 *
 * Wraps the post thumbnail in an anchor element on index views, or a div
 * element when on single views.
 */
function solido_post_thumbnail() {

	if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
		return;
	}

	if ( is_singular() ) :
	?>

		<div class="post-thumbnail">
			<?php the_post_thumbnail(); ?>
		</div><!-- .post-thumbnail -->

	<?php else : ?>
	
		<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true">
			<?php
				the_post_thumbnail( 'post-thumbnail', array(
					'alt' => the_title_attribute( array(
						'echo' => false,
					) ),
				) );
			?>
		</a>
	<?php endif; // End is_singular().
}
endif;




