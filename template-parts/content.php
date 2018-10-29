<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package solido
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php solido_posted_on(); ?>

	<?php 
		
		solido_post_thumbnail(); 
		$paddingtop = !has_post_thumbnail() ? 'space-top' : '';
	?>

	<header class="entry-header <?php echo $paddingtop; ?>">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;?>

		
	</header><!-- .entry-header -->

	

	<div class="entry-content">
		<?php
			if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php solido_posted_by(); ?>
			</div><!-- .entry-meta -->
			<?php
			endif; 
			if ( is_singular() ) :
				the_content( sprintf(
					wp_kses(
						
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'solido' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				) );
			else:
				solido_excerpt(30);
			endif;
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'solido' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php solido_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
