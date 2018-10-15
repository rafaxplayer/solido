<?php
/**
 * Template part for displaying related posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package solido
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
        <?php the_post_thumbnail('solido-services'); ?>
        <div class="info">
            <?php the_title( '<h2><a href="' . esc_url( get_permalink() ) . '" >', '</a></h2>' ); ?>
            <?php the_date('F j Y', '<span>', '</span>');?>
        </div>
	<!-- .post-thumbnail -->
</article>