<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package solido
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header space-top">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		
		
	</header><!-- .entry-header -->

	<?php solido_post_thumbnail(); ?>

	<div class="entry-content">
		<?php if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php
					solido_posted_on();
					solido_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="entry-footer">
		<?php solido_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
