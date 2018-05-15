<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package solido
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php endif; ?>
			<div class="blog-content">
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;?>
			</div>
		<?PHP
			the_posts_pagination( array(
				'prev_text'          => '<i class="fa fa-angle-left"></i> ' . esc_html__( 'Previous', 'solido' ),
				'next_text'          => esc_html__( 'Next', 'solido' ) . ' <i class="fa fa-angle-right"></i>',
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__( 'Page', 'solido' ) . ' </span>',
			) );

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
